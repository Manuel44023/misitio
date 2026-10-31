
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>La Quiniela</title>
</head>
<body>

<h1>LA QUINIELA</h1>

<!-- Enviamos las apuestas al archivo de resultados -->
<form action="p03-res.php" method="POST">

    <table border="1">

        <tr>
            <th>PARTIDO</th>
            <th>1</th>
            <th>X</th>
            <th>2</th>
        </tr>

        <?php
        // Bucle FOR para generar los 10 partidos
        for ($i = 1; $i <= 10; $i++):
        ?>

            <tr>

                <td>Partido <?= $i ?></td>

                <!-- Cada partido tiene tres posibles resultados -->
                <td>
                    <input type="radio" name="partido[<?= $i ?>]" value="1">
                </td>

                <td>
                    <input type="radio" name="partido[<?= $i ?>]" value="X">
                </td>

                <td>
                    <input type="radio" name="partido[<?= $i ?>]" value="2">
                </td>

            </tr>

        <?php endfor; ?>

    </table>

    <br>

    <button type="submit">Enviar apuesta</button>

</form>

</body>
</html>
