<?php
// php -S localhost:8888 -t public
const BASE_PATH = __DIR__ . "/../";
require(BASE_PATH . "utils/helpers.php");
require base_path("routes/web.php");
require base_path("Database.php");
// parse_url($_SERVER['REQUEST_URI'])['path]);
$uri =  $_SERVER['REQUEST_URI'];
function abort($code){
    http_response_code($code);
    require base_path("controller/404.php");
    exit;
}

if(array_key_exists($uri, $routes)){
    http_response_code(200);
    require base_path($routes[$uri]);
}else
{
    http_response_code(404);
    require base_path("controller/404.php");
}


$config = require  base_path("config/app.php");

$db = new Database($config['database']);

/* $pId = $_GET["id"]; */
//TODO: NEVER INLINE USER INPUT AS QUERY!$query = "select * from products where id = $id";
//TODO: USE THIS WAY OR STH ELSE !$query = "select * from products where id = ? and user_id = ?"; sırasıyla girilmelidir id ve user_id
//TODO: USE THIS WAY OR STH ELSE !$query = "select * from products where id = :post_id and user_id = :user_id isimlendirerek girebiliriz
$query = "select * from products where id = :post_id and user_id = :user_id";
$products = $db->query($query,[
    'post_id' => 1,
    'user_id' => 1
])->fetchAll(PDO::FETCH_ASSOC);

$joinquery = "select * from products inner join users on products.user_id = users.id";
$productsWithUser = $db->query($joinquery)->fetchAll(PDO::FETCH_ASSOC);

/*
foreach ($products as $product){
    echo "<h1>{$product['title']}</h1>";
};
*/