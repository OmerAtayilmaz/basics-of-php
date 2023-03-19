<?php
// Path: routes.php
$router->get("/", "controller/home.php");
$router->get("/references", "controller/references.php");
$router->get("/trends", "controller/trends.php");
$router->get("/contact", "controller/contact.php");
//$router->get("/register", "controller/create.php");
//$router->post("/register", "controller/create.php");
$router->get("/users", "controller/users.php");
$router->get("/product","controller/product/index.php")->only('auth');
$router->post("/product","controller/product/store.php");
$router->patch("/product","controller/product/update.php");
$router->get("/product/create","controller/product/create.php");
$router->get("/product/edit","controller/product/edit.php");

$router->get("/register","controller/auth/create.php")->only('guest');
$router->post("/register","controller/auth/store.php");
$router->get("/login","controller/auth/login.php");