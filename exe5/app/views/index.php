<?php
/*Escreva um programa para ler uma temperatura em graus Fahrenheit,
calcular e escrever o valor correspondente em graus Celsius.
*/
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Dominando CSS</title>
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">
</head>

<body>
    <div class="termometro">
        <form action="<?php echo URL_BASE . "home/converter"?>" method="post">
            <span><small>Valor em Fahrenheit: <?php echo $fah ?> <b>°F</b></small></span>
            <label><input type="text" name="fah"  value="<?php echo $fah ?? null; ?>"placeholder="00"></label>
            <input type="submit" value="calcular" class="btn">
            <span><small>Valor em Celsius: <?php echo $celsius ?? null; ?> <b>°C</b></small></span>
        </form>
    </div>

</body>

</html>