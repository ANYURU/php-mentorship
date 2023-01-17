<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <title>Challenges</title>
</head>
<body>
  <h1>Challenges</h1>
  <div class="continer">
    <section class="task">
        <div class="header">
            <h2 class="title">Challenge 1</h2>
            <div class="question">
                <span class="number"></span>
                <span class="description">
                    Using the if statement design a web page that shows whether someone's temperature is too high or low.
                </span>
            </div>
        </div>
    </section>
    <section class="result">
        <div class="code-snippet">
            <?php
            $maximum_threshold = 35;
            $minimum_threshold = 32;
            $result = "";

            $temperature = (float) readline( ' Enter your current body temperature ');
            if ( $temperature > $maximum_threshold ):
                $result = "Your temperature is high";
            else:
                if ( $temperature < $minimum_threshold ):
                    $result = "Your temperature is low";
                endif;
            endif;
            ?>
        </div>
    </section>
  </div>
  <div class="continer">
    <section class="task">
        <div class="header">
            <h2 class="title">Challenge 2</h2>
            <div class="question">
                <span class="number"></span>
                <span class="description">
                    Using the if elseif else statement implement a web page that will tell us if the car is over speeding or at normal speed or underspeed. 
                </span>
            </div>
        </div>
    </section>
    <section class="result">
        <div class="code-snippet">
            <?php
            $maximum_threshold = 120;
            $minimum_threshold = 60;
            $speed_check= "";

            $current_speed = (float) readline( " What is your vehicle's  current speed");
            if ( $current_speed > $maximum_threshold ):
                $speed_check= "Warning! Your are over speeding. Please slow down.";
            elseif ( $current_speed < $minimum_threshold ):
                $speed_check= "Warning! Your speed is too low for this highway. Please speed up.";
            else:
                $speed_check = "Great. You're driving at normal speed. Keep safe.";
            endif;
            ?>
        </div>
    </section>
  </div>
  
</body>
</html>