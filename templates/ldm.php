<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Montserrat', sans-serif;
            padding: 20px;
        }

        .custom-card {
            border-radius: 15px;
            overflow: hidden;
            max-width: 400px;
            width: 100%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            margin: 0 auto;
        }

        .custom-header {
            background-image: url('banner_img/main_banner/template31-b.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 200px;
            position: relative;
            padding-top: 20px;
        }

        .custom-logo {
            width: 120px;
            height: auto;
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .profile-picture {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            margin-top: -100px;
        }

        .profile-picture img {
            width: 120px;
            height: 120px;
            border: 5px solid #fff;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            padding-top: 70px;
            background-color: #ffffff;
            color: #000000;
        }

        .card-title {
            font-family: 'Tahoma', sans-serif;
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #000000;
        }

        .card-text {
            font-family: 'Marcellus', sans-serif;
            font-size: 13px;
            color: #000000;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .custom-save-button {
            background-color: #000000;
            color: white;
            font-weight: normal;
            border: 1px solid #000000;
            width: 100px;
            height: 35px;
            padding: 0;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease;
            font-size: 13px;
            font-family: 'Roboto', sans-serif;
        }

        .custom-save-button:hover {
            background-color: #333333;
            color: white;
        }

        .dark-background {
            background-color: rgb(2, 2, 2);
            border-radius: 8px;
            color: white;
            margin: 20px 0px;
            padding: 20px 15px;
            margin-bottom: 0;
            width: 100%;
        }

        .light-background {
            background-color: #ffffff;
            color: #000000;
            border-radius: 8px;
            margin: 20px 0;
            padding: 20px 15px;
            width: 100%;
        }

        .section-title {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 15px;
            position: relative;
            font-family: 'Montserrat', sans-serif;
        }

        .contact-section-title::before,
        .contact-section-title::after,
        .address-section-title::before,
        .address-section-title::after,
        .follow-me-section .section-title::before,
        .follow-me-section .section-title::after {
            content: none;
        }

        .section-title::before,
        .section-title::after {
            content: '';
            position: absolute;
            width: 30%;
            height: 2px;
            top: 50%;
            transform: translateY(-50%);
        }

        .dark-background .section-title::before,
        .dark-background .section-title::after {
            background-color: white;
        }

        .light-background .section-title::before,
        .light-background .section-title::after {
            background-color: #000000;
        }

        .section-title::before {
            left: 0;
        }

        .section-title::after {
            right: 0;
        }

        .section-divider {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .divider-line {
            flex-grow: 1;
            height: 1px;
            margin: 0 10px;
            max-width: 50px;
        }

        .divider-icon {
            font-size: 1.5rem;
        }

        .dark-background .divider-line {
            background-color: white;
        }

        .dark-background .divider-icon {
            color: white;
        }

        .light-background .divider-line {
            background-color: #000000;
        }

        .light-background .divider-icon {
            color: #000000;
        }

        .contact-divider {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .contact-divider .divider-line {
            flex-grow: 1;
            height: 1px;
            background-color: white;
            margin: 0 10px;
            max-width: 50px;
        }

        .contact-divider-icon {
            font-size: 1.5rem;
            color: white;
        }

        .contact-icon-link {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 36px;
            height: 36px;
            background-color: white;
            border: 2px solid white;
            border-radius: 50%;
            margin: 0 10px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .contact-icon-link:hover {
            background-color: #f0f0f0;
        }

        .contact-icon-link i {
            color: black;
            font-size: 1.2rem;
        }

        .address-text {
            font-size: 16px;
            margin-bottom: 5px;
            line-height: 1.5;
            color: #000000;
            text-align: center;
        }

        .address-hours-section .address-line1 {
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            margin-bottom: 0;
        }

        .address-hours-section .address-line2 {
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            margin-top: 0;
            margin-bottom: 15px;
        }

        .address-hours-section iframe {
            width: 100%;
            height: 200px;
            border: 0;
            border-radius: 8px;
            margin-bottom: 15px;
            display: block;
        }

        .opening-hours {
            font-size: 15px;
            text-align: center;
            padding: 0 20px;
            font-family: 'Montserrat', sans-serif;
        }

        .opening-hours h4 {
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            color: #000000;
            margin-bottom: 10px;
        }

        .opening-hours p {
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            color: #000000;
            margin-bottom: 5px;
        }

        .follow-me-section .section-title {
            font-family: 'Tahoma', sans-serif;
            font-size: 21px;
            color: white !important;
            font-weight: bold;
            text-align: center;
            margin-bottom: 15px;
            position: relative;
        }

        .contact-section .section-title {
            font-family: 'Tahoma', sans-serif;
            font-size: 21px;
            color: white !important;
            font-weight: bold;
            text-align: center;
            margin-bottom: 0;
            position: relative;
        }

        .social-icons-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            justify-items: center;
            padding: 0 15px;
        }

        .social-icon-link {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 36px;
            height: 36px;
            background-color: white;
            border: 2px solid white;
            border-radius: 50%;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .social-icon-link i {
            color: black;
            font-size: 1.2rem;
        }

        .social-icon-link:hover {
            background-color: #f0f0f0;
        }

        .scan-qr-button {
            background-color: #eeeeee;
            color: #000000;
            font-weight: normal;
            border: 1px solid #cccccc;
            border-radius: 8px;
            transition: background-color 0.3s ease;
            font-size: 13px;
            font-family: 'Roboto', sans-serif;
            width: 132.66px;
            height: 32px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 0;
        }

        .scan-qr-button:hover {
            background-color: #dddddd;
        }

        .bottom-background {
            background-image: url('banner_img/main_banner/template31-b.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 50px;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            position: relative;
            margin-top: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        div,
        button,
        a {
            font-family: 'Montserrat', sans-serif;
        }

        @media (max-width: 576px) {
            body {
                padding: 10px;
            }

            .custom-card {
                max-width: 100%;
                margin-top: 0;
            }

            .custom-header {
                height: 180px;
            }

            .profile-picture img {
                width: 100px;
                height: 100px;
            }

            .card-body {
                padding-top: 60px;
            }

            .custom-logo {
                width: 100px;
            }

            .section-title::before,
            .section-title::after {
                content: none;
                width: 0;
            }

            .social-icons-grid {
                grid-template-columns: repeat(4, 1fr);
                gap: 10px;
            }

            .contact-icon-link {
                width: 36px;
                height: 36px;
                margin: 0 5px;
            }

            .contact-icon-link i {
                font-size: 1.2rem;
            }

            .social-icon-link {
                width: 36px;
                height: 36px;
            }

            .social-icon-link i {
                font-size: 1.2rem;
            }

            .dark-background {
                margin: 15px 0;
                padding: 15px;
                width: 100%;
            }

            .light-background {
                margin: 15px 0;
                padding: 15px;
                width: 100%;
            }

            .card-body>.follow-me-section {
                margin-bottom: 0;
            }

            .bottom-background {
                height: 50px;
                margin-top: 0.5px;
            }

            .opening-hours {
                padding: 0 15px;
            }

            .address-hours-section iframe {
                height: 180px;
            }

            .scan-qr-button {
                font-size: 13px;
            }
        }

        @media (max-width: 400px) {
            .social-icons-grid {
                grid-template-columns: repeat(4, 1fr);
                gap: 8px;
            }

            .contact-icon-link,
            .social-icon-link {
                width: 32px;
                height: 32px;
            }

            .contact-icon-link i,
            .social-icon-link i {
                font-size: 1rem;
            }

            .card-title {
                font-size: 22px;
            }

            .card-text {
                font-size: 12px;
            }

            .custom-save-button {
                width: 90px;
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-3 mt-md-5">
        <div class="card custom-card shadow-lg">
            <div class="custom-header text-center"
                style="background-image: url('banner_img/client_banner/lmd-b.png');">
                <div class="profile-picture">
                    <img src="profile_img/client_profile/lmd-p.jpg" alt="Sangeeth Munasinghe" class="rounded-circle">
                </div>
            </div>

            <div class="card-body text-center">
                <div class="d-flex justify-content-between align-items-center mb-4 px-3">
                    <div class="text-start">
                        <h2 class="card-title" style="margin-bottom: 0;">Sangeeth Munasinghe</h2>
                        <p class="card-text">Director of Ldm Technologies</p>
                    </div>
                    <button class="btn custom-save-button mb-3" onclick="generateVCF()">
                        Save to Contact
                    </button>
                </div>

                <div class="contact-section dark-background py-3">
                    <h3 class="section-title contact-section-title text-center mb-0">Contact Me</h3>
                    <div class="contact-divider mb-3">
                        <span class="divider-line"></span>
                        <i class="fas fa-phone contact-divider-icon"></i>
                        <span class="divider-line"></span>
                    </div>
                    <div class="d-flex justify-content-around mb-3">
                        <a href="tel:0779330909" class="contact-icon-link"><i class="fas fa-phone"></i></a>
                        <a href="tel:0779330909" class="contact-icon-link"><i class="fas fa-mobile-alt"></i></a>
                        <a href="mailto:info@ldmtec.com" class="contact-icon-link"><i class="fas fa-envelope"></i></a>
                        <a href="https://www.ldmtec.com/" target="_blank" rel="noopener noreferrer"
                            class="contact-icon-link"><i class="fas fa-link"></i></a>
                    </div>
                </div>

                <div class="address-hours-section light-background py-3">
                    <h3 class="section-title address-section-title text-center mb-0">Address & Hours</h3>
                    <div class="section-divider mb-3">
                        <span class="divider-line"></span>
                        <i class="fas fa-location-dot divider-icon"></i>
                        <span class="divider-line"></span>
                    </div>
                    <p class="address-text address-line1">Ldm Technologies</p>
                    <p class="address-text address-line2">228/2 Athurugiriya Rd, Malapalla, Pannipitiya</p>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.143693234567!2d79.97234531462257!3d6.852465995044123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae251b7c3b8c7b1%3A0x7c7a4b7f9b7e1b7c!2s228%2F2%20Athurugiriya%20Rd%2C%20Pannipitiya%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1634567890123!5m2!1sen!2sus"
                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <div class="opening-hours mt-3">
                        <h4>Opening Hours</h4>
                        <p>Monday to Friday - 9am to 5pm</p>
                        <p>Saturday - 9am to 1pm</p>
                        <p>Sunday Closed</p>
                    </div>
                </div>

                <div class="follow-me-section dark-background py-3">
                    <h3 class="section-title">Follow Me</h3>
                    <div class="section-divider mb-3">
                        <span class="divider-line"></span>
                        <i class="fas fa-user divider-icon"></i>
                        <span class="divider-line"></span>
                    </div>
                    <div class="social-icons-grid">
                        <a href="https://web.facebook.com/LDMTEC" target="_blank" rel="noopener noreferrer"
                            class="social-icon-link"><i class="fab fa-facebook-f social-icon"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link"><i
                                class="fab fa-instagram social-icon"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link"><i
                                class="fab fa-linkedin-in social-icon"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link"><i
                                class="fab fa-tiktok social-icon"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link"><i
                                class="fab fa-youtube social-icon"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link"><i
                                class="fab fa-twitter social-icon"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link"><i
                                class="fab fa-pinterest-p social-icon"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link"><i
                                class="fas fa-globe social-icon"></i></a>
                    </div>
                </div>
            </div>

            <div class="bottom-background" style="background-image: url('banner_img/main_banner/template31-b.jpeg');">
                <button class="btn scan-qr-button">Scan QR Code</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function generateVCF() {
        const contactData = {
            firstName: "Sangeeth",
            lastName: "Munasinghe",
            title: "Director of Ldm Technologies",
            phoneWork: "0779330909",
            phoneMobile: "0779330909",
            email: "info@ldmtec.com",
            email2: "",
            email3: "",
            website: "https://www.ldmtec.com",
            website2: "",
            website3: "",
            address: "228/2 Athurugiriya Rd, Malapalla, Pannipitiya",
            address2: "",
            about: "",
            logo: "logo_img/main_logo/Main_Design-l.png",
            profileImage: "profile_img/client_profile/lmd-p.jpg"
        };

        async function createVCard() {
            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL:${contactData.phoneMobile}
EMAIL:${contactData.email}
${contactData.email2 ? `EMAIL:${contactData.email2}` : ''}
${contactData.email3 ? `EMAIL:${contactData.email3}` : ''}
URL:${contactData.website}
${contactData.website2 ? `URL:${contactData.website2}` : ''}
${contactData.website3 ? `URL:${contactData.website3}` : ''}
ADR;TYPE=WORK:;;${contactData.address}
${contactData.address2 ? `ADR;TYPE=HOME:;;${contactData.address2}` : ''}
NOTE:${contactData.about}`;

            // Handle profile image
            if (contactData.profileImage) {
                try {
                    const profileImage = new Image();
                    profileImage.src = contactData.profileImage;
                    profileImage.crossOrigin = "Anonymous"; // Handle CORS if image is from another domain

                    // Wait for the image to load
                    await new Promise((resolve, reject) => {
                        profileImage.onload = resolve;
                        profileImage.onerror = reject;
                    });

                    // Create canvas and draw image
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    canvas.width = profileImage.naturalWidth;
                    canvas.height = profileImage.naturalHeight;
                    ctx.drawImage(profileImage, 0, 0);

                    // Convert to Base64
                    const base64Image = canvas.toDataURL('image/jpeg').split(',')[1];
                    vcfContent += `\nPHOTO;ENCODING=b;TYPE=JPEG:${base64Image}`;
                } catch (error) {
                    console.error("Error loading profile image:", error);
                }
            }

            // Handle logo (optional, same approach as profile image)
            if (contactData.logo) {
                try {
                    const logoImage = new Image();
                    logoImage.src = contactData.logo;
                    logoImage.crossOrigin = "Anonymous";

                    await new Promise((resolve, reject) => {
                        logoImage.onload = resolve;
                        logoImage.onerror = reject;
                    });

                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    canvas.width = logoImage.naturalWidth;
                    canvas.height = logoImage.naturalHeight;
                    ctx.drawImage(logoImage, 0, 0);

                    const base64Logo = canvas.toDataURL('image/jpeg').split(',')[1];
                    vcfContent += `\nLOGO;ENCODING=b;TYPE=JPEG:${base64Logo}`;
                } catch (error) {
                    console.error("Error loading logo image:", error);
                }
            }

            vcfContent += `\nEND:VCARD`;

            // Create and download vCard
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

        // Execute the async function
        createVCard().catch(error => console.error("Error generating vCard:", error));
    }
</script>
</body>

</html>