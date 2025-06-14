<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography By Champ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
         .custom-card75 {
            border-radius: 1px;
            overflow: hidden;
            background: linear-gradient(135deg, #fb954e, #f0cd62);
            width: 450px;
            height: auto;
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
            background-color: #303e6d;
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
            background: #FFFFFF30;
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

        .custom-phone1:hover {
            background-color: #25D366;
            border-color: #128C7E;
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
            /* position: ; */
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
            z-index: 9999;
        }

        .lightbox-nav button:hover {
            opacity: 1;
            transform: scale(1.2);
        }

        /* Responsive Adjustments */
        @media (max-width: 480px) {
            .custom-card75 {
                width: 100%;
                margin-top: -50px;
            }

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
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card75 shadow-lg">
            <div class="card-header custom-header text-center"
                style="background-image: url('banner_img/client_banner/champ-b.png'); height: 200px; opacity: 1;">
                <img src="" alt="" class="custom-logo"
                    style="width: 100px; opacity: 1;">
                <div class="profile-picture75">
                    <img src="profile_img/client_profile/champ-p.png" alt="Photography By Champ" class="rounded-circle">
                </div>
            </div>
            <br><br>
            <button class="btn w-50 custom-save-button75" id="saveContactBtn" onclick="generateVCF()">
                <i class="fas fa-save me-2"></i>
                SAVE TO CONTACTS
            </button>
            <div class="card-body text-left">
                <h2 class="card-title" style="font-size: 30px;color:rgb(255, 255, 255);">Photography By Champ</h2>
                <p style="color:rgb(255, 255, 255); font-size: 20px;">Photography & Videography</p>
                <a href="https://wa.me/94716095253" target="_blank" rel="noopener noreferrer"
                    style="text-decoration: none;">
                    <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center"
                        style="background-color: #25D366; color: white; height: 60px; border: 2px solid orange; border-radius: 10px; gap: 10px;">
                        <i class="fab fa-whatsapp" style="font-size: 50px; margin-right:30px;"></i>
                        <span style="font-size: 14px; font-family: 'Montserrat', sans-serif;">CONNECT WITH WHATSAPP</span>
                    </button>
                </a>
                <div class="list-group mb-3">
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('tel:+94716095253', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:14px;">+94 71 609 5253</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('mailto:photographybychamp@gmail.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:14px;">photographybychamp@gmail.com</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://photographybychamp.blogspot.com', '_blank')">
                        <img src="Images/icon/internet.png" alt=""
                            style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:14px;">photographybychamp.blogspot.com</span>
                    </button>
                </div>
                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px; color: #FFFFFF;">CONNECT WITH SOCIAL MEDIA</p>
                <div class="d-flex justify-content-center" style="gap: 20px;">
                    <a href="https://www.instagram.com/photographybychamp/" target="_blank" rel="noopener noreferrer">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="Instagram" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.facebook.com/share/1F3VnPbemq/" target="_blank" rel="noopener noreferrer">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="Facebook" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.youtube.com/@photographybychamp" target="_blank" rel="noopener noreferrer">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="YouTube" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.tiktok.com/@photographybychamp" target="_blank" rel="noopener noreferrer">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="TikTok" style="width: 57px; height: 57px;">
                    </a>
                    <a href="https://x.com/photogrbychamp" target="_blank" rel="noopener noreferrer">
                        <img src="Images/Social_Media_Icon/x-2.png" alt="Twitter" style="width: 50px; height: 50px;">
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
                    <div class="gallery-container" id="galleryContainer">
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/champ/champ-g1.jpeg')">
                            <img src="gallery_img/client_gallerys/champ/champ-g1.jpeg" alt="Gallery Image 1" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/champ/champ-g2.jpeg')">
                            <img src="gallery_img/client_gallerys/champ/champ-g2.jpeg" alt="Gallery Image 2" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/champ/champ-g3.jpeg')">
                            <img src="gallery_img/client_gallerys/champ/champ-g3.jpeg" alt="Gallery Image 3" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/champ/champ-g4.jpeg')">
                            <img src="gallery_img/client_gallerys/champ/champ-g4.jpeg" alt="Gallery Image 4" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/champ/champ-g5.jpeg')">
                            <img src="gallery_img/client_gallerys/champ/champ-g5.jpeg" alt="Gallery Image 5" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/champ/champ-g6.jpeg')">
                            <img src="gallery_img/client_gallerys/champ/champ-g6.jpeg" alt="Gallery Image 6" class="gallery-image">
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
            'gallery_img/client_gallerys/champ/champ-g1.jpeg',
            'gallery_img/client_gallerys/champ/champ-g2.jpeg',
            'gallery_img/client_gallerys/champ/champ-g3.jpeg',
            'gallery_img/client_gallerys/champ/champ-g4.jpeg',
            'gallery_img/client_gallerys/champ/champ-g5.jpeg',
            'gallery_img/client_gallerys/champ/champ-g6.jpeg'
        ];

        let currentImageIndex = 0;

        async function generateVCF() {
            const contactData = {
                firstName: "Photography",
                lastName: "By Champ",
                title: "Photography & Videography",
                phoneWork: "",
                phoneMobile: "+94 71 609 5253",
                email: "photographybychamp@gmail.com",
                email2: "",
                email3: "",
                website: "https://photographybychamp.blogspot.com",
                website2: "",
                website3: "",
                address: "",
                address2: "",
                about: "",
                logo: "https://tapilinq.com/profile_img/client_profile/champ-p.png",
                profileImage: "https://tapilinq.com/profile_img/client_profile/champ-p.png"
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
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.style.display = 'none';
            document.body.style.overflow = 'auto'; // Re-enable scrolling
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

        // Initialize gallery visibility
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('galleryContainer').style.display = 'grid';
        });
    </script>
</body>

</html>