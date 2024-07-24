<!DOCTYPE html>
<html>
    <head>
        <meta="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <h2>Ler um numero e qual operação realizar, dobro, cubo ou raiz...</h2>
            <form method="get" action="switch.php">
               Numero: <input type="number" name="num"><br>
               <fieldset><legend>Operação</legend>
                    <input type="radio" name="oper" value="1" id="dobro" checked/>
                    <label for="dobro">Dobro</label>
                    <input type="radio" name="oper" value="2" id="cubo"/>
                    <label for="dobro">Cubo</label>
                    <input type="radio" name="oper" value="3" id="raiz"/>
                    <label for="dobro">Raiz quadrada</label>
               </fieldset><br>
                <input type="submit" value="Calcular"/>
            </form>
            <?php
                $n = isset($_GET["num"])?$_GET["num"]:0;
                $o = isset($_GET["oper"])?$_GET["oper"]:1;
                switch($o){
                    case 1: 
                        $r = $n * 2;
                        break;
                    case 2:
                        $r = $n ^ 3;
                        break;
                    case 3:
                        $r = sqrt($n); // Ou podemos calcular $n ^ (1/2);
                }
                echo"O resultado da operaçção solicitada foi: $r";                
            ?>
            <input type="submit" value="Voltar" id="numero"/>
        </div>
        <div>
            <h3>Ler o dia da semana(2-7) e mostrar se precisa ou não ir para escola</h3>
            <form method="get" action="switch.php">
                Dia da Semana: <input type="number" name="ds"><br>
                <input type="submit"  class="botao" value="Analisar"/> 
            </form>
            <?php
                $d = isset($_GET["ds"])?$_GET["ds"]:0;
                switch($d){
                    case 2: 
                    case 3;
                    case 4:
                    case 5: 
                    case 6:
                        echo"Vc prececisa estudar!";
                        break;
                    case 7:
                    case 8:
                        echo"Descanse...";
                        break;
                    default:
                        echo"dia da semana invalido";
                }
            ?>
        </div>
    </body>
</html>