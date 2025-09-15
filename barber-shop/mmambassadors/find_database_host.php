<?php
// Script to help find the correct database host for cPanel/GoDaddy
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>Finding Correct Database Host</h2>";

$possible_hosts = [
    'localhost',
    'mysql.secureserver.net',
    'ambassadorsmmtx.com',
    'mysql.ambassadorsmmtx.com'
];

$username = "mmambasadors_user";
$password = "motorcycleJesus4ever";

foreach ($possible_hosts as $host) {
    echo "<p><strong>Trying host: $host</strong></p>";
    
    try {
        $pdo = new PDO("mysql:host=$host", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<p style='color: green;'>✓ SUCCESS! Host '$host' works!</p>";
        
        // Try to create database
        try {
            $pdo->exec("CREATE DATABASE IF NOT EXISTS mmambassadors CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
            echo "<p style='color: green;'>✓ Database 'mmambassadors' created successfully!</p>";
            
            // Test connection to the database
            $pdo = new PDO("mysql:host=$host;dbname=mmambassadors", $username, $password);
            echo "<p style='color: green;'>✓ Connected to 'mmambassadors' database!</p>";
            
            echo "<h3 style='color: green;'>🎉 FOUND WORKING HOST: $host</h3>";
            echo "<p>Update your config/database.php with this host!</p>";
            break;
            
        } catch(PDOException $e) {
            echo "<p style='color: orange;'>⚠ Connected to MySQL but can't create database: " . $e->getMessage() . "</p>";
        }
        
    } catch(PDOException $e) {
        echo "<p style='color: red;'>❌ Failed: " . $e->getMessage() . "</p>";
    }
    
    echo "<hr>";
}

echo "<h3>If none worked, check your cPanel:</h3>";
echo "<ol>";
echo "<li>Go to <strong>cPanel → MySQL Databases</strong></li>";
echo "<li>Look for <strong>Connection Strings</strong> or <strong>Host</strong> information</li>";
echo "<li>It might show something like: <code>mysql123.secureserver.net</code></li>";
echo "</ol>";
?>
