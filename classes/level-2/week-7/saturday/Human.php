<?php
abstract class Human {
    private $name;

    public function __construct( string $name ) {
        $this->name = $name;
    }

    abstract function say_greeting();

    public function say_name() {
        return $this->name;
    }

    abstract public function get_language($language);

    abstract public function get_age($age): int;
}