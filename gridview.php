<?php 
//Conectar ao DB X
$servername = "localhost";
$username = "COLOCAR MEU USUÁRIO";
$password = "SENHA";
$dbnname = "COLOCAR NOME DO DB";

//Usar variavel conect para chamar a coneção com o DB
$conect = new mysql($servername, $username, $password, $dbname);

//Condicional simples para verificar as configs acima
if ($conect->connect_error) {
die("Conexão falhou: " . $conect->connect_error);
}
?>

<!DOCTYPE html lang="pt-br">
<html>
    <head>
    <meta charset="UTF-8">
    <title>GridView com DB TESTE</title>
        <style>
            body {
            font-family: Arial, Helvetica, sans-serif;
            }
            .gridview {
            width: 100%;
            border-collapse: collapse;
            }
            .gridview th,
            .gridview td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            }

            .gridview tr:hover {
            background-color: #f5f5f5;
            }
        </style>
    </head>
    <body>
        <h2>Tabela teste com estudantes</h2>
        <table class="gridview">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Curso</th>
            </tr>
            </thead>
        </table>
        <?php 
            //Supondo valores de uma tabela com as seguintes colunas
            $sql = "SELECT id, nome, curso FROM estudantes";
            $result =  $conect->query($sql);

            if($row = $result ->num_rows >0) {
            while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["curso"] . "</td>";
            echo "</tr>";
            }
            } else {
            echo "0 resultados";
            }
            $conect->close();
        ?>
    </body>
</html>