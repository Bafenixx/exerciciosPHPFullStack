<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Mostrando os pares: </h1>
    <form method="POST">
        <label>Digite o primeiro número: </label>
        <input type="number" name="numero[]" id="primeiro"/><br>
        <label>Digite o segundo número: </label>
        <input type="number" name="numero[]" id="segundo"/><br>
        <label>Digite o terceiro número: </label>
        <input type="number" name="numero[]" id="terceiro"/><br>
        <label>Digite o quarto número: </label>
        <input type="number" name="numero[]" id="quarto"/><br>
        <label>Digite o quinto número: </label>
        <input type="number" name="numero[]" id="quinto"/><br>
        <label>Digite o sexto número: </label>
        <input type="number" name="numero[]" id="sexto"/><br>
        <label>Digite o sétimo número: </label>
        <input type="number" name="numero[]" id="setimo"/><br>
        <label>Digite o oitavo número: </label>
        <input type="number" name="numero[]" id="oitavo"/><br>
        <label>Digite o nono número: </label>
        <input type="number" name="numero[]" id="nono"/><br>
        <label>Digite o décimo número: </label>
        <input type="number" name="numero[]" id="decimo"/><br>
        <button type="submit">Enviar
            <?php 
                $numeros = $_POST['numero']; 
            ?>
        </button>
        <h1><?php pares($numeros); ?></h1>
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>