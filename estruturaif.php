<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{
                font-family: Arial, sans-serif ;
                background-color: #008B8B;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin:0;
            }
            h2{
                display: block;
                margin-top: 10px;
                font-weight: bold;
            }
            input[type="number"]{
                width: calc(100% - 22%);
                padding: 10px;
                margin-top: 5px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type="submit"]{
                background-color: #007bff;
                color: #fff;
                border: nome;
                margin-top: 20px;
                padding: 10px 20px;
                text-transform: uppercase;
                font-weight: bold;
                border-radius:px;
                cursor: pointer;
                transition: background-color 0.3s;
            }
            input[type="submit"]:houver {
                background-color: #0056b3;
            }
           
        </style>
    </head>
    <body>
        <div>
            <h2>Verifica obrigatoriedade de voto e dirigir</h2>
            <form method="get" action="estruturaif.php">
                <h4>Ano de Nascimento:</h4>
                <input type="number" placeholder="4 digitos" name="ano"/>
                <input type="submit" value="verifiar"/>
                <input type="submit" value="Limpar"/>
            </form>
            <?php
                $a = isset($_GET["ano"]) ? $_GET["ano"] : 1990;
                $i = date("Y") - $a;
                echo"Você nasceu em $a e tera $i anos. </br>";

                if($i>18){
                    $v = "Já pode votar!";
                    $d =  "Já pode dirigir...";
                }
                else{
                    $v = "Não pode votar!";
                    $d = "não pode dirigir.";
                }
                echo"Com essa idade voce $v e tambem $d";
            ?>
        </div>
    </body>
</html>