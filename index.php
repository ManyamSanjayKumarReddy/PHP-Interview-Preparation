<?php
// User registration (storing hashed password)
$password = 'mysecretpassword';
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// echo $hashedPassword . "<br>";
// Store $hashedPassword in the database

// User login (verifying hashed password)
$userEnteredPassword = 'mysecretpassword'; // Password entered by the user

// Retrieve the stored hashed password from the database
$storedHashedPassword = $hashedPassword; // Fetch the hashed password from the database

// Verify the user's entered password against the stored hashed password
if (password_verify($userEnteredPassword, $storedHashedPassword)) {
    // Password is correct, allow access
    echo "Login successful!";
} else {
    // Password is incorrect, deny access
    echo "Login failed!";
}
?>