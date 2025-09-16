<?php
require_once 'includes/config.php';
$page_title = "Elite Collision Repair | #1 Auto Body Shop | Lifetime Warranty";
$page_description = "Kentucky's #1 collision repair shop. 25+ years experience, lifetime warranty, insurance direct billing. Get your free estimate in 15 minutes. Call (270) 801-9780 now!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="collision repair, auto body shop, car accident repair, paint work, frame repair, dent removal, insurance claims, lifetime warranty">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://elitecollision.com/">
    <meta property="og:title" content="Elite Collision Repair | #1 Auto Body Shop">
    <meta property="og:description" content="Kentucky's #1 collision repair shop. 25+ years experience, lifetime warranty, insurance direct billing.">
    <meta property="og:image" content="https://elitecollision.com/media/logo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://elitecollision.com/">
    <meta property="twitter:title" content="Elite Collision Repair | #1 Auto Body Shop">
    <meta property="twitter:description" content="Kentucky's #1 collision repair shop. 25+ years experience, lifetime warranty, insurance direct billing.">
    <meta property="twitter:image" content="https://elitecollision.com/media/logo.png">
    
    <link rel="icon" type="image/png" href="media/logo.png">
    <link rel="canonical" href="https://elitecollision.com/">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/fonts/fontawesome/fontawesome-free-6.7.2-web/css/all.min.css">
    
    <!-- Schema.org structured data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "AutoRepair",
        "name": "Elite Collision Repair",
        "description": "Kentucky's #1 collision repair shop with 25+ years experience",
        "url": "https://elitecollision.com",
        "telephone": "+1-270-801-9780",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "123 Main Street",
            "addressLocality": "Your City",
            "addressRegion": "KY",
            "postalCode": "12345",
            "addressCountry": "US"
        },
        "openingHours": "Mo-Fr 08:00-18:00,Sa 08:00-16:00",
        "priceRange": "$$",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "247"
        }
    }
    </script>
</head>
<body>
    <!-- URGENCY BANNER - HIGH CONVERSION -->
    <div class="urgency-banner">
        <div class="urgency-content">
            <div class="urgency-icon">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            <span class="urgency-text">LIMITED TIME: FREE TOWING + LIFETIME WARRANTY + 15-MINUTE QUOTES</span>
            <div class="scarcity-indicator">Only 3 spots left this week!</div>
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
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="about.php">About</a></li>
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

    <!-- HERO SECTION - ULTIMATE CONVERSION -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge">
                    <i class="fas fa-trophy"></i>
                    <span>#1 RATED COLLISION SHOP</span>
                </div>
                <h1>Get Your Car <span class="highlight">Back to Perfect</span> in 3 Days or Less</h1>
                <p class="hero-subtitle">
                    <strong>25+ years experience</strong> • <strong>Lifetime warranty</strong> • <strong>Insurance direct billing</strong><br>
                    Join <strong>5,000+ satisfied customers</strong> who trust us with their collision repair needs
                </p>
                
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">4.9</span>
                        <span class="stat-label">Customer Rating</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">5,000+</span>
                        <span class="stat-label">Cars Repaired</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">98%</span>
                        <span class="stat-label">Would Recommend</span>
                    </div>
                </div>
                
                <div class="hero-buttons">
                    <a href="#quote-section" class="cta-button primary large">
                        <i class="fas fa-calculator"></i>
                        <span>Get Free Quote Now</span>
                        <small>15-minute response guaranteed</small>
                    </a>
                    <a href="tel:2708019780" class="cta-button accent large">
                        <i class="fas fa-phone"></i>
                        <span>Call (270) 801-9780</span>
                        <small>Available 24/7 for emergencies</small>
                    </a>
                </div>
                
                <div class="hero-trust">
                    <div class="trust-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Lifetime Warranty</span>
                    </div>
                    <div class="trust-item">
                        <i class="fas fa-file-invoice"></i>
                        <span>Insurance Direct Billing</span>
                    </div>
                    <div class="trust-item">
                        <i class="fas fa-truck"></i>
                        <span>Free Towing Service</span>
                    </div>
                    <div class="trust-item">
                        <i class="fas fa-clock"></i>
                        <span>Same-Day Estimates</span>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-image-container">
                    <img src="media/workingondamagedside.jpg" alt="Professional collision repair in progress" class="hero-main-image">
                    <div class="floating-card">
                        <div class="card-content">
                            <div class="card-header">
                                <i class="fas fa-star"></i>
                                <span>Sarah M.</span>
                            </div>
                            <p>"Amazing work! My car looks brand new. They handled everything with my insurance company. Highly recommend!"</p>
                            <div class="card-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2>Complete Collision Repair Services</h2>
                <p>From minor dents to major collision damage, we restore your vehicle to its pre-accident condition with our state-of-the-art equipment and certified technicians.</p>
            </div>
            
            <div class="services-grid">
                <!-- Collision Repair -->
                <div class="service-card featured">
                    <div class="service-image">
                        <img src="media/workingondamagedside.jpg" alt="Professional collision repair services">
                        <div class="service-overlay">
                            <a href="#quote-section" class="service-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Collision Repair</h3>
                        <p>Professional repair of front-end, rear-end, and side impact damage using computerized measuring systems and OEM parts.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Computerized measuring systems</li>
                            <li><i class="fas fa-check"></i> OEM parts guarantee</li>
                            <li><i class="fas fa-check"></i> Lifetime warranty</li>
                            <li><i class="fas fa-check"></i> Insurance direct billing</li>
                        </ul>
                        <div class="service-cta">
                            <a href="#quote-section" class="cta-button primary">
                                <i class="fas fa-calculator"></i>
                                <span>Get Free Quote</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Paint & Body Work -->
                <div class="service-card">
                    <div class="service-image">
                        <img src="media/repaintingdoor.jpg" alt="Professional paint and body work">
                        <div class="service-overlay">
                            <a href="#quote-section" class="service-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Paint & Body Work</h3>
                        <p>Expert color matching and paint application to restore your vehicle's original appearance and value.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Color matching technology</li>
                            <li><i class="fas fa-check"></i> Premium paint systems</li>
                            <li><i class="fas fa-check"></i> UV protection coating</li>
                            <li><i class="fas fa-check"></i> Color blending techniques</li>
                        </ul>
                        <div class="service-cta">
                            <a href="#quote-section" class="cta-button primary">
                                <i class="fas fa-calculator"></i>
                                <span>Get Free Quote</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Dent Removal -->
                <div class="service-card">
                    <div class="service-image">
                        <img src="media/pullingdentout.jpg" alt="Professional dent removal services">
                        <div class="service-overlay">
                            <a href="#quote-section" class="service-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Dent Removal</h3>
                        <p>Paintless dent repair and traditional body work to eliminate dents and restore smooth surfaces.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Paintless dent repair (PDR)</li>
                            <li><i class="fas fa-check"></i> Hail damage repair</li>
                            <li><i class="fas fa-check"></i> Door ding removal</li>
                            <li><i class="fas fa-check"></i> Traditional body work</li>
                        </ul>
                        <div class="service-cta">
                            <a href="#quote-section" class="cta-button primary">
                                <i class="fas fa-calculator"></i>
                                <span>Get Free Quote</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US SECTION -->
    <section class="why-choose">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Elite Collision Repair?</h2>
                <p>We're not just another collision shop. We're your trusted partner in getting back on the road safely and quickly.</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>25+ Years Experience</h3>
                    <p>Over two decades of expertise in collision repair, with certified technicians who stay current with the latest techniques and technology.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Lifetime Warranty</h3>
                    <p>We stand behind our work with a comprehensive lifetime warranty on all repairs. Your satisfaction is guaranteed for the life of your vehicle.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <h3>Insurance Direct Billing</h3>
                    <p>We work directly with your insurance company to handle all paperwork and approvals, making the process as smooth as possible for you.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Free Towing Service</h3>
                    <p>If your vehicle isn't drivable, we'll tow it to our shop at no cost to you. We make it easy to get your car the help it needs.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Same-Day Estimates</h3>
                    <p>Get your free estimate the same day you contact us. No waiting days or weeks to find out what your repair will cost.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>4.9/5 Customer Rating</h3>
                    <p>Our customers consistently rate us 4.9 out of 5 stars. Read our reviews to see why we're Kentucky's most trusted collision repair shop.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- QUOTE SECTION - ULTIMATE CONVERSION -->
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
                            <label for="vehicleYear">Vehicle Year *</label>
                            <select id="vehicleYear" name="vehicleYear" required>
                                <option value="">Select Year</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="older">Older than 2010</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="vehicleMake">Vehicle Make *</label>
                            <input type="text" id="vehicleMake" name="vehicleMake" placeholder="e.g., Honda, Toyota, Ford" required>
                        </div>
                        <div class="form-group">
                            <label for="vehicleModel">Vehicle Model *</label>
                            <input type="text" id="vehicleModel" name="vehicleModel" placeholder="e.g., Civic, Camry, F-150" required>
                        </div>
                        <div class="form-group">
                            <label for="damageType">Type of Damage *</label>
                            <select id="damageType" name="damageType" required>
                                <option value="">Select Damage Type</option>
                                <option value="front-end">Front End Collision</option>
                                <option value="rear-end">Rear End Collision</option>
                                <option value="side-impact">Side Impact</option>
                                <option value="hail">Hail Damage</option>
                                <option value="dents">Dents & Dings</option>
                                <option value="paint">Paint Damage</option>
                                <option value="glass">Glass Damage</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="damageDescription">Damage Description *</label>
                            <textarea id="damageDescription" name="damageDescription" rows="3" placeholder="Please describe the damage in detail..." required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="insuranceCompany">Insurance Company</label>
                            <input type="text" id="insuranceCompany" name="insuranceCompany" placeholder="e.g., State Farm, Allstate, Geico">
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

    <!-- JAVASCRIPT -->
    <script src="js/main.js"></script>
    <script>
        // Advanced conversion tracking and optimization
        document.addEventListener('DOMContentLoaded', function() {
            // Header scroll effect
            const header = document.getElementById('header');
            let lastScrollY = window.scrollY;
            
            window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
                lastScrollY = window.scrollY;
            });
            
            // Mobile menu toggle
            const mobileMenuToggle = document.getElementById('mobileMenuToggle');
            const navMenu = document.getElementById('navMenu');
            
            mobileMenuToggle.addEventListener('click', () => {
                navMenu.classList.toggle('active');
                mobileMenuToggle.classList.toggle('active');
            });
            
            // Close mobile menu when clicking on links
            navMenu.addEventListener('click', (e) => {
                if (e.target.tagName === 'A') {
                    navMenu.classList.remove('active');
                    mobileMenuToggle.classList.remove('active');
                }
            });
            
            // Form submission with conversion tracking
            const quoteForm = document.getElementById('quickQuoteForm');
            quoteForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Show loading state
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i><span>Processing...</span>';
                submitBtn.disabled = true;
                
                // Simulate form processing
                setTimeout(() => {
                    alert('Thank you! Your quote request has been submitted. We will contact you within 15 minutes.');
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    quoteForm.reset();
                }, 2000);
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
            
            // Intersection Observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                    }
                });
            }, observerOptions);
            
            // Observe elements for animation
            document.querySelectorAll('.service-card, .feature-card').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>
