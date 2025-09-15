<?php
// Test database connection
require_once '../config/database.php';

try {
    $database = new Database();
    $db = $database->getConnection();
    echo "Database connection successful!\n";
    
    // Test if events table exists
    $stmt = $db->query("SHOW TABLES LIKE 'events'");
    if ($stmt->rowCount() > 0) {
        echo "Events table exists!\n";
        
        // Test inserting a simple event
        $insert_query = "INSERT INTO events (title, description, event_date, location, status, created_at) VALUES (?, ?, ?, ?, ?, NOW())";
        $stmt = $db->prepare($insert_query);
        
        $result = $stmt->execute([
            'Test Event',
            'Test Description',
            '2025-09-11 14:00:00',
            'Test Location',
            'upcoming'
        ]);
        
        if ($result) {
            echo "Test event inserted successfully!\n";
        } else {
            echo "Failed to insert test event\n";
        }
    } else {
        echo "Events table does not exist!\n";
    }
    
} catch (Exception $e) {
    echo "Database error: " . $e->getMessage() . "\n";
}
?>
