<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template13</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .card-container13 {
            max-width: 450px;
            margin: auto;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            font-family: Arial, sans-serif;
        }

        /* Profile Header */
        .profile-header13 {
            padding: 30px;
            color: white;
        }

        .profile-image {
            width: 120px;
            height: 120px;
            border: 4px solid #fff;
            margin-top: 20px;
        }

        .company-title13 {
            font-size: 1rem;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .profile-name13 {
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

        .profile-contact-icons13 {
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

        /* group Edit */
        .profile-contact-icons13 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            justify-content: center;
            gap: 25px;
        }

        .contact-icon-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-icon-button {
            background-color: #6c62ab;
            border-radius: 10px;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
        }

        .contact-icon-label {
            margin-top: 5px;
            font-size: 0.8rem;
            color: #FFFFFF;
            text-align: center;
            width: 90px;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: #FFFFFF;
        }

        .rotated-90 {
            transform: rotate(90deg);
        }

        .rotated-0 {
            transform: rotate(0deg);
        }

        .custom-save-button {
      width: 100%;
      background-color: #6c62ab;

      color: white;
      border: none;
      padding: 15px;
      font-weight: bold;
    }

    .custom-save-button:hover {
      background-color: #229936;
    }
    </style>
</head>

<body>
    <div class="card-container13 text-center template-13" style="background-color: #FFFFFF;">
        <!-- Profile Header -->
        <div class="profile-header13" style="color: #000000; height: 110px;">
            <img src="profile_img/main_profile/template7-p.jpg" alt="Saliya Pathum"
                style="width: 150px; border-radius: 50px 50px 50px 0px;">
        </div>
        <br>
        <div class="profile-header13"
            style="background-color: #FFFFFF; border-radius: 30px; max-width: 95%; margin: 0 auto; padding: 20px; margin-top: 10px; white-space: normal; overflow: visible; word-wrap: break-word;">
            <br><br>
            <h2 class="card-title"
                style="font-size: 30px; margin: 0; padding: 0; color: #000000; font-family: 'Roboto', sans-serif;">
                Emma Ava
            </h2>
            <p class="company-title13"
                style="color: #dd4af1; font-size: 20px; margin: 0; padding: 0; white-space: normal; word-wrap: break-word;">
                CHIEF TECHNOLOGY OFFICER<br>
            </p>
            <br>
            <div class="card-header custom-header text-center" style="background-color: #FFFFFF;">
                <img src="logo_img/main_logo/template99-l.png" alt="Company Logo" class="custom-logo"
                    style="width: 100%; opacity: 1;">
            </div>
        </div>

        <!-- Contact Icons -->
        <div class="profile-header13"
            style="background-color: #FFFFFF; border-radius: 30px; max-width: 95%; margin: 0 auto; padding: 20px; margin-top: -50px;">
            <div class="profile-contact-icons13">
                <!-- Phone Work Button with Label -->
                <div class="contact-icon-container">
                    <button type="button" class="contact-icon-button" onclick="window.open('tel:', '_self')">
                        <i class="fas fa-phone contact-icon rotated-90"></i>
                    </button>
                    <p class="contact-icon-label">Mobile Number</p>
                </div>

                <!-- Office Number Button with Label -->
                <div class="contact-icon-container">
                    <button type="button" class="contact-icon-button" onclick="window.open('tel:', '_self')">
                        <i class="fas fa-fax contact-icon rotated-90"></i>
                    </button>
                    <p class="contact-icon-label">Office Number</p>
                </div>

                <!-- Mobile 2 Button with Label -->
                <div class="contact-icon-container">
                    <button type="button" class="contact-icon-button" onclick="window.open('tel:', '_self')">
                        <i class="fas fa-mobile-alt contact-icon rotated-0"></i>
                    </button>
                    <p class="contact-icon-label">Mobile 2</p>
                </div>

                <!-- Mobile 3 Button with Label -->
                <div class="contact-icon-container">
                    <button type="button" class="contact-icon-button" onclick="window.open('tel:', '_self')">
                        <i class="fas fa-mobile-alt contact-icon rotated-0"></i>
                    </button>
                    <p class="contact-icon-label">Mobile 3</p>
                </div>

                <!-- Email Button with Label -->
                <div class="contact-icon-container">
                    <button type="button" class="contact-icon-button" onclick="window.open('mailto:', '_self')">
                        <i class="fas fa-envelope contact-icon"></i>
                    </button>
                    <p class="contact-icon-label">Email</p>
                </div>

                <!-- Email 2 Button with Label -->
                <div class="contact-icon-container">
                    <button type="button" class="contact-icon-button" onclick="window.open('mailto:', '_self')">
                        <i class="fas fa-envelope contact-icon"></i>
                    </button>
                    <p class="contact-icon-label">Email 2</p>
                </div>

                <!-- Email 3 Button with Label -->
                <div class="contact-icon-container">
                    <button type="button" class="contact-icon-button" onclick="window.open('mailto:', '_self')">
                        <i class="fas fa-envelope contact-icon"></i>
                    </button>
                    <p class="contact-icon-label">Email 3</p>
                </div>

                <!-- Website Button with Label -->
                <div class="contact-icon-container">
                    <button type="button" class="contact-icon-button"
                        onclick="window.open('https://www.yourwebsiteaddress.com', '_blank')">
                        <i class="fas fa-globe contact-icon"></i>
                    </button>
                    <p class="contact-icon-label">Website</p>
                </div>

                <!-- Website 2 Button with Label -->
                <div class="contact-icon-container">
                    <button type="button" class="contact-icon-button" onclick="window.open('https://', '_blank')">
                        <i class="fas fa-globe contact-icon"></i>
                    </button>
                    <p class="contact-icon-label">Website 2</p>
                </div>

                <!-- Website 3 Button with Label -->
                <div class="contact-icon-container">
                    <button type="button" class="contact-icon-button" onclick="window.open('https://', '_blank')">
                        <i class="fas fa-globe contact-icon"></i>
                    </button>
                    <p class="contact-icon-label">Website 3</p>
                </div>

                <!-- Address Button with Label -->
                <div class="contact-icon-container">
                    <button type="button" class="contact-icon-button"
                        onclick="window.open('https://www.google.com/maps/search/?api=1&query=919%20Oaktree%20Crescent%2C%20Newmarket', '_blank')">
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                    </button>
                    <p class="contact-icon-label">Address</p>
                </div>

                <!-- Address 2 Button with Label -->
                <div class="contact-icon-container">
                    <button type="button" class="contact-icon-button"
                        onclick="window.open('https://www.google.com/maps/search/?api=1&query=', '_blank')">
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                    </button>
                    <p class="contact-icon-label">Address 2</p>
                </div>
            </div>

            <!-- Save to Contacts Button -->
        <button class="btn w-100 custom-save-button" onclick="handleSaveToContacts()">
            <i class="fas fa-save me-2"></i>
            SAVE TO CONTACTS
        </button>
        </div>
        
        <br>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // These functions would be implemented in a real application
        function handleSaveToContacts() {
            // Implementation for saving to contacts
        }

        function handleCloseModal() {
            // Implementation for closing modals
        }
    </script>
</body>

</html>