<?php
// Script to sync images from mediaGallery folder to database
require_once 'config/database.php';

$database = new Database();
$db = $database->getConnection();

$media_folder = 'mediaGallery/';
$added_count = 0;
$skipped_count = 0;
$errors = [];

echo "<h2>Syncing MediaGallery Folder with Database</h2>\n";

if (is_dir($media_folder)) {
    $files = scandir($media_folder);
    $image_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    
    echo "<p>Found " . count($files) . " files in mediaGallery folder</p>\n";
    
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        
        $file_extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        
        if (in_array($file_extension, $image_extensions)) {
            // Check if image already exists in database
            $check_query = "SELECT id FROM gallery_images WHERE filename = ?";
            $check_stmt = $db->prepare($check_query);
            $check_stmt->execute([$file]);
            
            if ($check_stmt->rowCount() === 0) {
                // Insert new image
                $insert_query = "INSERT INTO gallery_images (filename, title, description, category, featured, file_size, mime_type, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";
                $insert_stmt = $db->prepare($insert_query);
                
                $title = pathinfo($file, PATHINFO_FILENAME);
                $title = str_replace(['_', '-'], ' ', $title);
                $title = ucwords($title);
                
                $file_path = $media_folder . $file;
                $file_size = file_exists($file_path) ? filesize($file_path) : 0;
                $mime_type = 'image/' . $file_extension;
                
                try {
                    $insert_stmt->execute([
                        $file,
                        $title,
                        'Added from mediaGallery folder',
                        'general',
                        0,
                        $file_size,
                        $mime_type
                    ]);
                    
                    $added_count++;
                    echo "<p style='color: green;'>✓ Added: $file</p>\n";
                } catch (PDOException $e) {
                    $errors[] = "Error adding $file: " . $e->getMessage();
                    echo "<p style='color: red;'>✗ Error adding $file: " . $e->getMessage() . "</p>\n";
                }
            } else {
                $skipped_count++;
                echo "<p style='color: orange;'>- Skipped (already exists): $file</p>\n";
            }
        } else {
            echo "<p style='color: gray;'>- Ignored (not an image): $file</p>\n";
        }
    }
} else {
    echo "<p style='color: red;'>Error: mediaGallery folder not found!</p>\n";
}

echo "<h3>Summary:</h3>\n";
echo "<p><strong>Added:</strong> $added_count images</p>\n";
echo "<p><strong>Skipped:</strong> $skipped_count images (already in database)</p>\n";
echo "<p><strong>Errors:</strong> " . count($errors) . "</p>\n";

if (!empty($errors)) {
    echo "<h4>Errors:</h4>\n";
    foreach ($errors as $error) {
        echo "<p style='color: red;'>$error</p>\n";
    }
}

echo "<p><a href='gallery.php'>View Gallery</a> | <a href='admin/index.php'>Admin Panel</a></p>\n";
?>
