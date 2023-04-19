<?php

require_once '../Utils/Database.php';
require_once '../Auth/Auth.php';

class AuthController
{
    private $db;
    private $auth;

    public function __construct()
    {
        $this->db = new Database();
        $this->auth = new Auth();
    }

    public function login()
    {
        // handle login form submission
    }

    public function logout()
    {
        // handle logout request
    }
}
