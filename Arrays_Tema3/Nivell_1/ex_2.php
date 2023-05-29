<?php

$X = array(10, 20, 30, 40, 50, 60);

echo "Tamaño del array: " . count($X) . "<br>";

unset($X[1]);

$X = array_values($X);

echo "Tamaño del array, reducido y normalizado: " . count($X) . "<br>";

?>