<?php

include 'includes/connect.php';

$data = [];


$sql = "SELECT * FROM product";
$statement = $connection->query($sql);
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$data = $results;

?>

<table>
    <tr>
        <th>Nom</th>
        <th>Description</th>
        <th>Prix</th>
        <th>En stock</th>
    </tr>
     <?php foreach ($data as $datas) {
    echo '
            <tr>
                <td>' .$datas['name']. '</td>
                <td>' .$datas['description']. '</td>
                <td>' .$datas['price']. '</td>
                <td>' .$datas['stock']. '</td>
            </tr>';
} ?>
</table>



