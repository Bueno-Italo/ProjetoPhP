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

        <h2>Mostrar velocidade com calculo</h2>
        <?php
        function calcularVelocidade($distancia, $tempo){
                    // Convertendo o tempo de minutos para horas
                    $tempoEmHoras = $tempo / 60;
            
                    // Calculando a velocidade
                    $velocidade = $distancia / $tempoEmHoras;
            
                    return $velocidade;
                }
            
                $distancia = 100; // distância em quilômetros
                $tempo = 30; // tempo em minutos
            
                $velocidade = calcularVelocidade($distancia, $tempo);
            
                echo "A velocidade é: $velocidade km/h";
        ?>     
        
        <h2>Calculo de desconto</h2>
            <form method="get" action="exercicios.php">
                <label for="valor">Valor:</label>
                <input type="number" id="valor" name="valor" required>
                <button type="submit">Calcular Desconto</button>
            </form>
            <?php
                $precoOriginal = 100.00;
                $porcentual = 9 / 100;
                $valorDesconto = $precoOriginal + ($porcentual * $precoOriginal);

                echo "o valor final do poduto é: $valorDesconto";
            ?>   

        <h2>Vetores e Matrizes</h2>
            <pre>
                <table border="1"><tr>
                    <?php
                        $c = range(5,20,2);
                        foreach($c as $v){
                            echo"$v";
                        }
                    ?>
                </table>
            </pre>
        <div>
            <h3>AND</h3>
            <h4>Situação do Aluno: </h4>
            <p>
                <?php
                    if ($aluno['media'] >= $media_aprov && $presenca_aluno >= $presenca_aprov){
                        echo'Aluno está aprovado!';
                    }
                    else{
                        echo'Aluno reprovado!';
                    }

                ?>
            </p>
            <br>
            <?php
                $total_aulas = 20;
                $media_aprov = 7;
                $presenca_aprov = 0.7;

                $presenca_aluno = ($total_aulas-$aluno['faltas'])/$total_aulas;

                $aluno = array(
                    'nome' => 'italo',
                    'media' => '7.5',
                    'faltas' => 6
                );
            ?>
        </div>
    </body>
</html>