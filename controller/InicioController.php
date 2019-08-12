<?php
    class InicioController extends ControllerBase{
        public function __construct(){
            parent::__construct();
            $this->cargarModelo('inicio');
            $model = new InicioModel();
        }
        public function inicio(){
            if($_GET['cd']){
                $datos=$_GET['cd'];
                $this->view("inicio",$datos);
            }
        }
    }
    $controller = new InicioController();
    $controller->$action();