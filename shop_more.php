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
                <img src="Images/template_qr/tq1.png" alt="QR Code" class="qr-image" />
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
                <img src="Images/template_qr/tq2.png" alt="QR Code" class="qr-image" />
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
                <img src="Images/template_qr/tq3.png" alt="QR Code" class="qr-image" />
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
                <img src="Images/template_qr/tq4.png" alt="QR Code" class="qr-image" />
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
                <img src="Images/template_qr/tq5.png" alt="QR Code" class="qr-image" />
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
                <img src="Images/template_qr/tq6.png" alt="QR Code" class="qr-image" />
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
                <img src="Images/template_qr/tq7.png" alt="QR Code" class="qr-image" />
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
                <img src="Images/template_qr/tq8.png" alt="QR Code" class="qr-image" />
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
                <img src="Images/template_qr/tq9.png" alt="QR Code" class="qr-image" />
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
                <img src="Images/template_qr/tq10.png" alt="QR Code" class="qr-image" />
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
                <img src="Images/template_qr/tq11.png" alt="QR Code" class="qr-image" />
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
                <img src="Images/template_qr/tq12.png" alt="QR Code" class="qr-image" />
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
                <img src="Images/template_qr/tq13.png" alt="QR Code" class="qr-image" />
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
                <img src="Images/template_qr/tq14.png" alt="QR Code" class="qr-image" />
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
                <img src="Images/template_qr/tq15.png" alt="QR Code" class="qr-image" />
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
                <img src="Images/template_qr/tq16.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

        <!-- Design 17 -->
        <div class="design-card">
            <div class="design-title">Design 17</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template17">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template17.png" alt="Design 17" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq17.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

        <!-- Design 18 -->
        <div class="design-card">
            <div class="design-title">Design 18</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template18">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template18.jpg" alt="Design 18" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq18.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

        <!-- Design 19 -->
        <div class="design-card">
            <div class="design-title">Design 19</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template19">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template19.png" alt="Design 19" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq19.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>
        <!-- Design 20 -->
        <div class="design-card">
            <div class="design-title">Design 20</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template20">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template20.jpg" alt="Design 20" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq20.jpeg" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>
         <!-- Design 21 -->
        <div class="design-card">
            <div class="design-title">Design 21</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template21">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template21.jpg" alt="Design 21" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq21.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>

         <!-- Design 22 -->
        <div class="design-card">
            <div class="design-title">Design 22</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template22">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template22.png" alt="Design 22" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq22.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>    

        <!-- Design 23 -->
        <div class="design-card">
            <div class="design-title">Design 23</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template23">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template23.png" alt="Design 23" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq23.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>    

        <!-- Design 24 -->
        <div class="design-card">
            <div class="design-title">Design 24</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template24">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template24.png" alt="Design 24" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq24.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>    

        <!-- Design 25 -->
        <div class="design-card">
            <div class="design-title">Design 25</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template25">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template25.png" alt="Design 25" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq25.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>    

        <!-- Design 26 -->
        <div class="design-card">
            <div class="design-title">Design 26</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template26">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template26.png" alt="Design 26" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq26.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>    

        <!-- Design 27 -->
        <div class="design-card">
            <div class="design-title">Design 27</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template27">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template27.png" alt="Design 27" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq27.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>  
        
         <!-- Design 28 -->
        <div class="design-card">
            <div class="design-title">Design 28</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template28">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template28.png" alt="Design 28" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq28.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>  

         <!-- Design 29 -->
        <div class="design-card">
            <div class="design-title">Design 29</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template29">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template29.png" alt="Design 29" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq29.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>  
        <!-- Design 30 -->
        <div class="design-card">
            <div class="design-title">Design 30</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template30">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template30.png" alt="Design 30" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq30.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>  
        <!-- Design 31 -->
        <div class="design-card">
            <div class="design-title">Design 31</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template31">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template31.png" alt="Design 31" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq31.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>  
        <!-- Design 32 -->
        <div class="design-card">
            <div class="design-title">Design 32</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template32">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template32.png" alt="Design 32" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq32.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>  
        <!-- Design 33 -->
        <div class="design-card">
            <div class="design-title">Design 33</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template33">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template33.png" alt="Design 33" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq33.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>  

        <!-- Design 34 -->
        <div class="design-card">
            <div class="design-title">Design 34</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template34">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template34.png" alt="Design 34" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq34.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>  

         <!-- Design 35 -->
        <div class="design-card">
            <div class="design-title">Design 35</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template35">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template35.png" alt="Design 35" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq35.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>  
         <!-- Design 36 -->
        <div class="design-card">
            <div class="design-title">Design 36</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template36">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template36.png" alt="Design 36" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq36.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>  
         <!-- Design 37 -->
        <div class="design-card">
            <div class="design-title">Design 37</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template37">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template37.png" alt="Design 37" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq37.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>  
         <!-- Design 38 -->
        <div class="design-card">
            <div class="design-title">Design 38</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template38">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template38.png" alt="Design 38" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq38.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>  
         <!-- Design 39 -->
        <div class="design-card">
            <div class="design-title">Design 39</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template39">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template39.png" alt="Design 39" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq39.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div> 
         <!-- Design 40 -->
        <div class="design-card">
            <div class="design-title">Design 40</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template40">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template40.png" alt="Design 40" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq40.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>  
        <!-- Design 41 -->
        <div class="design-card">
            <div class="design-title">Design 41</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template41">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template41.png" alt="Design 41" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq41.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>  
        <!-- Design 42 -->
        <div class="design-card">
            <div class="design-title">Design 42</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template42">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template42.png" alt="Design 42" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq42.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>
        <!-- Design 43 -->
        <div class="design-card">
            <div class="design-title">Design 43</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template43">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template43.png" alt="Design 43" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq43.png" alt="QR Code" class="qr-image" />
                <div class="scan-text">Scan with your mobile</div>
            </div>
        </div>  
         <!-- Design 44 -->
        <div class="design-card">
            <div class="design-title">Design 44</div>
            <div class="design-image-container">
                <a href="https://tapilinq.com/template44">
                    <!-- template_pic -->
                    <img src="Images/template_pic/template44.png" alt="Design 44" class="design-image" />
                </a>
            </div>
            <div class="qr-container">
                <!-- template_qr -->
                <img src="Images/template_qr/tq44.png" alt="QR Code" class="qr-image" />
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