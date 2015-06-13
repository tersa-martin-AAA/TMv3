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
                        <li><a href="reportes.php">Cancelar</a></li>				
                    </ul>
				    </div>
             </div>
              <div class="col-xs-1 col-sm-1 col-md-2 vacio"></div>
              </div>
              
              <div class="row">
              <div class="col-xs-1 col-sm-2 col-md-3 vacio"></div>
              <div class="col-xs-10 col-sm-8 col-md-6 subtitulo">
                  <h2> Generador de listas </h2>
              </div>
              
              <div class="col-xs-1 col-sm-2 col-md-3 vacio"></div>
              </div>
              
              <div class="row">
              
              <div class="col-xs-2 col-sm-3 col-md-4 vacio"></div>
              <div class="col-xs-8 col-sm-6 col-md-4 forms">
                 
                  <form action="form-search2-gg.php" method="post" class="formulario"> 
                   <legend>Datos de la busqueda </legend>
                   
                   <br>
                    
                    <select name="grado" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    </select>
                    
                    <br>
                    
                    <select name="grupo" class="form-control">
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    </select>
                    
                    <br>
                    
                    <select name="escolaridad" class="form-control">
                    <option value="1">Prescolar</option>
                    <option value="2">Primaria</option>
                    </select>
                   
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
  </body>
</html>