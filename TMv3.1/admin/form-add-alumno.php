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
                        <li><a href="alumnos.php">Cancelar</a></li>				
                    </ul>
				    </div>
             </div>
              <div class="col-xs-1 col-sm-1 col-md-2 vacio"></div>
              </div>
              
              <div class="row">
              <div class="col-xs-1 col-sm-2 col-md-3 vacio"></div>
              <div class="col-xs-10 col-sm-8 col-md-6 subtitulo">
                  <h2> Agregar alumno </h2>
              </div>
              
              <div class="col-xs-1 col-sm-2 col-md-3 vacio"></div>
              </div>
              
              <div class="row">
              
              <div class="col-xs-2 col-sm-3 col-md-4 vacio"></div>
              <div class="col-xs-8 col-sm-6 col-md-4 forms">
                 
                  <form action="form-add-pagMensual.php" method="post" class="formulario"> 
                   <legend>Datos del alumno </legend>
                   
                   <br>
                   
                    <div class="input-group">
                    <span class="input-group-addon"><samp class="glyphicon glyphicon-star"></span></span>
                    <input type="number" name="matricula" class="form-control" placeholder="Matricula">
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" name="aPa" class="form-control" placeholder="Apellido paterno">
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" name="aMa" class="form-control" placeholder="Apellido materno">
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                    <input type="text" name="nombre" class="form-control"  placeholder="Nombre">
                    </div>
                    
                    <br>
                    
                    <label>Sexo</label>
                    <select name="sexo" class="form-control">
                    <option value="1">Hombre</option>
                    <option value="2">Mujer</option>
                    </select>
                    
                    <br>
                    
                    <label>Grado</label>
                    <select name="grado" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    </select>
                    
                    <br>
                    
                    <label>Grupo</label>
                    <select name="grupo" class="form-control">
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    </select>
                    
                    <br>
                    
                    <label>Escolaridad</label>
                    <select name="escolaridad" class="form-control">
                    <option value="1">Prescolar</option>
                    <option value="2">Primaria</option>
                    </select>
                    
                    <br>
                    
                    <label>Beca</label>
                    <select name="beca" class="form-control">
                    <option value="1">25%</option>
                    <option value="2">50%</option>
                    <option value="3">75%</option>
                    <option value="4">90%</option>
                    <option value="5">100%</option>
                    <option value="6">0%</option>
                    </select>
                    
                    <br>
                    
                    
                    <legend>Datos del tutor </legend>
                    
                    <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" name="aPaT" class="form-control" placeholder="Apellido paterno">
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" name="aMaT" class="form-control" placeholder="Apellido materno">
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                    <input type="text" name="nombreT" class="form-control" placeholder="Nombre">
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-erase"></span></span>
                    <input type="number" name="telefono" class="form-control" placeholder="Telefono">
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
  </body>
</html>

