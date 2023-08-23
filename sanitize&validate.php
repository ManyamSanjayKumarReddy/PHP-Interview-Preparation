<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="post" action="index.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age"><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);

    if ($username === false || $email === false || $age === false) {
        echo "Invalid input.";
    } elseif ($username === null || $email === null || $age === null) {
        echo "All fields are required.";
    } elseif ($age < 18 || $age > 100) {
        echo "Age must be between 18 and 100.";
    } else {
        // Perform further validation and processing
        echo "Registration successful for $username with email $email and age $age.";
    }
}
?>

