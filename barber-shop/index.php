<?php
session_start();
require_once 'config/database.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade & Fade Barbers - Premium Men's Grooming & Styling</title>
    <meta name="description" content="Professional barber shop specializing in modern cuts, fades, beard grooming, and premium styling services. Book your appointment online today.">
    <meta name="keywords" content="barber shop, men's haircut, fade, beard trim, grooming, styling, appointment booking">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Blade & Fade Barbers - Premium Men's Grooming">
    <meta property="og:description" content="Professional barber shop specializing in modern cuts, fades, and grooming services">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://cyruswilburn.dev/barber-shop/">
    <meta property="og:image" content="https://cyruswilburn.dev/barber-shop/media/completeLook.jpg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="../assets/images/favicon.svg">
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Blade & Fade Barbers",
        "description": "Professional barber shop specializing in modern cuts, fades, and grooming services",
        "url": "https://cyruswilburn.dev/barber-shop/",
        "telephone": "+1-555-123-4567",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "123 Main Street",
            "addressLocality": "Your City",
            "addressRegion": "Your State",
            "postalCode": "12345",
            "addressCountry": "US"
        },
        "openingHours": "Mo-Fr 09:00-18:00,Sa 09:00-16:00",
        "priceRange": "$$",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Barber Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Haircut & Style",
                        "description": "Professional haircut and styling"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Beard Trim",
                        "description": "Professional beard trimming and shaping"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Hot Shave",
                        "description": "Traditional hot towel shave"
                    }
                }
            ]
        }
    }
    </script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <img src="media/ClipperLogo.png" alt="Blade & Fade Barbers" class="clipper-logo">
                <span class="logo-text">Blade & Fade</span>
            </div>
            <ul class="nav-menu" id="navMenu">
                <li class="nav-item">
                    <a href="#home" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#services" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#gallery" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <button class="nav-link book-btn" onclick="openBookingModal()">
                        <i class="fas fa-calendar-alt"></i>
                        Book Now
                    </button>
                </li>
            </ul>
            <div class="hamburger" id="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    Premium Men's
                    <span class="title-highlight">Grooming</span>
                </h1>
                <p class="hero-description">
                    Professional barbering services with modern techniques and traditional craftsmanship. 
                    From classic cuts to contemporary fades, we deliver the perfect look for every gentleman.
                </p>
                <div class="hero-buttons">
                    <button class="btn btn-primary" onclick="openBookingModal()">
                        <i class="fas fa-calendar-alt"></i>
                        Book Appointment
                    </button>
                    <a href="#services" class="btn btn-secondary">
                        <i class="fas fa-scissors"></i>
                        View Services
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Happy Clients</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">5+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Satisfaction</span>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <img src="media/completeLook.jpg" alt="Professional Barber at Work" class="hero-img">
                <div class="floating-badge">
                    <i class="fas fa-star"></i>
                    <span>5.0 Rating</span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">About Us</span>
                <h2 class="section-title">Crafting Perfect Looks Since 2019</h2>
                <p class="section-description">
                    We combine traditional barbering techniques with modern styling trends to deliver exceptional grooming experiences.
                </p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Our Story</h3>
                    <p>
                        Blade & Fade Barbers was founded with a simple mission: to provide men with the highest quality 
                        grooming services in a comfortable, professional environment. Our skilled barbers are passionate 
                        about their craft and stay up-to-date with the latest trends and techniques.
                    </p>
                    <div class="about-features">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Licensed Professionals</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Premium Products</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Sanitized Equipment</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Walk-ins Welcome</span>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="media/classicCut.jfif" alt="Professional Barber Services" class="about-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Our Services</span>
                <h2 class="section-title">Premium Grooming Services</h2>
                <p class="section-description">
                    From classic cuts to modern fades, we offer a full range of professional grooming services.
                </p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3>Haircut & Style</h3>
                    <p>Professional haircuts tailored to your face shape and personal style preferences.</p>
                    <div class="service-price">$25</div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Beard Trim</h3>
                    <p>Expert beard trimming and shaping to maintain your perfect facial hair style.</p>
                    <div class="service-price">$15</div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Hot Shave</h3>
                    <p>Traditional hot towel shave with premium products for the ultimate grooming experience.</p>
                    <div class="service-price">$30</div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-magic"></i>
                    </div>
                    <h3>Fade & Design</h3>
                    <p>Modern fade cuts and creative designs for a contemporary, stylish look.</p>
                    <div class="service-price">$35</div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3>Complete Grooming</h3>
                    <p>Full service including haircut, beard trim, and styling for the complete gentleman's experience.</p>
                    <div class="service-price">$45</div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3>Premium Package</h3>
                    <p>Our most comprehensive service including all treatments plus premium products and styling.</p>
                    <div class="service-price">$60</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Our Work</span>
                <h2 class="section-title">Perfect Cuts Gallery</h2>
                <p class="section-description">
                    See the quality of our work through our portfolio of satisfied clients.
                </p>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="media/classicCut.jfif" alt="Classic Haircut" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4>Classic Cut</h4>
                        <p>Timeless style</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/fadeCut.jpg" alt="Modern Fade" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4>Modern Fade</h4>
                        <p>Contemporary look</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/beardtrim.jfif" alt="Beard Trim" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4>Beard Trim</h4>
                        <p>Perfect shaping</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/hotShave.jfif" alt="Hot Shave" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4>Hot Shave</h4>
                        <p>Traditional service</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/completeLook.jpg" alt="Complete Look" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4>Complete Look</h4>
                        <p>Full grooming</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/classicCut.jfif" alt="Professional Style" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4>Professional Style</h4>
                        <p>Business ready</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Get In Touch</span>
                <h2 class="section-title">Visit Our Shop</h2>
                <p class="section-description">
                    Ready for your next cut? Book an appointment or walk in during our business hours.
                </p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Location</h3>
                            <p>123 Main Street<br>Your City, State 12345</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Phone</h3>
                            <p><a href="tel:5551234567">(555) 123-4567</a></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Hours</h3>
                            <p>Mon-Fri: 9:00 AM - 6:00 PM<br>Sat: 9:00 AM - 4:00 PM<br>Sun: Closed</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Send us a Message</h3>
                    <form id="contactForm" action="includes/contact_handler.php" method="POST">
                        <div class="form-group">
                            <input type="text" id="name" name="name" required>
                            <label for="name">Your Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" required>
                            <label for="email">Email Address</label>
                        </div>
                        <div class="form-group">
                            <input type="tel" id="phone" name="phone">
                            <label for="phone">Phone Number</label>
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="message" rows="5" required></textarea>
                            <label for="message">Message</label>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <img src="media/ClipperLogo.png" alt="Blade & Fade Barbers" class="footer-logo-img">
                        <span class="footer-logo-text">Blade & Fade</span>
                    </div>
                    <p>Premium men's grooming services with professional expertise and modern techniques.</p>
                </div>
                <div class="footer-links">
                    <div class="footer-column">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="#services">Haircuts</a></li>
                            <li><a href="#services">Beard Trim</a></li>
                            <li><a href="#services">Hot Shave</a></li>
                            <li><a href="#services">Styling</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="#" onclick="openBookingModal()">Book Now</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Contact Info</h4>
                        <ul>
                            <li><a href="tel:5551234567">(555) 123-4567</a></li>
                            <li>123 Main Street</li>
                            <li>Your City, State 12345</li>
                            <li>Mon-Fri: 9AM-6PM</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Blade & Fade Barbers. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Booking Modal -->
    <div id="bookingModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Book Your Appointment</h2>
                <span class="close" onclick="closeBookingModal()">&times;</span>
            </div>
            <div class="modal-body">
                <form id="bookingForm" action="includes/booking_handler.php" method="POST">
                    <div class="form-group">
                        <input type="text" id="booking_name" name="name" required>
                        <label for="booking_name">Full Name</label>
                    </div>
                    <div class="form-group">
                        <input type="email" id="booking_email" name="email" required>
                        <label for="booking_email">Email Address</label>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="booking_phone" name="phone" required>
                        <label for="booking_phone">Phone Number</label>
                    </div>
                    <div class="form-group">
                        <select id="booking_service" name="service" required>
                            <option value="">Select Service</option>
                            <option value="haircut">Haircut & Style - $25</option>
                            <option value="beard_trim">Beard Trim - $15</option>
                            <option value="hot_shave">Hot Shave - $30</option>
                            <option value="fade_design">Fade & Design - $35</option>
                            <option value="complete_grooming">Complete Grooming - $45</option>
                            <option value="premium_package">Premium Package - $60</option>
                        </select>
                        <label for="booking_service">Service</label>
                    </div>
                    <div class="form-group">
                        <input type="date" id="booking_date" name="date" required>
                        <label for="booking_date">Preferred Date</label>
                    </div>
                    <div class="form-group">
                        <select id="booking_time" name="time" required>
                            <option value="">Select Time</option>
                            <option value="09:00">9:00 AM</option>
                            <option value="09:30">9:30 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="10:30">10:30 AM</option>
                            <option value="11:00">11:00 AM</option>
                            <option value="11:30">11:30 AM</option>
                            <option value="12:00">12:00 PM</option>
                            <option value="12:30">12:30 PM</option>
                            <option value="13:00">1:00 PM</option>
                            <option value="13:30">1:30 PM</option>
                            <option value="14:00">2:00 PM</option>
                            <option value="14:30">2:30 PM</option>
                            <option value="15:00">3:00 PM</option>
                            <option value="15:30">3:30 PM</option>
                            <option value="16:00">4:00 PM</option>
                            <option value="16:30">4:30 PM</option>
                            <option value="17:00">5:00 PM</option>
                            <option value="17:30">5:30 PM</option>
                        </select>
                        <label for="booking_time">Preferred Time</label>
                    </div>
                    <div class="form-group">
                        <textarea id="booking_notes" name="notes" rows="3"></textarea>
                        <label for="booking_notes">Special Requests (Optional)</label>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-calendar-check"></i>
                        Confirm Booking
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="assets/js/script.js"></script>
</body>
</html>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>