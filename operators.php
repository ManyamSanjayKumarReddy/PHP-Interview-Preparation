<?php
    // Arithmetic Operators
    $x = 5454;
    $y = 9000;

    // Addition
    $add = $x + $y;
    
    // Subtraction
    $sub = $x - $y;
    
    // Multiplication
    $mul = $x * $y;
    
    // Division
    $div = $x / $y;
    
    // Modulo (Remainder)
    $modulo = $x % $y;

    echo "Addition: {$add}, Subtraction: {$sub}, Multiplication: {$mul}, Division: {$div}, Modulo: {$modulo}<br><br>";

    // Increment and Decrement Operators
    $counter = 110;

    // Increment by 1
    $counter++;
    
    // Increment by a specific value
    $counter += 5;
    
    // Decrement by 1
    $counter--;
    
    // Decrement by a specific value
    $counter -= 3;

    echo "Counter: {$counter}<br><br>";

    // Operator Precedence
    /*
        Order to be followed is:
        1. ()
        2. **
        3. * / %
        4. + -
    */

    $result = (10 + 2) * 3 - 4 / 2 ** 2;

    echo "Result of expression: {$result}";
?>
