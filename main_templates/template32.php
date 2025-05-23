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
       
        /*logo*/
        .custom-logo {                            
            width: 200px;
            position: relative;
            top: 0;
            left: 0;
            margin-bottom: 40px;
        }

        /*profile picture*/
        /* .profile-picture {            
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
        } */

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
            background-color: #0d63dd;
            color: white;
            font-weight: bold;
            border: none;
            padding: 5px;
            border-radius: 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }

        .custom-save-button:hover {
            /* background: linear-gradient(90deg, #4b3ec4, #00b3c3); */
            /* background-color: #1824ea; */
            background-color: #0d63dd;
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

        .btn-content {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
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

        @keyframes float {

            0%,
            100% {
                transform: translateY(-3px);
            }

            50% {
                transform: translateY(3px);
            }
        }

        /* editable */
        /* Contact info sections */
        .contact-section {
            display: flex;
            justify-content: center;
            margin: 15px 0;
            margin-right: 50px;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            text-align: center;
            font-size: 24px;
            color: white;
            border: 2px solid  #0d63dd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            background-color: #0d63dd;
        }

        .contact-details {
            width: 200px;
            margin-top: 5px;
            font-size: 20px;
            font-weight: bold;
            text-align: start;
            margin-left: 40px;
        }

        .contact-d {
            color: black;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">
            <div class="card-header custom-header text-center"
                style="background-image:  url('http://localhost/template_master/banner_img/main_banner/template35-b.jpg'); height: 200px; opacity: 1;">
                <!-- <img src="logo_img/main_logo/template8-l.png" alt="Company Logo" class="custom-logo" height="90px"
                    style="width: 102px; opacity: 1; margin-top:20px;"> -->
                <!-- <div class="profile-picture">
                    <img src="profile_img/template2-p.png" alt="Saliya Pathum" class="rounded-circle">
                </div> -->
            </div>
            <br>
            <br>
            <div style="margin-top: -80px; z-index: 999;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" style=" display: block; width: 100%; height: 100%; overflow: hidden;">
                <path style="fill: #0d63dd;" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3
                c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3
                c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path>
                </svg>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" style="display: block; width: 100%; height: 100%; overflow: hidden;">
                <path style="fill: #0d63dd;" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
            <div class="card-body text-center"
                style="background-color: #FFFFFF; color: #000000; text-decoration: none; ">
                <h2 class="card-title" style="font-size: 25px; text-transform: uppercase; margin-top:-20px; text-align:left">Trisha Parker</h2>
                <p style="color: #7a7a7a7a; font-size: 16px; text-transform: uppercase; text-align:left">Product Designer</p>

                <div>
                    <p style="text-align: left; color: #000000;">About Me</p>
                    <p style="text-align: left;margin-top:-10px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                </div>

                <!-- contact details & icon -->
                <div class="contact-info">
                    <!-- <div class="mb-3" style="background-color: rgb(68, 198, 76); padding: 5px; border: solid 1px; border-radius: 5px; border-color: burlywood;color: white; margin-left: 10px; margin-right: 10px;">
                        <i class="fab fa-whatsapp me-2" style="margin-left: 30px;"></i> CONNECT WITH WHATSAPP
                    </div> -->    
                    <div class="contact-section">
                        <div class="contact-icon">
                            <i class="fas fa-mobile-alt" onclick="window.open('tel:+1234546890', '_self')"></i>
                        </div>
                        <div class="contact-details">
                            <p class="contact-d">+1 (234) 546 890</p>
                        </div>
                    </div>

                    <div class="contact-section">
                        <div class="contact-icon">
                            <i class="fas fa-mail-bulk" onclick="window.open('mailto:your@mail.com', '_self')"></i>
                        </div>
                        <div class="contact-details">
                            <p class="contact-d">your@mail.com</p>
                        </div>
                    </div>

                    <div class="contact-section">
                        <div class="contact-icon">
                            <i class="fab fa-internet-explorer" onclick="window.open('https://www.internet.com/', '_self')"></i>
                        </div>
                        <div class="contact-details">
                            <p class="contact-d">www.internet.com</p>
                        </div>
                    </div>

                    <div class="contact-section">
                        <div class="contact-icon">
                            <i class="fas fa-location-arrow" onclick="window.open('https://www.google.com/maps?authuser=0', '_self')"></i>
                        </div>
                        <div class="contact-details">
                            <p class="contact-d">162 Santili Hwy, Everett</p>
                        </div>
                    </div>

                </div>

                <!-- save info -->
                <div class="d-flex justify-content-center">
                    <button class="btn w-60 custom-save-button" onclick="generateVCF()" style="font-family: 'Roboto', sans-serif; font-size:19px; ">
                <!-- <img src="Images/Social_Media_Icon/save.png" alt="" style="width: 50px; height: 50px; margin-right:25px;"> -->
                <i class="fas fa-plus me-2" ></i>Add To Contact
                </button>
                </div><br>

                <div>
                    <img src="http://localhost/template_master/gallery_img/main_gallerys/t36g1.jpg" width="100%" height="100%">
                    <img src="http://localhost/template_master/gallery_img/main_gallerys/t36g2.jpg" width="100%" height="100%">
                </div>

                <!-- <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px">CONNECT WITH SOCIAL MEDIA
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
                </div> -->


                <br>
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function generateVCF() {
            // Contact information - update these values with your actual data
            const contactData = {
                firstName: "Saliya",
                lastName: "Pathum",
                title: "Infive",
                phoneWork: "0761231212",
                phoneMobile: "",
                email: "youremail@yourwebsite.com",
                email2: "",
                email3: "",
                website: "www.yourwebsiteaddress.com",
                website2: "",
                website3: "",
                address: "919 Oaktree Crescent, Newmarket",
                address2: "",
                about: "",
                logo: "logo_img/main_logo/template2-l.jpg",
                profileImage: "profile_img/profile.png"
            };

            // Create VCF content
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
    </script>
</body>

</html>