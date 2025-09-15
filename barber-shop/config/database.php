<?php
// Include shared database configuration
require_once '../../shared-config/database.php';

// Get database connection for this site
$pdo = getSiteDatabaseConnection('barber');

// If database connection fails, create database and tables
if (!$pdo) {
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