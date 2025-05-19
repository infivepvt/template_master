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
            top: 90%;
            left: 50%;
            transform: translate(-50%, -50%);
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
            padding: 5px 15px;
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
            padding: 5px;
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
            background-color: #023020;
        }
    </style>

</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color:rgb(255, 255, 255);">
            <div class="card-header custom-header text-center"
                style="background-image:  url('banner_img/client_banner/suduaraliya-b.jpg'); height: 175px; opacity: 1; width:100%">
                <!-- <img src="logo_img/main_logo/Main_Design-l.png" alt="Company Logo" class="custom-logo" height="80px"
                    style="width: 245px; height: auto; opacity: 1;"> -->
                <div class="profile-picture">
                    <img src="profile_img/client_profile/suduaraliya-p.png" alt="" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center"
                style="background-color: #FFFFFF; color: #000000; text-decoration: none; ">
                <h2 class="card-title" style="font-size: 24px; text-transform: uppercase; margin-top:-20px">Hotel Sudu
                    Araliya</h2>
                <!-- <p style="color: #000000; font-size: 21px; text-transform: uppercase;"></p> -->

                <div class="d-flex flex-wrap " style="padding-bottom:5px;margin-top:-10px">
                    <a href="https://www.facebook.com/HotelSuduAraliya/" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 23px; height: 23px;">
                    </a>
                    <a href="https://www.instagram.com/hotelsuduaraliya/" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 23px; height: 23px;">
                    </a>
                    <a href="https://www.tiktok.com/@hotelsuduaraliya" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 23px; height: 23px;">
                    </a>
                    <a href="https://www.youtube.com/@hotelsuduaraliya9930" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 23px; height: 23px;">
                    </a>
                    <a href="https://x.com/araliyaclient" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/x-2.png" alt="" style="width: 23px; height: 23px;">
                    </a>
                    <a href="https://www.linkedin.com/company/71032253" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 23px; height: 23px;">
                    </a>
                </div>

                <!-- <div class="d-flex flex-wrap justify-content-center">
                    <a href="https://www.youtube.com/@hotelsuduaraliya9930" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 45px; height: 45px;">
                    </a>                   
                    <a href="https://www.tiktok.com/@hotelsuduaraliya" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 45px; height: 45px;">
                    </a>
                    <a href="https://www.linkedin.com/company/71032253" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 45px; height: 45px;">
                    </a>
                </div> -->


                <a href="https://api.whatsapp.com/send?phone=+94765315390&text=Hotel%20Sudu%20Araliya" target="_blank"
                    rel="noopener noreferrer" style="text-decoration: none;">
                    <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center"
                        style="background-color: #25D366; color: white; height: 50px; border: 2px solid orange; border-radius: 10px; gap: 10px;">
                        <i class="fab fa-whatsapp" style="font-size: 30px; margin-right:30px;"></i>
                        <span style="font-size: 14px; font-family: 'Montserrat', sans-serif;">CONNECT WITH
                            WHATSAPP</span>
                    </button>
                </a>

                <div class="list-group mb-3">
                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('tel:+94272224849', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 25px; height: 25px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px">+94 272 224
                            849</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('mailto:info@hotelsuduaraliya.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 25px; height: 25px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">info@hotelsuduaraliya.com</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('http://www.hotelsuduaraliya.com/', '_blank')">
                        <img src="Images/icon/internet.png" alt=""
                            style="width: 25px; height: 25px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; 'Montserrat', sans-serif; font-size:16px; font-size:16px;">www.hotelsuduaraliya.com</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://www.google.com/maps/place/Hotel+Sudu+Araliya/@7.9232387,80.9909973,17z/data=!4m9!3m8!1s0x3afb44ca2afcb6f3:0x5f0aa32de4b1b303!5m2!4m1!1i2!8m2!3d7.9232334!4d80.9935722!16s%2Fg%2F1vgw_56s?authuser=0&entry=ttu&g_ep=EgoyMDI1MDUxMy4xIKXMDSoASAFQAw%3D%3D', '_blank')">
                        <img src="Images/icon/map.png" alt="" style="width: 25px; height: 25px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:15px;">Hotel Sudu
                            Araliya, New town, <br>Polonnaruwa, Sri Lanka</span>
                    </button>
                </div>

                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:15px; margin-top:-10px;">REVIEW US
                </p>
                <div style="margin-top:-20px;">
                    <a href="https://g.page/r/CQOzseQtowpfEAI/review" target="_blank" rel="noopener noreferrer"
                        class="m-3" style="text-decoration:none">
                        <img src="Images/icon/google.png" style="width: 45px; height: 45px;">
                    </a>
                    <a href="https://www.tripadvisor.com/UserReviewEdit-g304140-d577158-Hotel_Sudu_Araliya-Polonnaruwa_North_Central_Province.html"
                        target="_blank" rel="noopener noreferrer" class="m-3" style="text-decoration:none">
                        <img src="Images/icon/tripadvisor.png" alt=""
                            style="width: 100px; height: 35px;margin-top:10px">
                    </a>
                    <a href="https://www.booking.com/hotel/lk/sudu-araliya.en-gb.html?label=gen173nr-1BCAsohQFCDHN1ZHUtYXJhbGl5YUgzWARohQGIAQGYAQm4ARjIAQzYAQHoAQGIAgGoAgS4AuufnMEGwAIB0gIkMDI5MmRmMDYtMTJjNC00YTZhLWE4NDktOTNlZWYwYmZlYTA52AIF4AIB&sid=55a24909d80faec8a736372abde41678&dist=0&group_adults=2&group_children=0&keep_landing=1&no_rooms=1&sb_price_type=total&type=total&"
                        target="_blank" rel="noopener noreferrer" class="m-3" style="text-decoration:none">
                        <img src="Images/icon/booking.png" alt="" style="width: 40px; height: 40px;">
                    </a>

                </div>

                <!-- <div class="d-flex flex-wrap justify-content-center">
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
                <button class="btn w-100 custom-save-button" onclick="generateVCF()"
                    style="font-family: 'Montserrat', sans-serif; font-size:18px; border: 2px solid orange;">
                    <img src="Images/Social_Media_Icon/save.png" alt=""
                        style="width: 30px; height: 30px; margin-right:25px;">
                    SAVE TO CONTACTS
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function generateVCF() {
            // Updated contact information with proper image URL
            const contactData = {
                firstName: "Hotel Sudu Araliya",
                lastName: "",
                title: "",
                phoneWork: "+94272224849",
                phoneMobile: "+94765315390",
                email: "info@hotelsuduaraliya.com",
                email2: "",
                email3: "",
                website: "http://www.hotelsuduaraliya.com",
                website2: "",
                website3: "",
                address: "Hotel Sudu Araliya,New town,Polonnaruwa,SriLanka",
                address2: "",
                about: "Hotel Sudu Araliya in Polonnaruwa",
                // Using base64 encoded image would be more reliable but makes the file larger
                profileImage: "https://tapilinq.com/profile_img/client_profile/suduaraliya-p.png"
            };

            // Create properly formatted VCF content
            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
ORG:Hotel Sudu Araliya;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL,VOICE:${contactData.phoneMobile}
EMAIL;TYPE=WORK,INTERNET:${contactData.email}
URL;TYPE=WORK:${contactData.website}
ADR;TYPE=WORK,PREF:;;${contactData.address}
NOTE:${contactData.about}
PHOTO;VALUE=URI;TYPE=JPEG:${contactData.profileImage}
REV:${new Date().toISOString()}
END:VCARD`;

            // Create download link
            const blob = new Blob([vcfContent], { type: 'text/vcard;charset=utf-8' });
            const url = URL.createObjectURL(blob);

            const a = document.createElement('a');
            a.href = url;
            a.download = `${contactData.firstName.replace(/\s+/g, '_')}.vcf`;
            document.body.appendChild(a);
            a.click();

            // Clean up
            setTimeout(() => {
                document.body.removeChild(a);
                URL.revokeObjectURL(url);
            }, 100);
        }
    </script>
</body>

</html>