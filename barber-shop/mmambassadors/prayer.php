<?php
$page_title = "Prayer Requests - Ambassadors for Jesus Christ";
$page_description = "Submit your prayer requests to our Christian motorcycle ministry community. We believe in the power of prayer and are here to support you through prayer and fellowship.";
include 'includes/header.php';

// Handle form submission
$success_message = '';
$error_message = '';

if ($_POST && isset($_POST['submit_prayer'])) {
    try {
        require_once 'config/database.php';
        $database = new Database();
        $db = $database->getConnection();
        
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $request = trim($_POST['request']);
        $is_public = isset($_POST['is_public']) ? 1 : 0;
        
        // Validate required fields
        if (empty($name) || empty($request)) {
            throw new Exception('Name and prayer request are required.');
        }
        
        // Insert prayer request
        $insert_query = "INSERT INTO prayer_requests (name, email, phone, request, is_public, status, created_at) VALUES (?, ?, ?, ?, ?, 'pending', NOW())";
        $stmt = $db->prepare($insert_query);
        $result = $stmt->execute([$name, $email, $phone, $request, $is_public]);
        
        if ($result) {
            $success_message = 'Thank you for your prayer request. We will pray for you and your needs.';
        } else {
            throw new Exception('Failed to submit prayer request. Please try again.');
        }
        
    } catch (Exception $e) {
        $error_message = $e->getMessage();
    }
}
?>

<style>
.prayer-hero {
    background: linear-gradient(135deg, #8B0000 0%, #DC143C 100%);
    color: white;
    padding: 4rem 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.prayer-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="cross" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><path d="M10 0v20M0 10h20" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23cross)"/></svg>');
    opacity: 0.3;
}

.prayer-hero-content {
    position: relative;
    z-index: 2;
}

.prayer-hero h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

.prayer-hero p {
    font-size: 1.3rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.prayer-form-section {
    padding: 4rem 0;
    background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
}

.prayer-form-container {
    max-width: 800px;
    margin: 0 auto;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 20px;
    padding: 3rem;
    color: white;
}

.form-title {
    text-align: center;
    margin-bottom: 2rem;
}

.form-title h2 {
    font-size: 2rem;
    margin-bottom: 0.5rem;
    color: #FFD700;
}

.form-title p {
    opacity: 0.8;
    font-size: 1.1rem;
}

.prayer-form {
    display: grid;
    gap: 1.5rem;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.form-group label {
    font-weight: 500;
    color: #FFD700;
    font-size: 1rem;
}

.form-group input,
.form-group textarea {
    padding: 1rem;
    border: 2px solid rgba(255,255,255,0.3);
    border-radius: 10px;
    background: rgba(255,255,255,0.1);
    color: white;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #FFD700;
    background: rgba(255,255,255,0.15);
    box-shadow: 0 0 0 3px rgba(255,215,0,0.2);
}

.form-group input::placeholder,
.form-group textarea::placeholder {
    color: rgba(255,255,255,0.6);
}

.form-group textarea {
    min-height: 120px;
    resize: vertical;
}

.checkbox-group {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-top: 0.5rem;
}

.checkbox-group input[type="checkbox"] {
    width: 18px;
    height: 18px;
    accent-color: #FFD700;
}

.checkbox-group label {
    font-size: 0.9rem;
    opacity: 0.8;
    cursor: pointer;
}

.submit-btn {
    background: linear-gradient(135deg, #8B0000 0%, #DC143C 100%);
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: 10px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(139,0,0,0.4);
}

.submit-btn:active {
    transform: translateY(0);
}

.success-message, .error-message {
    padding: 1rem;
    border-radius: 10px;
    margin-bottom: 2rem;
    text-align: center;
    font-weight: 500;
}

.success-message {
    background: rgba(40,167,69,0.2);
    color: #28a745;
    border: 2px solid rgba(40,167,69,0.3);
}

.error-message {
    background: rgba(220,53,69,0.2);
    color: #dc3545;
    border: 2px solid rgba(220,53,69,0.3);
}

.prayer-info {
    background: rgba(255,215,0,0.1);
    border: 1px solid rgba(255,215,0,0.3);
    border-radius: 10px;
    padding: 1.5rem;
    margin-bottom: 2rem;
}

.prayer-info h3 {
    color: #FFD700;
    margin-bottom: 1rem;
    font-size: 1.2rem;
}

.prayer-info ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.prayer-info li {
    padding: 0.5rem 0;
    border-bottom: 1px solid rgba(255,215,0,0.2);
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.prayer-info li:last-child {
    border-bottom: none;
}

.prayer-info i {
    color: #FFD700;
    width: 20px;
}

@media (max-width: 768px) {
    .prayer-hero h1 {
        font-size: 2rem;
    }
    
    .prayer-hero p {
        font-size: 1.1rem;
    }
    
    .prayer-form-container {
        padding: 2rem;
        margin: 0 1rem;
    }
    
    .form-title h2 {
        font-size: 1.5rem;
    }
}
</style>

<!-- Prayer Hero -->
<section class="prayer-hero">
    <div class="container">
        <div class="prayer-hero-content">
            <h1><i class="fas fa-praying-hands"></i> Prayer Requests</h1>
            <p>We believe in the power of prayer. Share your prayer requests with our community and let us pray together.</p>
        </div>
    </div>
</section>

<!-- Prayer Form Section -->
<section class="prayer-form-section">
    <div class="container">
        <div class="prayer-form-container">
            <div class="form-title">
                <h2>Submit Your Prayer Request</h2>
                <p>Your request will be shared with our prayer team and community</p>
            </div>

            <!-- Success/Error Messages -->
            <?php if ($success_message): ?>
                <div class="success-message">
                    <i class="fas fa-check-circle"></i> <?php echo htmlspecialchars($success_message); ?>
                </div>
            <?php endif; ?>

            <?php if ($error_message): ?>
                <div class="error-message">
                    <i class="fas fa-exclamation-circle"></i> <?php echo htmlspecialchars($error_message); ?>
                </div>
            <?php endif; ?>

            <!-- Prayer Information -->
            <div class="prayer-info">
                <h3><i class="fas fa-info-circle"></i> How Prayer Requests Work</h3>
                <ul>
                    <li><i class="fas fa-heart"></i> All requests are reviewed by our prayer team</li>
                    <li><i class="fas fa-users"></i> Public requests may be shared with our community</li>
                    <li><i class="fas fa-lock"></i> Private requests are kept confidential</li>
                    <li><i class="fas fa-praying-hands"></i> We pray for all requests regularly</li>
                </ul>
            </div>

            <!-- Prayer Request Form -->
            <form method="POST" class="prayer-form">
                <div class="form-group">
                    <label for="name">Your Name *</label>
                    <input type="text" id="name" name="name" required placeholder="Enter your full name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="your.email@example.com" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="(555) 123-4567" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
                </div>

                <div class="form-group">
                    <label for="request">Prayer Request *</label>
                    <textarea id="request" name="request" required placeholder="Please share your prayer request. Be as specific or general as you feel comfortable..." rows="5"><?php echo htmlspecialchars($_POST['request'] ?? ''); ?></textarea>
                </div>

                <div class="form-group">
                    <div class="checkbox-group">
                        <input type="checkbox" id="is_public" name="is_public" value="1" <?php echo isset($_POST['is_public']) ? 'checked' : ''; ?>>
                        <label for="is_public">Make this request public (may be shared with our community)</label>
                    </div>
                </div>

                <button type="submit" name="submit_prayer" class="submit-btn">
                    <i class="fas fa-paper-plane"></i> Submit Prayer Request
                </button>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
