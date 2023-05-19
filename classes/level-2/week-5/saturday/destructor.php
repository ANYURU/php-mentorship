<?php 
    class MyTest {
        function __destruct() {
            echo "My Class Object has been removed.\n";
        }

        function __construct() {
            // This will be executed when the object is created.
            echo "My Class Object has been created.\n";
        }
    }

    new MyTest(); 
    // Createion of the object and constructor will be executed. 
?>