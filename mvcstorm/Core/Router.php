<?php
namespace Core;
use Core\Middleware\Auth;
use Core\Middleware\Guest;
use Core\Middleware\Middleware;
use JetBrains\PhpStorm\NoReturn;

class Router {

    protected array $routes = [];

    public function add($uri, $controller, $method = 'GET') : Router
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];
        return $this;
    }
    public function get($uri, $controller) : Router
    {
        return $this->add($uri, $controller, 'GET');

    }
    public function post($uri, $controller): Router
    {
        return $this->add($uri, $controller, 'POST');

    }
    public function put($uri, $controller): Router
    {
        return $this->add($uri, $controller, 'PUT');

    }
    public function delete($uri, $controller): Router
    {
        return $this->add($uri, $controller, 'DELETE');
    }
    public function patch($uri, $controller): Router
    {
        return $this->add($uri, $controller, 'PATCH');
    }
    public function route($uri, $method = 'GET'){
        foreach($this->routes as $route){
            if($route["uri"] === $uri && $route["method"] === strtoupper($method)){
                //apply the middleware
                Middleware::resolve($route['middleware']);
               /* if ($route['middleware'] === 'guest'){
                    (new Guest())->handle();
                }
                if($route['middleware'] === 'auth'){
                    (new Auth())->handle();
                }
                */
                return require base_path($route["controller"]);
            }
        }
        //abort
        $this->abort(404);
    }

    public function only($key){
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        return $this;
    }

    #[NoReturn] // php 8 annotasyonudur, fonksiyonun sonlandırılabileceğini belirtir.
    public function abort($code): void
    {
        http_response_code($code);
        require base_path("controller/404.php");
        exit;
    }
}