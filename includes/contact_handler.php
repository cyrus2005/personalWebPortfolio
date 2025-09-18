<?php
// Contact Form Handler for Cyrus Wilburn Portfolio
// This file handles form submissions from the contact form

// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Set content type to JSON for AJAX responses
header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Include database configuration
// Check if we're on localhost (development) or live site (production)
$is_localhost = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || 
                 strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false);

if ($is_localhost) {
    // Local development - try local config first
    $db_config_paths = [
        __DIR__ . '/../local-config/database.php',  // Local development
        __DIR__ . '/../shared-config/database.php', // Production config fallback
        __DIR__ . '/../../shared-config/database.php',
        __DIR__ . '/../../../shared-config/database.php'
    ];
} else {
    // Live site - use production config first
    $db_config_paths = [
        __DIR__ . '/../shared-config/database.php', // Production config first
        __DIR__ . '/../../shared-config/database.php',
        __DIR__ . '/../../../shared-config/database.php',
        __DIR__ . '/../local-config/database.php'   // Local config fallback
    ];
}

$db_config_loaded = false;
foreach ($db_config_paths as $path) {
    if (file_exists($path)) {
        require_once $path;
        $db_config_loaded = true;
        break;
    }
}

// Fallback database configuration if shared config not found
if (!$db_config_loaded) {
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'cyruwjtb_main');
    define('DB_USER', 'cyruwjtb_admin');
    define('DB_PASS', 'Pjah6966!$');
    
    function getDatabaseConnection($database = null) {
        try {
            $db_name = $database ? $database : DB_NAME;
            $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . $db_name, DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch(PDOException $e) {
            error_log("Database connection failed: " . $e->getMessage());
            return false;
        }
    }
}

// Function to sanitize input data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate email
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate phone number
function validatePhone($phone) {
    // Remove all non-digit characters
    $phone = preg_replace('/\D/', '', $phone);
    // Check if it's a valid US phone number (10 digits)
    return strlen($phone) === 10;
}

// Function to create contact form table if it doesn't exist
function createContactTable($pdo) {
    try {
        $sql = "CREATE TABLE IF NOT EXISTS contact_submissions (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            phone VARCHAR(20),
            service VARCHAR(50),
            message TEXT NOT NULL,
            ip_address VARCHAR(45),
            user_agent TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            status ENUM('new', 'contacted', 'in_progress', 'completed') DEFAULT 'new',
            notes TEXT
        )";
        
        $pdo->exec($sql);
        return true;
    } catch(PDOException $e) {
        error_log("Failed to create contact_submissions table: " . $e->getMessage());
        return false;
    }
}

// Function to save contact form to database
function saveToDatabase($formData) {
    try {
        $pdo = getDatabaseConnection();
        if (!$pdo) {
            return ['success' => false, 'message' => 'Database connection failed'];
        }
        
        // Create table if it doesn't exist
        if (!createContactTable($pdo)) {
            return ['success' => false, 'message' => 'Failed to create database table'];
        }
        
        // Prepare insert statement
        $sql = "INSERT INTO contact_submissions (name, email, phone, service, message, ip_address, user_agent) 
                VALUES (:name, :email, :phone, :service, :message, :ip_address, :user_agent)";
        
        $stmt = $pdo->prepare($sql);
        
        // Bind parameters
        $stmt->bindParam(':name', $formData['name']);
        $stmt->bindParam(':email', $formData['email']);
        $stmt->bindParam(':phone', $formData['phone']);
        $stmt->bindParam(':service', $formData['service']);
        $stmt->bindParam(':message', $formData['message']);
        $stmt->bindParam(':ip_address', $_SERVER['REMOTE_ADDR']);
        $stmt->bindParam(':user_agent', $_SERVER['HTTP_USER_AGENT']);
        
        // Execute the statement
        if ($stmt->execute()) {
            return ['success' => true, 'message' => 'Contact form saved to database', 'id' => $pdo->lastInsertId()];
        } else {
            return ['success' => false, 'message' => 'Failed to save to database'];
        }
        
    } catch(PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        return ['success' => false, 'message' => 'Database error occurred'];
    }
}

// Function to send email notification
function sendEmailNotification($formData) {
    $to = 'cyrus@cyruswilburn.dev'; // Replace with your email
    $subject = 'New Contact Form Submission - Cyrus Wilburn Portfolio';
    
    $message = "New contact form submission:\n\n";
    $message .= "Name: " . $formData['name'] . "\n";
    $message .= "Email: " . $formData['email'] . "\n";
    $message .= "Phone: " . ($formData['phone'] ?? 'Not provided') . "\n";
    $message .= "Business Type: " . ($formData['business'] ?? 'Not specified') . "\n";
    $message .= "Project Type: " . ($formData['project'] ?? 'Not specified') . "\n";
    $message .= "Budget: " . ($formData['budget'] ?? 'Not specified') . "\n";
    $message .= "Message: " . $formData['message'] . "\n\n";
    $message .= "Submitted on: " . date('Y-m-d H:i:s') . "\n";
    $message .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
    
    $headers = [
        'From: noreply@cyruswilburn.dev',
        'Reply-To: ' . $formData['email'],
        'X-Mailer: PHP/' . phpversion(),
        'Content-Type: text/plain; charset=UTF-8'
    ];
    
    return mail($to, $subject, $message, implode("\r\n", $headers));
}

// Function to send auto-reply to client
function sendAutoReply($email, $name) {
    $subject = 'Thank you for contacting Cyrus Wilburn - Web Developer';
    
    $message = "Hi " . $name . ",\n\n";
    $message .= "Thank you for reaching out! I've received your message and will get back to you within 24 hours.\n\n";
    $message .= "In the meantime, feel free to:\n";
    $message .= "- Call me directly at (270) 801-9780\n";
    $message .= "- Text me at the same number\n";
    $message .= "- Check out my portfolio at https://cyruswilburn.dev\n\n";
    $message .= "I look forward to discussing your project!\n\n";
    $message .= "Best regards,\n";
    $message .= "Cyrus Wilburn\n";
    $message .= "Professional Web Developer\n";
    $message .= "Phone: (270) 801-9780\n";
    $message .= "Website: https://cyruswilburn.dev\n\n";
    $message .= "---\n";
    $message .= "This is an automated response. Please do not reply to this email.";
    
    $headers = [
        'From: cyrus@cyruswilburn.dev',
        'X-Mailer: PHP/' . phpversion(),
        'Content-Type: text/plain; charset=UTF-8'
    ];
    
    return mail($email, $subject, $message, implode("\r\n", $headers));
}

// Function to log form submission
function logSubmission($formData) {
    $logFile = 'logs/contact_submissions.log';
    $logDir = dirname($logFile);
    
    // Create logs directory if it doesn't exist
    if (!is_dir($logDir)) {
        mkdir($logDir, 0755, true);
    }
    
    $logEntry = date('Y-m-d H:i:s') . " - ";
    $logEntry .= "Name: " . $formData['name'] . ", ";
    $logEntry .= "Email: " . $formData['email'] . ", ";
    $logEntry .= "Phone: " . ($formData['phone'] ?? 'N/A') . ", ";
    $logEntry .= "Business: " . ($formData['business'] ?? 'N/A') . ", ";
    $logEntry .= "Project: " . ($formData['project'] ?? 'N/A') . ", ";
    $logEntry .= "Budget: " . ($formData['budget'] ?? 'N/A') . ", ";
    $logEntry .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
    
    file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
}

// Initialize response array
$response = ['success' => false, 'message' => ''];

try {
    // Check for required fields
    $requiredFields = ['name', 'email', 'message'];
    $missingFields = [];
    
    foreach ($requiredFields as $field) {
        if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
            $missingFields[] = $field;
        }
    }
    
    if (!empty($missingFields)) {
        $response['message'] = 'Please fill in all required fields: ' . implode(', ', $missingFields);
        echo json_encode($response);
        exit;
    }
    
    // Sanitize and validate input data
    $formData = [
        'name' => sanitizeInput($_POST['name']),
        'email' => sanitizeInput($_POST['email']),
        'phone' => isset($_POST['phone']) ? sanitizeInput($_POST['phone']) : '',
        'service' => isset($_POST['service']) ? sanitizeInput($_POST['service']) : '',
        'business' => isset($_POST['business']) ? sanitizeInput($_POST['business']) : '',
        'project' => isset($_POST['project']) ? sanitizeInput($_POST['project']) : '',
        'budget' => isset($_POST['budget']) ? sanitizeInput($_POST['budget']) : '',
        'message' => sanitizeInput($_POST['message'])
    ];
    
    // Validate email
    if (!validateEmail($formData['email'])) {
        $response['message'] = 'Please enter a valid email address.';
        echo json_encode($response);
        exit;
    }
    
    // Validate phone if provided
    if (!empty($formData['phone']) && !validatePhone($formData['phone'])) {
        $response['message'] = 'Please enter a valid phone number.';
        echo json_encode($response);
        exit;
    }
    
    // Check for spam (simple honeypot)
    if (isset($_POST['website']) && !empty($_POST['website'])) {
        $response['message'] = 'Spam detected.';
        echo json_encode($response);
        exit;
    }
    
    // Rate limiting (simple implementation)
    $ip = $_SERVER['REMOTE_ADDR'];
    $rateLimitFile = 'logs/rate_limit.json';
    $rateLimitData = [];
    
    if (file_exists($rateLimitFile)) {
        $rateLimitData = json_decode(file_get_contents($rateLimitFile), true) ?: [];
    }
    
    $currentTime = time();
    $timeWindow = 3600; // 1 hour
    $maxSubmissions = 5; // Max 5 submissions per hour per IP
    
    if (isset($rateLimitData[$ip])) {
        $rateLimitData[$ip] = array_filter($rateLimitData[$ip], function($timestamp) use ($currentTime, $timeWindow) {
            return ($currentTime - $timestamp) < $timeWindow;
        });
        
        if (count($rateLimitData[$ip]) >= $maxSubmissions) {
            $response['message'] = 'Too many submissions. Please try again later.';
            echo json_encode($response);
            exit;
        }
    }
    
    // Add current submission to rate limit data
    if (!isset($rateLimitData[$ip])) {
        $rateLimitData[$ip] = [];
    }
    $rateLimitData[$ip][] = $currentTime;
    
    // Save rate limit data
    file_put_contents($rateLimitFile, json_encode($rateLimitData), LOCK_EX);
    
    // Save to database
    $dbResult = saveToDatabase($formData);
    if (!$dbResult['success']) {
        error_log("Database save failed: " . $dbResult['message']);
        // Continue processing even if database save fails
    }
    
    // Send email notification
    $emailSent = sendEmailNotification($formData);
    
    // Send auto-reply to client
    $autoReplySent = sendAutoReply($formData['email'], $formData['name']);
    
    // Log the submission
    logSubmission($formData);
    
    // Prepare success response
    if ($emailSent || $dbResult['success']) {
        $response['success'] = true;
        $response['message'] = 'Thank you for your message! I\'ll get back to you within 24 hours.';
        
        // Add database info to response for debugging
        if ($dbResult['success']) {
            $response['database_id'] = $dbResult['id'];
        }
        
        // Set success message in session for non-AJAX requests
        $_SESSION['contact_success'] = $response['message'];
    } else {
        $response['message'] = 'There was an error sending your message. Please try calling me directly at (270) 801-9780.';
    }
    
} catch (Exception $e) {
    // Log the error
    error_log('Contact form error: ' . $e->getMessage());
    
    $response['message'] = 'An unexpected error occurred. Please try calling me directly at (270) 801-9780.';
}

// Return JSON response
echo json_encode($response);

// For non-AJAX requests, redirect back to contact form
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
    if ($response['success']) {
        header('Location: index.php#contact?success=1');
    } else {
        header('Location: index.php#contact?error=1');
    }
    exit;
}
?>
