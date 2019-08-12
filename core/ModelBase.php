<?php

class ModelBase{
    private $conexion;
    public function sesionStart($id){
        session_start();
        $_SESSION['u_id']=$id;
        $id=$_SESSION['u_id'];
    }
    /*public function sesionFull(){
        session_start();
        $id=$_SESSION['u_id'];
        //V//llenamos nombre
        $_SESSION['u_nombre']=$sesion['nombre'];
        $nombre=$_SESSION['u_nombre'];
        //V//llenamos usuario
        $_SESSION['u_usuario']=$sesion['usuario'];
        $usuario=$_SESSION['u_usuario'];
        //V//llenamos tipo usuario
        $_SESSION['u_id_tipo_usuario']=$sesion['id_tipo_usuario'];
        $id_tipo_usuario=$_SESSION['u_id_tipo_usuario'];
        //V//llenamos avatar
        $_SESSION['u_avatar']=$sesion['avatar'];
        $avatar=$_SESSION['u_avatar'];
    }*/
}