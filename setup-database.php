<?php
// Database Setup Script for Cyrus Wilburn Portfolio
// This script will create the necessary database tables

// Include database configuration
require_once 'shared-config/database.php';

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

// Function to create admin users table
function createAdminUsersTable($pdo) {
    try {
        $sql = "CREATE TABLE IF NOT EXISTS admin_users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) UNIQUE NOT NULL,
            email VARCHAR(100) UNIQUE NOT NULL,
            password_hash VARCHAR(255) NOT NULL,
            role ENUM('admin', 'moderator') DEFAULT 'admin',
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            last_login TIMESTAMP NULL,
            is_active BOOLEAN DEFAULT TRUE
        )";
        
        $pdo->exec($sql);
        return true;
    } catch(PDOException $e) {
        error_log("Failed to create admin_users table: " . $e->getMessage());
        return false;
    }
}

// Function to create activity log table
function createActivityLogTable($pdo) {
    try {
        $sql = "CREATE TABLE IF NOT EXISTS activity_log (
            id INT AUTO_INCREMENT PRIMARY KEY,
            user_id INT,
            action VARCHAR(100) NOT NULL,
            description TEXT,
            ip_address VARCHAR(45),
            user_agent TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (user_id) REFERENCES admin_users(id) ON DELETE SET NULL
        )";
        
        $pdo->exec($sql);
        return true;
    } catch(PDOException $e) {
        error_log("Failed to create activity_log table: " . $e->getMessage());
        return false;
    }
}

// Main setup function
function setupDatabase() {
    echo "<h1>Database Setup for Cyrus Wilburn Portfolio</h1>\n";
    echo "<p>Setting up database tables...</p>\n";
    
    try {
        // Test database connection
        $pdo = getDatabaseConnection();
        if (!$pdo) {
            echo "<p style='color: red;'>❌ Database connection failed!</p>\n";
            echo "<p>Please check your database credentials in shared-config/database.php</p>\n";
            return false;
        }
        
        echo "<p style='color: green;'>✅ Database connection successful!</p>\n";
        
        // Create tables
        $tables = [
            'contact_submissions' => 'createContactTable',
            'project_inquiries' => 'createProjectInquiriesTable',
            'admin_users' => 'createAdminUsersTable',
            'activity_log' => 'createActivityLogTable'
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
            echo "<h2>🎉 Database setup completed successfully!</h2>\n";
            echo "<p>Your database is now ready to handle contact form submissions.</p>\n";
            
            // Show database info
            echo "<h3>Database Information:</h3>\n";
            echo "<ul>\n";
            echo "<li><strong>Host:</strong> " . DB_HOST . "</li>\n";
            echo "<li><strong>Database:</strong> " . DB_NAME . "</li>\n";
            echo "<li><strong>User:</strong> " . DB_USER . "</li>\n";
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
            
        } else {
            echo "<h2>❌ Database setup completed with errors</h2>\n";
            echo "<p>Please check the error messages above and try again.</p>\n";
        }
        
        return $success;
        
    } catch (Exception $e) {
        echo "<p style='color: red;'>❌ Setup failed: " . $e->getMessage() . "</p>\n";
        return false;
    }
}

// Run setup if accessed directly
if (basename($_SERVER['PHP_SELF']) === 'setup-database.php') {
    setupDatabase();
}
?>
