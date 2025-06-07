<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kosala Jayasundara</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
  <style>
    .profile-card {
      background-color: #000;
      color: #fff;
      max-width: 450px;
      width: 100%;
      font-family: 'Montserrat', sans-serif;
      margin: 0 auto;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .profile-banner {
      position: relative;
    }

    .profile-photo {
      width: 100%;
      object-fit: cover;
      filter: brightness(0.79);
      height: 500px;
    }

    .imagepro {
      width: 100%;
      filter: brightness(1.0);
    }

    .profile-info {
      position: absolute;
      bottom: -20px;
      left: 0%;
      transform: translateX(-30%);
      padding-left: 26%;
      margin: 4%;
      z-index: 2;
      color: #ffffff;
      text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
      text-align: left;
    }

    .profile-info h2 {
      font-size: 2rem;
      font-weight: bold;
    }

    .profile-info p {
      font-size: 1.3rem;
      margin-bottom: 20px;
    }

    .profile-contact-icons {
      margin-top: 15px;
      display: flex;
      justify-content: left;
      align-items: center;
      gap: 20px;
      padding: 15px;
    }

    .contact-button {
      border-radius: 50%;
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .contact-button.whatsapp {
      background-color: #ffffff; /* Red circle for WhatsApp */
    }

    .contact-button.phone {
      background-color: #ffffff; /* Blue circle for Phone */
    }

    .contact-button.default {
      background-color: #fff; /* Default white for other buttons */
    }

    .contact-button:hover {
      filter: brightness(0.8); /* Darken on hover for all buttons */
    }

    .contact-icon {
      font-size: 1.5rem;
      color: #000;
    }

    /* gallery */

    .gallery-section {
      padding: 20px;
      background-color: #000;
    }

    .gallery-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 0;
      color: #fff;
      cursor: pointer;
    }

    .gallery-title {
      font-size: 1.2rem;
      font-weight: bold;
    }

    .gallery-toggle {
      font-size: 1.2rem;
    }

    .gallery-container {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 10px;
      margin-top: 10px;
    }

    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 5px;
      aspect-ratio: 1;
      cursor: pointer;
    }

    .gallery-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s;
    }

    .gallery-item:hover .gallery-image {
      transform: scale(1.05);
    }

    /* Lightbox styles */
    .lightbox {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.9);
      z-index: 1000;
      justify-content: center;
      align-items: center;
    }

    .lightbox-content {
      max-width: 90%;
      max-height: 90%;
    }

    .lightbox-image {
      max-width: 100%;
      max-height: 80vh;
      object-fit: contain;
    }

    .lightbox-close {
      position: absolute;
      top: 20px;
      right: 20px;
      color: white;
      font-size: 30px;
      cursor: pointer;
    }

    .lightbox-nav {
      position: absolute;
      width: 100%;
      display: flex;
      justify-content: space-between;
      padding: 0 20px;
      box-sizing: border-box;
    }

    .lightbox-nav button {
      background: none;
      border: none;
      color: white;
      font-size: 30px;
      cursor: pointer;
    }

    /* gallery */
    .about-section {
      padding: 20px;
      background-color: #000;
    }

    .about-section h5 {
      color: #fff;
      margin-bottom: 15px;
    }

    .custom-save-button {
      width: 100%;
      background-color: #fff;
      color: black;
      border: none;
      padding: 15px;
      font-weight: bold;
    }

    .custom-save-button:hover {
      background-color: #229936;
    }

    .footer {
      background-color: #000;
      text-align: center;
      padding: 10px;
    }

    .social-icon {
      font-size: 1.9rem;
      transition: color 0.3s;
    }
  </style>
</head>

<body>
  <div class="profile-card template-9">
    <div class="profile-banner">
      <div class="imagepro">
        <img class="profile-photo" src="profile_img/client_profile/kosala-p.jpg" alt="Kosala Jayasundara">
      </div>
      <div class="profile-info">
        <h2>Kosala Jayasundara</h2>
        <p>Founding CEO</p>
      </div>
    </div>

    <div class="profile-contact-icons">
      <button type="button" class="contact-button whatsapp" title="WhatsApp Message" onclick="window.open('https://call.whatsapp.com/voice/B3OEIEJ3Hq7NQM5vkjxE0S', '_blank')">
        <i class="fab fa-whatsapp contact-icon"></i>
      </button>
      <button type="button" class="contact-button phone" title="Call Sri Lanka Number" onclick="window.open('tel:+94775555174', '_self')">
        <i class="fas fa-phone-alt contact-icon"></i>
      </button>
      <button type="button" class="contact-button default" onclick="window.open('mailto:kosala@exceltch.com', '_self')">
        <i class="fas fa-envelope contact-icon"></i>
      </button>
      <button type="button" class="contact-button default" onclick="window.open('https://www.exceltch.com', '_blank')">
        <i class="fas fa-globe contact-icon"></i>
      </button>
  <!-- Operational Office: Kadawatha, Sri Lanka -->
  <button type="button" class="contact-button default" title="Operational Office: 521/A2, Gonahena Road, Rammuthugala, Kadawatha, 11850, Sri Lanka" onclick="window.open('https://www.google.com/maps/place/521%2FA2,+Gonahena+Road,+Rammuthugala,+Kadawatha+11850,+Sri+Lanka', '_blank')">
    <i class="fas fa-map-marker-alt contact-icon"></i>
  </button>
  <!-- Head Office: Tallinn, Estonia -->
  <button type="button" class="contact-button default" title="Head Office: ExcelTech OÜ, Ahtri tn 12, Kesklinna linnaosa, 10151 Tallinn, Estonia" onclick="window.open('https://www.google.com/maps/place/Ahtri+tn+12,+10151+Tallinn,+Estonia', '_blank')">
    <i class="fas fa-map-marker-alt contact-icon"></i>
  </button>
</div>

    <!--
    <div class="gallery-section">
      <div class="gallery-header" onclick="toggleGallery()">
        <div class="gallery-title">Gallery</div>
        <div class="gallery-toggle" id="galleryToggle">
          <i class="fas fa-minus"></i>
        </div>
      </div>
      <div class="gallery-container" id="galleryContainer">
        <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g1.jpg')">
          <img src="gallery_img/main_gallerys/t6g1.jpg" alt="Gallery Image 1" class="gallery-image">
        </div>
        <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g2.jpg')">
          <img src="gallery_img/main_gallerys/t6g2.jpg" alt="Gallery Image 2" class="gallery-image">
        </div>
        <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g3.jpg')">
          <img src="gallery_img/main_gallerys/t6g3.jpg" alt="Gallery Image 3" class="gallery-image">
        </div>
        <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g4.jpg')">
          <img src="gallery_img/main_gallerys/t6g4.jpg" alt="Gallery Image 4" class="gallery-image">
        </div>
        <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g5.jpg')">
          <img src="gallery_img/main_gallerys/t6g5.jpg" alt="Gallery Image 5" class="gallery-image">
        </div>
        <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g6.jpg')">
          <img src="gallery_img/main_gallerys/t6g6.jpg" alt="Gallery Image 6" class="gallery-image">
        </div>
      </div>
    </div>

    <div class="lightbox" id="lightbox">
      <span class="lightbox-close" onclick="closeLightbox()">×</span>
      <div class="lightbox-nav">
        <button onclick="changeImage(-1)">❮</button>
        <button onclick="changeImage(1)">❯</button>
      </div>
      <div class="lightbox-content">
        <img id="lightbox-image" class="lightbox-image" src="" alt="">
      </div>
    </div>
    <div class="about-section">
      <div class="container">
        <div class="rounded-4 p-4 mx-auto" style="background-color: #363636; max-width: 600px;">
          <h5 class="text-center">About Us</h5>
          <p class="text-center text-light mb-0">Hi. I am Michael, working as marketing manager.</p>
        </div>
      </div>
    </div>
    -->
    <br>
    <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px; text-align: center;">CONNECT WITH SOCIAL
      MEDIA</p>
    <div class="d-flex flex-wrap justify-content-center">
      <a href="https://www.linkedin.com/in/kosala-jayasundara/" target="_blank" rel="noopener noreferrer" class="m-3">
        <img src="Images/Social_Media_Icon/linkedin.png" alt="LinkedIn" style="width: 50px; height: 50px;">
      </a>
      <a href="https://www.instagram.com/kosijaya?igsh=MTMxN2doaHVra3dmZw==" target="_blank" rel="noopener noreferrer"
        class="m-3">
        <img src="Images/Social_Media_Icon/instagram.png" alt="Instagram" style="width: 50px; height: 50px;">
      </a>
      <a href="https://www.facebook.com/share/15QLWjoBht/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer"
        class="m-3">
        <img src="Images/Social_Media_Icon/facebook.png" alt="Facebook" style="width: 50px; height: 50px;">
      </a>
      <div class="d-flex flex-wrap justify-content-center">
        <a href="https://www.youtube.com/@kosalajayasundara6785" target="_blank" rel="noopener noreferrer" class="m-3">
          <img src="Images/Social_Media_Icon/youtube.png" alt="YouTube" style="width: 50px; height: 50px;">
        </a>
      </div>
      <!--
        <a href="https://www.tiktok.com/@yourprofile" target="_blank" rel="noopener noreferrer" class="m-3">
          <img src="Images/Social_Media_Icon/tiktok.png" alt="TikTok" style="width: 50px; height: 50px;">
        </a>
        <a href="https://twitter.com/yourprofile" target="_blank" rel="noopener noreferrer" class="m-3">
          <img src="Images/Social_Media_Icon/twitter.png" alt="Twitter" style="width: 50px; height: 50px;">
        </a>
        <a href="https://www.yourwebsite.com/social" target="_blank" rel="noopener noreferrer" class="m-3">
          <img src="Images/Social_Media_Icon/social.png" alt="Social" style="width: 50px; height: 50px;">
        </a>
        <a href="https://www.pinterest.com/yourprofile" target="_blank" rel="noopener noreferrer" class="m-3">
          <img src="Images/Social_Media_Icon/pinterest.png" alt="Pinterest" style="width: 50px; height: 50px;">
        </a>
      -->
    </div>
    <br>
    <button class="btn h-100 custom-save-button social-media-button" onclick="generateVCF()">
      <i class="fas fa-save me-2"></i>
      SAVE TO CONTACTS
    </button>

    <div class="footer">
      <p>All rights reserved</p>
    </div>
  </div>

  <script>
    async function generateVCF() {
      // Contact information
      const contactData = {
        firstName: "Kosala",
        lastName: "Jayasundara",
        title: "Founding CEO",
        phoneinternational: "+31629377215",
        phonesrilanka: "+94775555174",
        email: "kosala@exceltch.com",
        email2: "",
        email3: "",
        website: "https://www.exceltch.com",
        website2: "",
        website3: "",
        address1: "ExcelTech OÜ, Harju maakond, Tallinn, Estonia",
        address2: "521, A2 Gonahena Rd, Kadawatha, 11850, Sri Lanka",
        about: "",
        logo: "https://tapilinq.com/profile_img/client_profile/kosala-p.jpg",
        profileImage: "https://tapilinq.com/profile_img/client_profile/kosala-p.jpg"
      };

      // Initialize Base64 image variable
      let base64Image = "";

      // Attempt to fetch and convert profile image to Base64
      try {
        const response = await fetch(contactData.profileImage, {
          mode: 'cors' // Handle CORS
        });

        if (response.ok) {
          const blob = await response.blob();
          const reader = new FileReader();

          // Convert blob to Base64
          await new Promise((resolve, reject) => {
            reader.onload = () => {
              base64Image = reader.result.split(',')[1]; // Remove data:image/jpeg;base64, prefix
              resolve();
            };
            reader.onerror = () => {
              console.error("Failed to convert image to Base64");
              resolve(); // Proceed without image
            };
            reader.readAsDataURL(blob);
          });
        } else {
          console.error("Failed to fetch profile image:", response.status);
        }
      } catch (error) {
        console.error("Error processing profile image:", error);
      }

      // Create VCF content
      let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=INTERNATIONAL,VOICE:${contactData.phoneinternational}
TEL;TYPE=SRILANKA,VOICE:${contactData.phonesrilanka}
EMAIL:${contactData.email}
${contactData.email2 ? `EMAIL:${contactData.email2}` : ''}
${contactData.email3 ? `EMAIL:${contactData.email3}` : ''}
URL:${contactData.website}
${contactData.website2 ? `URL:${contactData.website2}` : ''}
${contactData.website3 ? `URL:${contactData.website3}` : ''}
ADR;TYPE=WORK:;;${contactData.address1};;;;
${contactData.address2 ? `ADR;TYPE=HOME:;;${contactData.address2};;;;` : ''}
NOTE:${contactData.about}
${base64Image ? `PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}` : `PHOTO;VALUE=URL:${contactData.profileImage}`}
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
  </script>
</body>

</html>