<?php
require_once 'includes/config.php';
$page_title = get_page_title('contact');
$page_description = get_meta_description('contact');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="contact collision repair, auto body shop contact, free quote, collision repair phone">
    
    <link rel="icon" type="image/png" href="media/logo.png">
    <link rel="canonical" href="<?php echo SITE_URL; ?>/contact.php">
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
                <i class="fas fa-phone"></i>
            </div>
            <span class="urgency-text">CALL NOW: (270) 801-9780 • FREE QUOTES • 15-MINUTE RESPONSE</span>
            <div class="scarcity-indicator">Available 24/7 for emergencies!</div>
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
                    <li><a href="services.php">Services</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php" class="active">Contact</a></li>
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
                    <i class="fas fa-phone"></i>
                    <span>Available 24/7</span>
                </div>
                <h1>Contact <span class="highlight">Elite Collision Repair</span></h1>
                <p class="hero-subtitle">Get your <strong>free quote</strong> in 15 minutes or call us <strong>24/7 for emergencies</strong>. We're here to help when you need us most.</p>
                
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Emergency Service</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">15min</span>
                        <span class="stat-label">Quote Response</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Free Estimates</span>
                    </div>
                </div>
                
                <div class="hero-buttons">
                    <a href="tel:<?php echo SITE_PHONE_CLEAN; ?>" class="cta-button primary large">
                        <i class="fas fa-phone"></i>
                        <span>Call <?php echo SITE_PHONE; ?></span>
                        <small>Available 24/7</small>
                    </a>
                    <a href="#quote-section" class="cta-button accent large">
                        <i class="fas fa-calculator"></i>
                        <span>Get Free Quote</span>
                        <small>15-minute response</small>
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-image-container">
                    <img src="media/shopfront.png" alt="Elite Collision Repair Shop" class="hero-main-image">
                    <div class="floating-card">
                        <div class="card-content">
                            <div class="card-header">
                                <i class="fas fa-clock"></i>
                                <span>Open Now</span>
                            </div>
                            <p>"Mon-Fri: 8AM-6PM<br>Sat: 8AM-4PM<br>Emergency: 24/7"</p>
                            <div class="card-rating">
                                <i class="fas fa-phone"></i>
                                <span>Call Now</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT INFO SECTION -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2>Get In Touch</h2>
                <p>Multiple ways to contact us for your collision repair needs</p>
            </div>
            
            <div class="contact-methods" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
                <div class="contact-method" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center; border-top: 4px solid var(--safety-orange);">
                    <div style="font-size: 3rem; color: var(--safety-orange); margin-bottom: 1rem;">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3 style="color: var(--steel-blue); margin-bottom: 1rem;">Call Us</h3>
                    <p style="color: var(--charcoal); margin-bottom: 1.5rem;">Speak directly with our collision repair experts</p>
                    <a href="tel:<?php echo SITE_PHONE_CLEAN; ?>" style="font-size: 1.5rem; font-weight: 700; color: var(--safety-orange); text-decoration: none;"><?php echo SITE_PHONE; ?></a>
                    <p style="color: var(--medium-gray); font-size: 0.9rem; margin-top: 0.5rem;">Available 24/7 for emergencies</p>
                </div>

                <div class="contact-method" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center; border-top: 4px solid var(--electric-blue);">
                    <div style="font-size: 3rem; color: var(--electric-blue); margin-bottom: 1rem;">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 style="color: var(--steel-blue); margin-bottom: 1rem;">Email Us</h3>
                    <p style="color: var(--charcoal); margin-bottom: 1.5rem;">Send us your questions and photos</p>
                    <a href="mailto:<?php echo SITE_EMAIL; ?>" style="font-size: 1.2rem; color: var(--electric-blue); text-decoration: none;"><?php echo SITE_EMAIL; ?></a>
                    <p style="color: var(--medium-gray); font-size: 0.9rem; margin-top: 0.5rem;">We respond within 2 hours</p>
                </div>

                <div class="contact-method" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center; border-top: 4px solid var(--success-green);">
                    <div style="font-size: 3rem; color: var(--success-green); margin-bottom: 1rem;">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 style="color: var(--steel-blue); margin-bottom: 1rem;">Visit Us</h3>
                    <p style="color: var(--charcoal); margin-bottom: 1.5rem;">Come see our state-of-the-art facility</p>
                    <div style="font-size: 1.1rem; color: var(--charcoal);">
                        <?php echo BUSINESS_ADDRESS; ?><br>
                        <?php echo BUSINESS_CITY; ?>, <?php echo BUSINESS_STATE; ?> <?php echo BUSINESS_ZIP; ?>
                    </div>
                    <p style="color: var(--medium-gray); font-size: 0.9rem; margin-top: 0.5rem;"><?php echo BUSINESS_HOURS; ?></p>
                </div>
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
                            <label for="vehicleInfo">Vehicle Information *</label>
                            <input type="text" id="vehicleInfo" name="vehicleInfo" placeholder="e.g., 2020 Honda Civic" required>
                        </div>
                        <div class="form-group">
                            <label for="damageDescription">Damage Description *</label>
                            <textarea id="damageDescription" name="damageDescription" rows="3" placeholder="Briefly describe the damage..." required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="preferredContact">Preferred Contact Method</label>
                            <select id="preferredContact" name="preferredContact">
                                <option value="phone">Phone Call</option>
                                <option value="text">Text Message</option>
                                <option value="email">Email</option>
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
