<?php
use Core\Database;
use Model\Product;
use Core\App;

$db = App::resolve(Database::class);

$statement = $db->query("select id,name from users");
$users = $statement->fetchAll(PDO::FETCH_ASSOC);
if($_SERVER["REQUEST_METHOD"] === 'POST'){
    //validations here
    $user_id = $_POST['user_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $today = date('Y-m-d H:i:s');

    $product = $db->query("INSERT INTO products (title, description, price, image, created_at) VALUES (:title, :description, :price, :image, :created_at)",[
        'title' => $title,
        'description' => $description,
        'price' => $price,
        'image' => "https://images.unsplash.com/photo-1572635196237-14b3f281503f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80",
        'created_at' => $today
    ]);
    header('Location: /product');
    exit();
}

view("product/create",['users' => $users]);