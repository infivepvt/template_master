<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
    .profile-card {
        background-color: #000;
        color: #fff;
        max-width: 450px;
        width: 100%;
        height: auto;
        overflow: hidden;
        font-family: 'Montserrat', sans-serif;
        margin: 0 auto;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .profile-banner {
        position: relative;
    }

    .profile-photo {
        width: 100%;
        height: auto;
        object-fit: cover;
        filter: brightness(0.79);
    }

    .imagepro {
        width: 100%;
        margin-right: 0;
        filter: brightness(1.0);
    }

    .profile-info {
        position: absolute;
        bottom: 20px;
        left: 20px;
        z-index: 2;
        color: #ffffff;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
        text-align: left;
    }

    .profile-info h2 {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .profile-info p {
        font-size: 1.1rem;
        margin-bottom: 0;
    }

    .profile-contact-icons {
        display: flex;
        justify-content: start;
        align-items: start;
        gap: 15px;
        padding: 15px;
        flex-wrap: wrap;
        margin-left: 10px;
    }

    .icon-button {
        background-color: #fff;
        border: none;
        color: #000000;
        font-size: 20px;
        cursor: pointer;
        padding: 10px;
        border-radius: 50%;
        transition: all 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .icon-button:hover {
        background-color: #333;
        color: #fff;
        transform: scale(1.1);
    }

    .icon-button:active {
        transform: scale(0.95);
    }

    .social-media-links-column {
        display: flex;
        flex-direction: column;
        align-items: start;
        padding: 15px;
    }

    .social-media-button {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        padding: 12px;
        border-radius: 25px;
        color: #000;
        text-decoration: none;
        transition: background-color 0.3s;
        width: 100%;
        max-width: 350px;
        background-color: #ececec;
    }

    .social-media-button i {
        margin-right: 15px;
    }

    .social-media-button:hover {
        background-color: #555;
        color: white;
    }

    .social-media-button:hover .platform-name,
    .social-media-button:hover .user-name {
        color: white;
    }

    .text-wrapper {
        text-align: left;
        margin-left: 16px;
    }

    .platform-name {
        font-weight: bold;
        color: #000;
        font-size: 16px;
        font-family: Roboto, sans-serif;
    }

    .user-name {
        color: rgb(32, 130, 243);
        font-size: 16px;
        font-family: Roboto, sans-serif;
    }

    .footer {
        background-color: rgb(0, 0, 0);
        text-align: center;
        padding: 10px;
        font-size: 14px;
    }

    .custom-save-button {
        width: 100%;
        max-width: 350px;
        padding: 15px;
        margin: 10px 0;
        background-color: rgb(65, 66, 65);
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .custom-save-button:hover {
        background-color: #45a049;
    }

    .custom-save-button i {
        margin-right: 10px;
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
        .profile-info h2 {
            font-size: 1.5rem;
        }

        .profile-info p {
            font-size: 1rem;
        }

        .profile-contact-icons {
            gap: 10px;
            padding: 10px;
        }

        .icon-button {
            width: 36px;
            height: 36px;
            font-size: 18px;
        }

        .social-media-button {
            padding: 10px;
        }

        .platform-name,
        .user-name {
            font-size: 14px;
        }
    }

    @media (max-width: 400px) {
        .profile-info {
            bottom: 10px;
            left: 10px;
        }

        .profile-info h2 {
            font-size: 1.3rem;
        }
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

    /* Removed unused or unnecessary CSS classes/styles for clarity */
</style>

</head>

<body>
    
    <div class="profile-card">
        <div class="profile-banner">
            <div class="imagepro">
                <img class="profile-photo" src="profile_img/client_profile/thilina-p.png" alt="Profile">
            </div>
            <div class="profile-info">
                <h2 style="font-family: Verdana, sans-serif;">Thilina Gunawardana</h2>
                <p style="font-family: Roboto, sans-serif;">Founder & CEO</p>
            </div>
        </div>

        <div class="profile-contact-icons">
            <button class="icon-button" onclick="window.open('mailto:thilina@tuneandtransit.com', '_self')">
                <i class="fas fa-envelope"></i>
            </button>
            <button class="icon-button" onclick="window.open('tel:0772028960', '_self')">
                <i class="fas fa-phone"></i>
            </button>
            <!-- <button class="icon-button" onclick="window.open('https://www.facebook.com', '_blank')">
                <i class="fab fa-facebook"></i>
            </button> -->
            <button class="icon-button" onclick="window.open('https://wa.me/94772028960', '_blank')">
                <i class="fab fa-whatsapp"></i>
            </button>
        </div>

        <div class="social-media-links-column">
            <!-- <a href="#" class="social-media-button">
                <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 40px; height: 40px;">
                <div class="text-wrapper">
                    <span class="platform-name">Facebook</span>
                    <br>
                    <span class="user-name">Thilina Gunawardana</span>
                </div>
            </a> -->
            <a href="https://www.tuneandtransit.com/" class="social-media-button">
                <img src="Images/Social_Media_Icon/website.png" alt="" style="width: 40px; height: 40px;">
                <div class="text-wrapper">
                    <span class="platform-name">Tune & Transit | Website</span>
                    <br>
                    <span class="user-name">Thilina Gunawardana</span>
                </div>
            </a>
            <a href="https://www.tiktok.com/@tune_n_transit_prod" class="social-media-button">
                <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 40px; height: 40px;">
                <div class="text-wrapper">
                    <span class="platform-name">Tune & Transit | TikTok</span>
                    <br>
                    <span class="user-name">Thilina Gunawardana</span>
                </div>
            </a>
             <a href="https://www.linkedin.com/company/tune-transit-productions/" class="social-media-button">
                <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 40px; height: 40px;">
                <div class="text-wrapper">
                    <span class="platform-name">Tune & Transit | LinkedIn </span>
                    <br>
                    <span class="user-name">Thilina Gunawardana</span>
                </div>
            </a>
            <a href="https://www.linkedin.com/showcase/tuneit%E2%84%A2/" class="social-media-button">
                <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 40px; height: 40px;">
                <div class="text-wrapper">
                    <span class="platform-name">TuneIT™ | LinkedIn</span>
                    <br>
                    <span class="user-name">Thilina Gunawardana</span>
                </div>
            </a>
            <a href="https://www.linkedin.com/showcase/transit%E2%84%A2/" class="social-media-button">
                <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 40px; height: 40px;">
                <div class="text-wrapper">
                    <span class="platform-name">TransIT™ | LinkedIn</span>
                    <br>
                    <span class="user-name">Thilina Gunawardana</span>
                </div>
            </a>
            <a href="https://www.instagram.com/tuneit_official/#" class="social-media-button">
                <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 40px; height: 40px;">
                <div class="text-wrapper">
                    <span class="platform-name">TuneIT™ | Instagram</span>
                    <br>
                    <span class="user-name">Thilina Gunawardana</span>
                </div>
            </a>
            <a href="https://www.instagram.com/tuneit_official/#" class="social-media-button">
                <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 40px; height: 40px;">
                <div class="text-wrapper">
                    <span class="platform-name">TransIT™ | Instagram</span>
                    <br>
                    <span class="user-name">Thilina Gunawardana</span>
                </div>
            </a>
            
           
            <a href="https://www.youtube.com/@t-tproductions-1" class="social-media-button">
                <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 40px; height: 40px;">
                <div class="text-wrapper">
                    <span class="platform-name">Tune & Transit | YouTube</span>
                    <br>
                    <span class="user-name">Thilina Gunawardana</span>
                </div>
            </a>

             <!-- gallery -->
    <div class="gallery-section">
      <div class="gallery-header" onclick="toggleGallery()">
        <div class="gallery-title">Gallery</div>
        <div class="gallery-toggle" id="galleryToggle">
          <i class="fas fa-minus"></i>
        </div>
      </div>
      <div class="gallery-container" id="galleryContainer">
        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/thilina/thilina-g1.jpeg')">
          <img src="gallery_img/client_gallerys/thilina/thilina-g1.jpeg" alt="Gallery Image 1" class="gallery-image">
        </div>
        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/thilina/thilina-g2.jpeg')">
          <img src="gallery_img/client_gallerys/thilina/thilina-g2.jpeg" alt="Gallery Image 2" class="gallery-image">
        </div>
        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/thilina/thilina-g3.jpeg')">
          <img src="gallery_img/client_gallerys/thilina/thilina-g3.jpeg" alt="Gallery Image 3" class="gallery-image">
        </div>
        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/thilina/thilina-g4.jpeg')">
          <img src="gallery_img/client_gallerys/thilina/thilina-g4.jpeg" alt="Gallery Image 4" class="gallery-image">
        </div>
        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/thilina/thilina-g5.jpeg')">
          <img src="gallery_img/client_gallerys/thilina/thilina-g5.jpeg" alt="Gallery Image 5" class="gallery-image">
        </div>
        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/thilina/thilina-g6.jpeg')">
          <img src="gallery_img/client_gallerys/thilina/thilina-g6.jpeg" alt="Gallery Image 6" class="gallery-image">
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
            <button class="custom-save-button" onclick="downloadVCF()">
                <i class="fas fa-save"></i>
                SAVE TO CONTACTS
            </button>
        </div>

        <div class="footer">
            <p>All rights reserved</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Gallery images array
    const galleryImages = [
      'gallery_img/client_gallerys/thilina/thilina-g1.jpeg',
      'gallery_img/client_gallerys/thilina/thilina-g2.jpeg',
      'gallery_img/client_gallerys/thilina/thilina-g3.jpeg',
      'gallery_img/client_gallerys/thilina/thilina-g4.jpeg',
      'gallery_img/client_gallerys/thilina/thilina-g5.jpeg',
      'gallery_img/client_gallerys/thilina/thilina-g6.jpeg'
    ];

    let currentImageIndex = 0;

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

   async function downloadVCF() {
    // Get the profile image
    const profileImage = document.querySelector('.profile-photo');
    
    // Wait for the image to load if not already loaded
    if (!profileImage.complete) {
        await new Promise((resolve) => {
            profileImage.onload = resolve;
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

    // Create vCard data with the photo
    const vCardData = `BEGIN:VCARD
VERSION:3.0
FN:Thilina Gunawardana
ORG:Tune & Transit
TEL:0772028960
EMAIL:thilina@tuneandtransit.com
URL:https://www.tuneandtransit.com
PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}
NOTE:Hi. I am Thilina Gunawardana, Founder & CEO of Tune & Transit.
END:VCARD`;

    // Create and download the vCard file
    const blob = new Blob([vCardData], { type: 'text/vcard' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'Thilina_Gunawardana.vcf';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    URL.revokeObjectURL(url);
}
  </script>
</body>
</html>