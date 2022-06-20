<?php
require_once("matematica.php");
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}
$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $controlador->Home();
        break;
    case 'suma':
        $controlador->suma();
        break;
    case 'resta':
        $controlador->resta();
        break;
    case 'multiplicacion':
        $controlador->multiplicacion();
        break;
    case 'division':
        $controlador->division();
        break;
    default:
        echo ('404 Page not found');
        break;
};
