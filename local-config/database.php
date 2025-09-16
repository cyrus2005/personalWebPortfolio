<?php
// Local Development Database Configuration for XAMPP
// This file is used for local development only

// Local XAMPP Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'cyrus_portfolio');
define('DB_USER', 'root');
define('DB_PASS', ''); // XAMPP default is empty password

// Database connection function
function getDatabaseConnection($database = null) {
    try {
        $db_name = $database ? $database : DB_NAME;
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . $db_name, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch(PDOException $e) {
        error_log("Local database connection failed: " . $e->getMessage());
        return false;
    }
}

// Function to check if database connection is working
function isDatabaseConnected() {
    $pdo = getDatabaseConnection();
    return $pdo !== false;
}
?>
