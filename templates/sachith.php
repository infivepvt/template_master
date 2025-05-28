<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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

        .contact {
            background-color: #373938;
        }

        .section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .column {
            flex: 1;
            min-width: 300px;
            max-width: 50%;
            box-sizing: border-box;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 0.5s ease-in-out;
        }

        .heading {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .button-wrapper {
            text-align: center;
        }

        .button {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #0073aa;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #005177;
        }

        .button-icon {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .image {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .column {
                max-width: 100%;
            }

            .button {
                justify-content: center;
                width: 100%;
            }
        }

        .qr-section {
            background: #fff4e6;
            padding: 10px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 300px;
            margin: 0 auto;
        }

        .qr-section button {
            background: #fff;
            border: 2px solid #000;
            padding: 5px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .qr-section img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">
            <div class="card-header custom-header text-center"
                style="background-image: url('banner_img/client_banner/sachith-b.jpg'); height: 200px; opacity: 1;">
                <img src="logo_img/client_logo/sachith-l.png" alt="Company Logo" class="custom-logo" height="120px"
                    style="width: 330px; height: auto; opacity: 1; margin-top: -15px;">
                <div class="profile-picture">
                    <img src="profile_img/client_profile/sachith-p.png" alt="Saliya Pathum" class="rounded-circle">
                </div>
            </div>
            <br><br>
            <div class="card-body text-center"
                style="background-color: #FFFFFF; color: #000000; text-decoration: none;">
                <h2 class="card-title" style="font-size: 27px; text-transform: uppercase;">Sachith Rangalla</h2>
                <p style="color: #000000; font-size: 21px; text-transform: uppercase;">Senior Manager - Marketing and
                    Branding</p>

                <a href="https://wa.me/0742223334" target="_blank" rel="noopener noreferrer"
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
                        onclick="window.open('tel:0117848484', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">0117 84 84 84</span>
                    </button>
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('http://sjhospital.lk/', '_blank')">
                        <img src="Images/icon/internet.png" alt=""
                            style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; 'Montserrat', sans-serif; font-size:16px;">www.sjhospital.lk</span>
                    </button>
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('mailto:info@sjhospital.lk', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">info@sjhospital.lk</span>
                    </button>
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://maps.app.goo.gl/CFGYg5bHWxBYX7nPA', '_blank')">
                        <img src="Images/icon/map.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">St. Joseph
                            Hospital Negombo</span>
                    </button>
                </div>

                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px">CONNECT WITH SOCIAL MEDIA
                </p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="https://www.instagram.com/sjhospital.lk/" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.facebook.com/sjhospitalNegombo" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.linkedin.com/company/sjhnegomb/" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/x-2.jpeg" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>
                <br>
                <section class="section" style="padding: 0 20px;">
                    <div class="container">
                        <div class="column" style="background-color: transparent; box-shadow: none; padding: 0;">
                            <h2 class="heading" style="font-size: 1.5rem; margin-bottom: 10px; color: #333;">SCAN ME</h2>
                            <div class="qr-section"
                                style="background: #f8f9fa; width: 100%; max-width: 250px; padding: 15px; flex-direction: column; gap: 10px;">
                                <img src="gallery_img/client_gallerys/sachith/sachith-g.png" alt="QR Code"
                                    style="width: 150px; height: 150px;">
                                <button onclick="shareQR()"
                                    style="background: linear-gradient(90deg, #5f4def, #00d0ea); color: white; border: none; padding: 8px 20px; border-radius: 5px; cursor: pointer; font-weight: bold; transition: background 0.3s;">
                                    Share QR Code
                                </button>
                            </div>
                        </div>
                    </div>
                </section>

                <br>
                <button class="btn w-100 custom-save-button" onclick="generateVCF()">
                    <img src="Images/Social_Media_Icon/save.png" alt=""
                        style="width: 50px; height: 50px; margin-right:25px;">
                    SAVE TO CONTACTS
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function shareQR() {
            // Get the QR code image URL
            const qrCodeUrl = 'https://tapilinq.com/sachith';

            // Check if Web Share API is available
            if (navigator.share) {
                navigator.share({
                    title: 'Scan to save contact',
                    text: 'Scan this QR code to save Sachith Rangalla\'s contact information',
                    url: qrCodeUrl
                })
                    .catch(error => console.log('Error sharing:', error));
            } else {
                // Fallback for browsers that don't support Web Share API
                const shareUrl = `whatsapp://send?text=Scan this QR code to save Sachith Rangalla's contact information: ${qrCodeUrl}`;

                // Try to open WhatsApp first
                window.open(shareUrl, '_blank');

                // If WhatsApp doesn't open, show a message with the QR code URL
                setTimeout(() => {
                    if (!document.hidden) {
                        alert(`Share this QR code URL:\n${qrCodeUrl}`);
                    }
                }, 500);
            }
        }
        function generateVCF() {
            const contactData = {
                firstName: "Sachith",
                lastName: "Rangalla",
                title: "Senior Manager - Marketing and Branding",
                phoneWork: "0117848484",
                phoneMobile: "0742223334",
                email: "info@sjhospital.lk",
                website: "http://sjhospital.lk/",
                address: "229/10 St. Joseph Street, Negombo",
                profileImage: "profile_img/client_profile/sachith-p.png",
                logo: "logo_img/client_logo/sachith-l.png"
            };

            // Create a promise to handle the image loading
            const loadImage = (url) => {
                return new Promise((resolve, reject) => {
                    const img = new Image();
                    img.crossOrigin = 'Anonymous'; // Handle CORS if needed
                    img.onload = () => resolve(img);
                    img.onerror = reject;
                    img.src = url;
                });
            };

            // Generate the vCard with the image
            const generateVCardWithImage = async () => {
                try {
                    // Load the profile image
                    const profileImage = await loadImage(contactData.profileImage);

                    // Create canvas and draw image
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    canvas.width = profileImage.width;
                    canvas.height = profileImage.height;
                    ctx.drawImage(profileImage, 0, 0);

                    // Convert to base64
                    const base64Image = canvas.toDataURL('image/jpeg').split(',')[1];

                    // Create the vCard content
                    let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL:${contactData.phoneMobile}
EMAIL:${contactData.email}
URL:${contactData.website}
ADR;TYPE=WORK:;;${contactData.address}
PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}
LOGO;VALUE=URL:${contactData.logo}
END:VCARD`;

                    // Create and download the vCard file
                    const blob = new Blob([vcfContent], { type: 'text/vcard' });
                    const url = URL.createObjectURL(blob);

                    const a = document.createElement('a');
                    a.href = url;
                    a.download = `${contactData.firstName}_${contactData.lastName}.vcf`;
                    document.body.appendChild(a);
                    a.click();

                    document.body.removeChild(a);
                    URL.revokeObjectURL(url);
                } catch (error) {
                    console.error('Error generating vCard:', error);
                    // Fallback to vCard without image if there's an error
                    let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL:${contactData.phoneMobile}
EMAIL:${contactData.email}
URL:${contactData.website}
ADR;TYPE=WORK:;;${contactData.address}
PHOTO;VALUE=URL:${contactData.profileImage}
LOGO;VALUE=URL:${contactData.logo}
END:VCARD`;

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
            };

            // Call the async function
            generateVCardWithImage();
        }
    </script>
</body>

</html>