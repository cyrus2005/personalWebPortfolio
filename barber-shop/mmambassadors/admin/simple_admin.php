<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: ../login.php');
    exit();
}

$page_title = "Event Admin - Ambassadors for Jesus Christ";
include '../includes/header.php';

// Database connection
require_once '../config/database.php';
$database = new Database();
$db = $database->getConnection();

// Get events count
$events_query = "SELECT COUNT(*) as total FROM events";
$events_stmt = $db->prepare($events_query);
$events_stmt->execute();
$total_events = $events_stmt->fetch()['total'];

// Get recent events
$recent_events_query = "SELECT * FROM events ORDER BY event_date DESC LIMIT 5";
$recent_stmt = $db->prepare($recent_events_query);
$recent_stmt->execute();
$recent_events = $recent_stmt->fetchAll();
?>

<!-- Success Banner -->
<div id="successBanner" class="success-banner" style="display: none;">
    <div class="banner-content">
        <i class="fas fa-check-circle"></i>
        <span id="bannerMessage">Event updated successfully!</span>
    </div>
</div>

<!-- Admin Hero -->
<section class="admin-hero">
    <div class="container">
        <h1 class="admin-title">Event Admin</h1>
        <p class="admin-subtitle">Manage your events</p>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-calendar"></i>
                </div>
                <div class="stat-content">
                    <h3><?php echo $total_events; ?></h3>
                    <p>Total Events</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recent Events -->
<section class="recent-events">
    <div class="container">
        <h2>Recent Events</h2>
        <div class="events-list">
            <?php if (empty($recent_events)): ?>
                <p>No events found. Add your first event!</p>
            <?php else: ?>
                <?php foreach ($recent_events as $event): ?>
                    <div class="event-item">
                        <div class="event-info">
                            <h4><?php echo htmlspecialchars($event['title']); ?></h4>
                            <p><?php echo date('M j, Y', strtotime($event['event_date'])); ?></p>
                        </div>
                        <div class="event-status status-<?php echo $event['status']; ?>">
                            <?php echo ucfirst($event['status']); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Floating Action Button -->
<div class="fab-container">
    <div class="fab-main" id="fabMain">
        <i class="fas fa-plus"></i>
    </div>
    <div class="fab-menu" id="fabMenu">
        <div class="fab-item" onclick="openEventModal()">
            <i class="fas fa-calendar-plus"></i>
            <span>Add Event</span>
        </div>
        <div class="fab-item" onclick="clearAllEvents()">
            <i class="fas fa-trash"></i>
            <span>Clear Events</span>
        </div>
    </div>
</div>

<!-- Event Modal -->
<div class="modal" id="eventModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Add New Event</h3>
            <span class="close" onclick="closeEventModal()">&times;</span>
        </div>
        <div class="modal-body">
            <form id="eventForm" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="eventTitle">Event Title *</label>
                    <input type="text" id="eventTitle" name="title" required placeholder="e.g., Monthly Ride">
                </div>
                
                <div class="form-group">
                    <label for="eventDescription">Description</label>
                    <textarea id="eventDescription" name="description" rows="3" placeholder="Brief description of the event"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="eventDate">Event Date *</label>
                    <input type="date" id="eventDate" name="event_date" required>
                </div>
                
                <div class="form-group">
                    <label for="eventTime">Event Time</label>
                    <input type="time" id="eventTime" name="event_time">
                </div>
                
                <div class="form-group">
                    <label for="eventLocation">Location</label>
                    <input type="text" id="eventLocation" name="location" placeholder="e.g., Church Parking Lot">
                </div>
                
                <div class="form-group">
                    <label for="eventStatus">Status</label>
                    <select id="eventStatus" name="status">
                        <option value="upcoming">Upcoming</option>
                        <option value="ongoing">Ongoing</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="eventPhoto">Event Photo (Optional)</label>
                    <input type="file" id="eventPhoto" name="event_photo" accept="image/*">
                    <small class="form-help">If no photo is uploaded, we'll use our default motorcycle sticker</small>
                </div>
                
                <div class="form-actions">
                    <button type="button" class="btn-cancel" onclick="closeEventModal()">Cancel</button>
                    <button type="submit" class="btn-save">Save Event</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Success banner function
function showSuccessBanner(message) {
    const banner = document.getElementById('successBanner');
    const bannerMessage = document.getElementById('bannerMessage');
    
    if (banner && bannerMessage) {
        bannerMessage.textContent = message;
        banner.style.display = 'block';
        
        // Auto-hide after 3 seconds
        setTimeout(() => {
            banner.style.display = 'none';
        }, 3000);
    }
}

// Floating Action Button
document.addEventListener('DOMContentLoaded', function() {
    const fabMain = document.getElementById('fabMain');
    const fabMenu = document.getElementById('fabMenu');
    
    fabMain.addEventListener('click', function() {
        fabMenu.classList.toggle('active');
        fabMain.classList.toggle('active');
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (!fabMain.contains(e.target) && !fabMenu.contains(e.target)) {
            fabMenu.classList.remove('active');
            fabMain.classList.remove('active');
        }
    });
});

// Event Modal functions
function openEventModal() {
    document.getElementById('eventModal').style.display = 'block';
    document.body.style.overflow = 'hidden';
    
    // Set default date to today
    const today = new Date();
    const year = today.getFullYear();
    const month = String(today.getMonth() + 1).padStart(2, '0');
    const day = String(today.getDate()).padStart(2, '0');
    document.getElementById('eventDate').value = `${year}-${month}-${day}`;
    
    // Focus on title field
    setTimeout(() => {
        document.getElementById('eventTitle').focus();
    }, 100);
}

function closeEventModal() {
    document.getElementById('eventModal').style.display = 'none';
    document.body.style.overflow = 'auto';
    document.getElementById('eventForm').reset();
}

// Form submission
document.addEventListener('DOMContentLoaded', function() {
    const eventForm = document.getElementById('eventForm');
    if (eventForm) {
        eventForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            console.log('Form submitted!');
            
            // Get form data
            const formData = new FormData(this);
            
            // Show loading message
            showMessage('Saving event...', 'info');
            
            // Submit form
            fetch('save_event.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                console.log('Response:', data);
                
                if (data.success) {
                    showSuccessBanner('Event added successfully!');
                    closeEventModal();
                    // Refresh the page to show the new event
                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                } else {
                    showMessage('Error adding event: ' + (data.message || 'Unknown error'), 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showMessage('Error adding event: ' + error.message, 'error');
            });
        });
    }
});

// Clear all events
function clearAllEvents() {
    if (confirm('Are you sure you want to clear all events? This action cannot be undone.')) {
        fetch('clear_events.php', {
            method: 'POST'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showSuccessBanner('All events cleared successfully!');
                // Refresh the page to show updated events
                setTimeout(() => {
                    location.reload();
                }, 2000);
            } else {
                showMessage('Error clearing events: ' + data.message, 'error');
            }
        })
        .catch(error => {
            showMessage('Error clearing events: ' + error.message, 'error');
        });
    }
}

// Close modals when clicking outside
window.onclick = function(event) {
    const eventModal = document.getElementById('eventModal');
    
    if (event.target === eventModal) {
        closeEventModal();
    }
}
</script>

<?php include '../includes/footer.php'; ?>
