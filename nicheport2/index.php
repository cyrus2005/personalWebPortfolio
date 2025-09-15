<?php
require_once 'includes/config.php';
$page_title = "Premium Collision Repair | Elite Auto Body Shop";
$page_description = "Get your car back to perfect condition with our premium collision repair services. Free estimates, insurance approved, lifetime warranty. Call now!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="premium collision repair, auto body shop, car repair, insurance approved, lifetime warranty, free estimate">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://elitecollision.com">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="media/logo.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="nav-container">
            <a href="index.php" class="logo">
                <img src="media/logo.png" alt="Elite Collision Repair" height="45">
                <span class="logo-text">Elite Collision</span>
            </a>
            <nav>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="reviews.php">Reviews</a></li>
                </ul>
            </nav>
            <div class="header-cta">
                <a href="tel:2708019780" class="phone-cta">
                    <i class="fas fa-phone"></i>
                    <span>(270) 801-9780</span>
                </a>
                <a href="#quote-section" class="cta-button primary">
                    <span>Free Quote</span>
                    <small>No obligation</small>
                </a>
            </div>
            <button class="mobile-menu-toggle" id="mobileMenuToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero hero-responsive">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge">
                    <i class="fas fa-star"></i>
                    <span>#1 Rated Collision Shop</span>
                </div>
                <h1>Your Car Deserves <span class="highlight">Elite Treatment</span></h1>
                <p class="hero-subtitle">Premium collision repair with <strong>lifetime warranty</strong>, <strong>insurance direct billing</strong>, and <strong>same-day estimates</strong>.</p>
                
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">2,500+</span>
                        <span class="stat-label">Cars Restored</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">15min</span>
                        <span class="stat-label">Free Estimate</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Satisfaction</span>
                    </div>
                </div>
                
                <div class="hero-buttons">
                    <a href="#quote-section" class="cta-button primary large">
                        <i class="fas fa-calculator"></i>
                        <span>Get Free Quote Now</span>
                        <small>15-minute estimate • No obligation</small>
                    </a>
                    <a href="tel:2708019780" class="cta-button secondary large">
                        <i class="fas fa-phone"></i>
                        <span>Call (270) 801-9780</span>
                        <small>Available 24/7</small>
                    </a>
                </div>
                
                <div class="hero-trust">
                    <div class="trust-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Lifetime Warranty</span>
                    </div>
                    <div class="trust-item">
                        <i class="fas fa-file-invoice"></i>
                        <span>Insurance Direct Billing</span>
                    </div>
                    <div class="trust-item">
                        <i class="fas fa-truck"></i>
                        <span>Free Towing</span>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-image-container">
                    <img src="media/workingondamagedside.jpg" alt="Professional Collision Repair" class="hero-main-image">
                    <div class="floating-card before-after">
                        <div class="card-header">
                            <span class="badge">Before & After</span>
                        </div>
                        <div class="card-content">
                            <div class="image-comparison">
                                <div class="before-image">
                                    <img src="media/workingondamagedside.jpg" alt="Before Repair">
                                    <span class="label">Before</span>
                                </div>
                                <div class="after-image">
                                    <img src="media/repaintingdoor.jpg" alt="After Repair">
                                    <span class="label">After</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="floating-card testimonial">
                        <div class="card-header">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="card-content">
                            <p>"Amazing work! My car looks better than before the accident."</p>
                            <div class="author">
                                <strong>Sarah M.</strong>
                                <span>Verified Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Urgency Banner -->
    <section class="urgency-banner">
        <div class="container">
            <div class="urgency-content">
                <div class="urgency-text">
                    <i class="fas fa-clock"></i>
                    <span><strong>Limited Time:</strong> Get 20% off your repair + FREE rental car for 3 days!</span>
                </div>
                <div class="urgency-timer">
                    <span>Offer expires in:</span>
                    <div class="timer" id="countdown">
                        <div class="timer-item">
                            <span class="timer-number" id="hours">23</span>
                            <span class="timer-label">Hours</span>
                        </div>
                        <div class="timer-item">
                            <span class="timer-number" id="minutes">59</span>
                            <span class="timer-label">Minutes</span>
                        </div>
                        <div class="timer-item">
                            <span class="timer-number" id="seconds">59</span>
                            <span class="timer-label">Seconds</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Proof Section -->
    <section class="social-proof">
        <div class="container">
            <div class="proof-grid">
                <div class="proof-item">
                    <div class="proof-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="proof-content">
                        <h3>25+ Years</h3>
                        <p>Industry Experience</p>
                    </div>
                </div>
                <div class="proof-item">
                    <div class="proof-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="proof-content">
                        <h3>2,500+</h3>
                        <p>Happy Customers</p>
                    </div>
                </div>
                <div class="proof-item">
                    <div class="proof-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="proof-content">
                        <h3>Lifetime</h3>
                        <p>Warranty</p>
                    </div>
                </div>
                <div class="proof-item">
                    <div class="proof-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="proof-content">
                        <h3>4.9/5</h3>
                        <p>Customer Rating</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <div class="section-header">
                <h2>Premium Collision Repair Services</h2>
                <p>We restore your vehicle to its pre-accident condition using state-of-the-art equipment and premium materials</p>
            </div>
            <div class="services-grid">
                <div class="service-card featured">
                    <div class="service-image">
                        <img src="media/workingondamagedside.jpg" alt="Collision Repair">
                        <div class="service-overlay">
                            <a href="services.php" class="service-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service-badge">Most Popular</div>
                        <h3>Collision Repair</h3>
                        <p>Professional repair of front-end, rear-end, and side impact damage using computerized measuring systems.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Computerized measuring</li>
                            <li><i class="fas fa-check"></i> OEM parts guarantee</li>
                            <li><i class="fas fa-check"></i> Lifetime warranty</li>
                        </ul>
                        <div class="service-price">
                            <span class="price-label">Starting at</span>
                            <span class="price-amount">$299</span>
                        </div>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="media/repaintingdoor.jpg" alt="Paint & Body Work">
                        <div class="service-overlay">
                            <a href="services.php" class="service-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Paint & Body Work</h3>
                        <p>Expert color matching and paint application to restore your vehicle's original appearance.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Color matching technology</li>
                            <li><i class="fas fa-check"></i> Premium paint systems</li>
                            <li><i class="fas fa-check"></i> UV protection coating</li>
                        </ul>
                        <div class="service-price">
                            <span class="price-label">Starting at</span>
                            <span class="price-amount">$199</span>
                        </div>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="media/pullingdentout.jpg" alt="Dent Removal">
                        <div class="service-overlay">
                            <a href="services.php" class="service-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Dent Removal</h3>
                        <p>Paintless dent repair and traditional body work to eliminate dents and restore smooth surfaces.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Paintless dent repair</li>
                            <li><i class="fas fa-check"></i> Hail damage repair</li>
                            <li><i class="fas fa-check"></i> Door ding removal</li>
                        </ul>
                        <div class="service-price">
                            <span class="price-label">Starting at</span>
                            <span class="price-amount">$99</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-cta">
                <a href="services.php" class="cta-button secondary">
                    <i class="fas fa-list"></i>
                    View All Services
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Elite Collision?</h2>
                <p>We're not just another collision shop - we're your trusted partner in getting back on the road</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Lifetime Warranty</h3>
                    <p>We stand behind our work with a comprehensive lifetime warranty on all repairs and paint work.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h3>Insurance Direct Billing</h3>
                    <p>We handle all insurance paperwork and billing directly with your insurance company - no hassle for you.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Free Towing Service</h3>
                    <p>Can't drive your car? We'll tow it to our shop for free and provide a rental car during repairs.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Same-Day Estimates</h3>
                    <p>Get your free estimate the same day you call. No waiting, no delays - just fast, accurate pricing.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>State-of-the-Art Equipment</h3>
                    <p>We use the latest computerized measuring systems and premium tools for perfect repairs every time.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>5-Star Service</h3>
                    <p>Our customers consistently rate us 5 stars for our quality work, friendly service, and fair pricing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section id="quote-section" class="quote-section">
        <div class="container">
            <div class="quote-content">
                <div class="quote-text">
                    <h2>Get Your Free Quote in 3 Simple Steps</h2>
                    <p>No more waiting days for estimates. Get your free quote in minutes, not days.</p>
                    
                    <div class="quote-steps">
                        <div class="step">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Tell Us About Your Car</h4>
                                <p>Basic vehicle information and damage description</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Upload Photos</h4>
                                <p>Show us the damage with a few quick photos</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h4>Get Your Quote</h4>
                                <p>Receive your detailed estimate within 15 minutes</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="quote-guarantee">
                        <i class="fas fa-shield-alt"></i>
                        <span>100% Free • No Obligation • No Spam</span>
                    </div>
                </div>
                <div class="quote-form-container">
                    <div class="quote-form">
                        <div class="form-header">
                            <h3>Get Your Free Quote</h3>
                            <p>Complete the form below and we'll contact you within 15 minutes</p>
                        </div>
                        <form id="quickQuoteForm">
                            <div class="form-group">
                                <label for="customerName">Full Name *</label>
                                <input type="text" id="customerName" name="customerName" placeholder="Enter your full name" required>
                            </div>
                            <div class="form-group">
                                <label for="customerPhone">Phone Number *</label>
                                <input type="tel" id="customerPhone" name="customerPhone" placeholder="(270) 555-1234" required>
                            </div>
                            <div class="form-group">
                                <label for="customerEmail">Email Address</label>
                                <input type="email" id="customerEmail" name="customerEmail" placeholder="your@email.com">
                            </div>
                            <div class="form-group">
                                <label for="vehicleInfo">Vehicle Information *</label>
                                <input type="text" id="vehicleInfo" name="vehicleInfo" placeholder="e.g., 2020 Honda Civic" required>
                            </div>
                            <div class="form-group">
                                <label for="damageDescription">Damage Description *</label>
                                <textarea id="damageDescription" name="damageDescription" rows="3" placeholder="Briefly describe the damage..." required></textarea>
                            </div>
                            <button type="submit" class="cta-button primary large">
                                <i class="fas fa-calculator"></i>
                                <span>Get My Free Quote</span>
                                <small>15-minute response guaranteed</small>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header">
                <h2>What Our Customers Say</h2>
                <p>Don't just take our word for it - hear from our satisfied customers</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Elite Collision did an amazing job on my car. The paint match was perfect and the repair was completed faster than expected. Highly recommend!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://via.placeholder.com/50x50/1B4D3E/FFFFFF?text=SM" alt="Sarah M.">
                        </div>
                        <div class="author-info">
                            <h4>Sarah M.</h4>
                            <span>Verified Customer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"The team was professional, kept me updated throughout the process, and handled all the insurance paperwork. Made a stressful situation easy."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://via.placeholder.com/50x50/1B4D3E/FFFFFF?text=JM" alt="John M.">
                        </div>
                        <div class="author-info">
                            <h4>John M.</h4>
                            <span>Verified Customer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"I've used other shops before, but Elite Collision is by far the best. The quality of work and customer service is unmatched. Worth every penny!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://via.placeholder.com/50x50/1B4D3E/FFFFFF?text=AL" alt="Alex L.">
                        </div>
                        <div class="author-info">
                            <h4>Alex L.</h4>
                            <span>Verified Customer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="final-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Get Your Car Back to Perfect?</h2>
                <p>Join thousands of satisfied customers who trust Elite Collision for their repair needs</p>
                <div class="cta-buttons">
                    <a href="#quote-section" class="cta-button primary large">
                        <i class="fas fa-calculator"></i>
                        <span>Get Free Quote Now</span>
                        <small>15-minute response guaranteed</small>
                    </a>
                    <a href="tel:2708019780" class="cta-button secondary large">
                        <i class="fas fa-phone"></i>
                        <span>Call (270) 801-9780</span>
                        <small>Available 24/7</small>
                    </a>
                </div>
                <div class="cta-guarantee">
                    <i class="fas fa-shield-alt"></i>
                    <span>Lifetime Warranty • Insurance Direct Billing • Free Towing</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <img src="media/logo.png" alt="Elite Collision Repair" height="40">
                        <span>Elite Collision</span>
                    </div>
                    <p>Premium collision repair services with lifetime warranty and insurance direct billing. Your trusted partner for getting back on the road.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-google"></i></a>
                        <a href="#"><i class="fab fa-yelp"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="services.php">Collision Repair</a></li>
                        <li><a href="services.php">Paint & Body Work</a></li>
                        <li><a href="services.php">Dent Removal</a></li>
                        <li><a href="services.php">Frame Straightening</a></li>
                        <li><a href="services.php">Glass Replacement</a></li>
                        <li><a href="services.php">Detailing Services</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <a href="tel:2708019780">(270) 801-9780</a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@elitecollision.com">info@elitecollision.com</a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>123 Main Street<br>Your City, KY 12345</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <span>Mon-Fri: 8AM-6PM<br>Sat: 8AM-4PM</span>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Why Choose Us</h3>
                    <ul>
                        <li><i class="fas fa-check"></i> Lifetime Warranty</li>
                        <li><i class="fas fa-check"></i> Insurance Direct Billing</li>
                        <li><i class="fas fa-check"></i> Free Towing Service</li>
                        <li><i class="fas fa-check"></i> Same-Day Estimates</li>
                        <li><i class="fas fa-check"></i> 25+ Years Experience</li>
                        <li><i class="fas fa-check"></i> 4.9/5 Customer Rating</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p>&copy; 2024 Elite Collision Repair. All rights reserved.</p>
                    <div class="footer-links">
                        <a href="privacy.php">Privacy Policy</a>
                        <a href="terms.php">Terms of Service</a>
                        <a href="sitemap.php">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/main.js"></script>
    <script>
        // Countdown Timer
        function updateCountdown() {
            const now = new Date().getTime();
            const countDownDate = new Date().getTime() + (24 * 60 * 60 * 1000); // 24 hours from now
            
            const distance = countDownDate - now;
            
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            document.getElementById("hours").innerHTML = hours.toString().padStart(2, '0');
            document.getElementById("minutes").innerHTML = minutes.toString().padStart(2, '0');
            document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, '0');
            
            if (distance < 0) {
                document.getElementById("countdown").innerHTML = "EXPIRED";
            }
        }
        
        // Update countdown every second
        setInterval(updateCountdown, 1000);
        updateCountdown();
        
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.getElementById('mobileMenuToggle');
            const navMenu = document.getElementById('navMenu');
            
            if (mobileMenuToggle && navMenu) {
                mobileMenuToggle.addEventListener('click', function() {
                    navMenu.classList.toggle('active');
                    mobileMenuToggle.classList.toggle('active');
                });
                
                // Close menu when clicking on a link
                const navLinks = navMenu.querySelectorAll('a');
                navLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        navMenu.classList.remove('active');
                        mobileMenuToggle.classList.remove('active');
                    });
                });
                
                // Close menu when clicking outside
                document.addEventListener('click', function(event) {
                    if (!navMenu.contains(event.target) && !mobileMenuToggle.contains(event.target)) {
                        navMenu.classList.remove('active');
                        mobileMenuToggle.classList.remove('active');
                    }
                });
            }
            
            // Quote form submission
            const quoteForm = document.getElementById('quickQuoteForm');
            if (quoteForm) {
                quoteForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Show loading state
                    const submitBtn = this.querySelector('button[type="submit"]');
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i><span>Processing...</span>';
                    submitBtn.disabled = true;
                    
                    // Simulate form submission
                    setTimeout(() => {
                        alert('Thank you! We\'ll contact you within 15 minutes with your free quote.');
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                        this.reset();
                    }, 2000);
                });
            }
        });
    </script>
</body>
</html>
