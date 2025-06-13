<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamal Geeganage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .custom-card75 {
            border-radius: 15px;
            overflow: hidden;
            background: #000000;
            width: 450px;
            height: auto;
            margin-top: -55px;
        }

        .custom-header {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 35px 20px;
            position: relative;
            background-color: #1a1a1a;
            height: 250px;
            /* Set banner height to 250px */
        }

        .custom-logo {
            width: 200px;
            position: relative;
            top: 0;
            left: 0;
            margin-bottom: 40px;
        }

        .profile-picture75 {
            position: absolute;
            top: 95%;
            left: 20%;
            transform: translate(-50%, -50%);
        }

        .profile-picture75 img {
            width: 130px;
            height: 130px;
            border: 4px solid #FFD700;
            border-radius: 50%;
        }

        .custom-button {
            font-weight: bold;
            color: #FFD700;
        }

        .social-icon {
            font-size: 1.9rem;
            transition: color 0.3s;
            color: #FFD700;
        }

        .social-icon-row {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-bottom: 5px;
        }

        .list-group-item {
            background-color: #1a1a1a;
            color: #FFFFFF;
            border-radius: 8px;
            margin-bottom: 10px;
            border: 1px solid #FFD700;
            padding: 10px 15px;
        }

        .list-group-item:hover {
            background-color: #333333;
            border-color: #FF0000;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .custom-save-button75 {
            background: #FF0000;
            color: #FFFFFF;
            font-weight: bold;
            border: none;
            padding: 10px;
            margin-left: 48%;
            margin-top: -30px;
            transition: background 0.3s;
            text-align:center;
        }

        .custom-save-button75:hover {
            background: #CC0000;
        }

        .save-icon {
            width: 24px;
            height: 24px;
            color: #FFFFFF;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: #FFD700;
        }

        .custom-phone {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: #FFFFFF;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .custom-phone1 {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: #FFFFFF;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            background: linear-gradient(45deg, #FFD700, #D4AF37, #FFD700);
            border: 2px solid #FF0000;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            transition: border-color 0.3s;
        }

        .custom-phone1::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 200%;
            height: 100%;
            background: linear-gradient(90deg,
                    transparent,
                    rgba(255, 255, 255, 0.4),
                    transparent);
            animation: shimmer 2s infinite;
        }

        .custom-phone1:hover {
            border-color: #CC0000;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }

            50% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(100%);
            }
        }

        /* Gallery Styles */
        .gallery-section {
            padding: 20px;
            background-color: #1a1a1a;
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
            border: 2px solid #FFD700;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            border-color: #FF0000;
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
            color: #FFFFFF;
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
            border: 3px solid #FFD700;
        }

        .modal-close-btn {
            position: absolute;
            top: -35px;
            right: -35px;
            color: #FFFFFF;
            font-size: 30px;
            cursor: pointer;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
            transition: transform 0.2s ease;
        }

        .modal-close-btn:hover {
            transform: scale(1.2);
            color: #FF0000;
        }

        /* Navigation Buttons */
        .nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            border: none;
            color: #FFD700;
            font-size: 24px;
            padding: 10px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .nav-btn:hover {
            background: rgba(255, 0, 0, 0.8);
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
            background: #000000;
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
            border: 2px solid #FFD700;
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
            background: linear-gradient(135deg, #FFD700 0%, #FF0000 100%);
            border-radius: 12px;
            color: #FFFFFF;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 2px solid #FFFFFF;
            text-align: center;
        }

        .modern-upload-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            background: linear-gradient(135deg, #D4AF37 0%, #CC0000 100%);
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
            color: #FFFFFF;
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
            color: #FFFFFF;
        }

        .sub-text {
            display: block;
            font-size: 0.9rem;
            opacity: 0.8;
            margin-top: 0.3rem;
            color: #FFFFFF;
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

        /* Contact details */
        .contact {
            background-color: #1a1a1a;
        }

        /* Gallery Styles */
        .gallery-section {
            background-color: #1a1a1a;
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
        }

        .gallery-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            color: #FFD700;
            cursor: pointer;
        }

        .gallery-title {
            font-size: 18px;
            font-weight: 600;
        }

        .gallery-toggle {
            font-size: 18px;
            color: #FFFFFF;
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-top: 15px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            aspect-ratio: 1;
            cursor: pointer;
            transition: transform 0.3s ease;
            border: 2px solid #FFD700;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            border-color: #FF0000;
        }

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover .gallery-image {
            transform: scale(1.1);
        }

        /* Lightbox Styles */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .lightbox-content {
            max-width: 90%;
            max-height: 90%;
            position: relative;
        }

        .lightbox-image {
            max-width: 100%;
            max-height: 80vh;
            object-fit: contain;
            border-radius: 5px;
            border: 3px solid #FFD700;
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #FFFFFF;
            font-size: 30px;
            cursor: pointer;
            z-index: 1001;
            transition: all 0.3s ease;
        }

        .lightbox-close:hover {
            color: #FF0000;
            transform: scale(1.2);
        }

        .lightbox-nav {
            position: absolute;
            width: 100%;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
            box-sizing: border-box;
        }

        .lightbox-nav button {
            background: none;
            border: none;
            color: #FFD700;
            font-size: 40px;
            cursor: pointer;
            opacity: 0.7;
            transition: all 0.3s ease;
            z-index: 1001;
        }

        .lightbox-nav button:hover {
            opacity: 1;
            transform: scale(1.2);
            color: #FF0000;
        }

        /* Responsive Adjustments */
        @media (max-width: 480px) {

            .custom-header {
                height: 220px;
                padding: 25px 15px;
            }

            .profile-picture75 img {
                width: 120px;
                height: 120px;
            }

            .contact-name {
                font-size: 24px;
            }

            .contact-title {
                font-size: 16px;
            }

            .gallery-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card75 shadow-lg" style="background-color: #000000;">
            <div class="card-header custom-header text-center"
                style="background-image: url('banner_img/client_banner/CBL-CEO-kamal-b.png'); opacity: 1;">
                <div class="profile-picture75">
                    <img src="profile_img/client_profile/CBL-CEO-kamal-p.png" alt="Kamal Geeganage"
                        class="rounded-circle">
                </div>
            </div>
            <br><br>
            <button class="btn w-50 custom-save-button75" id="saveContactBtn">
                <i class="fas fa-save me-2 save-icon"></i>
                SAVE TO CONTACTS
            </button>
            <div class="card-body text-left" style="background-color: #000000; color: #FFFFFF;">
                <h2 class="card-title" style="font-size: 30px; color: #FFFFFF;">Kamal Geeganage</h2>
                <p style="color: #FFFFFF; font-size: 20px;">CBL Foods International (Pvt) Ltd.<br>Director/CEO</p>
                <a href="https://wa.me/94777357855" target="_blank" rel="noopener noreferrer"
                    style="text-decoration: none;">
                    <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center"
                        style="height: 60px; gap: 10px;">
                        <i class="fab fa-whatsapp" style="font-size: 50px; margin-right:30px; color: #FFFFFF;"></i>
                        <span style="font-size: 14px; font-family: 'Montserrat', sans-serif;">CONNECT WITH
                            WHATSAPP</span>
                    </button>
                </a>
                <div class="list-group mb-3">
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('tel:+94777357855', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">+94 77 735 7855</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('tel:+94115002000', '_self')">
                        <img src="Images/icon/landphone.png" alt=""
                            style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">+94 11 500 2000</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('mailto:kamalg.cblf@cbllk.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">kamalg.cblf@cbllk.com</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://cbllk.com/', '_blank')">
                        <img src="Images/icon/internet.png" alt=""
                            style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; 'Montserrat', sans-serif; font-size:16px;">www.cbllk.com</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://maps.app.goo.gl/ZpX2LDcHiFUxGKPPA', '_blank')">
                        <img src="Images/icon/map.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">No.135,
                            Habarakada Road, Ranala, 10654, Srilanka</span>
                    </button>
                </div>
                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px; color: #FFD700;">CONNECT
                    WITH SOCIAL MEDIA</p>
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
                <!-- Gallery Section -->
                <div class="gallery-section">
                    <div class="gallery-header" onclick="toggleGallery()">
                        <div class="gallery-title">Gallery</div>
                        <div class="gallery-toggle" id="galleryToggle">
                            <i class="fas fa-minus"></i>
                        </div>
                    </div>
                    <div class="gallery-container d-flex flex-wrap justify-content-center" id="galleryContainer">
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/kamal/kamal-g1.jpeg')">
                            <img src="gallery_img/client_gallerys/kamal/kamal-g1.jpeg" alt="Gallery Image 1"
                                class="gallery-image">
                        </div>
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/kamal/kamal-g2.jpeg')">
                            <img src="gallery_img/client_gallerys/kamal/kamal-g2.jpeg" alt="Gallery Image 2"
                                class="gallery-image">
                        </div>
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/kamal/kamal-g3.jpeg')">
                            <img src="gallery_img/client_gallerys/kamal/kamal-g3.jpeg" alt="Gallery Image 3"
                                class="gallery-image">
                        </div>
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/kamal/kamal-g4.jpeg')">
                            <img src="gallery_img/client_gallerys/kamal/kamal-g4.jpeg" alt="Gallery Image 4"
                                class="gallery-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Lightbox HTML -->
    <div class="lightbox" id="lightbox">
        <span class="lightbox-close" onclick="closeLightbox()">×</span>
        <div class="lightbox-nav">
            <button onclick="changeImage(-1)">❮</button>
            <button onclick="changeImage(1)">❯</button>
        </div>
        <div class="lightbox-content">
            <img id="lightbox-image" class="lightbox-image" src="" alt="">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Gallery images array
        const galleryImages = [
            'gallery_img/client_gallerys/kamal/kamal-g1.jpeg',
            'gallery_img/client_gallerys/kamal/kamal-g2.jpeg',
            'gallery_img/client_gallerys/kamal/kamal-g3.jpeg',
            'gallery_img/client_gallerys/kamal/kamal-g4.jpeg',
        ];

        let currentImageIndex = 0;

        // Toggle gallery visibility
        function toggleGallery() {
            const galleryContainer = document.getElementById('galleryContainer');
            const galleryToggle = document.getElementById('galleryToggle');

            if (galleryContainer.style.display === 'none') {
                galleryContainer.style.display = 'grid';
                galleryToggle.innerHTML = '<i class="fas fa-minus"></i>';
            } else {
                galleryContainer.style.display = 'none';
                galleryToggle.innerHTML = '<i class="fas fa-plus"></i>';
            }
        }

        // Lightbox functions
        function openLightbox(imageSrc) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImage = document.getElementById('lightbox-image');

            // Find the index of the clicked image
            currentImageIndex = galleryImages.indexOf(imageSrc);
            lightboxImage.src = imageSrc;
            lightbox.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        function changeImage(step) {
            currentImageIndex += step;

            // Wrap around if at beginning or end
            if (currentImageIndex >= galleryImages.length) {
                currentImageIndex = 0;
            } else if (currentImageIndex < 0) {
                currentImageIndex = galleryImages.length - 1;
            }

            document.getElementById('lightbox-image').src = galleryImages[currentImageIndex];
        }

        // Close lightbox when clicking outside the image
        document.getElementById('lightbox').addEventListener('click', function (e) {
            if (e.target === this) {
                closeLightbox();
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', function (e) {
            const lightbox = document.getElementById('lightbox');
            if (lightbox.style.display === 'flex') {
                if (e.key === 'Escape') {
                    closeLightbox();
                } else if (e.key === 'ArrowLeft') {
                    changeImage(-1);
                } else if (e.key === 'ArrowRight') {
                    changeImage(1);
                }
            }
        });

        // Save to Contacts functionality
        document.getElementById('saveContactBtn').addEventListener('click', function () {
            // Create vCard content
            const vCardData = `BEGIN:VCARD
VERSION:3.0
FN:Kamal Geeganage
TITLE:Director/CEO
ORG:CBL Foods International (Pvt) Ltd.
TEL;TYPE=WORK,VOICE:+94777357855
TEL;TYPE=WORK,VOICE:+94115002000
EMAIL:kamalg.cblf@cbllk.com
URL:https://cbllk.com
ADR;TYPE=WORK:;;No.135, Habarakada Road, Ranala, 10654, Srilanka
END:VCARD`;

            // Create download link
            const blob = new Blob([vCardData], { type: 'text/vcard' });
            const url = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.href = url;
            link.download = 'Kamal_Geeganage.vcf';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });

        // Initialize gallery as visible
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('galleryContainer').style.display = 'grid';
        });
    </script>
</body>

</html>