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
            top: 110%;
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
            background-color: rgb(0, 0, 0);
        }

        /*accordian*/
        .accordion {
            background-color: #fff;
            color: #000;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: center;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active,
        .accordion:hover {
            background-color: #fff;
            color: #fff;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
    </style>

</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">
            <div class="card-header custom-header text-center"
                style="background-image:  url('banner_img/client_banner/digitalworld-b.png'); height: 200px; opacity: 1;">
                <!-- <img src="logo_img/main_logo/Main_Design-l.png" alt="Company Logo" class="custom-logo" height="80px"
                    style="width: 245px; height: auto; opacity: 1;"> -->
                <div class="profile-picture">
                    <img src="profile_img/client_profile/digitalworld-p.png" alt="" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>

            <div class="card-body text-center"
                style="background-color: #FFFFFF; color: #000000; text-decoration: none; ">
                <h2 class="card-title" style="font-size: 27px; text-transform: uppercase;margin-top:15px">SARANGA SIRIWARDANE</h2>
                <h4 class="card-title" style="font-size: 12px; text-transform: uppercase;margin-top:-5px">Professional Brand Strategist | CEO & Entrepreneur</h4>
                <p style="color: #000000; font-size: 18px; text-transform: uppercase; font-weight:500">Founder & CEO<br><span style="font-size:13px">Digital World International (PVT) LTD</span><br><span style="font-size:13px; padding-top:-5px">Royal Sunray Creations (PVT) LTD</span></p>

                <div style="border: 1px solid #000000">
                    <p>About Me</p>
                    <li style="font-size:15px">Profile - Digital creator</li>
                    <li style="font-size:15px">National Organizer – Asian Human Rights Council</li>
                    <li style="font-size:15px">Secretary – Grama Mithuru Development Foundation</li>
                    <button class="accordion">Read More</button>
                    <div class="panel">
                        <li style="font-size:15px">Marketing Graduate – SLIM</li>
                        <li style="font-size:15px">Expertise – Branding | Visual Merchandising | Digital Media | Photography</li>
                        <li style="font-size:15px">Founder, Director, CEO at Digital World International PVT LTD</li>
                        <li style="font-size:15px">Founding Partner at බාන්ධාර Baandhaara</li>
                        <li style="font-size:15px">Partner at Ceylon Guidance</li>
                        <li style="font-size:15px">Shareholder at Filling station</li>
                        <li style="font-size:15px">Former Visual Merchandiser (VM) at Softlogic Brands</li>
                        <li style="font-size:15px">Former Tour guide at Jetwing Travels</li>
                        <li style="font-size:15px">Went to EMinds Academy Australia</li>
                        <li style="font-size:15px">Studied Digital Communications and Media/Multimedia at Digital Marketing Institute</li>
                        <li style="font-size:15px">Studies at Sri Lanka Institute of Marketing (SLIM)</li>
                        <li style="font-size:15px">Went to Sri Lanka Institute of Marketing</li>
                        <li style="font-size:15px">Studied at Sri Lanka Institute of Marketing</li>
                        <li style="font-size:15px">Studies at Fotostar Academy</li>
                        <li style="font-size:15px">Studies at Sri Lanka Institute of Marketing (SLIM)</li>
                        <li style="font-size:15px">Studies at SLIM Toastmasters Club</li>
                        <li style="font-size:15px">Studied at Bandaranayake College</li>
                        <li style="font-size:15px">Lives in Kadawata, Sri Lanka</li>
                        <li style="font-size:15px">From Ganemulla, Sri Lanka</li>
                    </div>
                </div><br>

                <a href="https://wa.me/94777228823" target="_blank" rel="noopener noreferrer"
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
                        onclick="window.open('tel:0777228823', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">0777228823</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('tel:0707228823', '_self')">
                        <img src="Images/icon/land-line.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">0707228823</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('tel:0757228823', '_self')">
                        <img src="Images/icon/mobile-phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">0757228823</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('mailto:sarangasiriwardane@gmail.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">sarangasiriwardane@gmail.com</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://www.google.com/maps/place/Kadawatha/@7.0095937,79.9394356,14z/data=!3m1!4b1!4m6!3m5!1s0x3ae2f86bd75870f7:0xee362e29dbc079a6!8m2!3d7.0046324!4d79.954155!16s%2Fm%2F02rrpb2?authuser=0&entry=ttu&g_ep=EgoyMDI1MDUxMy4xIKXMDSoASAFQAw%3D%3D', '_blank')">
                        <img src="Images/icon/map.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">Kadawatha | Ganemulla</span>
                    </button>
                </div>

                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px">CONNECT WITH SOCIAL MEDIA
                </p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="https://www.facebook.com/share/18jKFX6hHk/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.instagram.com/SarangaSiriwardane/#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.instagram.com/%E0%B7%83%E0%B7%8F%E0%B6%BB%E0%B6%82%E0%B6%9C/#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://youtube.com/@peacefulliving992?si=cDaj-x4rFcIHAvUC" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://x.com/sarangasiriwar1?s=21&t=I0asi8ftwjwikrdPg4KCgg" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/x-2.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.threads.com/@sarangasiriwardane" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/threads.avif" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.linkedin.com/in/Saranga%20Siriwardane" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 50px; height: 50px;">
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


    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function generateVCF() {
            const contactData = {
                firstName: "Saranga",
                lastName: "Siriwardane",
                title: "Managing Director",
                phoneWork: "0777228823",
                phoneMobile: "0707228823",
                email: "sarangasiriwardane@gmail.com",
                address: "Kadawata",
                profileImage: "https://tapilinq.com/profile_img/client_profile/digitalworld-p.png"
            };

            // Fetch the image and convert to base64
            fetch(contactData.profileImage)
                .then(response => response.blob())
                .then(blob => {
                    const reader = new FileReader();
                    reader.onloadend = () => {
                        const base64Image = reader.result.split(',')[1]; // remove data prefix

                        const vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL:${contactData.phoneMobile}
EMAIL:${contactData.email}
ADR;TYPE=WORK:;;${contactData.address}
PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}
END:VCARD`;

                        const blob = new Blob([vcfContent], {
                            type: 'text/vcard'
                        });
                        const url = URL.createObjectURL(blob);

                        const a = document.createElement('a');
                        a.href = url;
                        a.download = `${contactData.firstName}_${contactData.lastName}.vcf`;
                        document.body.appendChild(a);
                        a.click();
                        document.body.removeChild(a);
                        URL.revokeObjectURL(url);
                    };
                    reader.readAsDataURL(blob);
                })
                .catch(error => {
                    console.error('Failed to fetch image:', error);
                });
        }
    </script>
</body>

</html>