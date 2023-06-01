<?php
declare(strict_types = 1);
include 'triangulo.php';
include 'rectangulo.php';
include 'circulo.php';
include_once 'shape.php';

const PI = 3.14;

//Verificacion
$triangulo = new Triangulo(5, 3);
echo "Área del triángulo: " . $triangulo->area();
echo "<br>";
$rectangulo = new Rectangulo(8, 7);
echo "Área del rectángulo: " . $rectangulo->area();
echo "<br>";
$circulo = new Circulo(5);
echo "Área del circulo: " . $circulo->area();
echo "<br>";

?>