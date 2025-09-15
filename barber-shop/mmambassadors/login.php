<?php
session_start();

// Handle login BEFORE including header
if ($_POST) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if ($username === 'motorcycle' && $password === 'Jesus4Ever') {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin/index.php');
        exit();
    } else {
        $error_message = 'Invalid credentials';
    }
}

$page_title = "Access - Ambassadors for Jesus Christ";
include 'includes/header.php';
?>

<!-- Login Hero -->
<section class="login-hero">
    <div class="container">
        <h1 class="login-title">ACCESS</h1>
        <div class="login-content">
            <div class="login-form-container">
                <form class="login-form" method="POST">
                    <?php if (isset($error_message)): ?>
                        <div class="error-message"><?php echo $error_message; ?></div>
                    <?php endif; ?>
                    
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    
                    <button type="submit" class="login-button">Access</button>
                </form>
                
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
