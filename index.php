
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejemplo Servidor</title>
</head>
<body>

    <?php
        $color = "red";
    ?>

    <h1 style="color: <?php echo $color; ?>;">
        <?php 
            $usuario = "Carlos";
            echo "Bienvenido a la web, " . $usuario; 
        ?>
    </h1>

</body>
</html>

