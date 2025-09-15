<?php
session_start();
require_once '../config/database.php';
require_once '../includes/functions.php';

// Simple authentication (in production, use proper authentication)
$admin_password = 'admin123'; // Change this password!

if (isset($_POST['login'])) {
    if ($_POST['password'] === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
    } else {
        $login_error = 'Invalid password';
    }
}

if (isset($_GET['logout'])) {
    unset($_SESSION['admin_logged_in']);
    header('Location: index.php');
    exit();
}

if (!isset($_SESSION['admin_logged_in'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login - Blade & Fade Barbers</title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <style>
            .login-container {
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background: linear-gradient(135deg, #1a1a1a 0%, #333 100%);
            }
            .login-form {
                background: white;
                padding: 3rem;
                border-radius: 15px;
                box-shadow: 0 20px 40px rgba(0,0,0,0.1);
                width: 100%;
                max-width: 400px;
            }
            .login-form h2 {
                text-align: center;
                margin-bottom: 2rem;
                color: #1a1a1a;
            }
            .form-group {
                margin-bottom: 1.5rem;
            }
            .form-group label {
                display: block;
                margin-bottom: 0.5rem;
                font-weight: 500;
                color: #1a1a1a;
            }
            .form-group input {
                width: 100%;
                padding: 12px 15px;
                border: 2px solid #e9ecef;
                border-radius: 5px;
                font-size: 1rem;
            }
            .error {
                color: #dc3545;
                margin-bottom: 1rem;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <div class="login-form">
                <h2>Admin Login</h2>
                <?php if (isset($login_error)): ?>
                    <div class="error"><?php echo $login_error; ?></div>
                <?php endif; ?>
                <form method="POST">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary" style="width: 100%;">Login</button>
                </form>
            </div>
        </div>
    </body>
    </html>
    <?php
    exit();
}

// Get statistics
try {
    $subscribers_count = $pdo->query("SELECT COUNT(*) FROM subscribers WHERE is_active = 1")->fetchColumn();
    $appointments_count = $pdo->query("SELECT COUNT(*) FROM appointments WHERE status = 'pending'")->fetchColumn();
    $contact_messages_count = $pdo->query("SELECT COUNT(*) FROM contact_messages WHERE is_read = 0")->fetchColumn();
    
    // Get recent data
    $recent_subscribers = $pdo->query("SELECT * FROM subscribers ORDER BY subscribed_at DESC LIMIT 10")->fetchAll();
    $recent_appointments = $pdo->query("SELECT * FROM appointments ORDER BY created_at DESC LIMIT 10")->fetchAll();
    $recent_messages = $pdo->query("SELECT * FROM contact_messages ORDER BY created_at DESC LIMIT 10")->fetchAll();
} catch (PDOException $e) {
    $error = "Database error: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Blade & Fade Barbers</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .admin-header {
            background: #1a1a1a;
            color: white;
            padding: 1rem 0;
            margin-bottom: 2rem;
        }
        .admin-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        .stat-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 0.5rem;
        }
        .stat-label {
            color: #666;
            font-size: 1.1rem;
        }
        .data-section {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        .data-table th,
        .data-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e9ecef;
        }
        .data-table th {
            background: #f8f9fa;
            font-weight: 600;
            color: #1a1a1a;
        }
        .status-badge {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        .status-pending {
            background: #fff3cd;
            color: #856404;
        }
        .status-confirmed {
            background: #d4edda;
            color: #155724;
        }
        .status-cancelled {
            background: #f8d7da;
            color: #721c24;
        }
        .export-btn {
            background: #28a745;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 1rem;
        }
        .export-btn:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="admin-header">
        <div class="admin-nav">
            <h2><i class="fas fa-cut"></i> Blade & Fade Admin</h2>
            <a href="?logout=1" class="btn btn-secondary">Logout</a>
        </div>
    </div>

    <div class="container">
        <?php if (isset($error)): ?>
            <div class="message error"><?php echo $error; ?></div>
        <?php endif; ?>

        <h1>Dashboard Overview</h1>

        <!-- Statistics -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number"><?php echo $subscribers_count; ?></div>
                <div class="stat-label">Active Subscribers</div>
            </div>
            <div class="stat-card">
                <div class="stat-number"><?php echo $appointments_count; ?></div>
                <div class="stat-label">Pending Appointments</div>
            </div>
            <div class="stat-card">
                <div class="stat-number"><?php echo $contact_messages_count; ?></div>
                <div class="stat-label">Unread Messages</div>
            </div>
        </div>

        <!-- Recent Subscribers -->
        <div class="data-section">
            <h3><i class="fas fa-envelope"></i> Recent Newsletter Subscribers</h3>
            <a href="export.php?type=subscribers" class="export-btn">Export Subscribers</a>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Subscribed Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($recent_subscribers as $subscriber): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($subscriber['email']); ?></td>
                        <td><?php echo date('M j, Y g:i A', strtotime($subscriber['subscribed_at'])); ?></td>
                        <td>
                            <span class="status-badge <?php echo $subscriber['is_active'] ? 'status-confirmed' : 'status-cancelled'; ?>">
                                <?php echo $subscriber['is_active'] ? 'Active' : 'Inactive'; ?>
                            </span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Recent Appointments -->
        <div class="data-section">
            <h3><i class="fas fa-calendar-alt"></i> Recent Appointments</h3>
            <a href="export.php?type=appointments" class="export-btn">Export Appointments</a>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Service</th>
                        <th>Date & Time</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($recent_appointments as $appointment): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($appointment['name']); ?></td>
                        <td><?php echo htmlspecialchars($appointment['email']); ?></td>
                        <td><?php echo htmlspecialchars(ucwords(str_replace('_', ' ', $appointment['service']))); ?></td>
                        <td><?php echo date('M j, Y g:i A', strtotime($appointment['appointment_date'] . ' ' . $appointment['appointment_time'])); ?></td>
                        <td>
                            <span class="status-badge status-<?php echo $appointment['status']; ?>">
                                <?php echo ucfirst($appointment['status']); ?>
                            </span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Recent Contact Messages -->
        <div class="data-section">
            <h3><i class="fas fa-comments"></i> Recent Contact Messages</h3>
            <a href="export.php?type=messages" class="export-btn">Export Messages</a>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($recent_messages as $message): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($message['name']); ?></td>
                        <td><?php echo htmlspecialchars($message['email']); ?></td>
                        <td><?php echo htmlspecialchars($message['phone']); ?></td>
                        <td><?php echo htmlspecialchars(substr($message['message'], 0, 50)) . (strlen($message['message']) > 50 ? '...' : ''); ?></td>
                        <td><?php echo date('M j, Y g:i A', strtotime($message['created_at'])); ?></td>
                        <td>
                            <span class="status-badge <?php echo $message['is_read'] ? 'status-confirmed' : 'status-pending'; ?>">
                                <?php echo $message['is_read'] ? 'Read' : 'Unread'; ?>
                            </span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
