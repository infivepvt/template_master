<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Digital Business Card - Rockit Take Off</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f2f5;
            font-family: 'Montserrat', sans-serif;
        }

        .card-container {
            width: 500px;
            background-color: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .header-section {
            position: relative;
            height: 200px;
            background-color: #f8f8f8;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;  
            padding-top: 20px;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo-container img {
            width: 230px;
            height: 90px;
            object-fit: contain;
        }

        .profile-info-section {
            background-color:rgb(9, 25, 51);
            display: flex;
            padding: 5px;
            align-items: center;
            gap: 30px;
            position: relative;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            margin-top: -50px;
            margin-bottom: 20px;
            z-index: 1;
            width: calc(100% - 40px);
            height: 125px;
            justify-content: flex-start;
            box-sizing: border-box;
            margin-left: 20px; /* Added left margin */
            margin-right: 20px; /* Added right margin */
        }

        .profile-picture {
            width: 125px;
            height: 125px;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            left: -9px;
            flex-shrink: 0;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-details {
            color: #fff;
            flex-grow: 1;
        }

        .profile-details h2 {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
            font-weight: 700;
        }

        .profile-details p {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
            color: #ccc;
        }

        .social-icons-bar {
            background-color: #ff7400;
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 5px 0;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            margin-bottom: 20px;
            margin-left: 20px;
            margin-right: 20px;
            width: calc(100% - 40px);
            box-sizing: border-box;
        }

        .social-icons-bar a img {
            width: 38px;
            height: 38px;
        }

        .image-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
            padding: 10px;
        }

        .image-grid img {
            width:  350px;
            height: 200px;
            object-fit: cover;
            display: block;
            border-radius: 10px;
            margin: auto;
        }

        .bottom-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
            background-color: #f8f8f8;
            border-top: 1px solid #eee;
        }

        .bottom-left-icons {
            display: flex;
            gap: 15px;
        }

        .bottom-left-icons div {
            width: 43.19px;
            height: 43.19px;
            background: #ff7400;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .bottom-left-icons svg {
            width: 20px;
            height: 20px;
            fill: #fff;
        }

        .add-contact-button {
        background-color: #ff7400;
        color: #fff;
        border: none;
        padding: 15px 35px; /* Increased padding for overall larger size */
        border-radius: 25px;
        font-family: 'Roboto', sans-serif;
        font-size: 18px; /* Slightly larger font */
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 10px;
      }

        .add-contact-icon {
            width: 24px;
            height: 24px;
            background-color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .add-contact-icon svg {
            width: 20px;
            height: 20px;
            fill: #ff7400;
        }
    </style>
</head>

<body>
    <div class="card-container">
        <div class="header-section">
            <div class="logo-container">
                <img src="logo_img/main_logo/template43-l.png" alt="Rockit Logo" />
            </div>
        </div>

        <div class="profile-info-section">
            <div class="profile-picture">
                <img src="profile_img/main_profile/template43-p.jpg" alt="Mario K. Dilon" />
            </div>
            <div class="profile-details">
                <h2>Mario K. Dilon</h2>
                <p>Owner/CEO</p>
            </div>
        </div>

        <div class="social-icons-bar">
            <a href="#"><img src="Images\icon\facebook43.png" alt="Facebook"></a>
            <a href="#"><img src="Images\icon\twitter43.png" alt="Twitter"></a>
            <a href="#"><img src="Images\icon\youtube43.png" alt="YouTube"></a>
        </div>

        <div class="image-grid">
            <img src="gallery_img/main_gallerys/t43g1.jpg" alt="Business Image 1" />
            <img src="gallery_img/main_gallerys/t43g2.jpg" alt="Business Image 2" />
        </div>

        <div class="bottom-bar">
            <div class="bottom-left-icons">
                <div>
                    <svg viewBox="0 0 24 24">
                        <path d="M3 3h7v7H3V3zm0 11h7v7H3v-7zm11-11h7v7h-7V3zm0 11h7v7h-7v-7z" />
                    </svg>
                </div>
                <div>
                    <svg viewBox="0 0 24 24">
                        <path d="M5 20h14v-2H5v2zm7-18l-5 5h3v6h4V7h3l-5-5z" />
                    </svg>
                </div>
            </div>

            <button class="add-contact-button">
                Add to contact
                <span class="add-contact-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z" />
                    </svg>
                </span>
            </button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function generateVCF() {
        const contactData = {
            firstName: "Mario K.", // Updated first name to Mario K.
            lastName: "Dilon",    // Updated last name to Dilon
            title: "Owner/CEO",   // Updated title to Owner/CEO
            phoneWork: "0761231212", // Kept your original phone number, as it wasn't specified for Mario
            phoneMobile: "",
            email: "youremail@yourwebsite.com", // Kept your original email
            email2: "",
            email3: "",
            website: "www.yourwebsiteaddress.com", // Kept your original website
            website2: "",
            website3: "",
            address: "919 Oaktree Crescent, Newmarket Oaktree Crescent, Newmarket", // Kept your original address
            address2: "",
            about: "Owner and CEO of Rockit Take Off", // Added a generic 'about' based on the image context
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