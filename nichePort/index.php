<?php
require_once 'includes/config.php';
$page_title = "Professional Collision Repair Services | Generic Collision Shop";
$page_description = "Expert collision repair services with insurance assistance. Get your free estimate today. Professional, affordable, and reliable auto body repair.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="collision repair, auto body shop, car repair, insurance claims, collision center">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://genericcollision.com">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="media/logo.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="nav-container">
            <a href="index.php" class="logo">
                <img src="media/logo.png" alt="Generic Collision Shop" height="40" style="vertical-align: middle; margin-right: 10px;">
                Generic Collision Shop
            </a>
            <nav>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="careers.php">Careers</a></li>
                </ul>
            </nav>
            <a href="#quote-section" class="cta-button">Get Free Quote</a>
            <button class="mobile-menu-toggle" id="mobileMenuToggle">☰</button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge">
                    <span>🏆 #1 Rated Collision Shop</span>
                </div>
                <h1>Accident? <span class="highlight">We've Got You Covered!</span></h1>
                <p class="hero-subtitle">Professional collision repair with <strong>insurance assistance</strong>, <strong>fast turnaround</strong>, and <strong>lifetime warranty</strong> on all work.</p>
                
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Cars Repaired</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">24hr</span>
                        <span class="stat-label">Response Time</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Insurance Approved</span>
                    </div>
                </div>
                
                <div class="hero-buttons">
                    <a href="#quote-section" class="cta-button primary">
                        <span>Get Free Estimate</span>
                        <small>No obligation, instant quote</small>
                    </a>
                    <a href="tel:2708019780" class="cta-button secondary">
                        <span>Call Now</span>
                        <small>(270) 801-9780</small>
                    </a>
                </div>
                
                <div class="hero-trust">
                    <p>✅ Free estimates • ✅ Insurance direct billing • ✅ Lifetime warranty</p>
                </div>
            </div>
            <div class="hero-visual">
                <div class="accident-sticker-container">
                    <div class="sticker-badge">NEW!</div>
                    <img src="media/caraccidentemoj-sticker.png" alt="Car Accident" class="accident-sticker">
                    <div class="sticker-message">
                        <h3>This You?</h3>
                        <p>We Can Fix It!</p>
                        <div class="sticker-arrow">↓</div>
                    </div>
                </div>
                <div class="hero-features">
                    <div class="feature-item">
                        <span class="feature-icon">⚡</span>
                        <span>Quick Repair</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">🛡️</span>
                        <span>Insurance Help</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">💯</span>
                        <span>Quality Work</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="text-center">Why Choose Generic Collision Shop?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🛡️</div>
                    <h3>Insurance Approved</h3>
                    <p>We work directly with all major insurance companies to handle your claim and get you back on the road faster.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3>Fast Turnaround</h3>
                    <p>Our experienced technicians work efficiently to complete your repair quickly without compromising quality.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💰</div>
                    <h3>Affordable Rates</h3>
                    <p>Competitive pricing that won't break the bank. Quality repairs at prices you can afford.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔧</div>
                    <h3>Expert Technicians</h3>
                    <p>Certified professionals with years of experience working on all makes and models of vehicles.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📱</div>
                    <h3>Easy Communication</h3>
                    <p>Stay updated throughout the repair process with regular updates and clear communication.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">✅</div>
                    <h3>Quality Guarantee</h3>
                    <p>We stand behind our work with a comprehensive warranty on all repairs and paint work.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <h2 class="text-center">Our Services</h2>
            <p class="text-center">Comprehensive collision repair services for all types of damage</p>
            <div class="services-grid">
                <div class="service-card">
                    <img src="media/workingondamagedside.jpg" alt="Collision Repair" class="service-image">
                    <div class="service-content">
                        <h3>Collision Repair</h3>
                        <p>Professional repair of front-end, rear-end, and side impact damage using state-of-the-art equipment.</p>
                    </div>
                </div>
                <div class="service-card">
                    <img src="media/repaintingdoor.jpg" alt="Paint & Body Work" class="service-image">
                    <div class="service-content">
                        <h3>Paint & Body Work</h3>
                        <p>Expert color matching and paint application to restore your vehicle's original appearance.</p>
                    </div>
                </div>
                <div class="service-card">
                    <img src="media/pullingdentout.jpg" alt="Dent Removal" class="service-image">
                    <div class="service-content">
                        <h3>Dent Removal</h3>
                        <p>Paintless dent repair and traditional body work to eliminate dents and restore smooth surfaces.</p>
                    </div>
                </div>
                <div class="service-card">
                    <img src="media/gallery-welding-frame-white-car.jpeg" alt="Frame Straightening" class="service-image">
                    <div class="service-content">
                        <h3>Frame Straightening</h3>
                        <p>Precision frame repair using computerized measuring systems for perfect alignment.</p>
                    </div>
                </div>
                <div class="service-card">
                    <img src="media/waxingacar.jpg" alt="Detailing Services" class="service-image">
                    <div class="service-content">
                        <h3>Detailing Services</h3>
                        <p>Complete interior and exterior detailing to restore your vehicle's showroom condition.</p>
                    </div>
                </div>
                <div class="service-card">
                    <img src="media/glassreplacement.jpg" alt="Glass Replacement" class="service-image">
                    <div class="service-content">
                        <h3>Glass Replacement</h3>
                        <p>Windshield and window replacement services with OEM-quality glass and professional installation.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center" style="margin-top: 3rem;">
                <a href="services.php" class="cta-button">View All Services</a>
            </div>
        </div>
    </section>

    <!-- Interactive Quote Section -->
    <section id="quote-section" class="quote-section">
        <div class="container">
            <h2 class="text-center">Get Your Free Estimate</h2>
            <p class="text-center">Choose your preferred method to get a quick estimate</p>
            
            <!-- Tab Navigation -->
            <div class="quote-tabs">
                <button class="tab-button active" data-tab="interactive">Interactive Car Model</button>
                <button class="tab-button" data-tab="form">Quick Form</button>
                <button class="tab-button" data-tab="phone">Call Now</button>
            </div>
            
            <!-- Interactive Car Model Tab -->
            <div id="interactive-tab" class="tab-content active">
                <div class="quote-container">
                    <div class="car-model-container">
                        <img src="media/carmodelmain.png" alt="Car Model" class="car-model" id="carModel">
                        <div class="car-model-overlay">
                            <h3>Select Damaged Areas</h3>
                            <p>Check all areas that need repair</p>
                        </div>
                    </div>
                    <div class="quote-form">
                        <h3>Damage Selection</h3>
                        <div class="damage-checkboxes">
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="damage[]" value="Front Bumper">
                                    <span class="checkmark"></span>
                                    <span class="checkbox-text">Front Bumper</span>
                                </label>
                            </div>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="damage[]" value="Hood">
                                    <span class="checkmark"></span>
                                    <span class="checkbox-text">Hood</span>
                                </label>
                            </div>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="damage[]" value="Front Door">
                                    <span class="checkmark"></span>
                                    <span class="checkbox-text">Front Door</span>
                                </label>
                            </div>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="damage[]" value="Rear Door">
                                    <span class="checkmark"></span>
                                    <span class="checkbox-text">Rear Door</span>
                                </label>
                            </div>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="damage[]" value="Trunk">
                                    <span class="checkmark"></span>
                                    <span class="checkbox-text">Trunk</span>
                                </label>
                            </div>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="damage[]" value="Rear Bumper">
                                    <span class="checkmark"></span>
                                    <span class="checkbox-text">Rear Bumper</span>
                                </label>
                            </div>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="damage[]" value="Roof">
                                    <span class="checkmark"></span>
                                    <span class="checkbox-text">Roof</span>
                                </label>
                            </div>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="damage[]" value="Side Panel">
                                    <span class="checkmark"></span>
                                    <span class="checkbox-text">Side Panel</span>
                                </label>
                            </div>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="damage[]" value="Other">
                                    <span class="checkmark"></span>
                                    <span class="checkbox-text">Other</span>
                                </label>
                            </div>
                        </div>
                        <div class="selected-damage" id="selectedDamage" style="display: none;">
                            <h4>Selected Areas: <span id="selectedDamageText"></span></h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Quick Form Tab -->
            <div id="form-tab" class="tab-content">
                <div class="quote-form-simple">
                    <h3>Quick Quote Request</h3>
                    <form id="quickQuoteForm">
                        <div class="form-group">
                            <label for="customerName">Name *</label>
                            <input type="text" id="customerName" name="customerName" placeholder="Your full name" required>
                        </div>
                        <div class="form-group">
                            <label for="customerPhone">Phone *</label>
                            <input type="tel" id="customerPhone" name="customerPhone" placeholder="(270) 555-1234" required>
                        </div>
                        <div class="form-group">
                            <label for="vehicleInfo">Vehicle *</label>
                            <input type="text" id="vehicleInfo" name="vehicleInfo" placeholder="e.g., 2020 Honda Civic" required>
                        </div>
                        <div class="form-group">
                            <label for="damageDescription">What's damaged?</label>
                            <textarea id="damageDescription" name="damageDescription" rows="2" placeholder="Brief description of damage..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Get Free Estimate</button>
                        <p class="form-note">We'll call you within 24 hours with your estimate!</p>
                    </form>
                </div>
            </div>
            
            <!-- Phone Call Tab -->
            <div id="phone-tab" class="tab-content">
                <div class="phone-call-content">
                    <div class="phone-icon">📞</div>
                    <h3>Call Us Now for Immediate Assistance</h3>
                    <p>Speak directly with our experienced estimators for the most accurate quote</p>
                    <div class="phone-info">
                        <div class="phone-number">
                            <a href="tel:2708019780" class="phone-link">(270) 801-9780</a>
                        </div>
                        <div class="phone-hours">
                            <h4>Business Hours:</h4>
                            <p>Monday - Friday: 8:00 AM - 6:00 PM</p>
                            <p>Saturday: 8:00 AM - 4:00 PM</p>
                            <p>Sunday: Closed</p>
                        </div>
                    </div>
                    <div class="phone-benefits">
                        <div class="benefit">
                            <span class="benefit-icon">⚡</span>
                            <span>Instant Quote</span>
                        </div>
                        <div class="benefit">
                            <span class="benefit-icon">🎯</span>
                            <span>Expert Advice</span>
                        </div>
                        <div class="benefit">
                            <span class="benefit-icon">💬</span>
                            <span>Personal Service</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery">
        <div class="container">
            <h2 class="text-center">Our Work</h2>
            <p class="text-center">See the quality of our collision repair work</p>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="media/workingondamagedside.jpg" alt="Working on Damaged Side" class="gallery-image">
                    <div class="gallery-overlay">
                        <h4>Side Damage Repair</h4>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/gallery-welding-frame-white-car.jpeg" alt="Frame Repair Work" class="gallery-image">
                    <div class="gallery-overlay">
                        <h4>Frame Straightening</h4>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/repaintingdoor.jpg" alt="Paint Work" class="gallery-image">
                    <div class="gallery-overlay">
                        <h4>Paint Matching</h4>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/installing new fender.jpg" alt="Fender Installation" class="gallery-image">
                    <div class="gallery-overlay">
                        <h4>Panel Replacement</h4>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/pullingdentout.jpg" alt="Dent Removal" class="gallery-image">
                    <div class="gallery-overlay">
                        <h4>Dent Removal</h4>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/servicetechinshop.jpg" alt="Service Technician" class="gallery-image">
                    <div class="gallery-overlay">
                        <h4>Professional Service</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact">
        <div class="container">
            <h2 class="text-center">Get In Touch</h2>
            <p class="text-center">Ready to get your vehicle repaired? Contact us today!</p>
            <div class="contact-grid">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div>
                            <h4>Phone</h4>
                            <p><a href="tel:2708019780">(270) 801-9780</a></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">✉️</div>
                        <div>
                            <h4>Email</h4>
                            <p><a href="mailto:info@genericcollision.com">info@genericcollision.com</a></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div>
                            <h4>Address</h4>
                            <p>123 Main Street<br>Your City, KY 12345</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">🕒</div>
                        <div>
                            <h4>Hours</h4>
                            <p>Monday - Friday: 8:00 AM - 6:00 PM<br>Saturday: 8:00 AM - 4:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                <div class="quote-form">
                    <h3>Send Us a Message</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="contactName">Name:</label>
                            <input type="text" id="contactName" name="contactName" required>
                        </div>
                        <div class="form-group">
                            <label for="contactPhone">Phone:</label>
                            <input type="tel" id="contactPhone" name="contactPhone" required>
                        </div>
                        <div class="form-group">
                            <label for="contactEmail">Email:</label>
                            <input type="email" id="contactEmail" name="contactEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="contactMessage">Message:</label>
                            <textarea id="contactMessage" name="contactMessage" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="cta-button" style="width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Generic Collision Shop</h3>
                    <p>Professional collision repair services with insurance assistance. Quality work at affordable prices.</p>
                </div>
                <div class="footer-section">
                    <h3>Services</h3>
                    <ul style="list-style: none;">
                        <li><a href="services.php">Collision Repair</a></li>
                        <li><a href="services.php">Paint & Body Work</a></li>
                        <li><a href="services.php">Frame Straightening</a></li>
                        <li><a href="services.php">Detailing Services</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Phone: <a href="tel:2708019780">(270) 801-9780</a></p>
                    <p>Email: <a href="mailto:info@genericcollision.com">info@genericcollision.com</a></p>
                    <p>123 Main Street, Your City, KY 12345</p>
                </div>
                <div class="footer-section">
                    <h3>Hours</h3>
                    <p>Monday - Friday: 8:00 AM - 6:00 PM</p>
                    <p>Saturday: 8:00 AM - 4:00 PM</p>
                    <p>Sunday: Closed</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Generic Collision Shop. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/main.js"></script>
    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.getElementById('mobileMenuToggle');
            const navMenu = document.getElementById('navMenu');
            
            if (mobileMenuToggle && navMenu) {
                mobileMenuToggle.addEventListener('click', function() {
                    navMenu.classList.toggle('active');
                });
                
                // Close menu when clicking on a link
                const navLinks = navMenu.querySelectorAll('a');
                navLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        navMenu.classList.remove('active');
                    });
                });
                
                // Close menu when clicking outside
                document.addEventListener('click', function(event) {
                    if (!navMenu.contains(event.target) && !mobileMenuToggle.contains(event.target)) {
                        navMenu.classList.remove('active');
                    }
                });
            }
            
            // Tab functionality
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetTab = this.getAttribute('data-tab');
                    
                    // Remove active class from all buttons and contents
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    tabContents.forEach(content => content.classList.remove('active'));
                    
                    // Add active class to clicked button and corresponding content
                    this.classList.add('active');
                    document.getElementById(targetTab + '-tab').classList.add('active');
                });
            });
            
            // Checkbox functionality for damage selection
            const damageCheckboxes = document.querySelectorAll('input[name="damage[]"]');
            const selectedDamageDiv = document.getElementById('selectedDamage');
            const selectedDamageText = document.getElementById('selectedDamageText');
            
            function updateSelectedDamage() {
                const selectedAreas = Array.from(damageCheckboxes)
                    .filter(checkbox => checkbox.checked)
                    .map(checkbox => checkbox.value);
                
                if (selectedAreas.length > 0) {
                    selectedDamageDiv.style.display = 'block';
                    selectedDamageText.textContent = selectedAreas.join(', ');
                } else {
                    selectedDamageDiv.style.display = 'none';
                }
            }
            
            damageCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateSelectedDamage);
            });
        });
    </script>
</body>
</html>
