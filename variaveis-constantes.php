<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Variáveis e Constantes</title>
    </head>
    <body>
        <h2>Trabalhando com variáveis</h2>
        <hr>
        <h3>Apresentar valor de variáveis</h3>
        <?php 
            $nome = 'Italo'; //Variável do tipo string
            $saldo = 100.50;
            /*
                Os nomes das variáveis só podem ter letras, numeros ou '_'
                São sensiveis a letras maiúsculas
                Descobrir o valor e tipo da variável: Utilizar  var_dump()
            */
        ?>

        <h4>Nome: </h4>
        <p> <?php echo $nome; ?> </p>
        <h4>Saldo: </h4>
        <p> <?php echo $saldo; ?> </p>
        <h4>Mensagem:</h4>
        <p> <?php echo"Olá $nome, seu saldo é: $saldo."; ?> </p> 
    </body>
</html>