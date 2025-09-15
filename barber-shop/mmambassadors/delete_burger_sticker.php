<?php
// Delete the burger sticker from the database and file system
require_once 'config/database.php';

try {
    $database = new Database();
    $db = $database->getConnection();
    
    // First, get the burger sticker record
    $get_query = "SELECT * FROM gallery_images WHERE title = 'BurgerSticker'";
    $stmt = $db->prepare($get_query);
    $stmt->execute();
    $burger_sticker = $stmt->fetch();
    
    if ($burger_sticker) {
        echo "Found burger sticker in database:\n";
        echo "ID: " . $burger_sticker['id'] . "\n";
        echo "Filename: " . $burger_sticker['filename'] . "\n";
        echo "Title: " . $burger_sticker['title'] . "\n";
        
        // Delete the file if it exists
        $file_path = 'mediaGallery/' . $burger_sticker['filename'];
        if (file_exists($file_path)) {
            if (unlink($file_path)) {
                echo "File deleted: " . $file_path . "\n";
            } else {
                echo "Failed to delete file: " . $file_path . "\n";
            }
        } else {
            echo "File not found: " . $file_path . "\n";
        }
        
        // Delete from database
        $delete_query = "DELETE FROM gallery_images WHERE id = ?";
        $delete_stmt = $db->prepare($delete_query);
        $result = $delete_stmt->execute([$burger_sticker['id']]);
        
        if ($result) {
            echo "Burger sticker deleted from database successfully!\n";
        } else {
            echo "Failed to delete from database\n";
        }
    } else {
        echo "No burger sticker found in database\n";
    }
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
