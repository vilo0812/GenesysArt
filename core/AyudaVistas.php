<?php
    class AyudaVistas{
        public function url($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){/**clase que permite dibujar la url */
            $urlString="index.php?controller=".$controlador."&action=".$accion;
            return $urlString;
        }
    }

?>