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
            top: 140%;
            left: 20%;
            transform: translate(-50%, -50%);
        }

        .profile-picture img {
            width: 100px;
            height: 100px;
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
            background: linear-gradient(90deg, #2f4e24,  #c5e4c5);
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
            background: linear-gradient(90deg, #2f4e24,  #c5e4c5);
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
            background-color: #c5e4c5;
            border-radius: 50px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
        }

        .contact-icon-label {
            margin-top: 5px;
            font-size: 0.8rem;
            color:rgb(0, 0, 0) ;
            text-align: center;
            width: 90px;
        }

        .contact-icon {
            font-size: 20px;
            color:  #2f4e24;
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
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card15 shadow-lg" style="background-color:rgb(255, 255, 255);">
            <div class="card-header custom-header text-center"
                style="background-image: url('banner_img/client_banner/highhydro-b.jpg'); height: 200px; opacity: 100%;">
                <div class="profile-picture">
                    <img src="profile_img/client_profile/highhydro-p.png" alt="Linkin Park" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-left" style="background-color:rgb(255, 255, 255); color: #000000; padding-top:90px; ">
                <h2 style="font-size: 20px; color: white;margin-left:10px; color:black">Haishvithan Sanjeevan</h2>
                <p style="color:rgb(0, 0, 0); font-size: 14px; margin-left:10px">Owner</p>

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
                            <button type="button" class="contact-icon-button" onclick="window.open('tel: 070 118 4037', '_self')">
                                <i class="fas fa-phone contact-icon rotated-90"></i>
                            </button>
                            <p class="contact-icon-label">Call</p>
                        </div>

                        <!-- Office Number Button with Label -->
                        <!-- <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button" onclick="window.open('tel:', '_self')">
                                <i class="fas fa-fax contact-icon rotated-90"></i>
                            </button>
                            <p class="contact-icon-label">Office Number</p>
                        </div> -->

                        <!-- Mobile 2 Button with Label -->
                        <!-- <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button" onclick="window.open('tel:', '_self')">
                                <i class="fas fa-mobile-alt contact-icon rotated-0"></i>
                            </button>
                            <p class="contact-icon-label">Mobile 2</p>
                        </div> -->

                        <!-- Mobile 3 Button with Label -->
                        <!-- <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button" onclick="window.open('tel:', '_self')">
                                <i class="fas fa-mobile-alt contact-icon rotated-0"></i>
                            </button>
                            <p class="contact-icon-label">Mobile 3</p>
                        </div> -->

                        <!-- Email Button with Label -->
                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button" onclick="window.open('mailto:vidhan.works@gmail.com', '_self')">
                                <i class="fas fa-envelope contact-icon"></i>
                            </button>
                            <p class="contact-icon-label">Mail</p>
                        </div>

                        <!-- Address Button with Label -->
                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button" onclick="window.open(' https://www.google.com/maps/search/No.+49%2F1+A,+Kohilwatte+Road,+Angoda/@6.9456649,79.9122604,16z/data=!3m1!4b1?authuser=0&entry=ttu&g_ep=EgoyMDI1MDUwMy4wIKXMDSoASAFQAw%3D%3D', '_self')">
                                <i class="fas fa-map-marker-alt" style="color: #2f4e24"></i>
                            </button>
                            <p class="contact-icon-label">Address</p>
                        </div>
                    </div>

                    <!----About me section-->
                   <div class="aboutsec" style="margin-top:-10px">
                   <h4 style="padding-top:50px; font-size:17px; font-weight:400">About Me</h4><br>
                   <p style=" font-size:16px; font-weight:400; color: #7a7a7a ;margin-top:-15px">
                    I'm Haishvithan, building a sustainable, Biotechnology-driven hydroponic farm using vertical aeroponic towers. Without electricity-driven systems, 
                    I focus on eco-efficient nutrient delivery. My goal is to cultivate fresh vegetables, fruits, herbs, and flowers year-round through smart urban 
                    agriculture that minimizes waste, maximizes space, and leads the future of green food production.</p><br>
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
                        </div> -->
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

                    <p class="fw text-center" style="font-family: 'Montserrat', sans-serif; font-size:15px; color:black;  ">CONNECT
                        WITH SOCIAL MEDIA
                    </p>
                    <div class="d-flex flex-wrap justify-content-center">
                        <a href="https://www.instagram.com/vidhan.works10?igsh=MWFiNGhib2w4b3NlMg==" target="_blank" rel="noopener noreferrer" class="m-3">
                            <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                        </a>
                        <!-- <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                            <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                        </a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                            <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 50px; height: 50px;">
                        </a> -->
                    </div>

                    <br>
                    <button class="btn w-100 custom-save-button">
                        <i class="fas fa-save me-2"></i>
                        SAVE TO CONTACTS
                    </button>
                    <br>
                <footer style="text-align:center; padding:10px; font-size:14px; color:black;">
                    <a href="https://tapilinq.com/" target="_blank" style="text-decoration:none; color:black;">
                        Made with ❤️ by Tapilinq | Click now
                    </a>
                </footer>
                </div>
                <p style="font-weight:600; text-align:center">Where Technology Meets Nature</p>

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

    // Save to contacts functionality with profile image
    document.querySelector('.custom-save-button').addEventListener('click', async function() {
        try {
            // Get the profile image URL
            const profileImageUrl = 'profile_img/client_profile/highhydro-p.png';
            
            // Convert image to base64
            const base64Image = await getBase64Image(profileImageUrl);
            
            // Create vCard content with image
            const vcard = `BEGIN:VCARD
VERSION:3.0
FN:Haishvithan Sanjeevan
TITLE:Owner
TEL;TYPE=CELL:0701184037
EMAIL;TYPE=WORK:vidhan.works@gmail.com
ADR;TYPE=WORK:;;No. 49/1 A, Kohilwatte Road, Angoda;;Colombo;Western;Sri Lanka
URL:https://www.google.com/maps/search/No.+49%2F1+A,+Kohilwatte+Road,+Angoda
PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}
REV:${new Date().toISOString()}
END:VCARD`;

            // Create Blob with vCard content
            const blob = new Blob([vcard], { type: 'text/vcard' });
            const url = URL.createObjectURL(blob);

            // Create download link
            const link = document.createElement('a');
            link.href = url;
            link.download = 'Haishvithan Sanjeevan.vcf';
            document.body.appendChild(link);
            link.click();

            // Clean up
            document.body.removeChild(link);
            URL.revokeObjectURL(url);
        } catch (error) {
            console.error('Error generating vCard:', error);
            // Fallback to vCard without image if there's an error
            generateFallbackVCard();
        }
    });

    // Function to convert image to base64
    function getBase64Image(url) {
        return new Promise((resolve, reject) => {
            const img = new Image();
            img.crossOrigin = 'Anonymous';
            img.onload = function() {
                const canvas = document.createElement('canvas');
                canvas.width = this.naturalWidth;
                canvas.height = this.naturalHeight;
                const ctx = canvas.getContext('2d');
                ctx.drawImage(this, 0, 0);
                const dataURL = canvas.toDataURL('image/jpeg');
                resolve(dataURL.split(',')[1]); // Remove the data URL prefix
            };
            img.onerror = function() {
                reject(new Error('Could not load image'));
            };
            img.src = url;
        });
    }

    // Fallback vCard without image
    function generateFallbackVCard() {
        const vcard = `BEGIN:VCARD
VERSION:3.0
FN:Haishvithan Sanjeevan
TITLE:Owner
TEL;TYPE=CELL:0701184037
EMAIL;TYPE=WORK:vidhan.works@gmail.com
ADR;TYPE=WORK:;;No. 49/1 A, Kohilwatte Road, Angoda;;Colombo;Western;Sri Lanka
URL:https://www.google.com/maps/search/No.+49%2F1+A,+Kohilwatte+Road,+Angoda
REV:${new Date().toISOString()}
END:VCARD`;

        const blob = new Blob([vcard], { type: 'text/vcard' });
        const url = URL.createObjectURL(blob);
        const link = document.createElement('a');
        link.href = url;
        link.download = 'Haishvithan Sanjeevan.vcf';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        URL.revokeObjectURL(url);
    }
</script>
</body>
</html>