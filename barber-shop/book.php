<?php
session_start();
require_once 'config/database.php';
require_once 'includes/functions.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $phone = sanitize_input($_POST['phone']);
    $service = sanitize_input($_POST['service']);
    $date = sanitize_input($_POST['date']);
    $time = sanitize_input($_POST['time']);
    $message = sanitize_input($_POST['message']);
    
    $errors = [];
    
    // Validation
    if (empty($name)) {
        $errors[] = 'Name is required.';
    }
    
    if (empty($email) || !validate_email($email)) {
        $errors[] = 'Valid email is required.';
    }
    
    if (empty($phone) || !validate_phone($phone)) {
        $errors[] = 'Valid phone number is required.';
    }
    
    if (empty($service)) {
        $errors[] = 'Please select a service.';
    }
    
    if (empty($date)) {
        $errors[] = 'Please select a date.';
    }
    
    if (empty($time)) {
        $errors[] = 'Please select a time.';
    }
    
    // Check if date is in the future
    if (!empty($date) && strtotime($date) < strtotime('today')) {
        $errors[] = 'Please select a future date.';
    }
    
    // Check business hours
    if (!empty($date) && !empty($time) && !is_business_hours($date, $time)) {
        $errors[] = 'Please select a time during business hours.';
    }
    
    if (empty($errors)) {
        try {
            // Check for existing appointment at same time
            $stmt = $pdo->prepare("SELECT id FROM appointments WHERE appointment_date = ? AND appointment_time = ? AND status != 'cancelled'");
            $stmt->execute([$date, $time]);
            
            if ($stmt->rowCount() > 0) {
                $errors[] = 'This time slot is already booked. Please select another time.';
            } else {
                // Insert appointment
                $stmt = $pdo->prepare("INSERT INTO appointments (name, email, phone, service, appointment_date, appointment_time, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([$name, $email, $phone, $service, $date, $time, $message]);
                
                $appointment_id = $pdo->lastInsertId();
                
                // Get the appointment details for confirmation email
                $stmt = $pdo->prepare("SELECT * FROM appointments WHERE id = ?");
                $stmt->execute([$appointment_id]);
                $appointment = $stmt->fetch();
                
                $_SESSION['message'] = 'Your appointment has been booked successfully! You will receive a confirmation email shortly.';
                $_SESSION['message_type'] = 'success';
                
                // Send confirmation email
                $subject = "Appointment Confirmation - Blade & Fade Barbers";
                $email_message = generate_booking_confirmation($appointment);
                send_notification_email($email, $subject, $email_message);
                
                // Send notification to admin
                $admin_subject = "New Appointment Booking - Blade & Fade Barbers";
                $admin_message = "
                <html>
                <head>
                    <style>
                        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                        .header { background: #1a1a1a; color: white; padding: 20px; text-align: center; }
                        .content { padding: 20px; background: #f9f9f9; }
                        .appointment-details { background: white; padding: 20px; margin: 20px 0; border-left: 4px solid #d4af37; }
                    </style>
                </head>
                <body>
                    <div class='container'>
                        <div class='header'>
                            <h1>New Appointment Booking</h1>
                        </div>
                        <div class='content'>
                            <h2>Appointment Details</h2>
                            <div class='appointment-details'>
                                <p><strong>Name:</strong> " . htmlspecialchars($appointment['name']) . "</p>
                                <p><strong>Email:</strong> " . htmlspecialchars($appointment['email']) . "</p>
                                <p><strong>Phone:</strong> " . htmlspecialchars($appointment['phone']) . "</p>
                                <p><strong>Service:</strong> " . htmlspecialchars($appointment['service']) . "</p>
                                <p><strong>Date:</strong> " . date('l, F j, Y', strtotime($appointment['appointment_date'])) . "</p>
                                <p><strong>Time:</strong> " . date('g:i A', strtotime($appointment['appointment_time'])) . "</p>
                                <p><strong>Message:</strong> " . htmlspecialchars($appointment['message']) . "</p>
                            </div>
                            <p>Please confirm this appointment in your booking system.</p>
                        </div>
                    </div>
                </body>
                </html>";
                
                send_notification_email('info@bladeandfade.com', $admin_subject, $admin_message);
                
                header('Location: book.php?success=1');
                exit();
            }
        } catch (PDOException $e) {
            $errors[] = 'Sorry, there was an error booking your appointment. Please try again.';
        }
    }
    
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['form_data'] = $_POST;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment - Blade & Fade Barbers</title>
    <meta name="description" content="Book your appointment at Blade & Fade Barbers. Professional grooming services for men aged 20-35.">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/fonts/fontawesome/fontawesome-free-6.7.2-web/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <h2>Blade & Fade</h2>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#services" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="book.php" class="nav-link cta-button active">Book Now</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Booking Section -->
    <section class="booking-section">
        <div class="container">
            <div class="section-header">
                <h1>Book Your Appointment</h1>
                <p>Schedule your grooming session with our professional barbers</p>
            </div>
            
            <?php if (isset($_SESSION['message'])): ?>
                <div class="message <?php echo $_SESSION['message_type']; ?>">
                    <?php echo $_SESSION['message']; unset($_SESSION['message'], $_SESSION['message_type']); ?>
                </div>
            <?php endif; ?>
            
            <?php if (isset($_SESSION['errors'])): ?>
                <div class="message error">
                    <?php 
                    foreach ($_SESSION['errors'] as $error) {
                        echo $error . '<br>';
                    }
                    unset($_SESSION['errors']);
                    ?>
                </div>
            <?php endif; ?>
            
            <div class="booking-content">
                <div class="booking-form-container">
                    <form class="booking-form" method="POST" action="">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text" id="name" name="name" value="<?php echo isset($_SESSION['form_data']['name']) ? htmlspecialchars($_SESSION['form_data']['name']) : ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" value="<?php echo isset($_SESSION['form_data']['email']) ? htmlspecialchars($_SESSION['form_data']['email']) : ''; ?>" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" value="<?php echo isset($_SESSION['form_data']['phone']) ? htmlspecialchars($_SESSION['form_data']['phone']) : ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="service">Service *</label>
                                <select id="service" name="service" required>
                                    <option value="">Select a service</option>
                                    <option value="haircut" <?php echo (isset($_SESSION['form_data']['service']) && $_SESSION['form_data']['service'] == 'haircut') ? 'selected' : ''; ?>>Haircut & Style - $35</option>
                                    <option value="beard_trim" <?php echo (isset($_SESSION['form_data']['service']) && $_SESSION['form_data']['service'] == 'beard_trim') ? 'selected' : ''; ?>>Beard Trim - $20</option>
                                    <option value="hot_towel_shave" <?php echo (isset($_SESSION['form_data']['service']) && $_SESSION['form_data']['service'] == 'hot_towel_shave') ? 'selected' : ''; ?>>Hot Towel Shave - $45</option>
                                    <option value="hair_wash_style" <?php echo (isset($_SESSION['form_data']['service']) && $_SESSION['form_data']['service'] == 'hair_wash_style') ? 'selected' : ''; ?>>Hair Wash & Style - $25</option>
                                    <option value="full_service" <?php echo (isset($_SESSION['form_data']['service']) && $_SESSION['form_data']['service'] == 'full_service') ? 'selected' : ''; ?>>Full Service - $65</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="date">Appointment Date *</label>
                                <input type="date" id="date" name="date" value="<?php echo isset($_SESSION['form_data']['date']) ? htmlspecialchars($_SESSION['form_data']['date']) : ''; ?>" min="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="time">Appointment Time *</label>
                                <select id="time" name="time" required>
                                    <option value="">Select a time</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Additional Notes (Optional)</label>
                            <textarea id="message" name="message" rows="4" placeholder="Any specific requests or notes for your appointment"><?php echo isset($_SESSION['form_data']['message']) ? htmlspecialchars($_SESSION['form_data']['message']) : ''; ?></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-large">Book Appointment</button>
                    </form>
                </div>
                
                <div class="booking-info">
                    <h3>Booking Information</h3>
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h4>Business Hours</h4>
                            <p>Monday - Friday: 9:00 AM - 8:00 PM<br>
                            Saturday - Sunday: 9:00 AM - 6:00 PM</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Need Help?</h4>
                            <p>Call us at (555) 123-4567 for assistance with booking or questions about our services.</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-calendar-alt"></i>
                        <div>
                            <h4>Cancellation Policy</h4>
                            <p>Please cancel or reschedule at least 24 hours in advance to avoid cancellation fees.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Blade & Fade Barbers</h3>
                    <p>Premium grooming for the modern man. Experience the perfect blend of tradition and style.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php#about">About</a></li>
                        <li><a href="index.php#services">Services</a></li>
                        <li><a href="index.php#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="index.php#services">Haircut & Style</a></li>
                        <li><a href="index.php#services">Beard Trim</a></li>
                        <li><a href="index.php#services">Hot Towel Shave</a></li>
                        <li><a href="index.php#services">Full Service</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Main Street, Your City</p>
                    <p><i class="fas fa-phone"></i> (555) 123-4567</p>
                    <p><i class="fas fa-envelope"></i> info@bladeandfade.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Blade & Fade Barbers. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
    <script>
        // Clear form data from session after displaying
        <?php unset($_SESSION['form_data']); ?>
        
        // Update available times when date changes
        document.getElementById('date').addEventListener('change', function() {
            const date = this.value;
            const timeSelect = document.getElementById('time');
            timeSelect.innerHTML = '<option value="">Select a time</option>';
            
            if (date) {
                // This would normally fetch available times from the server
                // For now, we'll use the PHP function logic
                const dayOfWeek = new Date(date).getDay();
                let times = [];
                
                if (dayOfWeek >= 1 && dayOfWeek <= 5) {
                    // Weekdays: 9 AM to 8 PM
                    for (let hour = 9; hour < 20; hour++) {
                        times.push(String(hour).padStart(2, '0') + ':00');
                        times.push(String(hour).padStart(2, '0') + ':30');
                    }
                } else {
                    // Weekends: 9 AM to 6 PM
                    for (let hour = 9; hour < 18; hour++) {
                        times.push(String(hour).padStart(2, '0') + ':00');
                        times.push(String(hour).padStart(2, '0') + ':30');
                    }
                }
                
                times.forEach(time => {
                    const option = document.createElement('option');
                    option.value = time;
                    option.textContent = new Date('2000-01-01T' + time).toLocaleTimeString('en-US', {hour: 'numeric', minute: '2-digit', hour12: true});
                    timeSelect.appendChild(option);
                });
            }
        });
    </script>
</body>
</html>
