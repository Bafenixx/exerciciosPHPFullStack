<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Mostrando apenas a diagonal principal: </h1>
    <form method="POST">
        <label>0 0: </label>
        <input type="number" name="matriz[0][0]" id="matrizes"/><br>
        <label>0 1: </label>
        <input type="number" name="matriz[0][1]" id="matrizes"/><br>
        <label>0 2: </label>
        <input type="number" name="matriz[0][2]" id="matrizes"/><br>
        <label>1 0: </label>
        <input type="number" name="matriz[1][0]" id="matrizes"/><br>
        <label>1 1: </label>
        <input type="number" name="matriz[1][1]" id="matrizes"/><br>
        <label>1 2: </label>
        <input type="number" name="matriz[1][2]" id="matrizes"/><br>
        <label>2 0: </label>
        <input type="number" name="matriz[2][0]" id="matrizes"/><br>
        <label>2 1: </label>
        <input type="number" name="matriz[2][1]" id="matrizes"/><br>
        <label>2 2: </label>
        <input type="number" name="matriz[2][2]" id="matrizes"/><br><br>
        <button type="submit">Enviar
            <?php 
                $principal = $_POST['matriz'];
            ?>
        </button><br><br>
        <?php 
            $principal = matriz3x3($principal); 
        ?><br>
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>