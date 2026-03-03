<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <label>Informe a sua idade: </label>
        <input type="number" name="idade" id="idade"/><br>
        <button type="submit">Calcular
            <?php 
                $idade = $_POST['idade'];
                $resultado = podeVotar($idade);
            ?>
        </button>
        <h1>
            <?php 
                echo $resultado
            ?>
        </h1>
        <button><a href="index.php">Voltar</a></button>

    </form>
</body>
</html>