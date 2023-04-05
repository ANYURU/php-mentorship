<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master functions in PHP</title>
    <link rel="stylesheet" href="styles.css" rel="stylesheet">
</head>
<body>
    <h1>Mastering Functions with PHP.</h1>
    <h2>What is a function?</h2>
    <p>A function is a defined block of code that is meant to fulfill a particular task.</p>

    <h2>Facts about functions</h2>
    <ol>
        <li>Functions in php have names the same way variables do</li>
        <li>To create a function we use the function keyword in php</li>
        <li>There are special cases when functions do not have names. Such functions which don't have names are called Anonymous functions. Usually these are used as callbacks.</li> 
        <li>Functions can have parameters.</li>
        <li>Functions can return values.</li>
        <li>If you want a function to perform a given task, the function must be invoked, called or executed</li>
        <li>The code the function will execute is defined in the function body in a pair of curly brackets. The curly brackets come after the cirle brackets.</li>
    </ol>

    <h2>Example of invoking an inbluilt function.</h2>
    <?php echo ('This is a session about functions.'); ?>

    <h2>Defining custom functions.</h2>
    <?php 
        /**
         * @name: greet
         */

        function greet() {
            //function body
            echo 'Hi, David!'; //The code the function will execute when it's called. 

        }

        greet();
        function greet2() {
            echo 'Hola! Amigos';
        }
    ?>
    <p><?php Greet2(); //Invoke the greet2() function ?></p>
    <h2>Creating function that return a value in PHP.</h2>

    <?php 
        function get_name() {
            return 'Anyuru David';
        }
    ?>
    <p>
        <?php 
            echo greet2().' '.get_name(); //Functions that return a value
    
        ?>
    </p>

    <h2>A function that outputs something and also returns a value</h2>
    <?php 
        function add_numbers() {
            $a = 10;
            $b = 20;
            echo "a = {$a} and b = {$b}";
            return $a + $b;
        }

        $sum = add_numbers();
    ?>
    <p>So a + b = <?= $sum?></p>
    
</body>
</html>