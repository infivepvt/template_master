<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elizabeth Evelyn - Digital Business Card</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts: Roboto and Dancing Script -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600;700&family=Dancing+Script:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: #ffffff;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .custom-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            margin: 10px auto;
            overflow: hidden;
        }

        .custom-header {
            background-image: url('banner_img/client_banner/skyone-b.jpeg');
            background-size: cover;
            background-position: center;
            height: 250px;
            position: relative;
        }

        .profile-picture {
            position: absolute;
            bottom: -73px;
            left: 50%;
            transform: translateX(-50%);
        }

        .profile-picture img {
            width: 250px;
            height: 250px;
            border: 4px solid #fff;
            border-radius: 50%;
            object-fit: cover;
            animation: fadeIn 0.5s ease-in;
        }

        .card-body {
            padding: 80px 20px 20px;
            text-align: center;
            background-color: #fff;
        }

        .card-title {
            font-family: 'Dancing Script', cursive;
            font-size: 36px;
            font-weight: 700;
            color: #000;
            margin-bottom: 10px;
            animation: fadeInDown 0.5s ease-in;
        }

        .card-subtitle {
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
            text-transform: uppercase;
            color: #7a7a7a;
            margin-bottom: 20px;
            animation: fadeInUp 0.5s ease-in;
        }

        .contact-section {
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-item {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 10px 0;
            animation: fadeInLeft 0.5s ease-in;
        }

        .contact-icon-wrapper {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        .contact-icon {
            font-size: 24px;
            color: #000;
        }

        .contact-text {
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
            color: #000;
            word-break: break-word;
            flex-grow: 1;
            text-align: left;
        }

        .divider {
            height: 2px;
            background-color: #ddd;
            margin: 20px 0;
        }

        .about-section {
            margin: 20px 0;
            text-align: center;
        }

        .about-title {
            font-family: 'Roboto', sans-serif;
            font-size: 24px;
            font-weight: 600;
            color: #000;
            margin-bottom: 10px;
            animation: fadeIn 0.5s ease-in;
        }

        .about-text {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            color: #333;
            animation: fadeIn 0.5s ease-in;
        }

        .social-media-section {
            background-color: #fff2f8;
            padding: 20px;
            height: 60px;
            display: flex;
            align-items: center;        
            justify-content: center;
           
        }

        .social-media-title {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            color: #464646;
            margin-bottom: 15px;
            animation: fadeIn 0.5s ease-in;
        }

        .social-icons-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #000;
            border-radius: 50%;
            transition: transform 0.3s ease;
            text-decoration: none;
        }

        .social-icon:hover {
            transform: scale(1.1);
        }

        .social-icon i {
            font-size: 24px;
            color: #fff;
        }

        .save-button-section {
            padding: 20px;
            $text-align: center;
        }

        .custom-save-button {
            background-color: #000;
            color: #fff;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
            transition: background-color 0.3s ease;
        }

        .custom-save-button:hover {
            background-color: #1a1a1a;
        }

        .custom-save-button i {
            font-size: 20px;
        }

        /* Animations from Elementor */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 767px) {
            .custom-card {
                max-width: 95%;
            }

            .custom-header {
                height: 200px;
            }

            .profile-picture img {
                width: 120px;
                height: 120px;
            }

            .card-body {
                padding-top: 60px;
            }

            .card-title {
                font-size: 28px;
            }

            .card-subtitle {
                font-size: 16px;
            }

            .contact-text {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card custom-card shadow-lg">
            <div class="card-header custom-header text-center">
                <div class="profile-picture">
                    <img src="profile_img/client_profile/skyone-p.jpg" alt="Elizabeth Evelyn" class="rounded-circle">
                </div>
            </div>
            <div class="card-body">
                <br>
                <h2 class="card-title">Razik Salman</h2>
                <p class="card-subtitle">Director</p>
                <div class="contact-section">
                    <div class="contact-item"
                        onclick="window.open('https://maps.app.goo.gl/vjr8EJLRBoz5cYgt9', '_blank')">
                        <div class="contact-icon-wrapper">
                            <i class="fas fa-map-marker-alt contact-icon"></i>
                        </div>
                        <span class="contact-text">No 99/7 F, Donald Perera Mawatha,Kohilawatta,Wellampitiya.
                            10600</span>
                    </div>
                    <div class="contact-item" onclick="window.open('tel:+94777285143', '_self')">
                        <div class="contact-icon-wrapper">
                            <i class="fas fa-mobile-alt contact-icon"></i>
                        </div>
                        <span class="contact-text">0777285143</span>
                    </div>
                    <!-- <div class="contact-item">
                        <div class="contact-icon-wrapper" onclick="window.open('mailto:mahanil@durdans.com', '_self')">
                            <i class="far fa-envelope contact-icon"></i>
                        </div>
                        <span class="contact-text">hello@yoursite.com</span>
                    </div> -->
                    <div class="contact-item" onclick="window.open('https://wa.me/0777285143', '_blank')">
                        <div class="contact-icon-wrapper">
                            <i class="fab fa-whatsapp contact-icon"></i>
                        </div>
                        <span class="contact-text">Chat on WhatsApp</span>
                    </div>
                    <div class="contact-item"
                        onclick="window.open(' https://sky-one-futsal-court-pvt-ltd.business.site/', '_blank')">
                        <div class="contact-icon-wrapper">
                            <i class="fas fa-globe contact-icon"></i>
                        </div>
                        <span class="contact-text">www.skyone.com</span>
                    </div>
                </div>
                <p style="font-size: 18px; font-weight: bold; text-transform:uppercase;">Sky One - Futsal court Pvt Ltd
                </p>
                <div class="about-image-section" style="background-color: #333333; padding: 20px;">
                    <img src="gallery_img/client_gallerys/skyone/skyone-g1.jpg" alt="About Us Image"
                        style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
                </div>
                <br>
                <div class="divider"></div>
                <p style="font-size: 18px; font-weight: bold;">SKY ONE INDUSTRIES PVT LTD</p>
                <div class="about-image-section" style="background-color: #333333; padding: 20px;">
                    <img src="gallery_img/client_gallerys/skyone/skyone-g2.jpg" alt="About Us Image"
                        style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
                </div>
                <div class="contact-section">
                    <div class="contact-item"
                        onclick="window.open('https://maps.app.goo.gl/vjr8EJLRBoz5cYgt9', '_blank')">
                        <div class="contact-icon-wrapper">
                            <i class="fas fa-map-marker-alt contact-icon"></i>
                        </div>
                        <span class="contact-text">No 103/1 , Donald Perera Mawatha,Kohilawatta,Wellampitiya.
                            10600</span>
                    </div>
                    <div class="contact-item" onclick="window.open('tel:+94777285143', '_self')">
                        <div class="contact-icon-wrapper">
                            <i class="fas fa-mobile-alt contact-icon"></i>
                        </div>
                        <span class="contact-text">0777285143</span>
                    </div>
                    <!-- <div class="contact-item">
                        <div class="contact-icon-wrapper" onclick="window.open('mailto:mahanil@durdans.com', '_self')">
                            <i class="far fa-envelope contact-icon"></i>
                        </div>
                        <span class="contact-text">hello@yoursite.com</span>
                    </div> -->
                    <div class="contact-item" onclick="window.open('https://wa.me/0777285143', '_blank')">
                        <div class="contact-icon-wrapper">
                            <i class="fab fa-whatsapp contact-icon"></i>
                        </div>
                        <span class="contact-text">Chat on WhatsApp</span>
                    </div>
                    <!-- <div class="contact-item"
                        onclick="window.open(' https://sky-one-futsal-court-pvt-ltd.business.site/', '_blank')">
                        <div class="contact-icon-wrapper">
                            <i class="fas fa-globe contact-icon"></i>
                        </div>
                        <span class="contact-text">www.skyone.com</span>
                    </div> -->
                </div>
                <div class="divider"></div>
                <div class="about-section">
                    <h3 class="about-title">About Me</h3>
                    <p class="about-text">SKY ONE...<br> contact us : +94777285143</p>
                </div>
                <div class="social-media-section">
                    <div class="social-icons-container">
                        <a href="https://www.facebook.com/p/Sky-One-Futsal-court-Pvt-Ltd-100083097956453/"
                            target="_blank" class="social-icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <!-- <a href="https://twitter.com" target="_blank" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://youtube.com" target="_blank" class="social-icon">
                            <i class="fab fa-youtube"></i>
                        </a> -->
                        <a href="https://www.instagram.com/explore/locations/104458155672138/sky-one-futsal-court-pvt-ltd/"
                            target="_blank" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="save-button-section">
                    <button class="btn custom-save-button" onclick="generateVCF()">
                        <i class="fas fa-save"></i> Save to Contacts
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
       function generateVCF() {
    const contactData = {
        firstName: "Razik",
        lastName: "Salman",
        title: "Director",
        phoneWork: "+94777285143",
        email: "",
        website: "https://sky-one-futsal-court-pvt-ltd.business.site/",
        address: "No 99/7 F, Donald Perera Mawatha, Kohilawatta, Wellampitiya. 10600",
        about: "SKY ONE... contact us : +94777285143",
        profileImage: "profile_img/client_profile/skyone-p.jpg" // Update this path if needed
    };

    // Convert the image to base64
    const convertImageToBase64 = (url) => {
        return new Promise((resolve, reject) => {
            const img = new Image();
            img.crossOrigin = 'Anonymous'; // Handle CORS if needed
            img.onload = () => {
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                canvas.width = img.width;
                canvas.height = img.height;
                ctx.drawImage(img, 0, 0);
                resolve(canvas.toDataURL('image/jpeg').split(',')[1]);
            };
            img.onerror = reject;
            img.src = url;
        });
    };

    // Generate the VCF with the image
    const generateVcfWithImage = async () => {
        try {
            let photoBase64 = '';
            
            // Only try to include photo if profileImage exists
            if (contactData.profileImage) {
                try {
                    photoBase64 = await convertImageToBase64(contactData.profileImage);
                } catch (e) {
                    console.error("Could not load profile image", e);
                }
            }

            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
${contactData.email ? `EMAIL:${contactData.email}` : ''}
URL:${contactData.website}
ADR;TYPE=WORK:;;${contactData.address}
NOTE:${contactData.about}
${photoBase64 ? `PHOTO;ENCODING=b;TYPE=JPEG:${photoBase64}` : ''}
END:VCARD`;

            const blob = new Blob([vcfContent], { type: 'text/vcard' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `${contactData.firstName}_${contactData.lastName}.vcf`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        } catch (error) {
            console.error("Error generating vCard:", error);
            alert("Error generating contact card. Please try again.");
        }
    };

    generateVcfWithImage();
}
    </script>
</body>

</html>