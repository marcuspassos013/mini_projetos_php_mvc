<!DOCTYPE html>
<html lang"br">

<head>
	<title>Curso de CSS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE?>assets/css/style.css">
</head>

<body>
	<div class="texto">
		<form action="<?php echo URL_BASE . "home/imprimir" ?>" method="POST">
			<label><small>Nome 01:</small><input type="text" name="nome1" value="<?php echo $nome1 ?? null; ?>"></label>
			<label><small>Nome 02:</small><input type="text" name="nome2" value="<?php echo $nome2 ?? null; ?>"></label>

			<input type="submit" value="Imprimir" class="btn">
			<span><?php echo $imprimir ?? null; ?></span>
		</form>
	</div>


</body>

</html>