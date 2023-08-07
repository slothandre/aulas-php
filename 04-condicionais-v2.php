<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        .comprar {
            color: #F00;
        }
        .urgente {
            color: #F00;
            font-weight: bold;
            background-color: #FF0;
            display: inline-block;
        }
        .normal {
            color: #0F0;
        }
    </style>
</head>
<body>
    <h1>(VERSÃO 2) Estruturas condicionais</h1>
    <hr>

    <h2>Simples</h2>
    <?php
        $numero = 5;

        if ($numero > 1) {
        ?>
            <p><?=$numero?> é maior que 1</p>
        <?php
        }

        // Sintaxe sem chaves
        if ($numero > 1) echo "<p>$numero é maior que 1</p>";
    ?>

    <h2>Composta</h2>
    <?php
        $produto = "Ultrabook Asus";
        $qtdEmEstoque = 10; // o que temos
        $qtdCritica = 15; // mínimo necessário

    ?>
        <h3><?=$produto?></h3>
        <h4>Quantidade em estoque: <?=$qtdEmEstoque?></h4>
    <?php
        if ($qtdEmEstoque < $qtdCritica) {
        ?>
            <p class="comprar">É necessário comprar!</p>
        <?php
            // Condicional ANINHADA
            if ($qtdEmEstoque == 0) {
            ?>
                <p class="urgente">URGENTE!</p>
            <?php
            }
        } else {
        ?>
            <p class="normal">Estoque normal</p>
        <?php
        };
    ?>

    <h2>Encadeada</h2>
    <?php
        /* Opções para o exemplo
        1 -> Lanche
        2 -> Pizza
        3 -> Paçoca
        qualquer outra -> Opção inválida */

        $opcaoEscolhida = 3; // comece com qualquer valor
    ?>
        <h3>Opção: <?=$opcaoEscolhida?></h3>
    <?php

        if ($opcaoEscolhida == 1) {
        ?>
            <p>Ok, vamos fazer o lanche!</p>
        <?php
        } elseif ($opcaoEscolhida == 2) {
        ?>
            <p>Beleza, pizza no forno...</p>
        <?php
        } elseif ($opcaoEscolhida == 3) {
        ?>
            <p>Professor ficou feliz!</p>
        <?php
        } else {
        ?>
            <p>Não entendi... vou chamar a Valeska</p>
        <?php
        }

        // Exemplo: == e ===

        /* Em resumo, ao comparar comdois sinais de igual a comparação será feita APENAS em relação aos VALORES.
        
        E ao comparar com três sinais de igual, a comparação será feita em relação ao VALOR E AO TIPO DE DADOS. Portanto, é mais restritivo.*/

        $a = 10;
        $b = 10;
        $resultado = $a == $b; // lógico/boolean
        var_dump($resultado);
        echo "<br>";
        var_dump($a);
        echo "<br>";
        var_dump($b);
    ?>
</body>
</html>