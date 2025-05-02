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
    .custom-card {
      border-radius: 15px;
      overflow: hidden;
      background: #EEF1FF;
      width: 450px;
      height: auto;
      margin-top: -55px;
    }

    /* Profile Header */
    .profile-header1 {
      padding: 30px;
      color: white;
    }

    .profile-image {
      width: 120px;
      height: 120px;
      border: 4px solid #fff;
    }

    .company-title {
      font-size: 1.2rem;
      margin-top: 15px;
    }

    .profile-name {
      font-size: 1.8rem;
      margin: 5px 0;
      font-weight: bold;
    }

    .job-title {
      font-size: 1rem;
      margin-top: 5px;
      color: #fff;
    }

    /* Contact Icons */
    .contact-icons .icon {
      font-size: 1.5rem;
      color: #ff1a1a;
      text-decoration: none;
      padding: 0 5px;
    }

    /* About Section */
    .about-section {
      background-color: #222;
      color: white;
      padding: 20px;
    }

    .about-section h5 {
      font-size: 1.25rem;
      margin-bottom: 10px;
    }

    .about-section p {
      font-size: 0.9rem;
      margin: 0;
    }

    /* Social Media Links */
    .social-links .icon {
      font-size: 1.5rem;
      color: #ff1a1a;
      text-decoration: none;
      padding: 0 5px;
    }

    /* Footer */
    .footer {
      background-color: #222;
      padding: 10px;
      color: white;
      font-size: 0.9rem;
    }

    /* Gallery Styles */
    .gallery-section {
      padding: 20px;
    }

    .gallery-preview {
      gap: 10px;
    }

    .gallery-item {
      position: relative;
      width: 150px;
      height: 150px;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }

    .gallery-item:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    .gallery-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .gallery-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .gallery-item:hover .gallery-overlay {
      opacity: 1;
    }

    .gallery-text {
      color: white;
      font-size: 16px;
      font-weight: bold;
      text-align: center;
    }

    /* Image Preview Modal */
    .image-preview-modal .modal-content {
      background: transparent;
      border: none;
    }

    .image-preview-modal .modal-body {
      padding: 0;
      position: relative;
    }

    .modal-image-container {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .image-preview-modal img {
      max-width: 90vw;
      max-height: 90vh;
      margin: auto;
      display: block;
      border-radius: 8px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
      animation: zoomIn 0.3s ease-out;
    }

    .modal-close-btn {
      position: absolute;
      top: -35px;
      right: -35px;
      color: white;
      font-size: 30px;
      cursor: pointer;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
      transition: transform 0.2s ease;
    }

    .modal-close-btn:hover {
      transform: scale(1.2);
    }

    /* Navigation Buttons */
    .nav-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0, 0, 0, 0.5);
      border: none;
      color: white;
      font-size: 24px;
      padding: 10px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .nav-btn:hover {
      background: rgba(0, 0, 0, 0.8);
    }

    .prev-btn {
      left: 10px;
    }

    .next-btn {
      right: 10px;
    }

    /* Backdrop effect */
    .modal-backdrop.show {
      opacity: 0.9;
      background: #000;
      animation: fadeIn 0.3s ease-out;
    }

    @keyframes zoomIn {
      from {
        transform: scale(0.8);
        opacity: 0;
      }

      to {
        transform: scale(1);
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 0.9;
      }
    }

    /* Mobile responsive adjustments */
    @media (max-width: 768px) {
      .modal-close-btn {
        top: -25px;
        right: -25px;
        font-size: 24px;
      }

      .image-preview-modal img {
        max-width: 95vw;
        max-height: 95vh;
      }
    }

    .video-preview {
      gap: 15px;
    }

    .video-preview video {
      border: 2px solid #ddd;
      border-radius: 10px;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .document-upload-section {
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .custom-file-input:focus~.custom-file-label {
      border-color: #ff1a1a;
      box-shadow: 0 0 0 0.2rem rgba(255, 26, 26, 0.25);
    }

    .custom-file-label::after {
      content: "Browse";
      background-color: #ff1a1a;
      color: white;
      border-left: 1px solid #ff1a1a;
    }

    .btn-danger:disabled {
      background-color: #ff6666;
      border-color: #ff6666;
    }

    .profile-contact-icons1 {
      margin-top: 15px;
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
      align-items: center;
      gap: 20px;
      padding: 15px;
    }

    .profile-contact-icons1 .icon-item {
      flex: 0 0 calc(20% - 20px);
      box-sizing: border-box;
    }

    .upload-container {
      position: relative;
      max-width: 300px;
      margin: 1rem auto;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .modern-upload-btn {
      display: block;
      padding: 1.5rem 2rem;
      background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
      border-radius: 12px;
      color: white;
      cursor: pointer;
      position: relative;
      overflow: hidden;
      transition: all 0.3s ease;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border: 2px solid transparent;
      text-align: center;
    }

    .modern-upload-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
      background: linear-gradient(135deg, #8183f2 0%, #b966f8 100%);
    }

    .modern-upload-btn:active {
      transform: translateY(0);
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .btn-content {
      position: relative;
      z-index: 2;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.5rem;
    }

    .upload-icon {
      font-size: 2rem;
      transition: transform 0.3s ease;
    }

    .modern-upload-btn:hover .upload-icon {
      transform: translateY(-3px);
      animation: float 2s ease-in-out infinite;
    }

    .text-container {
      text-align: center;
    }

    .main-text {
      display: block;
      font-weight: 600;
      font-size: 1.1rem;
    }

    .sub-text {
      display: block;
      font-size: 0.9rem;
      opacity: 0.8;
      margin-top: 0.3rem;
    }

    .hover-effect {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.1);
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .modern-upload-btn:hover .hover-effect {
      opacity: 1;
    }

    .hidden-input {
      display: none;
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(-3px);
      }

      50% {
        transform: translateY(3px);
      }
    }

    /* group Edit */

    /* Contact Icons Styling */
    .contact {
      font-size: 2rem;
      color: #ffffff;
      transition: all 0.3s ease;
    }

    .contact-item {
      text-align: center;
      padding: 15px;
      border-radius: 10px;
      background-color: rgba(255, 255, 255, 0.1);
      transition: all 0.3s ease;
      min-height: 100px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .contact-item:hover {
      background-color: rgba(255, 255, 255, 0.2);
      transform: translateY(-5px);
    }

    .contact-item:hover .contact {
      color: #ff7400;
    }

    .icon-text {
      font-size: 1rem;
      color: #f8f8f8;
      font-weight: 500;
      margin-top: 8px;
    }

    @media (max-width: 768px) {
      .profile-contact-icons {
        grid-template-columns: repeat(2, 1fr);
        /* 2 columns on mobile */
      }
    }

    @media (max-width: 480px) {
      .profile-contact-icons {
        grid-template-columns: 1fr;
        /* 1 column on very small screens */
      }
    }

    .custom-save-button {
      background-color: #ff7400;
      /* Green */
      color: white;
      border: none;
      transition: background-color 0.3s ease;
    }

    .custom-save-button:hover {
      background-color: rgb(112, 218, 117);
      /* Darker green on hover */
    }
  </style>
</head>

<body>
  <div class="d-flex justify-content-center mt-5">
    <div class="card custom-card shadow-lg ba" style="background-color: #FFFFFF; padding: 10px">
      <div class="card-header custom-header text-center" style="background-color: #FFFFFF;">
        <img src="logo_img/main_logo/template7-l.png" alt="Company Logo" class="custom-logo"
          style="width: 230px; height:90px; opacity: 1;">
      </div>
      <div>
        <div>
          <div
            style="display: flex; align-items: center; gap: 20px; border-radius: 30px; background-color: #000e36; padding: 20px; overflow: hidden; flex-direction: row; flex-wrap: wrap;">
            <div>
              <img src="profile_img/main_profile/template5-p.jpg" alt="Mario K. Dilon" style="width: 100px; border-radius:20px;">
            </div>
            <div style="width: 200px;">
              <h2 style="font-size: 30px; color:rgb(255, 255, 255); margin: 0;">Mario K. Dilon</h2>
              <p style="color:rgb(255, 255, 255); font-size: 20px; margin: 0;">Infive</p>
            </div>
          </div>
        </div>
      </div>
      <div class="profile-contact-icons1"
        style="margin-top: 30px; height: 50px; background-color: #ff7400; border-radius: 30px; padding: 0px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; justify-content: center; align-items: center;">
        <!-- Social media icons -->
        <a href="#" target="_blank" rel="noopener noreferrer" class="m-1"
          style="display: flex; justify-content: center; text-decoration: none;">
          <i class="fab fa-facebook" style="color:rgb(255, 255, 255); font-size: 2rem;"></i>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer" class="m-1"
          style="display: flex; justify-content: center; text-decoration: none;">
          <i class="fab fa-instagram" style="color:rgb(255, 255, 255); font-size: 2rem;"></i>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer" class="m-1"
          style="display: flex; justify-content: center; text-decoration: none;">
          <i class="fab fa-twitter" style="color:rgb(255, 255, 255); font-size: 2rem;"></i>
        </a>
        <!-- <a href="#" target="_blank" rel="noopener noreferrer" class="m-1">
                    <i class="fab fa-linkedin" style="color:rgb(255, 255, 255); font-size: 2rem;"></i>
                </a>
                -->
        <!-- <button class="btn w-100 mb-3 custom-phone1" style="background-color: #25D366; color: white; height: 60px; border: 2px solid orange; border-radius: 30px;">
          <i class="fab fa-whatsapp me-2" style="font-size: 40px;"></i>
          CONNECT WITH WHATSAPP
        </button> -->
      </div>

      <div class="profile-header"
        style="background-color: #333333; border-radius: 30px; padding: 40px; margin-top: 20px;">
        <div class="profile-contact-icons"
          style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; justify-content: center; align-items: center;">
          <!-- Row 1 -->
          <div class="contact-item">
            <a href="tel:0761231212" class="icon d-flex flex-column align-items-center justify-content-center"
              style="text-decoration: none;">
              <i class="fas fa-phone contact-icon contact"></i>
              <span class="icon-text mt-2">Call</span>
            </a>
          </div>

          <div class="contact-item">
            <a href="tel:" class="icon d-flex flex-column align-items-center justify-content-center"
              style="text-decoration: none;">
              <i class="fas fa-mobile-alt contact-icon contact"></i>
              <span class="icon-text mt-2">Mobile</span>
            </a>
          </div>

          <div class="contact-item">
            <a href="tel:" class="icon d-flex flex-column align-items-center justify-content-center"
              style="text-decoration: none;">
              <i class="fas fa-mobile-alt contact-icon contact"></i>
              <span class="icon-text mt-2">Mobile 2</span>
            </a>
          </div>

          <!-- Row 2 -->
          <div class="contact-item">
            <a href="tel:" class="icon d-flex flex-column align-items-center justify-content-center"
              style="text-decoration: none;">
              <i class="fas fa-fax contact-icon contact"></i>
              <span class="icon-text mt-2">Fax</span>
            </a>
          </div>

          <div class="contact-item">
            <a href="mailto:youremail@yourwebsite.com"
              class="icon d-flex flex-column align-items-center justify-content-center" style="text-decoration: none;">
              <i class="fas fa-envelope contact-icon contact"></i>
              <span class="icon-text mt-2">Email</span>
            </a>
          </div>

          <div class="contact-item">
            <a href="mailto:" class="icon d-flex flex-column align-items-center justify-content-center"
              style="text-decoration: none;">
              <i class="fas fa-envelope contact-icon contact"></i>
              <span class="icon-text mt-2">Email 2</span>
            </a>
          </div>

          <!-- Row 3 -->
          <div class="contact-item">
            <a href="http://www.yourwebsiteaddress.com"
              class="icon d-flex flex-column align-items-center justify-content-center" style="text-decoration: none;">
              <i class="fas fa-globe contact-icon contact"></i>
              <span class="icon-text mt-2">Website</span>
            </a>
          </div>

          <div class="contact-item">
            <a href="http://" class="icon d-flex flex-column align-items-center justify-content-center"
              style="text-decoration: none;">
              <i class="fas fa-globe contact-icon contact"></i>
              <span class="icon-text mt-2">Website 2</span>
            </a>
          </div>

          <div class="contact-item">
            <a href="#" class="icon d-flex flex-column align-items-center justify-content-center"
              style="text-decoration: none;">
              <i class="fas fa-map-marker-alt contact-icon contact"></i>
              <span class="icon-text mt-2">Address</span>
            </a>
          </div>

          <!-- Row 4 (will only have 2 items) -->
          <div class="contact-item">
            <a href="#" class="icon d-flex flex-column align-items-center justify-content-center"
              style="text-decoration: none;">
              <i class="fas fa-map-marker-alt contact-icon contact"></i>
              <span class="icon-text mt-2">Address 2</span>
            </a>
          </div>

          <!-- Empty div to maintain grid structure if needed -->
          <div class="contact-item" style="visibility: hidden;"></div>
        </div>
      </div>
      <br>
      <button class="btn w-100 custom-save-button" onclick="handleSaveToContacts()">
        <i class="fas fa-save me-2"></i>
        SAVE TO CONTACTS
      </button>
      
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function handleSaveToContacts() {
      let vCardData = `BEGIN:VCARD\nVERSION:3.0\nFN:Mario K. Dilon\nTITLE:Infive\nTEL;TYPE=WORK,VOICE:0761231212\n`;
      vCardData += `EMAIL:youremail@yourwebsite.com\n`;
      vCardData += `URL:www.yourwebsiteaddress.com\n`;
      vCardData += `ADR;TYPE=WORK:;;919 Oaktree Crescent, Newmarket\n`;
      vCardData += `PHOTO;VALUE=URL:/profile.png\n`;
      vCardData += `LOGO;VALUE=URL:/logo.png\n`;
      vCardData += `END:VCARD`;

      const blob = new Blob([vCardData], { type: "text/vcard" });
      const url = URL.createObjectURL(blob);
      const link = document.createElement("a");
      link.href = url;
      link.download = `Mario K. Dilon.vcf`;
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    }
  </script>
</body>

</html>