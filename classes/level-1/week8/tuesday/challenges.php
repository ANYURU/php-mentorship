<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="style.css"> 
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
            $temperature_check = "";

            $temperature = 39;
            if ( $temperature > $maximum_threshold ):
                $temperature_check = "Your temperature is high";
            else:
                if ( $temperature < $minimum_threshold ):
                    $temperature_check = "Your temperature is low";
                endif;
            endif;

            echo '</br> Current Temperature: '.$temperature.': '.$temperature_check;
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
    <section class="temperature_check">
        <div class="code-snippet">
            <?php
            $maximum_threshold = 120;
            $minimum_threshold = 60;
            $speed_check= "";

            $current_speed = 90;
            if ( $current_speed > $maximum_threshold ):
                $speed_check= "Warning! Your are over speeding. Please slow down.";
            elseif ( $current_speed < $minimum_threshold ):
                $speed_check= "Warning! Your speed is too low for this highway. Please speed up.";
            else:
                $speed_check = "Great. You're driving at normal speed. Keep safe.";
            endif;

            echo '</br> Current Speed: '.$current_speed.': '.$speed_check;
            ?>
        </div>
    </section>
  </div>
  
</body>
</html>