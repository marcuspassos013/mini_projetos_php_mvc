<!DOCTYPE html>
<html lang="br">
<!--
 * Atividade 04
 * Dado as seguintes informações de um funcionário: Nome, idade, cargo e seu salário atual, considere:
 * a) O salário atual sofrerá um reajuste de 38%
 * b) O funcionário receberá também uma gratificação de 20% sobre o salário atual.
 * C O salário, após o reajuste e gratificação será descontado em 15%.
 * 
 * Escreva os seguintes resultados:
 * -Imprimir nome, idade e cargo.
 * -Imprimir o salário reajustado(salário bruto).
 * -Imprimir o salário líquido final.
 * -->

<head>
    <title> Dominando CSS </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">
</head>

<body>
    <div class="quadro">
        <form action="<?php echo URL_BASE . "home/calcular" ?>" method="post">
            <label>
                <span>Nome:</span><input type="text" name="nome" value="<?php echo $nome ?? null; ?>">
            </label>
            <label>
                <span>Cargo:</span><input type="text" name="cargo" value="<?php echo $cargo ?? null; ?>">
            </label>
            <label class="col">
                <span>Idade:</span> <input type="text" name="idade" value="<?php echo $idade ?? null; ?>">
            </label>
            <label class="col">
                <span>Salário:</span><input type="text" name="salario" value="<?php echo $salario ?? null; ?>">
            </label>

            <input type="submit" value="Calcular" class="btn">

            

            <div class="resultado">
                <h3>Resultado</h3>
                <p><b>Nome:</b><?php echo $nome ?? null; ?></p>
                <p><b>Idade:</b><?php echo $idade ?? null; ?></p>
                <p><b>Cargo:</b><?php echo $cargo ?? null; ?></p>
                <p><b>Salário Total:</b><?php echo $salarioBruto ?? null; ?></p>
                <p><b>Salário Líquido:</b><?php echo $salarioLiquido ?? null; ?></p>

            </div>

        </form>
    </div>

</body>

</html>