<?php
session_start();
require_once '../config/database.php';

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: index.php');
    exit();
}

$type = $_GET['type'] ?? '';

if (!in_array($type, ['subscribers', 'appointments', 'messages'])) {
    die('Invalid export type');
}

try {
    switch ($type) {
        case 'subscribers':
            $data = $pdo->query("SELECT email, subscribed_at, is_active FROM subscribers ORDER BY subscribed_at DESC")->fetchAll();
            $filename = 'subscribers_' . date('Y-m-d') . '.csv';
            $headers = ['Email', 'Subscribed Date', 'Status'];
            break;
            
        case 'appointments':
            $data = $pdo->query("SELECT name, email, phone, service, appointment_date, appointment_time, status, created_at FROM appointments ORDER BY created_at DESC")->fetchAll();
            $filename = 'appointments_' . date('Y-m-d') . '.csv';
            $headers = ['Name', 'Email', 'Phone', 'Service', 'Date', 'Time', 'Status', 'Created'];
            break;
            
        case 'messages':
            $data = $pdo->query("SELECT name, email, phone, message, created_at, is_read FROM contact_messages ORDER BY created_at DESC")->fetchAll();
            $filename = 'contact_messages_' . date('Y-m-d') . '.csv';
            $headers = ['Name', 'Email', 'Phone', 'Message', 'Date', 'Status'];
            break;
    }
    
    // Set headers for CSV download
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Cache-Control: no-cache, no-store, must-revalidate');
    header('Pragma: no-cache');
    header('Expires: 0');
    
    // Create file handle
    $output = fopen('php://output', 'w');
    
    // Add BOM for UTF-8
    fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));
    
    // Write headers
    fputcsv($output, $headers);
    
    // Write data
    foreach ($data as $row) {
        $csv_row = [];
        foreach ($row as $key => $value) {
            if ($key === 'subscribed_at' || $key === 'created_at') {
                $csv_row[] = date('Y-m-d H:i:s', strtotime($value));
            } elseif ($key === 'is_active') {
                $csv_row[] = $value ? 'Active' : 'Inactive';
            } elseif ($key === 'is_read') {
                $csv_row[] = $value ? 'Read' : 'Unread';
            } elseif ($key === 'service') {
                $csv_row[] = ucwords(str_replace('_', ' ', $value));
            } else {
                $csv_row[] = $value;
            }
        }
        fputcsv($output, $csv_row);
    }
    
    fclose($output);
    exit();
    
} catch (PDOException $e) {
    die('Database error: ' . $e->getMessage());
}
?>
