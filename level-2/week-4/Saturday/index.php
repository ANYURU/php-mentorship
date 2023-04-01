<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <a href="dashboard.php">Dashboard</a>
    <?php 
        if( isset($_GET['action'])):
            echo 'You have logged out';
        endif;

    ?>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Enter username"/>
        </br>
        <input type="password" name="password" placeholder="Enter password"/>
        </br>
        <input type="submit" value="Login"/>
    </form>
    <h1>Logout</h1>
    <form action="signup.php" method="post">
        <input type="text" name="username" placeholder="Enter username"/>
        </br>
        <input type="password" name="password" placeholder="Enter password"/>
        </br>
        <input type="submit" value="SignUp"/>
    </form>
</body>
</html>