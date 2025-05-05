<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template73</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .custom-card73 {
            border-radius: 15px;
            overflow: hidden;
            background: #EEF1FF;
            width: 400px;
            height: auto;
            margin-top: -55px;
        }

        .custom-header73 {
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
            margin-bottom: 60px;
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

        .custom-save-button73 {
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
            margin-bottom: 10px;
        }

        .custom-save-button73:hover {
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

        .gallery-section {
            padding: 20px;
        }

        .gallery-preview {
            gap: 10px;
        }

        .gallery-item {
            position: relative;
            width: 150px;
            height: 150px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-text {
            color: white;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }

        .image-preview-modal .modal-content {
            background: transparent;
            border: none;
        }

        .image-preview-modal .modal-body {
            padding: 0;
            position: relative;
        }

        .modal-image-container {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-preview-modal img {
            max-width: 90vw;
            max-height: 90vh;
            margin: auto;
            display: block;
            border-radius: 8px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
            animation: zoomIn 0.3s ease-out;
        }

        .modal-close-btn {
            position: absolute;
            top: -35px;
            right: -35px;
            color: white;
            font-size: 30px;
            cursor: pointer;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
            transition: transform 0.2s ease;
        }

        .modal-close-btn:hover {
            transform: scale(1.2);
        }

        .nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            font-size: 24px;
            padding: 10px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .nav-btn:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .prev-btn {
            left: 10px;
        }

        .next-btn {
            right: 10px;
        }

        .modal-backdrop.show {
            opacity: 0.9;
            background: #000;
            animation: fadeIn 0.3s ease-out;
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 0.9;
            }
        }

        @media (max-width: 768px) {
            .modal-close-btn {
                top: -25px;
                right: -25px;
                font-size: 24px;
            }

            .image-preview-modal img {
                max-width: 95vw;
                max-height: 95vh;
            }
        }

        .video-preview {
            gap: 15px;
        }

        .video-preview video {
            border: 2px solid #ddd;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .upload-container {
            position: relative;
            max-width: 300px;
            margin: 1rem auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modern-upload-btn {
            display: block;
            padding: 1.5rem 2rem;
            background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
            border-radius: 12px;
            color: white;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 2px solid transparent;
            text-align: center;
        }

        .modern-upload-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            background: linear-gradient(135deg, #8183f2 0%, #b966f8 100%);
        }

        .modern-upload-btn:active {
            transform: translateY(0);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .btn-content {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }

        .upload-icon {
            font-size: 2rem;
            transition: transform 0.3s ease;
        }

        .modern-upload-btn:hover .upload-icon {
            transform: translateY(-3px);
            animation: float 2s ease-in-out infinite;
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

        .hover-effect {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .modern-upload-btn:hover .hover-effect {
            opacity: 1;
        }

        .hidden-input {
            display: none;
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

        /* edit */
        .contact {
            background-color: #ffffff;
            border: none;
            color: black;
            transition: background 0.3s ease;
            padding: 10px 15px;
        }

        .contact-icon {
            font-size: 24px;
            color: #f2295b;
            transition: color 0.3s ease;
        }

        .contact:hover .contact-icon {
            color: #00ffcc;
        }

        .icon-text {
            color: rgb(0, 0, 0);
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            margin-left: 15px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5 template-73">
        <div class="card custom-card73 shadow-lg" style="background-color: #f0f0f0;">
            <div class="card-header custom-header73 text-center"
                style="background-image: url('#'); height: 100%; opacity: 1; border-bottom-width: 1px; border-bottom-right-radius: 40%; border-bottom-left-radius: 40%;">
                <p style="color: #000000; font-size: 25px; font-weight:bold;">Belgo Bekart Aremes</p>
                <img src="logo_img/main_logo/template15-l.png" alt="Company Logo" class="custom-logo"
                    style="width: 150px; opacity: 1;">
                <div class="profile-picture">
                    <img src="profile_img/main_profile/template15-p.png" alt="Saliya Pathum" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center" style="background-color: #f0f0f0; color: #000000;">
                <h2 class="card-title" style="font-size: 30px;">William Richard</h2>
                <p style="color: #000000; font-size: 20px;">Specialist</p>

                <button class="btn w-100 custom-save-button73" onclick="downloadVCard()">
                    <i class="fas fa-save me-2"></i>
                    SAVE TO CONTACTS
                </button>

                <div class="list-group mb-3">

                    <!-- Phone -->
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-start contact"
                        onclick="window.open('tel:0761231212', '_self')">
                        <i class="fas fa-phone contact-icon me-3"></i>
                        <p class="icon-text mb-0 text-truncate">Call</p>
                    </button>

                    <!-- Email -->
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-start contact"
                        onclick="window.open('mailto:youremail@yourwebsite.com', '_self')">
                        <i class="fas fa-envelope contact-icon me-3"></i>
                        <p class="icon-text mb-0 text-truncate">Email</p>
                    </button>

                    <!-- Website -->
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-start contact"
                        onclick="window.open('https://www.yourwebsiteaddress.com', '_blank')">
                        <i class="fas fa-globe contact-icon me-3"></i>
                        <p class="icon-text mb-0 text-truncate">Website</p>
                    </button>

                    <!-- Address -->
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-start contact"
                        onclick="window.open('https://www.google.com/maps/search/?api=1&query=919+Oaktree+Crescent,+Newmarket', '_blank')">
                        <i class="fas fa-map-marker-alt contact-icon me-3"></i>
                        <p class="icon-text mb-0 text-truncate">Location</p>
                    </button>

                </div>

                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px; color:rgb(110, 107, 107);">
                    CONNECT
                    WITH SOCIAL MEDIA
                </p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>

                <br>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function downloadVCard() {
            // Get contact information from the template
            const name = "William Richard";
            const title = "Specialist";
            const company = "Belgo Bekart Aremes";
            const phone = "0761231212";
            const email = "youremail@yourwebsite.com";
            const website = "https://www.yourwebsiteaddress.com";
            const address = "919 Oaktree Crescent, Newmarket";
            
            // Create the vCard content
            let vCardContent = "BEGIN:VCARD\n";
            vCardContent += "VERSION:3.0\n";
            vCardContent += `FN:${name}\n`;
            vCardContent += `ORG:${company}\n`;
            vCardContent += `TITLE:${title}\n`;
            
            if (phone) {
                vCardContent += `TEL;TYPE=WORK,VOICE:${phone}\n`;
            }
            
            if (email) {
                vCardContent += `EMAIL;TYPE=PREF,INTERNET:${email}\n`;
            }
            
            if (website) {
                vCardContent += `URL:${website}\n`;
            }
            
            if (address) {
                vCardContent += `ADR;TYPE=WORK,PREF:;;${address}\n`;
            }
            
            vCardContent += "END:VCARD";
            
            // Create a Blob with the vCard content
            const blob = new Blob([vCardContent], { type: "text/vcard" });
            const url = URL.createObjectURL(blob);
            
            // Create a temporary anchor element to trigger the download
            const a = document.createElement("a");
            a.href = url;
            a.download = `${name.replace(/\s+/g, '_')}.vcf`;
            document.body.appendChild(a);
            a.click();
            
            // Clean up
            setTimeout(() => {
                document.body.removeChild(a);
                window.URL.revokeObjectURL(url);
            }, 100);
        }
    </script>
</body>

</html>