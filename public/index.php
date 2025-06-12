<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use MVC\Router;

$router = new Router(); 

$router->testMessage();

// Opcional: Si quieres ejecutar la lógica normal del router después
// $router->comprobarRutas();

// Puedes añadir un mensaje adicional
echo "<br>Todo parece estar en orden con el autoloader.";