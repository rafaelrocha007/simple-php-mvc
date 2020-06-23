<?php
ini_set('display_errors', 1);
require '../core/Router.php';

$router = new Router();

//Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('/admin/{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');

$url = $_SERVER['QUERY_STRING'];

if ($router->match($url)) {
    echo '<pre> 123 ';
    var_dump($router->getParams());
} else {
    echo 'No route found for URL ' . $url;
}
