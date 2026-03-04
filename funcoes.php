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

    //9. Leia números até que a soma ultrapasse 100 !!FINALIZAR
    function ultrapasseCem($numero){
        $maiorCem = 0;
        $numero = 0;
        while($maiorCem < 100){
            $maiorCem = $maiorCem + $numero;
            if((float)$numero >= 100){
                return "Ultrapassou de 100! Seu valor: $numero";
            }else{
                return "Continue... Valor: $numero";
            }
        }
    }

    //10. Solicite senhas até que uma válida seja informada !!FINALIZAR

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
?>