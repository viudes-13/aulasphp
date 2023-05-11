<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>

<body>
    <h1> Processamento</h1>
    <hr>

    <?php

    $produto = $_POST['produto'];
    $fabricante = $_POST['fabricante'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    ?>

    <h2>Dados Recebidos </h2>
    <ul>
        <li>Produto:<?= $produto ?></li>
        <li>Fabricante:<?= $fabricante ?></li>
        <li>Preco:<?= $preco ?></li>
        <li>Descricao:<?= $descricao ?></li>
    </ul>

</body>

</html>