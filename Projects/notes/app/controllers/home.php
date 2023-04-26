<?php

class Home extends Controller {
    
    public function index($id = '') {
        $user = $this->model('User');
        $user->id = $id;
        $this->view('home/index', ['id' => $user->id]);
    }
}