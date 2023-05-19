<?php 
/**
 * Access Modifers
 * Properties and methods can have access modifers with control where they can be accessed
 * PHP supports three access modifiers:
 * - public - the property or method can be accessed from everywhere. This is by default
 * - protected - the property or method can be accessed within the class and the classes that inherit from that class.
 * - private -
 */

 class Employee {
    public $name;
    protected $phone; 
    private $salary;

    function __construct($name, $phone, $salary) {
        $this->name = $name;
        $this->phone = $phone;
        $this->salary = $salary;
    }

    public function get_name() {
        return $this->name;
    }

    protected function get_phone() {
        return $this->phone;
    }

    private function get_salary() {
        return $this->salary;
    }
 }

 $employee  = new Employee("Janet", "0772519722", "1.7M");

 echo  $employee->get_name();
 echo "\n";
 echo  $employee->get_phone();
 echo "\n";
 echo  $employee->get_salary();
 echo "\n";
?>