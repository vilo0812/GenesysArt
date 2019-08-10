<?php
    class controladorFrontal{
        function cargarControlador($controller){//agarra el nombre de la url y le termina de colocar el nombre de el controlado ejemplo si pasan "usuario" esta funcion la convertira en usuarioController
            $controlador= ucwords($controller)."Controller";
            $strFileController='controller/'.$controlador.'.php';
            if(!is_file($strFileController)){//verifica que el controlador es el controllador por defecto que seria en este caso "usuarios"
                $strFileController='controller/'.ucwords(CONTROLADOR_DEFECTO).'Controller.php';
            }
            return   $strFileController;//devuelvo la url
        }
        public function lanzarAccion($url){
                if(isset($_GET["id"])){
                    if($_GET["id"]==='home'){
                        $this->cargarAccion($url, ACCION_DEFECTO);//le paso la url y el nombre de la vista como la accion
                    }else{
                        if(isset($_GET["id"]) && isset($_GET["cd"])){
                            $this->cargarAccionMultiple($url,$_GET["id"],$_GET["cd"]);//le paso la url y el nombre de la vista como la accion
                        }else{
                            $this->cargarAccion($url,$_GET["id"]);//le paso la url y el nombre de la vista como la accion
                        }
                    }
                }else{
                    $this->cargarAccion($url,ACCION_DEFECTO);//le paso la url y el nombre de la vista como la accion
                }
            }
            function cargarAccion($url, $action){//con los datos de la url y el nombre de el controlador lo llamamos
                $action=$action;
                require_once "$url";
            }
            function cargarAccionMultiple($url, $action,$cd){//con los datos de la url y el nombre de el controlador lo llamamos
                $action=$action;
                $cd=$cd;
                require_once "$url";
            }
        }
        
        
    ?>