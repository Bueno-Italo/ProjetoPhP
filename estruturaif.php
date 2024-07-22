<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <h2></h2>
            <form method="get" action="estruturaif.php">
                Ano de Nascimento:
                <input type="number" placeholder="4 digitos" name="ano"/>
                <input type="submit" value="verifiar"/>
            </form>
            <?php
                $a = isset($_GET["ano"]) ? $_GET["ano"] : 1990;
                $i = date("Y") - $a;
                echo"Voçê nasceu em $a e tem $i de idade";
            ?>
        </div>
    </body>
</html>