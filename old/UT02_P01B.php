<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

<h2>Datos recibidos</h2>

<?php

// Recorremos datos
foreach ($_POST as $campo) {

    // Mostramos valor
    var_dump($campo);

}

?>

</body>
</html>