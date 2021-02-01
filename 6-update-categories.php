<?php

include 'includes/connect.php';

$sql = "SELECT product.name as name, description, price, category.name as category, stock
        FROM product
        LEFT JOIN product_has_category ON product.id = product_has_category.id_product
        LEFT JOIN category ON category.id = product_has_category.id_category
        WHERE category.id IS NULL";
    $statement = $connection->prepare($sql);
    $isDone = $statement->execute();

    if (!$isDone) {
        throw new Exception('Erreur');
    }
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $results = $statement->fetchAll();

$data = $results;
?>

<table>
    <tr>
        <th>Nom</th>
        <th>Description</th>
        <th>Prix</th>
        <th>Catégories</th>
        <th>En stock</th>
    </tr>
    <?php foreach ($data as $datas) {
    echo '
                <tr>
                    <td>
                        '.$datas['name'].'
                    </td>
                    
                    <td>
                        '.$datas['description'].'
                    </td>
                    
                    <td>
                        '.$datas['price'].'
                    </td> 
                                   
                    <td>
                        '.$datas['category'].'
                    </td>
                    <td>
                        '.$datas['stock'].'
                    </td>
                </tr>';
} ?>
</table>