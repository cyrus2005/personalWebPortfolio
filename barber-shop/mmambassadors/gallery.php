<?php
$page_title = "Gallery - Ambassadors for Jesus Christ";
$page_description = "View our photo gallery featuring motorcycle ministry events, community service, fellowship gatherings, and memorable moments from Ambassadors for Jesus Christ Motorcycle Ministry.";
include 'includes/header.php';

// Database connection
require_once 'config/database.php';
$database = new Database();
$db = $database->getConnection();

// Get featured images (3 most recent photos, regardless of featured status)
$featured_query = "SELECT * FROM gallery_images ORDER BY created_at DESC LIMIT 3";
$featured_stmt = $db->prepare($featured_query);
$featured_stmt->execute();
$featured_images = $featured_stmt->fetchAll();

// Get all images by category
$categories_query = "SELECT DISTINCT category FROM gallery_images WHERE category IS NOT NULL ORDER BY category";
$categories_stmt = $db->prepare($categories_query);
$categories_stmt->execute();
$categories = $categories_stmt->fetchAll();

// Get all images
$all_images_query = "SELECT * FROM gallery_images ORDER BY created_at DESC";
$all_stmt = $db->prepare($all_images_query);
$all_stmt->execute();
$all_images = $all_stmt->fetchAll();
?>

<!-- Gallery Hero -->
<section class="gallery-hero">
    <div class="container">
        <h1 class="gallery-title">PHOTO GALLERY</h1>
        <p class="gallery-subtitle">Capturing moments of faith, fellowship, and freedom</p>
    </div>
</section>

<!-- Featured Photos -->
<section class="featured-section">
    <div class="container">
        <h2 class="section-title">Recent Photos</h2>
        <div class="featured-gallery">
            <div class="gallery-scroll-container">
                <div class="gallery-scroll" id="featured-scroll">
                    <?php if (empty($featured_images)): ?>
                        <!-- Placeholder images when no photos in database -->
                        <div class="gallery-item">
                            <div class="image-placeholder">
                                <i class="fas fa-image"></i>
                                <p>Featured Photo 1</p>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="image-placeholder">
                                <i class="fas fa-image"></i>
                                <p>Featured Photo 2</p>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="image-placeholder">
                                <i class="fas fa-image"></i>
                                <p>Featured Photo 3</p>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php foreach ($featured_images as $image): ?>
                            <div class="gallery-item">
                                <?php 
                                $image_path = "mediaGallery/" . htmlspecialchars($image['filename']);
                                if (file_exists($image_path)): ?>
                                    <img src="<?php echo $image_path; ?>" 
                                         alt="<?php echo htmlspecialchars($image['title']); ?>"
                                         class="gallery-image"
                                         loading="lazy">
                                <?php else: ?>
                                    <div class="image-placeholder">
                                        <i class="fas fa-image"></i>
                                        <p><?php echo htmlspecialchars($image['title']); ?></p>
                                        <small>Image not found</small>
                                    </div>
                                <?php endif; ?>
                                <div class="image-overlay">
                                    <h3><?php echo htmlspecialchars($image['title']); ?></h3>
                                    <p><?php echo htmlspecialchars($image['description']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="scroll-hint">
                <i class="fas fa-chevron-left"></i>
                <span>Scroll to see more</span>
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
    </div>
</section>

<!-- Category Tabs -->
<section class="categories-section">
    <div class="container">
        <div class="category-tabs">
            <button class="tab-button active" data-category="all">All Photos</button>
            <?php foreach ($categories as $category): ?>
                <button class="tab-button" data-category="<?php echo htmlspecialchars($category['category']); ?>">
                    <?php echo ucfirst(htmlspecialchars($category['category'])); ?>
                </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- All Photos Gallery -->
<section class="all-photos-section">
    <div class="container">
        <div class="photos-gallery">
            <div class="gallery-scroll-container">
                <div class="gallery-scroll" id="photos-scroll">
                    <?php if (empty($all_images)): ?>
                        <!-- Placeholder images when no photos in database -->
                        <?php for ($i = 1; $i <= 12; $i++): ?>
                            <div class="gallery-item">
                                <div class="image-placeholder">
                                    <i class="fas fa-image"></i>
                                    <p>Photo <?php echo $i; ?></p>
                                </div>
                            </div>
                        <?php endfor; ?>
                    <?php else: ?>
                        <?php foreach ($all_images as $image): ?>
                            <div class="gallery-item" data-category="<?php echo htmlspecialchars($image['category']); ?>">
                                <?php 
                                $image_path = "mediaGallery/" . htmlspecialchars($image['filename']);
                                if (file_exists($image_path)): ?>
                                    <img src="<?php echo $image_path; ?>" 
                                         alt="<?php echo htmlspecialchars($image['title']); ?>"
                                         class="gallery-image"
                                         loading="lazy">
                                <?php else: ?>
                                    <div class="image-placeholder">
                                        <i class="fas fa-image"></i>
                                        <p><?php echo htmlspecialchars($image['title']); ?></p>
                                        <small>Image not found</small>
                                    </div>
                                <?php endif; ?>
                                <div class="image-overlay">
                                    <h3><?php echo htmlspecialchars($image['title']); ?></h3>
                                    <p><?php echo htmlspecialchars($image['description']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="scroll-hint">
                <i class="fas fa-chevron-left"></i>
                <span>Scroll to see more</span>
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
    </div>
</section>

<!-- Image Modal -->
<div class="image-modal" id="imageModal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <img src="" alt="" class="modal-image">
        <div class="modal-info">
            <h3 class="modal-title"></h3>
            <p class="modal-description"></p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
