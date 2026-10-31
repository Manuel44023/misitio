<?php
// Recogemos datos
$sueldo = $_POST["sueldo"];
$puesto = $_POST["puesto"];

// Calculamos porcentaje
if ($puesto == "base") {
    $porcentaje = 10; // Base
} elseif ($puesto == "directivo") {
    $porcentaje = 15; // Directivo
} elseif ($puesto == "alto_cargo") {
    $porcentaje = 20; // Alto cargo
} else {
    $porcentaje = 0; // Otro caso
}

// Calculamos complemento y total
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

    <!-- Mostramos los resultados al usuario -->
    <p>El sueldo base es de <?php echo $sueldo; ?>€</p>

    <p>El complemento es del <?php echo $porcentaje; ?>%</p>

    <p>El sueldo final es de <?php echo $sueldoFinal; ?>€</p>

</body>
</html>