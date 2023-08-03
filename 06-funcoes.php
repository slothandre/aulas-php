<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>
    <h1>Criando e usando funções</h1>
    <hr>

    <h2>Função como procedimento ou sub-rotina</h2>

    <?php
        function dadosAutor() {
            echo "<div>";
            echo "<p>Fulanito</p>";
            echo "<p><a href=''>email@xpto.com</a></p>";
            echo "</div>";
        };
    ?>

    <section>
        <h3>Chamada da sub-rotina/procedimento</h3>
        <?=dadosAutor()?>
        <article>
            <h4>Outra chamada</h4>
            <?=dadosAutor()?>
        </article>
    </section>

    <hr>

    <h2>Função com retorno de dados</h2>
    <?php
    function dadosCurso(){
        // return "Técnico em Informática para Internet";
        return "Encher o saco no WhatsApp";
    };
    ?>
    <p>Estamos no curso de <?=dadosCurso()?></p>
    <p><?=dadosCurso()?> é ministrado no Senac Penha.</p>
</body>
</html>