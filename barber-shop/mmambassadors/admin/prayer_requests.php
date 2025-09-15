<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header('Location: ../login.php');
    exit();
}

$page_title = "Prayer Requests - Admin";
include '../includes/header.php';

// Database connection
require_once '../config/database.php';
$database = new Database();
$db = $database->getConnection();

// Handle status updates
if ($_POST && isset($_POST['action']) && $_POST['action'] === 'update_status') {
    $request_id = $_POST['request_id'];
    $new_status = $_POST['status'];
    
    $update_query = "UPDATE prayer_requests SET status = ? WHERE id = ?";
    $stmt = $db->prepare($update_query);
    $result = $stmt->execute([$new_status, $request_id]);
    
    if ($result) {
        $success_message = "Prayer request status updated successfully!";
    } else {
        $error_message = "Failed to update prayer request status.";
    }
}

// Handle deletion
if ($_POST && isset($_POST['action']) && $_POST['action'] === 'delete') {
    $request_id = $_POST['request_id'];
    
    $delete_query = "DELETE FROM prayer_requests WHERE id = ?";
    $stmt = $db->prepare($delete_query);
    $result = $stmt->execute([$request_id]);
    
    if ($result) {
        $success_message = "Prayer request deleted successfully!";
    } else {
        $error_message = "Failed to delete prayer request.";
    }
}

// Get prayer requests
$status_filter = $_GET['status'] ?? 'all';
$search_term = $_GET['search'] ?? '';

$where_conditions = [];
$params = [];

if ($status_filter !== 'all') {
    $where_conditions[] = "status = ?";
    $params[] = $status_filter;
}

if (!empty($search_term)) {
    $where_conditions[] = "(name LIKE ? OR request LIKE ?)";
    $params[] = "%$search_term%";
    $params[] = "%$search_term%";
}

$where_clause = !empty($where_conditions) ? "WHERE " . implode(" AND ", $where_conditions) : "";

$query = "SELECT * FROM prayer_requests $where_clause ORDER BY created_at DESC";
$stmt = $db->prepare($query);
$stmt->execute($params);
$prayer_requests = $stmt->fetchAll();

// Get status counts
$count_query = "SELECT status, COUNT(*) as count FROM prayer_requests GROUP BY status";
$count_stmt = $db->prepare($count_query);
$count_stmt->execute();
$status_counts = [];
while ($row = $count_stmt->fetch()) {
    $status_counts[$row['status']] = $row['count'];
}
?>

<style>
.prayer-admin {
    min-height: 100vh;
    background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
    padding: 2rem 0;
}

.admin-hero {
    background: linear-gradient(135deg, #8B0000 0%, #DC143C 100%);
    color: white;
    padding: 3rem 0;
    text-align: center;
    margin-bottom: 2rem;
}

.admin-hero h1 {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

.admin-hero p {
    font-size: 1.2rem;
    opacity: 0.9;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
    margin-bottom: 2rem;
}

.stat-card {
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 15px;
    padding: 1.5rem;
    text-align: center;
    color: white;
    transition: transform 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-5px);
}

.stat-number {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
}

.stat-label {
    font-size: 0.9rem;
    opacity: 0.8;
}

.filters {
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 15px;
    padding: 1.5rem;
    margin-bottom: 2rem;
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    align-items: center;
}

.filter-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.filter-group label {
    color: white;
    font-weight: 500;
    font-size: 0.9rem;
}

.filter-group select,
.filter-group input {
    padding: 0.5rem;
    border: 1px solid rgba(255,255,255,0.3);
    border-radius: 8px;
    background: rgba(255,255,255,0.1);
    color: white;
    font-size: 0.9rem;
}

.filter-group input::placeholder {
    color: rgba(255,255,255,0.6);
}

.btn-filter {
    background: #8B0000;
    color: white;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease;
    align-self: end;
}

.btn-filter:hover {
    background: #A52A2A;
}

.prayer-requests {
    display: grid;
    gap: 1rem;
}

.prayer-card {
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 15px;
    padding: 1.5rem;
    color: white;
    transition: transform 0.3s ease;
}

.prayer-card:hover {
    transform: translateY(-2px);
}

.prayer-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1rem;
    flex-wrap: wrap;
    gap: 1rem;
}

.prayer-info h3 {
    margin: 0 0 0.5rem 0;
    color: #FFD700;
    font-size: 1.2rem;
}

.prayer-meta {
    display: flex;
    gap: 1rem;
    font-size: 0.9rem;
    opacity: 0.8;
    flex-wrap: wrap;
}

.prayer-request {
    background: rgba(0,0,0,0.3);
    padding: 1rem;
    border-radius: 10px;
    margin: 1rem 0;
    line-height: 1.6;
    font-style: italic;
}

.prayer-actions {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
    margin-top: 1rem;
}

.btn-action {
    padding: 0.4rem 0.8rem;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 0.8rem;
    transition: all 0.3s ease;
}

.btn-pending { background: #FFA500; color: white; }
.btn-prayed { background: #32CD32; color: white; }
.btn-answered { background: #4169E1; color: white; }
.btn-private { background: #696969; color: white; }
.btn-delete { background: #DC143C; color: white; }

.btn-action:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.3);
}

.status-badge {
    padding: 0.3rem 0.8rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
    text-transform: uppercase;
}

.status-pending { background: #FFA500; color: white; }
.status-prayed_for { background: #32CD32; color: white; }
.status-answered { background: #4169E1; color: white; }
.status-private { background: #696969; color: white; }

.no-requests {
    text-align: center;
    color: white;
    padding: 3rem;
    background: rgba(255,255,255,0.1);
    border-radius: 15px;
    backdrop-filter: blur(10px);
}

.no-requests i {
    font-size: 3rem;
    margin-bottom: 1rem;
    opacity: 0.6;
}

.success-message, .error-message {
    padding: 1rem;
    border-radius: 8px;
    margin-bottom: 1rem;
    text-align: center;
}

.success-message {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.error-message {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

@media (max-width: 768px) {
    .filters {
        flex-direction: column;
        align-items: stretch;
    }
    
    .filter-group {
        width: 100%;
    }
    
    .prayer-header {
        flex-direction: column;
        align-items: stretch;
    }
    
    .prayer-actions {
        justify-content: center;
    }
}
</style>

<div class="prayer-admin">
    <div class="container">
        <!-- Admin Hero -->
        <div class="admin-hero">
            <h1><i class="fas fa-praying-hands"></i> Prayer Requests</h1>
            <p>Manage prayer requests from your community</p>
        </div>

        <!-- Success/Error Messages -->
        <?php if (isset($success_message)): ?>
            <div class="success-message">
                <i class="fas fa-check-circle"></i> <?php echo htmlspecialchars($success_message); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($error_message)): ?>
            <div class="error-message">
                <i class="fas fa-exclamation-circle"></i> <?php echo htmlspecialchars($error_message); ?>
            </div>
        <?php endif; ?>

        <!-- Stats -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number"><?php echo $status_counts['pending'] ?? 0; ?></div>
                <div class="stat-label">Pending</div>
            </div>
            <div class="stat-card">
                <div class="stat-number"><?php echo $status_counts['prayed_for'] ?? 0; ?></div>
                <div class="stat-label">Prayed For</div>
            </div>
            <div class="stat-card">
                <div class="stat-number"><?php echo $status_counts['answered'] ?? 0; ?></div>
                <div class="stat-label">Answered</div>
            </div>
            <div class="stat-card">
                <div class="stat-number"><?php echo array_sum($status_counts); ?></div>
                <div class="stat-label">Total Requests</div>
            </div>
        </div>

        <!-- Filters -->
        <div class="filters">
            <form method="GET" style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: end; width: 100%;">
                <div class="filter-group">
                    <label for="status">Filter by Status:</label>
                    <select name="status" id="status">
                        <option value="all" <?php echo $status_filter === 'all' ? 'selected' : ''; ?>>All Requests</option>
                        <option value="pending" <?php echo $status_filter === 'pending' ? 'selected' : ''; ?>>Pending</option>
                        <option value="prayed_for" <?php echo $status_filter === 'prayed_for' ? 'selected' : ''; ?>>Prayed For</option>
                        <option value="answered" <?php echo $status_filter === 'answered' ? 'selected' : ''; ?>>Answered</option>
                        <option value="private" <?php echo $status_filter === 'private' ? 'selected' : ''; ?>>Private</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="search">Search:</label>
                    <input type="text" name="search" id="search" placeholder="Search by name or request..." value="<?php echo htmlspecialchars($search_term); ?>">
                </div>
                <button type="submit" class="btn-filter">
                    <i class="fas fa-search"></i> Filter
                </button>
            </form>
        </div>

        <!-- Prayer Requests -->
        <div class="prayer-requests">
            <?php if (empty($prayer_requests)): ?>
                <div class="no-requests">
                    <i class="fas fa-praying-hands"></i>
                    <h3>No prayer requests found</h3>
                    <p>No prayer requests match your current filter criteria.</p>
                </div>
            <?php else: ?>
                <?php foreach ($prayer_requests as $request): ?>
                    <div class="prayer-card">
                        <div class="prayer-header">
                            <div class="prayer-info">
                                <h3><?php echo htmlspecialchars($request['name']); ?></h3>
                                <div class="prayer-meta">
                                    <span><i class="fas fa-calendar"></i> <?php echo date('M j, Y g:i A', strtotime($request['created_at'])); ?></span>
                                    <?php if ($request['email']): ?>
                                        <span><i class="fas fa-envelope"></i> <?php echo htmlspecialchars($request['email']); ?></span>
                                    <?php endif; ?>
                                    <?php if ($request['phone']): ?>
                                        <span><i class="fas fa-phone"></i> <?php echo htmlspecialchars($request['phone']); ?></span>
                                    <?php endif; ?>
                                    <span class="status-badge status-<?php echo $request['status']; ?>">
                                        <?php echo ucfirst(str_replace('_', ' ', $request['status'])); ?>
                                    </span>
                                    <?php if ($request['is_public']): ?>
                                        <span><i class="fas fa-globe"></i> Public</span>
                                    <?php else: ?>
                                        <span><i class="fas fa-lock"></i> Private</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="prayer-request">
                            "<?php echo nl2br(htmlspecialchars($request['request'])); ?>"
                        </div>
                        
                        <div class="prayer-actions">
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="action" value="update_status">
                                <input type="hidden" name="request_id" value="<?php echo $request['id']; ?>">
                                <select name="status" onchange="this.form.submit()" style="padding: 0.4rem; border-radius: 6px; background: rgba(255,255,255,0.1); color: white; border: 1px solid rgba(255,255,255,0.3);">
                                    <option value="pending" <?php echo $request['status'] === 'pending' ? 'selected' : ''; ?>>Pending</option>
                                    <option value="prayed_for" <?php echo $request['status'] === 'prayed_for' ? 'selected' : ''; ?>>Prayed For</option>
                                    <option value="answered" <?php echo $request['status'] === 'answered' ? 'selected' : ''; ?>>Answered</option>
                                    <option value="private" <?php echo $request['status'] === 'private' ? 'selected' : ''; ?>>Private</option>
                                </select>
                            </form>
                            
                            <form method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this prayer request?');">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="request_id" value="<?php echo $request['id']; ?>">
                                <button type="submit" class="btn-action btn-delete">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
