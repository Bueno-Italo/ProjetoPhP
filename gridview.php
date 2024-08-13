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
        <?php 
            if ($result->num_rows >0) {
                while($row = $result->fetch_assoc()){
                    echo"<tr>";
                    echo"td" . $row["coluna 1"] . "</td";
                    echo"td" . $row["coluna 2"] . "</td";
                    echo"td" . $row["coluna 3"] . "</td";
                }
            }
            else {
                echo"<tr><td colspan='3'>Nenhum dado encontrado</td></tr>";
            }
        ?>
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