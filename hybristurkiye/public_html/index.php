<?php

const BASE_PATH = __DIR__ . "/../";
require BASE_PATH . "Core/Methods.php";
use Core\Database;
use Core\Responses;
use Core\Router;

$config = require base_path("config/app.php");

spl_autoload_register(function($class){
    $class = str_replace("\\", "/", $class);
    require base_path( $class . ".php");
});

$route = $_SERVER["REQUEST_URI"];
$db = new Database($config["database"]["mysql"]);

$router = new Router();
require base_path("routes.php");

$uri = $_SERVER["REQUEST_URI"];
$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];
$router->route($uri, $method);

// require -> bulamazsa exception atar.
// include -> bulamazsa devam eder.