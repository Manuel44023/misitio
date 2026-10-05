<?php
if (isset($_POST["numero"])) {
    $numero = $_POST["numero"];
} elseif (isset($_GET["sumar"])) {
    $numero = $_GET["numero"] + 1;
} else {
    $numero = null;
}
?>

<?php if ($numero === null): ?>

    <h2>Introduce un número</h2>

    <form method="POST">
        <input type="number" name="numero">
        <button type="submit">Enviar</button>
    </form>

<?php else: ?>

    <h2>Número actual: <?= $numero ?></h2>

    <a href="?sumar=1&numero=<?= $numero ?>">
        <button>Sumar 1</button>
    </a>

<?php endif; ?>