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
        <?php
            if(empty($_POST["name"]) || empty($_POST["price"])) { ?>
                <div class="card text-bg-danger">
                    <div class="card-header">
                        <h2 class="card-title">Falha grave!!</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">É obrigatorio preencher NOME e PREÇO!!!</p>
                    </div>
                </div>
            <?php
            } else {

            }
        ?>
    </main>
    <footer>

    </footer>
</body>
</html>