<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>

    <style>
        p {
            font-family: "Verdana";
        }
        .destaque {
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <h1 class="destaque">Trabalhando com PHP</h1>
    <hr>

    <?php
        // Geração de texto (string)
        echo "Hoje tem curintia!";

        echo "<p class='destaque'>Hoje tem curintia!</p>";
        echo "<p>Hoje tem <span class='destaque'>curintia!</span></p>";
        
        // Geração de texto estruturado (com tags, atributos)
        echo "<h2>Gerando HTML através do PHP</h2>";

        // CSS inline (atenção às formas de uso das aspas)
        echo "<p style=\"color: red\">O Vinicius está reprovado.</p>";
        echo "<p style='color: orange'>O Vinicius está reprovado.</p>";
        echo '<p style="color: pink">O Vinicius está reprovado.</p>';

        // Classes CSS
    ?>

    <script>
        let destaque = document.querySelector("p.destaque");
        console.log(destaque);
    </script>
</body>
</html>