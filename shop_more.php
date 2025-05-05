<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Design Gallery</title>
    <link rel="icon" type="image/x-icon" href="Images/Logo1.ico">
    <style>
        :root {
            --card-width: 200px;
            --gap-size: 1.5rem;
        }

        body {
            font-family: sans-serif;
            background: #f9f9f9;
            margin: 0;
            padding: 1rem;
            min-height: 100vh;
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(var(--card-width), 1fr));
            gap: var(--gap-size);
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }

        .design-card {
            background: white;
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .design-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        .design-title {
            font-weight: bold;
            margin-bottom: 0.8rem;
            font-size: clamp(2rem, 1.5vw, 1.2rem);
            color: transparent;
            background: linear-gradient(90deg, #333, #ffd700, #333, #ffd700, #333);
            background-size: 200% auto;
            -webkit-background-clip: text;
            background-clip: text;
            animation: shine 3s linear infinite, reveal 1.5s ease-in-out forwards;
            overflow: hidden;
            white-space: nowrap;
        }

        /* Shiny foil effect */
        @keyframes shine {
            to {
                background-position: 200% center;
            }
        }

        /* Letter-by-letter reveal */
        @keyframes reveal {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        /* If you want individual letters to appear one by one */
        .design-title span {
            display: inline-block;
            opacity: 0;
            transform: translateY(20px);
            animation: letterAppear 0.5s ease forwards;
        }

        @keyframes letterAppear {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .design-image-container {
            width: 100%;
            aspect-ratio: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 0.5rem;
        }

        .design-image {
            width: 100%;
            height: auto;
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            border-radius: 8px;
        }

        .qr-container {
            margin-top: auto;
            padding-top: 0.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .qr-image {
            width: 80px;
            height: 80px;
            border-radius: 8px;
        }

        .scan-text {
            font-size: clamp(0.75rem, 1vw, 0.85rem);
            margin-top: 0.3rem;
            color: #666;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            :root {
                --card-width: 100%;
                --gap-size: 1rem;
            }

            .gallery-container {
                grid-template-columns: 1fr;
                padding: 0.5rem;
            }

            .design-card {
                padding: 1rem;
                flex-direction: column;
                text-align: center;
            }

            .design-image-container {
                aspect-ratio: unset;
            }

            .qr-image {
                width: 70px;
                height: 70px;
            }
        }

        @media (max-width: 480px) {
            :root {
                --gap-size: 0.75rem;
            }

            body {
                padding: 0.5rem;
            }

            .design-title {
                font-size: 1rem;
            }

            .qr-image {
                width: 60px;
                height: 60px;
            }

            .scan-text {
                font-size: 0.75rem;
            }
        }
    </style>
</head>

<body>

    <div class="gallery-container">
        <!-- Design 1 -->
        <div class="design-card">
            <div class="design-title">Design 1</div>
            <div class="design-image-container">
                <!-- template_pic -->
                <a href="https://tapilinq.com/template1">
                    <img src="Images/template_pic/template1.png" alt="Design 1" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/t1.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

        <!-- Design 2 -->
        <div class="design-card">
            <div class="design-title">Design 2</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template2">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template2.png" alt="Design 2" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/t1.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

        <!-- Design 3 -->
        <div class="design-card">
            <div class="design-title">Design 3</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template3">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template3.png" alt="Design 3" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/t1.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

        <!-- Design 4 -->
        <div class="design-card">
            <div class="design-title">Design 4</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template4">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template4.png" alt="Design 4" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/t1.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

        <!-- Design 5 -->
        <div class="design-card">
            <div class="design-title">Design 5</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template5">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template5.png" alt="Design 5" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/t1.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

        <!-- Design 6 -->
        <div class="design-card">
            <div class="design-title">Design 6</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template6">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template6.png" alt="Design 6" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/t1.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

        <!-- Design 7 -->
        <div class="design-card">
            <div class="design-title">Design 7</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template7">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template7.png" alt="Design 7" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/t1.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

        <!-- Design 8 -->
        <div class="design-card">
            <div class="design-title">Design 8</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template8">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template8.png" alt="Design 8" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/t1.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

        <!-- Design 9 -->
        <div class="design-card">
            <div class="design-title">Design 9</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template9">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template9.png" alt="Design 9" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/t1.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

        <!-- Design 10 -->
        <div class="design-card">
            <div class="design-title">Design 10</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template10">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template10.png" alt="Design 10" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/t1.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

        <!-- Design 11 -->
        <div class="design-card">
            <div class="design-title">Design 11</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template11">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template11.png" alt="Design 11" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/t1.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

        <!-- Design 12 -->
        <div class="design-card">
            <div class="design-title">Design 12</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template12">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template12.png" alt="Design 12" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/t1.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

        <!-- Design 13 -->
        <div class="design-card">
            <div class="design-title">Design 13</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template13">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template13.png" alt="Design 13" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/t1.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

        <!-- Design 14 -->
        <div class="design-card">
            <div class="design-title">Design 14</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template14">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template14.png" alt="Design 14" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/t1.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

        <!-- Design 15 -->
        <div class="design-card">
            <div class="design-title">Design 15</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template15">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template15.png" alt="Design 15" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/t1.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>
        <!-- Design 16 -->
        <div class="design-card">
            <div class="design-title">Design 16</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template16">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template16.png" alt="Design 15" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/t1.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

    </div>

    <script>
        document.querySelectorAll('.design-title').forEach(title => {
            title.innerHTML = title.textContent.split('').map(char =>
                `<span style="animation-delay: ${0.1 * index}s">${char}</span>`
            ).join('');
        });
    </script>
</body>

</html>