<?php

class Session
{
    public static function start() {
        @session_start();
    }

    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public static function get($key) {
      return isset($_SESSION[$key]) ?  $_SESSION[$key] : false;
    }
    
    public static function stop() {
        session_unset();
        session_destroy();
    }
}