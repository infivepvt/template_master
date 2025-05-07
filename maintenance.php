<?php
// Set HTTP response code to 503 (Service Unavailable)
http_response_code(503);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Under Maintenance</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #f72585;
            --light-color: #f8f9fa;
            --dark-color: #212529;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: var(--dark-color);
            text-align: center;
            padding: 0;
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            line-height: 1.6;
        }

        .maintenance-container {
            max-width: 650px;
            margin: 20px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            animation: fadeIn 0.8s ease-out;
        }

        .maintenance-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        }

        h1 {
            color: var(--primary-color);
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 1.2rem;
        }

        .company-logo {
            max-width: 200px;
            margin: 0 auto 30px;
            display: block;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
            transition: all 0.3s ease;
        }

        .company-logo:hover {
            transform: scale(1.05);
        }

        .progress-container {
            width: 100%;
            height: 8px;
            background: #e9ecef;
            border-radius: 4px;
            margin: 30px 0;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            width: 65%;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 4px;
            animation: progressAnimation 2s ease-in-out infinite;
            background-size: 200% 100%;
        }

        .countdown {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--accent-color);
            margin: 20px 0;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--light-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .social-link:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            color: var(--accent-color);
        }

        .maintenance-icon {
            font-size: 4rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            animation: bounce 2s infinite;
        }

        .follow-us {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-20px);
            }

            60% {
                transform: translateY(-10px);
            }
        }

        @keyframes progressAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Responsive design */
        @media (max-width: 600px) {
            .maintenance-container {
                padding: 30px 20px;
            }

            h1 {
                font-size: 2rem;
            }

            .company-logo {
                max-width: 150px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="maintenance-container">

    <img src="Images/infive.png" alt="Company Logo" class="company-logo">
        <div class="maintenance-icon">
            <i class="fas fa-tools"></i>
        </div>
        <h1>Under Maintenance</h1>
        <p>We're currently performing scheduled maintenance to improve your experience.</p>
        <p>Our team is working hard to bring you a better, faster, and more reliable service.</p>

        <div class="progress-container">
            <div class="progress-bar"></div>
        </div>

        <div class="countdown">
            <i class="fas fa-clock"></i> Estimated completion: <span id="countdown">48:00:00</span>
        </div>

        <p>We apologize for any inconvenience and appreciate your patience.</p>

    </div>

    <script>
        // Countdown timer for 48 hours (2 days)
        function startCountdown() {
            let totalHours = 48;
            let hours = totalHours;
            let minutes = 0;
            let seconds = 0;

            const countdownElement = document.getElementById('countdown');

            const interval = setInterval(() => {
                if (seconds === 0) {
                    if (minutes === 0) {
                        if (hours === 0) {
                            clearInterval(interval);
                            countdownElement.innerHTML = "Maintenance Complete!";
                            return;
                        }
                        hours--;
                        minutes = 59;
                    } else {
                        minutes--;
                    }
                    seconds = 59;
                } else {
                    seconds--;
                }

                // Calculate days if more than 24 hours
                const displayHours = hours % 24;
                const days = Math.floor(hours / 24);

                const formattedDays = days > 0 ? `${days}d ` : '';
                const formattedHours = displayHours.toString().padStart(2, '0');
                const formattedMinutes = minutes.toString().padStart(2, '0');
                const formattedSeconds = seconds.toString().padStart(2, '0');

                countdownElement.innerHTML = `${formattedDays}${formattedHours}:${formattedMinutes}:${formattedSeconds}`;
            }, 1000);
        }

        // Start the countdown when page loads
        window.onload = startCountdown;
    </script>
</body>

</html>