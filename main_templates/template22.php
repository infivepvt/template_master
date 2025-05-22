<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card - Kelli Luna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
    background-color: white;
    font-family: 'Roboto', sans-serif;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    min-height: 100vh;
    padding-top: -30px; 
    padding-bottom: 20px;
    color: #f0f0f0;
}
        .custom-card-wrapper {
            width: 100%;
            max-width: 500px;
        }


        .custom-card {
            border-radius: 2px;
            overflow: hidden; 
            background:rgb(3, 3, 3);
            width: 100%;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            position: relative; 
            text-align: center;
            padding-bottom: 32px; 
           
        }
.card-header-pattern {
    background-image: url('banner_img/main_banner/template22-b.jpg');
    background-color: #111111;       
    background-size: cover;           
    background-position: center top;
    background-repeat: no-repeat;     
    height: 150px;                 
    position: relative;
}
        .profile-picture-container {
            width: 140.59px;  /* Size of the profile picture */
            height: 140.59px;
            margin: -95px auto 20px auto;
            position: relative; /* Ensures it can be layered with z-index */
            z-index: 2;         /* Places profile picture above the .card-header-pattern */
        }

        .profile-picture-container img {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            border: 2px solid #FFFFFF; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }
        
        .profile-name-divider {
            border: none;                
            height: 1px;                 
            background-color:rgb(49, 49, 49);   
            margin-top: 15px;           
            margin-bottom: 20px;       
            margin-left: 25px;         
            margin-right: 25px;        
        }

        .profile-info {
            padding: 0 20px 10px 20px; /* Padding around name, title, company */
        }

        
.profile-info .name {
    font-family: 'Poppins', sans-serif;
    font-size: 25px;
    color: #979797;
    font-weight: 400; /* Or 'normal'. This is the standard for non-bold. */
    margin-bottom: 2px;
}

.profile-info .title {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    color: #CCCCCC;
    font-weight: 400; 
    margin-bottom: 2px;
}
       
.profile-info .company {
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    color: #4E4E4E;
    font-weight: 400;
    margin-bottom: 0; 
}

.content-divider {
    border: none;
    height: 1px;
    background-color: #4A4A4A; 
    margin: 20px 25px; 
}
        .quick-contact-icons {
            display: flex;
            justify-content: space-around;
            padding: 15px 20px;
            margin-bottom: 20px;
        }

        .quick-contact-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: #f0f0f0;
        }

      .quick-contact-item .icon {
    font-size: 25px; /* Icons will now be approximately 25px in size */
    margin-bottom: 8px;
    color: #e0e0e0;
}

       
.quick-contact-item .text {
    font-family: 'Rubik', sans-serif;
    font-size: 13px;
    color: #7A7A7A;
    font-weight: 400; 
}

        .action-button {
            display: block;
            width: calc(100% - 40px);
            margin: 0 auto 15px auto;
            padding: 12px 20px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 25px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

       
.save-contact-button {
    font-family: 'Rubik', sans-serif;
    font-size: 13px;
    color: #3A3A3A; 
    background-color: #FFFFFF; 
    border: 1px solid #FFFFFF;
}
.save-contact-button:hover {
    background-color: #f0f0f0;
    color: #3A3A3A; 
}

       
.follow-us-text {
    font-family: 'Poppins', sans-serif;
    font-size: 12px;
    color: #6D6D6D;
    font-weight: 400;
    margin-top: 25px;
    margin-bottom: 0; /* CHANGED: Was 10px, adjusted for new divider */
    text-transform: uppercase;
    letter-spacing: 1px;
}

     
.social-button {
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    color: #FFFFFF; 
    background-color: #383838; 
    border: 1px solid #444444; 
}

.social-button .fab, .social-button .fas {
    margin-right: 10px;
}
.social-button:hover {
    background-color: #484848;
    color: #FFFFFF; /* Maintain text color on hover */
}
        .bottom-right-branding { /* For the small logo at the bottom-right */
            position: absolute;
            bottom: 15px;
            right: 15px;
            width: 30px; /* Adjust size of this small logo as needed */
            height: 30px;
            z-index: 3; /* Ensure it's above other elements if necessary */
        }

     

    </style>
</head>

<body>
    <div class="custom-card-wrapper">
        <div class="card custom-card">
            <div class="card-header-pattern">
                
            </div>
        <br><br><br>
            <div class="profile-picture-container">
               
                <img src="profile_img\main_profile\template22-p.png" alt="Kelli Luna">
            </div>
            
            <div class="profile-info">
                <p class="name">Kelli Luna</p>
                <br>
                <p class="title">Director/Founder</p>
                <p class="company">Moon Co.</p>
            </div>
           

           <div class="quick-contact-icons">
                <a href="mailto:kelli.luna@example.com" class="quick-contact-item">
                    <span class="icon"><i class="fas fa-envelope"></i></span>
                    <span class="text">EMAIL</span>
                </a>
                <a href="tel:+1234567890" class="quick-contact-item">
                    <span class="icon"><i class="fas fa-phone-alt fa-flip-horizontal"></i></span> 
                    <span class="text">CALL VIA</span>
                </a>
                <a href="https://www.moonco.com" target="_blank" class="quick-contact-item">
                    <span class="icon"><i class="fas fa-link"></i></span>
                    <span class="text">WEBSITE</span>
                </a>
            </div>
            <button class="action-button save-contact-button" onclick="generateVCF()">
                SAVE CONTACT
            </button>

            <p class="follow-us-text">Follow us here</p>
            <br>
            
            <a href="#" class="action-button social-button">
                <i class="fab fa-instagram"></i> INSTAGRAM
            </a>
            <a href="#" class="action-button social-button">
                <i class="fab fa-twitter"></i> TWITTER
            </a>
            <a href="#" class="action-button social-button">
                <i class="fab fa-facebook-f"></i> FACEBOOK
            </a>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function generateVCF() {
            const contactData = {
                firstName: "Kelli",
                lastName: "Luna",
                title: "Director/Founder",
                organization: "Moon Co.",
                phoneWork: "+1234567890", // Replace
                emailWork: "kelli.luna@example.com", // Replace
                website: "https://www.moonco.com", // Replace
                profileImage: "profile_img/main_profile/Main_Design-p.png", // Ensure accessible URL
                // The 'logo' in VCF usually refers to a company logo.
                // If the bottom-right icon is a secondary brand mark, you can decide if it goes in VCF.
                // For now, I'll use a placeholder for a general company logo if you have one.
                // If the bottom-right icon IS the primary logo, use its path.
                logo: "Images/your_company_logo_for_vcf.png" // Replace with actual company logo for VCF
            };

            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
ORG:${contactData.organization}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
EMAIL;TYPE=WORK:${contactData.emailWork}
URL:${contactData.website}`;

            if (contactData.profileImage) {
                let profileImageUrl = contactData.profileImage.startsWith('http') ? contactData.profileImage : `${window.location.origin}/${contactData.profileImage.replace(/^\//, '')}`;
                vcfContent += `\nPHOTO;VALUE=URL:${profileImageUrl}`;
            }
            if (contactData.logo && contactData.logo !== "Images/your_company_logo_for_vcf.png") { // Check if it's not the placeholder
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