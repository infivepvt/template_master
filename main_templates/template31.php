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
            font-family: 'Montserrat', sans-serif;
            padding: 0; /* Changed to 0 to remove top spacing */
        }

        .custom-card {
            border-radius: 15px;
            overflow: hidden;
            width: 400px; /* Increased default width for PC */
            max-width: 90%; /* Responsive scaling */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        /* Rest of your existing CSS remains unchanged */

        /* Added PC-specific media query */
        @media (min-width: 768px) {
            .custom-card {
                width: 400px;
                max-width: 90%;
            }

            .profile-picture img {
                width: 150px;
                height: 150px;
            }

            .custom-header {
                height: 300px;
            }

            .address-hours-section iframe {
                height: 200px;
            }

            .custom-save-button,
            .scan-qr-button {
                width: 150px;
                height: 35px;
                font-size: 14px;
            }
        }

        /* Your existing mobile media query */
        @media (max-width: 576px) {
            .custom-card {
                width: 100%;
                margin-top: 0; /* Adjusted to ensure no top margin */
            }

            .custom-header {
                height: 300px;
            }

            .profile-picture {
                top: 50%;
            }

            .profile-picture img {
                width: 166.5px;
                height: 166.5px;
            }

            .card-body {
                padding-top: 30px;
            }

            .custom-logo {
                width: 150px;
            }

            .section-title::before,
            .section-title::after {
                content: none;
                width: 0;
            }

            .social-icons-grid {
                grid-template-columns: repeat(auto-fit, minmax(50px, 1fr));
                gap: 15px;
            }

            .contact-icon-link {
                width: 36px;
                height: 36px;
                margin: 0 5px;
            }

            .contact-icon-link i {
                font-size: 1.2rem;
            }

            .social-icon-link {
                width: 36px;
                height: 36px;
            }

            .social-icon-link i {
                font-size: 1.2rem;
            }

            .dark-background {
                margin: 20px 0;
                padding: 5px 30px;
                width: 100%;
            }

            .light-background {
                margin: 30px 0;
                padding: 15px 15px;
                width: 100%;
            }

            .card-body > .follow-me-section {
                margin-bottom: 0;
            }

            .bottom-background {
                height: 150px;
                margin-top: 0.5px;
            }

            .opening-hours {
                padding: 0 15px;
            }

            .address-hours-section iframe {
                height: 120px;
            }

            .scan-qr-button {
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center"> <!-- Removed mt-5 -->
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
                        <a href="tel:0761231212" class="contact-icon-link"><i class="fas fa-phone"></i></a>
                        <a href="#" class="contact-icon-link"><i class="fas fa-mobile-alt"></i></a>
                        <a href="mailto:youremail@yourwebsite.com" class="contact-icon-link"><i class="fas fa-envelope"></i></a>
                        <a href="https://www.yourwebsiteaddress.com" target="_blank" rel="noopener noreferrer" class="contact-icon-link"><i class="fas fa-link"></i></a>
                    </div>
                </div>
                <div class="address-hours-section light-background py-3">
                    <h3 class="section-title address-section-title text-center mb-0">Address & Hours</h3>
                    <div class="section-divider mb-3">
                        <span class="divider-line"></span>
                        <i class="fas fa-location-dot divider-icon"></i>
                        <span class="divider-line"></span>
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
                        <i class="fas fa-user divider-icon"></i>
                        <span class="divider-line"></span>
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
            </div>
            <div class="bottom-background" style="background-image: url('banner_img/main_banner/template31-b.jpeg');">
                <button class="btn scan-qr-button">Scan QR Code</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function generateVCF() {
            const contactData = {
                firstName: "William",
                lastName: "James",
                title: "Realtor",
                phoneWork: "0761231212",
                phoneMobile: "",
                email: "youremail@yourwebsite.com",
                email2: "",
                email3: "",
                website: "www.yourwebsiteaddress.com",
                website2: "",
                website3: "",
                address: "Dream Fox Design, 12/2, Marine Street, Singapore",
                address2: "",
                about: "",
                logo: "logo_img/main_logo/Main_Design-l.png",
                profileImage: "profile_img/client_profile/template85.png"
            };
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
            if (contactData.profileImage) {
                vcfContent += `\nPHOTO;VALUE=URL:${contactData.profileImage}`;
            }
            if (contactData.logo) {
                vcfContent += `\nLOGO;VALUE=URL:${contactData.logo}`;
            }
            vcfContent += `\nEND:VCARD`;
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