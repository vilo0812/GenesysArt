<?php
    class RegistradoController extends ControllerBase{
        public function __construct(){
            parent::__construct();
        }
        public function registrado(){
            $this->viewDefect("registrado");
        }
    }
    $controller = new RegistradoController();
    $controller->$action();
