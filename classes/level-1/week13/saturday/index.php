<?php 
    /**
     * When defining a function in PHP there are two important things. 
     * function keyword and the function name. Additionaly you shouldn't forget the parenthesis, the curly brackets and the body of the function which is implemented in between the curly brackets.
     * 
     */

     // Optional parameters.
    function output_school_name() {
        echo 'Ablestate Creatives Limited';
    }

    output_school_name();

    // function output_best_student() {
    //     echo 'Anyuru';
    // }

    /*
    function output_best_student($best_student_name) {
        echo '<br/>', $best_student_name;
    }

    output_best_student('Anyuru'); // This causes a fatal error and it stops the execution of the code.
    echo "Text after a failing function.";
    */


    // Optional parameters

    function output_best_student($best_student_name = 'Alex') {
        return $best_student_name;
    } 

    $over_all_best_student = output_best_student();
    $second_best_student = output_best_student('David');

    echo "Who is the best student? {$over_all_best_student} <br/>";
    echo "Who is the best student? {$second_best_student} <br/>";

    /**
     * Essentially optional parameters should be defined after mandatory parameters.
     * Question: Given that you have to define optional and mandatory arguments in a function. In what order should they be defined? I'm asking based on the error we got earlier on.
     */
    function output_student_marks($student_name = '--', $subject = '--', $marks = 0) {
        // Requirements
        // Student name
        // Student grades
        // Subject / Course unit
        // Student ID
        // Course Code
        // Grade 
        // Marks
        // CGPA
        // Retake

        /**
         * In the UI we may want to display the information below
         * | student_name | Subject | Marks |
         * 
         */
        echo "</br> {$student_name} | {$subject} | {$marks} </br>";
    }

    output_student_marks();
    output_student_marks("Jennifer", "ICT", 90);
    output_student_marks("John", "ICT");
?>