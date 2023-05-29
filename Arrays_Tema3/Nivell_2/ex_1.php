<?php

$array1 = [3, 1.0, 2];
$array2 = [3.0, 2.0, 1];

$intersect = array_intersect($array1, $array2);

echo "<pre>Interseccion: <br>";
print_r($intersect);

$mezcla = array_merge($array1, $array2);
shuffle($mezcla);

echo "<br>";
echo "Mezcla: <br>";
print_r($mezcla);

?>