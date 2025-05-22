<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@400;500;700&family=Poppins:wght@400;600;700&family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: #f0f2f5; /* Light grey background for context */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: -5px;
        }

        .custom-card {
            border-radius: 5px;
            overflow: hidden;
            background: #FFFFFF;
            width: 500px; /* Adjusted width to be closer to the image */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .custom-header {
            background: linear-gradient(to bottom, #b1b3fe, #6f72ff);
            padding: 120px 20px 70px; /* Increased bottom padding to make space for profile picture */
            position: relative;
            text-align: center; /* Center content in header */
        }

        .profile-picture {
            position: absolute;
            bottom: -70px; /* Position to overlap the sections */
            left: 50%;
            transform: translateX(-50%);
            z-index: 10; /* Ensure it's above other content */
        }

        .profile-picture img {
            width: 185px; /* Adjusted size */
            height: 185px; /* Adjusted size */
            border: 1px solid #fff;
            border-radius: 50%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            object-fit: cover; /* Ensure image covers the circular area */
        }

        .card-body {
            padding-top: 80px; /* Add padding to the top to make space for the overlapping profile picture */
            text-align: center;
        }

        /* Sophi Taylor (Name) Styles */
        .card-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700; /* Keeping a bold weight */
            font-size: 25px;
            color: #000000;
            margin-bottom: 5px;
        }

        /* Director/Founder (Title) Styles */
        .card-subtitle { /* New class for subtitle */
            font-family: 'Poppins', sans-serif;
            font-weight: 400; /* Keeping a regular weight */
            font-size: 16px;
            color: #B3B3B3;
            margin-bottom: 5px; /* Space below subtitle */
        }

        /* New York Software Co. (Company) Styles */
        .card-company { /* New class for company name */
            font-family: 'Poppins', sans-serif;
            font-weight: 400; /* Keeping a regular weight */
            font-size: 12px;
            color: #4E4E4E;
            margin-bottom: 20px; /* Space below company name */
        }


        /* Save to Contact button Styles */
        .save-contact-button {
            background: #4D71FF;
            color: #FFFFFF;
            font-weight: 600;
            border: none;
            padding: 10px 20px;
            border-radius: 20px; /* Slightly less rounded than current */
            width: 100%; /* Make button slightly narrower */
            margin-bottom: 30px;
            transition: opacity 0.3s ease;
            font-family: 'Roboto', sans-serif; /* Applied Roboto font */
            font-size: 16px; /* Applied font size */
        }

        .save-contact-button:hover {
            opacity: 0.9;
            color: white; /* Keep text white on hover */
        }

        /* Section Title Styles (General) */
        .section-title {
            font-family: 'Poppins', sans-serif; /* Applied Poppins font */
            font-weight: 600;
            margin-bottom: 15px;
            position: relative;
        }

        /* Contacts Section Title Styles */
        .contacts-title { /* Specific class for Contacts title */
             font-size: 15px; /* Applied font size */
             color: #000000; /* Applied font color */
        }

         /* FOLLOW US Section Title Styles */
        .follow-us-title { /* Specific class for Follow Us title */
            font-size: 15px; /* Applied font size */
            color: #000000; /* Applied font color */
            margin-top: 30px; /* Added space above FOLLOW US */
        }


        /* Contacts List Item (Bar) Styles */
        .contact-list .list-group-item {
            border: none;
            border-radius: 50px; /* Increased border-radius for more curve */
            margin-bottom: 10px;
            padding: 10px 20px;
            background-color: #7A95FF; /* Changed background color to #7A95FF */
            font-family: 'Roboto', sans-serif; /* Applied Roboto font to list items */
            font-size: 16px; /* Applied font size to list items */
            display: flex;
            align-items: center;
            justify-content: center; /* Center content horizontally within the button */
            text-align: center;
            transition: background-color 0.2s ease;
            width: 100%; /* Make list items slightly narrower */
            margin-left: auto;
            margin-right: auto;
            color: #000; /* Default text color for list item button */
        }

        .contact-list .list-group-item span { /* Styles for text within list items */
             color: #FFFFFF; /* Applied white color to the text */
             font-family: 'Roboto', sans-serif; /* Ensure Roboto is applied */
             font-size: 16px; /* Ensure size is applied */
             flex-grow: 1; /* Allow text to take available space */
             text-align: center; /* Center text within the span */
        }

        /* Contact Icon Styles - Added padding-left */
        .contact-list .list-group-item i {
            margin-right: 15px;
            color: #FFFFFF; /* Changed icon color to white */
            font-size: 1.2rem;
            padding-left: 10px; /* Added padding to slightly center the icon visually */
        }

        .social-icons {
            margin-bottom: 20px; /* Space below social icons */
        }

        .social-icons a {
            margin: 0 30px; /* Space out social icons */
            display: inline-block;
            text-decoration: none;
            /* color: #333; Default icon color - REMOVED to allow specific colors below */
            transition: color 0.3s ease;
        }

        .social-icons a i {
             font-size: 2rem; /* Size of social icons */
        }

        /* Social Media Label Styles */
        .social-icons .social-label {
            display: block; /* Place label below icon */
            font-size: 13px; /* Applied font size */
            font-family: 'Rubik', sans-serif; /* Applied Rubik font */
            font-weight: 400; /* Keeping a regular weight */
            margin-top: 5px;
            color: #7A7A7A; /* Applied font color */
        }

        /* Specific Social Icon Colors */
        .social-icons .fa-linkedin { color: #0a66c2; } /* Updated LinkedIn color */
        .social-icons .fa-instagram { color: #e1306c; } /* Updated Instagram color */
        .social-icons .fa-facebook { color: #1877f2; } /* Updated Facebook color */

        /* Keeping existing hover effects for social icons */
        .social-icons a:hover i.fa-linkedin { color: #0a5a82; } /* Slightly darker on hover */
        .social-icons a:hover i.fa-instagram { color: #c13584; } /* Slightly darker on hover */
        .social-icons a:hover i.fa-facebook { color: #2d4373; } /* Slightly darker on hover */


        /* Remove default bootstrap focus outline */
        .btn:focus, .list-group-item:focus {
            box-shadow: none;
            outline: none;
        }
    </style>

</head>

<body>
    <div class="card custom-card">
        <div class="custom-header">
            <div class="profile-picture">
                <img src="profile_img\main_profile\template27-p.png" alt="Sophi Taylor">
            </div>
        </div>
        <div class="card-body">
            <h2 class="card-title">Sophi Taylor</h2>
            <p class="card-subtitle">Director/Founder</p>
            <p class="card-company">New York Software Co.</p>

            <button class="btn save-contact-button" onclick="generateVCF()">
                 Save to Contact
            </button>

            <h3 class="section-title contacts-title" style="font-size: 15px; color: #000000;">CONTACTS</h3> <div class="list-group contact-list">
                <button type="button" class="list-group-item d-flex align-items-center" onclick="window.open('tel:+01234355678', '_self')">
                     <i class="fas fa-phone"></i>
                     <span>0123 4355 678</span>
                </button>
                <button type="button" class="list-group-item d-flex align-items-center" onclick="window.open('tel:+0234567890', '_self')">
                     <i class="fas fa-mobile-alt"></i>
                     <span>023 4567 890</span>
                </button>
                <button type="button" class="list-group-item d-flex align-items-center" onclick="window.open('mailto:info@sophigmail.com', '_self')">
                     <i class="fas fa-envelope"></i>
                     <span>info@sophigmail.com</span>
                </button>
                <button type="button" class="list-group-item d-flex align-items-center" onclick="window.open('https://www.newyorksoftware.com', '_blank')">
                     <i class="fas fa-link"></i>
                     <span>newyorksoftware.com</span>
                </button>
            </div>

            <h3 class="section-title follow-us-title">FOLLOW US</h3> <div class="d-flex justify-content-center social-icons">
             
                <a href="#" target="_blank" rel="noopener noreferrer">
                     <i class="fab fa-linkedin"></i>
                     <span class="social-label">linkedin</span>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                     <i class="fab fa-instagram"></i>
                     <span class="social-label">Instagram</span>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                     <i class="fab fa-facebook"></i>
                     <span class="social-label">Facebook</span>
                </a>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Your existing generateVCF function remains the same
        function generateVCF() {
            const contactData = {
                firstName: "Sophi", // Updated name
                lastName: "Taylor", // Updated name
                title: "Director/Founder", // Updated title
                organization: "New York Software Co.", // Added organization
                phoneWork: "01234355678", // Updated phone
                phoneMobile: "0234567890", // Added second phone
                email: "info@sophigmail.com", // Updated email
                website: "https://www.newyorksoftware.com", // Updated website
                address: "", // Address removed
                about: "", // Keep as is
                logo: "", // Logo removed as per layout
                profileImage: "profile_img/client_profile/template78.png" // Keep profile image
            };

            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
${contactData.title ? `TITLE:${contactData.title}` : ''}
${contactData.organization ? `ORG:${contactData.organization}` : ''}
${contactData.phoneWork ? `TEL;TYPE=WORK,VOICE:${contactData.phoneWork}` : ''}
${contactData.phoneMobile ? `TEL;TYPE=CELL:${contactData.phoneMobile}` : ''}
${contactData.email ? `EMAIL:${contactData.email}` : ''}
${contactData.website ? `URL:${contactData.website}` : ''}
${contactData.address ? `ADR;TYPE=WORK:;;${contactData.address}` : ''}
${contactData.about ? `NOTE:${contactData.about}` : ''}
${contactData.profileImage ? `PHOTO;VALUE=URL:${window.location.origin}/${contactData.profileImage}` : ''}
${contactData.logo ? `LOGO;VALUE=URL:${window.location.origin}/${contactData.logo}` : ''}
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