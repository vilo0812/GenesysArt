<?php
    class DefectModel extends ModelBase{
        private $conexion;
        public function DefectModel(){
        }
        public function buscarUsuarioContraseña($usuario,$password){
            $VARIABLE_SQL="SELECT * FROM `users` WHERE users.account_name = '$usuario' && users.password = '$password'";
            $query=$this->conexion->query($VARIABLE_SQL);
            $existe=$query->rowCount();
            return $existe;
        }
        public function crearSesion($id){
            session_start();//sesion iniciada
            $_SESSION['u_id']=$id;
        }
        public function buscarIdByNickName($usuario){
            $VARIABLE_SQL="SELECT users.id_user FROM `users` WHERE users.account_name = 'vilonk'";
            $query=$this->conexion->query($VARIABLE_SQL);
            foreach($query as $row):
                $id_u=$row['id_user'];
            endforeach;
            return $id_u;
        }
        public function conected(){
            $conectar=new conectar();
            $variable_pdo=$conectar->conexion();
            $this->conexion=$variable_pdo;
        }
    }
?>