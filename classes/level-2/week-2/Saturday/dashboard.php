<?php 
    session_start();
    $logged_in = isset($_SESSION['username']) ? true :  false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <nav>
        <a href="inde.php">Home</a> | <?= $logged_in ? '' : null?>
    </nav>
    <?php if($logged_in):
        require_once('private.nav.php');
    ?>
        <h1>Dashboard</h1>
    <?php else:?>
        <h1>Sorry, you are not logged in</h1>
        <p><a href="index.php">login</a></p>
    <?php endif?>
</body>
</html>