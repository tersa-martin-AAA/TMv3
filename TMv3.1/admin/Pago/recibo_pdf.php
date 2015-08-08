<?php


//  -------- Get administradores --------


if(empty($mes)){
   header("Location: pagos.php?matricula=$matricula");
}else{
   include_once '../Clases/Alumno.php';
   $alumno = new Alumno();
   $datos = $alumno->get_alumno($matricula);
   $row = $datos->fetchObject();
   //var_dump ($row);

   include_once '../Clases/Grado.php';
   $grado = new Grado();
   $grado1 = $grado->get_grado();

   include_once '../Clases/Grupo.php';
   $grupo = new Grupo();
   $grupo1 = $grupo->get_grupo();

   include_once '../Clases/Escolaridad.php';
   $escolaridad = new Escolaridad();
   $escolaridad1 = $escolaridad->get_escolaridad();

   include_once '../Clases/Beca.php';
   $becas = new Beca();
   $becas1 = $becas->get_beca();

   $fecha_actual = date("Y-m-d", strtotime('-1 day'));
   $pago = new Pago1();

}


?>

<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <title>TERESA MARTIN</title>

      <!-- CSS DE AAA Y ASOCIADOS -->
      <link type="text/css" rel="stylesheet" href="../../assets/css/print_recibo.css">

   </head> 
   <body>


      <!-- ==================================================
CONTENIDO 
==================================================== -->


      <!-- ============== TABLA DE RECIBO ============== -->    
      <div class="span12">
         <!-- /widget -->                     
         <div class="widget widget-table action-table">
            <!-- /widget-header -->
            <div class="widget-content">

               <table class="table table-striped ">
                  <thead>
                     <tr>
                        <th rowspan="3" colspan="2" id="escudo"> <img src="../../assets/img/escudo.png" alt="escudo"> </th>
                        <th colspan="4" id="colegio"> Colegio Teresa Martin </th>
                     </tr>
                     <tr>
                        <th colspan="4" id="labor"> Labor, Virtus y Scientia</th>
                     </tr>
                     <tr>
                        <th colspan="4" id="recibo"> Recibo de Pago</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr><td colspan="6">&nbsp;</td></tr>
                     <tr>
                        <th colspan="4">Información de Alumo</th>
                        <th>Fecha</th>
                        <td class="table_information"><?php echo $fecha_actual;?></td>
                     </tr>
                     <tr>
                        <th>Nombre</th>
                        <td colspan="6" class="table_information"><?php echo "$row->nombre $row->a_paterno $row->a_materno"?></td>
                        <!--th> Folio </th>
<td> <?php //echo $new_folio;?> </td-->
                     </tr>
                     <tr>
                        <th>Grado</th>
                        <td class="table_information"><?php while ($grado2 = $grado1->fetchObject()){
   if($row->idgrado == $grado2->idgrado)
      echo $grado2->grado;
} ?></td>
                        <th>Grupo</th>
                        <td class="table_information"><?php
while ($grupo2 = $grupo1->fetchObject()){
   if($row->idgrupo == $grupo2->idgrupo)
      echo $grupo2->grupo;
}?> </td>
                        <th>Escolaridad</th>
                        <td class="table_information"><?php
while ($escolaridad2 = $escolaridad1->fetchObject()){
   if($row->idescolaridad == $escolaridad2->idescolaridad)
      echo $escolaridad2->escolaridad;
}?></td>
                     </tr>
                     <tr><td colspan="6">&nbsp;</td></tr>
                     <tr>
                        <th class="table_body .table_body_th">No. Folio</th>
                        <th colspan="2" class="table_body">Descripción</th>
                        <th class="table_body .table_body_th">Precio Unitario</th>
                        <th class="table_body .table_body_th">Beca</th>
                        <th class="table_body .table_body_th">Total</th>
                     </tr>

                     <?php
$colegiatura = 1500;
while ($becas2 = $becas1->fetchObject()){
   if($row->idbeca==$becas2->idbeca){
      $descuento1 = $becas2->descuento*$colegiatura;
      $descuento = number_format($descuento1, 2, '.', ' ');
   }         
}
$a = 0;
$subtotal = 0;
$diaactual = date("d");
$limite = 10;
$recargo= 5;
$subtotal2 = 0;
$date_m = array(

   "1" => "August",
   "2" => "August",
   "3" => "September",
   "4" => "October",
   "5" => "November",
   "6" => "December",
   "7" => "January",
   "8" => "January",
   "9" => "February",
   "10" => "March",
   "11" => "April",
   "12" => "May",
   "13" => "June"   
);
$date_m2 = array(

   "1" => "inscripcion",
   "2" => "agosto",
   "3" => "septiembre",
   "4" => "octubre",
   "5" => "noviembre",
   "6" => "diciembre",
   "7" => "reinscripcion",
   "8" => "enero",
   "9" => "febrero",
   "10" => "marzo",
   "11" => "abril",
   "12" => "mayo",
   "13" => "junio"
);



foreach($mes as $mes){
   
   $pago1 = $pago->get_pago($matricula, $mes, $fecha_actual);
   $pago2 = $pago1->fetchObject();
      
   $total_mes = $colegiatura-$descuento;
   $total_mes1 = number_format($total_mes, 2, '.', ' ');
   $colegiatura1 = number_format($colegiatura, 2, '.', ' ');
   $recargo1 = number_format($recargo, 2, '.', ' ');

   echo "<tr>
            <td>
               $pago2->folio
            </td>
            <td colspan='2'>
               $mes
            </td>
            <td>
               $ $colegiatura1
            </td>
            <td>
               $ $descuento
            </td>
            <td>
               $ $total_mes1
            </td>
         </tr>";

   foreach($date_m as $num_mes=>$mes_in){
      $mes_actual = date("F");
      if($mes_actual == $mes_in){
         $num_mes_in = $num_mes;
         //echo "<tr><td colspan='6'>num_mes_in $num_mes_in</td></tr>";
      }
   }

   foreach($date_m2 as $num_mes2=>$mes_es){
      if($mes == $mes_es){
         $num_mes_es = $num_mes2;
         //echo "<tr><td colspan='6'>num_mes_es $num_mes_es</td></tr>";
      }
   }

   if($num_mes_es <= $num_mes_in){
      if($num_mes_es == $num_mes_in or 1<2 or 7<8){
         if($diaactual > $limite){
            
            $recargos = ($diaactual-$limite)*$recargo;
            $total_recargo = number_format($recargos, 2, '.', ' ');
            echo "<tr>
            <td>
               &nbsp;
            </td>
            <td colspan='2'>
               Recargos de $mes
            </td>
            <td>
               $ $recargo1
            </td>
            <td>
               $ 0.00
            </td>
            <td>
               $ $total_recargo
            </td>
         </tr>";
            $subtotal2 = $subtotal + $total_recargo;
         }
      }else{
         
         $recargos = 30 *$recargo;
         $total_recargo = number_format($recargos, 2, '.', ' ');
         echo "<tr>
            <td>
               &nbsp;
            </td>
            <td colspan='2'>
               Recargos de $mes
            </td>
            <td>
               $ $recargo1
            </td>
            <td>
               $ 0.00
            </td>
            <td>
               $ $total_recargo
            </td>
         </tr>";
         $subtotal2 = $subtotal + $total_recargo;
      }
   }



   $subtotal1 = $subtotal + $total_mes1 + $subtotal2;
   $subtotal = $subtotal1;   

};



                     ?>
                     <tr>
                        <th colspan="4">&nbsp;</th>
                        <th>Total</th>
                        <th><?php 
$subtotal1 = number_format($subtotal, 2, '.', ' ');
echo "$ $subtotal1";?></th>
                     </tr>

                  </tbody>
                  <tfooter>
                     <tr><td colspan="6">&nbsp;</td></tr>
                     <tr>
                        <td colspan="6"> Este recibo es funcional para administración del colegio Teresa Martin. En caso de aclaracion o reclamos favor de comunicarse al Colegio Teresa Martin, 1 de Mayo # 123, Col. Centro, Tel. 123 456 7890</td>
                     </tr>
                  </tfooter>
               </table>
            </div>
            <!-- /widget-content --> 
         </div>
         <!-- /widget --> 
      </div>
      <!-- /span12 -->
   </body>
</html>

