<?php
use Core\Database;
use Model\Product;

$config = require base_path("config/app.php");
$db = new Database($config["database"]["mysql"]);



view("product/create");