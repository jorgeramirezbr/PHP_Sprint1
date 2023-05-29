<?php

function verificacion($nota) {
    if ($nota >= 60) {
      return "Primera División";
    } elseif ($nota >= 45 && $nota <= 59) {
      return "Segunda División";
    } elseif ($nota >= 33 && $nota <= 44) {
      return "Tercera División";
    } else {
      return "Reprobado";
    }
  }
  
  /* Prueba de funcion
  
  $grado = verificacion(15);
  echo "Grado: $grado";

  */
?>