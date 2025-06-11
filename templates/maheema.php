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
            display: flex;
            align-items: center;
            justify-content: space-between;
            white-space: normal; /* Prevent text truncation */
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
            flex: 1;
            text-align: center;
            white-space: normal; /* Ensure text wraps */
            word-break: break-word; /* Break long words if necessary */
            padding: 0 10px; /* Add padding for better spacing */
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

        .contact {
            background-color: #373938;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">
            <div class="card-header custom-header text-center"
                style="background-image: url('banner_img/client_banner/maheema-b.png'); height: 200px; opacity: 1;">
                <div class="profile-picture">
                    <img src="logo_img/client_logo/maheema-l.png" alt="Saliya Pathum" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center"
                style="background-color: #FFFFFF; color: #000000; text-decoration: none;">
                <h2 class="card-title" style="font-size: 27px; text-transform: uppercase;">M.A Dinesh Priyantha</h2>
                <p style="color: #000000; font-size: 21px; text-transform: uppercase;">Proprietor</p>

                <a href="https://wa.me/94776021905" target="_blank" rel="noopener noreferrer"
                    style="text-decoration: none;">
                    <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center"
                        style="background-color: #25D366; color: white; height: 60px; border: 2px solid orange; border-radius: 10px; gap: 10px;">
                        <i class="fab fa-whatsapp" style="font-size: 50px; margin-right:30px;"></i>
                        <span style="font-size: 14px; font-family: 'Montserrat', sans-serif;">CONNECT WITH WHATSAPP</span>
                    </button>
                </a>

                <div class="list-group mb-3">
                    <button type="button"
                        class="list-group-item contact"
                        onclick="window.open('tel:0776021905', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">+94 77 602 1905</span>
                    </button>
                    <button type="button"
                        class="list-group-item contact"
                        onclick="window.open('tel:0322245750', '_self')">
                        <img src="Images/icon/landphone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">+94 32 224 5750</span>
                    </button>
                    <button type="button"
                        class="list-group-item contact"
                        onclick="window.open('tel:0322056866', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">+94 32 205 6866</span>
                    </button>
                    <button type="button"
                        class="list-group-item contact"
                        onclick="window.open('tel:0779704256', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">+94 77 970 4256 (Lalith Roshan - Partner)</span>
                    </button>
                    <button type="button"
                        class="list-group-item contact"
                        onclick="window.open('mailto:maheemaautocare@gmail.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">maheemaautocare@gmail.com</span>
                    </button>
                    <button type="button"
                        class="list-group-item contact"
                        onclick="window.open('#', '_blank')">
                        <img src="Images/icon/map.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">Colombo Road, Mudukatuwa, Marawila, Sri Lanka.</span>
                    </button>
                </div>

                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px">CONNECT WITH SOCIAL MEDIA</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="https://www.facebook.com/Maheemaautocare?mibextid=wwXIfr&mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://youtube.com/@dananjaya1004?si=N3rEdXKstW8UqNY0" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.tiktok.com/@maheemaautocare1?_t=ZS-8unpRausxpn&_r=1" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>

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
            const contactData = {
                firstName: "Dinesh",
                lastName: "Priyantha",
                title: "Proprietor",
                phoneWork: "+94776021905",
                phoneMobile: "+94322245750",
                phoneOther: "+94372056866",
                phonePartner: "+94779704256",
                email: "maheemaautocare@gmail.com",
                website: "",
                address: "Colombo Road, Mudukatuwa, Marawila, Sri Lanka",
                about: "Maheema Auto Care",
                profileImage: "logo_img/client_logo/maheema-l.png",
                logo: ""
            };

            async function getBase64Image(imgUrl) {
                try {
                    const response = await fetch(imgUrl);
                    const blob = await response.blob();
                    return new Promise((resolve, reject) => {
                        const reader = new FileReader();
                        reader.onloadend = () => resolve(reader.result.split(',')[1]);
                        reader.onerror = reject;
                        reader.readAsDataURL(blob);
                    });
                } catch (error) {
                    console.error("Error loading image:", error);
                    return "";
                }
            }

            async function createVCF() {
                const base64Image = await getBase64Image(contactData.profileImage);
                let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:M.A Dinesh Priyantha
N:Priyantha;Dinesh;M.A;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL:${contactData.phoneMobile}
TEL;TYPE=OTHER:${contactData.phoneOther}
TEL;TYPE=OTHER:${contactData.phonePartner};Lalith Roshan (Partner)
EMAIL:${contactData.email}
ADR;TYPE=WORK:;;${contactData.address};;;;
NOTE:${contactData.about}
${base64Image ? `PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}` : ""}
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

            createVCF();
        }
    </script>
</body>
</html>