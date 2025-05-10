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
        margin: 0 auto;
        background-color: #FFFFFF;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .profile-header {
        position: relative;
        text-align: center;
        padding: 20px;
        background-color: white;
        height: 160px;
    }

    .profile-header img {
        width: 200px;
        border-radius: 50%;
        border: 5px solid white;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .banner-section {
        background-color: #ff0000;
        padding: 20px;
        border-radius: 10px;
        margin: 10px;
        color: white;
        text-align: center;
        padding-top:50px;
    }

    .profile-name {
        font-size: 25px;
        margin: 10px 0;
        color: rgb(255, 255, 255);
        font-family: 'Roboto', sans-serif;
        font-weight: 600;
    }

    .job-title {
        font-size: 16px;
        color: #f3f3f3;
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
        gap: 50px;
        padding: 15px;
    }

    .contact-label{
        margin-top:5px;
        text-align:center;
    }

    .about-section {
        padding: 20px;
        text-align: center;
        background-color: #000000;
    }

    .social-media-icons{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
        padding: 15px;
    }

    .social-media-icon-btn {
        background-color: #eeeeee;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        cursor: pointer;
    }

    .social-media-icon-btn i {
        color:rgb(0, 0, 0);
        font-size: 1.5rem;
    }

    .save-button {
        background-color: #ff0000;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px;
        width: 80%;
        font-weight: bold;
        margin-bottom: 15px;
        margin-left:40px;
        margin-right:40px;
    }

    .footer {
        text-align: center;
        padding: 15px;
        color: #666;
        font-size: 12px;
    }

    /* group Edit */
    /* icon colour change */
    .contact-icon-btn {
        background-color: #eeeeee;
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
        color:rgb(0, 0, 0);
        font-size: 1.5rem;
    }

    /* Removed unused CSS classes */
</style>

</head>

<body>
    <div class="card-container">
        <!-- Profile Header -->
        <div class="profile-header">
            <img src="profile_img/main_profile/template19-p.png" alt="Profile Image">
        </div>
        <!-- Banner Section -->
        <div class="banner-section">
            <!-- <p class="company-title" style="margin-top:45px; font-size:32px;">Technologent</p> -->
            <h2 class="profile-name">JOHANNES SCHNEIDER</h2>
            <p class="job-title">Director Privet Banking<br>IIN Bank</p>
            <!-- <a href="https://wa.me/94761231212" target="_blank" rel="noopener noreferrer"
                style="text-decoration: none;">
                <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center"
                    style="background-color: #25D366; color: white; height: 60px; border: 2px solid orange; border-radius: 10px; gap: 10px;">
                    <i class="fab fa-whatsapp" style="font-size: 50px; margin-right:30px;"></i>
                    <span style="font-size: 14px; font-family: 'Montserrat', sans-serif;">CONNECT WITH
                        WHATSAPP</span>
                </button>
            </a> -->
        </div>
        <!-- Contact Icons -->
        <div class="contact-icons" style="padding:20px ;margin:10px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5) ;border-radius:30px ;margin-top:25px ;padding-top:30px">
            <div>
                <button class="contact-icon-btn">
                <i class="fas fa-phone-alt" style="transform: rotate(90deg);"></i>
                </button>
                <p class="contact-label">Call</p>
            </div>
            <!-- <div>
                <button class="contact-icon-btn">
                <i class="fas fa-fax" style="transform: rotate(90deg);"></i>
                </button>
            </div> -->
            <!-- <div>
                <button class="contact-icon-btn">
                <i class="fas fa-mobile-alt"></i>
                </button>
            </div> -->
            <div>
                <button class="contact-icon-btn">
                    <i class="fas fa-envelope"></i>
                </button>
                <p class="contact-label">Mail</p>
            </div>
            <!-- <div>
                <button class="contact-icon-btn">
                <i class="fas fa-globe"></i>
                </button>
            </div> -->
            <div>
                <button class="contact-icon-btn">
                    <i class="fas fa-map-marker-alt"></i>
                </button>
                <p class="contact-label">Location</p>
            </div>
        </div>
        <!-- About Section -->
        <!-- <div class="about-section">
            <h5 style="color: #ffffff;">About Us</h5>
            <p style="color: #666;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam,</p>
        </div> -->
        <!-- Social Media Section -->
        <div class="social-media-section" >
            <div class="d-flex flex-wrap justify-content-center"style="padding:20px ;margin:10px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5) ;border-radius:30px ;margin-top:25px ;padding-top:30px">
                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px; text-align:center;">Links</p><br>
                <div class="social-media-icons" >
                    <div>
                        <button class="social-media-icon-btn">
                        <i class="fab fa-facebook" ></i>
                        </button>
                        <p class="contact-label">Facebook</p>
                    </div>
                    <div>
                        <button class="social-media-icon-btn">
                            <i class="fab fa-instagram"></i>
                        </button>
                        <p class="contact-label">Instagram</p>
                    </div>
                    <div>
                        <button class="social-media-icon-btn">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <p class="contact-label">Twitter</p>
                    </div>
                    <div>
                        <button class="social-media-icon-btn">
                            <i class="fab fa-linkedin"></i>
                        </button>
                        <p class="contact-label">Linkedin</p>
                    </div>
                    <div>
                        <button class="social-media-icon-btn">
                            <i class="fab fa-youtube"></i>
                        </button>
                        <p class="contact-label">Linkedin</p>
                    </div>
                </div>
            </div>

            <button class="save-button" onclick="generateVCF()">
                <i class="fas fa-save"></i> SAVE TO CONTACTS
            </button>
        </div>
        <!-- Footer -->
        <div class="footer">
            <p>All rights reserved</p>
        </div>
    </div>

    <script>
        function generateVCF() {
            // Contact information
            const contactData = {
                firstName: "ABC",
                lastName: "Pathum",
                title: "Software Engineer",
                phone: "+94761231212",
                email: "saliya.pathum@example.com",
                url: "https://www.infive.com",
                address: "Colombo, Sri Lanka",
                organization: "Infive"
            };

            // Create properly formatted VCF content
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

            // Create download link
            const blob = new Blob([vcfContent], { type: 'text/vcard;charset=utf-8' });
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>