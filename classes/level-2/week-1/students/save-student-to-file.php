<?php
    // echo "I am alive. Thank God! </br>";
    // print_r($_POST)
    // echo "First name: {$_POST["first_name"]}";
    // echo " ";
    // echo "Last name: {$_POST["last_name"]}";

    /**
     * The process of adding data to the file. 
     * If the data is from the user, make sure to sanitize it.
     * 1. Open the file for writing 
     * 2. Write data to the file
     * 3. Close the file
     */
    $first_name = trim($_POST["first_name"]);
    $cleaned_first_name = preg_replace('/[^A-Za-z0-9-]/', '', $first_name);

    $last_name = trim($_POST["last_name"]);
    $cleaned_last_name = preg_replace('/[^A-Za-z0-9-]/', '', $last_name);
    // Question: Is memory managed for us when using php

    // Step 1: Open the file for writing 
    // $student_file_handle = fopen("students.txt", "a") or die("File can not b opened for writing!");
    // Open file in append mode. 
    $student_file_handle = fopen("students.txt", "a");
    
    // Step 2: Write data to the file
    $student = $cleaned_first_name." ".$cleaned_last_name."\n";
    fwrite($student_file_handle, $student) or die ("Can not write to the file.");
    
    // 3.Close the file. 
    fclose($student_file_handle);

    echo("Student added to the file. "); 
?>
<a href="index.php">Go back</a>