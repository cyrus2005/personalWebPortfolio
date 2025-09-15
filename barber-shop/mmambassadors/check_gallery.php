<?php
// Check what images are in the gallery database
require_once 'config/database.php';

try {
    $database = new Database();
    $db = $database->getConnection();
    
    // Get all gallery images
    $gallery_query = "SELECT * FROM gallery_images ORDER BY created_at DESC";
    $stmt = $db->prepare($gallery_query);
    $stmt->execute();
    $images = $stmt->fetchAll();
    
    echo "Gallery images in database:\n";
    echo "==========================\n";
    
    if (empty($images)) {
        echo "No images found in gallery database.\n";
    } else {
        foreach ($images as $image) {
            echo "ID: " . $image['id'] . "\n";
            echo "Filename: " . $image['filename'] . "\n";
            echo "Title: " . $image['title'] . "\n";
            echo "Description: " . $image['description'] . "\n";
            echo "Category: " . $image['category'] . "\n";
            echo "Created: " . $image['created_at'] . "\n";
            echo "---\n";
        }
    }
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
