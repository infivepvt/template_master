<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card - Dorit Dimand</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding-top: 0;
            font-family: 'Roboto', sans-serif;
            overflow-x: hidden;
        }

        .digital-card-container {
            width: 500px;
            max-width: 100%;
            background-color: #232323;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            border-radius: 0;
            overflow: hidden;
            position: relative;
            margin-top: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100vh;
        }

        .header-banner {
            height: 250px;
            background-image: url('banner_img/client_banner/dorit-dimand-b.png');
            background-size: cover;
            background-position: center top;
            background-repeat: no-repeat;
            position: relative;
            z-index: 1;
        }

        .header-banner div {
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .header-banner h5,
        .header-banner h6 {
            color: #75bb0b;
            margin: 0;
            text-align: center;
            font-family: 'Merriweather', serif;
        }

        .header-banner h5 {
            font-size: 35px;
            margin-bottom: 10px;
            font-weight: bold;
            margin-top: -20px;
        }

        .header-banner h6 {
            font-size: 20px;
        }

        .elementor-element-3c5b664 {
            position: absolute;
            top: 200px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            text-align: center;

        }

        .elementor-element-3c5b664 img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            border: 2px solid #fff;
            object-fit: cover;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .elementor-element-e304601 .elementor-heading-title {
            font-size: 32px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 10px;
            letter-spacing: 0.5px;
            padding-top: 80px;
        }

        .elementor-element-cd32f18 .elementor-widget-container p {
            font-size: 16px;
            font-weight: 300;
            color: #cccccc;
            margin-bottom: 20px;
        }

        .elementor-element-f769b15,
        .elementor-element-f6c9392 {
            width: 100%;
            max-width: none;
            padding: 0 10px;
        }

        .elementor-element-f769b15 {
            margin-bottom: 20px;
        }

        .elementor-element-f6c9392 {
            padding-bottom: 0;
            margin-bottom: auto;
        }

        .elementor-element-f769b15 .elementor-container,
        .elementor-element-f6c9392 .elementor-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            justify-content: center;
            align-items: start;
            width: 100%;
            padding: 0;
        }

        .elementor-inner-column {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 !important;
        }

        .elementor-social-icon {
            background-color: #75bb0b;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            font-size: 20px;
            margin-bottom: 8px;
            transition: transform 0.2s ease-in-out;
            text-decoration: none;
            border: 2px solid #ffffff;
        }

        .elementor-social-icon:hover {
            background-color: #5a9e08;
            transform: translateY(-3px);
            border-color: #eee;
        }

        .elementor-social-icon svg {
            width: 20px;
            height: 20px;
        }

        .elementor-social-icon svg path {
            fill: #ffffff;
        }

        .elementor-social-icons-wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .elementor-element-f84381a p,
        .elementor-element-70f04dc p,
        .elementor-element-72e0711 p,
        .elementor-element-104ac7a p,
        .elementor-element-480a90c p,
        .elementor-element-ae71fb9 p {
            color: #ffffff;
            font-size: 15px;
            font-weight: 400;
            margin: 0;
        }

        .card-footer-info {
            padding: 30px 10px;
            text-align: center;
        }

        .elementor-element-cadbdd6 .elementor-heading-title {
            background-color: transparent;
            color: #75bb0b;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
            width: 100%;
            min-height: 32px;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .logo-container img {
            width: 100px;
            height: auto;
        }

        .elementor-element-0133341 .elementor-widget-container p {
            background-color: transparent;
            color: #ccc;
            font-size: 12px;
            line-height: 1.6;
            margin: 0;
            width: 100%;
            min-height: 32px;
        }

        .elementor-widget-container {
            text-align: center;
        }

        .elementor-section.elementor-inner-section {
            padding: 0;
        }

        .elementor-column.elementor-col-33 {
            padding: 0;
        }

        .elementor-screen-only {
            display: none;
        }
    </style>
</head>

<body>
    <div class="digital-card-container">
        <div class="header-banner">
            <div>
                <h5>Welcome To D Tax Accounting</h5>
                <h6>We Slove Tax And Accounting Problems</h6>
            </div>
        </div>

        <div class="elementor-widget-wrap elementor-element-populatedc mx-2">
            <div class="elementor-element elementor-element-3c5b664 elementor-widget elementor-widget-image" data-id="3c5b664" data-element_type="widget" data-settings="{'_animation_mobile':'fadeInDown'}" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img decoding="async" src="profile_img/client_profile/dorit-dimand-p.png" title="Dorit Dimand" alt="Dorit Dimand" loading="lazy">
                </div>
            </div>
            <div class="elementor-element elementor-element-e304601 elementor-widget elementor-widget-heading mt-5" data-id="e304601" data-element_type="widget" data-settings="{'_animation_mobile':'fadeInLeft'}" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">Dorit Dimand, EA</h2>
                </div>
            </div>
            <div class="elementor-element elementor-element-cd32f18 elementor-widget elementor-widget-text-editor" data-id="cd32f18" data-element_type="widget" data-settings="{'_animation_mobile':'fadeInLeft'}" data-widget_type="text-editor.default">
                <div class="elementor-widget-container">
                    <p style="text-align: center;">Federal Tax Adviser & Accountant</p>
                </div>
            </div>
            <div class="logo-container">
                <img src="logo_img/client_logo/dorit-dimand-l1.png" alt="D Tax Accounting Inc. Logo">
                <img src="logo_img/client_logo/dorit-dimand-l2.png" alt="D Tax Settled Logo">
            </div>
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-f769b15 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f769b15" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bea25b4" data-id="bea25b4" data-element_type="column" data-settings="{'animation_mobile':'zoomIn'}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-cf47666 elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="cf47666" data-element_type="widget" data-widget_type="social-icons.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-phone-alt elementor-repeater-item-13c7ba5" target="_blank" onclick="window.open('tel:+17472021470', '_self')">
                                                <span class="elementor-screen-only">Phone</span>
                                                <i class="fas fa-phone"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-f84381a elementor-widget elementor-widget-text-editor" data-id="f84381a" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p style="text-align: center;">Call</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8585699" data-id="8585699" data-element_type="column" data-settings="{'animation_mobile':'zoomIn'}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-234abfb elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="234abfb" data-element_type="widget" data-widget_type="social-icons.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-whatsapp elementor-repeater-item-13c7ba5" target="_blank" href="https://wa.me/+17472021470" rel="noopener noreferrer">
                                                <span class="elementor-screen-only">Whatsapp</span>
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-70f04dc elementor-widget elementor-widget-text-editor" data-id="70f04dc" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p style="text-align: center;">Whatsapp</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b296e4b" data-id="b296e4b" data-element_type="column" data-settings="{'animation_mobile':'zoomIn'}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-6aa98c0 elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="6aa98c0" data-element_type="widget" data-widget_type="social-icons.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-envelope elementor-repeater-item-13c7ba5" target="_blank" onclick="window.open('mailto:dorit@dtaxsettled.com', '_self')">
                                                <span class="elementor-screen-only">Envelope</span>
                                                <i class="far fa-envelope"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-72e0711 elementor-widget elementor-widget-text-editor" data-id="72e0711" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p style="text-align: center;">E-mail</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-f6c9392 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f6c9392" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5c560dd" data-id="5c560dd" data-element_type="column" data-settings="{'animation_mobile':'zoomIn'}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-fae9374 elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="fae9374" data-element_type="widget" data-widget_type="social-icons.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon- elementor-repeater-item-13c7ba5" target="_blank" href="https://www.dtaxaccounting.com" rel="noopener noreferrer">
                                                <span class="elementor-screen-only">Website</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 512 512">
                                                    <path d="M3.09,257.39C3.06,116.23,117.93,2.47,258.54,3c139.91,.53,254.13,114.4,253.45,255.75-.67,140.29-114.88,253.78-255.58,253.19C116.37,511.34,2.96,397.6,3.09,257.39Zm129.77,9.29H24.07c0,.85-.06,1.57,0,2.27,.71,7.53,1.15,15.11,2.22,22.59,4.95,34.88,17.5,66.86,37.03,96.15,.9,1.36,1.64,1.58,3.15,.94,21.21-8.91,43.27-15.02,65.76-19.68,4.18-.87,8.37-1.68,12.13-2.43-2.57-16.68-5.58-33.07-7.49-49.59-1.91-16.61-2.72-33.35-4.03-50.26Zm358.35,.03h-109.6c-.65,33.68-4.23,66.88-11.55,99.64,.67,.19,.94,.3,1.22,.35,26.61,4.91,52.72,11.59,77.73,22.11,1.57,.66,2.04-.12,2.72-1.14,7.92-11.82,14.75-24.24,20.42-37.30,9.41-21.66,15.3-44.24,17.82-67.71,.56-5.26,.83-10.55,1.24-15.95ZM145.13,148.15c-.76-.18-1.3-.33-1.85-.43-26.3-4.94-52.14-11.52-76.89-21.9-1.47-.62-2.03-.1-2.76,1-22.48,33.52-35.48,70.38-39.03,110.58-.24,2.72-.35,5.44-.52,8.18h109.43c.79-32.89,4.37-65.3,11.61-97.43Zm345.76,97.48c0-.96,.08-1.75-.01-2.52-1.19-9.75-1.93-19.58-3.7-29.22-5.75-31.34-17.78-60.17-35.47-86.67-1.01-1.51-1.77-1.96-3.62-1.19-20.46,8.61-41.74,14.54-63.43,19.11-4.82,1.02-9.66,1.95-14.75,2.98,7.27,32.17,10.83,64.65,11.63,97.52h109.34Zm-243.89,111.39v-90.3h-92.79c.62,32.59,4.13,64.62,11.35,96.43,27.1-3.76,54.15-5.71,81.44-6.13Zm21.05-90.38v90.38c27.29,.4,54.34,2.37,81.44,6.12,7.22-31.86,10.76-63.94,11.34-96.51h-92.78Zm-21.03-109.06c-.69-.07-1.25-.16-1.81-.17-25.87-.43-51.64-2.29-77.28-5.82-1.94-.27-2.42,.29-2.82,2.06-6.55,29.6-9.97,59.56-10.78,89.85-.02,.69,0,1.39,0,2.08h92.69v-87.99Zm102.36-6.27c-27.26,3.82-54.24,5.67-81.33,6.16v88.13h92.75c-.77-31.84-4.3-63.19-11.42-94.29Zm-102.37,338.57v-112.17c-25.53,.49-50.82,2.14-76.3,5.69,1.76,5.46,3.35,10.67,5.13,15.81,7.21,20.79,16.22,40.7,29.3,58.55,7.77,10.6,16.74,19.98,28.26,26.62,4.23,2.44,8.68,4.37,13.61,5.5Zm21.03,.61c4.81-2.16,9.4-3.83,13.61-6.18,11.6-6.49,20.51-15.98,28.28-26.57,12.9-17.61,21.86-37.22,29-57.73,1.88-5.41,3.57-10.89,5.43-16.61-25.51-3.53-50.79-5.22-76.31-5.67v112.77ZM247.05,24.4c-4.95,2.23-9.55,3.9-13.74,6.28-12.82,7.28-22.37,18.02-30.64,29.97-12.31,17.8-20.9,37.42-27.76,57.84-1.38,4.11-2.63,8.25-4.01,12.61,25.47,3.49,50.73,5.21,76.15,5.62V24.4Zm97.27,106.46c-2.88-8.31-5.52-16.54-8.58-24.62-7.1-18.72-15.96-36.53-28.35-52.4-7.41-9.48-15.82-17.92-26.52-23.68-3.99-2.15-8.3-3.69-12.82-5.66v111.96c6.43,1.27,66.15-3.06,76.28-5.6Zm-28.7-99.73c12.32,13.65,21.88,29.05,29.89,45.47,8.02,16.44,14.13,33.6,19.22,51.06,12.08-.36,66.93-15.48,72.38-19.94-32.38-38.38-72.7-64.12-121.49-76.59ZM150.23,127.87c10.55-35.38,24.31-68.89,49.22-96.79-48.83,12.53-89.19,38.3-121.79,77.01,23.72,9.38,47.86,15.35,72.57,19.78ZM437.7,406.51c-23.83-9.45-48.03-15.45-72.63-19.86-16.88,48.4-18.59,57.26-49.55,97.26,48.9-13.19,89.4-38.75,122.18-77.41Zm-359.97-.14c5.56,9.9,35.18,36.05,54.66,48.39,19.06,12.07,59,29.15,66.94,28.57-.2-.26-.36-.5-.55-.7-11.22-12.21-20.01-26.06-27.48-40.79-8.65-17.06-15.24-34.91-20.52-53.26-.42-1.47-.95-1.98-2.55-1.68-20.97,3.94-41.67,8.92-61.78,16.15-2.92,1.05-5.8,2.2-8.73,3.31Z"></path>
                                                </svg>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-104ac7a elementor-widget elementor-widget-text-editor" data-id="104ac7a" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p style="text-align: center;">D Tax Accounting</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7854e43" data-id="7854e43" data-element_type="column" data-settings="{'animation_mobile':'zoomIn'}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-a058820 elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="a058820" data-element_type="widget" data-widget_type="social-icons.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon- elementor-repeater-item-13c7ba5" target="_blank" href="https://www.dtaxsettled.com" rel="noopener noreferrer">
                                                <span class="elementor-screen-only">Website</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 512 512">
                                                    <path d="M3.09,257.39C3.06,116.23,117.93,2.47,258.54,3c139.91,.53,254.13,114.4,253.45,255.75-.67,140.29-114.88,253.78-255.58,253.19C116.37,511.34,2.96,397.6,3.09,257.39Zm129.77,9.29H24.07c0,.85-.06,1.57,0,2.27,.71,7.53,1.15,15.11,2.22,22.59,4.95,34.88,17.5,66.86,37.03,96.15,.9,1.36,1.64,1.58,3.15,.94,21.21-8.91,43.27-15.02,65.76-19.68,4.18-.87,8.37-1.68,12.13-2.43-2.57-16.68-5.58-33.07-7.49-49.59-1.91-16.61-2.72-33.35-4.03-50.26Zm358.35,.03h-109.6c-.65,33.68-4.23,66.88-11.55,99.64,.67,.19,.94,.3,1.22,.35,26.61,4.91,52.72,11.59,77.73,22.11,1.57,.66,2.04-.12,2.72-1.14,7.92-11.82,14.75-24.24,20.42-37.30,9.41-21.66,15.3-44.24,17.82-67.71,.56-5.26,.83-10.55,1.24-15.95ZM145.13,148.15c-.76-.18-1.3-.33-1.85-.43-26.3-4.94-52.14-11.52-76.89-21.9-1.47-.62-2.03-.1-2.76,1-22.48,33.52-35.48,70.38-39.03,110.58-.24,2.72-.35,5.44-.52,8.18h109.43c.79-32.89,4.37-65.3,11.61-97.43Zm345.76,97.48c0-.96,.08-1.75-.01-2.52-1.19-9.75-1.93-19.58-3.7-29.22-5.75-31.34-17.78-60.17-35.47-86.67-1.01-1.51-1.77-1.96-3.62-1.19-20.46,8.61-41.74,14.54-63.43,19.11-4.82,1.02-9.66,1.95-14.75,2.98,7.27,32.17,10.83,64.65,11.63,97.52h109.34Zm-243.89,111.39v-90.3h-92.79c.62,32.59,4.13,64.62,11.35,96.43,27.1-3.76,54.15-5.71,81.44-6.13Zm21.05-90.38v90.38c27.29,.4,54.34,2.37,81.44,6.12,7.22-31.86,10.76-63.94,11.34-96.51h-92.78Zm-21.03-109.06c-.69-.07-1.25-.16-1.81-.17-25.87-.43-51.64-2.29-77.28-5.82-1.94-.27-2.42,.29-2.82,2.06-6.55,29.6-9.97,59.56-10.78,89.85-.02,.69,0,1.39,0,2.08h92.69v-87.99Zm102.36-6.27c-27.26,3.82-54.24,5.67-81.33,6.16v88.13h92.75c-.77-31.84-4.3-63.19-11.42-94.29Zm-102.37,338.57v-112.17c-25.53,.49-50.82,2.14-76.3,5.69,1.76,5.46,3.35,10.67,5.13,15.81,7.21,20.79,16.22,40.7,29.3,58.55,7.77,10.6,16.74,19.98,28.26,26.62,4.23,2.44,8.68,4.37,13.61,5.5Zm21.03,.61c4.81-2.16,9.4-3.83,13.61-6.18,11.6-6.49,20.51-15.98,28.28-26.57,12.9-17.61,21.86-37.22,29-57.73,1.88-5.41,3.57-10.89,5.43-16.61-25.51-3.53-50.79-5.22-76.31-5.67v112.77ZM247.05,24.4c-4.95,2.23-9.55,3.9-13.74,6.28-12.82,7.28-22.37,18.02-30.64,29.97-12.31,17.8-20.9,37.42-27.76,57.84-1.38,4.11-2.63,8.25-4.01,12.61,25.47,3.49,50.73,5.21,76.15,5.62V24.4Zm97.27,106.46c-2.88-8.31-5.52-16.54-8.58-24.62-7.1-18.72-15.96-36.53-28.35-52.4-7.41-9.48-15.82-17.92-26.52-23.68-3.99-2.15-8.3-3.69-12.82-5.66v111.96c6.43,1.27,66.15-3.06,76.28-5.6Zm-28.7-99.73c12.32,13.65,21.88,29.05,29.89,45.47,8.02,16.44,14.13,33.6,19.22,51.06,12.08-.36,66.93-15.48,72.38-19.94-32.38-38.38-72.7-64.12-121.49-76.59ZM150.23,127.87c10.55-35.38,24.31-68.89,49.22-96.79-48.83,12.53-89.19,38.3-121.79,77.01,23.72,9.38,47.86,15.35,72.57,19.78ZM437.7,406.51c-23.83-9.45-48.03-15.45-72.63-19.86-16.88,48.4-18.59,57.26-49.55,97.26,48.9-13.19,89.4-38.75,122.18-77.41Zm-359.97-.14c5.56,9.9,35.18,36.05,54.66,48.39,19.06,12.07,59,29.15,66.94,28.57-.2-.26-.36-.5-.55-.7-11.22-12.21-20.01-26.06-27.48-40.79-8.65-17.06-15.24-34.91-20.52-53.26-.42-1.47-.95-1.98-2.55-1.68-20.97,3.94-41.67,8.92-61.78,16.15-2.92,1.05-5.8,2.2-8.73,3.31Z"></path>
                                                </svg>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-480a90c elementor-widget elementor-widget-text-editor" data-id="480a90c" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p style="text-align: center;">D Tax Settled</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-917abeb" data-id="917abeb" data-element_type="column" data-settings="{'animation_mobile':'zoomIn'}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-a860233 elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="a860233" data-element_type="widget" data-widget_type="social-icons.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-save elementor-repeater-item-13c7ba5" href="#" onclick="generateVCF(); return false;">
                                                <span class="elementor-screen-only">Save</span>
                                                <i class="fas fa-save"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-ae71fb9 elementor-widget elementor-widget-text-editor" data-id="ae71fb9" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p style="text-align: center;">Save</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="card-footer-info">
            <div class="elementor-element elementor-element-cadbdd6 elementor-widget elementor-widget-heading" data-id="cadbdd6" data-element_type="widget" data-settings="{'_animation_mobile':'fadeInDown'}" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">D Tax Accounting Inc. | D Tax Settled</h2>
                </div>
            </div>
            <div class="elementor-element elementor-element-0133341 elementor-widget elementor-widget-text-editor" data-id="0133341" data-element_type="widget" data-settings="{'_animation_mobile':'fadeInDown'}" data-widget_type="text-editor.default">
                <div class="elementor-widget-container">
                    <p style="text-align: center;">Keeps Businesses in Compliance | Resolves Tax Problems<br>17547 Ventura Blvd. #309,<br>Encino, CA 91316</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        async function generateVCF() {
            const contactData = {
                firstName: "Dorit",
                lastName: "Dimand",
                title: "Federal Tax Adviser & Accountant",
                organization: "D Tax Accounting Inc. | D Tax Settled",
                phoneMobile: "+1-747-202-1470",
                email: "dorit@dtaxsettled.com",
                address: "17547 Ventura Blvd. #309, Encino, CA 91316",
                website: "https://www.dtaxaccounting.com/",
                website2: "https://www.dtaxsettled.com/",
                profileImage: "profile_img/client_profile/dorit-dimand-p.png"
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
                `URL:${contactData.website}`,
                `URL:${contactData.website2}`,
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
    </script>
</body>

</html>