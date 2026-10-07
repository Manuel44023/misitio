<?php

$sueldo = $_POST["sueldo"];
$puesto = $_POST["puesto"];

if ($puesto == "base") {
    $porcentaje = 10;
} elseif ($puesto == "directivo") {
    $porcentaje = 15;
} else {
    $porcentaje = 20;
}

$complemento = $sueldo * $porcentaje / 100;
$sueldoFinal = $sueldo + $complemento;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

    <p>El sueldo base es de <?php echo $sueldo; ?>€</p>

    <p>El complemento es del <?php echo $porcentaje; ?>%</p>

    <p>El sueldo final es de <?php echo $sueldoFinal; ?>€</p>

</body>
</html>