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
                                <h1 class="text-center title" data-aos="fade-right" data-aos-duration="2000">Ceylon Tours</h1>
                                <p class="text-center txt1" data-aos="fade-left" data-aos-duration="2000">Flying To The World Comfortability</p>
                                <!-- <p class="text-center txt2" data-aos="fade-left" data-aos-duration="2000">Flying To The World Comfortability</p> -->
                            </div>

                            <div class="d-flex mt-4">
                                <div onclick="window.open('https://wa.me/94701345346', '_blank')" class="col-4 d-flex flex-column align-items-center zoom-in-out-in">
                                    <div class="contact-box d-flex justify-content-center align-items-center">
                                        <i class="fas fa-comment text-white fs-2"></i>
                                    </div>
                                    <p class="text-center txt1">Text</p>
                                </div>

                                <div onclick="window.open('tel:0701345346', '_blank')" class="col-4 d-flex flex-column align-items-center zoom-in-out-in">
                                    <div class="contact-box d-flex justify-content-center align-items-center">
                                        <i class="fas fa-phone-alt text-white fs-2"></i>
                                    </div>
                                    <p class="text-center txt1">Call</p>
                                </div>

                                <div onclick="window.open('mailto:dambadivavandana@gmail.com', '_blank')" class="col-4 d-flex flex-column align-items-center zoom-in-out-in">
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

                    <div class="card card1 rounded rounded-4 mt-3">
                        <div class="card-body">
                            <div class="d-flex mt-4 zoom-in-out-in">
                                <div onclick="window.open('https://www.facebook.com/share/12LAvEYzLHY', '_blank')" class="col d-flex flex-column align-items-center">
                                    <div class=" d-flex justify-content-center align-items-center">
                                        <i class="fab fa-facebook" style="color: rgb(62, 170, 245); font-size: 40px;"></i>
                                    </div>
                                    <p class="text-center txt3">facebook</p>
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

                    <div class="card card1 rounded rounded-4 mt-3" onclick="window.open('https://dambadiwawandana.com/', '_blank')">
                        <div class="card-body">
                            <div class="d-flex gap-2 align-items-center justify-content-center zoom-in-slow">
                                <i class="fas fa-link text-black"></i>
                                <span class="fw-bold fs-6">Check Out My Website</span>
                            </div>
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
            phoneWork: "+94770676330",
            phoneMobile: "+94701345346",
            email: "dambadivavandana@gmail.com",
            email2: "",
            email3: "",
            website: "https://dambadiwawandana.com/",
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
</script>

</html>