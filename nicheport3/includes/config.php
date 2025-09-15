<?php
// Elite Collision Repair - Configuration File
// Ultimate conversion-optimized collision repair website

// Site Configuration
define('SITE_NAME', 'Elite Collision Repair');
define('SITE_TAGLINE', 'Kentucky\'s #1 Collision Repair Shop');
define('SITE_URL', 'https://elitecollision.com');
define('SITE_EMAIL', 'info@elitecollision.com');
define('SITE_PHONE', '(270) 801-9780');
define('SITE_PHONE_CLEAN', '2708019780');

// Business Information
define('BUSINESS_ADDRESS', '123 Main Street');
define('BUSINESS_CITY', 'Your City');
define('BUSINESS_STATE', 'KY');
define('BUSINESS_ZIP', '12345');
define('BUSINESS_HOURS', 'Mon-Fri: 8AM-6PM, Sat: 8AM-4PM');

// Conversion Optimization Settings
define('QUOTE_RESPONSE_TIME', '15 minutes');
define('CUSTOMER_RATING', '4.9');
define('TOTAL_REVIEWS', '247');
define('RECOMMENDATION_RATE', '98%');
define('YEARS_EXPERIENCE', '25+');
define('CARS_REPAIRED', '5,000+');

// Social Media Links
define('FACEBOOK_URL', '#');
define('INSTAGRAM_URL', '#');
define('GOOGLE_URL', '#');
define('YELP_URL', '#');

// SEO Configuration
define('DEFAULT_META_DESCRIPTION', 'Kentucky\'s #1 collision repair shop. 25+ years experience, lifetime warranty, insurance direct billing. Get your free estimate in 15 minutes.');
define('DEFAULT_META_KEYWORDS', 'collision repair, auto body shop, car accident repair, paint work, frame repair, dent removal, insurance claims, lifetime warranty');

// Contact Form Configuration
define('CONTACT_EMAIL', 'info@elitecollision.com');
define('QUOTE_EMAIL', 'quotes@elitecollision.com');
define('SUPPORT_EMAIL', 'support@elitecollision.com');

// Database Configuration (if needed)
define('DB_HOST', 'localhost');
define('DB_NAME', 'elite_collision');
define('DB_USER', 'root');
define('DB_PASS', '');

// Security Configuration
define('CSRF_TOKEN_NAME', 'csrf_token');
define('SESSION_TIMEOUT', 3600); // 1 hour

// Performance Configuration
define('CACHE_ENABLED', true);
define('CACHE_DURATION', 3600); // 1 hour

// Analytics Configuration
define('GOOGLE_ANALYTICS_ID', 'GA-XXXXXXXXX');
define('FACEBOOK_PIXEL_ID', 'XXXXXXXXX');

// Emergency Contact
define('EMERGENCY_PHONE', '(270) 801-9780');
define('EMERGENCY_AVAILABLE', '24/7');

// Warranty Information
define('WARRANTY_TYPE', 'Lifetime');
define('WARRANTY_COVERAGE', 'All repairs and paint work');

// Insurance Partners
$insurance_partners = [
    'State Farm',
    'Allstate',
    'Geico',
    'Progressive',
    'Nationwide',
    'Farmers',
    'USAA',
    'Liberty Mutual'
];

// Services Offered
$services = [
    'Collision Repair' => 'Professional repair of front-end, rear-end, and side impact damage',
    'Paint & Body Work' => 'Expert color matching and paint application',
    'Dent Removal' => 'Paintless dent repair and traditional body work',
    'Frame Straightening' => 'Precision frame repair using computerized measuring systems',
    'Glass Replacement' => 'Windshield and window replacement services',
    'Detailing Services' => 'Complete interior and exterior detailing'
];

// Trust Indicators
$trust_indicators = [
    'Lifetime Warranty',
    'Insurance Direct Billing',
    'Free Towing Service',
    'Same-Day Estimates',
    '25+ Years Experience',
    '4.9/5 Customer Rating',
    'Certified Technicians',
    'OEM Parts Guarantee'
];

// Page Titles
$page_titles = [
    'home' => 'Elite Collision Repair | #1 Auto Body Shop | Lifetime Warranty',
    'services' => 'Collision Repair Services | Auto Body Shop | Elite Collision',
    'gallery' => 'Before & After Gallery | Collision Repair Work | Elite Collision',
    'about' => 'About Us | Elite Collision Repair | 25+ Years Experience',
    'contact' => 'Contact Us | Elite Collision Repair | Free Quote',
    'reviews' => 'Customer Reviews | Elite Collision Repair | 4.9/5 Rating'
];

// Meta Descriptions
$meta_descriptions = [
    'home' => 'Kentucky\'s #1 collision repair shop. 25+ years experience, lifetime warranty, insurance direct billing. Get your free estimate in 15 minutes. Call (270) 801-9780 now!',
    'services' => 'Professional collision repair services including paint work, body repair, frame straightening, and more. Insurance approved with lifetime warranty.',
    'gallery' => 'View our before and after collision repair work. See why customers choose Elite Collision Repair for their auto body needs.',
    'about' => 'Learn about Elite Collision Repair\'s 25+ years of experience, certified technicians, and commitment to quality collision repair services.',
    'contact' => 'Contact Elite Collision Repair for your free quote. Call (270) 801-9780 or visit us at 123 Main Street, Your City, KY.',
    'reviews' => 'Read real customer reviews and testimonials for Elite Collision Repair. See why our customers trust us with their collision repair needs.'
];

// Error Handling
function handle_error($message, $file = '', $line = '') {
    error_log("Elite Collision Error: $message in $file on line $line");
    // In production, you might want to show a user-friendly error page
}

// Security Functions
function generate_csrf_token() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!isset($_SESSION[CSRF_TOKEN_NAME])) {
        $_SESSION[CSRF_TOKEN_NAME] = bin2hex(random_bytes(32));
    }
    return $_SESSION[CSRF_TOKEN_NAME];
}

function verify_csrf_token($token) {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    return isset($_SESSION[CSRF_TOKEN_NAME]) && hash_equals($_SESSION[CSRF_TOKEN_NAME], $token);
}

// Utility Functions
function get_page_title($page) {
    global $page_titles;
    return isset($page_titles[$page]) ? $page_titles[$page] : $page_titles['home'];
}

function get_meta_description($page) {
    global $meta_descriptions;
    return isset($meta_descriptions[$page]) ? $meta_descriptions[$page] : $meta_descriptions['home'];
}

function format_phone($phone) {
    return preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', $phone);
}

function clean_phone($phone) {
    return preg_replace('/[^0-9]/', '', $phone);
}

// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Set timezone
date_default_timezone_set('America/New_York');

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
