<?php
// Test script to check if images are loading properly
echo "<h2>Testing Image Loading</h2>\n";

$media_folder = 'mediaGallery/';
$test_images = ['imgi_1_Doc_Keeper.jpg', 'imgi_2_HD1.jpg', 'imgi_3_HD2.jpg'];

foreach ($test_images as $image) {
    $image_path = $media_folder . $image;
    echo "<h3>Testing: $image</h3>\n";
    echo "<p>File exists: " . (file_exists($image_path) ? 'YES' : 'NO') . "</p>\n";
    echo "<p>Full path: " . realpath($image_path) . "</p>\n";
    echo "<p>File size: " . (file_exists($image_path) ? filesize($image_path) . ' bytes' : 'N/A') . "</p>\n";
    
    if (file_exists($image_path)) {
        echo "<img src='$image_path' style='max-width: 200px; height: auto; border: 2px solid #dc143c; margin: 10px;' alt='$image'>\n";
    }
    echo "<hr>\n";
}

echo "<h3>Directory Contents:</h3>\n";
$files = scandir($media_folder);
foreach ($files as $file) {
    if ($file !== '.' && $file !== '..') {
        echo "<p>$file - " . (file_exists($media_folder . $file) ? 'EXISTS' : 'MISSING') . "</p>\n";
    }
}
?>
