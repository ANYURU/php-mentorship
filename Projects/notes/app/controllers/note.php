<?php

class Note extends Controller {
    
    public function index() {
        echo "note";
        // $user = $this->model('User');
        // $user->id = $id;
        // $this->view('home/index', ['id' => $user->id]);
    }

    public function edit() {
        echo "note/edit";
    }
}