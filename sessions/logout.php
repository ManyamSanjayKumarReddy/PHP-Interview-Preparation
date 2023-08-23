<?php
session_start(); // Resume the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
header("Location: login.php"); // Redirect to the login page
exit();
?>
