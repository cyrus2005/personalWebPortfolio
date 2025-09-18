<?php
// Universal Database Configuration for cPanel Hosting
// This file should be included by all websites

// cPanel Database Configuration
// Updated with actual cPanel database details
define('DB_HOST', 'localhost'); // Try localhost first, if that fails, try your cPanel host
define('DB_NAME', 'cyruwjtb_main'); // Your cPanel main database name
define('DB_USER', 'cyruwjtb_admin'); // Your cPanel database username
define('DB_PASS', 'P9mP6qACw9LL'); // Your cPanel database password

// Individual site databases (will fallback to main if they don't exist)
define('PORTFOLIO_DB', 'cyruwjtb_main');
define('NICHEPORT_DB', 'cyruwjtb_nicheport');
define('BARBER_DB', 'cyruwjtb_barber');
define('CAFE_DB', 'cyruwjtb_cafe');

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

// Database connection function with fallback to main database
function getDatabaseConnection($database = null) {
    try {
        // Use specified database or default to main
        $db_name = $database ? $database : DB_NAME;
        
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . $db_name, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch(PDOException $e) {
        // If specific database fails, try main database
        if ($database && $database !== DB_NAME) {
            try {
                $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                return $pdo;
            } catch (PDOException $e2) {
                error_log("Database connection failed for both $database and main: " . $e2->getMessage());
                return false;
            }
        }
        error_log("Database connection failed: " . $e->getMessage());
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

// Function to create individual site databases
function createSiteDatabase($site_name) {
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $db_name = "cyruwjtb_" . $site_name;
        $pdo->exec("CREATE DATABASE IF NOT EXISTS " . $db_name);
        $pdo->exec("USE " . $db_name);
        
        return $pdo;
    } catch(PDOException $e) {
        error_log("Site database creation failed for $site_name: " . $e->getMessage());
        return false;
    }
}

// Function to get database connection for specific site
function getSiteDatabaseConnection($site_name) {
    $db_name = "cyruwjtb_" . $site_name;
    $pdo = getDatabaseConnection($db_name);
    
    // If site-specific database doesn't exist, create it
    if (!$pdo) {
        $pdo = createSiteDatabase($site_name);
    }
    
    return $pdo;
}
?>
