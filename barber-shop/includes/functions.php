<?php
// Utility functions for Blade & Fade Barbers

/**
 * Sanitize input data
 */
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Validate email address
 */
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Validate phone number (basic validation)
 */
function validatePhone($phone) {
    $phone = preg_replace('/[^0-9+\-\(\)\s]/', '', $phone);
    return strlen($phone) >= 10;
}

/**
 * Send email notification
 */
function sendEmailNotification($to, $subject, $message, $from = 'noreply@bladeandfade.com') {
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    return mail($to, $subject, $message, $headers);
}

/**
 * Generate success response
 */
function successResponse($message, $data = null) {
    $response = [
        'success' => true,
        'message' => $message
    ];
    
    if ($data !== null) {
        $response['data'] = $data;
    }
    
    return json_encode($response);
}

/**
 * Generate error response
 */
function errorResponse($message, $errors = null) {
    $response = [
        'success' => false,
        'message' => $message
    ];
    
    if ($errors !== null) {
        $response['errors'] = $errors;
    }
    
    return json_encode($response);
}

/**
 * Log activity
 */
function logActivity($message, $type = 'info') {
    $logFile = '../logs/activity.log';
    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] [$type] $message" . PHP_EOL;
    
    // Create logs directory if it doesn't exist
    $logDir = dirname($logFile);
    if (!is_dir($logDir)) {
        mkdir($logDir, 0755, true);
    }
    
    file_put_contents($logFile, $logMessage, FILE_APPEND | LOCK_EX);
}

/**
 * Check if email already exists in newsletter
 */
function emailExists($pdo, $email) {
    try {
        $stmt = $pdo->prepare("SELECT id FROM newsletter_subscribers WHERE email = ? AND status = 'active'");
        $stmt->execute([$email]);
        return $stmt->fetch() !== false;
    } catch (PDOException $e) {
        logActivity("Error checking email existence: " . $e->getMessage(), 'error');
        return false;
    }
}

/**
 * Add email to newsletter
 */
function addToNewsletter($pdo, $email) {
    try {
        $stmt = $pdo->prepare("INSERT INTO newsletter_subscribers (email) VALUES (?) ON DUPLICATE KEY UPDATE status = 'active', subscribed_at = CURRENT_TIMESTAMP");
        $result = $stmt->execute([$email]);
        
        if ($result) {
            logActivity("New newsletter subscriber: $email");
            return true;
        }
        return false;
    } catch (PDOException $e) {
        logActivity("Error adding to newsletter: " . $e->getMessage(), 'error');
        return false;
    }
}

/**
 * Save contact message
 */
function saveContactMessage($pdo, $name, $email, $phone, $message) {
    try {
        $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, phone, message) VALUES (?, ?, ?, ?)");
        $result = $stmt->execute([$name, $email, $phone, $message]);
        
        if ($result) {
            logActivity("New contact message from: $name ($email)");
            return true;
        }
        return false;
    } catch (PDOException $e) {
        logActivity("Error saving contact message: " . $e->getMessage(), 'error');
        return false;
    }
}

/**
 * Save booking
 */
function saveBooking($pdo, $name, $email, $phone, $service, $date, $time, $notes) {
    try {
        $stmt = $pdo->prepare("INSERT INTO bookings (name, email, phone, service, appointment_date, appointment_time, notes) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $result = $stmt->execute([$name, $email, $phone, $service, $date, $time, $notes]);
        
        if ($result) {
            logActivity("New booking from: $name ($email) - $service on $date at $time");
            return true;
        }
        return false;
    } catch (PDOException $e) {
        logActivity("Error saving booking: " . $e->getMessage(), 'error');
        return false;
    }
}

/**
 * Check if appointment slot is available
 */
function isAppointmentAvailable($pdo, $date, $time) {
    try {
        $stmt = $pdo->prepare("SELECT id FROM bookings WHERE appointment_date = ? AND appointment_time = ? AND status IN ('pending', 'confirmed')");
        $stmt->execute([$date, $time]);
        return $stmt->fetch() === false;
    } catch (PDOException $e) {
        logActivity("Error checking appointment availability: " . $e->getMessage(), 'error');
        return false;
    }
}

/**
 * Get service details
 */
function getServiceDetails($service) {
    $services = [
        'classic-haircut' => ['name' => 'Classic Haircut', 'price' => 35, 'duration' => 30],
        'fade-style' => ['name' => 'Fade & Style', 'price' => 45, 'duration' => 45],
        'beard-trim' => ['name' => 'Beard Trim', 'price' => 25, 'duration' => 20],
        'hot-towel-shave' => ['name' => 'Hot Towel Shave', 'price' => 40, 'duration' => 30],
        'complete-package' => ['name' => 'Complete Package', 'price' => 75, 'duration' => 90],
        'hair-styling' => ['name' => 'Hair Styling', 'price' => 20, 'duration' => 15]
    ];
    
    return isset($services[$service]) ? $services[$service] : null;
}

/**
 * Format phone number
 */
function formatPhoneNumber($phone) {
    $phone = preg_replace('/[^0-9]/', '', $phone);
    
    if (strlen($phone) == 10) {
        return '(' . substr($phone, 0, 3) . ') ' . substr($phone, 3, 3) . '-' . substr($phone, 6, 4);
    }
    
    return $phone;
}

/**
 * Generate booking confirmation email
 */
function generateBookingConfirmationEmail($booking) {
    $serviceDetails = getServiceDetails($booking['service']);
    $formattedPhone = formatPhoneNumber($booking['phone']);
    $formattedDate = date('l, F j, Y', strtotime($booking['appointment_date']));
    $formattedTime = date('g:i A', strtotime($booking['appointment_time']));
    
    $html = "
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
                <h1>Blade & Fade Barbers</h1>
                <p>Appointment Confirmation</p>
            </div>
            <div class='content'>
                <h2>Hello {$booking['name']},</h2>
                <p>Thank you for booking an appointment with Blade & Fade Barbers! We're excited to see you.</p>
                
                <div class='booking-details'>
                    <h3>Appointment Details:</h3>
                    <p><strong>Service:</strong> {$serviceDetails['name']}</p>
                    <p><strong>Date:</strong> $formattedDate</p>
                    <p><strong>Time:</strong> $formattedTime</p>
                    <p><strong>Duration:</strong> {$serviceDetails['duration']} minutes</p>
                    <p><strong>Price:</strong> $" . number_format($serviceDetails['price'], 2) . "</p>
                    <p><strong>Phone:</strong> $formattedPhone</p>
                    <p><strong>Email:</strong> {$booking['email']}</p>";
    
    if (!empty($booking['notes'])) {
        $html .= "<p><strong>Notes:</strong> {$booking['notes']}</p>";
    }
    
    $html .= "
                </div>
                
                <p><strong>Location:</strong><br>
                123 Main Street<br>
                Downtown District<br>
                Your City, ST 12345</p>
                
                <p>Please arrive 5 minutes before your appointment time. If you need to reschedule or cancel, please call us at (555) 123-4567 at least 2 hours in advance.</p>
                
                <p>We look forward to providing you with an exceptional grooming experience!</p>
            </div>
            <div class='footer'>
                <p>&copy; 2024 Blade & Fade Barbers. All rights reserved.</p>
            </div>
        </div>
    </body>
    </html>";
    
    return $html;
}
?>