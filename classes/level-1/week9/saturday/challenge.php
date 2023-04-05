<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mentorship - Master Arrays in PHP</title>
</head>
<body>
    <section class="container">
        <h1>Challenge</h1>
        
        <!-- 
            Assignment
            Instructions:
            1. Follow this link: https://www.w3schools.com/php/php_arrays_sort.asp
            2. Read the sorting of the arrays. And, test and practice using all the code there using their examples and use it.
            3. Create a Github gist and submit before the next session.   
        -->
        <!-- This sorts in Ascending order. It is the one done by default -->
        <?php 
        $cars = array("Volvo", "BMW", "Toyota", "Mercedes Benz");
        $numbers = array(4, 6, 2, 22, 11);
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        
        ?>
        <pre>
            <?php
            echo "<h1>Sorting arrays in ascending order.</h1>";
            echo "<h2>Sorting an array of strings in ascending order.</h2><p>Cars before sorting: </p> ";
            var_dump($cars);
            sort($cars);
            echo "<p>Cars after sorting: </p> ";
            var_dump($cars);
            $clength = count($cars);
            for($x = 0; $x < $clength; $x++) {
                echo $cars[$x];
                echo "<br>";
            }
            echo "<h2>Sorting an array of numbers in ascending order.</h2><p>Numbers before sorting: </p> ";
            var_dump($numbers);
            sort($numbers);
            echo "<p>Numbers after sorting: </p> ";
            var_dump($numbers);
            $arrlength = count($numbers);
            for($x = 0; $x < $arrlength; $x++) {
                echo $numbers[$x];
                echo "<br>";
            }
            echo "<h1>Sorting arrays in descending order rsort()";
            echo "<h2>Sorting numbers in descending order.</h2><p>Numbers before sorting: </p> ";
            var_dump($numbers);
            rsort($numbers);
            echo "<p>Numbers after sorting: </p> ";
            var_dump($numbers);
            $clength = count($numbers);
            for($x = 0; $x < $clength; $x++) {
                echo $numbers[$x];
                echo "<br>";
            }
            echo "<h2>Sorting an array of strings in descending order.</h2><p>Cars before sorting: </p> ";
            var_dump($cars);
            sort($cars);
            $clength = count($cars);
            echo "<p>Cars after sorting: </p> ";
            var_dump($cars);
            for($x = 0; $x < $clength; $x++) {
                echo $cars[$x];
                echo "<br>";
            }
            echo "<h1>Sorting arrays in ascending order using the asort() function.</h1>";
            echo "<p>Cars after sorting: </p> ";
            var_dump($cars);
            echo "<h2>Sorting an array of strings in ascending order.</h2><p>Age before sorting: </p> ";
            var_dump($age);
            echo "<p>Age after sorting: </p> ";
            asort($age);
            foreach($age as $x => $x_value) {
                echo "Key=" . $x . ", Value=" . $x_value;
                echo "<br>";
            }
            ?>
        </pre>



    </section>     
</body>
</html>