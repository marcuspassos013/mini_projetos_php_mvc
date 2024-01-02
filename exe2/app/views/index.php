<!DOCTYPE html>
<html lang="br">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/css/style.css">
	<title>Curso de CSS</title>
</head>

<body>
	<div class="caixa">
		<form action="<?php echo URL_BASE . "home/media" ?>" method="POST">
			<label><small>Nota 01:</small><input type="text" name="nota1" placeholder="Insira a nota 01"></label>
			<label><small>Nota 02:</small><input type="text" name="nota2" placeholder="Insira a nota 02"></label>
			<label><small>Nota 03:</small><input type="text" name="nota3" placeholder="Insira a nota 03"></label>
			<span><?php echo $media ?? null; ?></span>
			<input type="submit" value="Calcular" class="btn">

		</form>
	</div>


</body>

</html>