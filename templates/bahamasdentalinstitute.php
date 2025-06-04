<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template73</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <!-- Import professional fonts from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Apply Inter as the default font for the entire template */
        body {
            font-family: 'Inter', 'Helvetica', 'Arial', sans-serif;
        }

        .custom-card73 {
            overflow: hidden;
            background: #B3D9E6;
            /* Darker light blue background */
            width: 100%;
            min-height: 100vh;
        }

        .custom-header73 {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 35px 20px;
            position: relative;
            background: linear-gradient(90deg, #0288D1, #388E3C);
            /* Darker blue to dark green gradient */
        }

        .custom-logo {
            width: 200px;
            position: relative;
            top: 0;
            left: 0;
            margin-bottom: 80px;
            /* Reduced gap */
        }

        .profile-picture {
            position: absolute;
            top: 90%;
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

        .icon-instagram {
            color: #C13584;
            /* Darker Instagram color */
        }

        .icon-facebook {
            color: #0A5B9B;
            /* Darker Facebook color */
        }

        .icon-youtube {
            color: #CC0000;
            /* Darker YouTube color */
        }

        .icon-tiktok {
            color: #010101;
        }

        .icon-twitter {
            color: #1A91DA;
            /* Darker Twitter color */
        }

        .icon-snapchat {
            color: #E6DB00;
            /* Slightly darker Snapchat color */
        }

        .icon-pinterest {
            color: #BD081C;
            /* Darker Pinterest color */
        }

        .icon-linkedin {
            color: #004B87;
            /* Darker LinkedIn color */
        }

        .social-icon-row {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-bottom: 5px;
        }

        .list-group-item {
            background-color: #222;
            /* Darker background */
            color: #fff;
            border-radius: 8px;
            margin-bottom: 10px;
            border: 1px solid #333;
            /* Darker border */
            padding: 10px 15px;
        }

        .list-group-item:hover {
            background-color: #333;
            /* Darker hover background */
            border-color: #555;
            /* Darker hover border */
            transition: background-color 0.3s, border-color 0.3s;
        }

        .custom-save-button73 {
            background: linear-gradient(90deg, #0288D1, #388E3C);
            /* Darker blue to dark green gradient */
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px;
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
            margin-bottom: 10px;
        }

        .custom-save-button73:hover {
            background: linear-gradient(90deg, #0277BD, #2E7D32);
            /* Even darker shades for hover */
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
            font-family: 'Inter', 'Helvetica', 'Arial', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .custom-phone1 {
            font-family: 'Inter', 'Helvetica', 'Arial', sans-serif;
            font-weight: bold;
            font-size: 1.2rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .custom-phone1 {
            transition: background-color 0.1s, border-color 0.1s;
        }

        .custom-phone1:hover {
            background-color: #1EBA5A;
            /* Darker WhatsApp green */
            border-color: #0A6E5E;
            /* Darker border */
        }

        .gallery-section {
            padding: 20px;
        }

        .gallery-preview {
            gap: 10px;
        }

        .gallery-item {
            position: relative;
            width: 150px;
            height: 150px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            /* Darker shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
            /* Darker hover shadow */
        }

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            /* Darker overlay */
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-text {
            color: white;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }

        .image-preview-modal .modal-content {
            background: transparent;
            border: none;
        }

        .image-preview-modal .modal-body {
            padding: 0;
            position: relative;
        }

        .modal-image-container {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-preview-modal img {
            max-width: 90vw;
            max-height: 90vh;
            margin: auto;
            display: block;
            border-radius: 8px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.4);
            /* Darker shadow */
            animation: zoomIn 0.3s ease-out;
        }

        .modal-close-btn {
            position: absolute;
            top: -35px;
            right: -35px;
            color: white;
            font-size: 30px;
            cursor: pointer;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
            transition: transform 0.2s ease;
        }

        .modal-close-btn:hover {
            transform: scale(1.2);
        }

        .nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.6);
            /* Darker button background */
            border: none;
            color: white;
            font-size: 24px;
            padding: 10px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .nav-btn:hover {
            background: rgba(0, 0, 0, 0.9);
            /* Darker hover */
        }

        .prev-btn {
            left: 10px;
        }

        .next-btn {
            right: 10px;
        }

        .modal-backdrop.show {
            opacity: 0.9;
            background: #000;
            animation: fadeIn 0.3s ease-out;
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
                opacity: 0.9;
            }
        }

        @media (max-width: 768px) {
            .modal-close-btn {
                top: -25px;
                right: -25px;
                font-size: 24px;
            }

            .image-preview-modal img {
                max-width: 95vw;
                max-height: 95vh;
            }
        }

        .video-preview {
            gap: 15px;
        }

        .video-preview video {
            border: 2px solid #aaa;
            /* Darker border */
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .upload-container {
            position: relative;
            max-width: 300px;
            margin: 1rem auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modern-upload-btn {
            display: block;
            padding: 1.5rem 2rem;
            background: linear-gradient(135deg, #0288D1, #388E3C);
            /* Darker gradient */
            border-radius: 12px;
            color: white;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            /* Darker shadow */
            border: 2px solid transparent;
            text-align: center;
        }

        .modern-upload-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
            /* Darker hover shadow */
            background: linear-gradient(135deg, #0277BD, #2E7D32);
            /* Darker hover gradient */
        }

        .modern-upload-btn:active {
            transform: translateY(0);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            /* Darker active shadow */
        }

        .btn-content {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }

        .upload-icon {
            font-size: 2rem;
            transition: transform 0.3s ease;
        }

        .modern-upload-btn:hover .upload-icon {
            transform: translateY(-3px);
            animation: float 2s ease-in-out infinite;
        }

        .text-container {
            text-align: center;
        }

        .main-text {
            display: block;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .sub-text {
            display: block;
            font-size: 0.9rem;
            opacity: 0.8;
            margin-top: 0.3rem;
        }

        .hover-effect {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .modern-upload-btn:hover .hover-effect {
            opacity: 1;
        }

        .hidden-input {
            display: none;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(-3px);
            }

            50% {
                transform: translateY(3px);
            }
        }

        .contact {
            background-color: #ffffff;
            border: none;
            color: black;
            transition: background 0.3s ease;
            padding: 10px 15px;
        }

        .contact-icon {
            font-size: 24px;
            color: #0288D1;
            /* Darker blue for contact icons */
            transition: color 0.3s ease;
        }

        .contact:hover .contact-icon {
            color: #388E3C;
            /* Darker green on hover */
        }

        .icon-text {
            color: rgb(0, 0, 0);
            font-family: 'Inter', 'Helvetica', 'Arial', sans-serif;
            font-size: 16px;
            margin-left: 15px;
            font-weight: bold;
        }
    </style>
    <style>
        ._button_10caf_25 {
            border-radius: 8px;
            border: unset;
            cursor: pointer;
            transition: .3s
        }

        ._button_10caf_25:disabled {
            opacity: .3;
            cursor: not-allowed
        }

        ._button_default_10caf_35 {
            background: transparent;
            color: #43434e
        }

        ._button_default_10caf_35:hover {
            background: #e0e1e4
        }

        ._button_default_10caf_35:active {
            background: #8e8e8e
        }

        ._button_default_10caf_35 ._svg_10caf_45 * {
            fill: #43434e
        }

        ._button_primary_10caf_48 {
            background: #005BB5;
            color: #fff
        }

        ._button_primary_10caf_48:hover {
            background: #1E88E5
        }

        ._button_primary_10caf_48:active {
            background: #42A5F5
        }

        ._button_primary_10caf_48 ._svg_10caf_45 * {
            fill: #fff
        }

        ._button_link_10caf_61 {
            background: transparent;
            color: #005BB5
        }

        ._button_link_10caf_61:hover {
            color: #1E88E5
        }

        ._button_link_10caf_61:active {
            color: #42A5F5
        }

        ._button_link_10caf_61 ._svg_10caf_45 * {
            fill: #005BB5
        }

        ._button_link_10caf_61 ._svg_10caf_45 *:hover {
            fill: #1E88E5
        }

        ._button_link_10caf_61 ._svg_10caf_45 *:active {
            fill: #42A5F5
        }

        ._button_large_10caf_80 {
            padding: 12px 16px
        }

        ._button_large_10caf_80 * {
            font-size: 16px
        }

        ._button_medium_10caf_86 {
            padding: 8px 16px
        }

        ._button_medium_10caf_86 * {
            font-size: 16px
        }

        ._button_small_10caf_92 {
            padding: 4px;
            min-height: 24px
        }

        ._button_small_10caf_92 * {
            font-size: 12px
        }

        ._flexBox_9xdww_14 {
            flex-flow: unset
        }

        ._gap_extraTiny_9xdww_18 {
            gap: 2px
        }

        ._gap_tiny_9xdww_22 {
            gap: 4px
        }

        ._gap_extraSmall_9xdww_26 {
            gap: 6px
        }

        ._gap_small_9xdww_30 {
            gap: 8px
        }

        ._gap_medium_9xdww_34 {
            gap: 16px
        }

        ._gap_normal_9xdww_38 {
            gap: 24px
        }

        ._gap_large_9xdww_42 {
            gap: 32px
        }

        ._gap_xLarge_9xdww_46 {
            gap: 48px
        }

        ._gap_xxLarge_9xdww_50 {
            gap: 56px
        }

        ._gap_extraLarge_9xdww_54 {
            gap: 64px
        }

        ._column_9xdww_58 {
            flex-direction: column !important
        }

        ._flexWrap_9xdww_62 {
            flex-wrap: wrap
        }

        ._popover_12uvb_1 {
            position: fixed;
            padding: 8px 10px;
            z-index: 2147483647;
            background: #1E252De6;
            border-radius: 4px;
            color: #fff;
            font-size: 14px
        }

        ._buttons_12uvb_11 {
            position: fixed;
            top: 0;
            right: 0;
            padding: 8px;
            z-index: 2147483647
        }

        ._popup_hcu7e_1 {
            position: fixed;
            z-index: 2147483649;
            background: #e0e0e0e6;
            border-radius: 4px;
            color: #000;
            font-size: 14px;
            line-height: 1.286;
            width: 350px;
            -webkit-backdrop-filter: blur(2px);
            backdrop-filter: blur(2px);
            box-shadow: 0 0 7px -5px #000
        }

        ._popup_hcu7e_1:before {
            border-color: rgba(255, 255, 255, .9) transparent;
            border-width: 0 7px 7px 7px;
            left: 7px;
            top: -7px;
            border-style: solid;
            content: ".";
            display: block;
            height: 0;
            position: absolute;
            text-indent: -30000px;
            width: 0
        }

        ._color_hcu7e_27 {
            width: 20px;
            height: 20px;
            cursor: pointer;
            flex-shrink: 0
        }

        ._styleContainer_hcu7e_34 {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        ._extraTiny_dg7lc_14 {
            padding: 2px
        }

        ._extraTinyVR_dg7lc_18 {
            padding-top: 2px;
            padding-bottom: 2px
        }

        ._extraTinyHR_dg7lc_23 {
            padding-left: 2px;
            padding-right: 2px
        }

        ._extraTinyTop_dg7lc_28 {
            padding-top: 2px
        }

        ._extraTinyRight_dg7lc_32 {
            padding-right: 2px
        }

        ._extraTinyBottom_dg7lc_36 {
            padding-bottom: 2px
        }

        ._extraTinyLeft_dg7lc_40 {
            padding-left: 2px
        }

        ._tiny_dg7lc_44 {
            padding: 4px
        }

        ._tinyVR_dg7lc_48 {
            padding-top: 4px;
            padding-bottom: 4px
        }

        ._tinyHR_dg7lc_53 {
            padding-left: 4px;
            padding-right: 4px
        }

        ._tinyTop_dg7lc_58 {
            padding-top: 4px
        }

        ._tinyRight_dg7lc_62 {
            padding-right: 4px
        }

        ._tinyBottom_dg7lc_66 {
            padding-bottom: 4px
        }

        ._tinyLeft_dg7lc_70 {
            padding-left: 4px
        }

        ._extraSmall_dg7lc_74 {
            padding: 6px
        }

        ._extraSmallVR_dg7lc_78 {
            padding-top: 6px;
            padding-bottom: 6px
        }

        ._extraSmallHR_dg7lc_83 {
            padding-left: 6px;
            padding-right: 6px
        }

        ._extraSmallTop_dg7lc_88 {
            padding-top: 6px
        }

        ._extraSmallRight_dg7lc_92 {
            padding-right: 6px
        }

        ._extraSmallBottom_dg7lc_96 {
            padding-bottom: 6px
        }

        ._extraSmallLeft_dg7lc_100 {
            padding-left: 6px
        }

        ._small_dg7lc_104 {
            padding: 8px
        }

        ._smallVR_dg7lc_108 {
            padding-top: 8px;
            padding-bottom: 8px
        }

        ._smallHR_dg7lc_113 {
            padding-left: 8px;
            padding-right: 8px
        }

        ._smallTop_dg7lc_118 {
            padding-top: 8px
        }

        ._smallRight_dg7lc_122 {
            padding-right: 8px
        }

        ._smallBottom_dg7lc_126 {
            padding-bottom: 8px
        }

        ._smallLeft_dg7lc_130 {
            padding-left: 8px
        }

        ._medium_dg7lc_134 {
            padding: 16px
        }

        ._mediumVR_dg7lc_138 {
            padding-top: 16px;
            padding-bottom: 16px
        }

        ._mediumHR_dg7lc_143 {
            padding-left: 16px;
            padding-right: 16px
        }

        ._mediumTop_dg7lc_148 {
            padding-top: 16px
        }

        ._mediumRight_dg7lc_152 {
            padding-right: 16px
        }

        ._mediumBottom_dg7lc_156 {
            padding-bottom: 16px
        }

        ._mediumLeft_dg7lc_160 {
            padding-left: 16px
        }

        ._normal_dg7lc_164 {
            padding: 24px
        }

        ._normalVR_dg7lc_168 {
            padding-top: 24px;
            padding-bottom: 24px
        }

        ._normalHR_dg7lc_173 {
            padding-left: 24px;
            padding-right: 24px
        }

        ._normalTop_dg7lc_178 {
            padding-top: 24px
        }

        ._normalRight_dg7lc_182 {
            padding-right: 24px
        }

        ._normalBottom_dg7lc_186 {
            padding-bottom: 24px
        }

        ._normalLeft_dg7lc_190 {
            padding-left: 24px
        }

        ._large_dg7lc_194 {
            padding: 32px
        }

        ._largeVR_dg7lc_198 {
            padding-top: 32px;
            padding-bottom: 32px
        }

        ._largeHR_dg7lc_203 {
            padding-left: 32px;
            padding-right: 32px
        }

        ._largeTop_dg7lc_208 {
            padding-top: 32px
        }

        ._largeRight_dg7lc_212 {
            padding-right: 32px
        }

        ._largeBottom_dg7lc_216 {
            padding-bottom: 32px
        }

        ._largeLeft_dg7lc_220 {
            padding-left: 32px
        }

        ._xLarge_dg7lc_224 {
            padding: 48px
        }

        ._xLargeVR_dg7lc_228 {
            padding-top: 48px;
            padding-bottom: 48px
        }

        ._xLargeHR_dg7lc_233 {
            padding-left: 48px;
            padding-right: 48px
        }

        ._xLargeTop_dg7lc_238 {
            padding-top: 48px
        }

        ._xLargeRight_dg7lc_242 {
            padding-right: 48px
        }

        ._xLargeBottom_dg7lc_246 {
            padding-bottom: 48px
        }

        ._xLargeLeft_dg7lc_250 {
            padding-left: 48px
        }

        ._xxLarge_dg7lc_254 {
            padding: 56px
        }

        ._xxLargeVR_dg7lc_258 {
            padding-top: 56px;
            padding-bottom: 56px
        }

        ._xxLargeHR_dg7lc_263 {
            padding-left: 56px;
            padding-right: 56px
        }

        ._xxLargeTop_dg7lc_268 {
            padding-top: 56px
        }

        ._xxLargeRight_dg7lc_272 {
            padding-right: 56px
        }

        ._xxLargeBottom_dg7lc_276 {
            padding-bottom: 56px
        }

        ._xxLargeLeft_dg7lc_280 {
            padding-left: 56px
        }

        ._extraLarge_dg7lc_284 {
            padding: 64px
        }

        ._extraLargeVR_dg7lc_288 {
            padding-top: 64px;
            padding-bottom: 64px
        }

        ._extraLargeHR_dg7lc_293 {
            padding-left: 64px;
            padding-right: 64px
        }

        ._extraLargeTop_dg7lc_298 {
            padding-top: 64px
        }

        ._extraLargeRight_dg7lc_302 {
            padding-right: 64px
        }

        ._extraLargeBottom_dg7lc_306 {
            padding-bottom: 64px
        }

        ._extraLargeLeft_dg7lc_310 {
            padding-left: 64px
        }

        ._size_tiny_ldink_23,
        ._size_tiny_ldink_23 * {
            font-size: 12px
        }

        ._size_small_ldink_27,
        ._size_small_ldink_27 * {
            font-size: 16px
        }

        ._size_medium_ldink_31,
        ._size_medium_ldink_31 * {
            font-size: 18px
        }

        ._size_large_ldink_35,
        ._size_large_ldink_35 * {
            font-size: 32px
        }

        ._weight_thin_ldink_39,
        ._weight_thin_ldink_39 * {
            font-weight: 100
        }

        ._weight_extraLight_ldink_43,
        ._weight_extraLight_ldink_43 * {
            font-weight: 200
        }

        ._weight_light_ldink_47,
        ._weight_light_ldink_47 * {
            font-weight: 300
        }

        ._weight_normal_ldink_51,
        ._weight_normal_ldink_51 * {
            font-weight: 400
        }

        ._weight_medium_ldink_55,
        ._weight_medium_ldink_55 * {
            font-weight: 500
        }

        ._weight_semiBold_ldink_59,
        ._weight_semiBold_ldink_59 * {
            font-weight: 600
        }

        ._weight_bold_ldink_63,
        ._weight_bold_ldink_63 * {
            font-weight: 700
        }

        ._weight_extraBold_ldink_67,
        ._weight_extraBold_ldink_67 * {
            font-weight: 800
        }

        ._lineHeight_ldink_71 {
            line-height: 100%
        }

        ._secondary_ldink_75 {
            color: #8e8e8e
        }

        ._modal_ib2ay_25 {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2147483649
        }

        ._modal_ib2ay_25 ._background_ib2ay_36 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition: .3s;
            opacity: 0;
            overflow: auto;
            background-color: color-mix(in srgb, #000000 70%, white 0%);
            -webkit-backdrop-filter: blur(2px);
            backdrop-filter: blur(2px)
        }

        ._modal_ib2ay_25 ._window_ib2ay_48 {
            min-width: 280px;
            max-width: 560px;
            background: #fff;
            border-radius: 6px;
            padding: 16px;
            z-index: 1;
            position: relative;
            opacity: 0;
            transform: scale(.01);
            transition: .3s;
            display: flex;
            flex-direction: column;
            box-shadow: 0 2px 6px 2px #00000033, 0 1px 2px #00000059;
            overflow: auto
        }

        ._modal_ib2ay_25 ._window_ib2ay_48 ._loading_ib2ay_64 {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: #000000b3
        }

        ._modal_ib2ay_25 ._window_ib2ay_48 ._loading_ib2ay_64 img {
            width: 100px
        }

        ._modal_visible_ib2ay_76 ._background_ib2ay_36 {
            opacity: 1
        }

        ._modal_visible_ib2ay_76 ._window_ib2ay_48 {
            opacity: 1;
            transform: scale(1)
        }

        ._modal_hidden_ib2ay_83 ._background_ib2ay_36 {
            opacity: 0
        }

        ._modal_hidden_ib2ay_83 ._window_ib2ay_48 {
            opacity: 0;
            transform: scale(.01)
        }

        ._modal_hiddenDone_ib2ay_90 ._background_ib2ay_36 {
            opacity: 0
        }

        ._modal_hiddenDone_ib2ay_90 ._window_ib2ay_48 {
            opacity: 0;
            transform: scale(.01)
        }

        ._color_13dyv_1 {
            padding: 0 8px;
            border-radius: 8px;
            width: 100%;
            box-shadow: 0 0 7px -5px #000;
            font-weight: 800;
            font-family: 'Inter', 'Helvetica', 'Arial', sans-serif;
            flex-shrink: 0
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center template-73">
        <div class="card custom-card73 shadow-lg rounded-0" style="background-color: #B3D9E6;">
            <div class="card-header custom-header73 text-center" style="background-image: url('#'); height: 100%; opacity: 1; border-bottom-width: 1px; border-bottom-right-radius: 40%; border-bottom-left-radius: 40%;">
                <p style="color: #000000; font-size: 25px; font-weight: bold; font-family: 'Lora', 'Times New Roman', serif;">The Bahamas Dental Institute</p>
                <img src="logo_img/client_logo/bahamasdentalinstitute-l.png" alt="Company Logo" class="custom-logo" style="width: 150px; opacity: 1;">
                <div class="profile-picture">
                    <img src="profile_img/client_profile/bahamasdentalinstitute-p.png" alt="The Bahamas Dental Institute" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center" style="background-color: #B3D9E6; color: #000000;">
                <h2 class="card-title" style="font-size: 30px; font-family: 'Lora', 'Times New Roman', serif;">The Bahamas Dental Institute</h2>
                <p style="color: #000000; font-size: 20px; font-family: 'Inter', 'Helvetica', 'Arial', sans-serif;">Dental Clinic</p>

                <button class="btn w-100 custom-save-button73" onclick="generateVCF()">
                    <i class="fas fa-save me-2"></i>
                    SAVE TO CONTACTS
                </button>

                <div class="list-group mb-3">
                    <!-- Phone -->
                    <button type="button" class="list-group-item d-flex align-items-center justify-content-start contact" onclick="window.open('tel:2424672599', '_self')">
                        <i class="fas fa-phone contact-icon me-3"></i>
                        <p class="icon-text mb-0 text-truncate">Call</p>
                    </button>

                    <!-- Email -->
                    <!-- <button type="button" class="list-group-item d-flex align-items-center justify-content-start contact" onclick="window.open('mailto:youremail@yourwebsite.com', '_self')">
                        <i class="fas fa-envelope contact-icon me-3"></i>
                        <p class="icon-text mb-0 text-truncate">Email</p>
                    </button> -->

                    <!-- Website -->
                    <!-- <button type="button" class="list-group-item d-flex align-items-center justify-content-start contact" onclick="window.open('https://www.yourwebsiteaddress.com', '_blank')">
                        <i class="fas fa-globe contact-icon me-3"></i>
                        <p class="icon-text mb-0 text-truncate">Website</p>
                    </button> -->

                    <!-- Address -->
                    <button type="button" class="list-group-item d-flex align-items-center justify-content-start contact" onclick="window.open('https://www.google.com/maps/search/?api=1&query=Bernard+Road,+Nassau,+Bahamas', '_blank')">
                        <i class="fas fa-map-marker-alt contact-icon me-3"></i>
                        <p class="icon-text mb-0 text-truncate">Location</p>
                    </button>
                </div>

                <p class="fw" style="font-family: 'Inter', 'Helvetica', 'Arial', sans-serif; font-size: 19px; color: rgb(90, 87, 87);"> <!-- Darker text color -->
                    CONNECT WITH SOCIAL MEDIA
                </p>
                <div class="d-flex flex-wrap justify-content-center">
                    <a href="https://www.instagram.com/thebahamasdentalinstitute/?igsh=ZGFldjVkM3kzcXBp&utm_source=qr" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/instagram.png" alt="Instagram" style="width: 50px; height: 50px;">
                    </a>
                    <a href="https://www.facebook.com/people/The-Bahamas-Dental-Institute/100065529668337/?mibextid=wwXIfr&rdid=EYasg3oCAnu8jCpQ&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1C6CTutyRV%2F%3Fmibextid%3DwwXIfr" target="_blank" rel="noopener noreferrer" class="m-3">
                        <img src="Images/Social_Media_Icon/facebook.png" alt="Facebook" style="width: 50px; height: 50px;">
                    </a>
                </div>
                <br>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        async function generateVCF() {
            const contactData = {
                firstName: "The Bahamas Dental Institute",
                lastName: "",
                title: "Dental Clinic",
                phoneWork: "",
                phoneMobile: "2424672599",
                email: "",
                email2: "",
                email3: "",
                website: "https://www.instagram.com/thebahamasdentalinstitute/?igsh=ZGFldjVkM3kzcXBp&utm_source=qr",
                website2: "https://www.facebook.com/people/The-Bahamas-Dental-Institute/100065529668337/?mibextid=wwXIfr&rdid=EYasg3oCAnu8jCpQ&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1C6CTutyRV%2F%3Fmibextid%3DwwXIfr",
                website3: "",
                address: "",
                address2: "",
                about: "",
                logo: "https://tapilinq.com/profile_img/client_profile/bahamasdentalinstitute-p.png",
                profileImage: "https://tapilinq.com/profile_img/client_profile/bahamasdentalinstitute-p.png"
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
            if (contactData.website) vcfLines.push(`URL;TYPE=Instagram:${contactData.website}`);
            if (contactData.website2) vcfLines.push(`URL;TYPE=Facebook:${contactData.website2}`);
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