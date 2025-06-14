<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudaraka Bandara - CEO Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-dark: #1a1a1a;
            --primary-darker: #0d0d0d;
            --gold-primary: #D4AF37;
            --gold-secondary: #FFD700;
            --gold-tertiary: #C5A020;
            --light-bg: #f8f9fa;
            --text-dark: #333;
            --text-light: #fff;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #2c2c2c 0%, #1a1a1a 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #e0e0e0;
        }
        
        .profile-card {
            background: linear-gradient(135deg, #1a1a1a 0%, #0d0d0d 100%);
            color: var(--text-light);
            width: 100%;
            margin: 0 auto;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            position: relative;
            z-index: 1;
            border: 1px solid rgba(212, 175, 55, 0.3);
        }
        
        .profile-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, var(--gold-primary) 0%, var(--gold-secondary) 50%, var(--gold-primary) 100%);
            z-index: 2;
        }
        
        .gold-header {
            background: linear-gradient(135deg, #1a1a1a 0%, #0d0d0d 100%);
            text-align: center;
            padding: 20px;
            border-bottom: 1px solid rgba(212, 175, 55, 0.3);
        }
        
        .company-logo {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--gold-primary) 0%, var(--gold-secondary) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            border: 3px solid #1a1a1a;
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.5);
        }
        
        .company-logo i {
            font-size: 40px;
            color: #1a1a1a;
        }
        
        .profile-banner {
            position: relative;
            height: 420px;
            overflow: hidden;
        }
        
        .profile-banner .profile-banner-cover {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(13, 13, 13, 0.9), transparent);
            z-index: 1;
        }
        
        .profile-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.85);
        }
        
        .profile-info {
            position: absolute;
            bottom: 20px;
            left: 30px;
            z-index: 3;
            max-width: 80%;
        }
        
        .profile-info h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--gold-secondary);
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
        }
        
        .profile-info .position {
            font-size: 1.3rem;
            font-weight: 500;
            color: var(--gold-primary);
            margin-bottom: 5px;
            display: block;
        }
        
        .profile-info .company {
            font-size: 1.1rem;
            font-weight: 400;
            color: #c0c0c0;
            font-style: italic;
        }
        
        .profile-contact-icons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            padding: 25px 15px;
            background: rgba(26, 26, 26, 0.8);
            border-bottom: 1px solid rgba(212, 175, 55, 0.3);
        }
        
        .contact-button {
            background: linear-gradient(135deg, var(--gold-primary) 0%, var(--gold-secondary) 100%);
            border-radius: 50%;
            width: 55px;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            position: relative;
        }
        
        .contact-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 7px 15px rgba(212, 175, 55, 0.5);
            background: linear-gradient(135deg, var(--gold-secondary) 0%, var(--gold-primary) 100%);
        }
        
        .contact-icon {
            font-size: 1.6rem;
            color: #1a1a1a;
        }
        
        .contact-button .tooltip-text {
            visibility: hidden;
            background-color: var(--gold-primary);
            color: #1a1a1a;
            text-align: center;
            border-radius: 4px;
            padding: 5px 10px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: opacity 0.3s;
            font-size: 0.85rem;
            white-space: nowrap;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
            font-weight: 600;
        }
        
        .contact-button:hover .tooltip-text {
            visibility: visible;
            opacity: 1;
        }
        
        .gallery-section {
            padding: 20px;
            background: linear-gradient(135deg, #1a1a1a 0%, #0d0d0d 100%);
        }
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid rgba(212, 175, 55, 0.3);
        }
        
        .section-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--gold-secondary);
            margin: 0;
        }
        
        .section-title i {
            margin-right: 10px;
            color: var(--gold-primary);
        }
        
        .gallery-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
        }
        
        .gallery-item {
            border-radius: 8px;
            overflow: hidden;
            aspect-ratio: 1;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            border: 1px solid rgba(212, 175, 55, 0.2);
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(212, 175, 55, 0.3);
        }
        
        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }
        
        .gallery-item:hover .gallery-image {
            transform: scale(1.1);
        }
        
        .about-section {
            padding: 25px;
            background: linear-gradient(135deg, #1a1a1a 0%, #0d0d0d 100%);
        }
        
        .about-section p {
            font-size: 1rem;
            line-height: 1.7;
            color: #e0e0e0;
            margin-bottom: 25px;
            text-align: center;
        }
        
        .custom-save-button {
            background: linear-gradient(135deg, var(--gold-primary) 0%, var(--gold-secondary) 100%);
            color: #1a1a1a;
            border: none;
            padding: 15px;
            font-weight: 700;
            font-size: 1.1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            width: 100%;
            margin-top: 15px;
        }
        
        .custom-save-button:hover {
            background: linear-gradient(135deg, var(--gold-secondary) 0%, var(--gold-primary) 100%);
            transform: translateY(-3px);
            box-shadow: 0 7px 15px rgba(212, 175, 55, 0.5);
            color: #0d0d0d;
        }
        
        .footer {
            background: linear-gradient(135deg, #1a1a1a 0%, #0d0d0d 100%);
            text-align: center;
            padding: 15px;
            color: var(--gold-primary);
            font-size: 0.9rem;
            border-top: 1px solid rgba(212, 175, 55, 0.3);
        }
        
        .logo-watermark {
            position: absolute;
            bottom: 20px;
            right: 20px;
            opacity: 0.08;
            z-index: 0;
            font-size: 8rem;
            color: var(--gold-secondary);
        }
        
        /* Lightbox styles */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(13, 13, 13, 0.95);
            z-index: 10000;
            justify-content: center;
            align-items: center;
        }
        
        .lightbox-content {
            max-width: 90%;
            max-height: 90%;
            position: relative;
        }
        
        .lightbox-image {
            max-width: 100%;
            max-height: 80vh;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            border: 2px solid var(--gold-primary);
        }
        
        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: var(--gold-secondary);
            font-size: 40px;
            cursor: pointer;
            transition: all 0.3s;
            text-shadow: 0 0 5px rgba(0,0,0,0.5);
        }
        
        .lightbox-close:hover {
            transform: scale(1.2);
            color: var(--gold-primary);
        }
        
        .lightbox-nav {
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: space-between;
            top: 50%;
            transform: translateY(-50%);
            padding: 0 20px;
            box-sizing: border-box;
        }
        
        .lightbox-nav button {
            background: rgba(26, 26, 26, 0.7);
            border: 2px solid var(--gold-primary);
            color: var(--gold-secondary);
            font-size: 30px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }
        
        .lightbox-nav button:hover {
            background: var(--gold-primary);
            color: #1a1a1a;
        }
        
        @media (max-width: 576px) {
            .profile-info h2 {
                font-size: 1.8rem;
            }
            
            .profile-info .position {
                font-size: 1.1rem;
            }
            
            .contact-button {
                width: 50px;
                height: 50px;
            }
            
            .section-title {
                font-size: 1.2rem;
            }
            
            .about-section {
                padding: 20px 15px;
            }
            
            .logo-watermark {
                font-size: 5rem;
                bottom: 10px;
                right: 10px;
            }
        }
        
        .gold-divider {
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--gold-primary), transparent);
            margin: 15px 0;
        }
    </style>
</head>

<body>
    <div class="profile-card">
        <!-- <div class="gold-header">
            <div class="company-logo">
                <i class="fas fa-crown"></i>
            </div>
            <h3 style="color: var(--gold-secondary);">OSA Solutions (Pvt) Ltd</h3>
            <p style="color: var(--gold-primary);">Precision-Driven Project Management</p>
        </div> -->
        
        <!-- <div class="gold-divider"></div> -->
        
        <div class="profile-banner">
            <div class="profile-banner-cover"></div>
            <img class="profile-photo" src="profile_img/client_profile/sudaraka-p.png" alt="Sudaraka Bandara">
            <div class="profile-info">
                <h2>Sudaraka Bandara</h2>
                <span class="position">Director / CEO</span>
                <span class="company">OSA Solutions</span>
            </div>
            <div class="logo-watermark">
                <i class="fas fa-crown"></i>
            </div>
        </div>

        <div class="profile-contact-icons">
            <!-- Phone -->
            <button type="button" class="contact-button" onclick="window.open('tel:+94770170170', '_self')">
                <i class="fas fa-phone contact-icon"></i>
                <span class="tooltip-text">Call +94770170170</span>
            </button>
            
            <!-- Email -->
            <button type="button" class="contact-button" onclick="window.open('mailto:sudaraka@osasolution.lk', '_self')">
                <i class="fas fa-envelope contact-icon"></i>
                <span class="tooltip-text">Email sudaraka@osasolution.lk</span>
            </button>
            
            <!-- Location -->
            <button type="button" class="contact-button" onclick="window.open('https://www.google.com/maps/search/?api=1&query=No+331%2F+17%2C+Dewala+Road%2C+Katuwana%2C+Homagama', '_blank')">
                <i class="fas fa-map-marker-alt contact-icon"></i>
                <span class="tooltip-text">View Location</span>
            </button>
            
            <!-- LinkedIn -->
            <button type="button" class="contact-button" onclick="window.open('http://www.linkedin.com/in/sudaraka-bandara-742573322', '_blank')">
                <i class="fab fa-linkedin-in contact-icon"></i>
                <span class="tooltip-text">LinkedIn Profile</span>
            </button>
            
            <!-- TikTok -->
            <button type="button" class="contact-button" onclick="window.open('https://www.tiktok.com/@osasolution', '_blank')">
                <i class="fab fa-tiktok contact-icon"></i>
                <span class="tooltip-text">TikTok Profile</span>
            </button>
            
            <!-- Instagram -->
            <button type="button" class="contact-button" onclick="window.open('https://www.instagram.com/osasolution_8396/', '_blank')">
                <i class="fab fa-instagram contact-icon"></i>
                <span class="tooltip-text">Instagram Profile</span>
            </button>
            
            <!-- Threads -->
            <button type="button" class="contact-button" onclick="window.open('https://www.threads.com/@osasolution_8396', '_blank')">
                <i class="fab fa-threads contact-icon"></i>
                <span class="tooltip-text">Threads Profile</span>
            </button>
            
            <!-- YouTube -->
            <button type="button" class="contact-button" onclick="window.open('https://www.youtube.com/@OSASolutionsPvtLtd', '_blank')">
                <i class="fab fa-youtube contact-icon"></i>
                <span class="tooltip-text">YouTube Channel</span>
            </button>
            
            <!-- Twitter/X -->
            <button type="button" class="contact-button" onclick="window.open('https://x.com/osasolution34', '_blank')">
                <i class="fab fa-x-twitter contact-icon"></i>
                <span class="tooltip-text">Twitter/X Profile</span>
            </button>
        </div>

        <!-- <div class="gallery-section">
            <div class="section-header">
                <h3 class="section-title"><i class="fas fa-images"></i>Company Gallery</h3>
            </div>
            <div class="gallery-container">
                <div class="gallery-item" onclick="openLightbox('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80')">
                    <img class="gallery-image" src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Office Meeting">
                </div>
                <div class="gallery-item" onclick="openLightbox('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80')">
                    <img class="gallery-image" src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Team Collaboration">
                </div>
                <div class="gallery-item" onclick="openLightbox('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80')">
                    <img class="gallery-image" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Corporate Team">
                </div>
                <div class="gallery-item" onclick="openLightbox('https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80')">
                    <img class="gallery-image" src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Business Strategy">
                </div>
                <div class="gallery-item" onclick="openLightbox('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1115&q=80')">
                    <img class="gallery-image" src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Data Analytics">
                </div>
                <div class="gallery-item" onclick="openLightbox('https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80')">
                    <img class="gallery-image" src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Company Presentation">
                </div>
            </div>
        </div> -->

        <div class="lightbox" id="lightbox">
            <span class="lightbox-close" onclick="closeLightbox()">×</span>
            <div class="lightbox-nav">
                <button onclick="changeImage(-1)">❮</button>
                <button onclick="changeImage(1)">❯</button>
            </div>
            <div class="lightbox-content">
                <img id="lightbox-image" class="lightbox-image" src="" alt="">
            </div>
        </div>

        <div class="about-section">
            <div class="section-header">
                <h3 class="section-title"><i class="fas fa-user-tie"></i>Professional Profile</h3>
            </div>
            <p>Sudaraka Bandara, the Director and CEO of OSA Solutions (Pvt) Ltd, leads the company with a clear vision for delivering precision-driven project management and coordination services. With a strong foundation in technical expertise and strategic leadership, he is committed to ensuring that every project handled by OSA Solutions meets the highest standards of efficiency, transparency, and client satisfaction.</p>
            <p>Under his guidance, the company has become a trusted partner for businesses seeking tailored solutions that align with their unique goals and drive measurable results. With over a decade of industry experience, Mr. Bandara brings innovative approaches to complex challenges while maintaining a focus on sustainable growth and operational excellence.</p>
            
            <button class="btn custom-save-button" onclick="downloadVCF()">
                <i class="fas fa-save"></i>
                SAVE TO CONTACTS
            </button>
        </div>

        <div class="footer">
            <p>© 2023 OSA Solutions (Pvt) Ltd. All rights reserved</p>
        </div>
    </div>

    <script>
        const galleryImages = [
            'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
            'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
            'https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
            'https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
            'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1115&q=80',
            'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
        ];

        let currentImageIndex = 0;

        async function downloadVCF() {
            const contactData = {
                firstName: "Sudaraka",
                lastName: "Bandara",
                title: "Director / CEO",
                organization: "OSA Solutions",
                phoneMobile: "+94770170170",
                email: "sudaraka@osasolution.lk",
                address: "No 331/ 17, Dewala Road, Katuwana, Homagama",
                profileImage: "profile_img/client_profile/sudaraka-p.png"
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
                `TEL;TYPE=WORK,VOICE:${contactData.phoneMobile}`,
                `EMAIL;TYPE=WORK:${contactData.email}`,
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
        }

        function openLightbox(imageSrc) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImage = document.getElementById('lightbox-image');
            currentImageIndex = galleryImages.indexOf(imageSrc);
            lightboxImage.src = imageSrc;
            lightbox.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        function changeImage(step) {
            currentImageIndex += step;
            if (currentImageIndex >= galleryImages.length) {
                currentImageIndex = 0;
            } else if (currentImageIndex < 0) {
                currentImageIndex = galleryImages.length - 1;
            }
            document.getElementById('lightbox-image').src = galleryImages[currentImageIndex];
        }

        document.getElementById('lightbox').addEventListener('click', function(e) {
            if (e.target === this) {
                closeLightbox();
            }
        });

        document.addEventListener('keydown', function(e) {
            const lightbox = document.getElementById('lightbox');
            if (lightbox.style.display === 'flex') {
                if (e.key === 'Escape') {
                    closeLightbox();
                } else if (e.key === 'ArrowLeft') {
                    changeImage(-1);
                } else if (e.key === 'ArrowRight') {
                    changeImage(1);
                }
            }
        });
    </script>
</body>
</html>