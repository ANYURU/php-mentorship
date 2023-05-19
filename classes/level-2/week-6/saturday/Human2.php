<?php
    class Human2 {
        private $gender;
        protected $address;
        

        public function __construct($gender, $address) {
            $this->address = $address;
            $this->gender = $gender;
        }

        public function get_gender() {
            return $this->gender;
        }

        protected function say_address() {
            echo "I am from {$this->address}\n";
        }

        


    }


    class Programmer extends Human {
        private $language;
        
        public function __construct( $gender, $address, $language) {
            parent::__construct($gender, $address);
            $this->language = $language;
        }

        public function say_address() {
            echo "I work in {$this->address}. \n";
        }

        public function get_langauge() {
            return $this->language;
        }

        public function code() {
            echo "I am a {$this->get_langauge()} programmer";
        }


    }