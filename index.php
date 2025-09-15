<?php
$page_title = "Cyrus Wilburn - Professional Web Developer | Custom Websites That Convert";
$page_description = "Professional web developer specializing in high-converting business websites. From auto repair to cafes, I build websites that turn visitors into customers. Call (270) 801-9780 for a free consultation.";
$page_keywords = "web developer, custom websites, business websites, web design, PHP developer, responsive design, SEO optimization, maroon red design";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://cyruswilburn.dev">
    <meta property="og:image" content="https://cyruswilburn.dev/assets/images/portfolio-preview.jpg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style-new.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Cyrus Wilburn",
        "jobTitle": "Professional Web Developer",
        "description": "Custom website developer specializing in business websites",
        "telephone": "+1-270-801-9780",
        "url": "https://cyruswilburn.dev",
        "sameAs": [
            "https://github.com/cyrus2005"
        ]
    }
    </script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <span class="logo-text">Cyrus</span>
                <span class="logo-accent">Wilburn</span>
            </div>
            <ul class="nav-menu" id="navMenu">
                <li><a href="#home" class="nav-link active">Home</a></li>
                <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="nav-cta">
                <a href="tel:2708019780" class="phone-btn">
                    <i class="fas fa-phone"></i>
                    <span>(270) 801-9780</span>
                </a>
            </div>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-background">
            <div class="hero-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
            </div>
        </div>
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-star"></i>
                    <span>Professional Web Developer</span>
                </div>
                <h1 class="hero-title">
                    I Build Websites That
                    <span class="title-highlight">Drive Results</span>
                </h1>
                <p class="hero-description">
                    Custom websites for businesses that want to stand out online. From auto repair shops to cafes, I create professional, mobile-responsive websites that convert visitors into customers.
                </p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">20+</span>
                        <span class="stat-label">Websites Built</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Mobile Responsive</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">24hr</span>
                        <span class="stat-label">Response Time</span>
                    </div>
                </div>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">
                        <i class="fas fa-rocket"></i>
                        <span>Start Your Project</span>
                        <small>Free consultation</small>
                    </a>
                    <a href="tel:2708019780" class="btn btn-secondary">
                        <i class="fas fa-phone"></i>
                        <span>Call Now</span>
                        <small>(270) 801-9780</small>
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="floating-card testimonial">
                    <div class="card-header">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <p>"Cyrus built an amazing website for my business. Professional, fast, and exactly what I needed!"</p>
                        <div class="author">
                            <strong>Dennis W.</strong>
                            <span>Business Owner</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">My Work</span>
                <h2 class="section-title">Recent Projects</h2>
                <p class="section-description">Professional websites built for real businesses that drive real results</p>
            </div>
            <div class="portfolio-grid">
                <!-- Ambassadors MM -->
                <div class="portfolio-card featured">
                    <div class="card-image">
                        <div class="project-preview">
                            <i class="fas fa-motorcycle"></i>
                            <h4>Ambassadors MM</h4>
                            <p>Motorcycle Ministry</p>
                        </div>
                        <div class="card-overlay">
                            <a href="http://ambassadorsmmtx.com/" target="_blank" class="preview-btn">
                                <i class="fas fa-external-link-alt"></i>
                                <span>Visit Site</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="project-badge">Featured</div>
                        <h3>Ambassadors MM</h3>
                        <p>Motorcycle ministry website with event calendar, photo gallery, and prayer requests. Community-focused design with strong messaging.</p>
                        <div class="tech-stack">
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Gallery</span>
                            <span class="tech-tag ssl-progress">SSL In Progress</span>
                        </div>
                    </div>
                </div>

                <!-- NichePort -->
                <div class="portfolio-card">
                    <div class="card-image">
                        <div class="project-preview">
                            <i class="fas fa-car"></i>
                            <h4>NichePort</h4>
                            <p>Auto Repair</p>
                        </div>
                        <div class="card-overlay">
                            <a href="nicheport2/" target="_blank" class="preview-btn">
                                <i class="fas fa-external-link-alt"></i>
                                <span>Visit Site</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>NichePort Auto Repair</h3>
                        <p>High-converting auto repair website with online booking, service showcase, and customer testimonials.</p>
                        <div class="tech-stack">
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Responsive</span>
                            <span class="tech-tag ssl-secure">SSL Secure</span>
                        </div>
                    </div>
                </div>

                <!-- Barber Shop -->
                <div class="portfolio-card">
                    <div class="card-image">
                        <div class="project-preview">
                            <i class="fas fa-cut"></i>
                            <h4>Blade & Fade</h4>
                            <p>Barbershop</p>
                        </div>
                        <div class="card-overlay">
                            <a href="barber-shop/" target="_blank" class="preview-btn">
                                <i class="fas fa-external-link-alt"></i>
                                <span>Visit Site</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>Blade & Fade Barbers</h3>
                        <p>Modern barbershop website with appointment booking, service gallery, and customer reviews.</p>
                        <div class="tech-stack">
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Booking</span>
                            <span class="tech-tag ssl-secure">SSL Secure</span>
                        </div>
                    </div>
                </div>

                <!-- Small Cafe -->
                <div class="portfolio-card">
                    <div class="card-image">
                        <div class="project-preview">
                            <i class="fas fa-coffee"></i>
                            <h4>Brew & Bite</h4>
                            <p>Cafe</p>
                        </div>
                        <div class="card-overlay">
                            <a href="small-cafe/" target="_blank" class="preview-btn">
                                <i class="fas fa-external-link-alt"></i>
                                <span>Visit Site</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>Brew & Bite Cafe</h3>
                        <p>Cozy cafe website with menu display, customer reviews, and location information.</p>
                        <div class="tech-stack">
                            <span class="tech-tag">HTML5</span>
                            <span class="tech-tag">CSS3</span>
                            <span class="tech-tag">JavaScript</span>
                            <span class="tech-tag ssl-secure">SSL Secure</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">What I Do</span>
                <h2 class="section-title">My Services</h2>
                <p class="section-description">Complete web development solutions for your business</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Custom Web Development</h3>
                    <p>Tailored websites built from scratch to meet your specific business needs and goals.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> PHP & MySQL</li>
                        <li><i class="fas fa-check"></i> Responsive Design</li>
                        <li><i class="fas fa-check"></i> SEO Optimized</li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile-First Design</h3>
                    <p>Websites that look and work perfectly on all devices, from phones to desktops.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Mobile Responsive</li>
                        <li><i class="fas fa-check"></i> Fast Loading</li>
                        <li><i class="fas fa-check"></i> Touch Friendly</li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>SEO Optimization</h3>
                    <p>Get found on Google with proper SEO implementation and optimization techniques.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Google Ranking</li>
                        <li><i class="fas fa-check"></i> Meta Tags</li>
                        <li><i class="fas fa-check"></i> Site Speed</li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>SSL & Security</h3>
                    <p>Secure your website with SSL certificates and implement security best practices.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> SSL Certificates</li>
                        <li><i class="fas fa-check"></i> Security Headers</li>
                        <li><i class="fas fa-check"></i> Data Protection</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <span class="section-badge">About Me</span>
                    <h2 class="section-title">Professional Web Developer</h2>
                    <p class="about-description">
                        I'm Cyrus Wilburn, a professional web developer specializing in creating high-converting websites for businesses. With experience building everything from auto repair shops to cafes, I understand what makes a website successful.
                    </p>
                    <div class="about-stats">
                        <div class="stat-item">
                            <span class="stat-number">20+</span>
                            <span class="stat-label">Projects Completed</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Client Satisfaction</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24hr</span>
                            <span class="stat-label">Response Time</span>
                        </div>
                    </div>
                    <div class="about-cta">
                        <a href="#contact" class="btn btn-primary">
                            <i class="fas fa-phone"></i>
                            <span>Let's Work Together</span>
                        </a>
                    </div>
                </div>
                <div class="about-image">
                    <div class="image-placeholder">
                        <i class="fas fa-user-tie"></i>
                        <p>Cyrus Wilburn</p>
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
                    <span class="section-badge">Get In Touch</span>
                    <h2 class="section-title">Ready to Start Your Project?</h2>
                    <p class="contact-description">
                        Let's discuss your website needs and create something amazing together. I respond to all inquiries within 24 hours.
                    </p>
                    <div class="contact-methods">
                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="method-content">
                                <h4>Call Me</h4>
                                <a href="tel:2708019780">(270) 801-9780</a>
                            </div>
                        </div>
                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="method-content">
                                <h4>Email Me</h4>
                                <a href="mailto:cyrus@cyruswilburn.dev">cyrus@cyruswilburn.dev</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="project">Project Type</label>
                            <select id="project" name="project">
                                <option value="">Select a service</option>
                                <option value="new-website">New Website</option>
                                <option value="redesign">Website Redesign</option>
                                <option value="ecommerce">Online Store</option>
                                <option value="maintenance">Website Maintenance</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Project Details *</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tell me about your project, goals, and any specific requirements..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary large">
                            <i class="fas fa-paper-plane"></i>
                            <span>Send Message</span>
                            <small>Free quote within 24 hours</small>
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
                <div class="footer-section">
                    <div class="footer-logo">
                        <span class="logo-text">Cyrus</span>
                        <span class="logo-accent">Wilburn</span>
                    </div>
                    <p>Professional web developer creating custom websites that convert visitors into customers.</p>
                </div>
                <div class="footer-section">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#services">Custom Web Development</a></li>
                        <li><a href="#services">Mobile-First Design</a></li>
                        <li><a href="#services">SEO Optimization</a></li>
                        <li><a href="#services">SSL & Security</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact</h4>
                    <div class="footer-contact">
                        <p><i class="fas fa-phone"></i> (270) 801-9780</p>
                        <p><i class="fas fa-envelope"></i> cyrus@cyruswilburn.dev</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Cyrus Wilburn. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="assets/js/script-new.js"></script>
</body>
</html>
