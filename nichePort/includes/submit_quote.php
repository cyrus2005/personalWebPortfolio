<?php
require_once 'config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

try {
    // Get JSON input
    $input = json_decode(file_get_contents('php://input'), true);
    
    if (!$input) {
        throw new Exception('Invalid JSON input');
    }
    
    // Validate required fields
    $requiredFields = ['customerName', 'customerEmail', 'customerPhone', 'vehicleYear', 'vehicleMake', 'vehicleModel', 'damageType'];
    foreach ($requiredFields as $field) {
        if (empty($input[$field])) {
            throw new Exception("Missing required field: $field");
        }
    }
    
    // Sanitize input data
    $customerName = htmlspecialchars(trim($input['customerName']));
    $customerEmail = filter_var(trim($input['customerEmail']), FILTER_SANITIZE_EMAIL);
    $customerPhone = preg_replace('/[^0-9+\-\(\)\s]/', '', trim($input['customerPhone']));
    $vehicleYear = (int)$input['vehicleYear'];
    $vehicleMake = htmlspecialchars(trim($input['vehicleMake']));
    $vehicleModel = htmlspecialchars(trim($input['vehicleModel']));
    $damageType = htmlspecialchars(trim($input['damageType']));
    $damageDescription = htmlspecialchars(trim($input['damageDescription'] ?? ''));
    
    // Validate email
    if (!filter_var($customerEmail, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Invalid email address');
    }
    
    // Validate year
    if ($vehicleYear < 1990 || $vehicleYear > date('Y') + 1) {
        throw new Exception('Invalid vehicle year');
    }
    
    // Start transaction
    $pdo->beginTransaction();
    
    // Insert customer
    $customerStmt = $pdo->prepare("
        INSERT INTO customers (name, email, phone, created_at) 
        VALUES (?, ?, ?, NOW())
    ");
    $customerStmt->execute([$customerName, $customerEmail, $customerPhone]);
    $customerId = $pdo->lastInsertId();
    
    // Insert vehicle
    $vehicleStmt = $pdo->prepare("
        INSERT INTO vehicles (customer_id, year, make, model, created_at) 
        VALUES (?, ?, ?, ?, NOW())
    ");
    $vehicleStmt->execute([$customerId, $vehicleYear, $vehicleMake, $vehicleModel]);
    $vehicleId = $pdo->lastInsertId();
    
    // Insert estimate
    $estimateStmt = $pdo->prepare("
        INSERT INTO estimates (customer_id, vehicle_id, damage_description, status, created_at, notes) 
        VALUES (?, ?, ?, 'pending', NOW(), ?)
    ");
    $estimateStmt->execute([
        $customerId, 
        $vehicleId, 
        "Damage Type: $damageType\nDescription: $damageDescription",
        "Interactive quote request from website"
    ]);
    $estimateId = $pdo->lastInsertId();
    
    // Commit transaction
    $pdo->commit();
    
    // Send email notification to shop
    $to = SITE_EMAIL;
    $subject = "New Estimate Request - $customerName";
    $message = "
    New estimate request received from website:
    
    Customer: $customerName
    Email: $customerEmail
    Phone: $customerPhone
    
    Vehicle: $vehicleYear $vehicleMake $vehicleModel
    Damage Area: $damageType
    Description: $damageDescription
    
    Estimate ID: $estimateId
    Date: " . date('Y-m-d H:i:s') . "
    
    Please contact the customer within 24 hours.
    ";
    
    $headers = "From: " . SITE_EMAIL . "\r\n";
    $headers .= "Reply-To: $customerEmail\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    mail($to, $subject, $message, $headers);
    
    // Send confirmation email to customer
    $customerSubject = "Estimate Request Confirmation - Generic Collision Shop";
    $customerMessage = "
    Dear $customerName,
    
    Thank you for your estimate request! We have received your information and will contact you within 24 hours to discuss your repair needs.
    
    Your request details:
    Vehicle: $vehicleYear $vehicleMake $vehicleModel
    Damage Area: $damageType
    Description: $damageDescription
    
    If you have any questions, please don't hesitate to call us at " . SITE_PHONE . ".
    
    Best regards,
    Generic Collision Shop Team
    " . SITE_PHONE . "
    " . SITE_EMAIL . "
    ";
    
    $customerHeaders = "From: " . SITE_EMAIL . "\r\n";
    $customerHeaders .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    mail($customerEmail, $customerSubject, $customerMessage, $customerHeaders);
    
    echo json_encode([
        'success' => true, 
        'message' => 'Estimate request submitted successfully',
        'estimateId' => $estimateId
    ]);
    
} catch (Exception $e) {
    // Rollback transaction on error
    if ($pdo->inTransaction()) {
        $pdo->rollBack();
    }
    
    error_log("Quote submission error: " . $e->getMessage());
    echo json_encode([
        'success' => false, 
        'message' => 'Error submitting request: ' . $e->getMessage()
    ]);
}
?>
