<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.5;
            color: #333;
            background-image: url("banner_img/client_banner/infinity-b.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
        }

        .custom-card {
            border-radius: 15px;
            overflow: hidden;
            background: #EEF1FF;
            width: 450px;
            height: auto;
            margin-top: -55px;
            background-image: url("banner_img/client_banner/infinity-b.png");
        }

        .custom-header {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 35px 20px;
            position: relative;
            height: 200px;
        }

        .custom-logo {
            width: 200px;
            position: relative;
            top: 0;
            left: 0;
            margin-bottom: 40px;
        }

        .profile-picture {
            position: absolute;
            top: 95%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .profile-picture img {
            width: 130px;
            height: 130px;
            border: 4px solid #fff;
            border-radius: 50%;
        }

        .custom-button {
            font-weight: bold;
        }

        .social-icon {
            font-size: 1.9rem;
            transition: color 0.3s;
        }

        .list-group-item {
            background-color: #333;
            color: #fff;
            border-radius: 8px;
            margin-bottom: 10px;
            border: 1px solid #444;
            padding: 10px 15px;
        }

        .list-group-item:hover {
            background-color: #444;
            border-color: #666;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .custom-save-button {
            background: linear-gradient(90deg, #5f4def, #00d0ea);
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }

        .custom-save-button:hover {
            background: linear-gradient(90deg, #4b3ec4, #00b3c3);
        }

        .contact-icon {
            font-size: 1.5rem;
            color: #fffefe;
        }

        .custom-phone {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .custom-phone1 {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            transition: background-color 0.1s, border-color 0.1s;
        }

        .custom-phone1:hover {
            background-color: #25D366;
            border-color: #128C7E;
        }

        .text-container {
            text-align: center;
        }

        .main-text {
            display: block;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .sub-text {
            display: block;
            font-size: 0.9rem;
            opacity: 0.8;
            margin-top: 0.3rem;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(-3px);
            }

            50% {
                transform: translateY(3px);
            }
        }

        /* contact details */
        .contact {
            background-color: #373938;
        }

        /* Images section */
        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
            padding: 0 10px;
        }

        .image-gallery a {
            display: block;
            width: calc(50% - 10px);
            height: 150px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .image-gallery a:hover {
            transform: scale(1.03);
        }

        .image-gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
        }

        .section-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.2rem;
            color: white;
            text-align: center;
            margin: 15px 0;
            width: 100%;
            font-weight: bold;
        }

        @media (max-width: 480px) {
            .custom-card {
                width: 95%;
                margin-top: 20px;
            }

            .image-gallery a {
                width: calc(100% - 10px);
                height: 200px;
            }
        }

        /* Animation styles for MEMBER LOGIN */
        .login-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.2rem;
            color: white;
            text-align: center;
            margin: 15px 0;
            width: 100%;
            font-weight: bold;
            position: relative;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                text-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
            }

            50% {
                transform: scale(1.05);
                text-shadow: 0 0 15px rgba(255, 165, 0, 0.8);
                color: #FFA500;
            }

            100% {
                transform: scale(1);
                text-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
            }
        }

        .login-title::after {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 2px;
            background: linear-gradient(90deg, transparent, #FFA500, transparent);
            animation: linePulse 2s infinite;
        }

        @keyframes linePulse {
            0% {
                width: 50px;
                opacity: 0.5;
            }

            50% {
                width: 100px;
                opacity: 1;
            }

            100% {
                width: 50px;
                opacity: 0.5;
            }
        }

        /* New styles for sub-titles */
        .sub-login-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.1rem;
            color: #FFD700; /* Gold color for distinction */
            text-align: center;
            margin: 10px 0;
            width: 100%;
            font-weight: 600;
            position: relative;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .sub-login-title::after {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 2px;
            background: linear-gradient(90deg, transparent, #FFD700, transparent);
            
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">
            <!-- Social Media Links Section -->
            <div class="section-title">CONNECT WITH US</div>
            <div class="image-gallery">
                <a href="https://www.facebook.com/share/1C7CLaATZZ/" target="_blank">
                    <img src="gallery_img/client_gallerys/infinity/infinity-g1.png" alt="Business man back view">
                </a>
                <a href="https://www.facebook.com/share/1FsLHWFhoo/" target="_blank">
                    <img src="gallery_img/client_gallerys/infinity/infinity-g2.png" alt="Business man back view">
                </a>
                <a href="https://www.facebook.com/share/16DGCvLu4w/" target="_blank">
                    <img src="gallery_img/client_gallerys/infinity/infinity-g3.png" alt="Business man back view">
                </a>
                <a href="https://www.facebook.com/share/1Ezb3gkmxk/" target="_blank">
                    <img src="gallery_img/client_gallerys/infinity/infinity-g4.png" alt="Business man back view">
                </a>
                <a href="https://www.facebook.com/share/1ZdJEKbF1M/" target="_blank">
                    <img src="gallery_img/client_gallerys/infinity/infinity-g5.png" alt="Business man back view">
                </a>
                <a href="https://www.facebook.com/share/1EZNfaL3eX/" target="_blank">
                    <img src="gallery_img/client_gallerys/infinity/infinity-g6.png" alt="Business man back view">
                </a>
                <a href="https://www.facebook.com/share/15Efe7xeGr/" target="_blank">
                    <img src="gallery_img/client_gallerys/infinity/infinity-g7.png" alt="Business man back view">
                </a>
            </div>

            <!-- Website Links Section -->
            <div class="section-title">VISIT OUR WEBSITES</div>
            <div class="image-gallery">
                <a href="https://infinityroversnet.com/" target="_blank">
                    <img src="gallery_img/client_gallerys/infinity/infinity-g8.png" alt="Infinity Rovers Website">
                </a>
                <a href="https://synergysuccessacademy.lk/" target="_blank">
                    <img src="gallery_img/client_gallerys/infinity/infinity-g9.png"
                        alt="Synergy Success Academy Website">
                </a>
            </div>

            <!-- Login Section -->
            <div class="login-title">MEMBER LOGIN</div>
            <div class="sub-login-title">INFINITY ROVER POWER PLAN (I)</div>
            <div class="image-gallery">
                <a href="https://infinityrover.com/v2/profile/login" target="_blank">
                    <img src="gallery_img/client_gallerys/infinity/infinity-g11.png" alt="Member Login">
                </a>
            </div>
            <div class="sub-login-title">INFINITY ROVER POWER PLAN (II)</div>
            <div class="image-gallery">
                <a href="https://irpowerplan.com/acc/profile/sign-in" target="_blank">
                    <img src="gallery_img/client_gallerys/infinity/infinity-g10.png" alt="Member Login">
                </a>
            </div>
                <p style="color:rgb(255, 255, 255); font-size: 21px; text-transform: uppercase;text-align: center;">Supun Sandaruwan</p>
            <div class="list-group mb-3">
                <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact"
                    onclick="window.open('tel:0712112275', '_self')">
                    <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                    <span class="text-center flex-grow-1 text-truncate custom-phone"
                        style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">0712112275</span>
                </button>

                <a href="https://wa.me/94712112275" target="_blank" rel="noopener noreferrer"
                    style="text-decoration: none;">
                    <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center"
                        style="background-color: #25D366; color: white; height: 60px; border: 2px solid orange; border-radius: 10px; gap: 10px;">
                        <i class="fab fa-whatsapp" style="font-size: 50px; margin-right:30px;"></i>
                        <span style="font-size: 14px; font-family: 'Montserrat', sans-serif;">CONNECT WITH
                            WHATSAPP</span>
                    </button>
                </a>
            </div>

            <button class="btn w-100 custom-save-button" onclick="generateVCF()"
                style="font-family: 'Montserrat', sans-serif; font-size:19px; border: 2px solid orange;">
                <img src="Images/Social_Media_Icon/save.png" alt=""
                    style="width: 50px; height: 50px; margin-right:25px;">
                SAVE TO CONTACTS
            </button>
            <br>
            <footer style="text-align:center; padding:10px; font-size:14px; color:white;">
                <a href="https://tapilinq.com/" target="_blank" style="text-decoration:none; color:white;">
                    Made with ❤️ by Tapilinq | Click now
                </a>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function generateVCF() {
            // Create vCard content
            const vcard = `BEGIN:VCARD
VERSION:3.0
FN:Supun Sandaruwan
TEL;TYPE=CELL,VOICE:0712112275
TEL;TYPE=CELL,WHATSAPP:+94712112275
END:VCARD`;

            // Create a Blob with the vCard data
            const blob = new Blob([vcard], { type: 'text/vcard' });

            // Create a download link
            const url = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.href = url;
            link.download = 'thakshila_madushan.vcf';

            // Trigger the download
            document.body.appendChild(link);
            link.click();

            // Clean up
            document.body.removeChild(link);
            URL.revokeObjectURL(url);
        }
    </script>
</body>

</html>