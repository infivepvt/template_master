<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            width: 350px;
            background: #fff;
            border-radius: 0 0 40px 40px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }

        .card .top-bg {
            width: 100%;
            height: 150px;
            background: url('banner_img/client_banner/mahanil-b.png') no-repeat center center/cover;
            position: relative;
            clip-path: ellipse(100% 100% at 50% 0%);
        }

        .top-bg {
            width: 100%;
            height: 220px;
            background: url('your_image_here.jpg') no-repeat center center/cover;
            border-bottom-left-radius: 100% 60%;
            border-bottom-right-radius: 100% 60%;
        }

        .card .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #fff;
            object-fit: cover;
            position: absolute;
            top: 70px;
            left: 50%;
            transform: translateX(-50%);
        }

        .card .content {
            margin-top: 70px;
            padding: 20px;
        }

        .card h2 {
            margin-bottom: 5px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .card .role {
            font-size: 12px;
            color: #00bbb3;
            letter-spacing: 2px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .divider {
            width: 60%;
            height: 1px;
            background: #000;
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
            background: #00bbb3;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            text-decoration: none;
            transition: background 0.3s;
            
        }

        .social-icons a:hover {
            background: #16a384;
            color: #fff;
        }

        .location-icon {
            color: red !important;
        }

        .sp {
            margin-left: 40px;
            color: #0070cd;
           
        }

        .custom-save-button {
            background: #343333;
            color: rgb(255, 255, 255);
            font-weight: bold;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 15px;
        }
    </style>
</head>

<body>

    <div class="card">
        <div class="top-bg"></div>
        <img src="profile_img/client_profile/mahanil-p.png" alt="Kerek Peterson" class="profile-img" />
        <div class="content">
            <h2 style="font-family:'Times New Roman'; color:#00bbb3;">Mahanil <br> Perera</h2>
            <div class="divider"></div>
            <p class="role">Chief Operating Officer</p>
            <br>
            <div class="contact-info">
                <div class="item" onclick="window.open('tel:+94773718243', '_self')">
                    <i class="fas fa-mobile" style="background-color: #00bbb3;"></i>
                    <span class="sp">+94 77 3718 243</span>
                </div>
                <div class="item" onclick="window.open('tel:+94112140000', '_self')">
                    <i class="fas fa-phone" style="background-color: #00bbb3;"></i>
                    <span class="sp">+94 11 2140 000</span>
                </div>
                <div class="item" onclick="window.open('https://wa.me/+94773718243', '_blank')">
                    <i class="fab fa-whatsapp" style="background-color: #00bbb3;"></i>
                    <span class="sp">+94 77 3718 243</span>
                </div>
                <div class="item" onclick="window.open('mailto:mahanil@durdans.com', '_self')">
                    <i class="fas fa-envelope" style="background-color: #00bbb3;"></i>
                    <span class="sp">mahanil@durdans.com</span>
                </div>
                <div class="item" onclick="window.open('https://www.durdans.com/', '_blank')">
                    <i class="fas fa-globe" style="background-color: #00bbb3;"></i>
                    <span class="sp">www.durdans.com</span>
                </div>
                <div class="item" onclick="window.open('https://maps.app.goo.gl/MkPoMN1RGbVm34oZ6', '_blank')">
                    <i class="fas fa-map-marker-alt" style="background-color: #00bbb3;"></i>
                    <span class="sp">Durdans Hospital, 3 Alfred Place,<br>Colombo 3.</span>
                </div>

            </div>
            <button class="custom-save-button" id="saveToContacts"><i class="fas fa-save me-2"></i>&nbsp; SAVE TO
                CONTACTS</button>
        </div>

        <div class="footer">
            <div class="social-icons">
                <a href="https://www.facebook.com/durdanshospital/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/durdanshospital/"><i class="fab fa-instagram"></i></a>
                <a href="https://youtube.com/@durdanshospital7281?si=pwfVYtUAUeaA0ZXn"><i class="fab fa-youtube"></i></a>
                <a href="https://www.linkedin.com/company/durdans-hospital/"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('saveToContacts').addEventListener('click', function () {
            saveContact();
        });

        async function saveContact() {
            try {
                const profileImage = document.querySelector('.profile-img');

                // Wait for the image to load if it's not already loaded
                if (!profileImage.complete) {
                    await new Promise((resolve) => {
                        profileImage.onload = resolve;
                        profileImage.onerror = resolve; // Handle error case
                    });
                }

                // Create canvas and draw image
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                canvas.width = profileImage.naturalWidth;
                canvas.height = profileImage.naturalHeight;
                ctx.drawImage(profileImage, 0, 0);

                // Convert to base64
                const base64Image = canvas.toDataURL('image/jpeg').split(',')[1];

                // Create vCard content
                const vCard = `BEGIN:VCARD
VERSION:3.0
FN:Mahanil Perera
TITLE:Chief Operating Officer
TEL;TYPE=CELL:+94773718243
TEL;TYPE=WORK:+94112140000
EMAIL:mahanil@durdans.com
URL:www.durdans.com
ADR;TYPE=WORK:;;Durdans Hospital, 3 Alfred Place;Colombo 3;;;Sri Lanka
PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}
END:VCARD`;

                // Create download link
                const blob = new Blob([vCard], { type: 'text/vcard' });
                const url = URL.createObjectURL(blob);
                const link = document.createElement('a');
                link.href = url;
                link.download = 'Mahanil Perera.vcf';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                URL.revokeObjectURL(url);

            } catch (error) {
                console.error('Error saving contact:', error);
                alert('Error saving contact. Please try again.');
            }
        }
    </script>
</body>

</html>