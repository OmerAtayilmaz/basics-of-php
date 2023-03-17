<?php

$router->get("/","controller/home.php");
$router->get("/product","controller/product/index.php");
$router->get("/product/create","controller/product/create.php");
$router->post("/product/create","controller/product/create.php");
$router->get("/product/detail/1","controller/product/show.php");