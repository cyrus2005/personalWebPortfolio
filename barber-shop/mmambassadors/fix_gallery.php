<?php
// Script to fix the gallery and ensure images display properly
require_once 'config/database.php';

$database = new Database();
$db = $database->getConnection();

echo "<h2>Fixing Gallery Display</h2>\n";

// Clear all existing data and start fresh
$db->exec("DELETE FROM gallery_images");
echo "<p>Cleared existing gallery data</p>\n";

// Add some real images to the database
$real_images = [
    'imgi_1_Doc_Keeper.jpg' => ['title' => 'Doc Keeper', 'category' => 'members', 'description' => 'Ministry member Doc Keeper'],
    'imgi_2_HD1.jpg' => ['title' => 'Harley Davidson', 'category' => 'rides', 'description' => 'Harley Davidson motorcycle'],
    'imgi_3_HD2.jpg' => ['title' => 'Harley Davidson Night', 'category' => 'rides', 'description' => 'Harley Davidson at night'],
    'imgi_4_HarelyDavidson_night.jpg' => ['title' => 'Harley Night Ride', 'category' => 'rides', 'description' => 'Night ride on Harley Davidson'],
    'imgi_5_Monarch_Ignitor.jpg' => ['title' => 'Monarch Ignitor', 'category' => 'events', 'description' => 'Monarch Ignitor event'],
    'imgi_6_Patty_Burnie.jpg' => ['title' => 'Patty Burnie', 'category' => 'members', 'description' => 'Ministry member Patty Burnie'],
    'imgi_7_a-Meeting3.jpg' => ['title' => 'Ministry Meeting', 'category' => 'meetings', 'description' => 'Ministry meeting gathering'],
    'imgi_8_a_Jackieswinner.jpg' => ['title' => 'Jackies Winner', 'category' => 'events', 'description' => 'Jackies winner celebration'],
    'imgi_9_a_benefit1.jpg' => ['title' => 'Benefit Event', 'category' => 'events', 'description' => 'Community benefit event'],
    'imgi_10_a_benefit2.jpg' => ['title' => 'Benefit Event 2', 'category' => 'events', 'description' => 'Community benefit event'],
    'imgi_17_a_meeting1.jpg' => ['title' => 'Brotherhood Meeting', 'category' => 'meetings', 'description' => 'Brotherhood meeting'],
    'imgi_18_a_meeting2.jpg' => ['title' => 'Ministry Meeting 2', 'category' => 'meetings', 'description' => 'Ministry meeting'],
    'imgi_19_a_newestmembers.jpg' => ['title' => 'Newest Members', 'category' => 'members', 'description' => 'Welcome new members'],
    'imgi_20_amb1.jpg' => ['title' => 'Ambassador 1', 'category' => 'members', 'description' => 'Ministry ambassador'],
    'imgi_21_amb2.jpg' => ['title' => 'Ambassador 2', 'category' => 'members', 'description' => 'Ministry ambassador'],
    'imgi_22_amb3.jpg' => ['title' => 'Ambassador 3', 'category' => 'members', 'description' => 'Ministry ambassador'],
    'imgi_23_amb4.jpg' => ['title' => 'Ambassador 4', 'category' => 'members', 'description' => 'Ministry ambassador'],
    'imgi_24_amb5.jpg' => ['title' => 'Ambassador 5', 'category' => 'members', 'description' => 'Ministry ambassador'],
    'imgi_25_amb6.jpg' => ['title' => 'Ambassador 6', 'category' => 'members', 'description' => 'Ministry ambassador'],
    'imgi_26_amb7.jpg' => ['title' => 'Ambassador 7', 'category' => 'members', 'description' => 'Ministry ambassador'],
    'imgi_27_amb8.jpg' => ['title' => 'Ambassador 8', 'category' => 'members', 'description' => 'Ministry ambassador'],
    'imgi_28_ambassador_ladies.jpg' => ['title' => 'Ambassador Ladies', 'category' => 'members', 'description' => 'Ministry ladies group'],
    'imgi_33_event1.jpg' => ['title' => 'Community Event', 'category' => 'events', 'description' => 'Community outreach event'],
    'imgi_34_event2.jpg' => ['title' => 'Ministry Event', 'category' => 'events', 'description' => 'Ministry event'],
    'imgi_35_eventphoto.jpg' => ['title' => 'Event Photo', 'category' => 'events', 'description' => 'Event documentation'],
    'imgi_36_eventphoto2.jpg' => ['title' => 'Event Photo 2', 'category' => 'events', 'description' => 'Event documentation'],
    'imgi_37_fm_ride.jpg' => ['title' => 'FM Ride', 'category' => 'rides', 'description' => 'FM radio station ride'],
    'imgi_38_keeper.jpg' => ['title' => 'Keeper', 'category' => 'members', 'description' => 'Ministry member Keeper'],
    'imgi_39_lonestar2024.jpg' => ['title' => 'Lone Star 2024', 'category' => 'events', 'description' => 'Lone Star event 2024'],
    'imgi_40_lonestar2024a.jpg' => ['title' => 'Lone Star 2024 A', 'category' => 'events', 'description' => 'Lone Star event 2024'],
    'imgi_41_prosepct_patch.jpg' => ['title' => 'Prospect Patch', 'category' => 'members', 'description' => 'Prospect patch ceremony'],
    'imgi_42_prospectdays.jpg' => ['title' => 'Prospect Days', 'category' => 'events', 'description' => 'Prospect days event'],
    'imgi_43_the_guys1.jpg' => ['title' => 'The Guys', 'category' => 'members', 'description' => 'Ministry members group'],
    'imgi_44_tracy_patches.jpg' => ['title' => 'Tracy Patches', 'category' => 'members', 'description' => 'Tracy patches ceremony']
];

$insert_query = "INSERT INTO gallery_images (filename, title, description, category, featured, file_size, mime_type, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";
$insert_stmt = $db->prepare($insert_query);

$added_count = 0;
$media_folder = 'mediaGallery/';

foreach ($real_images as $filename => $data) {
    $file_path = $media_folder . $filename;
    if (file_exists($file_path)) {
        $file_size = filesize($file_path);
        $mime_type = 'image/jpeg';
        
        try {
            $insert_stmt->execute([
                $filename,
                $data['title'],
                $data['description'],
                $data['category'],
                0,
                $file_size,
                $mime_type
            ]);
            $added_count++;
            echo "<p style='color: green;'>✓ Added: {$data['title']}</p>\n";
        } catch (PDOException $e) {
            echo "<p style='color: red;'>✗ Error: " . $e->getMessage() . "</p>\n";
        }
    } else {
        echo "<p style='color: orange;'>- File not found: $filename</p>\n";
    }
}

echo "<h3>Gallery Fixed!</h3>\n";
echo "<p><strong>Added:</strong> $added_count images to gallery</p>\n";
echo "<p><a href='gallery.php' style='background: #dc143c; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>View Gallery Now</a></p>\n";
echo "<p><a href='admin/index.php' style='background: #333; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-left: 10px;'>Admin Panel</a></p>\n";
?>
