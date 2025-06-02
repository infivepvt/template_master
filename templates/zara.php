<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@400;500;700&family=Poppins:wght@400;600;700&family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: black; 
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: -5px;
        }

        .custom-card {
            border-radius: 5px;
            overflow: hidden;
            background: #000000;
            width: 500px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .custom-header {
            background: linear-gradient(to bottom, #b1b3fe, #6f72ff);
            padding: 120px 20px 70px;
            position: relative;
            text-align: center;
        }

        .profile-picture {
            position: absolute;
            bottom: -70px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }

        .profile-picture img {
            width: 185px;
            height: 185px;
            border: 1px solid #fff;
            border-radius: 50%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            object-fit: cover;
        }

        .card-body {
            padding-top: 80px;
            text-align: center;
        }

        .card-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 25px;
            color: #ffffff;
            margin-bottom: 5px;
        }

        .card-subtitle {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 16px;
            color: #B3B3B3;
            margin-bottom: 5px;
        }

        .card-company {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 12px;
            color: #4E4E4E;
            margin-bottom: 20px;
        }

        .save-contact-button {
            background: #4D71FF;
            color: #FFFFFF;
            font-weight: 600;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            width: 100%;
            margin-bottom: 30px;
            transition: opacity 0.3s ease;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
        }

        .save-contact-button:hover {
            opacity: 0.9;
            color: white;
        }

        .section-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            margin-bottom: 15px;
            position: relative;
        }

        .contacts-title {
            font-size: 15px;
            color: #000000;
        }

        .follow-us-title {
            font-size: 15px;
            color: #000000;
            margin-top: 30px;
        }

        .contact-list .list-group-item {
            border: none;
            border-radius: 50px;
            margin-bottom: 10px;
            padding: 10px 20px;
            background-color: #7A95FF;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: background-color 0.2s ease;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            color: #000;
        }

        .contact-list .list-group-item span {
            color: #FFFFFF;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            flex-grow: 1;
            text-align: center;
        }

        .contact-list .list-group-item i {
            margin-right: 15px;
            color: #FFFFFF;
            font-size: 1.2rem;
            padding-left: 10px;
        }

        .social-icons {
            margin-bottom: 20px;
        }

        .social-icons a {
            margin: 0 30px;
            display: inline-block;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-icons a i {
            font-size: 2rem;
        }

        .social-icons .social-label {
            display: block;
            font-size: 13px;
            font-family: 'Rubik', sans-serif;
            font-weight: 400;
            margin-top: 5px;
            color: #7A7A7A;
        }

        .social-icons .fa-facebook { color: #1877f2; }
        .social-icons a:hover i.fa-facebook { color: #2d4373; }

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

        @keyframes float {

            0%,
            100% {
                transform: translateY(-3px);
            }

            50% {
                transform: translateY(3px);
            }
        }
    </style>
</head>

<body>
    <div class="card custom-card">
       <div class="custom-header" style="background: url('banner_img/client_banner/zara-b.jpg') center/cover no-repeat;">
        <div class="profile-picture">
        <img src="profile_img/client_profile/zara-p.png" alt="Zara Mumthaj">
        </div>
    </div>
            
        <div class="card-body">
            <h2 class="card-title">Zara Mumthaj</h2>
            <p class="card-subtitle">Designer</p>
            <p class="card-company" style="color: white;">FURNITURE COLLECTION</p>

            <button class="btn save-contact-button" onclick="generateVCF()">
                Save to Contact
            </button>

            <h3 class="section-title contacts-title">CONTACTS</h3>
            <div class="list-group contact-list">
                <button type="button" class="list-group-item d-flex align-items-center" onclick="window.open('tel:0753790948', '_self')">
                    <i class="fas fa-mobile-alt"></i>
                    <span>+94 75 379 0948</span>
                </button>
                <button type="button" class="list-group-item d-flex align-items-center" onclick="window.open('mailto:Zaramohideen3@gmail.com', '_self')">
                    <i class="fas fa-envelope"></i>
                    <span>Zaramohideen3@gmail.com</span>
                </button>
               <button type="button" class="list-group-item d-flex align-items-center" onclick="window.open('198,Main Street, Attidiya, Dehiwala', '_blank')">
                <i class="fas fa-map-marker-alt"></i>
                <span>198,Main Street, Attidiya, Dehiwala</span>
                </button>
            </div>

                        <h3 class="section-title follow-us-title">FOLLOW US</h3>
            <div class="d-flex justify-content-center social-icons">
                <a href="https://www.facebook.com/share/16xbNRhCbj/?mibextid=LQQJ4d" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook"></i>
                    <span class="social-label">Facebook</span>
                </a>
                <a href="https://wa.me/+94766221434" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-whatsapp"></i>
                    <span class="social-label">WhatsApp</span>
                </a>
            </div>
            
            <div class="gallery-section" style="margin-top: -10px;">
                    <div class="gallery-header" onclick="toggleGallery()">
                        <div class="gallery-title">Gallery</div>
                        <div class="gallery-toggle" id="galleryToggle">
                            <i class="fas fa-minus"></i>
                        </div>
                    </div>
                    <div class="gallery-container" id="galleryContainer">
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Zara/zara-g1.jpeg')">
                            <img src="gallery_img/client_gallerys/Zara/zara-g1.jpeg" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Zara/zara-g2.jpeg')">
                            <img src="gallery_img/client_gallerys/Zara/zara-g2.jpeg" alt="Gallery Image 2" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Zara/zara-g3.jpeg')">
                            <img src="gallery_img/client_gallerys/Zara/zara-g3.jpeg" alt="Gallery Image 3" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Zara/zara-g4.jpeg')">
                            <img src="gallery_img/client_gallerys/Zara/zara-g4.jpeg" alt="Gallery Image 4" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Zara/zara-g5.jpeg')">
                            <img src="gallery_img/client_gallerys/Zara/zara-g5.jpeg" alt="Gallery Image 5" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/Zara/zara-g6.jpeg')">
                            <img src="gallery_img/client_gallerys/Zara/zara-g6.jpeg" alt="Gallery Image 6" class="gallery-image">
                        </div>
                    </div>
                </div>
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
        // Gallery images array
        const galleryImages = [
            'gallery_img/client_gallerys/Zara/zara-g1.jpeg',
            'gallery_img/client_gallerys/Zara/zara-g2.jpeg',
            'gallery_img/client_gallerys/Zara/zara-g3.jpeg',
            'gallery_img/client_gallerys/Zara/zara-g4.jpeg',
            'gallery_img/client_gallerys/Zara/zara-g5.jpeg',
            'gallery_img/client_gallerys/Zara/zara-g6.jpeg',
        ];

        async function generateVCF() {
            const contactData = {
                firstName: "Zara",
                lastName: "Mumthaj",
                title: "Designer",
                phoneWork: "",
                phoneMobile: "+94 75 379 0948",
                email: "Zaramohideen3@gmail.com",
                email2: "",
                email3: "",
                website: "",
                website2: "",
                website3: "",
                address: "198,Main Street, Attidiya, Dehiwala",
                address2: "",
                about: "",
                logo: "https://tapilinq.com/profile_img/client_profile/zara-p.png",
                profileImage: "https://tapilinq.com/profile_img/client_profile/zara-p.png" // Same as logo in this case
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
    </script>
</body>
</html>