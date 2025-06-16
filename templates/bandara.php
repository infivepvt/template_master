<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .profile-card {
            background-color: #000;
            color: #fff;
            width: 100%;
            min-height: 100vh;
            overflow: hidden;
            font-family: 'Montserrat', sans-serif;
            margin: 0 auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border: 2px solid #8d191b;
        }

        .profile-banner {
            position: relative;
            overflow: hidden;
        }

        .profile-banner::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 40%;
            /* adjust as needed */
            background: linear-gradient(to top, rgba(0, 0, 0, 0.6), transparent);
            pointer-events: none;
        }

        .profile-photo {
            width: 100%;
            height: auto;
            object-fit: cover;
            filter: brightness(0.79);
        }

        .profile-info {
            position: absolute;
            bottom: 50px;
            left: 20px;
            z-index: 2;
            color: #ffffff;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
            text-align: left;
        }

        .profile-info h2 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .profile-info p {
            font-size: 1.1rem;
            margin-bottom: 0;
        }

        .profile-contact-icons {
            display: flex;
            justify-content: start;
            gap: 15px;
            padding: 15px;
            margin-left: 10px;
        }

        .icon-button {
            background-color: #fff;
            border: none;
            color: #000000;
            font-size: 20px;
            cursor: pointer;
            border-radius: 50%;
            transition: all 0.3s ease;
            width: 40px;
            height: 40px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            /* Added for centering */
            align-items: center;
            /* Center vertically */
            justify-content: center;
            /* Center horizontally */
        }

        .icon-button:hover {
            background-color: #8d191b;
            color: #fff;
            transform: scale(1.1);
        }

        .social-media-links-column {
            display: flex;
            flex-direction: column;
            align-items: start;
            padding: 15px;
        }

        .social-media-button {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 12px;
            border-radius: 25px;
            color: #000;
            text-decoration: none;
            background-color: #ececec;
            cursor: not-allowed;
            width: 100%;
            /* Changed to full width */
            max-width: none;
            /* Removed max-width restriction */
            box-sizing: border-box;
            /* Ensure padding doesn't affect width */
        }

        .social-media-button .platform-name,
        .social-media-button .user-name {
            color: #8d191b;
        }

        .text-wrapper {
            text-align: left;
            margin-left: 16px;
        }

        .platform-name {
            font-weight: bold;
            font-size: 16px;
        }

        .user-name {
            font-size: 16px;
        }

        .custom-save-button {
            width: 100%;
            /* Changed to full width */
            max-width: none;
            /* Removed max-width restriction */
            padding: 15px;
            margin: 10px 0;
            background-color: #8d191b;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            box-sizing: border-box;
            /* Ensure padding doesn't affect width */
        }

        .custom-save-button:hover {
            background-color: #a83236;
        }

        .custom-save-button i {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="profile-card">
        <div class="profile-banner">
            <img class="profile-photo" src="banner_img/client_banner/bandara-b.png" alt="Profile">
            <div class="profile-info">
                <h2 style="font-family: Verdana, sans-serif;">Manoj Bandara LLB</h2>
                <p style="font-family: Roboto, sans-serif;">Attorney at Law</p>
            </div>
        </div>

        <div class="row p-3 h-100 d-flex flex-column justify-content-center" style="min-height: 500px;">
            <div class="profile-contact-icons">
                <button class="icon-button" onclick="window.open('mailto:manoj@bizlegal.lk', '_self')">
                    <i class="fas fa-envelope"></i>
                </button>
                <button class="icon-button" onclick="window.open('tel:+94777556638', '_self')">
                    <i class="fas fa-phone"></i>
                </button>
                <button class="icon-button" onclick="window.open('https://wa.me/94777556638', '_blank')">
                    <i class="fab fa-whatsapp"></i>
                </button>
            </div>

            <div class="social-media-links-column">
                <a href="#" class="social-media-button">
                    <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 40px; height: 40px;">
                    <div class="text-wrapper">
                        <span class="platform-name">Facebook</span><br>
                        <span class="user-name">N/A</span>
                    </div>
                </a>
                <a href="#" class="social-media-button">
                    <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 40px; height: 40px;">
                    <div class="text-wrapper">
                        <span class="platform-name">Instagram</span><br>
                        <span class="user-name">N/A</span>
                    </div>
                </a>
                <a href="#" class="social-media-button">
                    <img src="Images/Social_Media_Icon/twitter.png" alt="" style="width: 40px; height: 40px;">
                    <div class="text-wrapper">
                        <span class="platform-name">Twitter</span><br>
                        <span class="user-name">N/A</span>
                    </div>
                </a>

                <button class="custom-save-button" onclick="downloadVCF()">
                    <i class="fas fa-save"></i> SAVE TO CONTACTS
                </button>
            </div>
        </div>
    </div>

    <script>
        async function downloadVCF() {
            const contactData = {
                firstName: "Manoj",
                lastName: "Bandara",
                title: "Attorney at Law",
                organization: "",
                phoneMobile: "+94-777-556638",
                email: "manoj@bizlegal.lk",
                address: "",
                website: "",
                website2: "",
                profileImage: "banner_img/client_banner/bandara-b.png"
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
                contactData.organization ? `ORG:${contactData.organization}` : '',
                `TITLE:${contactData.title}`,
                `TEL;TYPE=WORK,VOICE:${contactData.phoneMobile}`,
                `EMAIL;TYPE=WORK:${contactData.email}`,
                contactData.website ? `URL:${contactData.website}` : '',
                contactData.website2 ? `URL:${contactData.website2}` : '',
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