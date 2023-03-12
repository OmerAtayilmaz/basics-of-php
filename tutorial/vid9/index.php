<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array page</title>
</head>
<body>
<?php function filterUsersByAge($users,$age): iterable{
    $filteredUsers = array();
    foreach($users as $user){
        if($user["age"]>=$age){
            $filteredUsers[] = $user;
        }
    }
    return $filteredUsers;
} ?>
<?php function printUserListByGender($users,$gender){ ?>
    <?php foreach($users as $user) : ?>
        <?php if($user["gender"]===$gender): ?>
            <li><?= $user["id"] . '. Kullanıcının Adi: ' . $user["name"] . ' - Email: <strong>' . $user["email"] . '</strong>' ?></li>
        <?php endif; ?>
    <?php endforeach;   ?>
<?php } ?>

<?php
$users = array(
    array("id"=>1,"name"=>"omer","email"=>"omer@example.com","gender"=>"man","age"=>20),
    array("id"=>2,"name"=>"ali","email"=>"ali@example.com","gender"=>"man","age"=>30),
    array("id"=>3,"name"=>"veli","email"=>"veli@example.com","gender"=>"man","age"=>25),
    array("id"=>4,"name"=>"ayse","email"=>"ayse@example.com","gender"=>"woman","age"=>18),
    array("id"=>5,"name"=>"filiz","email"=>"filiz@example.com","gender"=>"woman","age"=>22)
);
?>

<h1>Users</h1>
<ul>
    <?php foreach($users as $user) : ?>
        <li><?= $user["id"] . '. Kullanıcının Adi: ' . $user["name"] . ' - Email: <strong>' . $user["email"] . '</strong>' ?></li>
    <?php endforeach; ?>
</ul>
<?php printUserListByGender($users,"man"); ?>
<hr/>
<?php printUserListByGender($users,"woman"); ?>
<hr/>
<?php $filteredUsers = filterUsersByAge($users,25); ?>
<?php printUserListByGender($filteredUsers,"man") ?>
</body>
</html>