<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1>Exemplo usando POST</h1>
    <hr>
    <p>Receber e processar dados via <b>POST</b></p>

    <?php
        /* Se os campos nome e e-mail estão vazios */
        if(empty($_POST["nome"]) || empty($_POST["email"])) {
        ?>
            <p>Você deve preencher nome e e-mail</p>
            <p><a href='10-formulario.html'>Voltar</a></p>
        <?php
        } else {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $idade = $_POST["idade"];
            $mensagem = $_POST["mensagem"];

            /* Se houver interesses (ou seja, foi selecionado
            pelo menos 1), guarde na variável o $_POST["interesses"].
            Caso contrário, guarde na variável um array vazio. */

            // Solução com isset

            // $interesses = isset($_POST["interesses"]) ? $_POST["interesses"] : [];

            /* Solução com Operador de coalescência: ?? 
            (disponível a partir da versão 7 do PHP */
            $interesses = $_POST["interesses"] ?? [];
        ?>

            <h2>Dados:</h2>
            <ul>
                <li>Nome: <?=$nome?></li>
                <li>E-mail: <?=$email?></li>
                <li>Idade: <?=$idade?></li>
                <?php if(!empty($interesses)) { ?>
                    <li>Interesses: <?=implode(", ", $interesses)?></li>
                <?php } ?>
                <!-- Se a variável mensagem NÃO ESTIVER VAZIA,
                mostre o <li> com a mensagem -->
                <?php if(!empty($mensagem)) { ?>
                    <li>Mensagem: <?=$mensagem?></li>
                <?php } ?>
            </ul>
        <?php 
        } 
    ?>
</body>
</html>