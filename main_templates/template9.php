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

        .column {
            align-item: center;
            width: 50%;
            padding: 10px;
            height: auto; /* Should be removed. Only for demonstration */
        }

        .td{
            color: #7a7a7a;
            font-size: 15px;
            margin-top:10px;
        }

        .custom-save-button {
            /* background: linear-gradient(90deg, #5f4def, #00d0ea); */
            background-color: #33467b;
            color: white;
            font-weight: bold;
            border: none;
            padding:4px 5px 4px 5px;
            border-radius: 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }

        .custom-save-button:hover {
            /* background: linear-gradient(90deg, #4b3ec4, #00b3c3); */
            background-color: #33467b;
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

        .mb-3{
            background-color: #1824ea;
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
            <div class="card-header custom-header text-center"
                style="background-image:  url('banner_img/main_banner/template9-b.jpg'); height: 200px; opacity: 1;">
                <img src="logo_img/main_logo/template9-l.png" alt="Company Logo" class="custom-logo" height="90px"
                    style="width: 102px; opacity: 1; margin-top:20px; float:right;margin-top:-40px;">
                    <!-- <h2 class="card-title" style="font-size: 25px; text-transform: uppercase; margin-top:70px; float:left;">KHIM RICHARDS</h2>
                    <h4 class="card-title" style="font-size: 25px; text-transform: uppercase; margin-top:10px; float:left; padding-right:-80px">OWNER/CEO</h4> -->
                <!-- <div class="profile-picture">
                    <img src="profile_img/template2-p.png" alt="Saliya Pathum" class="rounded-circle">
                </div> -->
            </div>
            <br>
            <br>
            <!-- contact info -->
            <div class="card-body text-center"
                style="background-color: #FFFFFF; color: #000000; text-decoration: none; ">
                <h2 class="card-title" style="font-size: 27px; text-transform: uppercase; margin-top:-50px">KHIM RICHARDS</h2>
                <p style="color:rgb(63, 63, 63); font-size: 21px; text-transform: uppercase;">OWNER/CEO</p>


                <div class="row">
                    <div class="column">
                        <i class="fas fa-mobile" style="margin-left: 30px; font-size: 30px; margin-left:-10px "></i><br>
                        <a href="tel: +123-4566-2343 " style="text-decoration:none"> <p class="td">+123-4566-2343</p> </a>
                        
                    </div>
                    <div class="column" >
                        <i class="fas fa-location-arrow" style="margin-left: 30px; font-size: 30px; margin-left:-10px "></i>
                        <a href="https://www.google.com/maps?authuser=0" style="text-decoration:none">
                        <p class="td">12, Your Lane,<br>Your Street, La</p></a>
                    </div>
                    <hr style="color: #333333;">
                    <div class="column">
                        <i class="fas fa-envelope" style="margin-left: 30px; font-size: 30px; margin-left:-10px "></i>
                        <a href="mailto:your@mail.com" style="text-decoration:none">
                        <p class="td">info@gmail.com</p></a>
                    </div>
                    <div class="column" >
                        <i class="fab fa-internet-explorer" style="margin-left: 30px; font-size: 30px; margin-left:-10px "></i>
                        <a href="https://www.internet.com/" style="text-decoration:none">
                        <p class="td">yourwebsite.com</p></a>
                    </div>
                </div>

                <br>
                <!-- save info -->
                <button class="btn w-100 custom-save-button" onclick="generateVCF()" style="font-family: 'Roboto', sans-serif; font-size:19px; ">
                <!-- <img src="Images/Social_Media_Icon/save.png" alt="" style="width: 50px; height: 50px; margin-right:25px;"> -->
                <i class="fas fa-address-card me-2" ></i>CONTACT WITH ME
                </button><br><br>

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