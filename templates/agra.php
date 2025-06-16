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
        body {
            background-color: #1C2526;
        }

        .custom-card {
            border-radius: 15px;
            overflow: hidden;
            background: #2C2C2C;
            width: 450px;
            height: auto;
            margin-top: -55px;
            border: 1px solid #FFFFFF;
        }

        .custom-header {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 35px 20px;
            position: relative;
            height: 200px;
            background-color: #000000;
            background-image: url("https://agrasounds.com/wp-content/uploads/2023/10/Page-slider2-.jpg");
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
            border: 4px solid #FFFFFF;
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
            background-color: #000000;
            color: #FFFFFF;
            border-radius: 8px;
            margin-bottom: 10px;
            border: 1px solid #333333;
            padding: 10px 15px;
        }

        .list-group-item:hover {
            background-color: #333333;
            border-color: #555555;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .custom-save-button {
            background: #000000;
            color: #FFFFFF;
            font-weight: bold;
            border: 2px solid #FFFFFF;
            padding: 10px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }

        .custom-save-button:hover {
            background: #333333;
            border-color: #CCCCCC;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: #FFFFFF;
        }

        .custom-phone {
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: #FFFFFF;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .custom-phone1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: #FFFFFF;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            transition: background-color 0.1s, border-color 0.1s;
            background-color: #000000;
            border: 2px solid #FFFFFF;
            border-radius: 10px;
        }

        .custom-phone1:hover {
            background-color: #333333;
            border-color: #CCCCCC;
        }

        .text-container {
            text-align: center;
        }

        .main-text {
            display: block;
            font-weight: 600;
            font-size: 1.1rem;
            color: #FFFFFF;
        }

        .sub-text {
            display: block;
            font-size: 0.9rem;
            opacity: 0.8;
            margin-top: 0.3rem;
            color: #CCCCCC;
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
            background-color: #000000;
        }

        .card-body {
            background-color: #2C2C2C;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg">
            <div class="card-header custom-header text-center" style="background-color: #000000; height: 200px; opacity: 1;">
                <!-- <img src="logo_img/main_logo/Main_Design-l.png" alt="AGRA Logo" class="custom-logo" height="80px" style="width: 245px; height: auto; opacity: 1;"> -->
                <div class="profile-picture">
                    <img src="logo_img/client_logo/agra-l.png" alt="Agra Sounds" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center">
                <h2 class="card-title" style="font-size: 27px; text-transform: uppercase; color: #FFFFFF;">Agra Sounds</h2>
                <p style="color: #FFFFFF; font-size: 21px; text-transform: uppercase;">Audio Equipment Specialist</p>

                <a href="https://wa.me/+971528211284" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                    <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center" style="height: 60px; gap: 10px;">
                        <i class="fab fa-whatsapp" style="font-size: 50px; margin-right:30px;"></i>
                        <span style="font-size: 14px; font-family: 'Montserrat', sans-serif;">CONNECT WITH WHATSAPP</span>
                    </button>
                </a>

                <div class="list-group mb-3">
                    <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact" onclick="window.open('tel:+971528211284', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone" style="font-family: 'Montserrat', sans-serif;">+971 52 821 1284</span>
                    </button>

                    <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact" onclick="window.open('mailto:agrapulathisi@gmail.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone" style="font-family: 'Montserrat', sans-serif; font-size:16px;">agrapulathisi@gmail.com</span>
                    </button>

                    <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact" onclick="window.open('https://agrasounds.com/', '_blank')">
                        <img src="Images/icon/internet.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone" style="font-family: 'Montserrat', sans-serif; font-size:16px;">agrasounds.com</span>
                    </button>

                    <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact" onclick="window.open('https://www.google.com/maps/search/?api=1&query=Rolla+Street,+Burdubai,+Dubai,+UAE', '_blank')">
                        <img src="Images/icon/map.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone" style="font-family: 'Montserrat', sans-serif; font-size:16px;">Rolla Street, Burdubai, Dubai, UAE</span>
                    </button>
                </div>

                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px; color: #FFFFFF;">WHO WE ARE</p>
                <p class="sub-text" style="font-family: 'Montserrat', sans-serif; font-size: 14px; color: #CCCCCC;">
                    AGRA is an audio equipment renting company in UAE. We make renting equipment easy in all over the UAE! With our large inventory of sound equipment, we can accommodate all of your audio needs. Our full-service approach means that we assist you with every step, including planning your event, delivery, set-up, and on-site technical assistance. From hosting a conference or banquet of any size to renting a sound system for your product launch, we’ve got the gear to make it happen. AGRA embarked on their industrial journey in 2015, and since then, they’ve been on a mission to redefine what audio and video industry can be. With their unique blend of qualities and a dedication to crafting heartfelt, quality service, they’ve garnered a loyal customer base. AGRA believes in the power of sounds to transcend boundaries and connect people from all walks of life. Through their quality products they aim to create an emotional journey that resonates with a diverse audience, proving that best sound experience knows no limits.<br><br><strong>The Sound that Brings People Together…</strong>
                </p>

                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px; color: #FFFFFF;">CONNECT WITH SOCIAL MEDIA</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="https://www.facebook.com/people/Agra-sounds/61552360740956/" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.instagram.com/agrasounds/" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>

                <br>
                <button class="btn w-100 custom-save-button" onclick="generateVCF()" style="font-family: 'Montserrat', sans-serif; font-size:19px;">
                    <img src="Images/Social_Media_Icon/save.png" alt="" style="width: 50px; height: 50px; margin-right:25px;">
                    SAVE TO CONTACTS
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        async function generateVCF() {
            const contactData = {
            firstName: "Agra",
            lastName: "Sounds",
            title: "Audio Equipment Specialist",
            organization: "AGRA Sounds",
            phoneMobile: "+971528211284",
            email: "agrapulathisi@gmail.com",
            address: "Rolla Street, Burdubai, Dubai, UAE",
            website: "https://agrasounds.com/",
            profileImage: "logo_img/client_logo/agra-l.png"
            };

            const toBase64 = async (url) => {
            return new Promise((resolve, reject) => {
                const profileImage = new Image();
                profileImage.crossOrigin = "Anonymous";
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
            photoBase64 = await toBase64(contactData.profileImage);
            } catch (error) {
            console.error("Failed to load image for VCF:", error);
            }

            let vcfLines = [
            "BEGIN:VCARD",
            "VERSION:3.0",
            `FN:${contactData.firstName} ${contactData.lastName}`,
            `N:${contactData.lastName};${contactData.firstName};;;`,
            `ORG:${contactData.organization}`,
            `TITLE:${contactData.title}`,
            `TEL;TYPE=WORK,VOICE:${contactData.phoneMobile}`,
            `EMAIL;TYPE=WORK:${contactData.email}`,
            `URL:${contactData.website}`,
            `ADR;TYPE=WORK:;;${contactData.address};;;`,
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
    </script>
</body>

</html>