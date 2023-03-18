<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$users = $db->query('select name, id from users')->fetchAll(PDO::FETCH_ASSOC);

$product_id = $_GET["id"];
$statement = $db->query('select * from products where id = :id',['id' => $product_id]);
$product = $statement->fetch(PDO::FETCH_ASSOC);

view("product/edit.view.php",[
    "users" => $users,
    'product' => $product
]);