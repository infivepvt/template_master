<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            /* Changed to Roboto as base, Montserrat is still linked if needed elsewhere */
            font-family: 'Roboto', sans-serif; 
            background-color: #f8f9fa;
            padding-top: -10px;
            padding-bottom: -10px;
        }
        
       custom-card {
        border-radius: 15px;
        overflow: hidden; 
        background:  #f7f7f7;
        width: 500px;
        max-width: 100%;
        height: auto;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin: 70px auto;  /* Reduced vertical space */
        position: relative;
    }
        .custom-header {
            padding: 30px 30px 0px 30px; 
            color: white;
            text-align: left; 
            position: relative; 
            z-index: 1; 
            height: 200px; 
            border-top-left-radius: 10px; 
            border-top-right-radius: 10px;
        }
      
        .custom-header {
    padding: 10px 30px 0px 30px; /* Current: Top padding is 10px */
    color: white;
    text-align: left; /* Assuming cut is on the right, content on left */
    position: relative;
    z-index: 1;
    height: 250px; /* This was the increased height */
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}

    .custom-header {
    padding: 10px 30px 0px 30px; /* Current: Top padding is 10px */
    color: white;
    text-align: left; /* Assuming cut is on the right, content on left */
    position: relative;
    z-index: 1;
    height: 250px; /* This was the increased height */
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}

.custom-header::before {
    content: "";
    position: absolute;
    top: 0px;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #7044cf;
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
    clip-path: polygon(0% 0%, 100% 0%, 100% 70%, 0% 100%);
    z-index: -1;
}

        .company-logo-header {
            width: 100px; 
            height: auto;
            margin-bottom: 20px; 
            position: relative; 
            z-index: 1;
        }

        .name-title {
            position: relative; 
            z-index: 1;
        }

        .name-title h2 {
            font-family: 'Roboto', sans-serif; /* Explicitly Roboto */
            font-size: 30px; 
            font-weight: 700; /* Kept bold, adjust if needed */
            margin-bottom: 8px;
            color: white; 
           
        }

        .name-title p {
            font-family: 'Roboto', sans-serif; /* Explicitly Roboto */
            font-size: 16px; 
            color: white; 
            font-weight: 500; /* Kept, adjust if needed */
           
        }

        .profile-image-wrapper {
            text-align: right; 
            margin-top: -130px;
            padding-right: 20px; 
            position: relative; 
            z-index: 10; 
            height: 65px; 
        }

        .profile-image-main {
            width: 185px;   
            height: 185px;  
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #fff; 
            box-shadow: 0 5px 20px rgba(0,0,0,0.25);
            display: inline-block; 
        }
        
        .card-body-main {
            padding: 75px 20px 30px 20px;
            background-color:rgb(238, 236, 236);
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            margin-top: -65px; 
            position: relative;
            z-index: 0; 
        }

        .about-section {
            background-color: rgb(238, 236, 236); 
            padding: 20px; 
            border-radius: 8px; 
            box-shadow: 0 4px 12px white; 
            margin-top: 15px; 
            margin-bottom: 30px;
            text-align: left; 
            line-height: 1.6;
        }

        .about-section h4 { 
            font-family: 'Poppins', sans-serif; /* Poppins font */
            font-weight: 700; /* Bold */
            font-size: 20px; 
            margin-top: 0;
            margin-bottom: 10px; 
            text-transform: none; 
            color: #000000; /* Black color */
        }
        .about-section p { 
            font-family: 'Roboto', sans-serif; /* Roboto font */
            font-size: 15px; 
            color: #555; 
            margin-bottom: 0; 
        }
        .contact-section-bg {
    background-color: white; /* light background for contrast */
    padding: 40px 20px;
}

.contact-section {
    background-color: #ffffff; /* white content box */
    padding: 30px 25px;
    border-radius: 12px;
    box-shadow: 0 10px 25px white; /* soft shadow */
    max-width: 800px;
    margin: 0 auto;
    text-align: left;
    line-height: 1.7;
}

        .contact-info {
            padding: 10px 0px 20px 0px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px; 
            padding-bottom: 0; 
            border-bottom: none; 
        }

        .contact-icon { /* Container for the icon */
            width: 45px; 
            height: 45px;
            background-color: #7044CF; /* Purple background */
            color: white; /* Icon color will be white */
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px; 
            font-size: 20px; /* Size of the icon itself */
            flex-shrink: 0; 
        }

        .contact-text {
            font-family: 'Roboto', sans-serif; /* Roboto font */
            color: gray; 
            font-size: 16px; 
            font-weight: 500; 
            word-break: break-all; 
        }

        .save-contact-btn {
            background: #7044cf; 
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: 600;
            display: flex; 
            align-items: center;
            justify-content: center;
            margin: 20px auto 10px auto;
            transition: all 0.3s ease;
            width: fit-content; 
        }

        .save-contact-btn:hover {
            background: #7044cf; 
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(126, 87, 194, 0.3);
        }

        .save-contact-btn i {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="card custom-card">
            <div class="custom-header">
                <img src="logo_img\main_logo\template29-l.png" alt="Company Logo" class="company-logo-header"> 
                <div class="name-title">
                    <h2>Tina Smith</h2>
                    <p>Researcher</p>
                </div>
            </div>
            
            <div class="profile-image-wrapper">
                <img src="profile_img/main_profile/template29-p.png" alt="Tina Smith" class="profile-image-main"> 
            </div>
            
            <br><br>
            <div class="card-body-main">
                <div class="about-section"> <br>
                    <br> <h4>About Us</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                </div>
                <div class="contact-section-bg">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-mobile-alt"></i> 
                        </div>
                        <div class="contact-text">+123 546 7586</div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">Your@gmail.com</div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="contact-text">www.yoursite.com</div>
                    </div>
                </div>

                <button class="btn save-contact-btn" onclick="generateVCF()">
                    <i class="fas fa-save"></i> SAVE TO CONTACTS
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // VCF Generation Script (no changes needed here)
        function generateVCF() {
            const contactData = {
                firstName: "Tina",
                lastName: "Smith",
                title: "Researcher",
                phoneWork: "+123 546 7586",
                phoneMobile: "",
                email: "Your@gmail.com",
                email2: "",
                email3: "",
                website: "www.yoursite.com",
                website2: "",
                website3: "",
                address: "", 
                address2: "",
                about: "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                profileImage: "profile22.png", 
                logo: "IMAGES/LOGO_SHIELD.PNG" // Ensure this path is correct if you use it in VCF
            };

            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}`;
            if (contactData.phoneMobile) {
                vcfContent += `\nTEL;TYPE=CELL:${contactData.phoneMobile}`;
            }
            vcfContent += `\nEMAIL:${contactData.email}`;
            if (contactData.email2) {
                vcfContent += `\nEMAIL:${contactData.email2}`;
            }
            if (contactData.email3) {
                vcfContent += `\nEMAIL:${contactData.email3}`;
            }
            vcfContent += `\nURL:${contactData.website}`;
            if (contactData.website2) {
                vcfContent += `\nURL:${contactData.website2}`;
            }
             if (contactData.website3) {
                vcfContent += `\nURL:${contactData.website3}`;
            }
            if (contactData.address) {
                vcfContent += `\nADR;TYPE=WORK:;;${contactData.address.replace(/\n/g, "\\n")}`;
            }
            if (contactData.address2) {
                vcfContent += `\nADR;TYPE=HOME:;;${contactData.address2.replace(/\n/g, "\\n")}`;
            }
            if (contactData.about) {
                vcfContent += `\nNOTE:${contactData.about.replace(/\n/g, "\\n")}`;
            }
            if (contactData.profileImage) {
                vcfContent += `\nPHOTO;VALUE=URL:${contactData.profileImage}`;
            }
            if (contactData.logo) {
                vcfContent += `\nLOGO;VALUE=URL:${contactData.logo}`; // This uses the path from contactData
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