<?php
namespace Core;
use JetBrains\PhpStorm\NoReturn;

class Router {

    protected array $routes = [];

    public function add($uri, $controller, $method = 'GET'): void
    {
        $this->routes[] = compact('uri', 'controller', 'method');
    }
    public function get($uri, $controller): void
    {
        $this->add($uri, $controller, 'GET');
    }
    public function post($uri, $controller): void
    {
        $this->add($uri, $controller, 'POST');

    }
    public function put($uri, $controller): void
    {
        $this->add($uri, $controller, 'PUT');

    }
    public function delete($uri, $controller): void
    {
        $this->add($uri, $controller, 'DELETE');

    }
    public function patch($uri, $controller): void
    {
        $this->add($uri, $controller, 'PATCH');
    }
    public function route($uri, $method = 'GET'){
        foreach($this->routes as $route){
            if($route["uri"] === $uri && $route["method"] === strtoupper($method)){
                return require base_path($route["controller"]);
            }
        }
        //abort
        $this->abort(404);
    }

    #[NoReturn] // php 8 annotasyonudur, fonksiyonun sonlandırılabileceğini belirtir.
    public function abort($code): void
    {
        http_response_code($code);
        require base_path("controller/404.php");
        exit;
    }
}