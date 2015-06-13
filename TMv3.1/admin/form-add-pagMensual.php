<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <title>Teresa Martin Sistema Web</title>

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
                        <li><a href="alumnos.php">Alumnos</a></li>
                        <li><a href="form-add-pagMensual.php">Pagos</a></li>
                        <li><a href="reportes.php">Reportes</a></li>
						<li><a href="form-select-beca.php">Becas</a></li>
						<li><a href="form-select-ciclo.php">Ciclos</a></li>
						<li><a href="tbl-mostrar-admin.php">Admini</a></li>
						<li><a href="logout.php">Cerrar cession </a></li>
						
						
                    </ul>
				    </div>
             </div>
              <div class="col-xs-1 col-sm-1 col-md-2 vacio"></div>
              </div>
              
              <div class="row">
              <div class="col-xs-1 col-sm-2 col-md-3 vacio"></div>
              <div class="col-xs-10 col-sm-8 col-md-6 subtitulo">
                  <h2> Hacer un Pago </h2>
              </div>
					
					
					<div class="col-xs-1 col-sm-2 col-md-3 vacio"></div>
              </div>
              
              <div class="row">
              
              <div class="col-xs-2 col-sm-3 col-md-4 vacio"></div>
              <div class="col-xs-8 col-sm-6 col-md-4 forms">
                 
                  <form action="#" method="post" class="formulario"> 
                   
                   <legend>Datos del pago</legend>
                   
                   <br>
                   
                    <label class="mitooltip" title="Selecciona el tipo de beca para el alumno" data-placement="right">Mes</label>
                    <select name="grado" placeholder="mes" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    
                    </select>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon mitooltip" title="Verifica si la fechas es la de hoy" data-placement="top">Hoy</span>
                    <input type="text" name="hoy" 
                        value="<?php
								echo date("d/m/Y");			
							?>" 
                        class="form-control" readonly>
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon mitooltip" title="Verifica si es diferente con 29 dias mas repesto a la de arriva" data-placement="top">fecha limite</span>
                    <input type="text" name="fechlim" class="form-control" value=" <?php $hoy = time();
                        $sumar30 = 60*60*24*29; //29 dias
                        $nuevafecha = $hoy + $sumar30;
                        echo date("d/m/Y", $nuevafecha);?>" readonly >
                    </div>
                    
                    <br>
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon mitooltip" title="Agrega los recargos en caso de haber" data-placement="top"><span class="glyphicon glyphicon-paperclip"></span></span>
                    <input type="number" name="recargos" class="form-control" placeholder="Recargos">
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon mitooltip" title="Escribe la cantidad del pago a realizar" data-placement="top">$</span>
                    <input type="number" name="pago" class="form-control" placeholder="pago">
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon mitooltip" title="Escribe la matricula del estudiante" data-placement="top"><span class="glyphicon glyphicon-star-empty"></span></span>
                    <input type="number" name="nombre" class="form-control" placeholder="Matricula">
                    </div>
                    
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