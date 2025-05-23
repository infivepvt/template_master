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
            width: 150px;
            margin-top: 20px;
            border: 5px solid white;
        }

        .profile-name {
            font-size: 30px;
            color: rgb(255, 255, 255);
            font-family: "poppins", sans-serif;
        }

        .job-title {
            font-size: 16px;
            color: #f2684b;
            font-family: "poppins", sans-serif;
        }

        .custom-save-button14 {
            color: rgb(255, 255, 255);
            font-weight: bold;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 15px;
            background: linear-gradient(90deg, #F2684B 0%, #EF9C4E 100%);
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
            background-color: rgb(70, 69, 69);
            /* slightly darker on hover */
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
            <!-- <img src="logo_img/main_logo/template13-l.png" alt="Company Logo" class="custom-logo" /> -->
            <div class="profile-header14 mt-3">
                <img src="profile_img/client_profile/iconic-p.png" alt="Profile Image" class="rounded-circle" />
            </div>
            <h2 class="profile-name">KAMANI DHARMAWICKRAMA</h2>
            <p class="job-title">FOUNDER/ DIRECTOR </p>
            <button class="custom-save-button14" id="saveToContacts"><i class="fas fa-save me-2"></i>SAVE TO
                CONTACTS</button>
        </div>

        <!-- Contact Icons -->
        <div class="profile-contact-icons21">
            <button type="button" onclick="window.open('tel:0705622633', '_self')">
                <i class="fas fa-phone me-2" style="transform: rotate(90deg);"></i>
                <span>0705622633</span>
            </button>
            <button type="button" onclick="window.open('mailto:contact@iconiceducation.lk', '_self')">
                <i class="fas fa-envelope me-2"></i>
                <span>E-mail </span>
            </button>
            <button type="button" onclick="window.open('https://wa.me/94705622633', '_blank')">
                <i class="fab fa-whatsapp"></i>
                <span>&nbsp;&nbsp;whatsapp</span>
            </button>
            <button type="button" onclick="window.open('http://www.iconiceducation.lk/', '_blank')">
                <i class="fas fa-globe me-2"></i>
                <span>iconiceducation.lk</span>
            </button>
            <button type="button" onclick="window.open('http://www.gurukulaya.com/', '_blank')">
                <i class="fas fa-globe me-2"></i>
                <span>gurukulaya.com</span>
            </button>
        </div>


        <!-- Social Media -->
        <div class="social-media-section">
            <div class="d-flex flex-wrap justify-content-center">
                <a href="https://www.facebook.com/share/1G6GWinbm7/" target="_blank" rel="noopener noreferrer"
                    class="m-1">
                    <i class="fab fa-facebook" style="color:rgb(255, 255, 255); font-size: 2rem; margin-right:15px"></i>
                </a>
                 <a href="https://www.instagram.com/kamanidharmawickrama?igsh=bXE5Y2E0Mm52OGEz" target="_blank" rel="noopener noreferrer" class="m-1">
                    <i class="fab fa-instagram" style="color:rgb(255, 255, 255); font-size: 2rem; margin-right:15px"></i>
                </a>
                <a href="https://www.tiktok.com/@iconic.education?_t=ZS-8waqZO7sUbJ&_r=1" target="_blank" rel="noopener noreferrer" class="m-1">
                    <i class="fab fa-tiktok" style="color:rgb(255, 255, 255); font-size: 2rem; margin-right:15px"></i>
                </a>
            </div>
        </div>
        <!-- Gallery -->
        <div class="gallery-preview">
            <div class="gallery-item">
                <img src="logo_img/client_logo/iconic-l.jpeg" alt="Gallery Image" class="gallery-image" />
            </div>
        </div>
        <!-- About Section -->
        <div class="about-section">
            <div style="padding-top:20px; padding-bottom:5px;">
                <h5 style="color:white;font-size:18px;">Contact Info</h5>
                <p style="color:white;">contact@iconiceducation.lk<br>www.iconiceducation.lk<br>+94 702622633</p>
            </div>
        </div>
        <!-- Footer -->
        <footer style="text-align: center; padding: 10px; font-size: 14px; color: black;">
            <a href="https://tapilinq.com/" target="_blank"
                style="text-decoration: none; color: white; font-size: 10px;">
                Made with by Tapilinq | Click now
            </a>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('saveToContacts').addEventListener('click', async function () {
            try {
                // Get the profile image
                const profileImage = document.querySelector('.rounded-circle');

                // Wait for the image to load if it's not already loaded
                if (!profileImage.complete) {
                    await new Promise((resolve) => {
                        profileImage.onload = resolve;
                        profileImage.onerror = resolve; // Handle error case
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

                // Create vCard content with photo
                const vCardData = `BEGIN:VCARD
VERSION:3.0
FN:KAMANI DHARMAWICKRAMA
TITLE:FOUNDER/DIRECTOR
TEL;TYPE=WORK,VOICE:+94705622633
EMAIL:contact@iconiceducation.lk
URL:http://www.iconiceducation.lk
URL:http://www.gurukulaya.com
ADR;TYPE=WORK:;;Sri Lanka
PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}
NOTE:Iconic Education - contact@iconiceducation.lk
END:VCARD`;

                // Create a Blob with the vCard data
                const blob = new Blob([vCardData], { type: 'text/vcard' });

                // Create a download link
                const url = URL.createObjectURL(blob);
                const link = document.createElement('a');
                link.href = url;
                link.download = 'Kamani_Dharmawickrama.vcf';

                // Trigger the download
                document.body.appendChild(link);
                link.click();

                // Clean up
                document.body.removeChild(link);
                URL.revokeObjectURL(url);

            } catch (error) {
                console.error('Error generating vCard:', error);
                // Fallback to vCard without photo if there's an error
                const vCardData = `BEGIN:VCARD
VERSION:3.0
FN:KAMANI DHARMAWICKRAMA
TITLE:FOUNDER/DIRECTOR
TEL;TYPE=WORK,VOICE:+94705622633
EMAIL:contact@iconiceducation.lk
URL:http://www.iconiceducation.lk
URL:http://www.gurukulaya.com
ADR;TYPE=WORK:;;Sri Lanka
NOTE:Iconic Education - contact@iconiceducation.lk
END:VCARD`;

                const blob = new Blob([vCardData], { type: 'text/vcard' });
                const url = URL.createObjectURL(blob);
                const link = document.createElement('a');
                link.href = url;
                link.download = 'Kamani_Dharmawickrama.vcf';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                URL.revokeObjectURL(url);
            }
        });
    </script>

</body>

</html>