<?php
require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($uri)['path']; // extract ?foo=bar
$uri = substr($uri, 19); // for only after /foo
$root = '/php/tutorial/vid12/';

$routes =  [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];


if(array_key_exists($uri, $routes)){
    require $routes[$uri];
} else {
    abort(404);
}