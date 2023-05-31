<?php
declare(strict_types = 1);

class Pelicula {
    public $nombre;
    public $duracion;
    public $director;

    function __construct($nombre, $duracion, $director)
    {
        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->director = $director;
    }
}

class Cinema {
    public $nombre;
    public $poblacion;
    public $peliculas; //Permite agregar peliculas al array directamente (opcion 1)

    function __construct($nombre, $poblacion)
    {
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
        $this->peliculas = [];
    }

    // funcion de la clase que agrega peliculas desde el objeto (opcion 2)
    function nuevaPelicula($pelicula) {
        $this->peliculas[] = $pelicula;
    }

    function mostrarDatosPeliculas() {
        echo "PELICULAS - Cinema " . $this->nombre . ": <br>";
        foreach ($this->peliculas as $peli){
            echo "Nombre: " . $peli->nombre . "<br>";
            echo "Duración: " . $peli->duracion . "min. <br>";
            echo "Director: " . $peli->director . "<br>";
            echo "<br>";
        }
    }

    function mostrarPeliMayorDuracion() {
        $peliMayorDuracion = new Pelicula("", 0, "");   //Declaramos un objeto y variable "contenedor"
        $mayorDuracion = 0;
        foreach ($this->peliculas as $peli){
            if ($peli->duracion > $mayorDuracion) {
                $peliMayorDuracion = $peli;
                $mayorDuracion = $peli->duracion;
            }
        }
        echo "PELICULA con \"mayor duracion\" en Cinema ". $this->nombre . ":<br>";
        echo "Nombre: " . $peliMayorDuracion->nombre . "<br>";
        echo "Duración: " . $peliMayorDuracion->duracion . "min. <br>";
        echo "Director: " . $peliMayorDuracion->director . "<br>";
        echo "<br>";
    }
}

// funcion externa que agrega peliculas a un cine especifico, por argumentos (opcion 3)
function agregarPeliaCinema($cine, $pelicula){
    $cine->peliculas[] = $pelicula;
}

function buscarPeliNombreDirector ($cines, $nomAbuscar){
    $pelisPorNomDirector = [];  //Declaramos un array "contenedor" de los resultados
    foreach ($cines as $cine) {
        foreach ($cine->peliculas as $pelicula) {
            if (($pelicula->director == $nomAbuscar) && !in_array($pelicula, $pelisPorNomDirector)) { 
                $pelisPorNomDirector[] = $pelicula;
            }
        }
    }
    echo "PELICULAS del director ". $nomAbuscar . ":<br>";
    foreach ($pelisPorNomDirector as $peli) {
        echo "Nombre: " . $peli->nombre . "<br>";
        echo "Duración: " . $peli->duracion . "min. <br>";
        echo "<br>";
    }
}

// VERIFICACION:
// Declaramos cines, peliculas y un array de cines
$cine1 = new Cinema("Central", "Bcn");
$peli1 = new Pelicula("ET", 90, "Jorge");
$peli2 = new Pelicula("Wall-e", 100, "Alberto"); 
$peli3 = new Pelicula("It", 110, "Ramirez");

$cine2 = new Cinema("BMar", "Besos");
$peli4 = new Pelicula("Rambo", 150, "Jorge");
$peli5 = new Pelicula("Legend", 85, "Alberto"); 
$peli6 = new Pelicula("500", 130, "Ramirez");

$cines = [$cine1, $cine2];

// Agregamos peliculas a los cines, por 3 opciones
$cine1->peliculas[] = $peli1;
$cine1->nuevaPelicula($peli2);
agregarPeliaCinema($cine1, $peli3);

$cine2->peliculas[] = $peli1;  // repetimos pelicula en otro cine
$cine2->peliculas[] = $peli4;
$cine2->nuevaPelicula($peli5);
agregarPeliaCinema($cine2, $peli6);

// Ejecutamos y probamos los requerimientos del ejercicio, funciones
$cine1->mostrarDatosPeliculas();
$cine1->mostrarPeliMayorDuracion();
$cine2->mostrarDatosPeliculas();
$cine2->mostrarPeliMayorDuracion();
buscarPeliNombreDirector($cines, "Jorge");

?>