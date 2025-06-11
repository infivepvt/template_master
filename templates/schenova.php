<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .custom-card {
            overflow: hidden;
            background: #FFFFFF;
            height: auto;
            font-family: 'Lora', serif;
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

        .text-body {
            background-color: #06cbe3;
            overflow: hidden;
            border-radius: 10px;
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
            margin-top: 80px;
        }

        .custom-button {
            font-weight: 600;
            font-family: 'Open Sans', sans-serif;
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
            font-family: 'Open Sans', sans-serif;
        }

        .list-group-item:hover {
            background-color: #444;
            border-color: #666;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .custom-save-button {
            background-color: #292b51;
            color: white;
            font-weight: 600;
            border: none;
            padding: 10px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
            font-family: 'Open Sans', sans-serif;
        }

        .custom-save-button:hover {
            background-color: #292b51;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: #fffefe;
            margin-right: 10px;
            width: 30px;
            text-align: center;
        }

        .btn-content {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }

        .upload-icon {
            font-size: 2rem;
            transition: transform 0.3s ease;
        }

        .modern-upload-btn:hover .upload-icon {
            transform: translateY(-3px);
            animation: float 2s ease-in-out infinite;
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

        .contact-info {
            margin: 30px 0;
            font-size: 1.2rem;
            text-align: left;
        }

        .mb-3 {
            background-color: #292b51;
            padding: 10px 15px;
            border-radius: 10px;
            color: white;
            font-family: 'Open Sans', sans-serif;
            display: flex;
            align-items: center;
            width: 100%;
            min-height: 50px;
            box-sizing: border-box;
            margin-bottom: 10px;
            text-decoration: none;
        }

        .mb-3:hover {
            background-color: #3a3d6b;
            color: white;
            text-decoration: none;
        }

        .card-title,
        .fw {
            font-family: 'Lora', serif;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(-3px);
            }

            50% {
                transform: translateY(3px);
            }
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">
            <div class="card-header custom-header text-center">
                <div style="background-color: #06cbe3; height: 200px; opacity: 1; border-radius:10px;">
                    <img src="logo_img/client_logo/schenova-l.png" alt="Schenova Auto Land Logo" class="custom-logo" style="width: 170px; opacity: 1; margin-top:30px;">
                </div>
                <div class="profile-picture">
                    <img src="profile_img/client_profile/schenova-p.png" alt="" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center" style="background-color: #FFFFFF; color: #000000; text-decoration: none;">
                <div class="text-body">
                    <h2 class="card-title" style="font-size: 26px; text-transform: uppercase; margin-top:40px; color: #424055;">Saman Subasinghe</h2>
                    <p style="color: #424055; font-size: 13px; text-transform: uppercase; letter-spacing:2.8px; font-weight:600;">MANAGING DIRECTOR</p>
                    <p style="color: white; font-size:13px;">Schenova Auto Land</p>
                </div>

                <div class="contact-info">
                    <a href="tel:+94706666690" class="mb-3">
                        <i class="fas fa-phone contact-icon"></i>
                        070 666 6690
                    </a>
                    <a href="mailto:schenovaautoland@gmail.com" class="mb-3">
                        <i class="fas fa-mail-bulk contact-icon"></i>
                        schenovaautoland@gmail.com
                    </a>
                    <a href="https://www.google.com/maps/search/?api=1&query=No.4%2F1,+Mirigama+Road,+Banduragoda,+Sri+Lanka" target="_blank" rel="noopener noreferrer" class="mb-3">
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        No.4/1, Mirigama Road, Banduragoda, Sri Lanka
                    </a>
                </div>

                <!-- <p class="fw" style="font-family: 'Lora', serif; font-size:19px;">CONNECT WITH SOCIAL MEDIA</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>

                <div class="d-flex flex-wrap justify-content-center">
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/twitter.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/social.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/pinterest.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div> -->

                <br>
                <button class="btn w-100 custom-save-button" onclick="generateVCF()" style="font-family: 'Open Sans', sans-serif; font-size:19px;">
                    <i class="fas fa-address-card me-2"></i>SAVE TO CONTACTS
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        async function generateVCF() {
            const contactData = {
                firstName: "Saman",
                lastName: "Subasinghe",
                title: "Managing Director",
                organization: "Schenova Auto Land",
                phoneMobile: "070 666 6690",
                email: "schenovaautoland@gmail.com",
                address: "No.4/1, Mirigama Road, Banduragoda, Sri Lanka",
                profileImage: "profile_img/client_profile/schenova-p.png"
            };

            const toBase64 = async (url) => {
                return new Promise((resolve, reject) => {
                    const profileImage = new Image();
                    profileImage.crossOrigin = "Anonymous";
                    profileImage.src = url;

                    profileImage.onload = () => {
                        try {
                            const canvas = document.createElement('canvas');
                            const ctx = canvas.getContext('2d');
                            canvas.width = profileImage.naturalWidth;
                            canvas.height = profileImage.naturalHeight;
                            ctx.drawImage(profileImage, 0, 0);
                            const base64Image = canvas.toDataURL('image/jpeg').split(',')[1];
                            resolve(base64Image);
                        } catch (error) {
                            reject(error);
                        }
                    };

                    profileImage.onerror = () => {
                        reject(new Error("Failed to load image"));
                    };

                    if (profileImage.complete) {
                        profileImage.onload();
                    }
                });
            };

            let photoBase64 = '';
            try {
                photoBase64 = await toBase64(contactData.profileImage);
            } catch (error) {
                console.error("Failed to load image for VCF:", error);
            }

            let vcfLines = [
                "BEGIN:VCARD",
                "VERSION:3.0",
                `FN:${contactData.firstName} ${contactData.lastName}`,
                `N:${contactData.lastName};${contactData.firstName};;;`,
                `ORG:${contactData.organization}`,
                `TITLE:${contactData.title}`,
                `TEL;TYPE=WORK,MOBILE:${contactData.phoneMobile}`,
                `EMAIL;TYPE=WORK:${contactData.email}`,
                `ADR;TYPE=WORK:;;${contactData.address};;;;`,
                photoBase64 ? `PHOTO;ENCODING=b;TYPE=JPEG:${photoBase64}` : '',
                "END:VCARD"
            ];

            const vcfContent = vcfLines.filter(line => line).join('\n');
            const blob = new Blob([vcfContent], {
                type: 'text/vcard'
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `${contactData.firstName}_${contactData.organization}.vcf`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);

            alert("Contact information saved successfully!");
        }
    </script>
</body>

</html>