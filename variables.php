<?php
    // Variables in PHP
    /*
        1. Integers
        2. Strings
        3. Floats
        4. Booleans
    */

    // Integers
    $age = 25;

    // Strings
    $quote = "To be or not to be";
    $firstName = "John";
    $lastName = "Doe";

    // Floats
    $pi = 3.14159;
    $radius = 5.5;
    $area = $pi * ($radius ** 2);

    // Booleans
    $isStudent = true;
    $isWorking = false;

    // Original examples
    $name = "Bro Code";
    $food = "Pizza";
    $cgpa = 9.01;
    $price = 4.99;

    echo "Name: {$name}";
    echo "<br> {$name} loves to eat {$food} more.";
    echo "<br> {$name}'s CGPA is {$cgpa}";
    echo "<br> The price of {$food} is \${$price}.";

    echo "<hr>";  // Separator

    // Additional examples
    echo "Age: {$age} years.";
    echo "<br> Shakespeare said, '{$quote}'.";
    echo "<br> Hello, " . $firstName . " " . $lastName . "!";
    echo "<br> Hey there, {$firstName} {$lastName}!";
    echo "<br> The area of a circle with radius {$radius} is approximately {$area}.";
    echo "<br> " . ($isStudent ? "I am a student." : "I am not a student.");
    echo "<br> " . ($isWorking ? "I am currently working." : "I am not working right now.");
?>
