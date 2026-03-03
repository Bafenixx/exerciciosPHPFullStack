<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Maior Horário: </h1>
    <form method="POST">
        <label>Primeiro Horário: </label>
        <input type="number" name="primeiroHorario" id="primeiroHorario"/><br>
        <label>Segundo Horário: </label>
        <input type="number" name="segundoHorario" id="segundoHorario"/><br><br>
        <button type="submit">Enviar
            <?php 
                $primeiroHorario = $_POST['primeiroHorario'];
                $segundoHorario = $_POST['segundoHorario'];
                $resultado = maiorHorario($primeiroHorario,$segundoHorario);
            ?>
        </button>
        <h1>
            <?php echo $resultado; ?>
        </h1>
    </form>
</body>
</html>