<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <h1>Exercício 03</h1>
    <?php
        $salario = 1000;

        if ($salario < 1500) {
            $aumento = 1.15;
        } elseif ($salario <= 3000) {
            $aumento = 1.10;
        } else {
            $aumento = 1.05;
        }

        $salarioReajuste = $salario * $aumento;

    ?>

    <p>O salário do funcionario era R$<?=number_format($salario,2,",",".");?>, após o reajuste ele está ganhando R$<?=number_format($salarioReajuste,2,",",".");?></p>
</body>
</html>