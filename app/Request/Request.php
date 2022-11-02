<?php

namespace App\Request;

use App\Traits\Makeable;

class Request {
    use Makeable;

    protected ?object $request = null;

    public function __construct()
    {
        $this->request = (object) array_merge($_GET, $_POST);
    }

    public function url()
    {
        return parse_url($_SERVER['REQUEST_URI']);
    }

    public function path()
    {
        return $this->url()['path'];
    }

    public function query()
    {
        return $this->url()['query'];
    }

    public function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function has($key)
    {
        return array_key_exists($key, (array) $this->request);
    }

    public function get($key, $default = null)
    {
        if (! $this->has($key)) {
            return $default;
        }

        return $this->{$key};
    }

    public function filled($key)
    {
        return (bool) $this->get($key, false);
    }

    public function all()
    {
        return (array) $this->request;
    }
}