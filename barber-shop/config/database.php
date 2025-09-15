<?php
// Include shared database configuration
// Try multiple possible paths for the shared config
$config_paths = [
    '../../shared-config/database.php',
    '../shared-config/database.php',
    'shared-config/database.php',
    '/home/cyruwjtb/public_html/shared-config/database.php'
];

$config_loaded = false;
foreach ($config_paths as $path) {
    if (file_exists($path)) {
        require_once $path;
        $config_loaded = true;
        break;
    }
}

if (!$config_loaded) {
    // Fallback: define database constants directly
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'cyruwjtb_main');
    define('DB_USER', 'cyruwjtb_admin');
    define('DB_PASS', 'Pjah6966!$');
    
    // Simple database connection function
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

// Get database connection for this site (with error handling)
try {
    // Try to get site-specific database connection if function exists
    if (function_exists('getSiteDatabaseConnection')) {
        $pdo = getSiteDatabaseConnection('barber');
    } else {
        $pdo = null;
    }
    
    if (!$pdo) {
        // Fallback to main database
        $pdo = getDatabaseConnection();
    }
} catch (Exception $e) {
    // If database fails, set to null and continue without database
    $pdo = null;
    error_log("Barber Shop database connection failed: " . $e->getMessage());
}

// If database connection fails, create database and tables
if (!$pdo && function_exists('createDatabaseIfNotExists')) {
    $pdo = createDatabaseIfNotExists();
    if ($pdo) {
        // Create tables for Barber Shop
        try {
            // Newsletter subscribers table
            $newsletter_sql = "CREATE TABLE IF NOT EXISTS newsletter_subscribers (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255) UNIQUE NOT NULL,
                subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                status ENUM('active', 'unsubscribed') DEFAULT 'active'
            )";
            
            // Contact messages table
            $contact_sql = "CREATE TABLE IF NOT EXISTS contact_messages (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                phone VARCHAR(20),
                message TEXT NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                status ENUM('new', 'read', 'replied') DEFAULT 'new'
            )";
            
            // Bookings table
            $bookings_sql = "CREATE TABLE IF NOT EXISTS bookings (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                phone VARCHAR(20) NOT NULL,
                service VARCHAR(100) NOT NULL,
                appointment_date DATE NOT NULL,
                appointment_time TIME NOT NULL,
                notes TEXT,
                status ENUM('pending', 'confirmed', 'completed', 'cancelled') DEFAULT 'pending',
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
            
            $pdo->exec($newsletter_sql);
            $pdo->exec($contact_sql);
            $pdo->exec($bookings_sql);
        } catch(PDOException $e) {
            error_log("Error creating Barber Shop tables: " . $e->getMessage());
        }
    }
}

// Function to create tables if they don't exist (for backward compatibility)
function createTables($pdo) {
    // This function is now handled in the main database connection above
    return true;
}
?>