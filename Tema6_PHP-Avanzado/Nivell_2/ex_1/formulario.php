<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos getFile() y getDir() - PHP</title>
</head>
<body>
<?php
        include 'getFile_getDir.php';   //incluir donde esta declarada la clase
        echo "Hola " . $_POST['nombre'] . ".<br>";
        if (!empty($_POST['edad'])) {            // edad opcional (sin required), con empty verificamos si no esta vacia para usarlo
            echo "Tienes " . $_POST['edad'] . " años de edad.<br>";
        }
        $test = new ConstMagic;     //objeto de prueba
        echo "La ruta completa del archivo es: " . $test->getFile() . ". <br>";     // te dirige a la ubicacion donde se declara la clase
        echo "La ruta completa del directorio del archivo actual es: " . $test->getDir() . ".<br>";        
    ?>
</body>
</html>