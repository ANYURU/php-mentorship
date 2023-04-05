<?php 
    /**
     * Steps:
     * 1. Specify the database details
     * 2. Implement php code that connects to the database
     * 3. Start maniputating the database
     */

    // 1. Specify the database details
    $server_name = 'localhost';
    $username = 'root';
    $password = "root";
    $database_name = "SchoolMIS";

    // Implemnt php code that connects to the database

    // $connection = new mysqli($server_name, $username, $password, $database_name);
    $connection = mysqli_connect($server_name, $username, $password, $database_name);
    if ($connection->connect_error):
        echo "Error connecting to database";
        echo $connection->connect_error;
    else: 
        // echo "Database connection successful.";
        $myusername = $_POST["username"];
        $mypassword = $_POST["password"];

        // Clean the data for security reasons.
        $myusername = trim(stripslashes( strip_tags( $myusername)));
        $mypassword = trim(stripslashes( strip_tags( $mypassword)));
        $password_hash = md5($mypassword);

        // echo $myusername;
        // echo "<br/>";
        // echo $mypassword;

        // Retrieve information from the database. 
        $query = "INSERT INTO members (username, password) VALUES  ('$myusername', '${password_hash}')";

        $result = mysqli_query($connection, $query);
        // We shall display information here

        if($result):
            echo "Registration successful";
        else:
            echo "Registration failed.";
        endif; 
        mysqli_close($connection);
    endif;

?>