<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular sueldo</title>
</head>
<body>

    <h1>Calcular sueldo</h1>

    <form action="calcular.php" method="post">

        <label for="sueldo">Sueldo:</label>
        <input type="number" name="sueldo" id="sueldo" min="1001" required>

        <br><br>

        <label for="puesto">Puesto:</label>
        <select name="puesto" id="puesto" required>
            <option value="base">Base</option>
            <option value="directivo">Directivo</option>
            <option value="alto_cargo">Alto cargo</option>
        </select>

        <br><br>

        <input type="submit" value="Calcular">

    </form>

</body>
</html>