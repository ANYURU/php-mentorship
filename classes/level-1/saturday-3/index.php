<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mentorship - Data Types</title>
</head>
<body>
    <?php 
        /**
         * DATA TYPES
         * What is a Data type?
         * This is a particular kind of information in computers. And they define how the computer will work with certain information.
         * What are the different Data types in PHP?
         * 1. Integer
         * 2. Float
         * 3. String
         * 4. Resource
         * 5. Boolean
         * 6. Array
         * 
         * INTEGERS
         * These are whole numbers which are either positive or negatives.
         * They can be a minimmum of -2147483648 and the maximum 2147483648
         * 
         */

        //  INTEGERS
        $a = 10;
        $b = 20;
        $c = 20.0;

        var_dump( $c );

        $minimum = -2147483648;
        $maximum = 2147483648;
        ?>
        <p?><?php print($minimum)?></p>
        <p?><?php print($maximum)?></p>
        <p?><?php var_dump($maximum)?></p>
        <p?><?php var_dump($minimum)?></p>

        <p>
            <?php 
                /**
                 * Integers have rules, what are they?
                 * 1. Must at least have one digit.
                 * 2. Must not have a decimal point.
                 * 3. Must either be a positive or negative integer.
                 * 4. Can also be specified in
                 * Decimal (Base 10), Hexadecimal (base 16), Octal (base 8) and Binary(Base 2) 
                 
                 
                 * What can we do with integers?
                 * We can peform arithmetic or mathematical operations. For example
                 */ 
                // Addition operations
                $d = $a + $b;
                print($d);
            ?>
        </p>
        <?php 
            /**
             * We can concatenate them to strings. 
             */
        
        ?>    
    ?>
</body>
</html>