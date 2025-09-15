<?php
require_once 'includes/config.php';
$page_title = "Our Work Gallery | Generic Collision Shop";
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        .gallery-page {
            padding-top: 100px;
        }
        .gallery-hero {
            background: linear-gradient(135deg, var(--primary-navy) 0%, var(--secondary-blue) 100%);
            color: var(--white);
            padding: 60px 0;
            text-align: center;
        }
        .gallery-filter {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin: 2rem 0;
            flex-wrap: wrap;
        }
        .filter-btn {
            background: var(--white);
            color: var(--primary-navy);
            border: 2px solid var(--primary-navy);
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .filter-btn:hover,
        .filter-btn.active {
            background: var(--primary-navy);
            color: var(--white);
        }
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        .gallery-item {
            position: relative;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: transform 0.3s ease;
            cursor: pointer;
        }
        .gallery-item:hover {
            transform: scale(1.02);
        }
        .gallery-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, var(--primary-navy), var(--accent-blue));
            opacity: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.3s ease;
            color: var(--white);
            text-align: center;
            padding: 1rem;
        }
        .gallery-item:hover .gallery-overlay {
            opacity: 0.9;
        }
        .gallery-category {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background: var(--accent-blue);
            color: var(--white);
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.8rem;
            font-weight: 600;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 10000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
        }
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            max-height: 80%;
            object-fit: contain;
            margin-top: 5%;
        }
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: var(--white);
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }
        .close:hover {
            color: var(--accent-blue);
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
                    <li><a href="gallery.php" class="active">Gallery</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="careers.php">Careers</a></li>
                </ul>
            </nav>
            <a href="quote.php" class="cta-button">Get Free Quote</a>
            <button class="mobile-menu-toggle" id="mobileMenuToggle">☰</button>
        </div>
    </header>

    <!-- Gallery Hero -->
    <section class="hero gallery-hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge">
                    <span>📸 Quality Work Gallery</span>
                </div>
                <h1>See Our <span class="highlight">Amazing Work</span></h1>
                <p class="hero-subtitle">Browse through our <strong>before & after photos</strong>, <strong>repair transformations</strong>, and <strong>customer success stories</strong>.</p>
                
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Cars Restored</span>
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
                    <a href="#gallery-content" class="cta-button primary">
                        <span>View Gallery</span>
                        <small>Before & after photos</small>
                    </a>
                    <a href="tel:2708019780" class="cta-button secondary">
                        <span>Get Your Quote</span>
                        <small>(270) 801-9780</small>
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="gallery-preview">
                    <div class="gallery-preview-item">
                        <img src="media/workingondamagedside.jpg" alt="Before" class="preview-image">
                        <div class="preview-label">Before</div>
                    </div>
                    <div class="gallery-preview-item">
                        <img src="media/repaintingdoor.jpg" alt="After" class="preview-image">
                        <div class="preview-label">After</div>
                    </div>
                    <div class="gallery-preview-item">
                        <img src="media/gallery-welding-frame-white-car.jpeg" alt="Process" class="preview-image">
                        <div class="preview-label">Process</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-page">
        <div class="container">
            <div class="gallery-filter">
                <button class="filter-btn active" data-filter="all">All Work</button>
                <button class="filter-btn" data-filter="collision">Collision Repair</button>
                <button class="filter-btn" data-filter="paint">Paint Work</button>
                <button class="filter-btn" data-filter="body">Body Work</button>
                <button class="filter-btn" data-filter="frame">Frame Repair</button>
                <button class="filter-btn" data-filter="detailing">Detailing</button>
            </div>
            
            <div class="gallery-grid" id="galleryGrid">
                <!-- Collision Repair -->
                <div class="gallery-item" data-category="collision">
                    <img src="media/workingondamagedside.jpg" alt="Working on Damaged Side" class="gallery-image">
                    <div class="gallery-category">Collision Repair</div>
                    <div class="gallery-overlay">
                        <div>
                            <h4>Side Damage Repair</h4>
                            <p>Professional repair of side impact damage with precision and care</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="collision">
                    <img src="media/installing new fender.jpg" alt="Installing New Fender" class="gallery-image">
                    <div class="gallery-category">Collision Repair</div>
                    <div class="gallery-overlay">
                        <div>
                            <h4>Panel Replacement</h4>
                            <p>Expert installation of new body panels for perfect fit and finish</p>
                        </div>
                    </div>
                </div>
                
                <!-- Paint Work -->
                <div class="gallery-item" data-category="paint">
                    <img src="media/repaintingdoor.jpg" alt="Repainting Door" class="gallery-image">
                    <div class="gallery-category">Paint Work</div>
                    <div class="gallery-overlay">
                        <div>
                            <h4>Color Matching</h4>
                            <p>Precise color matching and paint application for seamless repairs</p>
                        </div>
                    </div>
                </div>
                
                <!-- Body Work -->
                <div class="gallery-item" data-category="body">
                    <img src="media/pullingdentout.jpg" alt="Pulling Dent Out" class="gallery-image">
                    <div class="gallery-category">Body Work</div>
                    <div class="gallery-overlay">
                        <div>
                            <h4>Dent Removal</h4>
                            <p>Professional dent removal using traditional and paintless techniques</p>
                        </div>
                    </div>
                </div>
                
                <!-- Frame Repair -->
                <div class="gallery-item" data-category="frame">
                    <img src="media/gallery-welding-frame-white-car.jpeg" alt="Frame Repair" class="gallery-image">
                    <div class="gallery-category">Frame Repair</div>
                    <div class="gallery-overlay">
                        <div>
                            <h4>Frame Straightening</h4>
                            <p>Precision frame repair using computerized measuring systems</p>
                        </div>
                    </div>
                </div>
                
                <!-- Detailing -->
                <div class="gallery-item" data-category="detailing">
                    <img src="media/waxingacar.jpg" alt="Waxing a Car" class="gallery-image">
                    <div class="gallery-category">Detailing</div>
                    <div class="gallery-overlay">
                        <div>
                            <h4>Complete Detailing</h4>
                            <p>Interior and exterior detailing to restore showroom condition</p>
                        </div>
                    </div>
                </div>
                
                <!-- Glass Work -->
                <div class="gallery-item" data-category="collision">
                    <img src="media/glassreplacement.jpg" alt="Glass Replacement" class="gallery-image">
                    <div class="gallery-category">Glass Work</div>
                    <div class="gallery-overlay">
                        <div>
                            <h4>Glass Replacement</h4>
                            <p>Professional windshield and window replacement services</p>
                        </div>
                    </div>
                </div>
                
                <!-- Glass Repair -->
                <div class="gallery-item" data-category="collision">
                    <img src="media/glassrepair.jpg" alt="Glass Repair" class="gallery-image">
                    <div class="gallery-category">Glass Work</div>
                    <div class="gallery-overlay">
                        <div>
                            <h4>Glass Repair</h4>
                            <p>Expert glass repair and restoration services</p>
                        </div>
                    </div>
                </div>
                
                <!-- Professional Service -->
                <div class="gallery-item" data-category="collision">
                    <img src="media/servicetechinshop.jpg" alt="Service Technician" class="gallery-image">
                    <div class="gallery-category">Professional Service</div>
                    <div class="gallery-overlay">
                        <div>
                            <h4>Expert Technicians</h4>
                            <p>Our certified professionals working with state-of-the-art equipment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="contact" style="padding: 80px 0;">
        <div class="container">
            <div class="text-center">
                <h2>Ready to Restore Your Vehicle?</h2>
                <p>Let us show you the same quality work in our gallery</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 2rem;">
                    <a href="quote.php" class="cta-button">Get Free Estimate</a>
                    <a href="tel:2708019780" class="cta-button" style="background: var(--secondary-blue);">Call (270) 801-9780</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal for image viewing -->
    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>

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
        
        // Gallery filtering and modal functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            const closeBtn = document.querySelector('.close');
            
            // Filter functionality
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const filter = this.getAttribute('data-filter');
                    
                    // Update active button
                    filterBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Filter gallery items
                    galleryItems.forEach(item => {
                        if (filter === 'all' || item.getAttribute('data-category') === filter) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
            
            // Modal functionality
            galleryItems.forEach(item => {
                item.addEventListener('click', function() {
                    const img = this.querySelector('.gallery-image');
                    modal.style.display = 'block';
                    modalImg.src = img.src;
                    modalImg.alt = img.alt;
                });
            });
            
            // Close modal
            closeBtn.addEventListener('click', function() {
                modal.style.display = 'none';
            });
            
            // Close modal when clicking outside
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.style.display = 'none';
                }
            });
            
            // Close modal with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && modal.style.display === 'block') {
                    modal.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
