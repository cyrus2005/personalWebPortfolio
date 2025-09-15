<?php
// Database Setup Script for cPanel Hosting
// Run this script once to set up your database configuration

echo "<h1>Database Setup for Cyrus Wilburn Portfolio</h1>";
echo "<p>This script will help you configure your database settings for cPanel hosting.</p>";

// Check if form was submitted
if ($_POST['setup_database']) {
    $db_host = $_POST['db_host'] ?? 'localhost';
    $db_name = $_POST['db_name'] ?? '';
    $db_user = $_POST['db_user'] ?? '';
    $db_pass = $_POST['db_pass'] ?? '';
    
    if ($db_name && $db_user) {
        // Test database connection
        try {
            $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            echo "<div style='background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
            echo "<strong>✅ Database connection successful!</strong><br>";
            echo "Host: $db_host<br>";
            echo "Database: $db_name<br>";
            echo "User: $db_user";
            echo "</div>";
            
            // Update shared database config
            $config_content = "<?php
// Universal Database Configuration for cPanel Hosting
// This file should be included by all websites

// cPanel Database Configuration
define('DB_HOST', '$db_host');
define('DB_NAME', '$db_name');
define('DB_USER', '$db_user');
define('DB_PASS', '$db_pass');

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
        \$pdo = new PDO(\"mysql:host=\" . DB_HOST . \";dbname=\" . DB_NAME, DB_USER, DB_PASS);
        \$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        \$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return \$pdo;
    } catch(PDOException \$e) {
        error_log(\"Database connection failed: \" . \$e->getMessage());
        return false;
    }
}

// Function to create database if it doesn't exist
function createDatabaseIfNotExists() {
    try {
        \$pdo = new PDO(\"mysql:host=\" . DB_HOST, DB_USER, DB_PASS);
        \$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        \$pdo->exec(\"CREATE DATABASE IF NOT EXISTS \" . DB_NAME);
        \$pdo->exec(\"USE \" . DB_NAME);
        return \$pdo;
    } catch(PDOException \$e) {
        error_log(\"Database creation failed: \" . \$e->getMessage());
        return false;
    }
}

// Function to check if database connection is working
function isDatabaseConnected() {
    \$pdo = getDatabaseConnection();
    return \$pdo !== false;
}
?>";
            
            if (file_put_contents('shared-config/database.php', $config_content)) {
                echo "<div style='background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
                echo "<strong>✅ Database configuration saved successfully!</strong><br>";
                echo "Your websites should now work properly.";
                echo "</div>";
            } else {
                echo "<div style='background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
                echo "<strong>❌ Error saving configuration file.</strong><br>";
                echo "Please check file permissions.";
                echo "</div>";
            }
            
        } catch(PDOException $e) {
            echo "<div style='background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
            echo "<strong>❌ Database connection failed:</strong><br>";
            echo $e->getMessage();
            echo "</div>";
        }
    } else {
        echo "<div style='background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
        echo "<strong>❌ Please fill in all required fields.</strong>";
        echo "</div>";
    }
}
?>

<form method="POST" style="background: #f8f9fa; padding: 20px; border-radius: 5px; margin: 20px 0;">
    <h2>Database Configuration</h2>
    <p>Enter your cPanel database details:</p>
    
    <div style="margin: 15px 0;">
        <label for="db_host" style="display: block; margin-bottom: 5px; font-weight: bold;">Database Host:</label>
        <input type="text" id="db_host" name="db_host" value="localhost" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 3px;">
    </div>
    
        <div style="margin: 15px 0;">
            <label for="db_name" style="display: block; margin-bottom: 5px; font-weight: bold;">Database Name: *</label>
            <input type="text" id="db_name" name="db_name" value="cyruwjtb_main" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 3px;">
        </div>
    
    <div style="margin: 15px 0;">
        <label for="db_user" style="display: block; margin-bottom: 5px; font-weight: bold;">Database Username: *</label>
        <input type="text" id="db_user" name="db_user" value="cyruwjtb_admin" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 3px;">
    </div>
    
    <div style="margin: 15px 0;">
        <label for="db_pass" style="display: block; margin-bottom: 5px; font-weight: bold;">Database Password: *</label>
        <input type="password" id="db_pass" name="db_pass" value="Pjah6966!$" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 3px;">
    </div>
    
    <button type="submit" name="setup_database" value="1" style="background: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 3px; cursor: pointer; font-size: 16px;">
        Test & Save Configuration
    </button>
</form>

<div style="background: #e7f3ff; padding: 15px; border-radius: 5px; margin: 20px 0;">
    <h3>How to find your database details in cPanel:</h3>
    <ol>
        <li>Log into your cPanel</li>
        <li>Go to "MySQL Databases"</li>
        <li>Create a new database (e.g., "portfolio")</li>
        <li>Create a new database user</li>
        <li>Add the user to the database with all privileges</li>
        <li>Note down the database name, username, and password</li>
    </ol>
    <p><strong>Note:</strong> cPanel usually prefixes database names and usernames with your account name (e.g., "cyruwjtb_portfolio").</p>
</div>

<div style="background: #fff3cd; padding: 15px; border-radius: 5px; margin: 20px 0;">
    <h3>Security Note:</h3>
    <p>After setting up your database, delete this file for security:</p>
    <code>rm setup-database.php</code>
</div>
