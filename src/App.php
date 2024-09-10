<?php

namespace  App;

use App\Http\Request;
use App\router\Router;

class App
{
    public function run(): void
    {
        $router = new Router();
        $request = Request::createFormGlobal();

        $router->dispatch($request->uri(), $request->method());
    }
}