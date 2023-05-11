<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercecicio</title>
</head>
<body>
<h1>Exercecicio 04</h1>
<hr>
<form action="processa-exercicio.php" method="post">
    <p>
        <label for="produto">Produto:</label>
        <input required type="text" name="produto" id="produto">
    </p>
    
    <?php
    $fabricantes = ["Dell", "Asus","LG","Microsoft","Apple"];
    ?>
    

    <p>
        <label for="fabricante">Fabricante:</label>
        <select name="fabricante" id="fabricante">
            <option value=""></option>
            <?php foreach ($fabricantes as $fabricante) { ?>
                <option> <?=$fabricante?> </option>
                <?php } ?>
        </select>
    </p>

    <p>
    <label for="preco">Preço:</label>
    <input type="number" id="preco" name="preco" min="100" max="10000" step="0.01" required>
    </p>

    </p>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao" cols="30" rows="6"></textarea>
    </p>

    <button type="submit" name="enviar">Enviar dados</button>

    
</form>
    
</body>
</html>