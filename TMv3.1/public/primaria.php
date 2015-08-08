<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="AAA-Asociados">
      <link rel="shortcut icon" href="../assets/img/ico/favicon.png">

      <title>Teresa Martin</title>

      <!-- CSS DE BOOTSTRAP -->
      <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap2.css">

      <!-- CSS DE LA PLANTILLA -->
      <link type="text/css" rel="stylesheet" href="../assets/css/stylepublic.css">
      <link type="text/css" rel="stylesheet" href="../assets/css/jquery.bxslider.css"/>

      <!-- JAVASCRIPT DE PLANTILLA -->
      <script type="text/javascript" src="../assets/js/jquery-1.11.1.min.js"></script>


      <script type="text/javascript" src="../assets/js/jquery.bxslider.js"></script>
      <script type="text/javascript" src="../assets/js/modernizr.custom.js"></script>
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
<script src="../../assets/js/html5shiv.js"></script>
<script src="../../assets/js/respond.min.js"></script>
<![endif]-->
   </head>

   <body>

      <header class="header"> 
         <div class="container">

            <div class="row">

               <div class="col-md-3">
                  <div class="logo">
                     <a href="../index.php">Teresa Martin</a>
                  </div>
               </div>

               <!-- MENU -->
               <div class="col-md-9">
                  <div class="menu">
                     <div id="dl-menu" class="dl-menuwrapper">
                        <button class="dl-trigger">Abrir Menu</button>
                        <ul class="dl-menu">
                           <li><a href="../index.php">Inicio</a></li>
                           <li><a href="nosotros.php">Nosotros</a></li>
                           <li class="current"><a href="#">Servicios</a>
                              <ul class="dl-submenu">
                                 <li><a href="preescolar.php">Preescolar</a></li>
                                 <li><a href="primaria.php">Primaria</a></li>
                                 <li><a href="pastoral.php">Pastoral</a></li>
                                 <li><a href="familia.php">Familia</a></li>
                              </ul>
                           </li>
                           <li><a href="noticias.php">Noticias</a></li>
                           <li><a href="contacto.php">Contacto</a></li>
                           <?php
if(isset($_SESSION['nombre'])){
   echo "<li><a href='#'>Tareas de Administrador</a>
                              <ul class='dl-submenu'>
                                 <li><a href='../admin/index.php'>Inicio</a></li>
                                 <li><a href='../admin/Alumno/alumnos.php'>Alumnos</a></li>
                                 <li><a href='../admin/Pago/pagos.php'>Pagos</a></li>
                                 <li><a href='../admin/Reportes/reportes.php'>Reportes</a></li>
                                 <li><a href='../admin/Beca/becas.php'>Becas</a></li>
                                 <li><a href='../admin/Ciclo/ciclos.php'>Ciclos</a></li>
                                 <li><a href='../admin/Administrador/administradores.php'>Administradores</a></li>
                                 <li><a href='../admin/Configuracion/configpublic.php'>Pagina Publica</a></li>
                              </ul>
                           </li>";
}else{
   echo "<li><a href='../admin/index.php'>Administrador</a>";
}
?>                           
                        </ul>
                     </div> 
                  </div><!-- /.menu --> 
               </div>

            </div>

         </div>
      </header>	

      <div class="page_banner">

         <!-- IMAGEN DE INICIO start page_title -->
         <img src="images/page_banner_about.jpg" alt="" />
         <!-- end page_title --> 

      </div>

      <!-- start content -->
      <div class="content">

         <!-- start block -->		
         <div class="block">
            <div class="container">

               <!-- BLOCK SOBRE PREESCOLAR -->
               <h2 class="headline">Primaria</h2>
               <span class="line">
                  <span class="sub-line"></span>
               </span>

               <div class="row">

                  <div class="col-md-6">
                     <p>Para el Colegio Teresa Martin la primaria es la etapa más intensa de formación de hábitos y valores como fuerza que sustenta aprendizajes fundamentales como son la conciencia del trabajo bien hecho y el cumplimiento del deber.</p><p>

                     Se propicia la armonía y alegría de la convivencia y amistad que surge de reconocer a Dios como Padre y tratar a los demás como hermanos. Se brindan las herramientas para cimentar conocimientos que suponen las etapas posteriores de estudio.</p><br>
                     
                        <a href="solicitud_alumno.php" class="btn btn-default"> Inscribirme </a>
                    
                     <br>

                  </div>


                  <div class="col-md-6">
                     <img class="gym-club" alt="img" src="../assets/img/eventos/evento2.jpg">		
                  </div>

               </div>

            </div><!-- end container -->
         </div>
         <!-- end block -->

         <!-- BLOCK DE SERVICIOS -->	
         <div class="block">

            <div class="container">

               <div class="row">

                  <div class="col-md-12">
                     <h2 class="headers">Requisitos</h2>
                     <span class="line" >
                        <span class="sub-line" ></span>
                     </span>

                     <div class="row">

                        <div class="col-md-4">
                           <ul class="nav nav-pills nav-stacked services">
                              <li class="active"><a href="#tab_a" data-toggle="pill"><i class="fa fa-male"></i>1er. Grado</a></li>
                              <li><a href="#tab_b" data-toggle="pill"><i class="fa fa-user"></i>2do. a 6to. Grado</a></li>
                           </ul>
                        </div>

                        <div class="tab-content col-md-8">
                           <div class="tab-pane active" id="tab_a">
                              <h4>1er. Grado</h4>
                              <ul>
                                 <li>Original y 3 copias del acta de nacimiento</li>
                                 <li>Original y 2 copias del certificado de preescolar</li>
                                 <li>Original y copia de cartilla de vacunación</li>
                                 <li>6 años cumplidos al 1º de septiembre</li>
                                 <li>Original y 2 copias del CURP</li>
                              </ul>
                           </div>
                           <div class="tab-pane" id="tab_b">
                              <h4>2do. a 6to. Grado</h4>                           
                              <ul>
                                 <li>Original y 3 copias del acta de nacimiento</li>
                                 <li>Original y 2 copias de la boleta del grado anterior</li>
                                 <li>Original y 2 copias del CURP</li>
                                 <li>Carta original de buena conducta</li>
                              </ul>  

                           </div>                                                

                        </div><!-- tab content -->

                     </div>

                  </div>					



               </div>  

            </div>

         </div>
         <!-- end block -->

         <!-- BLOCK DE RECONOCIMIENTOS -->
         <div class="block">
            <div class="container">

               <h2 class="headline">Reconocimientos/Alianzas</h2>
               <span class="line">
                  <span class="sub-line"></span>
               </span>	

               <ul id="clients"> 
                  <li><img src="../assets/img/alianzas/alianza1.png" alt="" width="200" ></li>
                  <li><img src="../assets/img/alianzas/alianza2.png" alt="" width="200"></li>
                  <li><img src="../assets/img/alianzas/alianza3.png" alt="" width="200"></li>
                  <li><img src="../assets/img/alianzas/alianza4.png" alt="" width="200"></li>
                  <li><img src="../assets/img/alianzas/alianza1.png" alt="" width="200" ></li>
                  <li><img src="../assets/img/alianzas/alianza2.png" alt="" width="200"></li>
                  <li><img src="../assets/img/alianzas/alianza3.png" alt="" width="200"></li>
                  <li><img src="../assets/img/alianzas/alianza4.png" alt="" width="200"></li>
               </ul>

            </div>
         </div>

      </div>
      <!-- end content -->

      <!-- FOOTER -->
      <footer>
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <h3>Teresa Martin</h3>
                     <p>Educando a la niñez, adolescencia y juventud en el dinamismo de la ciencia y valores de vida, el cultivo de su interioridad que fortalece el espíritu y dispone para el compromiso y responsabilidad consigo mismos, la familia, la saciedad y la patria.
                     </p>
                     <p class="copyright">&copy; 2014 Derechos Reservados para Teresa Martin</p>


                  </div>
                  <div class="col-md-4">
                     <h3>Contacto Acámbaro</h3>

                     <p>1 de Mayo # 123</p>
                     <p>Col. Centro</p>
                     <p>Tel. 123 456 7890</p>

                     <ul class="get-social">
                        <li>
                           <a href="#">
                              <i class="fa fa-facebook"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <i class="fa fa-twitter"></i>
                           </a>
                        </li>

                        <li>
                           <a href="#">
                              <i class="fa fa-linkedin"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <i class="fa fa-google-plus"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <i class="fa fa-pinterest"></i>
                           </a>
                        </li>

                     </ul>



                  </div>


               </div>
            </div>
         </div>

      </footer>


      <!-- JavaScript
================================================== -->

      <!-- JAVASCRIP DE BOOTSTRAPT -->
      <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

      <!-- JAVASCRIP DE PLANTILLA -->
      <script type="text/javascript" src="../assets/js/jquery.dlmenu.js"></script>
      <script type="text/javascript" src="../assets/js/jquery.flexisel.js"></script>
      <script type="text/javascript" src="../assets/js/jquery.prettyPhoto.js"></script>
      <script type="text/javascript" src="../assets/js/jquery.easing.1.3.js"></script>
      <script type="text/javascript" src="../assets/js/jquery.ajax-contact-form.js"></script>
      <script type="text/javascript" src="../assets/js/script.js"></script>

   </body>
</html>
