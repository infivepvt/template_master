<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Belleza&family=Poppins:wght@400;700&family=Sono&display=swap"
        rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">

    <style>
        body {
            /* Dark background from the image */
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            /* Align to top */
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            /* Add some padding around the card */
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
            /* Default body font */
            color: #ffffff;
            /* White text */
        }

        .signature-card {
            width: 100%;
            max-width: 500px;
            /* Based on our previous step */
            background-color: #000000;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            /* text-align: center; from here */
        }

        .profile-image-container {
            width: 100%;
            /* Aspect ratio if needed, or rely on img styles */
            margin-bottom: 20px;
            /* Space below the image */
            /* Removed text-align: center; based on request */
            text-align: left;
            /* Ensure content aligns left */
        }

        .profile-image-container img {
            display: block;
            /* Remove extra space below image */
            width: 100%;
            /* Image fills container width */
            height: auto;
            object-fit: cover;
            /* Ensure image covers the area without distortion */
            /* If the image is not 100% width, it will now align left */
        }

        .content-section {
            padding: 0 20px 20px;
            /* Horizontal padding */
            /* No text-align here - child elements will control alignment */
        }

        .name {
            /* Updated styles for CAHAYA DEWI */
            font-family: 'Belleza', sans-serif;
            /* Changed font */
            font-size: 35px;
            /* Changed size */
            font-weight: 700;
            /* Keep bold */
            margin: 0 0 5px 0;
            text-transform: uppercase;
            color: #FFFFFF;
            /* Set color */
            /* text-align: center;  Removed based on request */
        }

        .title {
            /* Updated styles for General Manager */
            font-family: 'Poppins', sans-serif;
            /* Changed font */
            font-size: 16px;
            /* Changed size */
            font-weight: 400;
            /* Keep regular weight */
            color: #CFCFCF;
            /* Set color */
            margin: 0 0 20px 0;
            /* Keep margin-bottom */
            text-transform: capitalize;
            /* text-align: center;  Removed based on request */
        }

        .contact-info {
            text-align: left;
            /* Keep text left-aligned inside */
            margin: 10px auto;
            /* Changed margin to center the block */
            width: fit-content;
            /* Allow the block to shrink to content width to be centered */
        }

        .contact-info p {
            /* Updated styles for Contact Info lines */
            font-family: 'Roboto', sans-serif;
            /* Set font */
            font-size: 17px;
            /* Set size */
            color: #FFFFFF;
            /* Set color */
            margin: 5px 0;
            /* Space between contact lines */
        }

        .contact-info a {
            color: #FFFFFF;
            /* Ensure link color matches paragraph color */
            text-decoration: none;
            /* Remove underline */
            display: inline-block;
            /* Allow padding/margin */
            margin-top: 5px;
            /* Space above email */
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        .contact-label {
            font-weight: 700;
            /* Bold labels like C: and O: */
            margin-right: 5px;
        }

        /* Removed the .divider CSS rule */

        .company-info {
            text-align: left;
            /* Keep text left-aligned inside */
            margin: 10px 0;
            /* Changed margin to align block left */
            width: auto;
            /* Allow block to take full width again */
            /* Removed width: fit-content; */
        }

        .company-info p {
            /* Default styles for Company Info paragraphs */
            margin: 5px 0;
        }

        .company-info p:first-child {
            /* Styles for COMPANY NAME line */
            font-family: 'Poppins', sans-serif;
            /* Set font */
            font-size: 18px;
            /* Set size */
            color: #FFFFFF;
            /* Set color */
            font-weight: 700;
            /* Keep bold */
        }

        .company-info p:last-child {
            /* Styles for Address line */
            font-family: 'Roboto', sans-serif;
            /* Set font */
            font-size: 13px;
            /* Set size */
            color: #FFFFFF;
            /* Set color */
            font-weight: 400;
            /* Ensure not bold */
        }


        .social-icons {
            display: flex;
            justify-content: flex-start;
            /* Align icons to the left */
            align-items: center;
            margin: 20px 0 10px 0;
            /* Space above and below icons */
        }

        .social-icons a {
            /* Styles for social icon circles using Font Awesome */
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: #FFFFFF;
            /* Changed background color to white */
            border-radius: 50%;
            margin: 0 8px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            overflow: hidden;
            color: #000000;
            /* Set icon color to black for visibility on white background */
            font-size: 1.5em;
            /* Ensure Font Awesome icon size */
        }

        /* Styles for Font Awesome icons within the circles */
        .social-icons a i {
            /* No specific styles needed here unless overriding Font Awesome defaults */
        }


        .social-icons a:hover {
            background-color: #cccccc;
            /* Darker background on hover for white circles */
        }

        .social-handle {
            /* Updated styles for @COMPANYSOCIALANAME */
            font-family: 'Sono', sans-serif;
            /* Set font */
            font-size: 19px;
            /* Set size */
            color: #FFFFFF;
            /* Set color */
            margin-top: 10px;
            margin-bottom: 20px;
            /* text-align: center; Removed based on request */
        }

        .save-contact-button {
            display: block;
            /* Make button take full width */
            width: calc(100% - 40px);
            /* Full width minus padding */
            margin: 0 auto 20px auto;
            /* Center button with space below */
            padding: 10px 15px;
            background-color: #333;
            /* Dark background for the button */
            color: #ffffff;
            /* White text */
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            font-weight: 700;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            /* Remove underline for link-styled button */
            transition: background-color 0.3s ease;
        }

        .save-contact-button:hover {
            background-color: #555;
            /* Darker background on hover */
        }

        /* Remove default Bootstrap body padding if present */
        body.modal-open {
            padding-right: 0 !important;
        }
    </style>
</head>

<body>

    <div class="signature-card">
        <div class="profile-image-container">
            <img src="profile_img\client_profile\shalika-p.jpeg" alt="Cahaya Dewi Profile Picture">
        </div>

        <div class="content-section">
            <p class="name">Indigenous Dr Shakila Wickramarathne </p>
            <p class="title">සමස්ත ලංකා හෙලවෙද සංගමයේ වෛද්‍ය ජාත්‍යන්තර සිහෙළවේද වෛද්‍ය සභාවේ අධ්‍යක්ෂිකා.<br>ශ්‍රී
                ශාක්‍යසිංහ සරසවියේ සාමාජික හා විධායක මණ්ඩල සාමාජික ලෝක බෞද්ධ මහා සභාවේ සාමාජික හා රන් සම්මානලාභීනී <br>
                ශ්‍රී ලංකා ජාතික හෙළ පාරම්පරික වෛකල්පික වෛද්‍ය සංගමයේ බස්නාහිර පළාත් අධ්‍යක්ෂිකා...<br>විශ්ව ප්‍රසාදිනී
                ශ්‍රී ජනරංජන සිහෙළ පාරම්පරික දේශීය වෛද්‍ය ශකිලා වික්‍රමරත්න (යෝගීශ්වරී) <br>Reg: SL/ITSMC/0394
                හෙළවෙද/ගම්/මිනු/සිව්/පා/විශ්ව/මනෝ/ගුප්/වෙ/2005/192546</p>

            <div class="contact-info">
                <a href="tel:+94770030912" style="text-decoration: none;"><span class="contact-label">C :</span> +94 77
                    003 0912</a>
                <!-- <p><span class="contact-label">O :</span> +12 345 678 98</p>
                <p><a href="mailto:cahaya@companywebstie.com">cahaya@companywebstie.com</a></p> -->
            </div>
            <br>
            <div class="company-info">
                <p style="font-weight: 700;">යෝගීශ්වරී සුව අසපුව</p>
                <p></p>
            </div>
            <br>

            <div class="social-icons">
                <a href="https://www.facebook.com/share/1Bkybi1qwR/" target="_blank" aria-label="Facebook"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="https://www.facebook.com/groups/3286154368190701/?ref=share&mibextid=NSMWBT" target="_blank"
                    aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.tiktok.com/@yogeeshwari1111?_t=ZS-8x6s8nbGObC&_r=1" target="_blank"
                    aria-label="Twitter"><i class="fab fa-tiktok"></i></a>
                <a href="https://www.instagram.com/yogeeshwari111?igsh=YnJ2OWV5ZnN6bnoz" target="_blank"
                    aria-label="YouTube"><i class="fab fa-instagram"></i></a>
                <!-- <a href="#" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a> -->
            </div>
            <p class="social-handle">@COMPANYSOCIALANAME</p>

        </div>
        <button class="save-contact-button" onclick="generateVCF()">SAVE TO CONTACTS</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        async function generateVCF() {
            // Updated contact information to match your business card
            const contactData = {
                firstName: "Shakila",
                lastName: "Wickramarathne",
                title: "සමස්ත ලංකා හෙලවෙද සංගමයේ වෛද්‍ය ජාත්‍යන්තර සිහෙළවේද වෛද්‍ය සභාවේ අධ්‍යක්ෂිකා",
                phoneCell: "+94 77 003 0912",
                company: "යෝගීශ්වරී සුව අසපුව",
                // Removed unused fields to match your provided HTML
            };

            // Get the profile image
            const profileImage = document.querySelector('.profile-image-container img');

            // Ensure the image is fully loaded
            if (!profileImage.complete) {
                await new Promise((resolve) => {
                    profileImage.onload = resolve;
                    profileImage.onerror = () => {
                        console.error("Failed to load image");
                        resolve(); // Proceed without image if it fails
                    };
                });
            }

            let base64Image = '';
            try {
                // Create canvas and draw image
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                canvas.width = profileImage.naturalWidth;
                canvas.height = profileImage.naturalHeight;
                ctx.drawImage(profileImage, 0, 0);
                // Convert to base64 (JPEG format)
                base64Image = canvas.toDataURL('image/jpeg').split(',')[1];
            } catch (error) {
                console.error("Error processing image:", error);
                // Proceed without image if there's an error
            }

            // Create VCF content
            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
ORG:${contactData.company}
TEL;TYPE=CELL,VOICE:${contactData.phoneCell}
`;

            // Add photo if available
            if (base64Image) {
                vcfContent += `PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}\n`;
            }

            vcfContent += `END:VCARD`;

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
    </script>

</body>

</html>