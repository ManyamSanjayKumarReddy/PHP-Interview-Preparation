<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <form method="post" action="index.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br> <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br> <br>
        <input type="submit" value="Login" name="login">
        <br>
        <hr>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (!empty($username) && !empty($password)) {
            echo "Hello, $username!";
        } else {
            echo "Please provide both username and password.";
        }
    } else {
        echo "Both username and password are required.";
    }
}
?>
