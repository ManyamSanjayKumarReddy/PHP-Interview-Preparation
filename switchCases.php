<?php
    // Example of a Switch Statement in PHP
    
    // Assume today is Monday
    $dayOfWeek = date("d-m-y / l");
    
    // Switch statement to determine the schedule based on the day of the week
    switch ($dayOfWeek) {
        case "Monday":
            $schedule = "Start the week with a team meeting.";
            break;
        case "Tuesday":
        case "Wednesday":
        case "Thursday":
            $schedule = "Focus on project tasks.";
            break;
        case "Friday":
            $schedule = "Wrap up pending work and plan for the next week.";
            break;
        default:
            $schedule = "Enjoy the weekend!";
    }
    
    // Display the schedule for the day
    echo "Today is {$dayOfWeek} please {$schedule}";
?>
