<?php

namespace  App\Kernel;

use App\Kernel\Http\Request;
use App\Kernel\router\Router;

class App
{
    public function run(): void
    {
        $router = new Router();
        $request = Request::createFormGlobal();

        $router->dispatch($request->uri(), $request->method());
    }
}