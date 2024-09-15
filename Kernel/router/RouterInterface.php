<?php

namespace App\Kernel\router;

interface RouterInterface
{
    public function dispatch(string $uri, string $method): void;

}