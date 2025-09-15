<?php
require_once 'includes/config.php';
$page_title = "Get Free Quote | Generic Collision Shop";
$page_description = "Get a free estimate for your collision repair needs. Our interactive car model helps you select the damaged areas for an accurate quote.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="collision repair quote, auto body estimate, free quote, collision shop estimate">
    
    <link rel="icon" type="image/png" href="media/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        .quote-page {
            padding-top: 100px;
        }
        .interactive-car {
            background: var(--white);
            padding: 3rem;
            border-radius: 1rem;
            box-shadow: var(--shadow);
            margin: 3rem 0;
            text-align: center;
        }
        .car-model {
            max-width: 600px;
            margin: 0 auto 2rem;
            position: relative;
        }
        .car-image {
            width: 100%;
            height: auto;
            border-radius: 0.5rem;
        }
        .car-area {
            position: absolute;
            cursor: pointer;
            border: 2px solid transparent;
            border-radius: 0.25rem;
            transition: all 0.3s ease;
        }
        .car-area:hover {
            border-color: var(--accent-blue);
            background: rgba(14, 165, 233, 0.1);
        }
        .car-area.selected {
            border-color: var(--success-green);
            background: rgba(16, 185, 129, 0.1);
        }
        .area-front-bumper { top: 10%; left: 25%; width: 50%; height: 15%; }
        .area-hood { top: 25%; left: 30%; width: 40%; height: 20%; }
        .area-front-door-left { top: 45%; left: 5%; width: 20%; height: 35%; }
        .area-front-door-right { top: 45%; left: 75%; width: 20%; height: 35%; }
        .area-rear-door-left { top: 45%; left: 25%; width: 20%; height: 35%; }
        .area-rear-door-right { top: 45%; left: 55%; width: 20%; height: 35%; }
        .area-rear-bumper { top: 75%; left: 25%; width: 50%; height: 15%; }
        .area-trunk { top: 60%; left: 30%; width: 40%; height: 15%; }
        .area-roof { top: 30%; left: 35%; width: 30%; height: 25%; }
        
        .selected-areas {
            background: var(--light-gray);
            padding: 1.5rem;
            border-radius: 0.5rem;
            margin: 1rem 0;
        }
        .area-tag {
            display: inline-block;
            background: var(--accent-blue);
            color: var(--white);
            padding: 0.5rem 1rem;
            border-radius: 1rem;
            margin: 0.25rem;
            font-size: 0.9rem;
        }
        .area-tag .remove {
            margin-left: 0.5rem;
            cursor: pointer;
            font-weight: bold;
        }
        .quote-form {
            background: var(--white);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: var(--shadow);
            margin-top: 2rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--primary-navy);
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid var(--neutral-gray);
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--accent-blue);
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        .submit-btn {
            background: var(--accent-blue);
            color: var(--white);
            padding: 1rem 2rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }
        .submit-btn:hover {
            background: var(--secondary-blue);
            transform: translateY(-2px);
        }
        .instructions {
            background: var(--light-gray);
            padding: 1.5rem;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
        }
        .instructions h3 {
            color: var(--primary-navy);
            margin-bottom: 1rem;
        }
        .instructions ol {
            margin: 0;
            padding-left: 1.5rem;
        }
        .instructions li {
            margin-bottom: 0.5rem;
            color: var(--dark-gray);
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
                <ul class="nav-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="careers.php">Careers</a></li>
                </ul>
            </nav>
            <a href="quote.php" class="cta-button">Get Free Quote</a>
        </div>
    </header>

    <!-- Quote Hero -->
    <section class="hero" style="background: linear-gradient(135deg, var(--primary-navy) 0%, var(--secondary-blue) 100%); color: var(--white); padding: 100px 0 60px;">
        <div class="container">
            <h1>Get Your Free Quote</h1>
            <p>Use our interactive car model to select damaged areas and get an accurate estimate for your collision repair needs.</p>
        </div>
    </section>

    <!-- Interactive Quote Section -->
    <section class="quote-page">
        <div class="container">
            <div class="interactive-car">
                <h2>Select Damaged Areas</h2>
                <p>Click on the areas of your vehicle that need repair to get an accurate estimate.</p>
                
                <div class="car-model">
                    <img src="media/car-model.png" alt="Car Model" class="car-image">
                    
                    <!-- Clickable areas on the car -->
                    <div class="car-area area-front-bumper" data-area="Front Bumper"></div>
                    <div class="car-area area-hood" data-area="Hood"></div>
                    <div class="car-area area-front-door-left" data-area="Front Door (Left)"></div>
                    <div class="car-area area-front-door-right" data-area="Front Door (Right)"></div>
                    <div class="car-area area-rear-door-left" data-area="Rear Door (Left)"></div>
                    <div class="car-area area-rear-door-right" data-area="Rear Door (Right)"></div>
                    <div class="car-area area-rear-bumper" data-area="Rear Bumper"></div>
                    <div class="car-area area-trunk" data-area="Trunk"></div>
                    <div class="car-area area-roof" data-area="Roof"></div>
                </div>
                
                <div class="selected-areas" id="selectedAreas" style="display: none;">
                    <h3>Selected Areas:</h3>
                    <div id="areaTags"></div>
                </div>
            </div>

            <div class="instructions">
                <h3>How It Works</h3>
                <ol>
                    <li>Click on the areas of your vehicle that need repair</li>
                    <li>Fill out the form below with your contact information</li>
                    <li>Upload photos of the damage (optional but recommended)</li>
                    <li>Submit your request and we'll contact you within 24 hours</li>
                </ol>
            </div>

            <form class="quote-form" action="includes/submit_quote.php" method="POST" enctype="multipart/form-data">
                <h2>Contact Information</h2>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name *</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name *</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone *</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="vehicleYear">Vehicle Year *</label>
                    <input type="number" id="vehicleYear" name="vehicleYear" min="1990" max="2024" required>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="vehicleMake">Vehicle Make *</label>
                        <input type="text" id="vehicleMake" name="vehicleMake" required>
                    </div>
                    <div class="form-group">
                        <label for="vehicleModel">Vehicle Model *</label>
                        <input type="text" id="vehicleModel" name="vehicleModel" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="damagedAreas">Damaged Areas *</label>
                    <input type="text" id="damagedAreas" name="damagedAreas" readonly required>
                    <small>Areas selected from the car model above</small>
                </div>
                
                <div class="form-group">
                    <label for="damageDescription">Damage Description</label>
                    <textarea id="damageDescription" name="damageDescription" rows="4" placeholder="Please describe the damage in detail..."></textarea>
                </div>
                
                <div class="form-group">
                    <label for="photos">Upload Photos (Optional)</label>
                    <input type="file" id="photos" name="photos[]" multiple accept="image/*">
                    <small>Upload up to 5 photos of the damage</small>
                </div>
                
                <div class="form-group">
                    <label for="insuranceCompany">Insurance Company (Optional)</label>
                    <input type="text" id="insuranceCompany" name="insuranceCompany" placeholder="If you have insurance, please provide the company name">
                </div>
                
                <div class="form-group">
                    <label for="preferredContact">Preferred Contact Method</label>
                    <select id="preferredContact" name="preferredContact">
                        <option value="phone">Phone Call</option>
                        <option value="email">Email</option>
                        <option value="text">Text Message</option>
                    </select>
                </div>
                
                <button type="submit" class="submit-btn">Submit Quote Request</button>
            </form>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="features" style="padding: 80px 0;">
        <div class="container">
            <h2 class="text-center">Why Choose Our Estimates?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">💰</div>
                    <h3>Free Estimates</h3>
                    <p>No obligation, completely free estimates for all collision repair services.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3>Quick Response</h3>
                    <p>We'll contact you within 24 hours with your personalized estimate.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🎯</div>
                    <h3>Accurate Pricing</h3>
                    <p>Our experienced estimators provide accurate, competitive pricing.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🤝</div>
                    <h3>Insurance Friendly</h3>
                    <p>We work directly with insurance companies to streamline the process.</p>
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
        // Interactive car model functionality
        document.addEventListener('DOMContentLoaded', function() {
            const carAreas = document.querySelectorAll('.car-area');
            const selectedAreasDiv = document.getElementById('selectedAreas');
            const areaTagsDiv = document.getElementById('areaTags');
            const damagedAreasInput = document.getElementById('damagedAreas');
            const selectedAreas = new Set();

            carAreas.forEach(area => {
                area.addEventListener('click', function() {
                    const areaName = this.getAttribute('data-area');
                    
                    if (selectedAreas.has(areaName)) {
                        // Remove area
                        selectedAreas.delete(areaName);
                        this.classList.remove('selected');
                    } else {
                        // Add area
                        selectedAreas.add(areaName);
                        this.classList.add('selected');
                    }
                    
                    updateSelectedAreas();
                });
            });

            function updateSelectedAreas() {
                if (selectedAreas.size > 0) {
                    selectedAreasDiv.style.display = 'block';
                    areaTagsDiv.innerHTML = '';
                    damagedAreasInput.value = Array.from(selectedAreas).join(', ');
                    
                    selectedAreas.forEach(area => {
                        const tag = document.createElement('span');
                        tag.className = 'area-tag';
                        tag.innerHTML = area + ' <span class="remove" onclick="removeArea(\'' + area + '\')">×</span>';
                        areaTagsDiv.appendChild(tag);
                    });
                } else {
                    selectedAreasDiv.style.display = 'none';
                    damagedAreasInput.value = '';
                }
            }

            // Make removeArea function global
            window.removeArea = function(areaName) {
                selectedAreas.delete(areaName);
                const areaElement = document.querySelector(`[data-area="${areaName}"]`);
                if (areaElement) {
                    areaElement.classList.remove('selected');
                }
                updateSelectedAreas();
            };
        });
    </script>
</body>
</html>
