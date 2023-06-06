<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario-PHP</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['edad'] = $_POST['edad'];
    echo "Hola, " . $_SESSION['nombre'] . ". Tienes " . $_SESSION['edad'] . " años de edad.<br>";    
    ?>
</body>
</html>