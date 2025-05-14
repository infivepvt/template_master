<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .card-container8 {
            max-width: 400px;
            margin: auto;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            font-family: Arial, sans-serif;
        }

        /* Profile Header */
        .profile-header8 {
            padding: 30px;
            color: white;
        }

        .profile-image {
            width: 120px;
            height: 120px;
            border: 4px solid #fff;
            margin-top: 20px;
        }

        .company-title8 {
            font-size: 1rem;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .profile-name8 {
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
            background-color: #222;
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

        .profile-contact-icons8 {
            margin-top: 15px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;
            gap: 40px;
            padding: 15px;
            width: 100%;
        }

        .profile-contact-icons1 .icon-item {
            flex: 0 0 calc(20% - 20px);
            box-sizing: border-box;
        }

        /* Upload container styles */
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

        /* Logo container */
        /* Logo container */
        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px auto;
            /* centers horizontally, adds bottom margin */
            width: 230px;
            height: 90px;
        }

        /* Logo image styling */
        .custom-logo {
            object-fit: contain;
            width: 100%;
            height: 100%;
        }


        /* Custom save button */
        .custom-save-button {
            background-color: #ff5b13;
            color: white;
            border: none;
            padding: 10px;
            font-weight: bold;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .custom-save-button:hover {
            background-color: #ff5b13;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* edit */
        .profile-contact-icons {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 20px;
            /* Increase spacing between icons */
            padding: 10px;
            border-radius: 10px;
            background-color: transparent;
        }

        /* Common button styles */
        .icon-button {
            border: none;
            cursor: pointer;
            padding: 10px;
            border-radius: 50%;
            background-color: #ff5b13;
            width: 40px;
            height: 40px;
        }

        /* Icon styles */
        .icon {
            color: rgb(255, 255, 255);
            font-size: 20px;
        }

        /* Social */
        .social-media-button {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 12px;
            border-radius: 25px;
            color: #000;
            text-decoration: none;
            transition: background-color 0.3s;
            width: 100%;
            max-width: 350px;
            background-color: rgb(255, 255, 255);
        }

        .text-wrapper {
            text-align: left;
            margin-left: 16px;
        }

        .platform-name {
            font-weight: bold;
            color: #000;
            font-size: 16px;
            font-family: Roboto, sans-serif;
        }

        .user-name {
            color: rgb(32, 130, 243);
            font-size: 16px;
            font-family: Roboto, sans-serif;
        }
    </style>
</head>

<body>
    <div class="card-container8 text-center template-8" style="background-color: #001160;">
        <br>
        <!-- Company Logo -->
        <div class="rounded-circle logo-container">
            <img src="logo_img/main_logo/template20-l.png" alt="Company Logo" class="custom-logo"
                style="width: 100%; opacity: 1;">
        </div>

        <div
            style="background-color:#ff5b13; border-radius: 30px; max-width: 95%; margin: 0 auto; position: relative; overflow: hidden;">
            <br>
            <div>
                <h2 class="card-title"
                    style="font-size: 30px; margin: 0; padding: 0; color:rgb(255, 255, 255); text-transform: uppercase;">
                    LINDA JOHNSON
                </h2>
                <p class="company-title8"
                    style="color:rgb(255, 255, 255); font-size: 20px; margin: 0; padding: 0; white-space: normal; word-wrap: break-word;">
                    Owner/CEO
                    <!-- <br>Infive -->
                </p>

                <!-- Profile Header -->
                <div style="margin-top: 20px; position: relative;">
                    <img src="profile_img/main_profile/template20-p.jpg" alt="Linda"
                        style="max-width: 100%; margin: 0 auto;">
                </div>
            </div>
            <div class="profile-contact-icons">
                <button class="icon-button email-btn" onclick="window.open('mailto:', '_self')">
                    <i class="fas fa-envelope icon"></i>
                </button>
                <button class="icon-button phone-btn" onclick="window.open('tel:', '_self')">
                    <i class="fas fa-phone icon"></i>
                </button>
                <button class="icon-button whatsapp-btn" onclick="window.open('https://wa.me/', '_blank')">
                    <i class="fab fa-whatsapp icon"></i>
                </button>
            </div>

        </div>

        <!-- SocialLinks -->
        <div class="profile-contact-icons8"
            style="display: grid; grid-template-columns: repeat(1, 1fr); justify-content: center; gap: 20px;">
            <a href="#" class="social-media-button">
                <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 40px; height: 40px;">
                <div class="text-wrapper">
                    <span class="platform-name">Facebook</span>
                    <br>
                    <span class="user-name">Linda Johnson</span>
                </div>
            </a>
            <a href="#" class="social-media-button">
                <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 40px; height: 40px;">
                <div class="text-wrapper">
                    <span class="platform-name">Instagram</span>
                    <br>
                    <span class="user-name">Linda Johnson</span>
                </div>
            </a>
            <a href="#" class="social-media-button">
                <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 40px; height: 40px;">
                <div class="text-wrapper">
                    <span class="platform-name">Tiktok</span>
                    <br>
                    <span class="user-name">Linda Johnson</span>
                </div>
            </a>

        </div>

        <!-- Custom Fields -->
        <!-- Custom fields section would be dynamically inserted here -->

        <!-- YouTube Video Section -->
        <!-- YouTube section would be dynamically inserted here -->

        <!-- Gallery Section -->
        <!-- Gallery section would be dynamically inserted here -->

        <!-- Video Section -->
        <!-- Video section would be dynamically inserted here -->

        <br>
        <button class="btn w-100 custom-save-button" id="saveContactBtn">
            <i class="fas fa-save me-2"></i>
            SAVE TO CONTACTS
        </button>
        <br>

        <!-- Image Preview Modal would be dynamically inserted here -->
        <!-- Video Modal would be dynamically inserted here -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('saveContactBtn').addEventListener('click', function() {
            // Create vCard content
            const vCardContent = `BEGIN:VCARD
VERSION:3.0
FN:Linda Johnson
ORG:Owner/CEO
TITLE:Owner/CEO
PHOTO;VALUE=URL;TYPE=JPEG:profile_img/main_profile/template20-p.jpg
LOGO;VALUE=URL;TYPE=PNG:logo_img/main_logo/template20-l.png
EMAIL;TYPE=work:
TEL;TYPE=work,voice:
URL;TYPE=facebook:
URL;TYPE=instagram:
URL;TYPE=tiktok:
END:VCARD`;

            // Create a Blob with the vCard content
            const blob = new Blob([vCardContent], { type: 'text/vcard' });
            
            // Create a download link
            const url = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.href = url;
            link.download = 'Linda_Johnson.vcf';
            
            // Trigger the download
            document.body.appendChild(link);
            link.click();
            
            // Clean up
            document.body.removeChild(link);
            URL.revokeObjectURL(url);
        });
    </script>
</body>

</html>