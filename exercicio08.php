<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Média de 5 notas: </h1>
    <form method="POST">
        <label>Primeira nota: </label>
        <input type="number" name="primeiro" id="primeiro"/><br>
        <label>Segunda nota: </label>
        <input type="number" name="segundo" id="segundo"/><br>
        <label>Terceira nota: </label>
        <input type="number" name="terceiro" id="terceiro"/><br>
        <label>Quarta nota: </label>
        <input type="number" name="quarto" id="quarto"/><br>
        <label>Quinta nota: </label>
        <input type="number" name="quinto" id="quinto"/><br>
        <button type="submit">Calcular
            <?php 
                $primeiro = $_POST['primeiro'];
                $segundo = $_POST['segundo'];
                $terceiro = $_POST['terceiro'];
                $quarto = $_POST['quarto'];
                $quinto = $_POST['quinto'];
                $resultado = media($primeiro,$segundo,$terceiro,$quarto,$quinto);
            ?>
        </button>
        <h1>
            <?php echo $resultado; ?>
        </h1>
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>