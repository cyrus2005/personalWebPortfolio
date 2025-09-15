<?php
// Database setup script for Generic Collision Shop
// Run this once to create the database and tables

// Database configuration
$host = 'localhost';
$dbname = 'generic_collision';
$username = 'root';
$password = '';

try {
    // Connect to MySQL server (without database)
    $pdo = new PDO("mysql:host=$host", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create database if it doesn't exist
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    echo "Database '$dbname' created successfully or already exists.\n";
    
    // Connect to the specific database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create tables
    $tables = [
        "customers" => "
            CREATE TABLE IF NOT EXISTS customers (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100) NOT NULL,
                email VARCHAR(100) NOT NULL,
                phone VARCHAR(20) NOT NULL,
                address TEXT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                INDEX idx_email (email),
                INDEX idx_phone (phone)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ",
        
        "vehicles" => "
            CREATE TABLE IF NOT EXISTS vehicles (
                id INT AUTO_INCREMENT PRIMARY KEY,
                customer_id INT NOT NULL,
                year INT NOT NULL,
                make VARCHAR(50) NOT NULL,
                model VARCHAR(50) NOT NULL,
                vin VARCHAR(17),
                license_plate VARCHAR(20),
                color VARCHAR(30),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (customer_id) REFERENCES customers(id) ON DELETE CASCADE,
                INDEX idx_customer (customer_id),
                INDEX idx_make_model (make, model)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ",
        
        "estimates" => "
            CREATE TABLE IF NOT EXISTS estimates (
                id INT AUTO_INCREMENT PRIMARY KEY,
                customer_id INT NOT NULL,
                vehicle_id INT NOT NULL,
                damage_description TEXT,
                photos TEXT,
                status ENUM('pending', 'reviewed', 'contacted', 'completed') DEFAULT 'pending',
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                notes TEXT,
                FOREIGN KEY (customer_id) REFERENCES customers(id) ON DELETE CASCADE,
                FOREIGN KEY (vehicle_id) REFERENCES vehicles(id) ON DELETE CASCADE,
                INDEX idx_customer (customer_id),
                INDEX idx_status (status),
                INDEX idx_created (created_at)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ",
        
        "contact_submissions" => "
            CREATE TABLE IF NOT EXISTS contact_submissions (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100) NOT NULL,
                email VARCHAR(100) NOT NULL,
                phone VARCHAR(20),
                message TEXT NOT NULL,
                type ENUM('general', 'estimate', 'service') DEFAULT 'general',
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                INDEX idx_email (email),
                INDEX idx_type (type),
                INDEX idx_created (created_at)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        "
    ];
    
    // Execute table creation
    foreach ($tables as $tableName => $sql) {
        $pdo->exec($sql);
        echo "Table '$tableName' created successfully or already exists.\n";
    }
    
    // Insert sample data (optional)
    $sampleData = [
        "INSERT IGNORE INTO customers (name, email, phone, address) VALUES 
        ('John Smith', 'john@example.com', '270-555-0123', '123 Oak Street, Your City, KY 12345'),
        ('Sarah Johnson', 'sarah@example.com', '270-555-0124', '456 Pine Avenue, Your City, KY 12345')",
        
        "INSERT IGNORE INTO vehicles (customer_id, year, make, model, color) VALUES 
        (1, 2020, 'Honda', 'Civic', 'Silver'),
        (2, 2019, 'Toyota', 'Camry', 'Blue')",
        
        "INSERT IGNORE INTO estimates (customer_id, vehicle_id, damage_description, status, notes) VALUES 
        (1, 1, 'Front bumper damage from minor collision', 'completed', 'Repair completed successfully'),
        (2, 2, 'Side door dent from parking lot incident', 'pending', 'Waiting for insurance approval')"
    ];
    
    foreach ($sampleData as $sql) {
        $pdo->exec($sql);
    }
    echo "Sample data inserted successfully.\n";
    
    echo "\nDatabase setup completed successfully!\n";
    echo "You can now access the website at: http://localhost/nichePort/\n";
    
} catch (PDOException $e) {
    echo "Database setup failed: " . $e->getMessage() . "\n";
    exit(1);
}
?>
