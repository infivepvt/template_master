<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template 75</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .custom-card75 {
            overflow: hidden;
            background: #EEF1FF;
            min-height: 100vh;
            width: 100%;
        }

        .custom-header {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 35px 20px;
            position: relative;
            width: 100%;
            aspect-ratio: 16/9;
        }

        .custom-logo {
            width: 130px;
            position: absolute;
            top: 22px;
            right: 20px;
            margin-bottom: 40px;
        }

        .profile-picture75 {
            position: absolute;
            top: 95%;
            left: 50%;
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

        .custom-save-button75 {
            background: #FFFFFF30;
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px;
            margin-left: 48%;
            margin-top: -30px;
            transition: background 0.3s;
        }

        .custom-save-button75:hover {
            background: #FFFFFF30
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
            box-shadow: 0 4px 6x rgba(0, 0, 0, 0.1);
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

        /* contact details */
        .contact {
            background-color: #303e6d;
        }

        /* Gallery Styles */
        .gallery-section {
            background-color: #303e6d;
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

        /* Responsive Adjustments */
        @media (max-width: 480px) {
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
    </style>
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="card custom-card75 shadow-lg rounded-0" style="background-color: #00114b;">
            <div class="card-header custom-header" style="background-image: url('banner_img/client_banner/liveu-b.webp');">
                <img src="logo_img/client_logo/liveu-l.png" alt="Company Logo" class="custom-logo">
                <div class="profile-picture75">
                    <img src="profile_img/client_profile/liveu-p.png" alt="M.M.M. Rameez" class="rounded-circle">
                </div>
            </div>
            <br><br><br><br>
            <button class="btn w-50 custom-save-button75" id="saveContactBtn">
                <i class="fas fa-save me-2"></i>
                SAVE TO CONTACTS
            </button>
            <div class="card-body text-left" style="background-color: #00114b; color: #000000;">
                <h2 class="card-title" style="font-size: 30px;color:rgb(255, 255, 255);">M.M.M. Rameez</h2>
                <p style="color:rgb(255, 255, 255); font-size: 20px;">BSc (Hons) Marketing, Head of Sales and Marketing</p>
                <a href="https://wa.me/94710331718" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                    <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center" style="background-color: #25D366; color: white; height: 60px; border: 2px solid orange; border-radius: 10px; gap: 10px;">
                        <i class="fab fa-whatsapp" style="font-size: 50px; margin-right:30px;"></i>
                        <span style="font-size: 14px; font-family: 'Montserrat', sans-serif;">CONNECT WITH WHATSAPP</span>
                    </button>
                </a>
                <div class="list-group mb-3">
                    <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact" onclick="window.open('tel:0710331718', '_self')">
                        <img src="Images/icon/phone.png" alt="Phone" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone" style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">071 033 1718</span>
                    </button>

                    <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact" onclick="window.open('tel:0117780000', '_self')">
                        <img src="Images/icon/phone.png" alt="Phone" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone" style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">011 778 0000</span>
                    </button>

                    <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact" onclick="window.open('mailto:rameez@liveu.lk', '_self')">
                        <img src="Images/icon/mail.png" alt="Email" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone" style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">rameez@liveu.lk</span>
                    </button>

                    <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact" onclick="window.open('https://www.liveu.lk', '_blank')">
                        <img src="Images/icon/internet.png" alt="Website" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone" style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">liveu.lk</span>
                    </button>

                    <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact" onclick="window.open('https://www.google.com/maps/search/?api=1&query=No+44+T13+T14+Dedicated+Economic+Center+Kirimandala+Mawatha+Colombo+5', '_blank')">
                        <img src="Images/icon/map.png" alt="Location" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone" style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">No: 44, T13, T14, Dedicated Economic Center, Kirimandala Mawatha, Colombo -5</span>
                    </button>
                </div>
                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px; color: #FFFFFF;">CONNECT WITH SOCIAL MEDIA</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="https://www.tiktok.com/@liveu.lk?_t=ZS-8x6xMUv7wpj&_r=1" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="TikTok" style="width: 60px; height: 60px; margin-top: -5px;">
                    </a>
                    <a href="https://www.facebook.com/share/15F3Hvhriv/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="Facebook" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://youtube.com/@liveu_lk?si=LDzIpDFAwpBNXvtE" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="YouTube" style="width: 50px; height: 50px;">
                    </a>
                </div>
                <!-- Gallery Section -->
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
            'gallery_img/main_gallerys/t6g1.jpg',
            'gallery_img/main_gallerys/t6g2.jpg',
            'gallery_img/main_gallerys/t6g3.jpg',
            'gallery_img/main_gallerys/t6g4.jpg',
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
        document.getElementById('saveContactBtn').addEventListener('click', async function() {
            const contactData = {
                firstName: "M.M.M.",
                lastName: "Rameez",
                title: "Head of Sales and Marketing",
                organization: "Live U (Pvt) Ltd",
                phoneMobile: "+94710331718",
                phoneCompany: "+94117780000",
                email: "rameez@liveu.lk",
                locations: "No: 44, T13, T14, Dedicated Economic Center, Kirimandala Mawatha, Colombo -5",
                website: "https://www.liveu.lk",
                profileImage: "profile_img/client_profile/liveu-p.png"
            };

            const toBase64 = async (url) => {
                return new Promise((resolve, reject) => {
                    const profileImage = new Image();
                    profileImage.crossOrigin = "Anonymous";
                    profileImage.src = url;

                    profileImage.onload = () => {
                        try {
                            const canvas = document.createElement('canvas');
                            const ctx = canvas.getContext('2d');
                            canvas.width = profileImage.naturalWidth;
                            canvas.height = profileImage.naturalHeight;
                            ctx.drawImage(profileImage, 0, 0);
                            const base64Image = canvas.toDataURL('image/jpeg').split(',')[1];
                            resolve(base64Image);
                        } catch (error) {
                            reject(error);
                        }
                    };

                    profileImage.onerror = () => {
                        reject(new Error("Failed to load image"));
                    };

                    if (profileImage.complete) {
                        profileImage.onload();
                    }
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
                `ORG:${contactData.organization}`,
                `TITLE:${contactData.title}`,
                `TEL;TYPE=WORK,MOBILE:${contactData.phoneMobile}`,
                `TEL;TYPE=WORK,VOICE:${contactData.phoneCompany}`,
                `EMAIL;TYPE=WORK:${contactData.email}`,
                `URL:${contactData.website}`,
                `NOTE:Locations: ${contactData.locations}`,
                photoBase64 ? `PHOTO;ENCODING=b;TYPE=JPEG:${photoBase64}` : '',
                "END:VCARD"
            ];

            const vcfContent = vcfLines.filter(line => line).join('\n');
            const blob = new Blob([vcfContent], {
                type: 'text/vcard'
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `${contactData.firstName.replace(/\s+/g, '_')}_${contactData.organization.replace(/\s+/g, '_')}.vcf`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        });

        // Initialize gallery as visible
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('galleryContainer').style.display = 'grid';
        });
    </script>
</body>
</html>