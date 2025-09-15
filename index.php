<?php
$page_title = "Cyrus Wilburn - Professional Web Developer | Custom Websites for Any Business";
$page_description = "Professional web developer specializing in custom websites for businesses. From auto repair shops to cafes, I create high-converting websites that drive results. Call (270) 801-9780 for a free consultation.";
$page_keywords = "web developer, custom websites, business websites, web design, PHP developer, responsive design, SEO optimization";
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
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
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
            "https://linkedin.com/in/cyruswilburn",
            "https://github.com/cyruswilburn"
        ]
    }
    </script>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="nav-container">
            <a href="index.php" class="logo">
                <i class="fas fa-code"></i>
                <span class="logo-text">Cyrus Wilburn</span>
            </a>
            <nav>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="header-cta">
                <a href="tel:2708019780" class="phone-cta">
                    <i class="fas fa-phone"></i>
                    <span>(270) 801-9780</span>
                </a>
                <a href="#contact" class="cta-button primary">
                    <span>Get Quote</span>
                    <small>Free consultation</small>
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
    <section id="home" class="hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge">
                    <i class="fas fa-star"></i>
                    <span>Professional Web Developer</span>
                </div>
                <h1>I Build Websites That <span class="highlight">Convert Visitors Into Customers</span></h1>
                <p class="hero-subtitle">Custom websites for businesses that want to stand out online. From auto repair shops to cafes, I create professional, mobile-responsive websites that drive results.</p>
                
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">15+</span>
                        <span class="stat-label">Websites Built</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Mobile Responsive</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">24hr</span>
                        <span class="stat-label">Response Time</span>
                    </div>
                </div>
                
                <div class="hero-buttons">
                    <a href="#contact" class="cta-button primary large">
                        <i class="fas fa-rocket"></i>
                        <span>Start Your Project</span>
                        <small>Free consultation • No obligation</small>
                    </a>
                    <a href="tel:2708019780" class="cta-button secondary large">
                        <i class="fas fa-phone"></i>
                        <span>Call (270) 801-9780</span>
                        <small>Available now</small>
                    </a>
                </div>
                
                <div class="hero-trust">
                    <div class="trust-item">
                        <i class="fas fa-mobile-alt"></i>
                        <span>Mobile-First Design</span>
                    </div>
                    <div class="trust-item">
                        <i class="fas fa-search"></i>
                        <span>SEO Optimized</span>
                    </div>
                    <div class="trust-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Secure & Fast</span>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-image-container">
                    <div class="floating-device">
                        <div class="device-screen">
                            <div class="screen-content">
                                <div class="website-preview">
                                    <div class="preview-header">
                                        <div class="preview-dots">
                                            <span></span><span></span><span></span>
                                        </div>
                                    </div>
                                    <div class="preview-body">
                                        <div class="preview-nav"></div>
                                        <div class="preview-hero"></div>
                                        <div class="preview-content">
                                            <div class="preview-card"></div>
                                            <div class="preview-card"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <strong>Sarah M.</strong>
                                <span>Business Owner</span>
                            </div>
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
                <h2>My Recent Work</h2>
                <p>Professional websites built for real businesses that drive real results</p>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio-item featured">
                    <div class="portfolio-image">
                        <div class="website-preview-frame">
                            <div class="preview-header">
                                <div class="preview-dots">
                                    <span></span><span></span><span></span>
                                </div>
                                <div class="preview-url">nicheport2/</div>
                            </div>
                            <iframe src="nicheport2/" class="preview-iframe" loading="lazy" title="NichePort Auto Repair Website Preview"></iframe>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="nicheport2/" target="_blank" class="portfolio-link">
                                    <i class="fas fa-external-link-alt"></i>
                                    <span>View Live Site</span>
                                </a>
                                <a href="#contact" class="portfolio-link">
                                    <i class="fas fa-info-circle"></i>
                                    <span>Get Similar Site</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <div class="portfolio-badge">Featured Project</div>
                        <h3>NichePort - Auto Repair</h3>
                        <p>High-converting auto repair website with online booking, service showcase, and customer testimonials. Features include quote forms, gallery, and mobile optimization.</p>
                        <div class="portfolio-tech">
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Responsive</span>
                            <span class="tech-tag">SEO</span>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <div class="website-preview-frame">
                            <div class="preview-header">
                                <div class="preview-dots">
                                    <span></span><span></span><span></span>
                                </div>
                                <div class="preview-url">barber-shop/</div>
                            </div>
                            <iframe src="barber-shop/" class="preview-iframe" loading="lazy" title="Blade & Fade Barbers Website Preview"></iframe>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="barber-shop/" target="_blank" class="portfolio-link">
                                    <i class="fas fa-external-link-alt"></i>
                                    <span>View Live Site</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>Blade & Fade Barbers</h3>
                        <p>Modern barbershop website with appointment booking, service gallery, and customer reviews. Clean design with strong call-to-actions.</p>
                        <div class="portfolio-tech">
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Booking System</span>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <div class="website-preview-frame">
                            <div class="preview-header">
                                <div class="preview-dots">
                                    <span></span><span></span><span></span>
                                </div>
                                <div class="preview-url">small-cafe/</div>
                            </div>
                            <iframe src="small-cafe/" class="preview-iframe" loading="lazy" title="Brew & Bite Cafe Website Preview"></iframe>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="small-cafe/" target="_blank" class="portfolio-link">
                                    <i class="fas fa-external-link-alt"></i>
                                    <span>View Live Site</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>Brew & Bite Cafe</h3>
                        <p>Cozy cafe website with menu display, customer reviews, and location information. Warm design that reflects the cafe's atmosphere.</p>
                        <div class="portfolio-tech">
                            <span class="tech-tag">HTML5</span>
                            <span class="tech-tag">CSS3</span>
                            <span class="tech-tag">JavaScript</span>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <div class="website-preview-frame">
                            <div class="preview-header">
                                <div class="preview-dots">
                                    <span></span><span></span><span></span>
                                </div>
                                <div class="preview-url">ambassadorsmmtx.com</div>
                            </div>
                            <iframe src="http://ambassadorsmmtx.com/" class="preview-iframe" loading="lazy" title="Ambassadors Motorcycle Ministry Website Preview"></iframe>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-links">
                                <a href="http://ambassadorsmmtx.com/" target="_blank" class="portfolio-link">
                                    <i class="fas fa-external-link-alt"></i>
                                    <span>View Live Site</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>Ambassadors MM</h3>
                        <p>Motorcycle ministry website with event calendar, photo gallery, and prayer requests. Community-focused design with strong messaging.</p>
                        <div class="portfolio-tech">
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Gallery System</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="portfolio-cta">
                <h3>Need a Website Like These?</h3>
                <p>I can build a custom website for your business that converts visitors into customers</p>
                <a href="#contact" class="cta-button primary large">
                    <i class="fas fa-rocket"></i>
                    <span>Start Your Project</span>
                    <small>Free consultation • Custom quote</small>
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2>What I Can Build For You</h2>
                <p>Professional web development services tailored to your business needs</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Custom Business Websites</h3>
                    <p>Professional websites designed specifically for your business type. From auto repair shops to restaurants, I understand what converts in your industry.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Industry-specific design</li>
                        <li><i class="fas fa-check"></i> Mobile-responsive layout</li>
                        <li><i class="fas fa-check"></i> SEO optimization</li>
                        <li><i class="fas fa-check"></i> Contact forms</li>
                    </ul>
                </div>
                
                <div class="service-card featured">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>E-commerce Solutions</h3>
                    <p>Online stores that sell products and services. Complete with payment processing, inventory management, and customer accounts.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Product catalogs</li>
                        <li><i class="fas fa-check"></i> Payment processing</li>
                        <li><i class="fas fa-check"></i> Order management</li>
                        <li><i class="fas fa-check"></i> Customer accounts</li>
                    </ul>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Booking & Scheduling</h3>
                    <p>Online appointment booking systems for service-based businesses. Let customers book appointments 24/7 from your website.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Online booking forms</li>
                        <li><i class="fas fa-check"></i> Calendar integration</li>
                        <li><i class="fas fa-check"></i> Email confirmations</li>
                        <li><i class="fas fa-check"></i> Admin dashboard</li>
                    </ul>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>SEO & Performance</h3>
                    <p>Optimize your website to rank higher in Google search results and load faster for better user experience.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Google ranking optimization</li>
                        <li><i class="fas fa-check"></i> Fast loading speeds</li>
                        <li><i class="fas fa-check"></i> Mobile optimization</li>
                        <li><i class="fas fa-check"></i> Analytics setup</li>
                    </ul>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Website Maintenance</h3>
                    <p>Keep your website updated, secure, and running smoothly. Regular backups, security updates, and content changes.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Regular updates</li>
                        <li><i class="fas fa-check"></i> Security monitoring</li>
                        <li><i class="fas fa-check"></i> Content updates</li>
                        <li><i class="fas fa-check"></i> Backup management</li>
                    </ul>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile Optimization</h3>
                    <p>Ensure your website looks and works perfectly on all devices. Most customers browse on mobile - don't lose them!</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Mobile-first design</li>
                        <li><i class="fas fa-check"></i> Touch-friendly navigation</li>
                        <li><i class="fas fa-check"></i> Fast mobile loading</li>
                        <li><i class="fas fa-check"></i> Cross-device testing</li>
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
                    <h2>About Cyrus Wilburn</h2>
                    <p class="lead">I'm a professional web developer who specializes in creating websites that actually work for businesses.</p>
                    <p>With years of experience building websites for various industries, I understand what makes a website convert visitors into customers. I don't just build pretty websites - I build websites that drive results.</p>
                    <p>My approach is simple: understand your business, identify your goals, and create a website that helps you achieve them. Whether you need a simple brochure site or a complex e-commerce platform, I can deliver exactly what you need.</p>
                    
                    <div class="about-stats">
                        <div class="stat">
                            <span class="stat-number">15+</span>
                            <span class="stat-label">Websites Built</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Client Satisfaction</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">24hr</span>
                            <span class="stat-label">Response Time</span>
                        </div>
                    </div>
                    
                    <div class="about-cta">
                        <a href="#contact" class="cta-button primary">
                            <i class="fas fa-phone"></i>
                            <span>Let's Talk About Your Project</span>
                        </a>
                    </div>
                </div>
                <div class="about-image">
                    <div class="about-placeholder">
                        <i class="fas fa-user-tie"></i>
                        <p>Professional Web Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Ready to Get Started?</h2>
                <p>Let's discuss your project and create a website that drives results for your business</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-methods">
                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="method-content">
                                <h3>Call Me Directly</h3>
                                <p>Speak with me personally about your project</p>
                                <a href="tel:2708019780" class="method-link">(270) 801-9780</a>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-sms"></i>
                            </div>
                            <div class="method-content">
                                <h3>Text Me</h3>
                                <p>Quick questions? Send me a text message</p>
                                <a href="sms:2708019780" class="method-link">(270) 801-9780</a>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="method-content">
                                <h3>Schedule a Call</h3>
                                <p>Book a time that works for both of us</p>
                                <a href="#contact-form" class="method-link">Request Call Back</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-guarantee">
                        <h3>My Promise to You</h3>
                        <ul>
                            <li><i class="fas fa-check"></i> Free consultation and quote</li>
                            <li><i class="fas fa-check"></i> No high-pressure sales tactics</li>
                            <li><i class="fas fa-check"></i> Honest advice about what you need</li>
                            <li><i class="fas fa-check"></i> Fair pricing for quality work</li>
                            <li><i class="fas fa-check"></i> Ongoing support after launch</li>
                        </ul>
                    </div>
                </div>
                
                <div class="contact-form-container">
                    <form id="contact-form" class="contact-form" method="POST" action="includes/contact_handler.php">
                        <div class="form-header">
                            <h3>Get Your Free Quote</h3>
                            <p>Tell me about your project and I'll get back to you within 24 hours</p>
                        </div>
                        
                        <div class="form-group">
                            <label for="name">Your Name *</label>
                            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" placeholder="your@email.com" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="(270) 555-1234">
                        </div>
                        
                        <div class="form-group">
                            <label for="business">Business Type</label>
                            <select id="business" name="business">
                                <option value="">Select your business type</option>
                                <option value="auto-repair">Auto Repair Shop</option>
                                <option value="restaurant">Restaurant/Cafe</option>
                                <option value="retail">Retail Store</option>
                                <option value="service">Service Business</option>
                                <option value="professional">Professional Services</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="project">Project Type</label>
                            <select id="project" name="project">
                                <option value="">What do you need?</option>
                                <option value="new-website">New Website</option>
                                <option value="redesign">Website Redesign</option>
                                <option value="ecommerce">Online Store</option>
                                <option value="booking">Booking System</option>
                                <option value="maintenance">Website Maintenance</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="budget">Budget Range</label>
                            <select id="budget" name="budget">
                                <option value="">Select budget range</option>
                                <option value="under-1000">Under $1,000</option>
                                <option value="1000-2500">$1,000 - $2,500</option>
                                <option value="2500-5000">$2,500 - $5,000</option>
                                <option value="5000-plus">$5,000+</option>
                                <option value="discuss">Let's discuss</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Project Details *</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tell me about your project, goals, and any specific requirements..." required></textarea>
                        </div>
                        
                        <button type="submit" class="cta-button primary large">
                            <i class="fas fa-paper-plane"></i>
                            <span>Send My Request</span>
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
                        <i class="fas fa-code"></i>
                        <span>Cyrus Wilburn</span>
                    </div>
                    <p>Professional web developer creating custom websites that convert visitors into customers. Let's build something amazing together.</p>
                    <div class="social-links">
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" title="GitHub"><i class="fab fa-github"></i></a>
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#services">Custom Websites</a></li>
                        <li><a href="#services">E-commerce</a></li>
                        <li><a href="#services">Booking Systems</a></li>
                        <li><a href="#services">SEO Optimization</a></li>
                        <li><a href="#services">Website Maintenance</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Portfolio</h3>
                    <ul>
                        <li><a href="#portfolio">Recent Work</a></li>
                        <li><a href="nicheport2/" target="_blank">NichePort Auto Repair</a></li>
                        <li><a href="barber-shop/" target="_blank">Blade & Fade Barbers</a></li>
                        <li><a href="small-cafe/" target="_blank">Brew & Bite Cafe</a></li>
                        <li><a href="http://ambassadorsmmtx.com/" target="_blank">Ambassadors MM</a></li>
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
                        <a href="mailto:cyrus@cyruswilburn.dev">cyrus@cyruswilburn.dev</a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Available Nationwide</span>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p>&copy; 2024 Cyrus Wilburn. All rights reserved.</p>
                    <div class="footer-links">
                        <a href="#privacy">Privacy Policy</a>
                        <a href="#terms">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="assets/js/script.js"></script>
</body>
</html>
