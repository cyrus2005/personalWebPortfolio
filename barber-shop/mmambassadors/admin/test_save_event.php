<?php
// Test script to verify save_event.php works
session_start();
$_SESSION['admin_logged_in'] = true; // Simulate admin login

// Test data
$_POST['title'] = 'Test Event';
$_POST['description'] = 'This is a test event';
$_POST['event_date'] = '2025-09-11';
$_POST['event_time'] = '2:00 PM';
$_POST['location'] = 'Test Location';
$_POST['status'] = 'upcoming';

echo "Testing save_event.php with data:\n";
print_r($_POST);

// Include the save_event.php
ob_start();
include 'save_event.php';
$output = ob_get_clean();

echo "\nResponse from save_event.php:\n";
echo $output;
?>
