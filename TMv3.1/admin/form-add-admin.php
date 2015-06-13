<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <title>Teresa Martin Sistema Webe</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    

  </head>
  <body>
      <div class="container">
                <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12 encabezado"><h1>Teresa Martin <span> Sistema web v0.1</span></h1></div>
                </div>
              
              <div class="row">
              <div class="col-xs-1 col-sm-1 col-md-2 vacio"></div>
              
              <div class="col-xs-10 col-sm-10 col-md-8 menu">
                    <div class="more">
                    <ul>
						<li class="selected"><a href="index.php">Menu</a></li>
                        <li><a href="tbl-mostrar-admin.php">Cancelar</a></li>				
                    </ul>
				    </div>
             </div>
              <div class="col-xs-1 col-sm-1 col-md-2 vacio"></div>
              </div>
              
              <div class="row">
              <div class="col-xs-1 col-sm-2 col-md-3 vacio"></div>
              <div class="col-xs-10 col-sm-8 col-md-6 subtitulo">
                  <h2> Agregar Administrador </h2>
              </div>
              
              <div class="col-xs-1 col-sm-2 col-md-3 vacio"></div>
              </div>
              
              <div class="row">
              
              <div class="col-xs-2 col-sm-3 col-md-4 vacio"></div>
              <div class="col-xs-8 col-sm-6 col-md-4 forms">
						 
						<form action="lib/agregar.php" method="post" class="formulario"> 
                            
                            <legend>Datos del personales </legend>

							<div class="input-group">
                            <span class="input-group-addon mitooltip" title="Matricula del Administrador" data-placement="top"><samp class="glyphicon glyphicon-star"></span></span>
                            <input type="text" name="id" class="form-control" placeholder="ID" onlyrear>
                            </div>
                    
                            <br>
                            
                            <div class="input-group">
                            <span class="input-group-addon mitooltip" title="Nombre del administrador" data-placement="top"><samp class="glyphicon glyphicon-star"></span></span>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" onlyrear>
                            </div>
                    
                            <br>
                            
                            <div class="input-group">
                            <span class="input-group-addon mitooltip" title="Primer apellido del administrador" data-placement="top" ><samp class="glyphicon glyphicon-star"></span></span>
                            <input type="text" name="paterno" class="form-control" placeholder="Apellido paterno" onlyrear>
                            </div>
                    
                            <br>
                            
                            <div class="input-group">
                            <span class="input-group-addon mitooltip" title="Segundo apellido del administrador" data-placement="top" ><samp class="glyphicon glyphicon-star"></span></span>
                            <input type="text" name="materno" class="form-control" placeholder="Apellido materno" onlyrear>
                            </div>
                    
                            <br>
                            
                            <legend>Datos del la cuenta </legend>
                            
                            <div class="input-group">
                            <span class="input-group-addon mitooltip" title="Contraseña del administrador" data-placement="top" ><samp class="glyphicon glyphicon-star"></span></span>
                            <input type="text" name="password" class="form-control" placeholder="Password" onlyrear>
                            </div>
                    
                            <br>
                            
                            <div class="input-group">
                            <span class="input-group-addon mitooltip" title="Todos debe de ser 2" data-placement="top" ><samp class="glyphicon glyphicon-star"></span></span>
                            <input type="text" name="privilegios" class="form-control" placeholder="Privilegios" onlyrear>
                            </div>
                    
                            <br>
                            <br>
                            <input type="submit" class="btn btn-success" value="ENVIAR">
                            <br>  
                            <br>  
                            <br>  
							
						</form>
						
					</div>
              <div class="col-xs-2 col-sm-3 col-md-4 vacio"></div>
               </div>
      </div>
               <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12 pie"><p>Sistema Web Teresa Martin 2015 todos los derechos reserbados</p></div>
              </div>
              
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script>$('.mitooltip').tooltip();</script>
  </body>
</html>
