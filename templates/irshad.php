<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .profile-card {
            background-color: #000;
            color: #fff;
            max-width: 450px;
            width: 100%;
            font-family: 'Montserrat', sans-serif;
            margin: 0 auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .profile-banner {
            position: relative;
        }

        .profile-photo {
            width: 100%;
            object-fit: cover;
            filter: brightness(0.79);
        }

        .imagepro {
            width: 100%;
            filter: brightness(1.0);
        }

        .profile-info {
            position: absolute;
            bottom: -20px;
            left: 0%;
            transform: translateX(-30%);
            padding-left: 26%;
            margin: 4%;
            z-index: 2;
            color: #ffffff;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
            text-align: left;
        }

        .profile-info h2 {
            font-size: 2rem;
            font-weight: bold;
        }

        .profile-info p {
            font-size: 1.3rem;
            margin-bottom: 20px;
        }

        .profile-contact-icons {
            margin-top: 15px;
            display: flex;
            justify-content: left;
            align-items: center;
            gap: 20px;
            padding: 15px;
        }

        .contact-button {
            background-color: #fff;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-button:hover {
            background-color: #444444;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: #000;
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
    <div class="profile-card template-9">
        <div class="profile-banner">
            <div class="imagepro">
                <img class="profile-photo" src="profile_img/client_profile/irshad-p.png" alt="Michael Fassbender">
            </div>
            <br>
            <br>
            <div class="profile-info">
                <h2>Mohamed irshad</h2>
                <p>Banu stores / Owner</p>
            </div>
        </div>

        <div class="profile-contact-icons">
            <button type="button" class="contact-button" onclick="window.open('tel:0757137007', '_self')">
                <i class="fas fa-phone contact-icon"></i>
            </button>
            <button type="button" class="contact-button"
                onclick="window.open('https://wa.me/94 0767137007', '_blank')">
                <i class="fab fa-whatsapp contact-icon"></i>
            </button>
            <button type="button" class="contact-button"
                onclick="window.open('https://maps.app.goo.gl/muuP9RBBQpMfNkZk9', '_blank')">
                <i class="fas fa-map-marker-alt contact-icon"></i>
            </button>
        </div>
        <!-- gallery -->
        <!-- <div class="gallery-section">
            <div class="gallery-header" onclick="toggleGallery()">
                <div class="gallery-title">Gallery</div>
                <div class="gallery-toggle" id="galleryToggle">
                    <i class="fas fa-minus"></i>
                </div>
            </div>
            <div class="gallery-container" id="galleryContainer">
                <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g1.jpg')">
                    <img src="gallery_img/main_gallerys/t6g1.jpg" alt="Gallery Image 1" class="gallery-image">
                </div>
                <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g2.jpg')">
                    <img src="gallery_img/main_gallerys/t6g2.jpg" alt="Gallery Image 2" class="gallery-image">
                </div>
                <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g3.jpg')">
                    <img src="gallery_img/main_gallerys/t6g3.jpg" alt="Gallery Image 3" class="gallery-image">
                </div>
                <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g4.jpg')">
                    <img src="gallery_img/main_gallerys/t6g4.jpg" alt="Gallery Image 4" class="gallery-image">
                </div>
                <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g5.jpg')">
                    <img src="gallery_img/main_gallerys/t6g5.jpg" alt="Gallery Image 5" class="gallery-image">
                </div>
                <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g6.jpg')">
                    <img src="gallery_img/main_gallerys/t6g6.jpg" alt="Gallery Image 6" class="gallery-image">
                </div>
            </div>
        </div> -->

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

        <div class="about-section">
            <div class="container">
                <div class="rounded-4 p-4 mx-auto" style="background-color: #363636; max-width: 600px;">
                    <h5 class="text-center">About Us</h5>
                    <p class="text-center text-light mb-0">Hi. I am Mohamed irshad, working as Banu Stores Owner</p>
                </div>
            </div>
            <br>
            <button class="btn h-100 custom-save-button social-media-button" onclick="downloadVCF()">
                <i class="fas fa-save me-2"></i>
                SAVE TO CONTACTS
            </button>
        </div>

        <div class="footer">
            <p>All rights reserved</p>
        </div>
    </div>

    <script>
        // Gallery images array
        const galleryImages = [
            'gallery_img/main_gallerys/t6g1.jpg',
            'gallery_img/main_gallerys/t6g2.jpg',
            'gallery_img/main_gallerys/t6g3.jpg',
            'gallery_img/main_gallerys/t6g4.jpg',
            'gallery_img/main_gallerys/t6g5.jpg',
            'gallery_img/main_gallerys/t6g6.jpg'
        ];

        let currentImageIndex = 0;

        async function generateVCF() {
    // Extract contact data from the HTML
    const nameElement = document.querySelector('.profile-info h2');
    const titleElement = document.querySelector('.profile-info p');
    const phoneButton = document.querySelector('.profile-contact-icons button:nth-child(1)');
    const whatsappButton = document.querySelector('.profile-contact-icons button:nth-child(2)');
    const emailButton = document.querySelector('.profile-contact-icons button:nth-child(3)');
    const websiteButton = document.querySelector('.profile-contact-icons button:nth-child(4)');
    const addressButton = document.querySelector('.profile-contact-icons button:nth-child(5)');
    const aboutSection = document.querySelector('.about-section p');
    
    // Get the profile image URL
    const profileImage = document.querySelector('.profile-photo').src;
    
    // Prepare contact data
    const fullName = nameElement.textContent.trim();
    const nameParts = fullName.split(' ');
    const firstName = nameParts[0];
    const lastName = nameParts.slice(1).join(' ');
    
    const contactData = {
        firstName: firstName,
        lastName: lastName,
        title: titleElement.textContent.trim(),
        phoneMobile: phoneButton.onclick.toString().match(/tel:([^']+)/)[1],
        phoneWhatsapp: whatsappButton.onclick.toString().match(/wa\.me\/([^']+)/)[1].replace(/\s/g, ''),
        email: emailButton.onclick.toString().match(/mailto:([^']+)/)[1],
        website: websiteButton.onclick.toString().match(/open\('([^']+)/)[1],
        address: addressButton.onclick.toString().match(/goo\.gl\/[^']+/)[0],
        note: aboutSection.textContent.trim()
    };

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
    try {
        photoBase64 = await toBase64(profileImage);
    } catch (error) {
        console.error("Failed to load image for VCF:", error);
    }

    let vcfLines = [
        "BEGIN:VCARD",
        "VERSION:3.0",
        `FN:${contactData.firstName} ${contactData.lastName}`,
        `N:${contactData.lastName};${contactData.firstName};;;`,
        `TITLE:${contactData.title}`,
        `TEL;TYPE=CELL,VOICE:${contactData.phoneMobile}`,
        `TEL;TYPE=CELL,WHATAPP:${contactData.phoneWhatsapp}`,
        `EMAIL;TYPE=WORK:${contactData.email}`,
        `URL:${contactData.website}`,
        `ADR;TYPE=WORK:;;${contactData.address};;;`,
        `NOTE:${contactData.note}`,
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

// Replace the existing downloadVCF function with this new one
function downloadVCF() {
    generateVCF();
}
    </script>
</body>

</html>