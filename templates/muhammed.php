<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DecoWoody Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .custom-card75 {
            border-radius: 1px;
            overflow: hidden;
            background: #EAD9C7; /* Light wood-inspired background */
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
            border: 2px solid #fff;
            border-radius: 50%;
        }

        .custom-button {
            font-weight: bold;
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
            background-color: #4A3728; /* Darker wood tone */
            color: #fff;
            border-radius: 8px;
            margin-bottom: 10px;
            border: 1px solid #5C4636;
            padding: 10px 15px;
        }

        .list-group-item:hover {
            background-color: #5C4636;
            border-color: #6F5846;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .custom-save-button75 {
            background: #3C2F2F80; /* Semi-transparent wood brown */
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px;
            margin-left: 48%;
            margin-top: -30px;
            transition: background 0.3s;
        }

        .custom-save-button75:hover {
            background: #4A372880;
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
            transition: background-color 0.1s, border-color 0.1s;
        }

        .custom-phone1:hover {
            background-color: #25D366;
            border-color: #128C7E;
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
            border: 2px solid #5C4636;
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
            background: linear-gradient(135deg, #4A3728 0%, #6F5846 100%);
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
            background: linear-gradient(135deg, #5C4636 0%, #8B6F47 100%);
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
            0%, 100% { transform: translateY(-3px); }
            50% { transform: translateY(3px); }
        }

        /* contact details */
        .contact {
            background-color: #4A3728;
        }

        /* gallery */
        .gallery-section {
            padding: 20px;
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
            color: white !important;
            font-family: 'Montserrat', sans-serif;
            font-size: 19px;
            font-weight: bold;
            margin-top: 1rem;
        }

        .gallery-toggle {
            font-size: 1.2rem;
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 5px;
            aspect-ratio: 1;
            cursor: pointer;
        }

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .gallery-item:hover .gallery-image {
            transform: scale(1.05);
        }

        /* Lightbox styles */
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
        }

        .lightbox-image {
            max-width: 100%;
            max-height: 80vh;
            object-fit: contain;
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
            font-size: 30px;
            cursor: pointer;
        }

        .lightbox-nav {
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
            box-sizing: border-box;
        }

        .lightbox-nav button {
            background: none;
            border: none;
            color: white;
            font-size: 30px;
            cursor: pointer;
        }

        .gradient-button {
            background-color: #ffffff;
            border: none;
            color: white;
            transition: 0.3s ease;
        }

        .gradient-button:hover {
            filter: brightness(1.1);
            cursor: pointer;
        }

        /* gallery */
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card75 shadow-lg" style="background-color: #000000;">
            <div class="card-header custom-header text-center"
                style="background-image: url('banner_img/client_banner/muhammed-b.png'); height: 150px; opacity: 1;">
                <img src="" alt="" class="custom-logo"
                    style="width: 100px; opacity: 1;">
                <div class="profile-picture75">
                    <img src="profile_img/client_profile/muhammed-p.png" alt="Shihab Muhammed" class="rounded-circle">
                </div>
            </div>
            <br><br>
            <button class="btn w-50 custom-save-button75" id="saveContactBtn">
                <i class="fas fa-save me-2"></i>
                SAVE TO CONTACTS
            </button>
            <div class="card-body text-left" style="background-color: #000000; color: #000000;">
                <h2 class="card-title" style="font-size: 30px;color:rgb(255, 255, 255);">Shihab Muhammed</h2>
                <p style="color:rgb(255, 255, 255); font-size: 20px;">Founder and CEO <br> DecoWoody Manufacturing Pvt Ltd</p>
                <a href="https://wa.me/94755555653" target="_blank" rel="noopener noreferrer"
                    style="text-decoration: none;">
                    <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center"
                        style="background-color: #25D366; color: white; height: 60px; border: 2px solid #000000; border-radius: 10px; gap: 10px;">
                        <i class="fab fa-whatsapp" style="font-size: 50px; margin-right:30px;"></i>
                        <span style="font-size: 14px; font-family: 'Montserrat', sans-serif;">CONNECT WITH WHATSAPP</span>
                    </button>
                </a>
                <div class="list-group mb-3">
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('tel:+94755555653', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">+94 75 555 5653</span>
                    </button>
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('tel:+94760703767', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">+94 76 070 3767</span>
                    </button>
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('mailto:decowoody.info@gmail.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">decowoody.info@gmail.com</span>
                    </button>
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://www.decowoody.lk', '_blank')">
                        <img src="Images/icon/internet.png" alt=""
                            style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">www.decowoody.lk</span>
                    </button>
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://www.google.com/maps/search/?api=1&query=No.+17+Jawa+Street+Kinniya+Trincomalee+Sri+Lanka+31100', '_blank')">
                        <img src="Images\icon\map.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">No. 17 Jawa Street, Kinniya, <br> Trincomalee, Sri Lanka 31100</span>
                    </button>
                </div>
                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px; color: #FFFFFF;">CONNECT WITH SOCIAL MEDIA</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="https://www.facebook.com/share/12MCmF7ExUw/" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.instagram.com/decowoodylk?igsh=MTk4czV2cnRud3ZhdQ==" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>
                <!-- Gallery Section -->
                <div class="gallery-section" style="margin-top: -10px;">
                    <div class="gallery-header" onclick="toggleGallery()">
                        <div class="gallery-title">Gallery</div>
                        <div class="gallery-toggle" id="galleryToggle">
                            <i class="fas fa-minus"></i>
                        </div>
                    </div>
                    <div class="gallery-container" id="galleryContainer">
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Muhammed/muhammed-g1.jpeg')">
                            <img src="gallery_img/client_gallerys/Muhammed/muhammed-g1.jpeg" alt="Gallery Image 1" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Muhammed/muhammed-g2.jpeg')">
                            <img src="gallery_img/client_gallerys/Muhammed/muhammed-g2.jpeg" alt="Gallery Image 2" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Muhammed/muhammed-g3.jpeg')">
                            <img src="gallery_img/client_gallerys/Muhammed/muhammed-g3.jpeg" alt="Gallery Image 3" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Muhammed/muhammed-g4.jpeg')">
                            <img src="gallery_img/client_gallerys/Muhammed/muhammed-g4.jpeg" alt="Gallery Image 4" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Muhammed/muhammed-g5.jpeg')">
                            <img src="gallery_img/client_gallerys/Muhammed/muhammed-g5.jpeg" alt="Gallery Image 5" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Muhammed/muhammed-g6.jpeg')">
                            <img src="gallery_img/client_gallerys/Muhammed/muhammed-g6.jpeg" alt="Gallery Image 6" class="gallery-image">
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
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Gallery images array
    const galleryImages = [
        'gallery_img/client_gallerys/Muhammed/muhammed-g1.jpeg',
        'gallery_img/client_gallerys/Muhammed/muhammed-g2.jpeg',
        'gallery_img/client_gallerys/Muhammed/muhammed-g3.jpeg',
        'gallery_img/client_gallerys/Muhammed/muhammed-g4.jpeg',
        'gallery_img/client_gallerys/Muhammed/muhammed-g5.jpeg',
        'gallery_img/client_gallerys/Muhammed/muhammed-g6.jpeg'
    ];

    let currentImageIndex = 0;

    async function generateVCF() {
        const contactData = {
            firstName: "Shihab",
            lastName: "Muhammed",
            title: "Founder and CEO, DecoWoody Manufacturing Pvt Ltd",
            phoneWork: "+94 75 555 5653",
            phoneMobile: "+94 76 070 3767",
            email: "decowoody.info@gmail.com",
            email2: "",
            email3: "",
            website: "https://www.decowoody.lk",
            website2: "",
            website3: "",
            address: "No. 17 Jawa Street, Kinniya, Trincomalee, Sri Lanka 31100",
            address2: "",
            about: "",
            logo: "https://tapilinq.com/profile_img/client_profile/muhammed-p.png",
            profileImage: "https://tapilinq.com/profile_img/client_profile/muhammed-p.png"
        };

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

        if (photoBase64) {
            vcfLines.push(`PHOTO;ENCODING=b;TYPE=JPEG:${photoBase64}`);
        }

        vcfLines.push("END:VCARD");

        const vcfContent = vcfLines.join('\n');

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

    // Close lightbox when clicking outside the image
    document.getElementById('lightbox').addEventListener('click', function(e) {
        if (e.target === this) {
            closeLightbox();
        }
    });

    // Keyboard navigation
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

    // Save to Contacts functionality
    document.getElementById('saveContactBtn').addEventListener('click', function () {
        generateVCF();
    });

    // Initialize gallery as visible
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('galleryContainer').style.display = 'grid';
    });
</script>
</body>

</html>