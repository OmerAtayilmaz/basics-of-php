<?php

use Core\App;
use Core\Database;
use Model\Product;

$db = App::resolve(Database::class);

$productList = new Product($db);
$data = [
    'title' => "Products",
    'product' => $productList->find(1)
];
view("product/show",$data);