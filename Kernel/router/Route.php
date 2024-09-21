<?php

namespace App\Kernel\router;

class Route
{

    public function __construct(
        private string $uri,
        private string $method,
        private $action,
        private array $middlewares = [],
    ) {
    }

    public static function get(string $uri, callable|array $action, array $middlewares = []): static
    {
        return new static($uri, 'GET', $action, $middlewares);
    }

    public static function post(string $uri, callable|array $action, array $middlewares = []): static
    {
        return new static($uri, 'POST', $action, $middlewares);
    }

    public function getUri(): string
    {
        return $this->uri;
    }


    public function getAction()
    {
        return $this->action;
    }


    public function getMethod(): string
    {
        return $this->method;
    }


    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }

    public function hasMiddlewares(): bool
    {
        return ! empty($this->middlewares);
    }


}