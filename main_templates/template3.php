<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Card Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .ba {
            background-color: black;
        }

        /* Container for the grid */
        .list-group1 {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            gap: 20px;
            margin-left: 14px;
            background-color: black;
        }

        /* Style for each grid item */
        .list-group1 .col-12 {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px;
            border-radius: 8px;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .list-group1 .col-12:hover {
            transform: scale(1.25);
        }

        /* Icon styles */
        .contact-icon1 {
            font-size: 2rem;
            color: white;
            margin-bottom: 10px;
        }

        /* Text style */
        .list-group1 .col-12 span {
            color: white;
            font-size: 1rem;
            text-align: center;
            margin-top: 5px;
        }

        .horizontal-line {
            width: 100%;
            height: 2px;
            background-color: #ccc;
            margin: 20px 0;
        }

        .card-title1 {
            color: azure;
            margin-left: 40%;
            margin-top: -40px;
        }

        .text-muted1 {
            color: azure;
            margin-left: 40%;
        }

        .custom-header {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 35px 20px;
            position: relative;
        }

        .custom-logo {
            width: 200px;
            position: relative;
            top: 0;
            left: 0;
            margin-bottom: 40px;
        }

        .top {
            position: absolute;
            left: 20%;
            transform: translate(-50%, -50%);
            margin-top: 25px;
        }

        .top img {
            width: 130px;
            height: 130px;
        }


        .custom-button {
            font-weight: bold;
        }

        .social-icon {
            font-size: 1.9rem;
            transition: color 0.3s;
        }

        /* Specific colors for each social media icon */
        .icon-instagram {
            color: #E4405F;
        }

        .icon-facebook {
            color: #1877F2;
        }

        .icon-youtube {
            color: #FF0000;
        }

        .icon-tiktok {
            color: #010101;
        }

        .icon-twitter {
            color: #1DA1F2;
        }

        .icon-snapchat {
            color: #FFFC00;
        }

        .icon-pinterest {
            color: #E60023;
        }

        .icon-linkedin {
            color: #0A66C2;
        }

        .social-icon-row {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-bottom: 5px;
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
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
            cursor: pointer;
        }

        .custom-save-button:hover {
            background: linear-gradient(90deg, #4b3ec4, #00b3c3);
        }

        .save-icon {
            width: 24px;
            height: 24px;
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
        }

        .custom-phone1 {
            transition: background-color 0.1s, border-color 0.1s;
        }

        .custom-phone1:hover {
            background-color: #25D366;
            border-color: #128C7E;
        }

        /* Additional styles for the template */
        .card {
            width: 100%;
            max-width: 600px;
            border-radius: 15px;
            overflow: hidden;
        }

        .gallery-preview {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        .gallery-item {
            width: 100px;
            height: 100px;
            position: relative;
            cursor: pointer;
            overflow: hidden;
            border-radius: 8px;
        }

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .gallery-item:hover .gallery-image {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .video-preview {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        .video-item {
            width: 300px;
            height: 190px;
            position: relative;
            cursor: pointer;
            overflow: hidden;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .video-item video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .video-item:hover {
            transform: scale(1.05);
        }

        .video-item:hover .video-overlay {
            opacity: 1;
        }

        .youtube-video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .youtube-video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .modal-close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 2rem;
            color: white;
            cursor: pointer;
            z-index: 10;
        }

        .modal-image-container {
            position: relative;
            width: 100%;
            height: 80vh;
        }

        .modal-image-container img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .prev-btn {
            left: 10px;
        }

        .next-btn {
            right: 10px;
        }

        .fw {
            font-weight: bold;
            text-align: center;
            margin: 20px 0;
            color: #333;
        }

        /* group Edit */

        .contact {
            min-width: 20px;
            font-size: 1.5rem;
            color: rgb(255, 255, 255);
        }

        .icon-text {
            font-size: 1.2rem;
            color: rgb(248, 248, 248);
        }
    </style>
</head>

<body>
    <div class="justify-content-center  padding:0;">
        <div class="card custom-card shadow-lg ba" style="background-color:#d1d1d1; border-radius: 0;">
            <div class="card-header custom-header text-center"
                style="background-color:#d1d1d1; height: 150px; opacity: 1;">
                <img src="logo_img/main_logo/template3-l.png" alt="Company Logo" class="custom-logo"
                    style="width: 100px; opacity: 1;">
            </div>

            <div class="card-body text-center" style="background-color: #000000; color:rgb(255, 255, 255);">
                <br>
                <div class="top">
                    <img src="profile_img/main_profile/template3-p.jpg" alt="no name">
                </div>

                <h2 class="card-title1" style="font-size: 30px; color:rgb(255, 255, 255);margin-top: 2px;">Chris M.
                    Laflamme</h2>


                <br>
                <!-- <a href="https://wa.me/0761231212" target="_blank" rel="noopener noreferrer">
                    <button class="btn w-100 mb-3 custom-phone1" style="background-color: #25D366; color: white; height: 60px; border: 2px solid orange; border-radius: 30px;">
                        <i class="fab fa-whatsapp me-2" style="font-size: 40px;"></i>
                        CONNECT WITH WHATSAPP
                    </button>
                </a> -->

                <div class="horizontal-line"></div>

                <div class="list-group1 mb-4 row g-3" style="background-color: #000000;">
                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="tel:0761231212" class="icon d-flex align-items-center justify-content-center"
                            style="text-decoration: none;">
                            <i class="fas fa-phone contact-icon me-2 contact"></i>
                        </a>
                        <p class="icon-text">Call</p>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="tel:" class="icon d-flex align-items-center justify-content-center"
                            style="text-decoration: none;">
                            <i class="fas fa-fax contact-icon me-2 contact"></i>
                        </a>
                        <p class="icon-text">Mobile</p>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="tel:" class="icon d-flex align-items-center justify-content-center"
                            style="text-decoration: none;">
                            <i class="fas fa-mobile-alt contact-icon me-2 contact"></i>
                        </a>
                        <p class="icon-text">Mobile2</p>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="tel:" class="icon d-flex align-items-center justify-content-center"
                            style="text-decoration: none;">
                            <i class="fas fa-mobile-alt contact-icon me-2 contact"></i>
                        </a>
                        <p class="icon-text">Mobile3</p>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="mailto:youremail@yourwebsite.com"
                            class="icon d-flex align-items-center justify-content-center"
                            style="text-decoration: none;">
                            <i class="fas fa-envelope contact-icon me-2 contact"></i>
                        </a>
                        <p class="icon-text">Email</p>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="mailto:" class="icon d-flex align-items-center justify-content-center"
                            style="text-decoration: none;">
                            <i class="fas fa-envelope contact-icon me-2 contact"></i>
                        </a>
                        <p class="icon-text">Email2</p>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="mailto:" class="icon d-flex align-items-center justify-content-center"
                            style="text-decoration: none;">
                            <i class="fas fa-envelope contact-icon me-2 contact"></i>
                        </a>
                        <p class="icon-text">Email3</p>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="http://www.yourwebsiteaddress.com"
                            class="icon d-flex align-items-center justify-content-center"
                            style="text-decoration: none;">
                            <i class="fas fa-globe contact-icon me-2 contact"></i>
                        </a>
                        <p class="icon-text">Website</p>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="http://" class="icon d-flex align-items-center justify-content-center"
                            style="text-decoration: none;">
                            <i class="fas fa-globe contact-icon me-2 contact"></i>
                        </a>
                        <p class="icon-text">Website2</p>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="http://" class="icon d-flex align-items-center justify-content-center"
                            style="text-decoration: none;">
                            <i class="fas fa-globe contact-icon me-2 contact"></i>
                        </a>
                        <p class="icon-text">Website3</p>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="#" class="icon d-flex align-items-center justify-content-center"
                            style="text-decoration: none;">
                            <i class="fas fa-map-marker-alt contact-icon me-2 contact"></i>
                        </a>
                        <p class="icon-text">Address</p>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="#" class="icon d-flex align-items-center justify-content-center"
                            style="text-decoration: none;">
                            <i class="fas fa-map-marker-alt contact-icon me-2 contact"></i>
                        </a>
                        <p class="icon-text">Address2</p>
                    </div>
                </div>


                <p class="fw" style="color: white;">CONNECT WITH SOCIAL MEDIA</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <!-- Social media icons would go here -->
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-1">
                        <i class="fab fa-facebook social-icon icon-facebook"></i>
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-1">
                        <i class="fab fa-instagram social-icon icon-instagram"></i>
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-1">
                        <i class="fab fa-twitter social-icon icon-twitter"></i>
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-1">
                        <i class="fab fa-linkedin social-icon icon-linkedin"></i>
                    </a>
                </div>
                <br>

                <button id="saveContactBtn" class="btn w-100 custom-save-button">
                    <i class="fas fa-save me-2"></i>
                    SAVE TO CONTACTS
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        //Manual fill
        document.getElementById('saveContactBtn').addEventListener('click', function () {
            // Create vCard content
            const vCardContent = `BEGIN:VCARD
VERSION:3.0
FN:Chris M. Laflamme
TEL:0761231212
EMAIL:youremail@yourwebsite.com
URL:http://www.yourwebsiteaddress.com
ADR:;;Your Address;;;;
NOTE:Business Contact
END:VCARD`;

            // Create a Blob with the vCard content
            const blob = new Blob([vCardContent], { type: 'text/vcard' });

            // Create a download link
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'Chris_Laflamme.vcf';

            // Trigger the download
            document.body.appendChild(a);
            a.click();

            // Clean up
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        });
    </script>
</body>

</html>