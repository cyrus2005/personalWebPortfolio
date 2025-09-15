<?php
// Contact form handler
require_once '../config/database.php';
require_once 'functions.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo errorResponse('Invalid request method');
    exit;
}

// Get and sanitize input
$name = sanitizeInput($_POST['name'] ?? '');
$email = sanitizeInput($_POST['email'] ?? '');
$phone = sanitizeInput($_POST['phone'] ?? '');
$message = sanitizeInput($_POST['message'] ?? '');

// Validate input
$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required';
}

if (empty($email)) {
    $errors[] = 'Email address is required';
} elseif (!validateEmail($email)) {
    $errors[] = 'Please enter a valid email address';
}

if (!empty($phone) && !validatePhone($phone)) {
    $errors[] = 'Please enter a valid phone number';
}

if (empty($message)) {
    $errors[] = 'Message is required';
}

// Check if there are validation errors
if (!empty($errors)) {
    echo errorResponse('Please fix the following errors:', $errors);
    exit;
}

// Save contact message
if (saveContactMessage($pdo, $name, $email, $phone, $message)) {
    // Send notification email to admin
    $adminEmail = 'info@bladeandfade.com'; // Change this to your admin email
    $subject = "New Contact Message from Blade & Fade Barbers Website";
    $adminMessage = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #1a1a1a; color: #d4af37; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f9f9f9; }
            .message-details { background: white; padding: 20px; border-radius: 8px; margin: 20px 0; }
            .footer { text-align: center; padding: 20px; color: #666; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>New Contact Message</h1>
                <p>Blade & Fade Barbers Website</p>
            </div>
            <div class='content'>
                <div class='message-details'>
                    <h3>Contact Details:</h3>
                    <p><strong>Name:</strong> $name</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Phone:</strong> " . (!empty($phone) ? $phone : 'Not provided') . "</p>
                    <p><strong>Message:</strong></p>
                    <p>" . nl2br($message) . "</p>
                    <p><strong>Submitted:</strong> " . date('Y-m-d H:i:s') . "</p>
                </div>
            </div>
            <div class='footer'>
                <p>This message was sent from the Blade & Fade Barbers contact form.</p>
            </div>
        </div>
    </body>
    </html>";
    
    // Uncomment the line below to enable admin email notifications
    // sendEmailNotification($adminEmail, $subject, $adminMessage);
    
    // Send auto-reply to customer
    $customerSubject = "Thank you for contacting Blade & Fade Barbers";
    $customerMessage = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #1a1a1a; color: #d4af37; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f9f9f9; }
            .footer { text-align: center; padding: 20px; color: #666; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>Blade & Fade Barbers</h1>
                <p>Thank You for Your Message</p>
            </div>
            <div class='content'>
                <h2>Hello $name,</h2>
                <p>Thank you for reaching out to Blade & Fade Barbers! We've received your message and will get back to you within 24 hours.</p>
                <p>In the meantime, feel free to:</p>
                <ul>
                    <li>Browse our services on our website</li>
                    <li>Book an appointment online</li>
                    <li>Follow us on social media for the latest updates</li>
                </ul>
                <p>We look forward to hearing from you soon!</p>
                <p>Best regards,<br>The Blade & Fade Barbers Team</p>
            </div>
            <div class='footer'>
                <p>&copy; 2024 Blade & Fade Barbers. All rights reserved.</p>
                <p>Phone: (555) 123-4567 | Email: info@bladeandfade.com</p>
            </div>
        </div>
    </body>
    </html>";
    
    // Uncomment the line below to enable customer auto-reply emails
    // sendEmailNotification($email, $customerSubject, $customerMessage);
    
    echo successResponse('Thank you for your message! We\'ll get back to you within 24 hours.');
} else {
    echo errorResponse('Failed to send message. Please try again later.');
}
?>
