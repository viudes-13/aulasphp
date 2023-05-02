<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
</head>
<body>
    <h1> Usando variasveis e constantes </h1>
    <hr>
    <h2>Variaveis</h2>
    <?php
    // Variaveis  
    $curso = "Progamador Web";
    $ano = 2023;
    $preco = 1278.75;
    $area = "back-End";

    
// saidas de dados
echo "<h2> exemplos de saidas usando variaveis</h2>";
echo '<p> $curso</p>';   //trata como texto
echo "<p> $curso</p>";  //interpolação

/* Ao usar variaveis dentro de strings/texto, é necessaria as aspas duplas "" para que o recurso seja interpredado. */

// saida usando concatenação (ponto).
echo "<p><i>".$curso."</i></p>";

?>

<!-- Saida ABREVIADAS/SIMPLIFICADA
usando "shorthand tags" do PHP -->
<h2>Saida usando versao simplificada do PHP</h2>

<p>Estamos em <?=$ano?> estudando <?=?> </p>

<h2>constantes</h2>
<?php
// sintaxe tradicional 
define("AUTOR", "Thiago Viudes Carsado")
define("JUROS",10)

//sintaxe mais recente
constant EMPRESA = "ABC Tecnologia";

?>

<p>Autor do site: <?AUTOR?> </p>
<P>Taxa de juros: <?=JUROS?> % em <?=ano?> </P>
<p>Prestador de serviços. <?=EMPRESA?> </p>


    
                                    
</body>
</html>