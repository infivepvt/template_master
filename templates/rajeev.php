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

    .contact-box {
      background-color: white;
      border-radius: 1rem;
      padding: 2rem 1rem;
      /* box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1); */
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
  <div class="container my-4">
    <p class="m-3"
      style="font-family: 'Rye', serif; font-size: 18px; color: #b9904e;text-align: center;text-transform: uppercase;">
      Rayatty</p>
    <div class="row text-center contact-box mx-1">
      <div class="col-4 mb-3" onclick="window.open('https://wa.me/message/YQWMY2ABWLICH1', '_blank')">
        <i class="fab fa-whatsapp contact-icon"></i><br />
        <span>Whatsapp</span>
      </div>
      <div class="col-4 mb-3">
        <i class="fas fa-envelope contact-icon" onclick="window.open('mailto:Info@rayatty.com ', '_self')"></i><br />
        <span>E-mail</span>
      </div>
      <div class="col-4" onclick="window.open('https://rayatty.com/', '_blank')">
        <i class="fas fa-globe contact-icon"></i><br />
        <span>Website</span>
      </div>
    </div>
    <p class="m-3" style="font-size: 18px; color: #b9904e;text-align: center;text-transform: uppercase;">Avenddra</p>
    <div class="row text-center contact-box mx-1">
      <div class="col-4 mb-3" onclick="window.open('https://Wa.me/+918220383688', '_blank')">
        <i class="fab fa-whatsapp contact-icon"></i><br />
        <span>Whatsapp</span>
      </div>
      <div class="col-4 mb-3" onclick="window.open('mailto:Info@avenddra.com ', '_self')">
        <i class="fas fa-envelope contact-icon"></i><br />
        <span>E-mail</span>
      </div>
      <div class="col-4" onclick="window.open('https://www.avenddra.com/', '_blank')">
        <i class="fas fa-globe contact-icon"></i><br />
        <span>Website</span>
      </div>
    </div>
  </div>


  <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:15px; margin-top:-10px; text-align:center;">
    CONNECT WITH SOCIAL MEDIA</p>
  <p class="m-3"
    style="font-family: 'Rye', serif; font-size: 18px; color: #b9904e;text-align: center;text-transform: uppercase;">
    Rayatty</p>
  <div class="d-flex flex-wrap justify-content-center">
    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
      <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
    </a>
    <a href="https://www.facebook.com/profile.php?id=61576584659017" target="_blank" rel="noopener noreferrer"
      class="m-3">
      <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
    </a>
    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
      <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 50px; height: 50px;">
    </a>
    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
      <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 50px; height: 50px;">
    </a>
  </div>

  <p class="m-3" style="font-size: 18px; color: #b9904e;text-align: center;text-transform: uppercase;">Avenddra</p>
  <div class="d-flex flex-wrap justify-content-center">
    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
      <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
    </a>
    <a href="https://www.facebook.com/profile.php?id=61576584659017" target="_blank" rel="noopener noreferrer"
      class="m-3">
      <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
    </a>
    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
      <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 50px; height: 50px;">
    </a>
    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
      <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 50px; height: 50px;">
    </a>
  </div>

  <br>
  <button class="btn w-100 custom-save-button" onclick="generateVCF()"
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
    function generateVCF() {
      // Updated contact information to match the business card
      const contactData = {
        firstName: "M. RAJEEV",
        lastName: "",
        title: "Director",
        phoneWork: "0713685600",
        phoneMobile: "",
        email: "Info@rayatty.com",
        email2: "Info@avenddra.com",
        email3: "",
        website: "",
        website2: "",
        website3: "",
        address: "yatiyantota,Sri Lanka",
        address2: "",
        about: "",
        logo: "logo_img/client_logo/rayatty-l.png",
        profileImage: ""
      };

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
PHOTO;VALUE=URL:${contactData.profileImage}
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