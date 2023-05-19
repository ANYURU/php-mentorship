<?php

class App {
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [ ];
    public $app_name = 'notes';
    public function __construct() {
       $url = $this->parseUrl();
    
       if( file_exists('../app/controllers/'. $url[0].'.php')) {
        $this->controller =  $url[0];
        unset($url[0]);
       }

       require_once '../app/controllers/'.$this->controller . '.php';
       $this->controller = new $this->controller; // This controller = new home

       if ( isset($url[1])) {
        if( method_exists($this->controller, $url[1])) { // register
            $this->method = $url[1];
            unset($url[1]);
        }
       }

       $this->params = $url ? array_values($url) : [];
       call_user_func_array([ $this->controller, $this->method ], $this->params);

    }
    // [home, index]
    public function parseUrl() {
        if ( isset($_GET['url'])) { // If the url is home/register
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)); 
        } else {
            return [];
        }
    }
}