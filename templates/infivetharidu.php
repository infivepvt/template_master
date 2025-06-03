<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: rgb(0, 0, 0);
        }

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
            padding: 30px 20px;
            position: relative;
            height: 180px;
            background-color: #000000;
        }

        .custom-logo {
            width: 200px;
            position: relative;
            top: 0;
            left: 0;
            margin-top: -20px;
        }

        .profile-picture {
            position: absolute;
            top: 90%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .profile-picture img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid #FFFFFF;
            background-color: #000000;
        }

        .custom-button {
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
        }

        .list-group-item {
            background-color: #000000;
            color: #FFFFFF;
            border-radius: 8px;
            margin-bottom: 10px;
            border: 2px solid #333333;
            padding: 12px 15px;
        }

        .list-group-item:hover {
            background-color: #333333;
            border-color: #666666;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .custom-save-button {
            background-color: #000000;
            color: #FFFFFF;
            font-weight: 600;
            border: 2px solid #333333;
            padding: 10px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s, border-color 0.3s;
            font-family: 'Montserrat', sans-serif;
        }

        .custom-save-button:hover {
            background-color: #333333;
            border-color: #666666;
        }

        .custom-phone1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            color: #FFFFFF;
            background-color: #000000;
            border: 2px solid #333333;
            border-radius: 8px;
            padding: 12px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .custom-phone1:hover {
            background-color: #333333;
            border-color: #666666;
        }

        .custom-phone {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            color: #FFFFFF;
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
            color: #666666;
            margin-top: 0.3rem;
        }

        .card-title {
            font-size: 24px;
            text-transform: uppercase;
            color: #FFFFFF;
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
        }

        .contact {
            background-color: #000000;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-sm">
            <div class="card-header custom-header text-center"
                style="background-image: url('banner_img/client_banner/infiveiresh-b.png');">
                <img src="logo_img/client_logo/infiveiresh-l.png" alt="Company Logo" class="custom-logo" height="100px">
                <div class="profile-picture">
                    <img src="profile_img/client_profile/tharindu-p.png" alt="Tharindu Nawarathna"
                        class="rounded-circle">
                </div>
            </div>
            <div class="card-body text-center" style="background-color: #000000; color: #FFFFFF;">
                <br> <br>
                <h2 class="card-title">Tharindu Nawarathna</h2>
                <p style="font-size: 14px; text-transform: uppercase; color: #FFFFFF;">Manager</p>
                <div class="list-group mb-3">
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://wa.me/+94703000080', '_blank')">
                        <img src="Images/icon/whatsapp.png" alt="WhatsApp"
                            style="width: 40px; height: 40px; margin-right: 25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone">Connect with WhatsApp</span>
                    </button>
                    <br>
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('tel:+94703000080', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 24px; height: 24px; margin-right: 15px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone">+94 70 3000080</span>
                    </button>
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('mailto:Infivellc@gmail.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 24px; height: 24px; margin-right: 15px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone">Infivellc@gmail.com</span>
                    </button>
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://infiveprint.com/', '_blank')">
                        <img src="Images/icon/internet.png" alt=""
                            style="width: 24px; height: 24px; margin-right: 15px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone">www.infiveprint.com</span>
                    </button>
                </div>

                <p style="font-family: 'Montserrat', sans-serif; font-size: 16px; color: #FFFFFF;">CONNECT WITH SOCIAL
                    MEDIA</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-2">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 40px; height: 40px;">
                    </a>
                    <a href="https://www.facebook.com/iresh.wickramasinghe.2025/" target="_blank"
                        rel="noopener noreferrer" class="m-2">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 40px; height: 40px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-2">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 40px; height: 40px;">
                    </a>
                </div>

                <button class="btn w-100 custom-save-button" onclick="generateVCF()">
                    <img src="Images/Social_Media_Icon/save.png" alt=""
                        style="width: 40px; height: 40px; margin-right: 15px;">
                    SAVE TO CONTACTS
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        async function generateVCF() {
            const contactData = {
                firstName: "Tharindu",
                lastName: "Nawarathna",
                title: "Manager",
                phoneWork: "+94703000080",
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
                profileImage: "profile_img/client_profile/tharindu-p.png"
            };

            async function imageToBase64(url) {
                return new Promise((resolve) => {
                    const profileImage = new Image();
                    profileImage.crossOrigin = "Anonymous"; // Important for CORS
                    profileImage.src = url + '?t=' + new Date().getTime(); // Cache buster
                    
                    profileImage.onload = function() {
                        const canvas = document.createElement('canvas');
                        canvas.width = this.naturalWidth;
                        canvas.height = this.naturalHeight;
                        const ctx = canvas.getContext('2d');
                        ctx.drawImage(this, 0, 0);
                        
                        try {
                            const base64Image = canvas.toDataURL('image/jpeg').split(',')[1];
                            resolve(base64Image);
                        } catch (e) {
                            console.error("Error converting image:", e);
                            resolve(""); // Return empty string if conversion fails
                        }
                    };
                    
                    profileImage.onerror = function() {
                        console.error("Error loading image");
                        resolve(""); // Return empty string if image fails to load
                    };
                });
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