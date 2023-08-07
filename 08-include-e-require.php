<?php
    /* Fazendo a inclusão de um arquivo de recursos */
    include "recursos.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modularização e Inclusão de Recursos</title>
</head>
<body>
    <h1>Modularização e Inclusão de Recursos</h1>
    <hr>

    <h2><?=ESCOLA?></h2>
    <p>Estamos fazendo o curso de <?=$curso?> </p>

    <!-- Monte uma lista não-ordenada contendo cada uma das tecnologias -->
    <ul>
        <?php
            $quantidade = count($tecnologias);

            for($i = 0; $i < $quantidade; $i++) { ?>
                <li><?=$tecnologias[$i]?></li>
            <?php
            }
        ?>
    </ul>

    <p>O aluno Fulano tem 20 anos e é <?=verificaIdade(20)?> de idade.</p>
</body>
</html>