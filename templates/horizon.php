<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .custom-card {
            border-radius: 15px;
            overflow: hidden;
            background: #EEF1FF;
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
            background: linear-gradient(90deg, #5f4def, #00d0ea);
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
            background: linear-gradient(90deg, #4b3ec4, #00b3c3);
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

        /* contact details */
        .contact {
            background-color: #373938;
        }

        /* gallery */

        .gallery-section {
            padding: 20px;
            background-color: #000;
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
            margin-top: 10px;
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

        /* gallery */
        .about-section {
            padding: 20px;
            background-color: #000;
        }

        .about-section h5 {
            color: #fff;
            margin-bottom: 15px;
        }

        .custom-save-button {
            width: 100%;
            background-color: #fff;
            color: black;
            border: none;
            padding: 15px;
            font-weight: bold;
        }

        .custom-save-button:hover {
            background-color: #229936;
        }

        .footer {
            background-color: #000;
            text-align: center;
            padding: 10px;
        }
    </style>

</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">
            <div class="card-header custom-header text-center"
                style="background-image:  url('banner_img/client_banner/horizon-b.png'); height: 200px; opacity: 1;">
                <img src="logo_img/client_logo/horizon-l.png" alt="Company Logo" class="custom-logo" height="80px"
                    style="width: 80px; height: auto; opacity: 1;">
                <div class="profile-picture">
                    <img src="profile_img/client_profile/horizon-p.png" alt="Saliya Pathum" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center"
                style="background-color: #FFFFFF; color: #000000; text-decoration: none; ">
                <h2 class="card-title" style="font-size: 27px; text-transform: uppercase;">HORIZON AGRO PRODUCTS
                    HOLDINGS (PVT) LTD</h2>
                <p style="color: #000000; font-size: 21px; text-transform: uppercase;">NEVILLE KALUGAMPITIYA</p>
                <p style="color: #000000; font-size: 15px; text-transform: uppercase; margin-top: 5px; font-weight:bo">
                    Managing Director</p>

                <a href="https://wa.me/94719973254" target="_blank" rel="noopener noreferrer"
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
                        onclick="window.open('tel:+94719973254', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">+94719973254</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('tel:+94715200900', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">+94715200900 (Hotline)</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('mailto:neville@horizonagroproduct.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">neville@horizonagroproduct.com</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('mailto:horizonagroproduct@gmail.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">horizonagroproduct@gmail.com</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact wechat"
                        onclick="openQRModal()">
                        <i class="fab fa-weixin" style="font-size: 30px; color: #FFFFFF; margin-right: 25px;"></i>
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">WeChat</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://horizonagroproducts.com/', '_blank')">
                        <img src="Images/icon/internet.png" alt=""
                            style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">www.horizonagroproducts.com</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://maps.app.goo.gl/GKHyK7ntrX4ocZ5H8', '_blank')">
                        <img src="Images/icon/map.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">HORIZON AGRO
                            PRODUCTS (PVT) LTD 70000 Embilipitiya Pallegama, Sri Lanka</span>
                    </button>
                </div>
                <!-- gallery -->
                <div class="gallery-section">
                    <div class="gallery-header" onclick="toggleGallery()">
                        <div class="gallery-title">Gallery</div>
                        <div class="gallery-toggle" id="galleryToggle">
                            <i class="fas fa-minus"></i>
                        </div>
                    </div>
                    <div class="gallery-container" id="galleryContainer">
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/horizon/horizen-g1.jpeg')">
                            <img src="gallery_img/client_gallerys/horizon/horizen-g1.jpeg" alt="Gallery Image 1"
                                class="gallery-image">
                        </div>
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/horizon/horizen-g2.jpeg')">
                            <img src="gallery_img/client_gallerys/horizon/horizen-g2.jpeg" alt="Gallery Image 2"
                                class="gallery-image">
                        </div>
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/horizon/horizen-g3.jpeg')">
                            <img src="gallery_img/client_gallerys/horizon/horizen-g3.jpeg" alt="Gallery Image 3"
                                class="gallery-image">
                        </div>
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/horizon/horizen-g4.jpeg')">
                            <img src="gallery_img/client_gallerys/horizon/horizen-g4.jpeg" alt="Gallery Image 4"
                                class="gallery-image">
                        </div>
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/horizon/horizen-g5.jpeg')">
                            <img src="gallery_img/client_gallerys/horizon/horizen-g5.jpeg" alt="Gallery Image 5"
                                class="gallery-image">
                        </div>
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/horizon/horizen-g6.jpeg')">
                            <img src="gallery_img/client_gallerys/horizon/horizen-g6.jpeg" alt="Gallery Image 6"
                                class="gallery-image">
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
                <br>
                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px">CONNECT WITH SOCIAL MEDIA
                </p>
                <div class="d-flex flex-wrap justify-content-center">

                    <a href="https://www.facebook.com/share/1AgjqJdGYr/" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://linkedin.com/in/horizon-agro-products-1b6395349" target="_blank"
                        rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 50px; height: 50px;">
                    </a>

                </div>

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
        function openQRModal() {
            document.getElementById("qrModal").style.display = "flex";
        }

        function closeQRModal() {
            document.getElementById("qrModal").style.display = "none";
        }
        async function generateVCF() {
            // Contact information matching the business card
            const contactData = {
                firstName: "Neville",
                lastName: "Kalugampitiya",
                title: "Managing Director",
                organization: "Horizon Agro Products",
                phoneWork: "+94719973254",
                phoneHotline: "+94715200900",
                email: "neville@horizonagroproduct.com",
                email2: "horizonagroproduct@gmail.com",
                website: "https://horizonagroproducts.com",
                address: "Horizon Agro Products (Pvt) Ltd, 70000 Embilipitiya Pallegama, Sri Lanka",
                profileImage: "profile_img/client_profile/horizon-p.png",
                logo: "logo_img/client_logo/horizon-l.png"
            };

            // Load profile image and convert to base64
            let base64Image = "";
            try {
                const profileImage = new Image();
                profileImage.src = contactData.profileImage;
                // Ensure cross-origin images are handled (if applicable)
                profileImage.crossOrigin = "Anonymous";

                // Wait for the image to load
                if (!profileImage.complete) {
                    await new Promise((resolve) => {
                        profileImage.onload = resolve;
                        profileImage.onerror = () => {
                            console.error("Failed to load profile image");
                            resolve(); // Continue even if image fails
                        };
                    });
                }

                // Create canvas and draw image
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                canvas.width = profileImage.naturalWidth;
                canvas.height = profileImage.naturalHeight;
                ctx.drawImage(profileImage, 0, 0);

                // Convert to base64 (JPEG format)
                base64Image = canvas.toDataURL('image/jpeg').split(',')[1];
            } catch (error) {
                console.error("Error processing profile image:", error);
            }

            // Create VCF content
            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
ORG:${contactData.organization}
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=WORK,VOICE:${contactData.phoneHotline}
EMAIL;TYPE=WORK:${contactData.email}
EMAIL;TYPE=WORK:${contactData.email2}
URL;TYPE=WORK:${contactData.website}
ADR;TYPE=WORK:;;${contactData.address};;;;
${base64Image ? `PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}` : ""}
LOGO;VALUE=URI:${contactData.logo}
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

        // Gallery images array
        const galleryImages = [
            'gallery_img/client_gallerys/horizon/horizen-g1.jpeg',
            'gallery_img/client_gallerys/horizon/horizen-g2.jpeg',
            'gallery_img/client_gallerys/horizon/horizen-g3.jpeg',
            'gallery_img/client_gallerys/horizon/horizen-g4.jpeg',
            'gallery_img/client_gallerys/horizon/horizen-g5.jpeg',
            'gallery_img/client_gallerys/horizon/horizen-g6.jpeg'
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
    </script>
</body>

</html>