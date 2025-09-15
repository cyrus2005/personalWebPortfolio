<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Setting up fresh database for Ambassadors for Jesus Christ website...\n\n";

try {
    require_once 'config/database.php';
    $database = new Database();
    $db = $database->getConnection();
    
    echo "✓ Database connection successful!\n";
    
    // Create all tables
    echo "\n=== Creating Database Tables ===\n";
    
    // 1. Create gallery_images table
    $gallery_table = "
    CREATE TABLE IF NOT EXISTS `gallery_images` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `filename` varchar(255) NOT NULL,
        `title` varchar(255) NOT NULL,
        `category` varchar(100) DEFAULT 'general',
        `featured` tinyint(1) DEFAULT 0,
        `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    $db->exec($gallery_table);
    echo "✓ gallery_images table created\n";
    
    // 2. Create events table
    $events_table = "
    CREATE TABLE IF NOT EXISTS `events` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `title` varchar(255) NOT NULL,
        `description` text,
        `event_date` datetime NOT NULL,
        `location` varchar(255) DEFAULT NULL,
        `status` enum('upcoming','ongoing','completed','cancelled') DEFAULT 'upcoming',
        `photo_filename` varchar(255) DEFAULT NULL,
        `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
        `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    $db->exec($events_table);
    echo "✓ events table created\n";
    
    // 3. Create prayer_requests table
    $prayer_table = "
    CREATE TABLE IF NOT EXISTS `prayer_requests` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        `email` varchar(255) DEFAULT NULL,
        `phone` varchar(20) DEFAULT NULL,
        `request` text NOT NULL,
        `status` enum('pending','prayed_for','answered','private') DEFAULT 'pending',
        `is_public` tinyint(1) DEFAULT 0,
        `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
        `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    $db->exec($prayer_table);
    echo "✓ prayer_requests table created\n";
    
    echo "\n=== Adding Gallery Images from mediaGallery Folder ===\n";
    
    // Scan mediaGallery folder for images
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
            }
            
            // Mark first few images as featured
            $featured = $gallery_images_added < 3 ? 1 : 0;
            
            $gallery_stmt->execute([$filename, $title, $category, $featured]);
            $gallery_images_added++;
            echo "✓ Added: $filename ($title)\n";
        }
        
        echo "✓ Added $gallery_images_added images from mediaGallery folder\n";
    } else {
        echo "⚠ mediaGallery folder not found - no images added\n";
    }
    
    echo "\n=== Skipping Sample Events (as requested) ===\n";
    echo "✓ Events table created but left empty - you can add events through admin panel\n";
    
    // Add sample prayer requests
    $prayer_data = [
        [
            'John Smith',
            'john@email.com',
            '(555) 123-4567',
            'Please pray for my family during this difficult time. We are facing financial struggles and need God\'s guidance and provision.',
            'pending',
            1
        ],
        [
            'Mary Johnson',
            'mary@email.com',
            '(555) 987-6543',
            'Pray for healing for my mother who is battling cancer. She needs strength, comfort, and God\'s healing touch.',
            'prayed_for',
            1
        ],
        [
            'Anonymous',
            null,
            null,
            'Please pray for peace in our community and for those who are struggling with addiction. May God bring hope and healing to all who need it.',
            'pending',
            0
        ],
        [
            'David Wilson',
            'david@email.com',
            '(555) 456-7890',
            'Pray for safe travels as our ministry group heads out on our mission trip next month. We need God\'s protection and guidance.',
            'pending',
            1
        ]
    ];
    
    $prayer_insert = "INSERT INTO prayer_requests (name, email, phone, request, status, is_public) VALUES (?, ?, ?, ?, ?, ?)";
    $prayer_stmt = $db->prepare($prayer_insert);
    
    foreach ($prayer_data as $prayer) {
        $prayer_stmt->execute($prayer);
    }
    echo "✓ Added " . count($prayer_data) . " sample prayer requests\n";
    
    echo "\n=== Creating Required Directories ===\n";
    
    // Create required directories
    $directories = [
        'mediaGallery',
        'mediaStickers', 
        'eventImages'
    ];
    
    foreach ($directories as $dir) {
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
            echo "✓ Created directory: $dir\n";
        } else {
            echo "✓ Directory already exists: $dir\n";
        }
    }
    
    echo "\n=== Copying Required Files ===\n";
    
    // Check if required files exist
    $required_files = [
        'mediaStickers/mmLogo.png',
        'mediaStickers/motorcycleSticker.png'
    ];
    
    foreach ($required_files as $file) {
        if (file_exists($file)) {
            echo "✓ File exists: $file\n";
        } else {
            echo "⚠ File missing: $file (you may need to add this manually)\n";
        }
    }
    
    echo "\n=== Database Setup Complete! ===\n";
    echo "✓ All tables created successfully\n";
    echo "✓ Gallery populated with images from mediaGallery folder\n";
    echo "✓ Events table created (empty - add events through admin)\n";
    echo "✓ Sample prayer requests added\n";
    echo "✓ Directories created\n";
    echo "\nYour website should now work properly!\n";
    echo "\nNext steps:\n";
    echo "1. Add your logo and sticker images to mediaStickers/ folder\n";
    echo "2. Test the admin panel at /admin/ (login: motorcycle / Jesus4Ever)\n";
    echo "3. Test the gallery at /gallery.php\n";
    echo "4. Add events through the admin panel\n";
    echo "5. Test prayer requests at /prayer.php\n";
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
    echo "Please check your database configuration in config/database.php\n";
}
?>
