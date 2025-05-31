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
            <img src="profile_img\client_profile\p02.jpeg.png" alt="Carl Protton" class="profile-image">
            <h1 style="color: white;">Hasini Weerasinghe</h1>
            <p class="title" style="color: white; font-size: 13px; text-transform: uppercase;">
                Web Developer<br>
                Chandana,<br>
                Pinnawala, Rambukkana
            </p>


            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-mobile-alt" onclick="window.open('tel:+1234546890', '_self')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">+94 71 936 1660</p>
                </div>
            </div>

            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-envelope" onclick="window.open('mailto:protton@gmail.com', '_self')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">weerasinghesadunika@gmail.com</p>
                </div>
            </div>

            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-globe" onclick="window.open('https://carlprotton.com', '_blank')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">infiveprint.com</p>
                </div>
            </div>
        </header>

        <section class="about-section">
            <h2 style="color: white;">About Me</h2>
            <p style="color: white;">Web Developer (Intern) at Infive Pvt Ltd</p>

            <div class="image-gallery">
                <img src="gallery_img/client_gallerys/hasini/hasini01.png" alt="Business man back view">
                <img src="gallery_img/client_gallerys/hasini/hasini2.png" alt="Carl Protton in suit">
            </div>

            <a href="#" class="save-button" id="saveContact">Save to contact</a>
        </section>
    </div>

    <footer>
        <p>All rights reserved</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    async function generateVCF() {
        // Updated contact information to match the business card
        const contactData = {
            firstName: "Hasini",
            lastName: "Weerasinghe",
            title: "Web Developer",
            phoneWork: "+94719361660", // Updated to match the displayed phone number
            phoneMobile: "",
            email: "weerasinghesadunika@gmail.com",
            email2: "",
            email3: "",
            website: "https://infiveprint.com", // Updated to match the displayed website
            website2: "",
            website3: "",
            address: "Chandana, Pinnawala, Rambukkana",
            address2: "",
            about: "Web Developer (Intern) at Infive Pvt Ltd",
            logo: "logo_img/Main_Design-l.png",
            profileImage: "profile_img/client_profile/p02.jpeg.png" // Corrected path
        };

        // Load profile image and convert to base64
        let base64Image = "";
        try {
            const profileImage = new Image();
            profileImage.src = contactData.profileImage;
            
            // Ensure image is fully loaded
            if (!profileImage.complete) {
                await new Promise((resolve) => {
                    profileImage.onload = resolve;
                    profileImage.onerror = () => {
                        console.error("Failed to load profile image");
                        resolve(); // Proceed even if image fails to load
                    };
                });
            }

            // Create canvas and draw image
            const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');
            canvas.width = profileImage.naturalWidth;
            canvas.height = profileImage.naturalHeight;
            ctx.drawImage(profileImage, 0, 0);

            // Convert to base64 (remove the data:image/jpeg;base64, prefix)
            base64Image = canvas.toDataURL('image/jpeg').split(',')[1];
        } catch (error) {
            console.error("Error processing profile image:", error);
        }

        // Create VCF content
        let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL:${contactData.phoneMobile}
EMAIL:${contactData.email}
EMAIL:${contactData.email2}
EMAIL:${contactData.email3}
URL:${contactData.website}
URL:${contactData.website2}
URL:${contactData.website3}
ADR;TYPE=WORK:;;${contactData.address}
ADR;TYPE=HOME:;;${contactData.address2}
NOTE:${contactData.about}
${base64Image ? `PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}` : ""}
LOGO;VALUE=URL:${contactData.logo}
END:VCARD`;

        // Create download link
        const blob = new Blob([vcfContent], { type: 'text/vcard' });
        const url = URL.createObjectURL(blob);

        const a = document.createElement('a');
        a.href = url;
        a.download = `${contactData.firstName}_${contactData.lastName}.vcf`;
        document.body.appendChild(a);
        a.click();

        // Clean up
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    }

    // Attach the generateVCF function to the Save to Contact button
    document.getElementById('saveContact').addEventListener('click', (e) => {
        e.preventDefault(); // Prevent default anchor behavior
        generateVCF();
    });
</script>
</body>
</html>