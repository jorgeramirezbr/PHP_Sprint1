<?php


function Calculadora($numero1, $numero2, $operacion) {
    switch ($operacion) {
        case 'suma':
            $resultado = $numero1 + $numero2;
            break;
        case 'resta':
            $resultado = $numero1 - $numero2;
            break;
        case 'multiplicacion':
            $resultado = $numero1 * $numero2;
            break;
        case 'division':
            $resultado = $numero1 / $numero2;
            break;
        default:
            $resultado = "Operacion no valida";
            break;
    }

    return $resultado;
}

/* Prueba

$numero1 = 21;
$numero2 = 10;

$suma = Calculadora($numero1, $numero2, 'suma');
echo "Suma: $suma <br>";
$resta = Calculadora($numero1, $numero2, 'resta');
echo "Resta: $resta <br>";
$multiplicacion = Calculadora($numero1, $numero2, 'multiplicacion');
echo "Multiplicación: $multiplicacion <br>";
$division = Calculadora($numero1, $numero2, 'division');
echo "División: $division <br>";
*/

?>