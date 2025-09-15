<?php
// Universal Database Configuration for cPanel Hosting
// This file should be included by all websites

// cPanel Database Configuration
// Update these values with your actual cPanel database details
define('DB_HOST', 'localhost');
define('DB_NAME', 'cyruwjtb_portfolio'); // Your cPanel database name
define('DB_USER', 'cyruwjtb_portfolio'); // Your cPanel database username
define('DB_PASS', 'your_database_password'); // Your cPanel database password

// Alternative: Use environment variables if available
if (getenv('DB_HOST')) {
    define('DB_HOST', getenv('DB_HOST'));
}
if (getenv('DB_NAME')) {
    define('DB_NAME', getenv('DB_NAME'));
}
if (getenv('DB_USER')) {
    define('DB_USER', getenv('DB_USER'));
}
if (getenv('DB_PASS')) {
    define('DB_PASS', getenv('DB_PASS'));
}

// Database connection function
function getDatabaseConnection() {
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch(PDOException $e) {
        // Log error but don't expose database details
        error_log("Database connection failed: " . $e->getMessage());
        
        // Return false instead of dying to allow graceful degradation
        return false;
    }
}

// Function to create database if it doesn't exist
function createDatabaseIfNotExists() {
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Create database
        $pdo->exec("CREATE DATABASE IF NOT EXISTS " . DB_NAME);
        $pdo->exec("USE " . DB_NAME);
        
        return $pdo;
    } catch(PDOException $e) {
        error_log("Database creation failed: " . $e->getMessage());
        return false;
    }
}

// Function to check if database connection is working
function isDatabaseConnected() {
    $pdo = getDatabaseConnection();
    return $pdo !== false;
}
?>
