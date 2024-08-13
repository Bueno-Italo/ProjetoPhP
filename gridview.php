<?php 
//GET url da api teste
$api =  'https://jsonplaceholder.typicode.com/posts';

//obter os dados
$response = file_get_contents($api);
$data = json_decode($response , true);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <header>
        <meta charset="UTF-8">
        <title>Grid View em PHP</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </header>
    <body>
        <h3>Grid View em PHP V2</h3>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body 3</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $item): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['id']);?></td>
                    <td><?php echo htmlspecialchars($item['title']);?></td>
                    <td><?php echo htmlspecialchars($item['body']);?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </body>
</html>