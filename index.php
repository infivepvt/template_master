<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infive</title>
    <style>
        
        @keyframes typing {
            from { width: 0 }
        }
            
        @keyframes blink {
            50% { border-color: transparent }
        }

        .typing-demo {
            width: 22ch;
            animation: typing 3s steps(22), 
                       blink .5s step-end infinite alternate,
                       colorChange 8s infinite;
            white-space: nowrap;
            overflow: hidden;
            border-right: 3px solid;
            font-family: 'Brush Script MT', cursive;
            font-size: 50px;
            /* margin: 0 auto;
            padding: 10px 0;
            line-height: 1.3; */
        }
        
        @keyframes typing {
            from { width: 0 }
        }
            
        @keyframes blink {
            50% { border-color: transparent }
        }
        
        @keyframes colorChange {
            0% { color: #4CAF50; }   /* Green */
            20% { color: #2196F3; }  /* Blue */
            40% { color: #9C27B0; }  /* Purple */
            60% { color: #FF5722; }  /* Orange */
            80% { color: #E91E63; }  /* Pink */
            100% { color: #4CAF50; } /* Back to green */
        }
    </style>
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
</head>
<body style="margin: 0; padding: 0; overflow: hidden; font-family: Arial, sans-serif;">

    <!-- Fullscreen Video Background -->
    <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; overflow: hidden;">
        <video autoplay loop muted playsinline style="width: 100%; height: 100%; object-fit: cover;">
            <source src="NFC.mp4" type="video/mp4">
        </video>
        <!-- Optional: Dark overlay for better text contrast -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.3);"></div>
    </div>

    <!-- Business Card Content (Centered) -->
    <div style="position: relative; z-index: 1; display: flex; justify-content: center; align-items: center; height: 100vh; text-align: left; color: white; padding: 0px; float: left;padding-left: 80px;">
        <div>
            <img src="Images/infive.png" height="80px" width="auto" style="margin-bottom: -140px; margin-left: 280px; ">
            <p style="font-size: 160px; font-weight: 600; font-family: 'Roboto',sans-serif; margin-left: 280px;">Digital</p><br>
            <p style="font-size: 117px; font-weight: 300; font-family: 'Roboto',sans-serif; margin-top: -180px; padding-bottom: 100px;margin-left: 280px;">Business<br>Card</p><br>
            <div class="typing-container" style="font-size: 60px; font-weight: 300; font-family: 'Brush Script MT', cursive; margin-top: -200px; padding-bottom: 90px;margin-left: 280px;">
                <div class="typing-demo">One Card For Everything....</div>
            </div>
            <!-- Optional: Add clickable buttons -->
            <div style="margin-top: -40px;margin-left: 280px;">
                <a href="shop_more" style="display: inline-block; background: #4CAF50; color: white; padding: 10px 20px; margin: 0 10px; text-decoration: none; border-radius: 5px;">Shop More</a>
                <a href="https://wa.me/+94714994579" 
                style="display: inline-block; background: #4CAF50; color: white; padding: 10px 20px; margin: 0 10px; text-decoration: none; border-radius: 5px;">
                Contact Us</a>
                <!-- <a href="login" style="display: inline-block; background: #4CAF50; color: white; padding: 10px 20px; margin: 0 10px; text-decoration: none; border-radius: 5px;">Login</a> -->
            </div>
        </div>
    </div>

</body>
</html>
