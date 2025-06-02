<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iranga Kodikara - Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #292b51;
            --secondary: #cc9831;
            --accent: #4a6fa5;
            --light: #f8f9fa;
            --dark: #212529;
            --card-radius: 20px;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            z-index: 998;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            /* padding: 20px; */
            color: var(--dark);
        }

        .custom-card {
            /* border-radius: var(--card-radius); */
            overflow: hidden;
            background: white;
            /* width: 100%; */
            /* box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15); */
            transition: var(--transition);
            position: relative;
            z-index: 2;
        }

        /* .custom-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        } */

        .card-header {
            background: linear-gradient(135deg, var(--primary) 0%, #3a3f6d 100%);
            padding: 30px 20px 120px;
            margin: 25px 20px;
            border-radius: 15px !important;
            position: relative;
            text-align: center;
            /* border-bottom-left-radius: 50% 20%;
            border-bottom-right-radius: 50% 20%; */
        }

        .company-logos {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 10px;
        }

        .company-logos img {
            height: 40px;
            width: auto;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
            transition: var(--transition);
        }

        .company-logos img:hover {
            transform: translateY(-3px);
        }

        .profile-picture {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 5px solid white;
            border-radius: 50%;
            width: 180px;
            height: 180px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;

        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-picture::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0) 0%, rgba(0, 0, 0, 0.1) 100%);
            pointer-events: none;
        }

        .card-body {
            padding: 80px 25px 30px;
            background: white;
            margin-top: -70px;
        }

        .text-body {
            background: linear-gradient(135deg, var(--secondary) 0%, #e0b04a 100%);
            border-radius: 15px;
            padding: 25px 20px;
            margin-top: 20px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .text-body::before {
            content: "";
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 2px;
        }

        h2.name {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 28px;
            text-transform: uppercase;
            color: var(--primary);
            margin-bottom: 5px;
            letter-spacing: 0.5px;
        }

        .position {
            color: var(--primary);
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .about {
            color: white;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 0;
        }

        .contact-info {
            margin: 30px 0;
        }

        .contact-item {
            background: linear-gradient(to right, var(--primary) 0%, #3a3f6d 100%);
            border-radius: 12px;
            margin-bottom: 12px;
            padding: 12px 20px;
            color: white;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: var(--transition);
            border: 2px solid transparent;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .contact-item i {
            font-size: 20px;
            width: 30px;
            text-align: center;
            margin-right: 15px;
            transition: var(--transition);
        }

        .contact-item:hover i {
            transform: scale(1.1);
        }

        .contact-text {
            flex: 1;
            font-size: 15px;
            font-weight: 500;
        }

        .section-title {
            font-family: 'Montserrat', sans-serif;
            text-align: center;
            font-size: 18px;
            font-weight: 600;
            color: var(--primary);
            margin: 25px 0 15px;
            position: relative;
            padding-bottom: 8px;
        }

        .section-title::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, var(--secondary), var(--primary));
            border-radius: 3px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin: 20px 0;
        }

        .social-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--primary) 0%, #3a3f6d 100%);
            color: white;
            font-size: 22px;
            transition: var(--transition);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            text-decoration: none;
        }

        .social-icon:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .portfolio-button {
            background: linear-gradient(135deg, var(--secondary) 0%, #e0b04a 100%);
            border-radius: 12px;
            margin-bottom: 12px;
            padding: 15px 20px;
            color: white;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: var(--transition);
            border: 2px solid transparent;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .portfolio-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .portfolio-button i {
            font-size: 24px;
            width: 40px;
            text-align: center;
            margin-right: 15px;
            transition: var(--transition);
        }

        .portfolio-button:hover i {
            transform: scale(1.1);
        }

        .portfolio-text {
            flex: 1;
        }

        .portfolio-title {
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 3px;
            color: var(--primary);
        }

        .portfolio-subtitle {
            font-size: 13px;
            opacity: 0.9;
            color: white;
        }

        .custom-save-button {
            background: linear-gradient(135deg, var(--primary) 0%, #3a3f6d 100%);
            color: white;
            font-weight: 600;
            border: none;
            padding: 14px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            width: 100%;
            font-size: 18px;
            letter-spacing: 0.5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            position: relative;
            overflow: hidden;
            margin-top: 20px;
        }

        .custom-save-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .custom-save-button i {
            margin-right: 10px;
            font-size: 22px;
        }

        .custom-save-button::after {
            content: "";
            position: absolute;
            top: -50%;
            left: -60%;
            width: 20px;
            height: 200%;
            background: rgba(255, 255, 255, 0.2);
            transform: rotate(25deg);
            transition: all 0.5s;
        }

        .custom-save-button:hover::after {
            left: 120%;
        }

        /* Decorative elements */
        .decoration {
            position: absolute;
            z-index: 1;
            opacity: 0.05;
            pointer-events: none;
        }

        .dec-1 {
            top: 10%;
            left: 5%;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: var(--primary);
        }

        .dec-2 {
            bottom: 15%;
            right: 5%;
            width: 80px;
            height: 80px;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            background: var(--secondary);
        }

        .dec-3 {
            top: 20%;
            right: 10%;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--accent);
        }

        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card-header,
        .card-body {
            animation: fadeIn 0.8s ease-out forwards;
        }

        .card-body {
            animation-delay: 0.2s;
        }

        /* Scrollable portfolio section */
        .portfolio-container {
            max-height: 300px;
            overflow-y: auto;
            padding-right: 5px;
            margin-bottom: 15px;
        }

        /* Scrollbar styling */
        .portfolio-container::-webkit-scrollbar {
            width: 8px;
        }

        .portfolio-container::-webkit-scrollbar-track {
            background: rgba(204, 152, 49, 0.1);
            border-radius: 4px;
        }

        .portfolio-container::-webkit-scrollbar-thumb {
            background: var(--secondary);
            border-radius: 4px;
        }

        .portfolio-container::-webkit-scrollbar-thumb:hover {
            background: #e0b04a;
        }

        /* Responsive adjustments */
        @media (max-width: 480px) {
            /* .card-header {
                padding: 25px 15px 70px;
            } */

            .profile-picture {
                width: 140px;
                height: 140px;
            }

            .company-logos img {
                height: 40px;
            }

            .card-body {
                padding: 70px 15px 25px;
            }

            .contact-text {
                font-size: 14px;
            }

            .portfolio-container {
                max-height: 250px;
            }
        }
    </style>
</head>

<body>
    <!-- Decorative background elements -->
    <div class="decoration dec-1"></div>
    <div class="decoration dec-2"></div>
    <div class="decoration dec-3"></div>

    <div class="container">
        <div class="row p-0 m-p justify-content-center">
            <div class="col-12 col-md-10 col-lg-6 p-0 m-0">
                <div class="custom-card">
                    <div class="card-header">
                        <div class="company-logos">
                            <img src="logo_img/client_logo/iranga-1-l.png" alt="Company Logo 1">
                            <img src="logo_img/client_logo/iranga-2-l.png" alt="Company Logo 2">
                        </div>

                        <div class="profile-picture">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=140&w=140" alt="Iranga Kodikara">
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="text-body">
                            <h2 class="name text-center mt-3">Iranga Kodikara</h2>
                            <div class="position text-center">Country Director</div>
                            <p class="about text-center">
                                Experienced business leader with over 15 years in the lighting industry. Passionate about innovative lighting solutions and sustainable business practices.
                            </p>
                        </div>

                        <div class="contact-info">
                            <div class="contact-item" onclick="window.open('tel:+94761316995', '_blank')">
                                <i class="fas fa-phone-alt"></i>
                                <div class="contact-text">+94 76 131 6995</div>
                            </div>

                            <div class="contact-item" onclick="window.open('mailto:iranga.kodikara@lpalighting.com', '_blank')">
                                <i class="fas fa-envelope"></i>
                                <div class="contact-text">iranga.kodikara@lpalighting.com</div>
                            </div>

                            <div class="contact-item" onclick="window.open('https://www.lpalighting.com', '_blank')">
                                <i class="fas fa-globe"></i>
                                <div class="contact-text">www.lpalighting.com</div>
                            </div>

                            <div class="contact-item" onclick="window.open('https://www.litelab.net/', '_blank')">
                                <i class="fas fa-globe"></i>
                                <div class="contact-text">www.litelab.net</div>
                            </div>
                        </div>

                        <div class="section-title">CONNECT WITH ME</div>

                        <div class="social-icons">
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>

                        <div class="section-title">PORTFOLIO</div>

                        <div class="portfolio-container">
                            <!-- Portfolio Item 1 -->
                            <div class="portfolio-button" onclick="window.open('https://heyzine.com/flip-book/abbadaa70c.html', '_blank')">
                                <i class="fas fa-user-circle"></i>
                                <div class="portfolio-text">
                                    <div class="portfolio-title">LITELAB PROFILE</div>
                                    <div class="portfolio-subtitle">View our company profile</div>
                                </div>
                            </div>

                            <!-- Portfolio Item 2 -->
                            <div class="portfolio-button" onclick="window.open('https://heyzine.com/flip-book/20df8d0647.html', '_blank')">
                                <i class="fas fa-building"></i>
                                <div class="portfolio-text">
                                    <div class="portfolio-title">LITELAB FACADE PORTFOLIO</div>
                                    <div class="portfolio-subtitle">Exterior lighting solutions</div>
                                </div>
                            </div>

                            <!-- Portfolio Item 3 -->
                            <div class="portfolio-button" onclick="window.open('https://heyzine.com/flip-book/c813b22478.html', '_blank')">
                                <i class="fas fa-briefcase"></i>
                                <div class="portfolio-text">
                                    <div class="portfolio-title">LITELAB WORKPLACE PORTFOLIO</div>
                                    <div class="portfolio-subtitle">Office lighting solutions</div>
                                </div>
                            </div>

                            <!-- Portfolio Item 4 -->
                            <div class="portfolio-button" onclick="window.open('https://heyzine.com/flip-book/913da2ad3e.html', '_blank')">
                                <i class="fas fa-home"></i>
                                <div class="portfolio-text">
                                    <div class="portfolio-title">LITELAB REAL ESTATE PORTFOLIO</div>
                                    <div class="portfolio-subtitle">Property lighting solutions</div>
                                </div>
                            </div>

                            <!-- Portfolio Item 5 -->
                            <div class="portfolio-button" onclick="window.open('https://heyzine.com/flip-book/98dbe9305a.html', '_blank')">
                                <i class="fas fa-utensils"></i>
                                <div class="portfolio-text">
                                    <div class="portfolio-title">LITELAB HOSPITALITY PORTFOLIO</div>
                                    <div class="portfolio-subtitle">Hotel & restaurant lighting</div>
                                </div>
                            </div>

                            <!-- Portfolio Item 6 -->
                            <div class="portfolio-button" onclick="window.open('https://heyzine.com/flip-book/0bbd4ea402.html', '_blank')">
                                <i class="fas fa-shopping-bag"></i>
                                <div class="portfolio-text">
                                    <div class="portfolio-title">LITELAB RETAIL PORTFOLIO</div>
                                    <div class="portfolio-subtitle">Store lighting solutions</div>
                                </div>
                            </div>

                            <!-- Portfolio Item 7 -->
                            <div class="portfolio-button" onclick="window.open('https://heyzine.com/flip-book/420743ca27.html', '_blank')">
                                <i class="fas fa-couch"></i>
                                <div class="portfolio-text">
                                    <div class="portfolio-title">LITELAB RESIDENTIAL PORTFOLIO</div>
                                    <div class="portfolio-subtitle">Home lighting solutions</div>
                                </div>
                            </div>
                        </div>

                        <button class="btn custom-save-button" onclick="generateVCF()">
                            <i class="fas fa-address-card"></i> SAVE TO CONTACTS
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        async function generateVCF() {
            const contactData = {
                firstName: "Iranga",
                lastName: "Kodikara",
                title: "Country Director",
                phoneWork: "",
                phoneMobile: "+94761316995",
                email: "iranga.kodikara@lpalighting.com",
                email2: "",
                email3: "",
                website: "https://www.lpalighting.com",
                website2: "https://www.litelab.net/",
                website3: "",
                address: "100B Barns Place, Colombo 07, Sri Lanka",
                address2: "",
                about: "",
                logo: "https://tapilinq.com/logo_img/client_logo/iranga-1-l.png",
                profileImage: "https://tapilinq.com/profile_img/client_profile/dilmy-p.jpeg" // Same as logo in this case
            };

            // Convert image to base64
            const toBase64 = async (url) => {
                const response = await fetch(url);
                const blob = await response.blob();
                return new Promise((resolve, reject) => {
                    const reader = new FileReader();
                    reader.onloadend = () => resolve(reader.result.split(',')[1]);
                    reader.onerror = reject;
                    reader.readAsDataURL(blob);
                });
            };

            let photoBase64 = '';
            try {
                photoBase64 = await toBase64(contactData.profileImage);
            } catch (error) {
                console.error("Failed to load image for VCF:", error);
            }

            // Build VCF content
            let vcfLines = [
                "BEGIN:VCARD",
                "VERSION:3.0",
                `FN:${contactData.firstName} ${contactData.lastName}`,
                `N:${contactData.lastName};${contactData.firstName};;;`,
            ];

            if (contactData.title) vcfLines.push(`TITLE:${contactData.title}`);
            if (contactData.phoneWork) vcfLines.push(`TEL;TYPE=WORK,VOICE:${contactData.phoneWork}`);
            if (contactData.phoneMobile) vcfLines.push(`TEL;TYPE=CELL:${contactData.phoneMobile}`);
            if (contactData.email) vcfLines.push(`EMAIL:${contactData.email}`);
            if (contactData.email2) vcfLines.push(`EMAIL:${contactData.email2}`);
            if (contactData.email3) vcfLines.push(`EMAIL:${contactData.email3}`);
            if (contactData.website) vcfLines.push(`URL:${contactData.website}`);
            if (contactData.website2) vcfLines.push(`URL:${contactData.website2}`);
            if (contactData.website3) vcfLines.push(`URL:${contactData.website3}`);
            if (contactData.address) vcfLines.push(`ADR;TYPE=WORK:;;${contactData.address}`);
            if (contactData.address2) vcfLines.push(`ADR;TYPE=HOME:;;${contactData.address2}`);
            if (contactData.about) vcfLines.push(`NOTE:${contactData.about}`);

            // Embed profile image (base64 JPEG format)
            if (photoBase64) {
                vcfLines.push(`PHOTO;ENCODING=b;TYPE=JPEG:${photoBase64}`);
            }

            vcfLines.push("END:VCARD");

            const vcfContent = vcfLines.join('\n');

            // Trigger download
            const blob = new Blob([vcfContent], {
                type: 'text/vcard'
            });
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