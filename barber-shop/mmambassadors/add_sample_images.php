<?php
// Script to add some sample images to the mediaGallery folder for testing

$media_folder = 'mediaGallery/';
if (!is_dir($media_folder)) {
    mkdir($media_folder, 0755, true);
}

// Create some simple HTML-based placeholder images
$sample_images = [
    'sample1.jpg' => 'Ministry Meeting',
    'sample2.jpg' => 'Community Ride',
    'sample3.jpg' => 'Prayer Circle',
    'sample4.jpg' => 'Bike Blessing',
    'sample5.jpg' => 'Fellowship Dinner',
    'ride1.jpg' => 'Group Ride',
    'ride2.jpg' => 'Highway Ministry',
    'meeting1.jpg' => 'Brotherhood Meeting',
    'event1.jpg' => 'Community Event',
    'prayer1.jpg' => 'Prayer Time'
];

echo "<h2>Creating Sample Images</h2>\n";

foreach ($sample_images as $filename => $title) {
    $filepath = $media_folder . $filename;
    
    if (!file_exists($filepath)) {
        // Create a simple HTML file that can be used as a placeholder
        $html_content = "<!DOCTYPE html>
<html>
<head>
    <title>$title</title>
    <style>
        body { 
            margin: 0; 
            padding: 0; 
            background: linear-gradient(135deg, #dc143c, #ff6b6b);
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
        .content {
            background: rgba(0,0,0,0.3);
            padding: 40px;
            border-radius: 10px;
            border: 2px solid rgba(255,255,255,0.3);
        }
        .icon { font-size: 48px; margin-bottom: 20px; }
        .title { font-size: 24px; font-weight: bold; margin-bottom: 10px; }
        .subtitle { font-size: 14px; opacity: 0.9; }
    </style>
</head>
<body>
    <div class='content'>
        <div class='icon'>📸</div>
        <div class='title'>$title</div>
        <div class='subtitle'>Sample Image</div>
    </div>
</body>
</html>";
        
        file_put_contents($filepath, $html_content);
        echo "<p style='color: green;'>✓ Created: $filename</p>\n";
    } else {
        echo "<p style='color: orange;'>- Already exists: $filename</p>\n";
    }
}

echo "<h3>Next Steps:</h3>\n";
echo "<p>1. <a href='sync_media_folder.php'>Sync images with database</a></p>\n";
echo "<p>2. <a href='gallery.php'>View gallery</a></p>\n";
echo "<p>3. <a href='admin/index.php'>Use admin upload for real photos</a></p>\n";
?>
