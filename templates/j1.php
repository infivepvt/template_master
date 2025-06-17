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
            top: 95%;
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
            background: linear-gradient(90deg, #5f4def, #00d0ea);
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px;
            border-radius: 30px;
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
            background-color: #FFFFFF;
            border-radius: 30px;
            max-width: 95%;
            margin: 0 auto;
            padding: 20px;
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
            background: #f3f4f7
        }

        ._button_default_10caf_35:active {
            background: #8e8e8e
        }

        ._button_default_10caf_35 ._svg_10caf_45 * {
            fill: #43434e
        }

        ._button_primary_10caf_48 {
            background: #007eff;
            color: #fff
        }

        ._button_primary_10caf_48:hover {
            background: #3398ff
        }

        ._button_primary_10caf_48:active {
            background: #66b2ff
        }

        ._button_primary_10caf_48 ._svg_10caf_45 * {
            fill: #fff
        }

        ._button_link_10caf_61 {
            background: transparent;
            color: #007eff
        }

        ._button_link_10caf_61:hover {
            color: #3398ff
        }

        ._button_link_10caf_61:active {
            color: #66b2ff
        }

        ._button_link_10caf_61 ._svg_10caf_45 * {
            fill: #007eff
        }

        ._button_link_10caf_61 ._svg_10caf_45 *:hover {
            fill: #3398ff
        }

        ._button_link_10caf_61 ._svg_10caf_45 *:active {
            fill: #66b2ff
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
            background: #31363de6;
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
            background: #ffffffe6;
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
            background-color: color-mix(in srgb, #000000 60%, white 0%);
            -webkit-backdrop-filter: blur(2px);
            backdrop-filter: blur(2px)
        }

        ._modal_ib2ay_25 ._window_ib2ay_48 {
            min-width: 380px;
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
            box-shadow: 0 2px 6px 2px #00000026, 0 1px 2px #0000004d;
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
            flex-shrink: 0
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card15 shadow-lg" style="background-color: #000000;">
            <div class="card-header custom-header text-center" style="background-image: url('banner_img/client_banner/j1-p.png'); height: 200px; opacity: 100%;">
                <div class="profile-picture">
                    <img src="logo_img/client_logo/j1-l.png" alt="J1 Group" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <div class="card-body text-center" style="background-color: #000000; color: #000000;">
                <h2 style="font-size: 30px; color: white;">J1 Group</h2>
                <p style="color:rgb(255, 255, 255); font-size: 20px;">Car Rentals, Wedding Services, Motors</p>

                <div>
                    <p></p>
                </div>
                <br>
                <br>
                <br>

                <div class="profile-header13" style="background-color:rgb(0, 0, 0); border-radius: 30px; max-width: 95%; margin: 0 auto; padding: 20px; margin-top: -50px;">
                    <div class="profile-contact-icons13">
                        <!-- Phone Work Button with Label -->
                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button" onclick="window.open('tel:+94776101565', '_self')">
                                <i class="fas fa-phone contact-icon rotated-90"></i>
                            </button>
                            <p class="contact-icon-label">Mobile Number</p>
                        </div>

                        <!-- Office Number Button with Label -->
                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button" onclick="window.open('tel:+94765338259', '_self')">
                                <i class="fas fa-fax contact-icon rotated-0"></i>
                            </button>
                            <p class="contact-icon-label">Office Number</p>
                        </div>

                        <!-- WhatsApp Button with Label -->
                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button" onclick="window.open('https://wa.me/+94765338259', '_blank')">
                                <i class="fab fa-whatsapp contact-icon rotated-0"></i>
                            </button>
                            <p class="contact-icon-label">WhatsApp</p>
                        </div>

                        <!-- Mobile 3 Button with Label -->
                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button" onclick="window.open('viber://chat?number=%2B94765338259', '_blank')">
                                <i class="fab fa-viber contact-icon rotated-0"></i>
                            </button>
                            <p class="contact-icon-label">Viber</p>
                        </div>

                        <!-- Email Button with Label -->
                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button" onclick="window.open('mailto:info@j1group.com', '_self')">
                                <i class="fas fa-envelope contact-icon"></i>
                            </button>
                            <p class="contact-icon-label">Email</p>
                        </div>

                        <!-- Email 2 Button with Label -->
                        <div class="contact-icon-container">
                            <button type="button" class="contact-icon-button" onclick="window.open('mailto:support@j1group.com', '_self')">
                                <i class="fas fa-envelope contact-icon"></i>
                            </button>
                            <p class="contact-icon-label">Support Email</p>
                        </div>
                    </div>

                    <!-- Company Details Section -->
                    <div class="company-section" style="background-color: #1a1a1a; border-radius: 15px; padding: 15px; margin-top: 20px; color: #fff;">
                        <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 10px;">About J1 Group</h3>
                        <p style="mb-2">Address: Colombo Rd, Dummaladeniya, Wennapporuwa</p>
                        <p style="font-size: 14px; margin-bottom: 10px;">Our Services:</p>
                        <ul style="list-style-type: none; padding: 0;">
                            <li style="margin-bottom: 5px;">1. J1 Car Rentals</li>
                            <li style="margin-bottom: 5px;">2. J1 Group Wedding</li>
                            <li style="margin-bottom: 5px;">3. J1 Motors</li>
                        </ul>
                        <p style="font-size: 14px; margin-top: 10px;">Our Websites:</p>
                        <ul style="list-style-type: none; padding: 0;">
                            <li style="margin-bottom: 5px;"><a href="https://www.j1group.com" target="_blank" style="color: #007eff;">www.j1group.com</a></li>
                            <li style="margin-bottom: 5px;"><a href="https://www.j1carrental.com" target="_blank" style="color: #007eff;">www.j1carrental.com</a></li>
                            <li style="margin-bottom: 5px;"><a href="https://www.j1motors.com" target="_blank" style="color: #007eff;">www.j1motors.com</a></li>
                        </ul>
                    </div>

                    <!-- Enhanced Gallery Section -->
                    <!-- <div class="gallery-section">
                        <div class="gallery-header" onclick="toggleGallery()">
                            <div class="gallery-title">Gallery</div>
                            <div class="gallery-toggle" id="galleryToggle">
                                <i class="fas fa-minus"></i>
                            </div>
                        </div>
                        <div class="gallery-container" id="galleryContainer">
                            <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g1.jpg', 0)">
                                <img src="gallery_img/main_gallerys/t6g1.jpg" alt="Gallery Image 1" class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g2.jpg', 1)">
                                <img src="gallery_img/main_gallerys/t6g2.jpg" alt="Gallery Image 2" class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g3.jpg', 2)">
                                <img src="gallery_img/main_gallerys/t6g3.jpg" alt="Gallery Image 3" class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g4.jpg', 3)">
                                <img src="gallery_img/main_gallerys/t6g4.jpg" alt="Gallery Image 4" class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g5.jpg', 4)">
                                <img src="gallery_img/main_gallerys/t6g5.jpg" alt="Gallery Image 5" class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="gallery-item" onclick="openLightbox('gallery_img/main_gallerys/t6g6.jpg', 5)">
                                <img src="gallery_img/main_gallerys/t6g6.jpg" alt="Gallery Image 6" class="gallery-image">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Enhanced Lightbox -->
                    <div class="lightbox" id="lightbox">
                        <span class="lightbox-close" onclick="closeLightbox()">×</span>
                        <div class="lightbox-nav">
                            <button onclick="changeImage(-1)">❮</button>
                            <button onclick="changeImage(1)">❯</button>
                        </div>
                        <div class="lightbox-content">
                            <img id="lightbox-image" class="lightbox-image" src="" alt="">
                            <div class="lightbox-counter" id="lightboxCounter"></div>
                        </div>
                    </div>

                    <p class="fw" style="font-family: 'Montserrat', sans-serif; font-size:15px; color:white;">CONNECT WITH SOCIAL MEDIA</p>
                    <div class="d-flex flex-wrap justify-content-center">
                        <a href="https://www.facebook.com/share/16R9BSVC7Q/" target="_blank" rel="noopener noreferrer" class="m-3">
                            <img src="Images/Social_Media_Icon/facebook.png" alt="Facebook 1" style="width: 50px; height: 50px;">
                        </a>
                        <a href="https://www.facebook.com/share/1Ad8cD4QLV/" target="_blank" rel="noopener noreferrer" class="m-3">
                            <img src="Images/Social_Media_Icon/facebook.png" alt="Facebook 2" style="width: 50px; height: 50px;">
                        </a>
                        <a href="https://www.facebook.com/share/1919ympghp/" target="_blank" rel="noopener noreferrer" class="m-3">
                            <img src="Images/Social_Media_Icon/facebook.png" alt="Facebook 3" style="width: 50px; height: 50px;">
                        </a>
                    </div>

                    <br>
                    <button class="btn w-100 custom-save-button">
                        <i class="fas fa-save me-2"></i>
                        SAVE TO CONTACTS
                    </button>
                </div>

                <br>
            </div>
        </div>
    </div>

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
        document.querySelector('.custom-save-button').addEventListener('click', async function() {
            const contactData = {
                firstName: "Dorit",
                lastName: "Dimand",
                title: "Federal Tax Adviser & Accountant",
                organization: "D Tax Accounting Inc. | D Tax Settled",
                phoneMobile: "+1-818-358-9588",
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

        });
    </script>
</body>

</html>