<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Verificando se o triângulo é Equilátero, Isósceles ou Escaleno: </h1>
    <form method="POST">
        <label>Digite o primeiro lado: </label>
        <input type="number" name="primeiroLado" id="primeiroLado"/><br>
        <label>Digite o segundo lado: </label>
        <input type="number" name="segundoLado" id="segundoLado"/><br>
        <label>Digite o terceiro lado: </label>
        <input type="number" name="terceiroLado" id="terceiroLado"/><br>
        <button type="submit">Verificar
            <?php 
                $lado1 = $_POST['primeiroLado'];
                $lado2 = $_POST['segundoLado'];
                $lado3 = $_POST['terceiroLado'];
                $triangulo = triangulo($lado1, $lado2, $lado3);
            ?>
        </button>
        <h1><?php echo $triangulo; ?></h1>
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>