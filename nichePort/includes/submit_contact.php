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
    $requiredFields = ['contactName', 'contactEmail', 'contactMessage'];
    foreach ($requiredFields as $field) {
        if (empty($input[$field])) {
            throw new Exception("Missing required field: $field");
        }
    }
    
    // Sanitize input data
    $contactName = htmlspecialchars(trim($input['contactName']));
    $contactEmail = filter_var(trim($input['contactEmail']), FILTER_SANITIZE_EMAIL);
    $contactPhone = preg_replace('/[^0-9+\-\(\)\s]/', '', trim($input['contactPhone'] ?? ''));
    $contactMessage = htmlspecialchars(trim($input['contactMessage']));
    
    // Validate email
    if (!filter_var($contactEmail, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Invalid email address');
    }
    
    // Insert contact submission
    $stmt = $pdo->prepare("
        INSERT INTO contact_submissions (name, email, phone, message, type, created_at) 
        VALUES (?, ?, ?, ?, 'general', NOW())
    ");
    $stmt->execute([$contactName, $contactEmail, $contactPhone, $contactMessage]);
    $submissionId = $pdo->lastInsertId();
    
    // Send email notification to shop
    $to = SITE_EMAIL;
    $subject = "New Contact Form Submission - $contactName";
    $message = "
    New contact form submission received:
    
    Name: $contactName
    Email: $contactEmail
    Phone: " . ($contactPhone ?: 'Not provided') . "
    
    Message:
    $contactMessage
    
    Submission ID: $submissionId
    Date: " . date('Y-m-d H:i:s') . "
    
    Please respond to the customer as soon as possible.
    ";
    
    $headers = "From: " . SITE_EMAIL . "\r\n";
    $headers .= "Reply-To: $contactEmail\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    mail($to, $subject, $message, $headers);
    
    // Send confirmation email to customer
    $customerSubject = "Thank You for Contacting Generic Collision Shop";
    $customerMessage = "
    Dear $contactName,
    
    Thank you for contacting Generic Collision Shop! We have received your message and will get back to you as soon as possible.
    
    Your message:
    $contactMessage
    
    If you need immediate assistance, please call us at " . SITE_PHONE . ".
    
    Best regards,
    Generic Collision Shop Team
    " . SITE_PHONE . "
    " . SITE_EMAIL . "
    ";
    
    $customerHeaders = "From: " . SITE_EMAIL . "\r\n";
    $customerHeaders .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    mail($contactEmail, $customerSubject, $customerMessage, $customerHeaders);
    
    echo json_encode([
        'success' => true, 
        'message' => 'Message sent successfully',
        'submissionId' => $submissionId
    ]);
    
} catch (Exception $e) {
    error_log("Contact form submission error: " . $e->getMessage());
    echo json_encode([
        'success' => false, 
        'message' => 'Error sending message: ' . $e->getMessage()
    ]);
}
?>
