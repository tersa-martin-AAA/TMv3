<?php
require_once 'Conexio.php';

class Usuario{
    private static $instancia;
    private $con;
    
    private $idadministrador;
    private $nombre;
    private $a_paterno;
    private $a_materno;
    private $password;
    private $idprivilegios;

    public function __construct(){
        $this->con = Conexion::singleton_conexion();
    }
    
    public function set_user($id, $nombre, $a_pa, $a_ma, $pass, $idPri){
        $this->idadministrador=$id;
        $this->nombre=$nombre;
        $this->a_paterno=$a_pa;
        $this->a_materno=$a_ma;
        $this->password=$pass;
        $this->idprivilegios=$idPri;
    }


    /*public static function singleton_login(){
        if(!isset(self::$instancia)){
            $miclase=__CLASS__;
            self::$instancia=new $miclase;
        }
        return self::$instancia;
    }
    */
    public function login_user($username, $password){
        try{
            $sql="SELECT * FROM administrador WHERE nombre=? AND password=?";
            $consulta = $this->con->prepare($sql);
            $consulta->bindParam(1, $username);
            $consulta->bindParam(2, $password);
            $consulta->execute();
            $this->con=null;
            //si existe el usuario
            if($consulta->rowCount() == 1){
                return true;
            }
        }catch(PDOException $e){
            print "Error: ".$e->getMessage();
        }
    }
    
    public function get_user($id = null){
        try{
        $sql="SELECT * FROM administrador";
        if($id !=null){
            $sql.="WHERE idadministrador = ?"; 
        }
        $consulta = $this->con->prepare($sql);
        if($id !=null){
            $consulta->bindParam(1, $id);
        }
        
        $consulta->execute();
        $this->con=null;
        
        if($consulta->rowCount()>0){
            return $consulta;
        }else{
            return false;
        }
        }catch(PDOException $e){
            print "Error: ".$e->getMessage();
        }
    }
    
    public function add_user(){
        try {
           /* if($this->idadministrador == null){*/
                $sql="INSERT INTO administrador VALUES(?,?,?,?,?,?)";
           /* }else{
                $sql="UPDATE FROM administrador"
                        ."SET nombre =?, "
                        ."  a_paterno = ?,"
                        ."  a_materno =?, "
                        ."  password =?, "
                        ."  idprivilegios = ?"
                        ."  WHERE idadministrador";
            }*/
            
            $consulta =  $this->con->prepare($sql);
            
            $consulta->bindParam(1, $this->idadministrador);
            $consulta->bindParam(2, $this->nombre);
            $consulta->bindParam(3, $this->a_paterno);
            $consulta->bindParam(4, $this->a_materno);
            $consulta->bindParam(5, $this->password);
            $consulta->bindParam(6, $this->idprivilegios);
            
            /*if($this->idadministrador == null){
                $consulta->bindParam(7, $this->idadministrador);
            }*/
            
            $consulta->execute();
            $this->con=null;
            
        } catch (Exception $e) {
            print "Error: ".$e->getMessage();
        }
    }
    
    public function  delet_user($idadministrador){
        try {
            $sql="DELETE From administrador WHERE idadministrador=?";
            $consulta =  $this->con->prepare($sql);
            $consulta->bindParam(1, $idadministrador);
            
            $consulta->execute();
            $this->con=null;
            
            echo $sql;
            echo $idadministrador;
            
        } catch (PDOException $e) {
             print "Error: ".$e->getMessage();
             
        }
        
        }
}//--------------clase