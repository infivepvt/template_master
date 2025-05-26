<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .card-container12 {
            margin: unset;
            border-radius: 0px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            font-family: Arial, sans-serif;
        }

        /* Profile Header */
        .profile-header12 {
            padding: 30px;
            color: white;
        }

        .profile-image {
            width: 120px;
            height: 120px;
            border: 4px solid #fff;
        }

        .company-title {
            font-size: 1.2rem;
            margin-top: 15px;
        }

        .profile-name {
            font-size: 1.8rem;
            margin: 5px 0;
            font-weight: bold;
        }

        .job-title {
            font-size: 1rem;
            margin-top: 5px;
            color: #fff;
        }

        /* Contact Icons */
        .contact-icons .icon {
            font-size: 1.5rem;
            color: #ff1a1a;
            text-decoration: none;
            padding: 0 5px;
        }

        /* About Section */
        .about-section {
            background-color: #222;
            color: white;
            padding: 20px;
        }

        .about-section h5 {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .about-section p {
            font-size: 0.9rem;
            margin: 0;
        }

        /* Social Media Links */
        .social-links .icon {
            font-size: 1.5rem;
            color: #ff1a1a;
            text-decoration: none;
            padding: 0 5px;
        }

        /* Footer */
        .footer {
            background-color: #333333;
            padding: 10px;
            color: white;
            font-size: 0.9rem;
        }

        /* Gallery Styles */
        .gallery-section {
            padding: 20px;
        }

        .gallery-preview {
            gap: 10px;
        }

        .gallery-item {
            position: relative;
            width: 150px;
            height: 150px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
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

        .gallery-text {
            color: white;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }

        /* Image Preview Modal */
        .image-preview-modal .modal-content {
            background: transparent;
            border: none;
        }

        .image-preview-modal .modal-body {
            padding: 0;
            position: relative;
        }

        .modal-image-container {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-preview-modal img {
            max-width: 90vw;
            max-height: 90vh;
            margin: auto;
            display: block;
            border-radius: 8px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
            animation: zoomIn 0.3s ease-out;
        }

        .modal-close-btn {
            position: absolute;
            top: -35px;
            right: -35px;
            color: white;
            font-size: 30px;
            cursor: pointer;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
            transition: transform 0.2s ease;
        }

        .modal-close-btn:hover {
            transform: scale(1.2);
        }

        /* Navigation Buttons */
        .nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            font-size: 24px;
            padding: 10px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .nav-btn:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .prev-btn {
            left: 10px;
        }

        .next-btn {
            right: 10px;
        }

        /* Backdrop effect */
        .modal-backdrop.show {
            opacity: 0.9;
            background: #000;
            animation: fadeIn 0.3s ease-out;
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
                opacity: 0.9;
            }
        }

        /* Mobile responsive adjustments */
        @media (max-width: 768px) {
            .modal-close-btn {
                top: -25px;
                right: -25px;
                font-size: 24px;
            }

            .image-preview-modal img {
                max-width: 95vw;
                max-height: 95vh;
            }
        }

        .video-preview {
            gap: 15px;
        }

        .video-preview video {
            border: 2px solid #ddd;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .document-upload-section {
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .custom-file-input:focus~.custom-file-label {
            border-color: #ff1a1a;
            box-shadow: 0 0 0 0.2rem rgba(255, 26, 26, 0.25);
        }

        .custom-file-label::after {
            content: "Browse";
            background-color: #ff1a1a;
            color: white;
            border-left: 1px solid #ff1a1a;
        }

        .btn-danger:disabled {
            background-color: #ff6666;
            border-color: #ff6666;
        }

        .profile-contact-icons12 {
            margin-top: 15px;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: center;
            gap: 20px;
            padding: 15px;
        }

        .profile-contact-icons12 .icon-item {
            flex: 0 0 calc(20% - 20px);
            box-sizing: border-box;
        }

        /* Upload Container Styles */
        .upload-container {
            position: relative;
            max-width: 300px;
            margin: 1rem auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modern-upload-btn {
            display: block;
            padding: 1.5rem 2rem;
            background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
            border-radius: 12px;
            color: white;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 2px solid transparent;
            text-align: center;
        }

        .modern-upload-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            background: linear-gradient(135deg, #8183f2 0%, #b966f8 100%);
        }

        .modern-upload-btn:active {
            transform: translateY(0);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .btn-content {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }

        .upload-icon {
            font-size: 2rem;
            transition: transform 0.3s ease;
        }

        .modern-upload-btn:hover .upload-icon {
            transform: translateY(-3px);
            animation: float 2s ease-in-out infinite;
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

        .hover-effect {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .modern-upload-btn:hover .hover-effect {
            opacity: 1;
        }

        .hidden-input {
            display: none;
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

        .custom-save-button {
            background: rgb(92, 90, 90);
            color: rgb(255, 255, 255);
            font-weight: bold;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 15px;
        }

        /* editable */

        .contact-button {
            background-color: #418fe9;
            border-radius: 10px;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
        }

        .contact-icon {
            min-width: 20px;
            font-size: 1.5rem;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 p-0 m-0">
                <div class="card-container12 text-center" style="background-color: #333333">
                    <div class="profile-header12"
                        style="background-color: #418fe9; padding: 20px; max-width: 100%; white-space: normal; overflow: visible; word-wrap: break-word;">
                        <h2 class="profile-name"
                            style="font-size: 30px; color:rgb(255, 255, 255); margin: 0; padding: 10px 0; white-space: normal; word-wrap: break-word;">
                            M. N. M. Akeel
                        </h2>
                        <p class="job-title"
                            style="color: #000000; font-size: 20px; margin: 0; padding: 10px 0; white-space: normal; word-wrap: break-word;">
                            Manager
                        </p>
                        <div class="profile-header12">
                            <img src="profile_img/client_profile/nikigarment-p.png" alt="Saliya Pathum" class="rounded-circle"
                                style="width: 200px; border: 5px solid white; transform: rotate(4deg)">
                        </div>
                        <p class="company-title"
                            style="margin: 0; padding: 0; white-space: normal; word-wrap: break-word; font-size: 23px; line-height: 1.5; text-decoration: underline; text-transform: uppercase;">
                            Niki garments
                        </p>

                    </div>

                    <div class="profile-contact-icons12"
                        style="background-color: white; margin-top: 0; display: flex; justify-content: center; align-items: center; gap: 10px;">

                        <button type="button" class="contact-button" onclick="window.open('tel:+94773720012', '_blank')">
                            <i class="fas fa-phone contact-icon" style="transform: rotate(90deg);"></i>
                        </button>

                        <button type="button" class="contact-button" onclick="window.open('mailto:akeelnazeem100@gmail.com', '_blank')">
                            <i class="fas fa-envelope contact-icon"></i>
                        </button>

                        <button type="button" class="contact-button" onclick="window.open('mailto:info@nikigarment.com', '_blank')">
                            <i class="fas fa-envelope contact-icon"></i>
                        </button>

                        <button type="button" class="contact-button" onclick="window.open('https://www.nikigarment.com', '_blank')">
                            <i class="fas fa-globe contact-icon"></i>
                        </button>

                        <button type="button" class="contact-button"
                            onclick="window.open('https://maps.app.goo.gl/rH957TJ153EHes5U8', '_blank')">
                            <i class="fas fa-map-marker-alt contact-icon"></i>
                        </button>

                        <!-- <button type="button" class="contact-button" onclick="window.open('tel:', '_blank')">
                <i class="fas fa-fax contact-icon" style="transform: rotate(90deg);"></i>
            </button>

            <button type="button" class="contact-button" onclick="window.open('tel:', '_blank')">
                <i class="fas fa-mobile-alt contact-icon"></i>
            </button>

            <button type="button" class="contact-button" onclick="window.open('tel:', '_blank')">
                <i class="fas fa-mobile-alt contact-icon"></i>
            </button>



            <button type="button" class="contact-button" onclick="window.open('mailto:', '_blank')">
                <i class="fas fa-envelope contact-icon"></i>
            </button>

            <button type="button" class="contact-button"
                onclick="window.open('https://www.yourwebsiteaddress.com', '_blank')">
                <i class="fas fa-globe contact-icon"></i>
            </button>



            <button type="button" class="contact-button" onclick="window.open('https://', '_blank')">
                <i class="fas fa-globe contact-icon"></i>
            </button>

            <button type="button" class="contact-button"
                onclick="window.open('https://www.google.com/maps/search/?api=1&query=919%20Oaktree%20Crescent%2C%20Newmarket', '_blank')">
                <i class="fas fa-map-marker-alt contact-icon"></i>
            </button> -->


                    </div>


                    <div style="height: 20px; background-color: #333333; margin-top: 0;"></div>

                    <div class="about-section" style="background-color:#333333;">
                        <h5>About Us</h5>
                        <p>Niki Garment (PVT) LTD: Your trusted partner for quality textiles. Global sourcing, industry excellence, and reliability define us.</p>
                    </div>
                    <!-- images -->
                    <div class="about-image-section" style="background-color: #333333; padding: 20px;">
                        <img src="gallery_img/client_gallerys/nikigarment/nikigarment-g1.png" alt="About Us Image"
                            style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
                    </div>
                    <!-- <div class="about-image-section" style="background-color: #333333; padding: 20px;">
            <img src="gallery_img/main_gallerys/t6g2.jpg" alt="About Us Image"
                style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
        </div> -->

                    <p class="fw" style="color: white;">CONNECT WITH SOCIAL MEDIA</p>
                    <div class="social-media-section">
                        <div class="d-flex flex-wrap justify-content-center">
                            <a href="https://www.facebook.com/share/18WsZQQdPQ/" target="_blank" rel="noopener noreferrer" class="m-1">
                                <i class="fab fa-facebook" style="color: #418fe9; font-size: 2rem;"></i>
                            </a>
                            <a href="https://www.instagram.com/nikigarmentlk/profilecard/?igsh=MXBoa2E1bmN3MTFh" target="_blank" rel="noopener noreferrer" class="m-1">
                                <i class="fab fa-instagram" style="color: #418fe9; font-size: 2rem;"></i>
                            </a>
                            <!-- <a href="#" target="_blank" rel="noopener noreferrer" class="m-1">
                    <i class="fab fa-twitter" style="color: #418fe9; font-size: 2rem;"></i>
                </a> -->
                            <a href="https://www.linkedin.com/company/niki-garment" target="_blank" rel="noopener noreferrer" class="m-1">
                                <i class="fab fa-linkedin" style="color: #418fe9; font-size: 2rem;"></i>
                            </a>
                            <a href="https://www.google.com/search?kgmid=/g/11s54vmcrc&hl=en-LK&q=Niki+Garments+(pvt)+ltd&kgs=f864422910d83d54&shndl=17&source=sh/x/kp/osrp/m5/2" target="_blank" rel="noopener noreferrer" class="m-1">
                                <i class="fab fa-google" style="color: #418fe9; font-size: 2rem;"></i>
                            </a>
                        </div>
                    </div>
                    <br>
                    <button class="btn w-100 custom-save-button" onclick="generateVCF()">
                        <i class="fas fa-save me-2"></i>
                        SAVE TO CONTACTS
                    </button>
                    <br>
                    <div class="footer">
                        <p>All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        async function generateVCF() {
            const contactData = {
                firstName: "M. N. M. Akeel",
                lastName: "",
                title: "Manager",
                phoneWork: "+94773720012",
                phoneMobile: "",
                email: "akeelnazeem100@gmail.com",
                email2: "info@nikigarment.com",
                email3: "",
                website: "https://www.nikigarment.com",
                website2: "",
                website3: "",
                address: " 37/a, 2nd lane Mawilmada Road Kandy",
                address2: "",
                about: "We offer quality fabrics, labels and elastics to medium and large scale clothing retailers and manufacturers. We currently operate in INDIA, SRI LANKA and CANADA.",
                logo: "https://tapilinq.com/logo_img/client_logo/nikigarment-l.png",
                profileImage: "https://tapilinq.com/profile_img/client_profile/nikigarment-p.png"
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
    </script>
</body>

</html>