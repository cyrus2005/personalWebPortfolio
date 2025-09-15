<?php
// Add photo_filename column to events table
require_once 'config/database.php';

try {
    $database = new Database();
    $db = $database->getConnection();
    
    // Add photo_filename column if it doesn't exist
    $alter_query = "ALTER TABLE events ADD COLUMN photo_filename VARCHAR(255) DEFAULT NULL";
    $db->exec($alter_query);
    
    echo "Photo filename column added to events table successfully!\n";
    
} catch (Exception $e) {
    if (strpos($e->getMessage(), 'Duplicate column name') !== false) {
        echo "Photo filename column already exists.\n";
    } else {
        echo "Error: " . $e->getMessage() . "\n";
    }
}
?>
