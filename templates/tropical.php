<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Card Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt:ital,wght@0,100..900;1,100..900&family=Style+Script&family=Aboreto&family=Allison&family=Dancing+Script:wght@400..700&family=Alumni+Sans+Pinstripe:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Share+Tech+Mono&family=Sawarabi+Mincho&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #ececec;
        }

        .profile {
            width: 50%;
            margin: 50px;
            margin-bottom: 100px;
            border-radius: 50%;
        }

        /* .box1 {
            background-color: #d5d5d5;
        } */

        .box2 {
            margin-top: -120px;
        }

        .txt1 {
            font-family: "Sawarabi Mincho";
            font-size: 40px;
            color: #c5a77c;
            font-weight: bold;
        }

        .txt2 {
            font-family: "Rubik";
            font-size: 17px;
            color: rgb(71, 71, 71);
            letter-spacing: 3px;
            font-weight: 400;
        }

        .box3 {
            margin-top: 40px;
        }

        .box4 {
            margin-top: 20px;
            background: linear-gradient(to right, green, yellow);
        }

        .icon-1 {
            color: #c5a77c;
        }

        .txt3 {
            color: #c5a77c;
            font-family: "Roboto";
            font-size: 20px;
        }

        .save-btn {
            background: linear-gradient(to right, #4caf50, #2e7d32);
            /* light to dark green */
            color: white;
            border: none;
            border-radius: 4px !important;
            padding: 10px 20px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .save-btn:hover {
            background-color: #c5a77c !important;
            color: white !important;
            border: none !important;
        }

        .save-btn:focus {
            background-color: #c5a77c !important;
            color: white !important;
            border: none !important;
        }

        .save-btn:active {
            background-color: #c5a77c !important;
            color: white !important;
            border: none !important;
        }

        .bg-1 {
            background-color: #c5a77c;
            border-radius: 50%;
        }

        .box5 {
            background: unset;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-12 col-md-8 col-lg-6 d-flex flex-column">
                <div class="row justify-content-center  bg-dark">
                    <img src="profile_img/client_profile/tropical-p.png" class="profile">
                </div>
                <div class="box2 bg-white d-flex justify-content-center">
                    <span class="txt1 text-warning">Gayathri Perera</span>
                </div>
                <div class="box3 bg-white d-flex justify-content-center p-1">
                    <span class="txt2">PROJECT LEAD</span>
                </div>
                <div onclick="window.open('tel:0770551851', '_self')" class="box4 rounded-3 bg-white d-flex justify-content-center p-2 align-items-center gap-1">
                    <i class="fas fa-mobile-alt icon-1 fs-5 text-black"></i>
                    <span class="txt3 text-black">+94 77 055 1851</span>
                </div>
                <div onclick="window.open('https://www.linkedin.com/in/gayathripererag3', '_self')" class="box4 rounded-3 bg-white d-flex justify-content-center p-2 align-items-center gap-1">
                    <i class="bi bi-linkedin icon-1 fs-5 text-black"></i>
                    <span class="txt3 text-black">gayathripererag3</span>
                </div>
                <div onclick="window.open('mailto:g3perera@outlook.com', '_self')" class="box4 rounded-3 bg-white d-flex justify-content-center p-2 align-items-center gap-1">
                    <i class="far fa-envelope icon-1 fs-5 text-black"></i>
                    <span class="txt3 text-black">g3perera@outlook.com</span>
                </div>
                <div onclick="window.open('https://www.tropical-fx.com/, '_blank')" class="box4 rounded-3 bg-white d-flex justify-content-center p-2 align-items-center gap-1">
                    <i class="bi bi-globe icon-1 fs-5 text-black"></i>
                    <span class="txt3 text-black">www.tropical-fx.com</span>
                </div>
                <div onclick="window.open('https://www.google.com/maps/place/Toronto,+ON,+Canada/@43.718371,-79.5428639,11z/data=!3m1!4b1!4m6!3m5!1s0x89d4cb90d7c63ba5:0x323555502ab4c477!8m2!3d43.653226!4d-79.3831843!16zL20vMGg3aDY?authuser=0&entry=ttu&g_ep=EgoyMDI1MDUxNS4wIKXMDSoASAFQAw%3D%3D', '_self')" class="box4 rounded-3 bg-white d-flex justify-content-center p-2 align-items-center gap-1">
                    <i class="fas fa-map-marker-alt icon-1 fs-5 text-black"></i>
                    <span class="txt3 text-black">Toronto, ON</span>
                </div>
                <div class="box4 box5 rounded-3 d-flex justify-content-center p-1 align-items-center gap-1">
                    <button onclick="generateVCF()" class="save-btn btn">Save to Contact</button>
                </div>
                <!-- <div class="box4 d-flex justify-content-center p-1 align-items-center gap-1 gap-2">
                    <div class="d-flex justify-content-center align-items-center p-2 bg-1">
                        <i class="fab fa-facebook fs-6 text-white"></i>
                    </div>
                    <div class="d-flex justify-content-center align-items-center p-2 bg-1">
                        <i class="fab fa-twitter fs-6 text-white"></i>
                    </div>
                    <div class="d-flex justify-content-center align-items-center p-2 bg-1">
                        <i class="fab fa-youtube fs-6 text-white"></i>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</body>

<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
<!-- <script>
    AOS.init();
</script> -->

<script>
    async function generateVCF() {
        const contactData = {
            firstName: "Gayathri",
            lastName: "Perera",
            title: "PROJECT LEAD",
            phoneWork: "",
            phoneMobile: "",
            email: "",
            email2: "",
            email3: "",
            website: "",
            website2: "",
            website3: "",
            address: "",
            address2: "",
            about: "",
            logo: "https://tapilinq.com/profile_img/client_profile/tropical-p.png",
            profileImage: "https://tapilinq.com/profile_img/client_profile/tropical-p.png" // Same as logo in this case
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