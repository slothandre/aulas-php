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
    </style>
</head>
<body>
    <?php
        $nota1 = 6;
        $nota2 = 7;

        function calculaMedia(float $nota1, $nota2):float {
            $media = ($nota1 + $nota2) / 2;
            return $media;
        }
        
        function situacao(float $media):string {
            if ($media >= 7) {
                $resultado = "<span class='aprovado'>aprovado!</span>";
            } else {
                $resultado = "<span class='reprovado'>reprovado!</span>";
            };
            return $resultado;
        };

        $mediaFinal = calculaMedia($nota1, $nota2);


    ?>

    <h1>Médias dos patetas</h1>
    <p>O aluno fulanito teve média <?=calculaMedia($nota1, $nota2)?>, então ele foi <?=situacao($mediaFinal)?></p>

    <hr>

    <h2>Desafio dos Desafios mais Desafiadores</h2>
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
                <li><?=$alunos[$i]?>, <?=calculaMedia($nota1, $nota2)?>, <?=situacao(calculaMedia($nota1, $nota2))?></li>
            <?php
            }
        ?>
    </ol>
</body>
</html>