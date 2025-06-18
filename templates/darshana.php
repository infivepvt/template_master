<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Carl Protton - Business Card</title>
    <style>
        /* Basic reset and styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
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
            background-color: white;
        }

        h1,
        h2 {
            color: #222;
            margin-bottom: 10px;
        }

        .title {
            font-weight: normal;
            margin-bottom: 20px;
        }

        /* About section */
        .about-section {
            text-align: center;
            margin: 40px 0;
        }

        .about-section p {
            max-width: 600px;
            margin: 0 auto 30px;
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
            font-weight: bold;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .save-button:hover {
            background-color: #1a252f;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            color: #777;
            font-size: 14px;
        }

        /* editable */
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
        }

        .contact-details {
            width: 200px;
            margin-top: 5px;
            font-size: 20px;
            font-weight: bold;
            text-align: start;
            margin-left: 40px;
        }

        .contact-d {
            color: white;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="container">
        <header class="profile-header">
            <img src="profile_img/client_profile\darshana-p.png" alt="Carl Protton" class="profile-image">
            <h1 style="color: white;">Darshana Saman <br> Kumara</h1>
            <p class="title" style="color: white; font-size: 15px; text-transform: uppercase;">
                Alpin Construction & Consultation
            </p>
            <p class="title" style="color: white; font-size: 13px;">
                Inspired and powered by quality
            </p>

            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-mobile-alt" onclick="window.open('tel:0771132940', '_self')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">+94 77 113 2940</p>
                </div>
            </div>

            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-envelope" onclick="window.open('mailto:darashana555@gmail.com', '_self')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">darashana555@gmail.com</p>
                </div>
            </div>

            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fab fa-facebook"
                        onclick="window.open('https://www.facebook.com/darshana.saman.96592', '_blank')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">facebook</p>
                </div>
            </div>
            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fab fa-linkedin"
                        onclick="window.open('https://www.linkedin.com/in/darshana-saman-kumara-610236368?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app', '_blank')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">linkedin</p>
                </div>
            </div>
            <!-- <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-globe" onclick="window.open('$', '_blank')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">carlprotton.com</p>
                </div>
            </div> -->
        </header>

        <section class="about-section">
            <h2 style="color: white;">About Me</h2>
            <p style="color: white;">With over five years of hands-on experience in residential and commercial tile installation
and plumbing work (since 1972), I have developed a solid foundation in delivering high-quality
craftsmanship and ensuring customer satisfaction in every project.</p>

            <div class="image-gallery">
                <img src="logo_img\client_logo\darshana-l.png" alt="Business man back view" style="height: 200px;;">
            </div>

            <a href="#" class="save-button" id="saveContact">Save to contact</a>
        </section>
    </div>

    <footer>
        <p>All rights reserved</p>
    </footer>

   <script>
    document.getElementById('saveContact').addEventListener('click', async function (e) {
        e.preventDefault();

        // Get the profile image
        const profileImage = document.querySelector('.profile-image');
        
        // Wait for image to load if needed
        if (!profileImage.complete) {
            await new Promise((resolve) => {
                profileImage.onload = resolve;
            });
        }
        
        // Create canvas and draw image
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');
        canvas.width = profileImage.naturalWidth;
        canvas.height = profileImage.naturalHeight;
        ctx.drawImage(profileImage, 0, 0);
        
        // Convert to base64
        const base64Image = canvas.toDataURL('image/jpeg').split(',')[1];

        // Create VCF content with photo
        const vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:Darshana Saman Kumara
N:Kumara;Darshana;Saman;;;
ORG:Alpin Construction & Consultation
TITLE:Inspired and powered by people
TEL;TYPE=CELL,VOICE:+94 77 113 2940
EMAIL;TYPE=PERSONAL,INTERNET:darashana555@gmail.com
URL;TYPE=WORK:https://www.facebook.com/darshana.saman.96592
URL;TYPE=WORK:https://www.linkedin.com/in/darshana-saman-kumara-610236368
NOTE:Process of seeking advice and guidance (consultation) from experts in the field of construction to plan, design, and execute building projects.
PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}
REV:${new Date().toISOString().split('T')[0].replace(/-/g, '')}
END:VCARD`;

        // Create download link
        const blob = new Blob([vcfContent], { type: 'text/vcard' });
        const url = URL.createObjectURL(blob);

        const link = document.createElement('a');
        link.href = url;
        link.download = 'Darshana_Saman_Kumara.vcf';
        document.body.appendChild(link);
        link.click();

        // Clean up
        document.body.removeChild(link);
        URL.revokeObjectURL(url);
    });
</script>
</body>

</html>