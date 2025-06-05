<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mihirainoshka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        .custom-card75 {
            overflow: hidden;
            background: #1C2526;
            height: auto;
            width: 100%;
        }

        .custom-header {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 35px 20px;
            position: relative;
            background-color: rgb(131, 67, 250);
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
            border: 4px solid #fff;
            border-radius: 50%;
        }

        .custom-button {
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
        }

        .social-icon {
            font-size: 1.9rem;
            transition: color 0.3s;
        }

        .social-icon-row {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-bottom: 5px;
        }

        .list-group-item {
            background-color: #1565C0;
            color: #fff;
            border-radius: 8px;
            margin-bottom: 10px;
            border: 1px solid #1E88E5;
            padding: 10px 15px;
        }

        .list-group-item:hover {
            background-color: #1E88E5;
            border-color: #42A5F5;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .custom-save-button75 {
            background: #42A5F5;
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px;
            margin-left: 48%;
            margin-top: -30px;
            transition: background 0.3s;
            font-family: 'Poppins', sans-serif;
        }

        .custom-save-button75:hover {
            background: #64B5F6;
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
            background-color: #1565C0;
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
            background: linear-gradient(135deg, #1976D2 0%, #42A5F5 100%);
            border-radius: 12px;
            color: white;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 2px solid transparent;
            text-align: center;
            font-family: 'Poppins', sans-serif;
        }

        .modern-upload-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            background: linear-gradient(135deg, #42A5F5 0%, #64B5F6 100%);
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

        .contact {
            background-color: #1565C0;
        }

        .gallery-section {
            background-color: #1565C0;
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
        }

        .gallery-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            color: #fff;
            cursor: pointer;
        }

        .gallery-title {
            font-size: 18px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
        }

        .gallery-toggle {
            font-size: 18px;
            color: #ffffff;
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
        }

        .gallery-item:hover {
            transform: scale(1.05);
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
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
            font-size: 30px;
            cursor: pointer;
            z-index: 1001;
            transition: all 0.3s ease;
        }

        .lightbox-close:hover {
            color: #ccc;
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
            color: white;
            font-size: 40px;
            cursor: pointer;
            opacity: 0.7;
            transition: all 0.3s ease;
            z-index: 1001;
        }

        .lightbox-nav button:hover {
            opacity: 1;
            transform: scale(1.2);
        }

        @media (max-width: 480px) {
            .custom-card75 {}

            .custom-header {
                height: 180px;
                padding: 25px 15px;
            }

            .profile-picture75 img {
                width: 110px;
                height: 110px;
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

        .service-list {
            margin-top: 20px;
            background-color: rgb(10, 87, 175);
            border-radius: 10px;
            padding: 15px;
        }

        .service-item {
            display: flex;
            align-items: center;
            padding: 10px;
            margin-bottom: 10px;
            background-color: rgb(3, 32, 75);
            border-radius: 8px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .service-item:hover {
            background-color: #42A5F5;
            transform: translateY(-2px);
        }

        .service-item i {
            margin-right: 15px;
            font-size: 1.8rem;
            color: #FFFFFF;
        }

        .service-item p {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            color: #FFFFFF;
        }

        @media (max-width: 480px) {
            .service-item {
                padding: 8px;
            }

            .service-item p {
                font-size: 14px;
            }

            .service-item i {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center p-0 m-0">
        <div class="card custom-card75 shadow-lg rounded-0" style="background-color:rgb(3, 32, 75);">
            <div class="card-header custom-header text-center" style="background-image: url('banner_img/client_banner/mihirami.png'); height: 230px; opacity: 1;">
                <!-- <img src="logo_img/main_logo/template10-l.png" alt="Company Logo" class="custom-logo" style="width: 100px; opacity: 1;"> -->
                <div class="profile-picture75">
                    <img src="logo_img/client_logo/mihirami-l.png" alt="Mihirainoshka" class="rounded-circle">
                </div>
            </div>
            <br><br>
            <button class="btn w-50 custom-save-button75" onclick="generateVCF();">
                <i class="fas fa-save me-2"></i>
                SAVE TO CONTACTS
            </button>
            <div class="card-body text-left" style="background-color: rgb(3, 32, 75); color: #000000;">
                <h2 class="card-title" style="font-size: 30px; color: #FFFFFF; font-family: 'Poppins', sans-serif;">Mihira Inoshka</h2>
                <p style="color: #FFFFFF; font-size: 20px; font-family: 'Roboto', sans-serif;">360° Video Booth & Media Services</p>
                <div class="service-list">
                    <div class="service-item">
                        <i class="fas fa-video"></i>
                        <p>360° Video Booth: Elevate your events with immersive video experiences</p>
                    </div>
                    <div class="service-item">
                        <i class="fas fa-video"></i>
                        <p>Drone Shoots: Breathtaking aerial views for unforgettable moments</p>
                    </div>
                    <div class="service-item">
                        <i class="fas fa-camera"></i>
                        <p>Photography & Videography: Capturing emotions, not just images</p>
                    </div>
                    <div class="service-item">
                        <i class="fas fa-share-alt"></i>
                        <p>Social Media Marketing: Boost your brand with creative digital content</p>
                    </div>
                </div>
                <a href="https://wa.me/94722604005" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                    <button class="btn w-100 mb-3 mt-3 custom-phone1 d-flex align-items-center justify-content-center" style="background-color: #25D366; color: white; height: 60px; border: 2px solid #1E88E5; border-radius: 10px; gap: 10px;">
                        <i class="fab fa-whatsapp" style="font-size: 50px; margin-right: 30px;"></i>
                        <span style="font-size: 14px; font-family: 'Poppins', sans-serif;">CONNECT WITH WHATSAPP</span>
                    </button>
                </a>
                <div class="list-group mb-3">
                    <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact" onclick="window.open('tel:0771106754', '_self')">
                        <i class="fas fa-phone-alt" style="font-size: 24px; margin-right: 25px; color: #FFFFFF;"></i>
                        <span class="text-center flex-grow-1 text-truncate custom-phone" style="color: #FFFFFF; font-family: 'Roboto', sans-serif;">0771106754</span>
                    </button>
                    <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact" onclick="window.open('mailto:mihirainoshka@gmail.com', '_self')">
                        <i class="fas fa-envelope" style="font-size: 24px; margin-right: 25px; color: #FFFFFF;"></i>
                        <span class="text-center flex-grow-1 text-truncate custom-phone" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-size: 16px;">mihirainoshka@gmail.com</span>
                    </button>
                    <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact" onclick="window.open('http://t.me/Mihirainoshka', '_blank')">
                        <i class="fab fa-telegram-plane" style="font-size: 24px; margin-right: 25px; color: #FFFFFF;"></i>
                        <span class="text-center flex-grow-1 text-truncate custom-phone" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-size: 16px;">t.me/Mihirainoshka</span>
                    </button>
                </div>
                <p class="fw" style="font-family: 'Poppins', sans-serif; font-size: 19px; color: #FFFFFF;">CONNECT WITH SOCIAL MEDIA</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="https://www.instagram.com/i.mihirainoshka?igsh=Z2k4MjA5cGlrMXYz" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px;">
                    </a>
                    <a href="https://www.facebook.com/share/1Eri61AfF7/" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px;">
                    </a>
                </div>
                <!-- <div class="gallery-section">
                    <div class="gallery-header" onclick="toggleGallery()">
                        <div class="gallery-title">Gallery</div>
                        <div class="gallery-toggle" id="galleryToggle">
                            <i class="fas fa-minus"></i>
                        </div>
                    </div>
                    <div class="gallery-container d-flex flex-wrap justify-content-center" id="galleryContainer" style="display: grid;">
                        <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g1.jpg')">
                            <img src="gallery_img/main_gallerys/t6g1.jpg" alt="Gallery Image 1" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g2.jpg')">
                            <img src="gallery_img/main_gallerys/t6g2.jpg" alt="Gallery Image 2" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g3.jpg')">
                            <img src="gallery_img/main_gallerys/t6g3.jpg" alt="Gallery Image 3" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g4.jpg')">
                            <img src="gallery_img/main_gallerys/t6g4.jpg" alt="Gallery Image 4" class="gallery-image">
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

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
        const galleryImages = [
            'gallery_img/main_gallerys/t6g1.jpg',
            'gallery_img/main_gallerys/t6g2.jpg',
            'gallery_img/main_gallerys/t6g3.jpg',
            'gallery_img/main_gallerys/t6g4.jpg',
        ];

        let currentImageIndex = 0;

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

        function openLightbox(imageSrc) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImage = document.getElementById('lightbox-image');

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

            if (currentImageIndex >= galleryImages.length) {
                currentImageIndex = 0;
            } else if (currentImageIndex < 0) {
                currentImageIndex = galleryImages.length - 1;
            }

            document.getElementById('lightbox-image').src = galleryImages[currentImageIndex];
        }

        document.getElementById('lightbox').addEventListener('click', function(e) {
            if (e.target === this) {
                closeLightbox();
            }
        });

        document.addEventListener('keydown', function(e) {
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

        async function generateVCF() {
            const contactData = {
                firstName: "Mihira",
                lastName: "Inoshka",
                title: "360° Video Booth & Media Services",
                phoneWork: "0771106754",
                phoneMobile: "0722604005",
                email: "mihirainoshka@gmail.com",
                email2: "",
                email3: "",
                website: "https://www.facebook.com/share/1Eri61AfF7/",
                website2: "https://www.instagram.com/i.mihirainoshka?igsh=Z2k4MjA5cGlrMXYz",
                website3: "http://t.me/Mihirainoshka",
                address: "",
                address2: "",
                about: "360° Video Booth & Media Service",
                logo: "https://tapilinq.com/logo_img/client_logo/mihirami-l.png",
                profileImage: "https://tapilinq.com/logo_img/client_logo/mihirami-l.png" // Same as logo in this case
            };

            // Convert image to base64
            const toBase64 = async (url) => {
                const response = await fetch(url);
                const blob = await response.blob();
                return new Promise((resolve, reject) => {
                    const reader = new FileReader();
                    reader.onloadend = () => resolve(reader.result.split(',')[1]);
                    reader.onerror = reject;
                    reader.readAsDataURL(blob);
                });
            };

            let photoBase64 = '';
            try {
                photoBase64 = await toBase64(contactData.profileImage);
            } catch (error) {
                console.error("Failed to load image for VCF:", error);
            }

            // Build VCF content
            let vcfLines = [
                "BEGIN:VCARD",
                "VERSION:3.0",
                `FN:${contactData.firstName} ${contactData.lastName}`,
                `N:${contactData.lastName};${contactData.firstName};;;`,
            ];

            if (contactData.title) vcfLines.push(`TITLE:${contactData.title}`);
            if (contactData.phoneWork) vcfLines.push(`TEL;TYPE=WORK,VOICE:${contactData.phoneWork}`);
            if (contactData.phoneMobile) vcfLines.push(`TEL;TYPE=CELL:${contactData.phoneMobile}`);
            if (contactData.email) vcfLines.push(`EMAIL:${contactData.email}`);
            if (contactData.email2) vcfLines.push(`EMAIL:${contactData.email2}`);
            if (contactData.email3) vcfLines.push(`EMAIL:${contactData.email3}`);
            if (contactData.website) vcfLines.push(`URL:${contactData.website}`);
            if (contactData.website2) vcfLines.push(`URL:${contactData.website2}`);
            if (contactData.website3) vcfLines.push(`URL:${contactData.website3}`);
            if (contactData.address) vcfLines.push(`ADR;TYPE=WORK:;;${contactData.address}`);
            if (contactData.address2) vcfLines.push(`ADR;TYPE=HOME:;;${contactData.address2}`);
            if (contactData.about) vcfLines.push(`NOTE:${contactData.about}`);

            // Embed profile image (base64 JPEG format)
            if (photoBase64) {
                vcfLines.push(`PHOTO;ENCODING=b;TYPE=JPEG:${photoBase64}`);
            }

            vcfLines.push("END:VCARD");

            const vcfContent = vcfLines.join('\n');

            // Trigger download
            const blob = new Blob([vcfContent], {
                type: 'text/vcard'
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `${contactData.firstName}_${contactData.lastName}.vcf`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        }

        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('galleryContainer').style.display = 'grid';
        });
    </script>
</body>
<div></div>

</html>