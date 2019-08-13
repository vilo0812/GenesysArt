<?php
    class InicioController extends ControllerBase{
        public function __construct(){
            parent::__construct();
            $this->cargarModelo('inicio');
            $model = new InicioModel();
            
        }
        public function inicio(){
            if(isset($_GET['cd'])){
                $datos=$_GET['cd'];
                //llama a la sesion
                //$id=$this->sesionStart($datos);
                $this->view("inicio",$datos);
            }else{
                $this->viewDefect("inicio");
            }
        }
    }
    $controller = new InicioController();
    $controller->$action();