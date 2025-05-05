<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .card-container12 {
            max-width: 400px;
            margin: auto;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            font-family: Arial, sans-serif;
        }

        /* Profile Header */
        .profile-header12 {
            padding: 30px;
            color: white;
        }

        .profile-image {
            width: 120px;
            height: 120px;
            border: 4px solid #fff;
        }

        .company-title {
            font-size: 1.2rem;
            margin-top: 15px;
        }

        .profile-name {
            font-size: 1.8rem;
            margin: 5px 0;
            font-weight: bold;
        }

        .job-title {
            font-size: 1rem;
            margin-top: 5px;
            color: #fff;
        }

        /* Contact Icons */
        .contact-icons .icon {
            font-size: 1.5rem;
            color: #ff1a1a;
            text-decoration: none;
            padding: 0 5px;
        }

        /* About Section */
        .about-section {
            background-color: #222;
            color: white;
            padding: 20px;
        }

        .about-section h5 {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .about-section p {
            font-size: 0.9rem;
            margin: 0;
        }

        /* Social Media Links */
        .social-links .icon {
            font-size: 1.5rem;
            color: #ff1a1a;
            text-decoration: none;
            padding: 0 5px;
        }

        /* Footer */
        .footer {
            background-color: #333333;
            padding: 10px;
            color: white;
            font-size: 0.9rem;
        }

        /* Gallery Styles */
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

        /* Image Preview Modal */
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

        /* Navigation Buttons */
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

        /* Backdrop effect */
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

        /* Mobile responsive adjustments */
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

        .document-upload-section {
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .custom-file-input:focus~.custom-file-label {
            border-color: #ff1a1a;
            box-shadow: 0 0 0 0.2rem rgba(255, 26, 26, 0.25);
        }

        .custom-file-label::after {
            content: "Browse";
            background-color: #ff1a1a;
            color: white;
            border-left: 1px solid #ff1a1a;
        }

        .btn-danger:disabled {
            background-color: #ff6666;
            border-color: #ff6666;
        }

        .profile-contact-icons12 {
            margin-top: 15px;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: center;
            gap: 20px;
            padding: 15px;
        }

        .profile-contact-icons12 .icon-item {
            flex: 0 0 calc(20% - 20px);
            box-sizing: border-box;
        }

        /* Upload Container Styles */
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

        .custom-save-button {
            background: rgb(92, 90, 90);
            color: rgb(255, 255, 255);
            font-weight: bold;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 15px;
        }

        /* editable */

        .contact-button {
            background-color: #418fe9;
            border-radius: 10px;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
        }

        .contact-icon {
            min-width: 20px;
            font-size: 1.5rem;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <div class="card-container12 text-center" style="background-color: #333333">
        <div class="profile-header12"
            style="background-color: #418fe9; padding: 20px; max-width: 100%; white-space: normal; overflow: visible; word-wrap: break-word;">
            <h2 class="profile-name"
                style="font-size: 30px; color:rgb(255, 255, 255); margin: 0; padding: 10px 0; white-space: normal; word-wrap: break-word;">
                John Doe
            </h2>
            <p class="job-title"
                style="color: #000000; font-size: 20px; margin: 0; padding: 10px 0; white-space: normal; word-wrap: break-word;">
                CEO
            </p>
            <div class="profile-header12">
                <img src="profile_img/main_profile/template14-p.png" alt="Saliya Pathum" class="rounded-circle"
                    style="width: 200px; border: 5px solid white;">
            </div>
            <p class="company-title"
                style="margin: 0; padding: 0; white-space: normal; word-wrap: break-word; font-size: 23px; line-height: 1.5; text-decoration: underline; text-transform: uppercase;">
                Infive
            </p>

        </div>

        <div class="profile-contact-icons12"
            style="background-color: white; margin-top: 0; display: flex; justify-content: center; align-items: center; gap: 10px;">

            <button type="button" class="contact-button" onclick="window.open('tel:', '_self')">
                <i class="fas fa-phone contact-icon" style="transform: rotate(90deg);"></i>
            </button>

            <button type="button" class="contact-button" onclick="window.open('tel:', '_self')">
                <i class="fas fa-fax contact-icon" style="transform: rotate(90deg);"></i>
            </button>

            <button type="button" class="contact-button" onclick="window.open('tel:', '_self')">
                <i class="fas fa-mobile-alt contact-icon"></i>
            </button>

            <button type="button" class="contact-button" onclick="window.open('tel:', '_self')">
                <i class="fas fa-mobile-alt contact-icon"></i>
            </button>

            <button type="button" class="contact-button" onclick="window.open('mailto:', '_self')">
                <i class="fas fa-envelope contact-icon"></i>
            </button>

            <button type="button" class="contact-button" onclick="window.open('mailto:', '_self')">
                <i class="fas fa-envelope contact-icon"></i>
            </button>

            <button type="button" class="contact-button" onclick="window.open('mailto:', '_self')">
                <i class="fas fa-envelope contact-icon"></i>
            </button>

            <button type="button" class="contact-button"
                onclick="window.open('https://www.yourwebsiteaddress.com', '_blank')">
                <i class="fas fa-globe contact-icon"></i>
            </button>

            <button type="button" class="contact-button" onclick="window.open('https://', '_blank')">
                <i class="fas fa-globe contact-icon"></i>
            </button>

            <button type="button" class="contact-button" onclick="window.open('https://', '_blank')">
                <i class="fas fa-globe contact-icon"></i>
            </button>

            <button type="button" class="contact-button"
                onclick="window.open('https://www.google.com/maps/search/?api=1&query=919%20Oaktree%20Crescent%2C%20Newmarket', '_blank')">
                <i class="fas fa-map-marker-alt contact-icon"></i>
            </button>

            <button type="button" class="contact-button"
                onclick="window.open('https://www.google.com/maps/search/?api=1&query=', '_blank')">
                <i class="fas fa-map-marker-alt contact-icon"></i>
            </button>
        </div>


        <div style="height: 20px; background-color: #333333; margin-top: 0;"></div>

        <div class="about-section" style="background-color:#333333;">
            <h5>About Us</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam,</p>
        </div>
        <!-- images -->
        <div class="about-image-section" style="background-color: #333333; padding: 20px;">
            <img src="gallery_img/main_gallerys/t6g1.jpg" alt="About Us Image"
                style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
        </div>
        <div class="about-image-section" style="background-color: #333333; padding: 20px;">
            <img src="gallery_img/main_gallerys/t6g2.jpg" alt="About Us Image"
                style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
        </div>

        <p class="fw" style="color: white;">CONNECT WITH SOCIAL MEDIA</p>
        <div class="social-media-section">
            <div class="d-flex flex-wrap justify-content-center">
                <a href="#" target="_blank" rel="noopener noreferrer" class="m-1">
                    <i class="fab fa-facebook" style="color: #418fe9; font-size: 2rem;"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="m-1">
                    <i class="fab fa-instagram" style="color: #418fe9; font-size: 2rem;"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="m-1">
                    <i class="fab fa-twitter" style="color: #418fe9; font-size: 2rem;"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="m-1">
                    <i class="fab fa-linkedin" style="color: #418fe9; font-size: 2rem;"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="m-1">
                    <i class="fab fa-youtube" style="color: #418fe9; font-size: 2rem;"></i>
                </a>
            </div>
        </div>
        <br>
        <button class="btn w-100 custom-save-button" onclick="downloadVCard()">
            <i class="fas fa-save me-2"></i>
            SAVE TO CONTACTS
        </button>
        <br>
        <div class="footer">
            <p>All rights reserved</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function downloadVCard() {
            // Get the contact information from your template
            const name = "John Doe"; // Replace with dynamic value if needed
            const title = "CEO";     // Replace with dynamic value if needed
            const company = "Infive"; // Replace with dynamic value if needed
            const phone = "";        // Add phone number if available
            const email = "";        // Add email if available
            const website = "";     // Add website if available
            const address = "";      // Add address if available
            
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