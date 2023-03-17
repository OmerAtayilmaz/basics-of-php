<?php
namespace core;
use Core\Responses;


class Router{
    protected array $routes = [];

    public function add($uri, $controller, $method = "GET"): void {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }
    public function get($uri, $controller) :void {
        $this->add($uri, $controller, 'GET');
    }
    public function post($uri, $controller) :void{
         $this->add($uri, $controller, 'POST');
    }
    public function put($uri, $controller) :void{
        $this->add($uri, $controller, 'PUT');
    }
    public function patch($uri, $controller) :void{
        $this->add($uri, $controller, 'PATCH');
    }
    public function delete($uri, $controller) :void{
        $this->add($uri, $controller, 'DELETE');
    }
    public function route($uri, $method = 'GET'){
        foreach($this->routes as $route){
            if($route['uri'] === $uri && $route['method'] === strtoupper($method)){
                return require base_path($route['controller']);
            }
        }
        $this->abort(Responses::HTTP_NOT_FOUND);
    }


    public function abort($code): void{
        http_response_code($code);
        require base_path("controller/404");
        exit;
    }
}