<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Classificando por idade: </h1>
    <form method="POST">
        <label>Digite sua idade: </label>
        <input type="number" name="idade" id="idade"/><br>
        <button type="submit">Verificar
            <?php 
                $idade = $_POST['idade'];
                $idade = classificandoIdade($idade);
            ?>
        </button>
        <h1><?php echo $idade; ?></h1>
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>