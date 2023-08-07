<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops PHP</title>
</head>
<body>
    <h1>Estruturas de Controle e Repetição</h1>
    <hr>

    <h2>WHILE (enquanto)</h2>
    
<?php
    $i = 1;
    while ($i <=5) {
    ?>
        <p><?=$i?></p>
    <?php
        $i++; // $i = $1 + 1
    }
?>
    
    <h2>DO/WHILE (repita/até)</h2>
<?php
    $j = 1;
    do {
    ?>
        <div>
            <h3><?=$j?> Título...</h3>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    <?php
        $j++;
    } while ($j <= 10);
?>

    <h2>FOR (para)</h2>

<?php
// variável de controle; condição; atualização
for ($i = 1; $i <= 3; $i++) {
?>
    <p><code>i</code> vale: <b> <?=$i?> </b></p>
<?php
};
?>


<!-- Mini-exercícios
1) Crie um array com os nomes dos meses do ano
2) Usando um loop (qualquer um), acesse e mostre os nomes dos meses dentro de uma lista ordenada 
-->
    <ol>
        <?php
            $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
            $quantidade = count($meses);
            for ($i = 0; $i < $quantidade; $i++) {
            ?>
                <li><?=$meses[$i]?></li>
            <?php
            }
        ?>
    </ol>

<?php
    $alunos = ["Melissa", "Tanaka", "Zimbo", "Eduardo", "Kaue"];

    /* Função count() ou sizeof()
    Literalmente conta a quantidade de
    elementos dentro de um array, retornando
    um número inteiro. */

    /* Guardamos em "cache" (memória) a quantidade de elementos, evitando a contagem a cada iteração do loop e melhorando a performance */

    $quantidade = count($alunos);

    for ($i = 0; $i < $quantidade; $i++) {
    ?>
        <p>Nome: <b><?=$alunos[$i]?></b></p>
    <?php
    };
?>

    <hr>

    <h2>FOREACH (para cada)</h2>
    <p>Útil e (mais facil) para lidar com <code>arrays</code></p>

    <ol>
        <?php foreach ($meses as $mes) { ?>
            <li><?=$mes?></li>
        <?php } ?>
    </ol>

    <h3>Manipulando arrays associativos</h3>

    <?php
    // Array associativo
        $clubes = [
            "Corinthians" => "Timão",
            "Palmeiras" => "Porco",
            "São Paulo" => "Tricolor",
            "Santos" => "Peixe"
        ];

        foreach($clubes as $clube => $apelido){ 
        ?>
            <p>O <?=$clube?> é onhecido como <?=$apelido?></p>
        <?php 
        } 
    ?>

    <h2>Loop com Matriz</h2>
    <?php
        $planoDeEstudos = [
            ["HTML", "CSS", "JS"],
            ["React", "React Native"]
        ];       

        // Usando for aninhado
        for ($linha = 0; $linha < count($planoDeEstudos); $linha++) {
            for ($coluna = 0; $coluna < count($planoDeEstudos[$linha]); $coluna++) {
            ?>
                <p><b><?=$planoDeEstudos[$linha][$coluna]?></b></p>
            <?php
            };
        };
    ?>
        <hr>
    <?php
        // Usando foreach
        foreach ($planoDeEstudos as $linhas) {
            foreach ($linhas as $colunas) {
            ?>
                <p><i><?=$colunas?></i></p>
            <?php
            }
        }
    ?>

    <h3>Loop com matriz associativa</h3>
    <?php
        $clientes = [
            [
                "nome" => "Chaves",
                "idade" => 8
            ],
            [
                "nome" => "Chapolin",
                "idade" => 25
            ],
            [
                "nome" => "Chiquinha",
                "idade" => 10
            ]
        ];

        foreach ($clientes as $cliente){
        ?>
            <p>Nome: <?=$cliente["nome"]?></p>
            <p>Idade: <?=$cliente["idade"]?></p>
        <?php
        }



        /* Lembrete sobre sintaxe de 
        estruturas de controle (condicionais
        e loops)
        
        if(){           OU     if():
        } else {        OU     else:
        }               OU     endif;
        
        for(){       OU      for:
        }            OU      endfor;
        */
    ?>
</body>
</html>