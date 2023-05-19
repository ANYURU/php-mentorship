<?php
/**
 * User: David Derrick Anyuru 
 */

require_once __DIR__ . '/../vendor/autoload.php';
use app\core\Application;

$app = new Application(dirname(__DIR__));



$app->router->get('/', 'home');

$app->router->get('/contact', 'contact');

$app->router->post('/contact', function(){
    return "Handling post data";
});

// echo 'Hello world';
$app->run();
