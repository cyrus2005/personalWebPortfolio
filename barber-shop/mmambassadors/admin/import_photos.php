<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: ../login.php');
    exit();
}

$page_title = "Import Photos - Gallery Admin";
include '../includes/header.php';

// Database connection
require_once '../config/database.php';
$database = new Database();
$db = $database->getConnection();

$message = '';
$error = '';

if ($_POST && isset($_POST['import_photos'])) {
    $media_folder = '../mediaGallery/';
    $imported_count = 0;
    $skipped_count = 0;
    
    if (is_dir($media_folder)) {
        $files = scandir($media_folder);
        $image_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        
        foreach ($files as $file) {
            if ($file === '.' || $file === '..') continue;
            
            $file_extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            
            if (in_array($file_extension, $image_extensions)) {
                // Check if image already exists in database
                $check_query = "SELECT id FROM gallery_images WHERE filename = ?";
                $check_stmt = $db->prepare($check_query);
                $check_stmt->execute([$file]);
                
                if ($check_stmt->rowCount() === 0) {
                    // Insert new image
                    $insert_query = "INSERT INTO gallery_images (filename, title, description, category, featured, created_at) VALUES (?, ?, ?, ?, ?, NOW())";
                    $insert_stmt = $db->prepare($insert_query);
                    
                    $title = pathinfo($file, PATHINFO_FILENAME);
                    $title = str_replace(['_', '-'], ' ', $title);
                    $title = ucwords($title);
                    
                    $insert_stmt->execute([
                        $file,
                        $title,
                        'Imported from mediaGallery folder',
                        'general',
                        0
                    ]);
                    
                    $imported_count++;
                } else {
                    $skipped_count++;
                }
            }
        }
        
        $message = "Import completed! $imported_count new photos imported, $skipped_count already existed.";
    } else {
        $error = "MediaGallery folder not found!";
    }
}

// Get current photo count
$count_query = "SELECT COUNT(*) as total FROM gallery_images";
$count_stmt = $db->prepare($count_query);
$count_stmt->execute();
$current_count = $count_stmt->fetch()['total'];
?>

<!-- Import Hero -->
<section class="import-hero">
    <div class="container">
        <h1 class="import-title">Import Photos</h1>
        <p class="import-subtitle">Add photos from the mediaGallery folder to your database</p>
    </div>
</section>

<!-- Import Form -->
<section class="import-section">
    <div class="container">
        <div class="import-content">
            <?php if ($message): ?>
                <div class="success-message"><?php echo $message; ?></div>
            <?php endif; ?>
            
            <?php if ($error): ?>
                <div class="error-message"><?php echo $error; ?></div>
            <?php endif; ?>
            
            <div class="import-info">
                <div class="info-card">
                    <h3>Current Status</h3>
                    <p><strong><?php echo $current_count; ?></strong> photos in database</p>
                    <p>Photos will be imported from: <code>mediaGallery/</code> folder</p>
                </div>
                
                <div class="info-card">
                    <h3>Supported Formats</h3>
                    <p>JPG, JPEG, PNG, GIF, WebP</p>
                </div>
            </div>
            
            <form method="POST" class="import-form">
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="confirm_import" required>
                        I understand this will import all supported images from the mediaGallery folder
                    </label>
                </div>
                
                <button type="submit" name="import_photos" class="import-button">
                    <i class="fas fa-upload"></i>
                    Import Photos
                </button>
            </form>
            
            <div class="import-actions">
                <a href="index.php" class="back-button">
                    <i class="fas fa-arrow-left"></i>
                    Back to Admin
                </a>
                <a href="../gallery.php" class="view-button">
                    <i class="fas fa-eye"></i>
                    View Gallery
                </a>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
