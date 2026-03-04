<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Verificando se é par ou ímpar: </h1>
    <form method="POST">
        <label>Digite um número: </label>
        <input type="number" name="numero" id="numero" /><br>
        <button type=submit>Verificar
            <?php 
               $numero = $_POST['numero'];
               $numero = parImpar($numero);
            ?>
        </button>
    </form>
    <h1><?php echo $numero; ?></h1>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>