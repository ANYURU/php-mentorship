<?php

class Home extends Controller {
    
    public function index($name = '', $otherName = '') {
        echo $name. ' ' .$otherName;
    }
}