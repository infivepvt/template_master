<?php
session_start();
include('db.php');

// Initialize session variable if not set
if (!isset($_SESSION['logged_id'])) {
    $_SESSION['logged_id'] = 0;
}

// Redirect if already logged in
if ($_SESSION['logged_id'] === 1) {
    header('Location: gallery');
    exit();
}

$error = '';
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $valid_email = 'infivellc@gmail.com';
    $valid_password = '12345';

    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION['logged_id'] = 1;
        $_SESSION['email'] = $email;
        header('Location: gallery');
        exit();
    } else {
        $error = 'Email or Password is incorrect.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login | Template Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: linear-gradient(135deg, #2e7d32, #4caf50);
            color: white;
            border-radius: 15px 15px 0 0;
            text-align: center;
            padding: 1.5rem;
        }

        .btn-login {
            background-color: #4caf50;
            border: none;
        }

        .btn-login:hover {
            background-color: #388e3c;
        }
    </style>
</head>

<body>
    <div class="login-wrapper">
        <div class="col-md-5 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <img src="Images/logo.png" alt="Logo" style="width: 120px; border-radius: 10px;  padding: 5px;">
                    <h4 class="mt-3 mb-0">Welcome to Template Gallery</h4>
                    <small class="text-light">Please log in to continue</small>
                </div>
                <div class="card-body p-4">
                    <?php if ($error): ?>
                        <div class="alert alert-danger text-center">
                            <i class="fas fa-exclamation-circle me-2"></i><?php echo $error; ?>
                        </div>
                    <?php endif; ?>
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-login w-100 text-white">
                            <i class="fas fa-sign-in-alt me-2"></i>Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>