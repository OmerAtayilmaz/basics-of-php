<?php
require("utils/helpers.php");
require "routes/web.php";
require "Database.php";
// parse_url($_SERVER['REQUEST_URI'])['path]);
$uri = $_SERVER['REQUEST_URI'];
$uri = substr($uri,13);


if(array_key_exists($uri, $routes)){
    http_response_code(200);
    require $routes[$uri];
}else
{
    http_response_code(404);
    require "controller/storefront/404.php";
}


$config = require "config/app.php";

$db = new Database($config['database']);

$pId = $_GET["id"];
//TODO: NEVER INLINE USER INPUT AS QUERY!$query = "select * from products where id = $id";
//TODO: USE THIS WAY OR STH ELSE !$query = "select * from products where id = ? and user_id = ?"; sırasıyla girilmelidir id ve user_id
//TODO: USE THIS WAY OR STH ELSE !$query = "select * from products where id = :post_id and user_id = :user_id isimlendirerek girebiliriz
$query = "select * from products where id = :post_id and user_id = :user_id";
$products = $db->query($query,[
    'post_id' => $pId,
    'user_id' => 1
    ])->fetchAll(PDO::FETCH_ASSOC);

$joinquery = "select * from products inner join users on products.user_id = users.id";
$productsWithUser = $db->query($joinquery)->fetchAll(PDO::FETCH_ASSOC);
dd($productsWithUser);

foreach ($products as $product){
    echo "<h1>{$product['title']}</h1>";
};