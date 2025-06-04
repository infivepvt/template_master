<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: #F5F7FA;
        }

        .custom-card {
            overflow: hidden;
            background: #F5F7FA;
            width: 450px;
            height: auto;
            margin-top: -55px;
        }

        .custom-header {
            position: relative;
            height: 200px;
        }

        .card-header {
            background-image: url("banner_img/client_banner/jeewan-b.png");
            background-position: top;
            background-size: cover;
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

        .list-group {
            background: linear-gradient(to right, #B22222, #FF4040, #FF7F50); /* Red gradient for contact section */
            border-radius: 8px;
            padding: 10px;
        }

        .list-group-item {
            background-color: #fff; /* White background for buttons */
            color: #000; /* Black text for contrast */
            border: 1px solid #ccc; /* Simple, slightly visible solid border */
            border-radius: 8px;
            margin-bottom: 10px;
            padding: 12px 15px;
            display: flex;
            align-items: center;
            text-align: left;
        }

        .list-group-item:hover {
            background-color: #f8f8f8; /* Light gray on hover */
            border: 1px solid #bbb; /* Slightly darker border on hover */
            transition: background-color 0.3s, border-color 0.3s;
        }

        .list-group-item img {
            margin-right: 15px;
            filter: brightness(0) invert(1); /* Makes icons white */
        }

        .custom-save-button {
            background: linear-gradient(to right, #B22222, #FF4040, #FF7F50);
            color: white;
            font-weight: 600;
            border: 2px solid #FFA500;
            padding: 12px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: filter 0.3s;
            font-family: 'Open Sans', sans-serif;
            font-size: 1.2rem;
        }

        .custom-save-button:hover {
            filter: brightness(1.2);
        }

        .custom-save-button img {
            margin-right: 15px;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: #fff;
        }

        .custom-phone {
            font-family: 'Open Sans', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            color: #000; /* Black text for contrast */
            text-shadow: none;
        }

        .custom-phone1 {
            font-family: 'Open Sans', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            color: #000;
            text-shadow: none;
            transition: background-color 0.3s;
        }

        .custom-phone1:hover {
            background-color: #f8f8f8;
        }

        .text-container {
            text-align: center;
        }

        .main-text {
            display: block;
            font-weight: 600;
            font-size: 1.1rem;
            font-family: 'Roboto', sans-serif;
        }

        .sub-text {
            display: block;
            font-size: 0.9rem;
            opacity: 0.8;
            margin-top: 0.3rem;
            font-family: 'Open Sans', sans-serif;
        }

        .gradient-button {
            background: transparent; /* Transparent to avoid overriding button styles */
            border: none;
            color: #000;
            font-family: 'Open Sans', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            transition: filter 0.3s ease;
            width: 100%;
        }

        .gradient-button:hover {
            filter: brightness(1.2);
            cursor: pointer;
        }

        .contact {
            background: transparent; /* Transparent to use list-group gradient */
        }

        .logo {
            height: 70px;
            margin-top: -10px;
        }

        .card-body h2, .card-body p {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">
            <div class="card-header custom-header text-center">
                <div class="profile-picture">
                    <img src="profile_img/client_profile/jeewan-p.png" alt="Jeewan Thiloshana" class="rounded-circle" style="scale:1.2;">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center" style="background-color: #FFFFFF; color: #000000; text-decoration: none; font-family: 'Roboto', sans-serif;">
                <h2 class="card-title" style="font-size: 27px; text-transform: uppercase;">Jeewan Thiloshana</h2>
                <p style="color: #000000; font-size: 21px; text-transform: uppercase;">Senior Procurement Executive</p>
                <p style="font-size: 18px; margin-top: 10px;">CBL Foods International (Pvt) Ltd.<br>No. 135, Habarakada Road, Ranala 10654, Sri Lanka</p>

                <div class="list-group mb-3">
                    <button type="button" class="gradient-button list-group-item contact" onclick="window.open('tel:+94777004613', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px;">
                        <span class="flex-grow-1 text-truncate custom-phone">Mobile: +94 77 7004613</span>
                    </button>
                    <button type="button" class="gradient-button list-group-item contact" onclick="window.open('tel:+94115002000', '_self')">
                        <img src="Images/icon/phone.png" alt="" style="width: 30px; height: 30px;">
                        <span class="flex-grow-1 text-truncate custom-phone">Tel (General): +94 11 5002000</span>
                    </button>
                    <button type="button" class="gradient-button list-group-item contact" onclick="window.open('mailto:jeewans.cblf@cbllk.com', '_self')">
                        <img src="Images/icon/mail.png" alt="" style="width: 30px; height: 30px;">
                        <span class="flex-grow-1 text-truncate custom-phone">jeewans.cblf@cbllk.com</span>
                    </button>
                    <button type="button" class="gradient-button list-group-item contact" onclick="window.open('https://www.cbllk.com', '_blank')">
                        <img src="Images/icon/internet.png" alt="" style="width: 30px; height: 30px;">
                        <span class="flex-grow-1 text-truncate custom-phone">www.cbllk.com</span>
                    </button>
                </div>
                <p style="font-size: 16px; margin-top: 10px;">Fax: +94 11 2408009</p>

                <p class="fw-bold mt-4" style="font-family: 'Open Sans', sans-serif; font-size:19px">CONNECT WITH SOCIAL MEDIA</p>
                <div class="d-flex flex-wrap justify-content-center" style="margin-top: -10px;">
                    <a href="https://www.linkedin.com/in/jeewan-thiloshana" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/linkedin.png" alt="LinkedIn" style="width: 50px; height: 50px;">
                    </a>
                </div>

                <br>

                <button class="btn w-100 custom-save-button" onclick="generateVCF()" style="font-family: 'Open Sans', sans-serif; font-size:19px; border: 2px solid orange;">
                    <img src="Images/Social_Media_Icon/save.png" alt="" style="width: 50px; height: 50px;">
                    SAVE TO CONTACTS
                </button>

                <br>
                <p style="font-size: 16px; margin-top: 10px;">With Warm Regards<br>Jeewan Thiloshana<br>Senior Executive - Procurement</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        async function generateVCF() {
            const contactData = {
                firstName: "Jeewan",
                lastName: "Thiloshana",
                title: "Senior Procurement Executive",
                organization: "CBL Foods International (Pvt) Ltd.",
                phoneMobile: "+94777004613",
                phoneWork: "+94115002000",
                fax: "+94112408009",
                email: "jeewans.cblf@cbllk.com",
                website: "https://www.cbllk.com",
                address: "No. 135, Habarakada Road, Ranala 10654, Sri Lanka",
                linkedin: "https://www.linkedin.com/in/jeewan-thiloshana",
                logo: "https://tapilinq.com/profile_img/client_profile/jeewan-p.png",
                profileImage: "https://tapilinq.com/profile_img/client_profile/jeewan-p.png"
            };

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

            let vcfLines = [
                "BEGIN:VCARD",
                "VERSION:3.0",
                `FN:${contactData.firstName} ${contactData.lastName}`,
                `N:${contactData.lastName};${contactData.firstName};;;`,
                `ORG:${contactData.organization}`,
                `TITLE:${contactData.title}`,
                `TEL;TYPE=CELL:${contactData.phoneMobile}`,
                `TEL;TYPE=WORK:${contactData.phoneWork}`,
                `TEL;TYPE=FAX:${contactData.fax}`,
                `EMAIL:${contactData.email}`,
                `URL:${contactData.website}`,
                `URL:${contactData.linkedin}`,
                `ADR;TYPE=WORK:;;${contactData.address}`,
                `PHOTO;ENCODING=b;TYPE=JPEG:${photoBase64}`,
                "END:VCARD"
            ];

            const vcfContent = vcfLines.join('\n');
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
</body>

</html>