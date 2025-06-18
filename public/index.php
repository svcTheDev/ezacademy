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

// Incluye el archivo de configuración de la base de datos
require_once __DIR__ . '/../app/config/database.php';

// Intenta conectar
try {
    $pdo = connectDB();
    echo "¡Conexión a la base de datos exitosa!<br>";


} catch (PDOException $e) {
    // Esto solo se ejecutará si hay un problema en la función conectarDB
    // y ella no detuvo la ejecución antes.
    echo "Error general al probar la conexión o consultas: " . $e->getMessage();
}
