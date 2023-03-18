<?php
//Sessions are not perminant!
$_SESSION['user'] = "Omer Atayilmaz";

//php --info
// session.save_path'i sonuclarda arat
// cıkan yolda tmp klasörüne git
// oradaki session_..gibi olan dosyalar sessionu tutar, sürükleyip ideye bırak ve içindeki veriyi gör!


$data = [
    'title' => 'Home',
    'content' => 'HOME PAGE'
];

view("pages/home.view.php", compact("data"));