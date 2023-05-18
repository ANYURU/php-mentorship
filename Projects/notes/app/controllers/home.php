<?php

class Home extends Controller {
    
    public function index( $params ) {
        echo "home/index";
        var_dump($params);


        $user = $this->model('Users');
        // $user->id = $id;
        $this->view('home/index', ['id' => $user->id]);
    }

}