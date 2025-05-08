<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .custom-card {
            border-radius: 15px;
            overflow: hidden;
            background-image: url("banner_img/client_banner/abdullahali-b1.jpeg");
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
            height: 200px;
        }

        .custom-logo {
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
            background: linear-gradient(90deg, #ffd700, #ffc107);
            /* Gold gradient */
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }

        .custom-save-button:hover {
            background: linear-gradient(90deg, #e6b800, #ffa500);
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

        @keyframes float {

            0%,
            100% {
                transform: translateY(-3px);
            }

            50% {
                transform: translateY(3px);
            }
        }

        /* Enhanced Gallery Styles */
        .gallery-section {
            background-color: rgba(242, 208, 137, 0.7);
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
            background-color: rgb(219, 175, 112);
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
        }

        .lightbox-content {
            max-width: 90%;
            max-height: 90%;
            position: relative;
            text-align: center;
        }

        .lightbox-image {
            max-width: 100%;
            max-height: 80vh;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
            animation: zoomIn 0.3s ease-out;
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

            .lightbox-nav button {
                width: 40px;
                height: 40px;
                font-size: 24px;
            }

            .lightbox-close {
                top: 15px;
                right: 15px;
                font-size: 24px;
            }
        }

        /* contact details */
        .contact {
            background-color: #BAB86C;
        }

        .luxury-slogan {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 600;
            color: white;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin: 20px 0;
            position: relative;
            animation: goldPulse 3s infinite;
        }

        @keyframes goldPulse {
            0% {
                transform: scale(1);
                text-shadow: 0 0 8px rgba(255, 215, 0, 0.3);
            }

            50% {
                transform: scale(1.03);
                text-shadow: 0 0 20px rgba(255, 215, 0, 0.7);
                color: #FFD700;
                /* Gold color highlight */
            }

            100% {
                transform: scale(1);
                text-shadow: 0 0 8px rgba(255, 215, 0, 0.3);
            }
        }

        .luxury-slogan::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 2px;
            background: linear-gradient(90deg, transparent, #FFD700, transparent);
            animation: goldLinePulse 3s infinite;
        }

        @keyframes goldLinePulse {
            0% {
                width: 80px;
                opacity: 0.6;
            }

            50% {
                width: 150px;
                opacity: 1;
            }

            100% {
                width: 80px;
                opacity: 0.6;
            }
        }
    </style>

</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">
            <div class="card-header custom-header text-center"
                style="background-image:  url('banner_img/client_banner/abdullahali-b.jpeg'); height: 220px; opacity: 1;">
                <div class="profile-picture">
                    <img src="profile_img/client_profile/abdullahali-p.png" alt="Saliya Pathum" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center">
                <h2 class="card-title" style="font-size: 27px; text-transform: uppercase; color:rgb(255, 255, 255);">
                    Abdullah Ali</h2>
                <p style="color:rgb(255, 255, 255); font-size: 21px; text-transform: uppercase;">Founder</p>

                <a href="https://www.instagram.com/luxette.lk?igsh=YWdmMzRxYnlrcGpw" target="_blank"
                    rel="noopener noreferrer" style="text-decoration: none;">
                    <button class="btn w-100 mb-3 custom-instagram d-flex align-items-center justify-content-center"
                        style="background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); color: white; height: 60px; border: 2px solid orange; border-radius: 10px; gap: 10px;">
                        <i class="fab fa-instagram" style="font-size: 50px; margin-right:30px;"></i>
                        <span style="font-size: 14px; font-family: 'Montserrat', sans-serif;"> CONNECT WITH
                            INSTAGRAM</span>
                    </button>
                </a>


                <a href="https://wa.me/94777172079" target="_blank" rel="noopener noreferrer"
                    style="text-decoration: none;">
                    <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center"
                        style="background-color: #25D366; color: white; height: 60px; border: 2px solid orange; border-radius: 10px; gap: 10px;">
                        <i class="fab fa-whatsapp" style="font-size: 50px; margin-right:30px;"></i>
                        <span style="font-size: 14px; font-family: 'Montserrat', sans-serif;">CONNECT WITH
                            WHATSAPP</span>
                    </button>
                </a>

                <div class="list-group mb-3">
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('tel:0761231212', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">0777172079</span>
                    </button>

                </div>
                <!-- Enhanced Gallery Section -->
                <div class="gallery-section">
                    <div class="gallery-header" onclick="toggleGallery()">
                        <div class="gallery-title">Gallery</div>
                        <div class="gallery-toggle" id="galleryToggle">
                            <i class="fas fa-minus"></i>
                        </div>
                    </div>
                    <div class="gallery-container" id="galleryContainer">
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/abdullahali/abdullahali-g1.jpeg', 0)">
                            <img src="gallery_img/client_gallerys/abdullahali/abdullahali-g1.jpeg" alt="Gallery Image 1"
                                class="gallery-image">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/abdullahali/abdullahali-g2.jpeg', 1)">
                            <img src="gallery_img/client_gallerys/abdullahali/abdullahali-g2.jpeg" alt="Gallery Image 2"
                                class="gallery-image">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/abdullahali/abdullahali-g3.jpeg', 2)">
                            <img src="gallery_img/client_gallerys/abdullahali/abdullahali-g3.jpeg" alt="Gallery Image 3"
                                class="gallery-image">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/abdullahali/abdullahali-g4.jpeg', 3)">
                            <img src="gallery_img/client_gallerys/abdullahali/abdullahali-g4.jpeg" alt="Gallery Image 4"
                                class="gallery-image">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/abdullahali/abdullahali-g5.jpeg', 4)">
                            <img src="gallery_img/client_gallerys/abdullahali/abdullahali-g5.jpeg" alt="Gallery Image 5"
                                class="gallery-image">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/abdullahali/abdullahali-g6.jpeg', 5)">
                            <img src="gallery_img/client_gallerys/abdullahali/abdullahali-g6.jpeg" alt="Gallery Image 6"
                                class="gallery-image">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>
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
                <br>
                <div class="luxury-slogan">Authentic luxury shopping made convenient</div>

                <br>
                <button class="btn w-100 custom-save-button" onclick="generateVCF()"
                    style="font-family: 'Montserrat', sans-serif; font-size:19px; border: 2px solid orange;">
                    <img src="Images/Social_Media_Icon/save.png" alt=""
                        style="width: 50px; height: 50px; margin-right:25px;">
                    SAVE TO CONTACTS
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Gallery functionality
        const galleryImages = [
            'gallery_img/client_gallerys/abdullahali/abdullahali-g1.jpeg',
            'gallery_img/client_gallerys/abdullahali/abdullahali-g2.jpeg',
            'gallery_img/client_gallerys/abdullahali/abdullahali-g3.jpeg',
            'gallery_img/client_gallerys/abdullahali/abdullahali-g4.jpeg',
            'gallery_img/client_gallerys/abdullahali/abdullahali-g5.jpeg',
            'gallery_img/client_gallerys/abdullahali/abdullahali-g6.jpeg',

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
            lightboxImage.src = imageSrc;
            lightboxCounter.textContent = `${currentImageIndex + 1} / ${galleryImages.length}`;
            lightbox.style.display = 'flex';
            document.body.style.overflow = 'hidden';
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

            document.getElementById('lightbox-image').src = galleryImages[currentImageIndex];
            document.getElementById('lightboxCounter').textContent = `${currentImageIndex + 1} / ${galleryImages.length}`;
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

        function generateVCF() {
            // Contact information matching the business card
            const contactData = {
                firstName: "Abdullah",
                lastName: "Ali",
                title: "Director",
                phoneMobile: "94777172079", // WhatsApp number with country code
                phoneWork: "0777172079",   // Local phone number
                email: "",
                website: "",
                address: "",
                profileImage: "profile_img/client_profile/abdullahali-p.png"
            };

            // Create VCF content
            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=CELL,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL,WA:${contactData.phoneMobile}
EMAIL:${contactData.email}
URL:${contactData.website}
ADR:;;${contactData.address}
PHOTO;VALUE=URL:${contactData.profileImage}
END:VCARD`;

            // Create download link
            const blob = new Blob([vcfContent], { type: 'text/vcard' });
            const url = URL.createObjectURL(blob);

            const a = document.createElement('a');
            a.href = url;
            a.download = `${contactData.firstName}_${contactData.lastName}.vcf`;
            document.body.appendChild(a);
            a.click();

            // Clean up
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        }
    </script>
</body>

</html>