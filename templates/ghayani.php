<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Allison&family=Dancing+Script:wght@400..700&family=Alumni+Sans+Pinstripe:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        * {
            font-family: "Roboto", sans-serif;
        }

        .bg-1 {
            background-image: url('banner_img/client_banner/ghayani-b.jpg');
            width: 100%;
            aspect-ratio: 16/9;
            background-size: cover;
            background-position: center;
        }

        .profile {
            width: 160px;
            aspect-ratio: 1/1;
            background-image: url('profile_img/client_profile/ghayani-p.png');
            background-size: cover;
            border: solid 5px #e3d1c6;
            position: absolute;
            left: 50%;
            transform: translate(-50%, 80%);
        }

        .box-1 {
            margin-top: 110px;
        }

        .txt1 {
            font-family: "Allison", cursive;
            font-size: 57px;
            color: #e3d1c6;
            margin-right: 10px;
            margin-top: -12px;
        }

        .txt2 {
            font-family: "Aboreto", sans-serif;
            font-size: 36px;
        }

        .txt3 {
            font-family: "Aboreto", sans-serif;
            font-size: 11px;
            font-weight: bold;
        }

        .line1 {
            width: 80%;
            height: 2px;
            background-color: black;
            margin-top: 12px;
        }

        .box-2 {
            width: 45px;
            height: 45px;
            background-color: #e3d1c6;
            border-radius: 50px;
        }

        .txt4 {
            font-family: "Share Tech Mono", sans-serif;
            font-size: 13px;
        }

        .line2 {
            width: 100%;
            height: 8px;
        }

        .txt5 {
            color: #c6a373;
            font-family: "Alumni Sans Pinstripe", sans-serif;
            font-size: 18px;
            font-weight: bold;
        }

        .box-3 {
            width: 35px;
            height: 35px;
            background-color: #e3d1c6;
            border-radius: 50px;
            text-decoration: none;
        }

        .txt6 {
            font-size: 8px;
            font-weight: bold;
            margin-left: 5px;
        }

        .custom-save-button {
            background: linear-gradient(90deg, rgb(32, 32, 32), rgb(224, 195, 31));
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
            background: linear-gradient(90deg, rgb(0, 0, 0), rgb(189, 163, 16));
        }

        @media (min-width: 420px) {
            .profile {
                transform: translate(-50%, 100%);
            }
        }

        @media (min-width: 490px) {
            .profile {
                transform: translate(-50%, 120%);
            }
        }

        @media (min-width: 550px) {
            .profile {
                transform: translate(-50%, 140%);
            }
        }

        @media (min-width: 760px) {
            .profile {
                transform: translate(-50%, 120%);
            }
        }

        @media (min-width: 1200px) {
            .profile {
                transform: translate(-50%, 150%);
            }
        }

        @media (min-width: 1400px) {
            .profile {
                transform: translate(-50%, 180%);
            }
        }

        /* gallery */

    .gallery-section {
      padding: 20px;
      background-color: #fff;
    }

    .gallery-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 0;
      color: #000;
      cursor: pointer;
    }

    .gallery-title {
      font-size: 1.2rem;
      font-weight: bold;
    }

    .gallery-toggle {
      font-size: 1.2rem;
    }

    .gallery-container {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 10px;
      margin-top: 10px;
    }

    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 5px;
      aspect-ratio: 1;
      cursor: pointer;
    }

    .gallery-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s;
    }

    .gallery-item:hover .gallery-image {
      transform: scale(1.05);
    }

    /* Lightbox styles */
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
    }

    .lightbox-image {
      max-width: 100%;
      max-height: 80vh;
      object-fit: contain;
    }

    .lightbox-close {
      position: absolute;
      top: 20px;
      right: 20px;
      color: white;
      font-size: 30px;
      cursor: pointer;
    }

    .lightbox-nav {
      position: absolute;
      width: 100%;
      display: flex;
      justify-content: space-between;
      padding: 0 20px;
      box-sizing: border-box;
    }

    .lightbox-nav button {
      background: none;
      border: none;
      color: white;
      font-size: 30px;
      cursor: pointer;
    }

    .gallery-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .gallery-title {
            text-align: center;
            font-family: Arial, sans-serif;
            color: #333;
            margin-bottom: 30px;
        }

        /*accordian*/
        .accordion {
            background-color: #e3d1c6;
            color: #000;
            cursor: pointer;
            padding: 10px;
            width: 100%;
            border: none;
            text-align: center;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active, .accordion:hover {
            background-color: #e3d1c6; 
        }

        .panel {
            padding: 5px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
       
    </style>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="row justify-content-center">
                    <div class="bg-1"></div>
                    <div class="profile" id="profileImageContainer"></div>
                    <div class="d-inline-flex justify-content-center align-items-start box-1 gap-2">
                        <h2 class="txt1">Gayana</h2>
                        <div>
                            <h2 class="txt2">Harshani</h2>
                            <h2 class="txt3">Managing Director <span class="txt6">DsBM CPM</span></h2>
                        </div>
                    </div>
                    <div class="line1"></div>

                    <div class="col-12 mt-4">
                        <div class="row align-items-start">
                            <div class="col-6 d-flex justify-content-center flex-column align-items-center">
                                <div class="box-2 d-flex justify-content-center align-items-center">
                                    <i class="fas fa-phone-alt text-black fs-3" style="transform: scaleX(-1);"></i>
                                </div>
                                <span class="txt4 mt-3 text-center">0779927274</span>
                            </div>
                            <div class="col-6 d-flex justify-content-center flex-column align-items-center">
                                <div class="box-2 d-flex justify-content-center align-items-center">
                                    <i class="far fa-envelope text-black fs-3" style="transform: scaleX(-1);"></i>
                                </div>
                                <span class="txt4 mt-3 text-center">gayanaharshani14</span>
                                <span class="txt4 text-center">@gmail.com</span>
                            </div>
                        </div>
                        <div class="row mt-3 align-items-start">
                            <div class="col-6 d-flex justify-content-center flex-column align-items-center">
                                <div class="box-2 d-flex justify-content-center align-items-center">
                                    <i class="fas fa-map-marker-alt text-black fs-3" style="transform: scaleX(-1);"></i>
                                </div>
                                <span class="txt4 mt-3 text-center">No. 24,Wijerama Mawatha, Colombo 07</span>
                            </div>
                            <div class="col-6 d-flex justify-content-center flex-column align-items-center">
                                <div class="box-2 d-flex justify-content-center align-items-center">
                                    <i class="bi bi-globe text-black fs-3"></i>
                                </div>
                                <span class="txt4 mt-3 text-center">www.ghaniskin.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>

    <!-- Hidden image element for processing -->
    <img id="profileImageSrc" src="profile_img/client_profile/ghayani-p.png" style="display: none;">

    <!-- gallery -->
    <div class="gallery-section">
      <div class="gallery-header" onclick="toggleGallery()">
        <div class="gallery-title">Gallery</div>
        <div class="gallery-toggle" id="galleryToggle">
          <i class="fas fa-minus"></i>
        </div>
      </div>
      <div class="gallery-container" id="galleryContainer">
        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/ghayani/ghayani-g1.jpeg')">
          <img src="gallery_img/client_gallerys/ghayani/ghayani-g1.jpeg" alt="Gallery Image 1" class="gallery-image">
        </div>
        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/ghayani/ghayani-g2.jpeg')">
          <img src="gallery_img/client_gallerys/ghayani/ghayani-g2.jpeg" alt="Gallery Image 2" class="gallery-image">
        </div>
        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/ghayani/ghayani-g3.jpeg')">
          <img src="gallery_img/client_gallerys/ghayani/ghayani-g3.jpeg" alt="Gallery Image 3" class="gallery-image">
        </div>
        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/ghayani/ghayani-g4.jpeg')">
          <img src="gallery_img/client_gallerys/ghayani/ghayani-g4.jpeg" alt="Gallery Image 4" class="gallery-image">
        </div>
        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/ghayani/ghayani-g5.jpeg')">
          <img src="gallery_img/client_gallerys/ghayani/ghayani-g5.jpeg" alt="Gallery Image 5" class="gallery-image">
        </div>
        <div class="gallery-item" onclick="openLightbox('gallery_img/client_gallerys/ghayani/ghayani-g6.jpeg')">
          <img src="gallery_img/client_gallerys/ghayani/ghayani-g6.jpeg" alt="Gallery Image 6" class="gallery-image">
        </div>
      </div>
    </div>

    <!-- Lightbox HTML -->
    <div class="lightbox" id="lightbox">
      <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
      <div class="lightbox-nav">
        <button onclick="changeImage(-1)">&#10094;</button>
        <button onclick="changeImage(1)">&#10095;</button>
      </div>
      <div class="lightbox-content">
        <img id="lightbox-image" class="lightbox-image" src="" alt="">
      </div>
    </div>
            <!-- <button class="custom-save-button" onclick="downloadVCF()">
                <i class="fas fa-save"></i>
                SAVE TO CONTACTS
            </button> -->
        </div>

        <!-- <div class="footer">
            <p>All rights reserved</p>
        </div> -->
    </div>

        <!-- video accordian -->
        <p class="text-center" style="font-size:20px; font-weight:600">Our Services</p>
        <button class="accordion" style="margin-bottom:5px">SKIN TREATMENT</button>
        <div class="panel">
        <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2F61575166874096%2Fvideos%2F475297045606333%2F&show_text=false&width=267&t=0" 
            width="100%" height="476px" 
            style="border:none;overflow:hidden" 
            scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true">
        </iframe>
        </div>

        <button class="accordion" style="margin-bottom:5px">ACNE TREATMENT</button>
        <div class="panel">
        <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2F61575166874096%2Fvideos%2F3057345454428003%2F&show_text=false&width=267&t=0" 
            width="100%" height="476" 
            style="border:none;overflow:hidden" 
            scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true">
        </iframe>
        </div>

        <button class="accordion" style="margin-bottom:5px">HYDRA FACIAL</button>
        <div class="panel">
        <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Fyureninoshika%2Fvideos%2F2385006285189862%2F&show_text=false&width=267&t=0" 
            width="100%" height="476" 
            style="border:none;overflow:hidden" 
            scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true">
        </iframe>
        </div>

        <button class="accordion" style="margin-bottom:5px">ULTRASONIC(FACE) THERAPY</button>
        <div class="panel">
        <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2F61575166874096%2Fvideos%2F1047531757268113%2F&show_text=false&width=267&t=0" 
            width="100%" height="476" 
            style="border:none;overflow:hidden" 
            scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true">
        </iframe>
        </div>

    <button class="btn w-100 custom-save-button mt-4" onclick="generateVCF()"
        style="font-family: 'Montserrat', sans-serif; font-size:19px; border: 2px solid orange;">
            <img src="Images/Social_Media_Icon/save.png" alt=""
                style="width: 50px; height: 50px; margin-right:25px;">
                SAVE TO CONTACTS
    </button>

    <div class="line2 bg-black mt-4"></div>

    <div class="mt-1 bg-black d-flex flex-column justify-content-center align-items-center py-3">
            <span class="txt5">Connect with me</span>

                <div class="d-flex gap-2 mt-3">
                    <a href="https://www.facebook.com/share/16D4P73nLh/?mibextid=wwXIfr" class="box-3 d-flex justify-content-center align-items-center">
                        <i class="fab fa-facebook text-black fs-6"></i>
                    </a>
                    <a href="https://www.tiktok.com/@ghaniskinaesthatics_07?_t=ZS-8w7fhhOSyRO&_r=1" class="box-3 d-flex justify-content-center align-items-center">
                        <i class="fab fa-tiktok text-black fs-6"></i>
                    </a>
                    <a href="https://www.instagram.com/ghaniskinaesthetics?igsh=bG5rdWs5ZjN5ZDU2" class="box-3 d-flex justify-content-center align-items-center">
                        <i class="fab fa-instagram text-black fs-6"></i>
                    </a>
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
    // Gallery images array
    const galleryImages = [
      'gallery_img/client_gallerys/ghayani/ghayani-g1.jpeg',
      'gallery_img/client_gallerys/ghayani/ghayani-g2.jpeg',
      'gallery_img/client_gallerys/ghayani/ghayani-g3.jpeg',
      'gallery_img/client_gallerys/ghayani/ghayani-g4.jpeg',
      'gallery_img/client_gallerys/ghayani/ghayani-g5.jpeg',
      'gallery_img/client_gallerys/ghayani/ghayani-g6.jpeg',
    ];

    let currentImageIndex = 0;

    function toggleGallery() {
      const galleryContainer = document.getElementById('galleryContainer');
      const galleryToggle = document.getElementById('galleryToggle');

      if (galleryContainer.style.display === 'none') {
        galleryContainer.style.display = 'grid';
        galleryToggle.innerHTML = '<i class="fas fa-minus"></i>';
      } else {
        galleryContainer.style.display = 'none';
        galleryToggle.innerHTML = '<i class="fas fa-plus"></i>';
      }
    }

    // Lightbox functions
    function openLightbox(imageSrc) {
      const lightbox = document.getElementById('lightbox');
      const lightboxImage = document.getElementById('lightbox-image');

      // Find the index of the clicked image
      currentImageIndex = galleryImages.indexOf(imageSrc);

      lightboxImage.src = imageSrc;
      lightbox.style.display = 'flex';
      document.body.style.overflow = 'hidden'; // Prevent scrolling
    }

    function closeLightbox() {
      const lightbox = document.getElementById('lightbox');
      lightbox.style.display = 'none';
      document.body.style.overflow = 'auto'; // Re-enable scrolling
    }

    function changeImage(step) {
      currentImageIndex += step;

      // Wrap around if at beginning or end
      if (currentImageIndex >= galleryImages.length) {
        currentImageIndex = 0;
      } else if (currentImageIndex < 0) {
        currentImageIndex = galleryImages.length - 1;
      }

      document.getElementById('lightbox-image').src = galleryImages[currentImageIndex];
    }

    // Close lightbox when clicking outside the image
    document.getElementById('lightbox').addEventListener('click', function (e) {
      if (e.target === this) {
        closeLightbox();
      }
    });

    // Keyboard navigation
    document.addEventListener('keydown', function (e) {
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


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        async function generateVCF() {
            // Get the profile image element
            const profileImage = document.getElementById('profileImageSrc');
            
            // Wait for the image to load
            if (!profileImage.complete) {
                await new Promise((resolve) => {
                    profileImage.onload = resolve;
                });
            }
            
            // Create canvas and draw image
            const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');
            canvas.width = profileImage.naturalWidth;
            canvas.height = profileImage.naturalHeight;
            ctx.drawImage(profileImage, 0, 0);
            
            // Convert to base64
            const base64Image = canvas.toDataURL('image/jpeg').split(',')[1];
            
            // Contact information
            const contactData = {
                firstName: "Ghayani",
                lastName: "Harshani",
                title: "Managing Director",
                phoneWork: "0779927274",
                phoneMobile: "",
                email: "gayanaharshani14@gmail.com",
                email2: "",
                email3: "",
                website: "www.ghaniskin.com",
                website2: "",
                website3: "",
                address: "No. 24, Wijerama Mawatha, Colombo 07",
                address2: "",
                about: "",
                logo: ""
            };

            // Create VCF content with embedded photo
            const vCardData = `BEGIN:VCARD
VERSION:3.0
FN:${contactData.firstName} ${contactData.lastName}
N:${contactData.lastName};${contactData.firstName};;;
TITLE:${contactData.title}
TEL;TYPE=WORK,VOICE:${contactData.phoneWork}
TEL;TYPE=CELL:${contactData.phoneMobile}
EMAIL:${contactData.email}
EMAIL:${contactData.email2}
EMAIL:${contactData.email3}
URL:${contactData.website}
URL:${contactData.website2}
URL:${contactData.website3}
ADR;TYPE=WORK:;;${contactData.address}
ADR;TYPE=HOME:;;${contactData.address2}
NOTE:${contactData.about}
PHOTO;ENCODING=b;TYPE=JPEG:${base64Image}
LOGO;VALUE=URL:${contactData.logo}
END:VCARD`;

            // Create download link
            const blob = new Blob([vCardData], {
                type: 'text/vcard'
            });
            const url = URL.createObjectURL(blob);

            const a = document.createElement('a');
            a.href = url;
            a.download = `${contactData.firstName}_${contactData.lastName}.vcf`;
            document.body.appendChild(a);
            a.click();

            // Clean up
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        }
    </script>
</body>
</html>