<?php

require "model/Product.php";

$database = require "config/app.php";
$productList = new Product($db);
$data = [
    'title' => "Products",
    'products' => $productList->all()
];
include __DIR__."/../resources/pages/product.view.php";