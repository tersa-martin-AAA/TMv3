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
                  <h2> Modulo Alumnos </h2>     
              </div>
              <div class="col-xs-1 col-sm-2 col-md-3 vacio"></div>
              </div>
              
              <div class="row rowsubmenu">
              
              <a href="form-add-alumno.php"><div class="col-xs-6 col-sm-3 col-md-3 aciones">
                 <h3>Inscripcion</h3>
                  <span class="label label-primary"><span class="glyphicon glyphicon-user" ></span></span>
                 <p> Descripcion del proceso</p>
                  </div></a>
              <a href="form-matricula-alumno.php"><div class="col-xs-6 col-sm-3 col-md-3 aciones">
                  <h3>Editar datos</h3>
                  <span class="label label-primary"><span class="glyphicon glyphicon-pencil" ></span></span>
                  <p> Descripcion del proceso</p>
                  </div></a>
               <a href="form-matricula-alumno.php"><div class="col-xs-6 col-sm-3 col-md-3 aciones">
                 <h3>Bajas de matricula</h3>
                 <span class="label label-primary"><span class="glyphicon glyphicon-remove" ></span></span>
                  <p> Descripcion del proceso</p>
                  </div></a>
              <a href="form-matricula-alumno.php"><div class="col-xs-6 col-sm-3 col-md-3 aciones">
                  <h3>Alta de matricula</h3>
                  <span class="label label-primary"><span class="glyphicon glyphicon-ok" ></span></span>
                  <p> Descripcion del proceso</p>
                  </div></a>
              
               </div>           
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 pie"><p>Sistema Web Teresa Martin 2015 todos los derechos reserbados</p></div>
        </div>
              
              
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>