<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card - Agra Pulathisi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: #0A0F12;
            font-family: 'Open Sans', sans-serif;
            color: #FFFFFF;
            margin: 0;
            padding: 0;
        }

        .custom-card {
            /* border-radius: 20px; */
            overflow: hidden;
            background: linear-gradient(145deg, #1E2528, #2A3236);
            width: 420px;
            /* margin: 40px auto; */
            border: none;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
        }

        .custom-header {
            background-size: cover;
            background-position: center;
            height: 180px;
            position: relative;
            background-color: #000000;
            background-image: url("banner_img/client_banner/agra-b.png");
        }

        .profile-picture {
            position: absolute;
            bottom: -65px;
            left: 50%;
            transform: translateX(-50%);
        }

        .profile-picture img {
            width: 120px;
            height: 120px;
            border: 5px solid #FFFFFF;
            border-radius: 50%;
            object-fit: cover;
        }

        .card-body {
            background-color: transparent;
            color: #FFFFFF;
            padding: 80px 20px 20px;
            text-align: center;
        }

        h2.card-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 2rem;
            color: #FFFFFF;
            margin: 0 0 0.3rem;
        }

        .card-body p.role {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            color: #E0E0E0;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }

        .card-body p.info {
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            font-size: 0.95rem;
            color: #B0B0B0;
            margin-bottom: 0.5rem;
        }

        .fw-bold {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 1.2rem;
            color: #FFFFFF;
            margin: 1.5rem 0 1rem;
        }

        .social-icon {
            font-size: 1.6rem;
            transition: opacity 0.3s;
        }

        .social-icon:hover {
            opacity: 0.7;
        }

        .facebook-icon {
            color: #1877F2;
        }

        .instagram-icon {
            color: #E1306C;
        }

        .tiktok-icon {
            color: #000000;
        }

        .save-icon {
            color: #FFFFFF;
        }

        .list-group-item {
            background-color: #1A2023;
            color: #FFFFFF;
            border-radius: 10px;
            margin-bottom: 8px;
            border: none;
            padding: 12px 15px;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .list-group-item:hover {
            background-color: #2A3236;
            cursor: pointer;
        }

        .contact-icon {
            font-size: 1.3rem;
            color: #FFFFFF;
        }

        .custom-phone {
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            font-size: 0.95rem;
            color: #FFFFFF;
        }

        .custom-phone1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 1rem;
            color: #FFFFFF;
            background: linear-gradient(90deg, #3f51b5, #9c27b0);
            border: none;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 1.5rem;
            transition: filter 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .custom-phone1:hover {
            filter: brightness(1.1);
        }

        .custom-save-button {
            background: #1A2023;
            color: #FFFFFF;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 1rem;
            border: 2px solid #FFFFFF;
            border-radius: 10px;
            padding: 12px;
            transition: background 0.3s, border-color 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .custom-save-button:hover {
            background: #2A3236;
            border-color: #B0B0B0;
        }

        .sub-text {
            font-family: 'Open Sans', sans-serif;
            font-weight: 300;
            font-size: 0.9rem;
            color: #B0B0B0;
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        /* Gallery Styles */
        .gallery-section {
            padding: 0 20px 20px;
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
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

        /* Lightbox Styles */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
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
            border-radius: 8px;
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #FFFFFF;
            font-size: 1.8rem;
            cursor: pointer;
            transition: color 0.3s;
        }

        .lightbox-close:hover {
            color: #B0B0B0;
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
            color: #FFFFFF;
            font-size: 1.8rem;
            cursor: pointer;
            transition: color 0.3s;
        }

        .lightbox-nav button:hover {
            color: #B0B0B0;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="card custom-card">
            <div class="card-header custom-header">
                <div class="profile-picture">
                    <img src="logo_img/client_logo/agra-l.png" alt="Agra Sounds" class="rounded-circle">
                </div>
            </div>
            <div class="card-body">
                <h2 class="card-title">Agra Pulathisi</h2>
                <p class="role">Audio Equipment Specialist</p>
                <p class="info">Company: Agra Sounds</p>
                <p class="info">License Number: 1465642</p>
                <p class="info">Location: Rolla Street, Bur Dubai</p>

                <a href="https://wa.me/+971528211284" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                    <button class="btn w-100 custom-phone1 mt-3">
                        <i class="fab fa-whatsapp"></i>
                        CONNECT WITH WHATSAPP
                    </button>
                </a>

                <div class="list-group mb-3">
                    <button type="button" class="list-group-item contact" onclick="window.open('tel:+971528211284', '_self')">
                        <i class="fas fa-phone contact-icon"></i>
                        <span class="custom-phone">+971 52 821 1284</span>
                    </button>
                    <button type="button" class="list-group-item contact" onclick="window.open('mailto:agrasounds@gmail.com', '_self')">
                        <i class="fas fa-envelope contact-icon"></i>
                        <span class="custom-phone">agrasounds@gmail.com</span>
                    </button>
                    <button type="button" class="list-group-item contact" onclick="window.open('https://agrasounds.com/', '_blank')">
                        <i class="fas fa-globe contact-icon"></i>
                        <span class="custom-phone">agrasounds.com</span>
                    </button>
                    <button type="button" class="list-group-item contact" onclick="window.open('https://www.google.com/maps/search/?api=1&query=Rolla+Street,+Burdubai,+Dubai,+UAE', '_blank')">
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        <span class="custom-phone">Rolla Street, Bur Dubai, UAE</span>
                    </button>
                    <button type="button" class="list-group-item contact" onclick="window.open('https://g.co/kgs/t1iC9qx', '_blank')">
                        <i class="fab fa-google contact-icon"></i>
                        <span class="custom-phone">Agra Sound Rentals & DJ UAE</span>
                    </button>
                </div>

                <p class="fw-bold">WHO WE ARE</p>
                <p class="sub-text">
                    AGRA Sounds is a premier audio equipment rental company in the UAE, simplifying your event needs since 2015. With a vast inventory and full-service support—including planning, delivery, setup, and on-site assistance—we cater to conferences, banquets, and product launches of any size. Our mission is to deliver exceptional sound experiences that connect people, backed by quality service and a loyal customer base.<br><br><strong>The Sound that Brings People Together…</strong>
                </p>

                <p class="fw-bold">CONNECT WITH US</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="https://www.facebook.com/share/1DqcKmWKBZ/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="m-2">
                        <i class="fab fa-facebook-f social-icon facebook-icon"></i>
                    </a>
                    <a href="https://www.instagram.com/agrasounds?igsh=OGo2aTJqNTF3ZHox&utm_source=qr" target="_blank" rel="noopener noreferrer" class="m-2">
                        <i class="fab fa-instagram social-icon instagram-icon"></i>
                    </a>
                    <a href="https://www.tiktok.com/@agra_sounds?_t=ZS-8xFZqHalmjv&_r=1" target="_blank" rel="noopener noreferrer" class="m-2">
                        <i class="fab fa-tiktok social-icon tiktok-icon"></i>
                    </a>
                </div>

                <p class="fw-bold mt-4">GALLERY</p>
                <div class="gallery-section">
                    <div class="gallery-container" id="galleryContainer">
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/agra/agra-g1.webp')">
                            <img src="gallery_img/client_gallerys/agra/agra-g1.webp" alt="Gallery Image 1" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/agra/agra-g2.webp')">
                            <img src="gallery_img/client_gallerys/agra/agra-g2.webp" alt="Gallery Image 2" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/agra/agra-g3.webp')">
                            <img src="gallery_img/client_gallerys/agra/agra-g3.webp" alt="Gallery Image 3" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/agra/agra-g4.webp')">
                            <img src="gallery_img/client_gallerys/agra/agra-g4.webp" alt="Gallery Image 4" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/agra/agra-g5.webp')">
                            <img src="gallery_img/client_gallerys/agra/agra-g5.webp" alt="Gallery Image 5" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/agra/agra-g6.webp')">
                            <img src="gallery_img/client_gallerys/agra/agra-g6.webp" alt="Gallery Image 6" class="gallery-image">
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

                <button class="btn w-100 custom-save-button mt-4" onclick="generateVCF()">
                    <i class="fas fa-save social-icon save-icon"></i>
                    SAVE TO CONTACTS
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const galleryImages = [
            'gallery_img/client_gallerys/agra/agra-g1.webp',
            'gallery_img/client_gallerys/agra/agra-g2.webp',
            'gallery_img/client_gallerys/agra/agra-g3.webp',
            'gallery_img/client_gallerys/agra/agra-g4.webp',
            'gallery_img/client_gallerys/agra/agra-g5.webp',
            'gallery_img/client_gallerys/agra/agra-g6.webp'
        ];

        async function generateVCF() {
            const contactData = {
                firstName: "Agra",
                lastName: "Pulathisi",
                title: "Audio Equipment Specialist",
                organization: "Agra Sounds",
                phoneMobile: "+971528211284",
                email: "agrasounds@gmail.com",
                address: "Rolla Street, Bur Dubai, UAE",
                website: "https://agrasounds.com/",
                profileImage: "logo_img/client_logo/agra-l.png",
                licenseNumber: "1465642"
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
                `URL:${contactData.website}`,
                `ADR;TYPE=WORK:;;${contactData.address};;;`,
                `NOTE:License Number: ${contactData.licenseNumber}`,
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

        document.getElementById('lightbox').addEventListener('click', function(e) {
            if (e.target === this) {
                closeLightbox();
            }
        });

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