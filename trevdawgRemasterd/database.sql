-- Database setup for Trevor's Real Estate Website
-- Run this script in phpMyAdmin or MySQL command line

CREATE DATABASE IF NOT EXISTS trevor_real_estate;
USE trevor_real_estate;

-- Contacts table for storing contact form submissions
CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    subject VARCHAR(100),
    message TEXT NOT NULL,
    newsletter TINYINT(1) DEFAULT 0,
    ip_address VARCHAR(45),
    user_agent TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    status ENUM('new', 'read', 'replied', 'archived') DEFAULT 'new'
);

-- Properties table for property listings
CREATE TABLE IF NOT EXISTS properties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    description TEXT,
    price DECIMAL(12,2),
    address VARCHAR(255),
    city VARCHAR(100),
    state VARCHAR(50),
    zip_code VARCHAR(10),
    bedrooms INT,
    bathrooms DECIMAL(3,1),
    square_feet INT,
    lot_size DECIMAL(10,2),
    property_type ENUM('single_family', 'condo', 'townhouse', 'multi_family', 'land', 'commercial') DEFAULT 'single_family',
    status ENUM('for_sale', 'sold', 'pending', 'off_market') DEFAULT 'for_sale',
    featured TINYINT(1) DEFAULT 0,
    image_url VARCHAR(255),
    gallery_images JSON,
    year_built INT,
    garage_spaces INT,
    pool TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Testimonials table
CREATE TABLE IF NOT EXISTS testimonials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_name VARCHAR(100) NOT NULL,
    client_location VARCHAR(100),
    testimonial_text TEXT NOT NULL,
    rating INT DEFAULT 5,
    featured TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Newsletter subscribers table
CREATE TABLE IF NOT EXISTS newsletter_subscribers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    name VARCHAR(100),
    subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('active', 'unsubscribed') DEFAULT 'active',
    unsubscribe_token VARCHAR(64) UNIQUE
);

-- Site settings table
CREATE TABLE IF NOT EXISTS site_settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    setting_key VARCHAR(100) NOT NULL UNIQUE,
    setting_value TEXT,
    description TEXT,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert sample data
INSERT INTO properties (title, description, price, address, city, state, zip_code, bedrooms, bathrooms, square_feet, property_type, status, featured, image_url) VALUES
('Luxury Family Home', 'Beautiful 4-bedroom home with modern amenities and spacious backyard. Perfect for families looking for comfort and style.', 750000.00, '123 Oak Street', 'Houston', 'TX', '77080', 4, 3.5, 2800, 'single_family', 'for_sale', 1, 'media/trevorSoldHouseWithClient.jpg'),
('Modern Condo Downtown', 'Stylish 2-bedroom condo in the heart of downtown with city views and premium finishes.', 425000.00, '456 Pine Avenue', 'Houston', 'TX', '77002', 2, 2.0, 1200, 'condo', 'for_sale', 1, 'media/trevorSoldHouseWithClients2.jpg'),
('Spacious Family Estate', 'Large 5-bedroom home with pool and extensive outdoor living space. Ideal for entertaining.', 925000.00, '789 Maple Drive', 'Houston', 'TX', '77024', 5, 4.0, 3500, 'single_family', 'for_sale', 1, 'media/trevorSoldHouseWithClientsBeazer.jpg'),
('Investment Property', 'Well-maintained duplex perfect for investors. Currently rented with stable tenants.', 650000.00, '321 Elm Court', 'Houston', 'TX', '77019', 6, 4.0, 2400, 'multi_family', 'for_sale', 1, 'media/trevorSoldHouseConClient.jpg');

INSERT INTO testimonials (client_name, client_location, testimonial_text, rating, featured) VALUES
('Alexa Young', 'Houston, TX', 'Trevor made the entire home buying process seamless and stress-free. His expertise and dedication to finding the perfect home for our family was exceptional. We couldn\'t be happier with our new home!', 5, 1),
('Michael & Sarah Johnson', 'Austin, TX', 'Working with Trevor was an absolute pleasure. He sold our home above asking price and helped us find our dream home in the perfect neighborhood. His market knowledge is unmatched.', 5, 1),
('David Chen', 'Dallas, TX', 'Trevor\'s professionalism and attention to detail throughout our real estate investment journey was outstanding. He helped us build a profitable portfolio and we continue to work with him for all our real estate needs.', 5, 1);

INSERT INTO site_settings (setting_key, setting_value, description) VALUES
('site_title', 'Superior Texas Investments', 'Main site title'),
('site_tagline', 'Guiding You Home with Trust & Expertise', 'Site tagline for hero section'),
('contact_email', 'trevor@superiortexas.com', 'Primary contact email'),
('contact_phone', '(123) 456-7890', 'Primary contact phone number'),
('office_address', '12333 Sowden Rd Ste B PMB 390511, Houston, Texas 77080-2059', 'Office address'),
('business_hours', 'Monday - Friday: 9:00 AM - 6:00 PM, Saturday: 10:00 AM - 4:00 PM, Sunday: By Appointment', 'Business hours'),
('facebook_url', '#', 'Facebook page URL'),
('twitter_url', '#', 'Twitter profile URL'),
('linkedin_url', '#', 'LinkedIn profile URL'),
('instagram_url', '#', 'Instagram profile URL');

-- Create indexes for better performance
CREATE INDEX idx_contacts_email ON contacts(email);
CREATE INDEX idx_contacts_created_at ON contacts(created_at);
CREATE INDEX idx_contacts_status ON contacts(status);

CREATE INDEX idx_properties_status ON properties(status);
CREATE INDEX idx_properties_featured ON properties(featured);
CREATE INDEX idx_properties_city ON properties(city);
CREATE INDEX idx_properties_price ON properties(price);

CREATE INDEX idx_testimonials_featured ON testimonials(featured);
CREATE INDEX idx_testimonials_rating ON testimonials(rating);

CREATE INDEX idx_newsletter_email ON newsletter_subscribers(email);
CREATE INDEX idx_newsletter_status ON newsletter_subscribers(status);

-- Create views for common queries
CREATE VIEW featured_properties AS
SELECT * FROM properties 
WHERE featured = 1 AND status = 'for_sale'
ORDER BY created_at DESC;

CREATE VIEW featured_testimonials AS
SELECT * FROM testimonials 
WHERE featured = 1
ORDER BY created_at DESC;

CREATE VIEW recent_contacts AS
SELECT id, name, email, subject, created_at, status 
FROM contacts 
ORDER BY created_at DESC 
LIMIT 50;

-- Create stored procedures for common operations
DELIMITER //

CREATE PROCEDURE GetContactStats()
BEGIN
    SELECT 
        COUNT(*) as total_contacts,
        COUNT(CASE WHEN status = 'new' THEN 1 END) as new_contacts,
        COUNT(CASE WHEN created_at >= DATE_SUB(NOW(), INTERVAL 30 DAY) THEN 1 END) as contacts_last_30_days
    FROM contacts;
END //

CREATE PROCEDURE GetPropertyStats()
BEGIN
    SELECT 
        COUNT(*) as total_properties,
        COUNT(CASE WHEN status = 'for_sale' THEN 1 END) as active_listings,
        COUNT(CASE WHEN status = 'sold' THEN 1 END) as sold_properties,
        AVG(price) as average_price
    FROM properties;
END //

DELIMITER ;

-- Grant permissions (adjust as needed for your setup)
-- GRANT ALL PRIVILEGES ON trevor_real_estate.* TO 'your_username'@'localhost';
-- FLUSH PRIVILEGES;
