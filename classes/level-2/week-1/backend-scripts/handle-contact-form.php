<?php 
    echo "I will handle the form";

    //Super global variables
    /**
     * $_GET or $_POST or $_REQUEST
     */
    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';

    echo $_REQUEST["fullname"]
?>