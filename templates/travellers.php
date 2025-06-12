<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Business Card | Travellers Marketplace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #d62c1a;
            --secondary: #ff6b6b;
            --accent: #ff9e7d;
            --light: #f8f9fa;
            --dark: #121212;
            --bg-gradient: linear-gradient(135deg, #000000 0%, #2b2b2b 100%);
            --btn-gradient: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background: var(--dark);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #e0e0e0;
        }

        .travel-card {
            max-width: 450px;
            width: 100%;
            background: #1e1e1e;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
            position: relative;
            transition: transform 0.3s ease;
            border: 1px solid #333;
        }

        .travel-card:hover {
            transform: translateY(-10px);
        }

        .card-header {
            background: var(--primary);
            padding: 35px 20px 100px;
            position: relative;
            text-align: center;
            background: linear-gradient(135deg, rgb(255, 255, 255) 10%, rgb(231, 135, 135) 100%);
        }

        .header-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.3;
            z-index: 0;
        }

        .company-logo {
            max-width: 180px;
            filter: drop-shadow(0 3px 5px rgba(0, 0, 0, 0.2));
            position: relative;
            z-index: 1;
        }

        .profile-picture {
            position: absolute;
            top: 85%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }

        .profile-picture img {
            width: 130px;
            height: 130px;
            border: 5px solid #1e1e1e;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }

        .card-body {
            padding: 80px 25px 30px;
            background: #1e1e1e;
            white-space: nowrap;
        }

        .company-name {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 28px;
            color: var(--light);
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }

        .company-tagline {
            font-size: 16px;
            color: var(--secondary);
            font-weight: 600;
            margin-bottom: 5px;
        }

        .director-name {
            font-size: 16px;
            color: #b0b0b0;
            margin-bottom: 30px;
        }

        .contact-section {
            background: #2b2b2b;
            border-radius: 20px;
            padding: 15px 10px;
            margin: 0 auto 25px;
            max-width: 95%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border: 1px solid #333;
        }

        .contact-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 15px 5px;
            background: #252525;
            border-radius: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
            border: 1px solid #3a3a3a;
            box-sizing: border-box;
        }

        .contact-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(214, 44, 26, 0.3);
            border-color: var(--primary);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: var(--btn-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
            color: white;
            font-size: 20px;
        }

        .contact-label {
            font-size: 13px;
            font-weight: 600;
            color: var(--secondary);
            margin-bottom: 5px;
        }

        .contact-value {
            font-size: 13px;
            color: var(--light);
            font-weight: 500;
            word-break: break-word;
        }

        .locations {
            background: #252525;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border: 1px solid #3a3a3a;
        }

        .section-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: var(--light);
            margin-bottom: 15px;
            font-size: 18px;
            position: relative;
            display: inline-block;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary);
            border-radius: 3px;
        }

        .location-item {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px dashed #444;
        }

        .location-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .location-icon {
            width: 30px;
            height: 30px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: white;
            font-size: 14px;
        }

        .location-text {
            flex: 1;
            text-align: left;
            font-size: 14px;
            color: #e0e0e0;
        }

        .location-link {
            color: var(--secondary);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: block;
            margin-top: 3px;
        }

        .location-link:hover {
            color: var(--accent);
            text-decoration: underline;
        }

        .save-contact-btn {
            background: var(--btn-gradient);
            color: white;
            font-weight: 600;
            border: none;
            padding: 15px 25px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            width: 90%;
            font-size: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(214, 44, 26, 0.5);
        }

        .save-contact-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(214, 44, 26, 0.7);
        }

        .save-contact-btn i {
            margin-right: 10px;
            font-size: 18px;
        }

        .social-section {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 25px;
        }

        .social-icon {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--light);
            font-size: 18px;
            transition: all 0.3s ease;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
        }

        .social-icon:hover {
            transform: translateY(-5px);
            background: var(--primary);
            color: white;
            box-shadow: 0 8px 15px rgba(214, 44, 26, 0.4);
        }

        .watermark {
            position: absolute;
            bottom: 20px;
            right: 20px;
            font-size: 10px;
            color: rgba(255, 255, 255, 0.1);
            z-index: 1;
        }

        @media (max-width: 480px) {
            .company-name {
                font-size: 24px;
            }

            .card-header {
                padding: 25px 15px 90px;
            }

            .profile-picture img {
                width: 110px;
                height: 110px;
            }
        }
    </style>
</head>

<body>
    <div class="travel-card">
        <div class="card-header">
            <img src="https://images.unsplash.com/photo-1551918120-9739cb430c6d?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&w=400&ixlib=rb-1.2.1&q=80" alt="Travel Background" class="header-bg">
            <img src="logo_img/client_logo/travellers-l.png" alt="Travellers Marketplace" class="company-logo">
            <div class="profile-picture">
                <img src="profile_img/client_profile/travellers-p.png" alt="Saman K. Konara">
            </div>
        </div>

        <div class="card-body">
            <h1 class="company-name">Travellers Marketplace Pvt Ltd</h1>
            <p class="company-tagline">Creating Unforgettable Journeys</p>
            <p class="director-name">Director: Saman K. Konara</p>

            <div class="contact-section">
                <div class="row row-cols-2 row-cols-md-2 g-3">
                    <div class="col">
                        <div class="contact-item" onclick="window.open('tel:+94777777035')">
                            <div class="contact-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="contact-label">Hotline</div>
                            <div class="contact-value">+94 77 777 7035</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="contact-item" onclick="window.open('tel:+94772773777')">
                            <div class="contact-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="contact-label">Director's Mobile</div>
                            <div class="contact-value">+94 77 277 3777</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="contact-item" onclick="window.open('mailto:Hello@travellers.lk')">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-label">Company Email</div>
                            <div class="contact-value">Hello@travellers.lk</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="contact-item" onclick="window.open('mailto:Director@travellers.lk')">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-label">Director's Email</div>
                            <div class="contact-value">Director@travellers.lk</div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="contact-item" onclick="window.open('https://www.travellers.lk')">
                            <div class="contact-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="contact-label">Website</div>
                            <div class="contact-value">www.travellers.lk</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="locations">
                <h3 class="section-title">Our Locations</h3>

                <div class="location-item mt-3">
                    <div class="location-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                    <div class="location-text丰富
                    <div class=" location-text">
                        <strong>United Arab Emirates</strong>
                    </div>
                </div>

                <div class="location-item">
                    <div class="location-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                    <div class="location-text">
                        <strong>Sri Lanka</strong>
                    </div>
                </div>

                <div class="location-item">
                    <div class="location-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="location-text">
                        <div>Colombo Office</div>
                        <a href="mailto:Colombo@travellers.lk" class="location-link">Colombo@travellers.lk</a>
                    </div>
                </div>

                <div class="location-item">
                    <div class="location-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="location-text">
                        <div>Kandy Office</div>
                        <a href="mailto:Kandy@travellers.lk" class="location-link">Kandy@travellers.lk</a>
                    </div>
                </div>

                <div class="location-item">
                    <div class="location-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="location-text">
                        <div>Kurunegala Office</div>
                        <a href="mailto:Kurunegala@travellers.lk" class="location-link">Kurunegala@travellers.lk</a>
                    </div>
                </div>

                <div class="location-item">
                    <div class="location-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="location-text">
                        <div>Nuwara Eliya Office</div>
                        <a href="mailto:Nuwaraeliya@travellers.lk" class="location-link">Nuwaraeliya@travellers.lk</a>
                    </div>
                </div>
            </div>

            <button class="save-contact-btn">
                <i class="fas fa-save"></i> SAVE TO CONTACTS
            </button>

            <div class="social-section">
                <a href="https://www.instagram.com/travellers.lk" class="social-icon">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.facebook.com/travellers.lk" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.youtube.com/@travellerslk" class="social-icon">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>

        <!-- <div class="watermark">Travellers Marketplace Pvt Ltd</div> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelector('.save-contact-btn').addEventListener('click', async function() {
            const contactData = {
                firstName: "Saman",
                lastName: "Konara",
                title: "Director",
                organization: "Travellers Marketplace Pvt Ltd",
                phoneHotline: "+94 77 777 7035",
                phoneDirector: "+94 77 277 3777",
                emailCompany: "Hello@travellers.lk",
                emailDirector: "Director@travellers.lk",
                address: "Sri Lanka",
                website: "https://www.travellers.lk/",
                profileImage: "profile_img/client_profile/travellers-p.png"
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
                `TEL;TYPE=WORK:${contactData.phoneHotline}`,
                `TEL;TYPE=CELL:${contactData.phoneDirector}`,
                `EMAIL;TYPE=WORK:${contactData.emailCompany}`,
                `EMAIL;TYPE=WORK:${contactData.emailDirector}`,
                `URL:${contactData.website}`,
                `ADR;TYPE=WORK:;;${contactData.address};;;`,
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
        });
    </script>
</body>

</html>