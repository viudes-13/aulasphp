<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>
    <h1>Exercicio</h1>

    <?php
    const PESSOA = "Thiago";
    $curso = "Progamador";
    $cargaHoraria = 100;
    $faltas = $cargaHoraria * 0.25;

    ?>
   
   <p> Meu nome é <b><?=PESSOA?></b> faço curso de <b><?=$curso?></b> minha carga horaria no serviço é de <b><?=$cargaHoraria?></b> meu limite de falta são <b><?=$faltas?></b> </p>

  
</body>
</html>