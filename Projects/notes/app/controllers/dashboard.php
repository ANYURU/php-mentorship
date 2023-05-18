<?php

class Dashboard extends Controller {

    public function index() {
        echo "home/index";

        $users = $this->model('Users');
        $users = $users->getUsers();
        $this->view('home/index', $users);
        
        // $user = $this->model('User');
        // $user->id = $id;
        // $this->view('home/index', ['id' => $user->id]);
    }
}