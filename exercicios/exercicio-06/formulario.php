<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1 class="display-1 text-center">Cadastro de Produtos</h1>
    </header>
    <main>
        <form action="processamento-form.php" method="post">
            <div class="form-floating">
                <input required class="form-control" type="text" name="name" id="name">
                <label class="form-label" for="name">Nome</label>
            </div>
            <div>
                <select class="form-select" name="fabricantes" id="fabricantes">
                    <option selected disabled>Fabricantes</option>
                    <?php
                        $fabricantes = ["Ink Wizards", "Vale a Penha", "PsiDevs", "SalvaPets"];
                        foreach($fabricantes as $fabricante) { ?>
                            <option value="<?=$fabricante?>"><?=$fabricante?></option>
                        <?php
                        }
                    ?>
                </select>
            </div>
            <div class="form-floating">
                <input required class="form-control" type="number" name="price" id="price" min="100" max="10000" step=".01">
                <label for="price">Preço</label>
            </div>
            <div>Disponibilidade
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sim-nao" id="sim" value="sim">
                    <label class="form-check-label" for="sim">Sim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sim-nao" id="nao" value="nao">
                    <label class="form-check-label" for="nao">Não</label>
                </div>
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="descricao" id="descricao" style="height: 150px;"></textarea>
                <label class="form-label" for="descricao">Descrição</label>
            </div>
            <button type="submit" value="enviar" class="btn btn-primary">Enviar</button>
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>