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
            color: #f7d2c9;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            margin-left: 10px;
        }

        .contact-details {
            width: 200px;
            margin-top: 5px;
            font-size: 20px;
            font-weight: normal;
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
            gap: 35px;
            background-color: #000;            
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background:rgb(0, 0, 0);
            display: flex;
            align-items: center;
            justify-content: center;
            color:rgb(255, 255, 255);
            font-size: 18px;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .social-icon:hover {
            background:rgb(0, 0, 0);
            color: white;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sanchez&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container"
        style="background-image:  url('http://localhost/template_master/banner_img/main_banner/template36-b.jpg'); height: 100%; opacity: 1; border-bottom-width: 1px; border-bottom-right-radius: 0%; border-bottom-left-radius: 0%; height: 200px;">
        <div style="position: relative;">
        <!-- Profile Image -->
        <div class="profile-header" style="text-align: center; position: relative; z-index: 90;">
            <img src="http://localhost/template_master/profile_img/main_profile/template36-p.png" alt="Carl Protton" 
                class="profile-image" 
                style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 1px solid white; box-shadow: 0 4px 8px rgba(0,0,0,0.1); ">
        </div>
        <div style="transform: scaleY(-1); margin-top: -80px; position: relative; z-index: 80; margin-left:20px; width:100%">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" style="width: 100%; display: block;">
                <path style="fill: #fff;" d="M0,6V0h1000v100L0,6z"></path>
            </svg>
        </div>
    </div>
        <!-- <div style="transform: scaleY(-1); margin-top: 135px; position: absolute; margin-left:-18px;z-index: 80;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" style="width: 100vw; ">
	            <path style="fill: #fff;" class="elementor-shape-fill" d="M0,6V0h1000v100L0,6z"></path>
                </svg>
            </div>
        <div class="profile-header">
            <img src="http://localhost/template_master/profile_img/main_profile/template36-p.png" alt="Carl Protton" class="profile-image" style="z-index: 999;"> -->
            
            <h1 style="color:rgb(0, 0, 0); font-family: 'Sanchez', sans-serif; text-align: center; margin-top:20px">Mia Sanders</h1>
            <p class="title" style="color:rgb(0, 0, 0); font-size: 13px; text-align: center;background-color: #f9f1ef; margin-bottom:50px">
                CANDLE MAKER + LADY BOSS
            </p>

            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-phone-alt " onclick="window.open('tel:+1234546890', '_self')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d ">000.589.1234</p>
                </div>
            </div>

            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-envelope" onclick="window.open('mailto:protton@gmail.com', '_self')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">helloyour@yoursite.com</p>
                </div>
            </div>

            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-globe" onclick="window.open('https://carlprotton.com', '_blank')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">helloyoursite.com</p>
                </div>
            </div>
            
            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-map-marked" onclick="window.open('https://carlprotton.com', '_blank')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">123 Street Ave,<br>Plam  Springs, CA 002312</p>
                </div>
            </div>

            <div>
                <p style="font-size: 40px; text-align: center; font-weight:400; font-family: 'Times new roman',sans-serif;margin-top:30px">Manhattan</p>
                <p style="font-size: 12px; text-align: center; font-weight:400; font-family: 'Times new roman',sans-serif;margin-top:0px;color: #979797">CLEAN & SIMPLE</p>
            </div>

            <div class="social-icons" style="width: 100%;">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-tiktok"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
            </div>

            <!-- <a href="#" class="save-button" id="saveContact">Save to contact</a>        -->
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