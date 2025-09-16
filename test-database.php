<?php
// Database Connection Test Script
// This script tests the database connection and shows current status

// Include database configuration (local first, then production)
$config_paths = [
    'local-config/database.php',  // Local development
    'shared-config/database.php'  // Production
];

$config_loaded = false;
foreach ($config_paths as $path) {
    if (file_exists($path)) {
        require_once $path;
        $config_loaded = true;
        break;
    }
}

if (!$config_loaded) {
    echo "<p style='color: red;'>❌ No database configuration found!</p>\n";
    exit;
}

echo "<h1>Database Connection Test</h1>\n";
echo "<p>Testing database connection for Cyrus Wilburn Portfolio...</p>\n";

try {
    // Test database connection
    $pdo = getDatabaseConnection();
    
    if (!$pdo) {
        echo "<p style='color: red; font-weight: bold;'>❌ Database connection FAILED!</p>\n";
        echo "<p>Please check your database credentials in shared-config/database.php</p>\n";
        echo "<h3>Current Configuration:</h3>\n";
        echo "<ul>\n";
        echo "<li><strong>Host:</strong> " . DB_HOST . "</li>\n";
        echo "<li><strong>Database:</strong> " . DB_NAME . "</li>\n";
        echo "<li><strong>User:</strong> " . DB_USER . "</li>\n";
        echo "<li><strong>Password:</strong> " . (defined('DB_PASS') ? '***hidden***' : 'Not set') . "</li>\n";
        echo "</ul>\n";
        exit;
    }
    
    echo "<p style='color: green; font-weight: bold;'>✅ Database connection SUCCESSFUL!</p>\n";
    
    // Show database info
    echo "<h3>Database Information:</h3>\n";
    echo "<ul>\n";
    echo "<li><strong>Host:</strong> " . DB_HOST . "</li>\n";
    echo "<li><strong>Database:</strong> " . DB_NAME . "</li>\n";
    echo "<li><strong>User:</strong> " . DB_USER . "</li>\n";
    echo "<li><strong>PHP Version:</strong> " . phpversion() . "</li>\n";
    echo "<li><strong>PDO MySQL Available:</strong> " . (extension_loaded('pdo_mysql') ? 'Yes' : 'No') . "</li>\n";
    echo "</ul>\n";
    
    // Check if tables exist
    echo "<h3>Table Status:</h3>\n";
    $tables = ['contact_submissions', 'project_inquiries', 'admin_users', 'activity_log'];
    
    foreach ($tables as $table) {
        try {
            $stmt = $pdo->query("SHOW TABLES LIKE '$table'");
            if ($stmt->rowCount() > 0) {
                echo "<p style='color: green;'>✅ Table '$table' exists</p>\n";
                
                // Show row count
                $countStmt = $pdo->query("SELECT COUNT(*) as count FROM $table");
                $count = $countStmt->fetch()['count'];
                echo "<p style='margin-left: 20px; color: blue;'>📊 Records: $count</p>\n";
            } else {
                echo "<p style='color: orange;'>⚠️ Table '$table' does not exist</p>\n";
            }
        } catch (Exception $e) {
            echo "<p style='color: red;'>❌ Error checking table '$table': " . $e->getMessage() . "</p>\n";
        }
    }
    
    // Test a simple query
    echo "<h3>Query Test:</h3>\n";
    try {
        $stmt = $pdo->query("SELECT NOW() as current_time");
        $result = $stmt->fetch();
        echo "<p style='color: green;'>✅ Query successful!</p>\n";
        echo "<p><strong>Current Time:</strong> " . $result['current_time'] . "</p>\n";
        echo "<p><strong>Current Database:</strong> " . DB_NAME . "</p>\n";
    } catch (Exception $e) {
        echo "<p style='color: red;'>❌ Query test failed: " . $e->getMessage() . "</p>\n";
    }
    
    echo "<h3>Next Steps:</h3>\n";
    echo "<ul>\n";
    echo "<li>If tables don't exist, run <a href='setup-database.php'>setup-database.php</a></li>\n";
    echo "<li>Test the contact form on your main page</li>\n";
    echo "<li>Check the admin panel at <a href='admin/'>admin/</a></li>\n";
    echo "</ul>\n";
    
} catch (Exception $e) {
    echo "<p style='color: red; font-weight: bold;'>❌ Error: " . $e->getMessage() . "</p>\n";
}
?>
