<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Allison&family=Dancing+Script:wght@400..700&family=Alumni+Sans+Pinstripe:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        * {
            font-family: "Roboto", sans-serif;
        }

        .bg-1 {
            background-image: url('banner_img/client_banner/ghayani-b.jpg');
            width: 100%;
            aspect-ratio: 16/9;
            background-size: cover;
            background-position: center;
        }

        .profile {
            width: 160px;
            aspect-ratio: 1/1;
            background-image: url('profile_img/client_profile/ghayani-p.png');
            background-size: cover;
            border: solid 5px #e3d1c6;
            position: absolute;
            left: 50%;
            transform: translate(-50%, 80%);
        }

        .box-1 {
            margin-top: 110px;
        }

        .txt1 {
            font-family: "Allison", cursive;
            font-size: 57px;
            color: #e3d1c6;
            margin-right: 10px;
            margin-top: -12px;
        }

        .txt2 {
            font-family: "Aboreto", sans-serif;
            font-size: 36px;
        }

        .txt3 {
            font-family: "Aboreto", sans-serif;
            font-size: 11px;
            font-weight: bold;
        }

        .line1 {
            width: 80%;
            height: 2px;
            background-color: black;
            margin-top: 12px;
        }

        .box-2 {
            width: 45px;
            height: 45px;
            background-color: #e3d1c6;
            border-radius: 50px;
        }

        .txt4 {
            font-family: "Share Tech Mono", sans-serif;
            font-size: 13px;
        }

        .line2 {
            width: 100%;
            height: 8px;
        }

        .txt5 {
            color: #c6a373;
            font-family: "Alumni Sans Pinstripe", sans-serif;
            font-size: 18px;
            font-weight: bold;
        }

        .box-3 {
            width: 35px;
            height: 35px;
            background-color: #e3d1c6;
            border-radius: 50px;
            text-decoration: none;
        }

        .txt6 {
            font-size: 8px;
            font-weight: bold;
            margin-left: 5px;
        }

        .custom-save-button {
            background: linear-gradient(90deg, rgb(32, 32, 32), rgb(224, 195, 31));
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
            background: linear-gradient(90deg, rgb(0, 0, 0), rgb(189, 163, 16));
        }

        @media (min-width: 420px) {
            .profile {
                transform: translate(-50%, 100%);
            }
        }

        @media (min-width: 490px) {
            .profile {
                transform: translate(-50%, 120%);
            }
        }

        @media (min-width: 550px) {
            .profile {
                transform: translate(-50%, 140%);
            }
        }

        @media (min-width: 760px) {
            .profile {
                transform: translate(-50%, 120%);
            }
        }

        @media (min-width: 1200px) {
            .profile {
                transform: translate(-50%, 150%);
            }
        }

        @media (min-width: 1400px) {
            .profile {
                transform: translate(-50%, 180%);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="row justify-content-center">
                    <div class="bg-1"></div>
                    <div class="profile" id="profileImageContainer"></div>
                    <div class="d-inline-flex justify-content-center align-items-start box-1 gap-2">
                        <h2 class="txt1">Gayana</h2>
                        <div>
                            <h2 class="txt2">Harshani</h2>
                            <h2 class="txt3">Managing Director <span class="txt6">DsBM CPM</span></h2>
                        </div>
                    </div>
                    <div class="line1"></div>

                    <div class="col-12 mt-4">
                        <div class="row align-items-start">
                            <div class="col-6 d-flex justify-content-center flex-column align-items-center">
                                <div class="box-2 d-flex justify-content-center align-items-center">
                                    <i class="fas fa-phone-alt text-black fs-3" style="transform: scaleX(-1);"></i>
                                </div>
                                <span class="txt4 mt-3 text-center">0779927274</span>
                            </div>
                            <div class="col-6 d-flex justify-content-center flex-column align-items-center">
                                <div class="box-2 d-flex justify-content-center align-items-center">
                                    <i class="far fa-envelope text-black fs-3" style="transform: scaleX(-1);"></i>
                                </div>
                                <span class="txt4 mt-3 text-center">gayanaharshani14</span>
                                <span class="txt4 text-center">@gmail.com</span>
                            </div>
                        </div>
                        <div class="row mt-3 align-items-start">
                            <div class="col-6 d-flex justify-content-center flex-column align-items-center">
                                <div class="box-2 d-flex justify-content-center align-items-center">
                                    <i class="fas fa-map-marker-alt text-black fs-3" style="transform: scaleX(-1);"></i>
                                </div>
                                <span class="txt4 mt-3 text-center">No. 24,Wijerama Mawatha, Colombo 07</span>
                            </div>
                            <div class="col-6 d-flex justify-content-center flex-column align-items-center">
                                <div class="box-2 d-flex justify-content-center align-items-center">
                                    <i class="bi bi-globe text-black fs-3"></i>
                                </div>
                                <span class="txt4 mt-3 text-center">www.ghaniskin.com</span>
                            </div>
                        </div>
                    </div>

                    <button class="btn w-100 custom-save-button mt-4" onclick="generateVCF()"
                        style="font-family: 'Montserrat', sans-serif; font-size:19px; border: 2px solid orange;">
                        <img src="Images/Social_Media_Icon/save.png" alt=""
                            style="width: 50px; height: 50px; margin-right:25px;">
                        SAVE TO CONTACTS
                    </button>

                    <div class="line2 bg-black mt-4"></div>

                    <div class="mt-1 bg-black d-flex flex-column justify-content-center align-items-center py-3">
                        <span class="txt5">Connect with me</span>

                        <div class="d-flex gap-2 mt-3">
                            <a href="https://www.facebook.com/people/Ghani-Skin-Aesthetics/61575166874096/#" class="box-3 d-flex justify-content-center align-items-center">
                                <i class="fab fa-facebook text-black fs-6"></i>
                            </a>
                            <a href="https://www.tiktok.com/@ghaniskinaesthatics_07" class="box-3 d-flex justify-content-center align-items-center">
                                <i class="fab fa-tiktok text-black fs-6"></i>
                            </a>
                            <a href="https://www.instagram.com/p/DIlVKbnSKQI/" class="box-3 d-flex justify-content-center align-items-center">
                                <i class="fab fa-instagram text-black fs-6"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>

    <!-- Hidden image element for processing -->
    <img id="profileImageSrc" src="profile_img/client_profile/ghayani-p.png" style="display: none;">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        async function generateVCF() {
            // Get the profile image element
            const profileImage = document.getElementById('profileImageSrc');
            
            // Wait for the image to load
            if (!profileImage.complete) {
                await new Promise((resolve) => {
                    profileImage.onload = resolve;
                });
            }
            
            // Create canvas and draw image
            const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');
            canvas.width = profileImage.naturalWidth;
            canvas.height = profileImage.naturalHeight;
            ctx.drawImage(profileImage, 0, 0);
            
            // Convert to base64
            const base64Image = canvas.toDataURL('image/jpeg').split(',')[1];
            
            // Contact information
            const contactData = {
                firstName: "Ghayana",
                lastName: "Harshani",
                title: "Managing Director",
                phoneWork: "0779927274",
                phoneMobile: "",
                email: "gayanaharshani14@gmail.com",
                email2: "",
                email3: "",
                website: "www.ghaniskin.com",
                website2: "",
                website3: "",
                address: "No. 24, Wijerama Mawatha, Colombo 07",
                address2: "",
                about: "",
                logo: ""
            };

            // Create VCF content with embedded photo
            const vCardData = `BEGIN:VCARD
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
PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}
LOGO;VALUE=URL:${contactData.logo}
END:VCARD`;

            // Create download link
            const blob = new Blob([vCardData], {
                type: 'text/vcard'
            });
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