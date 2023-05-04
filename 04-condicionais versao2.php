<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        .normal{
            background-color: lightcoral;
            color: red;
        }
        .repor{
            background-color: lightgreen;
            color: green;
        }
        .urgente{
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h1>Condicionais</h1>
    <hr>

    <h2>Simples</h2>
    <?php
    $numero = 10;
    if($numero >=5 ){
    ?>    
        <p> <?=$numero?> é maior/igual a 5 </p>
    
    <?php 
    }   
    ?>

    <h2>Composta</h2>
    <?php
    $produto = "TV";
    $qtdEmEstoque = 10; // o que temos no momento
    $qtdCritica = 5; // mínimo necessário
    ?>

    <h3>Produto: <?=$produto?></h3>
    <h4>Estoque: <?=$qtdCritica?> </h4>

    <?php
    if($qtdEmEstoque < $qtdCritica){
    ?>    
        <p class="repor"> É necessário comprar/repor!</p>
    
    <?php
    if($qtdEmEstoque == 0){
    ?>    
        <p> <span class="urgente">URGENTE!</span> </p>
    <?php    
    }
    }else {
    ?>    
        <p class="normal"> Estoque normal.</p>
    <?php
    }
    ?>

     <h2>Encadeada</h2>
     <?php
    //  if($produto == "Iphone"){
    //     $garantia = 3;
    //  }elseif($produto == "Geladeira"){
    //     $garantia = 5;
    //  }elseif($produto == "TV"){
    //     $garantia = 2;
    //  }else{
    //     $garantia = 1;
    //  }

    switch($produto){
        case "Ultrabook" : $garantia = 3; break;
        case "Geladeira" : $garantia = 5; break;
        case "TV" : $garantia = 2; break;
        default : $garantia = 1; break;

    }
    ?>
    <p> O <?=$produto?> tem garantia de <?=$garantia?> ano(s)</p>


</body>
</html>