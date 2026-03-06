<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Média das idades: </h1>
    <form method="POST">
        <label>Digite uma idade: </label>
        <input type="number" name="idade1" id="idade"/><br>
        <label>Digite outra idade: </label>
        <input type="number" name="idade2" id="idade"/><br>
        <label>Digite outra idade: </label>
        <input type="number" name="idade3" id="idade"/><br>
        <label>Digite outra idade: </label>
        <input type="number" name="idade4" id="idade"/><br>
        <label>Digite outra idade: </label>
        <input type="number" name="idade5" id="idade"/><br>
        <button type="submit">Calcular
            <?php  
                $idade1 = $_POST['idade1'];
                $idade2 = $_POST['idade2'];
                $idade3 = $_POST['idade3'];
                $idade4 = $_POST['idade4'];
                $idade5 = $_POST['idade5'];
                $media = idades($idade1,$idade2,$idade3,$idade4,$idade5, $media);
            ?>
        </button>
        <h1><?php echo $media ?></h1>
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>