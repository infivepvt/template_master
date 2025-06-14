<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pio Travels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: #040032;
        }

        .custom-card15 {
            border-radius: 1px;
            overflow: hidden;
            background: #EEF1FF;
            width: 400px;
            height: auto;
            margin-top: -55px;
        }

        .custom-header {
            position: relative;
            padding: 35px 20px;
            height: 200px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custom-header video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 0;
        }

        /* Styles for the video banner */
        .video-banner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            /* Semi-transparent overlay */
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
            /* Ensure it's above the video but below content */
            color: white;
            font-size: 2.5em;
            /* Adjust as needed */
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            text-align: center;
            padding: 10px;
            box-sizing: border-box;
        }

        .video-banner h3 {
            margin: 0;
            font-size: 1em;
            /* Makes h3 responsive to parent font-size */
        }


        .custom-logo15 {
            width: 200px;
            position: relative;
            top: 0;
            left: 0;
            margin-bottom: 40px;
        }

        .profile-picture {
            position: relative;
            margin: 0 auto;
            margin-top: -65px;
            /* Adjusted to pull image slightly into card body */
            z-index: 1;
        }

        .profile-picture img {
            width: 150px;
            height: 150px;
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
            text-decoration: none;
            /* Ensure no underline for links */
        }

        .custom-save-button:hover {
            background: linear-gradient(90deg, #4b3ec4, #00b3c3);
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
            margin-top: 20px;
            /* Adjusted to account for profile image */
        }

        .profile-contact-icons13 {
            display: grid;
            /* Changed to 2 columns to make room for centering the last button */
            grid-template-columns: repeat(2, 1fr);
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
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
            justify-content: center;
            align-items: center;
        }

        .lightbox-content {
            max-width: 90%;
            max-height: 90%;
            text-align: center;
            z-index: 9500;
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
            color: #ffffff;
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
            z-index: 9999;
        }

        .lightbox-nav button {
            background: none;
            border: none;
            color: white;
            font-size: 40px;
            cursor: pointer;
            opacity: 0.7;
            transition: all 0.3s ease;
            z-index: 500;
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

        /* Name and title styles */
        .name-title {
            color: white;
            text-align: center;
            margin-top: 10px;
        }

        .name-title h3 {
            font-size: 24px;
            margin: 0;
        }

        .name-title p {
            font-size: 16px;
            margin: 0;
            color: #cccccc;
        }

        /* Social media icons in one line */
        .social-media-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: nowrap;
        }

        /* Style for the new About Us button */
        .about-us-button {
            margin-top: 10px;
            width: 100%; /* Default width for the button */
            font-size: 1rem;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        /* Centering the About Us button in the grid */
        .profile-contact-icons13 > .contact-icon-container:nth-child(5) {
            grid-column: span 2; /* Make it span across two columns */
            display: flex;
            justify-content: center; /* Center the content within the spanned area */
        }

        .profile-contact-icons13 > .contact-icon-container:nth-child(5) .about-us-button {
            width: 50%; /* Adjust width for visual centering effect within the spanned area */
        }


        /* Mobile responsive adjustments */
        @media (max-width: 768px) {
            .gallery-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .lightbox-nav button {
                font-size: 30px;
                opacity: 10;
            }

            .lightbox-close {
                top: 15px;
                right: 15px;
                font-size: 24px;
            }

            .profile-contact-icons13 {
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
            }

            .social-media-container {
                gap: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card15 shadow-lg" style="background-color: #040032;">
            <div class="card-header custom-header text-center">
                <video autoplay loop muted playsinline>
                    <source src="banner_img/client_banner/piotravels-b.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="video-banner">
                    <h3></h3>
                </div>
            </div>
            <div class="card-body text-center" style="background-color: #040032; color: #000000;">
                <div class="profile-picture">
                    <img src="profile_img/client_profile/piotravels-p.png" alt="Pio Travels" class="rounded-circle">
                </div>
                <br>
                <h2 style="font-size: 30px; color: white;">Pio Travels</h2>
                <div class="name-title">
                    <h3>Pio Janza</h3>
                    <p>CEO & Founder</p>
                </div>

                <div class="profile-header13"
                    style="background-color: #001F3F; border-radius: 30px; max-width: 95%; margin: 0 auto; padding: 20px; margin-top: 20px;">
                    <div class="profile-contact-icons13">
                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button" onclick="window.open('tel:+94706601313', '_self')">
                                <i class="fas fa-phone contact-icon rotated-90"></i>
                            </button>
                            <p class="contact-icon-label">Mobile 1</p>
                        </div>

                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button" onclick="window.open('tel:+94714880680', '_self')">
                                <i class="fas fa-phone contact-icon rotated-90"></i>
                            </button>
                            <p class="contact-icon-label">Mobile 2</p>
                        </div>

                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button" onclick="window.open('mailto:info@piotravels.com', '_self')">
                                <i class="fas fa-envelope contact-icon"></i>
                            </button>
                            <p class="contact-icon-label">Email</p>
                        </div>

                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button"
                                onclick="window.open('https://maps.google.com/?q=Chilaw+Road,+Wennappuwa,+Sri+Lanka', '_blank')">
                                <i class="fas fa-map-marker-alt contact-icon"></i>
                            </button>
                            <p class="contact-icon-label">Address</p>
                        </div>

                        <div class="contact-icon-container">
                            <a href="https://share.google/dXOl2w9w6xkbmPlmB" class="btn custom-save-button about-us-button" target="_blank" rel="noopener noreferrer">
                                ABOUT US
                            </a>
                        </div>
                        </div>

                    <div class="gallery-section">
                        <div class="gallery-header" onclick="toggleGallery()">
                            <div class="gallery-title">Gallery</div>
                            <div class="gallery-toggle" id="galleryToggle">
                                <i class="fas fa-minus"></i>
                            </div>
                        </div>
                        <div class="gallery-container" id="galleryContainer">
                            <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/piotravels/piotravels-g1.jpeg', 0)">
                                <img src="gallery_img/client_gallerys/piotravels/piotravels-g1.jpeg" alt="Gallery Image 1"
                                    class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/piotravels/piotravels-g2.jpeg', 1)">
                                <img src="gallery_img/client_gallerys/piotravels/piotravels-g2.jpeg" alt="Gallery Image 2"
                                    class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/piotravels/piotravels-g3.jpeg', 2)">
                                <img src="gallery_img/client_gallerys/piotravels/piotravels-g3.jpeg" alt="Gallery Image 3"
                                    class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/piotravels/piotravels-g4.jpeg', 3)">
                                <img src="gallery_img/client_gallerys/piotravels/piotravels-g4.jpeg" alt="Gallery Image 4"
                                    class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/piotravels/piotravels-g5.jpeg', 4)">
                                <img src="gallery_img/client_gallerys/piotravels/piotravels-g5.jpeg" alt="Gallery Image 5"
                                    class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/piotravels/piotravels-g6.jpeg', 5)">
                                <img src="gallery_img/client_gallerys/piotravels/piotravels-g6.jpeg" alt="Gallery Image 6"
                                    class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
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
                            <div class="lightbox-counter" id="lightboxCounter"></div>
                        </div>
                    </div>

                    <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:15px; color:white;">CONNECT
                        WITH SOCIAL MEDIA
                    </p>
                    <div class="social-media-container">
                        <a href="https://www.instagram.com/pio.travels?igsh=dXdvdHdxcHAwanBl" target="_blank"
                            rel="noopener noreferrer">
                            <img src="Images/Social_Media_Icon/instagram.png" alt="Instagram"
                                style="width: 50px; height: 50px;">
                        </a>
                        <a href="https://www.facebook.com/share/14vSspsY2z/" target="_blank" rel="noopener noreferrer">
                            <img src="Images/Social_Media_Icon/facebook.png" alt="Facebook"
                                style="width: 50px; height: 50px;">
                        </a>
                        <a href="https://youtube.com/@piotravels-ox7we?si=3Zyf6ZklSbsKYZDx" target="_blank" rel="noopener noreferrer">
                            <img src="Images/Social_Media_Icon/youtube.png" alt="YouTube"
                                style="width: 50px; height: 50px;">
                        </a>
                    </div>

                    <br>
                    <button class="btn w-100 custom-save-button" onclick="generateVCF()">
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
        // Gallery images array (no change to this as per your previous request)
        const galleryImages = [
            'gallery_img/client_gallerys/piotravels/piotravels-g1.jpeg',
            'gallery_img/client_gallerys/piotravels/piotravels-g2.jpeg',
            'gallery_img/client_gallerys/piotravels/piotravels-g3.jpeg',
            'gallery_img/client_gallerys/piotravels/piotravels-g4.jpeg',
            'gallery_img/client_gallerys/piotravels/piotravels-g5.jpeg',
            'gallery_img/client_gallerys/piotravels/piotravels-g6.jpeg'
        ];

        async function generateVCF() {
    const contactData = {
        firstName: "Pio",
        lastName: "Travels (PVT) Ltd.",
        title: "Tour Operator",
        phoneWork: "",
        phoneMobile: "+94 70 660 1313",
        phoneMobile2: "+94 71 488 0680",
        email: "info@piotravels.com",
        email2: "",
        email3: "",
        website: "https://www.piotravels.com",
        website2: "",
        website3: "",
        address: "Chilaw Road, Wennappuwa, Sri Lanka",
        address2: "",
        about: "Your trusted partner for unforgettable journeys in Sri Lanka.",
        logo: "https://tapilinq.com/profile_img/client_profile/piotravels-p.png",
        profileImage: "https://tapilinq.com/profile_img/client_profile/piotravels-p.png"
    };

    let photoBase64 = '';
    try {
        if (contactData.profileImage && contactData.profileImage.startsWith('http')) {
            // Create an image element to load the profile image
            const profileImage = new Image();
            profileImage.src = contactData.profileImage;
            profileImage.crossOrigin = "Anonymous"; // Handle cross-origin issues

            // Wait for the image to load
            await new Promise((resolve, reject) => {
                profileImage.onload = resolve;
                profileImage.onerror = () => reject(new Error("Failed to load profile image"));
            });

            // Create canvas and draw image
            const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');
            canvas.width = profileImage.naturalWidth;
            canvas.height = profileImage.naturalHeight;
            ctx.drawImage(profileImage, 0, 0);

            // Convert to base64
            photoBase64 = canvas.toDataURL('image/jpeg').split(',')[1];
        }
    } catch (error) {
        console.error("Failed to process image for VCF:", error);
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
    if (contactData.phoneMobile2) vcfLines.push(`TEL;TYPE=CELL:${contactData.phoneMobile2}`);
    if (contactData.email) vcfLines.push(`EMAIL:${contactData.email}`);
    if (contactData.email2) vcfLines.push(`EMAIL:${contactData.email2}`);
    if (contactData.email3) vcfLines.push(`EMAIL:${contactData.email3}`);
    if (contactData.website) vcfLines.push(`URL:${contactData.website}`);
    if (contactData.website2) vcfLines.push(`URL:${contactData.website2}`);
    if (contactData.website3) vcfLines.push(`URL:${contactData.website3}`);
    if (contactData.address) vcfLines.push(`ADR;TYPE=WORK:;;${contactData.address};;;;`);
    if (contactData.address2) vcfLines.push(`ADR;TYPE=HOME:;;${contactData.address2};;;;`);
    if (contactData.about) vcfLines.push(`NOTE:${contactData.about}`);
    if (photoBase64) {
        vcfLines.push(`PHOTO;ENCODING=b;TYPE=JPEG:${photoBase64}`);
    }

    vcfLines.push("END:VCARD");

    const vcfContent = vcfLines.join('\n');

    // Trigger download
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
    </script>
</body>

</html>