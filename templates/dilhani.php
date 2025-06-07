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
            margin-top: 45px;
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

            0%,
            100% {
                transform: translateY(-3px);
            }

            50% {
                transform: translateY(3px);
            }
        }

        /* contact details */
        .contact {
            background-color: #373938;
        }
    </style>

</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">
            <div class="card-header custom-header text-center"
                style="background-image:  url('banner_img/client_banner/shen-b.png'); height: 200px; opacity: 1;">
                <!-- <img src="logo_img/main_logo/Main_Design-l.png" alt="Company Logo" class="custom-logo" height="80px"
                    style="width: 245px; height: auto; opacity: 1;"> -->
                <div class="profile-picture">
                    <img src="profile_img/client_profile/shen-p.png" alt="Saliya Pathum" class="rounded-circle">
                </div>
            </div>
            <br>
            <br><br><br>
            <div class="card-body text-center"
                style="background-color: #FFFFFF; color: #000000; text-decoration: none; ">
                <h2 class="card-title" style="font-size: 27px; text-transform: uppercase;">S.M Lanka Dilhani Wijerathne
                </h2>
                <p style="color: #000000; font-size: 21px; ">Shen e-Services (Pvt) Ltd</p>
                <p style="color: #000000; font-size: 15px;">Boost your online visibility with our comprehensive SEO
                    services. On-Page and Off-Page, we help businesses climb the search engine ranks.</p>

                <a href="https://wa.me/94754005050" target="_blank" rel="noopener noreferrer"
                    style="text-decoration: none;">
                    <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center"
                        style="background-color: #25D366; color: white; height: 60px; border: 2px solid orange; border-radius: 10px; gap: 10px;">
                        <i class="fab fa-whatsapp" style="font-size: 50px; margin-right:30px;"></i>
                        <span style="font-size: 14px; font-family: 'Montserrat', sans-serif;">CONNECT WITH
                            WHATSAPP</span>
                    </button>
                </a>

                <div class="list-group mb-3">
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('tel:0754005050', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">+94 754 005 050</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('mailto:shentharindu@gmail.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">shentharindu@gmail.com</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open(' https://shentharindu.com/', '_blank')">
                        <img src="Images/icon/internet.png" alt=""
                            style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; 'Montserrat', sans-serif; font-size:16px; font-size:16px;">www.shentharindu.com</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://maps.app.goo.gl/MUENQF4JNbUuXBwj9', '_blank')">
                        <img src="Images/icon/map.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">Shen
                            e-Services (Pvt) Ltd, Meegahahena Waththa, Pasal Mawatha, Walipanna, Mathugama 12100</span>
                    </button>
                </div>

                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px">CONNECT WITH SOCIAL MEDIA
                </p>
                <div class="d-flex flex-wrap justify-content-center">

                    <a href="https://www.facebook.com/ShentharinduS" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.facebook.com/ShenTharinduSEO" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.instagram.com/shen_tharindu/" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.youtube.com/channel/UCbLnQbIB52PP-4oGA8gdLhQ" target="_blank"
                        rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 50px; height: 50px;">
                    </a>

                </div>

                <div class="d-flex flex-wrap justify-content-center">
                    <a href="https://www.linkedin.com/in/shen-tharindu-1a46bbb5/" target="_blank"
                        rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.linkedin.com/company/31548346" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://twitter.com/TharinduShen" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/twitter.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.pinterest.com/shentharindusenanayake" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/pinterest.png" alt="" style="width: 50px; height: 50px;">
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
            // Contact information matching the business card
            const contactData = {
                firstName: "S.M Lanka Dilhani",
                lastName: "Wijerathne",
                title: "Shen e-Services (Pvt) Ltd",
                phoneMobile: "+94754005050",
                email: "shentharindu@gmail.com",
                website: "https://shentharindu.com",
                address: "Shen e-Services (Pvt) Ltd, Meegahahena Waththa, Pasal Mawatha, Walipanna, Mathugama 12100",
                profileImage: "profile_img/client_profile/shen-p.png"
            };

            // Function to load image and convert to Base64
            async function loadImageAsBase64(url) {
                return new Promise((resolve, reject) => {
                    const profileImage = new Image();
                    profileImage.crossOrigin = "Anonymous"; // Handle cross-origin issues if needed
                    profileImage.src = url;

                    // Ensure image is fully loaded
                    if (profileImage.complete) {
                        // Image is already loaded
                        const canvas = document.createElement('canvas');
                        const ctx = canvas.getContext('2d');
                        canvas.width = profileImage.naturalWidth;
                        canvas.height = profileImage.naturalHeight;
                        ctx.drawImage(profileImage, 0, 0);
                        const base64 = canvas.toDataURL('image/jpeg').split(',')[1]; // Get Base64 without prefix
                        resolve(base64);
                    } else {
                        // Wait for image to load
                        profileImage.onload = () => {
                            const canvas = document.createElement('canvas');
                            const ctx = canvas.getContext('2d');
                            canvas.width = profileImage.naturalWidth;
                            canvas.height = profileImage.naturalHeight;
                            ctx.drawImage(profileImage, 0, 0);
                            const base64 = canvas.toDataURL('image/jpeg').split(',')[1]; // Get Base64 without prefix
                            resolve(base64);
                        };
                        profileImage.onerror = () => reject(new Error('Failed to load image'));
                    }
                });
            }

            // Generate vCard
            async function createVCard() {
                let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=CELL:${contactData.phoneMobile}
EMAIL:${contactData.email}
URL:${contactData.website}
ADR;TYPE=WORK:;;${contactData.address};;;;
`;

                // Add profile image as Base64 if available
                try {
                    const base64Image = await loadImageAsBase64(contactData.profileImage);
                    vcfContent += `PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}\n`;
                } catch (error) {
                    console.error('Error loading profile image:', error);
                    // Proceed without the photo if it fails
                }

                vcfContent += `END:VCARD`;

                // Create download link
                const blob = new Blob([vcfContent], { type: 'text/vcard' });
                const url = URL.createObjectURL(blob);

                const a = document.createElement('a');
                a.href = url;
                a.download = `${contactData.firstName}_${contactData.lastName}.vcf`;
                document.body.appendChild(a);
                a.click();

                // Clean up
                document.body.removeChild(a);
                URL.revokeObjectURL(url);
            }

            // Execute vCard creation
            createVCard();
        }
    </script>
</body>

</html>