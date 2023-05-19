<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;

/**
 * Summary of SiteController
 */
class SiteController extends Controller
{

    public function home()
    {
        $params = [
            'name' => 'David Derrick Anyuru'
        ];
        // return Application::$app->router->renderContent("home");
        return self::render('home', $params);
    }

    public function contact()
    {
        return self::render('contact');
    }

    public function handleContact()
    {
        $body = Application::$app->request->getBody();
        echo '<pre>';
        var_dump($body);
        echo '</pre>';
        exit;
        // return $body;
    }
}