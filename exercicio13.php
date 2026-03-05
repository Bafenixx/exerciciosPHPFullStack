<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Maior entre dois números: </h1>
    <form method="POST">
        <label>Digite o primeiro número: </label>
        <input type="number" name="num1" id="num1"/><br>
        <label>Digite o segundo número: </label>
        <input type="number" name="num2" id="num2"/><br><br>
        <button type="submit">Verificar
            <?php 
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $maior = maior($num1,$num2);
            ?>
        </button>
        <h1>
            <?php echo $maior; ?>
        </h1>
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>