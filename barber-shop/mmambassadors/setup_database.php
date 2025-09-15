<?php
// Database setup script for Ambassadors for Jesus Christ Motorcycle Ministry
// Run this script once to create the necessary database and tables

$host = 'localhost';
$username = 'root';
$password = '';
$database_name = 'mmambassadors';

try {
    // Connect to MySQL server (without database)
    $pdo = new PDO("mysql:host=$host", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create database if it doesn't exist
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `$database_name` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    echo "Database '$database_name' created successfully or already exists.\n";
    
    // Connect to the specific database
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create tables
    $tables = [
        // Members table
        "CREATE TABLE IF NOT EXISTS `members` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `name` varchar(255) NOT NULL,
            `email` varchar(255) NOT NULL,
            `phone` varchar(20) DEFAULT NULL,
            `join_date` date NOT NULL,
            `status` enum('active','inactive') DEFAULT 'active',
            `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
            `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            UNIQUE KEY `email` (`email`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci",
        
        // Events table
        "CREATE TABLE IF NOT EXISTS `events` (
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
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci",
        
        // Gallery images table
        "CREATE TABLE IF NOT EXISTS `gallery_images` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `filename` varchar(255) NOT NULL,
            `title` varchar(255) NOT NULL,
            `description` text,
            `category` varchar(100) DEFAULT 'general',
            `featured` tinyint(1) DEFAULT 0,
            `file_size` int(11) DEFAULT NULL,
            `mime_type` varchar(100) DEFAULT NULL,
            `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
            `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            KEY `category` (`category`),
            KEY `featured` (`featured`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci",
        
        // Announcements table
        "CREATE TABLE IF NOT EXISTS `announcements` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `title` varchar(255) NOT NULL,
            `content` text NOT NULL,
            `priority` enum('low','medium','high') DEFAULT 'medium',
            `status` enum('draft','published','archived') DEFAULT 'draft',
            `publish_date` datetime DEFAULT NULL,
            `expiry_date` datetime DEFAULT NULL,
            `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
            `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            KEY `status` (`status`),
            KEY `publish_date` (`publish_date`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci",
        
        // Contact messages table
        "CREATE TABLE IF NOT EXISTS `contact_messages` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `name` varchar(255) NOT NULL,
            `email` varchar(255) NOT NULL,
            `phone` varchar(20) DEFAULT NULL,
            `subject` varchar(255) NOT NULL,
            `message` text NOT NULL,
            `status` enum('new','read','replied','archived') DEFAULT 'new',
            `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
            `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            KEY `status` (`status`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci",
        
        // Admin users table
        "CREATE TABLE IF NOT EXISTS `admin_users` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `username` varchar(50) NOT NULL,
            `password` varchar(255) NOT NULL,
            `email` varchar(255) NOT NULL,
            `role` enum('admin','moderator') DEFAULT 'admin',
            `last_login` timestamp NULL DEFAULT NULL,
            `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
            `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            UNIQUE KEY `username` (`username`),
            UNIQUE KEY `email` (`email`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci"
    ];
    
    foreach ($tables as $table) {
        $pdo->exec($table);
    }
    echo "All tables created successfully.\n";
    
    // Insert default admin user
    $admin_password = password_hash('admin', PASSWORD_DEFAULT);
    $admin_query = "INSERT IGNORE INTO `admin_users` (`username`, `password`, `email`, `role`) VALUES (?, ?, ?, ?)";
    $admin_stmt = $pdo->prepare($admin_query);
    $admin_stmt->execute(['admin', $admin_password, 'admin@mmambassadors.com', 'admin']);
    echo "Default admin user created (username: admin, password: admin).\n";
    
    // Insert sample data
    $sample_announcements = [
        "INSERT IGNORE INTO `announcements` (`title`, `content`, `priority`, `status`, `publish_date`) VALUES 
        ('Welcome to Ambassadors for Jesus Christ', 'We are excited to have you join our motorcycle ministry. Together, we will spread the love of Jesus Christ through our shared passion for motorcycles.', 'high', 'published', NOW()),
        ('Monthly Ride Schedule', 'Join us every first Saturday of the month for our community outreach rides. Meet at the church parking lot at 8:00 AM.', 'medium', 'published', NOW())"
    ];
    
    foreach ($sample_announcements as $announcement) {
        $pdo->exec($announcement);
    }
    echo "Sample announcements inserted.\n";
    
    // Create mediaGallery directory if it doesn't exist
    $media_dir = __DIR__ . '/mediaGallery';
    if (!is_dir($media_dir)) {
        mkdir($media_dir, 0755, true);
        echo "Created mediaGallery directory.\n";
    }
    
    // Create mediaStickers directory if it doesn't exist
    $stickers_dir = __DIR__ . '/mediaStickers';
    if (!is_dir($stickers_dir)) {
        mkdir($stickers_dir, 0755, true);
        echo "Created mediaStickers directory.\n";
    }
    
    echo "\nDatabase setup completed successfully!\n";
    echo "You can now access the website at: http://localhost/mmambassadors\n";
    echo "Admin access: http://localhost/mmambassadors/login.php (admin/admin)\n";
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Please make sure XAMPP is running and MySQL is accessible.\n";
}
?>
