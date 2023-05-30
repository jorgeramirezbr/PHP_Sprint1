<?php
declare(strict_types = 1);

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function esPrimo( int $num){
    if ($num <= 1){
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    echo "- $num<br>";
    return true;
}

/* //array_reduce basico, funcion en una sola linea (arrow function)
$sumaPrimos = array_reduce($numeros, fn($carry, $numero) => esPrimo($numero)? $carry + $numero : $carry);
*/

/* //array_reduce con callback, funcion completa
$sumaPrimos = array_reduce($numeros, function($carry,$numero){
    if (esPrimo($numero)) {
        $carry + $numero;
    }
});*/

//array_reduce con callback, funcion asignada como variable
$suma = function($carry, $numero) {
    if (esPrimo($numero)) {
        $carry + $numero;
    }
};
$sumaPrimos = array_reduce($numeros, $suma);

echo "La suma de numeros primos es: $sumaPrimos";

?>