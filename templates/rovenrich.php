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
            background-color: #b61c1c;
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
            width: 250px;
            height: 250px;
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
            background-color: rgb(230, 68, 46);
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .save-button:hover {
            background-color:rgb(218, 31, 7);
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
            text-decoration: none;
        }

        .contact-d {
            color: white;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            text-decoration: none;
            
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
            color:rgb(0, 0, 0);
            font-size: 18px;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .social-icon:hover {
            background:rgb(238, 97, 92);
            color: white;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="container">
        <header class="profile-header">
            <img src="profile_img/client_profile/rovenrich1-p.png" alt="Carl Protton" class="profile-image">
            <h1 style="color: white;"> Niranjala Udagama</h1>
            <p class="title" style="color: white; font-size: 13px; text-transform: uppercase;">
            156A, Shalawa road, Mirihana, Nugegoda.
            </p>


            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-mobile-alt" onclick="window.open('tel:+94716529934', '_self')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">+94 716529934</p>
                </div>
            </div>

            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-envelope" onclick="window.open('mailto:Rovenrich@outlook.com', '_self')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">Rovenrich@outlook.com</p>
                </div>
            </div>

           
            <p style="color:white">Connect with me on</p>
            <br>
            <div class="social-icons">
                <a href="https://www.facebook.com/share/16N3HwxMYD/?mibextid=qi2Omg" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/rovenrich?igsh=MWh2YWcxaHZvNmw5cw==" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="https://www.tiktok.com/@rovenrichcakes?_t=ZS-8w6DFvnymOo&_r=1" class="social-icon"><i class="fab fa-tiktok"></i></a>
            </div>
            <a href="#" class="save-button" id="saveContact">Save to contact</a>
        </header>

        <section class="about-section">
            <!-- <h2 style="color: white;">About Me</h2>
            <p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                ullamcorper mattis,
                pulvinar dapibus leo.</p> -->

            <div class="image-gallery">
                <img src="gallery_img/client_gallerys/rovenrich-g17.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/rovenrich-g1.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/rovenrich-g2.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/rovenrich-g3.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/rovenrich-g4.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/rovenrich-g5.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/rovenrich-g6.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/rovenrich-g7.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/rovenrich-g8.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/rovenrich-g9.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/rovenrich-g10.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/rovenrich-g11.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/rovenrich-g12.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/rovenrich-g13.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/rovenrich-g14.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/rovenrich-g15.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/rovenrich-g16.jpeg" alt="Business man back view">
               
            </div>

            
        </section>
    </div>

    <footer style="color: white;">
        <p>Infive Pvt Ltd. All rights reserved.</p>
    </footer>

    <script>
       document.getElementById('saveContact').addEventListener('click', function(e) {
    e.preventDefault();
    
    // Create VCF content
    const vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:Niranjala Udagama
N:Udagama;Niranjala;;;
ADR:;;156A Shalawa Road;Mirihana;Nugegoda;;Sri Lanka
TEL;TYPE=CELL,VOICE:+94716529934
EMAIL;TYPE=PERSONAL,INTERNET:Rovenrich@outlook.com
URL:carlprotton.com
REV:${new Date().toISOString().split('T')[0].replace(/-/g, '')}
END:VCARD`;
    
    // Create download link
    const blob = new Blob([vcfContent], { type: 'text/vcard' });
    const url = URL.createObjectURL(blob);
    
    const link = document.createElement('a');
    link.href = url;
    link.download = 'Niranjala_Udagama.vcf';
    document.body.appendChild(link);
    link.click();
    
    // Clean up
    document.body.removeChild(link);
    URL.revokeObjectURL(url);
});
    </script>
</body>
</html>