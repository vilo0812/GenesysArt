<?php
    class RegistrarseModel extends ModelBase{
        private $conexion;
        public function registrarUsuario($nombre,$account_name,$email,$password,$recover_password){//$nombre,$account_name,$email,$password,$recover_password
            $sql="INSERT INTO `users`(`id_user`, `name`, `account_name`, `email`, `password`, `recover_password`, `id_level_user`) VALUES (null,'$nombre','$account_name','$email','$password','$recover_password',2)";
            $variable_PDOStatement=$this->conexion->prepare($sql);
            $variable_PDOStatement->execute(array());
            //$variable_PDOStatement->execute(array("nombre"=>$nombre,"account_name"=>$account_name, "password"=>$password , "recover_password"=>$recover_password));
       }
        public function buscarUsuarioCorreo($usuario,$correo){
            $VARIABLE_SQL="SELECT * FROM `users` WHERE users.account_name = '$usuario' && users.email= '$correo'";
            $query=$this->conexion->query($VARIABLE_SQL);
            $existe=$query->rowCount();
            return $existe;
        }
        public function conected(){
            $conectar=new conectar();
            $variable_pdo=$conectar->conexion();
            $this->conexion=$variable_pdo;
        }
    }
    
?>