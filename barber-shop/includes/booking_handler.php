<?php
// Booking form handler
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
$service = sanitizeInput($_POST['service'] ?? '');
$date = sanitizeInput($_POST['date'] ?? '');
$time = sanitizeInput($_POST['time'] ?? '');
$notes = sanitizeInput($_POST['notes'] ?? '');

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

if (empty($phone)) {
    $errors[] = 'Phone number is required';
} elseif (!validatePhone($phone)) {
    $errors[] = 'Please enter a valid phone number';
}

if (empty($service)) {
    $errors[] = 'Please select a service';
}

if (empty($date)) {
    $errors[] = 'Please select a date';
} elseif (strtotime($date) < strtotime('today')) {
    $errors[] = 'Please select a future date';
}

if (empty($time)) {
    $errors[] = 'Please select a time';
}

// Check if there are validation errors
if (!empty($errors)) {
    echo errorResponse('Please fix the following errors:', $errors);
    exit;
}

// Check if appointment slot is available
if (!isAppointmentAvailable($pdo, $date, $time)) {
    echo errorResponse('This appointment slot is no longer available. Please select a different time.');
    exit;
}

// Save booking
if (saveBooking($pdo, $name, $email, $phone, $service, $date, $time, $notes)) {
    // Get service details for confirmation
    $serviceDetails = getServiceDetails($service);
    
    // Prepare booking data for email
    $bookingData = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'service' => $service,
        'appointment_date' => $date,
        'appointment_time' => $time,
        'notes' => $notes
    ];
    
    // Send confirmation email to customer
    $subject = "Appointment Confirmation - Blade & Fade Barbers";
    $message = generateBookingConfirmationEmail($bookingData);
    
    // Uncomment the line below to enable booking confirmation emails
    // sendEmailNotification($email, $subject, $message);
    
    // Send notification to admin
    $adminEmail = 'info@bladeandfade.com'; // Change this to your admin email
    $adminSubject = "New Booking - Blade & Fade Barbers";
    $adminMessage = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #1a1a1a; color: #d4af37; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f9f9f9; }
            .booking-details { background: white; padding: 20px; border-radius: 8px; margin: 20px 0; }
            .footer { text-align: center; padding: 20px; color: #666; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>New Booking Received</h1>
                <p>Blade & Fade Barbers</p>
            </div>
            <div class='content'>
                <div class='booking-details'>
                    <h3>Booking Details:</h3>
                    <p><strong>Customer:</strong> $name</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Phone:</strong> $phone</p>
                    <p><strong>Service:</strong> {$serviceDetails['name']}</p>
                    <p><strong>Date:</strong> " . date('l, F j, Y', strtotime($date)) . "</p>
                    <p><strong>Time:</strong> " . date('g:i A', strtotime($time)) . "</p>
                    <p><strong>Duration:</strong> {$serviceDetails['duration']} minutes</p>
                    <p><strong>Price:</strong> $" . number_format($serviceDetails['price'], 2) . "</p>";
    
    if (!empty($notes)) {
        $adminMessage .= "<p><strong>Notes:</strong> $notes</p>";
    }
    
    $adminMessage .= "
                    <p><strong>Booked:</strong> " . date('Y-m-d H:i:s') . "</p>
                </div>
                
                <p>Please confirm this appointment with the customer and add it to your calendar.</p>
            </div>
            <div class='footer'>
                <p>This booking was made through the Blade & Fade Barbers website.</p>
            </div>
        </div>
    </body>
    </html>";
    
    // Uncomment the line below to enable admin booking notifications
    // sendEmailNotification($adminEmail, $adminSubject, $adminMessage);
    
    echo successResponse('Appointment booked successfully! You will receive a confirmation email shortly.');
} else {
    echo errorResponse('Failed to book appointment. Please try again later.');
}
?>
