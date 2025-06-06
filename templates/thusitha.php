<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card - Thusitha Harshana Warusawithana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: white;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding-top: -30px;
            padding-bottom: 20px;
            color: #f0f0f0;
        }

        .custom-card-wrapper {
            width: 100%;
            max-width: 500px;
        }

        .custom-card {
            border-radius: 2px;
            overflow: hidden;
            background: rgb(3, 3, 3);
            width: 100%;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            position: relative;
            text-align: center;
            padding-bottom: 32px;
            min-height: 100vh;
        }

        .card-header-pattern {
            background-image: url('banner_img/client_banner/celibration-b1.png');
            background-color: #111111;
            background-size: cover;
            background-position: center top;
            background-repeat: no-repeat;
            height: 150px;
            position: relative;
        }

        .profile-picture-container {
            width: 140.59px;
            height: 140.59px;
            margin: -95px auto 20px auto;
            position: relative;
            z-index: 2;
        }

        .profile-picture-container img {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            border: 2px solid #FFFFFF;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .profile-name-divider {
            border: none;
            height: 1px;
            background-color: rgb(49, 49, 49);
            margin-top: 15px;
            margin-bottom: 20px;
            margin-left: 25px;
            margin-right: 25px;
        }

        .profile-info {
            padding: 0 20px 10px 20px;
        }

        .profile-info .name {
            font-family: 'Poppins', sans-serif;
            font-size: 25px;
            color: #979797;
            font-weight: 400;
            margin-bottom: 2px;
        }

        .profile-info .title {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            color: #CCCCCC;
            font-weight: 400;
            margin-bottom: 2px;
        }

        .profile-info .company {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            color: #4E4E4E;
            font-weight: 400;
            margin-bottom: 0;
        }

        .content-divider {
            border: none;
            height: 1px;
            background-color: #4A4A4A;
            margin: 20px 25px;
        }

        .quick-contact-icons {
            display: flex;
            justify-content: space-around;
            padding: 15px 20px;
            margin-bottom: 20px;
        }

        .quick-contact-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: #f0f0f0;
        }

        .quick-contact-item .icon {
            font-size: 25px;
            margin-bottom: 8px;
            color: #e0e0e0;
        }

        .quick-contact-item .text {
            font-family: 'Rubik', sans-serif;
            font-size: 13px;
            color: #7A7A7A;
            font-weight: 400;
        }

        .action-button {
            display: block;
            width: calc(100% - 40px);
            margin: 0 auto 15px auto;
            padding: 12px 20px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 25px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .save-contact-button {
            font-family: 'Rubik', sans-serif;
            font-size: 13px;
            color: #3A3A3A;
            background-color: #FFFFFF;
            border: 1px solid #FFFFFF;
        }

        .save-contact-button:hover {
            background-color: #f0f0f0;
            color: #3A3A3A;
        }

        .follow-us-text {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            color: #6D6D6D;
            font-weight: 400;
            margin-top: 25px;
            margin-bottom: 0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .social-button {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            color: #FFFFFF;
            background-color: #383838;
            border: 1px solid #444444;
        }

        .social-button .fab,
        .social-button .fas {
            margin-right: 10px;
        }

        .social-button:hover {
            background-color: #484848;
            color: #FFFFFF;
        }

        .bottom-right-branding {
            position: absolute;
            bottom: 15px;
            right: 15px;
            width: 30px;
            height: 30px;
            z-index: 3;
        }

        .company-info {
            padding: 0 20px 20px 20px;
            text-align: left;
        }

        .company-info h3 {
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            color: #979797;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .company-info p {
            font-family: 'Rubik', sans-serif;
            font-size: 14px;
            color: #7A7A7A;
            font-weight: 400;
            margin-bottom: 15px;
        }

        .company-info ul {
            font-family: 'Rubik', sans-serif;
            font-size: 14px;
            color: #7A7A7A;
            font-weight: 400;
            padding-left: 20px;
            margin-bottom: 15px;
        }

        .company-info ul li {
            margin-bottom: 8px;
        }

        .company-info .tagline {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            color: #CCCCCC;
            font-weight: 400;
            font-style: italic;
        }
    </style>
    <style>
        /* gallery */

        .gallery-section {
            padding: 20px;
            /* background-color: #000; */
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
            font-size: 1.2rem;
            font-weight: bold;
        }

        .gallery-toggle {
            font-size: 1.2rem;
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            /* margin-top: 10px; */
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
            background-color: #3f51b5;
            /* blue → purple → pink */
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
    <div class="custom-card-wrapper">
        <div class="card custom-card">
            <div class="card-header-pattern">
            </div>
            <br><br><br>
            <div class="profile-picture-container">
                <img src="logo_img\client_logo\celebration-l.jpeg" alt="Thusitha Harshana Warusawithana">
            </div>

            <div class="profile-info">
                <p class="name">Thusitha Harshana Warusawithana</p>
                <br>
                <p class="title">CEO</p>
                <p class="company">Celebration Wedding Cars & Tours Pvt Ltd</p>
            </div>

            <div class="quick-contact-icons">
                <a href="mailto:thusithaspeed@gmail.com" class="quick-contact-item">
                    <span class="icon"><i class="fas fa-envelope"></i></span>
                    <span class="text">EMAIL</span>
                </a>
                <a href="tel:+61447615559" class="quick-contact-item">
                    <span class="icon"><i class="fas fa-phone-alt fa-flip-horizontal"></i></span>
                    <span class="text">CALL AUSTRALIA</span>
                </a>
                <a href="https://wa.me/+61447615559" class="quick-contact-item">
                    <span class="icon"><i class="fab fa-whatsapp"></i></span>
                    <span class="text">WHATSAPP</span>
                </a>
                <a href="https://celebrationweddings.lk/" target="_blank" class="quick-contact-item">
                    <span class="icon"><i class="fas fa-link"></i></span>
                    <span class="text">WEBSITE</span>
                </a>
            </div>
            <button class="action-button save-contact-button" onclick="generateVCF()">
                SAVE CONTACT
            </button>

            <p class="fw-bold mt-4 text-white" style="font-family: 'Montserrat', sans-serif; font-size:19px">FOLLOW US HERE</p>
            <br>

            <a href="https://www.instagram.com/celebrationweddingcarstours/profilecard/?igsh=cTJvYmZjZHJrdnVw" class="action-button social-button">
                <i class="fab fa-instagram"></i> INSTAGRAM
            </a>
            <a href="https://x.com/thusithawa98509?s=11&t=9Tum1wXwsauUgB-Kf4uMzg" class="action-button social-button">
                <i class="fab fa-twitter"></i> TWITTER
            </a>
            <a href="https://www.facebook.com/celebrationweddingcarsandtoursgalle?mibextid=wwXIfr&mibextid=wwXIfr" class="action-button social-button">
                <i class="fab fa-facebook-f"></i> FACEBOOK
            </a>
            <a href="https://www.tiktok.com/@celebrationweddingcar?_t=ZS-8wwnfDgH2Bd&_r=1" class="action-button social-button">
                <i class="fab fa-tiktok"></i> TIKTOK
            </a>
            <a href="https://youtube.com/@celebrationweddingcarstours?si=CjoNHtdnTWos3Cq5" class="action-button social-button">
                <i class="fab fa-youtube"></i> YOUTUBE
            </a>

            <hr class="content-divider">
            <div class="company-info">
                <h3>Celebration Wedding Cars & Tours</h3>
                <p>Transforming your special moments into unforgettable journeys. We offer premium wedding car services, tailor-made tours, and luxury event transport across Sri Lanka. With a stylish fleet and a commitment to excellence, we bring elegance, comfort, and professionalism to every ride.</p>
                <p><strong>🏆 Award-Winning Excellence</strong></p>
                <ul>
                    <li>People’s Pinnacle Award 2024 – Best Luxury Wedding Car and Tour Company of the Year</li>
                    <li>Asia Miracle Award – Best Luxury Wedding Car Provider</li>
                    <li>International Blue Sapphire Award – Internationally Recognizedස

                </ul>
                <p class="tagline">Let us be a part of your celebrations — where luxury meets reliability.</p>
            </div>

            <p class="fw-bold mt-4 text-white" style="font-family: 'Montserrat', sans-serif; font-size:19px">GALLERY</p>

            <!-- gallery -->
            <div class="gallery-section" style="margin-top: -10px;">
                <!-- <div class="gallery-header" onclick="toggleGallery()">
                        <div class="gallery-title">Gallery</div>
                        <div class="gallery-toggle" id="galleryToggle">
                            <i class="fas fa-minus"></i>
                        </div>
                    </div> -->
                <div class="gallery-container" id="galleryContainer">
                    <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/celebration/celebration-g1.jpeg')">
                        <img src="gallery_img/client_gallerys/celebration/celebration-g1.jpeg" alt="Gallery Image 1" class="gallery-image">
                    </div>
                    <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/celebration/celebration-g2.jpeg')">
                        <img src="gallery_img/client_gallerys/celebration/celebration-g2.jpeg" alt="Gallery Image 2" class="gallery-image">
                    </div>
                    <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/celebration/celebration-g3.jpeg')">
                        <img src="gallery_img/client_gallerys/celebration/celebration-g3.jpeg" alt="Gallery Image 3" class="gallery-image">
                    </div>
                    <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/celebration/celebration-g4.jpeg')">
                        <img src="gallery_img/client_gallerys/celebration/celebration-g4.jpeg" alt="Gallery Image 4" class="gallery-image">
                    </div>
                    <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/celebration/celebration-g5.jpeg')">
                        <img src="gallery_img/client_gallerys/celebration/celebration-g5.jpeg" alt="Gallery Image 5" class="gallery-image">
                    </div>
                    <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/celebration/celebration-g6.jpeg')">
                        <img src="gallery_img/client_gallerys/celebration/celebration-g6.jpeg" alt="Gallery Image 6" class="gallery-image">
                    </div>
                </div>
            </div>

            <!-- Lightbox HTML -->
            <div class="lightbox" id="lightbox">
                <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
                <div class="lightbox-nav">
                    <button onclick="changeImage(-1)">&#10094;</button>
                    <button onclick="changeImage(1)">&#10095;</button>
                </div>
                <div class="lightbox-content">
                    <img id="lightbox-image" class="lightbox-image" src="" alt="">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        async function generateVCF() {
            const contactData = {
                firstName: "Thusitha",
                lastName: "Warusawithana",
                title: "CEO",
                organization: "Celebration Wedding Cars & Tours Pvt Ltd",
                phoneMobile: "+61447615559",
                email: "thusithaspeed@gmail.com",
                website: "https://celebrationweddings.lk",
                address: "Galle, Sri Lanka",
                instagram: "https://www.instagram.com/celebrationweddingcarstours/profilecard/?igsh=cTJvYmZjZHJrdnVw",
                twitter: "https://x.com/thusithawa98509?s=11&t=9Tum1wXwsauUgB-Kf4uMzg",
                facebook: "https://www.facebook.com/celebrationweddingcarsandtoursgalle?mibextid=wwXIfr&mibextid=wwXIfr",
                tiktok: "https://www.tiktok.com/@celebrationweddingcar?_t=ZS-8wwnfDgH2Bd&_r=1",
                youtube: "https://youtube.com/@celebrationweddingcarstours?si=CjoNHtdnTWos3Cq5",
                profileImage: "logo_img/client_logo/celebration-l.jpeg"
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
                `TEL;TYPE=CELL:${contactData.phoneMobile}`,
                `EMAIL:${contactData.email}`,
                `URL:${contactData.website}`,
                `URL;TYPE=Instagram:${contactData.instagram}`,
                `URL;TYPE=Twitter:${contactData.twitter}`,
                `URL;TYPE=Facebook:${contactData.facebook}`,
                `URL;TYPE=TikTok:${contactData.tiktok}`,
                `URL;TYPE=YouTube:${contactData.youtube}`,
                `ADR;TYPE=WORK:;;${contactData.address};;;`,
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
            a.download = `${contactData.firstName}_${contactData.lastName}.vcf`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        }
        const galleryImages = [
            'gallery_img/client_gallerys/celebration/celebration-g1.jpeg',
            'gallery_img/client_gallerys/celebration/celebration-g2.jpeg',
            'gallery_img/client_gallerys/celebration/celebration-g3.jpeg',
            'gallery_img/client_gallerys/celebration/celebration-g4.jpeg',
            'gallery_img/client_gallerys/celebration/celebration-g5.jpeg',
            'gallery_img/client_gallerys/celebration/celebration-g6.jpeg'
        ];

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
    </script>

</body>
<div></div>

</html>