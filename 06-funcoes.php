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

    <hr>

    <h2>Função com parâmetros (ou argumentos)</h2>
    <?php
    function soma($valor1, $valor2, $valor3){
        // VARIÁVEL DE ESCOPO LOCAL
        $total = $valor1 + $valor2 + $valor3;
        return $total;
    };
    ?>
    <!-- Chamando e exibindo diretamente o retorno -->
    <p>Resultado 1: <?=soma(10, 20, 5)?></p>
    <p>Resultado 2: <?=soma(23, 84, 1000.75)?></p>
    <?php
        // Chamando e guardando o retorno
        $resultado3 = soma(500, 480, 700);
    ?>
    <p>Resultado 3: <?=$resultado3?></p>
    <?php if ($resultado3 > 100) { ?>
        <p>Vinicius foi demitido!</p>
    <?php } ?>

    <!-- Usando uma função como parte de uma condição -->
    <?php if(soma(2, 3, 10) >= 10){ ?>
        <p>Leandro reprovado!!!</p>
    <?php } ?>

    <h3>Função com parâmetros opcionais</h3>
    <?php
        // $pessoa é um parâmetro opcional com um valor padrão
        function saudacao($mensagem, $pessoa = "Fulano(a)") {
            return "Olá, $mensagem $pessoa!";
        };
    ?>
    <p><?=saudacao("bom-dia", "Melissa")?></p>
    <p><?=saudacao("boa-noite", "Tanaka")?></p>
    <p><?=saudacao("boa-tarde")?></p>
</body>
</html>