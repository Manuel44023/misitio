
<?php
// Comprobar que los datos llegan mediante POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    // Si no llega por POST, volvemos al formulario
    header("Location: p02.php");
    exit();
}

// 1. Recoger el texto
$texto = $_POST['texto'] ?? '';

// 2. Recoger la opción del radio button
$buscar = $_POST['buscar_en'] ?? 'ambos';

// 3. Recoger el género
$genero = $_POST['genero'] ?? 'Todos';

// Array asociativo para traducir las opciones
$opciones = [
    'cancion' => 'Títulos de canción',
    'album' => 'Nombres de álbum',
    'ambos' => 'Ambos campos'
];

// Comprobar que la opción seleccionada existe
if (!isset($opciones[$buscar])) {
    $buscar = 'ambos';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
</head>
<body>

<h1>Resultados del formulario</h1>

<ul>

    <li>
        <!-- Mostrar el texto introducido -->
        Texto: <?= htmlspecialchars($texto) ?>
    </li>

    <li>
        <!-- Mostrar la etiqueta correspondiente -->
        Buscar en: <?= $opciones[$buscar] ?>
    </li>

    <li>
        <!-- Mostrar el género -->
        Género: <?= htmlspecialchars($genero) ?>
    </li>

</ul>

<!-- Volver al formulario -->
<a href="p02.php">Nueva búsqueda</a>

</body>
</html>
