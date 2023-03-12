<?php

$db = array(
    array("id"=>1,"name"=>"omer","email"=>"omer@example.com","gender"=>"man","age"=>20),
    array("id"=>2,"name"=>"ali","email"=>"ali@example.com","gender"=>"man","age"=>30),
    array("id"=>3,"name"=>"veli","email"=>"veli@example.com","gender"=>"man","age"=>25),
    array("id"=>4,"name"=>"ayse","email"=>"ayse@example.com","gender"=>"woman","age"=>18),
    array("id"=>5,"name"=>"filiz","email"=>"filiz@example.com","gender"=>"woman","age"=>22)
);

$filteredData = array_filter($db,function($item){
    return $item["age"] > 20 && $item["gender"] === "woman";
});

require "index.view.php";