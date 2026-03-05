<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Matriz 4x4: </h1>
    <?php 
        $matriz = matriz4x4($matriz);
    ?>
    <?php echo $matriz; ?>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>