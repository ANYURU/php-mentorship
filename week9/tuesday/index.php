<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mentorship - Master Loops - Part 2</title>
</head>
<body>
    <h1>Master Loops</h1>
    <h1>For Loop Syntax</h1>
    <p>for( initializer; condition; decrement/increment) { //code block }</p>
    <?php

    for ($number_of_students = 5; $number_of_students > 0; $number_of_students--) {
        echo "<p>This is my name. <br /> I am  student number {$number_of_students} in the queue.</p>";
        if( $number_of_students === 3):
            break;
        endif;
    }

    for ($customers_in_queue = 0; $customers_in_queue < 5; $customers_in_queue++) {
        echo "<p>This is my name. <br /> I am  student number {$customers_in_queue} in the queue.</p>";
    }

    for ($week_days = 1; $week_days < 8; $weekdays++):
        switch($week_days):
            case 1:
                echo "{$week_days} Sunday </br>";
                break;

            case 2:
                echo "{$week_days} Monday </br>";
                break;
            
            case 3:
                echo "{$week_days} Tuesday </br>";
                break;

            case 4:
                echo "{$week_days} Wednesday </br>";
                break;

            case 5:
                echo "{$week_days} Thursday </br>";
                break;

            case 6:
                echo "{$week_days} Friday </br>";
                break;

            case 7:
                echo "{$week_days} Saturday </br>";
                break;
                

        endswitch;


    endfor;
    ?>

    
    ?>

    
    
</body>
</html>