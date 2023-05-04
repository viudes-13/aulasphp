<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercecio 03</title>
</head>
<body>
    <h1>Exercecio</h1>
    <hr>
    <?php
    $salario =2000;
    
    if($salario < 2500){
    $novoSalario = $salario * 1.15;
    }elseif($salario <= 3000){
    $novoSalario  = $salario *1.10;
    }else{
    $novoSalario = $salario * 1.05;
    }

    ?>
<p> Salario antigo do Thiago era de <?=$salario?><br> após o ajuste foi para <?=$novoSalario?> </p>

</body>
</html>