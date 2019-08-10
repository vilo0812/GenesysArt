<?php
class Conectar{
    private $driver, $host, $user, $password, $database, $charset;
    public function __construct() {
        $db_cfg = require_once 'config/database.php';
        $this->driver = $db_cfg['driver'];
        $this->host = $db_cfg['host'];
        $this->user = $db_cfg['user'];
        $this->password = $db_cfg['password'];
        $this->database = $db_cfg['database'];
        $this->charset = $db_cfg['charset'];
    }
    public function conexion(){
        if($this->driver=="mysql" || $this->driver==null){
            $variable_pdo = new PDO('mysql:host='.$this->host.'; dbname='.$this->database,$this->user,$this->password);
            
        }
        return $variable_pdo;
    }
    //OTROS METODOS PARA CARGAR QUERY BUILDER U ORMS, ETC
}
?>