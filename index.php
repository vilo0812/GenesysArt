<?php
require_once 'config/global.php';//dos variables, usuario y index
require_once 'core/controladorBase.php';//objeto que llama a la bd y a la orm
require_once 'core/ModelBase.php';//objeto que llama a la bd y a la orm
require_once 'core/ControladorFrontal.func.php';//ordena el nombre de la url
$frontal= new controladorFrontal();
if(isset($_GET["id"])){
    $url= $frontal->cargarControlador($_GET["id"]);
}else{
    $url= $frontal->cargarControlador(CONTROLADOR_DEFECTO);
}
$frontal->lanzarAccion($url);
?>