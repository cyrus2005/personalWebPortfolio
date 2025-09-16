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
    <title>Blade & Fade Barbers - #1 Men's Grooming in Your City | Book Online Today</title>
    <meta name="description" content="⭐ 4.9/5 Rated Barber Shop - Professional haircuts, fades, beard trims & hot shaves. Walk-ins welcome! Book online or call (555) 123-4567. Open Mon-Sat.">
    <meta name="keywords" content="barber shop, men's haircut, fade, beard trim, hot shave, grooming, your city, walk-ins welcome, book online">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Blade & Fade Barbers - #1 Men's Grooming in Your City">
    <meta property="og:description" content="⭐ 4.9/5 Rated - Professional haircuts, fades, beard trims & hot shaves. Book online today!">
    <meta property="og:type" content="business.business">
    <meta property="og:url" content="https://cyruswilburn.dev/barber-shop/">
    <meta property="og:image" content="https://cyruswilburn.dev/barber-shop/media/completeLook.jpg">
    <meta property="og:site_name" content="Blade & Fade Barbers">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="../assets/images/favicon.svg">
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Local Fonts - No External Dependencies -->
    <link rel="stylesheet" href="assets/fonts/fonts.css">
    
    <!-- Font Awesome with CSP compliance -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    
    <!-- Structured Data for Local Business -->
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
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "40.7128",
            "longitude": "-74.0060"
        },
        "openingHours": "Mo-Fr 09:00-18:00,Sa 09:00-16:00",
        "priceRange": "$$",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "127"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Barber Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Haircut & Style",
                        "description": "Professional haircut and styling - $25"
                    },
                    "price": "25",
                    "priceCurrency": "USD"
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Beard Trim",
                        "description": "Expert beard trimming and shaping - $15"
                    },
                    "price": "15",
                    "priceCurrency": "USD"
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Hot Shave",
                        "description": "Traditional hot towel shave - $30"
                    },
                    "price": "30",
                    "priceCurrency": "USD"
                }
            ]
        }
    }
    </script>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="top-bar-left">
                    <span class="phone">
                        <i class="fas fa-phone"></i>
                        <a href="tel:5551234567">(555) 123-4567</a>
                    </span>
                    <span class="hours">
                        <i class="fas fa-clock"></i>
                        Mon-Fri: 9AM-6PM | Sat: 9AM-4PM
                    </span>
                </div>
                <div class="top-bar-right">
                    <span class="rating">
                        <i class="fas fa-star"></i>
                        <strong>4.9/5</strong> (127 reviews)
                    </span>
                    <span class="walk-ins">
                        <i class="fas fa-walking"></i>
                        Walk-ins Welcome!
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <img src="media/ClipperLogo.png" alt="Blade & Fade Barbers" class="clipper-logo">
                <div class="logo-text">
                    <span class="logo-main">Blade & Fade</span>
                    <span class="logo-sub">Barbers</span>
                </div>
            </div>
            <ul class="nav-menu" id="navMenu">
                <li class="nav-item">
                    <a href="#home" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#services" class="nav-link">Services & Prices</a>
                </li>
                <li class="nav-item">
                    <a href="#gallery" class="nav-link">Our Work</a>
                </li>
                <li class="nav-item">
                    <a href="#reviews" class="nav-link">Reviews</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <button class="nav-link book-btn" onclick="openBookingModal()">
                        <i class="fas fa-calendar-alt"></i>
                        Book Online
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
                <div class="hero-badge">
                    <i class="fas fa-star"></i>
                    <span>#1 Rated Barber Shop in Your City</span>
                </div>
                <h1 class="hero-title">
                    Professional Men's
                    <span class="title-highlight">Grooming</span>
                    <br>That Gets You Noticed
                </h1>
                <p class="hero-description">
                    Walk-ins welcome! Expert barbers delivering the perfect cut, fade, or beard trim. 
                    <strong>Book online for 10% off your first visit</strong> or call (555) 123-4567.
                </p>
                <div class="hero-cta">
                    <button class="btn btn-primary large" onclick="openBookingModal()">
                        <i class="fas fa-calendar-check"></i>
                        Book Online - 10% Off First Visit
                    </button>
                    <a href="tel:5551234567" class="btn btn-secondary large">
                        <i class="fas fa-phone"></i>
                        Call (555) 123-4567
                    </a>
                </div>
                <div class="hero-features">
                    <div class="feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Walk-ins Welcome</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Licensed Professionals</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Premium Products</span>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <img src="media/completeLook.jpg" alt="Professional Barber at Work" class="hero-img">
                <div class="floating-cards">
                    <div class="floating-card testimonial">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Best fade I've ever had! These guys know their stuff."</p>
                        <div class="author">- Mike R.</div>
                    </div>
                    <div class="floating-card price">
                        <div class="price-label">Starting at</div>
                        <div class="price-amount">$25</div>
                        <div class="price-desc">Haircut & Style</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Our Services</span>
                <h2 class="section-title">Professional Grooming Services</h2>
                <p class="section-description">
                    Expert barbers delivering the perfect look for every gentleman. Walk-ins welcome!
                </p>
            </div>
            <div class="services-grid">
                <div class="service-card featured">
                    <div class="service-icon">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3>Haircut & Style</h3>
                    <p>Professional haircut tailored to your face shape and style preferences</p>
                    <div class="service-price">$25</div>
                    <div class="service-time"><i class="fas fa-clock"></i> 30-45 min</div>
                    <button class="btn btn-outline" onclick="openBookingModal()">Book Now</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Beard Trim</h3>
                    <p>Expert beard trimming and shaping to maintain your perfect look</p>
                    <div class="service-price">$15</div>
                    <div class="service-time"><i class="fas fa-clock"></i> 20-30 min</div>
                    <button class="btn btn-outline" onclick="openBookingModal()">Book Now</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Hot Shave</h3>
                    <p>Traditional hot towel shave with premium products</p>
                    <div class="service-price">$30</div>
                    <div class="service-time"><i class="fas fa-clock"></i> 45-60 min</div>
                    <button class="btn btn-outline" onclick="openBookingModal()">Book Now</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-magic"></i>
                    </div>
                    <h3>Fade & Design</h3>
                    <p>Modern fade cuts and creative designs for a contemporary look</p>
                    <div class="service-price">$35</div>
                    <div class="service-time"><i class="fas fa-clock"></i> 45-60 min</div>
                    <button class="btn btn-outline" onclick="openBookingModal()">Book Now</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3>Complete Grooming</h3>
                    <p>Haircut + Beard Trim + Styling for the complete gentleman's experience</p>
                    <div class="service-price">$45</div>
                    <div class="service-time"><i class="fas fa-clock"></i> 60-75 min</div>
                    <button class="btn btn-outline" onclick="openBookingModal()">Book Now</button>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3>Premium Package</h3>
                    <p>Complete grooming + hot shave + premium products + styling</p>
                    <div class="service-price">$60</div>
                    <div class="service-time"><i class="fas fa-clock"></i> 90-120 min</div>
                    <button class="btn btn-outline" onclick="openBookingModal()">Book Now</button>
                </div>
            </div>
            <div class="services-cta">
                <h3>Ready for Your Perfect Cut?</h3>
                <p>Walk-ins welcome or book online for guaranteed appointment time</p>
                <div class="cta-buttons">
                    <button class="btn btn-primary large" onclick="openBookingModal()">
                        <i class="fas fa-calendar-check"></i>
                        Book Online Now
                    </button>
                    <a href="tel:5551234567" class="btn btn-secondary large">
                        <i class="fas fa-phone"></i>
                        Call (555) 123-4567
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Our Work</span>
                <h2 class="section-title">See Our Perfect Cuts</h2>
                <p class="section-description">
                    Real results from our expert barbers. Every cut is crafted with precision and care.
                </p>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="media/classicCut.jfif" alt="Classic Haircut" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4>Classic Cut</h4>
                        <p>Timeless professional style</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/fadeCut.jpg" alt="Modern Fade" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4>Modern Fade</h4>
                        <p>Sharp contemporary look</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/beardtrim.jfif" alt="Beard Trim" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4>Beard Trim</h4>
                        <p>Perfect shaping & styling</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/hotShave.jfif" alt="Hot Shave" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4>Hot Shave</h4>
                        <p>Traditional luxury service</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/completeLook.jpg" alt="Complete Look" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4>Complete Look</h4>
                        <p>Full grooming experience</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/classicCut.jfif" alt="Professional Style" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4>Professional Style</h4>
                        <p>Business-ready appearance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="reviews">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Customer Reviews</span>
                <h2 class="section-title">What Our Clients Say</h2>
                <p class="section-description">
                    Over 127 five-star reviews from satisfied customers
                </p>
            </div>
            <div class="reviews-grid">
                <div class="review-card">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Best barber shop in town! The fade I got was perfect and the service was outstanding. Will definitely be back!"</p>
                    <div class="reviewer">
                        <strong>Mike Rodriguez</strong>
                        <span>Google Review</span>
                    </div>
                </div>
                <div class="review-card">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Professional, clean, and friendly staff. My beard has never looked better. Highly recommend!"</p>
                    <div class="reviewer">
                        <strong>James Wilson</strong>
                        <span>Facebook Review</span>
                    </div>
                </div>
                <div class="review-card">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Walked in without an appointment and was taken care of immediately. Great cut and great price!"</p>
                    <div class="reviewer">
                        <strong>David Chen</strong>
                        <span>Yelp Review</span>
                    </div>
                </div>
            </div>
            <div class="reviews-cta">
                <h3>Ready to Join Our Happy Customers?</h3>
                <button class="btn btn-primary large" onclick="openBookingModal()">
                    <i class="fas fa-calendar-check"></i>
                    Book Your Appointment
                </button>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Visit Us</span>
                <h2 class="section-title">Come See Us Today</h2>
                <p class="section-description">
                    Walk-ins welcome! Located in the heart of downtown with easy parking.
                </p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Location</h3>
                            <p>123 Main Street<br>Your City, State 12345</p>
                            <a href="https://maps.google.com" target="_blank" class="btn btn-outline small">Get Directions</a>
                        </div>
                    </div>
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Call Us</h3>
                            <p><a href="tel:5551234567">(555) 123-4567</a></p>
                            <span class="availability">Available during business hours</span>
                        </div>
                    </div>
                    <div class="contact-card">
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
                        <div class="footer-logo-text">
                            <span class="logo-main">Blade & Fade</span>
                            <span class="logo-sub">Barbers</span>
                        </div>
                    </div>
                    <p>Professional men's grooming services with expert barbers and premium products.</p>
                    <div class="footer-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span>4.9/5 (127 reviews)</span>
                    </div>
                </div>
                <div class="footer-links">
                    <div class="footer-column">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="#services">Haircuts</a></li>
                            <li><a href="#services">Beard Trim</a></li>
                            <li><a href="#services">Hot Shave</a></li>
                            <li><a href="#services">Fade & Design</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#gallery">Our Work</a></li>
                            <li><a href="#reviews">Reviews</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="#" onclick="openBookingModal()">Book Online</a></li>
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
                <div class="booking-offer">
                    <i class="fas fa-gift"></i>
                    <span>Get 10% off your first visit when you book online!</span>
                </div>
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
                    <button type="submit" class="btn btn-primary large">
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