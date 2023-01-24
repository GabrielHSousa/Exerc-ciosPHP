<?php
    $num1 = 50;
    $num2 = 69;
    $a = 1;
    $b = -8;
    $c = 12;

    //Operações
    function soma($num1, $num2){
        return $num1 + $num2;
    }//fim da função

    function subtracao($num1, $num2){
        return $num1 - $num2;
    }//fim da função

    function divisao($num1, $num2){
        if($num2<=0){
            return "Impossível dividir por zero!";
        }
        return $num1 / $num2;
    }//fim da divisão

    function multiplicacao($num1, $num2){
        return $num1 * $num2;
    }//fim da multiplicação

    function potencia($num1, $num2){
        return $num1 ** $num2;
    }//fim da potência

    function tabuada($num2){
        $msg  = "";
        for($i = 0; $i <= 10; $i++){
            $msg .= " <br>  $i x $num2 = ".($i * $num2);
        }//fim do for
        return $msg;
    }//fim da tabuada

    function raiz($num1){
        return sqrt($num1);
    }//fim da raiz

    function calcularDelta($a, $b, $c){
        $delta = ($b ** 2 ) - (4 * $a * $c);
        return $delta;
    }//fim do delta

    function calcularX1($a, $b, $c){
        $del = calcularDelta($a, $b, $c);
        if($del < 0){
            return "Impossível calcular o X1, pois o delta é negativo!";
        }else{
            $x1 = (-$b + sqrt($del))/(2 * $a);
            return $x1;
        }//fim do if else
    }//fim do calcularX1

    function calcularX2($a, $b, $c){
        $del = calcularDelta($a, $b, $c);
        if($del < 0){
            return "Impossível calcular o X1, pois o delta é negativo!";
        }else{
            $x2 = (-$b - sqrt($del))/(2 * $a);
            return $x2;
        }//fim do if else
    }//fim do calcular
// Exercicio 01
    $distancia = 100;
    $consumo = 10;

    function auto($consumo,$distancia){
    return $consumo*$distancia;
    
}
// Exercicio 02
    function fibonacci($n){
        $ant = 0;
        $pro = 1;
        $res = 0;
        $msg = $ant." ".$pro;
        for($i = 0; $i <= $n; $i++){
            $res = $ant + $pro;
            $msg = " ".$res;
            $ant = $pro;
            $pro = $res;
        }
        return $msg;

    
    }
    // Exercicio 03
    function dec(){
        $total ="";

        $total = (1*2**2) + (0*2**1) + (1*2**0);
        return $total;
    }


    // Exercicio 04

    function converter($valor){
        switch($valor){
            case 10:
                return "A";
                break;
            case 11:
                return "B";
                break;
            case 12:
                return "C";
                break;
             case 13:
                return "D";
                break;
            case 14:
                return "E";
                break;
            case 15:
                return "F";
                break;
        }
    }
    function hex($decimal){
        $q = 1;
        $r = 0;
        $msg = "";
        while($q >= 1){
            $q = $decimal / 16;// o resultado da operação
            $r = $decimal % 16;// o resto da divisão
            $decimal = $q;
            if($r > 9){
             $r = coverter($r);
        }
            $msg .= $r;
        }
        return strrev ($msg);
    }
      


    // Exercicio 05
    function hexad($hexadecimal){

    }

    // Exercicio 06
    function vend(){
    $salario = 1500;
    $vendas = 20;
 
    $resultado = $salario*$vendas/15;
    return $resultado;

    }
    // Exercicio 07
    function aluno(){
    $nota1 = 10;
    $nota2 = 5;
    $nota3 = 7;

    $media = ($nota1+$nota2+$nota3)/3;

    return $media;
    }

    // Exercicio 08
    function temperatura(){
        $temperatura = 18;

        $fahrenheit = (9*$temperatura+160)/5;

        return $fahrenheit;

    }

    // Exercicio 09
    function alun(){
        $idade = 15;
        $dias = 20;
        $anos = 365;
        $mes = 2;

    $media = ($idade*$anos)+$mes*$dias;

    return $media;
    }
    // Exercicio 10
        function evento(){
        $duração = 86400;

        $total = $duração / 3600;
        return $total;
    }
    // Exercicio 11
    function notas(){
    $nota1 = 10;
    $nota2 = 5;
    $nota3 = 7;

    $ari = ($nota1 + $nota2 + $nota3)/3;
    $pon = ( $nota1 * 3 ) + ($nota2 * 3) + ($nota3 * 4) /10;
    $harm = 3/(1/$nota1 + 1/$nota2 +1/$nota3);

    return $ari;
    return $pon;
    return $harm;
    }
    //Exercicio 12
    function perc(){
        $ipi = 24.75;
        $cod = 1020;
        $val1 = 5;
        $quan1 = 1;

        $cod = 1030;
        $val2 = 6;
        $quan2 = 2;

        $total = ($val1*$quan1 + $val2 * $quan2)*($ipi/100+1);
        return $total;
    }
    //Exercicio 13
    function num(){
        $A = 10;
        $B = 5;
        $C = 7;

        $D = ($A+$B)/2;
        $R = ($A+$B)*2;
        $S = ($B+$C)*2;

        echo"<br>" .$D;
        echo"<br>" .$R;
        echo"<br>" .$S;

    }
    //Exercicio 14 
    function dados(){
        $hm = 1.75;
        $hf = 1.55;

        $media1 = (72.7*$hm)-58;
        $media2 = (62.1*$hf)-44.7;



        echo"<br>Masculino ".$media1;
        echo"<br>Feminino ".$media2;
    }

    


    //Eu uso para escrever na tela o elemento echo
    echo " <br>A soma de $num1 e $num2 é: ".soma($num1,$num2);
    echo " <br>A subtração de $num1 e $num2 é: ".subtracao($num1,$num2);
    echo " <br>A divisão de $num1 e $num2 é: ".divisao($num1,$num2);
    echo " <br>A multiplicação de $num1 e $num2 é: ".multiplicacao($num1,$num2);
    echo " <br>$num1 elevado a $num2 é: ".potencia($num1,$num2);
    echo " <br>A raiz de $num1 é: ".raiz($num1);
    echo tabuada($num2);
    echo " <br>O valor de delta é: ".calcularDelta($a,$b,$c);
    echo " <br>O valor de X1 é: ".calcularX1($a,$b,$c);
    echo " <br>O valor de X2 é: ".calcularX2($a,$b,$c);
    echo"<br>A distancia que o automovel gastou:".auto(100,10);
    echo "<br>a sequência de Fibonacci: ".fibonacci(1000);
    echo"<br>A Conversão do binario para decimal é: ". dec();
    echo "<br>Cobersão de decimal para hexadecimal é:".hex(5325);
    echo "<br>João tera reajuste de R$".vend(). " no seu salario final";
    echo "<br> A media de joão sera:". aluno();
    echo "<br> A temperatura celsius sera:".temperatura();
    echo "<br>João tem 15 anos de idade e tem ".alun()." meses";
    echo "<br>".evento()." Minutos";
    echo"<br>Nota final sera " .notas();
    echo"<br>valor total do ipi ".perc();
    echo "<br>".num();
    echo "<br>".dados();

   

    
    
    
  
    


?>