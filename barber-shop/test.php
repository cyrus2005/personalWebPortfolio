<?php
// Test file for Barber Shop
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>Barber Shop Test</h1>";

try {
    require_once 'config/database.php';
    echo "<div style='background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
    echo "✅ Database config loaded successfully";
    echo "</div>";
    
    if (isset($pdo) && $pdo) {
        echo "<div style='background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
        echo "✅ Database connection successful";
        echo "</div>";
    } else {
        echo "<div style='background: #fff3cd; color: #856404; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
        echo "⚠️ Database connection failed, but site can still work";
        echo "</div>";
    }
    
} catch (Exception $e) {
    echo "<div style='background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
    echo "❌ Error: " . $e->getMessage();
    echo "</div>";
}

echo "<p><a href='index.php'>Try the main Barber Shop page</a></p>";
?>
