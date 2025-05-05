<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Infive</title>
  <style>
    /* Animations */
    @keyframes typing {
      from { width: 0; }
    }

    @keyframes blink {
      50% { border-color: transparent; }
    }

    @keyframes colorChange {
      0% { color: #4CAF50; }
      20% { color: #2196F3; }
      40% { color: #9C27B0; }
      60% { color: #FF5722; }
      80% { color: #E91E63; }
      100% { color: #4CAF50; }
    }

    body {
      margin: 0;
      padding: 0;
      overflow: hidden;
      font-family: Arial, sans-serif;
      color: white;
    }

    /* Background Video */
    .video-bg {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      z-index: -1;
      overflow: hidden;
    }

    .video-bg video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .video-overlay {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.3);
    }

    /* Main Content */
    .content {
      position: relative;
      z-index: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      padding: 0 20px;
      text-align: left;
    }

    .card-box {
      max-width: 1000px;
    }

    .card-box img {
      height: 60px;
      width: auto;
      margin-bottom: 20px;
    }

    .card-title {
      font-size: 6vw;
      font-weight: 600;
      font-family: 'Roboto', sans-serif;
    }

    .card-subtitle {
      font-size: 4.5vw;
      font-weight: 300;
      font-family: 'Roboto', sans-serif;
      margin-top: -20px;
      padding-bottom: 30px;
    }

    .typing-demo {
      font-family: 'Brush Script MT', cursive;
      font-size: 4vw;
      white-space: nowrap;
      overflow: hidden;
      border-right: 3px solid;
      animation:
        typing 3s steps(22),
        blink .5s step-end infinite alternate,
        colorChange 8s infinite;
    }

    .buttons {
      margin-top: 20px;
    }

    .buttons a {
      display: inline-block;
      background: #4CAF50;
      color: white;
      padding: 10px 20px;
      margin: 0 10px 10px 0;
      text-decoration: none;
      border-radius: 5px;
      font-size: 16px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .card-box {
        text-align: center;
      }

      .card-title {
        font-size: 12vw;
      }

      .card-subtitle {
        font-size: 9vw;
        margin-top: -10px;
      }

      .typing-demo {
        font-size: 6vw;
      }

      .buttons a {
        font-size: 14px;
        padding: 8px 16px;
      }

      .card-box img {
        height: 50px;
      }
    }
  </style>
  <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
</head>
<body>

  <!-- Video Background -->
  <div class="video-bg">
    <video autoplay loop muted playsinline>
      <source src="NFC.mp4" type="video/mp4" />
    </video>
    <div class="video-overlay"></div>
  </div>

  <!-- Content -->
  <div class="content">
    <div class="card-box">
      <img src="Images/infive.png" alt="Infive Logo">
      <p class="card-title">Digital</p>
      <p class="card-subtitle">Business<br>Card</p>
      <div class="typing-demo">One Card For Everything....</div>
      <div class="buttons">
        <a href="shop">Shop More</a>
        <a href="https://wa.me/+94714994579">Contact Us</a>
      </div>
    </div>
  </div>

</body>
</html>
