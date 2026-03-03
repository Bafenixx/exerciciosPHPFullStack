<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Informe um número e informarei o dia da semana!</h1>
    <form method="POST">
        <label>Informe um número: </label>
        <input type="number" name="diaDaSemana" id="diaDaSemana"/><br>
        <button type="submit">Calcular
            <?php 
                $num = $_POST['diaDaSemana'];
                $resultado = diaDaSemana($num);
            ?>
        </button>
        <h1>
            <?php echo $resultado; ?>
        </h1>
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>