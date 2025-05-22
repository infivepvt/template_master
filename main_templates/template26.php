<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Belleza&family=Poppins:wght@400;700&family=Sono&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">

    <style>
        body {
            /* Dark background from the image */
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Align to top */
            min-height: 100vh;
            margin: 0;
            padding: 20px; /* Add some padding around the card */
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif; /* Default body font */
            color: #ffffff; /* White text */
        }

        .signature-card {
            width: 100%;
            max-width: 500px; /* Based on our previous step */
            background-color: #000000;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            /* text-align: center; from here */
        }

        .profile-image-container {
            width: 100%;
            /* Aspect ratio if needed, or rely on img styles */
            margin-bottom: 20px; /* Space below the image */
            /* Removed text-align: center; based on request */
            text-align: left; /* Ensure content aligns left */
        }

        .profile-image-container img {
            display: block; /* Remove extra space below image */
            width: 100%; /* Image fills container width */
            height: auto;
            object-fit: cover; /* Ensure image covers the area without distortion */
            /* If the image is not 100% width, it will now align left */
        }

        .content-section {
            padding: 0 20px 20px; /* Horizontal padding */
            /* No text-align here - child elements will control alignment */
        }

        .name {
            /* Updated styles for CAHAYA DEWI */
            font-family: 'Belleza', sans-serif; /* Changed font */
            font-size: 45px; /* Changed size */
            font-weight: 700; /* Keep bold */
            margin: 0 0 5px 0;
            text-transform: uppercase;
            color: #FFFFFF; /* Set color */
            /* text-align: center;  Removed based on request */
        }

        .title {
            /* Updated styles for General Manager */
            font-family: 'Poppins', sans-serif; /* Changed font */
            font-size: 16px; /* Changed size */
            font-weight: 400; /* Keep regular weight */
            color: #CFCFCF; /* Set color */
            margin: 0 0 20px 0; /* Keep margin-bottom */
            text-transform: capitalize;
            /* text-align: center;  Removed based on request */
        }

        .contact-info {
            text-align: left; /* Keep text left-aligned inside */
            margin: 10px auto; /* Changed margin to center the block */
            width: fit-content; /* Allow the block to shrink to content width to be centered */
        }

        .contact-info p {
            /* Updated styles for Contact Info lines */
            font-family: 'Roboto', sans-serif; /* Set font */
            font-size: 17px; /* Set size */
            color: #FFFFFF; /* Set color */
            margin: 5px 0; /* Space between contact lines */
        }

        .contact-info a {
             color: #FFFFFF; /* Ensure link color matches paragraph color */
             text-decoration: none; /* Remove underline */
             display: inline-block; /* Allow padding/margin */
             margin-top: 5px; /* Space above email */
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        .contact-label {
            font-weight: 700; /* Bold labels like C: and O: */
            margin-right: 5px;
        }

        /* Removed the .divider CSS rule */

        .company-info {
            text-align: left; /* Keep text left-aligned inside */
            margin: 10px 0; /* Changed margin to align block left */
            width: auto; /* Allow block to take full width again */
            /* Removed width: fit-content; */
        }

        .company-info p {
            /* Default styles for Company Info paragraphs */
            margin: 5px 0;
        }

        .company-info p:first-child {
            /* Styles for COMPANY NAME line */
            font-family: 'Poppins', sans-serif; /* Set font */
            font-size: 18px; /* Set size */
            color: #FFFFFF; /* Set color */
            font-weight: 700; /* Keep bold */
        }

         .company-info p:last-child {
            /* Styles for Address line */
            font-family: 'Roboto', sans-serif; /* Set font */
            font-size: 13px; /* Set size */
            color: #FFFFFF; /* Set color */
            font-weight: 400; /* Ensure not bold */
        }


        .social-icons {
            display: flex;
            justify-content: flex-start; /* Align icons to the left */
            align-items: center;
            margin: 20px 0 10px 0; /* Space above and below icons */
        }

        .social-icons a {
            /* Styles for social icon circles using Font Awesome */
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: #FFFFFF; /* Changed background color to white */
            border-radius: 50%;
            margin: 0 8px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            overflow: hidden;
            color: #000000; /* Set icon color to black for visibility on white background */
            font-size: 1.5em; /* Ensure Font Awesome icon size */
        }

        /* Styles for Font Awesome icons within the circles */
        .social-icons a i {
             /* No specific styles needed here unless overriding Font Awesome defaults */
        }


        .social-icons a:hover {
            background-color: #cccccc; /* Darker background on hover for white circles */
        }

        .social-handle {
            /* Updated styles for @COMPANYSOCIALANAME */
            font-family: 'Sono', sans-serif; /* Set font */
            font-size: 19px; /* Set size */
            color: #FFFFFF; /* Set color */
            margin-top: 10px;
            margin-bottom: 20px;
            /* text-align: center; Removed based on request */
        }

         .save-contact-button {
            display: block; /* Make button take full width */
            width: calc(100% - 40px); /* Full width minus padding */
            margin: 0 auto 20px auto; /* Center button with space below */
            padding: 10px 15px;
            background-color: #333; /* Dark background for the button */
            color: #ffffff; /* White text */
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            font-weight: 700;
            cursor: pointer;
            text-align: center;
            text-decoration: none; /* Remove underline for link-styled button */
            transition: background-color 0.3s ease;
        }

        .save-contact-button:hover {
            background-color: #555; /* Darker background on hover */
        }

         /* Remove default Bootstrap body padding if present */
        body.modal-open {
            padding-right: 0 !important;
        }


    </style>
</head>
<body>

    <div class="signature-card">
        <div class="profile-image-container">
            <img src="profile_img\main_profile\template26-p.jpg" alt="Cahaya Dewi Profile Picture">
        </div>

        <div class="content-section">
            <p class="name">CAHAYA DEWI</p>
            <p class="title">General Manager</p>

            <div class="contact-info">
                <p><span class="contact-label">C :</span> +12 345 678 98</p>
                <p><span class="contact-label">O :</span> +12 345 678 98</p>
                <p><a href="mailto:cahaya@companywebstie.com">cahaya@companywebstie.com</a></p>
            </div>
            <br>
            <div class="company-info">
                <p style="font-weight: 700;">COMPANY NAME</p>
                <p>5 Business Street, Texas, 1234</p>
            </div>
            <br>

            <div class="social-icons">
                 <a href="#" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p class="social-handle">@COMPANYSOCIALANAME</p>

        </div>
        <button class="save-contact-button" onclick="generateVCF()">SAVE TO CONTACTS</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function generateVCF() {
            // Updated contact information to match the business card image
            const contactData = {
                firstName: "CAHAYA",
                lastName: "DEWI",
                title: "General Manager",
                phoneCell: "+12 345 678 98", // Assuming 'C:' is Cell
                phoneOffice: "+12 345 678 98", // Assuming 'O:' is Office
                email: "cahaya@companywebstie.com",
                company: "COMPANY NAME",
                address: "5 Business Street, Texas, 1234",
                // You can add social media URLs here if you want them in the VCF
                // facebook: "YOUR_FACEBOOK_URL",
                // twitter: "YOUR_TWITTER_URL",
                // youtube: "YOUR_YOUTUBE_URL",
                // linkedin: "YOUR_LINKEDIN_URL",
                // Add actual image paths if you want to include them in the VCF (requires base64 encoding, which is more complex)
                // photo: "path/to/your/profile-image.jpg",
            };

            // Create VCF content
            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
ORG:${contactData.company}
TEL;TYPE=CELL,VOICE:${contactData.phoneCell}
TEL;TYPE=WORK,VOICE:${contactData.phoneOffice}
EMAIL;TYPE=PREF,INTERNET:${contactData.email}
ADR;TYPE=WORK:;;${contactData.address};;;;
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