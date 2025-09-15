<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Checking database status...\n\n";

try {
    require_once 'config/database.php';
    $database = new Database();
    $db = $database->getConnection();
    
    echo "✅ Database connection successful!\n\n";
    
    // Check gallery_images table
    $gallery_query = "SELECT COUNT(*) as count FROM gallery_images";
    $gallery_stmt = $db->prepare($gallery_query);
    $gallery_stmt->execute();
    $gallery_count = $gallery_stmt->fetch()['count'];
    echo "📸 Gallery images: " . $gallery_count . "\n";
    
    // Check events table
    $events_query = "SELECT COUNT(*) as count FROM events";
    $events_stmt = $db->prepare($events_query);
    $events_stmt->execute();
    $events_count = $events_stmt->fetch()['count'];
    echo "📅 Events: " . $events_count . "\n";
    
    // Check prayer_requests table
    $prayer_query = "SELECT COUNT(*) as count FROM prayer_requests";
    $prayer_stmt = $db->prepare($prayer_query);
    $prayer_stmt->execute();
    $prayer_count = $prayer_stmt->fetch()['count'];
    echo "🙏 Prayer requests: " . $prayer_count . "\n\n";
    
    if ($gallery_count == 0) {
        echo "⚠️  No gallery images found - this is why the gallery page is empty\n";
    }
    
    if ($events_count == 0) {
        echo "⚠️  No events found - this is why the events page shows 'Coming Soon'\n";
    }
    
    if ($prayer_count == 0) {
        echo "⚠️  No prayer requests found - this is why the prayer page is empty\n";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
}
?>
