<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sachindu Nethmina - Software Engineer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        /* COLORS CSS */

        :root {
            /* Primary colors */
            --color-primary-50: #e6f1ff;
            --color-primary-100: #bdd6ff;
            --color-primary-200: #94bbff;
            --color-primary-300: #6ba0ff;
            --color-primary-400: #4285ff;
            --color-primary-500: #196aff;
            --color-primary-600: #1552cc;
            --color-primary-700: #103c99;
            --color-primary-800: #0b2666;
            --color-primary-900: #051333;

            /* Accent colors */
            --color-accent-50: #fff6e6;
            --color-accent-100: #ffdfb3;
            --color-accent-200: #ffc880;
            --color-accent-300: #ffb14d;
            --color-accent-400: #ff9a1a;
            --color-accent-500: #e68300;
            --color-accent-600: #b36600;
            --color-accent-700: #804900;
            --color-accent-800: #4d2c00;
            --color-accent-900: #1a0f00;

            /* Dark theme colors */
            --color-bg-primary: #121212;
            --color-bg-secondary: #1e1e1e;
            --color-bg-tertiary: #2a2a2a;
            --color-bg-card: #262626;

            /* Text colors */
            --color-text-primary: #ffffff;
            --color-text-secondary: rgba(255, 255, 255, 0.87);
            --color-text-tertiary: rgba(255, 255, 255, 0.6);
            --color-text-subtle: rgba(255, 255, 255, 0.38);

            /* Border colors */
            --color-border-light: rgba(255, 255, 255, 0.12);
            --color-border-medium: rgba(255, 255, 255, 0.24);

            /* Other UI colors */
            --color-shadow: rgba(0, 0, 0, 0.5);
            --color-overlay: rgba(0, 0, 0, 0.7);

            /* Functional colors */
            --color-success: #00c853;
            --color-warning: #ffd600;
            --color-error: #ff3d00;
        }

        /* COLORS CSS */

        /* ANIMATIONS CSS */

        /* Text highlight animation */
        @keyframes highlightText {
            0% {
                background-position: -100% 0;
            }

            100% {
                background-position: 200% 0;
            }
        }

        .highlight {
            position: relative;
            display: inline-block;
            background: linear-gradient(90deg,
                    var(--color-bg-primary) 0%,
                    var(--color-primary-500) 25%,
                    var(--color-accent-500) 50%,
                    var(--color-primary-500) 75%,
                    var(--color-bg-primary) 100%);
            background-size: 200% 100%;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: highlightText 8s linear infinite;
        }

        /* Button hover animation */
        .download-btn {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .download-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg,
                    transparent,
                    rgba(255, 255, 255, 0.1),
                    transparent);
            transition: left 0.7s ease;
        }

        .download-btn:hover::before {
            left: 100%;
        }

        /* Contact item hover effect */
        .contact-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .contact-item:hover .contact-icon {
            background-color: var(--color-primary-600);
            color: var(--color-text-primary);
        }

        .contact-item:hover .contact-value {
            color: var(--color-primary-400);
        }

        /* Animation for section titles */
        @keyframes borderAnimation {
            0% {
                width: 0;
            }

            100% {
                width: 40px;
            }
        }

        .section-title::after {
            animation: borderAnimation 1s ease-out forwards;
        }

        /* Profile photo animation */
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(25, 106, 255, 0.4);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(25, 106, 255, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(25, 106, 255, 0);
            }
        }

        .profile-photo {
            animation: pulse 2s infinite;
        }

        /* Page load animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .profile-info {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .contact-actions {
            animation: fadeInUp 1s ease-out forwards;
        }

        .contact-info {
            animation: fadeInUp 1.2s ease-out forwards;
        }

        /* Staggered animation for contact items */
        .contact-item {
            opacity: 0;
            animation: fadeInUp 0.5s ease-out forwards;
        }

        .contact-item:nth-child(1) {
            animation-delay: 0.3s;
        }

        .contact-item:nth-child(2) {
            animation-delay: 0.4s;
        }

        .contact-item:nth-child(3) {
            animation-delay: 0.5s;
        }

        .contact-item:nth-child(4) {
            animation-delay: 0.6s;
        }

        .contact-item:nth-child(5) {
            animation-delay: 0.7s;
        }

        .contact-item:nth-child(6) {
            animation-delay: 0.8s;
        }

        .contact-item:nth-child(7) {
            animation-delay: 0.9s;
        }

        /* Floating shapes background animation */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }

        .floating-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
            overflow: hidden;
        }

        .shape {
            position: absolute;
            background: linear-gradient(45deg, var(--color-primary-500), var(--color-accent-500));
            border-radius: 50%;
            opacity: 0.1;
            animation: float 15s infinite;
        }

        .shape:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 150px;
            height: 150px;
            top: 60%;
            left: 80%;
            animation-delay: -2s;
        }

        .shape:nth-child(3) {
            width: 80px;
            height: 80px;
            top: 80%;
            left: 20%;
            animation-delay: -4s;
        }

        .shape:nth-child(4) {
            width: 120px;
            height: 120px;
            top: 30%;
            left: 60%;
            animation-delay: -6s;
        }

        /* ANIMATIONS CSS */

        /* LAYOUT CSS */

        /* Base layout */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html,
        body {
            height: 100%;
            width: 100%;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            line-height: 1.5;
            background-color: var(--color-bg-primary);
            color: var(--color-text-primary);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0;
            position: relative;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            position: relative;
            height: 280px;
            width: 100%;
        }

        .cover-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 200px;
            background-image: url('https://static.vecteezy.com/system/resources/previews/042/533/761/non_2x/black-and-blue-gradient-mesh-background-with-elegant-and-clean-style-vector.jpg');
            background-size: cover;
            background-position: center;
            z-index: 1;
        }

        .profile-container {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
        }

        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 4px solid var(--color-bg-primary);
            background-image: url('profile_img/client_profile/sachindu-p.png');
            background-size: cover;
            background-position: center;
            box-shadow: 0 4px 20px var(--color-shadow);
        }

        main {
            flex: 1;
            padding: 24px 16px;
            display: flex;
            flex-direction: column;
            gap: 32px;
            margin-top: 48px;
        }

        .profile-info {
            text-align: center;
            margin-bottom: 16px;
        }

        .contact-actions {
            display: flex;
            justify-content: center;
            margin-bottom: 16px;
        }

        .section-title {
            margin-bottom: 24px;
            text-align: center;
            font-size: 1.5rem;
            color: var(--color-text-secondary);
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 3px;
            background-color: var(--color-primary-500);
            border-radius: 4px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 24px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            padding: 16px;
            background-color: var(--color-bg-card);
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 48px;
            height: 48px;
            border-radius: 12px;
            margin-right: 16px;
            background-color: var(--color-bg-tertiary);
            color: var(--color-primary-400);
        }

        .contact-details {
            display: flex;
            flex-direction: column;
        }

        .contact-label {
            font-size: 0.875rem;
            color: var(--color-text-tertiary);
            margin-bottom: 4px;
        }

        .contact-value {
            font-size: 1rem;
            font-weight: 500;
            color: var(--color-text-secondary);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        footer {
            text-align: center;
            padding: 24px 16px;
            color: var(--color-text-tertiary);
            font-size: 0.875rem;
        }

        /* Media Queries */
        @media (min-width: 640px) {
            .contact-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            main {
                padding: 32px;
            }
        }

        @media (min-width: 768px) {
            header {
                height: 320px;
            }

            .cover-image {
                height: 240px;
            }

            .profile-photo {
                width: 180px;
                height: 180px;
            }
        }

        @media (min-width: 1024px) {
            .container {
                max-width: 960px;
            }
        }

        /* LAYOUT CSS */

        /* MAIN CSS */

        /* Typography */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            line-height: 1.2;
        }

        h1.name {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        h2.position {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--color-text-secondary);
            margin-bottom: 4px;
        }

        p.work {
            font-size: 1.125rem;
            color: var(--color-text-tertiary);
            margin-bottom: 16px;
        }

        /* Download button */
        .download-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            background-color: var(--color-primary-600);
            color: var(--color-text-primary);
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            gap: 8px;
            box-shadow: 0 4px 12px rgba(25, 106, 255, 0.2);
        }

        .btn-text {
            font-size: 1rem;
        }

        .btn-icon {
            display: flex;
            align-items: center;
        }

        .btn-icon svg {
            width: 20px;
            height: 20px;
        }

        /* Contact value hover */
        .contact-value:hover {
            color: var(--color-accent-400);
        }

        /* Current year script - using CSS content for static display */
        #current-year::before {
            content: "2025";
        }

        /* MAIN CSS */
    </style>
</head>

<body>
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="container">
        <header>
            <div class="cover-image"></div>
            <div class="profile-container">
                <div class="profile-photo"></div>
            </div>
        </header>

        <main>
            <section class="profile-info">
                <h1 class="name"><span class="highlight">Sachindu Nethmina</span></h1>
                <h2 class="position">Software Engineer</h2>
                <p class="work">Infive Pvt Ltd</p>
            </section>

            <section class="contact-actions">
                <a onclick="generateVCF();" download class="download-btn">
                    <span class="btn-text">Download Contact</span>
                    <span class="btn-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                    </span>
                </a>
            </section>

            <section class="contact-info">
                <h3 class="section-title">Contact Information</h3>

                <div class="contact-grid">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <span class="contact-label">Phone</span>
                            <a href="tel:+94704814319" class="contact-value">+94 70 481 4319</a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <span class="contact-label">Email</span>
                            <a href="mailto:sachinethmina6@gmail.com" class="contact-value">sachinethmina6@gmail.com</a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <span class="contact-label">Instagram</span>
                            <a href="https://www.instagram.com/sachindunethmina1/" target="_blank" class="contact-value">@sachindunethmina1</a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <span class="contact-label">Facebook</span>
                            <a href="https://www.facebook.com/sachindunethmina.weerasingha" target="_blank" class="contact-value">Sachindu Nethmina</a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                <rect x="2" y="9" width="4" height="12"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <span class="contact-label">LinkedIn</span>
                            <a href="https://lk.linkedin.com/in/sachindu-nethmina-19996b250" target="_blank" class="contact-value">Sachindu Nethmina</a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <span class="contact-label">WhatsApp</span>
                            <a href="https://wa.me/+94704814319" target="_blank" class="contact-value">+94 70 481 4319</a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <span class="contact-label">Website</span>
                            <a href="https://infiveprint.com/" target="_blank" class="contact-value">infiveprint.com</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <p>&copy; <span id="current-year"></span> Sachindu Nethmina. All rights reserved.</p>
        </footer>
    </div>

    <script>
        async function generateVCF() {
            const contactData = {
                firstName: "Sachindu",
                lastName: "Nethmina",
                title: "Software Engineer",
                phoneWork: "",
                phoneMobile: "+94704814319",
                email: "sachindunethmina6@gmail.com",
                email2: "",
                email3: "",
                website: "",
                website2: "",
                website3: "",
                address: "",
                address2: "",
                about: "Software Engineer",
                logo: "https://tapilinq.com/profile_img/client_profile/sachindu-p.png",
                profileImage: "https://tapilinq.com/profile_img/client_profile/sachindu-p.png" // Same as logo in this case
            };

            // Convert image to base64
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

            // Build VCF content
            let vcfLines = [
                "BEGIN:VCARD",
                "VERSION:3.0",
                `FN:${contactData.firstName} ${contactData.lastName}`,
                `N:${contactData.lastName};${contactData.firstName};;;`,
            ];

            if (contactData.title) vcfLines.push(`TITLE:${contactData.title}`);
            if (contactData.phoneWork) vcfLines.push(`TEL;TYPE=WORK,VOICE:${contactData.phoneWork}`);
            if (contactData.phoneMobile) vcfLines.push(`TEL;TYPE=CELL:${contactData.phoneMobile}`);
            if (contactData.email) vcfLines.push(`EMAIL:${contactData.email}`);
            if (contactData.email2) vcfLines.push(`EMAIL:${contactData.email2}`);
            if (contactData.email3) vcfLines.push(`EMAIL:${contactData.email3}`);
            if (contactData.website) vcfLines.push(`URL:${contactData.website}`);
            if (contactData.website2) vcfLines.push(`URL:${contactData.website2}`);
            if (contactData.website3) vcfLines.push(`URL:${contactData.website3}`);
            if (contactData.address) vcfLines.push(`ADR;TYPE=WORK:;;${contactData.address}`);
            if (contactData.address2) vcfLines.push(`ADR;TYPE=HOME:;;${contactData.address2}`);
            if (contactData.about) vcfLines.push(`NOTE:${contactData.about}`);

            // Embed profile image (base64 JPEG format)
            if (photoBase64) {
                vcfLines.push(`PHOTO;ENCODING=b;TYPE=JPEG:${photoBase64}`);
            }

            vcfLines.push("END:VCARD");

            const vcfContent = vcfLines.join('\n');

            // Trigger download
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