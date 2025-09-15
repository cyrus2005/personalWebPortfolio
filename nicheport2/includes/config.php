<?php
// Include shared database configuration
require_once '../../shared-config/database.php';

// Site configuration
define('SITE_NAME', 'Elite Collision Repair');
define('SITE_URL', 'https://cyruswilburn.dev/nicheport2');
define('SITE_EMAIL', 'cyrus@cyruswilburn.dev');
define('SITE_PHONE', '(270) 801-9780');

// Contact information
define('CONTACT_PHONE', '2708019780');
define('CONTACT_EMAIL', 'cyrus@cyruswilburn.dev');
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

// Get database connection
$pdo = getDatabaseConnection();

// If database connection fails, create database and tables
if (!$pdo) {
    $pdo = createDatabaseIfNotExists();
    if ($pdo) {
        // Create tables for NichePort
        try {
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
            error_log("Error creating NichePort tables: " . $e->getMessage());
        }
    }
}
?>