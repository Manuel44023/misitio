<?php 
$rol =$_POST['rol'] ?? 'usuario'; // Valor predeterminado si no se proporciona el rol
$mensaje= match ($rol) {
    'admin' => 'Acceso total al panel de administración.',
    'editor' => 'Acceso a crear, editar y publicar contenido.',
    default => 'Acceso de solo lectura (usuario invitado).',
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
 @import "https://cdn.jsdelvir.net/npm/bulma@1.0.4/css/bulma.min.css";
</style>
<link rel="stylesheet" href="https://cdn.js.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//unpkg.com/alpinejs" defer></script>
<script src="https://unpkg.com/axios/dist/axios.min.js">  </script>
<body>
    <?php if ($rol === 'admin'): ?>
    <div class="panel admin">Acceso total al panel de administración.</div>
<?php elseif ($rol === 'editor'): ?>
    <div class="panel editor">Acceso a crear, editar y publicar contenido.</div>
<?php else: ?>
    <div class="panel usuario">Acceso de solo lectura (usuario invitado).</div>
<?php endif; ?>

</body>
<section class="section"></section>
<div class="container">
<?php if ($rol === 'admin'): ?>
    <div class="panel admin">Acceso total al panel de administración.</div>
<?php elseif ($rol === 'editor'): ?>
    <div class="panel editor">Acceso a crear, editar y publicar contenido.</div>    
<?php else: ?>
    <div class="panel usuario">Acceso de solo lectura (usuario invitado).</div>
<?php endif; ?>
</div>
</html>