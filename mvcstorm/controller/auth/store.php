<?php
use  Core\Database;
use  Core\App;
use Core\Validator;

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

$errors = [];
// validate the form inputs.
if(!Validator::requiredParams(['name', 'email', 'password', 'cpassword'])){
    $errors['attribute'] = "Please provide all attributes";
}

if(!Validator::checkIsEmailValid($email)){
    $errors['email'] = "Please provide an valid email adress";
}


if(! empty($errors)){
     view('auth/create.view.php',[
        'errors' => $errors
    ]);
};

$db = App::resolve(Database::class);
// check if the account already exists
$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->fetch(PDO::FETCH_ASSOC);

if($user){
    // if yes, redirect to login page.
    header('location: /login');
    //best-practice: after redirecting always kill the script!
}else{
    // if not, create it and log the user in and redirect
    $db->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)',[
        'email' => $email,
        'name' => $name,
        'password' => $password
    ]);
    // mark the user has logged in.
    $_SESSION['user'] = [
        'email' => $email,
        'name' => $name
    ];

    header('location: /');
}
exit();


