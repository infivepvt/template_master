<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twilight QueenBee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Montserrat', sans-serif;
            margin-top: -50px;
            margin-bottom: 10px;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            flex-direction: column;
        }

        .d-flex.justify-content-center.mt-5 {
            width: 100%;
            justify-content: center;
            margin-top: 2rem !important;
        }

        .custom-card {
            border-radius: 5px;
            overflow: hidden;
            background: #FFFFFF;
            width: 500px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: relative;
            display: flex;
            flex-direction: column;
            padding-bottom: 100px;
            padding-top: 1px;
        }

        .profile-header {
            display: flex;
            align-items: center;
            padding: 20px 25px;
            gap: 20px;
            margin-top: 50px;
        }

        .profile-picture-container {
            width: 165.5px;
            height: 165.5px;
            border-radius: 50%;
            border: 3px solid #fff;
            box-shadow: 0 0 0 2px #E0E0E0;
            overflow: hidden;
            flex-shrink: 0;
            position: static;
            top: auto;
            left: auto;
            transform: none;
        }

        .profile-picture-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .profile-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            flex-grow: 1;
            text-align: left;
        }

        .profile-name {
            font-family: 'Poppins', sans-serif;
            font-size: 23px;
            color: #000000;
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 2px;
        }

        .profile-handle {
            font-family: 'Roboto', sans-serif;
            font-size: 13px;
            color: #7A7A7A;
            margin-bottom: 15px;
        }

        .stats-and-follow {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-wrap: wrap;
            padding: 0;
        }

        .stats {
            display: flex;
            gap: 15px;
            margin-right: 20px;
        }

        .stat-item {
            text-align: left;
        }

        .stat-number {
            font-family: 'Roboto', sans-serif;
            font-size: 13px;
            font-weight: 700;
            color: #000000;
        }

        .stat-label {
            font-family: 'Roboto', sans-serif;
            font-size: 12px;
            color: #000000;
        }

        .follow-button {
            background-color: #18B4FF;
            color: #FFFFFF;
            border: none;
            padding: 2px 15px;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .follow-button:hover {
            background-color: #007bbd;
        }

        .description-section {
            padding: 0 25px 25px;
            line-height: 1.5;
            text-align: center;
            margin-bottom: 0;
        }

        .description-section p:first-child {
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            color: #000000;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .description-section p:last-child {
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            color: #000000;
            margin-bottom: 0;
        }

        /* --- Color Swatches with Images --- */
        .color-swatches {
            display: flex;
            justify-content: center;
            gap: 15px;
            padding: 0 25px 25px;
            border-bottom: 1px solid #eee;
            margin-bottom: 20px;
        }

        .color-swatch-item {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid #ccc;
            background-color: #f8f8f8;
        }

        .color-swatch-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .contact-info-section {
            padding: 0 25px 25px;
            text-align: center;
            padding-bottom: 0;
            margin-bottom: 0;
        }

        .website-link {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            color: #000000;
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 10px;
            display: block;
        }

        .phone-number {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            color: #000000;
            text-decoration: none;
            display: block;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .gallery-section {
            padding: 0 10px 20px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            flex-grow: 1;
            align-content: flex-start;
        }

        .gallery-item img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .bottom-nav {
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
            width: 100%;
            box-sizing: border-box;
            margin-top: 20px;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: #000000;
            cursor: pointer;
            flex: 1;
            justify-content: center;
        }

        .nav-item i {
            font-size: 1.6rem;
        }

        .nav-item:hover {
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card">

            <div class="profile-header">
                <div class="profile-picture-container">
                    <img src="profile_img/main_profile/template41-p.png" alt="Profile Picture">
                </div>
                <div class="profile-info">
                    <h2 class="profile-name">Twilight QueenBee</h2>
                    <p class="profile-handle">@twilightqueenbee</p>

                    <div class="stats-and-follow">
                        <div class="stats">
                            <div class="stat-item">
                                <div class="stat-number">1000+</div>
                                <div class="stat-label">Post</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">5000+</div>
                                <div class="stat-label">Followers</div>
                            </div>
                            <br><br>
                        </div>
                        <button class="follow-button">Follow Me</button>
                    </div>
                </div>
            </div>

            <div class="description-section">
                <p><b>Emma | Nail Tech | Manicure & Pedicure</b></p>
                <p>After the nail care, it’s all about excellent color and art. The nail art is the whipped cream on top.</p>
            </div>

            <div class="color-swatches">
                <div class="color-swatch-item">
                    <img src="gallery_img/main_gallerys/temp41-04.png" alt="Red Nails">
                </div>
                <div class="color-swatch-item">
                    <img src="gallery_img/main_gallerys/temp41-05.png" alt="Nude Look">
                </div>
                <div class="color-swatch-item">
                    <img src="gallery_img/main_gallerys/temp41-06.png" alt="Dark Matte">
                </div>
                <div class="color-swatch-item">
                    <img src="gallery_img/main_gallerys/temp41-07.png" alt="Blue Sparkle">
                </div>
            </div>

            <div class="contact-info-section">
                <a href="https://www.twilightqueenbee.com" class="website-link" target="_blank">www.twilightqueenbee.com</a>
                <p class="phone-number">021-3 3456 785</p>
            </div>

            <div class="gallery-section">
                <div class="gallery-item">
                    <img src="gallery_img/main_gallerys/temp41-01.png" alt="Nails 1">
                </div>
                <div class="gallery-item">
                    <img src="gallery_img/main_gallerys/temp41-02.png" alt="Nails 2">
                </div>
                <div class="gallery-item">
                    <img src="gallery_img/main_gallerys/temp41-03.png" alt="Nails 3">
                </div>
            </div>

            <div class="bottom-nav">
                <a href="#" class="nav-item">
                    <i class="fas fa-th"></i> </a>
                <a href="#" class="nav-item">
                    <i class="fas fa-home"></i>
                </a>
                <a href="#" class="nav-item">
                    <i class="fas fa-phone"></i>
                </a>
                <a href="#" class="nav-item">
                    <i class="fas fa-video"></i>
                </a>
                <a href="#" class="nav-item">
                    <i class="fas fa-id-card"></i>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function generateVCF() {
            const contactData = {
                firstName: "Emma",
                lastName: "",
                title: "Nail Tech",
                phoneWork: "02133456785",
                phoneMobile: "",
                email: "",
                website: "www.twilightqueenbee.com",
                address: "",
                about: "Emma | Nail Tech | Manicure & Pedicure. After the nail care, it's all about excellent color and art. The nail art is the whipped cream on top.",
            };

            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
EMAIL:${contactData.email}
URL:${contactData.website}
NOTE:${contactData.about}
END:VCARD`;

            const blob = new Blob([vcfContent], {
                type: 'text/vcard'
            });
            const url = URL.createObjectURL(blob);

            const a = document.createElement('a');
            a.href = url;
            a.download = `${contactData.firstName}.vcf`;
            document.body.appendChild(a);
            a.click();

            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        }
    </script>
</body>

</html>