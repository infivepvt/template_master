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
            background: #FFF8E1;
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
            height: 80px;
            top: 0;
            left: 0;
            margin-top: -10px;
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
                    #B8860B 20%,
                    #FFD700 40%,
                    #FFF8DC 50%,
                    #FFD700 60%,
                    #B8860B 80%);
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
            border: 2px solid #FFD700;
            padding: 10px 15px;
            margin-top: 10px;
        }

        .list-group-item:hover {
            background-color: #1C2526;
            border-color: #FFEC8B;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .custom-save-button {
            background-color: #000000;
            color: #FFD700;
            font-weight: bold;
            border: 2px solid #FFD700;
            padding: 10px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }

        .custom-save-button:hover {
            background-color: #1C2526;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: #fffefe;
        }

        .custom-phone {
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: #FFD700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .custom-phone1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: #FFD700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            transition: background-color 0.1s, border-color 0.1s;
        }

        .custom-phone1:hover {
            background-color: #B8860B;
            border-color: #FFEC8B;
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

        .card-title.gold-foil {
            font-size: 27px;
            text-transform: uppercase;
            background: linear-gradient(45deg,
                    #B8860B 20%,
                    #FFD700 40%,
                    #FFF8DC 50%,
                    #FFD700 60%,
                    #B8860B 80%);
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
            background-color: #000;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color:#000;">
            <div class="card-header custom-header text-center"
                style="background-image: url('banner_img/client_banner/infiveiresh-b.png'); height: 200px; opacity: 1;">
                <img src="logo_img/client_logo/nipun-l.png" alt="Company Logo" class="custom-logo" height="120px">
                <div class="profile-picture">
                    <div class="profile-picture-container">
                        <img src="profile_img/client_profile/nipun-p.png" alt="Saliya Pathum" class="rounded-circle">
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center"
                style="background-color:#000; color:#fff; text-decoration: none;">
                <br>
                <h2 class="card-title gold-foil">Nipun Sanjaya</h2>
                <p style="color:#fff; font-size: 15px; text-transform: uppercase;">software engineer</p>

                <a href="https://wa.me/+94784641491" target="_blank" rel="noopener noreferrer"
                    style="text-decoration: none;">
                    <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center"
                        style="background-color:#000; color: #FFD700; height: 60px; border: 3px solid #FFD700; border-radius: 10px; gap: 10px;">
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
                                style="font-family: 'Montserrat', sans-serif;">+94 74 21 300 30</span>
                        </button>
                    </div>

                    <div>
                        <button type="button"
                            class="list-group-item d-flex align-items-center justify-content-between contact w-100 rounded rounded-2"
                            onclick="window.open('mailto:Infivellc@gmail.com', '_self')">
                            <img src="Images/icon/mail.png" alt=""
                                style="width: 30px; height: 30px; margin-right:25px;">
                            <span class="text-center flex-grow-1 text-truncate custom-phone"
                                style="font-family: 'Montserrat', sans-serif; font-size:16px;">kanipunsanjaya14@gmail.com</span>
                        </button>
                    </div>

                    <div>
                        <button type="button"
                            class="list-group-item d-flex align-items-center justify-content-between contact w-100 rounded rounded-2"
                            onclick="window.open('https://infiveprint.com/', '_blank')">
                            <img src="Images/icon/internet.png" alt=""
                                style="width: 30px; height: 30px; margin-right:25px;">
                            <span class="text-center flex-grow-1 text-truncate custom-phone"
                                style="font-family:'Montserrat', sans-serif; font-size:16px;">www.infiveprint.com</span>
                        </button>
                    </div>
                </div>

                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px">CONNECT WITH SOCIAL MEDIA
                </p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="https://www.instagram.com/nipun.sanjaya.1217?igsh=anh1dnRwMnR1NGF5" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.facebook.com/nipun.sanjaya.1217" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.linkedin.com/in/nipun-kodikara-b84ba730b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.tiktok.com/@nipun_sanjaya00?_t=ZS-8woGv0Kn83s&_r=1" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>

                <br>
                <button class="btn w-100 custom-save-button" onclick="generateVCF()"
                    style="font-family: 'Montserrat', sans-serif; font-size:19px;">
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
            firstName: "Nipun",
            lastName: "Sanjaya",
            title: "Software Engineer",
            phoneWork: "+94784641491",
            email: "kanipunsanjaya14@gmail.com",
            website: "https://infiveprint.com",
            profileImage: "profile_img/client_profile/nipun-p.png" // Ensure this path is correct
        };

        async function imageToBase64(url) {
            try {
                // Create an image element
                const profileImage = new Image();
                profileImage.src = url;
                profileImage.crossOrigin = "Anonymous"; // Handle CORS if needed

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

                // Convert to base64
                return canvas.toDataURL('image/jpeg').split(',')[1];
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
EMAIL;TYPE=WORK:${contactData.email}
URL;TYPE=WORK:${contactData.website}`;

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