<?php

$inicial = [5, 4, 3, 2, 1];

//Uso de array_map para elevar al cubo cada elemento del array inicial
$exponenciado3 = array_map(fn($num) => $num ** 3, $inicial);

echo "<pre>";
print_r($exponenciado3);

?>