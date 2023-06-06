<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de sobreescritura de método mágico '__toString'</title>
</head>
<body>
    <?php
    include 'clases.php';

    $padre = new Padre($_POST['nombre1']);
    echo "<h3>Uso del '__toString' original, para la clase padre:</h3><br>";
    echo $padre;
    echo "<br>";
    $hija = new Hija($_POST['nombre2']);
    echo "<h3>Uso del '__toString' sobreescrito, para la clase hija:</h3><br>";
    echo $hija . "<br>";
    
    ?>
</body>
</html>