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
            background: linear-gradient(90deg, #5f4def, #00d0ea);
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
            background: linear-gradient(90deg, #4b3ec4, #00b3c3);
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
            background-color: #373938;
        }
    </style>

</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">
            <div class="card-header custom-header text-center"
                style="background-image:  url('banner_img/client_banner/sampath-b.jpg'); height: 200px; opacity: 1;">
                <!-- <img src="logo_img/main_logo/Main_Design-l.png" alt="Company Logo" class="custom-logo" height="80px"
                    style="width: 245px; height: auto; opacity: 1;"> -->
                <div class="profile-picture">
                    <img src="profile_img/client_profile/sampath-p.png" alt="Saliya Pathum" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center"
                style="background-color: #FFFFFF; color: #000000; text-decoration: none; ">
                <h2 class="card-title" style="font-size: 27px; text-transform: uppercase;">Sampath (Sam) Mendis</h2>
                <p style="color: #000000; font-size: 21px; text-transform: uppercase;">CEO</p>

                <a href="https://wa.me/94777683844" target="_blank" rel="noopener noreferrer"
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
                        onclick="window.open('tel:+94777683844', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">+94 77 768 3844</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('mailto:sampath@deluxvacations.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">sampath@deluxvacations.com</span>
                    </button>
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://www.deluxvacations.com/', '_blank')">
                        <img src="Images/icon/internet.png" alt=""
                            style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; 'Montserrat', sans-serif; font-size:16px; font-size:16px;">www.deluxvacations.com</span>
                    </button>

                    <!-- <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://www.yourwebsiteaddress.com', '_blank')">
                        <img src="Images/icon/internet.png" alt=""
                            style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; 'Montserrat', sans-serif; font-size:16px; font-size:16px;">www.yourwebsiteaddress.com</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://www.google.com/maps/search/?api=1&query=919+Oaktree+Crescent,+Newmarket', '_blank')">
                        <img src="Images/icon/map.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">919
                            Oaktree Crescent, Newmarket Oaktree Crescent, Newmarket</span>
                    </button> -->
                </div>

                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px">CONNECT WITH SOCIAL MEDIA
                </p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="https://www.instagram.com/deluxe_vacations?igsh=b2p2MzE0NXc3NWE0" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.facebook.com/DeluxeVacationslk?mibextid=ZbWKwL" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <!-- <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 50px; height: 50px;">
                    </a> -->
                </div>

                <!-- <div class="d-flex flex-wrap justify-content-center">
                   
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
                <button class="btn w-100 custom-save-button" onclick="generateVCF()"
                    style="font-family: 'Montserrat', sans-serif; font-size:19px; border: 2px solid orange;">
                    <img src="Images/Social_Media_Icon/save.png" alt=""
                        style="width: 50px; height: 50px; margin-right:25px;">
                    SAVE TO CONTACTS
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      function generateVCF() {
    // Updated contact information to match the business card
    const contactData = {
        firstName: "Sampath",
        lastName: "Mendis",
        title: "CEO",
        phoneWork: "+94777683844",
        phoneMobile: "",
        email: "sampath@deluxvacations.com",
        email2: "",
        email3: "",
        website: "",
        website2: "",
        website3: "",
        address: "",
        address2: "",
        about: "",
        logo: "",
        profileImage: "profile_img/client_profile/sampath-p.png"
    };

    // Function to convert image to base64
    const getBase64Image = (imgUrl) => {
        return new Promise((resolve) => {
            const img = new Image();
            img.crossOrigin = 'Anonymous';
            img.src = imgUrl;
            
            img.onload = function() {
                const canvas = document.createElement('canvas');
                canvas.width = img.width;
                canvas.height = img.height;
                const ctx = canvas.getContext('2d');
                ctx.drawImage(img, 0, 0);
                const dataURL = canvas.toDataURL('image/jpeg');
                resolve(dataURL);
            };
            
            img.onerror = function() {
                resolve(''); // Return empty string if image fails to load
            };
        });
    };

    // Generate the VCF file after getting the base64 image
    const generateVCFWithImage = async () => {
        const base64Image = await getBase64Image(contactData.profileImage);
        
        // Create VCF content
        let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL:${contactData.phoneMobile}
EMAIL:${contactData.email}
EMAIL:${contactData.email2}
EMAIL:${contactData.email3}
URL:${contactData.website}
URL:${contactData.website2}
URL:${contactData.website3}
ADR;TYPE=WORK:;;${contactData.address}
ADR;TYPE=HOME:;;${contactData.address2}
NOTE:${contactData.about}`;

        // Add photo if available
        if (base64Image) {
            vcfContent += `\nPHOTO;ENCODING=b;TYPE=JPEG:${base64Image.split(',')[1]}`;
        }

        // Add logo if available
        if (contactData.logo) {
            const base64Logo = await getBase64Image(contactData.logo);
            if (base64Logo) {
                vcfContent += `\nLOGO;ENCODING=b;TYPE=JPEG:${base64Logo.split(',')[1]}`;
            }
        }

        vcfContent += `\nEND:VCARD`;

        // Create download link
        const blob = new Blob([vcfContent], { type: 'text/vcard' });
        const url = URL.createObjectURL(blob);

        const a = document.createElement('a');
        a.href = url;
        a.download = `${contactData.firstName}_${contactData.lastName}.vcf`;
        document.body.appendChild(a);
        a.click();

        // Clean up
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    };

    generateVCFWithImage();
}
    </script>
</body>

</html>