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
    public Response $response;
    protected array $routes = [];

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false):
            $this->response->setStatusCode(404);
            return $this->renderView('_404');
        endif;
        if (is_string($callback)):
            return $this->renderView($callback);
        endif;
        if (is_array($callback)):
            Application::$app->controller = new $callback[0]();
            $callback[0] = Application::$app->controller;
        endif;
        return call_user_func($callback, $this->request);
    }

    public function renderView($view, $params = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view, $params);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderContent($viewContent)
    {
        $layoutContent = $this->layoutContent();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layoutContent()
    {
        $layout = Application::$app->controller->layout;
        ob_start();
        include_once Application::$ROOT_DIR . "/views/layouts/{$layout}.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view, $params)
    {

        // echo '<pre>';
        // var_dump($params);
        // echo '</pre>';

        foreach ($params as $key => $value):
            /**
             * Dynamically assign values based on the keys of the params associative array
             */
            $$key = $value;
        endforeach;

        ob_start();
        include_once Application::$ROOT_DIR . "/views/{$view}.php";
        return ob_get_clean();

    }
}