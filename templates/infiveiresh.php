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
            margin-top: -20px;
            animation: float 3s ease-in-out infinite;
        }

        .profile-picture {
            position: absolute;
            top: 95%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .profile-picture-container {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            padding: 8px;
            background: linear-gradient(45deg,
                    #046307 20%,
                    #0A9A0A 40%,
                    #7CFC00 50%,
                    #0A9A0A 60%,
                    #046307 80%);
            background-size: 200% 100%;
            animation: shimmer 2s linear infinite;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-picture img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            object-fit: cover;
        }

        .custom-button {
            font-weight: bold;
        }

        .social-icon {
            font-size: 1.9rem;
            transition: color 0.3s;
        }

        .list-group-item {
            background-color: #000;
            color: #fff;
            border-radius: 8px;
            margin-bottom: 10px;
            border: 2px solid rgb(111, 223, 174);
            padding: 10px 15px;
            margin-top: 10px;
        }

        .list-group-item:hover {
            background-color: #000;
            border-color: rgb(137, 241, 196);
            transition: background-color 0.3s, border-color 0.3s;
        }

        .custom-save-button {
            background-color: #000000;
            color: rgb(111, 223, 174);
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
            background-color: #000000;
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
            0%, 100% {
                transform: translateY(-3px);
            }
            50% {
                transform: translateY(3px);
            }
        }

        .card-title.green-foil {
            font-size: 27px;
            text-transform: uppercase;
            background: linear-gradient(45deg,
                    #046307 20%,
                    #0A9A0A 40%,
                    #7CFC00 50%,
                    #0A9A0A 60%,
                    #046307 80%);
            background-size: 200% 100%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            animation: shimmer 2s linear infinite;
        }

        @keyframes shimmer {
            0% {
                background-position: 200% 0;
            }
            100% {
                background-position: 0 0;
            }
        }

        .contact {
            background-color: rgb(0, 0, 0);
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color:rgb(0, 0, 0);">
            <div class="card-header custom-header text-center"
                style="background-image: url('banner_img/client_banner/infiveiresh-b.png'); height: 200px; opacity: 1;">
                <img src="logo_img/client_logo/infiveiresh-l.png" alt="Company Logo" class="custom-logo" height="120px">
                <div class="profile-picture">
                    <div class="profile-picture-container">
                        <img src="profile_img/client_profile/infiveiresh-p.png" alt="Saliya Pathum" class="rounded-circle">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center"
                style="background-color:rgb(0, 0, 0); color:rgb(255, 255, 255); text-decoration: none;">
                <br>
                <h2 class="card-title green-foil">Iresh Wickramasinghe </h2>
                <p style="color:rgb(255, 255, 255); font-size: 15px; text-transform: uppercase;">Founder & Chairman</p>

                <a href="https://wa.me/+94775524866" target="_blank" rel="noopener noreferrer"
                    style="text-decoration: none;">
                    <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center"
                        style="background-color:rgb(0, 0, 0); color: white; height: 60px; border: 3px solid rgb(5, 224, 129); border-radius: 10px; gap: 10px;">
                        <i class="fab fa-whatsapp" style="font-size: 50px; margin-right:30px;"></i>
                        <span style="font-size: 14px; font-family: 'Montserrat', sans-serif;">CONNECT WITH
                            WHATSAPP</span>
                    </button>
                </a>

                <div class="list-group mb-3">
                    <div>
                        <button type="button"
                            class="list-group-item d-flex align-items-center justify-content-between contact w-100 rounded rounded-2"
                            onclick="window.open('tel:+94775524866', '_self')">
                            <img src="Images/icon/phone.png" alt=""
                                style="width: 30px; height: 30px; margin-right:25px;">
                            <span class="text-center flex-grow-1 text-truncate custom-phone"
                                style="color: #07e184; font-family: 'Montserrat', sans-serif;">+94775524866</span>
                        </button>
                    </div>

                    <div>
                        <button type="button"
                            class="list-group-item d-flex align-items-center justify-content-between contact w-100 rounded rounded-2"
                            onclick="window.open('mailto:Infivellc@gmail.com', '_self')">
                            <img src="Images/icon/mail.png" alt=""
                                style="width: 30px; height: 30px; margin-right:25px;">
                            <span class="text-center flex-grow-1 text-truncate custom-phone"
                                style="color: #07e184; font-family: 'Montserrat', sans-serif; font-size:16px;">Infivellc@gmail.com</span>
                        </button>
                    </div>

                    <div>
                        <button type="button"
                            class="list-group-item d-flex align-items-center justify-content-between contact w-100 rounded rounded-2"
                            onclick="window.open('https://infiveprint.com/', '_blank')">
                            <img src="Images/icon/internet.png" alt=""
                                style="width: 30px; height: 30px; margin-right:25px;">
                            <span class="text-center flex-grow-1 text-truncate custom-phone"
                                style="color: #07e184; font-family:'Montserrat', sans-serif; font-size:16px;">www.infiveprint.com</span>
                        </button>
                    </div>
                </div>

                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px">CONNECT WITH SOCIAL MEDIA
                </p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.facebook.com/iresh.wickramasinghe.2025/" target="_blank"
                        rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>

                <br>
                <button class="btn w-100 custom-save-button" onclick="generateVCF()"
                    style="font-family: 'Montserrat', sans-serif; font-size:19px; border: 2px solid rgb(111, 223, 174);">
                    <img src="Images/Social_Media_Icon/save.png" alt=""
                        style="width: 50px; height: 50px; margin-right:25px;">
                    SAVE TO CONTACTS
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        async function generateVCF() {
            const contactData = {
                firstName: "Iresh",
                lastName: "Wickramasinghe",
                title: "Founder & Chairman",
                phoneWork: "+94775524866",
                phoneMobile: "",
                email: "Infivellc@gmail.com",
                email2: "",
                email3: "",
                website: "www.infiveprint.com",
                website2: "",
                website3: "",
                address: "",
                address2: "",
                about: "",
                profileImage: "profile_img/client_profile/infiveiresh-p.png"
            };

            async function imageToBase64(url) {
                try {
                    const profileImage = new Image();
                    profileImage.src = url;
                    profileImage.crossOrigin = "Anonymous";

                    if (!profileImage.complete) {
                        await new Promise((resolve) => {
                            profileImage.onload = resolve;
                            profileImage.onerror = () => {
                                console.error("Error loading image");
                                resolve();
                            };
                        });
                    }

                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    canvas.width = profileImage.naturalWidth;
                    canvas.height = profileImage.naturalHeight;
                    ctx.drawImage(profileImage, 0, 0);

                    const base64Image = canvas.toDataURL('image/jpeg').split(',')[1];
                    return base64Image;
                } catch (error) {
                    console.error("Error converting image to base64:", error);
                    return "";
                }
            }

            const base64Image = await imageToBase64(contactData.profileImage);

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

            if (base64Image) {
                vcfContent += `
PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}`;
            }

            vcfContent += `
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
    </script>
</body>

</html>