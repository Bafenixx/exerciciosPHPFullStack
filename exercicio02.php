<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1> Exercicio 02 </h1><br>
    <h1> Verifique se um ano é bissexto! </h1><br>
    <form method="POST">
        <label>Informe o ano: </label>
        <input type="number" name="ano" id="ano"/><br>
        <button type="submit">Calcular
            <?php
                $ano = $_POST["ano"];
                $resultado = bissexto($ano);
            ?>
        </button><br>
        <h1>
            <?php 
                echo $resultado;
            ?>
        </h1><br>
        <button><a href="index.php">Voltar</a></button>
    </form>
</body>
</html>