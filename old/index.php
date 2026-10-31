
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
        $color = $_GET['color'] ?? 'green';
        $nombre = $_POST['nombre'] ?? 'Invitado'; // Valor por defecto si no se proporciona nombre
    ?>

    <h1 style="color: <?php echo $color; ?>;">
        <?php 
            $usuario = $nombre;
            echo "Bienvenido a la web, " . $nombre; 
        ?>
    </h1>

    <div></div>

    <div class="buttons">
  <button class="button is-info">Info</button>
  <button class="button is-success">Success</button>
  <button class="button is-warning">Warning</button>
  <button class="button is-danger">Danger</button>
</div>

<form name="myform" method="POST" action="index.php">
    Escribe tu nombre
    <input class="input is-link"type="text" placeholder="Juanito"
    />
    <input type="submit" class=""sub>
</body>
</html>

