<?php /*
 * Escreva um programa para calcular e imprimir o número de lâmpada
 * necessárias para iluminar um determinado cômodo de uma residência
 * Dados de entrada: a potência da lâmpada utilizada(watts),
 * as dimensões(largura e comprimento em metros) do cômodo.
 * Considere que a potência necessária é de 18 watts por
 * metro quadrado.
 */ ?>
<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type = "text/css" href="<?php echo URL_BASE ?>assets/css/style.css">
    <title>Dominando CSS</title>
</head>

<body>
    <div class="caixa">
        <form action="<?php echo URL_BASE . "home/calcular" ?>" method="POST">
            <div class="col">
                <label><small>Potência:</small><input type="text" name="potencia" value="<?php echo $potencia ?? null ?>"></label>
                <label><small>Altura:</small><input type="text" name="altura" value="<?php echo $altura ?? null ?>"></label>
                <label><small>Comprimento:</small><input type="text" name="comprimento" value="<?php echo $comprimento ?? null ?>"></label>
            </div>
            <div class="col">
                <input type="submit" value="calcular" class="btn">
                <span>Número de lâmpadas <b><?php echo $totalLampadas ?? null; ?></b></span>
            </div>

        </form>
    </div>
</body>

</html>