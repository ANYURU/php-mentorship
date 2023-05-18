<?php
/**
 * User: David Derrick Anyuru 
 */

require_once __DIR__ . '/../vendor/autoload.php';
use app\core\Application;

$app = new Application();



$app->router->get('/', function() {
    return 'Hello World';
});

$app->router->get('/contact', 'contact');

// echo 'Hello world';
$app->run();
