<?php
// Path: routes.php
$router->get("/", "controller/home.php");
$router->get("/references", "controller/references.php");
$router->get("/trends", "controller/trends.php");
$router->get("/contact", "controller/contact.php");
$router->get("/register", "controller/register.php");
$router->post("/register", "controller/register.php");
$router->get("/users", "controller/users.php");