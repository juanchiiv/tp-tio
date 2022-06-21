<?php
require_once "libs/matematica.php";
//require_once 'libs/calculadora.php';
require_once 'libs/mostrar_paginas.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}
$parametros = explode('/', $action);


switch ($parametros[0]) {
    case 'home':
        home();
        break;
    case 'acerca':
        acerca();
        break;
    case 'pi':
        mostrarPi();
        break;
    case 'suma': {
            $a = $parametros[1];
            $b = $parametros[2];
            $resultado = sumar($a, $b);
            echo ($resultado);
        }
        break;
    case 'resta': {
            $a = $parametros[1];
            $b = $parametros[2];
            $resultado = restar($a, $b);
            echo ($resultado);
        }
        break;
    case 'dividir': {
            $a = $parametros[1];
            $b = $parametros[2];
            if ($b != 0) {
                $resultado = dividir($a, $b);
                echo ($resultado);
            } else {
                echo "<p>No se puede dividir por cero</p>";
            }
            break;
        }
    case 'multiplicar': {
            $a = $parametros[1];
            $b = $parametros[2];
            $resultado = multiplicar($a, $b);
            echo ($resultado);
            break;
        }

    default:
        echo ('Ud. eligio ' . $action);
        break;
};
?>