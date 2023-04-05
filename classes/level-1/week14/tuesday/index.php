<?php 
/**
 * High order functions
 * They are functions that take in functions as arguments
 */

 function get_name() {
    return "David";
 }

 /**
  * We have to use the keyword callable when we are specifying the function that is being set as a parameter
  */
 function greeting(callable $name) {
    $greet_name = $name();
    return "Hello, ".$greet_name;
 }

 greeting("get_name");

 function return_sum($numbers){

    $sum = 0;
    if( is_array($numbers)) {
        foreach($numbers as $number) {
            $sum += $number;
        }
        return $sum;
    }
    return false;
}

function get_sum( callable $sum_generator) {
    $numbers = [ 1, 10, 20, 30];
    $my_sum = $sum_generator($numbers);
    if( $my_sum !== false) {
        return $my_sum;
    }
    return false;
}

get_sum('return_sum')


?>