<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_id']) || $_SESSION['logged_id'] !== 1) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Links</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 2rem;
        }

        .header {
            margin-bottom: 2rem;
            text-align: center;
        }

        .template-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 1.5rem;
            border: none;
            border-radius: 10px;
        }

        .template-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: linear-gradient(135deg, #2e7d32, #4caf50);
            /* Green gradient */
            color: white;
            border-radius: 10px 10px 0 0 !important;
            padding: 1rem 1.25rem;
        }

        .copy-btn {
            transition: all 0.3s;
        }

        .copied-message {
            opacity: 0;
            transition: opacity 0.3s;
        }

        .show-message {
            opacity: 1;
        }

        .link-input-group {
            margin-bottom: 1rem;
        }

        .view-btn {
            width: 100%;
            background-color: #4caf50;
            /* Green color */
            border-color: #4caf50;
        }

        .view-btn:hover {
            background-color: #388e3c;
            /* Darker green on hover */
            border-color: #388e3c;
        }

        .search-container {
            margin-bottom: 2rem;
        }

        .hidden {
            display: none !important;
        }

        .btn-outline-primary {
            border-color: #4caf50;
            color: #4caf50;
        }

        .btn-outline-primary:hover {
            background-color: #4caf50;
            color: white;
        }

        .text-primary {
            color: #2e7d32 !important;
            /* Dark green */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="Images/logo.png"
                style="height: auto; width: 200px; border-radius:20px; background: linear-gradient(135deg, #2e7d32, #4caf50); " />
                <br>
            <div class="container d-flex justify-content-end mb-3" style="margin-top: 10px;">
                <a href="logout.php" class="btn btn-outline-danger">
                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                </a>
            </div>

        </div>

        <div class="search-container">
            <div class="row justify-content-center">
                <h2 class="fw-bold text-primary"><i class="fas fa-file-alt me-2"></i>User Template Gallery</h2>
                <p class="lead text-muted">Browse and share your available templates</p>
                <div class="col-md-8">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                        <input type="text" id="templateSearch" class="form-control form-control-lg"
                            placeholder="Search templates...">
                        <button class="btn btn-outline-secondary" type="button" id="clearSearch">Clear</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="row" id="templateContainer">
            <?php
            // Get all PHP files in the templates folder
            $templates = array_filter(glob("templates/*.php"), function ($file) {
                $basename = basename($file);
                return !in_array($basename, ['index.php', 'config.php']); // Exclude files if needed
            });

            foreach ($templates as $template) {
                $template_name = basename($template, ".php");
                $full_url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/" . $template_name;
                $display_name = ucfirst($template_name);
                ?>
                <div class="col-md-6 col-lg-4 template-item" data-name="<?php echo strtolower($display_name); ?>">
                    <div class="card template-card shadow-sm">
                        <div class="card-header">
                            <h5 class="card-title mb-0"><i class="fas fa-file-code me-2"></i><?php echo $display_name; ?>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="link-input-group input-group mb-3">
                                <input type="text" class="form-control template-link" value="<?php echo $full_url; ?>"
                                    readonly>
                                <button class="btn btn-outline-primary copy-btn" onclick="copyTemplateLink(this)">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>
                            <span class="copied-message text-success"><i class="fas fa-check-circle me-1"></i>Copied!</span>
                            <a href="<?php echo $full_url; ?>" class="btn btn-primary view-btn">
                                <i class="fas fa-eye me-1"></i> View Template
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }

            if (empty($templates)) {
                echo '<div class="col-12 text-center py-5">
                        <div class="alert alert-warning">
                            <i class="fas fa-exclamation-triangle me-2"></i> No templates found in the templates directory
                        </div>
                      </div>';
            }
            ?>
        </div>

        <div id="noResults" class="col-12 text-center py-5 hidden">
            <div class="alert alert-warning">
                <i class="fas fa-exclamation-triangle me-2"></i> No templates match your search
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function copyTemplateLink(button) {
            const input = button.closest('.link-input-group').querySelector('.template-link');
            input.select();
            input.setSelectionRange(0, 99999);
            document.execCommand('copy');

            const message = button.closest('.card-body').querySelector('.copied-message');
            message.classList.add('show-message');

            button.innerHTML = '<i class="fas fa-check"></i>';
            button.classList.remove('btn-outline-primary');
            button.classList.add('btn-success');

            setTimeout(() => {
                message.classList.remove('show-message');
                button.innerHTML = '<i class="fas fa-copy"></i>';
                button.classList.remove('btn-success');
                button.classList.add('btn-outline-primary');
            }, 2000);
        }

        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('templateSearch');
            const clearButton = document.getElementById('clearSearch');
            const templateItems = document.querySelectorAll('.template-item');
            const noResults = document.getElementById('noResults');
            const templateContainer = document.getElementById('templateContainer');

            searchInput.addEventListener('input', function () {
                const searchTerm = this.value.toLowerCase();
                let hasVisibleItems = false;

                templateItems.forEach(item => {
                    const templateName = item.getAttribute('data-name');
                    if (templateName.includes(searchTerm)) {
                        item.classList.remove('hidden');
                        hasVisibleItems = true;
                    } else {
                        item.classList.add('hidden');
                    }
                });

                if (hasVisibleItems) {
                    noResults.classList.add('hidden');
                    templateContainer.classList.remove('hidden');
                } else {
                    templateContainer.classList.add('hidden');
                    noResults.classList.remove('hidden');
                }
            });

            clearButton.addEventListener('click', function () {
                searchInput.value = '';
                templateItems.forEach(item => item.classList.remove('hidden'));
                noResults.classList.add('hidden');
                templateContainer.classList.remove('hidden');
            });
        });
    </script>
</body>

</html>