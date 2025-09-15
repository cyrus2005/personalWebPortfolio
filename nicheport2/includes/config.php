<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'elite_collision');
define('DB_USER', 'root');
define('DB_PASS', '');

// Site configuration
define('SITE_NAME', 'Elite Collision Repair');
define('SITE_URL', 'http://localhost/nicheport2');
define('SITE_EMAIL', 'info@elitecollision.com');
define('SITE_PHONE', '(270) 801-9780');

// Contact information
define('CONTACT_PHONE', '2708019780');
define('CONTACT_EMAIL', 'info@elitecollision.com');
define('CONTACT_ADDRESS', '123 Main Street, Your City, KY 12345');

// Business hours
define('BUSINESS_HOURS', [
    'Monday - Friday' => '8:00 AM - 6:00 PM',
    'Saturday' => '8:00 AM - 4:00 PM',
    'Sunday' => 'Closed'
]);

// Services
define('SERVICES', [
    'Collision Repair' => 'Professional repair of front-end, rear-end, and side impact damage',
    'Paint & Body Work' => 'Expert color matching and paint application',
    'Dent Removal' => 'Paintless dent repair and traditional body work',
    'Frame Straightening' => 'Precision frame repair using computerized measuring systems',
    'Glass Replacement' => 'Windshield and window replacement services',
    'Detailing Services' => 'Complete interior and exterior detailing'
]);

// Social media links
define('SOCIAL_LINKS', [
    'facebook' => '#',
    'instagram' => '#',
    'google' => '#',
    'yelp' => '#'
]);

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Database connection
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // If database doesn't exist, create it
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Create database
        $pdo->exec("CREATE DATABASE IF NOT EXISTS " . DB_NAME);
        $pdo->exec("USE " . DB_NAME);
        
        // Create tables
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS quotes (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100) NOT NULL,
                phone VARCHAR(20) NOT NULL,
                email VARCHAR(100),
                vehicle_info VARCHAR(200) NOT NULL,
                damage_description TEXT NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        ");
        
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS contacts (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100) NOT NULL,
                email VARCHAR(100) NOT NULL,
                phone VARCHAR(20),
                subject VARCHAR(200),
                message TEXT NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        ");
        
    } catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
?>
