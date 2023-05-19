<?php

class Login extends Controller {

    public function index () {
        echo "login";
        $auth = $this->model('Auth');
        $this->view('home/index', [ 'login' => [$auth, 'login']]);
    }

    
}