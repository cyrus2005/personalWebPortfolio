<?php
$page_title = "Ambassadors for Jesus Christ - Motorcycle Ministry";
$page_description = "Join the Ambassadors for Jesus Christ Motorcycle Ministry. Experience faith, fellowship, and freedom on two wheels.";
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/fonts/fontawesome/fontawesome-free-6.7.2-web/css/all.min.css">
    <style>
        /* New Landing Page Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(135deg, #000 0%, #1a1a1a 50%, #000 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="%23ff0000" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            text-align: center;
            z-index: 2;
            position: relative;
            max-width: 1200px;
            padding: 0 20px;
        }

        .hero-title {
            font-family: 'Orbitron', monospace;
            font-size: 4.5rem;
            font-weight: 900;
            color: #fff;
            margin-bottom: 1rem;
            text-shadow: 0 0 30px rgba(255, 0, 0, 0.5);
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from { text-shadow: 0 0 30px rgba(255, 0, 0, 0.5); }
            to { text-shadow: 0 0 40px rgba(255, 0, 0, 0.8), 0 0 60px rgba(255, 0, 0, 0.3); }
        }

        .hero-subtitle {
            font-size: 1.5rem;
            color: #ccc;
            margin-bottom: 2rem;
            font-weight: 300;
        }

        .hero-cta {
            display: flex;
            gap: 2rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 3rem;
        }

        .btn {
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
            display: inline-block;
        }

        .btn-primary {
            background: linear-gradient(45deg, #ff0000, #cc0000);
            color: white;
            box-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 0, 0, 0.4);
        }

        .btn-secondary {
            background: transparent;
            color: #fff;
            border: 2px solid #ff0000;
        }

        .btn-secondary:hover {
            background: #ff0000;
            transform: translateY(-3px);
        }

        /* Features Section */
        .features {
            padding: 100px 0;
            background: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            font-family: 'Orbitron', monospace;
            font-size: 3rem;
            color: #000;
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(45deg, #ff0000, #cc0000);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .feature-card {
            background: white;
            padding: 3rem 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            font-size: 4rem;
            color: #ff0000;
            margin-bottom: 1.5rem;
        }

        .feature-title {
            font-family: 'Orbitron', monospace;
            font-size: 1.5rem;
            color: #000;
            margin-bottom: 1rem;
        }

        .feature-description {
            color: #666;
            line-height: 1.8;
        }

        /* Stats Section */
        .stats {
            background: linear-gradient(135deg, #000 0%, #1a1a1a 100%);
            padding: 100px 0;
            color: white;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            text-align: center;
        }

        .stat-item {
            padding: 2rem;
        }

        .stat-number {
            font-family: 'Orbitron', monospace;
            font-size: 3rem;
            font-weight: 900;
            color: #ff0000;
            display: block;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1.2rem;
            color: #ccc;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(45deg, #ff0000, #cc0000);
            padding: 100px 0;
            text-align: center;
            color: white;
        }

        .cta-title {
            font-family: 'Orbitron', monospace;
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .cta-subtitle {
            font-size: 1.3rem;
            margin-bottom: 3rem;
            opacity: 0.9;
        }

        /* Navigation */
        .nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.9);
            padding: 1rem 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .nav.scrolled {
            background: rgba(0, 0, 0, 0.95);
            backdrop-filter: blur(10px);
        }

        .nav-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Orbitron', monospace;
            font-size: 1.8rem;
            font-weight: 900;
            color: #ff0000;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #ff0000;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 3rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .hero-cta {
                flex-direction: column;
                align-items: center;
            }
            
            .nav-links {
                display: none;
            }
            
            .section-title {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="nav" id="navbar">
        <div class="nav-content">
            <a href="#" class="logo">AMBASSADORS</a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1 class="hero-title">AMBASSADORS FOR JESUS CHRIST</h1>
            <p class="hero-subtitle">Motorcycle Ministry • Faith • Fellowship • Freedom</p>
            <div class="hero-cta">
                <a href="#about" class="btn btn-primary">Join Our Ministry</a>
                <a href="#gallery" class="btn btn-secondary">View Gallery</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="about">
        <div class="container">
            <h2 class="section-title">Our Mission</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-motorcycle"></i>
                    </div>
                    <h3 class="feature-title">Ride with Purpose</h3>
                    <p class="feature-description">Experience the freedom of the open road while serving our community and sharing the love of Christ through motorcycle ministry.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-hands-praying"></i>
                    </div>
                    <h3 class="feature-title">Prayer & Fellowship</h3>
                    <p class="feature-description">Join our community of believers in prayer, worship, and fellowship as we grow together in faith and service.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="feature-title">Community Service</h3>
                    <p class="feature-description">Make a difference in our community through volunteer work, charity rides, and outreach programs that serve those in need.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">Active Members</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">100+</span>
                    <span class="stat-label">Rides Completed</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">25+</span>
                    <span class="stat-label">Community Events</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">5+</span>
                    <span class="stat-label">Years of Service</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" id="contact">
        <div class="container">
            <h2 class="cta-title">Ready to Ride?</h2>
            <p class="cta-subtitle">Join the Ambassadors for Jesus Christ Motorcycle Ministry today</p>
            <a href="gallery.php" class="btn btn-secondary">Explore Our Gallery</a>
        </div>
    </section>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for navigation links
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
    </script>
</body>
</html>
