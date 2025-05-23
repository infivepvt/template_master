<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: #f0f2f5;
            /* Light grey background for the page */
            font-family: 'Montserrat', sans-serif;
            /* Apply Montserrat font to body */
             padding: 0.5px;
        }

        .custom-card {
            border-radius: 15px;
            overflow: hidden;
            width: 100px;
            /* Adjusted width */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            /* Enhanced shadow */
            background-color: #ffffff;
            /* Ensure card body background is white */
        }

        .custom-header {
            background-image: url('banner_img/main_banner/template31-b.jpeg');
            /* Use the banner image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 282.5px; /* Changed banner height */
            position: relative;
            padding-top: 50px;
            /* Add some padding at the top */
        }

        .custom-logo {
            width: 180px;
            /* Adjusted logo size */
            height: auto;
            position: absolute;
            /* Position logo absolutely within header */
            top: 20px;
            left: 20px;
        }

        .profile-picture {
            position: absolute;
            top: 85%; /* Adjusted vertical position for overlap */
            left: 50%;
            transform: translate(-50%, -50%);
            /* Center horizontally and pull up by half of its height */
            z-index: 1;
            /* Ensure profile picture is above content */
        }

        .profile-picture img {
            width: 166.5px; /* Adjusted size */
            height: 166.5px; /* Adjusted size */
            border: 5px solid #fff;
            /* White border */
            border-radius: 50%;
            object-fit: cover;
            /* Ensure image covers the area */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            /* Add shadow to profile picture */
        }

        .card-body {
            padding-top: 100px; /* Adjusted padding-top for overlap */
            /* Add padding to the top of the body to make space for the overlapping profile picture */
            background-color: #ffffff;
            /* White background for the main body */
            color: #000000;
            /* Black text color */
        }

        .card-title {
            font-family: 'Tahoma', sans-serif;
            /* Updated font */
            font-size: 25px;
            /* Updated font size */
            font-weight: bold;
            /* Keep bold as it was */
            margin-bottom: 5px;
            color: #000000;
            /* Updated color */
        }

        .card-text {
            font-family: 'Marcellus', sans-serif;
            /* Updated font */
            font-size: 13px;
            /* Updated font size */
            color: #000000;
            /* Updated color */
            margin-bottom: 20px;
            text-transform: uppercase;
            /* Keep uppercase as it was in the original code */
        }

        /* Save to Contact Button */
        .custom-save-button {
            background-color: #000000;
            /* Black background */
            color: white;
            font-weight: normal;
            /* Text is not bold */
            border: 1px solid #000000;
            /* Black border */
            width: 100px;
            /* Keeping the previously requested width */
            height: 25px;
            /* Keeping the previously requested height */
            padding: 0;
            /* Remove padding, let centering handle spacing */
            border-radius: 8px;
            display: flex;
            align-items: center;
            /* Vertically center content */
            justify-content: center;
            /* Horizontally center content */
            transition: background-color 0.3s ease;
            font-size: 13px;
            /* Increased font size slightly - adjust if needed */
            font-family: 'Roboto', sans-serif;
            /* Keeping Roboto */
        }


        .custom-save-button:hover {
            background-color: #333333;
            /* Darker grey on hover */
            color: white;
        }

        .custom-save-button .button-icon {
            width: 25px;
            /* Adjust icon size */
            height: 25px;
            /* Adjust icon size */
            margin-right: 10px;
            filter: invert(1);
            /* Invert color for white icon */
        }

        /* Dark background sections */
        .dark-background {
            background-color: rgb(2, 2, 2);
             border-radius: 8px;
            color: white;
            margin: 20px 0px; /* Keep original top margin, change bottom below */
            padding: 20px 15px; /* Keep original padding, change in mobile media query */
            margin-bottom: 0; /* Changed to remove bottom margin */
            width: 100%; /* Added to ensure full width */
        }

        /* Light background sections */
        .light-background {
            background-color: #ffffff;
            /* White background */
            color: #000000;
            /* Black text */
            border-radius: 8px;
            margin: 20px 0; /* Keep original margin, change in mobile media query */
            padding: 20px 15px; /* Keep original padding, change in mobile media query */
            width: 100%; /* Added to ensure full width */
        }


        .section-title {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 15px;
            position: relative;
            /* For the lines */
            font-family: 'Montserrat', sans-serif;
            /* Apply Montserrat font */
        }

        /* Remove lines from the Contact Me title specifically */
        .contact-section-title::before,
        .contact-section-title::after {
            content: none;
            /* This removes the pseudo-elements that created the lines */
        }

        /* Remove lines from the Address & Hours title specifically */
        .address-section-title::before,
        .address-section-title::after {
            content: none;
            /* This removes the pseudo-elements that created the lines */
        }


        /* Remove lines from the Follow Me title specifically */
        .follow-me-section .section-title::before,
        .follow-me-section .section-title::after {
            content: none;
            /* Remove the pseudo-elements that created the lines */
        }


        /* Original section-title line styling (kept for other sections) */
        .section-title::before,
        .section-title::after {
            content: '';
            position: absolute;
            width: 30%;
            /* Length of the lines */
            height: 2px;
            top: 50%;
            transform: translateY(-50%);
        }


        .dark-background .section-title::before,
        .dark-background .section-title::after {
            background-color: white;
            /* White lines for dark background sections */
        }

        .light-background .section-title::before,
        .light-background .section-title::after {
            background-color: #000000;
            /* Black lines for light background sections */
        }


        .section-title::before {
            left: 0;
        }

        .section-title::after {
            right: 0;
        }

        /* Generic Style for Dividers */
        .section-divider {
            /* Use a generic class for the divider container */
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            /* Space above the divider */
            margin-bottom: 20px;
            /* Space below the divider */
        }

        .divider-line {
            /* Style for the lines */
            flex-grow: 1;
            height: 1px;
            margin: 0 10px;
            max-width: 50px;
        }

        .divider-icon {
            /* Generic style for icons within dividers */
            font-size: 1.5rem;
            /* Size of the icon */
        }

        /* Colors for dividers in dark background sections */
        .dark-background .divider-line {
            background-color: white;
        }

        .dark-background .divider-icon {
            color: white;
        }

        /* Colors for dividers in light background sections */
        .light-background .divider-line {
            background-color: #000000;
        }

        .light-background .divider-icon {
            color: #000000;
        }

        /* Style for the contact divider (phone icon with lines) */
        .contact-divider {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            /* Space above the divider */
            margin-bottom: 20px;
            /* Space below the divider */
        }

        .contact-divider .divider-line {
            /* Targeting divider lines specifically within contact-divider */
            flex-grow: 1;
            height: 1px;
            background-color: white;
            /* White line color for dark background */
            margin: 0 10px;
            max-width: 50px;
        }

        .contact-divider-icon {
            font-size: 1.5rem;
            color: white;
            /* White icon color for dark background */
        }


        /* Contact Me Section (icons and text details) */
        .contact-icon-link {
            display: inline-flex;
            /* Use flexbox for centering */
            justify-content: center;
            /* Center icon horizontally */
            align-items: center;
            /* Center icon vertically */
            width: 36px; /* Changed circle size */
            height: 36px; /* Changed circle size */
            background-color: white;
            /* White circle background */
            border: 2px solid white;
            /* White border */
            border-radius: 50%;
            /* Make it a circle */
            margin: 0 10px;
            /* Adjust space between icons */
            transition: background-color 0.3s ease;
            /* Add transition for hover */
            text-decoration: none;
            /* Remove underline */
            /* font-size: 1.2rem; -- Adjusted icon size (Moved from here to the i tag for consistency) */
        }

        .contact-icon-link:hover {
            background-color: #f0f0f0;
            /* Slightly grey on hover */
        }

        /* Style the icon inside the circle to be black */
        .contact-icon-link i {
            color: black;
            /* Black icon color */
            font-size: 1.2rem; /* Adjusted icon size */
        }


        /* Adjust spacing for the row of four icons below the divider */
        .contact-section .d-flex.justify-content-around.mb-3 {
            margin-bottom: 15px !important;
            /* Adjust bottom margin */
            padding: 0 15px;
            /* Add some horizontal padding to match image spacing */
            margin-top: 0 !important;
            /* Remove default margin-top if any */
        }

        /* Removed: Styles for the text details with icons */
        /*
        .contact-text { ... }
        .contact-text.d-flex { ... }
        .contact-text .fas { ... }
        */


        /* Address & Hours Section */
        .address-text {
            font-size: 16px;
            /* Base style for address text */
            margin-bottom: 5px;
            /* Adjusted margin for multiple lines */
            line-height: 1.5;
            /* Apply Montserrat font (base) */
            color: #000000;
            /* Black text color (base) */
            text-align: center;
            /* Center address lines */
        }

        .address-hours-section .address-line1 {
            font-family: 'Poppins', sans-serif;
            /* Applied Poppins font */
            font-size: 15px;
            /* Applied 15px font size */
            /* color: #000000; /* Already set by .address-text base */
            margin-bottom: 0;
            /* Remove bottom margin for the first line */
        }

        .address-hours-section .address-line2 {
            font-family: 'Poppins', sans-serif;
            /* Applied Poppins font */
            font-size: 13px;
            /* Applied 13px font size */
            /* color: #000000; /* Already set by .address-text base */
            margin-top: 0;
            /* Remove top margin for the second line */
            margin-bottom: 15px;
            /* Restore margin below the address block */
        }

        /* Styling for the Google Maps iframe */
        .address-hours-section iframe {
            width: 100%;
            /* Make the iframe responsive */
            height: 150px;
            /* Set a default height or use the attribute */
            border: 0;
            /* Remove default iframe border */
            border-radius: 8px;
            /* Apply border-radius */
            margin-bottom: 15px;
            /* Add space below the iframe */
            display: block;
            /* Ensure it takes up its own line */
        }

        .opening-hours {
            font-size: 15px;
            text-align: center;
            padding: 0 20px;
            /* Add padding left and right */
            font-family: 'Montserrat', sans-serif;
            /* Apply Montserrat font */
        }

        .opening-hours h4 {
            font-family: 'Poppins', sans-serif;
            /* Applied Poppins font */
            font-size: 18px;
            /* Applied 18px font size */
            color: #000000;
            /* Applied black color */
            margin-bottom: 10px;
            /* Adjust margin below the heading */
        }

        .opening-hours p {
            font-family: 'Poppins', sans-serif;
            /* Applied Poppins font */
            font-size: 13px;
            /* Applied 13px font size */
            color: #000000;
            /* Applied black color */
            margin-bottom: 5px;
        }


        /* Follow Me Section */
        .follow-me-section .section-title {
            font-family: 'Tahoma', sans-serif;
            /* Applied Tahoma font */
            font-size: 21px;
            /* Applied 21px font size */
            color: white !important;
            /* Applied black color with !important to override */
            font-weight: bold;
            text-align: center;
            margin-bottom: 15px;
            position: relative;
        }

        /* Contact Me Section Title */
        .contact-section .section-title {
            font-family: 'Tahoma', sans-serif;
            /* Applied Tahoma font */
            font-size: 21px;
            /* Applied 21px font size */
            color: white !important;
            /* Applied black color with !important to override */
            font-weight: bold;
            text-align: center;
            margin-bottom: 0;
            /* Keep margin-bottom as 0 as per original */
            position: relative;
        }


        .social-icons-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            /* 4 icons per row */
            gap: 15px;
            /* Space between icons */
            justify-items: center;
            /* Center icons in their grid areas */
            padding: 0 15px;
            /* Add padding */
        }

        .social-icon-link {
            display: inline-flex;
            /* Use flexbox for centering */
            justify-content: center;
            /* Center icon horizontally */
            align-items: center;
            /* Center icon vertically */
            width: 36px; /* Changed circle size */
            height: 36px; /* Changed circle size */
            background-color: white;
            /* White circle background */
            border: 2px solid white;
            /* White border */
            border-radius: 50%;
            /* Make it a circle */
            transition: background-color 0.3s ease;
            /* Add transition for hover */
            text-decoration: none;
            /* Remove underline */
            /* font-size: 1.2rem; -- Adjusted icon size (Moved from here to the i tag for consistency) */
        }

        .social-icon-link i {
            color: black;
            /* Set icon color to black */
            font-size: 1.2rem; /* Adjusted icon size */
        }

        .social-icon-link:hover {
            background-color: #f0f0f0;
            /* Slightly grey on hover for the circle */
        }


        /* Using Font Awesome icons, so image styles are not needed here */
        .social-icons-grid img {
            display: none;
            /* Hide the img tags if using Font Awesome */
        }


        /* Scan QR Button (Optional styling) */
        .scan-qr-button {
            background-color: #eeeeee;
            color: #000000;
            font-weight: normal; /* Changed from bold */
            border: 1px solid #cccccc;
            /* Remove this line: padding: 12px; */
            border-radius: 8px;
            transition: background-color 0.3s ease;
            font-size: 13px; /* Changed from 16px */
            /* Remove this line: margin-top: 20px; */
            font-family: 'Roboto', sans-serif; /* Changed from Montserrat */
            width: 132.66px; /* Added */
            height: 32px; /* Added */
            position: absolute; /* Added for positioning */
            top: 50%; /* Added for vertical centering */
            left: 50%; /* Added for horizontal centering */
            transform: translate(-50%, -50%); /* Added for precise centering */
            margin: 0; /* Added to remove default margins */
        }

        .scan-qr-button:hover {
            background-color: #dddddd;
        }


        /* Bottom Background Image Section */
        .bottom-background {
            background-image: url('banner_img/main_banner/template31-b.jpeg');
            /* Changed to match the top banner image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 50px; /* Adjusted height as needed */
            border-bottom-left-radius: 15px;
            /* Match card border radius */
            border-bottom-right-radius: 15px;
            /* Match card border radius */
            position: relative; /* Added to be a positioning context */
            margin-top: 0; /* Added to remove top margin */
        }

        /* Ensure all text uses Montserrat unless overridden */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        div,
        button,
        a {
            /* Base font family, overridden by specific classes below */
            font-family: 'Montserrat', sans-serif;
        }

        /* Overrides for specific elements as requested */
        .card-title {
            font-family: 'Tahoma', sans-serif;
        }

        .card-text {
            font-family: 'Marcellus', sans-serif;
        }

        .custom-save-button {
            font-family: 'Roboto', sans-serif;
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .custom-card {
                width: 100%;
                /* Make card nearly full width on small screens */
                margin-top: -80px;
                /* Adjust margin top */
            }

            .custom-header {
                height: 300px; /* Changed banner height for mobile */
            }

            .profile-picture {
                top: 50%; /* Adjusted vertical position for mobile overlap */
            }

            .profile-picture img {
                width: 166.5px; /* Keeping same size for mobile */
                height: 166.5px; /* Keeping same size for mobile */
            }

            .card-body {
                padding-top: 30px; /* Adjusted padding-top for mobile overlap */
            }

            .custom-logo {
                width: 150px;
                /* Adjust logo size */
            }

            .section-title::before,
            .section-title::after {
                content: none;
                /* Remove lines on small screens too */
                width: 0;
                /* Ensure no width */
            }

            .social-icons-grid {
                grid-template-columns: repeat(auto-fit, minmax(50px, 1fr));
                /* Adjust grid for smaller screens */
                gap: 15px; /* Changed from 20px for tighter mobile layout */
            }

            .contact-icon-link {
                width: 36px; /* Adjusted circle size on small screens */
                height: 36px; /* Adjusted circle size on small screens */
                /* font-size: 1.2rem; -- Adjusted icon size on small screens (set on i tag) */
                margin: 0 5px;
                /* Adjust space on small screens */
            }

            .contact-icon-link i {
                font-size: 1.2rem; /* Ensured icon size is 1.2rem on mobile */
            }

            .social-icon-link {
                 width: 36px; /* Adjusted circle size on small screens */
                 height: 36px; /* Adjusted circle size on small screens */
                 /* Remove this line if it exists: font-size: 1.3rem; */
            }

             .social-icon-link i {
                 font-size: 1.2rem; /* Ensured icon size is 1.2rem on mobile */
             }

            .dark-background { /* Added or modified this rule for mobile dark backgrounds */
                 margin: 20px 0; /* Reduced vertical margin between dark sections */
                 padding: 5px 30px; /* Reduced vertical padding within dark sections */
                 width: 100%; /* Added to ensure full width on mobile */
            }

            .light-background { /* Added or modified this rule for mobile light backgrounds */
                 margin: 30px 0; /* Reduced vertical margin between light sections */
                 padding: 15px 15px; /* Reduced vertical padding within light sections */
                 width: 100%; /* Added to ensure full width on mobile */
            }

            /* Explicitly remove margin below the last section before the banner */
             .card-body > .follow-me-section {
                 margin-bottom: 0;
             }

            /* Find this rule within the @media block and apply these changes */
            .bottom-background {
                 height: 150px; /* Adjusted bottom background height */
                 margin-top: 0.5px; /* Explicitly remove top margin above the bottom banner */
                 /* Keep any other existing styles you have for .bottom-background in this media query */
            }


            .opening-hours {
                padding: 0 15px;
                /* Adjust padding for hours */
            }


            .address-hours-section iframe {
                /* Responsive height adjustment for iframe */
                height: 120px;
            }

            .scan-qr-button {
                font-size: 13px; /* Changed from 16px */
                 /* Remove this line if it exists: margin-top: 20px; */
                 /* Width, height, and positioning inherit from default absolute positioning */
            }
        }
    </style>

</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg">
            <div class="custom-header text-center" style="background-image: url('banner_img/main_banner/template31-b.jpeg');"> 
                <div class="profile-picture">
                    <img src="profile_img/main_profile/template31-p.png" alt="William James" class="rounded-circle"> 
                </div>
            </div>

            <div class="card-body text-center">
                <div class="d-flex justify-content-between align-items-center mb-4 px-3">
                    <div class="text-start">
                        <h2 class="card-title" style="margin-bottom: 0;">Chole Eng</h2>
                        <p class="card-text">EDUCATOR</p>
                    </div>
                    <button class="btn custom-save-button mb-3" onclick="generateVCF()">
                        Save to Contact
                    </button>
                </div>


                <div class="contact-section dark-background py-3">
                    <h3 class="section-title contact-section-title text-center mb-0">Contact Me</h3>
                    <div class="contact-divider mb-3">
                        <span class="divider-line"></span>
                        <i class="fas fa-phone contact-divider-icon"></i>
                        <span class="divider-line"></span>
                    </div>
                    <div class="d-flex justify-content-around mb-3">
                        <a href="tel:0761231212" class="contact-icon-link"><i class="fas fa-phone"></i></a> <a href="#" class="contact-icon-link"><i class="fas fa-mobile-alt"></i></a> <a href="mailto:youremail@yourwebsite.com" class="contact-icon-link"><i class="fas fa-envelope"></i></a> <a href="https://www.yourwebsiteaddress.com" target="_blank" rel="noopener noreferrer" class="contact-icon-link"><i class="fas fa-link"></i></a>
                    </div>
                </div>

                <div class="address-hours-section light-background py-3">
                    <h3 class="section-title address-section-title text-center mb-0">Address & Hours</h3>
                    <div class="section-divider mb-3">
                        <span class="divider-line"></span>
                        <i class="fas fa-location-dot divider-icon"></i> <span class="divider-line"></span>
                    </div>
                    <p class="address-text address-line1">Dream Fox Design</p>
                    <p class="address-text address-line2">12/2, Marine Street, Singapore</p>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.81536310987!2d79.8150056436461!3d6.921836877836778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1747363574543!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <div class="opening-hours mt-3">
                        <h4>Opening Hours</h4>
                        <p>Monday to Friday - 9am to 5pm</p>
                        <p>Saturday - 9am to 1pm</p>
                        <p>Sunday Closed</p>
                    </div>
                </div>


                <div class="follow-me-section dark-background py-3">
                    <h3 class="section-title">Follow Me</h3>
                    <div class="section-divider mb-3">
                        <span class="divider-line"></span>
                        <i class="fas fa-user divider-icon"></i> <span class="divider-line"></span>
                    </div>
                    <div class="social-icons-grid">
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link"><i class="fab fa-facebook-f social-icon"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link"><i class="fab fa-instagram social-icon"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link"><i class="fab fa-linkedin-in social-icon"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link"><i class="fab fa-tiktok social-icon"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link"><i class="fab fa-youtube social-icon"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link"><i class="fab fa-twitter social-icon"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link"><i class="fab fa-pinterest-p social-icon"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link"><i class="fas fa-globe social-icon"></i></a>
                    </div>
                </div>

            </div> <div class="bottom-background" style="background-image: url('banner_img/main_banner/template31-b.jpeg');">
                 <button class="btn scan-qr-button"> Scan QR Code
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function generateVCF() {
            // Updated contact information to match the business card
            const contactData = {
                firstName: "William", // Changed from Chole Eng to William James based on original code
                lastName: "James", // Changed from Chole Eng to William James based on original code
                title: "Realtor", // Changed from Educator to Realtor based on original code
                phoneWork: "0761231212", // Assuming this is the primary number
                phoneMobile: "", // Add mobile if available
                email: "youremail@yourwebsite.com",
                email2: "",
                email3: "",
                website: "www.yourwebsiteaddress.com",
                website2: "",
                website3: "",
                address: "Dream Fox Design, 12/2, Marine Street, Singapore", // Combined address for VCF
                address2: "",
                about: "",
                logo: "logo_img/main_logo/Main_Design-l.png", // Make sure this path is correct and accessible
                profileImage: "profile_img/client_profile/template85.png" // Using the client profile image from the latest code
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
NOTE:${contactData.about}`;

            // Add photo and logo if available and accessible via URL
            if (contactData.profileImage) {
                vcfContent += `\nPHOTO;VALUE=URL:${contactData.profileImage}`;
            }
            if (contactData.logo) {
                vcfContent += `\nLOGO;VALUE=URL:${contactData.logo}`;
            }

            vcfContent += `\nEND:VCARD`;


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