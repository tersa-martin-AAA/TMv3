<?php

$idadministrador=$_GET['id'];
echo $id;

include_once 'Usuario.php';
$usu1 = new Usuario();

$usu1->delet_user($idadministrador);

header("Location: ../tbl-mostrar-admin.php");