<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RM Somarathne</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .ba {
            background-color: black;
        }

        /* Container for the grid */
        .list-group1 {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 10px;
            margin-left: 5px;
            background-color: black;
        }

        /* Style for each grid item */
        .list-group1 .col-12 {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 15px;
            border-radius: 8px;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .list-group1 .col-12:hover {
            transform: scale(1.15);
        }

        /* Icon styles for general contact icons */
        .contact-icon1 {
            font-size: 6rem;
            color: white;
            margin-bottom: 0px;
        }

        /* Text style for general contact icons */
        .list-group1 .col-12 span {
            color: white;
            font-size: 0.7rem;
            text-align: center;
            margin-top: 0px;
        }

        .horizontal-line {
            width: 100%;
            height: 2px;
            background-color: #ccc;
            margin: 20px 0;
        }

        .card-title1 {
            color: azure;
            margin-left: 40%;
            margin-top: -40px;
        }

        .text-muted1 {
            color: azure;
            margin-left: 40%;
        }

        .custom-header {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 35px 20px;
            position: relative;
        }

        .custom-logo {
            width: 200px;
            position: relative;
            top: 0;
            left: 0;
            margin-bottom: 40px;
        }

        .top {
            position: absolute;
            left: 20%;
            transform: translate(-50%, -50%);
            margin-top: 28px;
        }

        .top img {
            width: 150px;
            height: 150px;
        }

        .custom-button {
            font-weight: bold;
        }

        .social-icon {
            font-size: 1.9rem;
            transition: color 0.3s;
        }

        /* Specific colors for each social media icon */
        .icon-instagram {
            color: #E4405F;
        }

        .icon-facebook {
            color: #1877F2;
        }

        .icon-youtube {
            color: #FF0000;
        }

        .icon-tiktok {
            color: #010101;
        }

        .icon-twitter {
            color: #1DA1F2;
        }

        .icon-snapchat {
            color: #FFFC00;
        }

        .icon-pinterest {
            color: #E60023;
        }

        .icon-linkedin {
            color: #0A66C2;
        }

        .social-icon-row {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-bottom: 5px;
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
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
            cursor: pointer;
        }

        .custom-save-button:hover {
            background: linear-gradient(90deg, #4b3ec4, #00b3c3);
        }

        .save-icon {
            width: 24px;
            height: 24px;
        }

        .contact-icon {
            font-size: 2rem;
            color: #fffefe;
        }

        /* WhatsApp button adjustments */
        .custom-phone1 {
            height: 45px !important;
            font-size: 1rem !important;
            padding: 0 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            transition: background-color 0.1s, border-color 0.1s;
        }

        .custom-phone1:hover {
            background-color: #25D366;
            border-color: #128C7E;
        }

        .custom-phone1 .fab {
            font-size: 24px !important;
            margin-right: 8px;
        }

        /* Additional styles for the template */
        .card {
            width: 100%;
            min-height: 100vh;
            border-radius: 0px;
            overflow: hidden;
        }

        .gallery-preview {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        .gallery-item {
            width: 100px;
            height: 100px;
            position: relative;
            cursor: pointer;
            overflow: hidden;
            border-radius: 8px;
        }

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .gallery-item:hover .gallery-image {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .video-preview {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        .video-item {
            width: 300px;
            height: 190px;
            position: relative;
            cursor: pointer;
            overflow: hidden;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .video-item video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .video-item:hover {
            transform: scale(1.05);
        }

        .video-item:hover .video-overlay {
            opacity: 1;
        }

        .youtube-video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .youtube-video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .modal-close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 2rem;
            color: white;
            cursor: pointer;
            z-index: 10;
        }

        .modal-image-container {
            position: relative;
            width: 100%;
            height: 80vh;
        }

        .modal-image-container img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .prev-btn {
            left: 10px;
        }

        .next-btn {
            right: 10px;
        }

        .fw {
            font-weight: bold;
            text-align: center;
            margin: 20px 0;
            color: #333;
        }

        /* Group Edit for the individual contact icons */
        .contact {
            min-width: 20px;
            font-size: 2rem;
            color: rgb(255, 255, 255);
        }

        .icon-text {
            font-size: 1rem;
            color: rgb(248, 248, 248);
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="justify-content-center padding:0; card">
        <div class="card-header custom-header text-center"
            style="background-image: url('banner_img/client_banner/somarathne-p.png'); background-size: cover; height: 250px; opacity: 1;">
            <img src="logo_img/main_logo/template3-l.png" alt="Company Logo" class="custom-logo"
                style="width: 0px; opacity: 1;">
        </div>

        <div class="card-body text-center" style="background-color: #000000; color:rgb(255, 255, 255);">
            <br>
            <div class="top">
                <img src="profile_img/client_profile/somarathne-p.png" alt="RM Somarathne">
            </div>

            <h2 class="card-title1" style="font-size: 30px; color:rgb(255, 255, 255);margin-top: 2px;">RM Somarathne
            </h2>
            <p class="text-muted1">Customer Relation Officer</p>

            <br>
            <a href="https://wa.me/94775874874" target="_blank" rel="noopener noreferrer"
                style="outline: none; text-decoration: none;">
                <button class="btn w-100 mb-3 custom-phone1"
                    style="background-color: #25D366; color: white; border: 2px solid orange; border-radius: 30px;">
                    <i class="fab fa-whatsapp me-2"></i>
                    CONNECT WITH WHATSAPP
                </button>
            </a>

            <div class="list-group1 mb-4 row g-3" style="background-color: #000000;">
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="tel:0764138850" class="icon d-flex align-items-center justify-content-center"
                        style="text-decoration: none;">
                        <i class="fas fa-phone contact-icon me-2 contact"></i>
                    </a>
                    <p class="icon-text">Official Call</p>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <a href="tel:0775874874" class="icon d-flex align-items-center justify-content-center"
                        style="text-decoration: none;">
                        <i class="fas fa-mobile-alt contact-icon me-2 contact"></i>
                    </a>
                    <p class="icon-text">Mobile 1</p>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <a href="tel:0785874874" class="icon d-flex align-items-center justify-content-center"
                        style="text-decoration: none;">
                        <i class="fas fa-mobile-alt contact-icon me-2 contact"></i>
                    </a>
                    <p class="icon-text">Mobile 2</p>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <a href="tel:0715874874" class="icon d-flex align-items-center justify-content-center"
                        style="text-decoration: none;">
                        <i class="fas fa-mobile-alt contact-icon me-2 contact"></i>
                    </a>
                    <p class="icon-text">Mobile 3</p>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <a href="mailto:somarathnecroceylife@gmail.com"
                        class="icon d-flex align-items-center justify-content-center" style="text-decoration: none;">
                        <i class="fas fa-envelope contact-icon me-2 contact"></i>
                    </a>
                    <p class="icon-text">Email 1</p>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <a href="mailto:rmsomarathne534@gmail.com"
                        class="icon d-flex align-items-center justify-content-center" style="text-decoration: none;">
                        <i class="fas fa-envelope contact-icon me-2 contact"></i>
                    </a>
                    <p class="icon-text">Email 2</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="https://maps.app.goo.gl/i7SnQPi71kw5eASS9"
                        class="icon d-flex align-items-center justify-content-center" style="text-decoration: none;">
                        <i class="fas fa-map-marker-alt contact-icon me-2 contact"></i>
                    </a>
                    <p class="icon-text">Address</p>
                </div>
            </div>
            <p class="fw" style="color: white;">CONNECT WITH SOCIAL MEDIA</p>
            <div class="d-flex flex-wrap justify-content-center">
                <br>
                <a href="https://www.facebook.com/share/1ApYbcFxUp/" target="_blank" rel="noopener noreferrer"
                    class="m-1">
                    <i class="fab fa-facebook social-icon icon-facebook"></i>
                </a>
                <a href="https://www.instagram.com/rmsomarathne?igsh=MWQxdDZ1ZTJuNXVucw==" target="_blank"
                    rel="noopener noreferrer" class="m-1">
                    <i class="fab fa-instagram social-icon icon-instagram"></i>
                </a>
                <a href="https://youtube.com/@sathutavlog2710?si=NlZ7ZUTKHHSR-hfu" target="_blank" rel="noopener noreferrer"
                    class="m-1">
                    <i class="fab fa-youtube social-icon icon-youtube"></i>
                </a>
                <br>
                <br>
                <button id="saveContactBtn" class="btn w-100 custom-save-button" onclick="generateVCF()">
                    <i class="fas fa-save me-2"></i>
                    SAVE TO CONTACTS
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function generateVCF() {
            // Updated contact information to match the business card
            const contactData = {
                firstName: "RM",
                lastName: "Somarathne",
                title: "Customer Relation Officer",
                phoneWork: "0764138850",
                phoneMobile: "0775874874",
                phoneMobile2: "0785874874",
                phoneMobile3: "0715874874",
                email: "somarathnecroceylife@gmail.com",
                email2: "rmsomarathne534@gmail.com",
                website: "",
                address: "https://maps.app.goo.gl/i7SnQPi71kw5eASS9",
                about: "",
                logo: "profile_img/client_profile/somarathne-p.png",
                profileImage: "profile_img/client_profile/somarathne-p.png"
            };

            // Create VCF content
            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL:${contactData.phoneMobile}
TEL;TYPE=CELL:${contactData.phoneMobile2}
TEL;TYPE=CELL:${contactData.phoneMobile3}
EMAIL:${contactData.email}
EMAIL:${contactData.email2}
URL:${contactData.website}
ADR;TYPE=WORK:;;${contactData.address}
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