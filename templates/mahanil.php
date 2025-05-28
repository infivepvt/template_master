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
            padding: 5px;
        }

        .card {
            width: 95vw;
            max-width: 320px; /* Slightly smaller max-width */
            max-height: 90vh; /* Fit within viewport height */
            background: #fff;
            border-radius: 0 0 30px 30px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }

        .card .top-bg {
            width: 100%;
            height: 100px; /* Further reduced height */
            background: url('banner_img/client_banner/mahanil-b.png') no-repeat center center/cover;
            position: relative;
            clip-path: ellipse(100% 100% at 50% 0%);
        }

        .card .profile-img {
            width: 100px; /* Smaller profile image */
            height: 100px;
            border-radius: 50%;
            border: 3px solid #fff;
            object-fit: cover;
            position: absolute;
            top: 50px;
            left: 50%;
            transform: translateX(-50%);
        }

        .card .content {
            margin-top: 50px; /* Adjusted for smaller profile image */
            padding: 10px;
        }

        .card h2 {
            margin-bottom: 3px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 1rem; /* Smaller font */
        }

        .card .role {
            font-size: 0.65rem; /* Smaller font */
            color: #00bbb3;
            letter-spacing: 1px;
            margin-bottom: 8px;
            text-transform: uppercase;
        }

        .divider {
            width: 50%;
            height: 1px;
            background: #000;
            margin: 5px auto 8px;
        }

        .contact-info {
            text-align: left;
            padding-left: 10px;
            margin-bottom: 10px;
        }

        .contact-info .item {
            display: flex;
            align-items: center;
            margin-bottom: 8px; /* Reduced spacing */
            font-size: 0.7rem; /* Smaller font */
            cursor: pointer;
        }

        .contact-info .item i {
            min-width: 20px;
            height: 20px;
            background: #00bbb3;
            color: #fff;
            border-radius: 50%;
            text-align: center;
            line-height: 20px;
            margin-right: 6px;
            font-size: 0.7rem;
        }

        .footer {
            background: #000;
            padding: 10px 0; /* Reduced padding */
            border-top-left-radius: 40px;
            border-top-right-radius: 40px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .social-icons a {
            width: 25px;
            height: 25px;
            background: #00bbb3;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            text-decoration: none;
            transition: background 0.3s;
        }

        .social-icons a:hover {
            background: #16a384;
            color: #fff;
        }

        .sp {
            margin-left: 6px;
            color: #0070cd;
        }

        .custom-save-button {
            background: #343333;
            color: rgb(255, 255, 255);
            font-weight: bold;
            border: none;
            padding: 6px;
            cursor: pointer;
            font-size: 0.75rem;
            width: 100%;
            border-radius: 5px;
        }

        /* Media Queries for Smaller Devices */
        @media screen and (max-width: 320px) {
            .card {
                width: 98vw;
                max-height: 85vh;
            }

            .card .top-bg {
                height: 80px;
            }

            .card .profile-img {
                width: 80px;
                height: 80px;
                top: 40px;
            }

            .card .content {
                margin-top: 40px;
                padding: 8px;
            }

            .card h2 {
                font-size: 0.9rem;
            }

            .card .role {
                font-size: 0.6rem;
            }

            .contact-info .item {
                font-size: 0.65rem;
            }

            .contact-info .item i {
                min-width: 18px;
                height: 18px;
                line-height: 18px;
                font-size: 0.65rem;
            }

            .social-icons a {
                width: 22px;
                height: 22px;
                font-size: 0.65rem;
            }

            .custom-save-button {
                font-size: 0.7rem;
                padding: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="top-bg"></div>
        <img src="profile_img/client_profile/mahanil-p.png" alt="Mahanil Perera" class="profile-img" />
        <div class="content">
            <h2 style="font-family:'Times New Roman'; color:#00bbb3;">Mahanil <br> Perera</h2>
            <div class="divider"></div>
            <p class="role">Chief Operating Officer</p>
            <div class="contact-info">
                <div class="item" onclick="window.open('tel:+94773718243', '_self')">
                    <i class="fas fa-mobile"></i>
                    <span class="sp">+94 77 3718 243</span>
                </div>
                <div class="item" onclick="window.open('tel:+94112140000', '_self')">
                    <i class="fas fa-phone"></i>
                    <span class="sp">+94 11 2140 000</span>
                </div>
                <div class="item" onclick="window.open('https://wa.me/+94773718243', '_blank')">
                    <i class="fab fa-whatsapp"></i>
                    <span class="sp">+94 77 3718 243</span>
                </div>
                <div class="item" onclick="window.open('mailto:mahanil@durdans.com', '_self')">
                    <i class="fas fa-envelope"></i>
                    <span class="sp">mahanil@durdans.com</span>
                </div>
                <div class="item" onclick="window.open('https://www.durdans.com/', '_blank')">
                    <i class="fas fa-globe"></i>
                    <span class="sp">www.durdans.com</span>
                </div>
                <div class="item" onclick="window.open('https://maps.app.goo.gl/MkPoMN1RGbVm34oZ6', '_blank')">
                    <i class="fas fa-map-marker-alt"></i>
                    <span class="sp">Durdans Hospital, 3 Alfred Place,<br>Colombo 3.</span>
                </div>
            </div>
            <button class="custom-save-button" id="saveToContacts"><i class="fas fa-save me-2"></i> SAVE TO CONTACTS</button>
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

                if (!profileImage.complete) {
                    await new Promise((resolve) => {
                        profileImage.onload = resolve;
                        profileImage.onerror = resolve;
                    });
                }

                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                canvas.width = profileImage.naturalWidth;
                canvas.height = profileImage.naturalHeight;
                ctx.drawImage(profileImage, 0, 0);

                const base64Image = canvas.toDataURL('image/jpeg').split(',')[1];

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