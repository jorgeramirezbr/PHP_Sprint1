<?php

function caracterEnPalabra($palabras, $caracter) {
    foreach ($palabras as $palabra) {
        if (stripos($palabra, $caracter) === false) {
            return false; 
        }
    }
    return true;
}
  
  /*Prueba
$palabras = ["hola", "Php", "Html"];
$h = "h";
$l = "l";
  
echo caracterEnPalabra($palabras, $l);
echo "<br>";
echo caracterEnPalabra($palabras, $h); 
*/

?>