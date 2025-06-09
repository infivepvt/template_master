<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elizabeth Diaz - Licensed Professional Counselor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --gold-primary: #d8980c;
            --gold-secondary: #C5A028;
            --gold-accent: #E6C15C;
            --dark-bg: #121212;
            --dark-card: #1A1A1A;
            --dark-element: #2A2A2A;
            --light-text: #F5F5F5;
            --medium-text: #CCCCCC;
        }

        body {
            background: linear-gradient(135deg, #0c0c0c 0%, #1a1a1a 100%);
            font-family: 'Montserrat', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--light-text);
        }

        .custom-card {
            border-radius: 20px;
            overflow: hidden;
            background: var(--dark-card);
            width: 100%;
            max-width: 450px;
            height: auto;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(212, 175, 55, 0.3);
            position: relative;
            overflow: visible;
            min-height: 100vh;
        }

        .custom-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg,
                    rgba(212, 175, 55, 0) 0%,
                    rgba(212, 175, 55, 0.3) 25%,
                    rgba(212, 175, 55, 0.1) 50%,
                    rgba(212, 175, 55, 0.3) 75%,
                    rgba(212, 175, 55, 0) 100%);
            z-index: -1;
            border-radius: 22px;
            animation: borderAnimation 8s linear infinite;
        }

        @keyframes borderAnimation {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 200% 50%;
            }
        }

        .custom-header {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('banner_img/client_banner/elizabeth-b.png');
            background-size: cover;
            background-position: center;
            padding: 35px 20px;
            position: relative;
            height: 250px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .custom-logo {
            width: 170px;
            margin: 20px auto 10px;
            filter: drop-shadow(0 0 10px rgba(212, 175, 55, 0.5));
        }

        .card-body {
            padding: 20px;
            background: var(--dark-card);
        }

        .card-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 28px;
            color: var(--gold-primary);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .card-subtitle {
            font-size: 16px;
            color: var(--medium-text);
            font-weight: 400;
        }

        .credential-text {
            font-size: 14px;
            color: var(--gold-primary);
            font-weight: 500;
            margin-top: 10px;
            margin-bottom: 15px;
        }

        .contact-button {
            background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary));
            border: none;
            color: #000;
            font-weight: 600;
            border-radius: 12px;
            padding: 15px 10px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            text-align: center;
            min-height: 70px;
        }

        .contact-button .button-content {
            flex-wrap: wrap;
            width: 100%;
        }

        .contact-button .icon-large {
            font-size: 28px;
            margin-bottom: 5px;
        }

        .contact-button .button-text {
            font-size: 16px;
            line-height: 1.3;
            word-break: break-word;
            max-width: 100%;
            padding: 0 5px;
        }

        .contact-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(212, 175, 55, 0.4);
        }

        .contact-button:active {
            transform: translateY(1px);
        }

        .list-group-item {
            background-color: var(--dark-element);
            color: var(--light-text);
            border-radius: 10px;
            margin-bottom: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 12px 15px;
            transition: all 0.3s ease;
            display: flex;
            align-items: flex-start;
            cursor: pointer;
            align-items: center;
        }

        .list-group-item:hover {
            background-color: rgba(212, 175, 55, 0.1);
            border-color: rgba(212, 175, 55, 0.3);
            transform: translateX(5px);
        }

        .contact-icon {
            min-width: 35px;
            height: 35px;
            margin-right: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(212, 175, 55, 0.15);
            border-radius: 8px;
            color: var(--gold-primary);
            font-size: 18px;
            flex-shrink: 0;
        }

        .contact-text {
            flex-grow: 1;
            text-align: left;
            font-size: 14px;
            font-weight: 500;
            word-break: break-word;
            overflow-wrap: break-word;
            line-height: 1.4;
        }

        .social-section-title {
            font-size: 18px;
            margin: 25px 0 15px;
            color: var(--medium-text);
            position: relative;
            display: inline-block;
        }

        .social-section-title::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--gold-primary), transparent);
        }

        .social-icons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
        }

        .social-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--dark-element);
            color: var(--light-text);
            font-size: 22px;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .social-icon:hover {
            background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary));
            color: #000;
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
        }

        .save-button {
            background: linear-gradient(135deg, var(--gold-primary), var(--gold-secondary));
            color: #000;
            font-weight: 600;
            border: none;
            padding: 15px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            gap: 15px;
            margin-top: 15px;
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
            width: 100%;
        }

        .save-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(212, 175, 55, 0.4);
        }

        .save-button:active {
            transform: translateY(1px);
        }

        .logo-title {
            color: white;
            font-weight: bold;
            letter-spacing: 2px;
            margin-top: 10px;
        }

        .logo-sub-title {
            color: white;
            letter-spacing: 2px;
        }

        @media (max-width: 480px) {
            .custom-card {
                margin-top: 0;
            }

            .custom-header {
                height: 220px;
            }

            .custom-logo {
                width: 150px;
            }

            .card-title {
                font-size: 24px;
            }

            .contact-button {
                padding: 12px 8px;
            }

            .contact-button .icon-large {
                font-size: 24px;
            }

            .contact-button .button-text {
                font-size: 14px;
            }

            .list-group-item {
                padding: 10px 12px;
            }

            .contact-icon {
                min-width: 30px;
                height: 30px;
                margin-right: 12px;
                font-size: 16px;
            }

            .contact-text {
                font-size: 13px;
            }

            .credential-text {
                font-size: 13px;
            }
        }

        .watermark {
            position: absolute;
            bottom: 15px;
            right: 15px;
            font-size: 10px;
            color: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body>
    <div class="card custom-card shadow-lg">
        <div class="card-header custom-header text-center">
            <img src="logo_img/client_logo/elizabeth-l.png" alt="Thrive Behavioral Health Center Logo" class="custom-logo">
            <h4 class="logo-title">THRIVE BEHAVIORAL HEALTH CENTER</h4>
            <p class="logo-sub-title">LIVE.GROW.THRIVE</p>
        </div>

        <div class="card-body text-center">
            <h2 class="card-title">Elizabeth Diaz</h2>
            <p class="credential-text">LPC, LMHC, CMHC, NCC</p>
            <p class="card-subtitle">Clinic Director</p>
            <p class="card-subtitle mt-1 mb-4">Licensed Professional Counselor</p>

            <a href="tel:571-609-3507" style="text-decoration: none;">
                <button class="btn w-100 contact-button">
                    <div class="button-content d-inline-flex align-items-center justify-content-center gap-2">
                        <i class="fas fa-phone-alt icon-large" style="transform: scaleX(-1);"></i>
                        <span class="button-text">571-609-3507</span>
                    </div>
                </button>
            </a>

            <div class="list-group mb-3">
                <div class="list-group-item" onclick="window.open('mailto:Info@thrivebehavioralhealthcenter.com', '_self')">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-text">Info@thrivebehavioralhealthcenter.com</div>
                </div>

                <div class="list-group-item" onclick="window.open('https://thrivebehavioralhealthcenter.com/', '_blank')">
                    <div class="contact-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="contact-text">thrivebehavioralhealthcenter.com</div>
                </div>

                <div class="list-group-item" onclick="window.open('https://www.google.com/maps/search/?api=1&query=3060+Williams+Drive+Suite+300+Fairfax+VA+22031', '_blank')">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">3060 Williams Drive Suite 300, Fairfax, VA 22031</div>
                </div>
            </div>

            <button class="btn save-button mt-5 mb-5" onclick="generateVCF()">
                <i class="fas fa-address-card"></i>
                SAVE TO CONTACTS
            </button>

            <div class="watermark">Professional Digital Business Card</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        async function generateVCF() {
            const contactData = {
                firstName: "Elizabeth",
                lastName: "Diaz",
                title: "Licensed Professional Counselor, LPC, LMHC, CMHC, NCC",
                organization: "Thrive Behavioral Health Center",
                phoneMobile: "571-609-3507",
                email: "Info@thrivebehavioralhealthcenter.com",
                address: "3060 Williams Drive Suite 300, Fairfax, VA 22031",
                website: "https://thrivebehavioralhealthcenter.com/",
                profileImage: "logo_img/client_logo/elizabeth-l.png"
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
                `TEL;TYPE=WORK:${contactData.phoneMobile}`,
                `EMAIL;TYPE=WORK:${contactData.email}`,
                `URL:${contactData.website}`,
                `ADR;TYPE=WORK:;;${contactData.address};;;`,
                photoBase64 ? `PHOTO;ENCODING=b;TYPE=JPEG:${photoBase64}` : '',
                "END:VCARD"
            ];

            const vcfContent = vcfLines.filter(line => line).join('\n');
            const blob = new Blob([vcfContent], { type: 'text/vcard' });
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