<?php 
// Configurações do DB
$servername = "seu_servidor";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "nome_do_banco_de_dados";

try {
    // Conectar ao DB usando PDO
    $conect = new PDO("sqlsrv:server=$servername;Database=$dbname", $username, $password);
    $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Conexão falhou: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>GridView com DB SQL Server</title>
    <!-- Estilos omitidos para brevidade -->
</head>
<body>
    <div class="container">
        <h2>Tabela Teste Estudantes</h2>
        <table class="gridview">
            <?php 
            // Supondo valores de uma tabela com as seguintes colunas
            $sql = "SELECT id, nome, curso FROM estudantes";
            $result = $conect->query($sql);

            if($result && $result->rowCount() > 0) {
                echo "<thead>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Nome</th>";
                echo "<th>Curso</th>";
                echo "</tr>";
                echo "</thead>";
                while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["nome"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["curso"]) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tbody><tr><td colspan='3'>0 resultados</td></tr></tbody>";
            }
            ?>
        </table>
    </div>
</body>
</html>
