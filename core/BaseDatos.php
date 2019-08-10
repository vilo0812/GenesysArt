<?php
    class ModeloBase extends EntidadBase{//modelo base llama a la base de datos
        private $table;

        public function __construct(){
            $this->table = (string) $table;
            parent::__construct($table);
        }
        public function ejecutarSql($query){
            $query=$this->db()->query($query);
            if($query){
                if($query->num_rows > 1){
                    while($row = $query->fetch_object()){
                        $resultset[]=$row;
                    }
                }elseif($query->num_rows == 1){
                    if($row=$query->fetch_object()){
                        $resultset=$row;
                    }else{
                        $resultset=true;
                    }
                }else{
                    $resultset=false;
                }
                return $resultset;
            }
        }
    }

?>