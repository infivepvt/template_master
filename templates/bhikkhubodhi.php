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

        .custom-header {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 35px 20px;
            position: relative;
            height: 200px;
        }

        .custom-logo {
            width: 200px;
            position: relative;
            top: 0;
            left: 0;
            margin-bottom: 40px;
        }

        .profile-picture {
            position: absolute;
            top: 95%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .profile-picture img {
            width: 130px;
            height: 130px;
            border: 4px solid #fff;
            border-radius: 50%;
        }

        .custom-button {
            font-weight: bold;
        }

        .social-icon {
            font-size: 1.9rem;
            transition: color 0.3s;
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
            color: white;
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

        .contact-icon {
            font-size: 1.5rem;
            color: #fffefe;
        }

        .custom-phone {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .custom-phone1 {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            transition: background-color 0.1s, border-color 0.1s;
        }

        .custom-phone1:hover {
            background-color: #25D366;
            border-color: #128C7E;
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

        @keyframes float {

            0%,
            100% {
                transform: translateY(-3px);
            }

            50% {
                transform: translateY(3px);
            }
        }

        /* contact details */
        .contact {
            background-color: #373938;
        }

        /* About section */
        .about-section {
            text-align: center;
            margin: 40px 0;
        }

        .about-section p {
            max-width: 600px;
            margin: 0 auto 30px;
        }

        /* Images section */
        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin: 30px 0;
        }

        .image-gallery img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /*Accordian*/
        .accordion {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            font-family: Arial, sans-serif;
        }
        
        .accordion-item {
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }
        
        .accordion-header {
            padding: 15px 20px;
            background-color: #333;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s;
            color: #ffffff;
        }
        
        .accordion-header:hover {
            background-color:rgb(70, 70, 70);
        }
        
        .accordion-header::after {
            /* content: '+'; */
            font-size: 20px;
            transition: transform 0.3s;
        }
        
        .accordion-content {
            padding: 20 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            background-color: white;
        }
        
        .accordion-item.active .accordion-content {
            padding: 0 20px 15px;
            max-height: 500px;
        }
        
        .accordion-item.active .accordion-header {
            background-color:rgb(54, 54, 54);
        }
        
        .accordion-item.active .accordion-header::after {
            /* content: '-'; */
        }
    </style>

</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">
            <div class="card-header custom-header text-center"
                style="background-image:  url('banner_img/client_banner/Bhikkhubodidhamma-b.jpg'); height: 200px; opacity: 1;">
                <!-- <img src="logo_img/main_logo/Main_Design-l.png" alt="Company Logo" class="custom-logo" height="80px"
                    style="width: 245px; height: auto; opacity: 1;"> -->
                <div class="profile-picture">
                    <img src="profile_img/client_profile/Bhikkhubodidhamma-p.png" alt="Saliya Pathum" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center"
                style="background-color: #FFFFFF; color: #000000; text-decoration: none; ">
                <h2 class="card-title" style="font-size: 15px; text-transform: uppercase; font-weight:400">Kammaṭṭhānācariya</h2>
                <h2 class="card-title" style="font-size: 27px; text-transform: uppercase;">Ven. Kandane Bodhidhamma Thero</h2>
                <p style="color: #000000; font-size: 15px; text-transform: uppercase;">Chief Incumbent of Niweema soyā Forest Monastery <br>& Gallen Pokuna Forest Monastery <br><span style="font-size:13px">Justice of peace - whole Island (22-03-WP-WI-546)</span></p>

                <a href="https://wa.me/+94776995455" target="_blank" rel="noopener noreferrer"
                    style="text-decoration: none;">
                    <button class="btn w-100 mb-3 custom-phone1 d-flex align-items-center justify-content-center"
                        style="background-color: #25D366; color: white; height: 60px; border: 2px solid orange; border-radius: 10px; gap: 10px;">
                        <i class="fab fa-whatsapp" style="font-size: 50px; margin-right:30px;"></i>
                        <span style="font-size: 14px; font-family: 'Montserrat', sans-serif;">CONNECT WITH
                            WHATSAPP</span>
                    </button>
                </a>

                <div class="list-group mb-3">
                <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('tel:+94776995455', '_self')">
                        <img src="Images/icon/mobile-phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;"> +94776995455</span>
                    </button> 

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('tel:+94740 855 455', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;"> +94740 855 455</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('mailto:Bhikkhubodidhamma@gmail.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">Bhikkhubodidhamma@gmail.com</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('mailto:Niweemasoya@gmail.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">Niweemasoya@gmail.com</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://www.niweemasoya.com', '_blank')">
                        <img src="Images/icon/internet.png" alt=""
                            style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; 'Montserrat', sans-serif; font-size:16px; font-size:16px;">www.niweemasoya.com</span>
                    </button>

                    <button type="button"
                        class="list-group-item d-flex align-items-center justify-content-between contact"
                        onclick="window.open('https://www.google.com/maps/place/Niweema+soy%C3%A0+Forest+Monastery+%7C+%E0%B6%B1%E0%B7%92%E0%B7%80%E0%B7%93%E0%B6%B8+%E0%B7%83%E0%B7%9C%E0%B6%BA%E0%B7%8F+%E0%B7%80%E0%B6%B1+%E0%B6%85%E0%B6%BB%E0%B6%AB/@7.4938821,79.953835,9z/data=!4m10!1m2!2m1!1sNiweema+Soy%C3%A0+Forest+Monastery,Katupothana,Thabutta,Galgamuwa!3m6!1s0x3afce56ee898e9d1:0x9f471e9270e16f84!8m2!3d8.1077329!4d80.2478538!15sCjtOaXdlZW1hIFNvecOgIEZvcmVzdCBNb25hc3RlcnksS2F0dXBvdGhhLFRoYWJ1dHRhLEdhbGdhbXV3YVo9IjtuaXdlZW1hIHNvecOgIGZvcmVzdCBtb25hc3Rlcnkga2F0dXBvdGhhIHRoYWJ1dHRhIGdhbGdhbXV3YZIBCW1vbmFzdGVyeZoBJENoZERTVWhOTUc5blMwVkpRMEZuU1VReGFreDZOR3QzUlJBQuABAPoBBAgAECo!16s%2Fg%2F11rvjg96f1?authuser=0&entry=ttu&g_ep=EgoyMDI1MDUwMy4wIKXMDSoASAFQAw%3D%3D', '_blank')">
                        <img src="Images/icon/map.png" alt="" style="width: 30px; height: 30px; margin-right:25px;">
                        <span class="text-center flex-grow-1 text-truncate custom-phone"
                            style="color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size:16px;">Niweema Soya Forest Monastery,<br>Katupothana,Thabutta,Galgamuwa</span>
                    </button>
                </div>

                <!--accordian-->
                <div class="accordion">
                    <div class="accordion">
                    <div class="accordion-item">
                        <div class="accordion-header" style="justify-content:center">ACCOUNT DETAILS</div>
                        <div class="accordion-content">
                            <p style="margin-top:10px">Ven. K. Bodhidhamma Thero<br>8014393910<br>Commercial Bank Thambuththegama Branch</p>
                        </div>
                    </div>
                </div>

                <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:19px">CONNECT WITH SOCIAL MEDIA
                </p>
                <div class="d-flex flex-wrap justify-content-center">
                    <!-- <a href="#" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 50px; height: 50px;">
                    </a> -->
                    <a href="https://www.facebook.com/share/15TiQupSmM/" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://youtube.com/@niweemasoyaa9372?si=pR4X4GLew9BtgaQ5" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.tiktok.com/@niweema.soy.fores?_t=ZS-8w5xtsqz3Xc&_r=1" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 50px; height: 50px;">
                    </a>
                </div>

                <br>
                <button class="btn w-100 custom-save-button" onclick="generateVCF()"
                    style="font-family: 'Montserrat', sans-serif; font-size:19px; border: 2px solid orange;">
                    <img src="Images/Social_Media_Icon/save.png" alt=""
                        style="width: 50px; height: 50px; margin-right:25px;">
                    SAVE TO CONTACTS
                </button>

                <br>
                <footer style="text-align:center; padding:10px; font-size:14px; color:black;">
                    <a href="https://tapilinq.com/" target="_blank" style="text-decoration:none; color:black;">
                        Made with ❤️ by Tapilinq | Click now
                    </a>
                </footer>

                <section class="about-section">
            <!-- <h2 style="color: white;">About Me</h2>
            <p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                ullamcorper mattis,
                pulvinar dapibus leo.</p> -->

            <div class="image-gallery">
                <img src="gallery_img/client_gallerys/bhikkhubodhi/bhikkhubodhi-g1.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/bhikkhubodhi/bhikkhubodhi-g2.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/bhikkhubodhi/bhikkhubodhi-g3.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/bhikkhubodhi/bhikkhubodhi-g4.jpeg" alt="Business man back view">              
                <img src="gallery_img/client_gallerys/bhikkhubodhi/bhikkhubodhi-g5.jpeg" alt="Business man back view">
                <img src="gallery_img/client_gallerys/bhikkhubodhi/bhikkhubodhi-g6.jpeg" alt="Business man back view">
            </div>

            
        </section>
            </div>
        </div>
    </div>
    
    <script>
        document.querySelectorAll('.accordion-header').forEach(header => {
            header.addEventListener('click', () => {
                const item = header.parentNode;
                const accordion = item.parentNode;
                
                // Close all other items
                accordion.querySelectorAll('.accordion-item').forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });
                
                // Toggle current item
                item.classList.toggle('active');
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    async function generateVCF() {
        try {
            // Updated contact information to match the business card
            const contactData = {
                firstName: "Kammatthanacariya Ven. Kandane Bodhidhamma Thero ",
                lastName: "",
                title: "",
                phoneWork: "0740855455",
                phoneMobile: "0776995455",
                email: "Bhikkhubodidhamma@gmail.com",
                email2: "Niweemasoya@gmail.com",
                website: "www.niweemasoya.com",
                address: "Niweema Soyà Forest Monastery,Katupothana,Thabutta,Galgamuwa",
                about: "Chief Incumbent of Niweema soyā Forest Monastery & Gallen Pokuna Forest Monastery",
                profileImage: "profile_img/client_profile/Bhikkhubodidhamma-p.png"
            };

            // Convert image to base64
            const base64Image = await getBase64Image(contactData.profileImage);

            // Create VCF content with image
            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName}${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL:${contactData.phoneMobile}
EMAIL:${contactData.email}
EMAIL:${contactData.email2}
URL:${contactData.website}
ADR;TYPE=WORK:;;${contactData.address}
NOTE:${contactData.about}
PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}
REV:${new Date().toISOString()}
END:VCARD`;

            // Create download link
            const blob = new Blob([vcfContent], { type: 'text/vcard' });
            const url = URL.createObjectURL(blob);

            const a = document.createElement('a');
            a.href = url;
            a.download = `${contactData.firstName.replace(/\s+/g, '_')}.vcf`;
            document.body.appendChild(a);
            a.click();

            // Clean up
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        } catch (error) {
            console.error('Error generating vCard:', error);
            // Fallback to vCard without image if there's an error
            generateFallbackVCF();
        }
    }

    // Function to convert image to base64
    function getBase64Image(url) {
        return new Promise((resolve, reject) => {
            const img = new Image();
            img.crossOrigin = 'Anonymous';
            img.onload = function() {
                const canvas = document.createElement('canvas');
                canvas.width = this.naturalWidth;
                canvas.height = this.naturalHeight;
                const ctx = canvas.getContext('2d');
                ctx.drawImage(this, 0, 0);
                const dataURL = canvas.toDataURL('image/jpeg');
                resolve(dataURL.split(',')[1]); // Remove the data URL prefix
            };
            img.onerror = function() {
                reject(new Error('Could not load image'));
            };
            img.src = url;
        });
    }

    // Fallback vCard without image
    function generateFallbackVCF() {
        const contactData = {
            firstName: "Kammatthanacariya Ven. Kandane Bodhidhamma Thero ",
            lastName: "",
            title: "",
            phoneWork: "0740855455",
            phoneMobile: "0776995455",
            email: "Bhikkhubodidhamma@gmail.com",
            email2: "Niweemasoya@gmail.com",
            website: "www.niweemasoya.com",
            address: "Niweema Soyà Forest Monastery,Katupothana,Thabutta,Galgamuwa",
            about: "Chief Incumbent of Niweema soyā Forest Monastery & Gallen Pokuna Forest Monastery"
        };

        let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName}${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL:${contactData.phoneMobile}
EMAIL:${contactData.email}
EMAIL:${contactData.email2}
URL:${contactData.website}
ADR;TYPE=WORK:;;${contactData.address}
NOTE:${contactData.about}
REV:${new Date().toISOString()}
END:VCARD`;

        const blob = new Blob([vcfContent], { type: 'text/vcard' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `${contactData.firstName.replace(/\s+/g, '_')}.vcf`;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    }
</script>
</body>

</html>