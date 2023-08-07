<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <style>
        <?php $cor = "pink"; ?>

        body {
            background-color: <?=$cor?>
        }

        span {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Exercício 01</h1>
    <?php
        // usar CONST somente para valores que você irá declarar, e define para funções

        // Definindo fuso horário (timezone)
        date_default_timezone_set("America/Sao_Paulo");

        define("DATA_HOJE", date("d/m/Y"));
        define("HORA", date("H:i:s"));
        $nome = "André Marques";
        $curso = "Lógica";
        $carga_horaria = 96;
        $limite_faltas = $carga_horaria / 4 ;

        echo "<p>".HORA."</p>";
        echo "<p>Hoje, dia <span>".DATA_HOJE."</span> o aluno <span>$nome</span> veio para a aula do curso <span>$curso</span>.</p>";
    ?>
    <p>O curso tem duração de <span><?=$carga_horaria?></span> horas com o limite de faltas de <span><?=$limite_faltas?></span> horas.</p>

    <?php
        $teste = "PHP Intelephense";

        echo $teste;
    ?>
</body>
</html>