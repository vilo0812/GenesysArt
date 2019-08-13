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
                session_start();
                $datos=$_SESSION['u_id']=$datos;
                $this->view("inicio",$datos);
            }else{
                session_start();
                $datos=$_SESSION['u_id'];
                $this->view("inicio",$datos);
            }
        }
    }
    $controller = new InicioController();
    $controller->$action();