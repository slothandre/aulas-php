<?php
    // Recuperar/descobrir qual o nome da página aberta no momento
    $page = basename($_SERVER['PHP_SELF']);

    $titulo = match($pagina) {
        "index.php" => "Página inicial",
        "cursos.php" => "Cursos",
        "duvidas.php" => "Dúvidas",
        default => "Contato"
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?> - Site PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Site PHP</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="cursos.php">Cursos</a>
            <a href="duvidas.php">Dúvidas</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>
    <main>