<?php
require_once 'includes/config.php';
$page_title = "Customer Reviews | Elite Collision Repair";
$page_description = "Read real customer reviews and testimonials for Elite Collision Repair. See why our customers trust us with their collision repair needs.";
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
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="reviews.php" class="active">Reviews</a></li>
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
                        <a href="tel:2708019780" class="cta-button secondary large">
                            <i class="fas fa-phone"></i>
                            <span>Call (270) 801-9780</span>
                            <small>Join our happy customers</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Content -->
    <section id="reviews-content" class="services" style="padding: 5rem 0;">
        <div class="container">
            <div class="section-header">
                <h2>Customer Reviews & Testimonials</h2>
                <p>See why our customers choose Elite Collision Repair for their collision repair needs</p>
            </div>
            
            <!-- Featured Reviews -->
            <div class="testimonials-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
                <!-- Review 1 -->
                <div class="testimonial-card" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); border: 2px solid transparent; transition: all 0.3s ease;">
                    <div class="testimonial-content">
                        <div class="stars" style="color: var(--accent-gold); margin-bottom: 1rem; font-size: 1rem;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p style="color: var(--dark-gray); font-style: italic; margin: 0; font-size: 1.1rem; line-height: 1.6;">"Elite Collision did an absolutely amazing job on my car! The paint match was perfect and you can't even tell it was ever damaged. The staff was professional, kept me updated throughout the process, and completed the work ahead of schedule. I highly recommend them!"</p>
                    </div>
                    <div class="testimonial-author" style="display: flex; align-items: center; gap: 1rem; margin-top: 1.5rem;">
                        <div class="author-avatar">
                            <img src="https://via.placeholder.com/60x60/1B4D3E/FFFFFF?text=SM" alt="Sarah M." style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                        </div>
                        <div class="author-info">
                            <h4 style="color: var(--primary-green); margin-bottom: 0.25rem;">Sarah M.</h4>
                            <span style="color: var(--medium-gray); font-size: 0.9rem;">Verified Customer • 2 weeks ago</span>
                            <div style="margin-top: 0.5rem;">
                                <span style="background: var(--success); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">Collision Repair</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="testimonial-card" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); border: 2px solid transparent; transition: all 0.3s ease;">
                    <div class="testimonial-content">
                        <div class="stars" style="color: var(--accent-gold); margin-bottom: 1rem; font-size: 1rem;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p style="color: var(--dark-gray); font-style: italic; margin: 0; font-size: 1.1rem; line-height: 1.6;">"I was in a major accident and my car was severely damaged. Elite Collision handled everything with my insurance company and made the whole process stress-free. The quality of work is outstanding and they stand behind their work with a lifetime warranty. Worth every penny!"</p>
                    </div>
                    <div class="testimonial-author" style="display: flex; align-items: center; gap: 1rem; margin-top: 1.5rem;">
                        <div class="author-avatar">
                            <img src="https://via.placeholder.com/60x60/1B4D3E/FFFFFF?text=JM" alt="John M." style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                        </div>
                        <div class="author-info">
                            <h4 style="color: var(--primary-green); margin-bottom: 0.25rem;">John M.</h4>
                            <span style="color: var(--medium-gray); font-size: 0.9rem;">Verified Customer • 1 month ago</span>
                            <div style="margin-top: 0.5rem;">
                                <span style="background: var(--info); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">Insurance Claim</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="testimonial-card" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); border: 2px solid transparent; transition: all 0.3s ease;">
                    <div class="testimonial-content">
                        <div class="stars" style="color: var(--accent-gold); margin-bottom: 1rem; font-size: 1rem;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p style="color: var(--dark-gray); font-style: italic; margin: 0; font-size: 1.1rem; line-height: 1.6;">"I've used other collision shops before, but Elite Collision is by far the best. The attention to detail, customer service, and quality of work is unmatched. They even provided a rental car while my car was being repaired. I'll never go anywhere else!"</p>
                    </div>
                    <div class="testimonial-author" style="display: flex; align-items: center; gap: 1rem; margin-top: 1.5rem;">
                        <div class="author-avatar">
                            <img src="https://via.placeholder.com/60x60/1B4D3E/FFFFFF?text=AL" alt="Alex L." style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                        </div>
                        <div class="author-info">
                            <h4 style="color: var(--primary-green); margin-bottom: 0.25rem;">Alex L.</h4>
                            <span style="color: var(--medium-gray); font-size: 0.9rem;">Verified Customer • 3 weeks ago</span>
                            <div style="margin-top: 0.5rem;">
                                <span style="background: var(--warning); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">Paint Work</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 4 -->
                <div class="testimonial-card" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); border: 2px solid transparent; transition: all 0.3s ease;">
                    <div class="testimonial-content">
                        <div class="stars" style="color: var(--accent-gold); margin-bottom: 1rem; font-size: 1rem;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p style="color: var(--dark-gray); font-style: italic; margin: 0; font-size: 1.1rem; line-height: 1.6;">"The team at Elite Collision is incredible! They fixed my hail damage perfectly using paintless dent repair. The car looks brand new and the process was quick and affordable. Their customer service is top-notch and they really care about their customers."</p>
                    </div>
                    <div class="testimonial-author" style="display: flex; align-items: center; gap: 1rem; margin-top: 1.5rem;">
                        <div class="author-avatar">
                            <img src="https://via.placeholder.com/60x60/1B4D3E/FFFFFF?text=MR" alt="Maria R." style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                        </div>
                        <div class="author-info">
                            <h4 style="color: var(--primary-green); margin-bottom: 0.25rem;">Maria R.</h4>
                            <span style="color: var(--medium-gray); font-size: 0.9rem;">Verified Customer • 1 week ago</span>
                            <div style="margin-top: 0.5rem;">
                                <span style="background: var(--accent-orange); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">Dent Removal</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 5 -->
                <div class="testimonial-card" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); border: 2px solid transparent; transition: all 0.3s ease;">
                    <div class="testimonial-content">
                        <div class="stars" style="color: var(--accent-gold); margin-bottom: 1rem; font-size: 1rem;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p style="color: var(--dark-gray); font-style: italic; margin: 0; font-size: 1.1rem; line-height: 1.6;">"I was skeptical about collision repair shops after a bad experience elsewhere, but Elite Collision restored my faith. They were honest about the work needed, provided a detailed estimate, and delivered exactly what they promised. The car looks better than before the accident!"</p>
                    </div>
                    <div class="testimonial-author" style="display: flex; align-items: center; gap: 1rem; margin-top: 1.5rem;">
                        <div class="author-avatar">
                            <img src="https://via.placeholder.com/60x60/1B4D3E/FFFFFF?text=DT" alt="David T." style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                        </div>
                        <div class="author-info">
                            <h4 style="color: var(--primary-green); margin-bottom: 0.25rem;">David T.</h4>
                            <span style="color: var(--medium-gray); font-size: 0.9rem;">Verified Customer • 2 months ago</span>
                            <div style="margin-top: 0.5rem;">
                                <span style="background: var(--primary-green); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">Frame Repair</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 6 -->
                <div class="testimonial-card" style="background: var(--white); padding: 2rem; border-radius: 1rem; box-shadow: var(--shadow); border: 2px solid transparent; transition: all 0.3s ease;">
                    <div class="testimonial-content">
                        <div class="stars" style="color: var(--accent-gold); margin-bottom: 1rem; font-size: 1rem;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p style="color: var(--dark-gray); font-style: italic; margin: 0; font-size: 1.1rem; line-height: 1.6;">"Elite Collision exceeded all my expectations! They handled my insurance claim seamlessly, provided regular updates, and completed the work ahead of schedule. The quality is outstanding and the staff is friendly and professional. I highly recommend them to anyone needing collision repair."</p>
                    </div>
                    <div class="testimonial-author" style="display: flex; align-items: center; gap: 1rem; margin-top: 1.5rem;">
                        <div class="author-avatar">
                            <img src="https://via.placeholder.com/60x60/1B4D3E/FFFFFF?text=JK" alt="Jennifer K." style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                        </div>
                        <div class="author-info">
                            <h4 style="color: var(--primary-green); margin-bottom: 0.25rem;">Jennifer K.</h4>
                            <span style="color: var(--medium-gray); font-size: 0.9rem;">Verified Customer • 3 days ago</span>
                            <div style="margin-top: 0.5rem;">
                                <span style="background: var(--secondary-green); color: var(--white); padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem;">Complete Repair</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review Summary -->
            <div class="review-summary" style="background: var(--light-gray); padding: 3rem; border-radius: 1rem; text-align: center; margin-bottom: 3rem;">
                <h3 style="color: var(--primary-green); margin-bottom: 2rem;">Why Our Customers Love Us</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem;">
                    <div>
                        <div style="font-size: 3rem; color: var(--accent-gold); font-weight: 700; margin-bottom: 0.5rem;">4.9/5</div>
                        <div style="color: var(--medium-gray);">Average Rating</div>
                    </div>
                    <div>
                        <div style="font-size: 3rem; color: var(--accent-gold); font-weight: 700; margin-bottom: 0.5rem;">98%</div>
                        <div style="color: var(--medium-gray);">Would Recommend</div>
                    </div>
                    <div>
                        <div style="font-size: 3rem; color: var(--accent-gold); font-weight: 700; margin-bottom: 0.5rem;">247</div>
                        <div style="color: var(--medium-gray);">Total Reviews</div>
                    </div>
                    <div>
                        <div style="font-size: 3rem; color: var(--accent-gold); font-weight: 700; margin-bottom: 0.5rem;">24hr</div>
                        <div style="color: var(--medium-gray);">Response Time</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="final-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Join Our Happy Customers?</h2>
                <p>Experience the same quality service that our customers rave about</p>
                <div class="cta-buttons">
                    <a href="#quote-section" class="cta-button primary large">
                        <i class="fas fa-calculator"></i>
                        <span>Get Free Estimate</span>
                        <small>15-minute response guaranteed</small>
                    </a>
                    <a href="tel:2708019780" class="cta-button secondary large">
                        <i class="fas fa-phone"></i>
                        <span>Call (270) 801-9780</span>
                        <small>Available 24/7</small>
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
    <script>
        // Add hover effects to testimonial cards
        document.addEventListener('DOMContentLoaded', function() {
            const testimonialCards = document.querySelectorAll('.testimonial-card');
            
            testimonialCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                    this.style.borderColor = 'var(--accent-gold)';
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
