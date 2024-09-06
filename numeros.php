<!DOCTYPE html>
<html>
    <head>
        <meta charser="UTF-8">
        <title>Trabalhando com Numeros em PHP</title>
    </head>
    <body>
        <h3>Operadores Aritméticos</h3>
        <hr>
        <h4>Escreva a operção:</h4>
        <p>
            <?php 
                echo 10+10;
            ?>
        </p>
        <br>

        <h3>Cálculo da Fatura:</h3>
        <?php 
            // Informações da compra
            $quant = 60; // int
            $preco = 29.00; // float
            $cod = "330745";

            // Calculando o total
            $total = $quant * $preco;
            echo $total;
        ?>
        <table>
            <tr>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Código</th>
                <th>total</th>
            </tr>
            <tr>
                <td><?php echo $cod; ?></td>
                <td><?php echo $quant; ?></td>
                <td><?php echo number_format($preco, 2, ",","."); ?></td> <!--Numeros no formato brasileiro, retirando o padrão americano-->
                <td><?php echo number_format($total, 2, ",","."); ?></td>
            </tr>
        </table>
    </body>
</html>