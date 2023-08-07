<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
    <style>
        h1 {
            text-align: center;
        }
        table {
            width: 50%;
            margin: auto;
            border: 1px solid #000;
        }
        td {
            border: 1px solid #000;
            padding: 5px;
        }
        tbody tr:nth-child(odd) {
            background-color: #EEE;
        }
        tbody tr:hover {
            background-color: #CCC;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Exercício Maluco</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Linguagem</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $linguagens = [
                    "HTML" => "Estruturação",
                    "CSS" => "Estilos",
                    "JS" => "Comportamentos",
                    "PHP" => "Back-End",
                    "SQL" => "Manipulação de dados",
                    "Java" => "Softwares"
                ];
                $i = 1;
                foreach ($linguagens as $linguagem => $descricao) {
                ?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$linguagem?></td>
                        <td><?=$descricao?></td>
                    </tr>
                <?php
                $i++;
                };
            ?>
        </tbody>
    </table>
</body>
</html>