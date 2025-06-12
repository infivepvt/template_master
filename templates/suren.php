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
            background: rgb(255, 255, 255);
            width: 400px;
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

        .text-body {
            background-color: #cc9831;
            overflow: hidden;
            border-radius: 10px;
        }

        /*logo*/
        .custom-logo {
            width: 200px;
            position: relative;
            top: 0;
            left: 0;
            margin-bottom: 40px;
        }

        /*profile picture*/
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
            /* background: linear-gradient(90deg, #5f4def, #00d0ea); */
            background-color: #486671;
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
            /* background: linear-gradient(90deg, #4b3ec4, #00b3c3); */
            background-color: #292b51;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: #fffefe;
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
            background-color: rgb(114, 150, 163);
            /* margin-left: 10px;   */
            padding: 5px;
            border-radius: 10px;
            color: white;
            /* margin-left: 10px;
            margin-right: 10px; */
            font-family: 'Roboto', sans-serif;
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
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">

            <!-- logo & banner image )-->
            <div class="card-header custom-header text-center">
                <div style="background-color:rgb(114, 150, 163); height: 200px; opacity: 1; ;border-radius:10px ">
                    <img src="logo_img/client_logo/suren-l.png" alt="Company Logo" class="custom-logo" height="90px"
                        style="width: 102px; opacity: 1; margin-top:30px;">
                </div>

                <!-- profile image -->
                <div class="profile-picture">
                    <img src="profile_img/client_profile/suren-p.png" alt="" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <!-- name ,title ,about me -->
            <div class="card-body text-center"
                style="background-color: #FFFFFF; color: #000000; text-decoration: none; ">
                <div class="text-body">
                    <h2 class="card-title"
                        style="font-size: 26px; text-transform: uppercase; margin-top:40px ;color: #292b51">Suren Kannah
                    </h2>
                    <p
                        style="color: #292b51; font-size: 13px; text-transform: uppercase ;letter-spacing:2.8px ;font-weight:500">
                        Director</p>
                    <p style="color: white; font-size:13px;">Dream Your Space (PVT) LTD <br>167/4/1 Colombo Road
                        Ja Ela, Sri Lanka</p>
                </div>

                <!-- contact info -->
                <div class="contact-info">
                    <div class="mb-3"
                        style="background-color: rgb(68, 198, 76); padding: 5px; border: solid 1px; border-radius: 5px; border-color: burlywood;color: white; margin-left: 10px; margin-right: 10px;">
                        <a href="https://wa.me/+94755973937" target="_blank"
                            style="text-decoration: none;color: white;"><i class="fab fa-whatsapp me-2"
                                style="margin-left: 30px;"></i> CONNECT WITH WHATSAPP</a>
                    </div>
                    <div class="mb-3" onclick="window.open('tel:+94755973937', '_self')">
                        <i class="fas fa-phone"
                            style="margin-left: 15px; color: white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                        +94 75 597 3937
                    </div>
                    <div class="mb-3" onclick="window.open('tel:+94705880882', '_self')">
                        <i class="fas fa-phone"
                            style="margin-left: 15px; color: white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                        +94 70 588 0882
                    </div>
                    <div class="mb-3" onclick="window.open('tel:+94112950977', '_self')">
                        <i class="fas fa-phone"
                            style="margin-left: 15px; color: white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                        +94 11 295 0977
                    </div>
                    <div class="mb-3" onclick="window.open('mailto:ssurenkannah@gmail.com', '_self')">
                        <i class="fas fa-mail-bulk"
                            style="margin-left: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>ssurenkannah@gmail.com
                    </div>
                    <div class="mb-3" onclick="window.open('mailto:suren@dreamyourspaces.com', '_self')">
                        <i class="fas fa-mail-bulk"
                            style="margin-left: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>suren@dreamyourspaces.com
                    </div>
                    <div class="mb-3" onclick="window.open('https://dreamyourspaces.com/', '_blank')">
                        <i class="fab fa-internet-explorer"
                            style="margin-left: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                        www.dreamyourspaces.com
                    </div>
                </div>

                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px">CONNECT WITH SOCIAL MEDIA
                </p>
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
                </div>


                <br>
                <button class="btn w-100 custom-save-button" onclick="generateVCF()"
                    style="font-family: 'Roboto', sans-serif; font-size:19px; ">
                    <!-- <img src="Images/Social_Media_Icon/save.png" alt="" style="width: 50px; height: 50px; margin-right:25px;"> -->
                    <i class="fas fa-address-card me-2"></i>SAVE TO CONTACTS
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function generateVCF() {
            // Contact information - update these values with actual data
            const contactData = {
                firstName: "Suren",
                lastName: "Kannah",
                title: "Director",
                phoneWork: "+94755973937",
                phoneMobile: "+94705880882",
                phoneOffice: "+94112950977",
                email: "ssurenkannah@gmail.com",
                email2: "suren@dreamyourspaces.com",
                website: "https://dreamyourspaces.com",
                address: "167/4/1 Colombo Road, Ja Ela, Sri Lanka",
                company: "Dream Your Space (PVT) LTD",
                profileImage: "profile_img/client_profile/suren-p.png"
            };

            // Function to convert image to base64
            function getBase64Image(imgUrl, callback) {
                const img = new Image();
                img.crossOrigin = 'Anonymous'; // Handle cross-origin issues if needed
                img.onload = function () {
                    const canvas = document.createElement('canvas');
                    canvas.width = this.naturalWidth;
                    canvas.height = this.naturalHeight;
                    const ctx = canvas.getContext('2d');
                    ctx.drawImage(this, 0, 0);
                    const dataURL = canvas.toDataURL('image/jpeg');
                    callback(dataURL);
                };
                img.src = imgUrl;
            }

            // Generate VCF with profile image
            getBase64Image(contactData.profileImage, function (base64Image) {
                // Create VCF content
                let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
ORG:${contactData.company}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL:${contactData.phoneMobile}
TEL;TYPE=OFFICE:${contactData.phoneOffice}
EMAIL;TYPE=WORK:${contactData.email}
EMAIL;TYPE=WORK:${contactData.email2}
URL:${contactData.website}
ADR;TYPE=WORK:;;${contactData.address}
PHOTO;ENCODING=b;TYPE=JPEG:${base64Image.split(',')[1]}
END:VCARD`;

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
            });
        }
    </script>
</body>

</html>