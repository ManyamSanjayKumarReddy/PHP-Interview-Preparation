<?php
session_start(); // Resume the session

// Check if the username is stored in the session
if (!isset($_SESSION["username"])) {
    header("Location: login.php"); // Redirect to the login page if not logged in
    exit();
}

$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>This is your dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
