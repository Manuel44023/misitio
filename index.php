
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejemplo Servidor</title>
    <style>
        @import "https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css";
    </style>
    <link rel="stylesheet" href="https://cdn.jscloudflare.com.ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//unpkg.com/alpinejs" defer> </script>
</head>
<body>

    <?php
        $color = $_GET['color'] ?? 'black'; // Valor por defecto si no se proporciona color
    ?>

    <h1 style="color: #33FFAA">
        <?php 
            $usuario = "Carlos";
            echo "Bienvenido a la web, " . $usuario; 
        ?>
    </h1>

</body>
</html>

