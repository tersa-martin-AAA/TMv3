<?php
include_once 'Usuario.php';
$usu1 = new Usuario();


$id=$_POST['id'];
$nombre= $_POST['nombre'];
$a_pa= $_POST['paterno'];
$a_ma= $_POST['materno'];
$pass= $_POST['password'];
$idPri= $_POST['privilegios'];

/*if(!isset($_POST['id'])){
    $id =$_POST['id'];
}else{
    $id = null;
}*/

$usu1->set_user($id, $nombre, $a_pa, $a_ma, $pass, $idPri);
$usu1->add_user();

