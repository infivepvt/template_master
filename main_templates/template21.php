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
            background: linear-gradient(90deg, #5f4def, #00d0ea);
            color: black;
            font-weight: bold;
            border: none;
            padding: 10px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }

        .custom-save-button:hover {
            background: linear-gradient(90deg, #4b3ec4, #00b3c3);
        }


  </style>
</head>
<body>

  <!-- Header: Logo + Hotel Name -->
  <div class="header">
    <img src="logo_img/main_logo/template21-l.png" alt="Logo" />
    <h4 class="mb-0">Big Bang Hotel</h4>
  </div>

  <!-- Banner Image -->
  <img src="banner_img/main_banner/template21-b.jpg" alt="Banner" class="banner" />

  <!-- Name & Title -->
  <div class="name-section">
    <h3>Stephanie</h3>
    <div class="divider"></div>
    <p class="text-muted">Sales Director</p>
    <p class="small-text">
       Street Number, Street Name, Town, Postal Code, State or Province, Country
    </p>
  </div>

  <!-- Contact Icons -->
  <div class="container my-4">
    <div class="row text-center contact-box mx-1">
      <div class="col-4 mb-3">
        <i class="fas fa-phone contact-icon"></i><br />
        <span>Call</span>
      </div>
      <div class="col-4 mb-3">
        <i class="fab fa-whatsapp contact-icon"></i><br />
        <span>Whatsapp</span>
      </div>
      <div class="col-4 mb-3">
        <i class="fas fa-envelope contact-icon"></i><br />
        <span>E-mail</span>
      </div>
      <div class="col-4">
        <i class="fas fa-globe contact-icon"></i><br />
        <span>Website</span>
      </div>
      <div class="col-4">
        <i class="fas fa-map-marker-alt contact-icon"></i><br />
        <span>Location</span>
      </div>
      <div class="col-4">
        <i class="fas fa-save contact-icon"></i><br />
        <span>Save</span>
      </div>
    </div>
  </div>



  <div class="d-flex flex-wrap justify-content-center">
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>

                <div class="d-flex flex-wrap justify-content-center">
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/twitter.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/social.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/pinterest.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>


                <br>
                <button class="btn w-100 custom-save-button" onclick="generateVCF()"
                    style="font-family: 'Montserrat', sans-serif; font-size:19px; border: 2px solid orange;">
                    <img src="Images/Social_Media_Icon/save.png" alt=""
                        style="width: 50px; height: 50px; margin-right:25px;">
                    SAVE TO CONTACTS
                </button>
            </div>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function generateVCF() {
        // Updated contact information to match the business card
        const contactData = {
            firstName: "William",
            lastName: "James",
            title: "Realtor",
            phoneWork: "0761231212",
            phoneMobile: "",
            email: "youremail@yourwebsite.com",
            email2: "",
            email3: "",
            website: "www.yourwebsiteaddress.com",
            website2: "",
            website3: "",
            address: "919 Oaktree Crescent, Newmarket Oaktree Crescent, Newmarket",
            address2: "",
            about: "",
            logo: "logo_img/Main_Design-l.png",
            profileImage: "profile_img/Main_Design-p.png"
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
