<?php
// Handle form submission
$message = '';
$error = '';

if ($_POST) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message_text = trim($_POST['message'] ?? '');
    
    // Basic validation
    if (empty($name) || empty($email) || empty($message_text)) {
        $error = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        // Here you would typically save to database or send email
        // For now, we'll just show a success message
        $message = 'Thank you for your message! Trevor will get back to you within 24 hours.';
        
        // Clear form data
        $name = $email = $phone = $subject = $message_text = '';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Trevor Hondros - Superior Texas Investments</title>
    <meta name="description" content="Contact Trevor Hondros for professional real estate services. Get expert guidance for buying, selling, or investing in Texas real estate.">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="index.php">
                    <img src="media/trevorHondrosLogo.png" alt="Trevor Hondros Logo" class="logo">
                </a>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#services" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#properties" class="nav-link">Properties</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link active">Contact</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="contact-hero-content">
                <h1>Let's Start Your Real Estate Journey</h1>
                <p>Get in touch with Trevor for personalized real estate guidance</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-content">
                <div class="contact-info">
                    <h2>Get In Touch</h2>
                    <p>Ready to buy, sell, or invest in real estate? Trevor is here to help you achieve your goals with expert guidance and personalized service.</p>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Office Location</h4>
                                <p>12333 Sowden Rd Ste B PMB 390511<br>Houston, Texas 77080-2059</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Phone</h4>
                                <p><a href="tel:+1234567890">(123) 456-7890</a></p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Email</h4>
                                <p><a href="mailto:trevor@superiortexas.com">trevor@superiortexas.com</a></p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Business Hours</h4>
                                <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: By Appointment</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <h4>Follow Us</h4>
                        <div class="social-icons">
                            <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form-container">
                    <div class="contact-form-wrapper">
                        <h3>Send Us a Message</h3>
                        
                        <?php if ($message): ?>
                            <div class="success-message">
                                <i class="fas fa-check-circle"></i>
                                <?php echo htmlspecialchars($message); ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($error): ?>
                            <div class="error-message">
                                <i class="fas fa-exclamation-circle"></i>
                                <?php echo htmlspecialchars($error); ?>
                            </div>
                        <?php endif; ?>
                        
                        <form class="contact-form" method="POST" action="">
                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name ?? ''); ?>" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email ?? ''); ?>" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($phone ?? ''); ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <select id="subject" name="subject">
                                    <option value="">Select a service</option>
                                    <option value="buying" <?php echo (($subject ?? '') === 'buying') ? 'selected' : ''; ?>>Buying a Home</option>
                                    <option value="selling" <?php echo (($subject ?? '') === 'selling') ? 'selected' : ''; ?>>Selling a Home</option>
                                    <option value="investing" <?php echo (($subject ?? '') === 'investing') ? 'selected' : ''; ?>>Real Estate Investment</option>
                                    <option value="general" <?php echo (($subject ?? '') === 'general') ? 'selected' : ''; ?>>General Inquiry</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" name="message" rows="5" placeholder="Tell us about your real estate goals and how we can help..." required><?php echo htmlspecialchars($message_text ?? ''); ?></textarea>
                            </div>
                            
                            <div class="form-group checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="newsletter" value="1">
                                    <span class="checkmark"></span>
                                    I'd like to receive updates about new properties and market insights
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-full">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Make Your Move?</h2>
                <p>Don't wait - the perfect property might be available right now</p>
                <a href="index.php#properties" class="btn btn-secondary">View Properties</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="media/trevorHondrosLogo.png" alt="Trevor Hondros Logo" class="footer-logo-img">
                </div>
                <div class="footer-info">
                    <p>Superior Texas Investments</p>
                    <p>12333 Sowden Rd Ste B PMB 390511</p>
                    <p>Houston, Texas 77080-2059</p>
                </div>
                <div class="footer-social">
                    <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Superior Texas Investments. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
