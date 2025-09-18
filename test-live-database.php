<?php
// Test Live Database Connection and Setup
// Run this on your live site to test the production database

echo "<h1>Live Database Test</h1>\n";
echo "<p>Testing database connection for your live site...</p>\n";

// Include production database configuration
if (file_exists('shared-config/database.php')) {
    require_once 'shared-config/database.php';
    echo "<p>✅ Production database config loaded</p>\n";
    echo "<p><strong>Database:</strong> " . DB_NAME . "</p>\n";
    echo "<p><strong>Host:</strong> " . DB_HOST . "</p>\n";
    echo "<p><strong>User:</strong> " . DB_USER . "</p>\n";
} else {
    echo "<p style='color: red;'>❌ Production database config not found!</p>\n";
    exit;
}

try {
    $pdo = getDatabaseConnection();
    if (!$pdo) {
        echo "<p style='color: red;'>❌ Live database connection failed!</p>\n";
        echo "<p><strong>This means your contact form won't work on the live site.</strong></p>\n";
        echo "<p>Please check your database credentials in cPanel.</p>\n";
        exit;
    }
    
    echo "<p style='color: green;'>✅ Live database connection successful!</p>\n";
    
    // Check if table exists
    $stmt = $pdo->query("SHOW TABLES LIKE 'contact_submissions'");
    if ($stmt->rowCount() > 0) {
        echo "<p style='color: green;'>✅ Table 'contact_submissions' exists</p>\n";
        
        // Get record count
        $stmt = $pdo->query("SELECT COUNT(*) as count FROM contact_submissions");
        $count = $stmt->fetch()['count'];
        echo "<p><strong>Total Records:</strong> $count</p>\n";
        
        if ($count > 0) {
            // Show recent records
            $stmt = $pdo->query("SELECT * FROM contact_submissions ORDER BY created_at DESC LIMIT 5");
            $records = $stmt->fetchAll();
            
            echo "<h3>Recent Submissions:</h3>\n";
            echo "<table border='1' style='border-collapse: collapse; width: 100%;'>\n";
            echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Service</th><th>Created</th><th>Status</th></tr>\n";
            
            foreach ($records as $record) {
                echo "<tr>\n";
                echo "<td>" . htmlspecialchars($record['id']) . "</td>\n";
                echo "<td>" . htmlspecialchars($record['name']) . "</td>\n";
                echo "<td>" . htmlspecialchars($record['email']) . "</td>\n";
                echo "<td>" . htmlspecialchars($record['service'] ?? 'N/A') . "</td>\n";
                echo "<td>" . htmlspecialchars($record['created_at']) . "</td>\n";
                echo "<td>" . htmlspecialchars($record['status']) . "</td>\n";
                echo "</tr>\n";
            }
            echo "</table>\n";
        } else {
            echo "<p style='color: orange;'>⚠️ No records found yet</p>\n";
        }
    } else {
        echo "<p style='color: red;'>❌ Table 'contact_submissions' does not exist!</p>\n";
        echo "<p><strong>Creating the table now...</strong></p>\n";
        
        try {
            $sql = "CREATE TABLE IF NOT EXISTS contact_submissions (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100) NOT NULL,
                email VARCHAR(100) NOT NULL,
                phone VARCHAR(20),
                service VARCHAR(50),
                message TEXT NOT NULL,
                ip_address VARCHAR(45),
                user_agent TEXT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                status ENUM('new', 'contacted', 'in_progress', 'completed') DEFAULT 'new',
                notes TEXT
            )";
            
            $pdo->exec($sql);
            echo "<p style='color: green;'>✅ Table 'contact_submissions' created successfully!</p>\n";
            
            // Test insert
            $testSql = "INSERT INTO contact_submissions (name, email, message, ip_address) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($testSql);
            $result = $stmt->execute(['Test User', 'test@example.com', 'Test message from live site', $_SERVER['REMOTE_ADDR']]);
            
            if ($result) {
                $testId = $pdo->lastInsertId();
                echo "<p style='color: green;'>✅ Test insert successful! ID: $testId</p>\n";
                
                // Clean up test data
                $pdo->exec("DELETE FROM contact_submissions WHERE id = $testId");
                echo "<p style='color: blue;'>🧹 Test data cleaned up</p>\n";
            }
            
        } catch (Exception $e) {
            echo "<p style='color: red;'>❌ Failed to create table: " . $e->getMessage() . "</p>\n";
        }
    }
    
    echo "<h3>✅ Live Database Setup Complete!</h3>\n";
    echo "<p>Your contact form should now work on the live site.</p>\n";
    echo "<p><strong>Test it at:</strong> <a href='index.php#contact'>Your Contact Form</a></p>\n";
    
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Error: " . $e->getMessage() . "</p>\n";
    echo "<p>Please check your database credentials and try again.</p>\n";
}

echo "<h3>Manual Setup (if script fails):</h3>\n";
echo "<p>If the script fails, you can manually create the table in phpMyAdmin:</p>\n";
echo "<ol>\n";
echo "<li>Go to your cPanel phpMyAdmin</li>\n";
echo "<li>Select database: <strong>" . DB_NAME . "</strong></li>\n";
echo "<li>Click 'SQL' tab</li>\n";
echo "<li>Run this SQL:</li>\n";
echo "</ol>\n";
echo "<textarea style='width: 100%; height: 200px;'>CREATE TABLE IF NOT EXISTS contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    service VARCHAR(50),
    message TEXT NOT NULL,
    ip_address VARCHAR(45),
    user_agent TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('new', 'contacted', 'in_progress', 'completed') DEFAULT 'new',
    notes TEXT
);</textarea>\n";
?>
