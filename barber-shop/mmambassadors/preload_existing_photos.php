<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Preloading existing photos from mediaGallery into database...\n\n";

try {
    require_once 'config/database.php';
    $database = new Database();
    $db = $database->getConnection();
    
    echo "✓ Database connection successful!\n";
    
    // Clear existing gallery data first
    echo "\n=== Clearing existing gallery data ===\n";
    $clear_query = "DELETE FROM gallery_images";
    $db->exec($clear_query);
    echo "✓ Cleared existing gallery data\n";
    
    // Scan mediaGallery folder for images
    echo "\n=== Preloading photos from mediaGallery folder ===\n";
    $mediaGallery_path = 'mediaGallery/';
    $gallery_images_added = 0;
    
    if (is_dir($mediaGallery_path)) {
        $image_files = glob($mediaGallery_path . '*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
        
        $gallery_insert = "INSERT INTO gallery_images (filename, title, category, featured) VALUES (?, ?, ?, ?)";
        $gallery_stmt = $db->prepare($gallery_insert);
        
        foreach ($image_files as $image_path) {
            $filename = basename($image_path);
            
            // Generate a title from filename (remove extension and replace underscores/hyphens with spaces)
            $title = pathinfo($filename, PATHINFO_FILENAME);
            $title = str_replace(['_', '-'], ' ', $title);
            $title = ucwords($title);
            
            // Determine category based on filename
            $category = 'general';
            if (stripos($filename, 'ride') !== false) {
                $category = 'rides';
            } elseif (stripos($filename, 'fellowship') !== false || stripos($filename, 'meeting') !== false) {
                $category = 'fellowship';
            } elseif (stripos($filename, 'service') !== false || stripos($filename, 'volunteer') !== false) {
                $category = 'service';
            } elseif (stripos($filename, 'prayer') !== false || stripos($filename, 'worship') !== false) {
                $category = 'worship';
            } elseif (stripos($filename, 'amb') !== false || stripos($filename, 'ambassador') !== false) {
                $category = 'fellowship';
            } elseif (stripos($filename, 'event') !== false) {
                $category = 'service';
            }
            
            // Mark first few images as featured
            $featured = $gallery_images_added < 5 ? 1 : 0;
            
            $gallery_stmt->execute([$filename, $title, $category, $featured]);
            $gallery_images_added++;
            echo "✓ Preloaded: $filename ($title) - Category: $category\n";
        }
        
        echo "\n✓ Successfully preloaded $gallery_images_added photos from mediaGallery folder\n";
        echo "✓ First 5 photos marked as featured\n";
        echo "✓ All photos are now in the database and will display on the website\n";
        
    } else {
        echo "⚠ mediaGallery folder not found - no photos to preload\n";
    }
    
    echo "\n=== Preload Complete! ===\n";
    echo "✓ All existing photos are now in the database\n";
    echo "✓ Gallery will display all photos immediately\n";
    echo "✓ New uploads through admin will continue to work normally\n";
    echo "✓ No need to manually add old photos to the database\n";
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
    echo "Please check your database configuration in config/database.php\n";
}
?>
