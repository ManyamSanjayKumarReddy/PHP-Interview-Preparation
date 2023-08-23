<?php
    // Example 1: Simple while loop
    $count = 1;
    echo "Example 1: Simple while loop<br>";
    while ($count <= 5) {
        echo "Iteration {$count}<br>";
        $count++;
    }
    echo "<br>";

    // Example 2: while loop with conditional exit
    $number = 10;
    echo "Example 2: while loop with conditional exit<br>";
    while ($number > 0) {
        echo "{$number}... ";
        if ($number === 5) {
            echo "Blastoff!";
            break;
        }
        $number--;
    }
    echo "<br><br>";

    // Example 3: Infinte loop with break
    $counter = 1;
    echo "Example 3: Infinite loop with break<br>";
    while (true) {
        echo "{$counter} ";
        if ($counter >= 5) {
            echo "Exiting the loop.";
            break;
        }
        $counter++;
    }
?>
