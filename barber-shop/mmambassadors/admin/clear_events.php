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

$response = ['success' => false, 'message' => ''];

try {
    // Clear all events
    $clear_query = "DELETE FROM events";
    $stmt = $db->prepare($clear_query);
    $stmt->execute();
    
    $response['success'] = true;
    $response['message'] = 'All events cleared successfully';
    
} catch (PDOException $e) {
    $response['message'] = 'Database error: ' . $e->getMessage();
}

header('Content-Type: application/json');
echo json_encode($response);
?>
