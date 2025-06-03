<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Allison&family=Dancing+Script:wght@400..700&family=Alumni+Sans+Pinstripe:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <title>Carl Protton - Business Card</title>
    <style>
        /* Basic reset and styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background-color: #000000;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header section */
        .profile-header {
            text-align: center;
            padding: 30px 0;
        }

        .profile-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            display: block;
            border: 5px solid white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            color: #222;
            margin-bottom: 10px;
        }

        .title {
            font-weight: 400;
            margin-bottom: 20px;
            font-size: 18px;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1.2px;
        }

        /* About section */
        .about-section {
            text-align: center;
            margin: 40px 0;
        }

        .about-section p {
            max-width: 600px;
            margin: 0 auto 30px;
            font-size: 16px;
            line-height: 1.8;
            color: #e0e0e0;
        }

        /* Images section */
        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin: 30px 0;
        }

        .image-gallery img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Button */
        .save-button {
            display: block;
            width: 200px;
            margin: 30px auto;
            padding: 12px 20px;
            background-color: #2c3e50;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
            cursor: pointer;
        }

        .save-button:hover {
            background-color: #1a252f;
            transform: translateY(-2px);
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            color: #777;
            font-size: 14px;
            font-weight: 300;
        }

        /* Contact info sections */
        .contact-section {
            display: flex;
            justify-content: center;
            margin: 15px 0;
            margin-right: 50px;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            text-align: center;
            font-size: 24px;
            color: white;
            border: 2px solid #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .contact-icon:hover {
            transform: scale(1.1);
        }

        .contact-details {
            width: 200px;
            margin-top: 5px;
            font-size: 18px;
            font-weight: 500;
            text-align: start;
            margin-left: 40px;
        }

        .contact-d {
            color: #e0e0e0;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 0.5px;
        }

        .gold-text {
            font-size: 28px;
            font-weight: 700;
            text-transform: uppercase;
            color: #debd5e;
            text-shadow: 0 0 5px rgba(255, 215, 0, 0.5);
            position: relative;
            animation: glow 2s ease-in-out infinite alternate;
        }

        .logo-image {
            width: 80px;
            position: absolute;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 5px rgba(255, 215, 0, 0.5), 0 0 10px rgba(255, 174, 0, 0.3);
            }

            to {
                text-shadow: 0 0 10px rgba(255, 215, 0, 0.7), 0 0 15px rgba(255, 174, 0, 0.4);
            }
        }

        @keyframes shine {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100%);
            }
        }

        /* Additional typography enhancements */
        h2 {
            color: white;
            font-weight: 600;
            letter-spacing: 1px;
            font-size: 24px;
        }

        p {
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            line-height: 1.7;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="container">
        <img src="logo_img/client_logo/samafen-l.png" alt="Carl Protton" class="logo-image">
        <header class="profile-header">
            <img src="profile_img/client_profile/samafen-p.png" alt="Carl Protton" class="profile-image">
            <h1 class="gold-text" style="font-family:'Poppins'">Muhammed Imran</h1>
            <p class="title">
                Co-Founder, Chief Visionary<br>
                Officer at Samafen<br>
                Miami, Florida
            </p>
            <p style="margin-top:-10px; color:silver; font-weight: 300;">Pioneers in Maldives Luxury Tourism and Innovators of Ethical Artificial Intelligence</p>

            <div class="contact-section mt-4" onclick="window.open('tel:+17865629709', '_self')">
                <div class="contact-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">+1 786-562-9709</p>
                </div>
            </div>

            <div class="contact-section" onclick="window.open('https://wa.me/+601117887819', '_blank')">
                <div class="contact-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">+60 1117887819</p>
                </div>
            </div>

            <div class="contact-section" onclick="window.open('mailto:imran@samafen.com', '_self')">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">imran@samafen.com</p>
                </div>
            </div>

            <div class="contact-section" onclick="window.open('https://www.samafen.com/', '_blank')">
                <div class="contact-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">www.samafen.com</p>
                </div>
            </div>
        </header>

        <h2 class="text-center">Social Media</h2>

        <div class="row justify-content-center mt-4">
            <div class="col"></div>
            <div class="col d-flex justify-content-center" onclick="window.open('https://www.instagram.com/samafenmaldives?igsh=cWtxaHVscGtydHVo&utm_source=qr', '_blank')">
                <img src="Images/Social_Media_Icon/instagram.png" style="width: 40px;">
            </div>
            <div class="col d-flex justify-content-center" onclick="window.open('https://www.linkedin.com/in/muhammed-imran-bb71601ba?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app', '_blank')">
                <img src="Images/Social_Media_Icon/linkedin.png" style="width: 40px;">
            </div>
            <div class="col"></div>
        </div>

        <section class="about-section mt-5">
            <h2>About Us</h2>
            <p>Experience the Maldives with Samafen, where luxury meets paradise. From breathtaking overwater villas to serene beachfront resorts, we craft unforgettable island getaways just for you!</p>

            <div class="image-gallery">
                <img src="gallery_img/client_gallerys/samafen/samafen-g2.png" alt="Samefen Gallery">
                <img src="gallery_img/client_gallerys/samafen/samafen-g1.png" alt="Samefen Gallery">
            </div>

            <a href="#" class="save-button" id="saveContact" onclick="generateVCF();">Save to contact</a>
        </section>
    </div>

    <footer>
        <p>All rights reserved</p>
    </footer>

    <script>
        async function generateVCF() {
            const contactData = {
                firstName: "Muhammed",
                lastName: "Imran",
                title: "Co-Founder, Chief Visionary",
                phoneWork: "",
                phoneMobile: "+17865629709",
                email: "imran@samafen.com",
                email2: "",
                email3: "",
                website: "https://www.samafen.com/",
                website2: "",
                website3: "",
                address: "",
                address2: "",
                about: "Pioneers in Maldives Luxury Tourism and Innovators of Ethical Artificial Intelligence",
                logo: "https://tapilinq.com/logo_img/client_logo/samafen-l.png",
                profileImage: "https://tapilinq.com/profile_img/client_profile/samafen-p.png"
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