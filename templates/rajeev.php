<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital Business Card</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
  <style>
    body {
      font-family: 'roboto sans serif font', sans-serif;
      background-color: #ffffff;
      padding: 0;
      margin: 0;
    }

    .header {
      background-color: white;
      padding: 1rem;
      display: flex;
      align-items: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
      justify-content: center;
      gap: 20px;
    }

    .header h4 {
      font-size: 25px;
      font-weight: bold;
    }


    .header img {
      height: 60px;
      margin-right: 15px;
    }

    .banner {
      width: 100%;
      height: auto;
    }

    .name-section {
      text-align: center;
      margin-top: 1.5rem;
    }

    .name-section h3 {
      font-weight: bold;
      font-size: 32px;
    }


    .divider {
      width: 150px;
      border-top: 2px solid #7f6244;
      margin: 0.5rem auto;
    }

    /* Reduce margin for contact-box */
    .contact-box {
      background-color: white;
      border-radius: 1rem;
      padding: 1rem;
      /* Reduced padding from 2rem 1rem to 1rem */
      margin-bottom: 0.5rem;
      /* Added to reduce vertical spacing */
    }

    /* Reduce margin for contact icons */
    .contact-box .col-4 {
      margin-bottom: 0.25rem;
      /* Reduced from mb-3 (0.75rem) to 0.25rem */
    }

    /* Reduce margin for the <p> tags between sections */
    .section-title {
      font-family: 'Rye', serif;
      font-size: 18px;
      color: #b9904e;
      text-align: center;
      text-transform: uppercase;
      margin: 0.5rem 0;
      /* Reduced from m-3 (1rem) to 0.5rem */
    }

    /* Reduce margin for social media icons */
    .social-icons a {
      margin: 0.5rem;
      /* Reduced from m-3 (1rem) to 0.5rem */
    }

    /* Adjust the 'Connect with Social Media' text */
    .connect-text {
      font-family: 'Montserrat', sans-serif;
      font-size: 15px;
      margin-top: -5px;
      /* Adjusted from -10px to -5px for slight spacing */
      text-align: center;
      font-weight: bold;
    }

    .contact-icon {
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
      color: #7f6244;
    }


    .small-text {
      font-size: 16px;
      color: black;
    }

    .social-icon {
      font-size: 1.9rem;
      transition: color 0.3s;
    }

    .list-group-item {
      background-color: #333;
      color: #fff;
      border-radius: 8px;
      margin-bottom: 2px;
      border: 1px solid #444;
      padding: 15px 15px;
    }

    .list-group-item:hover {
      background-color: #444;
      border-color: #666;
      transition: background-color 0.3s, border-color 0.3s;
    }

    .list-group-item {
      background-color: #333;
      color: #fff;
      border-radius: 8px;
      margin-bottom: 10px;
      border: 1px solid #444;
      padding: 10px 15px;
    }

    .list-group-item:hover {
      background-color: #444;
      border-color: #666;
      transition: background-color 0.3s, border-color 0.3s;
    }

    .custom-save-button {
      background: linear-gradient(90deg, rgb(0, 0, 0), rgb(0, 0, 0));
      color: white;
      font-weight: bold;
      border: none;
      padding: 5px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background 0.3s;
    }

    .custom-save-button:hover {
      background: linear-gradient(90deg, rgb(63, 63, 63), rgb(56, 56, 56));
      color: white;
    }
  </style>
</head>

<body>

  <!-- Header: Logo + Hotel Name -->
  <div class="header">
    <img src="logo_img/client_logo/rayatty-l.png" alt="Logo" />
    <img src="logo_img/client_logo/avenddra-l.png" alt="Logo" />
    <!-- <h4 class="mb-0">Big Bang Hotel</h4> -->
  </div>
  <div>
    <h4 class="mb-0 text-center" style="font-size:16px;text-transform: uppercase;">Rayatty imports and exports private
      limited (sri lanka) <br>Avenddra trading private <br>limited (india)</h4>
  </div><br>

  <!-- Banner Image -->
  <img src="banner_img/client_banner/M. Rajeev-b.jpg" alt="Banner" class="banner" />

  <!-- Name & Title -->
  <div class="name-section">
    <h3>M. RAJEEV</h3>
    <div class="divider"></div>
    <p class="text-muted">Director</p>
    <p class="small-text">
      Yatiyantota,Sri Lanka
    </p>
  </div>

  <!-- Contact Icons -->
  <div class="container my-2"> <!-- Reduced my-4 to my-2 -->
    <p class="section-title">Rayatty</p>
    <div class="row text-center contact-box mx-1">
      <div class="col-4" onclick="window.open('https://wa.me/message/YQWMY2ABWLICH1', '_blank')">
        <i class="fab fa-whatsapp contact-icon"></i><br />
        <span>Whatsapp</span>
      </div>
      <div class="col-4">
        <i class="fas fa-envelope contact-icon" onclick="window.open('mailto:Info@rayatty.com ', '_self')"></i><br />
        <span>E-mail</span>
      </div>
      <div class="col-4" onclick="window.open('https://rayatty.com/', '_blank')">
        <i class="fas fa-globe contact-icon"></i><br />
        <span>Website</span>
      </div>
    </div>
    <p class="small-text text-center">
      India
    </p>
    <p class="section-title">Avenddra</p>
    <div class="row text-center contact-box mx-1">
      <div class="col-4" onclick="window.open('https://Wa.me/+918220383688', '_blank')">
        <i class="fab fa-whatsapp contact-icon"></i><br />
        <span>Whatsapp</span>
      </div>
      <div class="col-4" onclick="window.open('mailto:Info@avenddra.com', '_self')">
        <i class="fas fa-envelope contact-icon"></i><br />
        <span>E-mail</span>
      </div>
      <div class="col-4" onclick="window.open('https://www.avenddra.com/', '_blank')">
        <i class="fas fa-globe contact-icon"></i><br />
        <span>Website</span>
      </div>
    </div>
  </div>

  <!-- Social Media Icons -->
  <p class="connect-text">CONNECT WITH SOCIAL MEDIA</p>
  <p class="section-title">Rayatty</p>
  <div class="d-flex flex-wrap justify-content-center social-icons">

    <a href="https://www.facebook.com/share/1AByRRYKiQ/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer">
      <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
    </a>


  </div>

  <p class="section-title">Avenddra</p>
  <div class="d-flex flex-wrap justify-content-center social-icons">

    <a href="https://www.facebook.com/profile.php?id=61576584659017" target="_blank" rel="noopener noreferrer">
      <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
    </a>


  </div>

  <br>
  <button class="btn w-100 custom-save-button text-white" onclick="generateVCF()"
    style="font-family: 'Montserrat', sans-serif; font-size:19px; border: 2px solid orange;">
    <img src="Images/Social_Media_Icon/save.png" alt="" style="width: 50px; height: 50px; margin-right:25px;">
    SAVE TO CONTACTS
  </button>
  <!-- Footer -->
  <footer style="text-align: center; padding: 10px; font-size: 14px; color: black;">
    <a href="https://tapilinq.com/" target="_blank" style="text-decoration: none; color: black; font-size: 10px;">
      Made with by Tapilinq | Click now
    </a>
  </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    async function generateVCF() {
        const contactData = {
            firstName: "M. Rajeev",
            lastName: "",
            title: "Director",
            phoneWork: "",
            phoneMobile: "+918220383688",
            email: "Info@rayatty.com",
            email2: "Info@avenddra.com",
            email3: "",
            website: "https://rayatty.com/",
            website2: "https://www.avenddra.com/",
            website3: "",
            address: "",
            address2: "",
            about: "",
            logo: "https://tapilinq.com/logo_img/client_logo/rayatty-l.png",
            profileImage: "https://tapilinq.com/logo_img/client_logo/rayatty-l.png",
            // Social Media Links
            facebook: "https://www.facebook.com/share/1AByRRYKiQ/?mibextid=wwXIfr",
            facebook2: "https://www.facebook.com/profile.php?id=61576584659017",
            twitter: "https://twitter.com/username",
            instagram: "https://instagram.com/username",
            whatsapp: "https://wa.me/1234567890"
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

        // Social Media Links (Using X-SOCIALPROFILE)
        if (contactData.facebook) vcfLines.push(`X-SOCIALPROFILE;TYPE=facebook:${contactData.facebook}`);
        if (contactData.linkedin) vcfLines.push(`X-SOCIALPROFILE;TYPE=linkedin:${contactData.linkedin}`);
        if (contactData.twitter) vcfLines.push(`X-SOCIALPROFILE;TYPE=twitter:${contactData.twitter}`);
        if (contactData.instagram) vcfLines.push(`X-SOCIALPROFILE;TYPE=instagram:${contactData.instagram}`);
        if (contactData.whatsapp) vcfLines.push(`X-SOCIALPROFILE;TYPE=whatsapp:${contactData.whatsapp}`);

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