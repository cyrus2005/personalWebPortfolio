<?php
// Newsletter subscription handler
require_once '../config/database.php';
require_once 'functions.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo errorResponse('Invalid request method');
    exit;
}

// Get and sanitize input
$email = sanitizeInput($_POST['email'] ?? '');

// Validate input
$errors = [];

if (empty($email)) {
    $errors[] = 'Email address is required';
} elseif (!validateEmail($email)) {
    $errors[] = 'Please enter a valid email address';
}

// Check if there are validation errors
if (!empty($errors)) {
    echo errorResponse('Please fix the following errors:', $errors);
    exit;
}

// Check if email already exists
if (emailExists($pdo, $email)) {
    echo errorResponse('This email address is already subscribed to our newsletter');
    exit;
}

// Add to newsletter
if (addToNewsletter($pdo, $email)) {
    // Send confirmation email (optional)
    $subject = "Welcome to Blade & Fade Barbers Newsletter!";
    $message = "
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
                <p>Newsletter Subscription Confirmed</p>
            </div>
            <div class='content'>
                <h2>Welcome to our newsletter!</h2>
                <p>Thank you for subscribing to the Blade & Fade Barbers newsletter. You'll now receive:</p>
                <ul>
                    <li>Latest grooming tips and trends</li>
                    <li>Exclusive offers and promotions</li>
                    <li>New service announcements</li>
                    <li>Behind-the-scenes content</li>
                </ul>
                <p>We're excited to keep you updated on everything happening at Blade & Fade Barbers!</p>
                <p>Ready to book your next appointment? <a href='#'>Click here to book online</a></p>
            </div>
            <div class='footer'>
                <p>&copy; 2024 Blade & Fade Barbers. All rights reserved.</p>
                <p><a href='#'>Unsubscribe</a> | <a href='#'>Update Preferences</a></p>
            </div>
        </div>
    </body>
    </html>";
    
    // Uncomment the line below to enable email notifications
    // sendEmailNotification($email, $subject, $message);
    
    echo successResponse('Successfully subscribed to our newsletter!');
} else {
    echo errorResponse('Failed to subscribe. Please try again later.');
}
?>
