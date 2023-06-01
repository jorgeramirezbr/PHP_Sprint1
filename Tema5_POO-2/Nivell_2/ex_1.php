<?php
declare(strict_types = 1);

interface Area {     // para obligar a implementar una funcion area diferente a cada clase
    function area();
}

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

class Triangulo extends Shape implements Area{
    function area(){
        return ($this->getAncho() * $this->getAlto()) / 2;  // se accede a propiedades privadas mediante funciones, geter y seters   
    }      
}

class Rectangulo extends Shape implements Area{
    function area(){
        return $this->getAncho() * $this->getAlto();
    }
}

//Verificacion
$triangulo = new Triangulo(5, 3);
echo "Área del triángulo: " . $triangulo->area();
echo "<br>";
$rectangulo = new Rectangulo(8, 7);
echo "Área del rectángulo: " . $rectangulo->area();
echo "<br>";

?>