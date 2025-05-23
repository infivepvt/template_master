<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Card Template 18</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .custom-card {
            border-radius: -5px;
            overflow: hidden;
            background: #EEF1FF;
            width: 450px;
            height: auto;
            margin-top: -55px;
            bottom: 5px;
            border: none; /* Added to remove any card border */
        }

        .custom-header {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 35px 20px;
            position: relative;
            height: 200px;
            border-bottom: none; /* This removes the horizontal line */
        }

        .custom-logo {
            width: 200px;
            position: relative;
            top: 0.5px;
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
            width: 222px;
            height: 222px;
            border: 2px solid #fff;
            border-radius: 50%;
        }

        .custom-button {
            font-weight: bold;
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
            background-color: #6D36c7;
            color: white;
            font-weight: bold;
            border: 2px solid #6D36c7;
            padding: 10px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
            width: 370px;
            height: 44px;
            margin: 0 auto;
        }

        .custom-save-button:hover {
            background: linear-gradient(90deg, #4b3ec4, rgb(163, 0, 195));
        }

        .contact-icon {
            font-size: 1.5rem;
            color: #fffefe;
        }

        .custom-phone {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size: 15px;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .custom-phone1 {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size: 15px;
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
            background-color: white;
        }
        
        /* Updated icon styles */
        .fa-phone, .fa-envelope, .fa-globe, .fa-location-dot {
            background-color: #e0e0e0;
            color: black !important;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 50px;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg"
            style="background-image: url('banner_img/main_banner/template30-b.jpeg'); background-size: cover; background-position: center;">

            <div class="card-header custom-header text-center"
                style="background-image:  url(''); height: 200px; opacity: 1;">

                <div class="profile-picture">
                    <img src="profile_img/main_profile/template30-p.png" alt="Saliya Pathum" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="card-body text-center" style="background-color: transparent; color: #000000; text-decoration: none;">
                <h2 class="card-title" style="font-family: 'Roboto', sans-serif; font-size: 32px; text-transform: none; color: #000000;">Richard Olivia</h2>
                <p style="font-family: 'Roboto', sans-serif; font-size: 16px; color: #7A7A7A; font-style: italic;">Senior Accountant</p>

                <div class="list-group mb-3">
                    <div class="p-4 mb-4 shadow-sm" style="background-color: white; border-radius: 15px;">
                        <div class="d-flex align-items-center mb-3" onclick="window.open('tel:+1 480 567 890', '_self')"
                            style="cursor: pointer;">
                            <i class="fas fa-phone" style="font-size: 20px;"></i>
                            <span style="font-family: 'Roboto', sans-serif; font-size: 15px; color: #000000; font-weight: bold;">+1 480 567 890</span>
                        </div>

                        <div class="d-flex align-items-center mb-3" onclick="window.open('mailto:Oliver.72@gmail.com', '_self')"
                            style="cursor: pointer;">
                            <i class="fas fa-envelope" style="font-size: 20px;"></i>
                            <span style="font-family: 'Roboto', sans-serif; font-size: 15px; color: #000000; font-weight: bold;">Oliver.72@gmail.com</span>
                        </div>

                        <div class="d-flex align-items-center mb-3" onclick="window.open('https://www.yoursite.com', '_blank')"
                            style="cursor: pointer;">
                            <i class="fas fa-globe" style="font-size: 20px;"></i>
                            <span style="font-family: 'Roboto', sans-serif; font-size: 15px; color: #000000; font-weight: bold;">www.yoursite.com</span>
                        </div>

                        <div class="d-flex align-items-center"
                            onclick="window.open('https://www.google.com/maps/search/?api=1&query=919+Oaktree+Crescent,+Newmarket', '_blank')" style="cursor: pointer;">
                            <i class="fas fa-location-dot" style="font-size: 20px;"></i>
                            <span style="font-family: 'Roboto', sans-serif; font-size: 15px; color: #000000; font-weight: bold;">75 rd ave, New York, <br>NY 10003, USA</span>
                        </div>
                    </div>

                    <br>
                    <button class="btn w-100 custom-save-button" onclick="generateVCF()"
                        style="font-family: 'Roboto', sans-serif; font-size: 20px; color: white; border: 2px solid #6D36c7;">
                        SAVE TO CONTACTS
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function generateVCF() {
            // Updated contact information to match the business card
            const contactData = {
                firstName: "Richard",
                lastName: "Olivia",
                title: "Senior Accountant",
                phoneWork: "0761231212",
                phoneMobile: "+1 480 567 890",
                email: "www.yoursite.com",
                email2: "",
                email3: "",
                website: "www.yourwebsiteaddress.com",
                website2: "",
                website3: "",
                address: "919 Oaktree Crescent, Newmarket Oaktree Crescent, Newmarket",
                address2: "",
                about: "",
                logo: "logo_img/Main_Design-l.png",
                profileImage: "profile_img/Main_Design-p.png"
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
