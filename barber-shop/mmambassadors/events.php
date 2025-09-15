<?php
$page_title = "Events - Ambassadors for Jesus Christ";
$page_description = "Join us for upcoming motorcycle ministry events, community rides, fellowship gatherings, and service opportunities with Ambassadors for Jesus Christ Motorcycle Ministry.";
include 'includes/header.php';

// Database connection
require_once 'config/database.php';
$database = new Database();
$db = $database->getConnection();

// Get upcoming events
$events_query = "SELECT * FROM events WHERE status IN ('upcoming', 'ongoing') ORDER BY event_date ASC";
$events_stmt = $db->prepare($events_query);
$events_stmt->execute();
$events = $events_stmt->fetchAll();
?>

<!-- Events Hero -->
<section class="events-hero">
    <div class="container">
        <h1 class="events-title">UPCOMING EVENTS</h1>
        <?php if (empty($events)): ?>
            <div class="coming-soon">
                <div class="coming-soon-content">
                    <i class="fas fa-calendar-alt"></i>
                    <h2>Coming Soon</h2>
                    <p>We're working on bringing you exciting events and rides. Stay tuned for updates!</p>
                    <a href="#" class="facebook-link">
                        <i class="fab fa-facebook"></i>
                        Follow us on Facebook for updates
                    </a>
                </div>
            </div>
        <?php else: ?>
            <div class="events-grid">
                <?php foreach ($events as $event): ?>
                    <div class="event-card">
                        <div class="event-image">
                            <?php if (!empty($event['photo_filename']) && file_exists('eventImages/' . $event['photo_filename'])): ?>
                                <img src="eventImages/<?php echo htmlspecialchars($event['photo_filename']); ?>" alt="<?php echo htmlspecialchars($event['title']); ?>">
                            <?php else: ?>
                                <div class="default-event-image">
                                    <img src="mediaStickers/motorcycleSticker.png" alt="Motorcycle" class="sticker-image">
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="event-date">
                            <span class="event-day"><?php echo date('j', strtotime($event['event_date'])); ?></span>
                            <span class="event-month"><?php echo date('M', strtotime($event['event_date'])); ?></span>
                        </div>
                        <div class="event-content">
                            <h3 class="event-title"><?php echo htmlspecialchars($event['title']); ?></h3>
                            <?php if (!empty($event['description'])): ?>
                                <p class="event-description"><?php echo htmlspecialchars($event['description']); ?></p>
                            <?php endif; ?>
                            <div class="event-details">
                                <?php if (!empty($event['location'])): ?>
                                    <div class="event-detail">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span><?php echo htmlspecialchars($event['location']); ?></span>
                                    </div>
                                <?php endif; ?>
                                <div class="event-detail">
                                    <i class="fas fa-clock"></i>
                                    <span><?php echo date('M j, Y g:i A', strtotime($event['event_date'])); ?></span>
                                </div>
                                <div class="event-detail">
                                    <i class="fas fa-info-circle"></i>
                                    <span class="event-status status-<?php echo $event['status']; ?>">
                                        <?php echo ucfirst($event['status']); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<script>
// Auto-refresh events page every 30 seconds
setInterval(function() {
    // Only refresh if the page is visible (not in background tab)
    if (!document.hidden) {
        location.reload();
    }
}, 30000);

// Also refresh when the page becomes visible again
document.addEventListener('visibilitychange', function() {
    if (!document.hidden) {
        // Small delay to ensure any background processes complete
        setTimeout(function() {
            location.reload();
        }, 1000);
    }
});
</script>
