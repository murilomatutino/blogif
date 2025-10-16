<?php

require '../vendor/autoload.php';

$routes = require '../src/routes.php';

use App\Core\Router;

$router_instace = new Router($routes);
$router_instace->handle_requests();
?>