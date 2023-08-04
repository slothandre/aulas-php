<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
    <style>
        .aprovado {
            color: #00F;
        }
        .reprovado {
            color: #F00;
        }
        li {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php
        function calculaMedia(float $nota1, $nota2):float {
            $media = ($nota1 + $nota2) / 2;
            return $media;
        }
        
        $media = calculaMedia(8, 9);

        function situacao(float $media):string {
            if ($media >= 7) {
                $resultado = "<span class='aprovado'>aprovado!</span>";
            } else {
                $resultado = "<span class='reprovado'>reprovado!</span>";
            };
            return $resultado;
        };

        $situacao = situacao($media);


    ?>

    <h1>Médias dos patetas</h1>
    <p>O aluno fulanito teve média <?=$media?>, então ele foi <?=$situacao?></p>

    <hr>

    <h2>Desafio dos Desafios mais Desafiadores</h2>
    <h3>Arrays e matrizes numéricos</h3>
    <ol>
        <?php
            $alunos = ["Motocó", "Tiulielson", "Kinder Bueno", "Pelipe", "Leandro do Arrocha"];
            $notas = [
                [8, 9],
                [7, 9],
                [1, 6],
                [6, 7],
                [7, 7]
            ];

            for ($i = 0; $i < 5; $i++) { 
                $nota1 = $notas[$i][0];
                $nota2 = $notas[$i][1];
            ?>
                <li>
                    Aluno: <b><?=$alunos[$i]?></b> <br> 
                    Média: <b><?=calculaMedia($nota1, $nota2)?></b> <br> 
                    Situação: <b><?=situacao(calculaMedia($nota1, $nota2))?></b>
                </li>
            <?php 
            } 
        ?>
    </ol>

    <h3>Array e matriz associativo</h3>
    <ol>
        <?php
            $alunos = [
                [
                    "nome" => "Tiulielson",
                    "nota1" => 7,
                    "nota2" => 9
                ],
                [
                    "nome" => "Kinder Bueno",
                    "nota1" => 1,
                    "nota2" => 6
                ],
                [
                    "nome" => "Pelipe",
                    "nota1" => 6,
                    "nota2" => 7
                ],
                [
                    "nome" => "Leandro do Arrocha",
                    "nota1" => 7,
                    "nota2" => 7
                ],
                [
                    "nome" => "Mocotó",
                    "nota1" => 8,
                    "nota2" => 9
                ]
            ];
            foreach ($alunos as $aluno) { ?>
                <li>
                    Aluno: <b><?=$aluno["nome"]?></b> <br> 
                    Média: <b><?=calculaMedia($aluno["nota1"], $aluno["nota2"])?></b> <br> 
                    Situação: <b><?=situacao(calculaMedia($aluno["nota1"], $aluno["nota2"]))?></b>
                </li>
            <?php
            }
        ?>
    </ol>
</body>
</html>