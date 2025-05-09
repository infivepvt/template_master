<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Business Card Template</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <!-- Custom CSS -->
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        /* Paste all the CSS from your Template14.css here */
        .card-container14 {
            max-width: 400px;
            margin: auto;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            font-family: Arial, sans-serif;
            background-color: #1b1a1a;
        }

        .profile-header14 {
            padding: 20px;
            text-align: center;
            background-color: #1b1a1a;
        }

        .custom-logo {
            width: 150px;
            height: 150px;
            opacity: 1;
        }

        .rounded-circle {
            width: 200px;
            margin-top: -30px;
            border: 5px solid white;
        }

        .profile-name {
            font-size: 30px;
            color: rgb(255, 255, 255);

        }

        .job-title {
            font-size: 20px;
            color: rgb(255, 255, 255);

        }

        .custom-save-button14 {
            background: #343333;
            color: rgb(255, 255, 255);
            font-weight: bold;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 15px;
        }

        .profile-contact-icons21 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            justify-content: center;
            padding: 10px;
        }

        .profile-contact-icons21 button {
            display: flex;
            align-items: center;
            color: #000;          
            background-color: #333333;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 0.8rem;
            text-align: start;
            cursor: pointer;
        }
        .profile-contact-icons21 button:hover {
            background-color:rgb(70, 69, 69);  /* slightly darker on hover */
        }
        .contact-icon {
            min-width: 20px;
            font-size: 1.5rem;
            color: white;
        }

        .about-section {
            padding: 20px;
            background-color: #1b1a1a;
        }

        .about-section h5 {
            font-size: 1.25rem;
        }

        .youtube-section iframe {
            width: 100%;
            height: 315px;
        }

        .gallery-preview {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            padding: 10px;
        }

        .gallery-item {
            position: relative;
            width: 150px;
            height: 150px;
            cursor: pointer;
        }

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .footer {
            text-align: center;
            padding: 10px;
            background-color: #1b1a1a;
            color: white;
        }

        .fw {
            text-align: center;
            margin: 10px 0;
        }
        .social-media-section {
            padding: 15px;
            text-align: center;
        }

        
    </style>
</head>

<body>

    <div class="card-container14 text-center">
        <!-- Profile Header -->
        <div class="profile-header14">
            <img src="logo_img/client_logo/travelglobal-l.png" alt="Company Logo" class="custom-logo" />
            <div class="profile-header14 mt-3">
                <img src="profile_img/client_profile/travelglobal-p.png" alt="Profile Image" class="rounded-circle" />
            </div>
            <h2 class="profile-name">Ramzi Reyal</h2>
            <p class="job-title">Director</p>
            <button class="custom-save-button14" id="saveToContacts"><i class="fas fa-save me-2"></i>SAVE TO CONTACTS</button>
        </div>

        <!-- Contact Icons -->
        <div class="profile-contact-icons21">
            <button type="button" onclick="window.open('tel:077731233', '_self')">
                <i class="fas fa-phone me-2" style="transform: rotate(90deg);"></i>
                <span>077731233</span>
            </button>
            <button type="button" onclick="window.open('mailto:ramzi@travellerleisure.com', '_self')">
                <i class="fas fa-envelope me-2"></i>
                <span>ramzi@travellerleisure.com</span>
            </button>
            <button type="button" onclick="window.open('mailto:ramzi.reyal@gmail.com', '_self')">
                <i class="fas fa-envelope me-2"></i>
                <span>ramzi.reyal@gmail.com</span>
            </button>
            <button type="button" onclick="window.open('https://wa.me/94777311233', '_blank')">
                <i class="fab fa-whatsapp" style="text-decoration: none;"></i>
                <span>&nbsp; &nbsp;0777311233</span>
            </button>
        </div>
        <div class="profile-contact-icons21">
        <button type="button" onclick="window.open('https://chats.viber.com/?number=94777311233', '_blank')">
            <i class="fab fa-viber" style="text-decoration: none;"></i>
            <span>&nbsp; &nbsp;0777311233</span>
        </button>
        </div>
        <!-- Gallery -->
        <!-- <div class="gallery-preview">
            <div class="gallery-item">
                <img src="gallery_img/main_gallerys/t6g1.jpg" alt="Gallery Image" class="gallery-image" />
            </div>
            <div class="gallery-item">
                <img src="gallery_img/main_gallerys/t6g2.jpg" alt="Gallery Image" class="gallery-image" />
            </div>
        </div> -->

        <!-- Social Media -->
        <div class="social-media-section">
            <div class="d-flex flex-wrap justify-content-center">
                <a href="#" target="_blank" rel="noopener noreferrer" class="m-1">
                    <i class="fab fa-facebook" style="color: #1877f2; font-size: 2rem;"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="m-1">
                    <i class="fab fa-instagram" style="color: #e1306c; font-size: 2rem;"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="m-1">
                    <i class="fab fa-twitter" style="color: #1da1f2; font-size: 2rem;"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="m-1">
                    <i class="fab fa-linkedin" style="color: #0077b5; font-size: 2rem;"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="m-1">
                    <i class="fab fa-youtube" style="color: #ff0000; font-size: 2rem;"></i>
                </a>
            </div>
        </div>
        <!-- About Section -->
        <div class="about-section">
            <div style="border: 2px solid rgb(255, 255, 255); padding: 10px;">
                <h5 style="color:white;">About Us</h5>
                <p style="color:white;">Welcome to Traveller Global Destination & Leisure Holidays,
 where our proud legacy since 2004 reflects our passion for
 creating unforgettable travel experiences. As Chairman, I am
 honoured to lead a company that has consistently set
 benchmarks in providing unparalleled travel experiences, both
 in Sri Lanka and globally</p>
            </div>
        </div>
        <!-- Footer -->
        <div class="footer">
            <p>All rights reserved</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <script>
        document.getElementById('saveToContacts').addEventListener('click', function() {
            // Create vCard content
            const vCardData = `BEGIN:VCARD
VERSION:3.0
FN:Ramzi Reyal
TITLE:Director
TEL;TYPE=WORK,VOICE:077731233
EMAIL:ramzi@travellerleisure.com
URL:https://www.yourwebsiteaddress.com
ADR;TYPE=WORK:;;
NOTE:
END:VCARD`;

            // Create a Blob with the vCard data
            const blob = new Blob([vCardData], { type: 'text/vcard' });
            
            // Create a download link
            const url = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.href = url;
            link.download = 'Ramzi.vcf';
            
            // Trigger the download
            document.body.appendChild(link);
            link.click();
            
            // Clean up
            document.body.removeChild(link);
            URL.revokeObjectURL(url);
            
        });
    </script> -->

    <script>
    document.getElementById('saveToContacts').addEventListener('click', function() {
        // Create vCard content with photo
        const vCardData = `BEGIN:VCARD
VERSION:3.0
FN:Ramzi Reyal
TITLE:Director
TEL;TYPE=WORK,VOICE:077731233
EMAIL:ramzi@travellerleisure.com
URL:https://www.yourwebsiteaddress.com
ADR;TYPE=WORK:;;;
NOTE:
PHOTO;profile_img/client_profile/travelglobal-p.png
END:VCARD`;


        // Create a Blob with the vCard data
        const blob = new Blob([vCardData], { type: 'text/vcard' });
        
        // Create a download link
        const url = URL.createObjectURL(blob);
        const link = document.createElement('a');
        link.href = url;
        link.download = 'Ramzi_Reyal.vcf';
        
        // Trigger the download
        document.body.appendChild(link);
        link.click();
        
        // Clean up
        document.body.removeChild(link);
        URL.revokeObjectURL(url);
    });
</script>

</body>

</html>