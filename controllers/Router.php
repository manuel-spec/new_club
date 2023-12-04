<?php

namespace controllers;

use controllers\LoginController;

class Router
{
    public function get($route, $controller)
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            if ($_SERVER['REQUEST_URI'] == "login") {
                $loginController = new LoginController();
            }
        }
    }
    // public function post()
    // {
    // }
    // public function put()
    // {
    // }
}
