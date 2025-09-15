<?php
session_start();
require_once '../config/database.php';
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $phone = sanitize_input($_POST['phone']);
    $message = sanitize_input($_POST['message']);
    
    $errors = [];
    
    // Validation
    if (empty($name)) {
        $errors[] = 'Name is required.';
    }
    
    if (empty($email) || !validate_email($email)) {
        $errors[] = 'Valid email is required.';
    }
    
    if (!empty($phone) && !validate_phone($phone)) {
        $errors[] = 'Please enter a valid phone number.';
    }
    
    if (empty($message)) {
        $errors[] = 'Message is required.';
    }
    
    if (empty($errors)) {
        try {
            // Insert contact message
            $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, phone, message) VALUES (?, ?, ?, ?)");
            $stmt->execute([$name, $email, $phone, $message]);
            
            $_SESSION['message'] = 'Thank you for your message! We\'ll get back to you within 24 hours.';
            $_SESSION['message_type'] = 'success';
            
            // Send notification email to admin
            $admin_subject = "New Contact Form Submission - Blade & Fade Barbers";
            $admin_message = "
            <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                    .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                    .header { background: #1a1a1a; color: white; padding: 20px; text-align: center; }
                    .content { padding: 20px; background: #f9f9f9; }
                    .message-box { background: white; padding: 20px; margin: 20px 0; border-left: 4px solid #d4af37; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <div class='header'>
                        <h1>New Contact Form Submission</h1>
                    </div>
                    <div class='content'>
                        <h2>Contact Details</h2>
                        <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
                        <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
                        <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
                        
                        <div class='message-box'>
                            <h3>Message:</h3>
                            <p>" . nl2br(htmlspecialchars($message)) . "</p>
                        </div>
                        
                        <p>Please respond to this inquiry as soon as possible.</p>
                    </div>
                </div>
            </body>
            </html>";
            
            send_notification_email('info@bladeandfade.com', $admin_subject, $admin_message);
            
            // Send auto-reply to customer
            $customer_subject = "Thank you for contacting Blade & Fade Barbers";
            $customer_message = "
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
                        <h2>Thank you for contacting us!</h2>
                        <p>Hi " . htmlspecialchars($name) . ",</p>
                        <p>We've received your message and will get back to you within 24 hours. In the meantime, feel free to:</p>
                        <ul>
                            <li>Call us at (555) 123-4567 for immediate assistance</li>
                            <li>Visit our website to book an appointment online</li>
                            <li>Follow us on social media for the latest updates</li>
                        </ul>
                        <p>We look forward to serving you!</p>
                        <p>Best regards,<br>The Blade & Fade Team</p>
                    </div>
                    <div class='footer'>
                        <p>Blade & Fade Barbers | Premium Grooming for the Modern Man</p>
                    </div>
                </div>
            </body>
            </html>";
            
            send_notification_email($email, $customer_subject, $customer_message);
            
        } catch (PDOException $e) {
            $_SESSION['message'] = 'Sorry, there was an error sending your message. Please try again.';
            $_SESSION['message_type'] = 'error';
        }
    } else {
        $_SESSION['message'] = implode('<br>', $errors);
        $_SESSION['message_type'] = 'error';
    }
} else {
    $_SESSION['message'] = 'Invalid request method.';
    $_SESSION['message_type'] = 'error';
}

header('Location: ../index.php#contact');
exit();
?>
