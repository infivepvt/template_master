<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Card Template 15</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .custom-card15 {
            border-radius: 15px;
            overflow: hidden;
            background: #EEF1FF;
            width: 400px;
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

        .custom-logo15 {
            width: 200px;
            position: relative;
            top: 0;
            left: 0;
            margin-bottom: 40px;
        }

        .profile-picture {
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .profile-picture img {
            width: 130px;
            height: 130px;
            border: 4px solid #fff;
            border-radius: 50%;
        }

        .custom-button {
            font-weight: bold;
        }

        .social-icon {
            font-size: 1.9rem;
            transition: color 0.3s;
        }
        .social-icon-row {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-bottom: 5px;
        }

        .list-group-item {
            background-color: #333;
            color: #fff;
            border-radius: 8px;
            margin-bottom: 10px;
            border: 1px solid #444;
            padding: 10px 15px;
        }

        .list-group-item:hover {
            background-color: #444;
            border-color: #666;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .custom-save-button {
            /* background: linear-gradient(90deg, #5f4def, #00d0ea); */
            background-color:#000000;
            color: white;
            font-weight: bold;
            border: none;
            padding: 5px;
            border-radius: 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }

        .custom-save-button:hover {
            background: linear-gradient(90deg, #4b3ec4, #00b3c3);
        }

        .save-icon {
            width: 24px;
            height: 24px;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: #fffefe;
        }

        .custom-phone {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .custom-phone1 {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .custom-phone1 {
            transition: background-color 0.1s, border-color 0.1s;
        }

        .custom-phone1:hover {
            background-color: #25D366;
            border-color: #128C7E;
        }

        .fw {
            font-weight: bold;
            margin-top: 20px;
        }

        .profile-header13 {
            background-color:rgb(0, 0, 0);
            border-radius: 0px;
            max-width: 100%;
            margin: 0 auto;
            padding: 0px;
            margin-top: -100px;
        }

        .profile-contact-icons13 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            justify-content: center;
            gap: 25px;
        }

        /* group Edit */
        .contact-icon-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-icon-button {
            background-color: rgb(255, 255, 255);
            border-radius: 10px;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
        }

        .contact-icon-label {
            margin-top: 5px;
            font-size: 0.8rem;
            color: #FFFFFF;
            text-align: center;
            width: 90px;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: rgb(0, 0, 0);
        }

        /* Enhanced Gallery Styles */
        .gallery-section {
            background-color: #1a1a1a;
            border-radius: 15px;
            padding: 15px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .gallery-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
            color: #fff;
            cursor: pointer;
            background-color: #2a2a2a;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .gallery-title {
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .gallery-toggle {
            font-size: 18px;
            color: #ffffff;
            transition: transform 0.3s ease;
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-top: 10px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            aspect-ratio: 1;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .gallery-item:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover .gallery-image {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-overlay i {
            color: white;
            font-size: 2rem;
        }

        /* Enhanced Lightbox Styles */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .lightbox-content {
            max-width: 90%;
            max-height: 90%;
            position: relative;
            text-align: center;
        }

        .lightbox-image {
            max-width: 100%;
            max-height: 80vh;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
            animation: zoomIn 0.3s ease-out;
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
            font-size: 30px;
            cursor: pointer;
            z-index: 1001;
            transition: all 0.3s ease;
        }

        .lightbox-close:hover {
            color: #ff6b6b;
            transform: scale(1.2);
        }

        .lightbox-nav {
            position: absolute;
            width: 100%;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
            box-sizing: border-box;
        }

        .lightbox-nav button {
            background: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            font-size: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            opacity: 0.8;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .lightbox-nav button:hover {
            opacity: 1;
            background: rgba(0, 0, 0, 0.7);
            transform: scale(1.1);
        }

        .lightbox-counter {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 16px;
            background: rgba(0, 0, 0, 0.5);
            padding: 5px 15px;
            border-radius: 20px;
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Mobile responsive adjustments */
        @media (max-width: 768px) {
            .gallery-container {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .lightbox-nav button {
                width: 40px;
                height: 40px;
                font-size: 24px;
            }
            
            .lightbox-close {
                top: 15px;
                right: 15px;
                font-size: 24px;
            }
        }

        .contact-icons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            padding: 15px;
        }

        /* group Edit */
        /* icon colour change */
        .contact-icon-btn {
            background-color:rgb(255, 255, 255);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
        }

        .contact-icon-btn i {
            color:rgb(0, 0, 0);
            font-size: 1.5rem;
        }

        table, th, td {
            border:0px solid black;
            background-color:rgb(255, 255, 255);
        }

        /*phone divider*/
        .phone-divider {
            display: flex;
            align-items: center;
            width: 100%;
            margin: 20px 0;
        }

        .divider-line {
            flex: 1;
            height: 1px;
            background-color: #fff; /* Line color */
        }

        .phone-icon {
            padding: 0 15px;
            color: #fff; /* Icon color */
            font-size: 18px; /* Icon size */
        }

        /* Optional hover animation */
        .phone-icon:hover {
            color:rgb(0, 0, 0); /* Hover color */
            transform: scale(1.1);
            transition: all 0.3s ease;
        }

        /*location divider*/
        .map-divider {
            display: flex;
            align-items: center;
            width: 100%;
            margin: 20px 0;
        }

        .divider-line {
            flex: 1;
            height: 1px;
            background-color: #ddd; /* Line color */
        }

        .map-icon {
            padding: 0 15px;
            color:rgb(0, 0, 0); /* Red color for map marker */
            font-size: 18px; /* Icon size */
        }

        /* Optional hover animation */
        .map-icon:hover {
            color:rgb(0, 0, 0); /* Darker red on hover */
            transform: scale(1.1);
            transition: all 0.3s ease;
        }

        /*/user icon divider*/
        .user-divider {
            display: flex;
            align-items: center;
            width: 100%;
            margin: 20px 0;
        }

        .divider-line {
            flex: 1;
            height: 1px;
            background-color: #ddd; /* Line color */
        }

        .user-icon {
            padding: 0 15px;
            color:rgb(255, 255, 255); /* Blue color for user icon */
            font-size: 18px; /* Icon size */
        }

        /* Optional hover animation */
        .user-icon:hover {
            color:rgb(255, 255, 255); /* Darker blue on hover */
            transform: scale(1.1);
            transition: all 0.3s ease;
        }

        /* Optional pulse animation */
        .user-icon.pulse {
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.15); }
            100% { transform: scale(1); }
        }

        /*map*/
        /* Map container styling */
        .map-container {
        max-width: 1000px;
        margin: 30px auto;
        padding: 0 15px;
        }

        /* Divider with map icon */
        .map-divider {
        display: flex;
        align-items: center;
        width: 100%;
        margin: 20px 0 30px;
        }

        .divider-line {
        flex: 1;
        height: 1px;
        background-color: #ddd;
        }

        .map-icon {
        padding: 0 20px;
        color:rgb(0, 0, 0);
        font-size: 18px;
        display: flex;
        align-items: center;
        gap: 8px;
        }

        .map-icon span {
        font-family: Arial, sans-serif;
        color: #333;
        font-size: 16px;
        font-weight: bold;
        }

        /* Responsive Google Map */
        .google-map {
        position: relative;
        overflow: hidden;
        padding-top: 56.25%; /* 16:9 Aspect Ratio */
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .google-map iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
        }

        /* Hover effects */
        .map-icon:hover {
        color:rgb(0, 0, 0);
        transform: scale(1.05);
        transition: all 0.3s ease;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
        .map-icon {
            padding: 0 15px;
            font-size: 16px;
        }
        
        .map-icon span {
            font-size: 14px;
        }
        }

        /*accordian*/
        .accordion {
            background-color: #000000;
            color: #ffffff;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: center;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .active, .accordion:hover {
            background-color:rgb(156, 156, 156); 
            color:#000000;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
            text-align:center;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card15 shadow-lg" style="background-color:rgb(255, 255, 255);">
            <div class="card-header custom-header text-center"
                style="background-image: url('banner_img/client_banner/digitalworld-b.png'); height: 200px; opacity: 100%;">
                <div class="profile-picture">
                    <img src="profile_img/client_profile/digitalworld-p.png" alt="" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-left" style="background-color:rgb(255, 255, 255); color: #000000; margin-top:-50px">
                <table style="width:100% ;margin:5px;">
                <tr>
                    <td>
                        <h2 style="font-size: 20px; color: black;">Saranga Siriwardana</h2><br>
                        <p style="color:rgb(0, 0, 0); font-size: 15px; margin-top:-25px">Managing Director</p>
                    </td>
                    <td>
                        <button class="btn w-30 custom-save-button">
                        <p style="font-size:10px;margin:0px">SAVE TO CONTACTS</p>
                        </button>
                    </td>
                    
                </tr>
                </table>

                <button class="accordion">About Me</button>
                <div class="panel">
                <li>Digital creator</li>
                <li>National Organizer at Asian Human Rights Council</li>
                <li>secretary at Grama Mithuru Development Foundation</li>
                <li>Founder, Director, CEO at Digital World International PVT LTD</li>
                <li>Founding Partner at බාන්ධාර Baandhaara</li>
                <li>Partner at Ceylon Guidance</li>
                <li>Shareholder at Filling station</li>
                <li>Former Visual Merchandiser (VM) at Softlogic Brands</li>
                <li>Former Tour guide at Jetwing Travels</li>
                </li>Went to EMinds Academy Australia</li>
                <li>Studied Digital Communications and Media/Multimedia at Digital Marketing Institute</li>
                <li>Studies at Sri Lanka Institute of Marketing (SLIM)</li>
                <li>Went to Sri Lanka Institute of Marketing</li>
                <li>Studied at Sri Lanka Institute of Marketing</li>
                <li>Studies at Fotostar Academy</li>
                <li>Studies at Sri Lanka Institute of Marketing (SLIM)</li>
                <li>Studies at SLIM Toastmasters Club</li>
                <li>Studied at Bandaranayake College</li>
                </div>
                
                <!-- <h2 style="font-size: 30px; color: black;">Linkin Park</h2>
                <p style="color:rgb(0, 0, 0); font-size: 20px;">Rock Band</p> -->

                <div>
                    <p style="text-align:center;background-color: #000000 ; color: #ffffff ;padding-top:10px;margin-bottom:15px">Contact Me</p>
                    <div class="phone-divider" style="background-color:#000; margin-top:-18px;">
                    <div class="divider-line"></div>
                    <div class="phone-icon" style="margin-top:10px">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="divider-line"></div>
                    </div>
                </div>
                <div class="contact-icons" style="background-color: #000000 ; margin-top:-20px ;">
                    <button class="contact-icon-btn" onclick="window.open('tel: 0777228823', '_self')">
                        <i class="fas fa-phone-alt" style="transform: rotate(90deg);"></i>
                    </button>
                    <button class="contact-icon-btn" onclick="window.open('tel: 0707228823', '_self')">
                        <i class="fas fa-mobile-alt"></i>
                    </button>
                    <button class="contact-icon-btn" onclick="window.open('tel: 0757228823', '_self')">
                        <i class="fas fa-fax"></i>
                    </button>
                    <button class="contact-icon-btn" onclick="window.open('mailto:vidhan.works@gmail.com', '_self')">
                        <i class="fas fa-envelope"></i>
                    </button>
                    <button class="contact-icon-btn" onclick="window.open('http://www.website.com/', '_blank')">
                        <i class="fas fa-globe"></i>
                    </button>
                    
                </div>
                <br>
                <br>
                    <div>
                        <p style="text-align:center;background-color:rgb(255, 255, 255) ; color:rgb(0, 0, 0) ;padding-top:10px;margin-bottom:15px;font-size:21px; font-weight:400">Address & Hours</p>
                        <div class="map-divider">
                            <div class="divider-line"></div>
                            <div class="map-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="divider-line"></div>
                        </div>
                        <p style="text-align:center">Kadawatha,Sri Lanka</p>
                    </div>

                    <div class="map-container">
                    <div class="map-divider">
                        <!-- <div class="divider-line"></div>
                        <div class="map-icon">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Our Location</span>
                        </div>
                        <div class="divider-line"></div> -->
                    </div>
                    
                    <div class="google-map">
                        <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31679.978782970025!2d79.93943556059055!3d7.009593696517634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f86bd75870f7%3A0xee362e29dbc079a6!2sKadawatha!5e0!3m2!1sen!2slk!4v1747301777922!5m2!1sen!2slk" 
                        width="600" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    </div>
                    <p style="text-align:center;font-size:18px; font-weight:500">Opening Hours</p>
                    <p style="text-align:center;font-size:13px; font-weight:400">Mon to Fri - 9am to 5pm</p>
                    <p style="text-align:center;font-size:13px; font-weight:400; margin-top:-10px">Saturday - 9am to 1pm</p>
                    <p style="text-align:center;font-size:13px; font-weight:400;margin-top:-10px">Sunday Closed</p>
                </div>
                

                <div class="profile-header13"
                    style="background-color:rgb(0, 0, 0); border-radius: 0px; max-width: 100%; margin: 0 auto; padding: 0px; margin-top: 0px;">
                    <!-- <div class="profile-contact-icons13"> -->
                        <!-- Phone Work Button with Label -->
                        <!-- <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button" onclick="window.open('tel:', '_self')">
                                <i class="fas fa-phone contact-icon rotated-90"></i>
                            </button>
                            <p class="contact-icon-label">Mobile Number</p>
                        </div> -->

                        <!-- Office Number Button with Label -->
                        <!-- <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button" onclick="window.open('tel:', '_self')">
                                <i class="fas fa-fax contact-icon rotated-90"></i>
                            </button>
                            <p class="contact-icon-label">Office Number</p>
                        </div> -->

                        <!-- Mobile 2 Button with Label -->
                        <!-- <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button" onclick="window.open('tel:', '_self')">
                                <i class="fas fa-mobile-alt contact-icon rotated-0"></i>
                            </button>
                            <p class="contact-icon-label">Mobile 2</p>
                        </div> -->

                        
                    <!-- </div>  -->


                    <!-- Enhanced Lightbox -->
                    <div class="lightbox" id="lightbox">
                        <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
                        <div class="lightbox-nav">
                            <button onclick="changeImage(-1)">&#10094;</button>
                            <button onclick="changeImage(1)">&#10095;</button>
                        </div>
                        <div class="lightbox-content">
                            <img id="lightbox-image" class="lightbox-image" src="" alt="">
                            <div class="lightbox-counter" id="lightboxCounter"></div>
                        </div>
                    </div>

                    <div style="background-color:#000000">
                        <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:15px; color:black; text-align:center; color:#ffffff">Follow Me</p>
                    <div class="user-divider" >
                        <div class="divider-line"></div>
                        <div class="user-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="divider-line"></div>
                    </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center" style="background-color:#000000">
                        <a href="https://www.linkedin.com/in/saranga-siriwardane-211b2992?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank" rel="noopener noreferrer" class="m-3">
                            <img src="Images/Social_Media_Icon/linkedin.png" alt="" style="width: 50px; height: 50px;">
                        </a>
                        <a href="https://www.facebook.com/share/18jKFX6hHk/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" class="m-3">
                            <img src="Images/Social_Media_Icon/facebook.png" alt="" style="width: 50px; height: 50px;">
                        </a>
                        <a href="https://www.threads.com/@sarangasiriwardane?igshid=NTc4MTIwNjQ2YQ==" target="_blank" rel="noopener noreferrer" class="m-3">
                            <img src="Images/Social_Media_Icon/th round.png" alt="" style="width: 50px; height: 50px;">
                        </a>
                        <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fyoutube.com%2F%2540peacefulliving992%253Fsi%253DcDaj-x4rFcIHAvUC&h=AT01X_HE8PLu9ES0qul0IErYBfk0FEEBge4HaLhZAGCzU0F1b0nw7BD1O-57Ty0w5HB_Ag53_w8Pc0xQM4CuCv6G1fJZ3CyVLSrOqFubZz_jAZnUdpcGwbVfWg_vwNmwGk5CdZFFV-SJpi0WP_X7" target="_blank" rel="noopener noreferrer" class="m-3">
                            <img src="Images/Social_Media_Icon/youtube.png" alt="" style="width: 50px; height: 50px;">
                        </a>
                        <img src="logo_img/client_logo/digitalworld-l.png" style="width:100px;height:100px">
                    </div>

                    <br>
                    
                </div>

                <br>
            </div>
        </div>
    </div>
    
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
            panel.style.display = "none";
            } else {
            panel.style.display = "block";
            }
        });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Gallery functionality
        const galleryImages = [
            'gallery_img/main_gallerys/t6g1.jpg',
            'gallery_img/main_gallerys/t6g2.jpg',
            'gallery_img/main_gallerys/t6g3.jpg',
            'gallery_img/main_gallerys/t6g4.jpg',
            'gallery_img/main_gallerys/t6g5.jpg',
            'gallery_img/main_gallerys/t6g6.jpg'
        ];
        
        let currentImageIndex = 0;
        let isGalleryOpen = true;

        // Toggle gallery visibility
        function toggleGallery() {
            const galleryContainer = document.getElementById('galleryContainer');
            const galleryToggle = document.getElementById('galleryToggle');
            
            isGalleryOpen = !isGalleryOpen;
            
            if (isGalleryOpen) {
                galleryContainer.style.display = 'grid';
                galleryToggle.innerHTML = '<i class="fas fa-minus"></i>';
            } else {
                galleryContainer.style.display = 'none';
                galleryToggle.innerHTML = '<i class="fas fa-plus"></i>';
            }
        }

        // Open lightbox with specific image
        function openLightbox(imageSrc, index) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImage = document.getElementById('lightbox-image');
            const lightboxCounter = document.getElementById('lightboxCounter');
            
            currentImageIndex = index;
            lightboxImage.src = imageSrc;
            lightboxCounter.textContent = `${currentImageIndex + 1} / ${galleryImages.length}`;
            lightbox.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        // Close lightbox
        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Navigate between images
        function changeImage(step) {
            currentImageIndex += step;
            
            // Wrap around if at beginning or end
            if (currentImageIndex >= galleryImages.length) {
                currentImageIndex = 0;
            } else if (currentImageIndex < 0) {
                currentImageIndex = galleryImages.length - 1;
            }
            
            document.getElementById('lightbox-image').src = galleryImages[currentImageIndex];
            document.getElementById('lightboxCounter').textContent = `${currentImageIndex + 1} / ${galleryImages.length}`;
        }

        // Close lightbox when clicking outside the image
        document.getElementById('lightbox').addEventListener('click', function(e) {
            if (e.target === this) {
                closeLightbox();
            }
        });

        // Keyboard navigation
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

        // Save to contacts functionality
        document.querySelector('.custom-save-button').addEventListener('click', function() {
            // Create vCard content
            const vcard = `BEGIN:VCARD
VERSION:3.0
FN:Saranga Siriwardana
ORG:Managing Director
TEL;TYPE=WORK,VOICE:
TEL;TYPE=WORK,FAX:
TEL;TYPE=CELL:
TEL;TYPE=CELL:
EMAIL:
EMAIL:
REV:${new Date().toISOString()}
END:VCARD`;

            // Create Blob with vCard content
            const blob = new Blob([vcard], { type: 'text/vcard' });
            const url = URL.createObjectURL(blob);

            // Create download link
            const link = document.createElement('a');
            link.href = url;
            link.download = 'Linkin Park.vcf';
            document.body.appendChild(link);
            link.click();

            // Clean up
            document.body.removeChild(link);
            URL.revokeObjectURL(url);
        });
    </script>
</body>
</html>