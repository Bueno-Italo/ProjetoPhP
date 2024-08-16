box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);<?php 
// Conectar ao DB X
$servername = "MYSQL8001.site4now.net";
$username = "a8b582_italo";
$password = "db_a8b582_italo";
$dbname = "db_a8b582_italo";

// Usar variável conect para chamar a conexão com o DB
$conect = new mysqli($servername, $username, $password, $dbname);

// Condicional simples para verificar as configs acima
if ($conect->connect_error) {
    die("Conexão falhou: " . $conect->connect_error);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>GridView com DB</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 20px;
        background-color: #eaeaea;
        color: #333;
    }
    .container {
        max-width: 900px;
        margin: auto;
        padding: 20px;
        background-color: white;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        border-radius: 8px;
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    .gridview {
        width: 100%;
        border-collapse: collapse;
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.2);  
     }
    .gridview th {
        padding: 15px;
        text-align: left;
        background-color: #cccccc; 
        font-weight: bold;
    }
    .gridview td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        font-size: 12pt; /* Diminuir a fonte dos resultados */
    }
    .gridview tr:hover {
        background-color: #f9f9f9;
    }

    @media screen and (max-width: 600px) {
        .gridview, .gridview th, .gridview td {
            display: block;
            overflow-x: auto;
        }
    }
</style>
</head>
<body>

<div class="container">
    <h2>Tabela Teste Estudantes</h2>
    <table class="gridview">
        <?php 
        // Supondo valores de uma tabela com as seguintes colunas
        $sql = "SELECT id, nome, curso FROM estudantes";
        $result =  $conect->query($sql);

        if($row = $result ->num_rows > 0) {
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nome</th>";
            echo "<th>Curso</th>";
            echo "</tr>";
            echo "</thead>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["curso"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tbody><tr><td colspan='3'>0 resultados</td></tr></tbody>";
        }
        $conect->close();
        ?>
    </table>
</div>

</body>
</html>
