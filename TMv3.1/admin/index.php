<?php
session_start();
if(!isset($_SESSION['login'])){
header("Location: ../login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Teresa Martin Sistema Web</title>
        <meta charset="UTF-8" />

        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css' />
    </head>
    
	
	<body style="background-image: url(images/pattern.png), url(images/fondo.png);">
        <div class="container">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
           <div class="page-header">
            <h1>Teresa Martin <span> Sistema web v0.1</span></h1>
           </div>
          </a>
               <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                 <div class="panel-body">
                 <div class="alert alert-info" role="alert">
                <h2>Bienvenido a la guía rápida de introducción aquí están tus datos rectifica que sean los correctos</h2>
                <br>
                 </div>

                <button type="button" class="btn btn-lg btn-danger center-block" id="btn-info-1" data-toggle="popover" 
                    title="Tu nombre completo" 
                    data-content="Tue nombre es : _________ tu eres:_________ tu password es:________">
                    Mis datos
                </button>

                <br>
                <br>

                <div class="alert alert-info btn-group " role="alert group">

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-modal-1">Primer paso</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-modal-2">Segundo paso</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-modal-3">Tercer paso</button>

                </div>

                <!--   -------------------------modal 1 ----------------------     -->

                    <div class="modal fade bs-modal-1"  tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Primer paso</h4>
                              </div>
                              <div class="modal-body">
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo 
                                    risus, porta ac consectetur ac, vestibulum at eros.Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 
                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibusdolor auctor.Aenean lacinia bibendum nulla sed consectetur. 
                                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non 
                                    metus auctor fringilla.</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                          </div>
                        </div>

                    </div>

                    <!--   -------------------------modal 2 ----------------------     -->

                    <div class="modal fade bs-modal-2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Segundo paso</h4>
                              </div>
                              <div class="modal-body">
                                <div class="alert alert-info" role="alert">
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo 
                                    risus, porta ac consectetur ac, vestibulum at eros.Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 
                                    Vivamus sagittis lacus vel augue laoreet rutrum faucibusdolor auctor.Aenean lacinia bibendum nulla sed consectetur. 
                                    Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non 
                                    metus auctor fringilla.
                                </p>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                          </div>
                        </div>

                    </div>

                    <!--   -------------------------modal 3 ----------------------     -->

                    <div class="modal fade bs-modal-3" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Tercer paso</h4>
                              </div>
                              <div class="modal-body">
                                                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                        <!-- Indicators -->
                                                        <ol class="carousel-indicators">
                                                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                        </ol>

                                                        <!-- Wrapper for slides -->
                                                        <div class="carousel-inner" role="listbox">
                                                          <div class="item active">
                                                            <img src="img/Boopstrap.png" alt="...">
                                                            <div class="carousel-caption">
                                                              Bootstrap
                                                            </div>
                                                          </div>
                                                          <div class="item">
                                                            <img src="img/Php.png" alt="...">
                                                            <div class="carousel-caption">
                                                              Php
                                                            </div>
                                                          </div>
                                                          <div class="item">
                                                            <img src="img/Tw.png" alt="...">
                                                            <div class="carousel-caption">
                                                              Html 5 - Css 3 - Java script
                                                            </div>
                                                          </div>
                                                        </div>

                                                        <!-- Controls -->
                                                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                          <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                          <span class="sr-only">Next</span>
                                                        </a>
                                                      </div>
                                                      <br>
                                                      <br>
                                                      <p>las tecnologias usadas en esta aplicacion</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                          </div>
                        </div>
                    </div>


             </div>
               </div>

            <div class="content">
			 
                <ul class="bmenu">
                    <li><a href="alumnos.php"><b>Alumnos</b></a></li>
                    <li><a href="form-add-pagMensual.php"><b>Pagos</b></a></li>
                    <li><a href="reportes.php"><b>Reportes</b></a></li>
                    <li><a href="form-select-beca.php"><b>Becas</b></a></li>
                    <li><a href="form-select-ciclo.php"><b>Ciclos</b></a></li>
                    <li><a href="tbl-mostrar-admin.php"><b>Administradores</b></a></li>
					<li><a href="logout.php"><b>cerrar cession</b></a></li>
                </ul>
            </div>
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	<script>
		$('#btn-info-1').popover('show')
		$('#btn-info-1').popover('hide')
	</script>
  </body>
</html>