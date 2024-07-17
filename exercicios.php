<!DOCTYPE html>
<html>
    <head>
        <title>Exercícios PHP</title>
    </head>
    <body>
    <!-- Exercício 1 -->
    <h2>Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.</h2>
        <?php
        echo "Digite o primeiro número: ";
        $var1 = 10;
        echo $var1 . "<br/>";

        echo "Digite o segundo número: ";
        $var2 = 20;
        echo $var2 . "<br/>";

        // Somando os dois números
        $soma = $var1 + $var2;

        // Multiplicando o resultado pela primeira entrada
        $resultadoFinal = $soma * $var1;
        echo "O resultado final é: $resultadoFinal <br/><br/>";
        ?>

    <!-- Exercício 2 -->
    <h2>Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua média na variável media e exiba para o usuário o resultado</h2>
        <?php
        $val1 = 5;
        $val2 = 10;
        $val3 = 2;

        // Calculando a média das notas
        $media = ($val1 + $val2 + $val3) / 3;
        echo "A média das notas inseridas são: $media <br/>";

        if ($media >= 6) {
        echo "Aluno aprovado";
        } else {
        echo "Aluno reprovado";
        }
        echo "<br/><br/>";
        ?>

    <!-- Exercício 3 -->
    <h2>Escreva um algoritmo que receba um valor, calcule e mostre para usuário 15% deste valor.</h2>
        <?php
        $valor = 100;
        $calc = ($valor * 15) / 100;
        echo "15% de $valor é $calc <br/><br/>";
        ?>

    <!-- Exercício 4 -->
    <h2> Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor.</h2>
        <?php
        $valor = 100;

        // Calculando 5% e 50% do valor inserido
        $calc = ($valor * 5) / 100;
        $calc2 = ($valor * 50) / 100;

        // Exibindo os resultados
        echo "5% de $valor é $calc <br/>";
        echo "50% de $valor é $calc2";
        ?>
    </body>
</html>