<?php
declare(strict_types = 1);

class Employee {
    public $nombre = '';
    public $sueldo = '';
    
    function initialize(string $nombre, int $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    function print()
    {
        echo "$this->nombre<br>";
        if ($this->sueldo > 6000) {
            echo "Tiene que pagar impuestos";
        } else {
            echo "No tiene que pagar impuestos";
        }
        
    }
}

$employee = new Employee;
$employee->initialize('Jorge',6001);
$employee->print();

?>