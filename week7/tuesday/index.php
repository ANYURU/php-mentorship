<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Operators Session 4</title>
</head>
<body>
   <section class="container">
        <h1>Operators session 4</h1>
        <h3>Greater than operator</h3>
        <p>
            <?php 
                $november_profit = 750000; // november profit
                $december_profit = 1200000; // december profit

                // The symbol in the line below 
            ?>
            <?= 'Is November profit '. $november_profit. 'Greater or Equal to (>=) December profit'. $december_profit; ?>
            <!-- The line above is an alternative for the line below. -->
            Is <?= $november_profit ?> >= <?php $december_profit?> ?
            <span class="answer">
                <?php var_dump($november_profit >= $december_profit); ?>
            </span>
        </p>

        <h3>
            Ternary operator ( condition ? statement if the condition is true : statement if the condition is false) <br /> 
            Inline conditional statement.
        </h3>
        <p>Assuming profit breakdown is: - <br/>
            November 2022: <?php $november_profit?>
            December 2022: <?php $december_operator?>
        </p>
        <p> 
            <?= $november_profit > $december_profit ? 'Business performed better in November' : 'Business performed better in December'?>
        </p>
        <p> 
            <?= $november_profit > $december_profit ? 'Business performed better in November' : 'Business was not good in november'?>
        </p>
        <?php 
            $student_total_marks = 300;
            $pass_mark = 350;
        ?>
        <p>
            Students Total Marks: <?= $student_total_marks; ?><br/>
            Pass Mark: <?= $pass_mark; ?>
        </p>
        <p>
            <?= $student_total_marks >= $pass_mark ? 'Promoted to the next session' : 'Please try again'; ?>
        </p>
        <?php 
            $temperature_today = 26;
            $temperature_yesterday = 28;
            $result = false;

            $result = $temperature_today >= $temperature_yesterday ?  "Today is dead hot" : "Yesterday was hot like hell!"
        ?>
        <p>
           Yesterday was: <?= $temperature_yesterday?> degrees celcius
           <br/>
           Today is: <?= $temperature_today?> degrees celcius 
        </p>
        <p>
            <?= $result?>
        </p>
   </section>
</body>
</html>