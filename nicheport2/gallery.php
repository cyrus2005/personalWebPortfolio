<?php
require_once 'includes/config.php';
$page_title = "Before & After Gallery | Elite Collision Repair";
$page_description = "View our portfolio of collision repair work, before and after photos, and see the quality of our professional auto body repair services.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="collision repair gallery, auto body work photos, before after repair, collision shop portfolio">
    
    <link rel="icon" type="image/png" href="media/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                    <li><a href="gallery.php" class="active">Gallery</a></li>
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
                        <i class="fas fa-images"></i>
                        <span>Quality Work Gallery</span>
                    </div>
                    <h1>See Our <span class="highlight">Amazing Work</span></h1>
                    <p class="hero-subtitle">Browse through our <strong>before & after photos</strong>, <strong>repair transformations</strong>, and <strong>customer success stories</strong>.</p>
                    
                    <div class="hero-buttons">
                        <a href="#gallery-content" class="cta-button primary large">
                            <i class="fas fa-images"></i>
                            <span>View Gallery</span>
                            <small>Before & after photos</small>
                        </a>
                        <a href="tel:2708019780" class="cta-button secondary large">
                            <i class="fas fa-phone"></i>
                            <span>Get Your Quote</span>
                            <small>(270) 801-9780</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Content -->
    <section id="gallery-content" class="services" style="padding: 5rem 0;">
        <div class="container">
            <div class="section-header">
                <h2>Our Work Gallery</h2>
                <p>See the quality of our collision repair work through these before and after transformations</p>
            </div>
            
            <div class="gallery-filter" style="display: flex; justify-content: center; gap: 1rem; margin: 2rem 0; flex-wrap: wrap;">
                <button class="filter-btn active" data-filter="all" style="background: var(--white); color: var(--primary-green); border: 2px solid var(--primary-green); padding: 0.5rem 1rem; border-radius: 0.5rem; cursor: pointer; transition: all 0.3s ease;">All Work</button>
                <button class="filter-btn" data-filter="collision" style="background: var(--white); color: var(--primary-green); border: 2px solid var(--primary-green); padding: 0.5rem 1rem; border-radius: 0.5rem; cursor: pointer; transition: all 0.3s ease;">Collision Repair</button>
                <button class="filter-btn" data-filter="paint" style="background: var(--white); color: var(--primary-green); border: 2px solid var(--primary-green); padding: 0.5rem 1rem; border-radius: 0.5rem; cursor: pointer; transition: all 0.3s ease;">Paint Work</button>
                <button class="filter-btn" data-filter="body" style="background: var(--white); color: var(--primary-green); border: 2px solid var(--primary-green); padding: 0.5rem 1rem; border-radius: 0.5rem; cursor: pointer; transition: all 0.3s ease;">Body Work</button>
                <button class="filter-btn" data-filter="frame" style="background: var(--white); color: var(--primary-green); border: 2px solid var(--primary-green); padding: 0.5rem 1rem; border-radius: 0.5rem; cursor: pointer; transition: all 0.3s ease;">Frame Repair</button>
            </div>
            
            <div class="gallery-grid" id="galleryGrid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
                <!-- Collision Repair -->
                <div class="gallery-item" data-category="collision" style="position: relative; border-radius: 0.75rem; overflow: hidden; box-shadow: var(--shadow); transition: transform 0.3s ease; cursor: pointer;">
                    <img src="media/workingondamagedside.jpg" alt="Working on Damaged Side" class="gallery-image" style="width: 100%; height: 250px; object-fit: cover;">
                    <div class="gallery-category" style="position: absolute; top: 1rem; left: 1rem; background: var(--accent-gold); color: var(--white); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.8rem; font-weight: 600;">Collision Repair</div>
                    <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, var(--primary-green), var(--accent-gold)); opacity: 0; display: flex; align-items: center; justify-content: center; transition: opacity 0.3s ease; color: var(--white); text-align: center; padding: 1rem;">
                        <div>
                            <h4>Side Damage Repair</h4>
                            <p>Professional repair of side impact damage with precision and care</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="collision" style="position: relative; border-radius: 0.75rem; overflow: hidden; box-shadow: var(--shadow); transition: transform 0.3s ease; cursor: pointer;">
                    <img src="media/installing new fender.jpg" alt="Installing New Fender" class="gallery-image" style="width: 100%; height: 250px; object-fit: cover;">
                    <div class="gallery-category" style="position: absolute; top: 1rem; left: 1rem; background: var(--accent-gold); color: var(--white); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.8rem; font-weight: 600;">Collision Repair</div>
                    <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, var(--primary-green), var(--accent-gold)); opacity: 0; display: flex; align-items: center; justify-content: center; transition: opacity 0.3s ease; color: var(--white); text-align: center; padding: 1rem;">
                        <div>
                            <h4>Panel Replacement</h4>
                            <p>Expert installation of new body panels for perfect fit and finish</p>
                        </div>
                    </div>
                </div>
                
                <!-- Paint Work -->
                <div class="gallery-item" data-category="paint" style="position: relative; border-radius: 0.75rem; overflow: hidden; box-shadow: var(--shadow); transition: transform 0.3s ease; cursor: pointer;">
                    <img src="media/repaintingdoor.jpg" alt="Repainting Door" class="gallery-image" style="width: 100%; height: 250px; object-fit: cover;">
                    <div class="gallery-category" style="position: absolute; top: 1rem; left: 1rem; background: var(--accent-gold); color: var(--white); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.8rem; font-weight: 600;">Paint Work</div>
                    <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, var(--primary-green), var(--accent-gold)); opacity: 0; display: flex; align-items: center; justify-content: center; transition: opacity 0.3s ease; color: var(--white); text-align: center; padding: 1rem;">
                        <div>
                            <h4>Color Matching</h4>
                            <p>Precise color matching and paint application for seamless repairs</p>
                        </div>
                    </div>
                </div>
                
                <!-- Body Work -->
                <div class="gallery-item" data-category="body" style="position: relative; border-radius: 0.75rem; overflow: hidden; box-shadow: var(--shadow); transition: transform 0.3s ease; cursor: pointer;">
                    <img src="media/pullingdentout.jpg" alt="Pulling Dent Out" class="gallery-image" style="width: 100%; height: 250px; object-fit: cover;">
                    <div class="gallery-category" style="position: absolute; top: 1rem; left: 1rem; background: var(--accent-gold); color: var(--white); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.8rem; font-weight: 600;">Body Work</div>
                    <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, var(--primary-green), var(--accent-gold)); opacity: 0; display: flex; align-items: center; justify-content: center; transition: opacity 0.3s ease; color: var(--white); text-align: center; padding: 1rem;">
                        <div>
                            <h4>Dent Removal</h4>
                            <p>Professional dent removal using traditional and paintless techniques</p>
                        </div>
                    </div>
                </div>
                
                <!-- Frame Repair -->
                <div class="gallery-item" data-category="frame" style="position: relative; border-radius: 0.75rem; overflow: hidden; box-shadow: var(--shadow); transition: transform 0.3s ease; cursor: pointer;">
                    <img src="media/gallery-welding-frame-white-car.jpeg" alt="Frame Repair" class="gallery-image" style="width: 100%; height: 250px; object-fit: cover;">
                    <div class="gallery-category" style="position: absolute; top: 1rem; left: 1rem; background: var(--accent-gold); color: var(--white); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.8rem; font-weight: 600;">Frame Repair</div>
                    <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, var(--primary-green), var(--accent-gold)); opacity: 0; display: flex; align-items: center; justify-content: center; transition: opacity 0.3s ease; color: var(--white); text-align: center; padding: 1rem;">
                        <div>
                            <h4>Frame Straightening</h4>
                            <p>Precision frame repair using computerized measuring systems</p>
                        </div>
                    </div>
                </div>
                
                <!-- Detailing -->
                <div class="gallery-item" data-category="body" style="position: relative; border-radius: 0.75rem; overflow: hidden; box-shadow: var(--shadow); transition: transform 0.3s ease; cursor: pointer;">
                    <img src="media/waxingacar.jpg" alt="Waxing a Car" class="gallery-image" style="width: 100%; height: 250px; object-fit: cover;">
                    <div class="gallery-category" style="position: absolute; top: 1rem; left: 1rem; background: var(--accent-gold); color: var(--white); padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.8rem; font-weight: 600;">Detailing</div>
                    <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, var(--primary-green), var(--accent-gold)); opacity: 0; display: flex; align-items: center; justify-content: center; transition: opacity 0.3s ease; color: var(--white); text-align: center; padding: 1rem;">
                        <div>
                            <h4>Complete Detailing</h4>
                            <p>Interior and exterior detailing to restore showroom condition</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="final-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Restore Your Vehicle?</h2>
                <p>Let us show you the same quality work in our gallery</p>
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

    <!-- Modal for image viewing -->
    <div id="imageModal" class="modal" style="display: none; position: fixed; z-index: 10000; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.9);">
        <span class="close" style="position: absolute; top: 15px; right: 35px; color: var(--white); font-size: 40px; font-weight: bold; cursor: pointer;">&times;</span>
        <img class="modal-content" id="modalImage" style="margin: auto; display: block; width: 80%; max-width: 700px; max-height: 80%; object-fit: contain; margin-top: 5%;">
    </div>

    <!-- JavaScript -->
    <script src="js/main.js"></script>
    <script>
        // Gallery hover effects
        document.addEventListener('DOMContentLoaded', function() {
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            galleryItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.02)';
                    const overlay = this.querySelector('.gallery-overlay');
                    if (overlay) {
                        overlay.style.opacity = '0.9';
                    }
                });
                
                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                    const overlay = this.querySelector('.gallery-overlay');
                    if (overlay) {
                        overlay.style.opacity = '0';
                    }
                });
            });
        });
    </script>
</body>
</html>
