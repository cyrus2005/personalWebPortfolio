<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    exit('Unauthorized');
}

require_once '../config/database.php';

$database = new Database();
$db = $database->getConnection();

// Get recent images (5 most recent)
$recent_query = "SELECT * FROM gallery_images ORDER BY created_at DESC LIMIT 5";
$recent_stmt = $db->prepare($recent_query);
$recent_stmt->execute();
$recent_images = $recent_stmt->fetchAll();

if (empty($recent_images)): ?>
    <div class="no-images">
        <i class="fas fa-image"></i>
        <p>No images found. Upload some photos to get started!</p>
    </div>
<?php else: ?>
    <?php foreach ($recent_images as $image): ?>
        <div class="recent-item">
            <img src="../mediaGallery/<?php echo htmlspecialchars($image['filename']); ?>" 
                 alt="<?php echo htmlspecialchars($image['title']); ?>"
                 class="recent-image">
            <div class="recent-info">
                <h4><?php echo htmlspecialchars($image['title']); ?></h4>
                <p><?php echo htmlspecialchars($image['category']); ?></p>
                <small><?php echo date('M j, Y', strtotime($image['created_at'])); ?></small>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
