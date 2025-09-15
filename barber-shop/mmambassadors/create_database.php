<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Creating mmambassadors database...\n";

try {
    // Connect to MySQL without specifying database
    $pdo = new PDO("mysql:host=localhost", "mmambasadors_user", "motorcycleJesus4ever");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create database (replace YOURCPANELUSERNAME with your actual cPanel username)
    $db_name = "YOURCPANELUSERNAME_mmambassadors";
    $pdo->exec("CREATE DATABASE IF NOT EXISTS $db_name CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    echo "✓ Database '$db_name' created successfully!\n";
    
    // Test connection to the new database
    $pdo = new PDO("mysql:host=localhost;dbname=$db_name", "mmambasadors_user", "motorcycleJesus4ever");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✓ Connection to mmambassadors database successful!\n";
    
} catch(PDOException $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
    echo "Make sure XAMPP MySQL is running!\n";
}
?>
