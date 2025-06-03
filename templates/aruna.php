<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Aruna Dayanatha - Business Card</title>
    <style>
        /* Basic reset and styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #ffffff;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header section */
        .profile-header {
            text-align: center;
            padding: 30px 0;
        }

        .profile-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            display: block;
            border: 5px solid white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            color: #000000;
            margin-bottom: 10px;
        }

        .title {
            font-weight: normal;
            margin-bottom: 20px;
            color: #000000;
        }

        /* About section */
        .about-section {
            text-align: center;
            margin: 40px 0;
            color: #b12249;
        }

        .about-section p {
            max-width: 600px;
            margin: 0 auto 30px;
        }

        /* Images section */
        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin: 30px 0;
        }

        .image-gallery img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Button */
        .save-button {
            display: block;
            width: 200px;
            margin: 30px auto;
            padding: 12px 20px;
            background-color: #b12249;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .save-button:hover {
            background-color: #b12249;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            color: #777;
            font-size: 14px;
        }

        /* editable */
        /* Contact info sections */
        .contact-section {
            display: flex;
            justify-content: center;
            margin: 15px 0;
            margin-right: 50px;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            text-align: center;
            font-size: 24px;
            color: #b12249;
            border: 2px solid #b12249;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .contact-details {
            width: 200px;
            margin-top: 5px;
            font-size: 20px;
            font-weight: bold;
            text-align: start;
            margin-left: 40px;
        }

        .contact-d {
            color: #000000;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="container">
        <header class="profile-header">
            <img src="profile_img/client_profile/aruna-p.png" alt="Carl Protton" class="profile-image">
            <h1 style="color: #b12249;">Aruna Dayanatha PhD</h1>
            <p class="title" style="color: #000000; font-size: 13px; text-transform: uppercase;">
                Director | Chief Conceptualist <br><br>
               779/F/2, Pannipitiya Road, Pelawatta, <br>
                Battaramulla, Sri Lanka , 10120
            </p>


           <!-- Existing mobile -->
<div class="contact-section">
    <div class="contact-icon">
        <i class="fas fa-mobile-alt" onclick="window.open('tel:+94 77 738 1514', '_self')"></i>
    </div>
    <div class="contact-details">
        <p class="contact-d">+94 77 738 1514</p>
    </div>
</div>

<!-- Additional mobile 1 -->
<div class="contact-section">
    <div class="contact-icon">
        <i class="fas fa-mobile-alt" onclick="window.open('tel:+94 77 781 2006', '_self')"></i>
    </div>
    <div class="contact-details">
        <p class="contact-d">+94 77 781 2006</p>
    </div>
</div>



<!-- Existing email -->
<div class="contact-section">
    <div class="contact-icon">
        <i class="fas fa-envelope" onclick="window.open('arunadayantha@rightx.ltd', '_self')"></i>
    </div>
    <div class="contact-details">
        <p class="contact-d">arunadayantha@rightx.ltd</p>
    </div>
</div>

<!-- Additional Gmail 1 -->
<div class="contact-section">
    <div class="contact-icon">
        <i class="fas fa-envelope" onclick="window.open('ask@RightX.Ltd', '_self')"></i>
    </div>
    <div class="contact-details">
        <p class="contact-d">ask@RightX.Ltd</p>
    </div>
</div>

            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-globe" onclick="window.open('https://www.RightX.Ltd', '_blank')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d"> www.RightX.Ltd </p>
                </div>
            </div>
        </header>

        <section class="about-section">
            <h2 style="color: #b12249;">About Me</h2>
            <p style="color: #000000;">Chartered IT Professional, <br>
            Certified Management Consultant, <br>
            Certificate Gamification Expert</p>

            <div class="image-gallery">
                <img src="gallery_img/client_gallerys/anura/anura.jpeg" alt="Business man back view">
            </div>

            <a href="#" class="save-button" id="saveContact" onclick="generateVCF()">Save to contact</a>
        </section>
    </div>

    <footer>
        <p>All rights reserved</p>
    </footer>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        async function generateVCF() {
            const contactData = {
                firstName: "Aruna",
                lastName: "Dayanatha",
                title: "Chief Conceptualist",
                phoneWork: "+94 77 738 1514",
                phoneMobile: "+94 77 781 2006",
                email: "arunadayantha@rightx.ltd",
                email2: "ask@RightX.Ltd",
                email3: "",
                website: "www.RightX.Ltd",
                website2: "",
                website3: "",
                address: "779/F/2, Pannipitiya Road, Pelawatta, Battaramulla, Sri Lanka , 10120",
                address2: "",
                about: "Chartered IT Professional",
                logo: "https://tapilinq.com/profile_img/client_profile/aruna-p.png",
                profileImage: "https://tapilinq.com/profile_img/client_profile/aruna-p.png" // Same as logo in this case
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