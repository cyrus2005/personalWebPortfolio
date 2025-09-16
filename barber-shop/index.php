<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade & Fade Barbers - Look Sharp. Feel Confident. Book Your Cut Today.</title>
    <meta name="description" content="Professional barber shop specializing in haircuts, fades, beard trims, and hot shaves. Book online for 20% off your first cut! Walk-ins welcome.">
    <meta name="keywords" content="barber shop, men's haircut, fade, beard trim, hot shave, grooming, book online, walk-ins welcome">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="../assets/images/favicon.svg">
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="media/ClipperLogo.png" alt="Blade & Fade Barbers" class="logo-img">
                    <div class="logo-text">
                        <h1>Blade & Fade</h1>
                        <span>Barbers</span>
                    </div>
                </div>
                <nav class="nav">
                    <ul class="nav-menu">
                        <li><a href="#home" class="nav-link active">Home</a></li>
                        <li><a href="#services" class="nav-link">Services</a></li>
                        <li><a href="#barbers" class="nav-link">Barbers</a></li>
                        <li><a href="#gallery" class="nav-link">Gallery</a></li>
                        <li><a href="#contact" class="nav-link">Contact</a></li>
                        <li><a href="#book" class="nav-link book-btn">Book Now</a></li>
                    </ul>
                </nav>
                <div class="mobile-menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-background">
            <img src="media/completeLook.jpg" alt="Professional Barber at Work" class="hero-bg-img">
            <div class="hero-overlay"></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="hero-badge">
                        <i class="fas fa-star"></i>
                        <span>20% Off First Cut - Book Online!</span>
                    </div>
                    <h1 class="hero-title">Look Sharp. Feel Confident. Book Your Cut Today.</h1>
                    <p class="hero-description">Professional barbers delivering precision cuts, modern fades, and expert grooming. Walk-ins welcome or book online for guaranteed appointment time.</p>
                    <div class="hero-buttons">
                        <a href="#book" class="btn btn-primary">
                            <i class="fas fa-calendar-check"></i>
                            Book Appointment
                        </a>
                        <a href="tel:5551234567" class="btn btn-secondary">
                            <i class="fas fa-phone"></i>
                            Call (555) 123-4567
                        </a>
                    </div>
                    <div class="hero-features">
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Walk-ins Welcome</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Licensed Professionals</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Premium Products</span>
                        </div>
                    </div>
                </div>
                <div class="hero-stats">
                    <div class="stat">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Happy Clients</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">4.9</div>
                        <div class="stat-label">Google Rating</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">5+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Services & Pricing</h2>
                <p class="section-description">Professional grooming services tailored to your style and needs</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3>Haircut & Style</h3>
                    <p>Professional haircuts tailored to your face shape and personal style preferences. Includes consultation, precision cut, and finishing style.</p>
                    <div class="service-price">$35</div>
                    <a href="#book" class="btn btn-outline">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Beard Trim</h3>
                    <p>Expert beard trimming and shaping to maintain your perfect facial hair style. Finished with nourishing beard oil for a clean, sharp look.</p>
                    <div class="service-price">$20</div>
                    <a href="#book" class="btn btn-outline">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h3>Hot Shave</h3>
                    <p>Traditional hot towel shave with premium products for the ultimate grooming experience. Relax, refresh, and leave with smooth confidence.</p>
                    <div class="service-price">$40</div>
                    <a href="#book" class="btn btn-outline">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-magic"></i>
                    </div>
                    <h3>Fade & Design</h3>
                    <p>Modern fades and custom hair designs for a bold, stylish look. Perfect for clients who want creativity and precision combined.</p>
                    <div class="service-price">$45</div>
                    <a href="#book" class="btn btn-outline">Book Now</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3>Complete Grooming</h3>
                    <p>Full service including haircut, beard trim, and professional styling. Designed for the complete gentleman's experience.</p>
                    <div class="service-price">$65</div>
                    <a href="#book" class="btn btn-outline">Book Now</a>
                </div>
                <div class="service-card featured">
                    <div class="service-badge">Most Popular</div>
                    <div class="service-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3>Premium Package</h3>
                    <p>Our most comprehensive service, including haircut, beard trim, hot towel shave, styling, and exclusive premium grooming products.</p>
                    <div class="service-price">$85</div>
                    <a href="#book" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Barbers Section -->
    <section id="barbers" class="barbers">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Meet Our Barbers</h2>
                <p class="section-description">Skilled professionals passionate about their craft</p>
            </div>
            <div class="barbers-grid">
                <div class="barber-card">
                    <div class="barber-image">
                        <img src="media/classicCut.jfif" alt="Mike Rodriguez - Master Barber" class="barber-img">
                    </div>
                    <div class="barber-info">
                        <h3>Mike Rodriguez</h3>
                        <p class="barber-title">Master Barber</p>
                        <p class="barber-bio">15+ years experience specializing in classic cuts and modern fades. Known for precision and attention to detail.</p>
                        <div class="barber-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>4.9 (127 reviews)</span>
                        </div>
                    </div>
                </div>
                <div class="barber-card">
                    <div class="barber-image">
                        <img src="media/fadeCut.jpg" alt="James Wilson - Senior Barber" class="barber-img">
                    </div>
                    <div class="barber-info">
                        <h3>James Wilson</h3>
                        <p class="barber-title">Senior Barber</p>
                        <p class="barber-bio">Expert in beard grooming and hot shaves. Creates the perfect look for every client with premium products.</p>
                        <div class="barber-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>4.8 (89 reviews)</span>
                        </div>
                    </div>
                </div>
                <div class="barber-card">
                    <div class="barber-image">
                        <img src="media/beardtrim.jfif" alt="David Chen - Style Specialist" class="barber-img">
                    </div>
                    <div class="barber-info">
                        <h3>David Chen</h3>
                        <p class="barber-title">Style Specialist</p>
                        <p class="barber-bio">Creative designer specializing in custom fades and hair art. Brings your vision to life with modern techniques.</p>
                        <div class="barber-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>4.9 (156 reviews)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Before & After Gallery</h2>
                <p class="section-description">See the quality of our work through real transformations</p>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="media/classicCut.jfif" alt="Classic Haircut Transformation" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4>Classic Cut</h4>
                        <p>Professional styling</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/fadeCut.jpg" alt="Modern Fade Transformation" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4>Modern Fade</h4>
                        <p>Sharp contemporary look</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/beardtrim.jfif" alt="Beard Trim Transformation" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4>Beard Trim</h4>
                        <p>Perfect shaping</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/hotShave.jfif" alt="Hot Shave Experience" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4>Hot Shave</h4>
                        <p>Luxury experience</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="media/completeLook.jpg" alt="Complete Grooming" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4>Complete Look</h4>
                        <p>Full transformation</p>
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

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">What Our Clients Say</h2>
                <p class="section-description">Real reviews from satisfied customers</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Best barber shop in town! Mike gave me the perfect fade and the service was outstanding. Will definitely be back!"</p>
                    <div class="testimonial-author">
                        <strong>Alex Thompson</strong>
                        <span>Google Review</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Professional, clean, and friendly staff. My beard has never looked better. The hot shave was incredible!"</p>
                    <div class="testimonial-author">
                        <strong>Marcus Johnson</strong>
                        <span>Yelp Review</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Walked in without an appointment and was taken care of immediately. Great cut and great price! Highly recommend."</p>
                    <div class="testimonial-author">
                        <strong>Ryan Davis</strong>
                        <span>Facebook Review</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="contact-content">
                <div class="contact-info">
                    <h2>Visit Our Shop</h2>
                    <p>Located in the heart of downtown with easy parking and convenient access.</p>
                    <div class="contact-items">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Location</h3>
                                <p>123 Main Street<br>Your City, State 12345</p>
                                <a href="https://maps.google.com" target="_blank" class="btn btn-outline small">Get Directions</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Phone</h3>
                                <p><a href="tel:5551234567">(555) 123-4567</a></p>
                                <span class="availability">Available during business hours</span>
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
                </div>
                <div class="contact-form">
                    <h3>Send us a Message</h3>
                    <form id="contactForm" action="includes/contact_handler.php" method="POST">
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" id="phone" name="phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="message" placeholder="Message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section id="book" class="booking">
        <div class="container">
            <div class="booking-content">
                <div class="booking-info">
                    <h2>Book Your Appointment</h2>
                    <p>Ready for your perfect cut? Book online for guaranteed appointment time or walk in during business hours.</p>
                    <div class="booking-features">
                        <div class="feature">
                            <i class="fas fa-calendar-check"></i>
                            <span>Easy Online Booking</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-clock"></i>
                            <span>Flexible Scheduling</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-walking"></i>
                            <span>Walk-ins Welcome</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-gift"></i>
                            <span>20% Off First Cut</span>
                        </div>
                    </div>
                    <div class="urgency-message">
                        <i class="fas fa-clock"></i>
                        <span>Only 2 slots left today - Book now!</span>
                    </div>
                </div>
                <div class="booking-form">
                    <form id="bookingForm" action="includes/booking_handler.php" method="POST">
                        <div class="form-group">
                            <input type="text" id="booking_name" name="name" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="booking_email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" id="booking_phone" name="phone" placeholder="Phone Number" required>
                        </div>
                        <div class="form-group">
                            <select id="booking_barber" name="barber" required>
                                <option value="">Select Barber</option>
                                <option value="mike">Mike Rodriguez - Master Barber</option>
                                <option value="james">James Wilson - Senior Barber</option>
                                <option value="david">David Chen - Style Specialist</option>
                                <option value="any">Any Available Barber</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select id="booking_service" name="service" required>
                                <option value="">Select Service</option>
                                <option value="haircut">Haircut & Style - $35</option>
                                <option value="beard_trim">Beard Trim - $20</option>
                                <option value="hot_shave">Hot Shave - $40</option>
                                <option value="fade_design">Fade & Design - $45</option>
                                <option value="complete_grooming">Complete Grooming - $65</option>
                                <option value="premium_package">Premium Package - $85</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="date" id="booking_date" name="date" required>
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
                        </div>
                        <div class="form-group">
                            <textarea id="booking_notes" name="notes" placeholder="Special Requests (Optional)" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary large">
                            <i class="fas fa-calendar-check"></i>
                            Book Appointment - 20% Off First Cut
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
                            <h3>Blade & Fade</h3>
                            <span>Barbers</span>
                        </div>
                    </div>
                    <p>Professional men's grooming services with expert barbers and premium products. Look sharp, feel confident.</p>
                    <div class="footer-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span>4.9/5 (372 reviews)</span>
                    </div>
                </div>
                <div class="footer-links">
                    <div class="footer-column">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="#services">Haircut & Style</a></li>
                            <li><a href="#services">Beard Trim</a></li>
                            <li><a href="#services">Hot Shave</a></li>
                            <li><a href="#services">Fade & Design</a></li>
                            <li><a href="#services">Complete Grooming</a></li>
                            <li><a href="#services">Premium Package</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#barbers">Our Barbers</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="#book">Book Online</a></li>
                            <li><a href="tel:5551234567">Call Us</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Contact Info</h4>
                        <ul>
                            <li><a href="tel:5551234567">(555) 123-4567</a></li>
                            <li>123 Main Street</li>
                            <li>Your City, State 12345</li>
                            <li>Mon-Fri: 9AM-6PM</li>
                            <li>Sat: 9AM-4PM</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Blade & Fade Barbers. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
            </div>
        </div>
    </footer>

    <!-- Exit Intent Popup -->
    <div id="exitPopup" class="exit-popup">
        <div class="popup-content">
            <span class="close-popup">&times;</span>
            <h3>Wait! Don't Leave Yet</h3>
            <p>Get 20% off your first cut when you book online today!</p>
            <div class="popup-code">
                <span>Use code: FIRST20</span>
            </div>
            <a href="#book" class="btn btn-primary">Book Now & Save</a>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="assets/js/script.js"></script>
</body>
</html>