<?php
    // Example of For Loops with Different Forms and Increments/Decrements
    
    // Traditional for loop (increment)
    echo "Incrementing loop: ";
    for ($i = 1; $i <= 5; $i++) {
        echo "{$i} ";
    }
    echo "<br>";
    
    // Traditional for loop (decrement)
    echo "Decrementing loop: ";
    for ($i = 5; $i >= 1; $i--) {
        echo "{$i} ";
    }
    echo "<br>";
    
    // Looping through an array
    $colors = ["Red", "Green", "Blue", "Yellow"];
    echo "Looping through an array: ";
    for ($i = 0; $i < count($colors); $i++) {
        echo "{$colors[$i]} ";
    }
    echo "<br>";
    
    // Looping with a different increment value
    echo "Looping with increment of 2: ";
    for ($i = 0; $i <= 10; $i += 2) {
        echo "{$i} ";
    }
    echo "<br>";
    
    // Foreach loop (array)
    echo "Foreach loop: ";
    foreach ($colors as $color) {
        echo "{$color} ";
    }
    echo "<br>";
    
    
?>
