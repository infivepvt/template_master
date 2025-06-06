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
    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
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
            top: 90%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .profile-picture img {
            width: 200px;
            height: 200px;
            border: 0px solid #ffff;
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
            background-color: #373938;
        }

        .gallery-section {
            margin: 20px 0;
        }
        
        .gallery-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 19px;
            margin-bottom: 15px;
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-bottom: 20px;
        }
        
        .gallery-item {
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s;
        }
        
        .gallery-item:hover {
            transform: scale(1.03);
        }
        
        .gallery-item img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">
            <div class="card-header custom-header text-center"
                style="background-image: url('banner_img/client_banner/srimal-b.jpeg'); height: 200px; opacity: 1;">
                <div class="profile-picture">
                    <img src="profile_img/client_profile/srimal-p.png" alt="Bundala Safari with Srimal" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center"
                style="background-color: #FFFFFF; color: #000000; text-decoration: none; ">
                <h2 class="card-title" style="font-size: 27px; text-transform: uppercase;">Bundala Safari with Srimal</h2>
                <p style="color: #000000; font-size: 21px; text-transform: uppercase;">Wildlife Safari Tours</p>

                <a href="https://wa.me/94779599397" target="_blank" rel="noopener noreferrer"
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
                        onclick="window.open('tel:+94779599397', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">+94 77 959 9397</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('mailto:Khsrimal@yahoo.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">Khsrimal@yahoo.com</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://bundalasafarilodge.com', '_blank')">
                        <img src="Images/icon/internet.png" alt=""
                            style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; 'Montserrat', sans-serif; font-size:16px;">bundalasafarilodge.com</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://maps.app.goo.gl/UFThnvu1jPN3uR9D9?g_st=com.google.maps.preview.copy', '_blank')">
                        <img src="Images/icon/map.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">No.01, Tissamaharama Road, Weligatta,<br> Hambantota 82004</span>
                    </button>
                </div>

                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px">CONNECT WITH SOCIAL MEDIA</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="https://www.facebook.com/share/16KFEMvtFP/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 40px; height: 50px;">
                    </a>
                    <a href="https://www.instagram.com/bundala_safari_srimal_srilanka?igsh=OGttanBteDc3ZHBs&utm_source=qr" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.tiktok.com/@srimalsafari0srilanka?_t=ZS-8wyFQbEy4hd&_r=1" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://youtu.be/X149wsyZB3I?si=4U9E62KmNh3wgzwK" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.tripadvisor.co.uk/Attraction_Review-g1027209-d15843807-Reviews-Bundala_Safari_with_Srimal-Hambantota_Tangalle_Southern_Province.html" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/tripadvisor.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>

                <div class="gallery-section">
                    <div class="gallery-header" onclick="toggleGallery()">
                        <h3 class="gallery-title">Photo Gallery</h3>
                        <span class="gallery-toggle" id="galleryToggle"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="gallery-container" id="galleryContainer" style="display: none;">
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Srimal/srimal-g1.jpeg')">
                            <img src="gallery_img/client_gallerys/Srimal/srimal-g1.jpeg" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Srimal/srimal-g2.jpeg')">
                            <img src="gallery_img/client_gallerys/Srimal/srimal-g2.jpeg" alt="Gallery Image 2" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Srimal/srimal-g3.jpeg')">
                            <img src="gallery_img/client_gallerys/Srimal/srimal-g3.jpeg" alt="Gallery Image 3" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Srimal/srimal-g4.jpeg')">
                            <img src="gallery_img/client_gallerys/Srimal/srimal-g4.jpeg" alt="Gallery Image 4" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Srimal/srimal-g5.jpeg')">
                            <img src="gallery_img/client_gallerys/Srimal/srimal-g5.jpeg" alt="Gallery Image 5" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Srimal/srimal-g6.jpeg')">
                            <img src="gallery_img/client_gallerys/Srimal/srimal-g6.jpeg" alt="Gallery Image 6" class="gallery-image">
                        </div>
                    </div>
                </div>

                <div id="lightbox" class="lightbox">
                    <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
                    <div class="lightbox-content">
                        <img id="lightbox-image" class="lightbox-image">
                    </div>
                    <div class="lightbox-nav">
                        <button onclick="changeImage(-1)">&#10094;</button>
                        <button onclick="changeImage(1)">&#10095;</button>
                    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <script>
        // Gallery images array
        const galleryImages = [
            'gallery_img/client_gallerys/Srimal/srimal-g1.jpeg',
            'gallery_img/client_gallerys/Srimal/srimal-g2.jpeg',
            'gallery_img/client_gallerys/Srimal/srimal-g3.jpeg',
            'gallery_img/client_gallerys/Srimal/srimal-g4.jpeg',
            'gallery_img/client_gallerys/Srimal/srimal-g5.jpeg',
            'gallery_img/client_gallerys/Srimal/srimal-g6.jpeg',
        ];

        function generateVCF() {
            const contactData = {
                firstName: "Bundala Safari",
                lastName: "with Srimal",
                title: "Wildlife Safari Tours",
                phoneWork: "+94779599397",
                phoneMobile: "",
                email: "Khsrimal@yahoo.com",
                email2: "",
                email3: "",
                website: "bundalasafarilodge.com",
                website2: "",
                website3: "",
                address: "Bundala Safari Lodge Location",
                address2: "",
                about: "",
                logo: "https://tapilinq.com/profile_img/client_profile/srimal-p.png",
                profileImage: "https://tapilinq.com/profile_img/client_profile/srimal-p.png"
            };

            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL:${contactData.phoneMobile}
EMAIL:${contactData.email}
EMAIL:${contactData.email2}
EMAIL:${contactData.email3}
URL:${contactData.website}
URL:${contactData.website2}
URL:${contactData.website3}
ADR;TYPE=WORK:;;${contactData.address}
ADR;TYPE=HOME:;;${contactData.address2}
NOTE:${contactData.about}
PHOTO;VALUE=URL:${contactData.profileImage}
LOGO;VALUE=URL:${contactData.logo}
END:VCARD`;

            const blob = new Blob([vcfContent], { type: 'text/vcard' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `${contactData.firstName.replace(/\s/g, '_')}_${contactData.lastName.replace(/\s/g, '_')}.vcf`;
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

        let currentImageIndex = 0;

        function openLightbox(imageSrc) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImage = document.getElementById('lightbox-image');
            currentImageIndex = galleryImages.indexOf(imageSrc);
            lightboxImage.src = imageSrc;
            lightbox.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            document.getElementById('lightbox').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        function changeImage(step) {
            currentImageIndex += step;
            if (currentImageIndex >= galleryImages.length) currentImageIndex = 0;
            else if (currentImageIndex < 0) currentImageIndex = galleryImages.length - 1;

            document.getElementById('lightbox-image').src = galleryImages[currentImageIndex];
        }

        document.getElementById('lightbox').addEventListener('click', function (e) {
            if (e.target === this) closeLightbox();
        });

        document.addEventListener('keydown', function (e) {
            const lightbox = document.getElementById('lightbox');
            if (lightbox.style.display === 'flex') {
                if (e.key === 'Escape') closeLightbox();
                else if (e.key === 'ArrowLeft') changeImage(-1);
                else if (e.key === 'ArrowRight') changeImage(1);
            }
        });
    </script>
</body>

</html>