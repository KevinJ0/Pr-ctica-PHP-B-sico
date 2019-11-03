<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>Tasa de WON a DOLAR</thead>
        <tbody>
            <tr>
                <th>KRW</th>
                <th>USD</th>
            </tr>
            <tr>
                <td>₩ 50,000 </td>
                <td>US$ 42.92</td>
            </tr>
        </tbody>

    </table>

    <?php

    $monto = 0;
    $tasaWon = 1164.66;

    if (isset($_GET["monto"])) {
        $monto = $_GET["monto"];
    }

    function convertir($tasa, $monto = 0)
    {
        echo "₩" . (float)  $tasa * (int) $monto;
    }
    ?>

    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="get">
        <input name="monto" type="number" value="<?php echo $monto; ?>">
        <input type="submit" value="Convertir">
    </form>
    <p>Resultado: <?php convertir($tasaWon, $monto); ?></p>
</body>

</html>