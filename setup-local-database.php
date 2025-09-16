<?php
// Local Database Setup Script for XAMPP
// This script will create the necessary database tables for local development

// Local XAMPP Database Configuration
define('LOCAL_DB_HOST', 'localhost');
define('LOCAL_DB_NAME', 'cyrus_portfolio');
define('LOCAL_DB_USER', 'root');
define('LOCAL_DB_PASS', ''); // XAMPP default is empty password

// Function to create local database connection
function getLocalDatabaseConnection() {
    try {
        $pdo = new PDO("mysql:host=" . LOCAL_DB_HOST, LOCAL_DB_USER, LOCAL_DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch(PDOException $e) {
        error_log("Local database connection failed: " . $e->getMessage());
        return false;
    }
}

// Function to create contact submissions table
function createContactTable($pdo) {
    try {
        $sql = "CREATE TABLE IF NOT EXISTS contact_submissions (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            phone VARCHAR(20),
            service VARCHAR(50),
            business VARCHAR(100),
            project VARCHAR(100),
            budget VARCHAR(50),
            message TEXT NOT NULL,
            ip_address VARCHAR(45),
            user_agent TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            status ENUM('new', 'contacted', 'in_progress', 'completed') DEFAULT 'new',
            notes TEXT
        )";
        
        $pdo->exec($sql);
        return true;
    } catch(PDOException $e) {
        error_log("Failed to create contact_submissions table: " . $e->getMessage());
        return false;
    }
}

// Function to create project inquiries table
function createProjectInquiriesTable($pdo) {
    try {
        $sql = "CREATE TABLE IF NOT EXISTS project_inquiries (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            phone VARCHAR(20),
            business_type VARCHAR(100),
            project_type VARCHAR(100),
            budget_range VARCHAR(50),
            timeline VARCHAR(100),
            current_website VARCHAR(255),
            goals TEXT,
            message TEXT,
            ip_address VARCHAR(45),
            user_agent TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            status ENUM('new', 'contacted', 'quoted', 'in_progress', 'completed') DEFAULT 'new',
            priority ENUM('low', 'medium', 'high') DEFAULT 'medium',
            notes TEXT
        )";
        
        $pdo->exec($sql);
        return true;
    } catch(PDOException $e) {
        error_log("Failed to create project_inquiries table: " . $e->getMessage());
        return false;
    }
}

// Main setup function
function setupLocalDatabase() {
    echo "<h1>Local Database Setup for Cyrus Wilburn Portfolio</h1>\n";
    echo "<p>Setting up local XAMPP database tables...</p>\n";
    
    try {
        // Test database connection
        $pdo = getLocalDatabaseConnection();
        if (!$pdo) {
            echo "<p style='color: red;'>❌ Local database connection failed!</p>\n";
            echo "<p>Please make sure XAMPP MySQL is running.</p>\n";
            echo "<p>You can start it from XAMPP Control Panel.</p>\n";
            return false;
        }
        
        echo "<p style='color: green;'>✅ Local database connection successful!</p>\n";
        
        // Create database if it doesn't exist
        try {
            $pdo->exec("CREATE DATABASE IF NOT EXISTS " . LOCAL_DB_NAME);
            $pdo->exec("USE " . LOCAL_DB_NAME);
            echo "<p style='color: green;'>✅ Database '" . LOCAL_DB_NAME . "' created/selected successfully!</p>\n";
        } catch (PDOException $e) {
            echo "<p style='color: red;'>❌ Failed to create database: " . $e->getMessage() . "</p>\n";
            return false;
        }
        
        // Create tables
        $tables = [
            'contact_submissions' => 'createContactTable',
            'project_inquiries' => 'createProjectInquiriesTable'
        ];
        
        $success = true;
        foreach ($tables as $tableName => $functionName) {
            if ($functionName($pdo)) {
                echo "<p style='color: green;'>✅ Table '$tableName' created successfully!</p>\n";
            } else {
                echo "<p style='color: red;'>❌ Failed to create table '$tableName'</p>\n";
                $success = false;
            }
        }
        
        if ($success) {
            echo "<h2>🎉 Local database setup completed successfully!</h2>\n";
            echo "<p>Your local database is now ready to handle contact form submissions.</p>\n";
            
            // Show database info
            echo "<h3>Local Database Information:</h3>\n";
            echo "<ul>\n";
            echo "<li><strong>Host:</strong> " . LOCAL_DB_HOST . "</li>\n";
            echo "<li><strong>Database:</strong> " . LOCAL_DB_NAME . "</li>\n";
            echo "<li><strong>User:</strong> " . LOCAL_DB_USER . "</li>\n";
            echo "<li><strong>Password:</strong> " . (LOCAL_DB_PASS ? '***hidden***' : 'Empty (XAMPP default)') . "</li>\n";
            echo "</ul>\n";
            
            // Test insert
            echo "<h3>Testing Database Functionality:</h3>\n";
            try {
                $testSql = "INSERT INTO contact_submissions (name, email, message, ip_address) VALUES (?, ?, ?, ?)";
                $stmt = $pdo->prepare($testSql);
                $result = $stmt->execute(['Test User', 'test@example.com', 'This is a test message', '127.0.0.1']);
                
                if ($result) {
                    $testId = $pdo->lastInsertId();
                    echo "<p style='color: green;'>✅ Test insert successful! ID: $testId</p>\n";
                    
                    // Clean up test data
                    $pdo->exec("DELETE FROM contact_submissions WHERE id = $testId");
                    echo "<p style='color: blue;'>🧹 Test data cleaned up</p>\n";
                }
            } catch (Exception $e) {
                echo "<p style='color: red;'>❌ Test insert failed: " . $e->getMessage() . "</p>\n";
            }
            
            echo "<h3>Next Steps:</h3>\n";
            echo "<ul>\n";
            echo "<li>✅ Local database is ready</li>\n";
            echo "<li>🔗 Test your contact form on the main page</li>\n";
            echo "<li>📊 View submissions in phpMyAdmin: <a href='http://localhost/phpmyadmin' target='_blank'>http://localhost/phpmyadmin</a></li>\n";
            echo "<li>🚀 When ready to deploy, use the cPanel database credentials</li>\n";
            echo "</ul>\n";
            
        } else {
            echo "<h2>❌ Local database setup completed with errors</h2>\n";
            echo "<p>Please check the error messages above and try again.</p>\n";
        }
        
        return $success;
        
    } catch (Exception $e) {
        echo "<p style='color: red;'>❌ Setup failed: " . $e->getMessage() . "</p>\n";
        return false;
    }
}

// Run setup if accessed directly
if (basename($_SERVER['PHP_SELF']) === 'setup-local-database.php') {
    setupLocalDatabase();
}
?>
