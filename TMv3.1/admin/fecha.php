<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Teresa Martin Sistema Webs</title>
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
                        <li><a href="alumnos.html">Alumnos</a></li>
                        <li><a href="pagos.html">Pagos</a></li>
                        <li><a href="reportes.html">Reportes</a></li>
						<li><a href="becas.html">becas</a></li>
						<li><a href="ciclos.html">ciclos</a></li>
						<li><a href="logout.php">Cerrar cession </a></li>
						
                    </ul>
				</div>
				
				    <div class="contenido">
				
                        <h2> Modulo Alumnos </h2>

                        <a href="form-add-alumno.html"> <div class="divisor">
							<?php
								echo"hoy es dia".date("d/m/Y"). "y la hora es:".date("h:i:s");
								echo"<br> relog de prueba";			
							?>
                        </div></a>

                        <br>
                    </div>
            </div>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    </body>
</html>