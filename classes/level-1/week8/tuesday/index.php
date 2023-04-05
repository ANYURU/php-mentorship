<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Mentorship - Conditional Statements</title>
</head>
<body>
   <section class="container">
        <h1> If...elseif</h1>
        <?php 
            /**
             * If is is raining.
             * -- Carry Umbrella
             * -- Carry warm clothes
             * -- Wear gumboats
             * else if it's not raining
             * -- Carry warm clothes
             */

            $increment_rate = 3;
            if( $increment_rate >= 7):
                echo 'Congratulate Team member upon great performance.<br/>';
                echo 'Next month pay with salary increment<br/>';
            elseif($increment_rate < 7 && $increment_rate > 5):
                echo 'Team member is close to salary increment! <br/>';
            elseif($increment_rate < 5):
                echo 'Warning contract might be terminated soon! <br/>';
            endif;
        ?>
        <h1> Nested if...else</h1>
        <?php
            $increment_rate = 10;
            if( $increment_rate >= 7) {
                echo 'Congratulate Team member upon great performance.<br/>';
                echo 'Next month pay with salary increment <br/>';
            }
            else {
                if($increment_rate < 7 && $increment_rate > 5) {
                    echo 'Team member is close to salary increment! <br/>';
                } else {

                    echo 'Warning contract might be terminated soon! <br/>';
                }

            }
        ?>
        
        <h1>Switch statement</h1>
        <?php
            /**
             * Challenge
             * 1. Using the if statement design a web page that shows whether someone's temperature is too high or low.
             * 2. Using the if elseif else statement implement a web page that will tell us if the car is over speeding or at normal speed or underspeed. 
             * 3. Research and describe what break and continue statements are in php, what's their purpose and give an example that you can breakdown on the whiteboard.
             */

            /**
             * The switch statement
             * switch ( variable ) {
             * case 1:
             * ----- block of code
             * break;
             * case 2:
             * ----- block of code
             * break;
             * default:
             * ----- block of code
             * }
             */

            /**
             * Student Marks and Grades
             * Mark range: 91 - 100: D1, 81 - 90: D2, 71 - 80: C3, 61 - 70: C4, 51 - 60: C5, 41 - 50: C6: 31 - 40: P7, 21 - 30: P8, 0 - 20: F9
             */
            $student_marks = 0;
            switch( $student_marks ) {
                case 91:
                    echo 'Got D1';
                    break;

                case 81:
                    echo 'Got D2';
                    break;

                case 71:
                    echo 'Got C3';
                    break;

                case 61:
                    echo 'Got C4';
                    break;

                case 51:
                    echo 'Got C5';
                    break;

                case 41:
                    echo 'Got C6';
                    break;

                case 31:
                    echo 'Got P7';
                    break;

                case 21:
                    echo 'Got P8';
                    break;

                case 20:
                    echo 'Got F9';
                    break;

                default: 
                    echo 'Ungraded';
                    
            }
        ?>
        <h2>Checking student grade using the if...elseif...else</h2>
        <?php 
            $student_marks = 65;
            echo "Student Marks is {$student_marks}, ";
            if ( $student_marks >= 91 && $student_marks <= 100) {
                echo 'Grade D1';
            } 
            elseif ( $student_marks >= 81 && $student_marks <= 90) {
                echo 'Grade D2';
            }
            elseif ( $student_marks >= 71 && $student_marks <= 80) {
                echo 'Grade C3';
            }
            elseif ( $student_marks >= 61 && $student_marks <= 70) {
                echo 'Grade C4';
            }
            elseif ( $student_marks >= 51 && $student_marks <= 60) {
                echo 'Grade C5';
            }
            elseif ( $student_marks >= 41 && $student_marks <= 50) {
                echo 'Grade C6';
            }
            elseif ( $student_marks >= 31 && $student_marks <= 40) {
                echo 'Grade P7';
            }
            elseif ( $student_marks >= 21 && $student_marks <= 30) {
                echo 'Grade P8';
            }
            elseif ( $student_marks >= 0 && $student_marks <= 20) {
                echo 'Grade F9';
            } 
            else {
                echo 'Ungraded';
            }
        ?>
   </section>
</body>
</html>