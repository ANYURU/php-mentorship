<?php

    class Human {

        public $name;
        public $city;

        function __construct($name, $city) {
            $this->name = $name;
            $this->city = $city;
            // Things we can do in the constructor
            // Network sockets
            // Database connections
        }
    }
?>
