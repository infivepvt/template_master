<?php
// Set page title
$pageTitle = "Payment Required - Account On Hold";

// Contact information
$whatsappNumber = "+94703000082"; // Replace with your WhatsApp number
$supportEmail = "infivellc@gmail.com"; // Replace with your support email
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #343a40;
            line-height: 1.6;
        }
        
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .header h1 {
            color: #dc3545;
            margin-bottom: 10px;
        }
        
        .icon {
            font-size: 60px;
            color: #dc3545;
            margin-bottom: 20px;
        }
        
        .content {
            margin-bottom: 30px;
        }
        
        .content p {
            margin-bottom: 15px;
        }
        
        .contact-options {
            background: #f1f8ff;
            padding: 20px;
            border-radius: 5px;
            margin: 25px 0;
            border-left: 4px solid #007bff;
        }
        
        .contact-options h3 {
            margin-bottom: 15px;
            color: #0056b3;
        }
        
        .contact-method {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            padding: 10px;
            background: white;
            border-radius: 5px;
        }
        
        .contact-icon {
            font-size: 24px;
            margin-right: 15px;
            color: #28a745;
        }
        
        .btn {
            display: inline-block;
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        
        .btn:hover {
            background: #0056b3;
        }
        
        .btn-whatsapp {
            background: #25D366;
            margin-left: 10px;
        }
        
        .btn-whatsapp:hover {
            background: #1da851;
        }
        
        .btn-email {
            background: #6c757d;
            margin-left: 10px;
        }
        
        .btn-email:hover {
            background: #5a6268;
        }
        
        .payment-options {
            background: #fff8f1;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
            border-left: 4px solid #ffc107;
        }
        
        .payment-options h3 {
            margin-bottom: 15px;
            color: #d39e00;
        }
        
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #6c757d;
            font-size: 14px;
        }
        
        @media (max-width: 768px) {
            .container {
                margin: 20px;
                padding: 20px;
            }
            
            .btn {
                display: block;
                width: 100%;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="icon">⚠️</div>
            <h1>Payment Required - Account On Hold</h1>
            <p>Your account access is currently restricted due to unpaid dues.</p>
        </div>
        
        <div class="content">
            <p>Dear Customer,</p>
            <p>We notice that your payment is overdue. To restore full access to your account, please complete your payment at the earliest.</p>
            
          
            
            <div class="contact-options">
                <h3>Contact our support team</h3>
                <p>Contact our support team directly through these channels:</p>
                
                <div class="contact-method">
                    <span class="contact-icon">📱</span>
                    <div>
                        <strong>WhatsApp Support:</strong> <?php echo htmlspecialchars($whatsappNumber); ?>
                        <a href="https://wa.me/<?php echo urlencode($whatsappNumber); ?>" class="btn btn-whatsapp">Chat on WhatsApp</a>
                    </div>
                </div>
                
                <div class="contact-method">
                    <span class="contact-icon">✉️</span>
                    <div>
                        <strong>Email Support:</strong> <?php echo htmlspecialchars($supportEmail); ?>
                        <a href="mailto:<?php echo htmlspecialchars($supportEmail); ?>" class="btn btn-email">Send Email</a>
                    </div>
                </div>
                
                <p style="margin-top: 15px; font-size: 0.9em;">Our support team is available Monday-Friday, 9:00 AM to 5:00 PM. We typically respond within 1 business day.</p>
            </div>
            
            <p>If you've already made payment, please allow 24-48 hours for processing. For faster verification, share your payment receipt via WhatsApp or email.</p>
        </div>
        
        <div class="footer">
            <p>© <?php echo date('Y'); ?>  Infive (Private) Limited. All rights reserved.</p>
            <p>For account inquiries, please contact us via WhatsApp or email above.</p>
        </div>
    </div>
</body>
</html>