<?php
require_once 'includes/config.php';
$page_title = get_page_title('services');
$page_description = get_meta_description('services');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="collision repair services, auto body shop, paint work, frame repair, dent removal, car repair services, insurance claims">
    
    <link rel="icon" type="image/png" href="media/logo.png">
    <link rel="canonical" href="<?php echo SITE_URL; ?>/services.php">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <!-- URGENCY BANNER -->
    <div class="urgency-banner">
        <div class="urgency-content">
            <div class="urgency-icon">
                <i class="fas fa-tools"></i>
            </div>
            <span class="urgency-text">LIMITED TIME: FREE TOWING + LIFETIME WARRANTY + 15-MINUTE QUOTES</span>
            <div class="scarcity-indicator">Only 3 spots left this week!</div>
        </div>
    </div>

    <!-- HEADER -->
    <header class="header" id="header">
        <div class="nav-container">
            <a href="index.php" class="logo">
                <img src="media/logo.png" alt="Elite Collision Repair" height="50">
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
                <a href="tel:<?php echo SITE_PHONE_CLEAN; ?>" class="phone-cta">
                    <i class="fas fa-phone"></i>
                    <span><?php echo SITE_PHONE; ?></span>
                </a>
                <a href="#quote-section" class="cta-button primary">
                    <span>Free Quote</span>
                    <small>15-min response</small>
                </a>
            </div>
            <button class="mobile-menu-toggle" id="mobileMenuToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge">
                    <i class="fas fa-tools"></i>
                    <span>Premium Services</span>
                </div>
                <h1>Complete <span class="highlight">Collision Repair</span> Services</h1>
                <p class="hero-subtitle">From minor dents to major collision damage, we restore your vehicle to its pre-accident condition with <strong>lifetime warranty</strong> and <strong>insurance direct billing</strong>.</p>
                
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">6</span>
                        <span class="stat-label">Service Categories</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">25+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Satisfaction Guaranteed</span>
                    </div>
                </div>
                
                <div class="hero-buttons">
                    <a href="#services-content" class="cta-button primary large">
                        <i class="fas fa-list"></i>
                        <span>View All Services</span>
                        <small>Comprehensive repair options</small>
                    </a>
                    <a href="tel:<?php echo SITE_PHONE_CLEAN; ?>" class="cta-button accent large">
                        <i class="fas fa-phone"></i>
                        <span>Call <?php echo SITE_PHONE; ?></span>
                        <small>Free consultation</small>
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-image-container">
                    <img src="media/servicetechinshop.jpg" alt="Professional collision repair technician at work" class="hero-main-image">
                    <div class="floating-card">
                        <div class="card-content">
                            <div class="card-header">
                                <i class="fas fa-wrench"></i>
                                <span>Certified Tech</span>
                            </div>
                            <p>"25+ years of experience with the latest collision repair technology and techniques."</p>
                            <div class="card-rating">
                                <i class="fas fa-certificate"></i>
                                <span>ASE Certified</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES CONTENT -->
    <section id="services-content" class="section">
        <div class="container">
            <div class="section-header">
                <h2>Our Premium Services</h2>
                <p>We offer comprehensive collision repair services using state-of-the-art equipment and premium materials. Every repair comes with our lifetime warranty.</p>
            </div>
            
            <div class="services-grid">
                <!-- Collision Repair -->
                <div class="service-card featured">
                    <div class="service-image">
                        <img src="media/workingondamagedside.jpg" alt="Professional collision repair services">
                        <div class="service-overlay">
                            <a href="#quote-section" class="service-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Collision Repair</h3>
                        <p>Professional repair of front-end, rear-end, and side impact damage using computerized measuring systems and OEM parts.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Computerized measuring systems</li>
                            <li><i class="fas fa-check"></i> OEM parts guarantee</li>
                            <li><i class="fas fa-check"></i> Lifetime warranty</li>
                            <li><i class="fas fa-check"></i> Insurance direct billing</li>
                            <li><i class="fas fa-check"></i> Frame straightening</li>
                            <li><i class="fas fa-check"></i> Structural welding</li>
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
                        <img src="media/repaintingdoor.jpg" alt="Professional paint and body work">
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
                            <li><i class="fas fa-check"></i> Clear coat application</li>
                            <li><i class="fas fa-check"></i> Paint correction</li>
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
                        <img src="media/pullingdentout.jpg" alt="Professional dent removal services">
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
                            <li><i class="fas fa-check"></i> Bumper repair</li>
                            <li><i class="fas fa-check"></i> Panel replacement</li>
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
                        <img src="media/gallery-welding-frame-white-car.jpeg" alt="Professional frame straightening services">
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
                            <li><i class="fas fa-check"></i> Safety inspection</li>
                            <li><i class="fas fa-check"></i> OEM specifications</li>
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
                        <img src="media/glassreplacement.jpg" alt="Professional glass replacement services">
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
                            <li><i class="fas fa-check"></i> Weather sealing</li>
                            <li><i class="fas fa-check"></i> Insurance coverage</li>
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
                        <img src="media/waxingacar.jpg" alt="Professional detailing services">
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
                            <li><i class="fas fa-check"></i> Engine bay cleaning</li>
                            <li><i class="fas fa-check"></i> Ceramic coating</li>
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

    <!-- PROCESS SECTION -->
    <section class="why-choose">
        <div class="container">
            <div class="section-header">
                <h2>Our Repair Process</h2>
                <p>From initial estimate to final delivery, we keep you informed every step of the way with our transparent process.</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3>1. Free Estimate</h3>
                    <p>Get a detailed estimate using our interactive car model or schedule an in-person inspection. We provide accurate pricing upfront.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>2. Damage Assessment</h3>
                    <p>Our experts thoroughly inspect your vehicle to identify all damage and create a comprehensive repair plan.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <h3>3. Insurance Coordination</h3>
                    <p>We work directly with your insurance company to handle all paperwork and approvals, making the process seamless.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>4. Professional Repair</h3>
                    <p>Our certified technicians perform the repair using industry-standard techniques and state-of-the-art equipment.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>5. Quality Inspection</h3>
                    <p>Every repair undergoes a thorough quality inspection to ensure it meets our high standards and your expectations.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3>6. Delivery</h3>
                    <p>Your vehicle is returned to you in perfect condition, ready to hit the road again with our lifetime warranty.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- INSURANCE PARTNERS -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2>Insurance Partners</h2>
                <p>We work directly with all major insurance companies to make your claim process as smooth as possible.</p>
            </div>
            
            <div class="insurance-partners" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin: 3rem 0;">
                <?php
                $insurance_partners = [
                    'State Farm', 'Allstate', 'Geico', 'Progressive', 
                    'Nationwide', 'Farmers', 'USAA', 'Liberty Mutual'
                ];
                foreach ($insurance_partners as $partner): ?>
                <div style="background: var(--white); padding: 2rem; border-radius: 1rem; text-align: center; box-shadow: var(--shadow); border: 2px solid var(--light-gray); transition: var(--transition-normal);">
                    <div style="font-size: 2rem; color: var(--steel-blue); margin-bottom: 1rem;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 style="color: var(--steel-blue); margin: 0;"><?php echo $partner; ?></h4>
                    <p style="color: var(--medium-gray); font-size: 0.9rem; margin: 0.5rem 0 0 0;">Direct Billing</p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- QUOTE SECTION -->
    <section id="quote-section" class="quote-section">
        <div class="quote-content">
            <div class="quote-text">
                <h2>Get Your Free Quote in 3 Simple Steps</h2>
                <p>No more waiting days for estimates. Get your free quote in minutes, not days. Our advanced estimating system gives you an accurate price instantly.</p>
                
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
                    <span>100% Free • No Obligation • No Spam • Lifetime Warranty Included</span>
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
                            <label for="vehicleYear">Vehicle Year *</label>
                            <select id="vehicleYear" name="vehicleYear" required>
                                <option value="">Select Year</option>
                                <?php for($year = date('Y'); $year >= 2000; $year--): ?>
                                <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                <?php endfor; ?>
                                <option value="older">Older than 2000</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="vehicleMake">Vehicle Make *</label>
                            <input type="text" id="vehicleMake" name="vehicleMake" placeholder="e.g., Honda, Toyota, Ford" required>
                        </div>
                        <div class="form-group">
                            <label for="vehicleModel">Vehicle Model *</label>
                            <input type="text" id="vehicleModel" name="vehicleModel" placeholder="e.g., Civic, Camry, F-150" required>
                        </div>
                        <div class="form-group">
                            <label for="serviceNeeded">Service Needed *</label>
                            <select id="serviceNeeded" name="serviceNeeded" required>
                                <option value="">Select Service</option>
                                <option value="collision-repair">Collision Repair</option>
                                <option value="paint-body-work">Paint & Body Work</option>
                                <option value="dent-removal">Dent Removal</option>
                                <option value="frame-straightening">Frame Straightening</option>
                                <option value="glass-replacement">Glass Replacement</option>
                                <option value="detailing">Detailing Services</option>
                                <option value="multiple">Multiple Services</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="damageDescription">Damage Description *</label>
                            <textarea id="damageDescription" name="damageDescription" rows="3" placeholder="Please describe the damage in detail..." required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="insuranceCompany">Insurance Company</label>
                            <select id="insuranceCompany" name="insuranceCompany">
                                <option value="">Select Insurance Company</option>
                                <?php foreach($insurance_partners as $partner): ?>
                                <option value="<?php echo strtolower(str_replace(' ', '-', $partner)); ?>"><?php echo $partner; ?></option>
                                <?php endforeach; ?>
                                <option value="other">Other</option>
                            </select>
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
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <img src="media/logo.png" alt="Elite Collision Repair" height="40">
                        <span>Elite Collision</span>
                    </div>
                    <p>Kentucky's #1 collision repair shop with 25+ years of experience. Premium collision repair services with lifetime warranty and insurance direct billing.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="Google"><i class="fab fa-google"></i></a>
                        <a href="#" aria-label="Yelp"><i class="fab fa-yelp"></i></a>
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
                        <a href="tel:<?php echo SITE_PHONE_CLEAN; ?>"><?php echo SITE_PHONE; ?></a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?php echo BUSINESS_ADDRESS; ?><br><?php echo BUSINESS_CITY; ?>, <?php echo BUSINESS_STATE; ?> <?php echo BUSINESS_ZIP; ?></span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <span><?php echo BUSINESS_HOURS; ?></span>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Why Choose Us</h3>
                    <ul>
                        <?php foreach($trust_indicators as $indicator): ?>
                        <li><i class="fas fa-check"></i> <?php echo $indicator; ?></li>
                        <?php endforeach; ?>
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

    <!-- JAVASCRIPT -->
    <script src="js/main.js"></script>
</body>
</html>
