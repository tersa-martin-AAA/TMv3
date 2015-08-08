<?php
session_start();
include_once '../Clases/Pago1.php';

if(!isset($_POST['matricula'])){
   header("Location: pagos.php");
}else{
   $nuevoresultado = new Pago1();
   $matricula = $_POST['matricula'];
   $folio = 0;
   $fechaactual= date("Y-m-d", strtotime('-1 day'));
   $limite = 10;
   $fechalimite = date("Y-m")."-10";
   $diaactual = date("d");
   $idAdministrador= $_SESSION['idAdministrador'];
   $subtotal = 0;
   $recargo= 5;
   $recargos = 0;
   $colegiatura = 1500;
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


   if(!empty($_POST['mes'])){

      foreach($_POST['mes'] as $mes){

         foreach($date_m as $num_mes=>$mes_in){
            $mes_actual = date("F");
            if($mes_actual == $mes_in){
               $num_mes_in = $num_mes;
            }
         }

         foreach($date_m2 as $num_mes2=>$mes_es){
            if($mes == $mes_es){
               $num_mes_es = $num_mes2;
            }
         }

         if($num_mes_es <= $num_mes_in){
            if($num_mes_es == $num_mes_in or 1<2 or 7<8){
               if($diaactual > $limite){
                  $recargos = ($diaactual-$limite)*$recargo;
               }
            }else{
               $recargos = 30 *$recargo;
            }
         }
         $subtotal1 = $subtotal + $colegiatura + $recargos;
         $pagos = $subtotal1;   

         //$pagohecho = $nuevoresultado->add_pago($folio, $mes, $fechaactual, $fechalimite, $recargos, $pagos, $matricula, $idAdministrador);

         //echo $folio." | ".$mes." | ".$fechaactual." | ".$fechalimite." | ".$recargos." | ".$pagos." | ".$matricula." | ".$idAdministrador."</br>";

      }
   }
$pagohecho= TRUE;
   if($pagohecho = TRUE){
      //$message = "se realizo el pago";
      //header("Location: pagos.php?alert=success&message=$message");
      $meses = $_POST['mes'];
      $data = array(
         'matricula' => $matricula,
         'mes' => $meses
      );

      ob_start();
      extract($data);
      include 'recibo_pdf.php';
      $html = ob_get_clean();
      //echo $html;
      //exit
      
      $dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("recibo.pdf");
   }else {
      header("Location: index.php");
   }

}