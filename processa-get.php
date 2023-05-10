<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento GET</title>
</head>
<body>
    <h1> Processamento usando metodo GET</h1>
    <hr>

    <?php
//  ARRAY SUPERGLOBAL $_GET[]
// Capturando individualmete os dados dos campos do formulario

$nome = $_GET['nome'];
$email = $_GET['email'];
$assunto = $_GET['assunto'];
$mensagem = $_GET['mensagem'];

?>

<h2>Dados Recebidos </h2>
<ul>
    <li>Nome:<?=$nome?></li>
    <li>E-mail:<?= $email?></li>
    <li>Assunto:<?=$assunto?></li>
    <li>Mensagem:<?=$mensagem?></li>
</ul>
<!-- <pre> <?=var_dump($_GET)?> </pre> -->


</body>
</html>