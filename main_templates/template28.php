<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: #FFFFFF;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0.1px;
        }

        .custom-card {
            border-radius: 0.5px;
            overflow: hidden;
            background: #000000;
            width: 400px;
            height: auto;
            margin-top: 0.2px;
            color: #FFFFFF;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 0.1px;
        }

        /* --- START OF HEADER CSS --- */
        .custom-header {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 15px 15px 5px 15px;
            position: relative;
            height: auto;
            background: #000000;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .custom-logo {
            display: none;
        }

        .profile-picture {
            position: relative;
            top: 0;
            left: 0;
            transform: none;
            margin-right: 15px;
        }

        .profile-picture img {
            width: 155.5px;
            height: 155.5px;
            border: 3px solid #fff;
            border-radius: 50%;
        }

        .custom-button {
            font-weight: bold;
        }

        .social-icon {
            font-size: 1.5rem;
            transition: color 0.3s;
        }

        .header-content {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-bottom: 10px;
            width: 100%;
        }

        .text-container {
            text-align: left;
            margin-left: 0;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* Removed name-and-subscribe-row as button is moved */

        .main-text {
            font-size: 30px;
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            color: #FFFFFF;
            margin-bottom: 5px;
            line-height: 1;
            white-space: nowrap;
        }

        #subscribe-button-wrapper {
            margin-bottom: 30px;
        }

        #subscribe-button {
            background-color: #FF0000;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            font-size: 15px;
            cursor: pointer;
            align-self: flex-start;
            width: 150px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }
        #subscribe-button:hover {
            background-color: #C81E1E;
        }

        .sub-text {
            display: block;
            font-size: 13px;
            font-family: 'Roboto', sans-serif;
            opacity: 0.8;
            margin-top: 0;
            margin-bottom: 0;
            color: #FFFFFF;
            line-height: 1.2;
        }

        .video-placeholder-container {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;
            background-color: #333;
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
        }

        /* --- END OF HEADER CSS --- */

        /* --- START OF CONTACT SECTION CSS --- */
        .list-group {
            margin: 0 auto 10px auto;
            width: 80%;
            max-width: 250px;
            padding: 0;
        }

        .list-group-item {
            background-color: #000000;
            color: #fff;
            border-radius: 0;
            margin-bottom: 2px;
            border: none;
            padding: 6px 0;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            text-align: left;
        }

        .list-group-item:hover {
            background-color: #1a1a1a;
            border-color: #666;
            transition: background-color 0.3s, border-color 0.3s;
        }

        /* Custom icon sizing */
        .contact-icon-phone i,
        .contact-icon-email i,
        .contact-icon-web i,
        .contact-icon-fb i,
        .contact-icon-ig i,
        .contact-icon-in i {
            margin-right: 20px;
            width: 25px;
            text-align: center;
        }

        .contact-text {
            font-size: 17px;
            font-family: 'Roboto', sans-serif;
            color: #FFFFFF;
            flex-grow: 1;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .custom-save-button {
            background: red;
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
            font-size: 0.9rem;
            font-family: 'Montserrat', sans-serif;
            width: calc(100% - 40px);
            margin: 10px auto;
        }

        .custom-save-button:hover {
            background: darkred;
        }

        /* Specific override for the save icon */
        .custom-save-button i {
            margin-right: 10px;
        }

        /* --- END OF CONTACT SECTION CSS --- */

        /* --- FOOTER/BOTTOM SECTION CSS --- */
        .bottom-white-rectangle {
            background-color: black;
            height: 50px;
            width: 100%;
            position: absolute;
            bottom: 0.2px;
            left: 0;
            border-radius: 0 0 10px 10px;
        }

        .card-title {
            font-family: 'Roboto', sans-serif;
            font-size: 25px;
            color: #FFFFFF;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .digital-creator {
            font-family: 'Rubik', sans-serif;
            font-size: 12px;
            color: #7A7A7A;
            margin-bottom: 10px;
        }

        .save-to-contact {
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            color: #FFFFFF;
        }

        /* --- END OF FOOTER/BOTTOM SECTION CSS --- */
    </style>
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="card custom-card shadow-lg" style="background-color: #000000;">
            <div class="card-header custom-header text-center"
                style="background-image: url('banner_img/main_banner/banner.png'); height: auto; opacity: 1; background: #000000; display: flex; flex-direction: column; align-items: flex-start; padding: 15px 15px 5px 15px;">

                <div class="header-content">
                    <div class="profile-picture" style="margin-right: 15px;">
                        <img src="profile_img\main_profile\template28-p.png" alt="Sarha Amelia" class="rounded-circle">
                    </div>
                    <div class="text-container">
                        <h2 class="main-text">Epic Cutie</h2>
                        <br>
                        <div id="subscribe-button-wrapper">
                            <button id="subscribe-button">
                                <i class="fab fa-youtube"></i> Subscribe
                            </button>
                        </div>
                        <p class="sub-text">Hello everyone.! My Name is Sasha and this is my Official Youtube channel.</p>
                        <br>
                    </div>
                </div>

                <div class="video-placeholder-container">
                    <iframe 
                        width="100%" 
                        height="100%" 
                        src="https://www.youtube.com/embed/XHOmBV4js_E" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen
                        style="position: absolute; top: 0; left: 0;">
                    </iframe>
                </div>
            </div>
            <br>
            <div class="card-body text-center"
                style="background-color: #000000; color: #FFFFFF; text-decoration: none; position: relative; padding-bottom: 80px;">
                <h2 class="card-title">Sarha Amelia</h2>
                <p class="digital-creator">Digital Creator</p>
                <br>

                <div class="list-group mb-2">
                    <button type="button" class="list-group-item contact contact-icon-phone" onclick="window.open('tel:0001232342222', '_self')">
                        <i class="fas fa-mobile-alt"></i>
                        <span class="contact-text">000.123.234.2222</span>
                    </button>

                    <button type="button" class="list-group-item contact contact-icon-email" onclick="window.open('mailto:epiccutie@gmail.com', '_self')">
                        <i class="fas fa-envelope"></i>
                        <span class="contact-text">epiccutie@gmail.com</span>
                    </button>

                    <button type="button" class="list-group-item contact contact-icon-web" onclick="window.open('https://www.epiccutie.com', '_blank')">
                        <i class="fas fa-globe"></i>
                        <span class="contact-text">epiccutie.com</span>
                    </button>

                    <button type="button" class="list-group-item contact contact-icon-fb" onclick="window.open('https://www.facebook.com/EpicCutieOfficial', '_blank')">
                        <i class="fab fa-facebook-f"></i>
                        <span class="contact-text">epiccutie</span>
                    </button>

                    <button type="button" class="list-group-item contact contact-icon-ig" onclick="window.open('https://www.instagram.com/epiccutieofficial/', '_blank')">
                        <i class="fab fa-instagram"></i>
                        <span class="contact-text">epiccutie</span>
                    </button>

                    <button type="button" class="list-group-item contact contact-icon-in" onclick="window.open('https://www.linkedin.com/in/sarha-amelia-141220297/', '_blank')">
                        <i class="fab fa-linkedin-in"></i>
                        <span class="contact-text">epiccutie</span>
                    </button>
                </div>

                <br>
                <button class="btn custom-save-button" onclick="generateVCF()">
                    <i class="fas fa-save"></i>
                    <span class="save-to-contact">SAVE TO CONTACT</span>
                </button>
                <br>
                <div class="bottom-white-rectangle" style="height: 50px;"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function generateVCF() {
            const contactData = {
                firstName: "Sarha",
                lastName: "Amelia",
                title: "Digital Creator",
                phoneWork: "0001232342222",
                phoneMobile: "",
                email: "epiccutie@gmail.com",
                email2: "",
                email3: "",
                website: "www.epiccutie.com",
                website2: "",
                website3: "",
                address: "",
                address2: "",
                about: "",
                logo: "logo_img/Main_Design-l.png",
                profileImage: "profile_img/Main_Design-p.png",
                facebook: "EpicCutieOfficial",
                instagram: "epiccutieofficial",
                linkedin: "sarha-amelia-141220297"
            };

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
NOTE:${contactData.about}
PHOTO;VALUE=URL:${contactData.profileImage}
LOGO;VALUE=URL:${contactData.logo}
END:VCARD`;

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