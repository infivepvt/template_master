<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cradlewell - Company Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #627bff;
            --secondary-color: rgb(122, 141, 235);
            --accent-color: rgb(86, 105, 201);
            --light-color: #f0fdfa;
            --dark-color: #042f2e;
            --text-color: #134e4a;
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
            overflow: hidden;
            background: #627bff;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(13, 148, 136, 0.3);
            position: relative;
            overflow: visible;
        }

        .custom-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg,
                    rgba(13, 148, 136, 0) 0%,
                    rgba(13, 148, 136, 0.3) 25%,
                    rgba(13, 148, 136, 0.1) 50%,
                    rgba(13, 148, 136, 0.3) 75%,
                    rgba(13, 148, 136, 0) 100%);
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
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
            padding: 25px 20px;
            position: relative;
            height: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .company-logo {
            width: 350px;
            margin: 0 auto 15px;
            filter: drop-shadow(0 0 10px rgba(13, 148, 136, 0.5));
        }

        .company-logo img {
            width: 100%;
            height: auto;
            object-fit: contain;
        }

        .card-body {
            padding: 25px 20px;
            background: #0f172a;
        }

        .company-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 28px;
            color: var(--accent-color);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .company-tagline {
            font-size: 16px;
            color: var(--medium-text);
            font-weight: 400;
            font-style: italic;
            margin-bottom: 20px;
        }

        .location-text {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 15px 0;
            flex-wrap: wrap;
        }

        .location-item {
            background: rgb(255, 255, 255);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 14px;
            color: var(--accent-color);
        }

        .list-group-item {
            background-color: #1e293b;
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
            background-color: rgba(13, 148, 136, 0.1);
            border-color: rgba(13, 148, 136, 0.3);
            transform: translateX(5px);
        }

        .contact-icon {
            min-width: 35px;
            height: 35px;
            margin-right: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(13, 148, 136, 0.15);
            border-radius: 8px;
            color: var(--accent-color);
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

        .section-title {
            font-size: 20px;
            margin: 25px 0 15px;
            color: var(--accent-color);
            position: relative;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--accent-color), transparent);
        }

        .services-list {
            background: #1e293b;
            border-radius: 15px;
            padding: 20px;
            margin-top: 10px;
            border: 1px solid rgba(13, 148, 136, 0.2);
        }

        .service-item {
            padding: 8px 0;
            color: var(--medium-text);
            display: flex;
            align-items: flex-start;
        }

        .service-item::before {
            content: "•";
            color: var(--accent-color);
            font-size: 20px;
            margin-right: 10px;
        }

        .save-button {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: #fff;
            font-weight: 600;
            border: none;
            padding: 15px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            gap: 15px;
            margin-top: 25px;
            box-shadow: 0 5px 15px rgba(13, 148, 136, 0.3);
            width: 100%;
        }

        .save-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(13, 148, 136, 0.4);
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        }

        .save-button:active {
            transform: translateY(1px);
        }

        .watermark {
            position: absolute;
            bottom: 15px;
            right: 15px;
            font-size: 10px;
            color: rgba(255, 255, 255, 0.2);
        }

        @media (max-width: 480px) {
            .custom-card {
                margin-top: 0;
            }

            .company-title {
                font-size: 24px;
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

            .section-title {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>
    <div class="card custom-card shadow-lg">
        <div class="card-header custom-header text-center">
            <div class="company-logo">
                <img src="logo_img/client_logo/cradlewell-l.png" alt="Cradlewell Logo">
            </div>
            <p class="company-tagline">Your Comfort Is Our Care</p>

            <div class="location-text">
                <span class="location-item">Bangalore</span>
                <span class="location-item">Hyderabad</span>
                <span class="location-item">Chennai</span>
            </div>
        </div>

        <div class="card-body text-center">
            <h2 class="company-title">Cradlewell</h2>

            <div class="list-group mb-3">
                <div class="list-group-item" onclick="window.open('https://cradlewell.com/', '_blank')">
                    <div class="contact-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="contact-text">cradlewell.com</div>
                </div>

                <div class="list-group-item" onclick="window.open('mailto:care@cradlewell.com', '_self')">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-text">care@cradlewell.com</div>
                </div>

                <div class="list-group-item" onclick="window.open('tel:+919363893639', '_self')">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-text">+91 9363893639</div>
                </div>
            </div>

            <h4 class="section-title">About Cradlewell</h4>

            <div class="services-list">
                <p style="color: var(--accent-color); font-weight: 600; margin-bottom: 15px; text-align: center;">
                    Postnatal & Newborn Home Care Services
                </p>
                <div class="service-item">Daily Nurse Visits</div>
                <div class="service-item">Mother & Baby Hygiene</div>
                <div class="service-item">Breastfeeding Support</div>
                <div class="service-item">Pediatric Consults</div>
            </div>

            <button class="btn save-button" onclick="generateVCF()">
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
                organization: "Cradlewell",
                phoneCompany: "+919363893639",
                emailCare: "care@cradlewell.com",
                locations: "Bangalore | Hyderabad | Chennai",
                website: "https://cradlewell.com",
                profileImage: "logo_img/client_logo/cradlewell-l.png"
            };

            let vcfLines = [
                "BEGIN:VCARD",
                "VERSION:3.0",
                `ORG:${contactData.organization}`,
                `TEL;TYPE=WORK,VOICE:${contactData.phoneCompany}`,
                `EMAIL;TYPE=WORK:${contactData.emailCare}`,
                `URL:${contactData.website}`,
                `NOTE:Locations: ${contactData.locations}\nServices: Postnatal & Newborn Home Care Services, Daily Nurse Visits, Mother & Baby Hygiene, Breastfeeding Support, Pediatric Consults`,
                "END:VCARD"
            ];

            const vcfContent = vcfLines.filter(line => line).join('\n');
            const blob = new Blob([vcfContent], {
                type: 'text/vcard'
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `${contactData.organization}.vcf`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);

            alert("Contact information saved successfully!");
        }
    </script>
</body>

</html>