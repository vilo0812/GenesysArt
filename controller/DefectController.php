<?php
    class DefectController extends ControllerBase{
        public function __construct(){
            parent::__construct();
            $this->cargarModelo('defect');
        }
        public function index(){
            $model = new DefectModel();
            $model->conected();
            if(isset($_POST['mensaje_btn'])){
                $usuario=$_POST['nombre'];
                $password=$_POST['password'];
                $existe=$model->buscarUsuarioContraseña($usuario,$password);
                if($existe){
                    $id=$model->buscarIdByNickName($usuario);
                    $model->crearSesion($id);
                    header('Location:?id=inicio');
                    exit;    
                }else{
                    echo"el usuario no existe";
                }
            }else{
                
                session_start();
                session_destroy();
                $this->viewDefect("welcome");
            }
        }
    }
    $controller = new DefectController();
    $controller->$action();
