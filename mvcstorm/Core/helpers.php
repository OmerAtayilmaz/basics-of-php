<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function reverse($value) :string{
    if(!is_string($value))
        return "VALUE_IS_NOT_A_STRING_EXCEPTION";
    return strrev($value);
}

function base_path($path){
    return BASE_PATH . $path;
}

 function view($path, $attributes = []){
    extract($attributes);
    require base_path("view/" . $path);
}
function abort($code){
    http_response_code($code);
    require base_path("controller/404.php");
    exit;
}