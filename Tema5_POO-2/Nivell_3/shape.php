<?php
declare(strict_types = 1);

abstract class Shape {     // abstracta, no se instancia
    private $ancho;  //si usa public o protected, las hijas acceden directamente con "$this->ancho"
    private $alto;  //si usa private, se deben declarar funciones GETers y SEters para acceder
    
    function __construct($ancho, $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    function getAncho() {        //funcion geter para acceder a la propiedad privada
        return $this->ancho;
    }

    function getAlto() {
        return $this->alto;
    }
}

?>