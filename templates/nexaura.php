<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital Business Card</title>
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
      background-color: #fff;
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

    .contact-button:hover {
      background-color: #444444;
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
  </style>
</head>

<body>
  <div class="profile-card template-9">
    <div class="profile-banner">
      <div class="imagepro">
        <img class="profile-photo" src="profile_img/client_profile/nexaura-p.jpeg" alt="Michael Fassbender">
      </div>
      <div class="profile-info">
        <h2>Kasun Thilakarathna</h2>
        <p>Founder and CEO</p>
      </div>
    </div>

    <div class="profile-contact-icons">
      <button type="button" class="contact-button" onclick="window.open('tel:0768890146', '_self')">
        <i class="fas fa-phone contact-icon"></i>
      </button>

      <button type="button" class="contact-button" onclick="window.open('mailto:kasunprabashitha9@gmail.com', '_self')">
        <i class="fas fa-envelope contact-icon"></i>
      </button>

      <button type="button" class="contact-button"
        onclick="window.open('https://www.yourwebsiteaddress.com', '_blank')">
        <i class="fas fa-globe contact-icon"></i>
      </button>

      <button type="button" class="contact-button"
        onclick="window.open('https://www.google.com/maps/search/?api=1&amp;query=919%20Oaktree%20Crescent,%20Newmarket', '_blank')">
        <i class="fas fa-map-marker-alt contact-icon"></i>
      </button>

      <button type="button" class="contact-button"
        onclick="window.open('https://Wa.me/+94768890146', '_blank')">
        <i class="fab fa-whatsapp contact-icon"></i>
      </button>
    </div>
    <!-- gallery -->
    <!-- <div class="gallery-section">
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
    </div> -->

    <!-- Lightbox HTML -->
    <div class="lightbox" id="lightbox">
      <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
      <div class="lightbox-nav">
        <button onclick="changeImage(-1)">&#10094;</button>
        <button onclick="changeImage(1)">&#10095;</button>
      </div>
      <div class="lightbox-content">
        <img id="lightbox-image" class="lightbox-image" src="" alt="">
      </div>
    </div>

    <div class="about-section">
      <div class="container">
        <div class="rounded-4 p-4 mx-auto" style="background-color: #363636; max-width: 600px;">
          <h5 class="text-center">About Us</h5>
          <p class="text-center text-light mb-0">Hi I'm Kasun,Working as CEO and founder of Nexaura pvt.ltd</p>
        </div>
      </div>
      <br>

      <div>
        <img src="banner_img/client_banner/nexaura-b.jpg" width="100%" height="100%" style="border-radius:15px">
      </div><br>

      <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:15px; margin-top:-10px; text-align:center;">CONNECT WITH SOCIAL MEDIA</p>
        <div class="d-flex flex-wrap justify-content-center">
                    <a href="https://www.instagram.com/nexaura_pvt_ltd/?sfnsn=wa" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.facebook.com/share/15GKbU6KuJ/" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://m.youtube.com/@NEXAURA-e4p?sfnsn=wa" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Flinkedin.com%2Fin%2Fhttps%253A%252F%252Fwww.linkedin.com%252Fcompany%252F105782765%252Fadmin%252Fdashboard%252F&h=AT3P0kPeJzMYEOHUdmMgvsjQOE_q4JATsjg5nJNtVhUPVUdZitA1gMRfK6TrXburuSm-yrrflnID_5GzRnMN_4fJBpey_fruBVMDmAPfVGwibkjEPNkaFWmYU85HMJqFyb7vw4rl8yRkQ-0xypWp8y9KaIpZ7UtnyIUa" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>

      <button class="btn h-100 custom-save-button social-media-button" onclick="generateVCF()">
        <i class="fas fa-save me-2"></i>
        SAVE TO CONTACTS
      </button>
    </div>

    <img src="logo_img/client_logo/nexaura-l.png" alt="Logo" width="150" height="150" style="margin-left:120px"/>

    <div class="footer">
      <p>Elevate your brand with digital innovation</p>
    </div>
  </div>

  <script>
    // Gallery images array
    const galleryImages = [
      'gallery_img/main_gallerys/t6g1.jpg',
      'gallery_img/main_gallerys/t6g2.jpg',
      'gallery_img/main_gallerys/t6g3.jpg',
      'gallery_img/main_gallerys/t6g4.jpg',
      'gallery_img/main_gallerys/t6g5.jpg',
      'gallery_img/main_gallerys/t6g6.jpg'
    ];

    let currentImageIndex = 0;

    async function generateVCF() {
            const contactData = {
                firstName: "Kasun",
                lastName: "Thilakarathna",
                title: "Founder and CEO",
                phoneWork: "",
                phoneMobile: "+94768890146",
                email: "kasunprabashitha9@gmail.com",
                email2: "",
                email3: "",
                website: "",
                website2: "",
                website3: "",
                address: "",
                address2: "",
                about: "",
                logo: "https://tapilinq.com/logo_img/client_logo/nexaura-l.png",
                profileImage: "https://tapilinq.com/logo_img/client_logo/nexaura-l.png" // Same as logo in this case
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

    function toggleGallery() {
      const galleryContainer = document.getElementById('galleryContainer');
      const galleryToggle = document.getElementById('galleryToggle');

      if (galleryContainer.style.display === 'none') {
        galleryContainer.style.display = 'grid';
        galleryToggle.innerHTML = '<i class="fas fa-minus"></i>';
      } else {
        galleryContainer.style.display = 'none';
        galleryToggle.innerHTML = '<i class="fas fa-plus"></i>';
      }
    }

    // Lightbox functions
    function openLightbox(imageSrc) {
      const lightbox = document.getElementById('lightbox');
      const lightboxImage = document.getElementById('lightbox-image');

      // Find the index of the clicked image
      currentImageIndex = galleryImages.indexOf(imageSrc);

      lightboxImage.src = imageSrc;
      lightbox.style.display = 'flex';
      document.body.style.overflow = 'hidden'; // Prevent scrolling
    }

    function closeLightbox() {
      const lightbox = document.getElementById('lightbox');
      lightbox.style.display = 'none';
      document.body.style.overflow = 'auto'; // Re-enable scrolling
    }

    function changeImage(step) {
      currentImageIndex += step;

      // Wrap around if at beginning or end
      if (currentImageIndex >= galleryImages.length) {
        currentImageIndex = 0;
      } else if (currentImageIndex < 0) {
        currentImageIndex = galleryImages.length - 1;
      }

      document.getElementById('lightbox-image').src = galleryImages[currentImageIndex];
    }

    // Close lightbox when clicking outside the image
    document.getElementById('lightbox').addEventListener('click', function (e) {
      if (e.target === this) {
        closeLightbox();
      }
    });

    // Keyboard navigation
    document.addEventListener('keydown', function (e) {
      const lightbox = document.getElementById('lightbox');
      if (lightbox.style.display === 'flex') {
        if (e.key === 'Escape') {
          closeLightbox();
        } else if (e.key === 'ArrowLeft') {
          changeImage(-1);
        } else if (e.key === 'ArrowRight') {
          changeImage(1);
        }
      }
    });
  </script>
</body>

</html>