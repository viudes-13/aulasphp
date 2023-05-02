<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays (vetores ou matrizes)</h1>
    <hr>
    <h2>Array com indice numerico</h2>
    <?php
    //
    $bandas = ["Rush", "Slayer","Iron maiden"];
    $cursos = array ("HTML5","PHP" ,"Desing" ,"JS");

    //Declarando arrays como constantes
    const UNIDADES_SENAC = ["Penha" ,"Itaquera"];
    define("UNIDADES_SESC", ["Belenzinho","Bertioga"]);
    ?>

    
    <h3>Saida de dados de arrays</h3>
    <ul>
        <li>Bnada que mais gosto: <?=$bandas[0]?></li>
        <li>Assunto estudando: <?=$cursos[1]?></li>
        <li>Estamos no Senac <?=UNIDADES_SENAC[0]?></li>
        <li>O Sesc <?=UNIDADES_SESC[1]?> é uma colinia de ferias.</li>
    </ul>

    <H2> Array Associativo</H2>
    <?php
    /* Chaves associativas */
    $livro = [
        "titulo" => "Senhor dos Anéis",
        "autor"  => "J.R.R Tolkien",
        "ano" => 1954
    ];
    ?>
    <p>Livro: <?=$livro["titulo"] ?></p>
    <p>Escrito por: <?=$livro ["autor"]?> em <?=$livro["ano"]?>.</p>
    
    <h2>Analisando a estrutura de arrays usando print_r() e var_dump()</h2>

    <?=print_r($bandas)?>
    <br> <br>
    <?=var_dump($bandas)?>

    <pre><?=print_r($bandas)?></pre>
    <pre><?=var_dump($bandas)?></pre>
    
</body>
</html>