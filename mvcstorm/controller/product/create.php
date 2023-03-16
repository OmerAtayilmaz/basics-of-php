<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$users = $db->query('select name,id from users')->fetchAll(PDO::FETCH_ASSOC);


view("product/create.view.php",[
    "users" => $users
]);