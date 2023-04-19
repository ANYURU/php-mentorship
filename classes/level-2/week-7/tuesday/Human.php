<?php
class Human {
    const BLOOD_COLOR = 'red';
    const HAVE_BONES = true;
    const HEAD_HEAD = true;

    public function get_blood() {
        return self::BLOOD_COLOR;  //Access the constant within the class
    }
}

$human = new Human();
echo $human->get_blood();
echo "\n";
echo Human::HAVE_BONES;