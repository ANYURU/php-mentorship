<?php

namespace app\models;

use app\core\Model;

class RegisterModel extends Model
{
    public string $username;
    public string $email;
    public string $password;
    public string $passwordConfirm;

    public function register()
    {
        echo "Creating new user";
    }



}