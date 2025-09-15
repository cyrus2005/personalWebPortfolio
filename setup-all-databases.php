<?php
// Complete Database Setup Script for cPanel Hosting
// This script will create all necessary databases and tables

echo "<h1>Complete Database Setup for Cyrus Wilburn Portfolio</h1>";
echo "<p>This script will create all necessary databases and tables for your portfolio and sub-websites.</p>";

// Include shared database configuration
require_once 'shared-config/database.php';

// Test main database connection first
echo "<h2>Testing Main Database Connection</h2>";
$main_pdo = getDatabaseConnection();
if ($main_pdo) {
    echo "<div style='background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
    echo "<strong>✅ Main database connection successful!</strong><br>";
    echo "Database: " . DB_NAME . "<br>";
    echo "User: " . DB_USER;
    echo "</div>";
} else {
    echo "<div style='background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
    echo "<strong>❌ Main database connection failed!</strong><br>";
    echo "Please check your database credentials in shared-config/database.php";
    echo "</div>";
    exit;
}

// Create individual site databases
$sites = ['nicheport', 'barber', 'cafe'];

echo "<h2>Creating Site-Specific Databases</h2>";
foreach ($sites as $site) {
    echo "<h3>Setting up $site database...</h3>";
    
    $pdo = getSiteDatabaseConnection($site);
    if ($pdo) {
        echo "<div style='background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 5px 0;'>";
        echo "✅ $site database created/connected successfully";
        echo "</div>";
        
        // Create tables based on site type
        createSiteTables($pdo, $site);
    } else {
        echo "<div style='background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin: 5px 0;'>";
        echo "❌ Failed to create $site database";
        echo "</div>";
    }
}

// Create tables for main portfolio database
echo "<h2>Setting up Main Portfolio Database Tables</h2>";
createPortfolioTables($main_pdo);

echo "<h2>Database Setup Complete!</h2>";
echo "<div style='background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
echo "<strong>✅ All databases and tables have been created successfully!</strong><br>";
echo "Your portfolio and sub-websites should now work properly.";
echo "</div>";

// Function to create site-specific tables
function createSiteTables($pdo, $site) {
    try {
        switch ($site) {
            case 'nicheport':
                // NichePort tables
                $tables = [
                    "CREATE TABLE IF NOT EXISTS contact_messages (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        name VARCHAR(255) NOT NULL,
                        email VARCHAR(255) NOT NULL,
                        phone VARCHAR(20),
                        message TEXT NOT NULL,
                        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        status ENUM('new', 'read', 'replied') DEFAULT 'new'
                    )",
                    "CREATE TABLE IF NOT EXISTS quote_requests (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        name VARCHAR(255) NOT NULL,
                        email VARCHAR(255) NOT NULL,
                        phone VARCHAR(20),
                        vehicle_year VARCHAR(10),
                        vehicle_make VARCHAR(100),
                        vehicle_model VARCHAR(100),
                        damage_description TEXT,
                        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        status ENUM('new', 'contacted', 'quoted', 'completed') DEFAULT 'new'
                    )"
                ];
                break;
                
            case 'barber':
                // Barber Shop tables
                $tables = [
                    "CREATE TABLE IF NOT EXISTS newsletter_subscribers (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        email VARCHAR(255) UNIQUE NOT NULL,
                        subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        status ENUM('active', 'unsubscribed') DEFAULT 'active'
                    )",
                    "CREATE TABLE IF NOT EXISTS contact_messages (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        name VARCHAR(255) NOT NULL,
                        email VARCHAR(255) NOT NULL,
                        phone VARCHAR(20),
                        message TEXT NOT NULL,
                        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        status ENUM('new', 'read', 'replied') DEFAULT 'new'
                    )",
                    "CREATE TABLE IF NOT EXISTS bookings (
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
                    )"
                ];
                break;
                
            case 'cafe':
                // Cafe tables
                $tables = [
                    "CREATE TABLE IF NOT EXISTS contact_messages (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        name VARCHAR(255) NOT NULL,
                        email VARCHAR(255) NOT NULL,
                        phone VARCHAR(20),
                        message TEXT NOT NULL,
                        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        status ENUM('new', 'read', 'replied') DEFAULT 'new'
                    )",
                    "CREATE TABLE IF NOT EXISTS newsletter_subscribers (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        email VARCHAR(255) UNIQUE NOT NULL,
                        subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        status ENUM('active', 'unsubscribed') DEFAULT 'active'
                    )"
                ];
                break;
        }
        
        foreach ($tables as $sql) {
            $pdo->exec($sql);
        }
        
        echo "<div style='background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 5px 0;'>";
        echo "✅ $site tables created successfully";
        echo "</div>";
        
    } catch(PDOException $e) {
        echo "<div style='background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin: 5px 0;'>";
        echo "❌ Error creating $site tables: " . $e->getMessage();
        echo "</div>";
    }
}

// Function to create portfolio tables
function createPortfolioTables($pdo) {
    try {
        $tables = [
            "CREATE TABLE IF NOT EXISTS contact_messages (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                phone VARCHAR(20),
                company VARCHAR(255),
                project_type VARCHAR(100),
                message TEXT NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                status ENUM('new', 'read', 'replied') DEFAULT 'new'
            )",
            "CREATE TABLE IF NOT EXISTS newsletter_subscribers (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255) UNIQUE NOT NULL,
                subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                status ENUM('active', 'unsubscribed') DEFAULT 'active'
            )"
        ];
        
        foreach ($tables as $sql) {
            $pdo->exec($sql);
        }
        
        echo "<div style='background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 5px 0;'>";
        echo "✅ Portfolio tables created successfully";
        echo "</div>";
        
    } catch(PDOException $e) {
        echo "<div style='background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin: 5px 0;'>";
        echo "❌ Error creating portfolio tables: " . $e->getMessage();
        echo "</div>";
    }
}
?>

<div style="background: #fff3cd; padding: 15px; border-radius: 5px; margin: 20px 0;">
    <h3>Security Note:</h3>
    <p>After setting up your databases, delete this file for security:</p>
    <code>rm setup-all-databases.php</code>
</div>
