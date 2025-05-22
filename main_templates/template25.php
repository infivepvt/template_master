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
        body {
            background-color: #FFFFFF;
            display: flex;
            justify-content: center;
            align-items: center; /* Card will remain vertically centered */
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            color: #FFFFFF;
            padding-top: -25px; /* Note: Negative padding-top is not valid CSS and likely has no effect */
            padding-bottom: 30px;
        }

       .custom-card-wrapper {
            width: 100%;
            max-width: 500px; /* Card width from picture layout */
            margin: auto; /* Center the wrapper */
        }
        .custom-card {
            background-color:rgb(35, 33, 46);
            border-radius: 2px; 
            margin-top: -2px;
            width: 100%;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.4);
            overflow: hidden;
            position: relative;
            text-align: center;
            padding-bottom: 0.5px;
        }

        .profile-picture-container {
    width: 290px; 
    height: 370px; 
    margin: 30px auto 0 auto; 
    border-top-left-radius: 0;
    border-top-right-radius: 100px;
    position: relative;
    overflow: hidden;
}

        .profile-picture-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
        }

        .card-content {
            padding: 0 20px;
            margin-top: 15px;
        }

        .card-content .name {
            font-family: 'Spectral', serif;
            font-size: 37px;
            color: #FFFFFF;
            font-weight: 200; /* Renders as 400 as Spectral only has 400 and 700 */
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .card-content .title {
            font-family: 'Rubik', sans-serif;
            font-size: 12px;
            color: #C2C2C2;
            font-weight: 400;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .contact-info-stack p {
            font-family: 'Roboto', sans-serif;
            color: #FFFFFF;
            margin-bottom: 8px;
            word-break: break-word;
        }
        .contact-info-stack p.phone {
            font-size: 20px;
            color: #FFFFFF;
             margin-bottom: 8px;
        }
         .contact-info-stack p.email,
         .contact-info-stack p.website {
            font-size: 12px;
            color: #FFFFFF;
            margin-bottom: 5px;
            font-weight: 370;
        }
         .contact-info-stack p.username {
            font-size: 16px;
            color: #FFFFFF;
             margin-top: 8px;
             margin-bottom: 20px;
        }

        .contact-info-stack {
             margin-bottom: 0;
        }


        .social-icons-container {
    display: flex;
    justify-content: center;
    gap: 100px; /* Increased from 40px */
    padding: 10px 20px 20px 20px;
    margin-top: 20px;
}

        /* --- NEW STYLES ADDED TO MATCH SOCIAL ICON PICTURE --- */
        .social-icon-box {
            width: 35px; /* Size of the square box */
            height: 35px; /* Make it square */
            background-color: #E0E0E0; /* Light background color for the box */
            border-radius: 5px; /* Slightly rounded corners */
            display: flex; /* Use flex to center the icon inside */
            justify-content: center;
            align-items: center;
        }

        /* Style for the social icon link (<a> tag) */
        /* Modified from your code */
        .social-icon {
            display: flex; /* Use flex to center the icon within the link area */
            justify-content: center;
            align-items: center;
            text-decoration: none; /* Remove underline */
             /* font-size, color, transition are removed from here */
        }

        /* Style for the Font Awesome icon itself (<i> tag) */
        /* Added */
        .social-icon i {
            font-size: 24px; /* Size of the icon glyph */
            color: #2C2A3A; /* White color for the icon */
            transition: color 0.3s ease; /* Add transition for potential hover effect */
        }

        /* Hover effect on the box */
        /* Added */
        .social-icon-box:hover {
            background-color: #CCCCCC; /* Slightly darker light background on hover */
            cursor: pointer;
        }

        /* Optional: Hover effect on the icon itself if it should change color */
        /* Added */
        .social-icon:hover i {
             color: #F0F0F0; /* Lighter white on hover, subtle */
        }
        /* --- END NEW STYLES --- */

    </style>
</head>

<body>
    <div class="custom-card-wrapper">
        <div class="card custom-card">

            <div class="profile-picture-container">
                <img src="profile_img\main_profile\template25-p.jpg" alt="Tim Smith Profile Picture">
            </div>

            <div class="card-content">
                <h2 class="name">TIM SMITH</h2>
                <p class="title">BUSINESSMAN</p>
                <br>
                <div class="contact-info-stack">
                    <p class="contact-info phone">+123-345-5764</p>
                    <br>
                    <p class="contact-info email">email@yoursite.com</p>
                    <p class="contact-info website">www.yourwebsite.com</p>
                    <br>
                    <p class="contact-info username">@yourusername</p>
                    <br>
                </div>

                <div class="social-icons-container">
                    <div class="social-icon-box">
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <div class="social-icon-box">
                        <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                    <div class="social-icon-box">
                         <a href="#" target="_blank" rel="noopener noreferrer" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    </div>
                    <br><br><br>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function generateVCF() {
            const contactData = {
                firstName: "Tim",
                lastName: "Smith",
                title: "Businessman",
                organization: "",
                phoneWork: "+123-345-5764",
                emailWork: "email@yoursite.com",
                website: "www.yourwebsite.com",
                profileImage: "profile_img/client_profile/template29.png", // Path remains as in your provided code
                logo: ""
            };

            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;\nTITLE:${contactData.title}`;
            if (contactData.organization) {
                 vcfContent += `\nORG:${contactData.organization}`;
            }
            vcfContent += `\nTEL;TYPE=WORK,VOICE:${contactData.phoneWork}
EMAIL;TYPE=WORK:${contactData.emailWork}
URL:${contactData.website}`;

             if (contactData.profileImage) {
                let profileImageUrl = contactData.profileImage.startsWith('http') ? contactData.profileImage : `${window.location.origin}/${contactData.profileImage.replace(/^\//, '')}`;
                vcfContent += `\nPHOTO;VALUE=URL:${profileImageUrl}`;
            }
            if (contactData.logo) {
                 let logoUrl = contactData.logo.startsWith('http') ? contactData.logo : `${window.location.origin}/${contactData.logo.replace(/^\//, '')}`;
                 vcfContent += `\nLOGO;VALUE=URL:${logoUrl}`;
             }

            vcfContent += `\nEND:VCARD`;

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
</body>
</html>