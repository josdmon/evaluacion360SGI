<?php include(HTML_DIR . 'overall/head.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/nav.php'); ?>

<section class="mbr-section mbr-after-navbar">
 <div class="mbr-section__container container mbr-section__container--isolated">

 <?php
 if(isset($_GET['success'])) {
   echo '<div class="alert alert-dismissible alert-success">
     <strong>Realizado!</strong> el subcontratado ha sido modificado.
   </div>';
 }
 ?>

   <div class="row container">
       <div class="pull-right">
         <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
             <a class="mbr-buttons__btn btn btn-danger active" href="?view=subcontratados">GESTIÒN DE SUBCONTRATADOS</a>
         </li></ul></div>
         <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
           <a class="mbr-buttons__btn btn btn-danger" href="?view=subcontratados&mode=add">CREAR SUBCONTRATADOS</a>
         </li></ul></div>
    </div>

       <ol class="breadcrumb">
         <li><a href="?view=index"><i class="fa fa-comments"></i> Subcontratados</a></li>
       </ol>
   </div>

   <div class="row categorias_con_foros">
     <div class="col-sm-12">
         <div class="row titulo_categoria">Gestión de Subcontratados</div>

         <div class="row cajas">
           <div class="col-md-12">
             <?php
             if(false != $_subcontratado) {
              $HTML = '<table class="table table-striped table-hover table-condensed" style="text-align: center;"><thead><tr>
              <th>Código de la Muestra</th>
              <th>proveedor</th>
              <th>Fecha subcontratación</th>
              <th>Fecha recibido</th>
              <th>Fecha entrega</th>
              <th>Aprobado</th>
              <th>P D F</th>
              <th>Actualizar</th>
              </tr></thead>
              <tbody>';
               foreach($_subcontratado as $id_subcontratados => $content_array) {
                 $fecha_db=strtotime($_subcontratado[$id_subcontratados]['fecha_e']); //timesamp
                 $entregado=$_subcontratado[$id_subcontratados]['entregado'];
                 $seis_dias=((60*60)*24)*8; //seis dias
                 $tres_dias=((60*60)*24)*4; //tres dias
                 $un_dias=((60*60)*24)*2; //un dias
                 $dia_de_alerta_un=date('Y-m-d', ($fecha_db-$un_dias)); //que día me debe hacer el alerta
                 $dia_de_alerta_tres=date('Y-m-d', ($fecha_db-$tres_dias)); //que día me debe hacer el alerta
                 $dia_de_alerta_seis=date('Y-m-d', ($fecha_db-$seis_dias)); //que día me debe hacer el alerta
                 $fecha_hoy=date('Y-m-d');
                   $HTML .= '<tr>';
                   if ($fecha_hoy>=$dia_de_alerta_seis AND $entregado == 0) {
                     if ($fecha_hoy>=$dia_de_alerta_un) {
                       $HTML .='<td><div style="background-color: #b50303;">'.$_subcontratado[$id_subcontratados]['codigo'].'</div></td>';
                     }elseif ($fecha_hoy>=$dia_de_alerta_tres) {
                       $HTML .='<td><div style="background-color: #ff845b;">'.$_subcontratado[$id_subcontratados]['codigo'].'</div></td>';
                     }else {
                       $HTML .='<td><div style="background-color: #ffc64c;">'.$_subcontratado[$id_subcontratados]['codigo'].'</div></td>';
                     }
                   }else {
                     $HTML .='<td><div>'.$_subcontratado[$id_subcontratados]['codigo'].'</div></td>';
                   }

                   $HTML .='<td>'.$_prosub[$_subcontratado[$id_subcontratados]['proveedor']]['nombre'].'</td>
                     <td>'.$_subcontratado[$id_subcontratados]['fecha_s'].'</td>
                     <td>'.$_subcontratado[$id_subcontratados]['fecha_r'].'</td>
                     <td>'.$_subcontratado[$id_subcontratados]['fecha_e'].'</td>';
                     if (($_subcontratado[$id_subcontratados]['entregado']) == 1) {
                    $HTML .='<td><button type="button" class="btn btn-default btn-xs active">
                              <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </button>
                       </td>';
                     }else{
                      $HTML .='<td><a href="?view=subcontratados&mode=entregado&id=1&p='.$_subcontratado[$id_subcontratados]['proveedor'].'&f='.$_subcontratado[$id_subcontratados]['fecha_s'].'"><button type="button" class="btn btn-default btn-xs">
                              <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                            </button></a>
                       </td>';
                     }
                     $HTML .='
                     <td ><a target=\"_blank\" href="?view=subcontratados&mode=pdf&p='.$_subcontratado[$id_subcontratados]['proveedor'].'&f='.$_subcontratado[$id_subcontratados]['fecha_s'].'">
                     <button type="button" class="btn btn-default btn-xs">
                             <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                           </button></a>
                     </td>
                     <td><a href="?view=subcontratados&mode=edit&id='.$_subcontratado[$id_subcontratados]['id'].'&p='.$_subcontratado[$id_subcontratados]['proveedor'].'&f='.$_subcontratado[$id_subcontratados]['fecha_s'].'"><button type="button" class="btn btn-default btn-xs">
                             <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                           </button></a>
                     </td>
                   </tr>';
               }
               $HTML .= '</tbody></table>';
             } else {
               $HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ningún registro.</div>';
             }
             echo $HTML;
             ?>
           </div>
         </div>
     </div>
   </div>
 </div>
</section>

<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
</html>
