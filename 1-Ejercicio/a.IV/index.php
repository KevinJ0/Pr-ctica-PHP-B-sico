<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<?php
$listDatos = array();
$nombre =  $email = $tel = "";
$nombreErr = $emailErr = $telErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nombre"])) {
        if (empty(trim($_POST["nombre"]))) {
            $nombreErr = "El nombre es requerido";
        } else {
            $nombre = test_input($_POST["nombre"]);
        }
    }

    if (isset($_POST["email"])) {
        if (!empty($_POST["email"])) {
            $email = test_input($_POST["email"]);
        }
    }

    if (isset($_POST["tel"])) {
        if (!empty($_POST["tel"])) {
            $tel = test_input($_POST["tel"]);
        }
    }

    if (!empty(trim($nombre))) {
        $listDatos = array("nombre" => $nombre, "email" => $email, "tel" => $tel);
    }
}

function getNombre($listDatos)
{
    return isset($listDatos["nombre"]) ? $listDatos["nombre"] : "";
}
function getEmail($listDatos)
{
    return isset($listDatos["email"]) ? $listDatos["email"] : "";
}
function getTel($listDatos)
{
    return isset($listDatos["tel"]) ? $listDatos["tel"] : "";
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<body>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" placeholder="Ingrese un nombre" required>
        <span class="error"><?php echo $nombreErr; ?></span>
        <br>
        <label for="email">Correo: </label>
        <input type="email" name="email" placeholder="Ingrese su correo (opcional)">
        <br>
        <label for="tel">Número de Teléfono: </label>
        <input type="tel" name="tel" placeholder="Ingrese su celular (opcional)">
        <br>
        <input type="submit" value="Insertar">
    </form>
    <br><br><br>
    <h1 class="showData">Datos del array

    </h1>
    <div>Nombre: <?php echo getNombre($listDatos); ?></div>
    <div>Correo: <?php echo getEmail($listDatos); ?></div>
    <div>Número de teléfono: <?php echo getTel($listDatos); ?></div>
</body>

</html>