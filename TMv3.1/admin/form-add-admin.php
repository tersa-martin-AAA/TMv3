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
                        <li><a href="becas.html">cancelar y regresar</a></li>

						
                    </ul>
				</div>
				
				<div class="contenidoform">
				
					<h2> Agregar Administrador </h2>
					
					<div class="formularios">
						 
						<form action="lib/agregar.php" method="post" class="formulario"> 

							<div class="etiqueta">
								<label>ID unico</label>
							</div>
							<div class="texbox">
								<input type="text" name="id">
							</div>
							<br>
							<br>
                                                        
                                                        <div class="etiqueta">
								<label>Nombre</label>
							</div>
							<div class="texbox">
								<input type="text" name="nombre">
							</div>
							<br>
							<br>
							<div class="etiqueta">
								<label>Apellido Paterno</label>
							</div>
							<div class="texbox">
								<input type="text" name="paterno">
							</div>
							<br>
							<br>
							<div class="etiqueta">
								<label>Apellido Materno</label>
							</div>
							<div class="texbox">
								<input type="text" name="materno">
							</div>
							<br>
							<br>
							<div class="etiqueta">
								<label>Password</label>
							</div>
							<div class="texbox">
								<input type="text" name="password">
							</div>
								<br>
								<br>
				            <div class="etiqueta">
								<label>Tipo de privilegios</label>
							</div>
							<div class="texbox">
								<input type="int" name="privilegios">
							</div>
								<br>
								<br>
								<input type="submit" value="ENVIAR">
							
						</form>
						
					</div>
					
					
				</div>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    </body>
</html>