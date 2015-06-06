<?php
session_start();
if(!isset($_SESSION['login'])){
header("Location: ../login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Teresa Martin Sistema Web</title>
        <meta charset="UTF-8" />

        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css' />
    </head>
    
	
	<body style="background-image: url(images/pattern.png), url(images/fondo.png);">
        <div class="container">
            <h1>Teresa Martin <span> Sistema web v0.1</span></h1>
            <div class="content">
			 
                <ul class="bmenu">
                    <li><a href="alumnos.php"><b>Alumnos</b></a></li>
                    <li><a href="pagos.php"><b>Pagos</b></a></li>
                    <li><a href="reportes.php"><b>Reportes</b></a></li>
                    <li><a href="becas.php"><b>Becas</b></a></li>
                    <li><a href="ciclos.php"><b>Ciclos</b></a></li>
                    <li><a href="tbl-mostrar-admin.php"><b>Administradores</b></a></li>
					<li><a href="logout.php"><b>cerrar cession</b></a></li>
                </ul>
            </div>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    </body>
</html>