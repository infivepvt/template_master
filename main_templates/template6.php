<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Template9</title>
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
        <img class="profile-photo" src="profile_img/main_profile/template6-p.jpg" alt="Michael Fassbender">
      </div>
      <div class="profile-info">
        <h2>Michael Fassbender</h2>
        <p>Infive</p>
      </div>
    </div>

    <div class="profile-contact-icons">
      <button type="button" class="contact-button" onclick="window.open('tel:0761231212', '_self')">
        <i class="fas fa-phone contact-icon"></i>
      </button>

      <button type="button" class="contact-button" onclick="window.open('mailto:youremail@yourwebsite.com', '_self')">
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
    </div>
    <!-- gallery -->
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
          <p class="text-center text-light mb-0">Hi. I am Michael, working as marketing manager.</p>
        </div>
      </div>
      <br>
      <button class="btn h-100 custom-save-button social-media-button" onclick="downloadVCF()">
        <i class="fas fa-save me-2"></i>
        SAVE TO CONTACTS
      </button>
    </div>

    <div class="footer">
      <p>All rights reserved</p>
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

    function downloadVCF() {
      const vCardData = `BEGIN:VCARD
VERSION:3.0
FN:Michael Fassbender
ORG:Infive
TEL:0761231212
EMAIL:youremail@yourwebsite.com
URL:https://www.yourwebsiteaddress.com
ADR:919 Oaktree Crescent, Newmarket
NOTE:Hi. I am Michael, working as marketing manager.
END:VCARD`;

      const blob = new Blob([vCardData], { type: 'text/vcard' });
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = 'Michael_Fassbender.vcf';
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