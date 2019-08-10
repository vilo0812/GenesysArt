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
                    echo "la contrasena es igual";
                    $clave=password_hash($password,PASSWORD_DEFAULT);
                    $claverecuperacion=password_hash($passwordrecu,PASSWORD_DEFAULT);
                    $model->registrarUsuario($nombre,$nickname,$correo,$clave,$claverecuperacion);

                    header('Location:?id=registrado');
                    exit;
                    } else{
                        echo "la contraseña no es igual";
                    }
                }else{
                    echo "el usuario ya existe";
                }
                
                
                
                /*$clave=password_hash($password,PASSWORD_DEFAULT);
                $claverecuperacion=password_hash($passwordrecu,PASSWORD_DEFAULT);
                $model->registrarUsuario($nombre,$nickname,$correo,$clave,$claverecuperacion);
                $existenciaUsuario=$model->buscarUsuarioCorreo($nickname,$correo);//verificamos si el usuario ya existe
                if($existenciaUsuario){//verificamos si la contraseña es igual
                        $passwordverifi=$this->compararContrasenas($password,$passwordrep);
                        if($passwordverifi){//registramos
                            //R//insertar en la base de datos
                            //$clave=password_hash($password,PASSWORD_DEFAULT);
                            //$claverecuperacion=password_hash($passwordrecu,PASSWORD_DEFAULT);
                            //$model->registrarUsuario($nombre,$nickname,$correo,$clave,$claverecuperacion);
                        }else{
                            //v//deberia lanzar un pequeño mensaje de error
                        }
                }else{
                    //v//deberia lanzar un pequeño mensaje de error
                }
            */}

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