<?php
    $age = 25;
    $isStudent = false;

    if ($age > 18 && $isStudent) {
        echo "You are an adult student.";
    } else {
        echo "You are either not an adult or not a student.";
    }

    echo "<br>";

    $isWeekend = false;
    $isHoliday = false;

    if ($isWeekend || $isHoliday) {
        echo "It's time to relax and enjoy!";
    } else {
        echo "Back to work or school.";
    }

    echo "<br>";

    $isRainyDay = true;

    if (!$isRainyDay) {
        echo "It's not a rainy day, enjoy the outdoors!";
    } else {
        echo "Better stay indoors.";
    }

    echo "<br>";

    $isMorning = true;
    $isWeekday = true;

    if ($isMorning && $isWeekday) {
        echo "Good morning and have a productive day!";
    } elseif (!$isMorning && $isWeekday) {
        echo "Have a great day!";
    } else {
        echo "Enjoy your time!";
    }
?>
