<?php

use Core\App;
use Core\Database;
use Model\Product;

$db = $db = App::resolve(Database::class);

$productList = new Product($db);
$data = [
    'title' => "Products",
    'products' => $productList->all()
];
view("product/index",$data);