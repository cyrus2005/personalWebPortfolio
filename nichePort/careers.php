<?php
require_once 'includes/config.php';
$page_title = "Careers | Generic Collision Shop";
$page_description = "Join our team at Generic Collision Shop. We're looking for skilled technicians, painters, and customer service professionals. Apply today!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="collision repair jobs, auto body careers, technician jobs, collision shop employment">
    
    <link rel="icon" type="image/png" href="media/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        .careers-page {
            padding-top: 100px;
        }
        .careers-hero {
            background: linear-gradient(135deg, var(--primary-navy) 0%, var(--secondary-blue) 100%);
            color: var(--white);
            padding: 60px 0;
            text-align: center;
        }
        .job-card {
            background: var(--white);
            padding: 2rem;
            border-radius: 0.75rem;
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
            transition: transform 0.3s ease;
        }
        .job-card:hover {
            transform: translateY(-5px);
        }
        .job-title {
            color: var(--primary-navy);
            margin-bottom: 0.5rem;
        }
        .job-type {
            background: var(--accent-blue);
            color: var(--white);
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.8rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 1rem;
        }
        .job-description {
            color: var(--neutral-gray);
            margin-bottom: 1.5rem;
        }
        .job-requirements {
            margin-bottom: 1.5rem;
        }
        .job-requirements h4 {
            color: var(--primary-navy);
            margin-bottom: 0.5rem;
        }
        .job-requirements ul {
            list-style: none;
            padding: 0;
        }
        .job-requirements li {
            padding: 0.25rem 0;
            color: var(--neutral-gray);
        }
        .job-requirements li:before {
            content: "✓ ";
            color: var(--success-green);
            font-weight: bold;
        }
        .apply-btn {
            background: var(--accent-blue);
            color: var(--white);
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
        }
        .apply-btn:hover {
            background: var(--secondary-blue);
            transform: translateY(-2px);
        }
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin: 3rem 0;
        }
        .benefit-card {
            background: var(--white);
            padding: 1.5rem;
            border-radius: 0.75rem;
            box-shadow: var(--shadow);
            text-align: center;
        }
        .benefit-icon {
            width: 50px;
            height: 50px;
            background: var(--accent-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            color: var(--white);
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
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="careers.php" class="active">Careers</a></li>
                </ul>
            </nav>
            <a href="quote.php" class="cta-button">Get Free Quote</a>
            <button class="mobile-menu-toggle" id="mobileMenuToggle">☰</button>
        </div>
    </header>

    <!-- Careers Hero -->
    <section class="hero careers-hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge">
                    <span>💼 Join Our Team</span>
                </div>
                <h1>Build Your <span class="highlight">Career</span> With Us</h1>
                <p class="hero-subtitle">Join a <strong>growing team</strong> of professionals, enjoy <strong>competitive benefits</strong>, and advance your career in the <strong>collision repair industry</strong>.</p>
                
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">5+</span>
                        <span class="stat-label">Open Positions</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Health Benefits</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">25+</span>
                        <span class="stat-label">Years in Business</span>
                    </div>
                </div>
                
                <div class="hero-buttons">
                    <a href="#careers-content" class="cta-button primary">
                        <span>View Openings</span>
                        <small>Current job positions</small>
                    </a>
                    <a href="tel:2708019780" class="cta-button secondary">
                        <span>Apply Now</span>
                        <small>(270) 801-9780</small>
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="careers-preview">
                    <div class="career-option">
                        <div class="career-icon">🔧</div>
                        <h4>Auto Body Tech</h4>
                        <p>Expert repair work</p>
                    </div>
                    <div class="career-option">
                        <div class="career-icon">🎨</div>
                        <h4>Paint Specialist</h4>
                        <p>Color matching expert</p>
                    </div>
                    <div class="career-option">
                        <div class="career-icon">👥</div>
                        <h4>Customer Service</h4>
                        <p>Help our customers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Work With Us -->
    <section class="features" style="padding: 80px 0;">
        <div class="container">
            <h2 class="text-center">Why Work With Us?</h2>
            <p class="text-center">We offer competitive benefits, growth opportunities, and a supportive work environment</p>
            
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">💰</div>
                    <h3>Competitive Pay</h3>
                    <p>We offer competitive wages based on experience and performance, with regular reviews and raises.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🏥</div>
                    <h3>Health Benefits</h3>
                    <p>Comprehensive health, dental, and vision insurance for you and your family.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">📚</div>
                    <h3>Training & Development</h3>
                    <p>Ongoing training opportunities and certification programs to advance your skills.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">⏰</div>
                    <h3>Flexible Schedule</h3>
                    <p>Work-life balance with flexible scheduling options and paid time off.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🚗</div>
                    <h3>Modern Equipment</h3>
                    <p>Work with state-of-the-art tools and equipment in a clean, modern facility.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🤝</div>
                    <h3>Team Environment</h3>
                    <p>Join a supportive team that values collaboration and mutual respect.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions -->
    <section class="services" style="padding: 80px 0;">
        <div class="container">
            <h2 class="text-center">Open Positions</h2>
            <p class="text-center">We're always looking for talented individuals to join our growing team</p>
            
            <div style="max-width: 800px; margin: 0 auto;">
                <!-- Auto Body Technician -->
                <div class="job-card">
                    <h3 class="job-title">Auto Body Technician</h3>
                    <span class="job-type">Full-time</span>
                    <p class="job-description">We're seeking an experienced auto body technician to join our team. You'll work on a variety of collision repair projects using modern equipment and techniques.</p>
                    
                    <div class="job-requirements">
                        <h4>Requirements:</h4>
                        <ul>
                            <li>3+ years of auto body repair experience</li>
                            <li>ASE certification preferred</li>
                            <li>Knowledge of frame straightening and body panel repair</li>
                            <li>Experience with paint preparation and application</li>
                            <li>Valid driver's license</li>
                            <li>Strong attention to detail</li>
                        </ul>
                    </div>
                    
                    <a href="https://www.glassdoor.com/Job/auto-body-technician-jobs.htm" target="_blank" class="apply-btn">Apply on Glassdoor</a>
                </div>

                <!-- Paint Technician -->
                <div class="job-card">
                    <h3 class="job-title">Paint Technician</h3>
                    <span class="job-type">Full-time</span>
                    <p class="job-description">Join our paint department and work with cutting-edge color matching technology. Perfect for someone with a keen eye for detail and color.</p>
                    
                    <div class="job-requirements">
                        <h4>Requirements:</h4>
                        <ul>
                            <li>2+ years of automotive painting experience</li>
                            <li>Experience with color matching and blending</li>
                            <li>Knowledge of paint preparation and application</li>
                            <li>Familiarity with modern paint systems</li>
                            <li>Ability to work in a controlled environment</li>
                            <li>Commitment to quality workmanship</li>
                        </ul>
                    </div>
                    
                    <a href="https://www.glassdoor.com/Job/automotive-painter-jobs.htm" target="_blank" class="apply-btn">Apply on Glassdoor</a>
                </div>

                <!-- Customer Service Representative -->
                <div class="job-card">
                    <h3 class="job-title">Customer Service Representative</h3>
                    <span class="job-type">Full-time</span>
                    <p class="job-description">Be the first point of contact for our customers. Help them through the repair process and ensure they have an excellent experience.</p>
                    
                    <div class="job-requirements">
                        <h4>Requirements:</h4>
                        <ul>
                            <li>High school diploma or equivalent</li>
                            <li>2+ years of customer service experience</li>
                            <li>Excellent communication skills</li>
                            <li>Computer proficiency</li>
                            <li>Ability to multitask in a fast-paced environment</li>
                            <li>Friendly and professional demeanor</li>
                        </ul>
                    </div>
                    
                    <a href="https://www.glassdoor.com/Job/customer-service-representative-jobs.htm" target="_blank" class="apply-btn">Apply on Glassdoor</a>
                </div>

                <!-- Apprentice Technician -->
                <div class="job-card">
                    <h3 class="job-title">Apprentice Technician</h3>
                    <span class="job-type">Full-time</span>
                    <p class="job-description">Start your career in collision repair! We'll provide training and mentorship to help you develop the skills needed to become a certified technician.</p>
                    
                    <div class="job-requirements">
                        <h4>Requirements:</h4>
                        <ul>
                            <li>High school diploma or equivalent</li>
                            <li>Basic mechanical aptitude</li>
                            <li>Willingness to learn and follow instructions</li>
                            <li>Physical ability to lift 50+ pounds</li>
                            <li>Valid driver's license</li>
                            <li>Commitment to safety and quality</li>
                        </ul>
                    </div>
                    
                    <a href="https://www.glassdoor.com/Job/automotive-apprentice-jobs.htm" target="_blank" class="apply-btn">Apply on Glassdoor</a>
                </div>

                <!-- Parts Specialist -->
                <div class="job-card">
                    <h3 class="job-title">Parts Specialist</h3>
                    <span class="job-type">Part-time</span>
                    <p class="job-description">Help our technicians get the right parts for every job. Manage inventory and work with suppliers to ensure timely delivery.</p>
                    
                    <div class="job-requirements">
                        <h4>Requirements:</h4>
                        <ul>
                            <li>High school diploma or equivalent</li>
                            <li>1+ years of parts or inventory experience</li>
                            <li>Knowledge of automotive parts and systems</li>
                            <li>Computer skills for inventory management</li>
                            <li>Attention to detail and accuracy</li>
                            <li>Good organizational skills</li>
                        </ul>
                    </div>
                    
                    <a href="https://www.glassdoor.com/Job/automotive-parts-specialist-jobs.htm" target="_blank" class="apply-btn">Apply on Glassdoor</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Process -->
    <section class="quote-section" style="padding: 80px 0;">
        <div class="container">
            <h2 class="text-center">How to Apply</h2>
            <p class="text-center">Follow these simple steps to join our team</p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 3rem;">
                <div style="background: var(--white); padding: 2rem; border-radius: 0.75rem; text-align: center; color: var(--dark-gray);">
                    <h4>1. Browse Jobs</h4>
                    <p>Review our open positions and find the role that matches your skills and interests.</p>
                </div>
                <div style="background: var(--white); padding: 2rem; border-radius: 0.75rem; text-align: center; color: var(--dark-gray);">
                    <h4>2. Apply Online</h4>
                    <p>Click the "Apply" button to submit your application through our job board partner.</p>
                </div>
                <div style="background: var(--white); padding: 2rem; border-radius: 0.75rem; text-align: center; color: var(--dark-gray);">
                    <h4>3. Interview</h4>
                    <p>We'll review your application and contact you to schedule an interview.</p>
                </div>
                <div style="background: var(--white); padding: 2rem; border-radius: 0.75rem; text-align: center; color: var(--dark-gray);">
                    <h4>4. Join Our Team</h4>
                    <p>Welcome aboard! We'll provide all the training and support you need to succeed.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact for More Info -->
    <section class="contact" style="padding: 80px 0;">
        <div class="container">
            <div class="text-center">
                <h2>Questions About Careers?</h2>
                <p>Contact us for more information about available positions or our company culture</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 2rem;">
                    <a href="tel:2708019780" class="cta-button">Call (270) 801-9780</a>
                    <a href="mailto:careers@genericcollision.com" class="cta-button" style="background: var(--secondary-blue);">Email Us</a>
                </div>
            </div>
        </div>
    </section>

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
    </script>
</body>
</html>
