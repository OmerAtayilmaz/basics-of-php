<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$product = $db->query('select * from products where id = :id',[
    'id'=> $_POST['_id']
])->fetch(PDO::FETCH_ASSOC);

//authorize


//validation
$errors = [];

// if no validation errors, update record in database table
if (count($errors)){
    view('product/edit.view.php', [
        'heading' => "Edit product",
        'errors' => $errors,
        'product' => $product
    ]);
}

$db->query('update products set title = :title, description = :description, price = :price where id = :id',[
    'id' => $_POST['_id'],
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'price' => $_POST['price']
]);

//redirect the user
header('location: /product');
die();