<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    $response = ['success' => false, 'message' => 'Access denied. Please log in.'];
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}

$response = ['success' => false, 'message' => ''];

try {
    require_once '../config/database.php';
    
    $database = new Database();
    $db = $database->getConnection();
    
    // Debug: Log received data
    error_log('Received POST data: ' . print_r($_POST, true));
    
    // Validate required fields
    if (empty($_POST['title']) || empty($_POST['event_date'])) {
        $response['message'] = 'Title and date are required. Received: ' . json_encode($_POST);
        echo json_encode($response);
        exit();
    }
    
    // Prepare the insert query
    $insert_query = "INSERT INTO events (title, description, event_date, location, status, created_at) VALUES (?, ?, ?, ?, ?, NOW())";
    $stmt = $db->prepare($insert_query);
    
    // Combine date and time if time is provided
    $event_datetime = $_POST['event_date'];
    if (!empty($_POST['event_time'])) {
        // Handle different time formats
        $time = $_POST['event_time'];
        if (preg_match('/(\d{1,2}):(\d{2})\s*(AM|PM)/i', $time, $matches)) {
            $hour = intval($matches[1]);
            $minute = $matches[2];
            $ampm = strtoupper($matches[3]);
            
            if ($ampm === 'PM' && $hour != 12) {
                $hour += 12;
            } elseif ($ampm === 'AM' && $hour == 12) {
                $hour = 0;
            }
            
            $time = sprintf('%02d:%s:00', $hour, $minute);
        } elseif (preg_match('/(\d{1,2}):(\d{2})/', $time, $matches)) {
            $time = $matches[1] . ':' . $matches[2] . ':00';
        }
        
        $event_datetime .= ' ' . $time;
    } else {
        $event_datetime .= ' 00:00:00';
    }
    
    // Handle photo upload
    $photo_filename = null;
    if (isset($_FILES['event_photo']) && $_FILES['event_photo']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = '../eventImages/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }
        
        $file_extension = pathinfo($_FILES['event_photo']['name'], PATHINFO_EXTENSION);
        $photo_filename = 'event_' . time() . '_' . uniqid() . '.' . $file_extension;
        $upload_path = $upload_dir . $photo_filename;
        
        if (move_uploaded_file($_FILES['event_photo']['tmp_name'], $upload_path)) {
            $response['photo_uploaded'] = true;
            $response['photo_filename'] = $photo_filename;
        } else {
            $response['photo_upload_error'] = 'Failed to upload photo';
        }
    }
    
    // Execute the insert
    $result = $stmt->execute([
        $_POST['title'],
        $_POST['description'] ?? '',
        $event_datetime,
        $_POST['location'] ?? '',
        $_POST['status'] ?? 'upcoming'
    ]);
    
    if ($result) {
        $event_id = $db->lastInsertId();
        
        // If photo was uploaded, update the event with photo filename
        if ($photo_filename) {
            $update_photo_query = "UPDATE events SET photo_filename = ? WHERE id = ?";
            $update_stmt = $db->prepare($update_photo_query);
            $update_stmt->execute([$photo_filename, $event_id]);
        }
        
        $response['success'] = true;
        $response['message'] = 'Event added successfully';
        $response['event_id'] = $event_id;
    } else {
        $response['message'] = 'Failed to insert event';
    }
    
} catch (Exception $e) {
    $response['message'] = 'Error: ' . $e->getMessage();
    error_log('Save event error: ' . $e->getMessage());
}

header('Content-Type: application/json');
echo json_encode($response);
?>
