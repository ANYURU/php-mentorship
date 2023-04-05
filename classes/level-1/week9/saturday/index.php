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
        <h1>Master Arrays in PHP</h1>
        <p>In Programming languages, an Array is a special datatype that stores a collection of values.</p>
        <?php $name = "David";?>
        <?php $names = array("David", "Fanny", "Derrick", "Peter");?> 
        <?php $names2 = ["David", "Fanny", "Derrick", "Peter", "sharon"];?>
        <p>
            If we want to pick Derrick from the above, we would specify the array from which we are picking the item and then we would specify the position or index of the "Derrick" in the arrya spcified
            <br>
            The syntax is array[ index ]
        </p>
        <p><?php echo $names[2]?></p>
        <h2>Display all the items in the array.</h2>
        <?php
        for ($i = 0; $i < 4; $i++):
            // Block of code that we want to loop
            echo $name2[$i], "<br/>";
        endfor;
        ?>
        <h2>Access array items without knowning the size of the array.</h2>
        <p>We shall use the php inbuild functions. i.e. sizeof() and count()</p>
        <?php
        $total_names = count($names2);
        for ($i = 0; $i < $total_names; $i++):
            // block of code that we want to loop
            echo $names2[$i], "<br/>";
        endfor;
        ?>
        <h2>What's the last itme in the array?</h2>
        <?php echo end($names2);?>
        <?php echo $names2[ $total_names - 1]?>
        <p>Arranging items in the array. We shall use the sort() function.</p>
        <code>
        <?php 
            sort( $names2, SORT_NUMERIC );
            var_dump($names2);
        ?>
        </code>
        <pre>
        <?php 
            echo sort( $names2, SORT_NUMERIC );
            var_dump($names2);
        ?>
        </pre>
        <!-- 
            Assignment
            Instructions:
            1. Follow this link: https://www.w3schools.com/php/php_arrays_sort.asp
            2. Read the sorting of the arrays. And, test and practice using all the code there using their examples and use it.
            3. Create a Github gist and submit before the next session.   
        -->

    </section>     
</body>
</html>