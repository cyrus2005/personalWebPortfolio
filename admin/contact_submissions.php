<?php
// Contact Form Submissions Admin Page
// Simple admin interface to view contact form submissions

// Basic authentication (you should improve this for production)
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    if (isset($_POST['admin_password']) && $_POST['admin_password'] === 'cyrus2024') {
        $_SESSION['admin_logged_in'] = true;
    } else {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Admin Login - Cyrus Wilburn Portfolio</title>
            <style>
                body { font-family: Arial, sans-serif; max-width: 400px; margin: 100px auto; padding: 20px; }
                input { width: 100%; padding: 10px; margin: 10px 0; }
                button { width: 100%; padding: 10px; background: #800020; color: white; border: none; cursor: pointer; }
            </style>
        </head>
        <body>
            <h2>Admin Login</h2>
            <form method="POST">
                <input type="password" name="admin_password" placeholder="Admin Password" required>
                <button type="submit">Login</button>
            </form>
        </body>
        </html>
        <?php
        exit;
    }
}

// Include database configuration
$db_config_paths = [
    __DIR__ . '/../shared-config/database.php',
    __DIR__ . '/../../shared-config/database.php'
];

$db_config_loaded = false;
foreach ($db_config_paths as $path) {
    if (file_exists($path)) {
        require_once $path;
        $db_config_loaded = true;
        break;
    }
}

// Fallback database configuration
if (!$db_config_loaded) {
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'cyruwjtb_main');
    define('DB_USER', 'cyruwjtb_admin');
    define('DB_PASS', 'Pjah6966!$');
    
    function getDatabaseConnection($database = null) {
        try {
            $db_name = $database ? $database : DB_NAME;
            $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . $db_name, DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch(PDOException $e) {
            error_log("Database connection failed: " . $e->getMessage());
            return false;
        }
    }
}

// Handle status updates
if (isset($_POST['update_status']) && isset($_POST['submission_id']) && isset($_POST['status'])) {
    try {
        $pdo = getDatabaseConnection();
        if ($pdo) {
            $stmt = $pdo->prepare("UPDATE contact_submissions SET status = ? WHERE id = ?");
            $stmt->execute([$_POST['status'], $_POST['submission_id']]);
            $message = "Status updated successfully!";
        }
    } catch (Exception $e) {
        $error = "Error updating status: " . $e->getMessage();
    }
}

// Get submissions
$submissions = [];
try {
    $pdo = getDatabaseConnection();
    if ($pdo) {
        $stmt = $pdo->query("SELECT * FROM contact_submissions ORDER BY created_at DESC");
        $submissions = $stmt->fetchAll();
    }
} catch (Exception $e) {
    $error = "Error fetching submissions: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Submissions - Cyrus Wilburn Portfolio</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background: #f5f5f5; }
        .container { max-width: 1200px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #800020; margin-bottom: 30px; }
        .submission { border: 1px solid #ddd; margin: 15px 0; padding: 15px; border-radius: 5px; background: #fafafa; }
        .submission.new { border-left: 4px solid #800020; }
        .submission.contacted { border-left: 4px solid #007bff; }
        .submission.in_progress { border-left: 4px solid #ffc107; }
        .submission.completed { border-left: 4px solid #28a745; }
        .submission-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; }
        .submission-id { font-weight: bold; color: #666; }
        .submission-date { color: #666; font-size: 0.9em; }
        .submission-name { font-size: 1.2em; font-weight: bold; color: #800020; }
        .submission-email { color: #007bff; }
        .submission-phone { color: #666; }
        .submission-service { background: #e9ecef; padding: 2px 8px; border-radius: 12px; font-size: 0.8em; }
        .submission-message { margin: 10px 0; padding: 10px; background: white; border-radius: 4px; }
        .status-form { display: inline-block; }
        .status-form select { padding: 5px; margin-right: 10px; }
        .status-form button { padding: 5px 15px; background: #800020; color: white; border: none; border-radius: 3px; cursor: pointer; }
        .status-form button:hover { background: #5C0016; }
        .logout { float: right; margin-bottom: 20px; }
        .logout a { color: #800020; text-decoration: none; padding: 5px 10px; border: 1px solid #800020; border-radius: 3px; }
        .logout a:hover { background: #800020; color: white; }
        .stats { display: flex; gap: 20px; margin-bottom: 30px; }
        .stat-box { background: #800020; color: white; padding: 15px; border-radius: 5px; text-align: center; min-width: 100px; }
        .stat-number { font-size: 2em; font-weight: bold; }
        .stat-label { font-size: 0.9em; }
    </style>
</head>
<body>
    <div class="container">
        <div class="logout">
            <a href="?logout=1">Logout</a>
        </div>
        
        <h1>Contact Form Submissions</h1>
        
        <?php if (isset($message)): ?>
            <div style="background: #d4edda; color: #155724; padding: 10px; border-radius: 4px; margin-bottom: 20px;">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>
        
        <?php if (isset($error)): ?>
            <div style="background: #f8d7da; color: #721c24; padding: 10px; border-radius: 4px; margin-bottom: 20px;">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>
        
        <?php if (empty($submissions)): ?>
            <p>No submissions found.</p>
        <?php else: ?>
            <?php
            $stats = [
                'total' => count($submissions),
                'new' => count(array_filter($submissions, fn($s) => $s['status'] === 'new')),
                'contacted' => count(array_filter($submissions, fn($s) => $s['status'] === 'contacted')),
                'in_progress' => count(array_filter($submissions, fn($s) => $s['status'] === 'in_progress')),
                'completed' => count(array_filter($submissions, fn($s) => $s['status'] === 'completed'))
            ];
            ?>
            
            <div class="stats">
                <div class="stat-box">
                    <div class="stat-number"><?php echo $stats['total']; ?></div>
                    <div class="stat-label">Total</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number"><?php echo $stats['new']; ?></div>
                    <div class="stat-label">New</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number"><?php echo $stats['contacted']; ?></div>
                    <div class="stat-label">Contacted</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number"><?php echo $stats['in_progress']; ?></div>
                    <div class="stat-label">In Progress</div>
                </div>
                <div class="stat-box">
                    <div class="stat-number"><?php echo $stats['completed']; ?></div>
                    <div class="stat-label">Completed</div>
                </div>
            </div>
            
            <?php foreach ($submissions as $submission): ?>
                <div class="submission <?php echo $submission['status']; ?>">
                    <div class="submission-header">
                        <div>
                            <span class="submission-id">#<?php echo $submission['id']; ?></span>
                            <span class="submission-name"><?php echo htmlspecialchars($submission['name']); ?></span>
                        </div>
                        <div class="submission-date">
                            <?php echo date('M j, Y g:i A', strtotime($submission['created_at'])); ?>
                        </div>
                    </div>
                    
                    <div>
                        <span class="submission-email"><?php echo htmlspecialchars($submission['email']); ?></span>
                        <?php if ($submission['phone']): ?>
                            | <span class="submission-phone"><?php echo htmlspecialchars($submission['phone']); ?></span>
                        <?php endif; ?>
                        <?php if ($submission['service']): ?>
                            | <span class="submission-service"><?php echo htmlspecialchars($submission['service']); ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <div class="submission-message">
                        <?php echo nl2br(htmlspecialchars($submission['message'])); ?>
                    </div>
                    
                    <div>
                        <form class="status-form" method="POST">
                            <input type="hidden" name="submission_id" value="<?php echo $submission['id']; ?>">
                            <select name="status">
                                <option value="new" <?php echo $submission['status'] === 'new' ? 'selected' : ''; ?>>New</option>
                                <option value="contacted" <?php echo $submission['status'] === 'contacted' ? 'selected' : ''; ?>>Contacted</option>
                                <option value="in_progress" <?php echo $submission['status'] === 'in_progress' ? 'selected' : ''; ?>>In Progress</option>
                                <option value="completed" <?php echo $submission['status'] === 'completed' ? 'selected' : ''; ?>>Completed</option>
                            </select>
                            <button type="submit" name="update_status">Update Status</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>

<?php
// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: contact_submissions.php');
    exit;
}
?>
