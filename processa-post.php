<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1> Processamento usando metodo POST</h1>
    <hr>
    
    <!-- // Se o campo OU campo email estiveram vazios  -->
    <?php
    if( empty ($_POST["nome"]) || empty($_POST ["email"])) {
        ?>
        <p style="color: red;" > Você deve preencer nome e e-email!</p>
    
        <?php
        }else{

// //  ARRAY SUPERGLOBAL $_GET[]
// // Capturando individualmete os dados dos campos do formulario

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem']; 
?>


<h2>Dados Recebidos </h2>
<ul>
    <li>Nome:<?=$nome?></li>
    <li>E-mail:<?= $email?></li>

// <!-- Sobre o !
// Em programação o simbolo de exclamação ! significa 
// iversão de lógica ou sentido.

// exemplos:
// !true -> não verdadeiro
// !false -> não falso
// !empty -> não vazio
// -->

    <!-- Verificando se o campo assunto NÃO ESTÁ VAZIO -->
    <?php if(!empty($assunto)) { ?>
    <!-- Se não es´ta, então mostramos o assunto escolhido -->    
    <li>Assunto: <?=$assunto?></li>
    <?php } ?>

    <!-- Verificando se o campo assunto NÃO ESTÁ VAZIO -->
    <?php if(!empty($mensagem)) { ?>
    <!-- Se não es´ta, então mostramos o assunto escolhido -->    
    <li>Mensagem:<?=$mensagem?></li>
    
    <?php } ?>
</ul>

<?php
    } //final do if/else de nome e email
    
    ?>



</body>
</html>