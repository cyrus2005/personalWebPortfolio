<?php
require_once 'includes/config.php';
$page_title = "Collision Repair Services | Generic Collision Shop";
$page_description = "Professional collision repair services including paint work, body repair, frame straightening, and more. Insurance approved and affordable rates.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="collision repair, auto body shop, paint work, frame repair, dent removal, car repair services">
    
    <link rel="icon" type="image/png" href="media/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
                    <li><a href="services.php" class="active">Services</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="careers.php">Careers</a></li>
                </ul>
            </nav>
            <a href="quote.php" class="cta-button">Get Free Quote</a>
            <button class="mobile-menu-toggle" id="mobileMenuToggle">☰</button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero services-hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badge">
                    <span>🔧 Professional Services</span>
                </div>
                <h1>Expert <span class="highlight">Collision Repair</span> Services</h1>
                <p class="hero-subtitle">Comprehensive auto body repair with <strong>insurance assistance</strong>, <strong>state-of-the-art equipment</strong>, and <strong>lifetime warranty</strong> on all work.</p>
                
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">15+</span>
                        <span class="stat-label">Services Offered</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">25+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Satisfaction</span>
                    </div>
                </div>
                
                <div class="hero-buttons">
                    <a href="#services-content" class="cta-button primary">
                        <span>View All Services</span>
                        <small>Comprehensive repair options</small>
                    </a>
                    <a href="tel:2708019780" class="cta-button secondary">
                        <span>Call for Quote</span>
                        <small>(270) 801-9780</small>
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="services-preview">
                    <div class="service-preview-card">
                        <div class="service-icon">🚗</div>
                        <h4>Collision Repair</h4>
                        <p>Professional damage restoration</p>
                    </div>
                    <div class="service-preview-card">
                        <div class="service-icon">🎨</div>
                        <h4>Paint & Body</h4>
                        <p>Expert color matching</p>
                    </div>
                    <div class="service-preview-card">
                        <div class="service-icon">🔧</div>
                        <h4>Frame Work</h4>
                        <p>Precision alignment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section id="services-content" class="services" style="padding: 60px 0;">
        <div class="container">
            <h2 class="text-center">Our Complete Service Range</h2>
            <p class="text-center">From minor dents to major collision damage, we handle it all with professional expertise</p>
            
            <div class="services-grid" style="margin-top: 3rem;">
                <!-- Collision Repair -->
                <div class="service-card">
                    <img src="media/workingondamagedside.jpg" alt="Collision Repair" class="service-image">
                    <div class="service-content">
                        <h3>Collision Repair</h3>
                        <p>Professional repair of front-end, rear-end, and side impact damage using state-of-the-art equipment and techniques.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ Front-end collision repair</li>
                            <li>✓ Rear-end collision repair</li>
                            <li>✓ Side impact damage repair</li>
                            <li>✓ Structural damage assessment</li>
                        </ul>
                    </div>
                </div>

                <!-- Paint & Body Work -->
                <div class="service-card">
                    <img src="media/repaintingdoor.jpg" alt="Paint & Body Work" class="service-image">
                    <div class="service-content">
                        <h3>Paint & Body Work</h3>
                        <p>Expert color matching and paint application to restore your vehicle's original appearance and value.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ Color matching technology</li>
                            <li>✓ Paintless dent repair</li>
                            <li>✓ Panel replacement</li>
                            <li>✓ Clear coat application</li>
                        </ul>
                    </div>
                </div>

                <!-- Frame Straightening -->
                <div class="service-card">
                    <img src="media/gallery-welding-frame-white-car.jpeg" alt="Frame Straightening" class="service-image">
                    <div class="service-content">
                        <h3>Frame Straightening</h3>
                        <p>Precision frame repair using computerized measuring systems to ensure perfect alignment and safety.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ Computerized measuring</li>
                            <li>✓ Frame straightening</li>
                            <li>✓ Structural welding</li>
                            <li>✓ Alignment verification</li>
                        </ul>
                    </div>
                </div>

                <!-- Body Work -->
                <div class="service-card">
                    <img src="media/pullingdentout.jpg" alt="Body Work" class="service-image">
                    <div class="service-content">
                        <h3>Body Work</h3>
                        <p>Professional body panel repair and dent removal using both traditional and paintless techniques.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ Paintless dent repair (PDR)</li>
                            <li>✓ Traditional body work</li>
                            <li>✓ Hail damage repair</li>
                            <li>✓ Door ding removal</li>
                        </ul>
                    </div>
                </div>

                <!-- Detailing Services -->
                <div class="service-card">
                    <img src="media/waxingacar.jpg" alt="Detailing Services" class="service-image">
                    <div class="service-content">
                        <h3>Detailing Services</h3>
                        <p>Complete interior and exterior detailing to restore your vehicle's showroom condition.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ Interior deep cleaning</li>
                            <li>✓ Exterior wash and wax</li>
                            <li>✓ Paint correction</li>
                            <li>✓ Leather conditioning</li>
                        </ul>
                    </div>
                </div>

                <!-- Glass Replacement -->
                <div class="service-card">
                    <img src="media/glassreplacement.jpg" alt="Glass Replacement" class="service-image">
                    <div class="service-content">
                        <h3>Glass Replacement</h3>
                        <p>Windshield and window replacement services with OEM-quality glass and professional installation.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ Windshield replacement</li>
                            <li>✓ Side window replacement</li>
                            <li>✓ Rear window replacement</li>
                            <li>✓ Glass tinting</li>
                        </ul>
                    </div>
                </div>

                <!-- Paintless Dent Repair (PDR) -->
                <div class="service-card">
                    <div class="service-image" style="background: var(--light-gray); display: flex; align-items: center; justify-content: center; color: var(--neutral-gray);">
                        <span>PDR Image Coming Soon</span>
                    </div>
                    <div class="service-content">
                        <h3>Paintless Dent Repair (PDR)</h3>
                        <p>PDR is a method of removing dents from a car without damaging the paint. It is a cost-effective and efficient way to restore the car's exterior to a smooth, factory-like finish.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ No paint damage</li>
                            <li>✓ Cost-effective solution</li>
                            <li>✓ Factory-like finish</li>
                            <li>✓ Quick turnaround</li>
                        </ul>
                    </div>
                </div>

                <!-- Interior Repair -->
                <div class="service-card">
                    <div class="service-image" style="background: var(--light-gray); display: flex; align-items: center; justify-content: center; color: var(--neutral-gray);">
                        <span>Interior Repair Image Coming Soon</span>
                    </div>
                    <div class="service-content">
                        <h3>Interior Repair</h3>
                        <p>Interior Repair includes repairing damaged or worn-out interior parts of a car such as seats, dashboard, door panels, etc. This service helps to restore the car's interior to its original condition.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ Seat repair and restoration</li>
                            <li>✓ Dashboard repair</li>
                            <li>✓ Door panel restoration</li>
                            <li>✓ Interior cleaning</li>
                        </ul>
                    </div>
                </div>

                <!-- Ceramic Coating -->
                <div class="service-card">
                    <div class="service-image" style="background: var(--light-gray); display: flex; align-items: center; justify-content: center; color: var(--neutral-gray);">
                        <span>Ceramic Coating Image Coming Soon</span>
                    </div>
                    <div class="service-content">
                        <h3>Ceramic Coating</h3>
                        <p>Ceramic Coating is a protective coating that is applied to the exterior of a car to protect it from scratches, dirt, and other types of damage. It provides long-lasting protection and enhances the car's appearance.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ Long-lasting protection</li>
                            <li>✓ Scratch resistance</li>
                            <li>✓ Enhanced appearance</li>
                            <li>✓ Easy maintenance</li>
                        </ul>
                    </div>
                </div>

                <!-- Paint Repair -->
                <div class="service-card">
                    <img src="media/repaintingdoor.jpg" alt="Paint Repair" class="service-image">
                    <div class="service-content">
                        <h3>Paint Repair</h3>
                        <p>Paint Repair is a service that involves repairing damaged paint on a car. It includes fixing scratches, chips, and other types of damage to restore the car's original finish.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ Scratch repair</li>
                            <li>✓ Chip repair</li>
                            <li>✓ Color matching</li>
                            <li>✓ Clear coat application</li>
                        </ul>
                    </div>
                </div>

                <!-- Wheel Reconditioning -->
                <div class="service-card">
                    <div class="service-image" style="background: var(--light-gray); display: flex; align-items: center; justify-content: center; color: var(--neutral-gray);">
                        <span>Wheel Reconditioning Image Coming Soon</span>
                    </div>
                    <div class="service-content">
                        <h3>Wheel Reconditioning</h3>
                        <p>Wheel Reconditioning is a service that involves repairing or restoring damaged wheels, including alloy and steel rims, to their original condition. This service helps to improve the car's overall appearance and performance.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ Alloy wheel repair</li>
                            <li>✓ Steel rim restoration</li>
                            <li>✓ Curb rash repair</li>
                            <li>✓ Refinishing services</li>
                        </ul>
                    </div>
                </div>

                <!-- Paint Protection Film -->
                <div class="service-card">
                    <div class="service-image" style="background: var(--light-gray); display: flex; align-items: center; justify-content: center; color: var(--neutral-gray);">
                        <span>Paint Protection Film Image Coming Soon</span>
                    </div>
                    <div class="service-content">
                        <h3>Paint Protection Film</h3>
                        <p>Paint Protection Film is a clear film that is applied to the exterior of a car to protect it from scratches, chips, and other types of damage. It provides long-lasting protection without altering the car's appearance.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ Clear protection film</li>
                            <li>✓ Invisible protection</li>
                            <li>✓ Self-healing properties</li>
                            <li>✓ Professional installation</li>
                        </ul>
                    </div>
                </div>

                <!-- Wash -->
                <div class="service-card">
                    <img src="media/waxingacar.jpg" alt="Car Wash" class="service-image">
                    <div class="service-content">
                        <h3>Car Wash</h3>
                        <p>Wash is a basic cleaning service that involves washing the exterior of a car to remove dirt, dust, and grime. It is a quick and affordable way to keep your car looking clean and well-maintained.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ Exterior wash</li>
                            <li>✓ Wheel cleaning</li>
                            <li>✓ Quick service</li>
                            <li>✓ Affordable pricing</li>
                        </ul>
                    </div>
                </div>

                <!-- Window Tint -->
                <div class="service-card">
                    <div class="service-image" style="background: var(--light-gray); display: flex; align-items: center; justify-content: center; color: var(--neutral-gray);">
                        <span>Window Tint Image Coming Soon</span>
                    </div>
                    <div class="service-content">
                        <h3>Window Tint</h3>
                        <p>Window Tint is a service that involves applying a film to the windows of a car to reduce glare, block UV rays, and increase privacy. It also helps to keep the car's interior cool and protect it from fading.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ UV protection</li>
                            <li>✓ Glare reduction</li>
                            <li>✓ Privacy enhancement</li>
                            <li>✓ Interior protection</li>
                        </ul>
                    </div>
                </div>

                <!-- Detailing -->
                <div class="service-card">
                    <img src="media/waxingacar.jpg" alt="Detailing" class="service-image">
                    <div class="service-content">
                        <h3>Detailing</h3>
                        <p>Detailing is a comprehensive cleaning and restoration process that involves cleaning, polishing, and protecting the exterior and interior of a car. It includes services such as waxing, buffing, shampooing carpets, and seats, among others.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ Interior deep cleaning</li>
                            <li>✓ Exterior polishing</li>
                            <li>✓ Waxing and buffing</li>
                            <li>✓ Complete restoration</li>
                        </ul>
                    </div>
                </div>

                <!-- Photography -->
                <div class="service-card">
                    <div class="service-image" style="background: var(--light-gray); display: flex; align-items: center; justify-content: center; color: var(--neutral-gray);">
                        <span>Photography Image Coming Soon</span>
                    </div>
                    <div class="service-content">
                        <h3>Photography</h3>
                        <p>Photography is a service that involves taking high-quality photos of a car for marketing and advertising purposes. It helps to showcase the car's features and attract potential buyers.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ High-quality photos</li>
                            <li>✓ Marketing materials</li>
                            <li>✓ Professional lighting</li>
                            <li>✓ Multiple angles</li>
                        </ul>
                    </div>
                </div>

                <!-- Glass Repair and Replacement -->
                <div class="service-card">
                    <img src="media/glassrepair.jpg" alt="Glass Repair" class="service-image">
                    <div class="service-content">
                        <h3>Glass Repair and Replacement</h3>
                        <p>Chips, cracks and other damage from on-road debris affect the integrity of your windshield. Damage that is smaller than a half dollar can typically be repaired, but more extensive damage may require glass replacement.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ Windshield chip repair</li>
                            <li>✓ Crack repair</li>
                            <li>✓ Glass replacement</li>
                            <li>✓ OEM quality glass</li>
                        </ul>
                    </div>
                </div>

                <!-- Hail Damage Repair -->
                <div class="service-card">
                    <div class="service-image" style="background: var(--light-gray); display: flex; align-items: center; justify-content: center; color: var(--neutral-gray);">
                        <span>Hail Damage Repair Image Coming Soon</span>
                    </div>
                    <div class="service-content">
                        <h3>Hail Damage Repair</h3>
                        <p>Avoiding a hail storm is nearly impossible and extremely annoying for drivers, but our team of expert dent repair specialists can restore your car back to factory standards. With worlds of experience and the technology to quickly repair hail damage, we can get you back on the road in no time.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ Expert dent repair</li>
                            <li>✓ Factory standards</li>
                            <li>✓ Quick turnaround</li>
                            <li>✓ Advanced technology</li>
                        </ul>
                    </div>
                </div>

                <!-- Headlight Restoration -->
                <div class="service-card">
                    <div class="service-image" style="background: var(--light-gray); display: flex; align-items: center; justify-content: center; color: var(--neutral-gray);">
                        <span>Headlight Restoration Image Coming Soon</span>
                    </div>
                    <div class="service-content">
                        <h3>Headlight Restoration</h3>
                        <p>Hazy headlights reduce light emissions, and, especially in bad weather, could cost you everything. Our technicians will clear away the film, yellowing and haze to improve your visibility of the road before you, and make your vehicle more visible to oncoming automobiles and pedestrians.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ Clear hazy headlights</li>
                            <li>✓ Remove yellowing</li>
                            <li>✓ Improve visibility</li>
                            <li>✓ Safety enhancement</li>
                        </ul>
                    </div>
                </div>

                <!-- Wheel Repair -->
                <div class="service-card">
                    <div class="service-image" style="background: var(--light-gray); display: flex; align-items: center; justify-content: center; color: var(--neutral-gray);">
                        <span>Wheel Repair Image Coming Soon</span>
                    </div>
                    <div class="service-content">
                        <h3>Wheel Repair</h3>
                        <p>Your wheels take you far. But the miles of adventure you put on take their toll. Wheels and rims get bent out of shape, making them prone to blowouts or other damage. Ensuring that your wheels are at their peak performance is crucial to the well-being of your vehicle and your gas efficiency.</p>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0;">
                            <li>✓ Wheel straightening</li>
                            <li>✓ Rim repair</li>
                            <li>✓ Performance optimization</li>
                            <li>✓ Safety inspection</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="features" style="padding: 80px 0;">
        <div class="container">
            <h2 class="text-center">Our Repair Process</h2>
            <p class="text-center">From initial estimate to final delivery, we keep you informed every step of the way</p>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">📋</div>
                    <h3>1. Free Estimate</h3>
                    <p>Get a detailed estimate using our interactive car model or schedule an in-person inspection.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔍</div>
                    <h3>2. Damage Assessment</h3>
                    <p>Our experts thoroughly inspect your vehicle to identify all damage and create a repair plan.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📞</div>
                    <h3>3. Insurance Coordination</h3>
                    <p>We work directly with your insurance company to handle all paperwork and approvals.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔧</div>
                    <h3>4. Professional Repair</h3>
                    <p>Our certified technicians perform the repair using industry-standard techniques and equipment.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">✅</div>
                    <h3>5. Quality Inspection</h3>
                    <p>Every repair undergoes a thorough quality inspection to ensure it meets our high standards.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🚗</div>
                    <h3>6. Delivery</h3>
                    <p>Your vehicle is returned to you in perfect condition, ready to hit the road again.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Insurance Information -->
    <section class="quote-section" style="padding: 80px 0;">
        <div class="container">
            <h2 class="text-center">Insurance Partners</h2>
            <p class="text-center">We work with all major insurance companies to make your repair process as smooth as possible</p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 3rem;">
                <div style="background: var(--white); padding: 2rem; border-radius: 0.75rem; text-align: center; color: var(--dark-gray);">
                    <h4>Direct Billing</h4>
                    <p>We handle all insurance paperwork and billing directly with your insurance company.</p>
                </div>
                <div style="background: var(--white); padding: 2rem; border-radius: 0.75rem; text-align: center; color: var(--dark-gray);">
                    <h4>Claims Assistance</h4>
                    <p>Our team helps you navigate the claims process and ensures you get the coverage you deserve.</p>
                </div>
                <div style="background: var(--white); padding: 2rem; border-radius: 0.75rem; text-align: center; color: var(--dark-gray);">
                    <h4>Approved Shop</h4>
                    <p>We're an approved repair facility for most major insurance companies in the area.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="contact" style="padding: 80px 0;">
        <div class="container">
            <div class="text-center">
                <h2>Ready to Get Started?</h2>
                <p>Contact us today for a free estimate or to schedule your repair</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 2rem;">
                    <a href="quote.php" class="cta-button">Get Free Estimate</a>
                    <a href="tel:2708019780" class="cta-button" style="background: var(--secondary-blue);">Call (270) 801-9780</a>
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
