
<?php
// Comprobar que se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ejercicio3.php");
    exit();
}

// 1. Recoger el array de apuestas
$partidos = $_POST['partido'] ?? [];

// 2. Array con los posibles resultados
$resultados = ['1', 'X', '2'];

// 3. Inicializar el contador de aciertos
$aciertosTotales = 0;

// Array donde guardaremos toda la información
$informeEscrutinio = [];

// 4. Recorrer los 10 partidos
for ($i = 1; $i <= 10; $i++) {

    // Comprobar si el usuario ha marcado el partido
    if (isset($partidos[$i]) && in_array($partidos[$i], $resultados)) {

        $tuResultado = $partidos[$i];

    } else {

        // Si no ha marcado nada
        $tuResultado = 'SIN MARCAR';
    }

    // Generar un resultado aleatorio: 0, 1 o 2
    $aleatorio = rand(0, 2);

    // Obtener el resultado correspondiente del array
    $haSalido = $resultados[$aleatorio];

    // Comparar la apuesta con el resultado
    if ($tuResultado == $haSalido) {

        $acertado = true;

        // Sumar un acierto
        $aciertosTotales++;

    } else {

        $acertado = false;
    }

    // Guardar los datos en un array multidimensional
    $informeEscrutinio[$i] = [
        'tu_resultado' => $tuResultado,
        'ha_salido' => $haSalido,
        'acertado' => $acertado
    ];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados Quiniela</title>
</head>
<body>

<h1>RESULTADOS DE LA QUINIELA</h1>

<table border="1">

    <tr>
        <th>PARTIDO</th>
        <th>TU RESULTADO</th>
        <th>HA SALIDO</th>
        <th>¿ACERTADO?</th>
    </tr>

    <?php
    // Recorrer el array multidimensional
    foreach ($informeEscrutinio as $numPartido => $datos):
    ?>

        <tr>

            <td>Partido <?= $numPartido ?></td>

            <td><?= $datos['tu_resultado'] ?></td>

            <td><?= $datos['ha_salido'] ?></td>

            <td>
                <?php
                if ($datos['acertado']) {
                    echo "SI";
                } else {
                    echo "NO";
                }
                ?>
            </td>

        </tr>

    <?php endforeach; ?>

</table>

<h2>HAS TENIDO <?= $aciertosTotales ?> ACIERTOS</h2>

<a href="ejercicio3.php">Volver a jugar</a>

</body>
</html>
