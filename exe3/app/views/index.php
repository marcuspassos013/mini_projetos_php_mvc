<!DOCTYPE html>
<html lang="br">

<head>
    <title>Dominando CSS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/estilo.css" />
</head>

<body>
    <div class="calendario">
        <h2>calendário</h2>
        <form action="<?php echo URL_BASE. "home/idade"?>" method="post">
            <label><small>Insira o Ano:</small><input type="text" name="ano" value="<?php echo $ano ?? null; ?>" placeholder="00"></label>
            <label><small>Insira o Mês:</small><input type="text" name="mes" value="<?php echo $mes ?? null; ?>" placeholder="00"></label>
            <label><small>Insira o Dia:</small><input type="text" name="dia" value="<?php echo $dia ?? null; ?>" placeholder="00"></label>
            <input type="submit" value="calcular"  name="" class="btn" >
            <span class="resultado"><small>Você viveu: <p><?php echo $totalDias ?? null; ?></p></small></span>
        </form>
    </div>
</body>

</html>