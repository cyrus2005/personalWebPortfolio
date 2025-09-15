<?php
// Blade & Fade Barbers - Main Configuration File

// Site Configuration
define('SITE_NAME', 'Blade & Fade Barbers');
define('SITE_URL', 'http://localhost/barber-shop'); // Update this with your domain
define('SITE_EMAIL', 'info@bladeandfade.com');
define('ADMIN_EMAIL', 'admin@bladeandfade.com');

// Business Information
define('BUSINESS_NAME', 'Blade & Fade Barbers');
define('BUSINESS_PHONE', '(555) 123-4567');
define('BUSINESS_ADDRESS', '123 Main Street, Downtown District, Your City, ST 12345');
define('BUSINESS_HOURS', [
    'Monday' => '9:00 AM - 7:00 PM',
    'Tuesday' => '9:00 AM - 7:00 PM',
    'Wednesday' => '9:00 AM - 7:00 PM',
    'Thursday' => '9:00 AM - 7:00 PM',
    'Friday' => '9:00 AM - 7:00 PM',
    'Saturday' => '8:00 AM - 6:00 PM',
    'Sunday' => '10:00 AM - 4:00 PM'
]);

// Email Configuration
define('SMTP_HOST', 'smtp.gmail.com'); // Update with your SMTP server
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'your-email@gmail.com'); // Update with your email
define('SMTP_PASSWORD', 'your-app-password'); // Update with your app password
define('SMTP_ENCRYPTION', 'tls');

// Security Configuration
define('ENCRYPTION_KEY', 'your-secret-encryption-key-here'); // Generate a random key
define('SESSION_TIMEOUT', 3600); // 1 hour in seconds
define('MAX_LOGIN_ATTEMPTS', 5);
define('LOGIN_LOCKOUT_TIME', 900); // 15 minutes in seconds

// File Upload Configuration
define('MAX_FILE_SIZE', 5 * 1024 * 1024); // 5MB
define('ALLOWED_FILE_TYPES', ['jpg', 'jpeg', 'png', 'gif', 'pdf']);
define('UPLOAD_PATH', 'uploads/');

// Pagination Configuration
define('ITEMS_PER_PAGE', 10);

// Timezone
date_default_timezone_set('America/New_York'); // Update with your timezone

// Error Reporting (set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Logging Configuration
define('LOG_LEVEL', 'INFO'); // DEBUG, INFO, WARNING, ERROR
define('LOG_FILE', 'logs/application.log');
define('LOG_MAX_SIZE', 10 * 1024 * 1024); // 10MB

// Social Media Links
define('SOCIAL_LINKS', [
    'facebook' => 'https://facebook.com/bladeandfadebarbers',
    'instagram' => 'https://instagram.com/bladeandfadebarbers',
    'twitter' => 'https://twitter.com/bladeandfadebarbers',
    'youtube' => 'https://youtube.com/bladeandfadebarbers'
]);

// Services Configuration
define('SERVICES', [
    'classic-haircut' => [
        'name' => 'Classic Haircut',
        'price' => 35.00,
        'duration' => 30,
        'description' => 'Traditional and modern cuts with precision styling'
    ],
    'fade-style' => [
        'name' => 'Fade & Style',
        'price' => 45.00,
        'duration' => 45,
        'description' => 'Premium fade cuts with detailed styling and finishing'
    ],
    'beard-trim' => [
        'name' => 'Beard Trim',
        'price' => 25.00,
        'duration' => 20,
        'description' => 'Professional beard shaping and trimming'
    ],
    'hot-towel-shave' => [
        'name' => 'Hot Towel Shave',
        'price' => 40.00,
        'duration' => 30,
        'description' => 'Traditional straight razor shave with hot towel treatment'
    ],
    'complete-package' => [
        'name' => 'Complete Package',
        'price' => 75.00,
        'duration' => 90,
        'description' => 'Haircut, beard trim, and hot towel treatment'
    ],
    'hair-styling' => [
        'name' => 'Hair Styling',
        'price' => 20.00,
        'duration' => 15,
        'description' => 'Professional styling and product application'
    ]
]);

// Booking Configuration
define('BOOKING_ADVANCE_DAYS', 30); // How many days in advance can bookings be made
define('BOOKING_CANCELLATION_HOURS', 2); // Hours before appointment for cancellation
define('WORKING_HOURS', [
    'start' => '09:00',
    'end' => '19:00',
    'lunch_start' => '12:00',
    'lunch_end' => '13:00'
]);

// Feature Flags
define('FEATURES', [
    'email_notifications' => true,
    'sms_notifications' => false,
    'online_payments' => false,
    'customer_reviews' => true,
    'loyalty_program' => false
]);

// API Keys (for future integrations)
define('GOOGLE_MAPS_API_KEY', ''); // Add your Google Maps API key
define('STRIPE_PUBLIC_KEY', ''); // Add your Stripe public key
define('STRIPE_SECRET_KEY', ''); // Add your Stripe secret key

// Cache Configuration
define('CACHE_ENABLED', true);
define('CACHE_DURATION', 3600); // 1 hour in seconds

// Development Configuration
define('DEBUG_MODE', true); // Set to false in production
define('MAINTENANCE_MODE', false);

// Maintenance mode check
if (MAINTENANCE_MODE && !isset($_GET['maintenance'])) {
    http_response_code(503);
    include 'maintenance.html';
    exit;
}
?>
