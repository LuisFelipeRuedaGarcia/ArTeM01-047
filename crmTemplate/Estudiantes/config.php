<?php
require_once("db.php");

class Config{

    private $id;
    private $nombres;
    private $direccion;
    private $logros;
    protected $dbCnx;

    public function __construct($id = 0, $nombres = null, $direccion = null, $logros = null){
        $this->id = $id;
        $this->nombres = $nombres;
        $this->direccion = $direccion;
        $this->logros = $logros;
        $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setNombres($nombres){
        $this->nombres = $nombres;
    }
    public function getNombres(){
        return $this->nombres;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function setLogros($logros){
        $this->logros = $logros;
    }
    public function getLogros(){
        return $this->logros;
    }

    public function insertData(){
        try {
            $stm = $this-> dbCnx -> prepare("INSERT INTO campers (nombres, direccion, logros) values (?,?,?)");
        $stm -> execute([$this->nombres, $this->direccion, $this->logros]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

?>