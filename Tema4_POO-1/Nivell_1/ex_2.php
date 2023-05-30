<?php
declare(strict_types = 1);

class Shape {
    protected $ancho;
    protected $alto;

    function __construct($ancho, $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    function area(){
        return $this->ancho * $this->alto;
    }
}

class Triangulo extends Shape {
    function area(){
        return ($this->ancho * $this->alto) / 2;      
    }      
}

class Rectangulo extends Shape {
    //funcion area se hereda de Shape
}

//Verificacion
$triangulo = new Triangulo(5, 3);
echo "Área del triángulo: " . $triangulo->area();
echo "<br>";
$rectangulo = new Rectangulo(8, 7);
echo "Área del rectángulo: " . $rectangulo->area();
?>