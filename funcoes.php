<?php

    function exercicio01($num1, $num2){
        return "A soma é: ".((int)$num1 + (int)$num2); //return -> retorna na tela
        //ou
        //return $"A soma é: {$num1 + $num2}";
    }

    function subtrair($num1, $num2){
        return "A subtração é: ".((int)$num1 - (int)$num2);
    }//fim do método

    function multiplicacao($num1, $num2){
        return "A multiplicação é: ".((int)$num1 * (int)$num2);
    }// fim da multiplicação

    function divisao($num1, $num2){
        if($num2 == 0){
            return "Impossível dividir por zero!";
        }else if($num1 < 0 || $num2 < 0){
            return "Impossível dividir por número negativo!";
        }else{
            return "A divisão é: ".((int)$num1 / (int)$num2);
        }
    }

    function potencia($num1,$num2){
        if($num2 < 0){
            return "Impossível calcular a potência!";
        }else{
            return "A potência é: ".pow((int)$num1,(int)$num2);//Math ajuda em operações... pow é a potênciação
        }
    }

    function raiz($num1){
        if($num1 < 0){
            return "Impossível calcular raiz de número negativo!";
        }else{
            return "A raiz é: ".sqrt((int)$num1);//sqrt é a raiz
        }
    }

    //1. Verifique se um ano é bissexto.

    function bissexto($num1){
        if($num1 % 4 == 0 && $num1 % 100 != 0){
            return "O ano é bissexto!";
        }else{
            return "O ano não é bissexto!";
        }
    }

    //2. Verificar se um número está entre 100 e 200
    function verificarNumero($inicio,$fim,$num){
        for($i=$inicio;$i <= $fim;$i++){
            if($i == (int)$num){
                return true;
            }
        }
        return false;
    }

    //4. Leia a idade e verifique se pode votar

    function podeVotar($idade){
        if($idade >= 16 && $idade < 18){
            return "Você pode votar (Voto Facultativo)";
        }else if($idade >= 18){
            return "Você TEM que votar!";
        }else{
            return "Você não pode votar";
        }
    }

    //5. Leia um número de 1 a 7 e mostre o dia da semana
    function diaDaSemana($num){
        switch($num){ //Switch é o 'escolha'
            case 1:
                return "Domingo";
                break;//Encerra o switch
            case 2:
                return "Segunda-feira";
                break;//Encerra o switch
            case 3:
                return "Terça-feira";
                break;//Encerra o switch
            case 4:
                return "Quarta-feira";
                break;//Encerra o switch
            case 5:
                return "Quinta-feira";
                break;//Encerra o switch
            case 6:
                return "Sexta-feira";
                break;//Encerra o switch
            case 7:
                return "Sábado";
                break;//Encerra o switch
            default: //Encerra
                return "O número informado é inaválido!";
                break;//Encerra o switch
        }
    }

    //6. Verifique se uma senha digitada é valida
    function validarSenha($senha){
        $senhaBD = 1234;
        if($senhaBD == $senha){
            return "Bem-Vindo(a)";
        }else{
            return "Senha Inválida!";
        }
    }

    //7. Leia dois horários e informe o mais tarde
    function maiorHorario($primeiroHorario,$segundoHorario){
        if($primeiroHorario > $segundoHorario){
            return "$primeiroHorario é maior que o $segundoHorario";
        }else{
            return "$segundoHorario é maior que o $primeiroHorario";
        }
    }

    //8. Leia 5 números e calcule a média
    function media($primeiro,$segundo,$terceiro,$quarto,$quinto){
        $media = ((float)$primeiro+(float)$segundo+(float)$terceiro+(float)$quarto+(float)$quinto)/5;
        return "A média é: $media";
    }

    //9. Leia números até que a soma ultrapasse 100
    function soma($num1,$num2,$num3,$num4,$num5){
       $soma = ($num1 + $num2 + $num3 + $num4 + $num5);
       if($soma >= 100){
        return "Ultrapassou o 100! Seu valor: $soma";
       }else{
        return "Não atingiu o 100! Seu valor: $soma";
       }
    }

    //10. Solicite senhas até que uma válida seja informada !!FINALIZAR
    function senhaValida($senha){
        $senhaCorreta = 1505;
        if($senha == $senhaCorreta){
            return "Acesso liberado!";
        }else{
            return "Erro. Tente novamente.";
        }
    }

    //11. Classifique uma pessoa com base na idade: criança, jovem, adulto, idoso
    function classificandoIdade($idade){
        if($idade < 12){
            return "Criança";
        }else if($idade >= 12 && $idade < 18){
            return "Jovem";
        }else if($idade >= 18 && $idade < 60){
            return "Adulto(a)";
        }else{
            return "Idoso(a)";
        }
    }

    //12. Verifique se um número é par ou ímpar
    function parImpar($numero){
        if($numero % 2 == 0){
            return "$numero é par";
        }else{
            return "$numero é ímpar";
        }
    }
    //--------------------------- Exercícios de revisão -----------------------------

    //13. Leia dois números e exiba o maior deles
    function maior($num1,$num2){
        if($num1 > $num2){
            return "$num1 é maior que $num2";
        }else{
            return "$num2 é maior que $num1";
        }
    }

    //14. Crie uma matriz identidade 4x4
    function matriz4x4($matriz){
        for($linha=0;$linha<=3;$linha++){
            for($coluna=0;$coluna<=3;$coluna++){
                if($linha == $coluna){
                    $matriz[$linha][$coluna] = 1;
                }else{
                    $matriz[$linha][$coluna] = 0;
                }
            }
        }

        for($linha=0;$linha<=3;$linha++){
            for($coluna=0;$coluna<=3;$coluna++){
                echo $matriz[$linha][$coluna]." ";
            }
            echo "<br>";
        }
    }

    //15. Imprima os números de 1 a 100 com para
    function numerosUmACem($numeros){
        for($i=1;$i<=100;$i++){
            echo $i." "." ";
        }
    }

    //16. Leia 10 números inteiros e armazene em um vetor, Mostre os pares
    function pares($numeros){
        foreach($numeros as $valor){
            if($valor % 2 == 0){
                echo $valor."<br>";
            }
        }
    }

    //17. Verifique se um número é múltiplo de 3 e de 5 ao mesmo tempo
    function multiplo($numero){
        if($numero % 3 == 0 && $numero % 5 == 0){
            return "$numero é múltiplo de 5 e de 3";
        }else if($numero % 3 == 0){
            return "$numero é múltiplo apenas de 3";
        }else if($numero % 5 == 0){
            return "$numero é múltiplo apenas de 5";
        }else{
            return "Não é múltiplo de nenhum dos dois";
        }
    }

    //18. Leia três valores e verifique se formam um triângulo equilátero, isósceles ou escaleno
    function triangulo($lado1, $lado2, $lado3){
        if($lado1 == $lado2 && $lado2 == $lado3 && $lado1 == $lado3){
            return "Equilátero";
        }else if($lado1 != $lado2 && $lado2 != $lado3 && $lado1 != $lado3){
            return "Escaleno";
        }else{
            return "Isósceles";
        }
    }

    //19. Leia uma matriz 3x3 e imprima sua diagonal principal
    function matriz3x3($principal){
        for($linha=0;$linha<=2;$linha++){
            for($coluna=0;$coluna<=2;$coluna++){
                echo $principal[$linha][$coluna]." ";
            }
            echo "<br>";
        }

        for($linha=0;$linha<=2;$linha++){
            for($coluna=0;$coluna<=2;$coluna++){
                if($linha == $coluna){
                    echo $principal[$linha][$coluna]; 
                }
            }
        }
    }

    //20. Leia idades com enquanto até uma idade negativa ser digitada, mostra a média
    function idades($idade1,$idade2,$idade3,$idade4,$idade5, $media){
        (float)$media = $idade1+$idade2+$idade3+$idade4+$idade5 / 5;
        return "Média de idades: ".$media;
    }
?>