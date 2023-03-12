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