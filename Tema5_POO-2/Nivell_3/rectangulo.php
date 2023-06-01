<?php
declare(strict_types = 1);
include_once 'shape.php';
include_once 'area.php';

class Rectangulo extends Shape implements Area{
    function area(){
        return $this->getAncho() * $this->getAlto();
    }
}

?>