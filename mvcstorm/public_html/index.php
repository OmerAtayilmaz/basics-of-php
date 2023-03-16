<?php
// php -S localhost:8888 -t public

use Core\Response;
use Core\Database;
use Core\Router;
const BASE_PATH = __DIR__ . "/../";
require BASE_PATH . "Core/helpers.php";

$config = require  base_path("config/app.php");

spl_autoload_register(function($class){
    $class = str_replace("\\", "/", $class);
    require base_path( $class . ".php");
});

require base_path('bootstrap.php');

$router = new Router();

//bütün routelar load edilir.
require base_path("routes.php");

$uri =  $_SERVER['REQUEST_URI'];
$method = $_POST["_method"] ?? $_SERVER['REQUEST_METHOD'];
$router->route($uri, $method);

/*

$db = new Database($config['database']);

 $pId = $_GET["id"];
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


foreach ($products as $product){
    echo "<h1>{$product['title']}</h1>";
};
*/