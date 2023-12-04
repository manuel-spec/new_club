<?php

namespace controllers;

class LoginController
{
    public function __construct()
    {
        require(__DIR__ . "../views/auth/Login.php");
    }
}
