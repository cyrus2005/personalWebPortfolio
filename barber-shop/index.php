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
    <title>Blade & Fade Barbers - Premium Men's Grooming</title>
    <meta name="description" content="Professional barber shop specializing in modern cuts, fades, and grooming services for men aged 20-35. Book your appointment today.">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <img src="media/ClipperLogo.png" alt="Blade & Fade Barbers" class="clipper-logo">
                <img src="media/NameLogo.png" alt="Blade & Fade Barbers" class="logo-image">
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#home" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#gallery" class="nav-link">Perfect Services</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <button class="nav-link book-btn" onclick="openBookingModal()">Book Now</button>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-background-logos">
            <img src="media/ClipperLogo.png" alt="Blade & Fade Barbers" class="rotated-logo logo-1">
            <img src="media/ClipperLogo.png" alt="Blade & Fade Barbers" class="rotated-logo logo-2">
            <img src="media/ClipperLogo.png" alt="Blade & Fade Barbers" class="rotated-logo logo-3">
            <img src="media/ClipperLogo.png" alt="Blade & Fade Barbers" class="rotated-logo logo-4">
            <img src="media/ClipperLogo.png" alt="Blade & Fade Barbers" class="rotated-logo logo-5">
            <img src="media/ClipperLogo.png" alt="Blade & Fade Barbers" class="rotated-logo logo-6">
            <img src="media/ClipperLogo.png" alt="Blade & Fade Barbers" class="rotated-logo logo-7">
            <img src="media/ClipperLogo.png" alt="Blade & Fade Barbers" class="rotated-logo logo-8">
            <img src="media/ClipperLogo.png" alt="Blade & Fade Barbers" class="rotated-logo logo-9">
        </div>
        <div class="hero-content">
            <h1>Located Near You. Stop By Today.</h1>
            <p>Your neighborhood barber shop where style meets convenience. Walk-ins welcome, appointments preferred. Let's get you looking sharp.</p>
            <div class="hero-buttons">
                <button class="btn btn-primary" onclick="openBookingModal()">Book Appointment</button>
                <a href="#gallery" class="btn btn-secondary">View Services</a>
            </div>
        </div>
        <div class="hero-image">
            <div class="hero-video">
                <iframe 
                    src="https://www.youtube.com/embed/BRSF8Eqd8i0" 
                    title="Blade & Fade Barbers - Our Work"
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section id="about" class="about">
        <div class="about-background-pattern">
            <div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div>
            <div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div>
            <div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div>
            <div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div>
            <div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div>
            <div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div>
            <div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div>
            <div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div><div class="pattern-symbol">-</div><div class="pattern-symbol">+</div>
        </div>
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>About Blade & Fade Barbers</h2>
                    <p>Founded with a passion for precision and style, Blade & Fade Barbers has been serving the modern gentleman since day one. We understand that grooming is more than just a haircut – it's about confidence, style, and self-expression.</p>
                    <p>Our skilled barbers combine traditional techniques with contemporary trends to deliver cuts that not only look great but reflect your personality. From classic fades to modern styles, we're here to help you look and feel your best.</p>
                    <div class="about-stats">
                        <div class="stat">
                            <h3>500+</h3>
                            <p>Happy Clients</p>
                        </div>
                        <div class="stat">
                            <h3>5+</h3>
                            <p>Years Experience</p>
                        </div>
                        <div class="stat">
                            <h3>100%</h3>
                            <p>Satisfaction Rate</p>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <div class="about-placeholder">
                        <i class="fas fa-user-tie"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Perfect Services Section -->
    <section id="gallery" class="gallery">
        <div class="gallery-background-pattern">
            <div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div>
            <div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div>
            <div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div>
            <div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div>
            <div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div>
            <div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div>
            <div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div>
            <div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div><div class="pattern-symbol">-</div>
        </div>
        <div class="container">
            <div class="section-header">
                <h2>Perfect Services</h2>
                <p>See the quality and precision of our craftsmanship</p>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item sales-bubble">
                    <img src="media/fadeCut.jpg" alt="Fade & Style" class="gallery-image">
                    <div class="service-info">
                        <h3>Fade & Style</h3>
                        <div class="price">$45</div>
                    </div>
                </div>
                <div class="gallery-item sales-bubble">
                    <img src="media/beardtrim.jfif" alt="Beard Trim" class="gallery-image">
                    <div class="service-info">
                        <h3>Beard Trim</h3>
                        <div class="price">$25</div>
                    </div>
                </div>
                <div class="gallery-item sales-bubble">
                    <img src="media/classicCut.jfif" alt="Classic Haircut" class="gallery-image">
                    <div class="service-info">
                        <h3>Classic Haircut</h3>
                        <div class="price">$35</div>
                    </div>
                </div>
                <div class="gallery-item sales-bubble">
                    <img src="media/hotShave.jfif" alt="Hot Towel Shave" class="gallery-image">
                    <div class="service-info">
                        <h3>Hot Towel Shave</h3>
                        <div class="price">$40</div>
                    </div>
                </div>
                <div class="gallery-item sales-bubble">
                    <img src="media/completeLook.jpg" alt="Complete Package" class="gallery-image">
                    <div class="service-info">
                        <h3>Complete Package</h3>
                        <div class="price">$75</div>
                    </div>
                </div>
                <div class="gallery-item sales-bubble">
                    <div class="gallery-placeholder">
                        <i class="fas fa-plus"></i>
                        <div class="service-info">
                            <h3>More Services</h3>
                            <div class="price">Coming Soon</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="contact-background-pattern">
            <div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div>
            <div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div>
            <div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div>
            <div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div>
            <div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div>
            <div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div>
            <div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div>
            <div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div><div class="pattern-symbol">^</div>
        </div>
        <div class="container">
            <div class="section-header">
                <h2>Get In Touch</h2>
                <p>Ready to book your appointment or have questions? We're here to help.</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h3>Location</h3>
                            <p>123 Main Street<br>Downtown District<br>Your City, ST 12345</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h3>Phone</h3>
                            <p>(555) 123-4567</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email</h3>
                            <p>info@bladeandfade.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h3>Hours</h3>
                            <p>Mon-Fri: 9AM-7PM<br>Sat: 8AM-6PM<br>Sun: 10AM-4PM</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contactForm" method="POST" action="includes/contact_handler.php">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" placeholder="Your Phone">
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="container">
            <div class="newsletter-content">
                <h2>Stay Updated</h2>
                <p>Get the latest news, special offers, and grooming tips delivered to your inbox.</p>
                <form id="newsletterForm" method="POST" action="includes/newsletter_handler.php">
                    <div class="newsletter-form">
                        <input type="email" name="email" placeholder="Enter your email address" required>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <img src="media/NameLogo.png" alt="Blade & Fade Barbers" class="footer-logo-image">
                    </div>
                    <p>Premium grooming services for the modern gentleman. Book your appointment today and experience the difference.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#gallery">Perfect Services</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#gallery">Fade & Style</a></li>
                        <li><a href="#gallery">Beard Trim</a></li>
                        <li><a href="#gallery">Classic Haircut</a></li>
                        <li><a href="#gallery">Hot Towel Shave</a></li>
                        <li><a href="#gallery">Complete Package</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i> 123 Main Street, Your City</p>
                        <p><i class="fas fa-phone"></i> (555) 123-4567</p>
                        <p><i class="fas fa-envelope"></i> info@bladeandfade.com</p>
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
            <span class="close">&times;</span>
            <h2>Book Your Appointment</h2>
            <form id="bookingForm" method="POST" action="includes/booking_handler.php">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <select name="service" required>
                        <option value="">Select Service</option>
                        <option value="classic-haircut">Classic Haircut - $35</option>
                        <option value="fade-style">Fade & Style - $45</option>
                        <option value="beard-trim">Beard Trim - $25</option>
                        <option value="hot-towel-shave">Hot Towel Shave - $40</option>
                        <option value="complete-package">Complete Package - $75</option>
                        <option value="hair-styling">Hair Styling - $20</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="date" name="date" required>
                </div>
                <div class="form-group">
                    <select name="time" required>
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
                        <option value="18:00">6:00 PM</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea name="notes" placeholder="Special requests or notes" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Book Appointment</button>
            </form>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>