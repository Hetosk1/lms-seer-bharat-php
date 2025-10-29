<?php
// Start output buffering to prevent "headers already sent" errors
if (session_status() === PHP_SESSION_NONE) {
    ob_start();
    session_start();
}

// Check whether the session variable is present or not
if (!isset($_SESSION['id']) || ($_SESSION['id'] == '')) {
    header("Location: index.php");
    exit();
}

// Store session ID
$session_id = $_SESSION['id'];

// Flush the output buffer at the end
ob_end_flush();
?>

