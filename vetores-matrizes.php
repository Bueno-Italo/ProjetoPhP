<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <pre>
            <h2>Trabalhando com Vetores e Matrizes</h2>
            <?php
                $v = array(
                    0 => 5,
                    1 => 9, 
                    2 => 8,
                    3 => 7
                );
                print_r($v);
            ?>
            </pre>
        </div>
        <div>
            <pre>
            <?php
                $cad = array(
                    "nome" => "Italo",
                    "idade" => 31, 
                    "peso" => 72.5,
                );
                print_r($cad);
            ?>
            </pre>
        </div>
        <div>
            <pre>
            <h2>Funções com Vetores e Matrizes</h2>
            <?php
                $v = array("A", "J", "X", "K");
                echo"o vetor tem " . count($v) . "elementos <br/>"; 
                print_r($v);
                $v [] = "O";
                print_r($v);
            ?>
            </pre>
        </div>
    </body>
</html>