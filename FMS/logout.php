<?php
session_start(); // Resume existing session

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login page after logout
header("Location: index.php");
exit;
?>
