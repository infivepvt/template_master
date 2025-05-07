<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Card Template 15</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .custom-card15 {
            border-radius: 15px;
            overflow: hidden;
            background: #EEF1FF;
            width: 400px;
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

        .custom-logo15 {
            width: 200px;
            position: relative;
            top: 0;
            left: 0;
            margin-bottom: 40px;
        }

        .profile-picture {
            position: absolute;
            top: 95%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin-top: 20px;
        }

        .profile-picture img {
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

        .custom-save-button {
            background: linear-gradient(90deg, #5f4def, #00d0ea);
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px;
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }

        .custom-save-button:hover {
            background: linear-gradient(90deg, #4b3ec4, #00b3c3);
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

        .fw {
            font-weight: bold;
            margin-top: 20px;
        }

        .profile-header13 {
            background-color: #FFFFFF;
            border-radius: 30px;
            max-width: 95%;
            margin: 0 auto;
            padding: 20px;
            margin-top: -100px;
        }

        .profile-contact-icons13 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            justify-content: center;
            gap: 25px;
        }

        /* group Edit */
        .contact-icon-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-icon-button {
            background-color: rgb(255, 255, 255);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #ccc;
            /* Added border */
            cursor: pointer;
        }

        .contact-icon-label {
            margin-top: 5px;
            font-size: 0.8rem;
            color: rgb(0, 0, 0);
            text-align: center;
            width: 90px;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: rgb(238, 185, 78);
        }

        /* Enhanced Gallery Styles */
        .gallery-section {
            background-color: #1a1a1a;
            border-radius: 15px;
            padding: 15px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .gallery-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
            color: #fff;
            cursor: pointer;
            background-color: #2a2a2a;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .gallery-title {
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .gallery-toggle {
            font-size: 18px;
            color: #ffffff;
            transition: transform 0.3s ease;
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-top: 10px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            aspect-ratio: 1;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .gallery-item:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
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

        .gallery-overlay i {
            color: white;
            font-size: 2rem;
        }

        /* Enhanced Lightbox Styles */
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
            touch-action: none;
        }

        .lightbox-content {
            width: 100%;
            height: 100%;
            position: relative;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .lightbox-image {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
            animation: zoomIn 0.3s ease-out;
        }

        .lightbox-image.mobile-view {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            object-fit: contain;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
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
            background: rgba(0, 0, 0, 0.5);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .lightbox-close:hover {
            color: #ff6b6b;
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
            background: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            font-size: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            opacity: 0.8;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .lightbox-nav button:hover {
            opacity: 1;
            background: rgba(0, 0, 0, 0.7);
            transform: scale(1.1);
        }

        .lightbox-counter {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 16px;
            background: rgba(0, 0, 0, 0.5);
            padding: 5px 15px;
            border-radius: 20px;
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
                opacity: 1;
            }
        }

        /* Mobile responsive adjustments */
        @media (max-width: 768px) {
            .gallery-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .lightbox-content {
                width: 100%;
                height: 100%;
            }

            .lightbox-nav {
                top: auto;
                bottom: 20px;
                transform: none;
            }

            .lightbox-nav button {
                position: fixed;
                bottom: 20px;
                width: 40px;
                height: 40px;
                font-size: 24px;
            }

            .lightbox-nav button:first-child {
                left: 20px;
            }

            .lightbox-nav button:last-child {
                right: 20px;
            }

            .lightbox-close {
                top: 10px;
                right: 10px;
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card15 shadow-lg" style="background-color:rgb(255, 255, 255);">
            <div class="card-header custom-header text-center"
                style="background-image: url('banner_img/client_banner/sapphire-b.png'); height: 200px; opacity: 100%;">
                <div class="profile-picture">
                    <img src="profile_img/client_profile/sapphire-p1.png" alt="Linkin Park" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center"
                style="background-color:rgb(255, 255, 255); color:rgb(255, 255, 255); margin-top: 15px;">
                <h2 style="font-size: 30px; color: black;">Mufla Bhanu</h2>
                <p style="color:rgb(0, 0, 0); font-size: 20px;">Director finance and Sales</p>

                <div>
                    <p></p>
                </div>
                <br>
                <br>
                <br>

                <div class="profile-header13"
                    style="background-color:rgb(255, 255, 255); border-radius: 30px; max-width: 95%; margin: 0 auto; padding: 20px; margin-top: -50px;">
                    <div class="profile-contact-icons13">
                        <!-- Phone Work Button with Label -->
                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button"
                                onclick="window.open('tel:+94770030431', '_self')">
                                <i class="fas fa-phone contact-icon rotated-90"></i>
                            </button>
                            <p class="contact-icon-label">Mobile Number</p>
                        </div>

                        <!-- Office Number Button with Label -->
                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button"
                                onclick="window.open('tel:+94112767333', '_self')">
                                <i class="fas fa-fax contact-icon rotated-90"></i>
                            </button>
                            <p class="contact-icon-label">Office Number</p>
                        </div>
                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button"
                                onclick="window.open('https://wa.me/94777554542', '_blank')">
                                <i class="fab fa-whatsapp contact-icon" style="color:rgb(238, 185, 78);"></i>
                            </button>
                            <p class="contact-icon-label">WhatsApp</p>
                        </div>

                        <!-- Email Button with Label -->
                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button"
                                onclick="window.open('mailto:info@sapphirecreation.com', '_self')">
                                <i class="fas fa-envelope contact-icon"></i>
                            </button>
                            <p class="contact-icon-label">Email 1</p>
                        </div>
                        <!-- Email Button with Label -->
                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button"
                                onclick="window.open('mailto:banuaffinitygems@gmail.com', '_self')">
                                <i class="fas fa-envelope contact-icon"></i>
                            </button>
                            <p class="contact-icon-label">Email 2</p>
                        </div>

                        <!-- Website Button with Label -->
                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button"
                                onclick="window.open('https://www.sapphirecreation.com', '_blank')">
                                <i class="fas fa-globe contact-icon"></i>
                            </button>
                            <p class="contact-icon-label">Website</p>
                        </div>
                        <!-- Address Button with Label -->
                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button"
                                onclick="window.open('https://maps.app.goo.gl/R7jjb1DmTPrnEBBw6?g_st=iw', '_blank')">
                                <i class="fas fa-map-marker-alt contact-icon"></i>
                            </button>
                            <p class="contact-icon-label">Location</p>
                        </div>
                    </div>

                    <!-- Enhanced Gallery Section -->
                    <!-- <div class="gallery-section">
                        <div class="gallery-header" onclick="toggleGallery()">
                            <div class="gallery-title">Gallery</div>
                            <div class="gallery-toggle" id="galleryToggle">
                                <i class="fas fa-minus"></i>
                            </div>
                        </div>
                        <div class="gallery-container" id="galleryContainer">
                            <div class="gallery-item"
                                onclick="openLightbox('gallery_img/client_gallerys/sapphire/sapphire-g2.jpeg', 0)">
                                <img src="gallery_img/client_gallerys/sapphire/sapphire-g2.jpeg" alt="Gallery Image 2"
                                    class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item"
                                onclick="openLightbox('gallery_img/client_gallerys/sapphire/sapphire-g3.jpeg', 1)">
                                <img src="gallery_img/client_gallerys/sapphire/sapphire-g3.jpeg" alt="Gallery Image 3"
                                    class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item"
                                onclick="openLightbox('gallery_img/client_gallerys/sapphire/sapphire-g4.jpeg', 2)">
                                <img src="gallery_img/client_gallerys/sapphire/sapphire-g4.jpeg" alt="Gallery Image 4"
                                    class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item"
                                onclick="openLightbox('gallery_img/client_gallerys/sapphire/sapphire-g5.jpeg', 3)">
                                <img src="gallery_img/client_gallerys/sapphire/sapphire-g5.jpeg" alt="Gallery Image 5"
                                    class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="featured-image-container"
                        style="margin: 20px auto; max-width: 50%; text-align: center;">
                        <img src="gallery_img/client_gallerys/sapphire1/sapphire-g1.jpeg" alt="Business showcase" style="width: 100%; 
                border-radius: 15px; 
                box-shadow: 0 4px 15px rgba(0,0,0,0.2);
                border: 3px solid #EEF1FF;">
                        <p style="color: black; margin-top: 10px; font-size: 14px;">Brand line of Affinity Gems</p>
                    </div>
                    <!-- Enhanced Lightbox -->
                    <div class="lightbox" id="lightbox">
                        <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
                        <div class="lightbox-nav">
                            <button onclick="changeImage(-1)">&#10094;</button>
                            <button onclick="changeImage(1)">&#10095;</button>
                        </div>
                        <div class="lightbox-content">
                            <img id="lightbox-image" class="lightbox-image" src="" alt="">
                            <div class="lightbox-counter" id="lightboxCounter"></div>
                        </div>
                    </div>

                    <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:15px; color:black;">CONNECT
                        WITH SOCIAL MEDIA
                    </p>
                    <div class="d-flex flex-wrap justify-content-center">
                        <a href="https://www.instagram.com/sapphirecreationlk?igsh=MXF3eDBubnN1cmMzbQ==" target="_blank"
                            rel="noopener noreferrer" class="m-3">
                            <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                        </a>
                        <a href="https://www.facebook.com/share/12FoDHqsjab/" target="_blank" rel="noopener noreferrer"
                            class="m-3">
                            <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                        </a>
                        <a href="https://www.tiktok.com/@sapphirecreationlk?_t=ZS-8w6UKJkIGOL&_r=1" target="_blank"
                            rel="noopener noreferrer" class="m-3">
                            <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 55px; height: 55px;">
                        </a>
                    </div>

                    <br>
                    <button class="btn w-100 custom-save-button">
                        <i class="fas fa-save me-2"></i>
                        SAVE TO CONTACTS
                    </button>

                </div>

                <br>
                <footer style="text-align:center; padding:10px; font-size:14px; color:white;">
                    <a href="https://tapilinq.lk" target="_blank" style="text-decoration:none; color:black;">
                        Made with ❤️ by Tapilinq | Click now
                    </a>
                </footer>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Gallery functionality
        const galleryImages = [
            'gallery_img/client_gallerys/sapphire/sapphire-g2.jpeg',
            'gallery_img/client_gallerys/sapphire/sapphire-g3.jpeg',
            'gallery_img/client_gallerys/sapphire/sapphire-g4.jpeg',
            'gallery_img/client_gallerys/sapphire/sapphire-g5.jpeg'
        ];

        let currentImageIndex = 0;
        let isGalleryOpen = true;

        // Toggle gallery visibility
        function toggleGallery() {
            const galleryContainer = document.getElementById('galleryContainer');
            const galleryToggle = document.getElementById('galleryToggle');

            isGalleryOpen = !isGalleryOpen;

            if (isGalleryOpen) {
                galleryContainer.style.display = 'grid';
                galleryToggle.innerHTML = '<i class="fas fa-minus"></i>';
            } else {
                galleryContainer.style.display = 'none';
                galleryToggle.innerHTML = '<i class="fas fa-plus"></i>';
            }
        }

        // Open lightbox with specific image
        function openLightbox(imageSrc, index) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImage = document.getElementById('lightbox-image');
            const lightboxCounter = document.getElementById('lightboxCounter');

            currentImageIndex = index;

            // Create a new image to handle loading
            const img = new Image();
            img.onload = function () {
                lightboxImage.src = imageSrc;
                lightboxCounter.textContent = `${currentImageIndex + 1} / ${galleryImages.length}`;
                lightbox.style.display = 'flex';
                document.body.style.overflow = 'hidden';

                // Add class to handle mobile viewport
                if (window.innerWidth <= 768) {
                    lightboxImage.classList.add('mobile-view');
                } else {
                    lightboxImage.classList.remove('mobile-view');
                }
            };
            img.onerror = function () {
                console.error('Failed to load image:', imageSrc);
            };
            img.src = imageSrc;
        }

        // Close lightbox
        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Navigate between images
        function changeImage(step) {
            currentImageIndex += step;

            // Wrap around if at beginning or end
            if (currentImageIndex >= galleryImages.length) {
                currentImageIndex = 0;
            } else if (currentImageIndex < 0) {
                currentImageIndex = galleryImages.length - 1;
            }

            const lightboxImage = document.getElementById('lightbox-image');
            const img = new Image();
            img.onload = function () {
                lightboxImage.src = galleryImages[currentImageIndex];
                document.getElementById('lightboxCounter').textContent = `${currentImageIndex + 1} / ${galleryImages.length}`;

                // Update mobile view class
                if (window.innerWidth <= 768) {
                    lightboxImage.classList.add('mobile-view');
                } else {
                    lightboxImage.classList.remove('mobile-view');
                }
            };
            img.onerror = function () {
                console.error('Failed to load image:', galleryImages[currentImageIndex]);
            };
            img.src = galleryImages[currentImageIndex];
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

        // Handle window resize
        window.addEventListener('resize', function () {
            const lightboxImage = document.getElementById('lightbox-image');
            if (lightboxImage && document.getElementById('lightbox').style.display === 'flex') {
                if (window.innerWidth <= 768) {
                    lightboxImage.classList.add('mobile-view');
                } else {
                    lightboxImage.classList.remove('mobile-view');
                }
            }
        });

        // Save to contacts functionality
        document.querySelector('.custom-save-button').addEventListener('click', function () {
            // Create vCard content
            const vcard = `BEGIN:VCARD
VERSION:3.0
FN:Mufla Bhanu
TITLE:Owner
TEL;TYPE=CELL:+94770030431
TEL;TYPE=WORK,FAX:+94112767333
EMAIL;TYPE=WORK:info@sapphirecreation.com
URL:https://www.sapphirecreation.com
ADR;TYPE=WORK:;;Sapphire Creation;;Colombo;Western;Sri Lanka
REV:${new Date().toISOString()}
END:VCARD`;

            // Create Blob with vCard content
            const blob = new Blob([vcard], { type: 'text/vcard' });
            const url = URL.createObjectURL(blob);

            // Create download link
            const link = document.createElement('a');
            link.href = url;
            link.download = 'Mufla Bhanu.vcf';
            document.body.appendChild(link);
            link.click();

            // Clean up
            document.body.removeChild(link);
            URL.revokeObjectURL(url);
        });
    </script>
</body>

</html>