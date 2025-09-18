<?php
// Debug Database Connection
// This will show us exactly what's happening with the database connection

echo "<h1>Database Connection Debug</h1>\n";

// Test the exact credentials you provided
$host = 'localhost';
$dbname = 'cyruwjtb_main';
$username = 'cyruwjtb_admin';
$password = 'P9mP6qACw9LL';

echo "<h3>Testing with exact credentials:</h3>\n";
echo "<ul>\n";
echo "<li><strong>Host:</strong> $host</li>\n";
echo "<li><strong>Database:</strong> $dbname</li>\n";
echo "<li><strong>Username:</strong> $username</li>\n";
echo "<li><strong>Password:</strong> " . str_repeat('*', strlen($password)) . "</li>\n";
echo "</ul>\n";

try {
    echo "<p>Attempting connection...</p>\n";
    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    echo "<p style='color: green; font-weight: bold;'>✅ SUCCESS! Database connection worked!</p>\n";
    
    // Test a simple query
    $stmt = $pdo->query("SELECT 1 as test");
    $result = $stmt->fetch();
    echo "<p style='color: green;'>✅ Query test successful: " . $result['test'] . "</p>\n";
    
    // Check if table exists
    $stmt = $pdo->query("SHOW TABLES LIKE 'contact_submissions'");
    if ($stmt->rowCount() > 0) {
        echo "<p style='color: green;'>✅ Table 'contact_submissions' exists</p>\n";
        
        // Get record count
        $stmt = $pdo->query("SELECT COUNT(*) as count FROM contact_submissions");
        $count = $stmt->fetch()['count'];
        echo "<p><strong>Total Records:</strong> $count</p>\n";
    } else {
        echo "<p style='color: orange;'>⚠️ Table 'contact_submissions' does not exist</p>\n";
        echo "<p>Creating table now...</p>\n";
        
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
        echo "<p style='color: green;'>✅ Table created successfully!</p>\n";
    }
    
} catch (PDOException $e) {
    echo "<p style='color: red; font-weight: bold;'>❌ CONNECTION FAILED!</p>\n";
    echo "<p><strong>Error Code:</strong> " . $e->getCode() . "</p>\n";
    echo "<p><strong>Error Message:</strong> " . $e->getMessage() . "</p>\n";
    
    // Try to diagnose the issue
    echo "<h3>Diagnosis:</h3>\n";
    
    if (strpos($e->getMessage(), 'Access denied') !== false) {
        echo "<p style='color: red;'>❌ <strong>Access Denied:</strong> Username or password is incorrect</p>\n";
        echo "<p>Please double-check your database credentials in cPanel.</p>\n";
    } elseif (strpos($e->getMessage(), 'Unknown database') !== false) {
        echo "<p style='color: red;'>❌ <strong>Unknown Database:</strong> Database '$dbname' does not exist</p>\n";
        echo "<p>Please check if the database name is correct in cPanel.</p>\n";
    } elseif (strpos($e->getMessage(), 'Connection refused') !== false) {
        echo "<p style='color: red;'>❌ <strong>Connection Refused:</strong> Cannot connect to database server</p>\n";
        echo "<p>The database server might be down or the host is incorrect.</p>\n";
    } else {
        echo "<p style='color: red;'>❌ <strong>Other Error:</strong> " . $e->getMessage() . "</p>\n";
    }
}

echo "<h3>Next Steps:</h3>\n";
echo "<ul>\n";
echo "<li>If connection worked: <a href='index.php#contact'>Test your contact form</a></li>\n";
echo "<li>If connection failed: Check your cPanel database settings</li>\n";
echo "<li>Check cPanel → MySQL Databases for the correct host</li>\n";
echo "</ul>\n";
?>
