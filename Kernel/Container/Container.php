<?php

namespace App\Kernel\Container;

use App\Kernel\Http\Request;
use App\Kernel\router\Router;

class Container
{
    public readonly Request $request;

    public readonly Router $router;

    public function __construct()
    {
        $this->registerServices();
    }


    private function registerServices(): void
    {
        $this->request = Request::createFormGlobal();
        $this->router = new Router();
    }
}