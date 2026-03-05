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
        <input type="number" name="num1" id="num1"><br>
        <label>Segundo número: </label>
        <input type="number" name="num2" id="num2"><br>
        <label>Terceiro número: </label>
        <input type="number" name="num3" id="num3"><br>
        <label>Quarto número: </label>
        <input type="number" name="num4" id="num4"><br>
        <label>Quinto número: </label>
        <input type="number" name="num5" id="num5"><br>

        <button type="submit">Enviar
            <?php 
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
                $num4 = $_POST['num4'];
                $num5 = $_POST['num5'];
                $soma= soma($num1,$num2,$num3,$num4,$num5);
            ?> 
        </button>
    </form>
    <h1><?php echo $soma; ?></h1>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>