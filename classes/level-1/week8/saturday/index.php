<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="container">
        <h1> Master Loops in PHP 101</h1>
            <ol>
                <li> do {} while lopp</li>
                <li></li>
                <li></li>
                <li></li>
            </ol>
            <h2> do{} while( condition ) </h2>
            <!-- The code in the do block will be executed once and then repeated/loop for as long as the condition given to the while is true -->
            <h3>Results of Example 1<h3>
            <?php 
                // Example 1
                $customers_in_queue = 1;
                do { 
                    echo "Please enter information. <br>";

                } while ( $customers_in_queue > 1);

                $students_in_queue = 4;
                $position = 1;

            ?>
            <h3>Results of Example 2</h3>
            <?php 
                echo "Started with {$students_in_queue} in the queue.<br/>";
                do {
                    echo "{$position} Enter your name.<br/>";
                    $position++;
                    $students_in_queue--;
                    echo "Students remaining on the queue: {$students_in_queue} <br />";
                   
                } while($students_in_queue > 1);
                echo "Congratulations!";
            ?>

            <div class="h2">while ( condition ) { //block } statement</div>
            <!-- The while executes the statement in the block as long as the condition you've provided to the while is true. -->
            <?php 
            /** 
             * $is_food_on_plate = true;
             * while( $is_food_on_plate ) {
             * echo "I am eating.";
             * }
             */
            

            /** 
             * Be careful with loops because they can result into endless execution.
             * For example the code above causes an endless loop. which most times undesirable.
            */


            $is_food_on_plate = true;
            $still_eating = true;
            $minutes = 0;

            while( $still_eating ) {
                echo "I am eating.";
                $minutes = $minutes + 1;
                // $minutes++;
                if($minutes > 10) {
                    $still_eating = false;
        
                }
            }


            /** 
             * Using colon notation to denote the scope of the block. 
             */
            $still_eating = true;
            $minutes = 0;

            while( $still_eating ):
                echo "I am eating. <br/>";
                $minutes = $minutes + 1;

                if( $minutes > 10 ) {
                    $still_eating = false;

                }
            endwhile;
            ?>

            
    </section>
</body>
</html>