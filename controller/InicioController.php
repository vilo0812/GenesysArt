<?php
    class InicioController extends ControllerBase{
        public function __construct(){
            parent::__construct();
        }
        public function inicio(){
            $this->viewDefect("inicio");
        }
    }
    $controller = new InicioController();
    $controller->$action();