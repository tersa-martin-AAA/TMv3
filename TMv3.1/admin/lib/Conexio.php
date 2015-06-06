<?php

class Conexion{
    private static $instancia; //variable de instancia
    private $con; // variable de conexion
    
    private function __construct(){
        try{
            $this->con = new PDO("mysql:host=localhost;dbname=teresamartin",
                    'root','');
            $this->con->exec("SET CHARSET SET utf8");
        }catch(PDOException $e){
            echo "Error: ". $e->getMessage();
            die();
        }
    }
    
    public static function singleton_conexion(){
        if(!isset(self::$instancia)){
            $miclase=__CLASS__;
            self::$instancia=new $miclase;
        }
        return self::$instancia;
    }
    public function __clone(){
        trigger_error('La clonacion no esta permitida', E_USER_ERROR);
    }
    
    // FUNCIO QUE PREPARA LA CONSULTA PARA EVITAR LA SQL INYECCION
    public function prepare($sql){
        return $this->con->prepare($sql);
    }
}
