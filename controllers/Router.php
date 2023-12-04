<?php

namespace controllers;

class Router
{
    public function get($route, $controller)
    {
        echo "<pre>";
        var_dump($_SERVER['REQUEST_URI']);
        var_dump($_SERVER['REQUEST_METHOD']);
        echo "</pre>";
    }
}
