<?php
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$product = $db->query('insert into products (title, description, image, price, user_id) values (:title, :description, :image, :price, :user_id)',[
    "title" => $_POST['title'],
    "description" => $_POST['description'],
    "image" => "https://images.unsplash.com/photo-1572635196237-14b3f281503f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80",
    "price" => $_POST['price'],
    "user_id" => $_POST['user_id'],
]);

header('Location: /product');