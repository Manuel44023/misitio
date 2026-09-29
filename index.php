
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejemplo Servidor</title>
    <style>
        @import "https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css";
    </style>
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

