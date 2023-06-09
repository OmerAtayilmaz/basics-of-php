<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$statement = $db->query('select * from products');

$products = $statement->fetchAll(PDO::FETCH_ASSOC);

view("product/index.view.php",[
    "products" => $products
]);