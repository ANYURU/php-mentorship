<?php
require_once "./session.php";
class Authentication

{
  private static $instance;

  private function __construct(){}
  private function __clone(){}

  public static function getInstance(){
    if (self::$instance == null)
    {
      self::$instance = new self();
    }
    return self::$instance;
  }

  public function isAuthorized(){
    session::start();
    if (session::get('user_data'))
      return true;
    return false;
  }


}