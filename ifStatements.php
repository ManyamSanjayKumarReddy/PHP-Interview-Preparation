<?php
    $temperature = 40; // Temperature in Celsius

    if ($temperature > 30) {
        echo "It's a hot day! Remember to stay hydrated.";
    } elseif ($temperature >= 20 && $temperature <= 30) {
        echo "The weather is pleasant. Enjoy your day!";
    } else {
        echo "It's a bit chilly. Don't forget your jacket.";
    }
?>
