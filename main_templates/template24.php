<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Poppins:wght@400;600;700&family=Roboto:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            /* Optional: Add a light background to the body */
            background-color: #f8f9fa;
            font-family: 'Montserrat', sans-serif;
            /* Set Montserrat as default font */
            margin: 0;
            /* Remove default body margin */
            padding: 0;
            /* Remove default body padding */
            display: flex;
            /* Use flexbox for centering */
            justify-content: center;
            /* Center horizontally */
            align-items: center;
            /* Center vertically */
            min-height: 100vh;
            /* Minimum height to center in viewport */
        }

       .custom-card {
    background: white;
    border-radius: 1rem;
    padding: -5rem; /* Increase padding for more space inside */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    max-width: 1000px; /* Increase max width */
    margin-top: -2px;   
    margin-bottom: -5px; 
}


        .custom-header {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: -1px 20px;
            position: relative;
            width: 390px;
            height: 201px;
            background-image: url('banner_img/main_banner/template24-b.jpg');
            opacity: 1;
            /* Ensure full opacity */
        }

        .custom-logo {
            width: 245px;
            height: auto;
            position: relative;
            top: 0;
            left: 0;
            margin-bottom: 40px;
            opacity: 1;
        }

        .profile-picture {
            position: absolute;
            /* Adjust top to position correctly relative to the header bottom */
            top: 185px;
            left: 185px;
            transform: translate(-50%, -50%);
            z-index: 10;
            /* Ensure profile picture is above card body */
        }

        .profile-picture img {
            width: 185px;
            /* Profile picture size */
            height: 185px;
            border: 4px solid #fff;
            /* White border around profile pic */
            border-radius: 50%;
            object-fit: cover;
            /* Ensure image covers the area */
        }

        .card-body {
            padding-top: 80px;
            /* Add padding to make space for profile picture */
            text-align: center;
            background-color: #FFFFFF;
            /* Ensure card body background is white */
            color: #000000;
            /* Default text color in body is black */
        }

        /* AMELLA JONES */
        .card-body h2 {
            font-family: 'Roboto', sans-serif;
            font-size: 30px;
            text-transform: uppercase;
            font-weight: 600;
            /* Semi-bold for the name */
            margin-bottom: 5px;
            color: #000000;
        }

        /* REALTOR */
        .card-body p {
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            text-transform: uppercase;
            color: #7A7A7A;
            margin-bottom: 20px;
            /* Space below the title/realtor text */
        }

        /* Contact Item Styling */
        .list-group-item {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            /* Align items to the start */
            padding: 12px 20px;
            /* Adjusted padding slightly */
            border: none;
            /* Remove default list-group-item border */
            /* Removed border-bottom: 1px solid #ddd; */
            margin-bottom: 0;
            /* Remove default list-group-item margin */
            background-color: transparent;
            /* Remove background color */
            color: #000000;
            /* Text color for contact details */
            text-decoration: none;
            transition: none;
            /* Remove hover effect if not in image */
            border-radius: 0;
            /* Remove border-radius */
            text-align: left;
            /* Ensure text aligns left */
        }

        /* Removed .list-group-item:last-child rule */


        .contact-icon-wrapper {
            width: 40px;
            /* Increased size to match social icons */
            height: 40px;
            /* Increased size to match social icons */
            margin-right: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            /* Prevent icon wrapper from shrinking */
            background-color: #000000;
            /* Added black background */
            border-radius: 50%;
            /* Added circular shape */
        }

        .list-group-item img {
            width: 30px;
            /* Adjusted size to fit inside the circle, matching social icon img size */
            height: 30px;
            /* Adjusted size to fit inside the circle, matching social icon img size */
            object-fit: contain;
            /* Assuming contact icons are white like social icons to fit in the black circle */
            /* If contact icons are black, you might need white versions or use a filter */
        }

        /* +123 4567 890, amella@companygmail.com, www.amella.com, 123 street ave, city , sate, zip code */
        .list-group-item span {
            flex-grow: 1;
            word-break: break-word;
            /* Prevent long text from overflowing */
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
            /* Adjust font size */
            color: #000000;
            /* Ensure text is black */
            font-weight: 400;
            /* Regular weight */
        }


        .divider {
            height: 3px;
            background-color: #000000;
            /* Black line */
            margin: 16px 0;
            /* Space above and below the line */
            width: 100%;
        }

        .social-media-section {
            background-color: #f1f1f1;
            /* Light grey background */
            padding: 20px;
            text-align: center;
        }

        /* CONNECT WITH ME */
        .social-media-title {
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            /* Adjust font size */
            font-weight: 600;
            /* Semi-bold */
            margin-bottom: 15px;
            /* Space below the title */
            color: #464646;
            text-transform: uppercase;
            /* Match image styling */
        }

      .social-icons-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 50px;
    padding: 1px 1px; /* Top and bottom padding */
}


        .social-icon {
            /* Container for each social icon */
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            /* Size of the circular container */
            height: 40px;
            background-color: #000000;
            /* Black circle background */
            border-radius: 50%;
        }


        .social-icon img {
            width: 40px;
            /* Size of the social media logo inside the circle */
            height: 40px;
            object-fit: contain;
            /* Remove margin from the image itself */
            margin: 0;
            /* Assuming social media icons are white to appear inside the black circle */
        }

        .save-button-section {
            padding: 20px;
            text-align: center;
        }

        .custom-save-button {
            /* Adjust button styling to match the image */
            background-color: black;
            /* Changed to a dark grey to match the image */
            color: white;
            font-weight: 600;
            /* Semi-bold */
            border: none;
            padding: 12px 20px;
            /* Adjusted padding slightly */
            border-radius: 5px;
            /* Adjust border-radius */
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            /* Space between icon and text */
            width: 100%;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            /* Adjust font size */
            transition: background-color 0.3s ease;
            text-transform: uppercase;
            /* Match image styling */
        }

        .custom-save-button:hover {
            background-color: #1a1a1a;
            /* Darker shade on hover */
            color: white;
        }

        .custom-save-button img {
            width: 20px;
            /* Adjusted save icon size slightly */
            height: 20px;
            object-fit: contain;
        }

        /* Added style for the logo below the contact info section */
        .logo-below-contact {
            text-align: center;
            padding: 20px;
        }

        .logo-below-contact img {
            max-width: 74px;
            /* Adjust size as needed */
            height: auto;
        }
    </style>

</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card custom-card shadow-lg">
            <div class="card-header custom-header text-center">
                <div class="profile-picture">
                    <img src="profile_img\main_profile\template24-p.png" alt="Amella Jones" class="rounded-circle">
                </div>
            </div>
            <div class="card-body text-center">
                <h2 class="card-title">Amella Jones</h2>
                <p>Realtor</p>

                <div class="divider"></div>

                <div class="list-group mb-3">
                    <div class="list-group-item">
                        <div class="contact-icon-wrapper">
                            <img src="Images\icon\mobile.png" alt="Phone Icon">
                        </div>
                        <span>+123 4567 890</span>
                    </div>

                    <div class="list-group-item">
                        <div class="contact-icon-wrapper">
                            <img src="Images\icon\mail24.png" alt="Email Icon"> 
                        </div>
                        <span>amella@companygmail.com</span>
                    </div>

                    <div class="list-group-item">
                        <div class="contact-icon-wrapper">
                            <img src="Images\icon\web24.png" alt="Website Icon">  
                        </div>
                        <span>www.amella.com</span>
                    </div>

                    <div class="list-group-item">
                        <div class="contact-icon-wrapper">
                            <img src="Images\icon\map24.png" alt="Location Icon">
                        </div>
                        <span>123 street ave, city sate, zip code</span>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="logo-below-contact">
                    <img src="logo_img\main_logo\template24-l.png" alt="Real Estate Logo">
                </div>

                <div class="social-media-section">
                    <p class="social-media-title">CONNECT WITH ME</p>
                    <div class="social-icons-container">
                        <div class="social-icon">
                            <img src="Images\Social_Media_Icon\facebook24.png" alt="Facebook">
                        </div>
                        <div class="social-icon">
                            <img src="Images\Social_Media_Icon\ig24.png" alt="Instagram">
                        </div>
                        <div class="social-icon">
                            <img src="Images\Social_Media_Icon\twitter24.png" alt="Twitter">
                        </div>
                        <div class="social-icon">
                            <img src="Images\Social_Media_Icon\in24.png" alt="LinkedIn">
                        </div>
                        
                    </div>
                </div>
                <br>
                <div class="save-button-section">
                    <button class="btn custom-save-button" onclick="generateVCF()">
                        <img src="Images/Social_Media_Icon/save.png" alt="Save Icon">
                        SAVE TO CONTACTS
                    </button>
                </div>


            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function generateVCF() {
            // Updated contact information to match the image
            const contactData = {
                firstName: "Amella",
                lastName: "Jones",
                title: "Realtor",
                phoneWork: "+123 4567 890", // Updated phone number
                phoneMobile: "", // Add mobile if available
                email: "amella@companygmail.com", // Updated email
                email2: "",
                email3: "",
                website: "www.amella.com", // Updated website
                website2: "",
                website3: "",
                address: "123 street ave, city sate, zip code", // Updated address
                address2: "",
                about: "", // Add an about section if needed
                logo: "logo_img/main_logo/Main_Design-l.png", // Verify logo path
                profileImage: "profile_img/main_profile/Main_Design-p.png" // Verify profile image path
            };

            // Create VCF content
            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
${contactData.phoneMobile ? `TEL;TYPE=CELL:${contactData.phoneMobile}` : ''}
EMAIL:${contactData.email}
${contactData.email2 ? `EMAIL:${contactData.email2}` : ''}
${contactData.email3 ? `EMAIL:${contactData.email3}` : ''}
URL:${contactData.website}
${contactData.website2 ? `URL:${contactData.website2}` : ''}
${contactData.website3 ? `URL:${contactData.website3}` : ''}
ADR;TYPE=WORK:;;${contactData.address}
${contactData.address2 ? `ADR;TYPE=HOME:;;${contactData.address2}` : ''}
NOTE:${contactData.about}
PHOTO;VALUE=URL:${contactData.profileImage}
LOGO;VALUE=URL:${contactData.logo}
END:VCARD`;

            // Create download link
            const blob = new Blob([vcfContent], {
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