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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        .profile {
            width: 250px;
            aspect-ratio: 1/1;
            position: absolute;
            left: 50%;
            transform: translate(-50%, -65%);
            margin-top: 50px;
        }

        .main-container {
            margin-top: 100px;
        }

        .contents {
            /* margin-top: 60px; */
        }

        .title {
            color: rgb(62, 170, 245);
            font-size: 30px !important;
            font-weight: bold;
            font-family: "Poppins";
        }

        .txt1 {
            font-size: 17px;
            font-weight: bold;
            font-family: "Poppins";
        }

        .txt2 {
            margin-top: -10px;
            font-size: 16px;
            color: rgb(90, 89, 89);
            font-family: "Poppins";
        }

        .txt3 {
            font-size: 14px;
            margin-top: 10px;
        }

        .contact-box {
            width: 50px;
            aspect-ratio: 1/1;
            border-radius: 50px;
            background-color: rgb(62, 170, 245);
        }

        .contact-box2 {
            width: 35px;
            aspect-ratio: 1/1;
            border-radius: 4px;
            background-color: rgb(62, 170, 245);
        }

        .card1 {
            background: linear-gradient(to bottom right,
                    rgba(255, 255, 255, 0.15),
                    rgba(255, 255, 255, 0.05));
            box-shadow: 0 0px 7px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 20px;
        }


        .bg-main {
            background-image: url('banner_img/client_banner/lucknow-b.png');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        .container1 {
            min-height: 100vh;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .custom-save-button {
            background: linear-gradient(to right, #3711a4, #4ad9dd);
            /* background: linear-gradient(to right, #cb245c,#a939c3, #5c25f2); */
            background-color: #3642bc;
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
            background: linear-gradient(to right, #3711a4, #4ad9dd);
            /* background: linear-gradient(to right, #cb245c,#a939c3, #5c25f2); */
        }

        /* gallery */

        .gallery-section {
            padding: 20px;
            /* background-color: #000; */
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
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            /* margin-top: 10px; */
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

        .gradient-button {
            background-color: #3f51b5;
            /* blue → purple → pink */
            border: none;
            color: white;
            transition: 0.3s ease;
        }

        .gradient-button:hover {
            filter: brightness(1.1);
            cursor: pointer;
        }

        /* gallery */

        @keyframes zoom-in {
            from {
                transform: translate(-50%, -65%) scale(0.8);
                opacity: 0;
            }

            to {
                transform: translate(-50%, -65%) scale(1);
                opacity: 1;
            }
        }

        .zoom-in {
            position: absolute;
            left: 50%;
            transform: translate(-50%, -65%);
            animation: zoom-in 0.5s ease-out forwards;
        }

        @keyframes zoom-in-out-in {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }

            20% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(0.9);
            }

            100% {
                transform: scale(1);
            }
        }

        .zoom-in-out-in {
            animation: zoom-in-out-in 1s ease-in-out forwards;
        }

        @keyframes zoom-in-slow {
            from {
                transform: scale(0.8);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .zoom-in-slow {
            left: 50%;
            animation: zoom-in-slow 1.5s ease-out forwards;
        }
    </style>


</head>

<body>

    <div class="container bg-main">
        <div class="row justify-content-center container1">
            <div class="col-12 col-md-8 col-lg-6 main-container">
                <div class="row p-2">
                    <img class="profile zoom-in" src="logo_img/client_logo/lucknow-l.png" alt="Luck Now Logo">
                    <div class="card card1 rounded rounded-4" style="margin-top: 130px;">
                        <div class="card-body">
                            <div class="contents">
                                <h1 class="text-center title" data-aos="fade-right" data-aos-duration="2000">Luck now Ceylon tours</h1>
                                <p class="text-center txt1" data-aos="fade-left" data-aos-duration="2000">Flying To The World Comfortability</p>
                                <!-- <p class="text-center txt2" data-aos="fade-left" data-aos-duration="2000">Flying To The World Comfortability</p> -->
                            </div>

                            <div class="d-flex mt-4">
                                <div onclick="window.open('https://wa.me/94701345346', '_blank')" class="col-4 d-flex flex-column align-items-center zoom-in-out-in">
                                    <div class="contact-box d-flex justify-content-center align-items-center">
                                        <i class="fas fa-comment text-white fs-2" style="transform: scaleX(-1);"></i>
                                    </div>
                                    <p class="text-center txt1">Text</p>
                                </div>

                                <div onclick="window.open('tel:+94701345346', '_blank')" class="col-4 d-flex flex-column align-items-center zoom-in-out-in">
                                    <div class="contact-box d-flex justify-content-center align-items-center">
                                        <i class="fas fa-phone-alt text-white fs-2" style="transform: scaleX(-1);"></i>
                                    </div>
                                    <p class="text-center txt1">Call</p>
                                </div>

                                <div onclick="window.open('mailto:info@lucknowceylontours.com', '_blank')" class="col-4 d-flex flex-column align-items-center zoom-in-out-in">
                                    <div class="contact-box d-flex justify-content-center align-items-center">
                                        <i class="fas fa-envelope text-white fs-2"></i>
                                    </div>
                                    <p class="text-center txt1">Email</p>
                                </div>
                            </div>

                            <!-- <div class="d-flex justify-content-center"> -->
                            <!-- <div class="d-flex mt-2 px-4 zoom-in-out-in" style="width: 300px;"> -->
                            <!-- <div onclick="window.open('https://www.facebook.com/dambadiwawandana', '_blank')" class="col d-flex flex-column align-items-center zoom-in-out-in">
                                        <div class="contact-box2 d-flex justify-content-center align-items-center">
                                            <i class="fab fa-facebook text-white fs-5"></i>
                                        </div>
                                    </div> -->

                            <!-- <div class="col d-flex flex-column align-items-center">
                                        <div class="contact-box2 d-flex justify-content-center align-items-center">
                                            <i class="fab fa-twitter text-white fs-5"></i>
                                        </div>
                                    </div> -->

                            <!-- <div onclick="window.open('https://www.youtube.com/@lucknowtours', '_blank')" class="col d-flex flex-column align-items-center">
                                        <div class="contact-box2 d-flex justify-content-center align-items-center">
                                            <i class="fab fa-youtube text-white fs-5"></i>
                                        </div>
                                    </div> -->

                            <!-- <div class="col d-flex flex-column align-items-center">
                                        <div class="contact-box2 d-flex justify-content-center align-items-center">
                                            <i class="fab fa-instagram text-white fs-5"></i>
                                        </div>
                                    </div> -->

                            <!-- <div onclick="window.open('https://maps.app.goo.gl/f67DcVLxYHbufzhZ9', '_blank')" class="col d-flex flex-column align-items-center">
                                        <div class="contact-box2 d-flex justify-content-center align-items-center">
                                            <i class="bi bi-geo-alt-fill text-white fs-5"></i>
                                        </div>
                                    </div> -->
                            <!-- </div> -->
                            <!-- </div> -->
                        </div>
                    </div>

                    <div class="card card1 rounded rounded-4 mt-3" style="margin-top: 130px;">
                        <div class="card-body p-0">
                            <div class="contents">
                                <h1 class="text-center title" data-aos="fade-right" data-aos-duration="2000">About</h1>
                            </div>

                            <div class="accordion mt-4" id="infoAccordion">
                                <!-- Business Registration -->
                                <div class="accordion-item bg-transparent border-0">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Business Registration
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#infoAccordion">
                                        <div class="accordion-body bg-transparent">
                                            <p class="mb-1">28/12/2011 – W.D.12616 (Lucknow Tours)</p>
                                            <p class="mb-0">24/08/2024 – PV00308306 (Luck Now Ceylon Tours Pvt Ltd.)</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Other Registration -->
                                <div class="accordion-item bg-transparent border-0">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Other Registration
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#infoAccordion">
                                        <div class="accordion-body bg-transparent">
                                            <p class="mb-1">Immigration Emigration – 0225</p>
                                            <p class="mb-0">Ministry of Buddhasasana – 194</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Our Awards -->
                                <div class="accordion-item bg-transparent border-0">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Our Awards
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#infoAccordion">
                                        <div class="accordion-body bg-transparent">
                                            <strong>International</strong>
                                            <ul class="mb-2">
                                                <li>Religious Tours DMC – South Asia 2024 (India)</li>
                                                <li>Asia Super Tour Service Award 2023–2024 (India)</li>
                                            </ul>
                                            <strong>Local</strong>
                                            <ul class="mb-0">
                                                <li>Best Travel Company 2024 – Asian Miracle Awards (Colombo)</li>
                                                <li>Most Outstanding Company 2024 – Pinnacle Awards (Colombo)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!-- <div class="d-flex justify-content-center"> -->
                            <!-- <div class="d-flex mt-2 px-4 zoom-in-out-in" style="width: 300px;"> -->
                            <!-- <div onclick="window.open('https://www.facebook.com/dambadiwawandana', '_blank')" class="col d-flex flex-column align-items-center zoom-in-out-in">
                                        <div class="contact-box2 d-flex justify-content-center align-items-center">
                                            <i class="fab fa-facebook text-white fs-5"></i>
                                        </div>
                                    </div> -->

                            <!-- <div class="col d-flex flex-column align-items-center">
                                        <div class="contact-box2 d-flex justify-content-center align-items-center">
                                            <i class="fab fa-twitter text-white fs-5"></i>
                                        </div>
                                    </div> -->

                            <!-- <div onclick="window.open('https://www.youtube.com/@lucknowtours', '_blank')" class="col d-flex flex-column align-items-center">
                                        <div class="contact-box2 d-flex justify-content-center align-items-center">
                                            <i class="fab fa-youtube text-white fs-5"></i>
                                        </div>
                                    </div> -->

                            <!-- <div class="col d-flex flex-column align-items-center">
                                        <div class="contact-box2 d-flex justify-content-center align-items-center">
                                            <i class="fab fa-instagram text-white fs-5"></i>
                                        </div>
                                    </div> -->

                            <!-- <div onclick="window.open('https://maps.app.goo.gl/f67DcVLxYHbufzhZ9', '_blank')" class="col d-flex flex-column align-items-center">
                                        <div class="contact-box2 d-flex justify-content-center align-items-center">
                                            <i class="bi bi-geo-alt-fill text-white fs-5"></i>
                                        </div>
                                    </div> -->
                            <!-- </div> -->
                            <!-- </div> -->
                        </div>
                    </div>

                    <div class="card card1 rounded rounded-4 mt-3">
                        <div class="card-body">
                            <div class="d-flex mt-4 zoom-in-out-in">
                                <div onclick="window.open('https://www.facebook.com/share/12LAvEYzLHY', '_blank')" class="col d-flex flex-column align-items-center">
                                    <div class=" d-flex justify-content-center align-items-center">
                                        <i class="fab fa-facebook" style="color: rgb(62, 170, 245); font-size: 40px;"></i>
                                    </div>
                                    <p class="text-center txt3">facebook</p>
                                </div>

                                <div onclick="window.open('https://www.instagram.com/lucknow.ceylon_tours?igsh=YzljYTk1ODg3Zg==', '_blank')" class="col d-flex flex-column align-items-center">
                                    <div class=" d-flex justify-content-center align-items-center">
                                        <i class="fab fa-instagram" style="color: rgb(62, 170, 245); font-size: 40px;"></i>
                                    </div>
                                    <p class="text-center txt3">Instagram</p>
                                </div>

                                <div onclick="window.open('https://www.youtube.com/@Lucknowcelyontours', '_blank')" class="col d-flex flex-column align-items-center">
                                    <div class=" d-flex justify-content-center align-items-center">
                                        <i class="fab fa-youtube" style="color: rgb(62, 170, 245); font-size: 40px;"></i>
                                    </div>
                                    <p class="text-center txt3">Watch</p>
                                </div>

                                <div onclick="window.open('https://maps.app.goo.gl/vh9n7pqbsgBzu6Wo8', '_blank')" class="col d-flex flex-column align-items-center">
                                    <div class=" d-flex justify-content-center align-items-center">
                                        <i class="bi bi-geo-alt-fill" style="color: rgb(62, 170, 245); font-size: 40px; margin-top:-10px;"></i>
                                    </div>
                                    <p class="text-center txt3" style="margin-top:-0px;">Visit</p>
                                </div>

                                <!-- <div class="col d-flex flex-column align-items-center">
                                    <div class=" d-flex justify-content-center align-items-center">
                                        <i class="fas fa-qrcode" style="color: rgb(62, 170, 245); font-size: 40px;"></i>
                                    </div>
                                    <p class="text-center txt3">Scan</p>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="card card1 rounded rounded-4 mt-3" onclick="window.open('https://www.lucknowceylontours.com', '_blank')">
                        <div class="card-body">
                            <div class="d-flex gap-2 align-items-center justify-content-center zoom-in-slow">
                                <i class="fas fa-link text-black"></i>
                                <span class="fw-bold fs-6">Check Out My Website</span>
                            </div>
                        </div>
                    </div>

                    <div class="card card1 rounded rounded-4 mt-3">
                        <div class="card-body p-0">
                            <!-- gallery -->

                            <h1 class="text-center title" data-aos="fade-right" data-aos-duration="2000">Gallery</h1>

                            <div class="gallery-section" style="margin-top: -10px;">
                                <!-- <div class="gallery-header" onclick="toggleGallery()">
                        <div class="gallery-title">Gallery</div>
                        <div class="gallery-toggle" id="galleryToggle">
                            <i class="fas fa-minus"></i>
                        </div>
                    </div> -->
                                <div class="gallery-container" id="galleryContainer">
                                    <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/lucknow/lucknow-g1.jpeg')">
                                        <img src="gallery_img/client_gallerys/lucknow/lucknow-g1.jpeg" alt="Gallery Image 1" class="gallery-image">
                                    </div>
                                    <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/lucknow/lucknow-g2.jpeg')">
                                        <img src="gallery_img/client_gallerys/lucknow/lucknow-g2.jpeg" alt="Gallery Image 2" class="gallery-image">
                                    </div>
                                    <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/lucknow/lucknow-g3.jpeg')">
                                        <img src="gallery_img/client_gallerys/lucknow/lucknow-g3.jpeg" alt="Gallery Image 3" class="gallery-image">
                                    </div>
                                    <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/lucknow/lucknow-g4.jpeg')">
                                        <img src="gallery_img/client_gallerys/lucknow/lucknow-g4.jpeg" alt="Gallery Image 4" class="gallery-image">
                                    </div>
                                </div>
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

                    <button class="btn w-100 custom-save-button mt-3 mb-5" onclick="generateVCF()"
                        style="font-family: 'Montserrat', sans-serif; font-size:19px; border: 2px solid orange;">
                        <img src="Images/Social_Media_Icon/save.png" alt=""
                            style="width: 50px; height: 50px; margin-right:25px;">
                        SAVE TO CONTACTS
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script>
    async function generateVCF() {
        const contactData = {
            firstName: "Luck",
            lastName: "Now",
            title: "Ceylon Tours",
            phoneWork: "",
            phoneMobile: "+94701345346",
            email: "info@lucknowceylontours.com",
            email2: "",
            email3: "",
            website: "www.lucknowceylontours.com",
            website2: "",
            website3: "",
            address: "",
            address2: "",
            about: "Flying To The World Comfortability",
            logo: "https://tapilinq.com/logo_img/client_logo/lucknow-l.png",
            profileImage: "https://tapilinq.com/logo_img/client_logo/lucknow-l.png" // Same as logo in this case
        };

        // Convert image to base64
        const toBase64 = async (url) => {
            const response = await fetch(url);
            const blob = await response.blob();
            return new Promise((resolve, reject) => {
                const reader = new FileReader();
                reader.onloadend = () => resolve(reader.result.split(',')[1]);
                reader.onerror = reject;
                reader.readAsDataURL(blob);
            });
        };

        let photoBase64 = '';
        try {
            photoBase64 = await toBase64(contactData.profileImage);
        } catch (error) {
            console.error("Failed to load image for VCF:", error);
        }

        // Build VCF content
        let vcfLines = [
            "BEGIN:VCARD",
            "VERSION:3.0",
            `FN:${contactData.firstName} ${contactData.lastName}`,
            `N:${contactData.lastName};${contactData.firstName};;;`,
        ];

        if (contactData.title) vcfLines.push(`TITLE:${contactData.title}`);
        if (contactData.phoneWork) vcfLines.push(`TEL;TYPE=WORK,VOICE:${contactData.phoneWork}`);
        if (contactData.phoneMobile) vcfLines.push(`TEL;TYPE=CELL:${contactData.phoneMobile}`);
        if (contactData.email) vcfLines.push(`EMAIL:${contactData.email}`);
        if (contactData.email2) vcfLines.push(`EMAIL:${contactData.email2}`);
        if (contactData.email3) vcfLines.push(`EMAIL:${contactData.email3}`);
        if (contactData.website) vcfLines.push(`URL:${contactData.website}`);
        if (contactData.website2) vcfLines.push(`URL:${contactData.website2}`);
        if (contactData.website3) vcfLines.push(`URL:${contactData.website3}`);
        if (contactData.address) vcfLines.push(`ADR;TYPE=WORK:;;${contactData.address}`);
        if (contactData.address2) vcfLines.push(`ADR;TYPE=HOME:;;${contactData.address2}`);
        if (contactData.about) vcfLines.push(`NOTE:${contactData.about}`);

        // Embed profile image (base64 JPEG format)
        if (photoBase64) {
            vcfLines.push(`PHOTO;ENCODING=b;TYPE=JPEG:${photoBase64}`);
        }

        vcfLines.push("END:VCARD");

        const vcfContent = vcfLines.join('\n');

        // Trigger download
        const blob = new Blob([vcfContent], {
            type: 'text/vcard'
        });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `${contactData.firstName}_${contactData.lastName}.vcf`;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    }

    // Gallery images array
    const galleryImages = [
        'gallery_img/client_gallerys/lucknow/lucknow-g1.jpeg',
        'gallery_img/client_gallerys/lucknow/lucknow-g2.jpeg',
        'gallery_img/client_gallerys/lucknow/lucknow-g3.jpeg',
        'gallery_img/client_gallerys/lucknow/lucknow-g4.jpeg',
    ];

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
    document.getElementById('lightbox').addEventListener('click', function(e) {
        if (e.target === this) {
            closeLightbox();
        }
    });

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
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

</html>