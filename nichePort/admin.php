<?php
require_once 'includes/config.php';

// Simple authentication (in production, use proper authentication)
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    if (isset($_POST['admin_password']) && $_POST['admin_password'] === 'admin123') {
        $_SESSION['admin_logged_in'] = true;
    } else {
        // Show login form
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Admin Login - Generic Collision Shop</title>
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body style="background: var(--light-gray); display: flex; align-items: center; justify-content: center; min-height: 100vh;">
            <div style="background: var(--white); padding: 2rem; border-radius: 0.75rem; box-shadow: var(--shadow); max-width: 400px; width: 100%;">
                <h2 style="text-align: center; margin-bottom: 2rem; color: var(--primary-navy);">Admin Login</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="admin_password">Password:</label>
                        <input type="password" id="admin_password" name="admin_password" required style="width: 100%; padding: 0.75rem; border: 2px solid #e2e8f0; border-radius: 0.5rem;">
                    </div>
                    <button type="submit" class="cta-button" style="width: 100%;">Login</button>
                </form>
            </div>
        </body>
        </html>
        <?php
        exit;
    }
}

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: admin.php');
    exit;
}

// Get statistics
try {
    $stats = [];
    
    // Total estimates
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM estimates");
    $stats['total_estimates'] = $stmt->fetch()['total'];
    
    // Pending estimates
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM estimates WHERE status = 'pending'");
    $stats['pending_estimates'] = $stmt->fetch()['total'];
    
    // Total contacts
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM contact_submissions");
    $stats['total_contacts'] = $stmt->fetch()['total'];
    
    // Recent estimates (last 7 days)
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM estimates WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)");
    $stats['recent_estimates'] = $stmt->fetch()['total'];
    
} catch (PDOException $e) {
    $stats = ['total_estimates' => 0, 'pending_estimates' => 0, 'total_contacts' => 0, 'recent_estimates' => 0];
}

// Get recent submissions
try {
    $stmt = $pdo->query("
        SELECT e.*, c.name, c.email, c.phone, v.year, v.make, v.model 
        FROM estimates e 
        JOIN customers c ON e.customer_id = c.id 
        JOIN vehicles v ON e.vehicle_id = v.id 
        ORDER BY e.created_at DESC 
        LIMIT 10
    ");
    $recent_estimates = $stmt->fetchAll();
    
    $stmt = $pdo->query("
        SELECT * FROM contact_submissions 
        ORDER BY created_at DESC 
        LIMIT 10
    ");
    $recent_contacts = $stmt->fetchAll();
    
} catch (PDOException $e) {
    $recent_estimates = [];
    $recent_contacts = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Generic Collision Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .admin-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--light-gray);
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }
        .stat-card {
            background: var(--white);
            padding: 1.5rem;
            border-radius: 0.75rem;
            box-shadow: var(--shadow);
            text-align: center;
        }
        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--accent-blue);
            margin-bottom: 0.5rem;
        }
        .stat-label {
            color: var(--neutral-gray);
            font-size: 0.9rem;
        }
        .data-section {
            background: var(--white);
            padding: 2rem;
            border-radius: 0.75rem;
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
        }
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        .data-table th,
        .data-table td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }
        .data-table th {
            background: var(--light-gray);
            font-weight: 600;
            color: var(--primary-navy);
        }
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.8rem;
            font-weight: 600;
        }
        .status-pending {
            background: #fef3c7;
            color: #92400e;
        }
        .status-reviewed {
            background: #dbeafe;
            color: #1e40af;
        }
        .status-contacted {
            background: #d1fae5;
            color: #065f46;
        }
        .status-completed {
            background: #f3e8ff;
            color: #7c3aed;
        }
        .logout-btn {
            background: var(--warning-red);
            color: var(--white);
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-size: 0.9rem;
        }
        .logout-btn:hover {
            background: #dc2626;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1>Admin Panel - Generic Collision Shop</h1>
            <a href="?logout=1" class="logout-btn">Logout</a>
        </div>
        
        <!-- Statistics -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number"><?php echo $stats['total_estimates']; ?></div>
                <div class="stat-label">Total Estimates</div>
            </div>
            <div class="stat-card">
                <div class="stat-number"><?php echo $stats['pending_estimates']; ?></div>
                <div class="stat-label">Pending Estimates</div>
            </div>
            <div class="stat-card">
                <div class="stat-number"><?php echo $stats['total_contacts']; ?></div>
                <div class="stat-label">Contact Submissions</div>
            </div>
            <div class="stat-card">
                <div class="stat-number"><?php echo $stats['recent_estimates']; ?></div>
                <div class="stat-label">This Week</div>
            </div>
        </div>
        
        <!-- Recent Estimates -->
        <div class="data-section">
            <h2>Recent Estimate Requests</h2>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Customer</th>
                        <th>Vehicle</th>
                        <th>Status</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($recent_estimates as $estimate): ?>
                    <tr>
                        <td><?php echo date('M j, Y', strtotime($estimate['created_at'])); ?></td>
                        <td><?php echo htmlspecialchars($estimate['name']); ?></td>
                        <td><?php echo htmlspecialchars($estimate['year'] . ' ' . $estimate['make'] . ' ' . $estimate['model']); ?></td>
                        <td>
                            <span class="status-badge status-<?php echo $estimate['status']; ?>">
                                <?php echo ucfirst($estimate['status']); ?>
                            </span>
                        </td>
                        <td><a href="tel:<?php echo $estimate['phone']; ?>"><?php echo $estimate['phone']; ?></a></td>
                        <td><a href="mailto:<?php echo $estimate['email']; ?>"><?php echo $estimate['email']; ?></a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <!-- Recent Contacts -->
        <div class="data-section">
            <h2>Recent Contact Submissions</h2>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($recent_contacts as $contact): ?>
                    <tr>
                        <td><?php echo date('M j, Y', strtotime($contact['created_at'])); ?></td>
                        <td><?php echo htmlspecialchars($contact['name']); ?></td>
                        <td><?php echo ucfirst($contact['type']); ?></td>
                        <td><?php echo $contact['phone'] ? $contact['phone'] : 'N/A'; ?></td>
                        <td><a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></td>
                        <td><?php echo htmlspecialchars(substr($contact['message'], 0, 50)) . '...'; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <!-- Quick Actions -->
        <div class="data-section">
            <h2>Quick Actions</h2>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="index.php" class="cta-button">View Website</a>
                <a href="quote.php" class="cta-button" style="background: var(--secondary-blue);">Test Quote Form</a>
                <a href="contact.php" class="cta-button" style="background: var(--success-green);">Test Contact Form</a>
            </div>
        </div>
    </div>
</body>
</html>
