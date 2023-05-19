<?php 
    class Human {
        public $name;
        public $age;
        private $home_address;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function sayHello() {
            echo "My name is {$this->name} and I am {$this->age}  years old\n";
        }

        public function set_home_address() {
            $this->home_address = 'Busega';
        }

        public function get_home_address() {
            return $this->home_address;
        }



    }

    class Programmer extends Human {
        public $langauge;

        public function __construct( $name, $age, $language) {
            parent::__construct($name, $age);
            $this->$language = $language;
        }

        public function code() {
            echo "I am a {$this->language} developer";
        }
    }

    $human = new Human("David", 25);
    $human->sayHello();

    $programmer = new Programmer("David", 25, "JavaScipt");