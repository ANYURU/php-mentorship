<?php
namespace app\core;
use app\core\Router;

/**
 * Class Application
 * 
 * @author David Derrick Anyuru
 * @package app\core
 * 
 */

class Application {

    public Router $router;
    public Request $request;
    public function __construct() {
        $this->request = new Request();
        $this->router = new Router($this->request);

    }

    public function run() {
        $this->router->resolve();
    }
}