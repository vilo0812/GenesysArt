<?php
    class LoginController extends ControllerBase{
        public function __construct(){
            parent::__construct();
        }
        public function login(){
            $this->viewDefect("login");
        }
    }
    $controller = new LoginController();
    $controller->$action();
