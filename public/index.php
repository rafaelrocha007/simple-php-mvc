<?php

/** 
 * Composer
 */
require '../vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

$router = new Core\Router();

//Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);

// echo '<pre> </pre>';
// die(var_dump($_SERVER));

$router->dispatch(substr($_SERVER['REQUEST_URI'], 1) ?? '');
