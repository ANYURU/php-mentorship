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
        <h3></h3>
        <p>
            <?php 
                $november_profit = 75000; // november profit
                $december_profit = 120000; // december profit
            ?>
            Is <?php $november_profit ?> >= <?php $december_profit?>
            Is 5 === '5' ?
            <span class="answer">
                <?php var_dump($november_profit >= $december_profit); ?>
            </span>
        </p>
        <p class="description">
            The reason the above gives false is because the integer 5 at the left of the expression is not equivalent to the string on the right of the equivalent operator
        </p>
        
   </section>
</body>
</html>