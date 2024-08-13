<!DOCTYPE html>
<html lang="pt-br">
    <header>
        <meta charset="UTF-8">
        <title>Grid View em PHP</title>
    </header>
    <body>
        <h3>Exemplo de Grid View</h3>
        <table>
            <tr>
                <th>Coluna 1</th>
                <th>Coluna 2</th>
                <th>Coluna 3</th>
            </tr>
        </table>

    </body>
    <?php
        $servename = "localhost";
        $username = "root";
        $password = "";
        $dbname = "AQUI ENTRA UM DB"

        //criar a coneção
        $conect = new mysql($servername, $username, $password, $dbname);
    
    ?>
    <?php 
        //buscar info do db
        $sql = "SELECT coluna1, coluna2, coluna3 FROM AQUI ENTRA A TABELA"
        $result = $conect->query(sql);
    
    ?>
</html>