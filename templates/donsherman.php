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
        }

        .profile-picture img {
            width: 130px;
            height: 130px;
            border: 4px solid #fff;
            border-color: #ebb726;
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
            background-color: #000;
            color: #fff;
            border-radius: 8px;
            margin-bottom: 10px;
            border: 2px solid #C5B358;
            padding: 10px 15px;
            margin-top: 10px;
        }

        .list-group-item:hover {
            background-color: #000;
            border-color: #C5B358;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .custom-save-button {
            background-color: #000000;
            color: #C5B358;
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
            background-color: #000000;
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
            0%, 100% {
                transform: translateY(-3px);
            }
            50% {
                transform: translateY(3px);
            }
        }

        /* Gold foil animation for card-title */
        .card-title {
            font-size: 27px;
            text-transform: uppercase;
            background: linear-gradient(
                45deg,
                #C5B358 20%,  /* Gold color */
                #FFD700 40%,  /* Brighter gold */
                #FFFFE0 50%,  /* Light yellow for shine */
                #FFD700 60%,  /* Brighter gold */
                #C5B358 80%   /* Gold color */
            );
            background-size: 200% 100%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            animation: shimmer 2s linear infinite;
        }

        @keyframes shimmer {
            0% {
                background-position: 200% 0;
            }
            100% {
                background-position: 0 0;
            }
        }

        /* Contact details */
        .contact {
            background-color: rgb(0, 0, 0);
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color:rgb(0, 0, 0);">
            <div class="card-header custom-header text-center"
                style="background-image: url('banner_img/client_banner/donsherman-b.png'); height: 200px; opacity: 1;">
                <!-- <img src="logo_img/client_logo/donsherman-l.png" alt="Company Logo" class="custom-logo" height="80px"> -->
                <div class="profile-picture">
                    <img src="profile_img/client_profile/donsherman-p.png" alt="Saliya Pathum" class="rounded-circle" style="margin-top: 15px;">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center"
                style="background-color:rgb(0, 0, 0); color:rgb(255, 255, 255); text-decoration: none;">
                <h2 class="card-title">Don Sherman</h2>
                <p style="color:rgb(255, 255, 255); font-size: 15px; text-transform: uppercase;">Founder & Chairman</p>

                <a href="https://wa.me/+94777362060" target="_blank" rel="noopener noreferrer"
                    style="text-decoration: none;">
                    <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center"
                        style="background-color:rgb(0, 0, 0); color: white; height: 60px; border: 2px solid orange; border-radius: 10px; gap: 10px;">
                        <i class="fab fa-whatsapp" style="font-size: 50px; margin-right:30px;"></i>
                        <span style="font-size: 14px; font-family: 'Montserrat', sans-serif;">CONNECT WITH WHATSAPP</span>
                    </button>
                </a>

                <div class="list-group mb-3">
                    <div>
                        <button type="button"
                            class="list-group-item d-flex align-items-center justify-content-between contact w-100 rounded rounded-2"
                            onclick="window.open('tel:+94777362060', '_self')">
                            <img src="Images/icon/phone.png" alt=""
                                style="width: 30px; height: 30px; margin-right:25px;">
                            <span class="text-center flex-grow-1 text-truncate custom-phone"
                                style="color: #edb928; font-family: 'Montserrat', sans-serif;">+94777362060</span>
                        </button>
                    </div>

                    <div>
                        <button type="button"
                            class="list-group-item d-flex align-items-center justify-content-between contact w-100 rounded rounded-2"
                            onclick="window.open('mailto:admin@dshermanedu.onmicrosoft.com', '_self')">
                            <img src="Images/icon/mail.png" alt=""
                                style="width: 30px; height: 30px; margin-right:25px;">
                            <span class="text-center flex-grow-1 text-truncate custom-phone"
                                style="color: #edb928; font-family: 'Montserrat', sans-serif; font-size:16px;">admin@dshermanedu.onmicrosoft.com</span>
                        </button>
                    </div>

                    <div>
                        <button type="button"
                            class="list-group-item d-flex align-items-center justify-content-between contact w-100 rounded rounded-2"
                            onclick="window.open('http://donshermaninstitute.edu/', '_blank')">
                            <img src="Images/icon/internet.png" alt=""
                                style="width: 30px; height: 30px; margin-right:25px;">
                            <span class="text-center flex-grow-1 text-truncate custom-phone"
                                style="color: #edb928; font-family:'Montserrat', sans-serif; font-size:16px;">www.donshermaninstitute.edu</span>
                        </button>
                    </div>
                </div>

                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px">CONNECT WITH SOCIAL MEDIA</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="http://instagram.com/@DonShermanInstitute" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://facebook.com/@DonShermanInstitute" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="http://tiktok.com/@DonShermanInstitute" target="_blank" rel="noopener noreferrer"
                        class="m-3">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>

                <br>
                <button class="btn w-100 custom-save-button" onclick="generateVCF()"
                    style="font-family: 'Montserrat', sans-serif; font-size:19px; border: 2px solid #C5B358;">
                    <img src="Images/Social_Media_Icon/save.png" alt=""
                        style="width: 50px; height: 50px; margin-right:25px;">
                    SAVE TO CONTACTS
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    async function generateVCF() {
        const contactData = {
            firstName: "Don Sherman",
            lastName: "",
            title: "Founder & Chairman",
            phoneWork: "+94777362060",
            phoneMobile: "",
            email: "admin@dshermanedu.onmicrosoft.com",
            email2: "",
            email3: "",
            website: "www.donshermaninstitute.edu",
            website2: "",
            website3: "",
            address: "",
            address2: "",
            about: "",
            profileImage: "profile_img/client_profile/donsherman-p.png" // Make sure this path is correct
        };

        async function imageToBase64(url) {
            try {
                // Create a new image element
                const img = new Image();
                img.crossOrigin = 'Anonymous'; // Handle CORS if needed
                img.src = url;
                
                // Wait for the image to load
                if (!img.complete) {
                    await new Promise((resolve) => {
                        img.onload = resolve;
                        img.onerror = () => {
                            console.error("Error loading image");
                            resolve(); // Resolve even if there's an error
                        };
                    });
                }
                
                // Create canvas and draw image
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                canvas.width = img.naturalWidth;
                canvas.height = img.naturalHeight;
                ctx.drawImage(img, 0, 0);
                
                // Convert to base64
                return canvas.toDataURL('image/jpeg').split(',')[1];
            } catch (error) {
                console.error("Error processing image:", error);
                return "";
            }
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