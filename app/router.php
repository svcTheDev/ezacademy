<?php

namespace MVC; // ¡Importante! Este es el namespace que Composer buscará

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Router {
    public $rutasGET = [];
    public $rutasPOST = [];

    public function get($url, $fn) {
        $this->rutasGET[$url] = $fn;
    }

    public function checkRoutes() {
        // ... (el resto de tu lógica del router)
        echo "Router funcionando y comprobando rutas."; // Añade un mensaje de prueba
    }

    // Método de prueba temporal para verificar el autoload
    public function testMessage() {
        echo "¡La clase Router ha sido cargada correctamente por el autoloader!";
    }
}