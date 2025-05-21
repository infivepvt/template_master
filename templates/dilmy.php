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
                        background: linear-gradient(to right, #3711a4,#4ad9dd);
                        /* background: linear-gradient(to right, #cb245c,#a939c3, #5c25f2); */
            background-color:#3642bc;
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
                        background: linear-gradient(to right, #3711a4,#4ad9dd);
                        /* background: linear-gradient(to right, #cb245c,#a939c3, #5c25f2); */
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
            /* background: linear-gradient(to right, #5d8cff, #2bd1ee); */
            /* background: linear-gradient(to right, #4ad9dd, #3711a4); */
            background: linear-gradient(to right, #3711a4,#4ad9dd);
            /* background: linear-gradient(to right, #cb245c,#a939c3, #5c25f2); */
        }
    </style>

</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">
            <div class="card-header custom-header text-center"
                style="background-image:  url('banner_img/client_banner/dilmy-b.jpg'); height: 200px; opacity: 1; background-position: top;">
                <!-- <img src="logo_img/main_logo/Main_Design-l.png" alt="Company Logo" class="custom-logo" height="80px"
                    style="width: 245px; height: auto; opacity: 1;"> -->
                <div class="profile-picture">
                    <img src="profile_img/client_profile/dilmy-p.jpeg" alt="Saliya Pathum" class="rounded-circle" style="scale:1.2 ;">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center"
                style="background-color: #FFFFFF; color: #000000; text-decoration: none; ">
                <h2 class="card-title" style="font-size: 27px; text-transform: uppercase;">DILMY RANAWEERA</h2>
                <p style="color: #000000; font-size: 21px; text-transform: uppercase;">Public figure</p>

                <p class="fw-bold mt-4" style="font-family: 'Montserrat', sans-serif; font-size:19px">CONNECT WITH SOCIAL MEDIA
                </p>
                <div class="d-flex flex-wrap justify-content-center" style="margin-top: -10px;">
                    <a href="https://www.instagram.com/dilmyranaweera/" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.facebook.com/dily.maria.7" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.youtube.com/@dilmyranaweera" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.tiktok.com/@dilmyranaweera" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>

                <br>

                <a href="https://wa.me/94714994579" target="_blank" rel="noopener noreferrer"
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
                        class="gradient-button list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('tel:0714994579', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px;">
                        <span class=" flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">0714994579</span>
                    </button>

                    <button type="button"
                        class="gradient-button list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('mailto:dilmyranaweera@gmail.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px;">
                        <span class=" flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">dilmyranaweera@gmail.com</span>
                    </button>

                    <button type="button"
                        class="gradient-button list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://www.dilmyranaweera.com', '_blank')">
                        <img src="Images/icon/internet.png" alt=""
                            style="width: 30px; height: 30px;">
                        <span class=" flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF;font-family: 'Montserrat', sans-serif; font-size:16px; font-size:16px;">www.dilmyranaweera.com</span>
                    </button>

                    <!-- <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://www.google.com/maps/search/?api=1&query=919+Oaktree+Crescent,+Newmarket', '_blank')">
                        <img src="Images/icon/map.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class=" flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">2nd Floor, 206A Wilgoda Estate Rd, Kurunegala</span>
                    </button> -->
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
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/dilmy/dilmy-g1.jfif')">
                            <img src="gallery_img/client_gallerys/dilmy/dilmy-g1.jfif" alt="Gallery Image 1" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/dilmy/dilmy-g2.jfif')">
                            <img src="gallery_img/client_gallerys/dilmy/dilmy-g2.jfif" alt="Gallery Image 2" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/dilmy/dilmy-g3.jfif')">
                            <img src="gallery_img/client_gallerys/dilmy/dilmy-g3.jfif" alt="Gallery Image 3" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/dilmy/dilmy-g4.jfif')">
                            <img src="gallery_img/client_gallerys/dilmy/dilmy-g4.jfif" alt="Gallery Image 4" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/dilmy/dilmy-g5.jfif')">
                            <img src="gallery_img/client_gallerys/dilmy/dilmy-g5.jfif" alt="Gallery Image 5" class="gallery-image">
                        </div>
                        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/dilmy/dilmy-g6.jfif')">
                            <img src="gallery_img/client_gallerys/dilmy/dilmy-g6.jfif" alt="Gallery Image 6" class="gallery-image">
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

                <button class="btn w-100 custom-save-button" onclick="generateVCF()"
                    style="font-family: 'Montserrat', sans-serif; font-size:19px; border: 2px solid orange;">
                    <img src="Images/Social_Media_Icon/save.png" alt=""
                        style="width: 50px; height: 50px; margin-right:25px;">
                    SAVE TO CONTACTS
                </button>

                <br>

                <div class="row">
                    <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@dilmyranaweera/video/7306446788980919554" data-video-id="7306446788980919554" style="max-width: 605px;min-width: 325px;">
                        <section> <a target="_blank" title="@dilmyranaweera" href="https://www.tiktok.com/@dilmyranaweera?refer=embed">@dilmyranaweera</a> Upgrade your phone today with the exclusive exchange promo deal.😍 <a title="francium" target="_blank" href="https://www.tiktok.com/tag/francium?refer=embed">#francium</a> <a title="appleasia" target="_blank" href="https://www.tiktok.com/tag/appleasia?refer=embed">#appleasia</a> <a title="iphoneexchange" target="_blank" href="https://www.tiktok.com/tag/iphoneexchange?refer=embed">#iphoneexchange</a> @Apple Asia <a target="_blank" title="♬ original sound - Dilmy Ranaweera" href="https://www.tiktok.com/music/original-sound-7306446822132681473?refer=embed">♬ original sound - Dilmy Ranaweera</a> </section>
                    </blockquote>
                    <script async src="https://www.tiktok.com/embed.js"></script>
                </div>

                <!-- <div class="row">
                    <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@dilmyranaweera/video/7267565293264768258" data-video-id="7267565293264768258" style="max-width: 605px;min-width: 325px;">
                        <section> <a target="_blank" title="@dilmyranaweera" href="https://www.tiktok.com/@dilmyranaweera?refer=embed">@dilmyranaweera</a> Earlier one got deleted :( Show some love💖 Location : Hiriketiya Restaurant : La Playa <a title="beachessrilanka" target="_blank" href="https://www.tiktok.com/tag/beachessrilanka?refer=embed">#beachessrilanka</a> <a title="hiriketiya" target="_blank" href="https://www.tiktok.com/tag/hiriketiya?refer=embed">#hiriketiya</a> <a title="laplayahiriketiya" target="_blank" href="https://www.tiktok.com/tag/laplayahiriketiya?refer=embed">#laplayahiriketiya</a> <a target="_blank" title="♬ Radio - Lana Del Rey" href="https://www.tiktok.com/music/Radio-249835302406569985?refer=embed">♬ Radio - Lana Del Rey</a> </section>
                    </blockquote>
                    <script async src="https://www.tiktok.com/embed.js"></script>
                </div> -->


                <!-- <div class="container gallery">
                    <div class="row g-3">
                        <div class="col-4">
                            <img src="gallery_img/client_gallerys/dilmy/dilmy-g1.jfif" class="gallery-img" alt="Image 1">
                        </div>
                        <div class="col-4">
                            <img src="gallery_img/client_gallerys/dilmy/dilmy-g2.jfif" class="gallery-img" alt="Image 2">
                        </div>
                        <div class="col-4">
                            <img src="gallery_img/client_gallerys/dilmy/dilmy-g3.jfif" class="gallery-img" alt="Image 3">
                        </div>
                        <div class="col-4">
                            <img src="gallery_img/client_gallerys/dilmy/dilmy-g4.jfif" class="gallery-img" alt="Image 4">
                        </div>
                        <div class="col-4">
                            <img src="gallery_img/client_gallerys/dilmy/dilmy-g5.jfif" class="gallery-img" alt="Image 4">
                        </div>
                        <div class="col-4">
                            <img src="gallery_img/client_gallerys/dilmy/dilmy-g6.jfif" class="gallery-img" alt="Image 4">
                        </div>
                    </div>
                </div> -->






                <!-- <div class="d-flex flex-wrap justify-content-center">
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/twitter.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/social.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/pinterest.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div> -->


                <br>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Gallery images array
        const galleryImages = [
            'gallery_img/client_gallerys/dilmy/dilmy-g1.jfif',
            'gallery_img/client_gallerys/dilmy/dilmy-g2.jfif',
            'gallery_img/client_gallerys/dilmy/dilmy-g3.jfif',
            'gallery_img/client_gallerys/dilmy/dilmy-g4.jfif',
            'gallery_img/client_gallerys/dilmy/dilmy-g5.jfif',
            'gallery_img/client_gallerys/dilmy/dilmy-g6.jfif'
        ];

        async function generateVCF() {
            const contactData = {
                firstName: "Dilmy",
                lastName: "Ranaweera",
                title: "Public Figure",
                phoneWork: "",
                phoneMobile: "",
                email: "",
                email2: "",
                email3: "",
                website: "",
                website2: "",
                website3: "",
                address: "",
                address2: "",
                about: "",
                logo: "https://tapilinq.com/profile_img/client_profile/dilmy-p.jpeg",
                profileImage: "https://tapilinq.com/profile_img/client_profile/dilmy-p.jpeg" // Same as logo in this case
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