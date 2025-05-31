<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halley Brown Photography</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@400;700&family=Poppins:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet"> 
  <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background: #fff;
      color: #333;
      padding: 20px 0; /* Changed: Removed horizontal padding */
      text-align: center;
      margin: 0; /* Added: Remove default margin */
    }

    .header-bar {
      background-color: #B0958A;
      height: 51px;
      width: 100%;
      position: relative;
      margin-bottom: 60px;
    }
    .profile-pic {
      width: 166.5px;
      height: 166.5px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid white;
      background: white;
      position: absolute;
      top: -60px;
      left: 50%;
      transform: translateX(-50%);
    }

    .name-title {
      margin-top: 80px;
      text-align: right;
      max-width: 300px;
      margin: 0 auto;
    }

    .name-title h1 {
      font-size: 50px;
      font-weight: normal;
      color: #B0958A;
      font-family: 'Allura', cursive;
    }

    .name-title h1 span {
      font-family: 'Poppins', sans-serif;
      color: #D9CFCD;
      font-weight: normal;
      margin-left: 5px;
      font-size: 36px;
    }

    .name-title p {
      font-family: 'Poppins', sans-serif;
      color: #202020;
      font-size: 13px;
      margin-top: -15px;
      letter-spacing: 2px;
      margin-bottom: 40px;
    }

    .contact-info {
      margin-top: 30px;
    }

    .contact-info i {
      color: #9c8479;
      font-size: 32px;
      margin-bottom: 10px;
    }

    .contact-info p {
      font-size: 17px;
      margin: 5px 0 20px;
      font-family: 'Poppins', sans-serif;
      color: #000000;
    }

    .connect-btn {
      background-color: #e5e1de;
      color: #775F52;
      border: none;
      padding: 0;
      font-weight: normal;
      border-radius: 3px;
      font-size: 16px;
      font-family: 'Roboto', sans-serif;
      width: 260px;
      height: 28px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto;
      position: relative;
    }
    .connect-btn::before {
      content: '';
      position: absolute;
      width: 70px;
      height: 1px;
      background-color: #CEC1BB;
      left: -70px;
      top: 50%;
      transform: translateY(-50%);
    }
    .connect-btn::after {
      content: '';
      position: absolute;
      width: 70px;
      height: 1px;
      background-color: #CEC1BB;
      right: -70px;
      top: 50%;
      transform: translateY(-50%);
    }

    .social-icons {
      margin-top: 15px;
    }

    .social-icons a {
      color: white;
      background-color: #CEC1BB;
      width: 35px;
      height: 35px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin: 10px;
      text-decoration: none;
      font-size: 15px;
    }
  </style>
</head>

<body>
  <div class="name-title">
    <h1>Halley <span>BROWN</span></h1>
    <p>PHOTOGRAPHY</p>
  </div>
  <br><br>
  <div class="header-bar">
    <img src="profile_img\main_profile\template40-p.png" alt="Profile" class="profile-pic" />
  </div>
  <br>

  <div class="contact-info">
    <i class="fas fa-mobile-alt"></i>
    <p>000.123.4562</p>
    <i class="fas fa-envelope"></i>
    <p>yoursite@gmail.com</p>
    <i class="fas fa-globe"></i>
    <p>www.yourwebsite.com</p>
  </div>
    <br>
  <button class="connect-btn">CONNECT WITH ME</button>

  <div class="social-icons">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
    <a href="#"><i class="fab fa-linkedin-in"></i></a>
    <a href="#"><i class="fab fa-whatsapp"></i></a>
  </div>

 <script>
    function generateVCF() {
        // Updated contact information to match the business card
        const contactData = {
            firstName: "Halley",
            lastName: "Brown",
            title: "Photographer",
            phoneWork: "000.123.4562",
            phoneMobile: "",
            email: "yoursite@gmail.com",
            email2: "",
            email3: "",
            website: "www.yourwebsite.com",
            website2: "",
            website3: "",
            address: "",
            address2: "",
            about: "",
            logo: "",
            profileImage: "profile_img/main_profile/template40-p.png"
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