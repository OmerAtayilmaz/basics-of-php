<?php
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$statement = $db->query("select * from users");
$users = $statement->fetchAll(PDO::FETCH_ASSOC);
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $user_id = $_POST["user_id"];
    $db->query("delete from users where id=:user_id",[
        'user_id' => $user_id
    ]);

    //redirect to users page after delete with new data
    header("location: /users");
    exit();
}
view("pages/users.view.php",[ 'users' => $users]);