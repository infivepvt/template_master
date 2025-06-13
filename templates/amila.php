<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Spectral&family=Rubik&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: #FFFFFF;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            color: #FFFFFF;
            padding-bottom: 30px;
        }

        .custom-card-wrapper {
            width: 100%;
            max-width: 500px;
            margin: auto;
        }

        .custom-card {
            background-color: #000000;
            /* Changed to black */
            border-radius: 2px;
            width: 100%;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.4);
            overflow: hidden;
            position: relative;
            text-align: center;
            padding-bottom: 0.5px;
        }

        .logo-container {
            width: 100%;
            max-width: 150px;
            margin: 20px auto 10px auto;
        }

        .logo-container img {
            width: 100%;
            height: 100px;
            object-fit: contain;
        }

        .profile-picture-container {
            width: 290px;
            height: 370px;
            margin: 10px auto 0 auto;
            border-top-left-radius: 0;
            border-top-right-radius: 100px;
            position: relative;
            overflow: hidden;
        }

        .profile-picture-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
        }

        .card-content {
            padding: 0 20px;
            margin-top: 15px;
        }

        .card-content .name {
            font-family: 'Spectral', serif;
            font-size: 37px;
            color: #FFC107;
            /* Yellow for name */
            font-weight: 400;
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .card-content .title {
            font-family: 'Rubik', sans-serif;
            font-size: 12px;
            color: #FFFFFF;
            font-weight: 400;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .contact-info-stack p {
            font-family: 'Roboto', sans-serif;
            color: #FFFFFF;
            margin-bottom: 8px;
            word-break: break-word;
        }

        .contact-info-stack p.phone {
            font-size: 20px;
            color: #FFC107;
            /* Yellow for phone */
            margin-bottom: 8px;
        }

        .contact-info-stack p.email,
        .contact-info-stack p.website {
            font-size: 12px;
            color: #FFFFFF;
            margin-bottom: 5px;
            font-weight: 370;
        }

        .contact-info-stack p.username {
            font-size: 16px;
            color: #FFFFFF;
            margin-top: 8px;
            margin-bottom: 20px;
        }

        .contact-info-stack {
            margin-bottom: 0;
        }

        .social-icons-container {
            display: flex;
            justify-content: center;
            gap: 100px;
            padding: 10px 20px 20px 20px;
            margin-top: 20px;
        }

        .social-icon-box {
            width: 35px;
            height: 35px;
            background-color: #FFC107;
            /* Yellow for social icon background */
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .social-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
        }

        .social-icon i {
            font-size: 24px;
            color: #000000;
            /* Black for icons */
            transition: color 0.3s ease;
        }

        .social-icon-box:hover {
            background-color: #FFB300;
            /* Darker yellow on hover */
            cursor: pointer;
        }

        .social-icon:hover i {
            color: #FFFFFF;
            /* White on hover */
        }
    </style>
</head>

<body>
    <div class="custom-card-wrapper">
        <div class="card custom-card">

            <div class="profile-picture-container">
                <img src="profile_img\client_profile\amila-p.jpeg" alt="T M Amila Sandaruwan Profile Picture">
            </div>
            <div class="card-content">
                <h2 class="name">T M Amila Sandaruwan</h2>
                <p class="title">Manager - PickMe Kurunegala Branch</p>
                <div class="logo-container">
                    <img src="logo_img/client_logo/amila-l.png" alt="PickMe Logo">
                </div>
                <br>
                <div class="contact-info-stack">
                    <p class="contact-info phone"><a href="tel:+94760106247"
                            style="text-decoration:none;color:#FFC107;">+94 76 010 6247</a></p>
                    <p class="contact-info phone"><a href="tel:+94766975973"
                            style="text-decoration:none;color:#FFC107;">+94 76 697 5973</a></p>
                    <br>
                    <p class="contact-info email"><a href="mailto:amilasandaruwan@pickme.lk"
                            style="text-decoration:none;color:#FFFFFF;">amilasandaruwan@pickme.lk</a></p>
                    <p class="contact-info website"><a href="https://pickme.lk/" target="_blank"
                            style="text-decoration:none;color:#FFFFFF;">www.pickme.lk</a></p>
                    <br>
                    <p class="contact-info username">Digital Mobility Solutions Lanka Ltd,<br>
                        #309, Highlevel Road, Colombo 06</p>
                    <br>
                </div>
                <div class="social-icons-container">
                    <div class="social-icon-box">
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <div class="social-icon-box">
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                    <div class="social-icon-box">
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <br><br><br>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function generateVCF() {
            const contactData = {
                firstName: "T M Amila",
                lastName: "Sandaruwan",
                title: "Manager - PickMe Kurunegala Branch",
                organization: "Digital Mobility Solutions Lanka Ltd",
                phoneWork: "+94760106247",
                phoneSecondary: "+94766975973",
                emailWork: "amilasandaruwan@pickme.lk",
                website: "https://pickme.lk/",
                address: "#309, Highlevel Road, Colombo 06",
                profileImage: "profile_img/client_profile/amila-p.jpeg",
                logo: "Images/pickme_logo.png"
            };

            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
ORG:${contactData.organization}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL,VOICE:${contactData.phoneSecondary}
EMAIL;TYPE=WORK:${contactData.emailWork}
URL:${contactData.website}
ADR;TYPE=WORK:;;${contactData.address};;;;
PHOTO;VALUE=URL:${window.location.origin}/${contactData.profileImage.replace(/^\//, '')}
LOGO;VALUE=URL:${window.location.origin}/${contactData.logo.replace(/^\//, '')}
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