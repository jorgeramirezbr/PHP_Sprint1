<?php

function isBitten() {
    $numRandom = rand(1, 100);
    //echo $numRandom . "<br>";  
    if ($numRandom <= 50) {
      return true;
    } else {
      return false;
    }
  }
  
  /* Prueba
  if (isBitten()) {
    echo "True";
  } else {
    echo "False";
  } 
  */

?>