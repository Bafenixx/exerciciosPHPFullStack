<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Ultrapassando o 100: </h1>
    <form method="POST">
        <label>Primeiro número: </label>
        <input type="number" name="numero" id="numero"><br>

        <button type="submit">Enviar
            <?php 
                $numero = $_POST['numero'];
                $maiorCem = ultrapasseCem($numero);
            ?> 
        </button>
    </form>
    <h1><?php echo $maiorCem; ?></h1>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>