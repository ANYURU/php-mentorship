<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mentorship - Array </title>
</head>
<body>
    <?php 
        /**
         * @Array: A data type that holds many values which can be of different dataypes.
         */
        // Example 1: Create an Array using the Array function
        $students = Array('David', 'Fanny', 'Stephen', 'Henry');
        var_dump($students);
    ?>
    <br />
    <?php 
        // Example 2: Create an Array using square brackets.
        $countries = ['Uganda', 'Kenya', 'Tanzania'];
        var_dump($countries);
    ?>
    <br />
    <pre>
    <?php 
        // Example 3: Create an Array which has values of different data types
        $mixedDataTypes = [$countries, 'David', 30, true, 10.2, null];
        var_dump($mixedDataTypes);
        /**
         * Expected output:
         * array(6) {
         *   [0]=>
         *   array(3) {
         *      [0]=> string(6) "Uganda"
         *      [1]=> string(5) "Kenya"
         *      [2]=> string(8) "Tanzania"
         *   }
         * [1]=> string(5) "David"
         * [2]=> int(30)
         * [3]=> bool(true)
         * [4]=> float(10.2)
         * [5]=> NULL
         * }
         */
        // How do we access the value of an array.
        // Syntax: identifier(variable)[position_of_the_needed_value]
        echo $mixedDataTypes[0];
        echo '<br/>';
        echo $mixedDataTypes[3];        
        $mixedDataTypes[2] = 'Fanny';
        echo '<br/>';
        echo $mixedDataTypes[2];
    ?>
    </pre>

</body>
</html>