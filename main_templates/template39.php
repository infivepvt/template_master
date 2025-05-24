<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Alex+Brush&family=Roboto:wght@300;400;700&family=STIX+Two+Text&family=Poppins:wght@400;700&family=Quattrocento+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Great+Vibes&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: #F4F0EB;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 103vh;
            margin-top: -20px;
            margin-bottom: 40px;
            font-family: 'Montserrat', sans-serif;

        }

        .custom-card {
            border-radius: 0;
            overflow: hidden;
            background: #f2ece6;
            width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .custom-header {
            background-color: #000;
            height: 200px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 50px;
        }

        .header-title {
            /* THE LUXE EDIT changes */
            font-family: 'Cinzel', sans-serif;
            font-size: 40px;
            color: #FFFFFF;
            width: 370px;
            text-align: center;
            font-weight: 300;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .profile-picture {
            position: absolute;
            bottom: -50px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }

        .profile-picture img {
            width: 122.19px;
            height: 122.19px;
            border: 1px solid #F4F0EB;
            object-fit: cover;
        }

        .card-body {
            padding-top: 60px;
            text-align: center;
            color: #333;
        }

        .card-body h2 {
            /* Sophia Eleanor changes */
            font-family: 'Alex Brush', cursive;
            font-size: 50px;
            color: #000000;
            width: 370px;
            margin: 0 auto 5px auto;
        }

        .card-body p.title {
            /* CEO changes */
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
            color: #5A5A5A;
            width: 370px;
            margin: 0 auto 3px auto;
            text-transform: uppercase;
        }

        .card-body p.company {
            /* GameDay Catering changes */
            font-family: 'STIX Two Text', sans-serif;
            font-size: 19px;
            color: #1F1F1F;
            width: 370px;
            margin: 0 auto 20px auto;
            text-transform: uppercase;
        }

        .contact-info-item {
            font-size: 15px;
            color: #000;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .contact-info-item i {
            color: #555;
            font-size: 15px;
        }

        /* Specific styles for contact info items' span text */
        .contact-info-item span {
            display: block;
            text-align: center;
            width: 370px;
        }

        /* +123 234 4567 */
        .contact-info-item:nth-child(1) span {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            color: #000000;
        }

        /* www.yourwebsite.com */
        .contact-info-item:nth-child(2) span {
            font-family: 'Quattrocento Sans', sans-serif;
            font-size: 16px;
            color: #000000;
        }

        /* your@yourmail.com */
        .contact-info-item:nth-child(3) span {
            font-family: 'Quattrocento Sans', sans-serif;
            font-size: 16px;
            color: #000000;
        }

        /* @usrename */
        .contact-info-item:nth-child(4) span {
            font-family: 'Quattrocento Sans', sans-serif;
            font-size: 16px;
            color: #000000;
            font-weight: 700;
        }


        .about-me-section {
            background-color: #000;
            color: #fff;
            padding: 10px;
            margin: 20px auto 0 auto;
            border-radius: 20px;
            text-align: center;
            width: 370px;
            box-sizing: border-box;
        }

        .about-me-section h5 {
            /* About Me heading changes */
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
            color: #FFFFFF;
            text-align: center;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .about-me-section p {
            /* Lorem ipsum... changes */
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            color: #B3B3B3;
            text-align: center;
            line-height: 1.5;
            margin: 0 auto;
        }

        .visit-website-btn {
            /* Visit web side button changes */
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
            color: #000000;
            width: 149.45px;
            height: 39px;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 0;
            border-radius: 5px;
            font-weight: 600;
            text-transform: uppercase;
            margin-top: 20px;
            margin-bottom: 20px;
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s, color 0.3s;
            box-sizing: border-box;
            margin-left: auto;
            margin-right: auto;
        }

        .visit-website-btn:hover {
            background-color: #eee;
            color: #000;
        }

        .card-footer {
            background-color: #000;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .card-footer h3 {
            /* Fallow changes */
            font-family: 'Alex Brush', cursive;
            font-size: 30px;
            color: #FFFFFF;
            width: 370px;
            margin: 0 auto 15px auto;
        }

        .social-icons a {
            color: #fff;
            font-size: 15px;
            margin: 0 20px; /* Increased margin for more gap as requested */
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #aaa;
        }

        /* Styles for the new horizontal divider lines */
        .horizontal-divider {
            width: 390px; /* User requested width */
            height: 3px;  /* User requested height/thickness */
            background-color: #000000; /* User requested black color */
            margin: 20px auto; /* Centered with default vertical spacing */
            border: none; /* Ensure no default hr border */
            box-sizing: border-box; /* Include padding/border in width calculation */
        }

        /* Specific adjustment for the top line below profile picture */
        .horizontal-divider.top-divider-custom {
            margin-top: -50px; /* Adjust to pull it up into the profile picture's visual area */
            margin-bottom: 20px; /* Space below it */
        }

        /* Styles for the bottom line after the visit website button - applying the same properties */
        .horizontal-divider.bottom-divider-custom {
            margin-top: 20px; /* Spacing after the button */
            margin-bottom: 10px; /* Spacing before the footer */
        }

        /* The styles for .custom-save-button are no longer actively used by a button element in the HTML
            but are kept here as they were part of the previous style block. */
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
            font-family: 'Montserrat', sans-serif;
            font-size: 19px;
            border: 2px solid orange;
            width: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        .custom-save-button:hover {
            background: linear-gradient(90deg, #4b3ec4, #00b3c3);
        }
    </style>
</head>

<body>
    <div class="custom-card shadow-lg">
        <div class="custom-header">
            <h1 class="header-title">THE LUXE EDIT</h1>
            <div class="profile-picture">
                <img src="profile_img/main_profile/template39-p.jpg" alt="Sophia Eleanor" class="">
            </div>
        </div>

        <div class="card-body">
            <div class="horizontal-divider top-divider-custom"></div>
            <br>

            <h2>Sophia Eleanor</h2>
            <p class="title">CEO</p>
            <p class="company">GAMEDAY CATERING</p>

            <div class="contact-info">
                <div class="contact-info-item">
                    <span>+123 234 4567</span>
                </div>
                <div class="contact-info-item">
                    <span>WWW.YOURWEBSITE.COM</span>
                </div>
                <div class="contact-info-item">
                    <span>YOUR@YOURMAIL.COM</span>
                </div>
                <div class="contact-info-item">
                    <span>@USRENAME</span>
                </div>
            </div>

            <div class="about-me-section">
                <h5>About Me</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                    mattis, pulvinar dapibus leo.</p>
            </div>

            <a href="https://www.yourwebsite.com" target="_blank" rel="noopener noreferrer" class="visit-website-btn">
                VISIT WEBSITE
            </a>

            <div class="horizontal-divider bottom-divider-custom"></div>

        </div>

        <div class="card-footer">
            <h3>Fallow</h3>
            <div class="social-icons">
                <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function generateVCF() {
            const contactData = {
                firstName: "Sophia",
                lastName: "Eleanor",
                title: "CEO",
                company: "GAMEDAY CATERING",
                phoneWork: "+123 234 4567",
                phoneMobile: "",
                email: "your@yourmail.com",
                email2: "",
                email3: "",
                website: "www.yourwebsite.com",
                website2: "",
                website3: "",
                address: "",
                address2: "",
                about: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.",
                logo: "logo_img/main_logo/Main_Design-l.png",
                profileImage: "profile_img/main_profile/template39-p.jpg"
            };

            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} <span class="math-inline">\{contactData\.lastName\}
N\:</span>{contactData.lastName};<span class="math-inline">\{contactData\.firstName\};;;
TITLE\:</span>{contactData.title}
ORG:<span class="math-inline">\{contactData\.company\}
TEL;TYPE\=WORK,VOICE\:</span>{contactData.phoneWork}
${contactData.phoneMobile ? `TEL;TYPE=CELL:${contactData.phoneMobile}` : ''}
EMAIL:${contactData.email}
${contactData.email2 ? `EMAIL:${contactData.email2}` : ''}
${contactData.email3 ? `EMAIL:${contactData.email3}` : ''}
URL:${contactData.website}
${contactData.website2 ? `URL:${contactData.website2}` : ''}
${contactData.website3 ? `URL:${contactData.website3}` : ''}
ADR;TYPE=WORK:;;${contactData.address}
${contactData.address2 ? `ADR;TYPE=HOME:;;${contactData.address2}` : ''}
NOTE:<span class="math-inline">\{contactData\.about\}
PHOTO;VALUE\=URL\:</span>{contactData.profileImage}
LOGO;VALUE=URL:${contactData.logo}
END:VCARD`;

            const blob = new Blob([vcfContent], { type: 'text/vcard' });
            const url = URL.createObjectURL(blob);

            const a = document.createElement('a');
            a.href = url;
            a.download = `<span class="math-inline">\{contactData\.firstName\}\_</span>{contactData.lastName}.vcf`;
            document.body.appendChild(a);
            a.click();

            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        }
    </script>
</body>