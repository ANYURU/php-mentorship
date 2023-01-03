<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floats datatypes</title>
</head>
<body>
    <?php 
        /**
         * Data Types Part 2
         * Floats
         */

        $pi = 3.14;
        var_dump($pi);
        $length = 50;
        var_dump($length);

        // height in feet
        $heightInFeet = 6.4; //Integer
        $metresInAFoot = 0.03048; //Float (Decimal)

        $heightInMeters = $heightInFeet * $metresInAFoot; //Ahat data type will the height in Meters be?
        echo '<br/>';
        echo 'Height in metrest is: ';
        var_dump($heightInMeters);

        $davidHeight = 5;
        $peterHeight = 5.5;
        $totalHeight = $davidHeight + $peterHeight;

        echo '<br/>';
        var_dump( $totalHeight );

        $averageHeight = $totalHeight / 2;

        echo '<br />';
        var_dump($averageHeight);
    ?>
</body>
</html>