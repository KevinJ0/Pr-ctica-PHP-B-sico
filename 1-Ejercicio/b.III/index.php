<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $nombreFichero = array_reverse(explode("/", $_SERVER['SCRIPT_NAME']));
    echo "IP cliente: " . $_SERVER['REMOTE_ADDR'] . "<BR>";
    echo "IP servidor: " . $_SERVER['SERVER_ADDR'] . "<BR>";
    echo ("Nombre archivo actual: " . $nombreFichero[0]); 
    ?>
</body>

</html>