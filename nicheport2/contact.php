<?php
require_once 'includes/config.php';
$page_title = "Contact Elite Collision Repair | Free Estimates";
$page_description = "Contact Elite Collision Repair for collision repair services. Call (270) 801-9780 or visit us for a free estimate. Available 24/7.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="contact collision repair, auto body shop contact, collision repair phone, free estimate">
    
    <link rel="icon" type="image/png" href="media/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
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
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php" class="active">Contact</a></li>
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
                        <i class="fas fa-phone"></i>
                        <span>We're Here to Help</span>
                    </div>
                    <h1>Get in <span class="highlight">Touch</span> Today</h1>
                    <p class="hero-subtitle">Ready to get started? <strong>Call us now</strong>, <strong>visit our shop</strong>, or <strong>get a free estimate</strong> - we're here to help!</p>
                    
                    <div class="hero-buttons">
                        <a href="tel:2708019780" class="cta-button primary large">
                            <i class="fas fa-phone"></i>
                            <span>Call (270) 801-9780</span>
                            <small>Available 24/7</small>
                        </a>
                        <a href="#contact-content" class="cta-button secondary large">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Visit Our Shop</span>
                            <small>Get directions</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Content -->
    <section id="contact-content" class="services" style="padding: 5rem 0;">
        <div class="container">
            <div class="section-header">
                <h2>Contact Information</h2>
                <p>We're here to help you get back on the road. Choose your preferred way to reach us.</p>
            </div>
            
            <div class="contact-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; margin-top: 3rem;">
                <!-- Contact Information -->
                <div class="contact-info" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow);">
                    <h3>Get In Touch</h3>
                    
                    <div class="contact-item" style="display: flex; align-items: center; margin-bottom: 2rem;">
                        <div class="contact-icon" style="width: 50px; height: 50px; background: var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem; color: var(--white); font-size: 1.2rem;">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4 style="margin-bottom: 0.5rem; color: var(--primary-green);">Phone</h4>
                            <p style="margin: 0;"><a href="tel:2708019780" style="color: var(--accent-gold); text-decoration: none; font-weight: 600;">(270) 801-9780</a></p>
                            <p style="font-size: 0.9rem; color: var(--medium-gray); margin: 0;">Call us for immediate assistance</p>
                        </div>
                    </div>
                    
                    <div class="contact-item" style="display: flex; align-items: center; margin-bottom: 2rem;">
                        <div class="contact-icon" style="width: 50px; height: 50px; background: var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem; color: var(--white); font-size: 1.2rem;">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4 style="margin-bottom: 0.5rem; color: var(--primary-green);">Email</h4>
                            <p style="margin: 0;"><a href="mailto:info@elitecollision.com" style="color: var(--accent-gold); text-decoration: none; font-weight: 600;">info@elitecollision.com</a></p>
                            <p style="font-size: 0.9rem; color: var(--medium-gray); margin: 0;">Send us a message anytime</p>
                        </div>
                    </div>
                    
                    <div class="contact-item" style="display: flex; align-items: center; margin-bottom: 2rem;">
                        <div class="contact-icon" style="width: 50px; height: 50px; background: var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem; color: var(--white); font-size: 1.2rem;">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4 style="margin-bottom: 0.5rem; color: var(--primary-green);">Address</h4>
                            <p style="margin: 0;">123 Main Street<br>Your City, KY 12345</p>
                            <p style="font-size: 0.9rem; color: var(--medium-gray); margin: 0;">Visit our shop for estimates</p>
                        </div>
                    </div>
                    
                    <div class="contact-item" style="display: flex; align-items: center;">
                        <div class="contact-icon" style="width: 50px; height: 50px; background: var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem; color: var(--white); font-size: 1.2rem;">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h4 style="margin-bottom: 0.5rem; color: var(--primary-green);">Business Hours</h4>
                            <p style="margin: 0;">Monday - Friday: 8:00 AM - 6:00 PM<br>Saturday: 8:00 AM - 4:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="quote-form-container">
                    <div class="quote-form">
                        <div class="form-header">
                            <h3>Send Us a Message</h3>
                            <p>Fill out the form below and we'll get back to you as soon as possible.</p>
                        </div>
                        <form id="contactForm">
                            <div class="form-group">
                                <label for="contactName">Name *</label>
                                <input type="text" id="contactName" name="contactName" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="contactPhone">Phone *</label>
                                <input type="tel" id="contactPhone" name="contactPhone" required placeholder="(270) 555-0123">
                            </div>
                            
                            <div class="form-group">
                                <label for="contactEmail">Email *</label>
                                <input type="email" id="contactEmail" name="contactEmail" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="contactSubject">Subject</label>
                                <select id="contactSubject" name="contactSubject">
                                    <option value="general">General Inquiry</option>
                                    <option value="estimate">Request Estimate</option>
                                    <option value="service">Service Question</option>
                                    <option value="insurance">Insurance Question</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="contactMessage">Message *</label>
                                <textarea id="contactMessage" name="contactMessage" rows="5" required placeholder="Please describe your needs or questions..."></textarea>
                            </div>
                            
                            <button type="submit" class="cta-button primary large" style="width: 100%;">
                                <i class="fas fa-paper-plane"></i>
                                <span>Send Message</span>
                                <small>We'll respond within 15 minutes</small>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Contact -->
    <section class="final-cta" style="background: var(--accent-orange); color: var(--white); padding: 3rem 0;">
        <div class="container">
            <div class="cta-content" style="text-align: center;">
                <h2>Need Immediate Assistance?</h2>
                <p>For emergency towing or urgent repair needs, call us directly</p>
                <div class="cta-buttons">
                    <a href="tel:2708019780" class="cta-button primary large" style="background: var(--white); color: var(--accent-orange);">
                        <i class="fas fa-phone"></i>
                        <span>Call (270) 801-9780</span>
                        <small>Available 24/7</small>
                    </a>
                    <a href="#quote-section" class="cta-button secondary large" style="border-color: var(--white); color: var(--white);">
                        <i class="fas fa-calculator"></i>
                        <span>Get Free Estimate</span>
                        <small>15-minute response</small>
                    </a>
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
