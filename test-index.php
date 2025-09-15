<?php
// Simplified test version of index.php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$page_title = "Test Page - Cyrus Wilburn Portfolio";
$page_description = "Testing portfolio website";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .success { background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin: 10px 0; }
        .error { background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin: 10px 0; }
    </style>
</head>
<body>
    <h1>Portfolio Test Page</h1>
    
    <div class="success">
        ✅ Basic PHP is working
    </div>
    
    <h2>Testing Database Connection</h2>
    <?php
    try {
        require_once 'shared-config/database.php';
        $pdo = getDatabaseConnection();
        if ($pdo) {
            echo '<div class="success">✅ Database connection successful!</div>';
        } else {
            echo '<div class="error">❌ Database connection failed</div>';
        }
    } catch (Exception $e) {
        echo '<div class="error">❌ Database error: ' . $e->getMessage() . '</div>';
    }
    ?>
    
    <h2>Testing CSS</h2>
    <p>If you can see this styled text, CSS is working.</p>
    
    <h2>Testing JavaScript</h2>
    <button onclick="alert('JavaScript is working!')">Test JavaScript</button>
    
    <p><a href="index.php">Try the main portfolio page</a></p>
    <p><a href="test-connection.php">Run detailed connection test</a></p>
</body>
</html>
