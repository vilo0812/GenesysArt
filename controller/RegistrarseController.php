<?php
    class RegistrarseController extends ControllerBase{
        public function __construct(){
            parent::__construct();
            $this->cargarModelo('registrarse');
            $model = new RegistrarseModel();
        }
        public function registrarse(){
            if(isset($_POST['registrar'])){
                $model = new RegistrarseModel();
                $nombre=$this->variablesGet('nombre');
                $nickname=$this->variablesGet('account_name');
                $correo=$this->variablesGet('email');
                $password=$this->variablesGet('password');
                $passwordrep=$this->variablesGet('passwordrep');
                $passwordrecu=$this->variablesGet('passwordrecu');
                $model->conected();
                $existes=$model->buscarUsuarioCorreo($nickname,$correo);
                if(!$existes){  
                    $passwordverifi=$this->compararContrasenas($password,$passwordrep);
                    if($passwordverifi){
                    $clave=password_hash($password,PASSWORD_DEFAULT);
                    $claverecuperacion=password_hash($passwordrecu,PASSWORD_DEFAULT);
                    $model->registrarUsuario($nombre,$nickname,$correo,$clave,$claverecuperacion);
                    $query=$model->buscarid($nickname);
                    foreach($query as $row){
                        $id=$row['id_user'];
                   }
                    header('Location:?id=registrado&&cd='.$id);
                    exit;
                    } else{
                        echo "la contraseña no es igual";
                    }
                }else{
                    echo "el usuario ya existe";
                }
                
                }

            $this->viewDefect("registrarse");
        }
        public function compararContrasenas($c,$rc){
            //V//comparamos que las contraseñas sean distintas
            if ($c == $rc){ 
              return true;
              }else{
                return false;
              }
          }
    }
    $controller = new RegistrarseController();
    $controller->$action();