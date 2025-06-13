 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
    

        body {
            font-family: 'roboto sans serif font', sans-serif;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Align to top for scrolling if content is long */
            min-height: 105vh;
            padding-top: -5px; /* Add some padding at the top */
            padding-bottom: -5px; /* Padding for the fixed button at the bottom */
        }

        .business-card-container {
            max-width: 400px;
            width: 100%;
            background-color: #ffffff; /* Main container is transparent */
            border-radius: 20px; /* Overall rounding if needed, but content has its own */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden; /* Ensures inner rounded corners are visible */
        }
        .business-card-container {
        max-width: 600px;
        width: 100%;
        background: url('banner_img/main_banner/template38-b.png') no-repeat center center;
        background-size: cover;
        border-radius: 1px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        overflow: hidden;
         position: relative;
        }


        .card-header-new {
            padding: 30px 25px;
            color: #ffffff; /* Darker text for better readability */
            position: relative;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start; /* Align items to the start of the flex container */
        }

        .header-info {
            flex-grow: 1;
        }

        .profile-pic-new {
            width: 166px;
            height: 166px;
            border-radius: 100%;
            border: -5px solid #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            object-fit: cover;
            margin-left: -10px; /* Space from the text */
        }

        .header-info h1 {
        font-size: 27px;
        font-weight: 700;
        margin-bottom: 5px;
        color: black;
        white-space: nowrap;
        }


        .header-info p {
            font-size: 14px;
            margin-bottom: 2px;
            color: #555;
        }
        .header-info .title {
        font-size: 14px;
        font-weight: 500;
        color: gray;
        margin-bottom: 2px;
        }
        .header-info .studio {
        font-size: 16px;
        color:black;
        }

        .header-icons {
        margin-top: 25px;
        display: flex;
        justify-content: flex-start;
        gap: 15px;
        padding-right: 10px;
        padding-left: 5px;
        }

        .icon-btn {
        text-decoration: none;
        background-color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: black;
        font-size: 18px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        }

        .icon-btn:hover {
        background-color: #e9f2ff;
        color: #007bff;
        }


        .card-content-new {
            background-color: #ffff;
            padding: 30px 25px;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            margin-top: -10px; /* Pulls the white content area up slightly */
            position: relative; /* For stacking context */
        }

        .contact-us-title {
            display: flex;
            align-items: center;
            margin-bottom: 35px;
        }

        .contact-us-title .icon-circle {
            background-color: black;
            color: #fff;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            margin-right: 15px;
        }

        .contact-us-title h2 {
        font-size: 20px;
        font-weight: 600;
        color: black;
        margin-bottom: 0;
        }


       .contact-item {
        margin-bottom: 30px; 
        }

        .contact-item h3 {
        font-size: 20px;
        font-weight: 600;
        color: black;
        margin-bottom: 3px;
        }

        .contact-item p {
        font-size: 12px;
        color: black; 
        margin-bottom: 0;
        word-break: break-word;
    }

        .contact-item a {
            color: #7A7A7A;
            text-decoration: none;
        }
        .contact-item a:hover {
            text-decoration: underline;
        }

      .add-to-contact-btn {
    background-color: #222222; /* As per your code */
    color: #fff;
    font-weight: 600;
    font-size: 16px;
    border: none;
    /* Adjusted padding to work with fixed height */
    padding-left: 15px;
    padding-right: 15px;
    border-radius: 6px;
    width: 181.33px; /* Fixed width */
    height: 39px;   /* Fixed height */
    display: flex; /* Essential for centering icon and text */
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    transition: background-color 0.3s;
    margin-top: 50px; /* Adjust this value to move the button down as desired */
    margin-left: auto; /* To center the button itself */
    margin-right: auto; /* To center the button itself */
}

.add-to-contact-btn:hover {
    background-color: #23272b; /* Darker on hover */
}

.add-to-contact-btn i {
    margin-right: 10px; /* This creates the space between the plus icon and the text */
}

        .fixed-bottom-logo {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: #fff; /* Assuming white background for the logo if it's an icon */
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 5px; /* If the logo needs padding */
        }
        .fixed-bottom-logo img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 50%; /* If the image itself should be round */
        }
        
@media (max-width: 576px) {
    .business-card-container {
        border-radius: 0;
        box-shadow: none;
    }

    .card-header-new {
        padding: 20px 15px;
    }

   
    .profile-pic-new {
        width: 150px;
        height: 150px;
        margin: 0 auto 15px auto;
    }

    .header-info h1 {
        font-size: 22px;
    }

    .header-info .title,
    .header-info .studio {
        font-size: 13px;
    }

    .header-icons {
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 15px;
    }

    .icon-btn {
        width: 42px;
        height: 42px;
        font-size: 16px;
    }

    .card-content-new {
        padding: 20px 15px;
    }

    .contact-item h3 {
        font-size: 16px;
    }

    .contact-item p {
        font-size: 12px;
    }

    .add-to-contact-btn {
        font-size: 14px;
        width: 100%;
        height: 40px;
    }

    .fixed-bottom-logo {
        width: 40px;
        height: 40px;
        bottom: 10px;
        right: 10px;
    }
}

    </style>
</head>

<body>
    <div class="business-card-container">
        <div class="card-header-new">
            <div class="header-content">
                <div class="header-info"><br><br><br><br><br><br><br>
                    <h1>Kushal Johnpillai</h1>
                    <p class="title">Managing Director</p>
                    <p class="studio">KayJay Electronics</p>
                </div>
                <img src="logo_img/client_logo/kushal-p.png" alt="David L. Soares" class="profile-pic-new">
                
            </div>
            <div class="header-icons">
             <a href="tel:+94777323242" class="icon-btn"><i class="fas fa-mobile-alt"></i></a>

             <a href="kushal@kayjay-group.com" class="icon-btn"><i class="fas fa-envelope"></i></a>
             <a href="https://www.kayjayelectronics.com" class="icon-btn"><i class="fas fa-globe"></i></a> 
             <a href="https://wa.me/+94777323242" target="_blank" class="icon-btn"><i class="fab fa-whatsapp"></i></a>
            </div>

        </div>
        
        <div class="card-content-new">
            <div class="contact-us-title">
                <span class="icon-circle"><i class="fas fa-mobile-alt"></i></span>

                <h2>Contact Us</h2>
            </div>

            <div class="contact-item">
                <h3>Call Us</h3>
                <p><a href="tel:+94777323242">+94 77 732 3242</a></p>
            </div>

            <div class="contact-item">
                <h3>E-mail</h3>
                <p><a href="mailto:kushal@kayjay-group.com">kushal@kayjay-group.com</a></p>
            </div>

            <div class="contact-item">
                <h3>Website</h3>
                <p><a href="https://www.kayjayelectronics.com" target="_blank">www.kayjayelectronics.com</a></p>
            </div>
            <div class="contact-item">
                <h3>Location</h3>
                <p><a href="https://maps.app.goo.gl/31rY94tpDJixh7Jb9" target="_blank">No. 506, Nawala Road, Koswatte, Rajagiriya</a></p>
            </div>
            <div class="contact-item">
                <h3>Facebook</h3>
                <p><a href="https://web.facebook.com/kayjayElectronics.lk/" target="_blank">Facebook</a></p>
            </div>
            <div class="contact-item">
                <h3>Instagram</h3>
                <p><a href="https://www.instagram.com/kayjayelectronic/" target="_blank">Instagram</a></p>
            </div>
            <div class="contact-item">
                <h3>Tik Tok</h3>
                <p><a href="https://www.tiktok.com/@kayjayelectronics" target="_blank">Tik Tok</a></p>
            </div>
            <div class="contact-item">
                <h3>LinkedIn</h3>
                <p><a href="https://www.linkedin.com/in/kushal-johnpillai-17b65831?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">LinkedIn</a></p>
            </div>

            <button class="btn add-to-contact-btn" onclick="generateVCF()">
                <i class="fas fa-plus"></i> Add to Contact
            </button>
        </div>
    </div>
    

   
<script>
async function generateVCF() {
    const contactData = {
        firstName: "Kushal",
        lastName: "Johnpillai",
        title: "Managing Director",
        organization: "KayJay Electronics",
        phoneMobile: "+94777323242",
        email: "kushal@kayjay-group.com",
        website: "https://www.kayjayelectronics.com",
        address: "No. 506, Nawala Road, Koswatte, Rajagiriya",
        facebook: "https://web.facebook.com/kayjayElectronics.lk/",
        instagram: "https://www.instagram.com/kayjayelectronic/",
        tiktok: "https://www.tiktok.com/@kayjayelectronics",
        linkedin: "https://www.linkedin.com/in/kushal-johnpillai-17b65831",
        profileImage: "logo_img/client_logo/kushal-p.png"
    };

    const toBase64 = async (url) => {
        return new Promise((resolve, reject) => {
            const profileImage = new Image();
            if (!url.startsWith(window.location.origin) && !url.startsWith('/')) {
                profileImage.crossOrigin = "Anonymous";
            }
            profileImage.src = url;

            profileImage.onload = () => {
                try {
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    canvas.width = profileImage.naturalWidth;
                    canvas.height = profileImage.naturalHeight;
                    ctx.drawImage(profileImage, 0, 0);
                    const base64Image = canvas.toDataURL('image/jpeg').split(',')[1];
                    resolve(base64Image);
                } catch (error) {
                    reject(error);
                }
            };

            profileImage.onerror = () => {
                reject(new Error("Failed to load image"));
            };

            if (profileImage.complete) {
                profileImage.onload();
            }
        });
    };

    let photoBase64 = '';
    try {
        photoBase64 = await toBase64(contactData.profileImage);
    } catch (error) {
        console.error("Failed to load image for VCF:", error);
    }

    let vcfLines = [
        "BEGIN:VCARD",
        "VERSION:3.0",
        `FN:${contactData.firstName} ${contactData.lastName}`,
        `N:${contactData.lastName};${contactData.firstName};;;`,
        `ORG:${contactData.organization}`,
        `TITLE:${contactData.title}`,
        `TEL;TYPE=CELL:${contactData.phoneMobile}`,
        `EMAIL;TYPE=WORK:${contactData.email}`,
        `URL;TYPE=WORK:${contactData.website}`,
        `ADR;TYPE=WORK:;;${contactData.address};;;`,
        `URL;TYPE=Facebook:${contactData.facebook}`,
        `URL;TYPE=Instagram:${contactData.instagram}`,
        `URL;TYPE=TikTok:${contactData.tiktok}`,
        `URL;TYPE=LinkedIn:${contactData.linkedin}`,
        photoBase64 ? `PHOTO;ENCODING=b;TYPE=JPEG:${photoBase64}` : '',
        "END:VCARD"
    ];

    const vcfContent = vcfLines.filter(line => line).join('\n');
    const blob = new Blob([vcfContent], { type: 'text/vcard' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = `${contactData.firstName}_${contactData.lastName}.vcf`;
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    URL.revokeObjectURL(url);
}
</script>
</body>

</html>