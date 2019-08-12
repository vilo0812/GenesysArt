<?php

class ControllerBase{
    public function __construct(){/*V*cargador de los modelos */
        require_once 'EntidadBase.php';//llama mi orm
        require_once 'BaseDatos.php';//llama a la db
        require_once 'Conectar.php';//llamamos a conectar
        foreach(glob("model/*.php") as $file){
            require_once $file;
        }
    }
    public function viewDefect($vista){
        require_once 'view/'.$vista.'View.php';
    }
    public function view($vista, $datos){/*V* pasas el nombre de la vista y array con datos y agarra el id asociativo y lo convierte en un indice */
        $datos=$datos;
        require_once 'view/'.$vista.'View.php';

    }
    public function redirect(){/*V*clase que direcciona */
        header("Location:index.php");
    }
    public function cargarModelo($model){//agarra el nombre de la url y le termina de colocar el nombre de el controlado ejemplo si pasan "usuario" esta funcion la convertira en usuarioController
        $model= ucwords($model)."Model";
        $strFileModel='model/'.$model.'.php';
        if(!is_file($strFileModel)){//verifica que el controlador es el controllador por defecto que seria en este caso "usuarios"
            $strFileModel='model/'.ucwords(CONTROLADOR_DEFECTO).'Model.php';
        }
        $this->cargarAccion($strFileModel);//devuelvo la url
    }
    function cargarAccion($model){//con los datos de la url y el nombre de el controlador lo llamamos
        require_once "$model";
    }
    public function variablesGet($variable){
        $var = $_POST[$variable];
        return $var;
    }
    
}
?>