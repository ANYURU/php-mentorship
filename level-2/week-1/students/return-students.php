<?php 
    // Read students from the file. 
    /**
     * 1. Open the file for reading. 
     * 2. Process the data from the file. 
     * 3. Close the file. 
     */

    $students = [];
    $student_handle = fopen("students.txt","r") or die("Can not open the file.");
    while( feof($student_handle) !== true):
        $student = fgets($student_handle);
        if (  $student !== "\n"):
            $students[] = $student;
        endif;
    endwhile; 

    fclose($student_handle)
    
?>