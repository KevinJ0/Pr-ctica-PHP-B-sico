

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body> 

    <form action="<?php echo htmlspecialchars("muestra.php"); ?>" method="get">
        <input list="pages" name="page" placeholder="Ingrese su nombre aquí">
        <datalist id="pages">
            <option value="Youtube">
            <option value="Ebay">
            <option value="Patrones de Comportamiento">
        </datalist>
        <input type="submit">
    </form>


</body>

</html>