<?php
// Cargar el autoload de Composer
require __DIR__ . '/../vendor/autoload.php';

// Iniciar la aplicación (esto depende la estructura y controlador principal)
use App\Controllers\HomeController;

// Crear una instancia del controller y llamaar al metodo adecuado.
$controller = new HomeController();
$controller->index();
