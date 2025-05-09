<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        .custom-card {
            border-radius: 15px;
            overflow: hidden;
            background: rgb(255, 255, 255);
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
            height: 200px;
        }

        .text-body {
            background-color: #cc9831;
            overflow: hidden;
            border-radius: 10px;
        }

        /*logo*/
        .custom-logo {
            width: 200px;
            position: relative;
            top: 0;
            left: 0;
            margin-bottom: 40px;
            border-radius: 10px;
        }

        /*profile picture*/
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
            margin-top: 80px;
        }

        .custom-button {
            font-weight: bold;
        }

        .social-icon {
            font-size: 1.9rem;
            transition: color 0.3s;
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
            background-color: #292b51;
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }

        .custom-save-button:hover {
            background-color: #292b51;
        }

        .contact-icon {
            font-size: 1.5rem;
            color: #fffefe;
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

        .contact-info {
            margin: 30px 0;
            font-size: 1.2rem;
            text-align: left;
        }

        .mb-3 {
            background-color: #292b51;
            padding: 5px;
            border-radius: 10px;
            color: white;
            font-family: 'Roboto', sans-serif;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(-3px);
            }
            50% {
                transform: translateY(3px);
            }
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            width: 300px;
            border-radius: 8px;
            text-align: center;
            position: relative;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
            color: black;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card custom-card shadow-lg" style="background-color: #FFFFFF;">

            <!-- logo & banner image -->
            <div class="card-header custom-header text-center">
                <div style="background-color:#292b51; height: 200px; opacity: 1; border-radius:10px">
                    <img src="logo_img/client_logo/abeywickrama-l.png" alt="Company Logo" class="custom-logo"
                        height="120px" style="width: 122px; opacity: 1; margin-top:10px;">
                </div>

                <!-- profile image -->
                <div class="profile-picture">
                    <img src="profile_img/main_profile/template10-p.png" alt="Profile Picture" class="rounded-circle">
                </div>
            </div>
            <br>
            <br>
            <!-- name ,title ,about me -->
            <div class="card-body text-center"
                style="background-color: #FFFFFF; color: #000000; text-decoration: none;">
                <div class="text-body">
                    <h2 class="card-title"
                        style="font-size: 26px; text-transform: uppercase; margin-top:40px ;color: #292b51">kalindu
                        abeywickrama</h2>
                    <p
                        style="color: #292b51; font-size: 13px; text-transform: uppercase ;letter-spacing:2.8px ;font-weight:500">
                        Abeywickrama Trading House</p>
                    <p style="color: white; font-size:13px;">Supplying high-quality engine and vehicle spare parts with
                        reliable
                        service and expert support. Trusted by workshops, dealers, and distributors for consistent
                        product
                        availability and professional assistance.
                    </p>
                </div>

                <!-- contact info -->
                <div class="contact-info" style="text-align: center;">
                    <!-- WhatsApp -->
                    <div class="mb-3"
                        style="background-color: rgb(68, 198, 76); padding: 5px; border: solid 1px; border-radius: 5px; border-color: burlywood; color: white; display: inline-block; margin: 5px auto;">
                        <a href="https://wa.me/94702775078" target="_blank"
                            style="color: white; text-decoration: none;">
                            <i class="fab fa-whatsapp me-2"></i> CONNECT WITH WHATSAPP
                        </a>
                    </div>

                    <!-- WeChat -->
                    <div class="mb-3" onclick="openQRModal()"
                        style="cursor: pointer; color:rgb(204, 152, 49); font-weight:bold; margin: 5px auto;">
                        <i class="fab fa-weixin" style="color:rgb(204, 152, 49);"></i>
                        We Chat
                    </div>
                    <div id="qrModal" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeQRModal()">&times;</span>
                            <img src="gallery_img/client_gallerys/abeywickrama/abeywickrama-wechat.jpeg"
                                alt="WeChat QR Code" style="max-width: 100%; height: auto;">
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="mb-3" style="margin: 5px auto;">
                        <a href="mailto:kalinduabeywickrama@gmail.com"
                            style="color:rgb(204, 152, 49); text-decoration: none; font-weight:bold">
                            <i class="fas fa-mail-bulk" style="color:rgb(204, 152, 49);"></i>
                            Mail
                        </a>
                    </div>

                    <!-- Facebook -->
                    <div class="mb-3" style="margin: 5px auto;">
                        <a href="https://www.facebook.com/share/1Y4tsryHND/?mibextid=wwXIfr" target="_blank"
                            style="color:rgb(204, 152, 49); text-decoration: none; font-weight:bold">
                            <i class="fab fa-facebook" style="color:rgb(204, 152, 49);"></i>
                            Facebook
                        </a>
                    </div>

                    <!-- web -->
                    <div class="mb-3" style="margin: 5px auto;">
                        <a href="https://www.abeywickrama.com/" target="_blank"
                            style="color:rgb(204, 152, 49); text-decoration: none; font-weight:bold">
                            <i class="fas fa-globe" style="color:rgb(204, 152, 49);"></i>
                            Website
                        </a>
                    </div>
                </div>

                <br>
                <button class="btn w-100 custom-save-button" onclick="generateVCF()"
                    style="font-family: 'Roboto', sans-serif; font-size:19px;">
                    <i class="fas fa-address-card me-2"></i>SAVE TO CONTACTS
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function openQRModal() {
            document.getElementById("qrModal").style.display = "block";
        }

        function closeQRModal() {
            document.getElementById("qrModal").style.display = "none";
        }

        function generateVCF() {
        // Contact information
        const contactData = {
            firstName: "Kalindu",
            lastName: "Abeywickrama",
            title: "Abeywickrama Trading House",
            phoneWork: "+94702775078",
            phoneMobile: "",
            email: "kalinduabeywickrama@gmail.com",
            website: "https://www.abeywickrama.com/",
            about: "Supplying high-quality engine and vehicle spare parts with reliable service and expert support.",
            profileImage: "profile_img/main_profile/template10-p.png" // Path to profile image
        };

        // Create a function to get base64 image (this is a simplified version)
        function getBase64Image(imgUrl, callback) {
            const img = new Image();
            img.crossOrigin = 'Anonymous';
            img.onload = function() {
                const canvas = document.createElement('canvas');
                canvas.width = this.naturalWidth;
                canvas.height = this.naturalHeight;
                canvas.getContext('2d').drawImage(this, 0, 0);
                callback(canvas.toDataURL('image/jpeg').replace(/^data:image\/(png|jpeg);base64,/, ''));
            };
            img.src = imgUrl;
        }

        // For demo purposes, we'll use a placeholder function
        // In production, you need to ensure the image is accessible and CORS policies allow this
        function getProfileImageBase64(callback) {
            // This is a placeholder - in reality you should:
            // 1. Either pre-encode the image server-side and include the base64 string here
            // 2. Or ensure the image is accessible and CORS policies allow client-side conversion
            const placeholderBase64 = ''; // Leave empty or provide actual base64 string
            
            if (placeholderBase64) {
                callback(placeholderBase64);
            } else {
                // Fallback without image if we can't convert it
                callback(null);
            }
        }

        // Generate the VCF content with image if available
        getProfileImageBase64(function(imageBase64) {
            let vcfContent = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}`;

            if (contactData.phoneMobile) {
                vcfContent += `
TEL;TYPE=CELL:${contactData.phoneMobile}`;
            }

            vcfContent += `
EMAIL:${contactData.email}
URL:${contactData.website}
NOTE:${contactData.about}`;

            if (imageBase64) {
                vcfContent += `
PHOTO;ENCODING=b;TYPE=JPEG:${imageBase64}`;
            }

            vcfContent += `
END:VCARD`;

            // Create download link
            const blob = new Blob([vcfContent], {type: 'text/vcard'});
            const url = URL.createObjectURL(blob);

            const a = document.createElement('a');
            a.href = url;
            a.download = `${contactData.firstName}_${contactData.lastName}.vcf`;
            document.body.appendChild(a);
            a.click();

            // Clean up
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        });
    }
    </script>
</body>
</html>