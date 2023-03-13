<?php
require "app/helpers/Path.php";
require "app/helpers/Route.php";
require "app/helpers/Omni.php";
require "app/helpers/Methods.php";
require "database/Database.php";

$config = require "config/app.php";

$route = substr($_SERVER["REQUEST_URI"],18);

$db = new Database($config["database"]["mysql"]);

$GLOBALS["routes"] = [
    "/" => [
        'name' => "home",
        'file' => "home",
    ],
    "/products" => [
        'name' => "product",
        'file' => "products",
    ]
];
if(array_key_exists($route,$GLOBALS["routes"])){
    $current = $GLOBALS["routes"][$route];
    require  "controller/" . $current['file'] . ".php";

}else{
    http_response_code(404);
    require "controller/404.php";
}

// require -> bulamazsa exception atar.
// include -> bulamazsa devam eder.