<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 class="display-1 text-center">Visualização de Produtos</h1>
    </header>
    <main>
        <!-- A formatação está legal, mas faltou um pouco espaçamento nas extremidades. -->
        <section class="container">
            <?php
                if(empty($_POST["nome"]) || empty($_POST["preco"])) { ?>
                    <article class="text-center">
                        <h2 class="card-title alert alert-danger">Falha grave!!</h2>
                        <p class="card-text">É <b>obrigatorio</b> preencher <b>NOME</b> e <b>PREÇO</b>!!!</p>
                    </article>
                <?php
                } else {
                    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
                    $fabricantes = filter_input(INPUT_POST, "fabricantes", FILTER_SANITIZE_SPECIAL_CHARS);
                    
                    /* Aqui no $preco, o ideal é sanitizar em vez de validar.
                    Você deverá usar dois filtros: um para sanitização de float e outro para permitir dígitos/casas
                    decimais. */
                    $preco = filter_input(INPUT_POST, "preco", FILTER_VALIDATE_FLOAT);
                    
                    $disponibilidade = filter_input(INPUT_POST, "disponibilidade", FILTER_SANITIZE_SPECIAL_CHARS);
                    $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
                ?>
                    <ul class="list-group">
                        <li class="list-group-item"><b>Nome do produto</b>: <span class="badge bg-info text-dark"><?=$nome?></span></li>
                        <?php
                            if(!empty($fabricantes)) { ?>
                                <li class="list-group-item"><b>Fabricante</b>: <span class="badge bg-info text-dark"><?=$fabricantes?></span></li>
                        <?php } ?>
                        <li class="list-group-item"><b>Preço</b>: <span class="badge bg-info text-dark">R$<?=number_format($preco, 2, ",", ".")?></span></li>
                        <?php
                            if(!empty($disponibilidade)) { ?>
                                <li class="list-group-item"><b>Disponibilidade</b>: <span class="badge bg-info text-dark"><?=$disponibilidade?></span></li>
                        <?php } ?>
                        <?php
                            if(!empty($descricao)) { ?>
                                <li class="list-group-item"><b>Descrição</b>: <span class="badge bg-info text-dark"><?=$descricao?></span></li>
                        <?php } ?>
                    </ul>
                <?php
                }
            ?>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>