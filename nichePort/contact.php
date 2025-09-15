<?php
require_once 'includes/config.php';
$page_title = "Contact Us | Generic Collision Shop";
$page_description = "Contact Generic Collision Shop for collision repair services. Call (270) 801-9780 or visit us at 123 Main Street, Your City, KY 12345.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="contact collision shop, collision repair contact, auto body shop phone, collision repair address">
    
    <link rel="icon" type="image/png" href="media/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        .contact-page {
            padding-top: 100px;
        }
        .contact-hero {
            background: linear-gradient(135deg, var(--primary-navy) 0%, var(--secondary-blue) 100%);
            color: var(--white);
            padding: 60px 0;
            text-align: center;
        }
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-top: 3rem;
        }
        .contact-info {
            background: var(--white);
            padding: 2rem;
            border-radius: 0.75rem;
            box-shadow: var(--shadow);
        }
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }
        .contact-icon {
            width: 50px;
            height: 50px;
            background: var(--accent-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1.5rem;
            color: var(--white);
            font-size: 1.2rem;
        }
        .contact-details h4 {
            margin-bottom: 0.5rem;
            color: var(--primary-navy);
        }
        .contact-details p {
            margin: 0;
            color: var(--neutral-gray);
        }
        .contact-details a {
            color: var(--accent-blue);
            text-decoration: none;
        }
        .contact-details a:hover {
            text-decoration: underline;
        }
        .map-container {
            background: var(--light-gray);
            padding: 2rem;
            border-radius: 0.75rem;
            text-align: center;
        }
        .map-placeholder {
            background: var(--neutral-gray);
            color: var(--white);
            padding: 3rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }
        .hours-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        .hours-table th,
        .hours-table td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }
        .hours-table th {
            background: var(--light-gray);
            font-weight: 600;
            color: var(--primary-navy);
        }
        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
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
                    <li><a href="contact.php" class="active">Contact</a></li>
                    <li><a href="careers.php">Careers</a></li>
                </ul>
            </nav>
            <a href="quote.php" class="cta-button">Get Free Quote</a>
            <button class="mobile-menu-toggle" id="mobileMenuToggle">☰</button>
        </div>
    </header>

    <!-- Contact Hero -->
    <section class="hero contact-hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge">
                    <span>📞 We're Here to Help</span>
                </div>
                <h1>Get in <span class="highlight">Touch</span> Today</h1>
                <p class="hero-subtitle">Ready to get started? <strong>Call us now</strong>, <strong>visit our shop</strong>, or <strong>get a free estimate</strong> - we're here to help!</p>
                
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">24hr</span>
                        <span class="stat-label">Response Time</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">7</span>
                        <span class="stat-label">Days a Week</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Free Estimates</span>
                    </div>
                </div>
                
                <div class="hero-buttons">
                    <a href="tel:2708019780" class="cta-button primary">
                        <span>Call Now</span>
                        <small>(270) 801-9780</small>
                    </a>
                    <a href="#contact-content" class="cta-button secondary">
                        <span>Visit Our Shop</span>
                        <small>Get directions</small>
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="contact-preview">
                    <div class="contact-method">
                        <div class="contact-icon">📞</div>
                        <h4>Call Us</h4>
                        <p>(270) 801-9780</p>
                    </div>
                    <div class="contact-method">
                        <div class="contact-icon">📍</div>
                        <h4>Visit Us</h4>
                        <p>123 Main Street</p>
                    </div>
                    <div class="contact-method">
                        <div class="contact-icon">✉️</div>
                        <h4>Email Us</h4>
                        <p>info@genericcollision.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-page">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Information -->
                <div class="contact-info">
                    <h3>Get In Touch</h3>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div class="contact-details">
                            <h4>Phone</h4>
                            <p><a href="tel:2708019780">(270) 801-9780</a></p>
                            <p style="font-size: 0.9rem; color: var(--neutral-gray);">Call us for immediate assistance</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">✉️</div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p><a href="mailto:info@genericcollision.com">info@genericcollision.com</a></p>
                            <p style="font-size: 0.9rem; color: var(--neutral-gray);">Send us a message anytime</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div class="contact-details">
                            <h4>Address</h4>
                            <p>123 Main Street<br>Your City, KY 12345</p>
                            <p style="font-size: 0.9rem; color: var(--neutral-gray);">Visit our shop for estimates</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">🕒</div>
                        <div class="contact-details">
                            <h4>Business Hours</h4>
                            <table class="hours-table">
                                <tr>
                                    <th>Day</th>
                                    <th>Hours</th>
                                </tr>
                                <tr>
                                    <td>Monday - Friday</td>
                                    <td>8:00 AM - 6:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Saturday</td>
                                    <td>8:00 AM - 4:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Sunday</td>
                                    <td>Closed</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="quote-form">
                    <h3>Send Us a Message</h3>
                    <p>Fill out the form below and we'll get back to you as soon as possible.</p>
                    
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
                        
                        <button type="submit" class="cta-button" style="width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="contact" style="padding: 60px 0;">
        <div class="container">
            <h2 class="text-center">Find Us</h2>
            <p class="text-center">Visit our shop for a free estimate or to discuss your repair needs</p>
            
            <div class="map-container">
                <div class="map-placeholder">
                    <h4>Interactive Map</h4>
                    <p>123 Main Street, Your City, KY 12345</p>
                    <p style="font-size: 0.9rem; margin-top: 1rem;">Map integration can be added here</p>
                </div>
                <p><strong>Directions:</strong> We're located on Main Street, just off Highway 123. Look for our blue and white building with the Generic Collision Shop sign.</p>
            </div>
        </div>
    </section>

    <!-- Emergency Contact -->
    <section class="quote-section" style="padding: 60px 0;">
        <div class="container">
            <div class="text-center">
                <h2>Need Immediate Assistance?</h2>
                <p>For emergency towing or urgent repair needs, call us directly</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 2rem;">
                    <a href="tel:2708019780" class="cta-button" style="font-size: 1.2rem; padding: 1rem 2rem;">Call (270) 801-9780</a>
                    <a href="quote.php" class="cta-button" style="background: var(--white); color: var(--primary-navy); border: 2px solid var(--white);">Get Free Estimate</a>
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
