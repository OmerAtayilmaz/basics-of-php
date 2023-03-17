<?php
use Core\Database;
use Model\Product;

$config = require base_path("config/app.php");
$db = new Database($config["database"]["mysql"]);

$productList = new Product($db);
$data = [
    'title' => "Products",
    'product' => $productList->find(1)
];
view("product/show",$data);