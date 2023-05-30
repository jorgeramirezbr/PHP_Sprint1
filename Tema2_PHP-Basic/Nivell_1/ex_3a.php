<?php
$X = 11;
$Y = 5;
$N = 4.5;
$M = 2.2;

echo "X: " . $X . "<br>";
echo "Y: " . $Y . "<br>";
echo "Suma: " . ($X + $Y) . "<br>";
echo "Resta: " . ($X - $Y) . "<br>";
echo "Producto: " . ($X * $Y) . "<br>";
echo "Módulo: " . ($X % $Y) . "<br>";
echo "<br>";
echo "N: " . $N . "<br>";
echo "M: " . $M . "<br>";
echo "Suma: " . ($N + $M) . "<br>";
echo "Resta: " . ($N - $M) . "<br>";
echo "Producto: " . ($N * $M) . "<br>";
echo "Módulo: " . fmod($N, $M) . "<br>";
echo "<br>";
echo "Doble de X: " . ($X * 2) . "<br>";
echo "Doble de Y: " . ($Y * 2) . "<br>";
echo "Doble de N: " . ($N * 2) . "<br>";
echo "Doble de M: " . ($M * 2) . "<br>";
echo "Suma de las variables: " . ($X + $Y + $N + $M) . "<br>";
echo "Producto de las variables: " . ($X * $Y * $N * $M) . "<br>";

?>
