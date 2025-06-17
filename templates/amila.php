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
            transition: color 0.3s ease;
        }

        .social-icon-box:hover {
            background-color: #FFB300;
            cursor: pointer;
        }

        .social-icon:hover i {
            color: #FFFFFF;
        }

        .custom-save-button {
            background-color: #FFC107; /* Yellow background */
            color: #000000; /* Black text */
            border: none;
            padding: 10px 20px;
            font-family: 'Rubik', sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
            margin-top: 20px;
        }

        .custom-save-button:hover {
            background-color: #FFB300; /* Darker yellow on hover */
            color: #FFFFFF; /* White text on hover */
            cursor: pointer;
        }

        .custom-save-button i {
            color: #000000; /* Black icon */
            transition: color 0.3s ease;
        }

        .custom-save-button:hover i {
            color: #FFFFFF; /* White icon on hover */
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
                   
                </div>
                 <button class="btn h-100 custom-save-button social-media-button" onclick="generateVCF()">
                    <i class="fas fa-save me-2"></i>
                    SAVE TO CONTACTS
                </button>
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
    async function generateVCF() {
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
            logo: "logo_img/client_logo/amila-l.png"
        };

        // Function to convert image to base64
        async function imageToBase64(url) {
            const response = await fetch(url);
            const blob = await response.blob();
            return new Promise((resolve, reject) => {
                const reader = new FileReader();
                reader.onloadend = () => resolve(reader.result.split(',')[1]);
                reader.onerror = reject;
                reader.readAsDataURL(blob);
            });
        }

        // Load profile image and convert to base64
        let profileImageBase64 = '';
        try {
            profileImageBase64 = await imageToBase64(contactData.profileImage);
        } catch (error) {
            console.error('Error loading profile image:', error);
        }

        // Load logo image and convert to base64
        let logoBase64 = '';
        try {
            logoBase64 = await imageToBase64(contactData.logo);
        } catch (error) {
            console.error('Error loading logo image:', error);
        }

        // Create vCard content with base64 images
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
${profileImageBase64 ? `PHOTO;ENCODING=b;TYPE=JPEG:${profileImageBase64}` : ''}
${logoBase64 ? `LOGO;ENCODING=b;TYPE=PNG:${logoBase64}` : ''}
END:VCARD`;

        // Create and download VCF file
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