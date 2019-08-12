<?php
    class RegistradoController extends ControllerBase{
        public function __construct(){
            parent::__construct();
        }
        public function registrado(){
            if($_GET['cd']){
                $datos=$_GET['cd'];
                $this->view("registrado",$datos);
            }
        }
    }
    $controller = new RegistradoController();
    $controller->$action();
