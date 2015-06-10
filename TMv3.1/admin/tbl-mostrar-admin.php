<?php
    include_once 'lib/Usuario.php';
    $usu1 = new Usuario();
    $datos = $usu1->get_user(null);
?>
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
                  <h2> Datos del Administrador </h2>
              </div>
              <div class="col-xs-1 col-sm-2 col-md-3 vacio"></div>
              </div>
              
              <div class="row">
              
              <div class="col-xs-1 col-sm-1 col-md-1 vacio"></div>
              <div class="col-xs-10 col-sm-10 col-md-10 tbl">
                  <br>
                  <div class="table-responsive">
                      <table class="table table-bordered table-hover">
                          <tr class="active">
                            <tr>
                                <td colspan="9"><a href="form-add-admin.php"><h3>Nuevo</h3></a></td>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>A par</th>
                                <th>A ma</th>
                                <th>Password</th>
                                <th>Privilegios</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
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
                                <td><a href="lib/eliminar.php?id=<?php echo $fila->idadministrador; ?>">icono eliminar</a></td>
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