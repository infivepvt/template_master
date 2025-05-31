<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@400;500;600&family=Rufina+Display:wght@400;700&family=Rubik:wght@400;500;600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Align to the top, not center vertically */
            min-height: 100vh;
            margin: 0;
            background-color: #f0f2f5; /* Light grey background for the page */
        }

        .container {
            width: 100%;
            max-width: 500px; /* This limits the overall width of your card */
            background-color: #ffffff;
            border-radius: 10px; /* This applies to the whole container */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden; /* Crucial for clipping content to border-radius */
            margin-top: 1px; /* Space from the top */
            padding: 0; /* REMOVED ALL PADDING FROM CONTAINER */
        }

        .header-background {
            width: 100%; /* Ensures it fills the new max-width of the container */
            height: 181px; /* Height remains as previously set */
            background-image: url('banner_img/main_banner/template44-b.jpg'); /* Top banner image */
            background-size: cover; /* Changed to 'cover' to ensure it fills and crops if necessary, better than 100% 100% for aspect ratio */
            background-position: center; /* Keeps the image centered within the stretched area */
            position: relative;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .profile-picture-container {
            position: absolute;
            top: 100%; /* Start at the bottom of the banner */
            left: 50%;
            transform: translate(-50%, -70%); /* Move up by a percentage of its own height to show */
            background-color: #fff; /* Background for the white border */
            border-top-left-radius: 100px;     /* Rounded top-left corner */
            border-top-right-radius: 100px;    /* Rounded top-right corner */
            border-bottom-left-radius: 0;   /* Sharp bottom-left corner */
            border-bottom-right-radius: 0;  /* Sharp bottom-right corner */
            padding: 2px; /* Creates the white border */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 10; /* Ensure it's above the header background */
            width: fit-content;
            height: fit-content;
            display: flex; /* Use flex to center the image within its container if padding is larger */
            justify-content: center;
            align-items: center;
        }

        .profile-picture {
            width: 170.19px;
            height: 170.19px;
            border-top-left-radius: 100px;      /* Rounded top-left corner */
            border-top-right-radius: 100px;     /* Rounded top-right corner */
            border-bottom-left-radius: 0;   /* Sharp bottom-left corner */
            border-bottom-right-radius: 0;  /* Sharp bottom-right corner */
            object-fit: cover; /* Ensures image covers the area, possibly cropping */
        }

        .content-section {
            padding: 25px 20px 40px; /* Adjusted padding-top, padding-bottom */
            text-align: center;
            margin-top: 50px; /* Reduced margin to bring content up slightly, based on new profile picture overlap */
        }

        .name {
            font-family: 'Rufina Display', serif;
            font-size: 40px;
            font-weight: 500;
            margin-bottom: 5px;
            color: #000000;
        }

        .title {
            font-family: 'Rubik', sans-serif;
            font-size: 14px;
            color: #7A7A7A;
            text-transform: uppercase;
            margin-bottom: 25px; /* Increased margin below title */
            letter-spacing: 1px;
        }

        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 18px; /* Slightly increased space between contact items */
            padding: 0 30px; /* Inner padding for the contact block */
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 50px; /* Space between icon and text */
            color: #666; /* Default text color for contact info */
        }

        .contact-item i {
            color: #471200; /* Darker brown color for contact icons */
            font-size: 1.6em; /* Smaller icons */
            width: 25px; /* Fixed width for icons */
            text-align: center;
        }

        .contact-item span {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            color: #000000;
            text-align: left; /* Align text to the left */
        }

        .save-to-contact-button {
            background-color: #471200; /* Darker brown color from the image */
            color: #FFFFFF; /* Changed to white for visibility on dark background */
            padding: 0; /* Remove default padding to control with width/height */
            border: none;
            border-radius: 5px;
            font-weight: 500; /* Medium weight for the text */
            cursor: pointer;
            margin-top: 35px; /* Increased space above the button */
            margin-bottom: 35px; /* Increased space below the button */
            width: 168.5px; /* Set specific width */
            height: 35px; /* Set specific height */
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
            text-transform: uppercase;
        }

        .social-media-links {
            display: flex;
            justify-content: center;
            gap: 30px; /* Adjusted gap between social icons */
            margin-bottom: 40px; /* Increased space before bottom images */
        }

        .social-media-links a {
            color: #471200; /* Darker brown color for social icons */
            background-color: transparent; /* Changed to transparent */
            border: 1px solid #471200; /* Added a dark brown border */
            border-radius: 50%;
            width: 26px; /* Slightly increased size for the circle */
            height: 26px; /* Slightly increased size for the circle */
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
        }

        .social-media-links a i {
            font-size: 15px; /* Slightly increased icon font size to match larger circle */
        }

        .bottom-images {
            display: flex;
            flex-direction: column; /* Stack children vertically */
            align-items: center; /* Center items horizontally */
            gap: 15px; /* Space between main image and the row of two images */
            margin-top: 20px; /* Space from the social icons */
            padding-bottom: 20px; /* Add some padding at the bottom */
            padding-left: 20px;
            padding-right: 20px;
        }

        .bottom-images .main-gallery-image {
            width: 370px; /* Specific width */
            height: 464.45px; /* Specific height */
            border-radius: 8px;
            object-fit: cover;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .secondary-gallery-images {
            display: flex;
            justify-content: center;
            gap: 10px; /* Space between the two smaller images */
            width: 100%; /* Take full width of parent */
        }

        .secondary-gallery-images img {
            width: calc(100% - 5px); /* Each image takes roughly 50% width, accounting for gap */
            height: 120px; /* Fixed height for consistency */
            border-radius: 8px;
            object-fit: cover;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header-background">
            <div class="profile-picture-container">
                <img src="profile_img\main_profile\template44-p.jpg" alt="Abigail Cora" class="profile-picture">
            </div>
        </div>

        <div class="content-section">
            <h2 class="name">Abigail Cora</h2>
            <p class="title">WEDDING PLANNER</p>

            <div class="contact-details">
                <div class="contact-item">
                    <i class="fas fa-mobile-alt"></i> <span>123 456 7890</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <span>mail@yoursite.com</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-globe"></i>
                    <span>yourwebsite.com</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>123 ave, Street, City, State</span>
                </div>
            </div>
            <br>

            <button class="save-to-contact-button" onclick="generateVCF()">Save to Contact</button>

            <div class="social-media-links">
                <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <div class="bottom-images">
            <img src="gallery_img\main_gallerys\t44g1.jpg" alt="Wedding image 1" class="main-gallery-image">
            <div class="secondary-gallery-images">
                <img src="gallery_img\main_gallerys\t44g2.jpeg" alt="Wedding image 2">
                <img src="gallery_img\main_gallerys\t44g3.jpeg" alt="Wedding image 3">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function generateVCF() {
            const contactData = {
                firstName: "Abigail",
                lastName: "Cora",
                title: "Wedding Planner",
                phoneWork: "1234567890",
                email: "mail@yoursite.com",
                website: "yourwebsite.com",
                address: "123 ave, Street, City, State",
            };

            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
EMAIL:${contactData.email}
URL:${contactData.website}
ADR;TYPE=WORK:;;${contactData.address}
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