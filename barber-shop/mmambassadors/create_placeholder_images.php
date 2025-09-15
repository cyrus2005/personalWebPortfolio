<?php
// Script to create actual placeholder images for the gallery

// Create a simple function to generate placeholder images
function createPlaceholderImage($width, $height, $text, $filename) {
    // Create image
    $image = imagecreate($width, $height);
    
    // Define colors
    $bg_color = imagecolorallocate($image, 248, 249, 250); // Light gray background
    $text_color = imagecolorallocate($image, 220, 20, 60); // Red text
    $border_color = imagecolorallocate($image, 220, 20, 60); // Red border
    
    // Fill background
    imagefill($image, 0, 0, $bg_color);
    
    // Draw border
    imagerectangle($image, 0, 0, $width-1, $height-1, $border_color);
    
    // Add text
    $font_size = 5;
    $text_width = imagefontwidth($font_size) * strlen($text);
    $text_height = imagefontheight($font_size);
    $x = ($width - $text_width) / 2;
    $y = ($height - $text_height) / 2;
    
    imagestring($image, $font_size, $x, $y, $text, $text_color);
    
    // Save image
    imagejpeg($image, $filename, 90);
    imagedestroy($image);
}

// Create mediaGallery directory if it doesn't exist
$gallery_dir = 'mediaGallery/';
if (!is_dir($gallery_dir)) {
    mkdir($gallery_dir, 0755, true);
}

// Create placeholder images for the sample photos
$sample_images = [
    'sample1.jpg' => 'Ministry Meeting',
    'sample2.jpg' => 'Community Ride', 
    'sample3.jpg' => 'Prayer Circle',
    'sample4.jpg' => 'Bike Blessing',
    'sample5.jpg' => 'Fellowship Dinner'
];

foreach ($sample_images as $filename => $text) {
    $filepath = $gallery_dir . $filename;
    if (!file_exists($filepath)) {
        createPlaceholderImage(400, 300, $text, $filepath);
        echo "Created: $filename\n";
    }
}

// Create some additional placeholder images
$additional_images = [
    'ride1.jpg' => 'Group Ride',
    'ride2.jpg' => 'Highway Ministry',
    'meeting1.jpg' => 'Brotherhood Meeting',
    'event1.jpg' => 'Community Event',
    'prayer1.jpg' => 'Prayer Time'
];

foreach ($additional_images as $filename => $text) {
    $filepath = $gallery_dir . $filename;
    if (!file_exists($filepath)) {
        createPlaceholderImage(400, 300, $text, $filepath);
        echo "Created: $filename\n";
    }
}

echo "\nPlaceholder images created successfully!\n";
echo "You can now view them in the gallery at: http://localhost/mmambassadors/gallery.php\n";
?>
