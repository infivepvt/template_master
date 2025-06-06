<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .card-container {
            max-width: 450px;
            height: auto;
            margin: 10 auto;
            background-color: #FFFFFF;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .top-banner {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .profile-header {
            position: relative;
            text-align: center;
            padding: 10px;
            background-color: white;
            height: 50px;
        }

        .profile-header img {
            width: 200px;
            margin-top: -120px;
            border-radius: 50%;
            border: 1px solid white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .banner-section {
            background-color: #ff0000;
            padding: 2px;
            border-radius: 10px;
            margin: 10px;
            color: white;
            text-align: center;
            margin-top: -1px;
            margin-bottom: 4px;
        }

        .profile-name {
            font-size: 16px;
            margin: 10px 0;
            color: rgb(255, 255, 255);
            font-family: 'Roboto', sans-serif;
            font-weight: 600;
        }

        .job-title {
            font-size: 20px;
            color: rgb(0, 0, 0);
            margin-bottom: 15px;
        }

        .company-title {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .contact-icons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            padding: 15px;
        }

        .about-section {
            padding: 20px;
            text-align: center;
            background-color: #000000;
        }

        .social-media-section {
            padding: 15px;
            text-align: center;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 15px;
        }

        .save-button {
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .footer {
            text-align: center;
            padding: 15px;
            color: #666;
            font-size: 12px;
        }

        .contact-icon-btn {
            background-color: #ff0000;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
        }

        .contact-icon-btn i {
            color: #FFFFFF;
            font-size: 1.5rem;
        }

        .social-btn {
            background-color: #ff0000;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
            margin: 5px;
        }

        .social-btn i {
            color: #FFFFFF;
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="card-container">
        <!-- Top Banner Image -->
        <img src="banner_img/client_banner/manoj-b.jpeg" alt="Company Banner" class="top-banner">

        <!-- Profile Header -->
        <div class="profile-header">
            <img src="profile_img/client_profile/tuktuk-p.png" alt="Profile Image">
        </div>

        <!-- Banner Section -->
        <div class="banner-section">
            <p class="company-title" style="margin-top:45px; font-size:32px;">Tuk Tuk Rental Negombo (Pvt)Ltd</p>
            <a href="https://wa.me/+94779903257" target="_blank" rel="noopener noreferrer"
                style="text-decoration: none;">
                <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center"
                    style="background-color: #25D366; color: white; height: 60px; border: 2px solid orange; border-radius: 10px; gap: 10px;">
                    <i class="fab fa-whatsapp" style="font-size: 50px; margin-right:30px;"></i>
                    <span style="font-size: 14px; font-family: 'Montserrat', sans-serif;">CONNECT WITH
                        WHATSAPP</span>
                </button>
            </a>
        </div>

        <!-- Contact Icons -->
        <div class="contact-icons">
            <button class="contact-icon-btn" onclick="window.location.href='tel:+94779903257'">
                <i class="fas fa-phone-alt" style="transform: rotate(90deg);"></i>
            </button>
            <button class="contact-icon-btn" onclick="window.location.href='mailto:rentnegombo@gmail.com'">
                <i class="fas fa-envelope"></i>
            </button>
            <button class="contact-icon-btn" onclick="window.open('https://tuktukrentalnegombo.com/', '_blank')">
                <i class="fas fa-globe"></i>
            </button>
            <button class="contact-icon-btn" onclick="window.open('https://maps.app.goo.gl/E2weeYPbZrW1Z4Th9', '_blank')">
                <i class="fas fa-map-marker-alt"></i>
            </button>
        </div>

        <!-- Social Media Section -->
<div class="social-media-section">
    <div class="d-flex flex-wrap justify-content-center">
        <!-- Facebook Icon as Image -->
        <a href=" https://web.facebook.com/tuktukrentnegombo" target="_blank" rel="noopener noreferrer" class="m-1">
            <img src="Images/Social_Media_Icon/facebook.png" alt="Facebook" style="width: 40px; height: 40px;">
        </a>
        <!-- Tripadvisor Icon as Image -->
        <a href="https://www.tripadvisor.com/Attraction_Review-g297897-d18718984-Reviews-Tuk_Tuk_Rental_Negombo-Negombo_Western_Province.html" target="_blank" rel="noopener noreferrer" class="m-1">
            <img src="Images/Social_Media_Icon/tripadvisor.png" alt="Tripadvisor" style="width: 45px; height: 45px;">
        </a>
    </div>
</div>



        <!-- Save to Contacts Button -->
        <button class="save-button" onclick="generateVCF()">
            <i class="fas fa-save"></i> SAVE TO CONTACTS
        </button>

        <!-- Footer -->
        <div class="footer">
            <p>All rights reserved</p>
        </div>
    </div>

    <script>
        function generateVCF() {
            const contactData = {
                firstName: "Tuk Tuk Rental Negombo (Pvt)Ltd",
                lastName: "",
                title: "",
                phone: "+94779903257",
                email: "rentnegombo@gmail.com",
                url: "https://tuktukrentalnegombo.com/",
                address: "40/ A, Lewis Place, Sea Street, Negombo",
                organization: ""
            };

            let vcfContent = [
                "BEGIN:VCARD",
                "VERSION:3.0",
                `N:${contactData.lastName};${contactData.firstName};;;`,
                `FN:${contactData.firstName} ${contactData.lastName}`,
                `ORG:${contactData.organization}`,
                `TITLE:${contactData.title}`,
                `TEL;TYPE=WORK,VOICE:${contactData.phone}`,
                `EMAIL;TYPE=WORK,INTERNET:${contactData.email}`,
                `URL:${contactData.url}`,
                `ADR;TYPE=WORK:;;${contactData.address};;;;`,
                "END:VCARD"
            ].join("\n");

            const blob = new Blob([vcfContent], { type: 'text/vcard;charset=utf-8' });
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
