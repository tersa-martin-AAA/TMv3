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
						<li class="selected"><a href="index.php">Menu</a></li>
                        <li><a href="becas.php">cancelar y regresar</a></li>

						
                    </ul>
				</div>
				
				<div class="contenido">
				
					<h2> Tabla de Becas </h2>
					
					<table class="tabla" border="2px">
						<caption><b>Becas Actuales</b></caption>
						<tr>
							<td>Nombre</td>
							<td>Descuento</td>
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
						<tr>
							<td>nombre Beca</td>
							<td>descuento beca</td>
							<td><a href="form-add-beca.php">icono editar</a></td>
							<td>icono eliminar</td>
						</tr>
					</table>
					
					
				</div>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    </body>
</html>