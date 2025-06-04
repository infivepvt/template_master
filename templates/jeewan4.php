<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        body {
            background-color: #FEF2F2;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            /* padding: 15px; */
            font-family: 'Open Sans', sans-serif;
            color: #3C1A1A;
        }

        .custom-card {
            /* border-radius: 14px; */
            overflow: hidden;
            background: #FFFFFF;
            width: 500px;
            box-shadow: 0 6px 22px rgba(0, 0, 0, 0.1);
        }

        .custom-header {
            background-image: url("banner_img/client_banner/jeewan-b.png");
            background-position: center;
            background-size: cover;
            padding: 120px 20px 70px;
            position: relative;
            text-align: center;
            background: linear-gradient(to right, #FECDD3, #FDA4AF);
            height: 260px;
        }

        .profile-picture {
            position: absolute;
            bottom: -120px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }

        .profile-picture img {
            width: 175px;
            height: 175px;
            border: 6px solid #FFFFFF;
            border-radius: 50%;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
            object-fit: cover;
        }

        .card-body {
            padding-top: 85px;
            text-align: center;
        }

        .card-title {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            font-size: 27px;
            color: #3C1A1A;
            margin-bottom: 5px;
        }

        .card-subtitle {
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            font-size: 18px;
            color: #581C1C;
            margin-bottom: 5px;
        }

        .card-company {
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            font-size: 15px;
            color: #3C1A1A;
            margin-bottom: 20px;
        }

        .save-contact-button {
            background: linear-gradient(to right, #EF4444, #DC2626);
            color: #FFFFFF;
            font-weight: 600;
            border: none;
            padding: 13px 24px;
            border-radius: 14px;
            width: 100%;
            margin-bottom: 30px;
            transition: background 0.3s ease, transform 0.2s;
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .save-contact-button img {
            width: 26px;
            height: 26px;
            margin-right: 10px;
        }

        .save-contact-button:hover {
            background: linear-gradient(to right, #DC2626, #B91C1C);
            transform: translateY(-2px);
        }

        .section-title {
            font-family: 'Roboto', sans-serif;
            font-weight: 600;
            font-size: 17px;
            color: #3C1A1A;
            margin-bottom: 15px;
            position: relative;
        }

        .contacts-title {
            font-size: 17px;
            color: #3C1A1A;
        }

        .follow-us-title {
            font-size: 17px;
            color: #3C1A1A;
            margin-top: 30px;
        }

        .contact-list .list-group-item {
            border: 1px solid #FDA4AF;
            border-radius: 14px;
            margin-bottom: 10px;
            padding: 13px 22px;
            background: linear-gradient(to right, #FFFFFF, #FEF2F2);
            font-family: 'Roboto', sans-serif;
            font-size: 17px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: background 0.3s ease, transform 0.2s;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            color: #3C1A1A;
        }

        .contact-list .list-group-item span {
            color: #3C1A1A;
            font-family: 'Roboto', sans-serif;
            font-size: 17px;
            flex-grow: 1;
            text-align: center;
        }

        .contact-list .list-group-item img {
            width: 26px;
            height: 26px;
            margin-right: 10px;
        }

        .contact-list .list-group-item:hover {
            background: linear-gradient(to right, #FFE4E6, #FECDD3);
            transform: translateY(-2px);
        }

        .contact-list .list-group-item.no-icon {
            justify-content: center;
        }

        .social-icons {
            margin-bottom: 20px;
        }

        .social-icons a {
            margin: 0 30px;
            display: inline-block;
            text-decoration: none;
            transition: opacity 0.3s ease;
        }

        .social-icons a img {
            width: 46px;
            height: 46px;
        }

        .social-icons .social-label {
            display: block;
            font-size: 15px;
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            margin-top: 5px;
            color: #581C1C;
        }

        .btn:focus,
        .list-group-item:focus {
            box-shadow: none;
            outline: none;
        }
    </style>
</head>

<body>
    <div class="card custom-card">
        <div class="custom-header">
            <div class="profile-picture">
                <img src="profile_img/client_profile/jeewan-p.png" alt="Jeewan Thiloshana">
            </div>
        </div>
        <br><br><br>
        <div class="card-body">
            <h2 class="card-title">Jeewan Thiloshana</h2>
            <p class="card-subtitle">Senior Procurement Executive</p>
            <p class="card-company">CBL Foods International (Pvt) Ltd.<br>No. 135, Habarakada Road, Ranala 10654, Sri Lanka</p>

            <button class="btn save-contact-button" onclick="generateVCF()">
                <img src="Images/Social_Media_Icon/save.png" alt="Save Icon">
                Save to Contact
            </button>

            <h3 class="section-title contacts-title">CONTACTS</h3>
            <div class="list-group contact-list">
                <button type="button" class="list-group-item d-flex align-items-center" onclick="window.open('tel:+94115002000', '_self')">
                    <img src="Images/icon/phone.png" alt="Phone Icon">
                    <span>+94 11 5002000</span>
                </button>
                <button type="button" class="list-group-item d-flex align-items-center" onclick="window.open('tel:+94777004613', '_self')">
                    <img src="Images/icon/phone.png" alt="Phone Icon">
                    <span>+94 77 7004613</span>
                </button>
                <button type="button" class="list-group-item d-flex align-items-center" onclick="window.open('mailto:jeewans.cblf@cbllk.com', '_self')">
                    <img src="Images/icon/mail.png" alt="Email Icon">
                    <span>jeewans.cblf@cbllk.com</span>
                </button>
                <button type="button" class="list-group-item d-flex align-items-center" onclick="window.open('https://www.cbllk.com', '_blank')">
                    <img src="Images/icon/internet.png" alt="Website Icon">
                    <span>www.cbllk.com</span>
                </button>
                <div class="list-group-item no-icon">
                    <span>Fax: +94 11 2408009</span>
                </div>
            </div>

            <h3 class="section-title follow-us-title">FOLLOW ME</h3>
            <div class="d-flex justify-content-center social-icons">
                <a href="https://www.linkedin.com/in/jeewan-thiloshana" target="_blank" rel="noopener noreferrer">
                    <img src="Images/Social_Media_Icon/linkedin.png" alt="LinkedIn">
                    <span class="social-label">LinkedIn</span>
                </a>
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
                phoneWork: "+94115002000",
                phoneMobile: "+94777004613",
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
                `TEL;TYPE=WORK:${contactData.phoneWork}`,
                `TEL;TYPE=CELL:${contactData.phoneMobile}`,
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