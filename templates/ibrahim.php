<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .custom-card75 {
            border-radius: 15px;
            overflow: hidden;
            background: linear-gradient(135deg, #482f91 0%, #2a1c5a 100%);
            width: 450px;
            height: auto;
            margin-top: -55px;
            color: #ffffff;
        }

        .custom-header {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 35px 20px;
            position: relative;
            background-image: url('banner_img/client_banner/ibrahim-b.png?id12');
            height: 200px;
        }

        .profile-picture75 {
            position: absolute;
            top: 105%;
            left: 20%;
            transform: translate(-50%, -50%);
        }

        .profile-picture75 img {
            width: 130px;
            height: 130px;
            border: 4px solid #ffffff;
            border-radius: 50%;
        }

        .custom-save-button75 {
            background: #f47920;
            color: #ffffff;
            font-weight: bold;
            border: none;
            padding: 10px;
            margin-left: 48%;
            margin-top: -30px;
            transition: background 0.3s;
            border-radius: 8px;
        }

        .custom-save-button75:hover {
            background: #d96b1c;
        }

        .save-icon {
            width: 24px;
            height: 24px;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: #ffffff;
        }

        .custom-phone1 {
            background-color: #f47920;
            color: #ffffff;
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            border: 2px solid #ffffff;
            border-radius: 10px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .custom-phone1:hover {
            background-color: #d96b1c;
            border-color: #ffffff;
        }

        .list-group-item {
            background-color: #f47920;
            color: #ffffff;
            border-radius: 8px;
            margin-bottom: 10px;
            border: 1px solid #ffffff;
            padding: 10px 15px;
        }

        .list-group-item:hover {
            background-color: #d96b1c;
            border-color: #ffffff;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .custom-phone {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .social-icon {
            font-size: 1.9rem;
            transition: transform 0.3s;
        }

        .social-icon img {
            width: 50px;
            height: 50px;
            transition: transform 0.3s, filter 0.3s;
        }

        .social-icon:hover img {
            transform: scale(1.1);
            filter: brightness(1.2);
        }

        .gallery-section {
            background-color: #5a3ea6;
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
        }

        .gallery-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            color: #ffffff;
            cursor: pointer;
        }

        .gallery-title {
            font-size: 18px;
            font-weight: 600;
        }

        .gallery-toggle {
            font-size: 18px;
            color: #ffffff;
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-top: 15px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            aspect-ratio: 1;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(244, 121, 32, 0.5);
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
        }

        .lightbox-image {
            max-width: 100%;
            max-height: 80vh;
            object-fit: contain;
            border-radius: 5px;
            border: 2px solid #f47920;
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #ffffff;
            font-size: 30px;
            cursor: pointer;
            z-index: 1001;
            transition: all 0.3s ease;
        }

        .lightbox-close:hover {
            color: #f47920;
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
            background: none;
            border: none;
            color: #ffffff;
            font-size: 40px;
            cursor: pointer;
            opacity: 0.7;
            transition: all 0.3s ease;
            z-index: 1001;
        }

        .lightbox-nav button:hover {
            opacity: 1;
            color: #f47920;
            transform: scale(1.2);
        }

        @media (max-width: 480px) {
            .custom-card75 {
                width: 95%;
                margin-top: -30px;
            }

            .custom-header {
                height: 180px;
                padding: 25px 15px;
            }

            .profile-picture75 img {
                width: 110px;
                height: 110px;
            }

            .contact-name {
                font-size: 24px;
            }

            .contact-title {
                font-size: 16px;
            }

            .gallery-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        footer a {
            color: rgb(255, 255, 255);
            transition: color 0.3s;
        }

        footer a:hover {
            color: #d96b1c;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card75 shadow-lg">
            <div class="card-header custom-header text-center">
                <div class="profile-picture75">
                    <img src="profile_img/client_profile/ibrahim-p.png?id123" alt="Ikram M Ibrahim" class="rounded-circle">
                </div>
            </div>
            <br><br>
            <button class="btn w-50 custom-save-button75" id="saveContactBtn">
                <i class="fas fa-save me-2"></i>
                SAVE TO CONTACTS
            </button>
            <div class="card-body text-left">
                <h2 class="card-title" style="font-size: 30px;">Ikram M Ibrahim</h2>
                <p style="font-size: 20px;">FedEx <br>Advantis Express (Pvt) Ltd.<br>Deputy Head - Regional Sales</p>
                <a href="https://wa.me/94776907423" target="_blank" rel="noopener noreferrer"
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
                        onclick="window.open('tel:+94776907423', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="font-family: 'Montserrat', sans-serif;">+94 77 690 7423</span>
                    </button>
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('tel:+94114522222', '_self')">
                        <img src="Images/icon/landphone.png" alt=""
                            style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="font-family: 'Montserrat', sans-serif;">+94 114 522 222</span>
                    </button>
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('mailto:ikram.ib@fedexlk.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="font-family: 'Montserrat', sans-serif; font-size:16px;">ikram.ib@fedexlk.com</span>
                    </button>
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://www.fedex.com/en-mn/home.html', '_blank')">
                        <img src="Images/icon/internet.png" alt=""
                            style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="font-family: 'Montserrat', sans-serif; font-size:16px;">www.fedex.com</span>
                    </button>
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://www.google.com/maps/search/?api=1&query=Sales+IL+Tower,+46/56,+Nawam+Mawatha,+Colombo+02,+Srilanka', '_blank')">
                        <img src="Images/icon/map.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="font-family: 'Montserrat', sans-serif; font-size:16px;">Sales IL Tower, 46/56, Nawam
                            Mawatha, Colombo 02, Srilanka.</span>
                    </button>
                </div>
                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px;">CONNECT WITH SOCIAL MEDIA
                </p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3 social-icon">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3 social-icon">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3 social-icon">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3 social-icon">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="">
                    </a>
                </div>
                <div class="gallery-section">
                    <div class="gallery-header" onclick="toggleGallery()">
                        <div class="gallery-title">Gallery</div>
                        <div class="gallery-toggle" id="galleryToggle">
                            <i class="fas fa-minus"></i>
                        </div>
                    </div>
                    <div class="gallery-container" id="galleryContainer">
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/ibrahim/ibrahim-g1.jpg')">
                            <img src="gallery_img/client_gallerys/ibrahim/ibrahim-g1.jpg" alt="Gallery Image 1"
                                class="gallery-image">
                        </div>
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/ibrahim/ibrahim-g2.jpg')">
                            <img src="gallery_img/client_gallerys/ibrahim/ibrahim-g2.jpg" alt="Gallery Image 2"
                                class="gallery-image">
                        </div>
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/ibrahim/ibrahim-g3.jpg')">
                            <img src="gallery_img/client_gallerys/ibrahim/ibrahim-g3.jpg" alt="Gallery Image 3"
                                class="gallery-image">
                        </div>
                        <div class="gallery-item"
                            onclick="openLightbox('gallery_img/client_gallerys/ibrahim/ibrahim-g4.jpg')">
                            <img src="gallery_img/client_gallerys/ibrahim/ibrahim-g4.jpg" alt="Gallery Image 4"
                                class="gallery-image">
                        </div>
                    </div>
                </div>
                <footer style="text-align: center; padding: 10px; font-size: 14px;">
                    <a href="https://tapilinq.com/" target="_blank" style="text-decoration: none; font-size: 10px;">
                        Made with by Tapilinq | Click now
                    </a>
                </footer>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Gallery-related functions (unchanged)
    const galleryImages = [
        'gallery_img/client_gallerys/ibrahim/ibrahim-g1.jpg',
        'gallery_img/client_gallerys/ibrahim/ibrahim-g2.jpg',
        'gallery_img/client_gallerys/ibrahim/ibrahim-g3.jpg',
        'gallery_img/client_gallerys/ibrahim/ibrahim-g4.jpg'
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

    document.getElementById('lightbox').addEventListener('click', function (e) {
        if (e.target === this) {
            closeLightbox();
        }
    });

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

    // VCF Generation Function (from your provided code, with minor adjustments)
    async function generateVCF(contactData) {
        const toBase64 = async (url) => {
            return new Promise((resolve, reject) => {
                const profileImage = new Image();
                // Only set crossOrigin if image is from a different domain
                if (!url.startsWith(window.location.origin) && !url.startsWith('/')) {
                    profileImage.crossOrigin = "Anonymous";
                }
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
        if (contactData.profileImage) {
            try {
                photoBase64 = await toBase64(contactData.profileImage);
            } catch (error) {
                console.error("Failed to load image for VCF:", error);
            }
        }

        let vcfLines = [
            "BEGIN:VCARD",
            "VERSION:3.0",
            `FN:${contactData.firstName} ${contactData.lastName}`,
            `N:${contactData.lastName};${contactData.firstName};;;`,
            `ORG:${contactData.organization}`,
            `TITLE:${contactData.title}`,
            contactData.phoneMobile ? `TEL;TYPE=CELL,VOICE:${contactData.phoneMobile}` : '',
            contactData.phoneOffice ? `TEL;TYPE=WORK,VOICE:${contactData.phoneOffice}` : '',
            contactData.email ? `EMAIL;TYPE=WORK:${contactData.email}` : '',
            contactData.website ? `URL:${contactData.website}` : '',
            contactData.address ? `ADR;TYPE=WORK:;;${contactData.address};;;` : '',
            photoBase64 ? `PHOTO;ENCODING=b;TYPE=JPEG:${photoBase64}` : '',
            "END:VCARD"
        ];

        const vcfContent = vcfLines.filter(line => line).join('\n');
        const blob = new Blob([vcfContent], { type: 'text/vcard' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `${contactData.firstName}_${contactData.lastName}.vcf`;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    }

    // Extract contact details and trigger VCF generation
    document.getElementById('saveContactBtn').addEventListener('click', async function () {
        // Extract name
        const nameElement = document.querySelector('.card-body h2.card-title');
        const fullName = nameElement ? nameElement.textContent.trim() : '';
        const [firstName, ...lastNameParts] = fullName.split(' ');
        const lastName = lastNameParts.join(' ');

        // Extract title and organization
        const infoElement = document.querySelector('.card-body p[style*="font-size: 20px"]');
        const infoLines = infoElement ? infoElement.innerHTML.split('<br>').map(line => line.trim()) : [];
        const organization = infoLines[1] || '';
        const title = infoLines[2] || '';

        // Extract contact details from list-group-items
        const listItems = document.querySelectorAll('.list-group-item');
        let phoneMobile = '';
        let phoneOffice = '';
        let email = '';
        let website = '';
        let address = '';

        listItems.forEach(item => {
            const span = item.querySelector('span.custom-phone');
            const text = span ? span.textContent.trim() : '';
            const onclick = item.getAttribute('onclick') || '';

            if (onclick.includes('tel:') && !phoneMobile && text.startsWith('+94')) {
                phoneMobile = text;
            } else if (onclick.includes('tel:') && !phoneOffice) {
                phoneOffice = text;
            } else if (onclick.includes('mailto:')) {
                email = text;
            } else if (onclick.includes('www.')) {
                website = text;
            } else if (onclick.includes('google.com/maps')) {
                address = text;
            }
        });

        // Extract profile image
        const profileImageElement = document.querySelector('.profile-picture75 img');
        const profileImage = profileImageElement ? profileImageElement.src : '';

        // Prepare contact data
        const contactData = {
            firstName: firstName || 'Unknown',
            lastName: lastName || 'Unknown',
            title: title,
            organization: organization,
            phoneMobile: phoneMobile,
            phoneOffice: phoneOffice,
            email: email,
            address: address,
            website: website,
            profileImage: profileImage
        };

        // Generate VCF
        await generateVCF(contactData);
    });

    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('galleryContainer').style.display = 'grid';
    });
</script>
   
</body>

</html>