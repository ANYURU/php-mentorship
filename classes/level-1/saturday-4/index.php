<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mentorship - Booleans</title>
</head>
<body>
    <?php 
    /**
     * Boolean: Is a type that specifies true or false values.
     */

     var_dump( true );
    ?>
    <br/>
    <?php var_dump(false); ?>
    <br/>
    <?php 
        $isLocked = true;
        var_dump($isLocked);
        $isLocked = false;
        echo '<br/>';
        var_dump($isLocked);
    ?>
    <br/>
    <?php 
        $amMale = True;
        $amFemale = False;

        var_dump($amMale);
        // var_dump($amFemale);
    ?>
    <br/>
    <?php 
        $amUgandan = TRUE;
        $amNigerian = FALSE;

        var_dump($amUgandan)
    ?>
    <br/>
    <?php 
        $amUgandan = tRuE; // Toggle case in php
        $amNigerian = FALSE;

        var_dump($amUgandan)
    ?>
    
</body>
</html>