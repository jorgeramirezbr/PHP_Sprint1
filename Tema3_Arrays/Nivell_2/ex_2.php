<?php

$alumnos = [
    'Jorge' => [8, 7, 6, 8, 7],
    'Bryan' => [9, 8, 9, 7, 8],
    'Mark' => [6, 7, 8, 7, 9],
    'Juan' => [7, 8, 6, 9, 7]
];

echo "Notas por alumno:<br>";
foreach ($alumnos as $alumno => $notas) {
    echo "$alumno: ";
    foreach ($notas as $nota) {
        echo "$nota ";
    }
    echo "<br>";
}

function calculoMedias ($alumnos){
    
    $mediasAlumnos = [];
    
    echo "<br>";
    echo "Medias por alumno:<br>";
    foreach ($alumnos as $alumno => $notas){
        $mediaAlumno = array_sum($notas) / count($notas);
        $mediasAlumnos [] = $mediaAlumno;
        echo "$alumno: $mediaAlumno <br>";
    }

    $mediaClase = array_sum($mediasAlumnos) / count($mediasAlumnos);
    echo "<br>";
    echo "Media de la clase: $mediaClase <br>";
}

calculoMedias($alumnos);

?>