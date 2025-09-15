<?php
// Check what events are in the database
require_once 'config/database.php';

try {
    $database = new Database();
    $db = $database->getConnection();
    
    // Get all events
    $events_query = "SELECT * FROM events ORDER BY created_at DESC";
    $stmt = $db->prepare($events_query);
    $stmt->execute();
    $events = $stmt->fetchAll();
    
    echo "Events in database:\n";
    echo "==================\n";
    
    if (empty($events)) {
        echo "No events found in database.\n";
    } else {
        foreach ($events as $event) {
            echo "ID: " . $event['id'] . "\n";
            echo "Title: " . $event['title'] . "\n";
            echo "Description: " . $event['description'] . "\n";
            echo "Date: " . $event['event_date'] . "\n";
            echo "Location: " . $event['location'] . "\n";
            echo "Status: " . $event['status'] . "\n";
            echo "Photo: " . ($event['photo_filename'] ?? 'None') . "\n";
            echo "Created: " . $event['created_at'] . "\n";
            echo "---\n";
        }
    }
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
