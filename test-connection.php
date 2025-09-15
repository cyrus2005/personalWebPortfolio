<?php
// Simple test file to diagnose the 500 error
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>Connection Test</h1>";
echo "<p>Testing basic PHP functionality...</p>";

// Test 1: Basic PHP
echo "<div style='background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
echo "✅ PHP is working - Current time: " . date('Y-m-d H:i:s');
echo "</div>";

// Test 2: File includes
echo "<h2>Testing File Includes</h2>";
try {
    if (file_exists('shared-config/database.php')) {
        echo "<div style='background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
        echo "✅ shared-config/database.php exists";
        echo "</div>";
        
        require_once 'shared-config/database.php';
        echo "<div style='background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
        echo "✅ Database config loaded successfully";
        echo "</div>";
    } else {
        echo "<div style='background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
        echo "❌ shared-config/database.php not found";
        echo "</div>";
    }
} catch (Exception $e) {
    echo "<div style='background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
    echo "❌ Error loading database config: " . $e->getMessage();
    echo "</div>";
}

// Test 3: Database connection
echo "<h2>Testing Database Connection</h2>";
try {
    $pdo = getDatabaseConnection();
    if ($pdo) {
        echo "<div style='background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
        echo "✅ Database connection successful!";
        echo "<br>Host: " . DB_HOST;
        echo "<br>Database: " . DB_NAME;
        echo "<br>User: " . DB_USER;
        echo "</div>";
    } else {
        echo "<div style='background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
        echo "❌ Database connection failed";
        echo "</div>";
    }
} catch (Exception $e) {
    echo "<div style='background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
    echo "❌ Database error: " . $e->getMessage();
    echo "</div>";
}

// Test 4: File permissions
echo "<h2>Testing File Permissions</h2>";
$files_to_check = [
    'index.php',
    'shared-config/database.php',
    'assets/css/style.css',
    'assets/js/script.js'
];

foreach ($files_to_check as $file) {
    if (file_exists($file)) {
        $perms = fileperms($file);
        $readable = is_readable($file) ? "✅" : "❌";
        echo "<div style='background: #e7f3ff; padding: 5px; border-radius: 3px; margin: 5px 0;'>";
        echo "$readable $file - Permissions: " . substr(sprintf('%o', $perms), -4);
        echo "</div>";
    } else {
        echo "<div style='background: #f8d7da; color: #721c24; padding: 5px; border-radius: 3px; margin: 5px 0;'>";
        echo "❌ $file - File not found";
        echo "</div>";
    }
}

// Test 5: PHP extensions
echo "<h2>Testing PHP Extensions</h2>";
$extensions = ['pdo', 'pdo_mysql', 'curl', 'json'];
foreach ($extensions as $ext) {
    $status = extension_loaded($ext) ? "✅" : "❌";
    echo "<div style='background: #e7f3ff; padding: 5px; border-radius: 3px; margin: 5px 0;'>";
    echo "$status $ext extension";
    echo "</div>";
}

echo "<h2>Server Information</h2>";
echo "<div style='background: #e7f3ff; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Server: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo "Current Directory: " . getcwd();
echo "</div>";

echo "<p><strong>If you see any ❌ errors above, those are likely causing the 500 error.</strong></p>";
?>
