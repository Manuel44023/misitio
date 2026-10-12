3<?php
$nombre = trim(filter_input(INPUT_POST, 'nombre') ?? '');
$edad = filter_input(INPUT_POST, 'edad', FILTER_VALIDATE_INT);
$lenguajes = $_POST['lenguajes'] ?? [];

if ($nombre === '' || $edad === false || $edad === null || $edad < 0 || !is_array($lenguajes)) {
	echo 'Revisa los datos del formulario.';
	exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultado</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
</head>
<body>
	<main class="section">
		<div class="container" style="max-width: 640px;">
			<div class="box">
				<p class="title is-5">
					HOLA, <?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?>, VEO QUE TIENES <?= $edad ?> AÑOS
					<?php if (count($lenguajes) > 0): ?>
						Y QUE TIENES CONOCIMIENTOS EN:
					<?php else: ?>
						Y QUE NO CONOCES NINGÚN LENGUAJE, UNA PENA.
					<?php endif; ?>
				</p>

				<?php if (count($lenguajes) > 0): ?>
					<ul>
						<?php foreach ($lenguajes as $lenguaje): ?>
							<li><?= htmlspecialchars($lenguaje, ENT_QUOTES, 'UTF-8') ?></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</main>
</body>
</html>