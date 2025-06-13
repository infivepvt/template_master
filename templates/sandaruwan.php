<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IVSANC GEMSTONE - VIRAJ SANDARUWAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.mi</div>n.css">
    <style>
        :root {
            --primary-color: #1e3a8a;
            /* Dark blue */
            --secondary-color: #1e40af;
            /* Complementary dark blue shade */
            --accent-color: #f2295b;
            --dark-bg: #1e3a8a;
            /* Updated to match theme color (dark blue) */
            --light-bg: #EEF1FF;
            --text-dark: #16213e;
        }

        body {
            background: var(--dark-bg);
            /* Updated to use dark blue theme color */
            font-family: 'Montserrat', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .custom-card73 {
            overflow: hidden;
            background: var(--light-bg);
            width: 100%;
            /* max-width: 420px; */
            margin: 0 auto;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
            position: relative;
            z-index: 10;
            border: none;
            min-height: 100vh;
        }

        .custom-header73 {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            padding: 35px 20px 90px;
            position: relative;
            text-align: center;
            /* border-bottom-left-radius: 40%; */
            /* border-bottom-right-radius: 40%; */
            background-image: url('banner_img/client_banner/sandaruwan-b.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: bottom;
            aspect-ratio: 16/9;
        }

        .custom-logo {
            width: 180px;
            margin-bottom: 40px;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.2));
        }

        .profile-picture {
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 20;
            margin-top: 180px;
        }

        .profile-picture img {
            width: 140px;
            height: 140px;
            border: 6px solid #fff;
            border-radius: 50%;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            object-fit: cover;
        }

        .custom-button {
            font-weight: bold;
        }

        .card-body {
            background-color: var(--light-bg);
            color: var(--text-dark);
            padding-top: 80px;
            padding-bottom: 20px;
        }

        .card-title {
            font-size: 28px;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .position-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .company-name {
            font-size: 22px;
            font-weight: 700;
            color: var(--dark-bg);
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .company-tagline {
            font-size: 16px;
            font-weight: 600;
            color: var(--accent-color);
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        .custom-save-button73 {
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            color: white;
            font-weight: bold;
            border: none;
            padding: 12px;
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            margin-bottom: 20px;
            font-size: 16px;
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.4);
        }

        .custom-save-button73:hover {
            background: linear-gradient(90deg, #1e3a8a, #1e40af);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(30, 58, 138, 0.6);
        }

        .list-group-item {
            background-color: var(--dark-bg);
            color: #fff;
            border-radius: 12px;
            margin-bottom: 12px;
            border: 2px solid rgba(255, 255, 255, 0.1);
            padding: 12px 20px;
            transition: all 0.3s ease;
            text-align: left;
        }

        .list-group-item:hover {
            background-color: #252547;
            transform: translateX(5px);
            border-color: var(--primary-color);
        }

        .contact-icon {
            font-size: 24px;
            color: var(--accent-color);
            transition: color 0.3s ease;
            min-width: 30px;
            text-align: center;
        }

        .icon-text {
            color: #ffffff;
            font-size: 16px;
            margin-left: 15px;
            font-weight: 500;
        }

        .connect-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            color: var(--text-dark);
            font-weight: 600;
            margin: 20px 0 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .social-icon-row {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin-bottom: 5px;
        }

        /* .social-icon {
            font-size: 2.2rem;
            transition: all 0.3s ease;
            color: var(--text-dark);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        } */

        .social-icon:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* .icon-tiktok {
            background: linear-gradient(135deg, #010101 0%, #69C9D0 50%, #EE1D52 100%);
            color: white;
        } */

        .footer-text {
            font-size: 14px;
            color: var(--text-dark);
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .social-icon-img {
            width: 45px;
            height: 45px;
        }

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

        /* Animation for header */
        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* .custom-header73 {
            background-size: 200% 200%;
            animation: gradientAnimation 8s ease infinite;
        } */

        /* Floating animation for profile */
        @keyframes float {
            0% {
                transform: translate(-50%, -50%) translateY(0px);
            }

            50% {
                transform: translate(-50%, -50%) translateY(-10px);
            }

            100% {
                transform: translate(-50%, -50%) translateY(0px);
            }
        }

        .profile-picture {
            animation: float 4s ease-in-out infinite;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center template-73">
        <div class="card custom-card73 rounded-0">
            <div class="card-header custom-header73 text-center">
                <div class="profile-picture">
                    <img src="banner_img/client_banner/sandaruwan-b.png" alt="Viraj Sandaruwan">
                </div>
            </div>

            <div class="card-body text-center mt-3">
                <h2 class="card-title">VIRAJ SANDARUWAN</h2>
                <p class="position-title">FOUNDER/CEO</p>

                <button class="btn w-100 custom-save-button73" onclick="downloadVCard()">
                    <i class="fas fa-save me-2"></i>
                    SAVE TO CONTACTS
                </button>

                <div class="list-group mb-3">
                    <!-- Phone -->
                    <button type="button" class="list-group-item d-flex align-items-center justify-content-start contact" onclick="window.open('tel:+94770405638', '_self')">
                        <i class="fas fa-phone contact-icon me-3"></i>
                        <p class="icon-text mb-0">+94 77 040 5638</p>
                    </button>

                    <!-- Email -->
                    <button type="button" class="list-group-item d-flex align-items-center justify-content-start contact" onclick="window.open('mailto:ivsandaruwan@gmail.com', '_self')">
                        <i class="fas fa-envelope contact-icon me-3"></i>
                        <p class="icon-text mb-0">ivsandaruwan@gmail.com</p>
                    </button>

                    <!-- Address -->
                    <button type="button" class="list-group-item d-flex align-items-center justify-content-start contact" onclick="window.open('https://www.google.com/maps/search/?api=1&query=A436/9+Matthamagoda,+Kotiyakumbura.+Sri+Lanka', '_blank')">
                        <i class="fas fa-map-marker-alt contact-icon me-3"></i>
                        <p class="icon-text mb-0">A436/9 Matthamagoda, Kotiyakumbura, Sri Lanka</p>
                    </button>

                    <!-- TikTok -->
                    <button type="button" class="list-group-item d-flex align-items-center justify-content-start contact" onclick="window.open('https://www.tiktok.com/@ivsancgemstone?_t=ZS-8xAPI0xJPZI&_r=1', '_blank')">
                        <i class="fab fa-tiktok contact-icon me-3"></i>
                        <p class="icon-text mb-0">@ivsancgemstone</p>
                    </button>
                </div>

                <p class="connect-title">
                    CONNECT WITH SOCIAL MEDIA
                </p>

                <div class="social-icon-row">
                    <a href="https://www.tiktok.com/@ivsancgemstone?_t=ZS-8xAPI0xJPZI&_r=1" target="_blank" rel="noopener noreferrer" class="social-icon icon-tiktok">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" class="social-icon-img">
                    </a>
                    <!-- <a href="https://www.instagram.com/ivsanc_gemstone/" target="_blank" rel="noopener noreferrer" class="social-icon">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" class="social-icon-img">
                    </a> -->
                    <a href="https://www.facebook.com/share/18aGprAZq9/" target="_blank" rel="noopener noreferrer" class="social-icon">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" class="social-icon-img">
                    </a>
                    <!-- <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon">
                        <img src="Images/Social_Media_Icon/twitter.png" alt="" class="social-icon-img">
                    </a> -->
                    <a href="https://youtube.com/@virajsandaruwan9464?si=wO2MJt0NaEQ3HXeg" target="_blank" rel="noopener noreferrer" class="social-icon">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="" class="social-icon-img">
                    </a>
                </div>

                <p class="fw-bold mt-4" style="font-family: 'Montserrat', sans-serif; font-size:19px">GALLERY</p>

                <!-- gallery -->
                <div class="gallery-section" style="margin-top: -10px;">
                    <!-- <div class="gallery-header" onclick="toggleGallery()">
                        <div class="gallery-title">Gallery</div>
                        <div class="gallery-toggle" id="galleryToggle">
                            <i class="fas fa-minus"></i>
                        </div>
                    </div> -->
                    <div class="gallery-container" id="galleryContainer">
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/sandaruwan/sandaruwan-g1.png')">
                            <img src="gallery_img/client_gallerys/sandaruwan/sandaruwan-g1.png" alt="Gallery Image 1" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/sandaruwan/sandaruwan-g2.png')">
                            <img src="gallery_img/client_gallerys/sandaruwan/sandaruwan-g2.png" alt="Gallery Image 2" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/sandaruwan/sandaruwan-g3.png')">
                            <img src="gallery_img/client_gallerys/sandaruwan/sandaruwan-g3.png" alt="Gallery Image 3" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/sandaruwan/sandaruwan-g4.png')">
                            <img src="gallery_img/client_gallerys/sandaruwan/sandaruwan-g4.png" alt="Gallery Image 4" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/sandaruwan/sandaruwan-g5.png')">
                            <img src="gallery_img/client_gallerys/sandaruwan/sandaruwan-g5.png" alt="Gallery Image 5" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/sandaruwan/sandaruwan-g6.png')">
                            <img src="gallery_img/client_gallerys/sandaruwan/sandaruwan-g6.png" alt="Gallery Image 6" class="gallery-image">
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


                <p class="footer-text">
                    Digital Business Card
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Gallery images array
        const galleryImages = [
            'gallery_img/client_gallerys/sandaruwan/sandaruwan-g1.png',
            'gallery_img/client_gallerys/sandaruwan/sandaruwan-g2.png',
            'gallery_img/client_gallerys/sandaruwan/sandaruwan-g3.png',
            'gallery_img/client_gallerys/sandaruwan/sandaruwan-g4.png',
            'gallery_img/client_gallerys/sandaruwan/sandaruwan-g5.png',
            'gallery_img/client_gallerys/sandaruwan/sandaruwan-g6.png'
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

        async function downloadVCard() {
            const contactData = {
                firstName: "Viraj",
                lastName: "Sandaruwan",
                title: "FOUNDER/CEO",
                organization: "IVSANC GEMSTONE",
                phoneMobile: "+94770405638",
                email: "ivsandaruwan@gmail.com",
                address: "A436/9 Matthamagoda, Kotiyakumbura, Sri Lanka",
                profileImage: "banner_img/client_banner/sandaruwan-b.png"
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
                `TEL;TYPE=WORK,VOICE:${contactData.phoneMobile}`,
                `EMAIL;TYPE=WORK:${contactData.email}`,
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

        // Animation effect for social icons
        document.querySelectorAll('.social-icon').forEach(icon => {
            icon.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.15)';
            });

            icon.addEventListener('mouseleave', function() {
                this.style.transform = '';
            });
        });
    </script>
</body>

</html>