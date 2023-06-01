<?php
declare(strict_types = 1);
include_once 'shape.php';
include_once 'area.php';

class Triangulo extends Shape implements Area{
    function area(){
        return ($this->getAncho() * $this->getAlto()) / 2;  // se accede a propiedades privadas mediante funciones, geter y seters   
    }      
}

?>