<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Bahamas Dental Institute - Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-dark: #0a1929;
            --primary-light: #1a3a5f;
            --accent-blue: #2c5e92;
            --accent-teal: #2a7f62;
            --light-text: #f8f9fa;
            --border-color: rgba(255, 255, 255, 0.1);
            --logo-bg-light: #e6f2ff; /* New light background for logo section */
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: linear-gradient(135deg, #1a2a3a, #0d1b26);
            font-family: 'Montserrat', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--light-text);
        }
        
        .business-card {
            width: 100%;
            background: var(--primary-dark);
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            position: relative;
            border: 1px solid var(--border-color);
            min-height: 100vh;
        }
        
        .card-header {
            background: linear-gradient(135deg, #e6f2ff, #cce5ff); /* Light blue gradient */
            padding: 30px 20px 70px;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        .card-header::after {
            content: "";
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 40px;
            background: var(--primary-dark);
            border-radius: 50%;
            z-index: 2;
        }
        
        .card-logo {
            width: 150px;
            height: auto;
            margin-bottom: 15px;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
        }
        
        .profile-container {
            position: relative;
            z-index: 3;
            margin-top: -75px;
            margin-bottom: 15px;
        }
        
        .profile-picture {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 4px solid var(--primary-dark);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            margin: 0 auto;
            overflow: hidden;
            background: linear-gradient(135deg, var(--accent-blue), var(--accent-teal));
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .card-body {
            padding: 20px;
            position: relative;
        }
        
        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-align: center;
            margin-bottom: 5px;
        }
        
        .card-subtitle {
            font-size: 16px;
            text-align: center;
            color: #a8c7fa;
            margin-bottom: 20px;
            font-weight: 400;
            letter-spacing: 0.5px;
        }
        
        .divider {
            height: 1px;
            background: var(--border-color);
            width: 80%;
            margin: 0 auto 20px;
        }
        
        .connect-title {
            text-align: center;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
            color: #8aa8d8;
            font-weight: 500;
        }
        
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin-bottom: 25px;
        }
        
        .social-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.08);
            transition: all 0.3s ease;
            border: 1px solid var(--border-color);
            overflow: hidden;
        }
        
        .social-icon img {
            width: 28px;
            height: 28px;
            object-fit: contain;
        }
        
        .social-icon:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .instagram:hover {
            background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
        }
        
        .facebook:hover {
            background: #3b5998;
        }
        
        .contact-list {
            margin-bottom: 20px;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            margin-bottom: 10px;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .contact-item:hover {
            background: rgba(42, 126, 146, 0.15);
            transform: translateX(5px);
            border-color: rgba(44, 94, 146, 0.4);
        }
        
        .contact-icon {
            width: 35px;
            height: 35px;
            border-radius: 8px;
            background: linear-gradient(135deg, var(--accent-blue), var(--accent-teal));
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            flex-shrink: 0;
            font-size: 16px;
        }
        
        .contact-details {
            flex-grow: 1;
        }
        
        .contact-type {
            font-size: 11px;
            text-transform: uppercase;
            color: #8aa8d8;
            letter-spacing: 1px;
            margin-bottom: 3px;
        }
        
        .contact-value {
            font-size: 14px;
            font-weight: 500;
        }
        
        .save-button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, var(--accent-blue), var(--accent-teal));
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .save-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }
        
        .save-icon {
            margin-right: 10px;
            font-size: 18px;
        }
        
        .logo-section {
            text-align: center;
            margin-bottom: 15px;
        }
        
        .logo-title {
            font-size: 14px;
            color: #2c5e92;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 10px;
            font-weight: 600;
        }
        
        @media (max-width: 480px) {
            .business-card {
            }
            
            .card-header {
                padding: 25px 15px 60px;
            }
            
            .card-title {
                font-size: 22px;
            }
            
            .contact-item {
                padding: 10px 12px;
            }
            
            .contact-value {
                font-size: 13px;
            }
            
            .social-icons {
                gap: 20px;
            }
            
            .card-logo {
                width: 100px;
            }
        }
    </style>
</head>

<body>
    <div class="business-card">
        <div class="card-header">
            <div class="logo-section">
                <img src="logo_img/client_logo/bahamasdentalinstitute-l.png" alt="Bahamas Dental Institute Logo" class="card-logo">
                <!-- <div class="logo-title">ESTABLISHED 2010</div> -->
            </div>
        </div>
        
        <div class="profile-container">
            <div class="profile-picture">
                <img src="profile_img/client_profile/bahamasdentalinstitute-p.png" alt="The Bahamas Dental Institute">
            </div>
        </div>
        
        <div class="card-body">
            <h1 class="card-title">The Bahamas Dental Institute</h1>
            <p class="card-subtitle">Dental Clinic</p>
            <p class="card-subtitle" style="font-weight:bold;">Dr. Lakeisha Chisholm DDS, MPH</p>
            
            <div class="divider"></div>
            
            <p class="connect-title">Connect With Us</p>
            <div class="social-icons">
                <a href="https://www.instagram.com/thebahamasdentalinstitute/" target="_blank" class="social-icon instagram">
                    <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram">
                </a>
                <a href="https://www.facebook.com/people/The-Bahamas-Dental-Institute/100065529668337/" target="_blank" class="social-icon facebook">
                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968764.png" alt="Facebook">
                </a>
                <!-- <a href="mailto:info@bahamasdentalinstitute.com" class="social-icon">
                    <img src="https://cdn-icons-png.flaticon.com/512/646/646094.png" alt="Email">
                </a> -->
            </div>
            
            <div class="contact-list">
                <div class="contact-item" onclick="window.open('tel:2424672599', '_self')">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-details">
                        <div class="contact-type">Phone</div>
                        <div class="contact-value">242-467-2599</div>
                    </div>
                </div>
                <div class="contact-item" onclick="window.open('tel:2426057201', '_self')">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-details">
                        <div class="contact-type">Phone</div>
                        <div class="contact-value">242-605-7201</div>
                    </div>
                </div>
                
                <div class="contact-item" onclick="window.open('https://www.google.com/maps/search/?api=1&query=Bernard+Road,+Nassau,+Bahamas', '_blank')">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-details">
                        <div class="contact-type">Location</div>
                        <div class="contact-value">Bernard Road, Nassau, Bahamas</div>
                    </div>
                </div>
                
                <!-- <div class="contact-item" onclick="window.open('mailto:info@bahamasdentalinstitute.com', '_self')">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-details">
                        <div class="contact-type">Email</div>
                        <div class="contact-value">info@bahamasdentalinstitute.com</div>
                    </div>
                </div> -->
            </div>
            
            <!-- <div class="contact-list">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="contact-details">
                        <div class="contact-type">Business Hours</div>
                        <div class="contact-value">Mon-Fri: 8:30 AM - 5:30 PM</div>
                    </div>
                </div>
            </div> -->
            
            <button class="save-button" onclick="generateVCF()">
                <i class="fas fa-save save-icon"></i>
                SAVE TO CONTACTS
            </button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        async function generateVCF() {
            const contactData = {
                firstName: "The Bahamas Dental Institute",
                lastName: "",
                title: "Dental Clinic",
                phoneWork: "",
                phoneMobile: "2424672599",
                email: "info@bahamasdentalinstitute.com",
                email2: "",
                email3: "",
                website: "https://www.instagram.com/thebahamasdentalinstitute/",
                website2: "https://www.facebook.com/people/The-Bahamas-Dental-Institute/100065529668337/",
                website3: "",
                address: "Bernard Road, Nassau, Bahamas",
                address2: "",
                about: "Premier dental care provider in the Bahamas",
                logo: "https://tapilinq.com/profile_img/client_profile/bahamasdentalinstitute-p.png",
                profileImage: "https://tapilinq.com/profile_img/client_profile/bahamasdentalinstitute-p.png"
            };

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
            if (contactData.website) vcfLines.push(`URL;TYPE=Instagram:${contactData.website}`);
            if (contactData.website2) vcfLines.push(`URL;TYPE=Facebook:${contactData.website2}`);
            if (contactData.website3) vcfLines.push(`URL:${contactData.website3}`);
            if (contactData.address) vcfLines.push(`ADR;TYPE=WORK:;;${contactData.address}`);
            if (contactData.address2) vcfLines.push(`ADR;TYPE=HOME:;;${contactData.address2}`);
            if (contactData.about) vcfLines.push(`NOTE:${contactData.about}`);

            if (photoBase64) {
                vcfLines.push(`PHOTO;ENCODING=b;TYPE=JPEG:${photoBase64}`);
            }

            vcfLines.push("END:VCARD");

            const vcfContent = vcfLines.join('\n');

            const blob = new Blob([vcfContent], { type: 'text/vcard' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `${contactData.firstName.replace(/\s+/g, '_')}.vcf`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        }
    </script>
</body>
</html>