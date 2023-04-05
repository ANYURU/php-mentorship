<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mentorship - Operators 2</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
    <section class="container"> 
        <h1>Operators 2</h1>
        <h2>Increment (++) and Decrement (--)</h2>
        <article>
            <h3> Increment (++): Increase the current value by 1</h3>
            <p> 
                <?php 
                    $salary = 100;
                    // $newSalary = $salary ++; 
                    // $newSalary = $salary = $salary + 1;
                    $salary++; // This is equivalent to $salary = $salary + 1;
                    $newSalary = $salary;
                    echo "Salary: ".$newSalary;
                ?>
            </p>

            <h3> Decrement (--): Reduce the current value by 1 </h3>
            <p> 
                <?php 
                    $age = 25;
                    $age--; // This is a short hand of line 32
                    // $age = $age - 1
                    echo "Age: ".$age;
                ?>
            </p>

            <h3>Increment assignment operator (+=)</h3>
            <p>
                Distance bicked 
                <?php 
                    $distanceBiked = 10.5;
                    $distanceBiked += 5; //Shortcut for line 42 
                    // $distanceBiked = $distanceBiked + 5;
                    echo $distanceBiked
                
                ?>
                km
            </p>

            <h3>Decrement assignment operator (-=)</h3>
            <p>
                Swimming bicked 
                <?php 
                    $swimming_distance = 4.5;
                    $swimming_distance -= 1.2; //Shortcut for line 56
                    // $swimming_distance = $swimming_distance - 1.2;
                    echo $swimming_distance

                ?>
                m
            </p>

            <h3>Modulus operator (%): Divides the operand on the left with the operand on the right and returns the remainder after the division operation.</h3>
            <p>
                5 % 2 = 
                <?php 
                    $number_1 = 5;
                    $divisor = 2; 
                    $result = $number_1 % $divisor;
                    echo $result;
    
                ?>
            </p>

            <h3>Division operator(/): Divide the left operand with the right operand and get the quotient</h3>
            <p>
                5 / 2 = 
                <?php 
                    $number_1 = 5;
                    $divisor = 2; 
                    $result = $number_1 / $divisor;
                    echo $result;
    
                ?>
            </p>

            <h3>Modulus operator (%): Divides the operand on the left with the operand on the right and returns the remainder after the division operation.</h3>
            <p>
                10 % 4 = 
                <?php 
                    $number_1 = 10;
                    $divisor = 4; 
                    $result = $number_1 % $divisor;
                    echo $result;
    
                ?>
            </p>

            <h3>Modulus operator (%): Divides the operand on the left with the operand on the right and returns the remainder after the division operation.</h3>
            <p>
                70 % 30 = 
                <?php 
                    $number_1 = 70;
                    $divisor = 30; 
                    $result = $number_1 % $divisor;
                    echo $result;
    
                ?>
            </p>

            <h3>Exponentiation operator (**) denoted by a Double Asterisks: Raises the operand on the left of the exponentiation operation to operand on the right of the operation.</h3>
            <p>
                4 ** 2 = 
                <?php echo
                    $number_1 = 4;
                    $power = 2; 
                    $result = $number_1 ** $power; 
                    echo $result; // Expect 16
    
                ?>
            </p>
        </article>
    </section>
</body>
</html>