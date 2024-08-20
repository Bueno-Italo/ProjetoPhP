<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <head>
        <title>
            Teste Aula
        </title>
    </head>
    <body>
        <h2>Variáveis Super Globais</h2>
        <hr>
        <h3>$_SERVER</h3>
        <pre>
            <?php
                var_dump("$_SERVER");
            ?>
        </pre>

        <h3>$GLOBALS</h3>
        <?php 
            $msg = 'hello world';
            $bye = 'bye world'
        ?>  
        <pre>
            <?php 
                echo($GLOBALS['msg']);
            ?>
        </pre>     
    </body>
</html>