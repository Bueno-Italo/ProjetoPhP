<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Fundamentos de PHP</title>
    </head>
    <body>
        <h2> <?php echo'Olá mundo!'; ?> </h2>
        <h4> <?php echo'Seguindo a tradição do famoso hello world';?> </h4>
    </body>

</html>

<?php 
    /*
        ----------Estrutura básica da sintaxe do PHP----------
        *Tags: <?php ?>  usado para delimitar blocos
        *Declarações: terminam com ponto e virgula(;)
        *Variáveis: iniciam com o simbolo ($) EX: $nome = "ITALO";
        *Funções: definição: function nomeDaFuncao ($parametro) {...}
        *Estrutura condicional: if (condição) {...}else{...}
        *Looping: while (condição) {...}, for (inicialização; condição; incremento), foreach ($array as $item) {...}

        PHP é case-sensitice para palavras-chave e funções
        Variáveis são case-sensitive
        PHP pode ser misturado com HTML no mesmo arquivo

        *O que significa case-sensitive?
            Uma linguagem ou sistema é case-sensitive quando diferencia entre letras maiúsculas e minúsculas. Isso significa que:

            "Algoritmo" e "algoritmo" são tratados como nomes diferentes.
            "X" e "x" são consideradas letras diferentes.
        
        *Tipos de dados em PHP: string, integer, float, booleanos, array e objetos...
            string = textos(sequência de caracteres);
            integer = numeros inteiros;
            float = numeros com decimais(Double);
            booleanos = verdadeiro ou falso;
            array = conjunto de valores;
            objeto = criados através das classes.

    */
?>