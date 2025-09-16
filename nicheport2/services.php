<?php
require_once 'includes/config.php';
$page_title = "Premium Collision Repair Services | Elite Auto Body Shop";
$page_description = "Professional collision repair services including paint work, body repair, frame straightening, and more. Insurance approved with lifetime warranty.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="collision repair services, auto body shop, paint work, frame repair, dent removal, car repair services">
    
    <link rel="icon" type="image/png" href="media/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/fonts/fontawesome/fontawesome-free-6.7.2-web/css/all.min.css">
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php" class="active">Services</a></li>
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
    <section class="hero hero-responsive" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--secondary-green) 100%); color: var(--white);">
        <div class="container">
            <div class="hero-content" style="grid-template-columns: 1fr; text-align: center;">
                <div class="hero-text">
                    <div class="hero-badge">
                        <i class="fas fa-tools"></i>
                        <span>Premium Services</span>
                    </div>
                    <h1>Complete <span class="highlight">Collision Repair</span> Services</h1>
                    <p class="hero-subtitle">From minor dents to major collision damage, we restore your vehicle to its pre-accident condition with <strong>lifetime warranty</strong> and <strong>insurance direct billing</strong>.</p>
                    
                    <div class="hero-buttons">
                        <a href="#services-content" class="cta-button primary large">
                            <i class="fas fa-list"></i>
                            <span>View All Services</span>
                            <small>Comprehensive repair options</small>
                        </a>
                        <a href="tel:2708019780" class="cta-button secondary large">
                            <i class="fas fa-phone"></i>
                            <span>Call (270) 801-9780</span>
                            <small>Free consultation</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Content -->
    <section id="services-content" class="services" style="padding: 5rem 0;">
        <div class="container">
            <div class="section-header">
                <h2>Our Premium Services</h2>
                <p>We offer comprehensive collision repair services using state-of-the-art equipment and premium materials</p>
            </div>
            
            <div class="services-grid">
                <!-- Collision Repair -->
                <div class="service-card featured">
                    <div class="service-image">
                        <img src="media/workingondamagedside.jpg" alt="Collision Repair">
                        <div class="service-overlay">
                            <a href="#quote-section" class="service-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service-badge">Most Popular</div>
                        <h3>Collision Repair</h3>
                        <p>Professional repair of front-end, rear-end, and side impact damage using computerized measuring systems and OEM parts.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Computerized measuring systems</li>
                            <li><i class="fas fa-check"></i> OEM parts guarantee</li>
                            <li><i class="fas fa-check"></i> Lifetime warranty</li>
                            <li><i class="fas fa-check"></i> Insurance direct billing</li>
                        </ul>
                        <div class="service-cta">
                            <a href="#quote-section" class="cta-button primary">
                                <i class="fas fa-calculator"></i>
                                <span>Get Free Quote</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Paint & Body Work -->
                <div class="service-card">
                    <div class="service-image">
                        <img src="media/repaintingdoor.jpg" alt="Paint & Body Work">
                        <div class="service-overlay">
                            <a href="#quote-section" class="service-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Paint & Body Work</h3>
                        <p>Expert color matching and paint application to restore your vehicle's original appearance and value.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Color matching technology</li>
                            <li><i class="fas fa-check"></i> Premium paint systems</li>
                            <li><i class="fas fa-check"></i> UV protection coating</li>
                            <li><i class="fas fa-check"></i> Color blending techniques</li>
                        </ul>
                        <div class="service-cta">
                            <a href="#quote-section" class="cta-button primary">
                                <i class="fas fa-calculator"></i>
                                <span>Get Free Quote</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Dent Removal -->
                <div class="service-card">
                    <div class="service-image">
                        <img src="media/pullingdentout.jpg" alt="Dent Removal">
                        <div class="service-overlay">
                            <a href="#quote-section" class="service-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Dent Removal</h3>
                        <p>Paintless dent repair and traditional body work to eliminate dents and restore smooth surfaces.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Paintless dent repair (PDR)</li>
                            <li><i class="fas fa-check"></i> Hail damage repair</li>
                            <li><i class="fas fa-check"></i> Door ding removal</li>
                            <li><i class="fas fa-check"></i> Traditional body work</li>
                        </ul>
                        <div class="service-cta">
                            <a href="#quote-section" class="cta-button primary">
                                <i class="fas fa-calculator"></i>
                                <span>Get Free Quote</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Frame Straightening -->
                <div class="service-card">
                    <div class="service-image">
                        <img src="media/gallery-welding-frame-white-car.jpeg" alt="Frame Straightening">
                        <div class="service-overlay">
                            <a href="#quote-section" class="service-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Frame Straightening</h3>
                        <p>Precision frame repair using computerized measuring systems to ensure perfect alignment and safety.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Computerized measuring</li>
                            <li><i class="fas fa-check"></i> Frame straightening</li>
                            <li><i class="fas fa-check"></i> Structural welding</li>
                            <li><i class="fas fa-check"></i> Alignment verification</li>
                        </ul>
                        <div class="service-cta">
                            <a href="#quote-section" class="cta-button primary">
                                <i class="fas fa-calculator"></i>
                                <span>Get Free Quote</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Glass Replacement -->
                <div class="service-card">
                    <div class="service-image">
                        <img src="media/glassreplacement.jpg" alt="Glass Replacement">
                        <div class="service-overlay">
                            <a href="#quote-section" class="service-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Glass Replacement</h3>
                        <p>Windshield and window replacement services with OEM-quality glass and professional installation.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Windshield replacement</li>
                            <li><i class="fas fa-check"></i> Side window replacement</li>
                            <li><i class="fas fa-check"></i> OEM quality glass</li>
                            <li><i class="fas fa-check"></i> Professional installation</li>
                        </ul>
                        <div class="service-cta">
                            <a href="#quote-section" class="cta-button primary">
                                <i class="fas fa-calculator"></i>
                                <span>Get Free Quote</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Detailing Services -->
                <div class="service-card">
                    <div class="service-image">
                        <img src="media/waxingacar.jpg" alt="Detailing Services">
                        <div class="service-overlay">
                            <a href="#quote-section" class="service-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Detailing Services</h3>
                        <p>Complete interior and exterior detailing to restore your vehicle's showroom condition.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Interior deep cleaning</li>
                            <li><i class="fas fa-check"></i> Exterior wash and wax</li>
                            <li><i class="fas fa-check"></i> Paint correction</li>
                            <li><i class="fas fa-check"></i> Leather conditioning</li>
                        </ul>
                        <div class="service-cta">
                            <a href="#quote-section" class="cta-button primary">
                                <i class="fas fa-calculator"></i>
                                <span>Get Free Quote</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="why-choose" style="padding: 5rem 0;">
        <div class="container">
            <div class="section-header">
                <h2>Our Repair Process</h2>
                <p>From initial estimate to final delivery, we keep you informed every step of the way</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3>1. Free Estimate</h3>
                    <p>Get a detailed estimate using our interactive car model or schedule an in-person inspection.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>2. Damage Assessment</h3>
                    <p>Our experts thoroughly inspect your vehicle to identify all damage and create a repair plan.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <h3>3. Insurance Coordination</h3>
                    <p>We work directly with your insurance company to handle all paperwork and approvals.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>4. Professional Repair</h3>
                    <p>Our certified technicians perform the repair using industry-standard techniques and equipment.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>5. Quality Inspection</h3>
                    <p>Every repair undergoes a thorough quality inspection to ensure it meets our high standards.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3>6. Delivery</h3>
                    <p>Your vehicle is returned to you in perfect condition, ready to hit the road again.</p>
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
</body>
</html>
