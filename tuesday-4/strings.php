<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mentorship - Strings</title>
</head>
<body>
    <!-- 
        Why we put php in the boiler plate.
        1. We want to learn how integrate php in html.
        2. We want to learn how to display PHP results in HTML though php is not a backend language.
     -->
     <?php
        /**
         * Strings: are a group of alphanumeric characters and special symbols enclosed in single or double quotes.
         */

         $firstName = "john1";

         // identifier = value

         var_dump($firstName); //string(length)("john1")
        
         echo '<br />';

         $lastName = 'Doe';
         var_dump($lastName);

         echo '<br />';

         $age = "25";
         var_dump( $age );

         echo '<br />';

         $age2 = 32;
         $totalAge = $age + $age2; // The value in age will be converted to the data type of value in $age2 where $age2 is an integer datatype. The value in age will also become an integer value of 28. This is because the operation in the expression is an arithmetic operation.
         var_dump($totalAge);

         $totalAge2 = $age - $age2;
         var_dump( $totalAge2);

         $ageX2 = $age * 2;
         var_dump($ageX2);
     ?>
</body>
</html>