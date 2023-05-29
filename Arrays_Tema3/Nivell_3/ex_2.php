<?php

$strings = ["Hola", "Mundo", "IT", "Academy", "Activa", "Cibernarium"];

//Uso de array_filter para filtrar solo los string con un numero par de caracteres
$stringPar = array_filter($strings, fn($string) => strlen($string) % 2 == 0);

//Verificacion
echo "<pre>";
print_r($stringPar);

?>