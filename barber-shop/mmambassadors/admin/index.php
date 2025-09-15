<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: ../login.php');
    exit();
}

$page_title = "Gallery Admin - Ambassadors for Jesus Christ";
include '../includes/header.php';

// Database connection
require_once '../config/database.php';
$database = new Database();
$db = $database->getConnection();

// Get statistics
$total_images_query = "SELECT COUNT(*) as total FROM gallery_images";
$featured_images_query = "SELECT COUNT(*) as featured FROM gallery_images WHERE featured = 1";
$recent_images_query = "SELECT * FROM gallery_images ORDER BY created_at DESC LIMIT 5";

$total_stmt = $db->prepare($total_images_query);
$total_stmt->execute();
$total_images = $total_stmt->fetch()['total'];

$featured_stmt = $db->prepare($featured_images_query);
$featured_stmt->execute();
$featured_count = $featured_stmt->fetch()['featured'];

$recent_stmt = $db->prepare($recent_images_query);
$recent_stmt->execute();
$recent_images = $recent_stmt->fetchAll();

// Get category stats
$category_stats_query = "SELECT category, COUNT(*) as count FROM gallery_images WHERE category IS NOT NULL GROUP BY category";
$category_stmt = $db->prepare($category_stats_query);
$category_stmt->execute();
$category_stats = $category_stmt->fetchAll();
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
        <h1 class="admin-title">Gallery Admin</h1>
        <p class="admin-subtitle">Manage your photo gallery</p>
    </div>
</section>

<!-- Help Section -->
<section class="help-section">
    <div class="container">
        <div class="help-content">
            <h2 class="section-title">How to Upload Photos</h2>
            <div class="help-steps">
                <div class="help-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Drag & Drop</h3>
                        <p>Simply drag your photos from your computer and drop them onto the upload area above.</p>
                    </div>
                </div>
                <div class="help-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Or Click to Browse</h3>
                        <p>Click the upload area to open a file browser and select your photos.</p>
                    </div>
                </div>
                <div class="help-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Automatic Processing</h3>
                        <p>Photos are automatically added to your gallery and will appear in the "Recent Photos" section.</p>
                    </div>
                </div>
            </div>
            <div class="help-tips">
                <h3>💡 Tips for Best Results:</h3>
                <ul>
                    <li>Use JPG, PNG, GIF, or WebP format</li>
                    <li>Keep file sizes under 10MB each</li>
                    <li>Photos will be automatically resized for the web</li>
                    <li>You can upload multiple photos at once</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Dashboard -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-images"></i>
                </div>
                <div class="stat-content">
                    <h3><?php echo $total_images; ?></h3>
                    <p>Total Images</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="stat-content">
                    <h3><?php echo $featured_count; ?></h3>
                    <p>Featured Images</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-folder"></i>
                </div>
                <div class="stat-content">
                    <h3><?php echo count($category_stats); ?></h3>
                    <p>Categories</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Photo Upload Section -->
<section class="upload-section">
    <div class="container">
        <h2 class="section-title">Upload New Photos</h2>
        <div class="upload-container">
            <div class="upload-area" id="uploadArea">
                <div class="upload-content">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <h3>Drag & Drop Photos Here</h3>
                    <p>or click to browse files</p>
                    <small>Supports JPG, PNG, GIF, WebP (Max 10MB each)</small>
                </div>
                <input type="file" id="fileInput" multiple accept="image/*" style="display: none;">
            </div>
            
            <div class="upload-progress" id="uploadProgress" style="display: none;">
                <div class="progress-bar">
                    <div class="progress-fill" id="progressFill"></div>
                </div>
                <div class="progress-text" id="progressText">Uploading...</div>
            </div>
            
            <div class="upload-results" id="uploadResults"></div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="actions-section">
    <div class="container">
        <h2 class="section-title">Quick Actions</h2>
        <div class="actions-grid">
            <a href="import_photos.php" class="action-card">
                <i class="fas fa-folder-open"></i>
                <h3>Import from Folder</h3>
                <p>Add photos from mediaGallery folder</p>
            </a>
            
            <a href="../gallery.php" class="action-card">
                <i class="fas fa-eye"></i>
                <h3>View Gallery</h3>
                <p>See how your gallery looks</p>
            </a>
            
            <a href="#" class="action-card" onclick="refreshRecentPhotos()">
                <i class="fas fa-sync"></i>
                <h3>Refresh Gallery</h3>
                <p>Update recent photos display</p>
            </a>
        </div>
    </div>
</section>

<!-- Recent Images -->
<section class="recent-section">
    <div class="container">
        <h2 class="section-title">Recent Images</h2>
        <div class="recent-gallery">
            <?php if (empty($recent_images)): ?>
                <div class="no-images">
                    <i class="fas fa-image"></i>
                    <p>No images found. Import some photos to get started!</p>
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
        </div>
    </div>
</section>

<!-- Category Stats -->
<?php if (!empty($category_stats)): ?>
<section class="category-stats-section">
    <div class="container">
        <h2 class="section-title">Category Breakdown</h2>
        <div class="category-stats">
            <?php foreach ($category_stats as $stat): ?>
                <div class="category-stat">
                    <h4><?php echo ucfirst(htmlspecialchars($stat['category'])); ?></h4>
                    <div class="stat-bar">
                        <div class="stat-fill" style="width: <?php echo ($stat['count'] / $total_images) * 100; ?>%"></div>
                    </div>
                    <span class="stat-count"><?php echo $stat['count']; ?> photos</span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

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
        <div class="fab-item" onclick="openClearEventsModal()">
            <i class="fas fa-trash"></i>
            <span>Clear Events</span>
        </div>
        <div class="fab-item" onclick="refreshPage()">
            <i class="fas fa-sync"></i>
            <span>Refresh</span>
        </div>
        <div class="fab-item" onclick="window.location.href='prayer_requests.php'">
            <i class="fas fa-praying-hands"></i>
            <span>Prayer Requests</span>
        </div>
        <div class="fab-item" onclick="window.location.href='logout.php'">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
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
                    <input type="text" id="eventDate" name="event_date" required placeholder="MM/DD/YYYY" maxlength="10">
                    <small class="form-help">Format: MM/DD/YYYY (e.g., 09/11/2025)</small>
                </div>
                
                <div class="form-group">
                    <label for="eventTime">Event Time</label>
                    <input type="text" id="eventTime" name="event_time" placeholder="HH:MM AM/PM (optional)">
                    <small class="form-help">Format: HH:MM AM/PM (e.g., 2:30 PM) or leave blank</small>
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
                    <button type="button" class="btn-save" onclick="saveEvent()">Save Event</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Clear Events Modal -->
<div class="modal" id="clearEventsModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Clear All Events</h3>
            <span class="close" onclick="closeClearEventsModal()">&times;</span>
        </div>
        <div class="modal-body">
            <p>Are you sure you want to clear all events? This action cannot be undone.</p>
            <div class="form-actions">
                <button type="button" class="btn-cancel" onclick="closeClearEventsModal()">Cancel</button>
                <button type="button" class="btn-danger" onclick="clearAllEvents()">Clear All Events</button>
            </div>
        </div>
    </div>
</div>

<!-- Upload JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const uploadArea = document.getElementById('uploadArea');
    const fileInput = document.getElementById('fileInput');
    const uploadProgress = document.getElementById('uploadProgress');
    const progressFill = document.getElementById('progressFill');
    const progressText = document.getElementById('progressText');
    const uploadResults = document.getElementById('uploadResults');

    // Drag and drop functionality
    uploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        uploadArea.classList.add('drag-over');
    });

    uploadArea.addEventListener('dragleave', function(e) {
        e.preventDefault();
        uploadArea.classList.remove('drag-over');
    });

    uploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        uploadArea.classList.remove('drag-over');
        const files = e.dataTransfer.files;
        handleFiles(files);
    });

    // Click to browse
    uploadArea.addEventListener('click', function() {
        fileInput.click();
    });

    fileInput.addEventListener('change', function() {
        handleFiles(this.files);
    });

    function handleFiles(files) {
        if (files.length === 0) return;

        // Validate files
        const validFiles = Array.from(files).filter(file => {
            const isValidType = file.type.startsWith('image/');
            const isValidSize = file.size <= 10 * 1024 * 1024; // 10MB
            return isValidType && isValidSize;
        });

        if (validFiles.length === 0) {
            showMessage('Please select valid image files (JPG, PNG, GIF, WebP) under 10MB each.', 'error');
            return;
        }

        if (validFiles.length !== files.length) {
            showMessage(`Uploading ${validFiles.length} valid files (${files.length - validFiles.length} files skipped)`, 'warning');
        }

        uploadFiles(validFiles);
    }

    function uploadFiles(files) {
        const formData = new FormData();
        files.forEach(file => {
            formData.append('photos[]', file);
        });

        uploadProgress.style.display = 'block';
        progressFill.style.width = '0%';
        progressText.textContent = 'Uploading...';

        const xhr = new XMLHttpRequest();

        xhr.upload.addEventListener('progress', function(e) {
            if (e.lengthComputable) {
                const percentComplete = (e.loaded / e.total) * 100;
                progressFill.style.width = percentComplete + '%';
                progressText.textContent = `Uploading... ${Math.round(percentComplete)}%`;
            }
        });

        xhr.addEventListener('load', function() {
            uploadProgress.style.display = 'none';
            
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                    showMessage(`Successfully uploaded ${response.uploaded} photos!`, 'success');
                    updateRecentPhotos();
                } else {
                    showMessage('Upload failed: ' + response.message, 'error');
                }
            } else {
                showMessage('Upload failed. Please try again.', 'error');
            }
        });

        xhr.addEventListener('error', function() {
            uploadProgress.style.display = 'none';
            showMessage('Upload failed. Please check your connection and try again.', 'error');
        });

        xhr.open('POST', 'upload_photos.php', true);
        xhr.send(formData);
    }

    function showMessage(message, type) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `upload-message ${type}`;
        messageDiv.textContent = message;
        uploadResults.appendChild(messageDiv);
        
        setTimeout(() => {
            messageDiv.remove();
        }, 5000);
    }

    function updateRecentPhotos() {
        // Refresh the recent photos section
        fetch('get_recent_photos.php')
            .then(response => response.text())
            .then(html => {
                document.querySelector('.recent-gallery').innerHTML = html;
            })
            .catch(error => {
                console.error('Error updating recent photos:', error);
            });
    }

    // Make refreshRecentPhotos available globally
    window.refreshRecentPhotos = updateRecentPhotos;
});

// Floating Action Button functionality
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
    
    // Set default date to today in MM/DD/YYYY format
    const today = new Date();
    const month = String(today.getMonth() + 1).padStart(2, '0');
    const day = String(today.getDate()).padStart(2, '0');
    const year = today.getFullYear();
    document.getElementById('eventDate').value = `${month}/${day}/${year}`;
    
    // Setup form listeners
    setupEventFormListeners();
    
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

function openClearEventsModal() {
    document.getElementById('clearEventsModal').style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function closeClearEventsModal() {
    document.getElementById('clearEventsModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

function refreshPage() {
    location.reload();
}

// Date formatting function
function formatDateInput(input) {
    let value = input.value.replace(/\D/g, ''); // Remove non-digits
    if (value.length >= 2) {
        value = value.substring(0, 2) + '/' + value.substring(2);
    }
    if (value.length >= 5) {
        value = value.substring(0, 5) + '/' + value.substring(5, 9);
    }
    input.value = value;
}

// Time formatting function
function formatTimeInput(input) {
    let value = input.value;
    // Allow typing freely, just clean up the format
    if (value.length > 0) {
        // Remove any non-digit characters except : and space
        value = value.replace(/[^\d:APM\s]/gi, '');
        input.value = value;
    }
}

// Add event listeners for input formatting
function setupEventFormListeners() {
    const dateInput = document.getElementById('eventDate');
    const timeInput = document.getElementById('eventTime');
    
    if (dateInput) {
        // Remove existing listeners to avoid duplicates
        dateInput.removeEventListener('input', formatDateInput);
        dateInput.removeEventListener('keypress', handleDateKeypress);
        
        dateInput.addEventListener('input', function() {
            formatDateInput(this);
        });
        
        dateInput.addEventListener('keypress', handleDateKeypress);
    }
    
    if (timeInput) {
        // Remove existing listeners to avoid duplicates
        timeInput.removeEventListener('input', formatTimeInput);
        timeInput.removeEventListener('keypress', handleTimeKeypress);
        
        timeInput.addEventListener('input', function() {
            formatTimeInput(this);
        });
        
        timeInput.addEventListener('keypress', handleTimeKeypress);
    }
    
    // Setup photo upload
    setupPhotoUpload();
}

// Photo upload functionality
function setupPhotoUpload() {
    const photoInput = document.getElementById('eventPhoto');
    const uploadArea = document.getElementById('photoUploadArea');
    const uploadPreview = document.getElementById('uploadPreview');
    const uploadedImage = document.getElementById('uploadedImage');
    const previewImg = document.getElementById('previewImg');
    
    if (!photoInput || !uploadArea) return;
    
    // Click to upload
    uploadArea.addEventListener('click', function() {
        photoInput.click();
    });
    
    // File selection
    photoInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            // Validate file type
            if (!file.type.startsWith('image/')) {
                showMessage('Please select a valid image file', 'error');
                return;
            }
            
            // Validate file size (5MB)
            if (file.size > 5 * 1024 * 1024) {
                showMessage('File size must be less than 5MB', 'error');
                return;
            }
            
            // Show preview
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                uploadPreview.style.display = 'none';
                uploadedImage.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });
    
    // Drag and drop
    uploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        uploadArea.classList.add('drag-over');
    });
    
    uploadArea.addEventListener('dragleave', function(e) {
        e.preventDefault();
        uploadArea.classList.remove('drag-over');
    });
    
    uploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        uploadArea.classList.remove('drag-over');
        
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            photoInput.files = files;
            photoInput.dispatchEvent(new Event('change'));
        }
    });
}

// Remove photo
function removeEventPhoto() {
    const photoInput = document.getElementById('eventPhoto');
    const uploadPreview = document.getElementById('uploadPreview');
    const uploadedImage = document.getElementById('uploadedImage');
    
    photoInput.value = '';
    uploadPreview.style.display = 'block';
    uploadedImage.style.display = 'none';
}

function handleDateKeypress(e) {
    // Only allow numbers and forward slashes
    if (!/[0-9/]/.test(e.key) && e.key !== 'Backspace' && e.key !== 'Delete') {
        e.preventDefault();
    }
}

function handleTimeKeypress(e) {
    // Allow numbers, colons, spaces, and letters for AM/PM, plus common keys
    if (!/[0-9:APM\s]/.test(e.key) && !['Backspace', 'Delete', 'Tab', 'Enter', 'ArrowLeft', 'ArrowRight', 'ArrowUp', 'ArrowDown'].includes(e.key)) {
        e.preventDefault();
    }
}

// Simple and reliable save function
function saveEvent() {
    console.log('=== SAVE EVENT STARTED ===');
    
    // Get form values
    const title = document.getElementById('eventTitle').value.trim();
    const description = document.getElementById('eventDescription').value.trim();
    const dateValue = document.getElementById('eventDate').value.trim();
    const timeValue = document.getElementById('eventTime').value.trim();
    const location = document.getElementById('eventLocation').value.trim();
    const status = document.getElementById('eventStatus').value;
    
    console.log('Form values:', { title, description, dateValue, timeValue, location, status });
    
    // Validate required fields
    if (!title) {
        alert('Please enter an event title');
        document.getElementById('eventTitle').focus();
        return;
    }
    
    if (!dateValue) {
        alert('Please enter an event date');
        document.getElementById('eventDate').focus();
        return;
    }
    
    // Validate date format
    const dateRegex = /^(0[1-9]|1[0-2])\/(0[1-9]|[12][0-9]|3[01])\/\d{4}$/;
    if (!dateRegex.test(dateValue)) {
        alert('Please enter a valid date in MM/DD/YYYY format (e.g., 09/11/2025)');
        document.getElementById('eventDate').focus();
        return;
    }
    
    // Convert date to MySQL format
    const [month, day, year] = dateValue.split('/');
    const mysqlDate = `${year}-${month}-${day}`;
    
    // Prepare form data
    const formData = new FormData();
    formData.append('title', title);
    formData.append('description', description);
    formData.append('event_date', mysqlDate);
    formData.append('event_time', timeValue);
    formData.append('location', location);
    formData.append('status', status);
    
    // Add photo if selected
    const photoInput = document.getElementById('eventPhoto');
    if (photoInput && photoInput.files.length > 0) {
        formData.append('event_photo', photoInput.files[0]);
        console.log('Photo added to form data');
    }
    
    console.log('Sending data to save_event.php...');
    
    // Show loading message
    const saveBtn = document.querySelector('.btn-save');
    const originalText = saveBtn.textContent;
    saveBtn.textContent = 'Saving...';
    saveBtn.disabled = true;
    
    // Use XMLHttpRequest for better compatibility
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'save_event.php', true);
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            console.log('Response received:', xhr.status, xhr.responseText);
            
            // Reset button
            saveBtn.textContent = originalText;
            saveBtn.disabled = false;
            
            if (xhr.status === 200) {
                try {
                    const data = JSON.parse(xhr.responseText);
                    console.log('Parsed response:', data);
                    
                    if (data.success) {
                        alert('Event added successfully!');
                        closeEventModal();
                        // Refresh the page to show the new event
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
                    } else {
                        alert('Error adding event: ' + (data.message || 'Unknown error'));
                    }
                } catch (e) {
                    console.error('JSON parse error:', e);
                    alert('Error parsing response: ' + xhr.responseText);
                }
            } else {
                alert('Server error: ' + xhr.status);
            }
        }
    };
    
    xhr.send(formData);
}

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

// Remove old testSave function - using saveEvent() now

// Page loaded - no special setup needed, using onclick handlers
document.addEventListener('DOMContentLoaded', function() {
    console.log('Admin page loaded - event system ready');
});

// Clear all events
function clearAllEvents() {
    fetch('clear_events.php', {
        method: 'POST'
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showSuccessBanner('All events cleared successfully!');
            closeClearEventsModal();
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

// Close modals when clicking outside
window.onclick = function(event) {
    const eventModal = document.getElementById('eventModal');
    const clearModal = document.getElementById('clearEventsModal');
    
    if (event.target === eventModal) {
        closeEventModal();
    }
    if (event.target === clearModal) {
        closeClearEventsModal();
    }
}
</script>

<?php include '../includes/footer.php'; ?>
