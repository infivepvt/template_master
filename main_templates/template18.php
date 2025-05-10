<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template 75</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .name {
            font-size: 30px;
            font-weight: bold;
            margin: 15px 0 5px;
            color: black;
            font-family: 'Roboto', sans-serif;
        }

        .title {
            font-size: 16px;
            margin-bottom: 5px;
            color: black;
            font-family: 'Roboto', sans-serif;
        }

        .location {
            font-size: 14px;
            opacity: 0.8;
            color: black;
            font-family: 'Roboto', sans-serif;
        }

        .custom-card75 {
            border-radius: 15px;
            overflow: hidden;
            background: #EEF1FF;
            width: 450px;
            height: auto;
            margin-top: -55px;
        }

        .custom-header {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 35px 20px;
            position: relative;
        }

        .custom-logo {
            width: 200px;
            position: relative;
            top: 0;
            left: 0;
            margin-bottom: 40px;
        }

        .profile-picture75 {
            position: absolute;
            top: 95%;
            left: 20%;
            transform: translate(-50%, -50%);
            margin-top: 40px;
        }

        .profile-picture75 img {
            width: 130px;
            height: 130px;
            border: 4px solid #fff;
            border-radius: 50%;
        }



        .custom-save-button75 {
            background: rgba(0, 0, 0);
            color: white;
            font-weight: bold;
            transition: background 0.3s;
            border-radius: 4px;
            height: 40px;
            padding: 5px;
            font-size: 12px;
            width: 100px;
            margin-top: -40px;
        }

        .custom-save-button75:hover {
            background: #FFFFFF30
        }


        /* Layout styles */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }



        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }

        .col-6 {
            width: 50%;
            padding: 0 15px;
        }

        .col-12 {
            width: 100%;
            padding: 0 15px;
        }

        /* Header styles */
        .profile-header {
            text-align: center;
            padding: 30px 0;
        }

        .profile-image {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin: 0 auto 20px;
            border: 5px solid #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .profile-name {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: #222;
        }

        .profile-title {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 5px;
        }

        .profile-location {
            font-size: 1rem;
            color: #888;
        }

        /* Navigation */
        .main-nav {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .nav-list {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
            gap: 20px;
        }

        .nav-link {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            padding: 5px 0;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #0073aa;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #0073aa;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .responsive-nav {
            width: 100%;
            max-width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .nav-list {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
            justify-content: center;
            flex-wrap: nowrap;
            min-width: fit-content;
        }

        .nav-item {
            white-space: nowrap;
            padding: 0 15px;
        }

        .nav-link {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            padding: 10px 0;
            position: relative;
            display: block;
            font-size: clamp(14px, 2vw, 16px);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #0073aa;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .nav-list {
                justify-content: flex-start;
                padding: 0 20px;
            }

            .nav-item {
                padding: 0 10px;
            }

            .responsive-nav {
                -webkit-overflow-scrolling: touch;
                overflow-x: auto;
                padding-bottom: 5px;
            }

            .responsive-nav::-webkit-scrollbar {
                display: none;
            }
        }

        /* Social links */
        .social-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 30px 0;
        }

        .social-link {
            display: flex;
            align-items: center;
            margin: 10px 15px;
            text-decoration: none;
            color: #333;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: #f5f5f5;
        }

        .social-icon svg {
            width: 24px;
            height: 24px;
        }

        /* Gallery */
        .gallery {
            display: flex;
            flex-wrap: wrap;
            margin: -10px;
        }

        .gallery-item {
            width: calc(50% - 20px);
            margin: 10px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        /* Contact section */
        .contact-info {
            max-width: 500px;
            margin: 0 auto;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            background-color: #f5f5f5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0073aa;
            color: white;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #005a87;
        }



        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideInLeft {
            from {
                transform: translateX(-20px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from {
                transform: translateX(20px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.95);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .animated {
            animation-duration: 0.5s;
            animation-fill-mode: both;
        }

        .fadeIn {
            animation-name: fadeIn;
        }

        .slideInLeft {
            animation-name: slideInLeft;
        }

        .slideInRight {
            animation-name: slideInRight;
        }

        .zoomIn {
            animation-name: zoomIn;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .col-6 {
                width: 100%;
            }

            .main-nav ul {
                flex-direction: column;
                align-items: center;
            }

            .main-nav li {
                margin: 5px 0;
            }

            .gallery-item {
                width: 100%;
            }
        }

        .section {
            padding: 20px;
            border-bottom: 1px solid #eee;
        }

        .section1 {
            margin-top: -20px;

        }

        .section-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .social-link {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            text-decoration: none;
            color: #333;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            background: #f1f1f1;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            color: #555;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .contact-icon {
            width: 30px;
            height: 30px;
            background: #f1f1f1;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            color: #555;
        }

        .elementor-button-text {
            background-color: rgb(170, 170, 170);
            border-radius: 4px;
            padding: 5px;
        }

        .social-media-button {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 12px;
            border-radius: 25px;
            color: #000;
            text-decoration: none;
            transition: background-color 0.3s;
            width: 100%;
            max-width: 350px;
            background-color: rgb(255, 255, 255);
        }

        .text-wrapper {
            text-align: left;
            margin-left: 16px;
        }

        .platform-name {
            font-weight: bold;
            color: #000;
            font-size: 16px;
            font-family: Roboto, sans-serif;
        }

        .user-name {
            color: rgb(32, 130, 243);
            font-size: 16px;
            font-family: Roboto, sans-serif;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card75 shadow-lg" style="background-color:rgb(255, 255, 255);">
            <div class="card-header custom-header text-center"
                style="background-image: url('banner_img/main_banner/template18-b.png'); height: 150px; opacity: 1;">
                <!-- <img src="logo_img/main_logo/template10-l.png" alt="Company Logo" class="custom-logo"
                    style="width: 100px; opacity: 1;"> -->
                <div class="profile-picture75">
                    <img src="profile_img/main_profile/template18-p.png" alt="Peter Smith" class="rounded-circle">
                </div>
            </div>
            <br><br>
            <div style="display: flex; justify-content: flex-end; align-items: center; margin-right: 10px;">
                <button class="custom-save-button75" id="saveContactBtn">
                    Contact Me
                </button>
            </div>
            <br>          
            <div style="display: flex; justify-content: flex-end; align-items: center; margin-right: 10px;">
                <span class="elementor-button-text" style="display: flex; align-items: center;">
                    <i aria-hidden="true" class="fab fa-whatsapp" style="margin-right: 5px;"></i> Whatsapp
                </span>

                <span class="elementor-button-text" style="display: flex; align-items: center; margin-left: 15px;">
                    <i aria-hidden="true" class="fas fa-download" style="margin-right: 5px;"></i> Save
                </span>
            </div>

            <div class="card-body text-left" style="background-color:rgb(255, 255, 255); color:rgb(255, 255, 255);">
                <div class="container">
                    <div class="section1">
                        <div class="name">Peter Chan</div>
                        <div class="title">Luxury Real Estate / Upgrade Specialist</div>
                        <div class="location">Global</div>
                    </div>
<br>
                    <!-- Navigation -->
                    <nav class="responsive-nav">
                        <ul class="nav-list">
                            <li class="nav-item"><a href="#intro" class="nav-link">Intro & Links</a></li>
                            <li class="nav-item"><a href="#pics" class="nav-link">Pics & Videos</a></li>
                            <li class="nav-item"><a href="#contacts" class="nav-link">Contact Us</a></li>
                        </ul>
                    </nav>
                    <br>
                    <div class="section-title">Connect With Me</div>
                    <!-- Social Links -->
                    <a href="#" class="social-media-button">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 40px; height: 40px;">
                        <div class="text-wrapper">
                            <span class="platform-name">Facebook</span>
                            <br>
                            <span class="user-name">Peter Chan</span>
                        </div>
                    </a>
                    <a href="#" class="social-media-button">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="" style="width: 40px; height: 40px;">
                        <div class="text-wrapper">
                            <span class="platform-name">Instagram</span>
                            <br>
                            <span class="user-name">Peter Chan</span>
                        </div>
                    </a>
                    <a href="#" class="social-media-button">
                        <img src="Images/Social_Media_Icon/tiktok.png" alt="" style="width: 40px; height: 40px;">
                        <div class="text-wrapper">
                            <span class="platform-name">Tiktok</span>
                            <br>
                            <span class="user-name">Peter Chan</span>
                        </div>
                    </a>

                    <!-- Gallery Section -->
                    <section id="pics" class="section">
                        <h2 class="section-title animated fadeIn">Pics & Videos</h2>

                        <div class="gallery">
                            <div class="gallery-item animated fadeInLeft">
                                <img src="gallery_img/main_gallerys/t6g7.png"
                                    alt="Gallery Image 1">
                            </div>
                            <div class="gallery-item animated fadeInLeft">
                                <img src="gallery_img/main_gallerys/t6g2.jpg"
                                    alt="Gallery Image 2">
                            </div>
                            <div class="gallery-item animated fadeInLeft">
                                <img src="gallery_img/main_gallerys/t6g3.jpg"
                                    alt="Gallery Image 3">
                            </div>
                            <div class="gallery-item animated fadeInLeft">
                                <img src="gallery_img/main_gallerys/t6g4.jpg"
                                    alt="Gallery Image 4">
                            </div>
                        </div>
                    </section>

                    <!-- Contact Section -->
                    <section id="contacts" class="section">
                        <p class="section-title animated fadeIn">Contact Us</p>

                        <div class="contact-info">
                            <div class="contact-item animated fadeIn">
                                <div class="contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <span style="color: black;">012 345 6789</span>
                            </div>

                            <div class="contact-item animated fadeIn">
                                <div class="contact-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <span style="color: black;">012 345 6789</span>
                            </div>

                            <div class="contact-item animated fadeIn">
                                <div class="contact-icon">
                                    <i class="far fa-envelope-open"></i>
                                </div>
                                <span style="color: black;">peterchan@gmail.com</span>
                            </div>
                        </div>
                    </section>
                </div>

                <footer style="text-align:center; padding:10px; font-size:14px; color:white;">
                    <a href="https://tapilinq.com/" target="_blank" style="text-decoration:none; color:black;">
                        Made with by Tapilinq | Click now
                    </a>
                </footer>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple script to handle smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Animation on scroll
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.animated');

            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3;

                if (elementPosition < screenPosition) {
                    element.style.opacity = '1';
                }
            });
        };

        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);
    </script>
</body>

</html>