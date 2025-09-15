<?php
require_once 'includes/config.php';
$page_title = "About Us | Elite Collision Repair";
$page_description = "Learn about Elite Collision Repair's 25+ years of experience, certified technicians, and commitment to quality collision repair services.";
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="about.php" class="active">About</a></li>
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
                        <a href="tel:2708019780" class="cta-button secondary large">
                            <i class="fas fa-phone"></i>
                            <span>Call (270) 801-9780</span>
                            <small>Speak with our experts</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section id="our-story" class="services" style="padding: 5rem 0;">
        <div class="container">
            <div class="section-header">
                <h2>Our Story</h2>
                <p>From humble beginnings to becoming the region's most trusted collision repair center</p>
            </div>
            
            <div class="story-content" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 4rem;">
                <div class="story-text">
                    <h3 style="color: var(--primary-green); margin-bottom: 1.5rem;">Founded on Excellence</h3>
                    <p style="color: var(--dark-gray); font-size: 1.1rem; line-height: 1.8; margin-bottom: 1.5rem;">
                        Elite Collision Repair was founded in 1999 with a simple mission: to provide the highest quality collision repair services while treating every customer with respect and integrity. What started as a small family-owned shop has grown into the region's most trusted collision repair center.
                    </p>
                    <p style="color: var(--dark-gray); font-size: 1.1rem; line-height: 1.8; margin-bottom: 2rem;">
                        Our founder, John Smith, began his career as an apprentice technician and worked his way up through the industry. After 15 years of experience at various shops, he decided to open Elite Collision Repair with a vision to create a shop that prioritized customer satisfaction above all else.
                    </p>
                    <div class="story-highlights" style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                        <div class="highlight-item">
                            <i class="fas fa-trophy" style="color: var(--accent-gold); font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                            <h4 style="color: var(--primary-green); margin-bottom: 0.5rem;">Award Winning</h4>
                            <p style="color: var(--medium-gray); font-size: 0.9rem;">Multiple industry awards for excellence</p>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-users" style="color: var(--accent-gold); font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                            <h4 style="color: var(--primary-green); margin-bottom: 0.5rem;">Family Owned</h4>
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

    <!-- Our Team Section -->
    <section class="services" style="background: var(--light-gray); padding: 5rem 0;">
        <div class="container">
            <div class="section-header">
                <h2>Meet Our Expert Team</h2>
                <p>Certified technicians with decades of combined experience</p>
            </div>
            
            <div class="team-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
                <div class="team-member" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center;">
                    <div class="member-photo" style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden; margin: 0 auto 1.5rem; border: 4px solid var(--accent-gold);">
                        <img src="media/team-technician-1.jpg" alt="John Smith" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h3 style="color: var(--primary-green); margin-bottom: 0.5rem;">John Smith</h3>
                    <p style="color: var(--accent-gold); font-weight: 600; margin-bottom: 1rem;">Owner & Master Technician</p>
                    <p style="color: var(--dark-gray); font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">25+ years experience in collision repair. ASE certified with expertise in frame straightening and paint matching.</p>
                    <div class="member-certifications" style="display: flex; justify-content: center; gap: 0.5rem; flex-wrap: wrap;">
                        <span style="background: var(--primary-green); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">ASE Certified</span>
                        <span style="background: var(--accent-gold); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">I-CAR Certified</span>
                    </div>
                </div>

                <div class="team-member" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center;">
                    <div class="member-photo" style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden; margin: 0 auto 1.5rem; border: 4px solid var(--accent-gold);">
                        <img src="https://via.placeholder.com/150x150/1B4D3E/FFFFFF?text=MS" alt="Mike Johnson" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h3 style="color: var(--primary-green); margin-bottom: 0.5rem;">Mike Johnson</h3>
                    <p style="color: var(--accent-gold); font-weight: 600; margin-bottom: 1rem;">Lead Paint Specialist</p>
                    <p style="color: var(--dark-gray); font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">18 years specializing in paint matching and refinishing. Expert in color matching and custom paint work.</p>
                    <div class="member-certifications" style="display: flex; justify-content: center; gap: 0.5rem; flex-wrap: wrap;">
                        <span style="background: var(--primary-green); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">Paint Certified</span>
                        <span style="background: var(--accent-gold); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">Color Expert</span>
                    </div>
                </div>

                <div class="team-member" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center;">
                    <div class="member-photo" style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden; margin: 0 auto 1.5rem; border: 4px solid var(--accent-gold);">
                        <img src="https://via.placeholder.com/150x150/1B4D3E/FFFFFF?text=SW" alt="Sarah Williams" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h3 style="color: var(--primary-green); margin-bottom: 0.5rem;">Sarah Williams</h3>
                    <p style="color: var(--accent-gold); font-weight: 600; margin-bottom: 1rem;">Customer Service Manager</p>
                    <p style="color: var(--dark-gray); font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">12 years managing customer relationships and insurance claims. Ensures every customer has a smooth experience.</p>
                    <div class="member-certifications" style="display: flex; justify-content: center; gap: 0.5rem; flex-wrap: wrap;">
                        <span style="background: var(--primary-green); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">Insurance Expert</span>
                        <span style="background: var(--accent-gold); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">Customer Care</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="services" style="padding: 5rem 0;">
        <div class="container">
            <div class="section-header">
                <h2>Our Core Values</h2>
                <p>The principles that guide everything we do</p>
            </div>
            
            <div class="values-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
                <div class="value-card" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center; border-top: 4px solid var(--primary-green);">
                    <div class="value-icon" style="width: 80px; height: 80px; background: var(--primary-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-gem" style="color: var(--white); font-size: 2rem;"></i>
                    </div>
                    <h3 style="color: var(--primary-green); margin-bottom: 1rem;">Quality First</h3>
                    <p style="color: var(--dark-gray); line-height: 1.6;">We never compromise on quality. Every repair meets or exceeds manufacturer standards and our own rigorous quality checks.</p>
                </div>

                <div class="value-card" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center; border-top: 4px solid var(--accent-gold);">
                    <div class="value-icon" style="width: 80px; height: 80px; background: var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-handshake" style="color: var(--white); font-size: 2rem;"></i>
                    </div>
                    <h3 style="color: var(--primary-green); margin-bottom: 1rem;">Integrity</h3>
                    <p style="color: var(--dark-gray); line-height: 1.6;">We provide honest assessments, fair pricing, and transparent communication throughout the entire repair process.</p>
                </div>

                <div class="value-card" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center; border-top: 4px solid var(--accent-orange);">
                    <div class="value-icon" style="width: 80px; height: 80px; background: var(--accent-orange); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-heart" style="color: var(--white); font-size: 2rem;"></i>
                    </div>
                    <h3 style="color: var(--primary-green); margin-bottom: 1rem;">Customer Care</h3>
                    <p style="color: var(--dark-gray); line-height: 1.6;">Your satisfaction is our priority. We go above and beyond to ensure you have a positive experience from start to finish.</p>
                </div>

                <div class="value-card" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center; border-top: 4px solid var(--secondary-green);">
                    <div class="value-icon" style="width: 80px; height: 80px; background: var(--secondary-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-graduation-cap" style="color: var(--white); font-size: 2rem;"></i>
                    </div>
                    <h3 style="color: var(--primary-green); margin-bottom: 1rem;">Continuous Learning</h3>
                    <p style="color: var(--dark-gray); line-height: 1.6;">We stay current with the latest techniques, tools, and technologies to provide the best possible service.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="services" style="background: var(--light-gray); padding: 5rem 0;">
        <div class="container">
            <div class="section-header">
                <h2>Certifications & Training</h2>
                <p>Our commitment to excellence through continuous education and certification</p>
            </div>
            
            <div class="certifications-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
                <div class="cert-item" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center;">
                    <div class="cert-icon" style="width: 60px; height: 60px; background: var(--primary-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-certificate" style="color: var(--white); font-size: 1.5rem;"></i>
                    </div>
                    <h4 style="color: var(--primary-green); margin-bottom: 0.5rem;">ASE Certified</h4>
                    <p style="color: var(--medium-gray); font-size: 0.9rem;">Automotive Service Excellence certification</p>
                </div>

                <div class="cert-item" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center;">
                    <div class="cert-icon" style="width: 60px; height: 60px; background: var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-tools" style="color: var(--white); font-size: 1.5rem;"></i>
                    </div>
                    <h4 style="color: var(--primary-green); margin-bottom: 0.5rem;">I-CAR Certified</h4>
                    <p style="color: var(--medium-gray); font-size: 0.9rem;">Inter-Industry Conference on Auto Collision Repair</p>
                </div>

                <div class="cert-item" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center;">
                    <div class="cert-icon" style="width: 60px; height: 60px; background: var(--accent-orange); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-paint-brush" style="color: var(--white); font-size: 1.5rem;"></i>
                    </div>
                    <h4 style="color: var(--primary-green); margin-bottom: 0.5rem;">Paint Certified</h4>
                    <p style="color: var(--medium-gray); font-size: 0.9rem;">Advanced paint and refinishing techniques</p>
                </div>

                <div class="cert-item" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); text-align: center;">
                    <div class="cert-icon" style="width: 60px; height: 60px; background: var(--secondary-green); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem;">
                        <i class="fas fa-shield-alt" style="color: var(--white); font-size: 1.5rem;"></i>
                    </div>
                    <h4 style="color: var(--primary-green); margin-bottom: 0.5rem;">Safety Certified</h4>
                    <p style="color: var(--medium-gray); font-size: 0.9rem;">Workplace safety and environmental standards</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="final-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Experience the Elite Difference</h2>
                <p>Join thousands of satisfied customers who trust us with their collision repair needs</p>
                <div class="cta-buttons">
                    <a href="#quote-section" class="cta-button primary large">
                        <i class="fas fa-calculator"></i>
                        <span>Get Free Estimate</span>
                        <small>15-minute response guaranteed</small>
                    </a>
                    <a href="tel:2708019780" class="cta-button secondary large">
                        <i class="fas fa-phone"></i>
                        <span>Call (270) 801-9780</span>
                        <small>Speak with our experts</small>
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
</body>
</html>
