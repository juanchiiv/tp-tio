<?php
 require_once "matematica.php";

 /**
 * Por el arreglo $_GET, llegan estos valores:
 * Array ( [operadorX] => 5 [operadorY] => 9 [operacion] => 1 ) 
 */
 $operacion = $_GET['operacion'];
 $x = $_GET['operadorX'];
 $y = $_GET['operadorY'];

 switch ($operacion) {
     case 1:
         $resultado = sumar($x, $y);
         break;
     case 2:
         $resultado = restar($x, $y);
         break;
     case 3:
         if ($y != 0) {
             $resultado = dividir($x, $y);
         } else {
             echo "<p>No se puede dividir por cero</p>";    
         }
         break;
     case 4:
         $resultado = multiplicar($x, $y);
         break;
     default:
         echo "<p>No se seleccionó operación</p>";
         break;
 }
