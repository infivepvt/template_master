<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Montserrat:wght@300;400;500&family=Dancing+Script:wght@500&family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            color: white;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #000000;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Quicksand", sans-serif;
        }

        .custom-card {
            overflow: hidden;
            background: linear-gradient(145deg, #0a0a0a 0%, #111111 100%);
            width: 100%;
            height: auto;
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .profile {
            margin: 40px auto 20px;
            width: 320px;
            height: 370px;
            background-image: url('profile_img/client_profile/shavee-p.jpeg');
            background-position: center;
            background-size: cover;
            border-top-right-radius: 60px;
            border-bottom-left-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            border: 5px solid rgba(255, 255, 255, 0.05);
        }

        h1 {
            color: white;
            text-align: center;
            font-family: "Playfair Display", serif;
            font-size: 34px;
            letter-spacing: 1px;
            font-weight: 500;
            margin: 10px 0 5px;
            text-transform: uppercase;
        }

        .username {
            color: #bbb;
            text-align: center;
            font-weight: 400;
            font-size: 16px;
            margin-bottom: 25px;
            letter-spacing: 0.5px;
            font-family: "Dancing Script", cursive;
            font-size: 18px;
        }

        .contact-info {
            text-align: center;
            font-family: "Montserrat", sans-serif;
            font-size: 18px;
            margin-bottom: 5px;
            font-weight: 400;
            text-decoration: none;
            color: white;
            letter-spacing: 0.3px;
        }

        .email {
            font-size: 15px;
            color: #bbb;
            display: block;
            margin-top: 8px;
            letter-spacing: 0.3px;
        }

        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            width: 80%;
            margin: 25px auto;
        }

        .section-title {
            text-align: center;
            font-family: "Playfair Display", serif;
            font-weight: 500;
            margin: 0 0 20px 0;
            color: #ddd;
            font-size: 22px;
            position: relative;
            padding-bottom: 10px;
            letter-spacing: 1px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 2px;
            background: linear-gradient(90deg, #d4af37, #f4e5c2);
            border-radius: 3px;
        }

        .facebook-pages {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            padding: 0 30px 30px;
        }

        .page-card {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 15px;
            padding: 15px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .page-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
            background: rgba(255, 255, 255, 0.07);
        }

        .page-header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 12px;
        }

        .page-header img {
            width: 20px;
            height: 20px;
        }

        .page-header h4 {
            font-family: "Playfair Display", serif;
            font-size: 16px;
            font-weight: 500;
            margin: 0;
            color: #ddd;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }

        .qr-container {
            margin: 15px 0;
            display: flex;
            justify-content: center;
        }

        .qr-code {
            width: 100px;
            height: 100px;
            background: #fff;
            border-radius: 8px;
            padding: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .qr-code img {
            max-width: 100%;
            height: auto;
        }

        .share-btn {
            background: #333333;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 6px 15px;
            font-size: 13px;
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, 0.1);
            letter-spacing: 0.5px;
        }

        .share-btn:hover {
            background: #444444;
            transform: translateY(-2px);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
        }

        .save-contact-container {
            padding: 20px 30px 30px;
            text-align: center;
        }

        .btn-contact {
            background: linear-gradient(45deg, #d4af37 0%, #f4e5c2 100%);
            color: #222;
            border: none;
            border-radius: 30px;
            padding: 12px 35px;
            font-weight: 600;
            font-family: "Playfair Display", serif;
            font-size: 16px;
            transition: all 0.3s ease;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            letter-spacing: 1px;
        }

        .btn-contact:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(212, 175, 55, 0.4);
            background: linear-gradient(45deg, #e5c352 0%, #f9f0d9 100%);
        }

        .footer {
            text-align: center;
            padding: 15px 0;
            font-size: 12px;
            color: #777;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            margin-top: 10px;
        }

        .corner-deco {
            position: absolute;
            width: 120px;
            height: 120px;
            border-width: 5px;
            border-style: solid;
            opacity: 0.1;
        }

        .corner-tl {
            top: -60px;
            left: -60px;
            border-image: linear-gradient(135deg, #d4af37, #f4e5c2) 1;
            border-bottom-right-radius: 100%;
        }

        .corner-br {
            bottom: -60px;
            right: -60px;
            border-image: linear-gradient(135deg, #f4e5c2, #d4af37) 1;
            border-top-left-radius: 100%;
        }
    </style>
</head>

<body>
    <div class="card custom-card shadow-lg d-flex justify-content-center">
        <div class="corner-deco corner-tl"></div>
        <div class="corner-deco corner-br"></div>

        <div class="profile"></div>

        <div class="row justify-content-center">
            <div style="width: 300px;">
                <h1>SHAVEE KULARATHNA</h1>
            </div>
        </div>

        <a href="tel:+94763501979" class="contact-info mt-3">+94 76 350 1979</a>

        <div class="text-center">
            <a href="mailto:shavee@lemuriaa.com" class="email">shavee@lemuriaa.com</a>
        </div>

        <div class="text-center mt-2">
            <span class="username">@shavee_kularathne</span>
        </div>

        <div class="divider"></div>

        <h3 class="section-title">Facebook Pages</h3>

        <div class="facebook-pages">
            <div class="page-card">
                <div class="page-header">
                    <img src="logo_img/client_logo/shavee-l1.jpg" alt="NULLITY OF THE MIND Logo">
                    <h4 onclick="window.open('https://www.facebook.com/people/Nullity-Of-The-Mind/61573424006877/?_rdr', '_blank')">NULLITY OF THE MIND</h4>
                </div>
                <div class="qr-container">
                    <div class="qr-code">
                        <div style="width: 84px; height: 84px; background: #eee; display: flex; align-items: center; justify-content: center; font-size: 30px; color: #3b5998;">
                            <img src="gallery_img/client_gallerys/shavee/shavee-g1.png" alt="">
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)" class="share-btn" onclick="navigator.share({url: 'https://www.facebook.com/people/Nullity-Of-The-Mind/61573424006877/?_rdr', text: 'Check out NULLITY OF THE MIND!'})">
                    <i class="fas fa-share"></i> Share
                </a>
            </div>

            <div class="page-card">
                <div class="page-header">
                    <img src="logo_img/client_logo/shavee-l2.jpg" alt="LET US BREATHE Logo">
                    <h4 onclick="window.open('https://www.facebook.com/profile.php?id=61575860128234', '_blank')">LET US BREATHE</h4>
                </div>
                <div class="qr-container">
                    <div class="qr-code">
                        <div style="width: 84px; height: 84px; background: #eee; display: flex; align-items: center; justify-content: center; font-size: 30px; color: #3b5998;">
                            <img src="gallery_img/client_gallerys/shavee/shavee-g2.png" alt="">
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)" class="share-btn" onclick="navigator.share({url: 'https://www.facebook.com/profile.php?id=61575860128234', text: 'Check out LET US BREATHE!'})">
                    <i class="fas fa-share"></i> Share
                </a>
            </div>

            <div class="page-card">
                <div class="page-header">
                    <img src="logo_img/client_logo/shavee-l3.jpg" alt="THE BLOSSOM ISLET Logo">
                    <h4 onclick="window.open('https://www.facebook.com/profile.php?id=61575903753879', '_blank')">THE BLOSSOM ISLET</h4>
                </div>
                <div class="qr-container">
                    <div class="qr-code">
                        <div style="width: 84px; height: 84px; background: #eee; display: flex; align-items: center; justify-content: center; font-size: 30px; color: #3b5998;">
                            <img src="gallery_img/client_gallerys/shavee/shavee-g3.png" alt="">
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)" class="share-btn" onclick="navigator.share({url: 'https://www.facebook.com/profile.php?id=61575903753879', text: 'Check out THE BLOSSOM ISLET!'})">
                    <i class="fas fa-share"></i> Share
                </a>
            </div>

            <div class="page-card">
                <div class="page-header">
                    <img src="logo_img/client_logo/shavee-l4.jpg" alt="Y NOT US Logo">
                    <h4 onclick="window.open('https://www.facebook.com/profile.php?id=61575936062420&mibextid=wwXIfr&rdid=yENByLVHd7k72bV0&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1HCsnMERuc%2F%3Fmibextid%3DwwXIfr#', '_blank')">Y NOT US</h4>
                </div>
                <div class="qr-container">
                    <div class="qr-code">
                        <div style="width: 84px; height: 84px; background: #eee; display: flex; align-items: center; justify-content: center; font-size: 30px; color: #3b5998;">
                            <img src="gallery_img/client_gallerys/shavee/shavee-g4.png" alt="">
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)" class="share-btn" onclick="navigator.share({url: 'https://www.facebook.com/profile.php?id=61575936062420&mibextid=wwXIfr&rdid=yENByLVHd7k72bV0&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1HCsnMERuc%2F%3Fmibextid%3DwwXIfr#', text: 'Check out Y NOT US!'})">
                    <i class="fas fa-share"></i> Share
                </a>
            </div>

            <div class="page-card" style="grid-column: span 2; max-width: 300px; margin: 0 auto;">
                <div class="page-header">
                    <img src="logo_img/client_logo/shavee-l5.jpg" alt="HELLENIC LEMURIAA Logo">
                    <h4 onclick="window.open('https://www.facebook.com/profile.php?id=61575552462382&mibextid=wwXIfr&rdid=T9oV3EL4mFDg32p9&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F16WPe6GkMY%2F%3Fmibextid%3DwwXIfr#', '_blank')">HELLENIC LEMURIAA</h4>
                </div>
                <div class="qr-container">
                    <div class="qr-code">
                        <div style="width: 84px; height: 84px; background: #eee; display: flex; align-items: center; justify-content: center; font-size: 30px; color: #3b5998;">
                            <img src="gallery_img/client_gallerys/shavee/shavee-g5.png" alt="">
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)" class="share-btn" onclick="navigator.share({url: 'https://www.facebook.com/profile.php?id=61575552462382&mibextid=wwXIfr&rdid=T9oV3EL4mFDg32p9&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F16WPe6GkMY%2F%3Fmibextid%3DwwXIfr#', text: 'Check out HELLENIC LEMURIAA!'})">
                    <i class="fas fa-share"></i> Share
                </a>
            </div>
        </div>

        <div class="save-contact-container">
            <button class="btn-contact" onclick="generateVCF()">
                <i class="fas fa-address-card"></i> Save to Contacts
            </button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        async function generateVCF() {
            const contactData = {
                firstName: "Shavee",
                lastName: "Kularathna",
                title: "Business Professional",
                phoneMobile: "+94763501979",
                email: "shavee@lemuriaa.com",
                website: "https://lemuriaa.com",
                note: "Connect with me on social media: @shavee_kularathne",
                profileImage: "https://tapilinq.com/profile_img/client_profile/shavee-p.jpeg"
            };

            const toBase64 = async (url) => {
                try {
                    const response = await fetch(url);
                    const blob = await response.blob();
                    return new Promise((resolve, reject) => {
                        const reader = new FileReader();
                        reader.onloadend = () => resolve(reader.result.split(',')[1]);
                        reader.onerror = reject;
                        reader.readAsDataURL(blob);
                    });
                } catch (error) {
                    console.error("Failed to load image for VCF:", error);
                    return '';
                }
            };

            let photoBase64 = '';
            try {
                photoBase64 = await toBase64(contactData.profileImage);
            } catch (error) {
                console.error("Image conversion failed:", error);
            }

            let vcfLines = [
                "BEGIN:VCARD",
                "VERSION:3.0",
                `FN:${contactData.firstName} ${contactData.lastName}`,
                `N:${contactData.lastName};${contactData.firstName};;;`,
            ];

            if (contactData.title) vcfLines.push(`TITLE:${contactData.title}`);
            if (contactData.phoneMobile) vcfLines.push(`TEL;TYPE=CELL:${contactData.phoneMobile}`);
            if (contactData.email) vcfLines.push(`EMAIL:${contactData.email}`);
            if (contactData.website) vcfLines.push(`URL:${contactData.website}`);
            if (contactData.note) vcfLines.push(`NOTE:${contactData.note}`);
            if (photoBase64) {
                vcfLines.push(`PHOTO;ENCODING=b;TYPE=JPEG:${photoBase64}`);
            }

            vcfLines.push("END:VCARD");

            const vcfContent = vcfLines.join('\n');

            const blob = new Blob([vcfContent], {
                type: 'text/vcard'
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `Shavee_Kularathna.vcf`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);

            alert("Contact information has been saved. You can now add Shavee to your contacts.");
        }
    </script>
</body>

</html>