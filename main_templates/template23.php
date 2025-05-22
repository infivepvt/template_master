<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card - Bryan Scotte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: #f0f0f0;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding-top: -30px;
            padding-bottom: -5px; 
        }
        .custom-card-wrapper {
            width: 100%;
            max-width: 500px;
        }

        .custom-card {
            border-radius: 0.5px;
            overflow: hidden;
            background: #FFFFFF;
            width: 100%;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            padding-bottom: 50px; /* For fixed bottom bar */
            position: relative;
            font-family: 'Roboto', sans-serif;
        }

        .header-top-content {
            text-align: center;
            padding: 25px 20px 10px 20px;
        }

        .company-graphic-logo {
            display: block;
            margin: 0 auto 10px auto;
            max-height: 166.5px;
            width: 166.5px;
        }

        .company-text-below-graphic {
            font-family: 'Roboto', sans-serif;
            font-size: 25px;
            font-weight: 600;
            color: #1D1D1D;
            text-align: center;
            margin-bottom: 10px; /* Increased margin-bottom */
        }

        .main-body-flex-container {
            display: flex;
            padding: 0 25px 15px 25px;
            align-items: flex-start;
        }

        .left-column-content {
            flex-grow: 1;
            padding-right: 20px;
        }

        .header-divider-style {
        height: 2px;
        width: 100%;
        background-color: #333333;
        margin: 0 auto 25px auto;
        border-radius: 10px;
        border: none;
        }


        .profile-text-block-style .name {
            font-family: 'Roboto', sans-serif;
            font-size: 25px;
            font-weight: 700;
            color: #000000;
            margin-bottom: 2px;
            line-height: 1.2;
        }

        .profile-text-block-style .title {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            font-weight: 400;
            color: #7A7A7A;
            margin-bottom: 2px;
        }

        .profile-text-block-style .company {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            font-weight: 400;
            color: #7A7A7A;
        }

        .right-column-profile-pic {
        width: 88.8px;
        height: 88.8px;
        flex-shrink: 0;
        margin-top: -30px; /* Moves image closer to the top (and closer to the line) */
        }

        .profile-image-style {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 1px solid #FFFFFF;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }

        .contact-list {
            padding: 0px 25px 20px 25px;
            list-style: none;
            margin-top: 0px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 18px;
            text-decoration: none;
            color: inherit;
        }

        .contact-item .icon {
            background-color: #000000;
            color: #FFFFFF;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 3px 7px rgba(0, 0, 0, 0.25);
            margin-right: 20px;
            flex-shrink: 0;
        }

        .contact-item .icon i {
            font-size: 1.2rem;
            line-height: 1;
        }

        .contact-item .text-content .main-text {
            display: block;
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
            font-weight: 400;
            color: #000000;
            line-height: 1.3;
        }

        .contact-item .text-content .sub-text {
            display: block;
            font-family: 'Roboto', sans-serif;
            font-size: 13px;
            font-weight: 400;
            color: #5C5C5C;
            line-height: 1.2;
        }

        .bottom-bar {
        position: relative; /* not absolute anymore */
        margin-top: 10px;   /* add spacing after contact list */
        padding: 15px 25px;
        background-color: #FFFFFF;
        display: flex;
        justify-content: space-between;
        align-items: center;
        }


        .bottom-dots {
            margin-left: 20px;
        }

        .bottom-dots span {
        display: inline-block;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background-color: #000000;
        margin: 0 6px;
        }


        .custom-save-button {
            background-color: #000000;
            color: #FFFFFF;
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
            font-weight: 500;
            border: none;
            width: 128.77px;
            height: 44px;
            border-radius: 22px;
            padding: 0 15px;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: background-color 0.3s;
            text-decoration: none;
            line-height: 1;
        }

        .custom-save-button i {
            color: #FFFFFF !important;
            font-size: 18px;
            line-height: 1;
        }

        .custom-save-button:hover {
            background-color: #333333;
            color: #FFFFFF;
        }

    </style>
</head>

<body>
    <div class="custom-card-wrapper">
        <div class="card custom-card">
            <div class="header-top-content">
                <img src="logo_img\main_logo\template23-l.png" alt="Company Graphic Logo" class="company-graphic-logo">
                <div class="company-text-below-graphic">Thinkable Laptop</div> </div>
                <br>

            <div class="main-body-flex-container">
                <div class="left-column-content">
                    <hr class="header-divider-style">
                <div class="profile-text-block-style">
                        <h2 class="name">Bryan Scotte</h2>
                        <p class="title">Account Expert</p>
                        <p class="company">Thinkable Laptop Company</p>
                    </div>
                </div>
                <div class="right-column-profile-pic">
                    <img src="profile_img\main_profile\template23-p .png" alt="Bryan Scotte" class="profile-image-style">
                </div>
            </div>

            <ul class="contact-list">
                <li>
                    <a href="#" class="contact-item">
                        <span class="icon"><i class="fas fa-mobile-alt"></i></span>
                        <div class="text-content">
                            <span class="main-text">Book a meeting With me</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="https://www.yourwebsiteaddress.com" target="_blank" class="contact-item">
                        <span class="icon"><i class="fas fa-envelope"></i></span>
                        <div class="text-content">
                            <span class="main-text">Visit our website</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="contact-item">
                        <span class="icon"><i class="fab fa-linkedin-in"></i></span>
                        <div class="text-content">
                            <span class="main-text">Connect with on Linkedin</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="tel:123-555-675-444" class="contact-item">
                        <span class="icon"><i class="fas fa-phone"></i></span>
                        <div class="text-content">
                            <span class="main-text">(123)-555 675 444</span>
                            <span class="sub-text">Call me</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="mailto:infothinkablelaptop@gmail.com" class="contact-item">
                        <span class="icon"><i class="fas fa-phone"></i></span>
                        <div class="text-content">
                            <span class="main-text">infothinkablelaptop@gmail.com</span>
                            <span class="sub-text">Work</span>
                        </div>
                    </a>
                </li>
            </ul>

            <div class="bottom-bar">
                <div class="bottom-dots">
                    <span></span><span></span><span></span><span></span><span></span>
                </div>
                <button class="btn custom-save-button" onclick="generateVCF()">
                    <i class="fas fa-address-card"></i> Save
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function generateVCF() {
            const contactData = {
                firstName: "Bryan",
                lastName: "Scotte",
                title: "Account Expert",
                organization: "Thinkable Laptop Company",
                phoneWork: "(123)-555-675-444",
                emailWork: "infothinkablelaptop@gmail.com",
                website: "https://www.yourwebsiteaddress.com",
                linkedIn: "https://www.linkedin.com/in/bryanscotte",
                profileImage: window.location.origin + "/profile_img/client_profile/template27.png",
            };

            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
ORG:${contactData.organization}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
EMAIL;TYPE=WORK:${contactData.emailWork}
URL:${contactData.website}
URL;TYPE=LinkedIn:${contactData.linkedIn}
PHOTO;VALUE=URL:${contactData.profileImage}
NOTE:Book a meeting: [Your Meeting Link Here]\\nConnect on LinkedIn: ${contactData.linkedIn}
END:VCARD`;

            const blob = new Blob([vcfContent], { type: 'text/vcard;charset=utf-8' });
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