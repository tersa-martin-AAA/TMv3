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
         
         
         
         
         
         
         
         
         
          
           <h2> seccion de accione</h2> 
            
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
                        <li><a href="pagos.php">Pagos</a></li>
                        <li><a href="reportes.php">Reportes</a></li>
						<li><a href="becas.php">becas</a></li>
						<li><a href="ciclos.php">ciclos</a></li>
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
                 <p> Descripcion del proceso</p>
                  </div></a>
              <a href="form-matricula-alumno.php"><div class="col-xs-6 col-sm-3 col-md-3 aciones">
                  <h3>Editar datos</h3> 
                  <p> Descripcion del proceso</p>
                  </div></a>
               <a href="form-matricula-alumno.php"><div class="col-xs-6 col-sm-3 col-md-3 aciones"><h3>Bajas de matricula</h3> 
                  <p> Descripcion del proceso</p>
                  </div></a>
              <a href="form-matricula-alumno.php"><div class="col-xs-6 col-sm-3 col-md-3 aciones">
                  <h3>Alta de matricula</h3> 
                  <p> Descripcion del proceso</p>
                  </div></a>
              
              <div class="col-xs-6 col-sm-3 col-md-3 aciones">accion</div></a>
              <div class="col-xs-6 col-sm-3 col-md-3 aciones">accion</div></a>
              <div class="col-xs-6 col-sm-3 col-md-3 aciones">accion</div></a>
              <div class="col-xs-6 col-sm-3 col-md-3 aciones">accion</div></a>
              
               </div>
               
               <div class="row">
                   <div class="col-xs-12 col-sm-12 col-md-12 pie"><p>Sistema Web Teresa Martin 2015 todos los derechos reserbados</p></div>
              </div>

             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
              
              <h2> seccion de formularios</h2> 
            
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
                        <li><a href="pagos.php">Pagos</a></li>
                        <li><a href="reportes.php">Reportes</a></li>
						<li><a href="becas.php">becas</a></li>
						<li><a href="ciclos.php">ciclos</a></li>
						<li><a href="logout.php">Cerrar cession </a></li>
						
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
                   <p> substr para separar los campos de cada caja </p>
                   <legend>Datos del alumno </legend>
                   
                   <br>
                   
                    <div class="input-group">
                    <span class="input-group-addon">M</span>
                    <input type="number" name="matricula" class="form-control" placeholder="Matricula">
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon">AP</span>
                    <input type="text" name="aPa" class="form-control" placeholder="Apellido paterno">
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon">AM</span>
                    <input type="text" name="aMa" class="form-control" placeholder="Apellido materno">
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon">N</span>
                    <input type="text" name="nombre" class="form-control"  placeholder="Nombre">
                    </div>
                    
                    <br>
                    
                    <select name="sexo" class="form-control">
                    <option value="1">Hombre</option>
                    <option value="2">Mujer</option>
                    </select>
                    
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
                    
                    <select name="beca" class="form-control">
                    <option value="1">25%</option>
                    <option value="2">50%</option>
                    <option value="3">75%</option>
                    <option value="4">90%</option>
                    <option value="5">100%</option>
                    <option value="6">0%</option>
                    </select>
                    
                    <br>
                    
                    
                    <legend>Datos del alumno </legend>
                    
                    <div class="input-group">
                    <span class="input-group-addon">N</span>
                    <input type="text" name="aPaT" class="form-control" placeholder="Apellido paterno">
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon">N</span>
                    <input type="text" name="aMaT" class="form-control" placeholder="Apellido materno">
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon">N</span>
                    <input type="text" name="nombreT" class="form-control" placeholder="Nombre">
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon">N</span>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    
                    <br>
                    
                    <div class="input-group">
                    <span class="input-group-addon">N</span>
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
               
               <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12 pie"><p>Sistema Web Teresa Martin 2015 todos los derechos reserbados</p></div>
              </div>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              <h2> seccion de tablas</h2> 
            
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
                        <li><a href="pagos.php">Pagos</a></li>
                        <li><a href="reportes.php">Reportes</a></li>
						<li><a href="becas.php">becas</a></li>
						<li><a href="ciclos.php">ciclos</a></li>
						<li><a href="logout.php">Cerrar cession </a></li>
						
                    </ul>
				    </div>
              </div>
              <div class="col-xs-1 col-sm-1 col-md-2 vacio"></div>
              </div>
              
              <div class="row">
              <div class="col-xs-1 col-sm-2 col-md-3 vacio"></div>
              <div class="col-xs-10 col-sm-8 col-md-6 subtitulo">
                  <h2> Datos del alumno </h2>
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
                              <th>col 1</th>
                              <th>col 2</th>
                              <th>col 3</th>
                              <th>col 4</th>
                              <th>col 5</th>
                              <th>col 6</th>
                              <th>col 7</th>
                              <th>col 8</th>
                              <th>col 9</th>
                              <th>col 10</th>
                              <th>col 11</th>
                              <th>col 12</th>
                              <th>col 13</th>
                          </tr>
                          
                          <tr>
                              <td>1</td>
                              <td>2</td>
                              <td>3</td>
                              <td>4</td>
                              <td>5</td>
                              <td>6</td>
                              <td>7</td>
                              <td>8</td>
                              <td>9</td>
                              <td>10</td>
                              <td>11</td>
                              <td>12</td>
                              <td>13</td>
                          </tr>
                          
                          <tr>
                              <td>1</td>
                              <td>2</td>
                              <td>3</td>
                              <td>4</td>
                              <td>5</td>
                              <td>6</td>
                              <td>7</td>
                              <td>8</td>
                              <td>9</td>
                              <td>10</td>
                              <td>11</td>
                              <td>12</td>
                              <td>13</td>
                          </tr>
                      </table>
                  </div>
              </div>
              <div class="col-xs-1 col-sm-1 col-md-1 vacio"></div>
               </div>
               
               <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12 pie"><p>Sistema Web Teresa Martin 2015 todos los derechos reserbados</p></div>
              </div>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
             <div class="row">
              
               <div class="col-xs-12 col-sm-6 col-md-3 columna">1</div>
               <div class="col-xs-12 col-sm-6 col-md-3 columna">2</div>
               <div class="col-xs-12 col-sm-6 col-md-3 columna">3</div>
               <div class="col-xs-12 col-sm-6 col-md-3 columna">4</div>
           </div>
          
          <div class="row">
               <div class="col-xs-1 columna">1</div>
               <div class="col-xs-1 columna">2</div>
               <div class="col-xs-1 columna">3</div>
               <div class="col-xs-1 columna">4</div>
               <div class="col-xs-1 columna">5</div>
               <div class="col-xs-1 columna">6</div>
               <div class="col-xs-1 columna">7</div>
               <div class="col-xs-1 columna">8</div>
               <div class="col-xs-1 columna">9</div>
               <div class="col-xs-1 columna">10</div>
               <div class="col-xs-1 columna">11</div>
               <div class="col-xs-1 columna">12</div>
               
           </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
