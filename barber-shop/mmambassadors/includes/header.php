<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Ambassadors for Jesus Christ - Motorcycle Ministry'; ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Ambassadors for Jesus Christ Motorcycle Ministry - A Christian motorcycle ministry dedicated to spreading the Gospel through fellowship, community service, and motorcycle riding. Join our community of believers on two wheels.'; ?>">
    <meta name="keywords" content="Christian motorcycle ministry, motorcycle ministry, Jesus Christ, motorcycle club, Christian bikers, motorcycle fellowship, Christian community, motorcycle riding, faith-based motorcycle group, Christian motorcycle riders">
    <meta name="author" content="Ambassadors for Jesus Christ Motorcycle Ministry">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    
    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : 'Ambassadors for Jesus Christ - Motorcycle Ministry'; ?>">
    <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : 'A Christian motorcycle ministry dedicated to spreading the Gospel through fellowship, community service, and motorcycle riding.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ambassadorsmmtx.com<?php echo $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="https://ambassadorsmmtx.com/mediaStickers/mmLogo.png">
    <meta property="og:site_name" content="Ambassadors for Jesus Christ Motorcycle Ministry">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title : 'Ambassadors for Jesus Christ - Motorcycle Ministry'; ?>">
    <meta name="twitter:description" content="<?php echo isset($page_description) ? $page_description : 'A Christian motorcycle ministry dedicated to spreading the Gospel through fellowship, community service, and motorcycle riding.'; ?>">
    <meta name="twitter:image" content="https://ambassadorsmmtx.com/mediaStickers/mmLogo.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://ambassadorsmmtx.com<?php echo $_SERVER['REQUEST_URI']; ?>">
    
    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#8B0000">
    <meta name="msapplication-TileColor" content="#8B0000">
    <meta name="application-name" content="Ambassadors for Jesus Christ">
    
    <!-- Structured Data for Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Ambassadors for Jesus Christ Motorcycle Ministry",
        "description": "A Christian motorcycle ministry dedicated to spreading the Gospel through fellowship, community service, and motorcycle riding.",
        "url": "https://ambassadorsmmtx.com",
        "logo": "https://ambassadorsmmtx.com/mediaStickers/mmLogo.png",
        "foundingDate": "2024",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "US"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "General Inquiry",
            "availableLanguage": "English"
        },
        "sameAs": [
            "https://www.facebook.com/yourpage",
            "https://www.instagram.com/yourpage"
        ],
        "areaServed": "United States",
        "serviceType": "Religious Organization",
        "mission": "To spread the Gospel of Jesus Christ through motorcycle ministry, community service, and Christian fellowship."
    }
    </script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Analytics (Replace GA_MEASUREMENT_ID with your actual ID) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script> -->
    
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/admin/') !== false) ? '../styles.css' : 'styles.css'; ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/admin/') !== false) ? '../mediaStickers/mmLogo.png' : 'mediaStickers/mmLogo.png'; ?>">
    
    <!-- Verse of the Day -->
    <?php 
    if (basename($_SERVER['PHP_SELF']) == 'index.php') {
        if (file_exists('includes/verse_of_day.php')) {
            include 'includes/verse_of_day.php';
            $todays_verse = getVerseOfTheDay();
        } else {
            // Fallback verse if file doesn't exist
            $todays_verse = [
                'verse' => 'In the same way, count yourselves dead to sin but alive to God in Christ Jesus. Therefore do not let sin reign in your mortal body so that you obey its evil desires.',
                'reference' => 'Romans 6:11-12',
                'date' => date('Y-m-d'),
                'timestamp' => time()
            ];
        }
    }
    ?>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <img src="<?php echo (strpos($_SERVER['REQUEST_URI'], '/admin/') !== false) ? '../mediaStickers/mmLogo.png' : 'mediaStickers/mmLogo.png'; ?>" alt="Ambassadors for Jesus Christ" class="logo-img">
                <span class="logo-text">AMBASSADORS</span>
            </div>
            
            <div class="nav-menu" id="nav-menu">
                <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/admin/') !== false) ? '../index.php' : 'index.php'; ?>" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a>
                <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/admin/') !== false) ? '../gallery.php' : 'gallery.php'; ?>" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'active' : ''; ?>">Gallery</a>
                <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/admin/') !== false) ? '../events.php' : 'events.php'; ?>" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'events.php' ? 'active' : ''; ?>">Events</a>
                <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/admin/') !== false) ? '../prayer.php' : 'prayer.php'; ?>" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'prayer.php' ? 'active' : ''; ?>">Prayer</a>
                <a href="<?php echo (strpos($_SERVER['REQUEST_URI'], '/admin/') !== false) ? '../login.php' : 'login.php'; ?>" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'login.php' ? 'active' : ''; ?>">Access</a>
            </div>
            
            <div class="hamburger" id="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">

