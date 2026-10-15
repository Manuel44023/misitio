<?php
$nombre = htmlspecialchars(trim($_POST['nombre'] ?? ''), ENT_QUOTES, 'UTF-8');
$edad = filter_var($_POST['edad'] ?? '', FILTER_VALIDATE_INT);
$rol = $_POST['rol'] ?? 'usuario';

$datosRol = match ($rol) {
	'admin' => ['bg-danger', 'Administrador', 'Acceso total al panel de administración.'],
	'editor' => ['bg-warning text-dark', 'Editor', 'Acceso a crear, editar y publicar contenido.'],
	'autor' => ['bg-info text-dark', 'Autor', 'Acceso único a redactar borradores propios.'],
	default => ['bg-secondary', 'Usuario invitado', 'Acceso de solo lectura (usuario invitado).'],
};
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perfil de usuario</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5" style="max-width: 550px">
	<?php if ($nombre === '' || $edad === false || $edad < 0): ?>
		<p class="alert alert-danger">Introduce un nombre y una edad válida.</p>
	<?php else: ?>
		<h1 class="h3 text-center mb-4">Perfil de Usuario</h1>
		<section class="card"><div class="card-body">
			<h2 class="h4"><?= $nombre ?></h2>
			<p><span class="badge <?= $datosRol[0] ?>"><?= $datosRol[1] ?></span></p>
			<p><strong>Edad:</strong> <?= $edad ?> años</p>
			<p><?= $datosRol[2] ?></p>
			<?php if ($edad >= 18): ?>
				<p class="alert alert-success mb-0">Usuario mayor de edad (Acceso habilitado).</p>
			<?php else: ?>
				<p class="alert alert-warning mb-0">Usuario menor de edad.</p>
			<?php endif; ?>
		</div></section>
	<?php endif; ?>
</body>
</html>