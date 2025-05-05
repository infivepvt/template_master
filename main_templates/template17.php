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
            background-color: rgb(255, 255, 255);
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
            background-color: #16a384;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .save-button:hover {
            background-color: rgb(118, 223, 200);
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
            color: #16a384;
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
            color: black;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
        }
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
           
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #16a384;
            font-size: 18px;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background:rgb(118, 223, 200);
            color: white;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sanchez&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container"
        style="background-image: url('#'); background-color: #16a384; height: 100%; opacity: 1; border-bottom-width: 1px; border-bottom-right-radius: 40%; border-bottom-left-radius: 40%; height: 200px;">
        <div class="profile-header">
            <img src="profile_img/main_profile/template17-p.png" alt="Carl Protton" class="profile-image">
            <h1 style="color: #16a384; font-family: 'Sanchez', sans-serif;">Sophie Mitchell</h1>
            <p class="title" style="color: #4cc0a7; font-size: 13px;">
                Chief Marketing Officer
            </p>

            <h2 style="color: #4cc0a7;">About Me</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                ullamcorper mattis,
                pulvinar dapibus leo.</p>

            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-phone-alt" onclick="window.open('tel:+1234546890', '_self')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">+1 (234) 546 890</p>
                </div>
            </div>

            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-envelope" onclick="window.open('mailto:protton@gmail.com', '_self')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">protton@gmail.com</p>
                </div>
            </div>

            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-globe" onclick="window.open('https://carlprotton.com', '_blank')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">carlprotton.com</p>
                </div>
            </div>
            
            <p>Connect with me on</p>
            <div class="social-icons">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="image-gallery">
                <img src="gallery_img/main_gallerys/t6g4.jpg" alt="Business man back view">
                <img src="gallery_img/main_gallerys/t6g6.jpg" alt="Carl Protton in suit">
            </div>

            <a href="#" class="save-button" id="saveContact">Save to contact</a>
        
        <footer>
            <p>All rights reserved</p>
        </footer>
        </div>
        
    </div>



    <script>
        document.getElementById('saveContact').addEventListener('click', function (e) {
            e.preventDefault();

            // Create VCF content
            const vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:Carl Protton
N:Protton;Carl;;;
ORG:Certificated Accounting Services
TITLE:Certificated Accounting Services
ADR;TYPE=WORK:;;29 e 2nd St;New York;;ny0003;USA
TEL;TYPE=WORK,VOICE:+1 (234) 546 890
EMAIL;TYPE=PERSONAL,INTERNET:protton@gmail.com
URL;TYPE=WORK:carlprotton.com
NOTE:Lorem ipsum dolor sit amet\\, consectetur adipiscing elit. Ut elit tellus\\, luctus nec ullamcorper mattis\\, pulvinar dapibus leo.
REV:${new Date().toISOString().split('T')[0].replace(/-/g, '')}
END:VCARD`;

            // Create download link
            const blob = new Blob([vcfContent], { type: 'text/vcard' });
            const url = URL.createObjectURL(blob);

            const link = document.createElement('a');
            link.href = url;
            link.download = 'Carl_Protton.vcf';
            document.body.appendChild(link);
            link.click();

            // Clean up
            document.body.removeChild(link);
            URL.revokeObjectURL(url);
        });
    </script>
</body>

</html>