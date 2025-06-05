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
            top: 115%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .profile-picture img {
            width: 170px;
            height: 170px;
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
            background: linear-gradient(90deg, #50b3e8, #3a8bc1);
            color: #fff;
            border-radius: 8px;
            margin-bottom: 10px;
            border: 1px solid #2e6f9a;
            padding: 10px 15px;
        }

        .list-group-item:hover {
            background: linear-gradient(90deg, #3a8bc1, #2e6f9a);
            border-color: #1e4f7a;
            transition: background 0.3s, border-color 0.3s;
        }

        .custom-save-button {
            background: linear-gradient(90deg, #50b3e8, #3a8bc1);
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
            background: linear-gradient(90deg, #3a8bc1, #2e6f9a);
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
            background-color: #25D366;
            border: 2px solid orange;
            border-radius: 10px;
            padding: 10px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .custom-phone1:hover {
            background-color: #128C7E;
            border-color: #128C7E;
        }

        .text-container {
            text-align: center;
            color: #504192;
        }

        .main-text {
            display: block;
            font-weight: 600;
            font-size: 1.1rem;
            color: #504192;
        }

        .sub-text {
            display: block;
            font-size: 0.9rem;
            opacity: 0.8;
            margin-top: 0.3rem;
            color: #504192;
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
            background: linear-gradient(90deg, #50b3e8, #3a8bc1);
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
            color: #504192;
            margin-bottom: 20px;
            text-align: center;
        }

        .button-wrapper {
            text-align: center;
        }

        .button {
            display: inline-flex;
            align-items: center;
            padding: 10px Nevada Test Site20px;
            background: linear-gradient(90deg, #50b3e8, #3a8bc1);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            transition: background 0.3s;
        }

        .button:hover {
            background: linear-gradient(90deg, #3a8bc1, #2e6f9a);
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
            background: linear-gradient(90deg, #50b3e8, #3a8bc1);
            color: white;
            border: none;
            padding: 5px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .qr-section button:hover {
            background: linear-gradient(90deg, #3a8bc1, #2e6f9a);
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
                style="background-image: url('banner_img/client_banner/sachith-b.png'); height: 200px; opacity: 1;">
                <!-- <img src="logo_img/client_logo/sachith-l.png" alt="Company Logo" class="custom-logo" height="120px"
                    style="width: 330px; height: auto; opacity: 1; margin-top: -15px;"> -->
                <div class="profile-picture">
                    <img src="profile_img/client_profile/sachith-p.png" alt="Saliya Pathum" class="rounded-circle">
                </div>
            </div>
            <br><br>
            <div class="card-body text-center"
                style="background-color: #FFFFFF; color: #504192; text-decoration: none; margin-top:50px;">
                <h2 class="card-title" style="font-size: 27px; text-transform: uppercase;">Sachith Rangalla</h2>
                <p style="color: #504192; font-size: 21px; text-transform: uppercase;">Senior Manager <br> Marketing and
                    Branding</p>

                <a href="https://wa.me/0742223334" target="_blank" rel="noopener noreferrer"
                    style="text-decoration: none;">
                    <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center">
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
                        onclick="window.open('mailto:sachith.rangalla@ktdoctor.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">sachith.rangalla@ktdoctor.com</span>
                    </button>
                      <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://maps.app.goo.gl/CFGYg5bHWxBYX7nPA', '_blank')">
                        <img src="Images/Social_Media_Icon/location.png" alt=""
                            style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">St. Joseph
                            Hospital Negombo</span>
                    </button>
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://maps.app.goo.gl/N917WPntZQaxieVg8', '_blank')">
                        <img src="Images/Social_Media_Icon/location.png" alt=""
                            style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">St. Joseph
                            Hospital Colombo</span>
                    </button>                 
                </div>

                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px; color: #504192">CONNECT WITH
                    SOCIAL MEDIA
                </p>
                <div class="d-flex flex-wrap justify-content-center">
                     <a href="https://www.facebook.com/sjhospitalNegombo" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.instagram.com/sjhospital.lk/" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.linkedin.com/company/sjhnegomb/" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/x-2.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>
               
                
                <button class="btn w-100 custom-save-button" onclick="shareQR()">
                    <img src="Images/Icon/share.png" alt=""
                        style="width: 50px; height: 50px; margin-right:25px;">
                     SHARE MY PROFILE
                </button>
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
            const qrCodeUrl = 'https://tapilinq.com/sachith';

            if (navigator.share) {
                navigator.share({
                    title: 'Scan to save contact',
                    text: 'Scan this QR code to save Sachith Rangalla\'s contact information',
                    url: qrCodeUrl
                })
                    .catch(error => console.log('Error sharing:', error));
            } else {
                const shareUrl = `whatsapp://send?text=Scan this QR code to save Sachith Rangalla's contact information: ${qrCodeUrl}`;

                window.open(shareUrl, '_blank');

                setTimeout(() => {
                    if (!document.hidden) {
                        alert(`Share this QR code URL:\n${qrCodeUrl}`);
                    }
                }, 500);
            }
        }

        async function generateVCF() {
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

            // Load the profile image and convert to base64
            let base64Image = "";
            try {
                const profileImage = new Image();
                profileImage.src = contactData.profileImage;
                profileImage.crossOrigin = "Anonymous"; // Handle cross-origin images if necessary

                // Wait for the image to load
                if (!profileImage.complete) {
                    await new Promise((resolve) => {
                        profileImage.onload = resolve;
                        profileImage.onerror = () => {
                            console.error("Failed to load profile image");
                            resolve(); // Proceed even if image fails to load
                        };
                    });
                }

                // Create canvas and draw image
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                canvas.width = profileImage.naturalWidth;
                canvas.height = profileImage.naturalHeight;
                ctx.drawImage(profileImage, 0, 0);

                // Convert to base64 (remove the data URI prefix)
                base64Image = canvas.toDataURL('image/jpeg').split(',')[1];
            } catch (error) {
                console.error("Error processing profile image:", error);
            }

            // Generate vCard content
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
${base64Image ? `PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}` : `PHOTO;VALUE=URL:${contactData.profileImage}`}
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
        }
    </script>
</body>

</html>