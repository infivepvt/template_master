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
            background-color: #FFF1F1;
            font-family: 'Open Sans', sans-serif;
            color: #2D1B1B;
        }

        .custom-card {
            overflow: hidden;
            background: #FFFFFF;
            width: 450px;
            height: auto;
            margin-top: -55px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .custom-header {
            position: relative;
            height: 180px;
        }

        .card-header {
            background-image: url("banner_img/client_banner/jeewan-b.png");
            background-position: center;
            background-size: cover;
            border-radius: 12px 12px 0 0;
        }

        .profile-picture {
            position: absolute;
            top: 95%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .profile-picture img {
            width: 120px;
            height: 120px;
            border: 5px solid #FFFFFF;
            border-radius: 50%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
        }

        .custom-button {
            font-weight: 600;
            font-family: 'Roboto', sans-serif;
        }

        .social-icon {
            font-size: 1.8rem;
            transition: color 0.3s ease;
        }

        .list-group-item {
            background: linear-gradient(to right, #FFFFFF, #FFF5F5);
            color: #2D1B1B;
            border-radius: 10px;
            margin-bottom: 12px;
            border: 1px solid #FECACA;
            padding: 14px 18px;
            display: flex;
            align-items: center;
            text-align: left;
            transition: background-color 0.3s, border-color 0.3s, transform 0.2s;
        }

        .list-group-item:hover {
            background: linear-gradient(to right, #FFE4E4, #FECACA);
            border-color: #FCA5A5;
            transform: translateY(-3px);
        }

        .list-group-item i {
            margin-right: 12px;
            font-size: 1.4rem;
            color: #DC2626;
        }

        .custom-save-button {
            background: linear-gradient(to right, #DC2626, #B91C1C);
            color: #FFFFFF;
            font-weight: 600;
            border: none;
            padding: 12px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s ease, transform 0.2s;
            font-family: 'Roboto', sans-serif;
            font-size: 1.1rem;
        }

        .custom-save-button:hover {
            background: linear-gradient(to right, #B91C1C, #991B1B);
            transform: translateY(-3px);
        }

        .custom-save-button i {
            margin-right: 10px;
            font-size: 1.4rem;
            color: #FFFFFF;
        }

        .custom-phone {
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            font-size: 1rem;
            color: #2D1B1B;
        }

        .custom-phone1 {
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            font-size: 1rem;
            color: #2D1B1B;
            transition: color 0.3s ease;
        }

        .custom-phone1:hover {
            color: #DC2626;
        }

        .text-container {
            text-align: center;
        }

        .main-text {
            display: block;
            font-weight: 700;
            font-size: 1.2rem;
            font-family: 'Roboto', sans-serif;
            color: #2D1B1B;
        }

        .sub-text {
            display: block;
            font-size: 0.95rem;
            opacity: 0.85;
            margin-top: 0.4rem;
            font-family: 'Open Sans', sans-serif;
            color: #4B1C1C;
        }

        .gradient-button {
            background: linear-gradient(to right, #FFFFFF, #FFF5F5);
            border: none;
            color: #2D1B1B;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            font-size: 1rem;
            transition: background 0.3s ease, transform 0.2s;
            width: 100%;
        }

        .gradient-button:hover {
            background: linear-gradient(to right, #FFE4E4, #FECACA);
            transform: translateY(-3px);
            cursor: pointer;
        }

        .contact {
            background: linear-gradient(to right, #FFFFFF, #FFF5F5);
        }

        .logo {
            height: 65px;
            margin-top: -8px;
        }

        .card-body h2,
        .card-body p {
            font-family: 'Roboto', sans-serif;
        }

        .secondary-bg {
            background: linear-gradient(to right, #FECACA, #FCA5A5);
            border-radius: 0 0 12px 12px;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg">
            <div class="card-header custom-header text-center">
                <div class="profile-picture">
                    <img src="profile_img/client_profile/jeewan-p.png" alt="Jeewan Thiloshana" class="rounded-circle" style="scale:1.1;">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center" style="background-color: #FFFFFF; color: #2D1B1B; text-decoration: none; font-family: 'Roboto', sans-serif;">
                <h2 class="card-title" style="font-size: 28px; text-transform: uppercase;">Jeewan Thiloshana</h2>
                <p style="color: #4B1C1C; font-size: 20px; text-transform: uppercase;">Senior Procurement Executive</p>
            </div>

            <div class="px-4 secondary-bg py-4" style="margin-top: -10px;">
                <p style="font-size: 17px; margin-top: 10px; color: #2D1B1B;" class="fw-bold">CBL Foods International (Pvt) Ltd.<br>No. 135, Habarakada Road, Ranala 10654, Sri Lanka</p>

                <div class="list-group mb-3">
                    <button type="button" class="gradient-button list-group-item contact" onclick="window.open('tel:+94777004613', '_self')">
                        <i class="fas fa-phone"></i>
                        <span class="flex-grow-1 text-truncate custom-phone">Mobile: +94 77 7004613</span>
                    </button>
                    <button type="button" class="gradient-button list-group-item contact" onclick="window.open('tel:+94115002000', '_self')">
                        <i class="fas fa-phone"></i>
                        <span class="flex-grow-1 text-truncate custom-phone">Tel (General): +94 11 5002000</span>
                    </button>
                    <button type="button" class="gradient-button list-group-item contact" onclick="window.open('mailto:jeewans.cblf@cbllk.com', '_self')">
                        <i class="fas fa-envelope"></i>
                        <span class="flex-grow-1 text-truncate custom-phone">jeewans.cblf@cbllk.com</span>
                    </button>
                    <button type="button" class="gradient-button list-group-item contact" onclick="window.open('https://www.cbllk.com', '_blank')">
                        <i class="fas fa-globe"></i>
                        <span class="flex-grow-1 text-truncate custom-phone">www.cbllk.com</span>
                    </button>
                </div>
                <p style="font-size: 15px; margin-top: 10px; color: #2D1B1B;" class="fw-bold">Fax: +94 11 2408009</p>

                <p class="fw-bold mt-4" style="font-family: 'Roboto', sans-serif; font-size:18px; color: #2D1B1B;">CONNECT WITH SOCIAL MEDIA</p>
                <div class="d-flex flex-wrap justify-content-center" style="margin-top: -10px;">
                    <a href="https://www.linkedin.com/in/jeewan-thiloshana" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/linkedin.png" alt="LinkedIn" style="width: 48px; height: 48px;">
                    </a>
                </div>

                <br>

                <button class="btn w-100 custom-save-button" onclick="generateVCF()" style="font-family: 'Roboto', sans-serif; font-size:18px;">
                    <i class="fas fa-save"></i>
                    SAVE TO CONTACTS
                </button>

                <br>
                <p style="font-size: 15px; margin-top: 10px; color: #2D1B1B;">With Warm Regards<br>Jeewan Thiloshana<br>Senior Executive - Procurement</p>
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