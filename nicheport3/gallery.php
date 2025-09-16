<?php
require_once 'includes/config.php';
$page_title = get_page_title('gallery');
$page_description = get_meta_description('gallery');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="collision repair gallery, before after photos, auto body work, collision repair work">
    
    <link rel="icon" type="image/png" href="media/logo.png">
    <link rel="canonical" href="<?php echo SITE_URL; ?>/gallery.php">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <!-- URGENCY BANNER -->
    <div class="urgency-banner">
        <div class="urgency-content">
            <div class="urgency-icon">
                <i class="fas fa-images"></i>
            </div>
            <span class="urgency-text">SEE OUR WORK • BEFORE & AFTER GALLERY • 5,000+ CARS REPAIRED</span>
            <div class="scarcity-indicator">Quality you can see!</div>
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
                    <li><a href="gallery.php" class="active">Gallery</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="reviews.php">Reviews</a></li>
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
                    <i class="fas fa-images"></i>
                    <span>Before & After Gallery</span>
                </div>
                <h1>See Our <span class="highlight">Quality Work</span></h1>
                <p class="hero-subtitle">Browse our gallery of <strong>before and after photos</strong> showcasing our <strong>professional collision repair work</strong> and <strong>attention to detail</strong>.</p>
                
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">5,000+</span>
                        <span class="stat-label">Cars Repaired</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Customer Satisfaction</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">25+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                </div>
                
                <div class="hero-buttons">
                    <a href="#gallery-content" class="cta-button primary large">
                        <i class="fas fa-images"></i>
                        <span>View Gallery</span>
                        <small>See our quality work</small>
                    </a>
                    <a href="tel:<?php echo SITE_PHONE_CLEAN; ?>" class="cta-button accent large">
                        <i class="fas fa-phone"></i>
                        <span>Call <?php echo SITE_PHONE; ?></span>
                        <small>Get your free quote</small>
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-image-container">
                    <img src="media/workingondamagedside.jpg" alt="Professional collision repair work in progress" class="hero-main-image">
                    <div class="floating-card">
                        <div class="card-content">
                            <div class="card-header">
                                <i class="fas fa-camera"></i>
                                <span>Quality Work</span>
                            </div>
                            <p>"Every repair is documented with before and after photos to ensure quality."</p>
                            <div class="card-rating">
                                <i class="fas fa-star"></i>
                                <span>5.0 Rating</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY CONTENT -->
    <section id="gallery-content" class="section">
        <div class="container">
            <div class="section-header">
                <h2>Our Work Gallery</h2>
                <p>See the quality of our collision repair work through our before and after photos</p>
            </div>
            
            <!-- Gallery Filter -->
            <div class="gallery-filter" style="display: flex; justify-content: center; gap: 1rem; margin-bottom: 3rem; flex-wrap: wrap;">
                <button class="filter-btn active" data-filter="all" style="background: var(--safety-orange); color: var(--white); padding: 0.75rem 1.5rem; border: none; border-radius: 2rem; font-weight: 600; cursor: pointer; transition: var(--transition-normal);">All Work</button>
                <button class="filter-btn" data-filter="collision" style="background: var(--light-gray); color: var(--charcoal); padding: 0.75rem 1.5rem; border: none; border-radius: 2rem; font-weight: 600; cursor: pointer; transition: var(--transition-normal);">Collision Repair</button>
                <button class="filter-btn" data-filter="paint" style="background: var(--light-gray); color: var(--charcoal); padding: 0.75rem 1.5rem; border: none; border-radius: 2rem; font-weight: 600; cursor: pointer; transition: var(--transition-normal);">Paint Work</button>
                <button class="filter-btn" data-filter="dents" style="background: var(--light-gray); color: var(--charcoal); padding: 0.75rem 1.5rem; border: none; border-radius: 2rem; font-weight: 600; cursor: pointer; transition: var(--transition-normal);">Dent Removal</button>
                <button class="filter-btn" data-filter="frame" style="background: var(--light-gray); color: var(--charcoal); padding: 0.75rem 1.5rem; border: none; border-radius: 2rem; font-weight: 600; cursor: pointer; transition: var(--transition-normal);">Frame Work</button>
            </div>
            
            <!-- Gallery Grid -->
            <div class="gallery-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
                <?php
                $gallery_items = [
                    ['image' => 'workingondamagedside.jpg', 'title' => 'Side Impact Collision Repair', 'category' => 'collision', 'description' => 'Complete side impact repair with frame straightening and paint work'],
                    ['image' => 'repaintingdoor.jpg', 'title' => 'Door Paint & Body Work', 'category' => 'paint', 'description' => 'Professional paint matching and door repair'],
                    ['image' => 'pullingdentout.jpg', 'title' => 'Paintless Dent Removal', 'category' => 'dents', 'description' => 'Hail damage repair using paintless dent removal techniques'],
                    ['image' => 'gallery-welding-frame-white-car.jpeg', 'title' => 'Frame Straightening', 'category' => 'frame', 'description' => 'Computerized frame straightening and structural repair'],
                    ['image' => 'glassreplacement.jpg', 'title' => 'Windshield Replacement', 'category' => 'collision', 'description' => 'OEM quality glass replacement with professional installation'],
                    ['image' => 'waxingacar.jpg', 'title' => 'Complete Detailing', 'category' => 'paint', 'description' => 'Full vehicle detailing after collision repair'],
                    ['image' => 'lffenderdamage.jpg', 'title' => 'Fender Repair', 'category' => 'collision', 'description' => 'Fender damage repair with color matching'],
                    ['image' => 'installing new fender.jpg', 'title' => 'Fender Replacement', 'category' => 'collision', 'description' => 'Complete fender replacement and paint work'],
                    ['image' => 'servicetechinshop.jpg', 'title' => 'Professional Service', 'category' => 'collision', 'description' => 'Our certified technicians at work']
                ];
                
                foreach ($gallery_items as $item): ?>
                <div class="gallery-item" data-category="<?php echo $item['category']; ?>" style="background: var(--white); border-radius: 1rem; overflow: hidden; box-shadow: var(--shadow); transition: all 0.3s ease; cursor: pointer;">
                    <div class="gallery-image" style="height: 250px; overflow: hidden; position: relative;">
                        <img src="media/<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>" style="width: 100%; height: 100%; object-fit: cover; transition: var(--transition-slow);">
                        <div class="gallery-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(44, 62, 80, 0.8); display: flex; align-items: center; justify-content: center; opacity: 0; transition: var(--transition-normal);">
                            <i class="fas fa-search-plus" style="color: var(--white); font-size: 2rem;"></i>
                        </div>
                    </div>
                    <div class="gallery-content" style="padding: 1.5rem;">
                        <h3 style="color: var(--steel-blue); margin-bottom: 0.5rem; font-size: 1.1rem;"><?php echo $item['title']; ?></h3>
                        <p style="color: var(--medium-gray); font-size: 0.9rem; margin: 0;"><?php echo $item['description']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- QUOTE SECTION -->
    <section id="quote-section" class="quote-section">
        <div class="quote-content">
            <div class="quote-text">
                <h2>Ready to See Your Car Like This?</h2>
                <p>Get your free quote today and experience the same quality work you see in our gallery. We'll restore your vehicle to its pre-accident condition.</p>
                
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
        // Gallery filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Update active button
                    filterBtns.forEach(b => {
                        b.style.background = 'var(--light-gray)';
                        b.style.color = 'var(--charcoal)';
                    });
                    btn.style.background = 'var(--safety-orange)';
                    btn.style.color = 'var(--white)';
                    
                    // Filter items
                    const filter = btn.dataset.filter;
                    galleryItems.forEach(item => {
                        if (filter === 'all' || item.dataset.category === filter) {
                            item.style.display = 'block';
                            item.style.animation = 'fadeIn 0.5s ease-in';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
            
            // Gallery item hover effects
            galleryItems.forEach(item => {
                const overlay = item.querySelector('.gallery-overlay');
                const image = item.querySelector('.gallery-image img');
                
                item.addEventListener('mouseenter', () => {
                    overlay.style.opacity = '1';
                    image.style.transform = 'scale(1.1)';
                    item.style.transform = 'translateY(-5px)';
                    item.style.boxShadow = 'var(--shadow-xl)';
                });
                
                item.addEventListener('mouseleave', () => {
                    overlay.style.opacity = '0';
                    image.style.transform = 'scale(1)';
                    item.style.transform = 'translateY(0)';
                    item.style.boxShadow = 'var(--shadow)';
                });
            });
        });
    </script>
</body>
</html>
