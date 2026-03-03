<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <?php include('funcoes.php'); ?> <!-- Chamar os métodos -->
    <form method="POST">
        <label>Primeiro número: </label>
        <input type="number" name="primeiroNumero" id="primeiroNumero"/><br><br>
        <label>Segundo Número: </label>
        <input type="number" name="segundoNumero" id="segundoNumero"/><br><br>
        <label>Número de busca: </label>
        <input type="number" name="terceiroNumero" id="terceiroNumero"/><br><br>
        <button type="submit">Calcular
            <?php 
                $primeiroNumero = $_POST['primeiroNumero'];
                $segundoNumero = $_POST['segundoNumero'];
                $numero = $_POST['terceiroNumero'];
                $resultado = verificarNumero($primeiroNumero,$segundoNumero,$numero);
            ?>
        </button>
        <h1>
            <?php 
                if($resultado == true){
                    echo "O $numero está no intervalo entre $primeiroNumero e $segundoNumero";
                }else{
                    echo "O $numero não está no intervalo entre $primeiroNumero e $segundoNumero";
                }
            ?>
        </h1>
        <button><a href="index.php">Voltar</a></button>
    </form>
</body>
</html>