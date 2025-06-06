<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital Business Card</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Rye&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
      justify-content: center;
      align-items: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
      width: 100%;
    }

    .logo-img {
      height: 60px;
      width: auto;
      margin: 0 10px;
    }

    .header h3 {
      font-family: 'Rye', serif;
      font-size: 35px;
      margin: 0;
      margin-top: 15px;
      color: #b9904e;
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
      .logo-img {
        height: 40px;
        margin: 5px;
      }

      .header h3 {
        font-size: 30px;
      }
    }


    .header img {
      height: 83px;
      width: 83px;
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

    .contact-box {
      background-color: white;
      border-radius: 1rem;
      padding: 2rem 1rem;
      /* box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1); */
    }

    .contact-icon {
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
      color: #b9904e;
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
      background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
      color: white;
      font-weight: bold;
      border: 2px solid #FFA500;
      padding: 12px 20px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Montserrat', sans-serif;
      font-size: 19px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
    }

    .custom-save-button:hover {
      background: linear-gradient(135deg, rgb(20, 41, 54) 0%, rgb(25, 50, 59) 50%, #223f50 100%);
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.6);
      border-color: #ff8c00;
      color: white;
    }
  </style>
</head>

<body>

  <!-- Header: Logo + Hotel Name -->
  <div class="header">
    <div class="d-flex align-items-center justify-content-center flex-wrap">
      <img src="logo_img/client_logo/adhityaayurveda-l2.png" alt="Logo 2" class="logo-img" />
      <img src="logo_img/client_logo/adhityaayurveda-l1.png" alt="Logo 1" class="logo-img" />
      <img src="logo_img/client_logo/adhityaayurveda-l3.png" alt="Logo 3" class="logo-img" />
      <h3 class="mb-0 ms-3">Adhitya Ayurveda</h3>
    </div>
  </div>

  <!-- Banner Image -->
  <img src="banner_img/client_banner/adhityaayurveda-b.jpg" alt="Banner" class="banner" />

  <!-- Name & Title -->
  <div class="name-section">
    <h4 style="color:#5b0e2e;font-weight :bold">Ms.Anushka De Silva  </h4>
    <div class="divider"></div>
    <p class="text-muted">Human Resources Executive </p>
    <p class="small-text">
      No.395/4, Harischandra Mawatha, <br>
      Anuradhapura, Sri Lanka.
    </p>
  </div>

  <!-- Contact Icons -->
  <div class="container my-4">
    <div class="row text-center contact-box mx-1 justify-content-center">
      <div class="col-4 mb-3" onclick="window.open('tel:0717422631 ', '_self')">
        <i class="fas fa-mobile-alt contact-icon"></i><br />
        <span>Call</span>
      </div>
      <div class="col-4 mb-3" onclick="window.open('tel:0252030200', '_self')">
        <i class="fas fa-phone contact-icon"></i><br />
        <span>Office</span>
      </div>
      <div class="col-4 mb-3" onclick="window.open('https://wa.me/94717422631', '_blank')">
        <i class="fab fa-whatsapp contact-icon"></i><br />
        <span>Whatsapp</span>
      </div>
      <div class="col-4 mb-3" onclick="window.open('mailto:anushka@adhitya.lk', '_self')">
        <i class="fas fa-envelope contact-icon"></i><br />
        <span>E-mail </span>
      </div>
      
      <!-- <div class="col-4">
        <i class="fas fa-save contact-icon"></i><br />
        <span>Save</span>
      </div> -->
    </div>
  </div>
  <!-- Social Media Sections -->
<div class="container my-4">
  <!-- Adhitya Ayurveda | Colombo -->
  <div class="d-flex flex-column align-items-center mb-4">
    <p class="m-3" style="font-family: 'Rye', serif; font-size: 18px; color: #b9904e;text-align: center;">Adhitya Ayurveda | Colombo</p>
    <div class="d-flex justify-content-center">
      <a href="https://www.facebook.com/p/Adhitya-Ayurveda-Colombo-100093612950529" target="_blank" rel="noopener noreferrer" class="m-2">
        <img src="Images/Social_Media_Icon/facebook.png" alt="Facebook" style="width: 50px; height: 50px;">
      </a>
      <a href="https://lk.linkedin.com/company/adhitya-ayurveda-colombo" target="_blank" rel="noopener noreferrer" class="m-2">
        <img src="Images/Social_Media_Icon/linkedin.png" alt="LinkedIn" style="width: 50px; height: 50px;">
      </a>
      <a href="https://www.instagram.com/adhitya_ayurveda_colombo/" target="_blank" rel="noopener noreferrer" class="m-2">
        <img src="Images/Social_Media_Icon/instagram.png" alt="Instagram" style="width: 50px; height: 50px;">
      </a>
      <a href="https://www.adhityaayurvedacolombo.com/" target="_blank" rel="noopener noreferrer" class="m-2">
        <img src="Images/Social_Media_Icon/website.png" alt="Location" style="width: 50px; height: 50px;">
      </a>
      <a href="https://maps.app.goo.gl/wGnjiPpPcWANZHSJA" target="_blank" rel="noopener noreferrer" class="m-2">
        <img src="Images/Social_Media_Icon/location.png" alt="Location" style="width: 50px; height: 50px;">
      </a>
      
    </div>
  </div>

  <!-- Adhitya Ayurveda | Anuradhapura -->
  <div class="d-flex flex-column align-items-center mb-4">
    <p class="m-3" style="font-family: 'Rye', serif; font-size: 18px; color: #b9904e;text-align: center;">Adhitya Ayurveda | Anuradhapura</p>
    <div class="d-flex justify-content-center">
      <a href="https://www.facebook.com/adhitya.lk/" target="_blank" rel="noopener noreferrer" class="m-2">
        <img src="Images/Social_Media_Icon/facebook.png" alt="Facebook" style="width: 50px; height: 50px;">
      </a>
      <a href="https://lk.linkedin.com/company/gunawardhana-ayurveda-holdings-pvt-ltd" target="_blank" rel="noopener noreferrer" class="m-2">
        <img src="Images/Social_Media_Icon/linkedin.png" alt="LinkedIn" style="width: 50px; height: 50px;">
      </a>
      <a href="https://www.instagram.com/adhityaayurveda/" target="_blank" rel="noopener noreferrer" class="m-2">
        <img src="Images/Social_Media_Icon/instagram.png" alt="Instagram" style="width: 50px; height: 50px;">
      </a>
      <a href="https://www.adhityaayurveda.com/" target="_blank" rel="noopener noreferrer" class="m-2">
        <img src="Images/Social_Media_Icon/website.png" alt="Location" style="width: 50px; height: 50px;">
      </a>
      <a href="https://maps.app.goo.gl/zvTezL9q8mveAtjbA" target="_blank" rel="noopener noreferrer" class="m-2">
        <img src="Images/Social_Media_Icon/location.png" alt="Location" style="width: 50px; height: 50px;">
      </a>
    </div>
  </div>

  <!-- Mangata | Galle -->
  <div class="d-flex flex-column align-items-center mb-4">
    <p class="m-3" style="font-family: 'Rye', serif; font-size: 18px; color: #b9904e;text-align: center;">Mangata | Galle</p>
    <div class="d-flex justify-content-center">
      <a href="https://www.facebook.com/mangata.galle/" target="_blank" rel="noopener noreferrer" class="m-2">
        <img src="Images/Social_Media_Icon/facebook.png" alt="Facebook" style="width: 50px; height: 50px;">
      </a>
      <a href="https://www.linkedin.com/company/m%C3%A5ngata-galle" target="_blank" rel="noopener noreferrer" class="m-2">
        <img src="Images/Social_Media_Icon/linkedin.png" alt="LinkedIn" style="width: 50px; height: 50px;">
      </a>
      <a href="https://www.instagram.com/mangata.galle/" target="_blank" rel="noopener noreferrer" class="m-2">
        <img src="Images/Social_Media_Icon/instagram.png" alt="Instagram" style="width: 50px; height: 50px;">
      </a>
      <a href="https://www.mangatagalle.com/" target="_blank" rel="noopener noreferrer" class="m-2">
        <img src="Images/Social_Media_Icon/website.png" alt="Location" style="width: 50px; height: 50px;">
      </a>
      <a href="https://maps.app.goo.gl/QYEG7xfrHeHzFPtz6" target="_blank" rel="noopener noreferrer" class="m-2">
        <img src="Images/Social_Media_Icon/location.png" alt="Location" style="width: 50px; height: 50px;">
      </a>
    </div>
  </div>

  <!-- Additional Social Media Links -->
  <div class="d-flex flex-column align-items-center mb-4">
    <p class="m-3" style="font-family: 'Rye', serif; font-size: 18px; color: #b9904e;">Follow Us</p>
    <div class="d-flex justify-content-center">
      <a href="https://x.com/i/flow/login?redirect_after_login=%2FAdhityaAyurveda" target="_blank" rel="noopener noreferrer" class="m-2">
        <img src="Images/Social_Media_Icon/x-2.jpeg" alt="X" style="width: 50px; height: 50px;">
      </a>
      <a href="https://www.youtube.com/channel/UCQpdqOkb7JdxG8OjjzQUpSA" target="_blank" rel="noopener noreferrer" class="m-2">
        <img src="Images/Social_Media_Icon/youtube.png" alt="YouTube" style="width: 50px; height: 50px;">
      </a>
    </div>
  </div>

  <!-- Save Button -->
  <button class="btn w-100 custom-save-button" onclick="generateVCF()">
    <img src="Images/Social_Media_Icon/save.png" alt="Save Icon" style="width: 40px; height: 40px; margin-right: 15px;">
    SAVE TO CONTACTS
  </button>

  <!-- Footer -->
  <footer style="text-align: center; padding: 10px; font-size: 14px; color: black;">
    <a href="https://tapilinq.com/" target="_blank" style="text-decoration: none; color: black; font-size: 10px;">
      Made with by Tapilinq | Click now
    </a>
  </footer>
</div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    async function generateVCF() {
      // Updated contact information to match Ms. Anushka De Silva's business card
      const contactData = {
        firstName: "Anushka",
        lastName: "De Silva",
        title: "Human Resources Executive",
        phoneWork: "0252030200",
        phoneMobile: "0717422631",
        email: "anushka@adhitya.lk",
        website: "https://www.adhityaayurveda.com/",
        website2: "https://www.adhityaayurvedacolombo.com/",
        website3: "https://www.mangatagalle.com/",
        address: "No.395/4, Harischandra Mawatha, Anuradhapura, Sri Lanka",
        about: "Adhitya Ayurveda",
        logo: "logo_img/client_logo/adhityaayurveda-l1.png",
        profileImageUrl: "banner_img/client_banner/adhityaayurveda-b.jpg"
      };

      try {
        // Load the profile image
        const profileImage = new Image();
        profileImage.crossOrigin = "Anonymous";
        profileImage.src = contactData.profileImageUrl;
        
        // Wait for image to load
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
        
        // Create VCF content with base64 image
        let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL:${contactData.phoneMobile}
EMAIL:${contactData.email}
URL:${contactData.website}
URL:${contactData.website2}
URL:${contactData.website3}
ADR;TYPE=WORK:;;${contactData.address}
NOTE:${contactData.about}
PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}
LOGO;ENCODING=b;TYPE=JPEG:${contactData.logo}
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
      } catch (error) {
        console.error("Error generating VCF:", error);
        // Fallback to simple VCF without image if there's an error
        generateSimpleVCF(contactData);
      }
    }

    function generateSimpleVCF(contactData) {
      // Create VCF content without images
      let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL:${contactData.phoneMobile}
EMAIL:${contactData.email}
URL:${contactData.website}
URL:${contactData.website2}
URL:${contactData.website3}
ADR;TYPE=WORK:;;${contactData.address}
NOTE:${contactData.about}
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
</script>


</body>

</html>