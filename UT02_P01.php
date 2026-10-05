```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador</title>
</head>
<body>

<?php

// Si se ha enviado un número mediante POST
if (isset($_POST["numero"])) {

    $numero = $_POST["numero"];

    echo "<h2>Número actual: $numero</h2>";

    // Enlace que utiliza GET para sumar 1
    echo "<a href='index.php?sumar=1&numero=$numero'>Sumar 1</a>";

} 
// Si se ha pulsado el enlace para sumar
elseif (isset($_GET["sumar"])) {

    $numero = $_GET["numero"];

    $numero = $numero + 1;

    echo "<h2>Número actual: $numero</h2>";

    // Volvemos a crear el enlace para poder sumar otra vez
    echo "<a href='index.php?sumar=1&numero=$numero'>Sumar 1</a>";

} 
// Si no se ha introducido ningún número
else {

    echo "<h2>Introduce un número</h2>";

    echo "
        <form method='POST' action='index.php'>
            <input type='number' name='numero'>
            <input type='submit' value='Enviar'>
        </form>
    ";
}

?>

</body>
</html>


