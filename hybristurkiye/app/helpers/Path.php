<?php

class Path{
    static function public ($file = null) : string{
       return  Path::root() ."/" .  $file ;
    }
    static function root() : string{
        return  substr($_SERVER["REQUEST_URI"],0,18);
    }
};