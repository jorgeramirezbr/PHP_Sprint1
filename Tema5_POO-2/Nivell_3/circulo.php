<?php
declare(strict_types = 1);
include_once 'area.php';

class Circulo implements Area{
    private $radio;
    
    function __construct($radio) {
        $this->radio = $radio;
    }
    function area(){
        return PI * ($this->radio * $this->radio);
    }
}

?>