<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHARLZ - Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f0f2f5;
        }

        .custom-card {
            border-radius: 15px;
            overflow: hidden;
            background: #EEF1FF;
            width: 450px;
            height: auto;
            margin-top: -55px;
            padding-bottom: 20px;
        }

        .custom-header {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 35px 20px;
            position: relative;
            height: 200px; /* Adjusted height for cleaner look */
        }

        .profile-picture {
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 5px solid #fff; /* Added border to profile picture */
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .profile-picture img {
            width: 164px;
            height: 164px;
            border-radius: 50%;
            display: block; /* Ensures no extra space below image */
        }

        .custom-button {
            font-weight: bold;
        }

        .social-icon {
            font-size: 1.9rem;
            transition: color 0.3s;
        }

        .list-group-item {
            background-color: #000000; /* Dark background for contact items */
            color: #fff;
            border-radius: 8px;
            margin-bottom: 10px;
            border: 1px solid #444;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            justify-content: flex-start; /* Align content to the start */
            transition: background-color 0.3s, border-color 0.3s;
        }

        .list-group-item:hover {
            background-color: #222; /* Slightly lighter on hover */
            border-color: #666;
        }

        .list-group-item img {
            margin-right: 15px; /* Space between icon and text */
        }

        .custom-save-button {
            background: #000000;
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
            border: 2px solid orange !important; /* Important to override Bootstrap's default */
        }

        .custom-save-button:hover {
            background: #333333; /* Darker on hover */
        }

        .custom-phone, .custom-phone1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            text-decoration: none; /* Remove underline from links */
        }

        .custom-phone1 {
            background-color: #25D366; /* WhatsApp green */
            height: 60px;
            border: 2px solid orange;
            border-radius: 10px;
            gap: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }

        .custom-phone1:hover {
            background-color: #128C7E; /* Darker WhatsApp green on hover */
        }

        /* Gallery Styles */
        .gallery-container {
            padding: 20px;
            text-align: center;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); /* Responsive grid */
            gap: 15px;
            justify-content: center;
            margin-top: 20px;
        }

        .gallery-item {
            cursor: pointer;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .gallery-item:hover {
            transform: scale(1.03);
        }

        .gallery-item img {
            width: 100%;
            height: 150px; /* Fixed height for consistent grid */
            object-fit: cover; /* Cover the area without distortion */
            display: block;
        }

        /* Lightbox (Modal) Styles */
        .modal-content {
            background-color: rgba(0, 0, 0, 0.9); /* Dark overlay */
            border: none;
            border-radius: 0;
        }

        .modal-body {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            position: relative;
        }

        .modal-body img {
            max-width: 100%;
            max-height: 80vh; /* Limit height to viewport height */
            object-fit: contain;
        }

        .modal-header {
            border-bottom: none;
        }

        .modal-footer {
            border-top: none;
            justify-content: center;
        }

        .carousel-control-prev, .carousel-control-next {
            width: 10%; /* Make arrows more prominent */
            opacity: 1; /* Always show arrows */
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: rgba(255, 255, 255, 0.6); /* White arrows */
            border-radius: 50%;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">
            <div class="card-header custom-header text-center"
                style="background-image: url('banner_img/client_banner/sharlz-b.jpg');">
                <div class="profile-picture">
                    <img src="profile_img/client_profile/sharlz-p.png" alt="SHARLZ Profile" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center" style="background-color: #FFFFFF; color: #000000;">
                <h2 class="card-title" style="font-size: 27px; text-transform: uppercase;">SHARLZ</h2>
                <p style="color: #000000; font-size: 21px; text-transform: uppercase;"></p>
            </div>

            <a href="https://wa.me/+94767768678" target="_blank" rel="noopener noreferrer"
                class="btn w-100 mb-3 custom-phone1">
                <i class="fab fa-whatsapp" style="font-size: 50px; margin-right: 15px;"></i>
                <span style="font-size: 14px;">CONNECT WITH WHATSAPP</span>
            </a>

            <div class="list-group mb-3 px-3">
                <button type="button" class="list-group-item" onclick="window.open('tel:+94 776 768 678', '_self')">
                    <img src="Images/icon/phone.png" alt="Phone Icon" style="width: 30px; height: 30px;">
                    <span class="text-truncate custom-phone">+94 776 768 678</span>
                </button>

                <button type="button" class="list-group-item"
                    onclick="window.open('mailto:sharlztc.ak@gmail.com', '_self')">
                    <img src="Images/icon/mail.png" alt="Mail Icon" style="width: 30px; height: 30px;">
                    <span class="text-truncate custom-phone" style="font-size:16px;">sharlztc.ak@gmail.com</span>
                </button>
                <button type="button" class="list-group-item"
                    onclick="window.open('https://maps.app.goo.gl/VGXALykn7xeZsAjN7', '_blank')">
                    <img src="Images/icon/map.png" alt="Map Icon" style="width: 30px; height: 30px;">
                    <span class="text-truncate custom-phone" style="font-size:16px;">AKURANA</span>
                </button>
            </div>

            <div class="gallery-container">
                <h3 class="text-center mb-4">Gallery</h3>
                <div class="gallery-grid">
                    <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-slide-to="0">
                        <img src="gallery_img/client_gallerys/sharlz/sharlz-g1.jpeg" alt="Gallery Image 1">
                    </div>
                    <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-slide-to="1">
                        <img src="gallery_img/client_gallerys/sharlz/sharlz-g2.jpeg" alt="Gallery Image 2">
                    </div>
                    <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-slide-to="2">
                        <img src="gallery_img/client_gallerys/sharlz/sharlz-g3.jpeg" alt="Gallery Image 3">
                    </div>
                    <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-slide-to="3">
                        <img src="gallery_img/client_gallerys/sharlz/sharlz-g4.jpeg" alt="Gallery Image 4">
                    </div>
                    <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-slide-to="4">
                        <img src="gallery_img/client_gallerys/sharlz/sharlz-g5.jpeg" alt="Gallery Image 5">
                    </div>
                </div>
            </div>

            <br>
            <button class="btn w-100 custom-save-button px-3" onclick="generateVCF()">
                <img src="Images/Social_Media_Icon/save.png" alt="Save Icon" style="width: 50px; height: 50px; margin-right: 15px;">
                SAVE TO CONTACTS
            </button>
        </div>
    </div>

    <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="galleryCarousel" class="carousel slide" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="gallery_img/client_gallerys/sharlz/sharlz-g1.jpeg" class="d-block w-100" alt="Gallery Image 1">
                            </div>
                            <div class="carousel-item">
                                <img src="gallery_img/client_gallerys/sharlz/sharlz-g2.jpeg" class="d-block w-100" alt="Gallery Image 2">
                            </div>
                            <div class="carousel-item">
                                <img src="gallery_img/client_gallerys/sharlz/sharlz-g3.jpeg" class="d-block w-100" alt="Gallery Image 3">
                            </div>
                            <div class="carousel-item">
                                <img src="gallery_img/client_gallerys/sharlz/sharlz-g4.jpeg" class="d-block w-100" alt="Gallery Image 4">
                            </div>
                            <div class="carousel-item">
                                <img src="gallery_img/client_gallerys/sharlz/sharlz-g5.jpeg" class="d-block w-100" alt="Gallery Image 5">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function generateVCF() {
            const contactData = {
                firstName: "SHARLZ",
                lastName: "",
                title: "",
                phoneWork: "+94 776 768 678",
                phoneMobile: "",
                email: "sharlztc.ak@gmail.com",
                email2: "",
                email3: "",
                website: "",
                website2: "",
                website3: "",
                address: "Akurana",
                address2: "",
                about: "",
                logo: "profile_img/client_profile/sharlz-p.png",
                profileImage: "profile_img/client_profile/sharlz-p.png"
            };

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

        // JavaScript to ensure the carousel starts at the correct image when modal opens
        const galleryModal = document.getElementById('galleryModal');
        galleryModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget; // Button that triggered the modal
            const imageIndex = button.getAttribute('data-bs-slide-to'); // Get the index
            const carousel = new bootstrap.Carousel(document.getElementById('galleryCarousel'));
            carousel.to(imageIndex); // Set carousel to the clicked image
        });
    </script>
</body>

</html>