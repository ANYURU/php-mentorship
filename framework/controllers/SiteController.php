<?php
namespace app\controllers;
use app\core\Application;
use app\core\Controller;

/**
 * Summary of SiteController
 */
class SiteController extends Controller
{

    public static function home() {
        $params = [
            'name' => 'David Derrick Anyuru'
        ];
        // return Application::$app->router->renderContent("home");
        return self::render('home', $params);
    }

    public static function contact()
    {
        return self::render('contact');
    }

    public static function handleContact()
    {
        return 'Handling submitted data';
    }
}