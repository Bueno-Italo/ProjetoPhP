<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>

        </title>
    </head>
    <body>

    </body>
</html>

<?php
    /*
    Operadores de Atruibuição! 
    Adição $a = $a + $b ou $a += $b
    subtração $a = $a - $b ou $a -= $b
    multiplicação $a = $a * $b ou $a *= $b
    divisão $a = $a / $b ou $a /= $b
    modulo $a = $a % $b ou $a %= $b
    concatenação $a = $a . $b ou $a .= $b
    */
     $preco = $_GET['p'];
    echo "O preço do produto é R$" . number_format($preco, 2); //função para formatar valor
    $preco += $preco*10/100;
    echo "<br/>O novo preço com de 10% de aumento é R$:" . number_format($preco, 2);

    //---------- Mostrar o ano atual e o anterios via parametro por URL----------
    $atual = intval($_GET["aa"]);
    $anoAnterior = $atual -1;
    $proximoAno = $atual +1;
    echo "O ano atual é $atual e o ano anteriror é  . $anoAnterior .  e o ano seguinte será: . $proximoAno";
?>