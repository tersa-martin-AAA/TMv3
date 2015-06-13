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
                        <li><a href="alumnos.php">Cancelar</a></li>				
                    </ul>
				    </div>
             </div>
              <div class="col-xs-1 col-sm-1 col-md-2 vacio"></div>
              </div>
              
              <div class="row">
              <div class="col-xs-1 col-sm-2 col-md-3 vacio"></div>
              <div class="col-xs-10 col-sm-8 col-md-6 subtitulo">
                  <h2> Buscar por matricula </h2>
              </div>
              
              <div class="col-xs-1 col-sm-2 col-md-3 vacio"></div>
              </div>
              
              <div class="row">
              
              <div class="col-xs-2 col-sm-3 col-md-4 vacio"></div>
              <div class="col-xs-8 col-sm-6 col-md-4 forms">
                 
                  <form action="form-add-pagMensual.php" method="post" class="formulario">
                   <legend>Ingrese Matricula </legend>
                   
                   <br>
                   
                    <div class="input-group">
                        <span class="input-group-addon mitooltip" title="Ingresa la matricula del alumno" data-placement="top"><span class="glyphicon glyphicon-star-empty"></span></span>
                    <input type="number" name="matricula" class="form-control" placeholder="Matricula">
                    </div>

                    <br>
                    <input type="submit" class="btn btn-primary" value="ENVIAR">
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
