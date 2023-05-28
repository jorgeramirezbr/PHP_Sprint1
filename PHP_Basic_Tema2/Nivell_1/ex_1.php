<?php

$vInteger = 1000;
$vDouble = 10.10;
$vString = "Hola!";
$vBoolean = true;

echo "Integer: $vInteger <br>";
echo "Double: " . $vDouble . "<br>";
echo "String: " . $vString . "<br>";
echo "Variable booleana: " . $vBoolean . "<br>";

define('NOMBRE', 'jorge ramirez');

echo "Formato título: " . ucwords(NOMBRE);
?>