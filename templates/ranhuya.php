<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Card</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background-color: #ffff;
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
        }

        .card {
            /* width: 500px; */
            min-height: 100vh;
            background: #fff;
            border-radius: 0 0 40px 40px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }

        .card .top-bg {
            width: 100%;
            height: 250px;
            background-image: url('banner_img/client_banner/ranhuya-b.png');
            border-bottom-left-radius: 100% 60%;
            border-bottom-right-radius: 100% 60%;
            background-position: center;
            background-size: cover;
        }

        .card .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #fff;
            object-fit: cover;
            position: absolute;
            top: 150px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }

        .card .content {
            margin-top: 20px;
            padding: 50px;
        }

        .card h2 {
            margin-bottom: 2px;
            font-weight: 370;
            font-size: 30px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .card .role {
            font-size: 12px;
            color: #7A7A7A;
            letter-spacing: 2px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .divider {
            width: 100%;
            height: 1px;
            background: #000000;
            margin: 10px auto 20px;
        }

        .contact-info {
            text-align: left;
            padding-left: 20px;
            margin-bottom: 20px;
        }

        .contact-info .item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            font-size: 14px;
            cursor: pointer;
            align-items: center;
        }

        .contact-info .item i {
            min-width: 30px;
            height: 30px;
            background: #000;
            color: #fff;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            margin-right: 10px;
            font-size: 14px;
        }

        .footer {
            background: #000;
            padding: 20px 0;
            border-top-left-radius: 60px;
            border-top-right-radius: 60px;
            margin-top: auto;
            bottom: 0;
            margin-top: 50px;
        }

        .footer .logo {
            margin-bottom: 15px;
        }

        .footer .logo img {
            width: 60px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-icons a {
            width: 35px;
            height: 35px;
            background: #ffffff;
            color: #000000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .social-icons a:hover {
            background: #000000;
            color: #fff;
        }

        .location-icon {
            color: red !important;
        }

        .sp {
            margin-left: 40px;
            color: #000000;
        }

        .custom-save-button {
            background: #343333;
            color: #ffffff;
            font-weight: 600;
            border: none;
            border-radius: 25px;
            padding: 12px 20px;
            cursor: pointer;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-width: 200px;
            margin: 0 auto;
            transition: background 0.3s, transform 0.2s;
            margin-top: 50px;
        }

        .custom-save-button:hover {
            background: #4a4a4a;
            transform: scale(1.05);
        }

        .custom-save-button i {
            margin-right: 8px;
        }
    </style>
</head>

<body>
    <div class="card p-0 m-0">
        <div class="top-bg"></div>
        <img src="profile_img/client_profile/ranhuya.png" alt="Kalana Deshitha" class="profile-img">
        <div class="content">
            <h2 style="font-family:'Times New Roman'; color:#000000;">KALANA<br>DESHITHA</h2>
            <div class="divider"></div>
            <p class="role">PROPRIETOR</p>

            <div class="contact-info">
                <div class="item" onclick="window.open('tel:+94702859200', '_self')">
                    <i class="fas fa-phone" style="background-color: #000000;"></i>
                    <span class="sp">+94 702 859 200</span>
                </div>
                <div class="item" onclick="window.open('tel:+94721399400', '_self')">
                    <i class="fas fa-phone" style="background-color: #000000;"></i>
                    <span class="sp">+94 721 399 400</span>
                </div>
                <div class="item" onclick="window.open('mailto:kdeshitha@gmail.com', '_self')">
                    <i class="fas fa-envelope" style="background-color: #000000;"></i>
                    <span class="sp">kdeshitha@gmail.com</span>
                </div>
                <div class="item" onclick="window.open('https://wa.me/+94702859200', '_blank')">
                    <i class="fab fa-whatsapp" style="background-color: #000000;"></i>
                    <span class="sp">+94 702 859 200</span>
                </div>
                <div class="item" onclick="window.open('https://maps.app.goo.gl/MkPoMN1RGbVm34oZ6', '_blank')">
                    <i class="fas fa-map-marker-alt" style="background-color: #000000;"></i>
                    <span class="sp">Main Street, Embilipitiya, Sri Lanka</span>
                </div>
            </div>
            <button class="custom-save-button" onclick="generateVCF();"><i class="fas fa-save"></i> Add to Contacts</button>
        </div>

        <div class="footer">
            <div class="social-icons">
                <a href="https://www.facebook.com/ranhuya"><i class="fab fa-facebook-f"></i></a>
                <a href="https://wa.me/+94702859200"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('saveToContacts').addEventListener('click', function() {
            saveContact();
        });

        async function generateVCF() {
            const contactData = {
                firstName: "KALANA",
                lastName: "DESHITHA",
                title: "PROPRIETOR",
                organization: "RANHUYA",
                phoneMobile1: "+94702859200",
                phoneMobile2: "+94721399400",
                whatsapp: "94702859200",
                email: "kdeshitha@gmail.com",
                address: "Main Street, Embilipitiya, Sri Lanka",
                facebook: "https://www.facebook.com/ranhuya",
                location: "https://maps.app.goo.gl/MkPoMN1RGbVm34oZ6",
                profileImage: "profile_img/client_profile/ranhuya.png"
            };

            const toBase64 = async (url) => {
                return new Promise((resolve, reject) => {
                    const profileImage = new Image();
                    profileImage.crossOrigin = "Anonymous";
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
                `TEL;TYPE=CELL:${contactData.phoneMobile1}`,
                `TEL;TYPE=CELL:${contactData.phoneMobile2}`,
                `X-WA-URL:https://wa.me/${contactData.whatsapp}`,
                contactData.facebook ? `URL;TYPE=Facebook:${contactData.facebook}` : '',
                contactData.location ? `URL;TYPE=Location:${contactData.location}` : '',
                contactData.address ? `ADR;TYPE=WORK:;;${contactData.address};;;` : '',
                photoBase64 ? `PHOTO;ENCODING=b;TYPE=JPEG:${photoBase64}` : '',
                "END:VCARD"
            ];

            const vcfContent = vcfLines.filter(line => line).join('\n');
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