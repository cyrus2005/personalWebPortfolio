<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Unauthorized']);
    exit();
}

require_once '../config/database.php';

$database = new Database();
$db = $database->getConnection();

// Set up response
$response = ['success' => false, 'message' => '', 'uploaded' => 0];

// Check if files were uploaded
if (!isset($_FILES['photos']) || empty($_FILES['photos']['name'][0])) {
    $response['message'] = 'No files selected';
    echo json_encode($response);
    exit();
}

$uploaded_count = 0;
$errors = [];

// Create upload directory if it doesn't exist
$upload_dir = '../mediaGallery/';
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0755, true);
}

// Process each uploaded file
$files = $_FILES['photos'];
$file_count = count($files['name']);

for ($i = 0; $i < $file_count; $i++) {
    // Skip if file upload had errors
    if ($files['error'][$i] !== UPLOAD_ERR_OK) {
        $errors[] = "File " . ($i + 1) . ": Upload error";
        continue;
    }
    
    $file_name = $files['name'][$i];
    $file_tmp = $files['tmp_name'][$i];
    $file_size = $files['size'][$i];
    $file_type = $files['type'][$i];
    
    // Validate file type
    $allowed_types = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
    if (!in_array($file_type, $allowed_types)) {
        $errors[] = "File '$file_name': Invalid file type. Only JPG, PNG, GIF, and WebP are allowed.";
        continue;
    }
    
    // Validate file size (10MB max)
    $max_size = 10 * 1024 * 1024; // 10MB
    if ($file_size > $max_size) {
        $errors[] = "File '$file_name': File too large. Maximum size is 10MB.";
        continue;
    }
    
    // Generate unique filename
    $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
    $unique_filename = uniqid() . '_' . time() . '.' . $file_extension;
    $upload_path = $upload_dir . $unique_filename;
    
    // Move uploaded file
    if (move_uploaded_file($file_tmp, $upload_path)) {
        // Generate title from filename
        $title = pathinfo($file_name, PATHINFO_FILENAME);
        $title = str_replace(['_', '-'], ' ', $title);
        $title = ucwords($title);
        
        // Insert into database
        $insert_query = "INSERT INTO gallery_images (filename, title, description, category, featured, file_size, mime_type, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";
        $insert_stmt = $db->prepare($insert_query);
        
        try {
            $insert_stmt->execute([
                $unique_filename,
                $title,
                'Uploaded via admin panel',
                'general',
                0,
                $file_size,
                $file_type
            ]);
            $uploaded_count++;
        } catch (PDOException $e) {
            $errors[] = "File '$file_name': Database error - " . $e->getMessage();
            // Remove uploaded file if database insert failed
            unlink($upload_path);
        }
    } else {
        $errors[] = "File '$file_name': Failed to move uploaded file";
    }
}

// Prepare response
if ($uploaded_count > 0) {
    $response['success'] = true;
    $response['uploaded'] = $uploaded_count;
    
    if (!empty($errors)) {
        $response['message'] = "Uploaded $uploaded_count files successfully. " . count($errors) . " files had errors.";
        $response['errors'] = $errors;
    } else {
        $response['message'] = "All $uploaded_count files uploaded successfully!";
    }
} else {
    $response['message'] = "No files were uploaded successfully.";
    if (!empty($errors)) {
        $response['errors'] = $errors;
    }
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
