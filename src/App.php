<?php

namespace  App;

use App\router\Router;

class App
{
    public function run(): void
    {
        $router = new Router();

        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        $router->dispatch($uri, $method);
    }
}