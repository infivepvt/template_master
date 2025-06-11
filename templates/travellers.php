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
            overflow: hidden;
            background: #EEF1FF;
            min-height: 100vh;
        }

        .custom-header {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 35px 20px;
            position: relative;
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

        .custom-phone {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .fw {
            font-weight: bold;
            margin-top: 20px;
        }

        .profile-header13 {
            background-color: #000000;
            border-radius: 30px;
            max-width: 95%;
            margin: 0 auto;
            padding: 20px;
            margin-top: -50px;
        }

        .profile-contact-icons13 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            justify-content: center;
            gap: 25px;
            max-width: 400px;
            margin: 0 auto;
        }

        .contact-icon-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-icon-button {
            background-color: rgb(255, 255, 255);
            border-radius: 10px;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
        }

        .contact-icon-label {
            margin-top: 5px;
            font-size: 0.8rem;
            color: #FFFFFF;
            text-align: center;
            width: 90px;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: rgb(0, 0, 0);
        }

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

        .l-m {
            width: 160px;
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
    </style>
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="card custom-card15 shadow-lg rounded-0" style="background-color: #000000;">
            <div class="card-header custom-header text-center" style="background-color:white; height: 200px; opacity: 100%;">
                <img src="logo_img/client_logo/travellers-l.png" alt="" class="l-m">

                <div class="profile-picture">
                    <img src="profile_img/client_profile/travellers-p.png" alt="Travellers Marketplace Pvt Ltd" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center" style="background-color: #000000; color: #000000;">
                <h2 style="font-size: 30px; color: white;">Travellers Marketplace Pvt Ltd</h2>
                <p style="color:rgb(255, 255, 255); font-size: 20px;">Travel and Tourism</p>
                <p style="color:rgb(255, 255, 255); font-size: 16px;">Director: Saman K. Konara</p>
                <br>
                <br>
                <br>
                <div class="profile-header13">
                    <div class=" d-flex justify-content-center flex-wrap row">
                        <!-- Hotline Button -->
                        <div class="contact-icon-container col-4">
                            <button type="button" class="contact-icon-button" onclick="window.open('tel:+94777777035', '_self')">
                                <i class="fas fa-phone contact-icon rotated-90"></i>
                            </button>
                            <p class="contact-icon-label">Hotline</p>
                        </div>
                        <!-- Director's Personal Number -->
                        <div class="contact-icon-container col-4">
                            <button type="button" class="contact-icon-button" onclick="window.open('tel:+94772773777', '_self')">
                                <i class="fas fa-mobile-alt contact-icon rotated-0"></i>
                            </button>
                            <p class="contact-icon-label">Director's Mobile</p>
                        </div>
                        <!-- Company Email -->
                        <div class="contact-icon-container col-4">
                            <button type="button" class="contact-icon-button" onclick="window.open('mailto:Hello@travellers.lk', '_self')">
                                <i class="fas fa-envelope contact-icon"></i>
                            </button>
                            <p class="contact-icon-label">Company Email</p>
                        </div>
                        <!-- Director's Email -->
                        <div class="contact-icon-container col-4">
                            <button type="button" class="contact-icon-button" onclick="window.open('mailto:Director@travellers.lk', '_self')">
                                <i class="fas fa-envelope contact-icon"></i>
                            </button>
                            <p class="contact-icon-label">Director's Email</p>
                        </div>
                        <!-- Website -->
                        <div class="contact-icon-container col-4">
                            <button type="button" class="contact-icon-button" onclick="window.open('https://www.travellers.lk', '_blank')">
                                <i class="fas fa-globe contact-icon"></i>
                            </button>
                            <p class="contact-icon-label">Website</p>
                        </div>
                    </div>
                    <!-- Locations Section -->
                    <div style="margin-top: 20px; color: white; font-size: 14px;">
                        <p><strong>Locations:</strong></p>
                        <p>🌟 United Arab Emirates</p>
                        <p>🌟 Sri Lanka</p>
                        <p><a href="mailto:Colombo@travellers.lk" style="color: #00d0ea; text-decoration: none;">📍 Colombo</a></p>
                        <p><a href="mailto:Kandy@travellers.lk" style="color: #00d0ea; text-decoration: none;">📍 Kandy</a></p>
                        <p><a href="mailto:Kurunegala@travellers.lk" style="color: #00d0ea; text-decoration: none;">📍 Kurunegala</a></p>
                        <p><a href="mailto:Nuwaraeliya@travellers.lk" style="color: #00d0ea; text-decoration: none;">📍 Nuwara Eliya</a></p>
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
                            <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g1.jpg', 0)">
                                <img src="gallery_img/main_gallerys/t6g1.jpg" alt="Gallery Image 1" class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g2.jpg', 1)">
                                <img src="gallery_img/main_gallerys/t6g2.jpg" alt="Gallery Image 2" class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g3.jpg', 2)">
                                <img src="gallery_img/main_gallerys/t6g3.jpg" alt="Gallery Image 3" class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g4.jpg', 3)">
                                <img src="gallery_img/main_gallerys/t6g4.jpg" alt="Gallery Image 4" class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g5.jpg', 4)">
                                <img src="gallery_img/main_gallerys/t6g5.jpg" alt="Gallery Image 5" class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g6.jpg', 5)">
                                <img src="gallery_img/main_gallerys/t6g6.jpg" alt="Gallery Image 6" class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Enhanced Lightbox -->
                    <div class="lightbox" id="lightbox">
                        <span class="lightbox-close" onclick="closeLightbox()">×</span>
                        <div class="lightbox-nav">
                            <button onclick="changeImage(-1)">❮</button>
                            <button onclick="changeImage(1)">❯</button>
                        </div>
                        <div class="lightbox-content">
                            <img id="lightbox-image" class="lightbox-image" src="" alt="">
                            <div class="lightbox-counter" id="lightboxCounter"></div>
                        </div>
                    </div>
                    <!-- <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:15px; color:white;">CONNECT WITH SOCIAL MEDIA</p>
                    <div class="d-flex flex-wrap justify-content-center">
                        <a href="https://www.instagram.com/travellers.lk" target="_blank" rel="noopener noreferrer" class="m-3">
                            <img src="Images/Social_Media_Icon/instagram.png" alt="Instagram" style="width: 50px; height: 50px;">
                        </a>
                        <a href="https://www.facebook.com/travellers.lk" target="_blank" rel="noopener noreferrer" class="m-3">
                            <img src="Images/Social_Media_Icon/facebook.png" alt="Facebook" style="width: 50px; height: 50px;">
                        </a>
                        <a href="https://www.youtube.com/@travellerslk" target="_blank" rel="noopener noreferrer" class="m-3">
                            <img src="Images/Social_Media_Icon/youtube.png" alt="YouTube" style="width: 50px; height: 50px;">
                        </a>
                    </div> -->
                    <br>
                    <button class="btn w-100 custom-save-button">
                        <i class="fas fa-save me-2"></i>
                        SAVE TO CONTACTS
                    </button>
                </div>
                <br>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Gallery functionality
        const galleryImages = [
            'gallery_img/main_gallerys/t6g1.jpg',
            'gallery_img/main_gallerys/t6g2.jpg',
            'gallery_img/main_gallerys/t6g3.jpg',
            'gallery_img/main_gallerys/t6g4.jpg',
            'gallery_img/main_gallerys/t6g5.jpg',
            'gallery_img/main_gallerys/t6g6.jpg'
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
            if (currentImageIndex >= galleryImages.length) {
                currentImageIndex = 0;
            } else if (currentImageIndex < 0) {
                currentImageIndex = galleryImages.length - 1;
            }
            document.getElementById('lightbox-image').src = galleryImages[currentImageIndex];
            document.getElementById('lightboxCounter').textContent = `${currentImageIndex + 1} / ${galleryImages.length}`;
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
        // Save to contacts functionality
        document.querySelector('.custom-save-button').addEventListener('click', async function() {
            const contactData = {
                firstName: "Saman",
                lastName: "K. Konara",
                title: "Director",
                organization: "Travellers Marketplace Pvt Ltd",
                phoneMobile: "+94772773777",
                phoneCompany: "+94777777035",
                email: "Director@travellers.lk",
                emailCompany: "Hello@travellers.lk",
                locations: "United Arab Emirates | Sri Lanka | Colombo | Kandy | Kurunegala | Nuwara Eliya",
                website: "https://www.travellers.lk",
                profileImage: "profile_img/client_profile/travellers-p.png"
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
                `EMAIL;TYPE=WORK:${contactData.emailCompany}`,
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
    </script>
</body>

</html>