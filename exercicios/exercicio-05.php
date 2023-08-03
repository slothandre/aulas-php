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
        $nota1 = 8;
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
    ?>

    <h1>Médias dos patetas</h1>
    <p>O aluno fulanito teve média <?=calculaMedia($nota1, $nota2)?>, então ele foi <?=situacao(calculaMedia($nota1, $nota2))?></p>

</body>
</html>