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

    /**
     * Summary of rules
     * @return array
     */
    public function rules(): array
    {
        return [
            'username' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'passwordConfirm' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }



}