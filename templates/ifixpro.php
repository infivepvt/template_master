<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card - iFix Pro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        /* Existing styles remain unchanged */
        .custom-card {
            border-radius: 1px;
            overflow: hidden;
            background: #EEF1FF;
            width: 1000px;
            margin-top: -50px;
            margin-bottom: 0.2px;
            min-height: 100vh;
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
            0%, 100% { transform: translateY(-3px); }
            50% { transform: translateY(3px); }
        }
        .contact {
            background-color: #373938;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">
            <div class="card-header custom-header text-center" style="background-image: url('banner_img/client_banner/ifixpro-b.jpg'); height: 200px; opacity: 1;">
                <!--
                <img src="" alt="Company Logo" class="custom-logo" height="80px" style="width: 245px; height: auto; opacity: 1;">
    -->
                <div class="profile-picture">
                    <img src="profile_img/client_profile/ifixpro-p.png" alt="Profile" class="rounded-circle">
                </div>
            </div>
            <br><br>
            <div class="card-body text-center" style="background-color: #FFFFFF; color: #000000; text-decoration: none;">
                <h2 class="card-title" style="font-size: 27px; text-transform: uppercase;">iFix Pro</h2>
                <p style="color: #000000; font-size: 21px; text-transform: uppercase;">Mobile Repair & Accessories</p>

                <a href="https://wa.me/94759958608" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                    <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center" style="background-color: #25D366; color: white; height: 60px; border: 2px solid orange; border-radius: 10px; gap: 10px;">
                        <i class="fab fa-whatsapp" style="font-size: 50px; margin-right:30px;"></i>
                        <span style="font-size: 14px; font-family: 'Montserrat', sans-serif;">CONNECT WITH WHATSAPP</span>
                    </button>
                </a>

                <div class="list-group mb-3">
                    <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact" onclick="window.open('tel:+94759958608', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone" style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">+94 75 995 8608</span>
                    </button>
                    <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact" onclick="window.open('tel:+94774188608', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone" style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">+94 77 418 8608</span>
                    </button>
                    <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact" onclick="window.open('tel:+94769218608', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone" style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">+94 76 921 8608</span>
                    </button>
                    <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact" onclick="window.open('tel:+94701088258', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone" style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">+94 70 108 8258 (Proprietor)</span>
                    </button>
                    <button type="button" class="list-group-item d-flex align-items-center justify-content-between contact" onclick="window.open('https://goo.gl/maps/Ds2LD4qhK6e9bLFWA', '_blank')">
                        <img src="Images/icon/map.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone" style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">Minuwangoda</span>
                    </button>
                </div>

                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px">CONNECT WITH SOCIAL MEDIA</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="https://www.facebook.com/share/16YnJrJL7P/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="Facebook" style="width: 45px; height: 45px;">
                    </a>
                    <a href="https://www.tiktok.com/@ifix.pro.tools.ac?_t=ZS-8x3LwdEvmrp&_r=1" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="TikTok" style="width: 50px; height: 50px;">
                    </a>
                </div>

                <br>
                <button class="btn w-100 custom-save-button" onclick="generateVCF()" style="font-family: 'Montserrat', sans-serif; font-size:19px; border: 2px solid orange;">
                    <img src="Images/Social_Media_Icon/save.png" alt="" style="width: 50px; height: 50px; margin-right:25px;">
                    SAVE TO CONTACTS
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function generateVCF() {
            const contactData = {
                firstName: "iFix Pro",
                lastName: "",
                title: "Mobile Repair & Accessories",
                phoneWork: "+94759958608",
                phoneMobile: "+94774188608",
                phoneProprietor: "+94701088258",
                email: "",
                email2: "",
                email3: "",
                website: "",
                website2: "",
                website3: "",
                address: "Minuwangoda",
                address2: "",
                about: "",
                logo: "https://tapilinq.com/profile_img/client_profile/ifixpro-p.png",
                profileImage: "https://tapilinq.com/profile_img/client_profile/ifixpro-p.png"
            };

            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL:${contactData.phoneMobile}
TEL;TYPE=PROPRIETOR:${contactData.phoneProprietor}
EMAIL:${contactData.email}
EMAIL:${contactData.email2}
EMAIL:${contactData.email3}
URL:${contactData.website}
URL:${contactData.website2}
URL:${contactData.website3}
ADR;TYPE=WORK:;;${contactData.address}
ADR;TYPE=HOME:;;${contactData.address2}
NOTE:${contactData.about}
PHOTO;VALUE=URL:${contactData.profileImage}
LOGO;VALUE=URL:${contactData.logo}
END:VCARD`;

            const blob = new Blob([vcfContent], { type: 'text/vcard' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `${contactData.firstName}.vcf`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        }
    </script>
</body>
</html>