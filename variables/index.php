<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php 
        /**
         * Variables
         * What are variables?
         * They are contianers that store information in real life.
         * In programming, we use variables so that we use their values or modify in the program.
         * So our containers in programming are given names or we give names to our containers(variables.) 
         * We use variables inorder to organize our code and to also reuse values at a later stage in our code
         */

        $first_name = 'David';
        $last_name = 'Anyuru';
        echo 'First name: ', $first_name, '<br/>';
        echo 'Last name: ', $last_name, '<br/>';
        /**
         * SYNTAX:
         * $identifier_name = value;
         * The value can also be a variable
         * Example 2
         */
        $full_name = $first_name .' '. $last_name; // The . is a concatenation operator
        echo 'Full name: ', $full_name, '<br/>';

        /**
         * Variable Rules in PHP
         * 1. Should start with a dollar (money)  symbol
         * 2. It cannot start with a number
         * 3. It cannot contain spaces: e.g $first name. This is wrong.
         * 4. Special symbols apart from the $ and _ are not allowed in valid variable names.
         * Examples of valid varible names
         */
        $a; //Variable declaration
        $A;
        $a = 10; //Variable initialisation
        $A = 20;

        echo 'Value of $a = ', $a;
        echo '<br/>';
        echo 'Value of $b = ', $A;
        echo '<br/>';

        $b = $a + $A; //Expect: 30

        echo $a ." + ". $A . " = " . $b; //Output

        // Changing values of a variable.

        $b = $b - 5; //b = 30, if we remove 5 we expect 25 as a new value

        echo '<br />'; //Expect 5

    ?>
    
</body>
</html>