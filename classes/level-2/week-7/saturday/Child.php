<?php 
class Child extends Human {
    public function say_greeting() {
        return "Hello World!";
    }

    protected function get_language($language) {
        return "PHP";
    }

    public function get_age($age): int {
        return $age;
    }



}