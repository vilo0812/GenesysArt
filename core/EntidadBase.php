<?php
class EntidadBase{/*ORM personal*/
    private $table, $db, $conectar; 
    public function __construct($table){
        $this->table=(string)$table;
        require_once 'Conectar.php';
    }
    public function getAll(){
        $conectar=new conectar();
        $variable_pdo=$conectar->conexion();
        $VARIABLE_SQL="SELECT * FROM $this->table ORDER BY id DESC";
        $query=$variable_pdo->query($VARIABLE_SQL);
        return($query);
    }
    public function getById($id){
        $query=$this->db->query("SELECT * FROM $this->table WHERE id=$id");
        
        if($row=$query->fetch_object()){
            $resultset=$row;
        }
        return $resultset;
    }

    public function getBy($column,$value){       
        $query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value'");

        while($row = $query->fetch_object()){
            $resultset[]=$row;
        }
        return $resultset;
    }
    public function deleteById($id){
        $query=$this->db->query("DELETE FROM $this->table WHERE id=$id");
        return $query;
    } 
    public function deleteBy($column,$value){
        $query=$this->db->query("DELETE FROM $this->table WHERE $column='$value'");
        return $query;
    } 

}
?>