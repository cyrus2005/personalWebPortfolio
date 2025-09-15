-- SQL Script to create the Ambassadors for Jesus Christ website database
-- Run this in cPanel's phpMyAdmin or MySQL database tool

-- Create database (replace YOURCPANELUSERNAME with your actual cPanel username)
CREATE DATABASE IF NOT EXISTS `YOURCPANELUSERNAME_mmambassadors` 
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Use the database
USE `YOURCPANELUSERNAME_mmambassadors`;

-- Create gallery_images table
CREATE TABLE IF NOT EXISTS `gallery_images` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `filename` varchar(255) NOT NULL,
    `title` varchar(255) NOT NULL,
    `description` text DEFAULT NULL,
    `category` varchar(100) DEFAULT 'general',
    `featured` tinyint(1) DEFAULT 0,
    `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `idx_category` (`category`),
    KEY `idx_featured` (`featured`),
    KEY `idx_created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create events table
CREATE TABLE IF NOT EXISTS `events` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(255) NOT NULL,
    `description` text DEFAULT NULL,
    `event_date` datetime NOT NULL,
    `location` varchar(255) DEFAULT NULL,
    `status` enum('upcoming','ongoing','completed','cancelled') DEFAULT 'upcoming',
    `photo_filename` varchar(255) DEFAULT NULL,
    `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `idx_event_date` (`event_date`),
    KEY `idx_status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Create prayer_requests table
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
    PRIMARY KEY (`id`),
    KEY `idx_status` (`status`),
    KEY `idx_is_public` (`is_public`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample gallery images (replace with your actual image filenames)
INSERT INTO `gallery_images` (`filename`, `title`, `description`, `category`, `featured`) VALUES
('bike_ride_2024.jpg', 'Bike Ride 2024', 'Annual motorcycle ministry ride through the community', 'rides', 1),
('fellowship_meeting.jpg', 'Fellowship Meeting', 'Weekly fellowship and prayer gathering', 'fellowship', 1),
('community_service.jpg', 'Community Service', 'Volunteering at local food bank', 'service', 1),
('worship_night.jpg', 'Worship Night', 'Evening worship and praise service', 'worship', 0),
('ministry_outreach.jpg', 'Ministry Outreach', 'Sharing the gospel in the community', 'general', 0);

-- Insert sample events
INSERT INTO `events` (`title`, `description`, `event_date`, `location`, `status`) VALUES
('Monthly Ride', 'Join us for our monthly motorcycle ministry ride', '2024-02-15 09:00:00', 'Church Parking Lot', 'upcoming'),
('Fellowship Dinner', 'Community fellowship dinner and prayer', '2024-02-20 18:00:00', 'Community Center', 'upcoming'),
('Service Project', 'Volunteer service project at local shelter', '2024-02-25 10:00:00', 'Downtown Shelter', 'upcoming');

-- Insert sample prayer requests
INSERT INTO `prayer_requests` (`name`, `email`, `request`, `status`, `is_public`) VALUES
('John Smith', 'john@email.com', 'Pray for my family during this difficult time', 'pending', 1),
('Mary Johnson', 'mary@email.com', 'Pray for healing from illness', 'pending', 1),
('Anonymous', NULL, 'Pray for guidance in making important life decisions', 'pending', 0);

-- Show success message
SELECT 'Database and tables created successfully!' as message;
