<?php
$page_title = "Ambassadors for Jesus Christ - Motorcycle Ministry";
include 'includes/header.php';
?>

<!-- Verse of the Day Section -->
<?php if (isset($todays_verse)): ?>
<section class="verse-section">
    <div class="container">
        <div class="verse-content">
            <div class="verse-icon">
                <i class="fas fa-bible"></i>
            </div>
            <div class="verse-text">
                <h3>Verse of the Day</h3>
                <blockquote class="verse-quote">
                    "<?php echo htmlspecialchars($todays_verse['verse']); ?>"
                </blockquote>
                <cite class="verse-reference">— <?php echo htmlspecialchars($todays_verse['reference']); ?></cite>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-background">
    </div>
    <div class="hero-container">
        <div class="hero-content">
            <h1 class="hero-title">
                <span class="title-main">AMBASSADORS FOR</span>
                <span class="title-main">JESUS CHRIST</span>
                <span class="title-sub">MOTORCYCLE MINISTRY</span>
            </h1>
            <p class="hero-mission">
                The Ambassadors for JESUS CHRIST Motorcycle Ministry provides an excellent opportunity to make a difference in the biker world while doing what you love to do and enjoying the fellowship of Christians committed to the LORD and to one another. Our goal is to share the love of JESUS CHRIST with a lost and hurting world.
            </p>
        </div>
        <div class="hero-logo">
            <img src="mediaStickers/mmLogo.png" alt="Ambassadors Logo" class="logo-large">
        </div>
    </div>
</section>

<!-- Our Mission Section -->
<section class="mission-section">
    <div class="container">
        <div class="mission-content">
            <h2 class="section-title">Our Mission</h2>
            <p class="mission-text">
                The Ambassadors for JESUS CHRIST Motorcycle Ministry provides an excellent opportunity to make a difference in the biker world while doing what you love to do and enjoying the fellowship of Christians committed to the LORD and to one another. Our goal is to share the love of JESUS CHRIST with a lost and hurting world.
            </p>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="about-section">
    <div class="container">
        <div class="about-content">
            <h2 class="section-title">About Us</h2>
            <div class="definition">
                <span class="definition-word">am·bas·sa·dor</span>
                <span class="definition-type">(noun)</span>
            </div>
            <p class="about-text">
                An ambassador is someone authorized to act on behalf of a higher authority; they serve as a representative. The common usage today is a person who represents their country to a foreign government. The Ambassadors for JESUS CHRIST Motorcycle Ministry was founded by Pastor Hollywood Joe Guebara of Houston, Texas in 1997.
            </p>
        </div>
    </div>
</section>

<!-- Group Photo Section -->
<section class="group-photo-section">
    <div class="container">
        <div class="group-content">
            <div class="group-photo">
                <div class="photo-placeholder">
                    <i class="fas fa-camera"></i>
                    <p>Group Photo Coming Soon</p>
                    <small>Upload your group photo here</small>
                </div>
            </div>
            <div class="group-text">
                <h2 class="section-title">OUR AMBASSADORS</h2>
                <h3>Meet Our Brotherhood</h3>
                <p>
                    Our ministry is made up of dedicated Christians who share a passion for motorcycles and a commitment to spreading the Gospel. We come together as brothers and sisters in Christ, united by our faith and our love for the open road.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Founder's Vision Section -->
<section class="founder-section">
    <div class="container">
        <div class="founder-content">
            <h2 class="section-title">FOUNDER'S VISION</h2>
            
            <div class="vision-points">
                <div class="vision-point">
                    <h3>I'm a Christian</h3>
                </div>
                <div class="vision-point">
                    <h3>I'm a Messenger</h3>
                </div>
                <div class="vision-point">
                    <h3>I'm a Biker</h3>
                </div>
            </div>
            
            <blockquote class="founder-quote">
                "Thru my Faith, with my Message and on my Motorcycle, I will ride those Highways and Byways looking for that Biker that will hear my Message and discover his faith in Jesus Christ. And when that happens, he becomes my brother. And as Brothers when we go out and follow the same system we create a brotherhood. I call that Brotherhood the Ambassadors for Jesus Christ."
                <cite>- Hollywood Joe (Founder of Ambassadors for Jesus Christ MM)</cite>
            </blockquote>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="section-title">JOIN THE BROTHERHOOD</h2>
            <div class="cta-buttons">
                <a href="gallery.php" class="cta-button">
                    <i class="fas fa-images"></i>
                    View Gallery
                </a>
                <a href="events.php" class="cta-button">
                    <i class="fas fa-calendar"></i>
                    Upcoming Events
                </a>
                <a href="login.php" class="cta-button">
                    <i class="fas fa-lock"></i>
                    Access
                </a>
                <a href="#" class="cta-button">
                    <i class="fab fa-facebook"></i>
                    Follow on Facebook
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
