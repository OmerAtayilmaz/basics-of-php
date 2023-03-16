<?php
use Core\Database;
use Core\Validator;
use Core\App;

$db = App::resolve(Database::class);

$validator = new Validator();
$data = [
    "title" => "Register",
    "content" => "Register Content"
];


if($_SERVER["REQUEST_METHOD"] === 'POST'){


    $errors = [];
    if(!$validator->requiredParams(["name","email","password","c-password"]))
        $errors[] = "All fields are required!";

    if(!$validator->confirmPassword($_POST["password"],$_POST["c-password"]))
        $errors[] = "Passwords do not match!";

    if(!$validator->checkIsEmailValid($_POST["email"]))
        $errors[] = "Email is not valid!";

    if($validator->isEmailUsed($_POST["email"]))
        $errors[] = "Email is already used!";

    if(empty($errors)){
        $db->query("INSERT INTO users (name, email, password, role) VALUES (:name, :email, :password, :role)",[
            "name" => $_POST["name"],
            "email" => $_POST["email"],
            "role" => "customer",
            "password" => password_hash($_POST["password"], PASSWORD_DEFAULT)
        ]);
    }
}
 view("pages/register.view.php", ['data' => $data, 'errors' => $errors ?? []]);