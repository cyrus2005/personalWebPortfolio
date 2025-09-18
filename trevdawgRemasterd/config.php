<?php
// Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'trevor_real_estate');
define('DB_USER', 'root');
define('DB_PASS', '');

// Site Configuration
define('SITE_NAME', 'Superior Texas Investments');
define('SITE_EMAIL', 'trevor@superiortexas.com');
define('SITE_PHONE', '(123) 456-7890');
define('SITE_ADDRESS', '12333 Sowden Rd Ste B PMB 390511, Houston, Texas 77080-2059');

// Email Configuration
define('SMTP_HOST', 'localhost');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', '');
define('SMTP_PASSWORD', '');
define('SMTP_FROM_EMAIL', 'noreply@superiortexas.com');
define('SMTP_FROM_NAME', 'Superior Texas Investments');

// Security
define('ENCRYPTION_KEY', 'your-secret-key-here-change-this');
define('SESSION_TIMEOUT', 3600); // 1 hour

// Error Reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Timezone
date_default_timezone_set('America/Chicago');

// Database Connection Class
class Database {
    private $host = DB_HOST;
    private $db_name = DB_NAME;
    private $username = DB_USER;
    private $password = DB_PASS;
    private $conn;

    public function getConnection() {
        $this->conn = null;
        
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        
        return $this->conn;
    }
}

// Utility Functions
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validatePhone($phone) {
    $phone = preg_replace('/[^0-9+]/', '', $phone);
    return strlen($phone) >= 10;
}

function sendEmail($to, $subject, $message, $headers = '') {
    if (empty($headers)) {
        $headers = "From: " . SMTP_FROM_EMAIL . "\r\n";
        $headers .= "Reply-To: " . SMTP_FROM_EMAIL . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    }
    
    return mail($to, $subject, $message, $headers);
}

function logActivity($activity, $details = '') {
    $logFile = 'logs/activity.log';
    $timestamp = date('Y-m-d H:i:s');
    $logEntry = "[$timestamp] $activity";
    
    if ($details) {
        $logEntry .= " - $details";
    }
    
    $logEntry .= "\n";
    
    // Create logs directory if it doesn't exist
    if (!file_exists('logs')) {
        mkdir('logs', 0755, true);
    }
    
    file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
}

// Contact Form Handler
class ContactHandler {
    private $db;
    
    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }
    
    public function handleSubmission($data) {
        try {
            // Validate input
            $name = sanitizeInput($data['name']);
            $email = sanitizeInput($data['email']);
            $phone = sanitizeInput($data['phone']);
            $subject = sanitizeInput($data['subject']);
            $message = sanitizeInput($data['message']);
            $newsletter = isset($data['newsletter']) ? 1 : 0;
            
            // Validation
            if (empty($name) || empty($email) || empty($message)) {
                throw new Exception('Please fill in all required fields.');
            }
            
            if (!validateEmail($email)) {
                throw new Exception('Please enter a valid email address.');
            }
            
            if (!empty($phone) && !validatePhone($phone)) {
                throw new Exception('Please enter a valid phone number.');
            }
            
            // Save to database
            $query = "INSERT INTO contacts (name, email, phone, subject, message, newsletter, created_at) 
                     VALUES (:name, :email, :phone, :subject, :message, :newsletter, NOW())";
            
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':subject', $subject);
            $stmt->bindParam(':message', $message);
            $stmt->bindParam(':newsletter', $newsletter);
            
            if ($stmt->execute()) {
                // Send email notification
                $this->sendNotificationEmail($name, $email, $phone, $subject, $message);
                
                // Log activity
                logActivity('Contact form submission', "From: $name ($email)");
                
                return [
                    'success' => true,
                    'message' => 'Thank you for your message! Trevor will get back to you within 24 hours.'
                ];
            } else {
                throw new Exception('Failed to save your message. Please try again.');
            }
            
        } catch (Exception $e) {
            logActivity('Contact form error', $e->getMessage());
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }
    
    private function sendNotificationEmail($name, $email, $phone, $subject, $message) {
        $to = SITE_EMAIL;
        $emailSubject = "New Contact Form Submission from $name";
        
        $emailMessage = "
        <html>
        <head>
            <title>New Contact Form Submission</title>
        </head>
        <body>
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
            <hr>
            <p><em>This message was sent from the contact form on " . SITE_NAME . "</em></p>
        </body>
        </html>
        ";
        
        $headers = "From: " . SMTP_FROM_EMAIL . "\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        
        sendEmail($to, $emailSubject, $emailMessage, $headers);
    }
}

// Initialize session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// CSRF Protection
function generateCSRFToken() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function validateCSRFToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Rate Limiting
function checkRateLimit($ip, $action = 'contact_form', $limit = 5, $window = 3600) {
    $cacheFile = "cache/rate_limit_" . md5($ip . $action) . ".txt";
    
    if (!file_exists('cache')) {
        mkdir('cache', 0755, true);
    }
    
    $currentTime = time();
    $attempts = [];
    
    if (file_exists($cacheFile)) {
        $attempts = json_decode(file_get_contents($cacheFile), true) ?: [];
    }
    
    // Remove old attempts outside the time window
    $attempts = array_filter($attempts, function($timestamp) use ($currentTime, $window) {
        return ($currentTime - $timestamp) < $window;
    });
    
    if (count($attempts) >= $limit) {
        return false;
    }
    
    // Add current attempt
    $attempts[] = $currentTime;
    file_put_contents($cacheFile, json_encode($attempts));
    
    return true;
}
?>
