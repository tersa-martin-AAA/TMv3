<?php
    include_once 'lib/Usuario.php';
    $usu1 = new Usuario();
    $datos = $usu1->get_user(null);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Teresa Martin Sistema Web</title>
        <meta charset="UTF-8" />

        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" media="all" href="css/whhg.css" />
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css' />
    </head>
    
	
	<body style="background-image: url(images/pattern.png), url(images/Fondo.jpg);">
        <div class="container">
            <h1>Teresa Martin <span> Sistema web v0.1</span></h1>
            <div class="content">
				<div class="more">
                    <ul>
						<li class="selected"><a href="index.html">Menu</a></li>
                        <li><a href="becas.html">cancelar y regresar</a></li>

						
                    </ul>
				</div>
				
				<div class="contenido">
				
					<h2> Tabla de aministradores </h2>
					
					<table class="tabla" border="2px">
						<caption><b>Administradores actuales</b></caption>
						<tr>
                            <td colspan="9"><a href="form-add-admin.php">Nuevo</a></td>
                        </tr>
						<tr>
							<td>ID</td>
                            <td>Nombre</td>
							<td>A par</td>
                            <td>A ma</td>
                            <td>Password</td>
                            <td>Privilegios</td>
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
                                                <?php
                                                while($fila=$datos->fetchObject()){
                                                ?>
						<tr>
							<td><?php echo $fila->idadministrador?></td>
							<td><?php echo $fila->nombre?></td>
                                                        <td><?php echo $fila->a_paterno?></td>
                                                        <td><?php echo $fila->a_materno?></td>
                                                        <td><?php echo $fila->password?></td>
                                                        <td><?php echo $fila->idprivilegios?></td>
                                                        <td><a href="form-add-admin.php">icono editar</a></td>
							<td>icono eliminar</td>
						</tr>
                                                <?php
                                                }
                                                ?>
					</table>
					
					
				</div>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    </body>
</html>