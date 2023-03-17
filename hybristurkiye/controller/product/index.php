<?php
use Core\Database;
use Model\Product;

$config = require base_path("config/app.php");
$db = new Database($config["database"]["mysql"]);

$productList = new Product($db);
$data = [
    'title' => "Products",
    'products' => $productList->all()
];
view("product/index",$data);