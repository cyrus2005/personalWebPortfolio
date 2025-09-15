<?php
// Script to add sample photos to the database for testing
require_once 'config/database.php';

$database = new Database();
$db = $database->getConnection();

// Sample photos data
$sample_photos = [
    [
        'filename' => 'sample1.jpg',
        'title' => 'Ministry Meeting',
        'description' => 'Monthly ministry meeting with fellowship and prayer',
        'category' => 'meetings',
        'featured' => 0
    ],
    [
        'filename' => 'sample2.jpg',
        'title' => 'Community Ride',
        'description' => 'Riding through the community to spread the Gospel',
        'category' => 'rides',
        'featured' => 0
    ],
    [
        'filename' => 'sample3.jpg',
        'title' => 'Prayer Circle',
        'description' => 'Praying together before our ride',
        'category' => 'events',
        'featured' => 0
    ],
    [
        'filename' => 'sample4.jpg',
        'title' => 'Bike Blessing',
        'description' => 'Blessing our motorcycles for safe travels',
        'category' => 'events',
        'featured' => 0
    ],
    [
        'filename' => 'sample5.jpg',
        'title' => 'Fellowship Dinner',
        'description' => 'Sharing a meal together as brothers in Christ',
        'category' => 'meetings',
        'featured' => 0
    ]
];

// Insert sample photos
$insert_query = "INSERT INTO gallery_images (filename, title, description, category, featured, created_at) VALUES (?, ?, ?, ?, ?, NOW())";
$insert_stmt = $db->prepare($insert_query);

$added_count = 0;
foreach ($sample_photos as $photo) {
    try {
        $insert_stmt->execute([
            $photo['filename'],
            $photo['title'],
            $photo['description'],
            $photo['category'],
            $photo['featured']
        ]);
        $added_count++;
        echo "Added: " . $photo['title'] . "\n";
    } catch (PDOException $e) {
        echo "Error adding " . $photo['title'] . ": " . $e->getMessage() . "\n";
    }
}

echo "\nSample photos added: $added_count\n";
echo "You can now view them in the gallery at: http://localhost/mmambassadors/gallery.php\n";
?>
