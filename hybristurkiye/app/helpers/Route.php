<?php


function isActive ($name,$class = null) : ?string{

        global $routes;

        if (!array_key_exists(baseUrl(), $routes))
            return '';

        $item = $routes[baseUrl()];

        if ($item["name"] == $name)
            return $class ?? 'active';

        return '';
    }

    function baseUrl() :string {

        return "/" . substr($_SERVER["REQUEST_URI"],33);
    }
