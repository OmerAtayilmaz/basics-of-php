<?php
// Path: routes.php
$router->get("/", "controller/home.php");
$router->get("/references", "controller/references.php");
$router->get("/trends", "controller/trends.php");
$router->get("/contact", "controller/contact.php");
$router->get("/register", "controller/register.php");
$router->post("/register", "controller/register.php");
$router->get("/users", "controller/users.php");

$router->get("/product","controller/product/index.php");
$router->post("/product","controller/product/store.php");
$router->patch("/product","controller/product/update.php");
$router->get("/product/create","controller/product/create.php");
$router->get("/product/edit","controller/product/edit.php");
