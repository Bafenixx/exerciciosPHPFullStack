<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Verificando senha</h1>
    <form method="POST">
        <label>Digite a senha: </label>
        <input type="number" name="senha" id="senha"/><br>
        <button type="submit">Enviar
            <?php 
                $senha = $_POST['senha'];
                $resultado = validarSenha($senha);
            ?>
        </button>
        <h1>
            <?php echo $resultado; ?>
        </h1>
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>