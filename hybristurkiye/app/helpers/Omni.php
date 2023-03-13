<?php


function _include($name){
    return include "resources/" . $name . ".view.php";
}

function _yield($text, $default = null) : string{
    return $text ?? $default;
}

