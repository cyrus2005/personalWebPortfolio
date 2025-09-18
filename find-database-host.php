<?php
// Find Database Host Script
// This script will help you find the correct database host

echo "<h1>Database Host Discovery</h1>\n";
echo "<p>This script will help you find the correct database host for your cPanel.</p>\n";

// Check if we can get database info from cPanel
echo "<h3>Server Information:</h3>\n";
echo "<ul>\n";
echo "<li><strong>Server Name:</strong> " . ($_SERVER['SERVER_NAME'] ?? 'Unknown') . "</li>\n";
echo "<li><strong>Server IP:</strong> " . ($_SERVER['SERVER_ADDR'] ?? 'Unknown') . "</li>\n";
echo "<li><strong>HTTP Host:</strong> " . ($_SERVER['HTTP_HOST'] ?? 'Unknown') . "</li>\n";
echo "<li><strong>Document Root:</strong> " . ($_SERVER['DOCUMENT_ROOT'] ?? 'Unknown') . "</li>\n";
echo "</ul>\n";

// Try to find database host from common locations
echo "<h3>Database Host Discovery:</h3>\n";

$possible_hosts = [
    'localhost',
    'mysql',
    'mysql.localhost',
    '198.187.29.124',
    'server39',
    'cyruwjtb_admin.mysql.db.hostedresource.com',
    'mysql.cyruwjtb_admin.db.hostedresource.com',
    'cyruwjtb_admin.db.hostedresource.com'
];

$working_hosts = [];

foreach ($possible_hosts as $host) {
    echo "<p>Testing host: <strong>$host</strong>...</p>\n";
    
    try {
        $pdo = new PDO("mysql:host=" . $host . ";dbname=cyruwjtb_main", 'cyruwjtb_admin', 'Pjah6966!$');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        echo "<p style='color: green;'>✅ <strong>$host</strong> - Connection successful!</p>\n";
        $working_hosts[] = $host;
        
        // Test a simple query
        $stmt = $pdo->query("SELECT 1 as test");
        $result = $stmt->fetch();
        echo "<p style='color: green;'>✅ Query test successful</p>\n";
        
    } catch (PDOException $e) {
        echo "<p style='color: red;'>❌ <strong>$host</strong> - " . $e->getMessage() . "</p>\n";
    }
}

echo "<h3>Results:</h3>\n";
if (!empty($working_hosts)) {
    echo "<p style='color: green;'>✅ Working hosts found:</p>\n";
    echo "<ul>\n";
    foreach ($working_hosts as $host) {
        echo "<li><strong>$host</strong></li>\n";
    }
    echo "</ul>\n";
    echo "<p><strong>Recommended host:</strong> " . $working_hosts[0] . "</p>\n";
} else {
    echo "<p style='color: red;'>❌ No working hosts found</p>\n";
    echo "<p>Please check your database credentials in cPanel:</p>\n";
    echo "<ol>\n";
    echo "<li>Go to cPanel → MySQL Databases</li>\n";
    echo "<li>Check the 'Current Host' or 'Server' field</li>\n";
    echo "<li>Verify your database name and username</li>\n";
    echo "</ol>\n";
}

echo "<h3>Next Steps:</h3>\n";
echo "<ul>\n";
echo "<li>✅ Test the contact form at <a href='index.php#contact'>Your Contact Form</a></li>\n";
echo "<li>📊 Check database at <a href='test-live-database.php'>Database Test</a></li>\n";
echo "<li>🔧 If needed, update the database host in shared-config/database.php</li>\n";
echo "</ul>\n";
?>
