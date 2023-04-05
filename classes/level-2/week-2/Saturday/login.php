<?php 
    session_start();
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

    $connection = new mysqli($server_name, $username, $password, $database_name);
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
        $query = "SELECT * FROM members WHERE  username='$myusername' AND password='${password_hash}'";

        $results = mysqli_query($connection, $query);
        // We shall display information here

        $num_rows = mysqli_num_rows($results);

        // if( $num_rows > 0):
        //     // echo "{$num_rows} result found";
        //     echo "You've logged in successfully";
        //     echo "Your details are <br/>";

        if( $num_rows === 1):
            $_SESSION['username'] = $myusername;
            header("Location: dashboard.php")
?>
<p><a href="logout.php">logout</a></p>
<?php
            
            // while($row = mysqli_fetch_assoc($results)):
            //     echo "id: {$row['id']} date: {$row['date']} username: {$row['username']}";
            // endwhile;
        else:
            echo "Login failed.  Check your username and password";
        endif; 
        mysqli_close($connection);
    endif;

?>