<?php

namespace App\Core;

class Router
{
    private $routes;

    public function __construct($routes) {
        $this->routes = $routes;
    }

    private function get_routes()
    {
        return $this->routes;
    }

    public function handle_requests()
    {
        
        $uri = parse_url($_SERVER["REQUEST_URI"])['path']; // pega a url digitada no navegador
        
        $method = $_SERVER["REQUEST_METHOD"]; 

        if (!isset($this->get_routes()[$method])) // verifica se o método solicitado existe na lista de rotas (routes.php)
        {
            die("A rota não existe");
        }

        if (!array_key_exists($uri, $this->get_routes()[$method])) // verifica se o path existe na lista de rotas (routes.php)
        {
            die("A rota não existe");
        }

        $controller_plus_action = $this->get_routes()[$method][$uri];
        [$controller, $method] =  explode('@', $controller_plus_action);
        
        $this->load($controller, $method);

    }

    public function load(string $controller, string $action)
    {
        $controller_name_space = "App\\Controllers\\{$controller}";

        if(!class_exists($controller_name_space))
        {
            die("O controller {$controller} não existe");
        }

        $controllerInstance = new $controller_name_space();

        if(!method_exists($controllerInstance, $action))
        {
            die("O método {$action} não existe no controller {$controller}");
        }

        $controllerInstance->$action((object) $_REQUEST);
    }
}

?>