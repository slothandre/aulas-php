<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
    <style>
        section {
            display: flex;
            justify-content: space-around;
        }
        article {
            padding: 15px;
            min-width: 140px;
            max-width: 500px;
            width: 40%;
            border-radius: 20px;
            box-shadow: 0px 0px 25px #DDD;
        }
        article h2, h1 {
            text-align: center;
        }
        span {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
    <?php
        $usuario1 = [
            "nomeUsuario" => "Chaves",
            "email" => "chavinho.barril@gmail.com",
            "senha" => "KikoChato124",
            "idade" => 8,
            "sexo" => "pobre",
            "cidade" => "Vila do Seu Barriga"
        ];
        $usuario2 = [
            "nomeUsuario" => "BobEsponja",
            "email" => "garry.molenga@gmail.com",
            "senha" => "LulaSoluço123Clarinete",
            "idade" => 32,
            "sexo" => "esponja",
            "cidade" => "Cabana do Biquini"
        ];
    ?>

    <h1>Dados de usuários</h1>
    <section>
        <article>
            <h2><?=$usuario1["nomeUsuario"]?></h2>
            <p>Email: <?=$usuario1["email"]?></p>
            <p>Senha: <span><?=$usuario1["senha"]?></span></p>
            <p>Idade: <?=$usuario1["idade"]?></p>
            <p>Sexo: <?=$usuario1["sexo"]?></p>
            <p>Cidade: <?=$usuario1["cidade"]?></p>
        </article>
        <article>
            <h2><?=$usuario2["nomeUsuario"]?></h2>
            <p>Email: <?=$usuario2["email"]?></p>
            <p>Senha: <span><?=$usuario2["senha"]?></span></p>
            <p>Idade: <?=$usuario2["idade"]?></p>
            <p>Sexo: <?=$usuario2["sexo"]?></p>
            <p>Cidade: <?=$usuario2["cidade"]?></p>
        </article>
    </section>
</body>
</html>