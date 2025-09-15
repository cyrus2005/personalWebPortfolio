<?php
session_start();
require_once '../config/database.php';
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = sanitize_input($_POST['email']);
    
    if (validate_email($email)) {
        try {
            // Check if email already exists
            $stmt = $pdo->prepare("SELECT id FROM subscribers WHERE email = ?");
            $stmt->execute([$email]);
            
            if ($stmt->rowCount() > 0) {
                $_SESSION['message'] = 'This email is already subscribed to our newsletter.';
                $_SESSION['message_type'] = 'error';
            } else {
                // Insert new subscriber
                $stmt = $pdo->prepare("INSERT INTO subscribers (email) VALUES (?)");
                $stmt->execute([$email]);
                
                $_SESSION['message'] = 'Thank you for subscribing! You\'ll receive our latest updates and offers.';
                $_SESSION['message_type'] = 'success';
                
                // Send welcome email (optional)
                $subject = "Welcome to Blade & Fade Barbers Newsletter";
                $message = "
                <html>
                <head>
                    <style>
                        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                        .header { background: #1a1a1a; color: white; padding: 20px; text-align: center; }
                        .content { padding: 20px; background: #f9f9f9; }
                        .footer { text-align: center; padding: 20px; color: #666; }
                    </style>
                </head>
                <body>
                    <div class='container'>
                        <div class='header'>
                            <h1>Blade & Fade Barbers</h1>
                        </div>
                        <div class='content'>
                            <h2>Welcome to our newsletter!</h2>
                            <p>Thank you for subscribing to Blade & Fade Barbers newsletter. You'll now receive:</p>
                            <ul>
                                <li>Exclusive grooming tips and trends</li>
                                <li>Special offers and discounts</li>
                                <li>New service announcements</li>
                                <li>Behind-the-scenes content</li>
                            </ul>
                            <p>We're excited to keep you updated on everything happening at Blade & Fade!</p>
                        </div>
                        <div class='footer'>
                            <p>Blade & Fade Barbers | Premium Grooming for the Modern Man</p>
                        </div>
                    </div>
                </body>
                </html>";
                
                send_notification_email($email, $subject, $message);
            }
        } catch (PDOException $e) {
            $_SESSION['message'] = 'Sorry, there was an error processing your subscription. Please try again.';
            $_SESSION['message_type'] = 'error';
        }
    } else {
        $_SESSION['message'] = 'Please enter a valid email address.';
        $_SESSION['message_type'] = 'error';
    }
} else {
    $_SESSION['message'] = 'Invalid request method.';
    $_SESSION['message_type'] = 'error';
}

header('Location: ../index.php#newsletter');
exit();
?>
