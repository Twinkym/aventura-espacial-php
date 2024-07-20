<?php
// Cargar el autoload de Composer
require __DIR__ . '/../vendor/autoload.php';

// Iniciar la aplicación (esto depende de tu estructura y controlador principal)
use App\Controllers\HomeController;

$controller = new HomeController();
$controller->index();
