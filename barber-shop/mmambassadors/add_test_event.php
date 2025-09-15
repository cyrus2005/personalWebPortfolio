<?php
// Add a test event to the database
require_once 'config/database.php';

try {
    $database = new Database();
    $db = $database->getConnection();
    
    // Insert a test event
    $insert_query = "INSERT INTO events (title, description, event_date, location, status, created_at) VALUES (?, ?, ?, ?, ?, NOW())";
    $stmt = $db->prepare($insert_query);
    
    $result = $stmt->execute([
        'Monthly Ride',
        'Join us for our monthly motorcycle ride through the countryside. All riders welcome!',
        '2025-09-15 10:00:00',
        'Church Parking Lot',
        'upcoming'
    ]);
    
    if ($result) {
        echo "Test event added successfully!\n";
        echo "Event ID: " . $db->lastInsertId() . "\n";
    } else {
        echo "Failed to add test event\n";
    }
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
