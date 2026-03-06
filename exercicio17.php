<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Verificando se é múltiplo de três e/ou cinco: </h1>
    <form method="POST">
        <label>Digite o número: </label>
        <input type="number" name="numero" id="numero"/><br>
        <button type="submit">Enviar
            <?php
                $numero = $_POST['numero'];
                $numero = multiplo($numero);
            ?>
        </button><br>
        <h1><?php echo $numero; ?></h1>
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>