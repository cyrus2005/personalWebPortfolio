<?php
require_once 'includes/config.php';
$page_title = "About Us | Generic Collision Shop";
$page_description = "Learn about Generic Collision Shop - professional collision repair services with experienced technicians and insurance assistance.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="about collision shop, collision repair team, auto body shop history, collision repair experience">
    
    <link rel="icon" type="image/png" href="media/logo.png">
    <link rel="stylesheet" href="css/style.css">
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
                    <li><a href="about.php" class="active">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="careers.php">Careers</a></li>
                </ul>
            </nav>
            <a href="quote.php" class="cta-button">Get Free Quote</a>
            <button class="mobile-menu-toggle" id="mobileMenuToggle">☰</button>
        </div>
    </header>

    <!-- About Hero -->
    <section class="hero about-hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge">
                    <span>🏆 Trusted Since 1998</span>
                </div>
                <h1>Your <span class="highlight">Trusted</span> Collision Experts</h1>
                <p class="hero-subtitle">Over <strong>25 years</strong> of experience, <strong>thousands of satisfied customers</strong>, and a <strong>commitment to excellence</strong> in every repair.</p>
                
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">25+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">5000+</span>
                        <span class="stat-label">Happy Customers</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Quality Guarantee</span>
                    </div>
                </div>
                
                <div class="hero-buttons">
                    <a href="#about-content" class="cta-button primary">
                        <span>Our Story</span>
                        <small>Learn about our journey</small>
                    </a>
                    <a href="tel:2708019780" class="cta-button secondary">
                        <span>Meet Our Team</span>
                        <small>(270) 801-9780</small>
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="team-preview">
                    <div class="team-member">
                        <div class="member-avatar">👨‍🔧</div>
                        <h4>Expert Technicians</h4>
                        <p>Certified professionals</p>
                    </div>
                    <div class="team-member">
                        <div class="member-avatar">👩‍💼</div>
                        <h4>Friendly Staff</h4>
                        <p>Customer-focused service</p>
                    </div>
                    <div class="team-member">
                        <div class="member-avatar">🏆</div>
                        <h4>Quality Focus</h4>
                        <p>Excellence in every repair</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Content -->
    <section class="services" style="padding: 60px 0;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
                <div>
                    <h2>Our Story</h2>
                    <p>For over 20 years, Generic Collision Shop has been serving the community with professional collision repair services. What started as a small family business has grown into one of the most trusted collision repair facilities in the area.</p>
                    <p>Our commitment to quality workmanship, fair pricing, and excellent customer service has earned us a reputation for reliability and trustworthiness. We believe that every customer deserves honest, professional service at a fair price.</p>
                </div>
                <div>
                    <img src="media/shopfront.png" alt="Generic Collision Shop Front" style="width: 100%; border-radius: 0.75rem; box-shadow: var(--shadow);">
                </div>
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
                <div>
                    <img src="media/servicetechinshop.jpg" alt="Our Team" style="width: 100%; border-radius: 0.75rem; box-shadow: var(--shadow);">
                </div>
                <div>
                    <h2>Our Team</h2>
                    <p>Our team consists of certified technicians with years of experience in collision repair. Each team member is trained in the latest repair techniques and uses state-of-the-art equipment to ensure your vehicle is restored to its pre-accident condition.</p>
                    <p>We invest in ongoing training and certification programs to stay current with the latest industry standards and repair techniques. This commitment to excellence ensures that your vehicle receives the best possible care.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="features" style="padding: 80px 0;">
        <div class="container">
            <h2 class="text-center">Our Values</h2>
            <p class="text-center">The principles that guide everything we do</p>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🎯</div>
                    <h3>Quality First</h3>
                    <p>We never compromise on quality. Every repair is done to the highest standards using premium materials and proven techniques.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🤝</div>
                    <h3>Honest Service</h3>
                    <p>We provide honest, transparent service with no hidden fees or unnecessary repairs. You can trust us to do what's right.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💰</div>
                    <h3>Fair Pricing</h3>
                    <p>We believe quality collision repair should be affordable. Our competitive pricing ensures you get great value for your money.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">⏰</div>
                    <h3>Timely Service</h3>
                    <p>We understand you need your vehicle back quickly. We work efficiently without sacrificing quality to get you back on the road.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🛡️</div>
                    <h3>Customer Satisfaction</h3>
                    <p>Your satisfaction is our priority. We stand behind our work with comprehensive warranties and excellent customer service.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🌱</div>
                    <h3>Community Focus</h3>
                    <p>We're proud to be part of this community and are committed to giving back through local partnerships and support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="quote-section" style="padding: 80px 0;">
        <div class="container">
            <h2 class="text-center">Certifications & Training</h2>
            <p class="text-center">Our commitment to professional excellence through ongoing education and certification</p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 3rem;">
                <div style="background: var(--white); padding: 2rem; border-radius: 0.75rem; text-align: center; color: var(--dark-gray);">
                    <h4>I-CAR Certified</h4>
                    <p>Our technicians are I-CAR certified, ensuring they stay current with the latest repair techniques and safety standards.</p>
                </div>
                <div style="background: var(--white); padding: 2rem; border-radius: 0.75rem; text-align: center; color: var(--dark-gray);">
                    <h4>ASE Certified</h4>
                    <p>ASE certification demonstrates our technicians' expertise in automotive repair and maintenance.</p>
                </div>
                <div style="background: var(--white); padding: 2rem; border-radius: 0.75rem; text-align: center; color: var(--dark-gray);">
                    <h4>Ongoing Training</h4>
                    <p>We invest in continuous training to stay current with new vehicle technologies and repair methods.</p>
                </div>
                <div style="background: var(--white); padding: 2rem; border-radius: 0.75rem; text-align: center; color: var(--dark-gray);">
                    <h4>Insurance Approved</h4>
                    <p>We're an approved repair facility for most major insurance companies in the area.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="contact" style="padding: 80px 0;">
        <div class="container">
            <div class="text-center">
                <h2>Experience the Difference</h2>
                <p>Let our experienced team restore your vehicle to its pre-accident condition</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 2rem;">
                    <a href="quote.php" class="cta-button">Get Free Estimate</a>
                    <a href="tel:2708019780" class="cta-button" style="background: var(--secondary-blue);">Call (270) 801-9780</a>
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
        });
    </script>
</body>
</html>
