<!--
Definições de OBJETO: 
Coisa material ou abstrata que pode ser percebida pelos sentidos e descrita por deio de suas caracteristicas, comportamentos e estado atual.

CLASSE: Define os atributos e métodos comuns que serão compartilhados por um objeto.

OBJETO: É a instancia de uma classe. 
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Craindo Classes e Objetos</title>
    </head>
    <body>
        <div>
            <?php
                require_once 'objeto.php';
                $c1 = new Caneta;
                $c1 -> cor = 'Azul';
                $c1 -> ponta = 0.5;
                $c1 -> tampar();
                print_r($c1);

                echo '<br/';

                $c2 = new Caneta;
                $c2 -> cor = 'preta';
                $c2 -> ponta = '1.0';
                $c2 -> tampar();
                print_r($c2);
            ?>
        </div>
    </body>
</html>