<?php

function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function base_path($path = null) : string {
    return (BASE_PATH . $path);
}

function view($path = null, $data = []): void {

    extract($data);

    // ob_get_clean(); - ob_start();
    require base_path("view/" . $path . ".view.php");
}
function _include($path = null, $data = []): void {

    extract($data);

    // ob_get_clean(); - ob_start();
    include base_path("view/" . $path . ".view.php");
}