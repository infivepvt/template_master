<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <title>Sanjaya Gurusinghe</title>
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
            margin: 100px auto 20px; /* Moved image down */
            display: block;
            border: 1px solid white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            color: #000000;
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
            background-color: #000000;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .save-button:hover {
            background-color: #000000;
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
            color: #000000;
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
            font-family: 'Roboto', sans-serif; /* Applied Roboto here */
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
            color: #000000;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background: #000000;
            color: #000000;
        }
        
        /* Services section */
        .services-section {
            text-align: center;
            margin: 20px 0;
        }
        
        .services-title {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
            color: #000000;
            font-family: 'Roboto', sans-serif; /* Applied Roboto here */
        }
        
        .services-list {
            display: inline-block;
            text-align: center;
            margin: 10px 0;
        }
        
        .services-list p {
            font-size: 16px;
            margin: 5px 0;
            color: #000000;
            font-weight: bold;
            font-family: 'Roboto', sans-serif; /* Applied Roboto here */
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sanchez&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container"
        style="background-image: url('banner_img/client_banner/gurusinghe-b.jpg?g=0'); background-size: cover; background-position: center; background-color: #16a384; height: 100%; opacity: 1; border-bottom-width: 1px; border-bottom-right-radius: 40%; border-bottom-left-radius: 40%; height: 200px;">
        <div class="profile-header">
            <img src="profile_img/client_profile/gurusinghe-p.jpg" alt="Carl Protton" class="profile-image">
            <h1 style="color: #000000; font-family: 'Sanchez', sans-serif;">K.K.L. Sanjaya Gurusinghe </h1>
            <p class="title" style="color: #000000; font-size: 13px;">
                Managing Director
            </p>
            
            <div class="services-section">
                <div class="services-title">DHS LANKA (pvt) LTD</div>
                <div class="services-list">
                    <p>DHS agriculture products</p>
                    <p>DHS spice products</p>
                    <p>DHS  Fabric and yarn importers</p>
                </div>
            </div>
            
            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-phone-alt" onclick="window.open('tel:+94777891950', '_self')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">+94 77 789 1950</p>
                </div>
            </div>

            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-envelope" onclick="window.open('mailto:dhfashion09@gmail.com ', '_self')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d">dhfashion09@gmail.com</p>
                </div>
            </div>
            <div class="contact-section">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"
                        onclick="window.open('https://maps.google.com/?cid=13660936022572865669', '_blank')"></i>
                </div>
                <div class="contact-details">
                    <p class="contact-d"> No 57, Circular Road, Araliya Uyana, Depanama, Pannipitiya </p>
                </div>
            </div>
            
            <a href="#" class="save-button" id="saveContact" onclick="generateVCF()">Save to contact</a>

            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        async function generateVCF() {
            const contactData = {
                firstName: "Sanjaya",
                lastName: "Gurusinghe",
                title: "Managing Director",
                phoneWork: "+94 77 789 1950",
                phoneMobile: "",
                email: "dhfashion09@gmail.com",
                email2: "",
                email3: "",
                website: "",
                website2: "",
                website3: "",
                address: "No 57, Circular Road, Araliya Uyana, Depanama, Pannipitiya",
                address2: "",
                about: "",
                logo: "https://tapilinq.com/profile_img/client_profile/gurusinghe-p.jpg",
                profileImage: "https://tapilinq.com/profile_img/client_profile/gurusinghe-p.jpg" // Same as logo in this case
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