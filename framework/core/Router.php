<?php

namespace app\core;

/**
 * Class Router
 * 
 * @author David Derrick Anyuru
 * @package app\core
 */
class Router
{
    public Request $request;
    protected array $routes = [];

    public function __construct(\app\core\Request $request)
    {
        $this->request = $request;
    }
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false):
            return 'Not found';
        endif;
        if (is_string($callback)):
            return $this->renderView($callback);
        endif;
        return call_user_func($callback);
    }

    public function renderView($view)
    {
        include_once __DIR__."./../views/{$view}.php";
    }
}