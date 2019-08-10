<?php
    class ProductosController extends ControllerBase{
        public function __construct(){
            parent::__construct();
        }
        public function productos(){
            $this->viewDefect("productos");
        }
    }
    $controller = new ProductosController();
    $controller->$action();