<?php
use Core\Container;
use Core\Database;
use Core\App;

$container = new Container();
$container->bind("Core\Database", function (){
    $config = require base_path("config/app.php");
    return new Database($config['database']['mysql']);
});
App::setContainer($container);