<?php
require_once 'includes/config.php';
$page_title = get_page_title('about');
$page_description = get_meta_description('about');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="about collision repair, collision shop history, certified technicians, collision repair experience">
    
    <link rel="icon" type="image/png" href="media/logo.png">
    <link rel="canonical" href="<?php echo SITE_URL; ?>/about.php">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- URGENCY BANNER -->
    <div class="urgency-banner">
        <div class="urgency-content">
            <div class="urgency-icon">
                <i class="fas fa-award"></i>
            </div>
            <span class="urgency-text">25+ YEARS EXPERIENCE • CERTIFIED TECHNICIANS • LIFETIME WARRANTY</span>
            <div class="scarcity-indicator">Trusted by 5,000+ customers!</div>
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
                    <li><a href="about.php" class="active">About</a></li>
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
                    <i class="fas fa-award"></i>
                    <span>25+ Years Experience</span>
                </div>
                <h1>About <span class="highlight">Elite Collision Repair</span></h1>
                <p class="hero-subtitle">Your trusted partner for <strong>premium collision repair services</strong> with <strong>lifetime warranty</strong> and <strong>insurance direct billing</strong>.</p>
                
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">25+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">5,000+</span>
                        <span class="stat-label">Cars Repaired</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">98%</span>
                        <span class="stat-label">Customer Satisfaction</span>
                    </div>
                </div>
                
                <div class="hero-buttons">
                    <a href="#our-story" class="cta-button primary large">
                        <i class="fas fa-book-open"></i>
                        <span>Our Story</span>
                        <small>Learn about our journey</small>
                    </a>
                    <a href="tel:<?php echo SITE_PHONE_CLEAN; ?>" class="cta-button accent large">
                        <i class="fas fa-phone"></i>
                        <span>Call <?php echo SITE_PHONE; ?></span>
                        <small>Speak with our experts</small>
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-image-container">
                    <img src="media/shopfront.png" alt="Elite Collision Repair Shop Front" class="hero-main-image">
                    <div class="floating-card">
                        <div class="card-content">
                            <div class="card-header">
                                <i class="fas fa-certificate"></i>
                                <span>Certified Shop</span>
                            </div>
                            <p>"ASE Certified technicians with 25+ years of combined experience in collision repair."</p>
                            <div class="card-rating">
                                <i class="fas fa-shield-alt"></i>
                                <span>Lifetime Warranty</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR STORY SECTION -->
    <section id="our-story" class="section">
        <div class="container">
            <div class="section-header">
                <h2>Our Story</h2>
                <p>From humble beginnings to becoming Kentucky's most trusted collision repair center</p>
            </div>
            
            <div class="story-content" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 4rem;">
                <div class="story-text">
                    <h3 style="color: var(--steel-blue); margin-bottom: 1.5rem;">Founded on Excellence</h3>
                    <p style="color: var(--charcoal); font-size: 1.1rem; line-height: 1.8; margin-bottom: 1.5rem;">
                        Elite Collision Repair was founded in 1999 with a simple mission: to provide the highest quality collision repair services while treating every customer with respect and integrity. What started as a small family-owned shop has grown into Kentucky's most trusted collision repair center.
                    </p>
                    <p style="color: var(--charcoal); font-size: 1.1rem; line-height: 1.8; margin-bottom: 2rem;">
                        Our founder, John Smith, began his career as an apprentice technician and worked his way up through the industry. After 15 years of experience at various shops, he decided to open Elite Collision Repair with a vision to create a shop that prioritized customer satisfaction above all else.
                    </p>
                    <div class="story-highlights" style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                        <div class="highlight-item">
                            <i class="fas fa-trophy" style="color: var(--safety-orange); font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                            <h4 style="color: var(--steel-blue); margin-bottom: 0.5rem;">Award Winning</h4>
                            <p style="color: var(--medium-gray); font-size: 0.9rem;">Multiple industry awards for excellence</p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-users" style="color: var(--safety-orange); font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                            <h4 style="color: var(--steel-blue); margin-bottom: 0.5rem;">Family Owned</h4>
                            <p style="color: var(--medium-gray); font-size: 0.9rem;">Three generations of expertise</p>
                        </div>
                    </div>
                </div>
                <div class="story-image">
                    <img src="media/shopfront.png" alt="Elite Collision Repair Shop" style="width: 100%; border-radius: 1rem; box-shadow: var(--shadow-lg);">
                </div>
            </div>
        </div>
    </section>

    <!-- OUR TEAM SECTION -->
    <section class="why-choose">
        <div class="container">
            <div class="section-header">
                <h2>Meet Our Expert Team</h2>
                <p>Certified technicians with decades of combined experience in collision repair</p>
            </div>
            
            <div class="team-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
                <div class="team-member" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center;">
                    <div class="member-photo" style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden; margin: 0 auto 1.5rem; border: 4px solid var(--safety-orange);">
                        <img src="media/team-technician-1.jpg" alt="John Smith" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h3 style="color: var(--steel-blue); margin-bottom: 0.5rem;">John Smith</h3>
                    <p style="color: var(--safety-orange); font-weight: 600; margin-bottom: 1rem;">Owner & Master Technician</p>
                    <p style="color: var(--charcoal); font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">25+ years experience in collision repair. ASE certified with expertise in frame straightening and paint matching.</p>
                    <div class="member-certifications" style="display: flex; justify-content: center; gap: 0.5rem; flex-wrap: wrap;">
                        <span style="background: var(--steel-blue); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">ASE Certified</span>
                        <span style="background: var(--safety-orange); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">I-CAR Certified</span>
                    </div>
                </div>

                <div class="team-member" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center;">
                    <div class="member-photo" style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden; margin: 0 auto 1.5rem; border: 4px solid var(--safety-orange);">
                        <img src="https://via.placeholder.com/150x150/2C3E50/FFFFFF?text=MS" alt="Mike Johnson" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h3 style="color: var(--steel-blue); margin-bottom: 0.5rem;">Mike Johnson</h3>
                    <p style="color: var(--safety-orange); font-weight: 600; margin-bottom: 1rem;">Lead Paint Specialist</p>
                    <p style="color: var(--charcoal); font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">18 years specializing in paint matching and refinishing. Expert in color matching and custom paint work.</p>
                    <div class="member-certifications" style="display: flex; justify-content: center; gap: 0.5rem; flex-wrap: wrap;">
                        <span style="background: var(--steel-blue); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">Paint Certified</span>
                        <span style="background: var(--safety-orange); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">Color Expert</span>
                    </div>
                </div>

                <div class="team-member" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center;">
                    <div class="member-photo" style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden; margin: 0 auto 1.5rem; border: 4px solid var(--safety-orange);">
                        <img src="https://via.placeholder.com/150x150/2C3E50/FFFFFF?text=SW" alt="Sarah Williams" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h3 style="color: var(--steel-blue); margin-bottom: 0.5rem;">Sarah Williams</h3>
                    <p style="color: var(--safety-orange); font-weight: 600; margin-bottom: 1rem;">Customer Service Manager</p>
                    <p style="color: var(--charcoal); font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">12 years managing customer relationships and insurance claims. Ensures every customer has a smooth experience.</p>
                    <div class="member-certifications" style="display: flex; justify-content: center; gap: 0.5rem; flex-wrap: wrap;">
                        <span style="background: var(--steel-blue); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">Insurance Expert</span>
                        <span style="background: var(--safety-orange); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">Customer Care</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR VALUES SECTION -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2>Our Core Values</h2>
                <p>The principles that guide everything we do at Elite Collision Repair</p>
            </div>
            
            <div class="values-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
                <div class="value-card" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center; border-top: 4px solid var(--steel-blue);">
                    <div class="value-icon" style="width: 80px; height: 80px; background: var(--steel-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-gem" style="color: var(--white); font-size: 2rem;"></i>
                    </div>
                    <h3 style="color: var(--steel-blue); margin-bottom: 1rem;">Quality First</h3>
                    <p style="color: var(--charcoal); line-height: 1.6;">We never compromise on quality. Every repair meets or exceeds manufacturer standards and our own rigorous quality checks.</p>
                </div>

                <div class="value-card" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center; border-top: 4px solid var(--safety-orange);">
                    <div class="value-icon" style="width: 80px; height: 80px; background: var(--safety-orange); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-handshake" style="color: var(--white); font-size: 2rem;"></i>
                    </div>
                    <h3 style="color: var(--steel-blue); margin-bottom: 1rem;">Integrity</h3>
                    <p style="color: var(--charcoal); line-height: 1.6;">We provide honest assessments, fair pricing, and transparent communication throughout the entire repair process.</p>
                </div>

                <div class="value-card" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center; border-top: 4px solid var(--electric-blue);">
                    <div class="value-icon" style="width: 80px; height: 80px; background: var(--electric-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-heart" style="color: var(--white); font-size: 2rem;"></i>
                    </div>
                    <h3 style="color: var(--steel-blue); margin-bottom: 1rem;">Customer Care</h3>
                    <p style="color: var(--charcoal); line-height: 1.6;">Your satisfaction is our priority. We go above and beyond to ensure you have a positive experience from start to finish.</p>
                </div>

                <div class="value-card" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center; border-top: 4px solid var(--success-green);">
                    <div class="value-icon" style="width: 80px; height: 80px; background: var(--success-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-graduation-cap" style="color: var(--white); font-size: 2rem;"></i>
                    </div>
                    <h3 style="color: var(--steel-blue); margin-bottom: 1rem;">Continuous Learning</h3>
                    <p style="color: var(--charcoal); line-height: 1.6;">We stay current with the latest techniques, tools, and technologies to provide the best possible service.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CERTIFICATIONS SECTION -->
    <section class="why-choose">
        <div class="container">
            <div class="section-header">
                <h2>Certifications & Training</h2>
                <p>Our commitment to excellence through continuous education and certification</p>
            </div>
            
            <div class="certifications-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
                <div class="cert-item" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center;">
                    <div class="cert-icon" style="width: 60px; height: 60px; background: var(--steel-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-certificate" style="color: var(--white); font-size: 1.5rem;"></i>
                    </div>
                    <h4 style="color: var(--steel-blue); margin-bottom: 0.5rem;">ASE Certified</h4>
                    <p style="color: var(--medium-gray); font-size: 0.9rem;">Automotive Service Excellence certification</p>
                </div>

                <div class="cert-item" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center;">
                    <div class="cert-icon" style="width: 60px; height: 60px; background: var(--safety-orange); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-tools" style="color: var(--white); font-size: 1.5rem;"></i>
                    </div>
                    <h4 style="color: var(--steel-blue); margin-bottom: 0.5rem;">I-CAR Certified</h4>
                    <p style="color: var(--medium-gray); font-size: 0.9rem;">Inter-Industry Conference on Auto Collision Repair</p>
                </div>

                <div class="cert-item" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center;">
                    <div class="cert-icon" style="width: 60px; height: 60px; background: var(--electric-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-paint-brush" style="color: var(--white); font-size: 1.5rem;"></i>
                    </div>
                    <h4 style="color: var(--steel-blue); margin-bottom: 0.5rem;">Paint Certified</h4>
                    <p style="color: var(--medium-gray); font-size: 0.9rem;">Advanced paint and refinishing techniques</p>
                </div>

                <div class="cert-item" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center;">
                    <div class="cert-icon" style="width: 60px; height: 60px; background: var(--success-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-shield-alt" style="color: var(--white); font-size: 1.5rem;"></i>
                    </div>
                    <h4 style="color: var(--steel-blue); margin-bottom: 0.5rem;">Safety Certified</h4>
                    <p style="color: var(--medium-gray); font-size: 0.9rem;">Workplace safety and environmental standards</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="quote-section">
        <div class="quote-content">
            <div class="quote-text">
                <h2>Experience the Elite Difference</h2>
                <p>Join thousands of satisfied customers who trust us with their collision repair needs. Get your free quote today and see why we're Kentucky's #1 collision repair shop.</p>
                
                <div class="quote-guarantee">
                    <i class="fas fa-shield-alt"></i>
                    <span>Lifetime Warranty • Insurance Direct Billing • Free Towing • 15-Minute Quotes</span>
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
