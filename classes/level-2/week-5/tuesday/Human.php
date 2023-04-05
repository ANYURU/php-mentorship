<?php 
/**
 * What shall be covered?
 * 1. What is OOP?
 * 2. Classes vs Objects
 * 3. Constructor vs Destructor
 * 
 */
/**
 * Syntax:  
 * class Class_Name {
 *  Properties
 *  Methods
 * }
*/

 
class Human {

    public $name;

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

// Using the class( template )

$fanny = new Human();
$fanny->set_name("Fanny Nyayic");
echo $fanny->name;
echo "\n";

$henry = new Human();
$henry->set_name("Henry Onyango");
echo $henry->name;
echo "\n";

$david = new Human();
$david->set_name("David Derrick Anyuru");
echo $david->get_name();




?>