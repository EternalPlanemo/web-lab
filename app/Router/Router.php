<?php

namespace App\Router;

use App\Request\Request;
use App\Traits\Makeable;

class Router {
    use Makeable;

    protected array $routes = [];

    protected array $handlers = [];
    
    protected function bind(string $method = 'GET', string $path, array $handler)
    {
        $this->handlers["GET_{$path}"] = [
            'path' => $path,
            'method' => $method,
            'handler' => $handler,
        ];
    }

    public function get(string $path, array|callable $handler)
    {
        $this->bind(path: $path, handler: $handler);
    }

    public function post(string $path, array|callable $handler)
    {
        $this->bind(path: $path, handler: $handler, method: 'POST');
    }

    public function dispatch(Request $request)
    {
       echo 'hi'; 
    }
}