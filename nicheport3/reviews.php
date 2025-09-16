<?php
require_once 'includes/config.php';
$page_title = get_page_title('reviews');
$page_description = get_meta_description('reviews');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="collision repair reviews, auto body shop testimonials, customer reviews, collision shop ratings">
    
    <link rel="icon" type="image/png" href="media/logo.png">
    <link rel="canonical" href="<?php echo SITE_URL; ?>/reviews.php">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/fonts/fontawesome/fontawesome-free-6.7.2-web/css/all.min.css">
</head>
<body>
    <!-- URGENCY BANNER -->
    <div class="urgency-banner">
        <div class="urgency-content">
            <div class="urgency-icon">
                <i class="fas fa-star"></i>
            </div>
            <span class="urgency-text">4.9/5 CUSTOMER RATING • 247 REVIEWS • 98% RECOMMEND</span>
            <div class="scarcity-indicator">Join our satisfied customers!</div>
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
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="reviews.php" class="active">Reviews</a></li>
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
                    <i class="fas fa-star"></i>
                    <span>4.9/5 Customer Rating</span>
                </div>
                <h1>What Our <span class="highlight">Customers Say</span></h1>
                <p class="hero-subtitle">Don't just take our word for it - read <strong>real reviews</strong> from <strong>satisfied customers</strong> who trust us with their collision repair needs.</p>
                
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">4.9</span>
                        <span class="stat-label">Average Rating</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">247</span>
                        <span class="stat-label">Reviews</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">98%</span>
                        <span class="stat-label">Would Recommend</span>
                    </div>
                </div>
                
                <div class="hero-buttons">
                    <a href="#reviews-content" class="cta-button primary large">
                        <i class="fas fa-comments"></i>
                        <span>Read Reviews</span>
                        <small>Real customer experiences</small>
                    </a>
                    <a href="tel:<?php echo SITE_PHONE_CLEAN; ?>" class="cta-button accent large">
                        <i class="fas fa-phone"></i>
                        <span>Call <?php echo SITE_PHONE; ?></span>
                        <small>Join our happy customers</small>
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-image-container">
                    <img src="media/team-technician-1.jpg" alt="Happy customer with repaired vehicle" class="hero-main-image">
                    <div class="floating-card">
                        <div class="card-content">
                            <div class="card-header">
                                <i class="fas fa-star"></i>
                                <span>5.0 Rating</span>
                            </div>
                            <p>"Elite Collision exceeded all my expectations! Amazing work and customer service."</p>
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

    <!-- REVIEWS CONTENT -->
    <section id="reviews-content" class="section">
        <div class="container">
            <div class="section-header">
                <h2>Customer Reviews & Testimonials</h2>
                <p>See why our customers choose Elite Collision Repair for their collision repair needs</p>
            </div>
            
            <!-- Featured Reviews -->
            <div class="testimonials-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
                <?php
                $reviews = [
                    [
                        'name' => 'Sarah M.',
                        'rating' => 5,
                        'date' => '2 weeks ago',
                        'service' => 'Collision Repair',
                        'text' => 'Elite Collision did an absolutely amazing job on my car! The paint match was perfect and you can\'t even tell it was ever damaged. The staff was professional, kept me updated throughout the process, and completed the work ahead of schedule. I highly recommend them!',
                        'verified' => true
                    ],
                    [
                        'name' => 'John M.',
                        'rating' => 5,
                        'date' => '1 month ago',
                        'service' => 'Insurance Claim',
                        'text' => 'I was in a major accident and my car was severely damaged. Elite Collision handled everything with my insurance company and made the whole process stress-free. The quality of work is outstanding and they stand behind their work with a lifetime warranty. Worth every penny!',
                        'verified' => true
                    ],
                    [
                        'name' => 'Alex L.',
                        'rating' => 5,
                        'date' => '3 weeks ago',
                        'service' => 'Paint Work',
                        'text' => 'I\'ve used other collision shops before, but Elite Collision is by far the best. The attention to detail, customer service, and quality of work is unmatched. They even provided a rental car while my car was being repaired. I\'ll never go anywhere else!',
                        'verified' => true
                    ],
                    [
                        'name' => 'Maria R.',
                        'rating' => 5,
                        'date' => '1 week ago',
                        'service' => 'Dent Removal',
                        'text' => 'The team at Elite Collision is incredible! They fixed my hail damage perfectly using paintless dent repair. The car looks brand new and the process was quick and affordable. Their customer service is top-notch and they really care about their customers.',
                        'verified' => true
                    ],
                    [
                        'name' => 'David T.',
                        'rating' => 5,
                        'date' => '2 months ago',
                        'service' => 'Frame Repair',
                        'text' => 'I was skeptical about collision repair shops after a bad experience elsewhere, but Elite Collision restored my faith. They were honest about the work needed, provided a detailed estimate, and delivered exactly what they promised. The car looks better than before the accident!',
                        'verified' => true
                    ],
                    [
                        'name' => 'Jennifer K.',
                        'rating' => 5,
                        'date' => '3 days ago',
                        'service' => 'Complete Repair',
                        'text' => 'Elite Collision exceeded all my expectations! They handled my insurance claim seamlessly, provided regular updates, and completed the work ahead of schedule. The quality is outstanding and the staff is friendly and professional. I highly recommend them to anyone needing collision repair.',
                        'verified' => true
                    ],
                    [
                        'name' => 'Michael B.',
                        'rating' => 5,
                        'date' => '2 weeks ago',
                        'service' => 'Glass Replacement',
                        'text' => 'Fast, professional, and excellent work! My windshield replacement was done quickly and perfectly. The team was courteous and kept me informed throughout the process. The price was fair and the quality exceeded my expectations.',
                        'verified' => true
                    ],
                    [
                        'name' => 'Lisa W.',
                        'rating' => 5,
                        'date' => '1 month ago',
                        'service' => 'Detailing',
                        'text' => 'After my collision repair, I also had them detail my car. It looks absolutely brand new! The attention to detail is incredible. They even cleaned areas I didn\'t know needed cleaning. Highly professional and worth every penny.',
                        'verified' => true
                    ],
                    [
                        'name' => 'Robert H.',
                        'rating' => 5,
                        'date' => '3 weeks ago',
                        'service' => 'Paint & Body',
                        'text' => 'Outstanding work! My car had extensive damage from a side impact collision. Elite Collision not only repaired it perfectly but also matched the paint flawlessly. You can\'t tell it was ever damaged. The lifetime warranty gives me peace of mind.',
                        'verified' => true
                    ]
                ];
                
                foreach ($reviews as $review): ?>
                <div class="testimonial-card" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); border: 2px solid transparent; transition: all 0.3s ease;">
                    <div class="testimonial-content">
                        <div class="stars" style="color: var(--safety-orange); margin-bottom: 1rem; font-size: 1rem;">
                            <?php for($i = 0; $i < $review['rating']; $i++): ?>
                            <i class="fas fa-star"></i>
                            <?php endfor; ?>
                        </div>
                        <p style="color: var(--charcoal); font-style: italic; margin: 0; font-size: 1.1rem; line-height: 1.6;">"<?php echo $review['text']; ?>"</p>
                    </div>
                    <div class="testimonial-author" style="display: flex; align-items: center; gap: 1rem; margin-top: 1.5rem;">
                        <div class="author-avatar">
                            <img src="https://via.placeholder.com/60x60/2C3E50/FFFFFF?text=<?php echo substr($review['name'], 0, 2); ?>" alt="<?php echo $review['name']; ?>" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                        </div>
                        <div class="author-info">
                            <h4 style="color: var(--steel-blue); margin-bottom: 0.25rem;"><?php echo $review['name']; ?></h4>
                            <span style="color: var(--medium-gray); font-size: 0.9rem;"><?php echo $review['verified'] ? 'Verified Customer' : 'Customer'; ?> • <?php echo $review['date']; ?></span>
                            <div style="margin-top: 0.5rem;">
                                <span style="background: var(--success-green); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;"><?php echo $review['service']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Review Summary -->
            <div class="review-summary" style="background: var(--light-gray); padding: 3rem; border-radius: 1rem; text-align: center; margin-bottom: 3rem;">
                <h3 style="color: var(--steel-blue); margin-bottom: 2rem;">Why Our Customers Love Us</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem;">
                    <div>
                        <div style="font-size: 3rem; color: var(--safety-orange); font-weight: 700; margin-bottom: 0.5rem;">4.9/5</div>
                        <div style="color: var(--medium-gray);">Average Rating</div>
                    </div>
                    <div>
                        <div style="font-size: 3rem; color: var(--safety-orange); font-weight: 700; margin-bottom: 0.5rem;">98%</div>
                        <div style="color: var(--medium-gray);">Would Recommend</div>
                    </div>
                    <div>
                        <div style="font-size: 3rem; color: var(--safety-orange); font-weight: 700; margin-bottom: 0.5rem;">247</div>
                        <div style="color: var(--medium-gray);">Total Reviews</div>
                    </div>
                    <div>
                        <div style="font-size: 3rem; color: var(--safety-orange); font-weight: 700; margin-bottom: 0.5rem;">24hr</div>
                        <div style="color: var(--medium-gray);">Response Time</div>
                    </div>
                </div>
            </div>

            <!-- Trust Indicators -->
            <div class="trust-indicators" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
                <div style="background: var(--white); padding: 2rem; border-radius: 1rem; text-align: center; box-shadow: var(--shadow);">
                    <div style="font-size: 2.5rem; color: var(--success-green); margin-bottom: 1rem;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 style="color: var(--steel-blue); margin-bottom: 0.5rem;">Lifetime Warranty</h4>
                    <p style="color: var(--medium-gray); font-size: 0.9rem;">All repairs backed by our comprehensive lifetime warranty</p>
                </div>
                <div style="background: var(--white); padding: 2rem; border-radius: 1rem; text-align: center; box-shadow: var(--shadow);">
                    <div style="font-size: 2.5rem; color: var(--electric-blue); margin-bottom: 1rem;">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <h4 style="color: var(--steel-blue); margin-bottom: 0.5rem;">Insurance Direct</h4>
                    <p style="color: var(--medium-gray); font-size: 0.9rem;">We work directly with your insurance company</p>
                </div>
                <div style="background: var(--white); padding: 2rem; border-radius: 1rem; text-align: center; box-shadow: var(--shadow);">
                    <div style="font-size: 2.5rem; color: var(--safety-orange); margin-bottom: 1rem;">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h4 style="color: var(--steel-blue); margin-bottom: 0.5rem;">Free Towing</h4>
                    <p style="color: var(--medium-gray); font-size: 0.9rem;">Free towing service for non-drivable vehicles</p>
                </div>
                <div style="background: var(--white); padding: 2rem; border-radius: 1rem; text-align: center; box-shadow: var(--shadow);">
                    <div style="font-size: 2.5rem; color: var(--warning-yellow); margin-bottom: 1rem;">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h4 style="color: var(--steel-blue); margin-bottom: 0.5rem;">Same-Day Quotes</h4>
                    <p style="color: var(--medium-gray); font-size: 0.9rem;">Get your free estimate the same day</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="quote-section">
        <div class="quote-content">
            <div class="quote-text">
                <h2>Ready to Join Our Happy Customers?</h2>
                <p>Experience the same quality service that our customers rave about. Get your free quote today and see why we're Kentucky's #1 collision repair shop.</p>
                
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
    <script>
        // Add hover effects to testimonial cards
        document.addEventListener('DOMContentLoaded', function() {
            const testimonialCards = document.querySelectorAll('.testimonial-card');
            
            testimonialCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                    this.style.borderColor = 'var(--safety-orange)';
                    this.style.boxShadow = 'var(--shadow-lg)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.borderColor = 'transparent';
                    this.style.boxShadow = 'var(--shadow)';
                });
            });
        });
    </script>
</body>
</html>
